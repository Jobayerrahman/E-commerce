<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>@yield('title')</title>

  <!-- Favicons -->
  <link href="img/" rel="icon">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('font/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
  <script src="{{asset('lib/chart-master/Chart.js')}}"></script>

</head>

<body>
  
@include('layout.menu')

@yield('content')

@include('layout.footer')




  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('js/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <script src="{{asset('lib/jquery.sparkline.js')}}"></script>
  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/gritter/js/jquery.gritter.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/gritter-conf.js')}}"></script>
  <!--script for this page-->
  <script src="{{asset('lib/sparkline-chart.js')}}"></script>
  <script src="{{asset('lib/zabuto_calendar.js')}}"></script>
</body>

</html>
