<?php

/**
 * This is the model class for table "carousel".
 *
 * The followings are the available columns in table 'carousel':
 * @property integer $order
 * @property string $pictureURL
 * @property string $description
 * @property string $imagesPath
 * @property string $text
 */
class Carousel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'carousel';
	}


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Carousel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
