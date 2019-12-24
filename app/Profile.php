<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded = [];
    public  function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/noImage.jpg';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class); //User::class
    }

    public function user()
    {

        return $this->belongsTo(User::class);
    }
}
