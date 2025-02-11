<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function orders(){
        //Il metodo withPivot() Serve a specificare quali colone aggiuntive della tabella di pivot devono essere recuperate assieme alla relazione molti a molti
        //withTimeStamp() Allo stesso modo, identifica la tabella Pvo e ne recupera i time stamps.
        return $this->belongsToMany(Order::class)->withPivot('quantity')->withTimestamps();
    }
}
