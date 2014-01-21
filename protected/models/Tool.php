<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class Tool extends CActiveRecord
{
	public $name;
	public $photo;
	public $manufacturer;
	public $price_below_200;
	public $price_more_than_200;
	public $price_pre_one;

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
 
    public function tableName()
    {
        return 'tools';
    }

}