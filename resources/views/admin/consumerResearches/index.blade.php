@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tüketici Araştırmaları Yönetim Sayfası</h1>
    <a href="{{ route('admin.consumerResearches.create') }}" class="btn btn-primary mb-3">Tüketici Araştırması Ekle</a>
    <table class="table">
        <thead>
            <tr>
                <th>Başlık</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach($researches as $research)
                <tr>
                    <td>{{ $research->title }}</td>
                    <td>
                        <a href="{{ route('admin.consumerResearches.edit', $research) }}" class="btn btn-warning">Düzenle</a>
                        <form action="{{ route('admin.consumerResearches.destroy', $research) }}" method="POST" class="d-inline">
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
