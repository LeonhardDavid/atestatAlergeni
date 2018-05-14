function checkResolution() {
    if ($(window).innerWidth() <= 767) {
        replaceImagePaths("mobile");
    }
}


function replaceImagePaths(resolution) {
    // Switch images
    $('img.swap').each(function(){
        var imagePath = $(this).attr('src');

        $(this).attr('src', imagePath.replace(/desktop/, resolution));//with the right regex you can do it all in one

    });//was missing the  ");"
}

$(window).resize(function() {
    checkResolution();
});

$(function(){
    checkResolution();
});
