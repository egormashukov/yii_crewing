<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $sailors_list,
    'columns' => array(
        'id:Number:ID',
        array(
            'name' => 'Full name',
            'type' => 'raw',
//            'value' => 'CHtml::link($data->fullname, Yii::app()->createUrl("admin/sailors/",array("id"=>$data->id)))',
            'value' => 'CHtml::link($data->fullname, Yii::app()->createUrl("admin/sailors/".$data->id))',
        ),
        'birthday:text:Birthday',
        'age:number:age',
        array(
            'header' => 'Rank',
            'value' => 'Sailor::dictionary_values($data->dictionary)'
        )
    )
));
