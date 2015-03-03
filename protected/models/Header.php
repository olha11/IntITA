<?php

/**
 * This is the model class for table "header".
 *
 * The followings are the available columns in table 'header':
 * @property integer $header_id
 * @property string $language
 * @property string $logo_url
 * @property string $menu_item_1
 * @property string $item_1_link
 * @property string $menu_item_2
 * @property string $item_2_link
 * @property string $menu_item_3
 * @property string $item_3_link
 * @property string $menu_item_4
 * @property string $item_4_link
 * @property string $enter_button_text
 */
class Header extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'header';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('language, logo_url, menu_item_1, item_1_link, menu_item_2, item_2_link, menu_item_3, item_3_link, menu_item_4, item_4_link, enter_button_text', 'required'),
			array('language', 'length', 'max'=>2),
			array('logo_url, item_1_link, item_2_link, item_3_link, item_4_link, enter_button_text', 'length', 'max'=>255),
			array('menu_item_1, menu_item_2, menu_item_3, menu_item_4', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('header_id, language, logo_url, menu_item_1, item_1_link, menu_item_2, item_2_link, menu_item_3, item_3_link, menu_item_4, item_4_link, enter_button_text', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'header_id' => 'Header',
			'language' => 'Language',
			'logo_url' => 'Logo Url',
			'menu_item_1' => 'Menu Item 1',
			'item_1_link' => 'Item 1 Link',
			'menu_item_2' => 'Menu Item 2',
			'item_2_link' => 'Item 2 Link',
			'menu_item_3' => 'Menu Item 3',
			'item_3_link' => 'Item 3 Link',
			'menu_item_4' => 'Menu Item 4',
			'item_4_link' => 'Item 4 Link',
			'enter_button_text' => 'Enter Button Text',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('header_id',$this->header_id);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('logo_url',$this->logo_url,true);
		$criteria->compare('menu_item_1',$this->menu_item_1,true);
		$criteria->compare('item_1_link',$this->item_1_link,true);
		$criteria->compare('menu_item_2',$this->menu_item_2,true);
		$criteria->compare('item_2_link',$this->item_2_link,true);
		$criteria->compare('menu_item_3',$this->menu_item_3,true);
		$criteria->compare('item_3_link',$this->item_3_link,true);
		$criteria->compare('menu_item_4',$this->menu_item_4,true);
		$criteria->compare('item_4_link',$this->item_4_link,true);
		$criteria->compare('enter_button_text',$this->enter_button_text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Header the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
