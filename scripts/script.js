$(document).ready(function () {


    $("#districtSearch").click(function() {
        $("#districtSearch").change(function() {
            var district_id_list = $("#districtSearch option:selected").attr('value');
            $.ajax({
                type: "POST",
                url: "Functions/F_getCountys.php",
                dataType: "text",
                data: {
                    "district_id_list": district_id_list
                },
                success: function (response) {
                    $("#countySelect").html(response);
                }
            });
            //alert(district_id_list);
            $.ajax({
                type: "POST",
                url: "Functions/F_getClients.php",
                dataType: "text",
                data: {
                    "district_id_list": district_id_list
                },
                success: function(response) {
                    $("#tableBody").html(response);
                }
            });
        });			
    });

    $("#countySelect").click(function() {
        $("#countySelect").change(function() {
            var county_id_list = $("#countySelect option:selected").attr('value');
            //alert(district_id_list);
            $.ajax({
                type: "POST",
                url: "Functions/F_getClients.php",
                dataType: "text",
                data: {
                    "county_id_list": county_id_list
                },
                success: function(response) {
                    $("#tableBody").html(response);
                }
            });
        });			
    });

        $.ajax({
            type: "POST",
            url: "Functions/F_getClients.php",
            dataType: "text",
            success: function(response) {
                
                $("#tableBody").html(response);
            }
        });
        
});