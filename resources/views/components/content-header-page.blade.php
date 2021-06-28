<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>@yield('title')</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @if (Auth::user()->role_id == 1)
                        <li class="breadcrumb-item"><a href="@yield('redirect')">Home</a></li>
                    @elseif (Auth::user()->role_id == 2)
                        <li class="breadcrumb-item"><a href="@yield('redirect')">Home</a></li>
                    @endif
                    <li class="breadcrumb-item active">@yield('title')</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
