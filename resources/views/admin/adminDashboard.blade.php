<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Admin Dashboard</h1>
                <a href="{{ route('admin.products.index') }}" class="btn btn-primary mt-3">Ürün Yönetimi Sayfasına Git</a>
                <a href="{{ route('admin.recipes.index') }}" class="btn btn-primary mt-3">Tarif Yönetimi Sayfasına Git</a>
                <a href="{{ route('admin.services.index') }}" class="btn btn-primary mt-3">Firma Hizmetleri Yönetimi Sayfasına Git</a>
                <a href="{{ route('admin.consumerResearches.index') }}" class="btn btn-primary mt-3">Tüketici Araştırmaları Yönetimi Sayfasına Git</a>
                <a href="{{ route('admin.aboutUs.index') }}" class="btn btn-primary mt-3">Firma  Bilgisi Yönetimi Sayfasına Git</a>
                <a href="{{ route('admin.news.index') }}" class="btn btn-primary mt-3">Haberler Yönetimi Sayfasına Git</a>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary mt-3">Blog Yönetimi Sayfasına Git</a>
                <a href="{{ route('admin.hr') }}" class="btn btn-primary mt-3">Firma İnsan Kaynakları Yönetimi Sayfasına Git</a>
                <a href="{{ route('admin.contact') }}" class="btn btn-primary mt-3">Firma İletişim</a>
            </div>
        </div>
    </div>
</body>
</html>
