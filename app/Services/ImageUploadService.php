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
        if ($existingModel->$columnName && $existingModel->$columnName) {
            $proFilePath = $existingModel->$columnName;
            $proPath = substr(strstr($proFilePath, 'public/'), strlen('public/'));
            if (file_exists(public_path('/public/'.$proPath))) {
                \File::delete(public_path('/public/'.$proPath));
            }
        }

        // Update model with new image path
        $existingModel->update([$columnName => $imagePath]);

        return ['success' => true, 'image_path' => $imagePath];
    }
}
