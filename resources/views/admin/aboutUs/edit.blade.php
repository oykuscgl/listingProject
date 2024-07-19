@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tüketici Araştırmasını Düzenle</h1>
    <form action="{{ route('admin.aboutUs.update', ['info_id' => $info->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Başlık</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $info->title) }}">
        </div>
        <div class="form-group">
            <label for="description">Açıklama</label>
            <textarea name="description" class="form-control">{{ old('description', $info->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="detailed_info">Detaylı Bilgi</label>
            <textarea name="detailed_info" class="form-control">{{ old('detailed_info', $info->detailed_info) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
</div>
@endsection
