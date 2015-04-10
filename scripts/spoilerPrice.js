/**
 Спойлер змісту і іншого контента
 */
$(document).ready(function(){
    $('.spoilerLinks').click(function(){
        if ($('.spoilerBody')[0].style.display=='block'){
            $('.spoilerTriangle').text("\u25BC");
        }else{
            $('.spoilerTriangle').text("\u25B2");
        }
        $(this).next('.spoilerBody').toggle('normal');
        return false;
    });
});