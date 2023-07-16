@extends('user.layout.main')

@section('containeruser')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">mudahApps.com</h1>
    </div>
    <div class="container">
        <div class="d-flex">
            <img class="width" src="{{ asset('storage/post-images/' . $aplikasi->image) }}" alt="">
            <div class="py-4 px-2">
                <div class="nama align-middle fw-bolder">{{ $aplikasi->name }}</div>
                <div class="nama align-middle px-2">{{ $aplikasi->version }}</div>
            </div>
        </div>
        <div class="container">
            <span class="mt-4">
                {{ $aplikasi->body }}
            </span>
        </div>
        <div class="button">
            <a href="{{ $aplikasi->link }}"><button type="button" class=" btn btn-danger">Download</button></a>
        </div>

        {{-- <div class="col-lg-8">
            <h2 class="">{{ $aplikasi->name }}</h2>

            <a href="/" class="btn btn-info"><span data-feather="arrow-left"></span> Back</a> --}}
        {{-- <a href="/dashboard/blogs/{{ $blog->slug }}/edit" class="btn btn-warning"><span
                            data-feather="edit"></span>
                        Edit</a>
                    {{-- <form action="/dashboard/blogs/{{ $blog->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure ?')"><span
                                data-feather="trash-2"></span> Delete</button>
                    </form>

                    <img src="http://source.unsplash.com/1200x400?{{ $blog->category->name }}"
                        alt="{{ $blog->category->name }}" class="img-fluid mt-5">

                    <article class="my-5">
                        {!! $blog->body !!}
                    </article>
                </div>
                --}}
    </div>
@endsection
