@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Firma Hizmet Ekle</h1>
    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Başlık</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="description">Açıklama</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="detailed_info">Detaylı Bilgi</label>
            <textarea name="detailed_info" class="form-control">{{ old('detailed_info') }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Görsel</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
</div>
@endsection
