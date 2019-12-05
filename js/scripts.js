$(document).ready(function () {

    //-------------- HOME --------------//
    // Program links on home page
    $('.program').hover(function() {
        $('button', this).toggleClass('btn-blue-hover');
    });

    // make the logo a link
    $('.logo').click(function () {
        window.location.href = 'index.php';
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


    //-------------- COURSES --------------//
    // Course row as link
    $('.course').click(function () {
       var url = $(this).find('a').attr('href');
       window.location.href = url;
    });

    //-------------- SMOOTH SCROLL --------------//
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });


});