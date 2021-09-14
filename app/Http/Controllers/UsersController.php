<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();

        return view('users.index', compact('users'));
    }

    public function getData($id)
    {
        $users = User::with('orders')->find($id);

        /* all orders for Today */
        $newOrdersToday                = Order::where('statu_id' , 1)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::today())->count();
        $processOrdersToday            = Order::where('statu_id' , 2)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::today())->count();
        $mergedOrdersToday             = Order::where('statu_id' , 3)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::today())->count();
        $readyOrdersToday              = Order::where('statu_id' , 4)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::today())->count();
        $speacialOrdersToday           = Order::where('statu_id' , 5)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::today())->count();
        
        /* all orders for Yesterday */
        $newOrdersYesterday            = Order::where('statu_id' , 1)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::yesterday())->count();
        $processOrdersYesterday        = Order::where('statu_id' , 2)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::yesterday())->count();
        $mergedOrdersYesterday         = Order::where('statu_id' , 3)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::yesterday())->count();
        $readyOrdersYesterday          = Order::where('statu_id' , 4)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::yesterday())->count();
        $speacialOrdersYesterday       = Order::where('statu_id' , 5)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::yesterday())->count();
        
        /* all orders 2 days ago */
        $newOrdersTwoD                 = Order::where('statu_id' , 1)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(2))->count();
        $processOrdersTwoD             = Order::where('statu_id' , 2)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(2))->count();
        $mergedOrdersTwoD              = Order::where('statu_id' , 3)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(2))->count();
        $readyOrdersTwoD               = Order::where('statu_id' , 4)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(2))->count();
        $speacialOrdersTwoD            = Order::where('statu_id' , 5)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(2))->count();
        
        /* all orders 3 days ago */
        $newOrdersThreeD               = Order::where('statu_id' , 1)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(3))->count();
        $processOrdersThreeD           = Order::where('statu_id' , 2)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(3))->count();
        $mergedOrdersThreeD            = Order::where('statu_id' , 3)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(3))->count();
        $readyOrdersThreeD             = Order::where('statu_id' , 4)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(3))->count();
        $speacialOrdersThreeD          = Order::where('statu_id' , 5)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(3))->count();

        /* all orders 4 days ago */
        $newOrdersFourD                = Order::where('statu_id' , 1)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(4))->count();
        $processOrdersFourD            = Order::where('statu_id' , 2)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(4))->count();
        $mergedOrdersFourD             = Order::where('statu_id' , 3)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(4))->count();
        $readyOrdersFourD              = Order::where('statu_id' , 4)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(4))->count();
        $speacialOrdersFourD           = Order::where('statu_id' , 5)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(4))->count();
        
        /* all orders 5 days ago */
        $newOrdersFiveD                = Order::where('statu_id' , 1)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(5))->count();
        $processOrdersFiveD            = Order::where('statu_id' , 2)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(5))->count();
        $mergedOrdersFiveD             = Order::where('statu_id' , 3)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(5))->count();
        $readyOrdersFiveD              = Order::where('statu_id' , 4)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(5))->count();
        $speacialOrdersFiveD           = Order::where('statu_id' , 5)->where('user_id' , '=' , $id)->whereDate('created_at', Carbon::now()->subDays(5))->count();


        /* all orders  to 10 days */
        $startplus5 = Carbon::now()->subDays(10);
        $endplus5   = Carbon::now();

        $newOrdersPlusFiveD            = Order::where('statu_id' , 1)->where('user_id' , '=' , $id)->whereBetween( 'created_at',  [$startplus5, $endplus5])->count();
        $processOrderslusFiveD         = Order::where('statu_id' , 2)->where('user_id' , '=' , $id)->whereBetween( 'created_at',  [$startplus5, $endplus5])->count();
        $mergedOrderslusFiveD          = Order::where('statu_id' , 3)->where('user_id' , '=' , $id)->whereBetween( 'created_at',  [$startplus5, $endplus5])->count();
        $readyOrderslusFiveD           = Order::where('statu_id' , 4)->where('user_id' , '=' , $id)->whereBetween( 'created_at',  [$startplus5, $endplus5])->count();
        $speacialOrderslusFiveD        = Order::where('statu_id' , 5)->where('user_id' , '=' , $id)->whereBetween( 'created_at',  [$startplus5, $endplus5])->count();
        
        /* all orders  to 15 days */
        $start15 = Carbon::now()->subDays(15);
        $end15   = Carbon::now();

        $newOrdersPlusTenD             = Order::where('statu_id' , 1)->where('user_id' , '=' , $id)->whereBetween( 'created_at',  [$start15, $end15])->count();
        $processOrdersPlusTenD         = Order::where('statu_id' , 2)->where('user_id' , '=' , $id)->whereBetween( 'created_at',  [$start15, $end15])->count();
        $mergedOrdersPlusTenD          = Order::where('statu_id' , 3)->where('user_id' , '=' , $id)->whereBetween( 'created_at',  [$start15, $end15])->count();
        $readyOrdersPlusTenD           = Order::where('statu_id' , 4)->where('user_id' , '=' , $id)->whereBetween( 'created_at',  [$start15, $end15])->count();
        $speacialOrdersPlusTenD        = Order::where('statu_id' , 5)->where('user_id' , '=' , $id)->whereBetween( 'created_at',  [$start15, $end15])->count();

        
        /* all orders  to 30 days */
        $start30 = Carbon::now()->subDays(30);
        $end30   = Carbon::now();

        $newOrdersPlusFifteenD         = Order::where('statu_id' , 1)->where('user_id' , '=' , $id)->whereBetween( 'created_at',  [$start30, $end30])->count();
        $processOrdersPlusFifteenD     = Order::where('statu_id' , 2)->where('user_id' , '=' , $id)->whereBetween( 'created_at',  [$start30, $end30])->count();
        $mergedOrdersPlusFifteenD      = Order::where('statu_id' , 3)->where('user_id' , '=' , $id)->whereBetween( 'created_at',  [$start30, $end30])->count();
        $readyOrdersPlusFifteenD       = Order::where('statu_id' , 4)->where('user_id' , '=' , $id)->whereBetween( 'created_at',  [$start30, $end30])->count();
        $speacialOrdersPlusFifteenD    = Order::where('statu_id' , 5)->where('user_id' , '=' , $id)->whereBetween( 'created_at',  [$start30, $end30])->count();



        return view('data.index', compact(
            'users',
            'newOrdersToday','processOrdersToday','mergedOrdersToday','readyOrdersToday','speacialOrdersToday',
            'newOrdersYesterday','processOrdersYesterday','mergedOrdersYesterday','readyOrdersYesterday','speacialOrdersYesterday',
            'newOrdersTwoD','processOrdersTwoD','mergedOrdersTwoD','readyOrdersTwoD','speacialOrdersTwoD',
            'newOrdersThreeD','processOrdersThreeD','mergedOrdersThreeD','readyOrdersThreeD','speacialOrdersThreeD',
            'newOrdersFourD','processOrdersFourD','mergedOrdersFourD','readyOrdersFourD','speacialOrdersFourD',
            'newOrdersFiveD','processOrdersFiveD','mergedOrdersFiveD','readyOrdersFiveD','speacialOrdersFiveD',
            'newOrdersPlusFiveD','processOrderslusFiveD','mergedOrderslusFiveD','readyOrderslusFiveD','speacialOrderslusFiveD',
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
