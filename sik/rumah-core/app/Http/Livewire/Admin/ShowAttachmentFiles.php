<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\LearningMaterial;
use App\Models\LearningMaterialAttachment;
use Illuminate\Support\Facades\Storage;

class ShowAttachmentFiles extends Component
{
    public $attachments;

    public $learningMaterialId;

    public $learningMaterial;

    private $state = 'displayFiles';

    private $learningMaterialAttachment;

    public function render()
    {
        return view('livewire.admin.show-attachment-files', [
            'state' => $this->state,
            'learningMaterialAttachment' => $this->learningMaterialAttachment,
            'learningMaterial' => $this->learningMaterial,
        ]);
    }

    public function mount($learningMaterialId)
    {
        $this->learningMaterial = LearningMaterial::find($learningMaterialId);

        $this->attachments = $this->learningMaterial ?
            $this->learningMaterial->attachments :
            collect([]);
    }


    public function delete($id)
    {
        $file = LearningMaterialAttachment::find($id);

        if ($file) {
            $file->delete();

            Storage::delete($file->file_name_hash);
        }

        $this->learningMaterial->refresh();

        $this->attachments = $this->learningMaterial->attachments;
    }

    public function promptDelete($id)
    {
        $this->state = 'promptDelete';
        $this->learningMaterialAttachment = LearningMaterialAttachment::find($id);
    }

    public function display($id = null)
    {
        $this->learningMaterial = LearningMaterial::find($id);

        $this->attachments = $this->learningMaterial->attachments;
    }
}
