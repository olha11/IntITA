<!-- lesson style -->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lessonsStyle.css" />
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lectureStyles.css" />
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
$this->pageTitle = 'INTITA';
$this->breadcrumbs=array(
    Yii::t('breadcrumbs', '0050')=>Yii::app()->request->baseUrl."/courses",'Модуль PHP'=>Yii::app()->request->baseUrl."/course",'Заняття 2: Змінні та типи данних в PHP',
);
$lecture = new Lecture();


?>

<div class="lectureMainBlock" >
    <?php $this->renderPartial('_lectureInfo', array('lecture'=>$lecture));?>
    <?php $this->renderPartial('_teacherInfo', array('teacher'=>$lecture->getTeacherInfoById(1)));?>
</div>

<div class="lessonBlock" id="lessonBlock">
    <?php $this->renderPartial('_sidebar', array('lecture'=>$lecture, 'skype'=>$lecture->getTeacherInfoById(1)['skype']));?>


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
        <div class="lessonButName" unselectable = "on"><?php echo Yii::t('lecture','Exercise'); ?> 1</div>
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
    <span class="subChapter"><?php echo Yii::t('lecture','Code example'); ?> 2  </span><span class="spoilerLinks"><span class="spoilerClick">(показати)</span><span class="spoilerTriangle"> &#9660;</span></span>
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
    <h3><span class="subChapter"><?php echo Yii::t('lecture','0083'); ?> 1.</span></h3>
    <iframe width="633" height="390" src="https://www.youtube.com/embed/L3Mg6lk6yyA" frameborder="0" allowfullscreen></iframe>
    <div class="lessonInstr">
        <img class="lessonBut" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/lessButton.png">
        <div class="lessonButName" unselectable = "on"><?php echo Yii::t('lecture','0085'); ?></div>
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
        <div class="lessonButName" unselectable = "on"><?php echo Yii::t('lecture','0086'); ?> 1</div>
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
        <div class="lessonButFinal" unselectable = "on"><?php echo Yii::t('lecture','0090'); ?></div>
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
                        <input  id="lessonTask3" type="submit" value="<?php echo Yii::t('lecture','0089'); ?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- lesson footer -->
<?php $this->renderPartial('_footer', array('lecture'=>$lecture));?>
