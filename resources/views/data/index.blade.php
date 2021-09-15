@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row analysis-form">
        <div class="col-md-12">
            <table class="table table-bordered " >
                <thead class="table-primary ">
                    <tr >
                        <th colspan="2" class="text-center">{{ ucfirst($users->name) }} is Orders Analysis</th>
                        <th scope="col">Today</th>
                        <th scope="col">Yesterday</th>
                        <th scope="col">2 days</th>
                        <th scope="col">3 days</th>
                        <th scope="col">4 days</th>
                        <th scope="col">5 days</th>
                        <th scope="col">+ 5 days</th>
                        <th scope="col">+ 10 days</th>
                        <th scope="col">+ 15 days</th>
                    </tr>
                </thead>
                <tbody class="bg-white text-dark">
                    <tr>
                    <td rowspan="5" >
                        <div colspan="2" class="order-s">Orders</div>
                    </td>
                    <td>New Orders</td>
                    <td>{{$newOrdersToday}}</td>
                    <td>{{$newOrdersYesterday}}</td>
                    <td>{{$newOrdersTwoD}}</td>
                    <td>{{$newOrdersThreeD}}</td>
                    <td>{{$newOrdersFourD}}</td>
                    <td>{{$newOrdersFiveD}}</td>
                    <td>{{$newOrdersPlusFiveD}}</td>
                    <td>{{$newOrdersPlusTenD}}</td>
                    <td>{{$newOrdersPlusFifteenD}}</td>
                    
                    </tr>
                    <tr>
                     <td>Processing</td>
                     <td>{{$processOrdersToday}}</td>
                     <td>{{$processOrdersYesterday}}</td>
                     <td>{{$processOrdersTwoD}}</td>
                     <td>{{$processOrdersThreeD}}</td>
                     <td>{{$processOrdersFourD}}</td>
                     <td>{{$processOrdersFiveD}}</td>
                     <td>{{$processOrderslusFiveD}}</td>
                     <td>{{$processOrdersPlusTenD}}</td>
                     <td>{{$processOrdersPlusFifteenD}}</td>

                    </tr>
                    <tr>
                      <td>Merged</td>
                      <td>{{$mergedOrdersToday}}</td>
                      <td>{{$mergedOrdersYesterday}}</td>
                      <td>{{$mergedOrdersTwoD}}</td>
                      <td>{{$mergedOrdersThreeD}}</td>
                      <td>{{$mergedOrdersFourD}}</td>
                      <td>{{$mergedOrdersFiveD}}</td>
                      <td>{{$mergedOrderslusFiveD}}</td>
                      <td>{{$mergedOrdersPlusTenD}}</td>
                      <td>{{$mergedOrdersPlusFifteenD}}</td>

                    </tr>
                    <tr>
                     <td>Ready</td>
                     <td>{{$readyOrdersToday}}</td>
                     <td>{{$readyOrdersYesterday}}</td>
                     <td>{{$readyOrdersTwoD}}</td>
                     <td>{{$readyOrdersThreeD}}</td>
                     <td>{{$readyOrdersFourD}}</td>
                     <td>{{$readyOrdersFiveD}}</td>
                     <td>{{$readyOrderslusFiveD}}</td>
                     <td>{{$readyOrdersPlusTenD}}</td>
                     <td>{{$readyOrdersPlusFifteenD}}</td>



                    </tr>
                    <tr>
                      <td>Special Servce</td>
                      <td>{{$speacialOrdersToday}}</td>
                      <td>{{$speacialOrdersYesterday}}</td>
                      <td>{{$speacialOrdersTwoD}}</td>
                      <td>{{$speacialOrdersThreeD}}</td>
                      <td>{{$speacialOrdersFourD}}</td>
                      <td>{{$speacialOrdersFiveD}}</td>
                      <td>{{$speacialOrderslusFiveD}}</td>
                      <td>{{$speacialOrdersPlusTenD}}</td>
                      <td>{{$speacialOrdersPlusFifteenD}}</td>




                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection