<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    public function notes(){
      return $this->hasMany(Note::Class);
    }

    public function addNote(Note $note, $userId){
      $note->user_id = $userId;
      $this->notes()->save($note);
    }
}
