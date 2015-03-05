<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	public $logo;
	public $menu1;
	public $link1;
	public $menu2;
	public $link2;
	public $menu3;
	public $link3;
	public $menu4;
	public $link4;
	public $buttonText;

	public $phone;
	public $imageUp;
	public $mobile;
	public $email;
	public $imageSotial;


	public function init(){
		$this->logo = Yii::app()->request->baseUrl.Header::model()->findByPk(0)->logoURL;
		$this->menu1 = Header::model()->findByPk(0)->menuItem1;
		$this->menu2 = Header::model()->findByPk(0)->menuItem2;
		$this->menu3 = Header::model()->findByPk(0)->menuItem3;
		$this->menu4 = Header::model()->findByPk(0)->menuItem4;
		$this->link1 = Header::model()->findByPk(0)->item1Link;
		$this->link2 = Header::model()->findByPk(0)->item2Link;
		$this->link3 = Header::model()->findByPk(0)->item3Link;
		$this->link4 = Yii::app()->request->baseUrl.Header::model()->findByPk(0)->item4Link;
		$this->buttonText = Header::model()->findByPk(0)->enterButtonText;

		$this->email = Footer::model()->findByPk(0)->email;
		$this->phone = Footer::model()->findByPk(0)->phone;
		$this->mobile = Footer::model()->findByPk(0)->mobile;
		$this->imageSotial = Yii::app()->request->baseUrl.Footer::model()->findByPk(0)->imageSotial;
		$this->imageUp = Yii::app()->request->baseUrl.Footer::model()->findByPk(0)->imageUp;
	}
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	public $seo;
	public $portlets = array();
	public $lastUpdate;
}