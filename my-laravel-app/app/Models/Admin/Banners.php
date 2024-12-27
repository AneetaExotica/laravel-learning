<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','image','buttontext','buttonlink','mil_people','kilometers','price','buttontext2','buttonlink2'];
}
