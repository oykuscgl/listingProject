@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Blog Yazısını Düzenle</h1>
    <form action="{{ route('admin.blogs.update', ['research_id' => $blogPost->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Başlık</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $blogPost->title) }}">
        </div>
        <div class="form-group">
            <label for="description">Açıklama</label>
            <textarea name="description" class="form-control">{{ old('description', $blogPost->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="category">Kategori</label>
            <input type="text" name="category" class="form-control" value="{{ old('category', $blogPost->category) }}">
        </div>
        <div class="form-group">
            <label for="detailed_info">Detaylı Bilgi</label>
            <textarea name="detailed_info" class="form-control">{{ old('detailed_info', $blogPost->detailed_info) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
</div>
@endsection
