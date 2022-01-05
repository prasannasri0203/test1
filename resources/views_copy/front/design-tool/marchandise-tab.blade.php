@extends('front.app')

@section('title', '')

@section('body_class', '')

@section('main_div_class', '')

@section('content')

@php
$activeSidebar = 'Creation-Station';
@endphp

<!--Page Content Start-->
  <!--dashboard artist-->
    <section>
        <div class="dashboard-sec slidpad creabg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                        <!-- Side Bar -->
                        @include('front.user-sidebar')
                        <!-- Side Bar -->
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 nopadding">
                        <!-- Top Banner-->
                        @include('front.design-tool.top-banner')
                        <!-- Top Banner-->

                        <div class="createstation_tab">
                            <!-- Top Navigation Tabs -->
                            @include('front.design-tool.top-nav-tabs')
                            <!-- Top Navigation Tabs -->

                            <div id="tab_row_spacing" class="tab-content">
                                <!-- mechendise content  -->
                                @include('front.design-tool.content.merchendise')
                                <!-- mechendise content  -->
                            </div>
                        </div>
                        <!--/.navtab-->
                        <!-- <button type="submit" class="btn btn-default savecrea1">SAVE AND CONTINUE <i class="fa fa-arrow-circle-right"></i></button> -->
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/.dashboard artist-->
<!--Page Content End-->

@endsection
