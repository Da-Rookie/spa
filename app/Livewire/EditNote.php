<?php

namespace App\Livewire;

use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\On;

class EditNote extends Component
{
    public $name, $email, $wa_number, $content, $noteId;
    
    #[On('edit-note')]
    
    public function editNote($id) 
    {
        //  dd("editing note id: $id");
        $note = \App\Models\Note::findOrFail($id);
        $this->noteId = $note->id;
        $this->name = $note->name;
        $this->email = $note->email;
        $this->wa_number = $note->wa_number;
        $this->content = $note->content;
        // open edit note modal
        Flux::modal('edit-note')->show();

    }

    public function update() 
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$this->noteId,
            'wa_number' => 'nullable|string|max:255',
            'content' => 'nullable|string',
        ]);

        $note = \App\Models\Note::findOrFail($this->noteId);
        $note->update([
            'name' => $this->name,
            'email' => $this->email,
            'wa_number' => $this->wa_number,
            'content' => $this->content,
        ]);

        // close edit note modal
        Flux::modal('edit-note')->close();
        // display flash message
        session()->flash('success', 'Note updated successfully.');
        // redirect to notes page
        $this->redirectRoute('notes', navigate: true);
        Flux::modal('edit-note')->close();

    }

    public function render()
    {
        return view('livewire.edit-note');
    }
}
