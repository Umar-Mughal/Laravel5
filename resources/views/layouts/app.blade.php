<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	@section('head-content')
	  @show
</head>
<body class="front_page promo_popup">
    <div class="wide_layout">
        @include('layouts.header');

        @section('content')
            @show

        @include('layouts.footer');

        @section('footer-content')
        	@show
    </div>

</body>
</html>