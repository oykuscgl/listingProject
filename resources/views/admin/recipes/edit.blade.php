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
    <h1>Tarif Yazısını Düzenle</h1>
    <form action="{{ route('admin.recipes.update', $recipe->id) }}" method="POST" enctype="multipart/form-data" id="upload-image">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Tarif Yazısı Başlığı</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $recipe->title) }}">
        </div>
        <div class="form-group">
            <label for="description">Tarif Yazısı Açıklaması</label>
            <textarea name="description" class="form-control">{{ old('description', $recipe->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Kategori</label>
            <select class="form-control" id="category_id" name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $recipe->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="detailed_info">Detaylı Tarif Bilgisi</label>
            <textarea name="detailed_info" id="detailed_info" cols="30" rows="10">{{ old('detailed_info', $recipe->detailed_info) }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Tarif Resmi</label>
            @if ($recipe->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $recipe->image) }}" alt="Tarif Resmi" class="img-thumbnail" style="width: 200px;">
                </div>
            @endif
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
   </div>
    <script>
        $('#detailed_info').summernote({
            placeholder: 'Detaylı tarif bilgisi...',
            tabsize:2,
            height:300
        });
    </script>
</body>
</html>
