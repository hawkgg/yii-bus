<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord as ActiveRecord;
use app\models\Bus;

/**
 * Model of driver.
 */
class Driver extends ActiveRecord
{
    public static $table_name = 'drivers';

    public static function tableName() {
        return self::$table_name;
    }

    public function getBuses()
    {
        return $this->hasMany(Bus::className(), ['id' => 'bus_id'])
            ->viaTable('bus_driver_pivot');
    }
}
