<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'studid';
    public $incrementing = false;

    public function college()
    {
        return $this->belongsTo(College::class, 'studcollid');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'studprogid');
    }
}
