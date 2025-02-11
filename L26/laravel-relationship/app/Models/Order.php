<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        //Il metodo withPivot() Serve a specificare quali colone aggiuntive della tabella di pivot devono essere recuperate assieme alla relazione molti a molti
        //withTimeStamp() Allo stesso modo, identifica la tabella Pvo e ne recupera i time stamps.
        return $this->belongsToMany(Product::class)->withPivot('quantity')->withTimestamps();
    }
}
