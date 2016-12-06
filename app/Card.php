<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    public function notes(){
      return $this->hasMany(Note::Class);
    }

    public function addNote(Note $note){
      $this->notes()->save($note);
    }
}
