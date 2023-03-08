<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class propertyModel extends Model
{

    use HasFactory, HasApiTokens, Notifiable;
    protected $table = "properties";
    protected $primaryKey = "id";
}
