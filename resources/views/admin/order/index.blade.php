@extends('layouts.admin')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col card">
                <div class="card-header">
                    <h2 class="page-title">
                        Orders
                    </h2>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-vcenter table-mobile-md card-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Invoice #</th>
                                    <th>Price</th>
                                    <th>User name</th>
                                    <th>user email</th>
                                    <th>Date created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($orders !== '0')
                                @foreach($orders as $key => $order)
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td class="pl-0">{{$order->tracking_no}}</td>
                                    <td class="pl-0">${{$order->total_price}}</td>
                                    <td class="pl-0">{{$order->fname}} {{$order->lname}}</td>
                                    <td class="pl-0">{{$order->email}}</td>
                                    <td class="pl-0">
                                        @if($order->status == '0')
                                        <span class="badge bg-danger">New Order</span>
                                        @elseif($order->status == '1')
                                        <span class="badge bg-warning">Prepare to Ship</span>
                                        @elseif($order->status == '2')
                                        <span class="badge bg-info">Shipped</span>
                                        @else
                                        <span class="badge bg-success">Delivered</span>
                                        @endif
                                    </td>
                                    <td class="pl-0">{{date('d-m-Y',strtotime($order->created_at))}}</td>
                                    <td class="pl-0">
                                        {{-- <a href="{{ url('admin/orders/edit/'.$order->id) }}"><i class="fa-solid fa-pen-to-square"></i></a> --}}
                                        <a href="{{ url('admin/orders/view/'.$order->id) }}"><i class="fa-solid fa-eye"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="6">
                                        <h2 class="text-center mx-auto my-0">No Orders yet</h2>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection