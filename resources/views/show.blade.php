@extends('layout.app')

@section('title', 'Directory')

@section('content')
@foreach($data as $client)
<section class="text-center mt-4">
    <h1>{{ $client->name }} {{ $client->last_name }}</h1>
    <span>{{ $client->card_id }}</span>
</section>
<section>
    <table class="table table-dark table-hover text-center mt-5 mb-5">
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
                        <a href="" type="button" class="btn btn-primary">Show</a>
                        <a href="" type="button" class="btn btn-warning">Edit</a>
                        <a href="" type="button" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endforeach
@endsection