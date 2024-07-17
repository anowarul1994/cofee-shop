<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        @include('admin.includes.style')
    </head>
    <body class="sb-nav-fixed">
        @include('admin.includes.topbar')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('admin.includes.side-bar')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        @yield('content')
                    </div>
                </main>
                @include('admin.includes.footer')
            </div>
        </div>
        @include('admin.includes.script')
    </body>
</html>
