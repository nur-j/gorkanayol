@extends('admin.layout')

@section('styles')

@endsection

@section('content')

  <h1>Достижения</h1>

  {{-- FORMA CARD --}}
  <div class="card card-primary mx-3">
    <div class="card-header">
      <h3 class="card-title">Изменить достижения</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{ route('achievements.update') }}">
      @csrf
      <div class="card-body">


        <div class="form-group">
            <label for="clients">Довольные клиенты</label>
            <input type="text" class="form-control" name="clients" id="clients" value="{{ $a->clients }}" placeholder="">
        </div>
        <div class="form-group">
            <label for="km">Километры</label>
            <input type="text" class="form-control" name="km" id="km" value="{{ $a->km }}" placeholder="">
        </div>
        <div class="form-group">
            <label for="shipped">Перевозено тонн</label>
            <input type="text" class="form-control" name="shipped" id="shipped" value="{{ $a->shipped }}" placeholder="">
        </div>
        <div class="form-group">
            <label for="staff">Сотрудники</label>
            <input type="text" class="form-control" name="staff" id="staff" value="{{ $a->staff }}" placeholder="">
        </div>


      </div>
      <!-- /.card-body -->

      <div class="card-footer">
    <button type="submit" class="btn btn-primary">Изменить</button>
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