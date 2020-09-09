<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ApiSettings extends Model
{
    protected $table = 'table_api_settings';

    public function checkSettingExist($setting) {
        if (DB::table($this->table)->where('setting_name', $setting)->exists())
            return true;
        else
            return false;
    }

    public function createSetting($setting, $value) {
        return DB::table($this->table)
            ->insert([
                'setting_name' => $setting,
                'setting_value' => $value
            ]);
    }

    public function updateSetting($setting, $value) {
        return DB::table($this->table)
            ->where('setting_name', '=', $setting)
            ->update([
                'setting_value' => $value
            ]);
    }

    public function getSetting($setting) {
        return DB::table($this->table)
            ->where('setting_name', $setting)
            ->first();
    }

}
