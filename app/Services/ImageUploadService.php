<?php
namespace App\Services;

use Illuminate\Support\Facades\File;

class ImageUploadService
{
    public function upload($model, $columnName, $folderName, $file, $modelId)
    {
        // Ensure the file is valid
        if (!$file->isValid()) {
            return ['error' => 'Invalid file'];
        }

        // Find the model instance by ID
        $existingModel = $model::find($modelId);
        if (!$existingModel) {
            return ['error' => 'Model not found'];
        }

        // Generate filename
        $filename = time() . '_' . $file->getClientOriginalName();
        
        // Define path
        $path = 'public/uploads/' . $folderName . '/';
        
        // Move file to storage
        $file->move($path, $filename);

        // Build image path
        $imagePath = $path . $filename;

        // Handle existing image
        $existingImagePath = $existingModel->$columnName;
        if ($existingImagePath && File::exists(public_path($existingImagePath))) {
            File::delete(public_path($existingImagePath));
        }

        // Update model with new image path
        $existingModel->update([$columnName => $imagePath]);

        return ['success' => true, 'image_path' => $imagePath];
    }
}
