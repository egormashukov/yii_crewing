<?php

class HomeController extends BaseController
{

    public $layout = '//layouts/main';

    public function actionIndex()
    {
        if (isset($_POST['Sailor']['search_field'])) {
            $search_text = $_POST['Sailor']['search_field'];
            $search_in_fields = array('fullname', 'age');
            $criteria = new CDbCriteria;
            $criteria->with = array('dictionary');
            foreach ($search_in_fields as $field) {
                $criteria->addCondition(" $field LIKE '%$search_text%'", 'OR');
            }
            $sailors_list = new CActiveDataProvider('Sailor', array('criteria' => $criteria));
            $this->renderPartial('_sailors_table', array('sailors_list' => $sailors_list));
            Yii::app()->end();
        } else {
            $sailors_list = new CActiveDataProvider('Sailor');
        }

        $sailor_model = new Sailor;
        $this->render('index', array(
            'sailor_model' => $sailor_model,
            'sailors_list' => $sailors_list
        ));
    }

    public function actionSearch(){
        $dictionary_data = array();

        $info = Dictionary::model()
            ->with('type_string')
            ->findAll();
        CVarDumper::dump($info);die;
        $this->render('search');
    }

}
