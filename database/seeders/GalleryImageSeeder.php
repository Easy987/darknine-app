<?php

namespace Database\Seeders;

use App\Models\Gallery\GalleryImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalleryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prefix = 'images/gallery/';

        for ($i = 1; $i <= 16; $i++) {
            $galleryImage = new GalleryImage();
            $galleryImage->file_path = $prefix . $i . '.jpg';
            $galleryImage->save();
        }
    }
}
