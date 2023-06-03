@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="{{ route('shop.update', $shop->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text"
                            class="form-control @error('name')
                            is-invalid
                        @enderror"
                            id="name" name="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
