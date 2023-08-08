<?php

namespace App\Traits;

use Str;

trait UploadFormFile
{
    protected $uploadFileFormError;

    public function uploadFileFormTo($form, $destinationPath)
    {
        if (! $form->getData())
        {
            return null;
        }

        $this->uploadFileFormError = null;

        $uploadedFile = $form->getData();
        $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = Str::slug($originalFilename);
        $newFilename = $safeFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();

        $destinationPath OR $destinationPath = storage_path();

         // Move the file to the directory where brochures are stored
        try {
            $uploadedFile->move(
                $destinationPath,
                $newFilename
            );

        } catch (FileException $e) {
            $this->uploadFileFormError = $e;

            return null;
        }

        return $newFilename;
    }
}
