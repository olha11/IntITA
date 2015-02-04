<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Lesson';
$this->breadcrumbs=array(
    'lesson',
);
?>

<div id="main">


    <div class="left">

        <div class="heading">
            <div class="image">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/lesson_logo.png">
            </div>
            <div>
                <p>
Модуль: <b>Мова програмування PHP</b><br />
                    Урок 3: <b>Змінні та типи данних</b><br />
                    Тип: <i>лекція</i> <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/dudka.png">    Тривалість: <i>40 хв</i> <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/clock.png"><br/>
                    (4 з 6 занятть)<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/medal.png"><br/>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress_valid.png">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress_valid.png">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress_valid.png">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress_valid.png">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress.png">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress.png">
                </p>
            </div>
        </div>
    </div>
    <div class="right">

        <div class="heading" >
            <div class="image">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/teacher.jpg">
            </div>
            <div>
                <p>
                    <span style="color: darkblue">Викладач:</span> <br/><br/>
                    Орест Остапович Бендер<br />
                    orest@intita.org, orest@gmail.com<br/>
                    /067/ 777 77 77, /097/ 777 77 77<br/>
                    skype: <b>orest.ostapovich</b><br/>

                </p>
            </div>
        </div>
    </div>
    <hr>
    <div class="left">
        <div id="lesson">
            <h1>Змінні та типи данних в PHP</h1>
            <p>
                <span style="font-size: large; ">Зміст</span> <a href="/">(показати) </a> <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/arrow_open.png">
            </p>
            <p>
                <b>Змінна</b> - це літературно-символьне подання частини інформації, яка перебуває в пам’яті WEB-сервера.<br/>
                <br/>
                В php змінна виглядає ось так:
            </p>
            <div class="code">
$names = <span style="color: #ff0000"> "я інформація в пам’яті тчк" </span> ;
            </div>
            <p>
                <b>Імена змінних</b><br/><br/>
                Будь-яка змінна в PHP має ім’я, що починається зі знаку $, наприклад $variable.
При такому способы формування імен змінних їх дуже легко відрізнити від іншого коду.
Якщо в інших мовах іноді може виникати плутанина з тим що при першому погляді на код
                не завжди ясно - де тут змінні, а де функції, то в PHP це питання навіть не постає.
Наприклад послання на змінну по її імені, що зберігається в іншій змінній:
            </p>
            <div class="code">
$name = value;<br/>
                $value = 5;<br/>
                echo $$name;
            </div>
            <p>
Змінні в PHP представляються у вигляді рядка, що починається знаком доллара, а за ним слідує ім’я
                змінної. Ім’я змінної може складатись з латинських літер, звичайних цифр і деяких символів
                або комбінацій літер, цифр і символів.<br/><br/>

                <b>Всі змінні діляться на певні типи:</b><br/><br/>

                Мова JavaScript містить шість типів данних <b>Undefined</b>(невизначений), <b>Null</b>(нульовий),
                <b>String</b>(строковий), <b>Boolean</b>(логічний), <b>Number</b>(числовий),
                <b>Object</b>(об’єктний). Ця відносно невелика кількість типів дозволяє, тим не менше,
                створювати повноцінні сценарії для використання багатьох функцій.
            </p>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/button_instruction_line.png">
            <div id="instruction">

                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/gears.png">


                <div>
                    <ol>
                        <li>
On line 7 set <span style="color: #339933; font-weight: bold">
    $</span><span style="color: darkblue; font-weight: bold">items</span>
to the number greater then 5. Make sure to put a semicolon at the and of the line.
                        </li>
                        <li>
On line 9, edite the state condition so that your program will be print
    out text like this <span style="background: #ff0000; color: #ffffff; font-weight: bold">
    You have10% discount!
                            </span>
                        </li>
                    </ol>

                </div>
            </div>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/button_task_line.png">
            <div id="task">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/schedule.png">
                <div>
                    <ol>
                        <li>
On line 7 set equal to a number greater than 5. Make sure to put a
                            semicolon at the and of the line. <br/><br/>
                            <a href="/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/arrow.png">
    Відповісти</a><br/><br/>
                        </li>
                        <li>
An if statement is made up of the if keyword, a condition like we've seen
                            before <span style="color: #339933; font-weight: bold">
                                $</span><span style="color: darkblue; font-weight: bold">terms</span>,
                            and a pair of curly braces <span style="color: darkblue; font-weight: bold">{}</span>.
                            If the answer to the condition is yes, the code inside the curly braces will run.<br/><br/>
                            <a href="/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/arrow.png">
                            Відповісти</a><br/><br/>
                        </li>
                        <li>
                            Резиновая по ширине, изменяется с изминением окна <span style="color: #339933; font-weight: bold">
                                $</span><span style="color: darkblue; font-weight: bold">terms</span>, браузера,
                            или с расширением окна.
                        </li>
                    </ol>
                    <form>
                        <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/pricol.png"></p>
                        <p><textarea rows="10" cols="45" name="text"></textarea></p>
                        <p style="text-align: end; padding-right: 15px;"><input type="image" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/button_answer.png"</p>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="right">
        <div id="video">
            <h3 style="color: darkblue">Відео 1</h3>
            <iframe width="440" height="300"
                    src="http://www.youtube.com/embed/XGSy3_Czz8k">
            </iframe>
        </div>
        <h3 style="color: darkblue">Зразок коду 1</h3>
        <div id="code_example">
            <ol>
                <li>  &lt;html&gt;<br/>  </li>
                <li>  &nbsp;&nbsp;&nbsp;&lt;head&gt;<br/>  </li>
                <li>  &nbsp;&nbsp;&nbsp;&lt;/head&gt;<br/>  </li>
                <li>  &nbsp;&nbsp;&nbsp;&lt;body&gt;<br/>  </li>
                <li>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;<br/>  </li>
                <li>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;?php<br/>  </li>
                <li>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$items = //set this to a number greater than 5<br/>  </li>
                <li> </li>
                <li>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($items&lt;5){<br/>  </li>
                <li>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;You get a 10% discount&quot;;<br/>  </li>
                <li>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>  </li>
                <li>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?&gt;<br/>  </li>
                <li>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/>  </li>
                <li>  &nbsp;&nbsp;&nbsp;&lt;/body&gt;<br/>  </li>
                <li>   &lt;/html&gt;<br/>  </li>

            </ol>
        </div>

        <span style="font-size: large; color: darkblue ">Зразок коду 2</span> <a href="/">(показати) </a> <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/arrow_open.png">

        <p style="margin-top: 50px; "><i>Вітаємо, ви пройшли урок!<br/>
                або:<br/>
                для завершення уроку вам необхідно виконати завдання 5 та 8.<br/>
                Виділити виконані та невиконані.
            </i></p>
    </div>
    <hr>
    <div class="left">
        <p>
            Урок 2: <b>Попередній урок PHP</b><br/>
            Тип: <i>практична робота</i> <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/practice_work.png">
            Тривалість: <i>40 хв</i> <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/clock.png"><br/><br/>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress_valid.png">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress_valid.png">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress_valid.png">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress_valid.png">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress_valid.png">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress_valid.png">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/medal_valid.png"><br/><br/>
            <a href="/"><<Переглянути знову попередній урок</a>
        </p>

    </div>
    <div class="right">
        <p style="border-left: 1px solid #d3d3d3; padding-left: 15px;">
            Урок 4: <b>Наступний урок PHP</b><br/>
            Тип: <i>практична робота</i> <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/practice_work.png">
            Тривалість: <i>40 хв</i> <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/clock.png"><br/><br/>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress.png">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress.png">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress.png">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress.png">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress.png">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress.png">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/medal.png"><br/><br/>
            <a href="/">Перейти(кнопка якщо пройшов)>></a>
        </p>
    </div>

</div>