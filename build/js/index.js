const apiHost = 'http://localhost:4000';

$(document).ready(function(){

    $('.js-autocomplete-services').autoComplete({
        resolverSettings: {
            url: `${apiHost}/api/services`
        }
    });

    $('.js-autocomplete-location').autoComplete({
        resolverSettings: {
            url: `${apiHost}/api/locations`
        }
    });

    $('.js-submit-lead').submit(function(e) {
        e.preventDefault();

        let data = $(this).serialize();
        $(this).trigger('reset');

        $.post(
            `${apiHost}/api/leads`,
            data,
            function( data, status, xhr ) {
                $('.is-invalid').removeClass('is-invalid')
                $('#new-lead-success').modal('show');
            }
        ).fail(function (data) {
            let response = JSON.parse(data.responseText);

            if (data.status === 422) {
                Object.entries(response.errors).forEach(([key,value]) => {
                    $(`[name ^= ${key}]:first`)
                        .addClass('is-invalid')
                        .nextAll('.invalid-feedback')
                        .first()
                        .html(`${value}`)
                })
            }
        });

        return false;
    });

});
