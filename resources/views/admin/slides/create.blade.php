@extends('admin.layout')

@section('styles')
  <link rel="stylesheet" href="{{ asset('/back/plugins/summernote/summernote.min.css') }}">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="{{ asset('/back/plugins/dropzonejs/min/dropzone.min.css') }}">
  <!-- default icons used in the plugin are from Bootstrap 5.x icon library (which can be enabled by loading CSS below) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
  <!-- the fileinput plugin styling CSS file -->
<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
@endsection

@section('content')

  <h1>Добавить новый слайд</h1>

  {{-- FORMA CARD --}}
  <div class="card card-primary mx-3">
    <div class="card-header">
      <h3 class="card-title">Новый слайд</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{ route('slides.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="card-body">


        <div class="form-group">
            <label for="text_ru">Текст слайдера на русском</label>
            <input type="text" class="form-control" name="text_ru" id="text_ru" placeholder="">
        </div>
        <div class="form-group">
            <label for="text_tm">Текст слайдера на туркменском</label>
            <input type="text" class="form-control" name="text_tm" id="text_tm" placeholder="">
        </div>
        <div class="form-group">
            <label for="text_en">Текст слайдера на английском</label>
            <input type="text" class="form-control" name="text_en" id="text_en" placeholder="">
        </div>
        <div class="form-group">
            <label for="text_tr">Текст слайдера на турецком</label>
            <input type="text" class="form-control" name="text_tr" id="text_tr" placeholder="">
        </div>



        <div class="form-group">
          <label for="img" class="form-label">Картинка слайдера</label>
          <input id="input-id" type="file" name="img" class="form-control" id="img">
          {{-- <label for="exampleInputFile">Habaryň suraty</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="poster" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Faýly saýlaň</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Ýüklemek</span>
            </div>
          </div> --}}
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Создать</button>
      </div>
    </form>
  </div>

  
@endsection


@section('scripts')
  <script src="{{ asset('/back/plugins/dropzonejs/min/dropzone.min.js') }}"></script>
  <script src="{{ asset('/back/plugins/bs-custom-file-input/bs-custom-file-input.js') }}"></script>
  <script type="text/javascript">
  
    $(document).ready(function() {

      bsCustomFileInput.init();
    });
    
  </script>
  <!-- the main fileinput plugin script JS file -->
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>
  <script>
    // initialize plugin with defaults
    $("#input-id").fileinput({
      dropZoneTitle: 'Нажмите сюда или перетащите картинку',
      removeTitle: "{{ __('request.remove') }}"
    });
  
    // with plugin options
    // $("#input-id").fileinput({'showUpload':false, 'previewFileType':'any'});
  </script>
@endsection