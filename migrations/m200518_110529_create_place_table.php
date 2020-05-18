<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%place}}`.
 */
class m200518_110529_create_place_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('place',[
             'id' => $this->primaryKey()->unsigned(),
             'place_id' => $this->string(45)->notNull(),   
             'lat' => $this->string(45)->notNull(),   
             'lan' => $this->string(45)->notNull(),   
             'country_code' => $this->string(2)->notNull(),   
             'is_countrey' => $this->boolean()->notNull()      
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('place');
    }
}
