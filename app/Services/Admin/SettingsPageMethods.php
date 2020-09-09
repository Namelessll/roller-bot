<?php


namespace App\Services\Admin;


use App\Models\SettingsControllsBotModel;

class SettingsPageMethods
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

    public function setBotSettings($settingsArray) {
        $settingsControllsModel = new SettingsControllsBotModel();
        return $settingsControllsModel->createSetting($settingsArray);
    }

    public function getBotSettings() {
        $settingsControllsModel = new SettingsControllsBotModel();
        return $settingsControllsModel->getBotSettings();
    }

}
