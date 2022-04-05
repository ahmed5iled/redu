$(document).ready(function () {
    $(".inputs").keypress(function (e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
    });
    $(".inputs").keyup(function () {
        if (this.value.length == this.maxLength) {
            $(this).next('.inputs').focus();
        }

        var key = event.keyCode || event.charCode;

        if (key == 8 || key == 46) {
            $(this).prev("input[type='text']").focus();
        }
    });

    $(".generate").click(function () {
        $.get("/generatePinNumber", function (data, status) {
            $('#input_1').val(data.item[0]);
            $('#input_2').val(data.item[1]);
            $('#input_3').val(data.item[2]);
            $('#input_4').val(data.item[3]);
        });
    })
});
