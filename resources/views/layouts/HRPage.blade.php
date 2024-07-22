<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <div>
    @include('components.navbar')
</div>
</head>
<body>
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
</body>
</html>
