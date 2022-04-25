<div class="container">
    @if(!$isOpen)
        @include('livewire.agriculteur.create')
    @endif
    <table class="table table-dark table-bordered table-striped mt-5">
        <thead class="thead-dark">
        <tr>
            <th>Agr_id</th>
            <th>Agr_nom</th>
            <th>Agr_prenom</th>
            <th>Agr_resid</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($agriculteur as $value)
            <tr>
                <td>{{ $value->Agr_Id }}</td>
                <td>{{ $value->Agr_Nom }}</td>
                <td>{{ $value->Agr_Prenom }}</td>
                <td>{{ $value->Agr_Resid }}</td>
                <td>
                    @if(auth()->user()->role == 'admin' or auth()->user()->role == 'Editor')
                    <button class="btn btn-primary btn-sm"
                            onclick="Livewire.emit('openModal', 'agriculutre-update',{{ json_encode(["Agr_Id" => $value->Agr_Id]) }})">
                        Edit
                    </button>
                    <button wire:click="delete({{ $value->Agr_Id }})" class="btn btn-danger btn-sm">Delete</button>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@livewire('livewire-ui-modal')
@livewireScripts
