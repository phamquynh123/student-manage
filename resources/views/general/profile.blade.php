@extends('layouts.admin')
@section('content-content')
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">

            <h3 class="page-title">{{ trans('message.MyProfile') }}</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">{{ trans('message.MyProfile') }}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ Auth::user()->email }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{ Auth::user()->name }} - {{ Auth::user()->email }}</h3>
        </div>
        <div class="box-body">
            <form action="#" method="POST" role="form" data-url="{{ route('editprofile') }}" enctype="multipart/form-data" id="form-profile">
                @csrf
               
            
                <div class="form-group">
                    <label for="">{{ trans('message.id') }}</label>
                    <input type="text" class="form-control" id="edit-id" placeholder="Input field" readonly="" name="id" value={{ Auth::user()->id }}>
                </div>
                <div class="form-group">
                    <label for="">{{ trans('message.status') }}</label>
                    <p class="form-control" readonly> {{ trans('message.active') }}</p>
                </div>
                <div class="form-group">
                    <label for="">{{ trans('message.name') }}</label>
                    <input type="text" class="form-control" id="edit-name" placeholder="Input field" name="name" value={{ Auth::user()->name }}>
                </div>
                <div class="form-group">
                    <label for="">{{ trans('message.email') }}</label>
                    <input type="email" class="form-control" id="edit-email" placeholder="Input field" name="email" value={{ Auth::user()->email }}>
                </div>
                <div class="form-group">
                    <label for="">{{ trans('message.avatar') }}</label>
                    @if (Auth::user()->avatar == "")
                        <img src="{{ config('messages.linkdefaul') }}" alt="" class="img-avatar">
                    @else
                        <img src="{{ asset(Auth::user()->avatar) }}" alt="" class="img-avatar">
                    @endif
                    <input type="file" class="form-control" id="edit-ava" placeholder="Input field" name="file" value={{ Auth::user()->id }}>
                </div>
                <div class="form-group" hidden>
                    <input type="hidden" class="form-control" name="role_id" id="" placeholder="Input field" value={{ Auth::user()->role_id }}>
                </div>
            
                <button type="submit" class="btn btn-primary edit-profile">{{ trans('message.submit') }}</button>
            </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <div class="box-header with-border">
                <h3 class="box-title">{{ Auth::user()->name }} - {{ trans('message.changePassword') }}</h3>
            </div>
            <form action="" method="POST" role="form" id='changePassword'>
                @csrf
                <legend>Form title</legend>
            
                <div class="form-group">
                    <label for=""> {{ trans('message.oldPassword') }}</label>
                    <input type="text" class="form-control" id="pass" name="pass" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for=""> {{ trans('message.changePassword') }}</label>
                    <input type="text" class="form-control" id="repass" name="repass" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for=""> {{ trans('message.confirmPassword') }}</label>
                    <input type="text" class="form-control" id="confirmpass" name="confirmpass" placeholder="Input field">
                </div>
                <button type="submit" class="btn btn-primary">{{ trans('message.submit') }}</button>
            </form>
        </div>
        <!-- /.box-footer-->
    </div>
</section>
@endsection
@section('ajax')
    <script scr="{{ asset('js/admin.js') }}"></script>
@endsection
