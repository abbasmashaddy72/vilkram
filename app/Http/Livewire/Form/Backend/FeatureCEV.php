<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Feature;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class FeatureCEV extends Component
{
    use WithFileUploads;

    // Model Values
    public $team_id, $image, $title, $excerpt, $description;

    // Custom Values
    public $action, $isUploaded = false, $feature;

    protected $rules = [
        'team_id' => '',
        'image' => '',
        'title' => '',
        'excerpt' => '',
        'description' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        if (gettype($this->image) != 'string') {
            $this->isUploaded = true;
        }
    }

    public function store()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('feature_images');
        }

        Feature::create($validatedData);

        notify()->success('Feature Saved Successfully!');

        return $this->redirectRoute('admin.feature.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('feature_images');
        }

        Feature::where('id', $this->feature)->update($validatedData);

        notify()->success('Feature Updated Successfully!');

        return $this->redirectRoute('admin.feature.index');
    }

    public function mount($feature)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Feature::findOrFail($feature);
            $this->team_id = $data->team_id;
            $this->image = $data->image;
            $this->title = $data->title;
            $this->excerpt = $data->excerpt;
            $this->description = $data->description;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.feature-c-e-v');
    }
}
