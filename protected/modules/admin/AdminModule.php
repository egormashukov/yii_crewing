<?php

class AdminModule extends CWebModule {

    public function init(){
        $this->setImport(array(
            'admin.controllers.*',
            'admin.views.*',
            'admin.models.*',
        ));
    }
}