<!-- resources/views/layouts/service_detail.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hizmet Detayı</title>
    <!-- CSS dosyalarını burada ekleyin -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div>
        @include('components.navbar')
    </div>

    <main>
        <section class="service-detail-section">
            <div class="container">
                <h1>{{ $service->title }}</h1>
                <p>{{ $service->description }}</p>
                <div class="detailed-info">
                    {!! $service->detailed_info !!}
                </div>
            </div>
        </section>
    </main>
</body>
</html>
