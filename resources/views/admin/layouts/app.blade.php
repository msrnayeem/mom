<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('admin.components.head')

<!--begin::Body-->

<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        <!--begin::Header-->
        @include('admin.components.navbar')
        <!--end::Header-->

        <!--begin::Sidebar-->
        @include('admin.components.sidebar')
        <!--end::Sidebar-->

        <!--begin::App Main-->
        <main class="app-main">

            <!--begin::breadcrumb-->
            @include('admin.components.breadcrumb')
            <!--end::breadcrumb-->

            <!--begin::App Content-->
            <div class="app-content">

                <!--begin::Container-->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!--end::App Content-->
        </main>
        <!--end::App Main-->


        <!--begin::Footer-->
        @include('admin.components.footer')
        <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->

    @include('admin.components.scripts')
</body>
<!--end::Body-->

</html>
