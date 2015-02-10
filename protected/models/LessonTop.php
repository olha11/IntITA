<?php
class LessonTop
{
    public $lectureImageMain;
    public $lectureModule;
    public $lectureNumber;
    public $lectureNameText;
    public $lectureTypeText;
    public $lectureTypeImage;
    public $lectureTimeText;
    public $lectureMaxNumber;
    public $lectureIconImage;
    //constant

    public $lectureTimeImage='css/images/timeIco.png';
    public $lectureOverlookedImage='css/images/ratIco1.png';
    public $lectureUnwatchedImage='css/images/ratIco0.png';

    function Lecture ($lectureImageMain,$lectureModule,$lectureNumber,$lectureNameText,$lectureTypeText,$lectureTypeImage,$lectureTimeText,
                      $lectureMaxNumber,$lectureIconImage)
    {
        $this->lectureImageMain=$lectureImageMain;
        $this->lectureModule=$lectureModule;
        $this->lectureNumber=$lectureNumber;
        $this->lectureNameText=$lectureNameText;
        $this->lectureTypeText=$lectureTypeText;
        $this->lectureTypeImage=$lectureTypeImage;
        $this->lectureTimeText=$lectureTimeText;
        $this->lectureMaxNumber=$lectureMaxNumber;
        $this->lectureIconImage=$lectureIconImage;
    }

}