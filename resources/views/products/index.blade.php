@extends('home')
@Section('content')

<div class="container">
    <div class="text-end">
        <a href="/new" class="btn btn-dark mt-3">
            new Product
        </a>
    </div>

    <h3>
        Products
    </h3>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>
                        <img src="products/{{ $product->image }}" class="rounded-circle width="50" height="50" " alt="">
                </td>
                <td> <a href="products/{{ $product->id }}/view"> {{ $product->name }}</a></td>
                <td>
                    <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-small">Edit</a>

                    <form method="POST" class="d-inline" action="products/{{ $product->id }}/delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-small" >Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection
