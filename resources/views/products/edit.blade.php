@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Edit Produk</div>
    <div class="card-body">
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select name="category_id" class="form-control" required>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">SKU</label>
                <input type="text" name="sku" value="{{ $product->sku }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="price" value="{{ $product->price }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stock" value="{{ $product->stock }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection