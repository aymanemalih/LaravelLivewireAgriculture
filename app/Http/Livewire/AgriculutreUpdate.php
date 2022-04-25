<?php

namespace App\Http\Livewire;

use App\Models\Agriculteur;
use Illuminate\Auth\Access\Gate;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AgriculutreUpdate extends ModalComponent
{

    public $Agri, $Agr_Id, $Agr_Nom, $Agr_Prenom, $Agr_Resid;

    public function mount($Agr_Id)
    {
        $Agri = Agriculteur::findOrFail($Agr_Id);
        $this->Agr_Id = $Agr_Id;
        $this->Agr_Prenom = $Agri->Agr_Prenom;
        $this->Agr_Nom = $Agri->Agr_Nom;
        $this->Agr_Resid = $Agri->Agr_Resid;
    }

    public function update()
    {
        Agriculteur::where('Agr_Id', $this->Agr_Id)
            ->update(['Agr_Nom' => $this->Agr_Nom,
                'Agr_Prenom' => $this->Agr_Prenom,
                'Agr_resid' => $this->Agr_Resid
            ]);

        $this->closeModalWithEvents([
            Agricultures::getName() => 'userModified',
        ]);
    }

    public function render()
    {
        return view('livewire.agriculteur.update');
    }

    public function cancel()
    {
        return null;
    }

    public static function destroyOnClose(): bool
    {
        return true;
    }
}
