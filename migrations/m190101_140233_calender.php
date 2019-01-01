<?php

use yii\db\Migration;

/**
 * Class m190101_140233_calender
 */
class m190101_140233_calender extends Migration
{
     public function up()
    {
		$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('calender', [
            'id' => $this->primaryKey(),
			'user_id' => $this->integer()->notNull(),
			'starting_date' => $this->string(16)->notNull(),//30.12.2018-21.30
			'finishing_date' => $this->string(16)->notNull(),//30.12.2018-22.30
            'title' => $this->string(64)->notNull(),
			'content' => $this->string(256),
			'access_modifier' => $this->string(30)->notNull(),
        ], $tableOptions);
        
		// creates index for column user_id
		$this->createIndex(
            'idx-calender-user_id',
            'calender',
            'user_id'
        );
		
		//add foreign key for table 'user'
		$this->addForeignKey(
            'fk-calender-user_id',
            'calender',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
	}

    public function down()
    {
        echo "m181230_180835_calender cannot be reverted.\n";
		// drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-calender-user_id',
            'calender'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            'idx-calender-user_id',
            'calender'
        );
		
		 $this->dropTable('calender');
        //return false;
    }
    
	
    
/*
    public function safeUp()
    {

    }


    public function safeDown()
    {
        echo "m181230_180835_calender cannot be reverted.\n";

        return false;
    }
*/
}
