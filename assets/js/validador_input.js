$( function() {
    $("#negocio").change( function() {
        if ($(this).val() === "otro") {
            $("#otro").prop("disabled", false);
        } else {
            $("#otro").prop("disabled", true);
        }
    });
});