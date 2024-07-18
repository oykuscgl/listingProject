@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Araştırma Yazısı Ekle</h1>
    <form action="{{ route('admin.aboutUs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Tüketici Araştırması Başlığı</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="description">Araştırma Açıklaması</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="detailed_info">Detaylı Araştırma Bilgisi</label>
            <textarea name="detailed_info" class="form-control">{{ old('detailed_info') }}</textarea>
        </div>
        <div class="form-group">
            <label for="detailed_info">Kategori</label>
            <textarea name="detailed_info" class="form-control">{{ old('category') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
</div>
@endsection
