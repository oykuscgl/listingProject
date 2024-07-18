@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Firma Hakkında Yönetim Sayfası</h1>
        <a href="{{ route('admin.aboutUs.create') }}" class="btn btn-primary mb-3">Firma Hakkında Yazısı Ekle</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Başlık</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($infos as $info)
                    <tr>
                        <td>{{ $info->title }}</td>
                        <td>
                            <a href="{{ route('admin.aboutUs.edit', $info) }}" class="btn btn-warning">Düzenle</a>
                            <form action="{{ route('admin.aboutUs.destroy', $info) }}" method="POST" class="d-inline">
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
