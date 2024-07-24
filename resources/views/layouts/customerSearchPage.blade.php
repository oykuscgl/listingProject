@extends('layouts.app')

@section('content')
    <div>
        @include('components.navbar')
    </div>

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
@endsection
