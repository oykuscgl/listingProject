@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>haberler Yönetimi</h1>
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary mb-3">Haber Ekle</a>
    <table class="table">
        <thead>
            <tr>
                <th>Başlık</th>
                <th>Kategori</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $new)
                <tr>
                    <td>{{ $new->title }}</td>
                    <td>{{ $new->category }}</td>
                    <td>
                        <a href="{{ route('admin.news.edit', $new) }}" class="btn btn-warning">Düzenle</a>
                        <form action="{{ route('admin.news.destroy', $new) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
