<?php
/* @var $lecture Lecture*/

class LessonController extends Controller{

    public function actionIndex($id = 1){
        $dataProvider = new CActiveDataProvider('LectureElement');

        $lecture = Lecture::model()->findByPk($id);
        $this->render('index', array(
            'dataProvider' => $dataProvider,
            'lecture' => $lecture,
        ));
    }

}