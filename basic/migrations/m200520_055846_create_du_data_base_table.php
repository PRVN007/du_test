<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%du_data_base}}`.
 */
class m200520_055846_create_du_data_base_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%du_data_base}}', [
            'id' => $this->primaryKey(),
			'szName'=> $this->string(),
			'Organiziation'=> $this->string(),
			'Address'=> $this->string(),
			'Conatct'=> $this->integer(),
			'invoiceid'=> $this->integer(),
			'date'=> $this->date(),
			'dueAmount'=> $this->integer(),
			'subTotal'=> $this->integer(),
			'Total'=> $this->integer(),
			'AmountPaid'=> $this->integer(),
			'BalanceDue'=> $this->integer(),
			'created_at'=> $this->dateTime(),
			'updated_at'=> $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%du_data_base}}');
    }
}
