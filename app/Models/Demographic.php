<?php

namespace App\Models;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Demographic extends Model
{
    use HasFactory, Helper;

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    // public static function getEnumValues($col)
    // {
    //     $v = explode("','", substr(DB::select(DB::raw('SHOW COLUMNS FROM ' . (new static)->getTable() . ' WHERE Field = "' . $col . '"'))[0]->Type, 6, -2));
    //     return $v;
    // }
}
