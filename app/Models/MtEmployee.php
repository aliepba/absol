<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class MtEmployee extends Model
{
    use TraitUuid;

    public function user(){
        return  $this->hasOne('App\Models\User');
    }

    public function bank_account(){
        return  $this->belongsTo('App\Models\MtBankAccount');
    }

    public function religion(){
        return  $this->belongsTo('App\Models\MtReligion');
    }

    public function department(){
        return  $this->belongsTo('App\Models\MtDepartment');
    }

    public function status(){
        return  $this->belongsTo('App\Models\MtStatus');
    }
}
