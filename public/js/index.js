$(document).ready(function(){
    $('#getRequest').click(function () {
        $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "home",
                method: "POST",
                success: function (data) {
                    $('#post_plans').html(data.html);
                }
        });
    });

    $('#plansearch').click(function () {
        var search_location = $('#_j_together_mdd_search').val(); 
        var search_date = $('#datepicker').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "",
            method: "POST",
            data: { 's_location': search_location, 's_date': search_date },
            success: function (data) {
                $('#post_plans').html(data.html);
            }
        });

    });
});


