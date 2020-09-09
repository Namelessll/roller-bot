<?php


namespace App\Services\Admin;


use App\Models\CompetitionModel;

class CompetitionPageMethods
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

    public function getCompetitionList() {
        $competitionModel = new CompetitionModel();
        return $competitionModel->getCompetitionAll();
    }

}
