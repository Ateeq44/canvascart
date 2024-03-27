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
                                    <th>Store Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>country</th>
                                    <th>City</th>
                                    <th>Status</th>
                                    <th>Date created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($seller_info !== '0')
                                @foreach($seller_info as $key => $val)
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td class="pl-0">{{$val->store_name}}</td>
                                    <td class="pl-0">{{$val->users->email}}</td>
                                    <td class="pl-0">${{$val->phone}}</td>
                                    <td class="pl-0">{{$val->country}}</td>
                                    <td class="pl-0">{{$val->city}}</td>
                                    <td class="pl-0">
                                        @if($val->users->status == '1')
                                        <span class="badge bg-success">Active</span>
                                        @else
                                        <span class="badge bg-danger">Deactive</span>
                                        @endif
                                    </td>
                                    <td class="pl-0">{{date('d-m-Y',strtotime($val->created_at))}}</td>
                                    <td class="pl-0">
                                        {{-- <a href="{{ url('admin/orders/edit/'.$val->id) }}"><i class="fa-solid fa-pen-to-square"></i></a> --}}
                                        <a href="{{ url('admin/seller-info/view/'.$val->id) }}"><i class="fa-solid fa-eye"></i></a>
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