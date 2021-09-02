<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UsersModel.
 *
 * @property int         $id
 * @property string      $name
 * @property string      $email
 * @property string|null $email_verified_at
 * @property string      $password
 * @property string|null $remember_token
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|UsersModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UsersModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UsersModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|UsersModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersModel whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersModel whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersModel wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersModel whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class UsersModel extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
