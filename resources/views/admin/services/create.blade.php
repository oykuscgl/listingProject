@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Hizmet Yazısı Ekle</h1>
    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data" id="upload-image">
        @csrf
        <div class="form-group">
            <label for="title">Hizmet Başlığı</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="description">Hizmet Yazısı Açıklaması</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Kapak Görsel</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="detailed_info">Detaylı Hizmet Bilgisi</label>
            <textarea name="detailed_info" id="detailed_info" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
</div>

<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        $('#detailed_info').summernote({
            placeholder: 'Detaylı Hizmet Bilgisi...',
            tabsize: 2,
            height: 300
        });
    });
</script>
@endsection
