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
                            <table class="table table-vcenter table-mobile-md card-table" data-url="{{$action}}/edit">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        @if(\Auth::user()->role==1)
                                        <th class="w-1">Action</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($CourseCategories['data']) && sizeof($CourseCategories['data'])>0)
                                    @foreach($CourseCategories['data'] as $key => $val)
                                    @php
                                        $images = json_decode($val['image'])   
                                    @endphp
                                    <tr class="list_{{$val[$module['db_key']]}}">
                                        <th scope="row">{{++$key}}</th>
                                        <td class="pl-0" data-id="{{$val[$module['db_key']]}}" data-input="text" data-field="title">
                                            
                                            <img width="80px" src="{{ asset('upload/category/'.$images[0]) }}">

                                        </td>
                                        <td class="pl-0" data-id="{{$val[$module['db_key']]}}" data-input="text" data-field="title">{{$val['title']}}</td>
                                        <td class="pl-0" data-id="{{$val[$module['db_key']]}}" data-input="text" data-field="category_description">{{$val['category_description']}}</td>
                                        {{-- <td class="pl-0">{{date('Y-m-d',strtotime($val['created_at']))}}</td> --}}
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
                                                </div>
                                            </div>
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                    {!! $CourseCategories['pagination'] !!}
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