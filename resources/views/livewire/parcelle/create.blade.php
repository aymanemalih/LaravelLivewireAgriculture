<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Agriculteur nom</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" wire:model="Par_Nom">
        @error('Par_Nom') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Agriculteur prenom<</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="Par_Lieu" >
        @error('Par_Lieu') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Agriculteur Residance</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" wire:model="Par_Superfecie" >
        @error('Par_Superfecie') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput4">Agriculteur Residance</label>
        <input type="text" class="form-control" id="exampleFormControlInput4" wire:model="Par_Prop" >
        @error('Par_Prop') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>