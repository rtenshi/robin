<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property integer $artikel_nr
 * @property string $name
 * @property double $preis
 * @property integer $menge
 * @property integer $liste
 *
 * @property Liste $liste0
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['artikel_nr', 'name', 'preis', 'menge', 'liste'], 'required'],
            [['artikel_nr', 'menge', 'liste'], 'integer'],
            [['preis'], 'number'],
            [['name'], 'string', 'max' => 255],
            //[['liste'], 'exist', 'skipOnError' => true, 'targetClass' => Liste::className(), 'targetAttribute' => ['liste' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'artikel_nr' => 'Artikel Nr',
            'name' => 'Name',
            'preis' => 'Preis',
            'menge' => 'Menge',
            'liste' => 'Liste',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListe0()
    {
        return $this->hasOne(Liste::className(), ['id' => 'liste']);
    }
}
