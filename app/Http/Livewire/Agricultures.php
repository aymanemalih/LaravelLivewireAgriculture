<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Agriculteur;

class Agricultures extends Component
{
    public $isOpen = 0;
    public $agriculteur , $Agr_Id , $Agr_Nom , $Agr_Prenom , $Agr_Resid;
    public function render()
    {
        //$this->agriculteur = DB::table('agriculteurs')->get();
        $this->agriculteur = Agriculteur::all();
        return view('livewire.agricultures');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->title = '';
        $this->description = '';
        $this->post_id = '';
    }

    public function store()
    {
        $this->validate([
            'Agr_Nom' => 'required',
            'Agr_Prenom' => 'required',
            'Agr_Resid' => 'required'
        ]);

        Agriculteur::updateOrCreate(['Agr_Nom' => $this->Agr_Nom ,'Agr_Prenom' => $this->Agr_Prenom , 'Agr_Resid' => $this->Agr_Resid]);
        session()->flash('message',
        $this->Agr_Id ? 'Agr Updated Successfully.' : 'Agr Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }




    public function delete($id)
    {
        Agriculteur::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
