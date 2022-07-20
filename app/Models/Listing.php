<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use App\Models\Click;
use App\Models\Category;
use App\Models\Location;
use App\Models\WorkType;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'urgent' => true,
        'number_of_workers' => 'integer',
        'title'         => 'string',
        'slug'          => 'string',
        'location'      => 'string',
        'description'   => 'string',
        'wage'          => 'integer',
        'contact'       => 'string',
    ];

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

    public function work_type(){
        return $this->belongsTo(WorkType::class);
    }

    // Custom functions

    public function brief(int $words=90):string{
        return Str::limit($this->attributes['description'], $words);
    }

    public function getWageAttribute(){
        return Str::of(number_format($this->attributes['wage']))->prepend('K');
    }
}
