<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "invoice".
 *
 * @property int $id
 * @property string $szName
 * @property string $Organiziation
 * @property int $Address
 * @property int $Conatct
 * @property int $invoiceid
 * @property string $date
 * @property int $dueAmount
 * @property int $subTotal
 * @property int $Total
 * @property int $AmountPaid
 * @property int $BalanceDue
 * @property string $created_at
 * @property string $updated_at
 */
class Invoice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'invoice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['szName', 'Address', 'Organiziation', 'Address', 'Conatct', 'invoiceid', 'date', 'dueAmount', 'subTotal', 'Total', 'AmountPaid', 'BalanceDue', 'created_at', 'updated_at'], 'required'],
            [['Conatct', 'invoiceid', 'dueAmount', 'subTotal', 'Total', 'AmountPaid', 'BalanceDue'], 'integer'],
            [['date', 'created_at', 'updated_at'], 'safe'],
            [['szName', 'Organiziation'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'szName' => 'Name',
            'Organiziation' => 'Organiziation',
            'Address' => 'Address',
            'Conatct' => 'Conatct',
            'invoiceid' => 'Invoiceid',
            'date' => 'Date',
            'dueAmount' => 'Due Amount',
            'subTotal' => 'Sub Total',
            'Total' => 'Total',
            'AmountPaid' => 'Amount Paid',
            'BalanceDue' => 'Balance Due',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
