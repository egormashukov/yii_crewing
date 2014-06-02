<?php

class Dictionary extends CActiveRecord {

    public $type;
    public $value;


    public function relations(){
        return array(
            'type_string' => array(self::BELONGS_TO, 'DictionaryType', 'type', 'together'=>true)
        );
    }

    public static function model($classname = __CLASS__){
        return parent::model($classname);
    }
}