@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tüketici Araştırmaları Yönetim Sayfası</h1>
    <a href="{{ route('admin.hr.create') }}" class="btn btn-primary mb-3">İnsan Kaynakları Yazısı  Ekle</a>
    <table class="table">
        <thead>
            <tr>
                <th>Başlık</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hr as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>
                        <a href="{{ route('admin.hr.edit', $item) }}" class="btn btn-warning">Düzenle</a>
                        <form action="{{ route('admin.hr.delete', $item) }}" method="POST" class="d-inline">
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
