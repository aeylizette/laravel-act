<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'informations';
    protected $fillable = [
        'name',
        'email',
        'contact',
        'summary',
        'skills1',
        'skills2',
        'skills3',
        'skills4',
        'certifications1',
        'certifications2',
        'address',
    ];
}
