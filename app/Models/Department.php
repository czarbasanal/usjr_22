<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $primaryKey = 'deptid';
    public $incrementing = false;

    public function college()
    {
        return $this->belongsTo(College::class, 'deptcollid');
    }
}
