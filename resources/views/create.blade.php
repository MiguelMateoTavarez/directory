@extends('layout.app')

@section('title', 'Create client')
@section('content')

<form class="mt-5" action="{{ route('store') }}" method="POST">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="mb-3">
                <input class="form-control" type="text" name="name" placeholder="Name">
            </div>
            <div class="mb-3">
                <input class="form-control" type="text" name="last_name" placeholder="Last name">
            </div>
            <div class="mb-3">
                <input class="form-control" type="tel" name="card_id" placeholder="Card id" pattern="[0-9]{11}" onkeypress="preventInputNonNumber(event)">
            </div>
            <div class="mb-3 text-center d-grid gap-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Save">
            </div>
        </div>
    </div>
</form>

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