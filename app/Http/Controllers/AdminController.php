<?php

namespace App\Http\Controllers;

use App\Services\Admin\ApiPageMethods;
use App\Services\Admin\CompetitionPageMethods;
use App\Services\Admin\SettingsPageMethods;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function apiPage()
    {
        $setting = ApiPageMethods::getInstance()->getBotSetting('domain_url');
        return view('pages.api', compact('setting'));
    }

    public function settingsPage()
    {
        //$setting = ApiPageMethods::getInstance()->getBotSetting('domain_url');
        $settings = SettingsPageMethods::getInstance()->getBotSettings();
        return view('pages.settings', compact('settings'));
    }

    public function competitionListPage() {
        $competitions = CompetitionPageMethods::getInstance()->getCompetitionList();
        return view('pages.competition-list', compact('competitions'));
    }

    public function createAdvertisingPage() {
        return view('pages.create-advertising');
    }


}
