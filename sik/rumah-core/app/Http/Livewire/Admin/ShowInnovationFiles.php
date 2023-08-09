<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Innovation;
use App\Models\InnovationFile;

class ShowInnovationFiles extends Component
{
    public $innovationFiles;

    public $innovationId;

    public $innovation;

    private $state = 'displayFiles';

    private $innovationFile;

    public function render()
    {
        return view('livewire.admin.show-innovation-files', [
            'state' => $this->state,
            'innovationFile' => $this->innovationFile,
            'innovation' => $this->innovation,
        ]);
    }

    public function mount($innovationId)
    {
        $this->innovation = Innovation::find($innovationId);

        $this->innovationFiles = $this->innovation ?
            $this->innovation->innovationFiles :
            collect([]);
    }


    public function delete($id)
    {
        $file = InnovationFile::find($id);

        if ($file) {
            $file->delete();
        }

        $this->innovation->refresh();

        $this->innovationFiles = $this->innovation->innovationFiles;
    }

    public function promptDelete($id)
    {
        $this->state = 'promptDelete';
        $this->innovationFile = InnovationFile::find($id);
    }

    public function display($id = null)
    {
        $this->innovation = Innovation::find($id);

        $this->innovationFiles = $this->innovation->innovationFiles;
    }
}
