<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    @include('includes.header')

    @yield('title')

    @include('includes.headerStyle')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('includes.topNavbar')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('includes.sideMenu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->


    <!-- BEGIN: Footer-->
    @include('includes.footer')
    <!-- END: Footer-->

    @include('includes.scripts')

</body>
<!-- END: Body-->

</html>
