@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Firma Hizmetleri Yönetim Sayfası</h1>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary mb-3">Hizmet Ekle</a>
    <table class="table">
        <thead>
            <tr>
                <th>Başlık</th>
                <th>Kategori</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->category }}</td>
                    <td>
                        <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-warning">Düzenle</a>
                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="d-inline">
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
