<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Statu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = auth()->user()->orders()->orderBy('id', 'DESC')->get();
        $status = Statu::get();
        
        return view('orders.index')->with('orders' , $orders)->with('status' , $status);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validation
        $this->validate($request, [
            'order_name'       => 'required|min:4'
        ]);

       
        $orders = Order::create([
        'order_name'   => $request->order_name,
        'statu_id'     => $request->statu_id,
        'user_id'      => Auth::user()->id
        ]);

        return redirect()->route('orders.index')->with('flash_message', 'Order has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
