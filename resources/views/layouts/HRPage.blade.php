@extends('layouts.app')

@section('content')
  <div class="container p-4">
    <div class="row justify-content-md-center">
      <div class="col-md-12">
        @foreach($hr as $item)
          <div>
            {!! $item->detailed_info !!}
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection