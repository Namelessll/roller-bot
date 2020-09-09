<?php


namespace App\Services\Admin;


use App\Models\ApiSettings;

class ApiPageMethods
{
    protected static $_instance;

    private function __construct() {
    }

    public static function getInstance() {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    private function __clone() {
    }

    private function __wakeup() {
    }

    public function setBotSetting($setting, $value) {
        $apiSettingModel = new ApiSettings();
        if (!$apiSettingModel->checkSettingExist($setting)) {
            return $apiSettingModel->createSetting($setting, $value);
        } else {
            return $this->updateBotSetting($setting, $value);
        }
    }

    public function updateBotSetting($setting, $value) {
        $apiSettingModel = new ApiSettings();
        return $apiSettingModel->updateSetting($setting, $value);
    }

    public function getBotSetting($setting) {
        $apiSettingModel = new ApiSettings();
        return $apiSettingModel->getSetting($setting);
    }

    public function deleteBotSetting($setting) {

    }

}
