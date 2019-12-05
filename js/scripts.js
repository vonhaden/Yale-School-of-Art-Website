$(document).ready(function () {

    //-------------- HOME --------------//
    // Program links on home page
    $('.program').hover(function() {
        $('button', this).toggleClass('btn-blue-hover');
    });


    //-------------- PLUGINS  --------------//
    // Plugin that shows name of file in file section box (uploader page)
    bsCustomFileInput.init();


    //-------------- GALLERY --------------//
    // Set initial Gallery state
    var selected_value = $("input[name='gallery-select']:checked").val();
    if(selected_value == 'new'){
        $('.gallery-existing').addClass('d-none');
        $('.gallery-new').removeClass('d-none');
    } else {
        $('.gallery-existing').removeClass('d-none');
        $('.gallery-new').addClass('d-none');
    }

    // Show and hide New Gallery and existing gallery (uploader page)
    $('input[type=radio][name=gallery-select]').change(function() {
        var selected_value = $("input[name='gallery-select']:checked").val();
        if(selected_value == 'new'){
            $('.gallery-existing').addClass('d-none');
            $('.gallery-new').removeClass('d-none');
        } else {
            $('.gallery-existing').removeClass('d-none');
            $('.gallery-new').addClass('d-none');
        }
    });


    //-------------- CALENDAR --------------//
    // Add event to calendar
    $('.save').click(function() {
        var day = $('#day').val();
        var name = $('#name').val();
        var html =  '<div class="event">' +
                    '<p>' + name + '</p>' +
                    '</div>';
        $(".day-number:contains('" + day + "')").after(html);
        $('.modal').modal('hide');
    });

    // Click specific day to bring up modal and fill in day and month
    $('.cal-day').click(function () {
        var day = $(this).find('.day-number').text();
        console.log(day);
        $('.modal').modal('show');
        $('#day').val(day);
        $('#month').val('December');
    });

});