<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// commands
// php artisan make:model Sentiments -m
// php artisan make:seeder SentimentsTableSeeder
// php artisan db:seed --class=SentimentsTableSeeder
// php artisan migrate:reset
// php artisan migrate:fresh --seed
// php artisan make:controller UserController
// php artisan make:migration --table=users adds_api_token_to_users_table
// php artisan ui bootstrap --auth
class Sentiments extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'groupName',
        'negative',
        'positive',
        'overallPercentage',
        'createdAt'
    ];
}