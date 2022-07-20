<?php

namespace App\Models;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function listing(){
        return $this->hasOne(Listing::class);
    }
}
