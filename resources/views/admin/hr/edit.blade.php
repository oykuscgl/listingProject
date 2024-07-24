<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>İnsan Kaynakları Yazısı Düzenle</title>
  <!-- include libraries(jQuery, bootstrap) -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>
  <div class="container">
    <h1>İnsan Kaynakları Yazısı Düzenle</h1>
    <form action="{{ route('admin.hr.update', $hr->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="detailed_info">Detaylı Yazı Bilgisi</label>
            <textarea name="detailed_info" id="detailed_info" cols="30" rows="10">{{ $hr->detailed_info }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
  </div>
  <script>
    $('#detailed_info').summernote({
      placeholder: 'detailed_info...',
      tabsize:2,
      height:300
    });
  </script>
</body>
</html>
