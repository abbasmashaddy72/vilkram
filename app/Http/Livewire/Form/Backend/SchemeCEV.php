<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Scheme;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class SchemeCEV extends Component
{
    use WithFileUploads;

    // Model Values
    public $name, $image, $link;

    // Custom Values
    public $action, $isUploaded = false, $scheme;

    protected $rules = [
        'name' => '',
        'image' => '',
        'link' => '',
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
            $validatedData['image'] = $this->image->store('scheme_images');
        }

        Scheme::create($validatedData);

        notify()->success('Scheme Saved Successfully!');

        return $this->redirectRoute('admin.scheme.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('scheme_images');
        }

        Scheme::where('id', $this->scheme)->update($validatedData);

        notify()->success('Scheme Updated Successfully!');

        return $this->redirectRoute('admin.scheme.index');
    }

    public function mount($scheme)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Scheme::findOrFail($scheme);
            $this->name = $data->name;
            $this->image = $data->image;
            $this->link = $data->link;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.scheme-c-e-v');
    }
}
