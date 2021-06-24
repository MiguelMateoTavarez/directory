@extends('layout.app')

@section('title', 'Create address')
@section('content')

<form class="mt-5" action="{{ route('store_address') }}" method="POST">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="mb-3">
                <input class="form-control" type="text" name="address" placeholder="Address">
            </div>
            <div class="mb-3">
                <input class="form-control" type="hidden" name="client_id" value="{{ $id }}">
            </div>
            <div class="mb-3 text-center d-grid gap-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Save">
            </div>
        </div>
    </div>
</form>

@endsection