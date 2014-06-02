<?php

class SailorDictionary extends CActiveRecord {

    public $sailor_id;
    public $dictionary_id;


    public function relations(){
        return array(
            'type_string' => array(self::BELONGS_TO, 'DictionaryType', 'dictionary_id', 'together'=>true),
        );
    }

}