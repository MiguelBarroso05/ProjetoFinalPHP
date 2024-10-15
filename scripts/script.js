$(document).ready(function () {
    $("#districtSelect").change(function () {
        var district_id = $("#districtSelect option:selected").attr('value'); 
        console.log(district_id);

        $.ajax({
            type: "POST",
            url: "Functions/getCountys.php",
            dataType: "text",
            data: {
                "district_id": district_id
            },
            success: function (response) {
                $("#countySelect").html(response);
            }
        });
    });
});