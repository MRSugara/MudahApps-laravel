@extends('user.layout.main')

@section('containeruser')
    {{-- @include('user.dashboard.filter') --}}
    <div class="items" id="daftarKategori">
        @foreach ($aplikasi as $aplikasis)
            <div class="item container">
                <a href="/userr/{{ $aplikasis->id }}" class="link-item">
                    <img src="{{ asset('storage/post-images/' . $aplikasis->image) }}" alt="" class="image">
                    <div class="note">{{ $aplikasis->name }}</div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
