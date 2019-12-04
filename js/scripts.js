$(document).ready(function () {
    // Program links on home page
    $('.program').hover(function() {
        $('button', this).toggleClass('btn-blue-hover');
    });

    // Plugin that shows name of file in file section box (uploader page)
    bsCustomFileInput.init();

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
});