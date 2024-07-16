@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tarif Yönetimi</h1>
    <a href="{{ route('admin.recipes.create') }}" class="btn btn-primary mb-3">Tarif Ekle</a>
    <table class="table">
        <thead>
            <tr>
                <th>Başlık</th>
                <th>Kategori</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recipes as $recipe)
                <tr>
                    <td>{{ $recipe->title }}</td>
                    <td>{{ $recipe->category }}</td>
                    <td>
                        <a href="{{ route('admin.recipes.edit', $recipe) }}" class="btn btn-warning">Düzenle</a>
                        <form action="{{ route('admin.recipes.destroy', $recipe) }}" method="POST" class="d-inline">
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
