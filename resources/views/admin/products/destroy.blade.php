@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ürün Sil</div>

                    <div class="card-body">
                        <p>Ürünü silmek istediğinizden emin misiniz?</p>
                        <p><strong>Ürün Adı:</strong> {{ $product->name }}</p>
                        <p><strong>Stok:</strong> {{ $product->stock }}</p>
                        <p><strong>Fiyat:</strong> {{ $product->price }}</p>

                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Evet, Ürünü Sil</button>
                            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">İptal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
