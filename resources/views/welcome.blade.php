@extends('layout.app')

@section('title', 'Directory')
@section('content')

<div class="d-grid gap-2 mt-5">
    <a href="{{ route('create') }}" class="btn btn-success"><strong>Create client</strong></a>
</div>
<table class="table table-dark table-hover text-center mt-2 mb-5">
    <thead>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Card ID</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach( $clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->last_name }}</td>
            <td>{{ $client->card_id }}</td>
            <td>
                <div class="btn-group" role="group">
                    <a href="{{ route('show', $client->id) }}" type="button" class="btn btn-primary">Show</a>
                    <a href="{{ route('edit', $client->id) }}" type="button" class="btn btn-warning">Edit</a>
                    <a onclick="confirmDelete(event)" href="{{ route('destroy', $client->id) }}" type="button" class="btn btn-danger">Delete</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('scripts')

<script>
    function confirmDelete(event)
    {
       if(confirm("The customer will be removed as will their addresses, still Do you want to proceed?"))
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