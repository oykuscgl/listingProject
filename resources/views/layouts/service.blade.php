@extends('layouts.app')

@section('content')
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
@endsection
