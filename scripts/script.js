$(document).ready(function () {
  
    $.ajax({
      type: "POST",
      url: "Functions/F_getClients.php",
      dataType: "text",
      success: function (response) {
        $("#tableUsers").html(response);
      },
    });

    $.ajax({
      type: "POST",
      url: "Functions/Dashboard/F_getLastLogin.php",
      dataType: "text",
      success: function (response) {
        $("#tableUsersLastLogins").html(response);
      },
    });
  
    $.ajax({
      type: "POST",
      url: "Functions/Dashboard/F_getbestSellingProducts.php",
      dataType: "text",
      success: function (response) {
        $("#tableBestSellingProducts").html(response);
      },
    });

    $.ajax({
      type: "POST",
      url: "Functions/F_getProducts.php",
      dataType: "text",
      success: function (response) {
        $("#tableProducts").html(response);
      },
    });

    $.ajax({
      type: "POST",
      url: "Functions/F_getProductsToDisplay.php",
      dataType: "text",
      success: function (response) {
        $("#displayProducts").html(response);
      },
    });

    $("#categorySearch").click(function () {
      $("#categorySearch").change(function () {
        let category_id_list = $("#categorySearch option:selected").attr("value");

        $.ajax({
          type: "POST",
          url: "Functions/F_getProducts.php",
          dataType: "text",
          data: {
            "category_id_list": category_id_list,
          },
          success: function (response) {
            $("#tableProducts").html(response);
          },
        });
      });
    });

    $("#categorySearch").click(function () {
      $("#categorySearch").change(function () {
        let category_id_list = $("#categorySearch option:selected").attr("value");

        $.ajax({
          type: "POST",
          url: "Functions/F_getProductsToDisplay.php",
          dataType: "text",
          data: {
            "category_id_list": category_id_list,
          },
          success: function (response) {
            $("#displayProducts").html(response);
          },
        });
      });
    });


  $("#districtSearch").click(function () {
    $("#districtSearch").change(function () {
        distrctAjax();
    });
  });


  $("#countySelect").click(function () {
    $("#countySelect").change(function () {
      let county_id_list = $("#countySelect option:selected").attr("value");
      if (county_id_list != -1) {
          $.ajax({
            type: "POST",
            url: "Functions/F_getClients.php",
            dataType: "text",
            data: {
              "county_id_list": county_id_list,
            },
            success: function (response) {
              $("#tableUsers").html(response);
            },
        });
      }
      else if (county_id_list == -1) {
        distrctAjax();
      }
    });
  });




  function distrctAjax() {

    let district_id_list = $("#districtSearch option:selected").attr("value");

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
        $("#tableUsers").html(response);
      },
    });

  }
});


