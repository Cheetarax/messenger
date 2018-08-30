<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    //Añadimos el campo contact_name a la respuesta JSON que nos devuelve el servidor. Este campo no existe en la tabla conversaciones
    protected $appends = ['contact_name'];

    public function getContactNameAttribute()
    {
    	return $this->contact()->first(['name'])->name;
    }

    public function contact()
    {
        //Establecemos la relación entre la conversación y el ontacto para que pase el nombre de este desde el servidor
        //Conversación N    1 User (contact)
        return $this->belongsTo(User::class);
    }
}
