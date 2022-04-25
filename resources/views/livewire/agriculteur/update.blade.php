<div class="flex items-center justify-center h px-4 pt-4  text-center sm:block sm:p-0">
    <form>
        <div class="form-group">
            <input type="hidden" wire:model="Agr_Id">
            <label for="exampleFormControlInput1">Agr_Nom</label>
            <input type="Agr_Nom" class="form-control" wire:model="Agr_Nom" id="exampleFormControlInput1">
            @error('Agr_Nom') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Agr_Prenom</label>
            <input type="text" class="form-control" wire:model="Agr_Prenom" id="exampleFormControlInput2">
            @error('Agr_Prenom') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput3">Agr_Resid</label>
            <input type="text" class="form-control" wire:model="Agr_Resid" id="exampleFormControlInput3">
            @error('Agr_Resid') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
        <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
    </form>
</div>
