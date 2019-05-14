@extends('layouts.app')

@section('title')
    
    @parent
@stop
@section('content12')
 

<section class="content-header">
        <!--section starts-->
        <h1>M T O </h1>
        <ol class="breadcrumb">
            <li>
                {{-- <a href="{{ route('pages.index') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    MTO
                </a> --}}
            </li>
            <!-- <li>
                <a href="#">Forms</a>
            </li>
            <li class="active">Form Examples</li> -->
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <!--row starts-->
            <div class="col-md-12">
                <!--lg-6 starts-->
                <!--basic form starts-->
                <div class="panel panel-primary" id="hidepanel1">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            MTO
                        </h3>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up clickable"></i>
                                    {{-- <i class="glyphicon glyphicon-remove removepanel clickable"></i> --}}
                                </span>
                    </div>

                    <div class="panel-body">

                        {{-- sssssssssssstttttttttttaaaaaaaaaaaaarrrrrrrrrrrtttttttttt --}}


                        <form class="form-horizontal" action="#">
                                <div class="row">
                                        <div class="col-md-6">
                             <!-- CSRF Token -->
                                <!-- MTO ID input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">MTO &nbsp ID</label>
                                    <div class="col-md-6">
                                        <input id="name" name="name" type="text" placeholder="Enter  id" class="form-control"></div>
                                </div>

                                <!-- Project name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="Projectnm">Project name</label>
                                    <div class="col-md-6">
                                        <input id="name" name="name" type="text" placeholder="Project name" class="form-control"></div>
                                </div>


                                <div class="col-md-6">

                                       <!-- Release no input-->
                                       <div class="form-group">
                                               <label class="col-md-6 control-label" for="Projectim">Project image</label>
                                               <div class="col-md-6">
                                           <div class="fileinput fileinput-new" data-provides="fileinput">
                                           <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                           <div>
                                                       <span class="btn btn-default btn-file">
                                                           <span class="fileinput-new">Select image</span>
                                                           <span class="fileinput-exists">Change</span>
                                                           <input type="file" name="..."></span>
                                               <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                           </div>
                                   </div> </div>
                                       </div></div>



                                        </div>
                                        <div class="col-md-6">
                                          <!-- Project code input-->
                                          <div class="form-group">
                                             <label class="col-md-3 control-label" for="Projectcd">Project code</label>
                                             <div class="col-md-6">
                                                 <input id="name" name="name" type="text" placeholder="Project code" class="form-control"></div>
                                          </div>
                                            <!-- Release no input-->
                                 <div class="form-group">
                                        <label class="col-md-3 control-label" for="Releaseno">Release no</label>
                                        <div class="col-md-6">
                                            <input id="name" name="name" type="text" placeholder="Release no" class="form-control"></div>
                                    </div>

                                      <!-- Material -->
                                    <div class="form-group">
                                            <label class="col-md-3 control-label" for="Material">Material</label>
                                            <div class="col-md-6">
                                            <select class="form-control">
                                                <option>Aluminium</option>
                                                <option>Glass</option>
                                                <option>Steel</option>
                                                <option>Facades</option>
                                            </select>
                                        </div>
                                        </div>
                                        </div></div>

                                    {{-- 22222222222222222222222222222222222222222222222222 --}}














{{-- fhghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh --}}





                                <!-- Form actions -->
                                <div class="form-position">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-responsive btn-primary btn-sm">Next &nbsp;
                                                <i class="glyphicon glyphicon-arrow-right"></i>

                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>

            </div></div></section>



        <!--main content ends-->
    <!-- content -->
@stop


   