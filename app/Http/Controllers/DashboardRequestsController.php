<?php

namespace App\Http\Controllers;

use App\Services\Admin\ApiPageMethods;
use App\Services\Admin\SettingsPageMethods;
use Illuminate\Http\Request;

class DashboardRequestsController extends Controller
{
    /*FORMS*/
    public function saveSetting(Request $request) {
        $request = $request->all();
        //dd($request);
        ApiPageMethods::getInstance()->setBotSetting($request['setting_name'], $request['domain_url']);
        return redirect()->back()->with('success', 'Настройка успешно обновлена.');
    }

    public function saveBotSetting(Request $request) {
        $request = $request->all();
        SettingsPageMethods::getInstance()->setBotSettings($request);
        return redirect()->back()->with('success', 'Настройки успешно обновлены.');
    }
}
