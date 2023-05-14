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

    public function images()
    {
        return $this->hasMany(Media::class, 'module_id')->where(['module'=>'nanny', 'type'=>'nanny_images']);
    }
    
    public function country()
    {
        return $this->belongsTo(Country::class, 'nationality_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
