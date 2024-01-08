
@extends('layouts.admin')
<title>{{@$page_title}}</title>

@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col card">
                <div class="card-header">
                    <h2 class="page-title">
                        {{@$page_title}}
                    </h2>
                    @if(\Auth::user()->role==1)
                    <div class="card-actions card-toolbar">
                        <!--begin::Button-->
                        <a href="#data_modal" data-toggle="modal" data-url="{{$action}}/create" data-action="data_modal" class="btn btn-success d-none d-sm-inline-block">
                            <span class="svg-icon svg-icon-md">
                                + Add  {{@$module['singular']}}
                            </span>
                        </a>                              
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter table-mobile-md card-table"  id="example" data-url="{{$action}}/edit">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 10% !important;">Image</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Admin Approval</th>
                                    <th>Price</th>
                                    <th>Selling Price</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    @if(\Auth::user()->role==1)
                                    <th class="w-1">Action</th>
                                    @endif
                                </tr>
                            </thead>

                            <tbody>
                                @if(!empty($Course['data']) && sizeof($Course['data'])>0)
                                @foreach($Course['data'] as $key => $val)
                                
                                @php
                                    $images = json_decode($val['images'])   
                                @endphp

                                <tr class="list_{{$val[$module['db_key']]}}">
                                    <th scope="row">{{++$key}}</th>
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >
                                        <img src="{{ asset('upload/product/'.$images[0]) }}">
                                    </td>
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >{{$val['product_name']}}</td>
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >{{$val['category']['title']}}</td>
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >
                                        @if($val['admin_approval'] == '1')
                                        <span class="badge bg-green">Approved</span>
                                        @else
                                        <span class="badge bg-red">Not Approved</span>
                                        @endif
                                    </td>

                                    
                                    
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >${{$val['price']}}</td>
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >${{$val['selling_price']}}</td>

                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >
                                        @if($val['is_feature'] == '1')
                                        <span class="badge bg-green">Active</span>
                                        @else
                                        <span class="badge bg-red">Deactive</span>
                                        @endif
                                    </td>
                                    <td class="pl-0">{{date('d-m-Y',strtotime($val['created_at']))}}</td>
                                    @if(\Auth::user()->role==1)
                                    <td class="pr-0 text-right">
                                        
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown" fdprocessedid="ssbez" aria-expanded="false">
                                              Actions
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" style="">
                                              <a href="#data_modal" data-toggle="modal"  class="btn btn-primary d-none d-sm-inline-block dropdown-item"  data-url="{{$action}}/edit/{{$val[$module['db_key']]}}" data-action="data_modal"> 
                                                <i class="fa-solid fa-pen-to-square"></i> Edit
                                              </a>
                                              <a data-action="delete_record" href="javascript:void(0);" class="btn btn-danger d-none d-sm-inline-block mt-2 dropdown-item" data-url="{{url($module['action'].'/delete/'.$val[$module['db_key']])}}">
                                                <i class="fa-solid fa-trash-can"></i> Delete
                                            </a>
                                            <a class="btn btn-danger d-none d-sm-inline-block mt-2 dropdown-item" href="{{url($module['action'].'/view/'.$val[$module['db_key']])}}">
                                                <i class="fa-solid fa-trash-can"></i> view
                                            </a>
                                            </div>
                                        </div>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
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