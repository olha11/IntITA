<?php


class AboutUs {
	
    public $line2Image;
    public $iconImage;
    public $titleText;
    public $textAbout;
    public $linkAdress;
	public $drop1Text;
	public $drop2Text;
	public $drop3Text;


    function AboutUs ($line2Image,$iconImage,$titleText,$textAbout,$linkAdress)
    {
        $this->line2Image=$line2Image;
        $this->iconImage=$iconImage;
        $this->titleText=$titleText;
        $this->textAbout=$textAbout;
        $this->linkAdress=$linkAdress;
    }


} 