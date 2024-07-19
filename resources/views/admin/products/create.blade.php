
@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h2>Ürün Ekle</h2>
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Ürün Adı</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="stock">Stok</label>
                <input type="number" class="form-control" id="stock" name="stock" required>
            </div>
            <div class="form-group">
                <label for="price">Fiyat</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="category_id">Kategori</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="description">Açıklama</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>

            <div class="form-group">
                <label for="shelf_life">Raf Ömrü</label>
                <input type="text" class="form-control" id="shelf_life" name="shelf_life">
            </div>

            <div class="form-group">
                <label for="product_code">Ürün Kodu</label>
                <input type="text" class="form-control" id="product_code" name="product_code">
            </div>

            <div class="form-group">
                <label for="pallet">Palet</label>
                <input type="text" class="form-control" id="pallet" name="pallet">
            </div>

            <div class="form-group">
                <label for="packaging">Paketleme</label>
                <input type="text" class="form-control" id="packaging" name="packaging">
            </div>

            <div class="form-group">
                <label for="detailed_description">Detaylı Bilgi</label>
                <textarea class="form-control" id="detailed_description" name="detailed_description"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Görsel</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-success">Ekle</button>
        </form>
    </div>
@endsection



