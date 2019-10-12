$(document).ready(function () {

    // Countries
    var field_arr = new Array("Field Category", "Talent/art", "Passion/work");

    $.each(field_arr, function (i, item) {
        $('#field').append($('<option>', {
            value: i,
            text: item,
        }, '</option>'));
    });

    // domains
    var d_a = new Array();
    d_a[0] = "Select Field";
    d_a[1] = "singing|photography";
    d_a[2] = "pandit|labour";




    $('#field').change(function () {
        var c = $(this).val();
        var domain_arr = d_a[c].split("|");
        $('#domain').empty();
        if (c == 0) {
            $('#domain').append($('<option>', {
                value: '0',
                text: 'Select Field',
            }, '</option>'));
        } else {
            $.each(domain_arr, function (i, item_domain) {
                $('#domain').append($('<option>', {
                    value: item_domain,
                    text: item_domain,
                }, '</option>'));
            });
        }

    });

    $('#domain').change(function () {
        var s = $(this).val();
        if (s == 'Select Field') {
            $('#city').empty();
            $('#city').append($('<option>', {
                value: '0',
                text: 'Select City',
            }, '</option>'));
        }
        var city_arr = c_a[s].split("|");
        $('#city').empty();

        $.each(city_arr, function (j, item_city) {
            $('#city').append($('<option>', {
                value: item_city,
                text: item_city,
            }, '</option>'));
        });


    });
});