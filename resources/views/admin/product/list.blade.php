
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
                                    <th>Course Name</th>
                                    <th>Category</th>
                                    <th>Accredition</th>
                                    <th>Course Duration</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Dificulty Level</th>
                                    <th>Course Type</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
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
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >{{$val['course_name']}}</td>
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >{{$val['category']['title']}}</td>
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >{{$val['accredition']}}</td>
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >{{$val['course_duration']}}</td>
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >{{$val['price']}}</td>
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >{{$val['discount']}}</td>
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >{{$val['dificulty_level']}}</td>
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >{{$val['is_feature']}}</td>
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >{{$val['start_date']}}</td>
                                    <td class="pl-0" data-id="{{$val[$module['db_key']]}}" >{{$val['end_date']}}</td>
                                    {{-- <td class="pl-0">{{date('Y-m-d',strtotime($val['created_at']))}}</td> --}}
                                    @if(\Auth::user()->role==1)
                                    <td class="pr-0 text-right">
                                        {{-- <a href="{{$action}}/edit/{{$val[$module['db_key']]}}"> --}}
                                            {{-- Edit --}}
                                        {{-- </a> --}}
                                        <a href="#data_modal" data-toggle="modal"  class="btn btn-primary d-none d-sm-inline-block"  data-url="{{$action}}/edit/{{$val[$module['db_key']]}}" data-action="data_modal"> <i class="fa-solid fa-pen-to-square"></i> </a>

                                        <a data-action="delete_record" href="javascript:void(0);" class="btn btn-danger d-none d-sm-inline-block mt-2" data-url="{{url($module['action'].'/delete/'.$val[$module['db_key']])}}">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        {!! $Course['pagination'] !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection