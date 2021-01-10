<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait ImageUpload
{
    public function ImageUpload(UploadedFile $image): string
    {
        $date = time();
        $extension = Str::lower($image->getClientOriginalExtension());
        $fullName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME).'-'.$date.'.'.$extension;

        $uploadPath = 'image/';
        $filePath = $uploadPath.$fullName;

        $image->move($uploadPath, $fullName);

        return $filePath;
    }
}
