$(document).ready(function () {
    $(".fa-volume-mute").click(function () { 
        $(".fa-volume-up").removeClass("d-none");
        $(this).addClass("d-none");
        $("video").prop('muted', false)
    });

    $(".fa-volume-up").click(function () { 
        $(".fa-volume-mute").removeClass("d-none");
        $(this).addClass("d-none");
        $("video").prop('muted', true)
    });
});