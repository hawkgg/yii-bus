<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%buses}}`.
 */
class m200216_200618_create_buses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%buses}}', [
            'id' => $this->primaryKey(),
            'vendor' => $this->string(),
            'model' => $this->string(),
            'release_year' => $this->integer(),
            'avg_speed' => $this->integer(),
        ]);

        $this->insert('{{%buses}}', [
            'vendor' => 'ЛиАЗ',
            'model' => '5256',
            'release_year' => '2017',
            'avg_speed' => '45',
        ]);

        $this->insert('{{%buses}}', [
            'vendor' => 'Mercedes',
            'model' => 'Sprinter Tourer',
            'release_year' => '2012',
            'avg_speed' => '50',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%buses}}');
    }
}
