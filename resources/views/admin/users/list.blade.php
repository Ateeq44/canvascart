@extends('layouts.admin')
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
                        <table class="table table-vcenter table-mobile-md card-table" data-url="{{$action}}/edit">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Gender</th>
                                    <th>Created Date</th>
                                    @if(\Auth::user()->role==1)
                                    <th class="w-1">Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($Course['data']) && sizeof($Course['data'])>0)
                                @foreach($Course['data'] as $key => $val)
                                <tr class="list_{{$val[$module['db_key']]}}">
                                    <th scope="row">{{++$key}}</th>
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >{{$val['name']}}</td> 
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >{{$val['email']}}</td> 
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >{{$val['phone']}}</td>
                                    @if($val['role'] == 1)
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >Admin</td>
                                    @elseif($val['role'] == 2)
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >Sub Admin</td>
                                    @else
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >User</td>
                                    @endif
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >{{$val['gender']}}</td>
                                    <td class="pl-0">{{date('Y-m-d',strtotime($val['created_at']))}}</td>
                                    @if(\Auth::user()->role==1)
                                    <td class="pr-0 text-right">
                                        
                                        <a href="#data_modal" data-toggle="modal"  data-url="{{$action}}/edit/{{$val[$module['db_key']]}}" data-action="data_modal" class="btn btn-primary d-none d-sm-inline-block"> <i class="fa-solid fa-pen-to-square"></i> </a>

                                        <a data-action="delete_record" href="javascript:void(0);" class="btn btn-danger d-none d-sm-inline-block mt-2" data-url="{{url($module['action'].'/delete/'.$val[$module['db_key']])}}">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                                {!! $Course['pagination'] !!}
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