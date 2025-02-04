<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //No, se hai sbagliato il nome della tabella, il model non funzionerà correttamente. Hai la possibilità di adoperare la proprietà table ? Per definire qual è il nome attuale della tabella
    // protected $table = 'pizze';
    protected $fillable = ['gusto','prezzo','available'];
}
