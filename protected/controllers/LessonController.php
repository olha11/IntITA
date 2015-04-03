<?php
/* @var $lecture Lecture*/

class LessonController extends Controller{

    public function actionIndex(){
        $dataProvider=new CActiveDataProvider('Lecture');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

} 