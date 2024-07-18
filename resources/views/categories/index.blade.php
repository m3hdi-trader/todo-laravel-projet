@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="">Categories</h5>
            <a href="{{ route('categroy.create') }}" class="btn btn-dark">create</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catgories as $category)
                        <tr>
                            <td>{{ $category->title }}</td>
                            <td class="d-flex">
                                <a href={{ route('categroy.edit', ['category' => $category->id]) }}
                                    class="btn btn-sm btn-secondary">Edit</a>
                                <form action="{{ route('categroy.destroy', ['category' => $category->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger ms-2">Delete</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
