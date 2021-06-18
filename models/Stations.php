<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stay".
 *
 * @property int $id
 * @property string $name
 * @property string $info
 *
 * @property Timetable[] $timetables
 * @property Timetable[] $timetables0
 * @property Train[] $trains
 * @property Train[] $trains0
 */
class Stations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'info'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'info' => 'Info',
            'date' => 'Date',
        ];
    }
}
