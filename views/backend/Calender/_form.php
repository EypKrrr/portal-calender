<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\calender\models\Calender */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calender-form">

    <?php $form = ActiveForm::begin(); ?>

    

    <?= $form->field($model, 'starting_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'finishing_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'access_modifier')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
