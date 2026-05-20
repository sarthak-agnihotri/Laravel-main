<?php
//no need fillable for insert function because we are using query builder not Eloquent ORM
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    //
    use HasFactory;
    protected $fillable=[
        'movie_name',
        'rating',
        'description',
        'release_date',
        'category',
        'created_at',
        'updated_at'
    ];
}
