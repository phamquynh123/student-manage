@extends('layouts.admin')
@section('content-content')
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title"> {{ trans('message.MainDashboard') }}</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">{{ trans('message.MainDashboard') }}</li>
                        {{-- <li class="breadcrumb-item active" aria-current="page">Blank page</li> --}}
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="content">       
    <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
            <div class="flexbox flex-justified text-center bg-info mb-30 pull-up">
                <div class="no-shrink py-30">
                    <span class="mdi mdi-ticket-confirmation font-size-50"></span>
                </div>

                <div class="py-30 bg-white text-dark">
                    <div class="font-size-30 countnm">2064</div>
                    <span>Total Class</span>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="flexbox flex-justified text-center bg-warning mb-30 pull-up">
                <div class="no-shrink py-30">
                    <span class="mdi mdi-message-reply-text font-size-50"></span>
                </div>

                <div class="py-30 bg-white text-dark">
                    <div class="font-size-30 countnm">1738</div>
                    <span>Responded</span>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="flexbox flex-justified text-center bg-success mb-30 pull-up">
                <div class="no-shrink py-30">
                    <span class="mdi mdi-thumb-up-outline font-size-50"></span>
                </div>

                <div class="py-30 bg-white text-dark">
                    <div class="font-size-30 countnm">1100</div>
                    <span>Resolve</span>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="flexbox flex-justified text-center bg-danger mb-30 pull-up">
                <div class="no-shrink py-30">
                    <span class="mdi mdi-ticket font-size-50"></span>
                </div>

                <div class="py-30 bg-white text-dark">
                    <div class="font-size-30 countnm">964</div>
                    <span>Pending</span>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-12 col-lg-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Tickets share per category</h3>
                    <div class="box-tools pull-right">
                        <ul class="card-controls">
                            <li class="dropdown">
                                <a data-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item active" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Yesterday</a>
                                    <a class="dropdown-item" href="#">Last week</a>
                                    <a class="dropdown-item" href="#">Last month</a>
                                </div>
                            </li>
                            <li><a href="" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="mdi mdi-toggle-switch-off-thin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="box-body">
                    <div class="text-center py-20">                  
                        <div class="donut" data-peity='{ "fill": ["#fc4b6c", "#ffb22b", "#398bf7"], "radius": 120, "innerRadius": 80  }' >9,6,5</div>
                    </div>

                    <ul class="list-inline">
                        <li class="flexbox mb-5">
                            <div>
                                <span class="badge badge-dot badge-lg mr-1"></span>
                                <span>Technical</span>
                            </div>
                            <div >8952</div>
                        </li>

                        <li class="flexbox mb-5">
                            <div>
                                <span class="badge badge-dot badge-lg mr-1"></span>
                                <span>Accounts</span>
                            </div>
                            <div>7458</div>
                        </li>

                        <li class="flexbox">
                            <div>
                                <span class="badge badge-dot badge-lg mr-1"></span>
                                <span>Other</span>
                            </div>
                            <div>3254</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-12 col-lg-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Tickets share per agent</h3>

                    <div class="box-tools pull-right">
                        <ul class="card-controls">
                            <li class="dropdown">
                                <a data-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item active" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Yesterday</a>
                                    <a class="dropdown-item" href="#">Last week</a>
                                    <a class="dropdown-item" href="#">Last month</a>
                                </div>
                            </li>
                            <li><a href="" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="mdi mdi-toggle-switch-off-thin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="box-body">
                    <div class="flexbox mt-70">
                        <div class="bar" data-peity='{ "fill": ["#666EE8", "#1E9FF2", "#28D094", "#FF4961", "#FF9149"], "height": 298, "width": 250, "padding":0.2 }'>952,558,1254,427,784</div>
                        <ul class="list-inline align-self-end text-muted text-right mb-0">
                            <li>Jacob <span class="badge badge-primary ml-2">952</span></li>
                            <li>William <span class="badge badge-info ml-2">558</span></li>
                            <li>Emily <span class="badge badge-success ml-2">1254</span></li>
                            <li>Chloe <span class="badge badge-danger ml-2">427</span></li>
                            <li>Daniel <span class="badge badge-warning ml-2">784</span></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.col -->          
        <div class="col-lg-4 col-12">         
            <!-- AREA CHART -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Ticket Overview</h4>
                </div>
                <div class="box-body">
                    <ul class="list-inline text-right mt-10 mr-10">
                        <li>
                            <h5 class="mb-0"><i class="mdi mdi-toggle-switch-off mr-5 text-info"></i>Total</h5>
                        </li>
                        <li>
                            <h5 class="mb-0"><i class="mdi mdi-toggle-switch-off mr-5 text-danger"></i>Close</h5>
                        </li>
                    </ul>
                    <div id="morris-area-chart2" style="height: 330px;"></div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->  
        <div class="col-lg-4 col-12">
            <div class="box">   
                <div class="bg-img box-inverse" style="background-image: url(../images/gallery/thumb/14.jpg);" data-overlay="5">
                    <div class="box-header no-border">
                        <h4>Ticket Stats</h4>
                        <ul class="box-controls pull-right">
                            <li class="dropdown">
                                <a data-toggle="dropdown" href="#" class="btn btn-rounded btn-outline btn-white px-10">Stats</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                    <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                    <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="box-body">
                        <div class="flexbox flex-justified text-center mt-50">
                            <div class="b-1 rounded py-20">
                                <p class="mb-0 fa-3x">25%</p>
                                <p class="mb-0 font-weight-300">Responded</p>
                            </div>
                            <div class="b-1 rounded py-20">
                                <p class="mb-0 fa-3x">40%</p>
                                <p class="mb-0 font-weight-300">Resolve</p>
                            </div>
                            <div class="b-1 rounded py-20">
                                <p class="mb-0 fa-3x">35%</p>
                                <p class="mb-0 font-weight-300">Pending</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body p-0">
                    <div class="media-list media-list-hover media-list-divided">

                        <div class="media media-single">
                            <a href="#">
                                <img class="avatar avatar-lg" src="{{ config('messages.linkdefaul')}}" alt="...">
                            </a>
                            <div class="media-body">
                                <h6><a href="#">Olivia</a></h6>
                                <small class="text-fader">Developer</small>
                            </div>
                            <div class="media-right">
                                <a class="btn btn-block btn-primary btn-sm" href="#">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Best Agent</h4>
                </div>
                <div class="box-body p-0">
                    <div class="box box-widget widget-user-3">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-purple" style="background: url('{{ config('messages.linkdefaul')}} ') center center;">
                            <div class="info-user">
                                <h3 class="widget-user-username">Michael Jorden</h3>
                                <h6 class="widget-user-desc">Developer</h6>
                            </div>
                            <div class="widget-user-image clearfix">
                                <img class="rounded-circle" src="../images/user7-128x128.jpg" alt="User Avatar">
                            </div>
                            <!-- /.widget-user-image -->
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav d-block nav-stacked">
                                <li class="nav-item"><a href="#" class="nav-link">Sales <span class="pull-right badge bg-info">1310</span></a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Projects <span class="pull-right badge bg-success">120</span></a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Followers <span class="pull-right badge bg-warning">8K</span></a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Tasks <span class="pull-right badge bg-danger">58</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- DIRECT CHAT PRIMARY -->
            <div class="box direct-chat direct-chat-info">
                <div class="box-header with-border">
                    <h4 class="box-title">Direct Chat</h4>
                    <ul class="box-controls pull-right">
                        <li><a class="box-btn-close" href="#"></a></li>
                        <li><a class="box-btn-slide" href="#"></a></li>
                        <li><a class="box-btn-fullscreen" href="#"></a></li>
                        <li><a class="" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></a></li>
                        <li><span data-toggle="tooltip" title="1 New Messages" class="badge badge-pill badge-info">5</span></li>
                    </ul>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages">
                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg mb-30">
                            <div class="clearfix mb-15">
                                <span class="direct-chat-name">James Anderson</span>
                                <span class="direct-chat-timestamp pull-right">April 14, 2017</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img avatar" src="../images/user1-128x128.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                <p>Hi</p>
                                <p>Morbi ullamcorper mauris nec gravida molestie.</p>
                                <p class="direct-chat-timestamp"><time datetime="2018">23:58</time></p>
                            </div>

                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right mb-30">
                            <div class="clearfix mb-15">
                                <span class="direct-chat-name pull-right">You</span>
                            </div>
                            <div class="direct-chat-text">
                                <p>Hiii, I'm good.</p>
                                <p>Nunc nec lorem volutpat, placerat.</p>
                                <p class="direct-chat-timestamp"><time datetime="2018">00:06</time></p>
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->
                    </div>
                    <!--/.direct-chat-messages-->

                    <!-- Contacts are loaded here -->
                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="../images/user1-128x128.jpg" alt="User Image">

                                    <div class="contacts-list-info">
                                        <span class="contacts-list-name">
                                            Bryson
                                            <small class="contacts-list-date pull-right">April 14, 2017</small>
                                        </span>
                                        <span class="contacts-list-email">info@.multipurpose.com</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="../images/user7-128x128.jpg" alt="User Image">

                                    <div class="contacts-list-info">
                                        <span class="contacts-list-name">
                                            Vincent
                                            <small class="contacts-list-date pull-right">March 14, 2017</small>
                                        </span>
                                        <span class="contacts-list-email">sonu@gmail.com</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                        </ul>
                        <!-- /.contatcts-list -->
                    </div>
                    <!-- /.direct-chat-pane -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                            <div class="input-group-addon">
                                <div class="align-self-end gap-items">
                                    <span class="publisher-btn file-group">
                                        <i class="fa fa-paperclip file-browser"></i>
                                        <input type="file">
                                    </span>
                                    <a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
                                    <a class="publisher-btn" href="#"><i class="fa fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box-footer-->
            </div>
            <!--/.direct-chat -->
        </div>


        <div class="col-12 col-lg-8">
            <div class="box">
                <div class="box-header with-border">                        
                    <h4 class="box-title">Ticket List</h4>
                    <h6 class="box-subtitle">List of ticket opend by customers</h6>
                </div>
                <div class="box-body p-15">                     
                    <div class="table-responsive">
                        <table id="tickets" class="table mt-0 table-hover no-wrap table-bordered" data-page-size="10">
                            <thead>
                                <tr>
                                    <th>ID #</th>
                                    <th>Opened By</th>
                                    <th>Cust. Email</th>
                                    <th>Sbuject</th>
                                    <th>Status</th>
                                    <th>Assign to</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1011</td>
                                    <td>
                                        <a href="javascript:void(0)"><img src="../images/avatar/1.jpg" alt="user" class="avatar avatar-sm mr-5" /> Sophia</a>
                                    </td>
                                    <td>sophia@gmail.com</td>
                                    <td>How to customize the template?</td>
                                    <td><span class="badge badge-warning">New</span> </td>
                                    <td>Elijah</td>
                                    <td>14-10-2017</td>
                                    <td>
                                        <button type="button" class="btn btn-icon-circle btn-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Quick Email</h4>
                    <ul class="box-controls pull-right">
                        <li><a class="box-btn-close" href="#"></a></li>
                        <li><a class="box-btn-slide" href="#"></a></li> 
                        <li><a class="box-btn-fullscreen" href="#"></a></li>
                    </ul>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                        <div>
                            <textarea class="textarea b-1 p-10 w-p100" placeholder="Message"></textarea>
                        </div>
                    </form>
                </div>
                <div class="box-footer clearfix">
                    <button type="button" class="pull-right btn btn-info" id="sendEmail"> Send <i class="fa fa-paper-plane-o"></i></button>
                </div>                  
            </div>
            <!-- /.box -->
        </div>


    </div>            
</section>
<!-- /.box-footer-->

@endsection
