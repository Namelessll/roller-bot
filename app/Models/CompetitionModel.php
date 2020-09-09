<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CompetitionModel extends Model
{
    protected $table = "table_competitions";

    public function getCompetitionAll() {
        return DB::table($this->table)
            ->select($this->table.'.*')
            ->get();
    }

}
