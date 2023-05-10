<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NanniesComment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function added_person()
    {
        return $this->belongsTo(Admin::class, 'added_by');
    }
}
