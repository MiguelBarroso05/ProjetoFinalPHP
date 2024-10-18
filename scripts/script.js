$(document).ready(function () {
  $("#districtSearch").click(function () {
    $("#districtSearch").change(function () {
        distrctAjax();
    });
  });

  $("#countySelect").click(function () {
    $("#countySelect").change(function () {
      var county_id_list = $("#countySelect option:selected").attr("value");
      if (county_id_list != -1) {
          $.ajax({
            type: "POST",
            url: "Functions/F_getClients.php",
            dataType: "text",
            data: {
              "county_id_list": county_id_list,
            },
            success: function (response) {
              $("#tableBody").html(response);
            },
        });
      }
      else if (county_id_list == -1) {
        distrctAjax();
      }
    });
  });

  $.ajax({
    type: "POST",
    url: "Functions/F_getClients.php",
    dataType: "text",
    success: function (response) {
      $("#tableBody").html(response);
    },
  });
  function distrctAjax() {
    var district_id_list = $("#districtSearch option:selected").attr("value");
    $.ajax({
      type: "POST",
      url: "Functions/F_getCountys.php",
      dataType: "text",
      data: {
        "district_id_list": district_id_list,
      },
      success: function (response) {
        $("#countySelect").html(response);
      },
    });
    
    $.ajax({
      type: "POST",
      url: "Functions/F_getClients.php",
      dataType: "text",
      data: {
        "district_id_list": district_id_list,
      },
      success: function (response) {
        $("#tableBody").html(response);
      },
    });
  }
});
