/**
 Спойлер змісту і іншого контента
 */
$(document).ready(function(){
    $('.spoilerLinks').click(function(){
        var nameSpoiler = $(this).children("span:first").text();
        if(nameSpoiler=="(показати)"){
            $(this).children("span:first").text("(приховати)");
            $(this).children("span:last").text("\u25B2");
        } else if(nameSpoiler=="(приховати)"){
            $(this).children("span:first").text("(показати)");
            $(this).children("span:last").text("\u25BC");
        }
        $(this).next('.spoilerBody').toggle('normal');
        return false;
    });
});