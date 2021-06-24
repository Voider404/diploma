<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "train".
 *
 * @property int $id
 * @property string $number
 * @property int $type_id
 * @property string $navigate
 *
 * @property Description[] $descriptions
 * @property Timetable[] $timetables
 * @property TrainType $type
 */
class Train extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'navigate'], 'required'],
            [['number', 'navigate'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'navigate' => 'Navigate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDescriptions()
    {
        return $this->hasMany(Description::className(), ['id_train' => 'id']);
    }

}
