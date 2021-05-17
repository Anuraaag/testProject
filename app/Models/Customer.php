<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // fillable example - allows mass assignment of the mentioned elements
    // protected $fillable = ['name', 'email', 'category'];

    // guarded example - restricts mass assignment of the mentioned elements
    // This is preferred if the fields are properly mentioned and validated in the controller
    protected $guarded = [];

    // scope has this format. "scope" in lower followed by the name
    public function scopeActive($query){
        return $query->where('category', 1);
    }

    public function scopeInactive($query){
        return $query->where('category', 2);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

}
