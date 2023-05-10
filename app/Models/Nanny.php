<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nanny extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(NanniesComment::class);
    }

    public function backgrounds()
    {
        return $this->hasMany(NanniesBackground::class, 'nanny_id');
    }
}
