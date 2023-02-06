<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Permission extends \Spatie\Permission\Models\Permission
{
    use HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;
}
