/**
 * Created by Wizlight on 18.03.2015.
 */
$(function() {
    var sideBarHeight =document.getElementById('titlesBlock').getBoundingClientRect().bottom - document.getElementById('titlesBlock').getBoundingClientRect().top+100;
    var mainBlockCoord =$(window).scrollTop()+document.getElementById('titlesBlock').getBoundingClientRect().bottom;

    $(window).scroll(function() {
        if (($(window).scrollTop() > mainBlockCoord-56) && ($(window).scrollTop()+sideBarHeight+100) < (document.getElementById('subViewLessons').getBoundingClientRect().top + $(window).scrollTop())) {
            document.getElementById('sidebarLesson').style.display='block';
            $("#sidebarLesson").stop().animate({
                marginTop: $(window).scrollTop() -  mainBlockCoord
            },0);
        } else {
            document.getElementById('sidebarLesson').style.display='none';
            $("#sidebarLesson").stop().animate({
                marginTop: 0
            },0);
        };
    });
});