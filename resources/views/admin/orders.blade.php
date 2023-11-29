@extends('layouts.admin')
@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col card">
                <div class="card-header">
                    <h2 class="page-title">
                        Purchased trainings
                    </h2>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-vcenter table-mobile-md card-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Order price</th>
                                    <th>Discount on order</th>
                                    <th>User name</th>
                                    <th>user email</th>
                                    <th>Date created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter1 = 0; ?>
                                @foreach($orders as $key => $order)
                                <?php $counter1++; ?>
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td class="pl-0">${{$order->amount}}</td>
                                    <td class="pl-0">{{$order->discount}}</td>
                                    <td class="pl-0">{{$order->student->name}}</td>
                                    <td class="pl-0">{{$order->student->email}}</td>
                                    <td class="pl-0">{{$order->created_at}}</td>
                                </tr>
                                @endforeach
                                @if($counter1 == 0)
                                <h2 class="mx-auto my-0">No Orders yet</h2>
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