<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Models\Order;
use App\Mail\OrderMail;

class OrderController extends Controller
{
    public function index() 
    {
        $orders = Order::paginate(10);
        return view('admin.orders', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view('admin.order_single', compact('order'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email',
            'type' => 'required',
            'from' => 'required',
            'destination' => 'required',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'length' => 'required|numeric',
            'weight' => 'required|numeric'
        ]);

        $order = Order::create($request->all());
        try {
            Mail::to('gorkanayol19@mail.ru')->send(new OrderMail($order));
            Mail::to('makstransport@gmail.com')->send(new OrderMail($order));
        } catch (\Throwable $th) {
            return redirect()->back()->with('success', 'Ваш заказ был принят. Оператор связывается с вами в ближайщее время');
        }
        return redirect()->back()->with('success', 'Ваш заказ был принят. Оператор связывается с вами в ближайщее время');
    }
}
