<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;


    protected $dates = ['available_from'];


    public function images()
    {
        return $this->morphMany(Image::class, 'imageable')->orderBy('id','asc')->where('image','!=','No Image');
	}

    public function reservation(){
        return $this->belongsToMany(Reservation::class);
    }


    public function attributes(){
        return $this->belongsToMany(Attribute::class);
    }


     


}
