<?php

use yii\db\Migration;

/**
 * Class m200527_023129_items
 */
class m200527_023129_items extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->createTable('{{%items}}', [
			'id' => $this->primaryKey(),
			'idInvoice' => $this->integer(),
			'Item'=> $this->string(),
			'Description'=> $this->text(),
			'unit'=> $this->integer(),
			'Qulaity'=> $this->integer(),
			'Price'=> $this->integer(),
			'created_at'=> $this->dateTime(),
			'updated_at'=> $this->dateTime(),
		]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200527_023129_items cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200527_023129_items cannot be reverted.\n";

        return false;
    }
    */
}
