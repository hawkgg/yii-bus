<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord as ActiveRecord;
use app\models\Driver;

/**
 * Model of bus.
 */
class Bus extends ActiveRecord
{
    private static $table_name = 'buses';

    public static function tableName() {
        return self::$table_name;
    }

    public function getDrivers()
    {
        return $this->hasMany(Driver::className(), ['driver_id' => 'id']);
    }
}
