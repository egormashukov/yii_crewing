<?php

class Sailor extends CActiveRecord {

    public $fullname;
    public $age;
    public $birthday;
    public $rank;

    public $search_field = '';

    public function rules(){
        return array(
            array('fullname,age,birthday,rank', 'required'),
        );
    }

    public function attributeLabels(){
        return array(
            'search_field' => 'Search Sailor'
        );
    }

    public function relations(){
        return array(
            'dictionary' => array(self::MANY_MANY, 'Dictionary', 'SailorDictionary(sailor_id, dictionary_id)',
                'together'=>true)
        );
    }

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public static function dictionary_values($dictionary){
        $return = array();
        if ($dictionary){
            foreach($dictionary as $dict){
                $return[] = $dict->value;
            }
        } else {
            return "No data";
        }
        return implode(',',$return);
    }
}
