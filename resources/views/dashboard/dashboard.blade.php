@extends('layout.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">mudahApps.com</h1>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <a href="{{ route('aplikasi.create') }}" class="btn btn-primary mb-3">Create new aplikasi</a>
                {{-- @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Versi</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($aplikasi as $aplikasis)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $aplikasis->name }}</td>
                            <td>{{ $aplikasis->version }}</td>
                            <td>
                                <a href="{{ route('aplikasi.show', ['id' => $aplikasis->id]) }}"
                                    class="badge bg-success"><span data-feather="eye"></span></a>
                                <a href="{{ route('aplikasi.edit', ['id' => $aplikasis->id]) }}"
                                    class="badge bg-warning"><span data-feather="edit"></span></a>
                                {{-- <form action="/dashboard/blogs/{{ $aplikasis->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0"
                                        onclick="return confirm('Are you sure ?')"><span
                                            data-feather="trash-2"></span></button>
                                </form> --}}
                                <a href="/delete/{{ $aplikasis->id }}" class="badge bg-danger"><span
                                        data-feather="trash-2"></span></a>



                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </main>
@endsection
