/*Парольне око*/
$(function(){
    $(".passEye").append('<span class="eye" title="Показати/сховати пароль"></span>');
 
    $(".passEye .eye").click(function() {
        $(this).toggleClass('openEye');
        var passVal = $(this).prev().prop('type');
        if ( passVal === 'password' ) 
        {
            $(this).prev().prop('type', 'text');  
        }else { 
                $(this).prev().prop('type', 'password'); 
              }
    });
});