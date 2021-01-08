<?php

namespace App\Models\Traits\Attributes;
use App\Models\user;


trait ProdukAttributes{

function seller(){
	return $this->belongsTo(user::class,'id_user');
    }
    
}
