<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Gallery\GalleryImage;
use Illuminate\Contracts\View\View;

class GalleryController extends Controller
{
    public function index(): View
    {
        return view('pages.gallery')->with(['images' => GalleryImage::all()]);
    }
}
