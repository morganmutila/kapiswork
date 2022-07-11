<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use App\Models\Click;
use App\Models\Category;
use App\Models\Location;
use App\Models\WorkType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function location(){
        return $this->hasOne(Location::class);
    }

    public function category(){
        return $this->hasOne(Category::class);
    }

    public function clicks(){
        return $this->hasMany(Click::class);
    }

    public function tags(){
        return $this->BelongsToMany(Tag::class);
    }

    public function worktype(){
        return $this->hasOne(WorkType::class);
    }
}
