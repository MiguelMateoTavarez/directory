@extends('layout.app')

@section('title', 'Edit client')
@section('content')

@foreach($data as $client)
<form class="mt-5" action="{{ route('update', $client->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="mb-3">
                <input class="form-control" type="text" name="name" placeholder="Name" value="{{ $client->name }}">
            </div>
            <div class="mb-3">
                <input class="form-control" type="text" name="last_name" placeholder="Last name" value="{{ $client->last_name }}">
            </div>
            <div class="mb-3">
                <input class="form-control" type="tel" name="card_id" placeholder="Card id" pattern="[0-9]{11}" maxlength="11" onkeypress="preventInputNonNumber(event)" value="{{ $client->card_id }}">
            </div>
            <div class="mb-3 text-center d-grid gap-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Save">
            </div>
            @if($errors->any())
            <div class="alert alert-warning" role="alert">
                <p><strong>Please, fix these errors: </strong></p>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</form>
@endforeach
@endsection

@section('scripts')

<script>
    function preventInputNonNumber(event) {
        let char = String.fromCharCode(event.which);

        if (!(/[0-9]/.test(char))) {
            event.preventDefault();
        }
    }
</script>

@endsection