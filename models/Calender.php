<?php

namespace kouosl\calender\models;

use Yii;
use kouosl\user\models\User;

/**
 * This is the model class for table "calender".
 *
 * @property int $id
 * @property int $user_id
 * @property string $starting_date
 * @property string $finishing_date
 * @property string $title
 * @property string $content
 * @property string $access_modifier
 *
 * @property User $user
 */
class Calender extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calender';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['starting_date', 'finishing_date', 'title', 'access_modifier'], 'required'],
            [['user_id'], 'integer'],
            [['starting_date', 'finishing_date'], 'string', 'max' => 16],
            [['title'], 'string', 'max' => 64],
            [['content'], 'string', 'max' => 256],
            [['access_modifier'], 'string', 'max' => 30],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'starting_date' => 'Starting Date',
            'finishing_date' => 'Finishing Date',
            'title' => 'Title',
            'content' => 'Content',
            'access_modifier' => 'Access Modifier',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
