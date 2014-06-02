<?php

class SailorsController extends BaseController {

    public $layout = '//layouts/main';

    public function actionView(){
        $this->render('view');
    }
}