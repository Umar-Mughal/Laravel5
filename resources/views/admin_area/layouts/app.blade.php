<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin_area.layouts.head')
	@section('head-section')
	  @show
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		 @include('admin_area.layouts.header');
		 @include('admin_area.layouts.sidebar');

		<div class="content-wrapper">
	    	<!-- Content Header (Page header) -->
	    	<section class="content-header"> 	
	 	
				 @section('content')
		   		 @show

		    </section>
    	<!-- /.content -->
 		 </div>
  		<!-- /.content-wrapper -->

		 @include('admin_area.layouts.footer');
		 
         @section('footer-section')
           @show
	</div>
</body>
</html>