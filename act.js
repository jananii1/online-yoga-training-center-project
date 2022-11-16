$(function (){
    $('a').each(function(){
        if ($(this).prop('href') === window.location.href) {
            $(this).css({"background": "linear-gradient(to left, darkgreen 0, darkgreen 66%, darkgreen 100%)", "border-radius": "0px"});

        }
    })
})