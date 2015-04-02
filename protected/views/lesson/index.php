<!-- lesson style -->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lessonsStyle.css" />
<!-- lesson style -->
<!-- Підсвітка синтаксису-->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/scripts/syntaxhighlighter/prettify.css" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/syntaxhighlighter/prettify.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/syntaxhighlighter/prettify.init.js"></script>
<!-- Підсвітка синтаксису -->
<!-- Підключення BBCode WysiBB -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/wysibb/jquery.wysibb.min.js"></script>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/scripts/wysibb/theme/default/wbbtheme.css" type="text/css" />
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/wysibb/lang/ua.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/wysibb/BBCode.js"></script>
<!-- Підключення BBCode WysiBB -->
<!-- Spoiler -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/SpoilerContent.js"></script>
<!-- Spoiler -->
<!--Sidebar-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/SidebarLesson.js"></script>
<!--Sidebar-->
<?php
/* @var $this LessonController */
/* @var $model LessonTop */



$this->breadcrumbs=array(
    Yii::t('breadcrumbs', 'Courses')=>Yii::app()->request->baseUrl."/courses",'Модуль PHP'=>Yii::app()->request->baseUrl."/course",'Заняття 2: Змінні та типи данних в PHP',
);
?>

<!-- lesson top -->
<?php
//Object Lecture, you can use designer. Ther is only one object, thats why I dont use it.))
$lecture3=new LessonTop();

$lecture3->lectureImageMain=Yii::app()->request->baseUrl.'/css/images/lectureImage.png';
$lecture3->lectureModule='Мова програмування PHP';
$lecture3->lectureNumber=3;
$lecture3->lectureNameText='Змінні та типи данних в PHP';
$lecture3->lectureTypeText='лекція';
$lecture3->lectureTypeImage=Yii::app()->request->baseUrl.'/css/images/lectureType.png';
$lecture3->lectureTimeText='40 хв';
$lecture3->lectureMaxNumber=6;
$lecture3->lectureIconImage=Yii::app()->request->baseUrl.'/css/images/medalIcoFalse.png';



//Oblect Teacher, you can use designer
$teacher=new TeachersTemp();

$teacher->foto_url=Yii::app()->request->baseUrl.'/css/images/teacherImage.png';
$teacher->first_name='Іванов Іванов ВгадайПоБатькові';
$teacher->email='ivanov@intita.org, ivanov@gmail.com';
$teacher->tel='/067/56-569-56, /093/26-45-65';
$teacher->skype='ivanov.ivanov';
$teacher->readMoreLink='https://www.google.com.ua/';
$teacher->title = 'Викладач';
$teacher->linkName = 'детальніше';

?>


<!-- Print Class Lecture -->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lectureStyles.css" />
<div class="lectureMainBlock" > <!-- Start Main Block -->

    <div class="lectureImageMain">
        <img src="<?php echo $lecture3->lectureImageMain; ?>">
    </div>
    <div class="titlesBlock" id="titlesBlock">
        <ul>
            <li>
                <?php echo 'Курс: ';?>
                <span>Програмування для чайників</span>(мова:UA)
            </li>
            <li>
                <?php echo 'Модуль: ';?>
                <span><?php echo $lecture3->lectureModule; ?></span>
            </li>
            <li><?php echo 'Заняття '.$lecture3->lectureNumber.': ';?>
                <span><?php echo $lecture3->lectureNameText; ?></span>
            </li>
            <li><?php echo 'Тип: ';?>
                <div id="lectionTypeText"><?php echo $lecture3->lectureTypeText; ?></div>
                <div id="lectionTypeImage"><img src="<?php echo $lecture3->lectureTypeImage; ?>"></div>
            </li>
            <li><div id="subTitle"><?php echo 'Тривалість: ';?></div>
                <div id="lectureTimeText"><?php echo $lecture3->lectureTimeText; ?></div>
                <div id="lectureTimeImage"><img src="<?php echo $lecture3->lectureTimeImage; ?>"></div>
            </li>
            </br>
            <li>
                <?php echo '('.$lecture3->lectureNumber.' з '.$lecture3->lectureMaxNumber.' занять)'; ?>
                <div id="iconImage">
                    <img src="<?php echo $lecture3->lectureIconImage ;?>">
                </div>
            </li>
            <div id="counter">
                <?php
                for ($i=0; $i<$lecture3->lectureNumber;$i++){ ?>
                    <img src="<?php echo $lecture3->lectureOverlookedImage;?>">
                <?php }
                for ($i=0; $i<$lecture3->lectureMaxNumber-$lecture3->lectureNumber;$i++){ ?>
                    <img src="<?php echo $lecture3->lectureUnwatchedImage;?>">
                <?php } ?>
            </div>
        </ul>

    </div>

    <!-- Print Class Teacher -->

    <div class="teacherBlock">
        <img src="<?php echo $teacher->foto_url; ?>">
        <a href="<?php echo Yii::app()->request->baseUrl.$teacher->readMoreLink; ?>">персональна сторінка &#187;</a>
                <span>
                <ul>
                    <li> <div class="teacherTitle">
                            <?php echo $teacher->title; ?></div>
                    </li>
                    <li>
                        <?php echo $teacher->first_name;?>
                    </li>
                    <li>
                        <?php echo $teacher->email; ?>
                    </li>
                    <li>
                        <?php echo $teacher->tel; ?>
                    </li>
                    <li>

                        <?php echo 'skype: '?><div id="teacherSkype"><?php echo $teacher->skype; ?>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo $teacher->readMoreLink; ?>">
                            <?php echo $teacher->linkName; ?>
                        </a>
                    </li>
                    <p><a href="#"><input type="submit" value="Запланувати консультацію"></a></p>
                </ul>
                </span>
    </div>

</div> <!-- Finish Main Block -->

<!-- lesson main part -->
<!--Перша частина-->
<div class="lessonBlock" id="lessonBlock">
<!--navigation vertical-->
<div id="sidebarLesson">
    <div class="titlesBlock" id="titlesBlock">
        <ul>
            <li>
                <?php echo 'Курс: ';?>
                <span>Програмування для чайників</span>(мова:UA)
            </li>
            <li>
                <?php echo 'Модуль: ';?>
                <span><?php echo $lecture3->lectureModule; ?></span>
            </li>
            <li><?php echo 'Заняття '.$lecture3->lectureNumber.': ';?>
                <span><?php echo $lecture3->lectureNameText; ?></span>
            </li>
            <li><?php echo 'Тип: ';?>
                <div id="lectionTypeText"><?php echo $lecture3->lectureTypeText; ?></div>
                <div id="lectionTypeImage"><img src="<?php echo $lecture3->lectureTypeImage; ?>"></div>
            </li>
            <li><div id="subTitle"><?php echo 'Тривалість: ';?></div>
                <div id="lectureTimeText"><?php echo $lecture3->lectureTimeText; ?></div>
                <div id="lectureTimeImage"><img src="<?php echo $lecture3->lectureTimeImage; ?>"></div>
            </li>
            </br>
            <li>
                <?php echo '('.$lecture3->lectureNumber.' з '.$lecture3->lectureMaxNumber.' занять)'; ?>
                <div id="iconImage">
                    <img src="<?php echo $lecture3->lectureIconImage ;?>">
                </div>
            </li>
            <div id="counter">
                <?php
                for ($i=0; $i<$lecture3->lectureNumber;$i++){ ?>
                    <img src="<?php echo $lecture3->lectureOverlookedImage;?>">
                <?php }
                for ($i=0; $i<$lecture3->lectureMaxNumber-$lecture3->lectureNumber;$i++){ ?>
                    <img src="<?php echo $lecture3->lectureUnwatchedImage;?>">
                <?php } ?>
            </div>
        </ul>
    </div>
    <p><a href="skype:olha11olha?chat"><input type="submit" value="Skype"></a></p>
    <p><a href="#"><input type="submit" value="Hangout"></a></p>
</div>
<!--navigation vertical-->
<div class="lessonText">
    <h1 class="lessonTheme">Змінні та типи даних в PHP </h1>
    <span class="listTheme">Зміст </span><span class="spoilerLinks"><span class="spoilerClick">(показати)</span><span class="spoilerTriangle"> &#9660;</span></span>

    <div class="spoilerBody">
        <p><a href="#Частина 1: Типи змінних та перемінних">Частина 1: Типи змінних та перемінних</a></p>
        <p><a href="#Частина 7: Типи данних та математичний аналіз">Частина 7: Типи данних та математичний аналіз</a></p>
    </div>

    <h1 class="lessonPart">Вступ</h1>
    <span class="colorBlack">Змінна</span> - це літерно-символьне подання частини інформації, яка перебуває в памяті Web-сервера. В php змінна виглядає ось так:
    <div class="lessonCode"><p><span class="colorGreen">$</span>names=<span class="colorO">"Я інформація в памяті тчк"</span>;</p></div>
    <span class="colorBlack">Імена змінних</span>
    <p>Будь-яка змінна в РНР має ім'я, що починається із знаку $, наприклад Svariable. При такому способі формування імен змінних їх дуже легко відрізнити від іншого коду. Якщо в інших мовах інколи може виникати плутанина з тим, що при першому погляді на код не завжди ясно - де тут змінні, а де функції, то в РНР це питання навіть не постає. Наприклад, ссилка на змінну по її імені, що зберігається в іншій змінній:</p>
    <h3><span class="subChapter">Відео</span></h3>
    <iframe width="633" height="390" src="https://www.youtube.com/embed/L3Mg6lk6yyA" frameborder="0" allowfullscreen></iframe>

    <a name="Частина 1: Типи змінних та перемінних"></a>
    <h1 class="lessonPart">Частина 1: Типи змінних та перемінних</h1>
    <span class="colorBlack">Змінна</span> - це літерно-символьне подання частини інформації, яка перебуває в памяті Web-сервера. В php змінна виглядає ось так:
    <div class="lessonCode"><p><span class="colorGreen">$</span>names=<span class="colorO">"Я інформація в памяті тчк"</span>;</p></div>
    <span class="colorBlack">Імена змінних</span>
    <p>Будь-яка змінна в РНР має ім'я, що починається із знаку $, наприклад Svariable. При такому способі формування імен змінних їх дуже легко відрізнити від іншого коду. Якщо в інших мовах інколи може виникати плутанина з тим, що при першому погляді на код не завжди ясно - де тут змінні, а де функції, то в РНР це питання навіть не постає. Наприклад, ссилка на змінну по її імені, що зберігається в іншій змінній:</p>
    <div class="lessonCode">
        <p>$names="value";</p>
        <p>$names=5;</p>
        <p>echo $$name;</p>
    </div>
    <p>Змінні в РНР представляються у вигляді рядка, що починається знаком долара, а за ним слідує ім'я змінної. Ім'я змінної може складатися з латинських літер, звичайних цифр і деяких символів або комбінацій літер, цифр і символів.</p>
    <span class="colorBlack">Всі змінні діляться на певні типи:</span>
    <p>Мова JavaScript містить шість типів даних <span class="colorBlack">Undefîned</span> (невизначений), <span class="colorBlack">Null</span> (нульовий), <span class="colorBlack">Вооlеаn</span> (логічний), <span class="colorBlack">String</span> (строковий), <span class="colorBlack">Number</span> (числовий) і <span class="colorBlack">Object</span> (об'єктний). Ця відносно невелика кількість типів дозволяє, тим не менше, створювати повноцінні сценарії для виконання багатьох функцій.</p>
    <span class="subChapter">Зразок коду 1:</span>
<pre class="prettyprint linenums">
&lt;html&gt;
  &lt;head&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;p&gt;
      &lt;?php
      $items= //Set this to a number greater than 5! Type the string &quot;Arr, matey!&quot;

      if ($items&lt;5) {
      echo &quot;You get a 10% discount!&quot;;
      }
    ?&gt;
    &lt;/p&gt;
 &lt;/body&gt;
&lt;/html&gt;
</pre>
    <span class="subChapter">Зразок коду 2  </span><span class="spoilerLinks"><span class="spoilerClick">(показати)</span><span class="spoilerTriangle"> &#9660;</span></span>
    <div class="spoilerBody">
<pre class="prettyprint linenums">
&lt;html&gt;
  &lt;head&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;p&gt;
      &lt;?php
      $items= //Set this to a number greater than 5! Type the string &quot;Arr, matey!&quot;

      if ($items&lt;5) {
      echo &quot;You get a 10% discount!&quot;;
      }
    ?&gt;
    &lt;/p&gt;
 &lt;/body&gt;
&lt;/html&gt;
</pre>
    </div>
    <h3><span class="subChapter">Відео 1.</span></h3>
    <iframe width="633" height="390" src="https://www.youtube.com/embed/L3Mg6lk6yyA" frameborder="0" allowfullscreen></iframe>
    <div class="lessonInstr">
        <img class="lessonBut" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/lessButton.png">
        <div class="lessonButName" unselectable = "on">Інструкція</div>
        <div class="lessonLine"></div>
        <div class="lessonBG">
            <div class="instrTaskImg">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/instr.png">
            </div>
            <div class="instrTaskText">
                <ol>
                    <li>On line 7, set <span class="colorBP"><span class="colorGreen">$</span>terms</span> equal to a number greater than 5. Make sure to put a semicolon at the end of the line.</li>
                    <li>On line 9, edit the state condition so that your program will be out Some expressions return a ' logical value": TRUE or FALSE, text like thise:<span class="colorAlert">You get a 10% discount!</span></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="lessonTask">
        <img class="lessonBut" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/lessButton.png">
        <div class="lessonButName" unselectable = "on">Завдання 1</div>
        <div class="lessonLine"></div>
        <div class="lessonBG">
            <div class="instrTaskImg">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/task.png">
            </div>
            <div class="instrTaskText">
                <ol>
                    <li>On line 7, set equal to a number greater than 5. Some expressions return a "logical value": TRUE or FALSE. Make sure to put a semicolon at the end of the line.</li>
                    <a href="#"> <span class="colorP"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/arrow.png"> Відповісти</span></a>
                    <li>An if statement is made up of the if keyword, a condition like we've seen before <span class="colorBP"><span class="colorGreen">$</span>terms</span>, and a pair of curly braces <span class="colorBP">{}</span>. If the answer to the condition is yes, the code inside the curly will run.</li>
                    <a href="#"><span class="colorP"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/arrow.png"> Відповісти</span></a>
                    <li>Резиновая по ширине (изменяется с Some expressions return a "logical value": TRUE or FALSE, изменением окна <span class="colorBP"><span class="colorGreen">$</span>terms</span> браузера или с разрешением экрана)</li>
                </ol>
                <div class="BBCode">
                    <form action="" method="post">
                        <textarea class="editor"></textarea>
                        <input  id="lessonTask1" type="submit" value="Відповісти">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a name="Частина 7: Типи данних та математичний аналіз"></a>
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/borderLesson.png">
</div>
<!--Друга частина-->
<div class="lessonText">
    <h1 class="lessonPart">Частина 7: Типи данних та математичний аналіз</h1>
    <span class="colorBlack">Змінна</span> - це літерно-символьне подання частини інформації, яка перебуває в памяті Web-сервера. В php змінна виглядає ось так:
    <div class="lessonCode"><p><span class="colorGreen">$</span>names=<span class="colorO">"Я інформація в памяті тчк"</span>;</p></div>
    <span class="colorBlack">Імена змінних</span>
    <p>Будь-яка змінна в РНР має ім'я, що починається із знаку $, наприклад Svariable. При такому способі формування імен змінних їх дуже легко відрізнити від іншого коду. Якщо в інших мовах інколи може виникати плутанина з тим, що при першому погляді на код не завжди ясно - де тут змінні, а де функції, то в РНР це питання навіть не постає. Наприклад, ссилка на змінну по її імені, що зберігається в іншій змінній:</p>
    <div class="lessonCode">
        <p>$names="value";</p>
        <p>$names=5;</p>
        <p>echo $$name;</p>
    </div>
    <p>Змінні в РНР представляються у вигляді рядка, що починається знаком долара, а за ним слідує ім'я змінної. Ім'я змінної може складатися з латинських літер, звичайних цифр і деяких символів або комбінацій літер, цифр і символів.</p>
    <span class="colorBlack">Всі змінні діляться на певні типи:</span>
    <p>Мова JavaScript містить шість типів даних <span class="colorBlack">Undefîned</span> (невизначений), <span class="colorBlack">Null</span> (нульовий), <span class="colorBlack">Вооlеаn</span> (логічний), <span class="colorBlack">String</span> (строковий), <span class="colorBlack">Number</span> (числовий) і <span class="colorBlack">Object</span> (об'єктний). Ця відносно невелика кількість типів дозволяє, тим не менше, створювати повноцінні сценарії для виконання багатьох функцій.</p>
    <span class="subChapter">Зразок коду 1:</span>
<pre class="prettyprint linenums">
&lt;html&gt;
  &lt;head&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;p&gt;
      &lt;?php
      $items= //Set this to a number greater than 5! Type the string &quot;Arr, matey!&quot;

      if ($items&lt;5) {
      echo &quot;You get a 10% discount!&quot;;
      }
    ?&gt;
    &lt;/p&gt;
 &lt;/body&gt;
&lt;/html&gt;
</pre>
    <span class="subChapter">Зразок коду 2  </span><span class="spoilerLinks"><span class="spoilerClick">(показати)</span><span class="spoilerTriangle"> &#9660;</span></span>
    <div class="spoilerBody">
<pre class="prettyprint linenums">
&lt;html&gt;
  &lt;head&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;p&gt;
      &lt;?php
      $items= //Set this to a number greater than 5! Type the string &quot;Arr, matey!&quot;

      if ($items&lt;5) {
      echo &quot;You get a 10% discount!&quot;;
      }
    ?&gt;
    &lt;/p&gt;
 &lt;/body&gt;
&lt;/html&gt;
</pre>
    </div>
    <h3><span class="subChapter">Відео 1.</span></h3>
    <iframe width="633" height="390" src="https://www.youtube.com/embed/L3Mg6lk6yyA" frameborder="0" allowfullscreen></iframe>
    <div class="lessonInstr">
        <img class="lessonBut" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/lessButton.png">
        <div class="lessonButName" unselectable = "on">Інструкція</div>
        <div class="lessonLine"></div>
        <div class="lessonBG">
            <div class="instrTaskImg">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/instr.png">
            </div>
            <div class="instrTaskText">
                <ol>
                    <li>On line 7, set <span class="colorBP"><span class="colorGreen">$</span>items</span> equal to a number greater than 5. Make sure to put a semicolon at the end of the line.</li>
                    <li>On line 9, edit the state condition so that your program will be out Some expressions return a ' logical value": TRUE or FALSE, text like thise:<span class="colorAlert">You get a 10% discount!</span></li>
                </ol>
            </div>
        </div>
    </div>

    <div class="lessonTask">
        <img class="lessonBut" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/lessButton.png">
        <div class="lessonButName" unselectable = "on">Завдання 1</div>
        <div class="lessonLine"></div>
        <div class="lessonBG">
            <div class="instrTaskImg">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/task.png">
            </div>
            <div class="instrTaskText">
                <ol>
                    <li>On line 7, set equal to a number greater than 5. Some expressions return a "logical value": TRUE or FALSE. Make sure to put a semicolon at the end of the line.</li>
                    <a href="#"> <span class="colorP"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/arrow.png"> Відповісти</span></a>
                    <li>An if statement is made up of the if keyword, a condition like we've seen before <span class="colorBP"><span class="colorGreen">$</span>terms</span>, and a pair of curly braces <span class="colorBP">{}</span>. If the answer to the condition is yes, the code inside the curly will run.</li>
                    <a href="#"><span class="colorP"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/arrow.png"> Відповісти</span></a>
                    <li>Резиновая по ширине (изменяется с Some expressions return a "logical value": TRUE or FALSE, изменением окна <span class="colorBP"><span class="colorGreen">$</span>terms</span> браузера или с разрешением экрана)</li>
                </ol>
                <div class="BBCode">
                    <form action="" method="post">
                        <textarea class="editor"></textarea>
                        <input  id="lessonTask2" type="submit" value="Відповісти">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/borderLesson.png">
</div>
<!--Заключна частина-->
<div class="lessonText">
    <div class="lessonTask">
        <img class="lessonButFinal" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/lessButtonFinale.png">
        <div class="lessonButFinal" unselectable = "on">Підсумкове Завдання</div>
        <div class="lessonLine"></div>
        <div class="lessonBG">
            <div class="instrTaskImg">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/task.png">
            </div>
            <div class="instrTaskText">
                <ol>
                    <li>On line 7, set equal to a number greater than 5. Some expressions return a "logical value": TRUE or FALSE. Make sure to put a semicolon at the end of the line.</li>
                    <a href="#"> <span class="colorP"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/arrow.png"> Відповісти</span></a>
                    <li>An if statement is made up of the if keyword, a condition like we've seen before <span class="colorBP">$terms</span>, and a pair of curly braces <span class="colorBP">{}</span>. If the answer to the condition is yes, the code inside the curly will run.</li>
                    <a href="#"><span class="colorP"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/arrow.png"> Відповісти</span></a>
                    <li>Резиновая по ширине (изменяется с Some expressions return a "logical value": TRUE or FALSE, изменением окна <span class="colorBP">$terms</span> браузера или с разрешением экрана)</li>
                </ol>
                <div class="BBCode">
                    <form action="" method="post">
                        <textarea class="editor"></textarea>
                        <input  id="lessonTask3" type="submit" value="Відповісти">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- lesson footer -->
<!-- Верстка -->
<?php

//Загальні параметри блоку
$footNavSize='960px'; // Ширина блоку
$footNavMaxMark='6'; // Шкала оцінювання - максимальна кількість балів, поділок

// База даних - проста база даних для прикладу
$lessonInfo1=array('1','Назва уроку1','практична робота','Тайм1','3','Зараховано');
$lessonInfo2=array('2','Назва уроку2','лекція','Тайм2','4','Зараховано');
$lessonInfo3=array('3','Назва уроку3','практична робота','Тайм3','2','Зараховано');
$lessonInfo4=array('4','Назва уроку4','практична робота','Тайм4','3','Зараховано');
$lessonInfo5=array('5','Назва уроку5','практична робота','Тайм5','1','Не Зараховано');
$lessonInfo6=array('6','Назва уроку6','лекція','Тайм6','0','Не Зараховано');
$lessonInfo7=array('7','Назва уроку7','лекція','Тайм7','0','Не Зараховано');
$lessonInfo8=array('8','Назва уроку8','практична робота','Тайм8','0','Не Зараховано');
$lessonInfo9=array('9','Назва уроку9','практична робота','Тайм9','0','Не Зараховано');
$lessonInfo10=array('10','Назва уроку10','лекція','Тайм10','0','Не Зараховано');

$allLessons=array($lessonInfo1,$lessonInfo2,$lessonInfo3,$lessonInfo4,$lessonInfo5,$lessonInfo6,$lessonInfo7,$lessonInfo8,$lessonInfo9,$lessonInfo10);

// Ініціалізуємо обьєкт класу який проиймає номер сторінки і інформацію про уроки з бази даних
$footNav=new LessonFooter ('3',$allLessons);

?>
<!  Верстка на основі обьекта $footNav >
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lessonFooter.css" />

<div class="subViewLessons" id="subViewLessons"	style="width:<?php echo $footNavSize; ?>" >
    <?php
    if (  $footNav->getPre()=='True' )
    {
        ?>
        <div class="preLessons">
            <p class="lesname">Заняття <?php echo $footNav->getPreNumber() ?>: <b><?php echo $footNav->getPreName() ?></b></p>
            <table class="typeLesson">
                <tr>
                    <td><p>Тип:</p></td>
                    <td><span><?php echo $footNav->getPreType() ?></span></td>
                    <td><img src="<?php
                        switch ($footNav->getPreType())
                        {
                            case 'лекція':
                                echo Yii::app()->request->baseUrl."/css/images/lectureIco.png";
                                break;
                            case 'практична робота':
                                echo Yii::app()->request->baseUrl."/css/images/practicalIco.png";
                                break;
                        }
                        ?> " style="width:<?php echo $footNavSize*0.02 . 'px'; ?>"></td>
                    <td><p>Тривалість:</p></td>
                    <td><span><?php echo $footNav->getPreDur() ?></span></td>
                    <td><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/timeIco.png" style="width:<?php echo $footNavSize*0.02 . 'px';?>"></td>
                </tr>
            </table>
            <table class="ratingLeson">
                <tr>
                    <?php
                    for ($i=0; $i<$footNav->getPreRait(); $i++)
                    {
                        ?>
                        <td>	<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/ratIco1.png" style="width:<?php echo $footNavSize*0.015 . 'px';?>; padding:0px;"></td>
                    <?php
                    }
                    for ($j=0; $j<$footNavMaxMark-$footNav->getPreRait(); $j++)
                    {
                        ?>
                        <td>	<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/ratIco0.png" style="width:<?php echo $footNavSize*0.015 . 'px';?>; padding:0px;"></td>
                    <?php
                    }
                    ?>
                    <td><img src="<?php
                        if ($footNav->getPreMedal()=='Зараховано')
                        {
                            echo Yii::app()->request->baseUrl."/css/images/medalIco.png";
                        } else {
                            echo Yii::app()->request->baseUrl."/css/images/medalIcoFalse.png";
                        }
                        ?> " style="width:<?php echo $footNavSize*0.035 . 'px'; ?>"></td>
                </tr>
            </table>
            <div class="preLesonLink">
                <p><a href="#">&#171 переглянути знову попередній урок</a></p>
            </div>
        </div>
    <?php
    }

    if (  $footNav->getPost()=='True' )
    {
    ?>
    <div class="nextLessons">
        <p class="lesname">Заняття <?php echo $footNav->getPostNumber() ?>: <b><?php echo $footNav->getPostName() ?></b></p>
        <table class="typeLesson">
            <tr>
                <td><p>Тип:</p></td>
                <td><span><?php echo $footNav->getPostType() ?></span></td>
                <td><img src="<?php
                    switch ($footNav->getPostType())
                    {
                        case 'лекція':
                            echo Yii::app()->request->baseUrl."/css/images/lectureIco.png";
                            break;
                        case 'практична робота':
                            echo Yii::app()->request->baseUrl."/css/images/practicalIco.png";
                            break;
                    }
                    ?> "style="width:<?php echo $footNavSize*0.02 . 'px';?>"></td>
                <td><p>Тривалість:</p></td>
                <td><span><?php echo $footNav->getPostDur() ?></span></td>
                <td><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/timeIco.png" style="width:<?php echo $footNavSize*0.02 . 'px';?>"></td>
            </tr>
        </table>
        <table class="ratingLeson">
            <tr>
                <?php
                for ($i=0; $i<$footNav->getPostRait(); $i++)
                {
                    ?>
                    <td>	<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/ratIco1.png" style="width:<?php echo $footNavSize*0.015 . 'px';?>; padding:0px;"></td>
                <?php
                }
                for ($j=0; $j<$footNavMaxMark-$footNav->getPostRait(); $j++)
                {
                    ?>
                    <td>	<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/ratIco0.png" style="width:<?php echo $footNavSize*0.015 . 'px';?>; padding:0px;"></td>
                <?php
                }
                ?>
                <td><img src="<?php
                    if ($footNav->getPostMedal()=='Зараховано')
                    {
                        echo Yii::app()->request->baseUrl."/css/images/medalIco.png";
                    } else {
                        echo Yii::app()->request->baseUrl."/css/images/medalIcoFalse.png";
                    }
                    ?> " style="width:<?php echo $footNavSize*0.035 . 'px';?>"></td>
            </tr>
        </table>
        <?php if($footNav->getThisMedal()=='Зараховано') { ?>
            <div class="nextLesonLink">
                <p><a href="#"><input class="nextLessButt" type="submit" value="НАСТУПНИЙ УРОК"></a></p>
            </div>
        <?php  }?>
    </div>
</div>
<?php
}
?>
