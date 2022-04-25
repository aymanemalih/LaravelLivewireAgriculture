    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Agriculteur nom</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title"
                   wire:model="Agr_Nom">
            @error('Agr_Nom') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Agriculteur prenom<</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="Agr_Prenom">
            @error('Agr_Prenom') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput3">Agriculteur Residance</label>
            <input type="text" class="form-control" id="exampleFormControlInput3" wire:model="Agr_Resid">
            @error('Agr_Resid') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <button wire:click.prevent="store()" class="btn btn-success">Save</button>
    </form>
