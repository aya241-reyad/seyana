
 @include('layouts.dashboard.header')
<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('layouts.dashboard.navbar')
        @include('layouts.dashboard.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>@yield('page_title')</h1>
            </div>
            
          </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            @yield('content')
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    
    @include('layouts.dashboard.footer')
