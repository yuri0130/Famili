@extends('layouts.app') @extends('layouts.nav') @section('content')

<div class="container mt-5">
    <h1>{{ $business->name }}</h1>

    <form
        method="POST"
        action="/businesses/{{ $business->id }}/review"
        enctype="multipart/form-data"
    >
        @csrf

        <div class="form-group row mt-3">
            <div class="col-md-6">
                <textarea
                    id="comment"
                    name="comment"
                    style="width: 100%; height: 200px;"
                    placeholder="こちらにレビューを残してください。"
                >
                </textarea>
                <input name="rating" value="{{ $business->rating }}" />
                <input
                    type="hidden"
                    name="business_id"
                    value="{{ $business->id }}"
                />
                <input
                    type="hidden"
                    name="user_id"
                    value="{{ auth()->user() }}"
                />
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">
                    書き込む
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
