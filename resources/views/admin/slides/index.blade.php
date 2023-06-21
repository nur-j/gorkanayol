@extends('admin.layout')

@section('content')
  <div class="card mx-3">
    <div class="card-header d-flex justify-content-between">
      <h3 class="card-title">Слайды</h3>
      <a href="{{ route('slides.create') }}" class="btn btn-success">+ Создать слайд</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>Текст</th>
            {{-- <th>Habar</th> --}}
            <th>Картинка</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($slides as $slide)
            <tr>
              <td>{{ $slide->text_ru }}</td>
              {{-- <td>{!! substr($post->description, 0, 20) . '...' !!}</td> --}}
              <td>
                <img src="{{ asset('storage/' . $slide->img) }}" height="100" alt="slide img">
              </td>    
              <td class="d-flex">
                {{-- <a href="{{ route('slides.edit', $slide->id) }}" class="btn btn-primary">
                  <i class="fas fa-edit"></i>
                </a> --}}
                <form method="POST" action="{{ route('slides.destroy', $slide->id) }}">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger" onclick="confirm('are you sure')">
                  <i class="fa fa-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection

@section('scripts')
    <script>
      
    </script>
@endsection