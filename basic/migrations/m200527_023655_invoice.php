<?php

use yii\db\Migration;

/**
 * Class m200527_023655_invoice
 */
class m200527_023655_invoice extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->createTable('{{% invoice}}', [
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
        echo "m200527_023655_invoice cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200527_023655_invoice cannot be reverted.\n";

        return false;
    }
    */
}
