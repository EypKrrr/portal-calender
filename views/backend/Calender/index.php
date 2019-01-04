<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kouosl\calender\Module;
/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\calender\models\CalenderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Calenders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calender-index">
	<?php echo Module::t('calender','calenders')?>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Calender', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'user_id',
			'title',
            'content',
            'starting_date',
            'finishing_date',
            'access_modifier',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
