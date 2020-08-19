$(function () {
    $('html').addClass('dom-loaded');
    
    $("#searchField").on('keyup', a => {
        var classSearch = $("#searchField").val().toLowerCase();

        console.log(classSearch);
        if (classSearch == '') {
            console.log('show all');
            $('.searchBlock').show();
        } else {
            $(`.searchBlock:not([class*="${classSearch}"])`).hide();

            $(`.searchBlock[class*="${classSearch}"]`).show();
        }
        
    })
});


