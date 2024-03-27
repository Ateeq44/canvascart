@extends('layouts.admin')
<title>Seller Info View</title>

@section('content')
@php

$bank_statement = json_decode($seller_info_view->bank_statement);
$id_card_front = json_decode($seller_info_view->id_card_front);
$id_card_back = json_decode($seller_info_view->id_card_back);

@endphp

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="col card">
            <div class="card-header">
                <h1>Seller Info</h1>
            </div>
            <div class="card-body">
                <div class="row w-100">
                    <div class="col-md-6">
                        <div class="d-flex">
                            <h3>Store Name :</h3>
                            <h4 class="ms-3">{{$seller_info_view->store_name}}</h4>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="d-flex">
                            <h3>Email:</h3>
                            <h4 class="ms-3">{{$seller_info_view->users->email}}</h4>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="d-flex">
                            <h3>Cnic:</h3>
                            <h4 class="ms-3">{{$seller_info_view->cnic}}</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <h3>Phone:</h3>
                            <h4 class="ms-3">{{$seller_info_view->phone}}</h4>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="d-flex">
                            <h3>Country:</h3>
                            <h4 class="ms-3">{{$seller_info_view->country}}</h4>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="d-flex">
                            <h3>City:</h3>
                            <h4 class="ms-3">{{$seller_info_view->city}}</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <h3>Address:</h3>
                            <h4 class="ms-3">{{$seller_info_view->city}}</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <h3>Country:</h3>
                            <h4 class="ms-3">{{$seller_info_view->country}}</h4>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <img src="{{asset('upload/cnic/'.$id_card_front[0])}}" alt="">
                    </div>
                    <div class="col-md-3 ">
                        <img src="{{asset('upload/cnic/'.$id_card_back[0])}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col card mt-2">
            <div class="card-header">
                <h1>Seller Bank Details</h1>
            </div>
            <div class="card-body">
                <div class="row w-100">
                    <div class="col-md-6">
                        <div class="d-flex">
                            <h3>Account Holder Name :</h3>
                            <h4 class="ms-3">{{$seller_info_view->acco_holder_name}}</h4>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="d-flex">
                            <h3>Iban #:</h3>
                            <h4 class="ms-3">{{$seller_info_view->iban_no}}</h4>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="d-flex">
                            <h3>Bank Name:</h3>
                            <h4 class="ms-3">{{$seller_info_view->bank_name}}</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <h3>Branch Name:</h3>
                            <h4 class="ms-3">{{$seller_info_view->branch_name}}</h4>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <img src="{{asset('upload/statment/'.$bank_statement[0])}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col card mt-2">
            <div class="card-header">
                <h1>Update Status</h1>
            </div>
            <div class="card-body">
                <div class="row w-100">
                    <div class="col-md-3">
                        <form action="{{ url('admin/seller-info/update/'.$seller_info_view->users->id) }}" method="post">
                            @csrf
                            <select name="status" class="form-control">
                                <option value="1" @if($seller_info_view->users->status == '1') selected @endif>Active</option>
                                <option value="0" @if($seller_info_view->users->status == '0') selected @endif>Deactive</option>
                            </select>

                            <button class="btn btn-success mt-3" type="submit">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection