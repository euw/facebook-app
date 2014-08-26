<?php namespace Euw\FacebookApp\Modules\Users\Models;

use Carbon\Carbon;

class User extends \Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    protected $softDelete = false;

    protected $fillable = [
        'tenant_id',
        'fb_id',
        'first_name',
        'last_name',
        'email'
    ];



}