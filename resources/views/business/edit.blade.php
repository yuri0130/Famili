@extends('layouts.app') @extends('layouts.nav') @section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">施設を登録</div>

                <div class="card-body">
                    <form
                        method="PATCH"
                        action="{{ '/business/'.$business->id }}"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="form-group row mt-2">
                            <label
                                for="name"
                                class="col-md-4 col-form-label text-md-right"
                                >施設名</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="name"
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    name="name"
                                    value="{{ $business->name }}"
                                    required
                                    autocomplete="name"
                                    autofocus
                                />

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                for="prefecture"
                                class="col-md-4 col-form-label text-md-right"
                                >都道府県</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="prefecture"
                                    type="text"
                                    class="form-control @error('prefecture') is-invalid @enderror"
                                    name="prefecture"
                                    value="{{ $business->prefecture }}"
                                    required
                                    autocomplete="prefecture"
                                />

                                @error('prefecture')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                for="address"
                                class="col-md-4 col-form-label text-md-right"
                                >住所</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="address"
                                    type="text"
                                    class="form-control @error('address') is-invalid @enderror"
                                    name="address"
                                    value="{{ $business->address }}"
                                    required
                                    autocomplete="address"
                                />

                                @error('adress')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                for="contact"
                                class="col-md-4 col-form-label text-md-right"
                                >電話番号</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="contact"
                                    type="text"
                                    class="form-control @error('contact') is-invalid @enderror"
                                    name="contact"
                                    value="{{ $business->contact }}"
                                    required
                                    autocomplete="contact"
                                />

                                @error('contact')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                for="url"
                                class="col-md-4 col-form-label text-md-right"
                                >ホームページ</label
                            >
                            <div class="col-md-6">
                                <input
                                    id="url"
                                    type="text"
                                    class="form-control @error('url') is-invalid @enderror"
                                    name="url"
                                    value="{{ $business->url }}"
                                    required
                                    autocomplete="url"
                                />

                                @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                for="description"
                                class="col-md-4 col-form-label text-md-right"
                                >施設の説明</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="description"
                                    type="text"
                                    class="form-control @error('description') is-invalid @enderror"
                                    name="description"
                                    value="{{ $business->description }}"
                                    required
                                    autocomplete="description"
                                />

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                for="image"
                                class="col-md-4 col-form-label text-md-right"
                                >画像</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="image"
                                    type="file"
                                    class="form-control-file @error('image') is-invalid @enderror"
                                    name="image"
                                    value="{{ $business->image }}"
                                    required
                                    autocomplete="image"
                                />

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    登録する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
