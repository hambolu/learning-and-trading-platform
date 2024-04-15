<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait ImageUploadTrait
{
    public function uploadImage($request, $fieldName, $storageFolder)
    {
        if ($request->hasFile($fieldName)) {
            $image = $request->file($fieldName);
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs($storageFolder, $imageName, 'public');
            return $imagePath;
        }

        return null;
    }
}
