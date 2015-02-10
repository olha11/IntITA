<?php


class LessonTeacher {


    public $teacherImage;
    public $teacherName;
    public $teacherEmails;
    public $teacherPhoneNumbers;
    public $teacherSkype;
    public $linkAdress;
    //constant
    public $teacherTitle='Викладач:';
    public $linkName='детальніше';


    function Teacher ($teacherImage, $teacherName,$teacherEmails,$teacherPhoneNumbers,$teacherSkype,$linkAdress)
    {
        $this->teacherImage = $teacherImage;
        $this->teacherName = $teacherName;
        $this->teacherEmails = $teacherEmails;
        $this->teacherPhoneNumbers = $teacherPhoneNumbers;
        $this->teacherSkype = $teacherSkype;
        $this->linkAdress = $linkAdress;
    }

}
