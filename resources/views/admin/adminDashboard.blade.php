@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Panel</div>

                    <div class="card-body">
                        <div class="list-group">
                            <a href="{{ route('admin.products') }}" class="list-group-item list-group-item-action">Ürün Yönetimi</a>
                            <a href="{{ route('admin.recipes') }}" class="list-group-item list-group-item-action">Tarif Yönetimi</a>
                            <a href="{{ route('admin.services') }}" class="list-group-item list-group-item-action">Hizmetler</a>
                            <a href="{{ route('admin.consumerInsights') }}" class="list-group-item list-group-item-action">Tüketici Araştırmaları</a>
                            <a href="{{ route('admin.news') }}" class="list-group-item list-group-item-action">Haberler</a>
                            <a href="{{ route('admin.blogPosts') }}" class="list-group-item list-group-item-action">Blog Yazıları Yönetimi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
