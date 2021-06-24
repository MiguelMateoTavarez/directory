@extends('layout.app')

@section('title', 'Create address')
@section('content')

@foreach($addresses as $address)
<form class="mt-5" action="{{ route('update_address', $address->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="mb-3">
                <input class="form-control" type="text" name="address" placeholder="Address" value="{{ $address->address }}">
            </div>
            <div class="mb-3">
                <input class="form-control" type="hidden" name="client_id" value="{{ $address->client_id }}">
            </div>
            <div class="mb-3 text-center d-grid gap-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Save">
            </div>
        </div>
    </div>
</form>
@endforeach
@endsection