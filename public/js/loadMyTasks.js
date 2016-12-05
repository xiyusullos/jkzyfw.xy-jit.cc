$('.pagination a').on('click', function (event) {
    event.preventDefault();
    if ( $(this).attr('href') != '#' ) {
        var url = $(this).attr('href');
        $('#panel-myTask').load(url+'&aj=t');
    }
});