@extends('layout.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="container">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Create new aplikasi</h1>
            </div>

            <div class="col-lg-8 mb-5">
                <form action="/" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Nama aplikasi</label>
                        <input type="input" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" autofocus value="{{ old('name') }}" autocomplete="off" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">link</label>
                        <input type="input" class="form-control @error('link') is-invalid @enderror" id="link"
                            name="link" value="{{ old('link') }}" required autocomplete="off">
                        @error('link')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="version" class="form-label">version</label>
                        <input type="input" class="form-control @error('version') is-invalid @enderror" id="version"
                            name="version" value="{{ old('link') }}" required autocomplete="off">
                        @error('version')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        <input id="body" type="hidden" name="body" class="@error('body') is-invalid @enderror">
                        <trix-editor input="body"></trix-editor>
                        @error('body')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary m-2">Create aplikasi</button>
                    <a href="/" class="m-2 text-decoration-none text-black-50 ml-5">Cancel</a>
                </form>
            </div>
        </div>
    </main>
@endsection
