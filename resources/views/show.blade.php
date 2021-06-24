@extends('layout.app')

@section('title', 'Client')

@section('content')
@foreach($data as $client)
<section class="text-center mt-4">
    <h1>{{ $client->name }} {{ $client->last_name }}</h1>
    <span>{{ $client->card_id }}</span>
</section>
<section>
    <div class="d-grid gap-2 mt-5">
        <a href="{{ route('create_address', $client->id) }}" class="btn btn-success"><strong>Add address</strong></a>
    </div>
    <table class="table table-dark table-hover text-center mt-2 mb-5">
        <thead>
            <th>Id</th>
            <th>Address</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($addresses as $address)
            <tr>
                <td>{{ $address->id }}</td>
                <td>{{ $address->address }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ route('edit_address', $address->id) }}" type="button" class="btn btn-warning">Edit</a>
                        <a onclick="confirmDelete(event)" href="{{ route('destroy_address', $address->id) }}" type="button" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endforeach
@endsection

@section('scripts')

<script>
    function confirmDelete(event)
    {
       if(confirm("The address will be deleted. Do you want to proceed?"))
       {
           return true;
       }
       else {
           event.preventDefault();
           return false;
       }
    }
</script>

@endsection