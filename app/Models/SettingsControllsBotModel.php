<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SettingsControllsBotModel extends Model
{
    protected $table = "table_bot_settings";

    public function createSetting($settings) {
        unset($settings['_token']);
        $count = DB::table($this->table)
            ->count();

        if ($count < 1)
            return DB::table($this->table)
                ->insert($settings);
        else {
            return DB::table($this->table)
                ->update($settings);
        }
    }

    public function getBotSettings() {
        return DB::table($this->table)
            ->select($this->table.'.*')
            ->get();
    }
}
