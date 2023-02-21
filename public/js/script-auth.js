// make toogle password when id = tooglePassword clicked set class i fas fa-eye-slash to fas fa-eye
$(document).ready(function () {
    $("#tooglePassword").click(function () {
        if ($("#password").attr("type") == "password") {
            $("#password").attr("type", "text");
            $("#tooglePassword").attr(
                "class",
                "fas fa-eye fa-sm position-absolute mt-2 pt-1 mr-2 cursor-pointer text-secondary right-0"
            );
        } else {
            $("#password").attr("type", "password");
            $("#tooglePassword").attr(
                "class",
                "fas fa-eye-slash fa-sm position-absolute mt-2 pt-1 mr-2 cursor-pointer text-secondary right-0"
            );
        }
    });
});
