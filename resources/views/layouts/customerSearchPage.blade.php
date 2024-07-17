<!-- resources/views/layouts/service_detail.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araştırma Detayı</title>
    <!-- CSS dosyalarını burada ekleyin -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <main>
        <section class="service-detail-section">
            <div class="container">
                <h1>{{ $research->title }}</h1>
                <p>{{ $research->description }}</p>
                <div class="detailed-info">
                    {!! $research->detailed_info !!}
                </div>
            </div>
        </section>
    </main>
</body>
</html>
