<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    @include('auth.includes.header')

    @yield('title')

    @include('auth.includes.headerStyle')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 1-column  bg-full-screen-image blank-page blank-page" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->

    @include('auth.includes.scripts')

</body>
<!-- END: Body-->

</html>
