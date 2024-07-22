@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>İnsan Kaynakları Yönetim Sayfası</h1>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary mb-3">Yazı Ekle</a>
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
                    <td>{{ $blogPost->image }}</td>
                    <td>
                        <a href="{{ route('admin.blogs.edit', $blogPost) }}" class="btn btn-warning">Düzenle</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection



