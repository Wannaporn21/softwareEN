@extends('layouts.html5')

@section('app')
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in header.scss -->
    <!-- ============================================================== -->
    @include('layouts.website.header')
    <!-- ============================================================== -->
    <!-- End Topbar header - style you can find in header.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in app.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" class="h-100">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div id="content-wrapper" class="h-100">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            @yield('body')
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Main Wrapper - style you can find in app.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    @include('layouts.website.footer')
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
@endsection

@section('plugins')
    <link href="{{ asset('css/layouts/e-commerce/app.css') }}" rel="stylesheet">
    @yield('style')
    @yield('javascript')
@endsection