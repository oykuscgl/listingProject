<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

</head>
<body>
   <div class="container">
        <h1>Ürün Düzenle</h1>
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Ürün Adı</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="stock">Stok</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required>
            </div>
            <div class="form-group">
                <label for="price">Fiyat</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
            </div>
            <div class="form-group">
                <label for="category_id">Kategori</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
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
                <label for="specialCategory"> Özel Kategori</label>
                <input type="text" class="form-control" id="specialCategory" name="specialCategory">
            </div>
            <div class="form-group">
                <label for="image">Görsel</label>
                <input type="file" id="image"  class="form-control" name="image">
            </div>
            <button type="submit" class="btn btn-success">Güncelle</button>
        </form>
    </div>
    <script>
        $('#detailed_description').summernote({
            placeholder: 'Detaylı tarif bilgisi...',
            tabsize:2,
            height:300
        });
    </script>
</body>
</html>

