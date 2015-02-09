<?php

class LessonFooter
{
    public $numberLesson;

    public $preLessonNumber;
    public $postLessonNumber;

    public $thisLessonInfo;
    public $preLessonInfo;
    public $postLessonInfo;

    public $infoLessons;

    function LessonFooter ($lessNum,$allLess)
    {
        $this->infoLessons=$allLess; // Інформація про всі уроки
        $this->numberLessons=$lessNum-1; // Номер уроку

        $this->preLessonNumber=$lessNum-2; // Номер попереднього уроку
        $this->postLessonNumber=$lessNum; // Номер наступного уроку

        $this->thisLessonInfo=$this->infoLessons[ $this->numberLessons]; // Інформація даного уроку
        $this->preLessonInfo=$this->infoLessons[ $this->preLessonNumber]; // Інформація попереднього уроку
        $this->postLessonInfo=$this->infoLessons[ $this->postLessonNumber]; // Інформація наступного уроку
    }
    // Данний урок
    function getThisMedal()  {
        return $this->thisLessonInfo[5]; // Медалька
    }
    // Попередній урок
    function getPre()  {
        if ( isset( $this->preLessonInfo))
        {
            return 'True';  // Існування елемента
        }
    }
    function getPreNumber()  {
        return $this->preLessonInfo[0];  // Номер
    }
    function getPreName()  {
        return $this->preLessonInfo[1]; // Назва
    }
    function getPreType()  {
        return $this->preLessonInfo[2]; // Тип
    }
    function getPreDur()  {
        return $this->preLessonInfo[3]; //	Тривалість
    }
    function getPreRait()  {
        return $this->preLessonInfo[4]; //	Рейтинг
    }
    function getPreMedal()  {
        return $this->preLessonInfo[5]; // Медалька
    }
    // Наступний урок
    function getPost()  {
        if ( isset( $this->postLessonInfo))
        {
            return 'True';  // Існування елемента
        }
    }
    function getPostNumber()  {
        return $this->postLessonInfo[0];  // Номер
    }
    function getPostName()  {
        return $this->postLessonInfo[1]; // Назва
    }
    function getPostType()  {
        return $this->postLessonInfo[2]; // Тип
    }
    function getPostDur()  {
        return $this->postLessonInfo[3]; //	Тривалість
    }
    function getPostRait()  {
        return $this->postLessonInfo[4]; //	Рейтинг
    }
    function getPostMedal()  {
        return $this->postLessonInfo[5]; // Медалька
    }

}
