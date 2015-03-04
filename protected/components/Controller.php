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
	public $button_text;

	public $phone;
	public $image_up;
	public $mobile;
	public $email;
	public $image_sotial;

	public function init(){
		$this->logo = Yii::app()->request->baseUrl.Header::model()->findByPk(1)->logo_url;
		$this->menu1 = Header::model()->findByPk(2)->menu_item_1;
		$this->menu2 = Header::model()->findByPk(2)->menu_item_2;
		$this->menu3 = Header::model()->findByPk(2)->menu_item_3;
		$this->menu4 = Header::model()->findByPk(2)->menu_item_4;
		$this->link1 = Header::model()->findByPk(1)->item_1_link;
		$this->link2 = Header::model()->findByPk(1)->item_2_link;
		$this->link3 = Header::model()->findByPk(1)->item_3_link;
		$this->link4 = Yii::app()->request->baseUrl.Header::model()->findByPk(1)->item_4_link;
		$this->button_text = Header::model()->findByPk(2)->enter_button_text;

		$this->email = Footer::model()->findByPk(1)->email;
		$this->phone = Footer::model()->findByPk(1)->phone;
		$this->mobile = Footer::model()->findByPk(1)->mobile;
		$this->image_sotial = Yii::app()->request->baseUrl.Footer::model()->findByPk(1)->image_social;
		$this->image_up = Yii::app()->request->baseUrl.Footer::model()->findByPk(1)->image_up;
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