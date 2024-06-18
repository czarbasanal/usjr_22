<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';
    protected $primaryKey = 'progid';
    public $incrementing = false;

    public function college()
    {
        return $this->belongsTo(College::class, 'progcollid');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'progdeptid');
    }
}
