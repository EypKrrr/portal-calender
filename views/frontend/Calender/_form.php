<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\calender\models\Calender */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calender-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'starting_date')->textInput()->hint('Please enter like 30.12.2018-21.30')->textInput()->input('starting_date', ['placeholder' => "Enter Start Date"])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'finishing_date')->textInput()->hint('Please enter like 30.12.2018-21.30')->textInput()->input('finishing_date', ['placeholder' => "Enter Finish Date"])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'access_modifier')->dropDownList(
		array('Public' => 'Public', 'Private' => 'Private')
	);
?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
