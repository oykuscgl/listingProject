
@extends('layouts.app')

@section('content')

    <main>
        <section class="service-detail-section">
            <div class="container">
                <h1>{{ $info->title }}</h1>
                <p>{{ $info->description }}</p>
                <div class="detailed-info">
                    {!! $info->detailed_info !!}
                </div>
            </div>
        </section>
    </main>

@endsection
