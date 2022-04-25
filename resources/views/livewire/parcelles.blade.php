<div class="container">
    @if($isOpen)
        @include('livewire.parcelle.update')
    @else
        @include('livewire.parcelle.create')
    @endif
    <table class="table table-dark table-bordered table-striped mt-5">
        <thead>
        <tr>
            <th>Par_Idf</th>
            <th>Par_Nom</th>
            <th>Par_Lieu</th>
            <th>Par_Superfecie</th>
            <th>Par_Prop</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($parcelle as $value)
            <tr>
                <td>{{ $value->Par_Idf }}</td>
                <td>{{ $value->Par_Nom }}</td>
                <td>{{ $value->Par_Lieu }}</td>
                <td>{{ $value->Par_Superfecie }}</td>
                <td>{{ $value->Par_Prop }}</td>
                <td>
                    @if(auth()->user()->role == 'admin' or auth()->user()->role == 'Editor')
                    <button wire:click="edit({{ $value->Par_Idf }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $value->Par_Idf }})" class="btn btn-danger btn-sm">Delete</button>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
