@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Заказы</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        ID
                    </th>
                    <th style="width: 15%">
                        Фамилия и имя
                    </th>
                    <th style="width: 15%">
                        Email
                    </th>
                    <th style="width: 10%">
                        Телефон
                    </th>
                    <th style="width: 10%" class="text-center">
                        Город отправки
                    </th>
                    <th style="width: 10%" class="text-center">
                        Город доставки
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>
                            {{ $order->id }}
                        </td>
                        <td>
                            {{ $order->fullname }}
                        </td>
                        <td>
                            {{ $order->email }}
                        </td>
                        <td>
                            {{ $order->phone }}
                        </td>
                        <td>
                            {{ $order->from }}
                        </td>
                        <td>{{ $order->destination }}</td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('order.single', $order->id) }}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
        {{ $orders->links('pagination::bootstrap-4') }}
        </div>
        <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection