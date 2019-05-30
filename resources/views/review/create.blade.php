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
                <span
                    onmouseover="starRating(this)"
                    onclick="starRating(this)"
                    id="star-1"
                    style="font-size:20px;cursor:pointer; color:orange;"
                    class="fa fa-star"
                ></span>
                <span
                    onmouseover="starRating(this)"
                    onclick="starRating(this)"
                    id="star-2"
                    style="font-size:20px;cursor:pointer;"
                    class="fa fa-star"
                ></span>
                <span
                    onmouseover="starRating(this)"
                    onclick="starRating(this)"
                    id="star-3"
                    style="font-size:20px;cursor:pointer;"
                    class="fa fa-star"
                ></span>
                <span
                    onmouseover="starRating(this)"
                    onclick="starRating(this)"
                    id="star-4"
                    style="font-size:20px;cursor:pointer;"
                    class="fa fa-star"
                ></span>
                <span
                    onmouseover="starRating(this)"
                    onclick="starRating(this)"
                    id="star-5"
                    style="font-size:20px;cursor:pointer;"
                    class="fa fa-star"
                ></span>
                <br />
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
<script>
    var count;
    function starRating(item) {
        count = item.id[0];
        sessionStorage.starRating = count;
        var subid = item.id.substring(1);
        for (var i = 0; i < 5; i++) {
            if (i < count) {
                document.getElementById(i + 1 + subid).style.color = 'orange';
            } else {
                document.getElementById(i + 1 + subid).style.color = 'black';
            }
        }
    }
    function result() {
        //Rating : Count
        //Review : Comment(id)
        alert(
            'Rating : ' +
                count +
                '\nReview : ' +
                document.getElementById('comment').value
        );
    }
</script>
@endsection
