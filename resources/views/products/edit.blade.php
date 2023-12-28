@extends('home')
@Section('content')
    <div class="container">
        <h3 class="mt-3 ">
            Edit {{ $product->name }}
        </h3>

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div>
                    <form method="POST" action="/{{ $product->id }}/update" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mt-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"
                                value="{{ old('name', $product->name) }}" />
                            @if ($errors->has('name'))
                                <span class="text-denger">{{ $errors->first('name') }}</span>
                            @endif

                        </div>
                        <div class="form-group mt-3">
                            <label>Description</label>
                            <textarea class="form-control" name="description" id="" cols="10" rows="5">{{ old('description', $product->description) }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-denger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="form-group mt-3">
                            <label>Image</label>
                            <input class="form-control" type="file" name=image>
                            @if ($errors->has('image'))
                                <span class="text-denger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
