<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bus_driver}}`.
 */
class m200218_230359_create_bus_driver_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bus_driver}}', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer(),
            'bus_id' => $this->integer(),
        ]);

        $this->addForeignKey(
            'driver_id',
            'bus_driver',
            'driver_id',
            'drivers',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'bus_id',
            'bus_driver',
            'bus_id',
            'buses',
            'id',
            'CASCADE'
        );

        $this->insert('{{%bus_driver}}', [
            'driver_id' => '1',
            'bus_id' => '1',
        ]);
        $this->insert('{{%bus_driver}}', [
            'driver_id' => '1',
            'bus_id' => '2',
        ]);
        $this->insert('{{%bus_driver}}', [
            'driver_id' => '3',
            'bus_id' => '2',
        ]);
        $this->insert('{{%bus_driver}}', [
            'driver_id' => '2',
            'bus_id' => '1',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bus_driver}}');
    }
}
