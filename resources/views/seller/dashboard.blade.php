@extends('layouts.seller') 
@section('title') 
Dashboard
@endsection 
@section('content')
<a class="nav-link" data-toggle="modal" data-bs-target="#logout" href="{{ route('logout') }}" 
onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
logout
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	@csrf
</form>
@endsection 