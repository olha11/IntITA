/**
 * Created by Wizlight on 07.04.2015.
 */
function extReg(){
    reg=document.getElementById('regCheckbox');
    if (reg.checked)
    $("#studentreg-form").off('submit')
    else $("#studentreg-form").on('submit')
    }