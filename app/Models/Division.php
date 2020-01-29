<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
   public function districts(){//kon tabel ,district table many
    	return $this -> hasMany(District::class,'division_id');//dont sure with parameter
    }
}
