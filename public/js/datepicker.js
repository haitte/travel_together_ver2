$(function () {
    $("#datepicker").datepicker({
        minDate: -20,
        changeMonth: true,
        changeYear: true
    });
});

$(".tags").autocomplete({
    source: "home/getmsg"
});
