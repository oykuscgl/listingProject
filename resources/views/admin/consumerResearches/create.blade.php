@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Yeni Araştırma Ekle</h1>
    <form action="{{ route('admin.consumerResearches.store') }}" method="POST">
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
            <label for="category">Kategori</label>
            <input type="text" name="category" class="form-control" value="{{ old('category') }}">
        </div>
        <div class="form-group">
            <label for="detailed_info">Detaylı Araştırma Bilgisi</label>
            <textarea name="detailed_info" class="form-control">{{ old('detailed_info') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
</div>
@endsection
