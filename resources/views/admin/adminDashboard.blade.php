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
                <a href="{{ route('admin.products.index') }}" class="btn btn-primary mt-3">Ürün Yönetimi</a>
                <a href="{{ route('admin.recipeManagement') }}" class="btn btn-primary mt-3">Tarif Yönetimi</a>
                <a href="{{ route('admin.serviceManagement') }}" class="btn btn-primary mt-3">Firma Hizmetleri</a>
                <a href="{{ route('admin.consumerResearch') }}" class="btn btn-primary mt-3">Tüketici Araştırmaları</a>
                <a href="{{ route('admin.companyInfo') }}" class="btn btn-primary mt-3">Firma Hakkında Bilgisi</a>
                <a href="{{ route('admin.newsManagement') }}" class="btn btn-primary mt-3">Haberler Yönetimi</a>
                <a href="{{ route('admin.blogManagement') }}" class="btn btn-primary mt-3">Blog Yönetimi</a>
                <a href="{{ route('admin.hr') }}" class="btn btn-primary mt-3">Firma İnsan Kaynakları</a>
                <a href="{{ route('admin.company') }}" class="btn btn-primary mt-3">Firma</a>
                <a href="{{ route('admin.contact') }}" class="btn btn-primary mt-3">Firma İletişim</a>
            </div>
        </div>
    </div>
</body>
</html>
