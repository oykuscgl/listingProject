<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Arka plan rengi */
        }
        .dashboard-header {
            background-color: blue; /* Başlık arka plan rengi */
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
        }
        .dashboard-list {
            margin-top: 30px;
        }
        .dashboard-list ul {
            list-style-type: none;
            padding: 0;
        }
        .dashboard-list ul li {
            margin-bottom: 15px;
        }
        .dashboard-list a {
            background-color: red;
            display: block;
            color: wheat;
            padding: 15px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }
        .dashboard-list a:hover {
            background-color: #749979;
        }
        .container {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-header">
                    <h1>Admin Dashboard</h1>
                </div>
                <div class="dashboard-list">
                    <ul>
                        <li><a href="{{ route('admin.products.index') }}">Ürün Yönetimi Sayfasına Git</a></li>
                        <li><a href="{{ route('admin.recipes.index') }}">Tarif Yönetimi Sayfasına Git</a></li>
                        <li><a href="{{ route('admin.services.index') }}">Firma Hizmetleri Yönetimi Sayfasına Git</a></li>
                        <li><a href="{{ route('admin.consumerResearches.index') }}">Tüketici Araştırmaları Yönetimi Sayfasına Git</a></li>
                        <li><a href="{{ route('admin.aboutUs.index') }}">Firma Bilgisi Yönetimi Sayfasına Git</a></li>
                        <li><a href="{{ route('admin.news.index') }}">Haberler Yönetimi Sayfasına Git</a></li>
                        <li><a href="{{ route('admin.blogs.index') }}">Blog Yönetimi Sayfasına Git</a></li>
                        <li><a href="{{ route('admin.hr.index') }}">Firma İnsan Kaynakları Yönetimi Sayfasına Git</a></li>
                        <li><a href="{{ route('admin.contact') }}">Firma İletişim</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
