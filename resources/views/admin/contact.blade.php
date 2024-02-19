
@extends('layouts.admin')
<title>{{@$page_title}}</title>

@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col card">
                <div class="card-header">
                    <h2 class="page-title">
                        Contact
                    </h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter table-mobile-md card-table"  id="example">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($contact as $key => $val)

                                <tr class="">
                                    <th scope="row">{{++$key}}</th>
                                    <td class="pl-0">{{$val->fname}} {{$val->lname}}</td>
                                    <td class="pl-0">{{$val->phone}}</td>
                                    <td class="pl-0">{{$val->email}}</td>
                                    <td class="pl-0">{{$val->message}}</td>
                                    <td class="pl-0">{{date('d-m-Y',strtotime($val['created_at']))}}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection