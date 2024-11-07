<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    use HasFactory;

    // protected $table = 'posts';

    protected function casts():array
    {
        return [
            'created_at' => 'datetime:d/m/Y',
            'updated_at' => 'datetime:d/m/Y',
        ];
    }

    protected function title (): Attribute 
    {
        return Attribute::make(
            get: function ($value) {
                return ucfirst($value);
            },
            set: function ($value) {
                return strtolower($value);
            }
        );
    }

    // public function getRouteKeyName()
    // {
    //     return 'title';
    // }
}
