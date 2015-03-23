/**
Зникає/появляється форма навчання при виборі ролі
 */
$(document).ready(function(){
    $('.radiolabelRole input[type="radio"]').click(function(){
        var roles=$(this).val();
        if(roles=='1'){
            document.getElementById('rowEducForm').style.display='none';
        } else {
            document.getElementById('rowEducForm').style.display='block';
        }
    });
});