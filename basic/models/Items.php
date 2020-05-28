<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "items".
 *
 * @property int $id
 * @property string|null $Item
 * @property string|null $Description
 * @property int|null $unit
 * @property int|null $Qulaity
 * @property int|null $Price
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Items extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Description'], 'string'],
            [['unit', 'Qulaity', 'Price','idInvoice'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['Item'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
			'idInvoice'=>'idInvoice',
            'Item' => 'Item',
            'Description' => 'Description',
            'unit' => 'Unit',
            'Qulaity' => 'Qulaity',
            'Price' => 'Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
