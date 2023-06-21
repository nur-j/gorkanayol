@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Заказ</h3>
        </div>
        <div class="card-body p-4">
            <h3 class="">Контактные данные</h3>
            <p><strong>Фамилия и имя: </strong>{{ $order->fullname }}</p>
            <p><strong>Email: </strong>{{ $order->email }}</p>
            <p><strong>Телефон: </strong>{{ $order->phone }}</p>

            <h3>Маршрут</h3>
            <p><strong>Город отправки: </strong>{{ $order->from }}</p>
            <p><strong>Город доставки: </strong>{{ $order->destination }}</p>

            <h3>Свойства груза</h3>
            <p><strong>Ширина: </strong>{{ $order->width }} м</p>
            <p><strong>Высота: </strong>{{ $order->height }} м</p>
            <p><strong>Длина: </strong>{{ $order->length }} м</p>
            <p><strong>Вес: </strong>{{ $order->weight }} кг</p>
            <p><strong>ТН ВЭД код: </strong>{{ $order->code }} </p>
            <p><strong>Описание груза: <br> </strong>{{ $order->details }}</p>

            <h3>Допольнительно</h3>
            <div class="row">
                @if ($order->fragile === 1)
                    <p class="col-md-3">Хрупкий груз</p>
                @endif
                @if ($order->express === 1)
                    <p class="col-md-3"> <i class="fa fa-fire"></i> Срочная доставка</p>
                @endif
                @if ($order->dangerous === 1)
                    <p class="col-md-3"> <i class="fa fa-fire"></i> Опасный груз</p>
                @endif
            </div>
        </div>
        <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection