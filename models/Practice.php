<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "practice".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $kolvo_mest
 * @property string $contact
 */
class Practice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'practice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'kolvo_mest', 'contact'], 'required'],
            [['kolvo_mest'], 'integer'],
            [['name', 'description', 'contact'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'description' => 'Описание',
            'kolvo_mest' => 'Количество мест',
            'contact' => 'Контакты',
        ];
    }
}
