<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%country}}`.
 */
class m200518_113504_create_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       $this->createTable('country',[
             'id' => $this->primaryKey()->unsigned(),  
             'code' => $this->string(2)->unique(),   
             'name' => $this->string(80)->notNull(),   
             'phonecode' => $this->integer(15)->notNull(),  
             'lat' => $this->string(45)->notNull(),   
             'lan' => $this->string(45)->notNull(), 
        ]);

       $this->insert('country',[
            'code'=>'IN',
            'name'=>'India',
            'phonecode'=>'+91',
            'lat'=>'192.5555',
            'lan'=>'2546.2333'
       ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('country',['code'=>'DE']);
         $this->dropTable('country');
    }
}
