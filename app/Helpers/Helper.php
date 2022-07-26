<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

trait Helper
{
     public static function getEnumValues($col)
     {
          $v = explode("','", substr(DB::select(DB::raw('SHOW COLUMNS FROM ' . (new static)->getTable() . ' WHERE Field = "' . $col . '"'))[0]->Type, 6, -2));
          return $v;
     }
}
