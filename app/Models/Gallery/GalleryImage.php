<?php

namespace App\Models\Gallery;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = ['name', 'file_path'];
}
