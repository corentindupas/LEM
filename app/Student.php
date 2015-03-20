<?php

namespace studentApp;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'surname', 'formation', 'bio', 'status'];

    public function getDate(){
        return $this->created_at;
    }
}
