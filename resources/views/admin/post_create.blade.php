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

  <h1>Добавить новый пост</h1>
  @if ($errors->any())
      <div class="alert alert-danger">
         Запольните все поля
      </div>
  @endif

  {{-- FORMA CARD --}}
  <div class="card card-primary mx-3">
    <div class="card-header">
      <h3 class="card-title">Новый пост</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="card-body">

        <div class="card card-primary card-tabs">
          <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">по туркменски</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">по русски</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">по английски</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tr-tab" data-toggle="pill" href="#turkish-tab" role="tab" aria-controls="turkish-tab" aria-selected="false">по турецки</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
              <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                <div class="form-group">
                  <label for="title_tm">Заголовок (туркменский)</label>
                  <input type="text" class="form-control" name="title_tm" id="title_tm" placeholder="">
                </div>
        
                <div class="form-group">
                  <label for="description_tm">Текст (туркменский)</label>
                  <textarea name="text_tm" class="form-control summernote" id="text_tm"></textarea>
                </div>
              </div>
              <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                <div class="form-group">
                  <label for="title_ru">Заголовок (русский)</label>
                  <input type="text" class="form-control" name="title_ru" id="title_ru" placeholder="">
                </div>
        
                <div class="form-group">
                  <label for="description_ru">Текст (русский)</label>
                  <textarea name="text_ru" class="form-control summernote" id="text_ru"></textarea>
                </div>
              </div>
              <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                <div class="form-group">
                  <label for="title_en">Заголовок (английский)</label>
                  <input type="text" class="form-control" name="title_en" id="title_en" placeholder="">
                </div>
        
                <div class="form-group">
                  <label for="description_en">Текст (английский)</label>
                  <textarea name="text_en" class="form-control summernote" id="text_en"></textarea>
                </div>
              </div>
              <div class="tab-pane fade" id="turkish-tab" role="tabpanel" aria-labelledby="tr-tab">
                <div class="form-group">
                  <label for="title_tr">Заголовок (турецкий)</label>
                  <input type="text" class="form-control" name="title_tr" id="title_tr" placeholder="">
                </div>
        
                <div class="form-group">
                  <label for="text_tr">Текст (турецкий)</label>
                  <textarea name="text_tr" class="form-control summernote" id="text_tr"></textarea>
                </div>
              </div>
            </div>
          </div>
          
        </div>

        <div class="form-group">
          <label>Выберите категорию</label>
          <select name="category_id" class="form-control">
            {{-- @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->title_tm }}</option>
            @endforeach --}}
            <option value="1">1</option>
          </select>
        </div>

        <div class="form-group">
          <label>Дата</label>
          <input type="date" name="created_at" value="{{ date('Y-m-d') }}">
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label">Картинка</label>
          <input id="input-id" type="file" name="poster" class="form-control" id="exampleInputEmail1">
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
        <button type="submit" class="btn btn-primary">Добавить</button>
      </div>
    </form>
  </div>

  
@endsection


@section('scripts')
  <script src="{{ asset('/back/plugins/summernote/summernote.min.js') }}"></script>
  <script src="{{ asset('/back/plugins/dropzonejs/min/dropzone.min.js') }}"></script>
  <script src="{{ asset('/back/plugins/bs-custom-file-input/bs-custom-file-input.js') }}"></script>
  <script type="text/javascript">
  
    $(document).ready(function() {
      $('.summernote').summernote({
        height: 400
      });

      bsCustomFileInput.init();
    });
    
  </script>
  <!-- the main fileinput plugin script JS file -->
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>
  <script>
    // initialize plugin with defaults
    $("#input-id").fileinput({
      dropZoneTitle: 'Нажмите сюда или перетащите файл',
      removeTitle: "{{ __('request.remove') }}"
    });
  
    // with plugin options
    // $("#input-id").fileinput({'showUpload':false, 'previewFileType':'any'});
  </script>
@endsection