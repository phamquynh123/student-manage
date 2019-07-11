@extends('layouts.admin')
@section('content-content')

<div class="content-header">
	<div class="d-flex align-items-center">
		<div class="mr-auto">
			<h3 class="page-title">{{ trans('message.teacherList') }}</h3>
			<div class="d-inline-block align-items-center">
				<nav>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
						<li class="breadcrumb-item" aria-current="page">{{ trans('message.teacherList') }}</li>
						<li class="breadcrumb-item active" aria-current="page">{{ trans('message.teacherList') }}</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">{{ trans('message.teacherList') }}</h3>
		</div>
		<div class="box-body">
			<button type="button" class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#addNewUser">{{ trans('message.addNew') }}</button>
			<table class="table table-bordered" id="user-table" data-url="{{ route('datatables.user', config('messages.roleTeacher')) }}" data-status={{ route('changestatus') }}>
				<thead>
					<tr>
						<th>{{ trans('message.id') }}</th>
						<th>{{ trans('message.name') }}</th>
						<th>{{ trans('message.email') }}</th>
						<th>{{ trans('message.avatar') }}</th>
						<th>{{ trans('message.status') }}</th>
						<th>{{ trans('message.created_at') }}</th>
						<th>{{ trans('message.action') }}</th>
					</tr>
				</thead>
			</table>
			<label class="switch switch-border switch-danger">
				<input type="checkbox" id="" checked="">
				<span class="switch-indicator"></span>
				<span class="switch-description"></span>
			</label>
		</div>
	</div>
</section> 

@endsection
{{-- modal add New  --}}
<div id="addNewUser" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">

	    <!-- Modal content-->
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	        	<h4 class="modal-title">{{ trans('message.addNew') }}</h4>
	      	</div>
	      	<div class="modal-body">
	        	<form action="" method="POST" role="form" novalidate id="addUser" data-url="{{ route('addUser', config('messages.roleTeacher')) }}">
	        		@csrf

	        		<legend>{{ trans('message.addNew') }} {{ trans('message.teacher') }}</legend>
	        	
	        		<div class="form-group">
	        			<label for="">{{ trans('message.name') }}</label>
	        			<input type="text" class="form-control" id="add-name" name="name" placeholder="Input field">
	        		</div>
	        		<div class="form-group">
	        			<label for="">{{ trans('message.email') }}</label>
	        			<input type="text" class="form-control" id="add-email" name="name" placeholder="Input field">
	        		</div>
				</form>
	      	</div>
	      	<div class="modal-footer float-right">
	      		<button type="button" class="btn btn-default float-right" data-dismiss="modal">{{ trans('message.close') }}</button>
	        	<button type="button" class="btn btn-info float-right submit-add">{{ trans('message.submit') }}</button> 
	      	</div>
	    </div>

	</div>
</div>
{{-- edit infor  --}}

@section('ajax')
	<script src="{{ asset('js/teacher.js') }}"></script>
@endsection
