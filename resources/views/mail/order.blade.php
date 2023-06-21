<!DOCTYPE html>

<html>

<head>

    <title>Gorkana yol mail</title>

</head>

<body>

<h1>Заказ #{{ $mail_data->id }}</h1>

<h2>Контактные данные</h2>
<p><b>Фамилия и имя:</b>{{ $mail_data->fullname }}</p> 
<p><b>Email: </b>{{ $mail_data->email }}</p> 
<p><b>Телефон: </b>{{ $mail_data->phone }}</p>

<h2>Маршрут</h2>
<p><b>Город отправки: </b>{{ $mail_data->from }}</p>
<p><b>Город доставки: </b>{{ $mail_data->destination }}</p>

<h2>Свойства груза</h2>
<p><b>Ширина: </b>{{ $mail_data->width }} м</p>
<p><b>Высота: </b>{{ $mail_data->height }} м</p>
<p><b>Длина: </b>{{ $mail_data->length }} м</p>
<p><b>Вес: </b>{{ $mail_data->weight }} кг</p> 
<p><b>ТН ВЭД код: </b>{{ $mail_data->code }}</p>
<p><b>Описание груза: </b> <br>{{ $mail_data->details }}</p>

<h2>Допольнительно</h2>
<ul>
    @if($mail_data->express === 1) <li>Срочная доставка</li> @endif
    @if($mail_data->dangerous === 1) <li>Опасный груз</li> @endif
    @if($mail_data->fragile === 1) <li>Хрупкий груз</li> @endif
</ul>

</body>

</html>