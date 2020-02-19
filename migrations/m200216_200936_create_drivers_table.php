<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%drivers}}`.
 */
class m200216_200936_create_drivers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%drivers}}', [
            'id' => $this->primaryKey(),
            'fio' => $this->string(),
            'birth' => $this->date(),
        ]);

        $this->insert('{{%drivers}}', [
            'fio' => 'Петров Петр Петрович',
            'birth' => '1991-05-01',
        ]);
        $this->insert('{{%drivers}}', [
            'fio' => 'Иванов Иван Иванович',
            'birth' => '1987-07-23',
        ]);
        $this->insert('{{%drivers}}', [
            'fio' => 'Сидоров Сидр Сидорович',
            'birth' => '1989-11-12',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%drivers}}');
    }
}
