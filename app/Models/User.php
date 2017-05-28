<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class User
 * @package App\Models
 * @mixin Model
 * @mixin Builder
 *
 * @property int id
 * @property string name
 * @property string email
 * @property string password
 * @property Carbon created_at
 * @property Carbon updated_at
 *
 * @property DatabaseNotificationCollection|DatabaseNotification[] notifications
 *
 * @method static User first()
 * @method static User find($id)
 * @method static User create($attributes)
 * @method static User where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static User whereNull($column, $boolean = 'and', $not = false)
 * @method static User whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static User orderBy($column, $direction = 'asc')
 * @method static LengthAwarePaginator paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];
}
