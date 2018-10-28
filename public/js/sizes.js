$(function () {
    $("#category").change(function () {
        $(".category_values").hide();
        $(".category_values").find('input').removeAttr("required");
        $("#category").find(":selected").each(function() {
            $("#values_" + $(this).val()).show();
            $("#values_input_" + $(this).val()).attr("required", true);
        });
    });
});