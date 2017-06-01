<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class Url
 * @package App\Models
 * @mixin Model
 * @mixin Builder
 *
 * @property int id
 * @property int user_id
 * @property string key
 * @property string url
 * @property Carbon created_at
 * @property Carbon updated_at
 *
 * @method static Url first()
 * @method static Url find($id)
 * @method static Url create($attributes)
 * @method static Url where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Url whereNull($column, $boolean = 'and', $not = false)
 * @method static Url whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static Url orderBy($column, $direction = 'asc')
 * @method static LengthAwarePaginator paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 */
class Url extends Model
{
    /**
     * The table name.
     *
     * @var string
     */
    protected $table = 'urls';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'key', 'url'
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName() {
        return 'key';
    }
}
