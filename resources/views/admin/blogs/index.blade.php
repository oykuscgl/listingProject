@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Blog Yazıları Yönetim Sayfası</h1>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary mb-3">Blog Yazısı Ekle</a>
    <table class="table">
        <thead>
            <tr>
                <th>Başlık</th>
                <th>Kategori</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blogPost)
                <tr>
                    <td>{{ $blogPost->title }}</td>
                    <td>{{ $blogPost->category }}</td>
                    <td>
                        <a href="{{ route('admin.blogs.edit', $blogPost) }}" class="btn btn-warning">Düzenle</a>
                        <form action="{{ route('admin.blogs.destroy', $blogPost) }}" method="POST" class="d-inline">
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
