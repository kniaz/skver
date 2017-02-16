<?php

namespace App\Services;

use App\Menu;
use Intervention\Image\ImageManager;

class ImageService
{
    public function resizeImage($path, $w = 600, $h = 350)
    {
        $savePath = str_replace('.jpg', "_{$w}x{$h}.jpg", $path);
        $savePath = str_replace('.png', "_{$w}x{$h}.png", $savePath);

        if (!file_exists($savePath)) {

        }
        $manager = new ImageManager(array('driver' => 'imagick'));

        list($width, $height) = getimagesize(public_path() . $path);
        $originRatio = $width / $height;
        $needRatio   = $w / $h;
        $needWidth   = $w;
        $needHeight  = $h;
        if ($originRatio < $needRatio) {
            $needHeight = round($needWidth / $originRatio);
        } else {
            $needWidth = round($needHeight * $originRatio);
        }
        $manager->make(public_path() . $path)->resize($needWidth, $needHeight)->crop($w, $h)->save(public_path() . $savePath);
        return $savePath;
    }
}