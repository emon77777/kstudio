<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>KStudio</title>

  {{-- CSS Links --}}
  @include("backend.includes.css")
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    @include("backend.includes.navbar")
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include("backend.includes.sidebar")

    <!-- Content Wrapper. Contains page content -->
    {{-- @include("backend.includes.content") --}}
    @yield("content")
    <!-- /.content-wrapper -->

    <!-- Footer -->
    @include("backend.includes.footer")

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  @include("backend.includes.js")
</body>

</html>