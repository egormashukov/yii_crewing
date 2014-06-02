<?php

$form = $this->beginWidget('CActiveForm');

echo $form->labelEx($sailor_model, 'search_field');
echo CHtml::activeTelField($sailor_model, 'search_field', array(
    'onkeyup' => CHtml::ajax(array(
                'type' => 'POST',
                'update' => '#home_sailors_table'
            )
        )
    )); ?>
    <div id="home_sailors_table">
        <?php $this->renderPartial('_sailors_table', array(
            'sailors_list' => $sailors_list,
        )); ?>
    </div>
<?php

$this->endWidget();
