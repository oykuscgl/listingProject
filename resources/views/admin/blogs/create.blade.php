@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Blog Yazısı Ekle</h1>
    <form action="{{ route('admin.blogs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Blog Yazısı Başlığı</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="description">Blog Yazısı Açıklaması</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="category">Kategori</label>
            <input type="text" name="category" class="form-control" value="{{ old('category') }}">
        </div>
        <div class="form-group">
            <label for="detailed_info">Detaylı Yazı Bilgisi</label>
            <textarea name="detailed_info" class="form-control">{{ old('detailed_info') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
</div>
@endsection
