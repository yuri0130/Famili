@extends('layouts.app') @extends('layouts.nav') @section('content')

<div class="container mt-5">
    <h1>
        <strong>
            <a
                href="/businesses/{{ $business->id }}"
                style="bolder"
                >{{ $business->name }}</a
            ></strong
        >
    </h1>

    <form
        method="POST"
        action="/businesses/{{ $business->id }}/review"
        enctype="multipart/form-data"
    >
        @csrf

        <div
            class="form-group row mt-3"
            style="border: 1px solid #ccc; border-radius: 4px;
               cursor: text; padding: 18px; max-width: 630px;"
        >
            <div class="col-md-6">
                <script>
                    function myFunction() {
                        document.getElementById('rating');
                    }
                    <div>
                        <div class="row mb-2 pl-3">
                            <div class="bg-secondary mx-1 p-1" id="star-1">
                                <i class="fas fa-star text-white" />
                            </div>
                            <div class="bg-secondary mx-1 p-1" id="star-2">
                                <i class="fas fa-star text-white" />
                            </div>
                            <div class="bg-secondary mx-1 p-1" id="star-3">
                                <i class="fas fa-star text-white" />
                            </div>
                            <div class="bg-secondary mx-1 p-1" id="star-4">
                                <i class="fas fa-star text-white" />
                            </div>
                            <div class="bg-secondary mx-1 p-1" id="star-5">
                                <i class="fas fa-star text-white" />
                            </div>
                        </div>
                    </div>;
                </script>
                <textarea
                    id="comment"
                    name="comment"
                    style="font-size: 18px; border: 0; 
                    outline: none; resize: none; width: 500px; 
                    min-height: 258px; background-color: unset; 
                    padding: 0;"
                    placeholder="こちらにレビューを残してください。"
                >
                </textarea>

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
                <button
                    type="submit"
                    class="btn btn-primary"
                    style="min-width: 240px;"
                >
                    書き込む
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
