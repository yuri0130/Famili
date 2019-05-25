@extends('layouts.app') @extends('layouts.nav') @section('content')

<div class="container mt-5">
    <h1>{{ $business->name }}</h1>

    <form
        method="POST"
        action="/businesses/{{ $business->id }}"
        enctype="multipart/form-data"
    >
        @csrf
        <div class="form-group row mt-2">
            <div class="col-md-6">
                <input
                    id="comment"
                    type="text"
                    class="form-control"
                    name="comment"
                    value="{{ old('comment') }}"
                    required
                    autocomplete="comment"
                    autofocus
                    placeholder="こちらにレビューを残してください"
                />
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    書き込む
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
