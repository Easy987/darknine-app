<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Role extends \Spatie\Permission\Models\Role
{
    use HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;
}
