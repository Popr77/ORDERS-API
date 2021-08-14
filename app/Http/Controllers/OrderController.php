<?php

namespace App\Http\Controllers;

use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return response()->json(Order::with('products',
                'payment_methods')->get(), 200);
        } catch (\Exception $e){
            return response()->json(['error' => $e], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $order = new Order();
            $order->payment_method_id = $request->payment_method_id;
            $order->date              = now()->toDateString();;
            $order->order_status      = 'Ordered';
            $order->save();

            $order->products()->sync($request->products);

            if ($order->payment_methods->name == 'Multibanco'){

                $out = new \Symfony\Component\Console\Output\ConsoleOutput();
                $out->writeln("email sent");

            }

            return response()->json($order, 201);

        }catch (Exception $exception) {
            return response()->json(['error' => $exception], 500);
        }
    }


}
