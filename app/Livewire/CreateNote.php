<?php

namespace App\Livewire;

use Flux\Flux;
use App\Models\Note;
use Livewire\Component;

class CreateNote extends Component
{
    public $name;
    public $email;
    public $wa_number;
    public $content;

    protected function rules() {
       return [
           'name' => 'required|string|max:255',
           'email' => 'required|email|max:255|unique:users',
           'wa_number' => 'nullable|string|max:255',
           'content' => 'nullable|string',
       ]; 
    }
    
    public function save(){
        $this->validate();

        // dd('ok');

        // store in database
        Note::create([
            'name' => $this->name,
            'email' => $this->email,
            'wa_number' => $this->wa_number,
            'content' => $this->content,
        ]);

        // reset form fields
        $this->reset();
        // close create note modal
        Flux::modal('create-note')->close();
        // display flash message
        session()->flash('success', 'Note created successfully.');
        // redirect to notes page
        $this->redirectRoute('notes', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-note');
    }
}
