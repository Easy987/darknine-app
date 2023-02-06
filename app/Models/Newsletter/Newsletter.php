<?php

namespace App\Models\Newsletter;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasUuids;

    protected $fillable = ['email'];
}
