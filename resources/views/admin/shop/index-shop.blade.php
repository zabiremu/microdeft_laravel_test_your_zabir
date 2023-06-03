@extends('admin.layouts.app')
@section('content')
    <div id="shops">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($shops as $shop)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $shop->name }}</td>
                                    <td><a herf="{{ route('shop.edit', $shop->id) }}" class="btn btn-info btn-sm">Edit</a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
