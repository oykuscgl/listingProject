@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Haber Düzenle</h1>
    <form action="{{ route('admin.news.update', ['news_id' => $new->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Başlık</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $new->title) }}">
        </div>
        <div class="form-group">
            <label for="description">Açıklama</label>
            <textarea name="description" class="form-control">{{ old('description', $new->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="category">Kategori</label>
            <input type="text" name="category" class="form-control" value="{{ old('category', $new->category) }}">
        </div>
        <div class="form-group">
            <label for="detailed_info">Detaylı Bilgi</label>
            <textarea name="detailed_info" class="form-control">{{ old('detailed_info', $new->detailed_info) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
</div>
@endsection
