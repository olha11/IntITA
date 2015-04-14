<p class="tabHeader">Розклад</p>

<table class="exmCons">
    <tr>
        <td>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/exam.png"/>
        </td>
        <td>
            <span onclick="changeTabs()">Екзамени</span>
        </td>
        <td>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/consultation.png"/>
        </td>
        <td>
            <span id='consult' onclick="changeTabs()">Консультації</span>
        </td>
        <td>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/exam.png"/>
        </td>
        <td>
            <span onclick="changeTabs()">індивідуальний модульний проект</span>
        </td>
        <td>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/consultation.png"/>
        </td>
        <td>
            <span id='consult' onclick="changeTabs()">командний дипломний проект</span>
        </td>
    </tr>
</table>

<table class="timeTable">
    <tr>
        <td>
            <div>Тип</div>
        </td>
        <td>
            <div>Дата</div>
        </td>
        <td>
            <div>Час</div>
        </td>
        <td>
            <div>Викладач</div>
        </td>
        <td>
            <div>Тема</div>
        </td>
    </tr>
    <tr>
        <td>
            <div>Е</div>
        </td>
        <td>
            <div>14 березня 2015</div>
        </td>
        <td>
            <div>20:15</div>
        </td>
        <td>
            <div>Лариса Доліна</div>
        </td>
        <td>
            <div>Екзамен по програмному проектуванню</div>
        </td>
    </tr>

    <tr>
        <td>
            <div>Е</div>
        </td>
        <td>
            <div>15 березня 2015</div>
        </td>
        <td>
            <div>18:15</div>
        </td>
        <td>
            <div>Панкрат Щур</div>
        </td>
        <td>
            <div>Проектування інтерфейсу</div>
        </td>
    </tr>

    <tr>
        <td>
            <div>Е</div>
        </td>
        <td>
            <div>17 березня 2015</div>
        </td>
        <td>
            <div>13:15</div>
        </td>
        <td>
            <div>Лариса Доліна</div>
        </td>
        <td>
            <div>Екзамен по циркуляції пива в організмі програміста</div>
        </td>
    </tr>

    <tr>
        <td>
            <div>Е</div>
        </td>
        <td>
            <div>19 березня 2015</div>
        </td>
        <td>
            <div>15:15</div>
        </td>
        <td>
            <div>Лариса Доліна</div>
        </td>
        <td>
            <div>Екзамен на право водіння інвалідною коляскою</div>
        </td>
    </tr>

    <tr>
        <td>
            <div>Е</div>
        </td>
        <td>
            <div>20 березня 2015</div>
        </td>
        <td>
            <div>23:15</div>
        </td>
        <td>
            <div>Лариса Доліна</div>
        </td>
        <td>
            <div>Екзамен на право екзаменування</div>
        </td>
    </tr>

    <tr>
        <td>
            <div>Е</div>
        </td>
        <td>
            <div>21 березня 2015</div>
        </td>
        <td>
            <div>23:15</div>
        </td>
        <td>
            <div>Лариса Доліна</div>
        </td>
        <td>
            <div>Екзамен на право водіння дитячою коляскою</div>
        </td>
    </tr>

    <tr>
        <td>
            <div>Е</div>
        </td>
        <td>
            <div>22 березня 2015</div>
        </td>
        <td>
            <div>11:15</div>
        </td>
        <td>
            <div>Лариса Доліна</div>
        </td>
        <td>
            <div>Екзамен на право водіння дитячою коляскою</div>
        </td>
    </tr>
</table>

<script>
    function changeTabs(){
            if($('#timetable')[0].style.display=='block'){
                alert('dddd');
                document.getElementById(exm).disabled = true;
                document.getElementById(exm).className = "selectedTab";
                document.getElementById(consult).disabled = false;
                document.getElementById(consult).className = "";
            }
    }
</script>

