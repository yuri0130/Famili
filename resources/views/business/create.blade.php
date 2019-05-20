@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ビジネスを登録</div>

                <div class="card-body">
                    <form
                        method="POST"
                        action="{{ route('businesses.store') }}"
                    >
                        @csrf

                        <div class="form-group row">
                            <label
                                for="name"
                                class="col-md-4 col-form-label text-md-right"
                                >ビジネス名</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="name"
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    name="name"
                                    value="{{ old('name') }}"
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
                                for="address"
                                class="col-md-4 col-form-label text-md-right"
                                >住所</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="address"
                                    type="text"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="address"
                                    value="{{ old('address') }}"
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
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="contact"
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
                                >ウェブサイト</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="url"
                                    type="text"
                                    class="form-control"
                                    name="url"
                                    autocomplete="url"
                                />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                for="description"
                                class="col-md-4 col-form-label text-md-right"
                                >ビジネスの説明</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="description"
                                    type="text"
                                    class="form-control"
                                    name="description"
                                    required
                                    autocomplete="description"
                                />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                for="image"
                                class="col-md-4 col-form-label text-md-right"
                                >ビジネス画像</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="image"
                                    type=""
                                    class="form-control"
                                    name="image"
                                    autocomplete="image"
                                />
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    登録
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
