<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Permission extends \Spatie\Permission\Models\Permission
{
    use HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';
}
