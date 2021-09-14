<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class OrdersanalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* today orders */
        $newOrdersToday            = Order::where('statu_id' , 1)->where('user_id' , Auth::user()->id)->whereDate('created_at', Carbon::today())->count(); // get new orders today
        $processOrdersToday        = Order::where('statu_id' , 2)->where('user_id' , Auth::user()->id)->whereDate('created_at', Carbon::today())->count(); // get processing orders today
        $mergedOrdersToday         = Order::where('statu_id' , 3)->where('user_id' , Auth::user()->id)->whereDate('created_at', Carbon::today())->count(); // get merged orders today
        $readyOrdersToday          = Order::where('statu_id' , 4)->where('user_id' , Auth::user()->id)->whereDate('created_at', Carbon::today())->count(); // get ready orders today
        $speacialOrdersToday       = Order::where('statu_id' , 5)->where('user_id' , Auth::user()->id)->whereDate('created_at', Carbon::today())->count(); // get speacial orders today

       /* yesterday orders */
        $newOrdersYesterday        = Order::where('statu_id' , 1)->where('user_id' , Auth::user()->id)->whereDate('created_at', Carbon::yesterday())->count(); // get new orders yesterday
        $processOrdersYesterday    = Order::where('statu_id' , 2)->where('user_id' , Auth::user()->id)->whereDate('created_at', Carbon::yesterday())->count(); // get processing orders yesterday
        $mergedOrdersYesterday     = Order::where('statu_id' , 3)->where('user_id' , Auth::user()->id)->whereDate('created_at', Carbon::yesterday())->count(); // get merged orders yesterday
        $readyOrdersYesterday      = Order::where('statu_id' , 4)->where('user_id' , Auth::user()->id)->whereDate('created_at', Carbon::yesterday())->count(); // get ready orders yesterday
        $speacialOrdersYesterday   = Order::where('statu_id' , 5)->where('user_id' , Auth::user()->id)->whereDate('created_at', Carbon::yesterday())->count(); // get speacial orders yesterday
       
        /* 2 days orders */
        $newOrdersTwoD             = Order::where('statu_id' , 1)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(2))->count(); // get new orders 2 days
        $processOrdersTwoD         = Order::where('statu_id' , 2)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(2))->count(); // get processing orders 2 days
        $mergedOrdersTwoD          = Order::where('statu_id' , 3)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(2))->count(); // get merged orders 2 days
        $readyOrdersTwoD           = Order::where('statu_id' , 4)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(2))->count(); // get ready orders 2 days
        $speacialOrdersTwoD        = Order::where('statu_id' , 5)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(2))->count(); // get speacial orders 2 days
        
        /* 3 days orders */
        $newOrdersThreeD           = Order::where('statu_id' , 1)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(3))->count(); // get new orders 3 days
        $processOrdersThreeD       = Order::where('statu_id' , 2)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(3))->count(); // get processing orders 3 days
        $mergedOrdersThreeD        = Order::where('statu_id' , 3)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(3))->count(); // get merged orders 3 days
        $readyOrdersThreeD         = Order::where('statu_id' , 4)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(3))->count(); // get ready orders 3 days
        $speacialOrdersThreeD      = Order::where('statu_id' , 5)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(3))->count(); // get speacial orders 3 days

        /* 4 days orders */
        $newOrdersFourD            = Order::where('statu_id' , 1)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(4))->count(); // get new orders 4 days
        $processOrdersFourD        = Order::where('statu_id' , 2)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(4))->count(); // get processing orders 4 days
        $mergedOrdersFourD         = Order::where('statu_id' , 3)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(4))->count(); // get merged orders 4 days
        $readyOrdersFourD          = Order::where('statu_id' , 4)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(4))->count(); // get ready orders 4 days
        $speacialOrdersFourD       = Order::where('statu_id' , 5)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(4))->count(); // get speacial orders 4 days
        
        /* 5 days orders */
        $newOrdersFiveD            = Order::where('statu_id' , 1)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(5))->count(); // get new orders 5 days
        $processOrdersFiveD        = Order::where('statu_id' , 2)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(5))->count(); // get processing orders 5 days
        $mergedOrdersFiveD         = Order::where('statu_id' , 3)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(5))->count(); // get merged orders 5 days
        $readyOrdersFiveD          = Order::where('statu_id' , 4)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(5))->count(); // get ready orders 5 days
        $speacialOrdersFiveD       = Order::where('statu_id' , 5)->where('user_id' , Auth::user()->id)->whereDate( 'created_at',  Carbon::now()->subDays(5))->count(); // get speacial orders 5 days

        
        $start5 = Carbon::now()->subDays(10);
        $end5   = Carbon::now();

        /* +5 days orders */
        $newOrdersPlusFiveD            = Order::where('statu_id' , 1)->where('user_id' , Auth::user()->id)->whereBetween( 'created_at',  [$start5, $end5])->count(); // get new orders +5 days
        $processOrdersPlusFiveD        = Order::where('statu_id' , 2)->where('user_id' , Auth::user()->id)->whereBetween( 'created_at',  [$start5, $end5])->count(); // get processing orders +5 days
        $mergedOrdersPlusFiveD         = Order::where('statu_id' , 3)->where('user_id' , Auth::user()->id)->whereBetween( 'created_at',  [$start5, $end5])->count(); // get merged orders +5 days
        $readyOrdersPlusFiveD          = Order::where('statu_id' , 4)->where('user_id' , Auth::user()->id)->whereBetween( 'created_at',  [$start5, $end5])->count(); // get ready orders +5 days
        $speacialOrdersPlusFiveD       = Order::where('statu_id' , 5)->where('user_id' , Auth::user()->id)->whereBetween( 'created_at',  [$start5, $end5])->count(); // get speacial orders +5 days

  
        $start10 = Carbon::now()->subDays(15);
        $end10   = Carbon::now();

        /* +10 days orders */
        $newOrdersPlusTenD            = Order::where('statu_id' , 1)->where('user_id' , Auth::user()->id)->whereBetween( 'created_at',  [$start10, $end10])->count(); // get new orders +10 days
        $processOrdersPlusTenD        = Order::where('statu_id' , 2)->where('user_id' , Auth::user()->id)->whereBetween( 'created_at',  [$start10, $end10])->count(); // get processing orders +10 days
        $mergedOrdersPlusTenD         = Order::where('statu_id' , 3)->where('user_id' , Auth::user()->id)->whereBetween( 'created_at',  [$start10, $end10])->count(); // get merged orders +10 days
        $readyOrdersPlusTenD          = Order::where('statu_id' , 4)->where('user_id' , Auth::user()->id)->whereBetween( 'created_at',  [$start10, $end10])->count(); // get ready orders +10 days
        $speacialOrdersPlusTenD       = Order::where('statu_id' , 5)->where('user_id' , Auth::user()->id)->whereBetween( 'created_at',  [$start10, $end10])->count(); // get speacial orders +10 days

        $start15 = Carbon::now()->subDays(30);
        $end15   = Carbon::now();
  
        /* +15 days orders */
        $newOrdersPlusFifteenD            = Order::where('statu_id' , 1)->where('user_id' , Auth::user()->id)->whereBetween( 'created_at',  [$start15, $end15])->count(); // get new orders +15 days
        $processOrdersPlusFifteenD        = Order::where('statu_id' , 2)->where('user_id' , Auth::user()->id)->whereBetween( 'created_at',  [$start15, $end15])->count(); // get processing orders +15 days
        $mergedOrdersPlusFifteenD         = Order::where('statu_id' , 3)->where('user_id' , Auth::user()->id)->whereBetween( 'created_at',  [$start15, $end15])->count(); // get merged orders +15 days
        $readyOrdersPlusFifteenD          = Order::where('statu_id' , 4)->where('user_id' , Auth::user()->id)->whereBetween( 'created_at',  [$start15, $end15])->count(); // get ready orders +15 days
        $speacialOrdersPlusFifteenD       = Order::where('statu_id' , 5)->where('user_id' , Auth::user()->id)->whereBetween( 'created_at',  [$start15, $end15])->count(); // get speacial orders +15 days

  
    


        return view('orders.analysis', compact(
            'newOrdersToday','processOrdersToday','mergedOrdersToday','readyOrdersToday','speacialOrdersToday',
            'newOrdersYesterday','processOrdersYesterday','mergedOrdersYesterday','readyOrdersYesterday','speacialOrdersYesterday',
            'newOrdersTwoD','processOrdersTwoD','mergedOrdersTwoD','readyOrdersTwoD','speacialOrdersTwoD',
            'newOrdersThreeD','processOrdersThreeD','mergedOrdersThreeD','readyOrdersThreeD','speacialOrdersThreeD',
            'newOrdersFourD','processOrdersFourD','mergedOrdersFourD','readyOrdersFourD','speacialOrdersFourD',
            'newOrdersFiveD','processOrdersFiveD','mergedOrdersFiveD','readyOrdersFiveD','speacialOrdersFiveD',
            'newOrdersPlusFiveD','processOrdersPlusFiveD','mergedOrdersPlusFiveD','readyOrdersPlusFiveD','speacialOrdersPlusFiveD',
            'newOrdersPlusTenD','processOrdersPlusTenD','mergedOrdersPlusTenD','readyOrdersPlusTenD','speacialOrdersPlusTenD',
            'newOrdersPlusFifteenD','processOrdersPlusFifteenD','mergedOrdersPlusFifteenD','readyOrdersPlusFifteenD','speacialOrdersPlusFifteenD'
            
    
    ));
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
        //
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
