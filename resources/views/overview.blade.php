@extends('master')

@section('title', 'Web Developer & Software Programmer')


@section('meta')
	@parent
	<meta name="theme-color" content="#fff" />
	<meta name="robots" content="index">
	<meta name="keywords" content="WEB DEVELOPMENT WEBSITE DESIGN DESIGNER BUILD AGENCY FREELANCER COMPUTER SCIENCE JAVA PHP JAVASCRIPT JS NODE MINIMAL PROFESSIONAL">
	<meta name="description" content="Martin Shaw is looking contribute his knowledge and experience to Web Design & Development projects. PHP, Node.js, Java, CSS, HTML, Javascript.">
@endsection


@section('assets')
	<script src="js/pages/overview.js"></script>
	<link rel="stylesheet" href="css/pages/overview.css">
@endsection


@section('sidebar')
    @parent
	<div class="rp_menu">
		<ul>
			<li><a href="#" onclick="changeItems(0);" class="active">Client Projects</a></li>
			<li><a href="#" onclick="changeItems(1);">Experiments</a></li>
			<li><a href="#" onclick="changeItems(2);">Contact Me</a></li>
		</ul>
	</div>
@endsection


@section('hint')
	<div class="rpb_hint">Click any of the projects for more information</div>
@endsection


@section('content')
		
	<div class="square">
	    <div class="content">
	        <div class="table">
	            <div class="table-cell">
	                <img class="rs" src="/images/tile_1.jpg"/>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="square">
	   <div class="content">
	        <div class="table">
	            <div class="table-cell mobile">
	                <img class="rs" src="/images/tile_2.jpg"/>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="square">
	    <div class="content">
	        <div class="table">
	            <div class="table-cell numbers">               
	                3.9/5
	            </div>
	        </div>
	    </div>
	</div>

	<!-- 2nd row verticaly centered images in square columns -->

	<div class="square">
	    <div class="content">
	        <div class="table">
	            <div class="table-cell numbers">
	                    98%
	            </div>
	        </div>
	    </div>
	</div>
	<div class="square">
	    <div class="content">
	        <div class="table">
	            <div class="table-cell">
	               <img class="rs" src="https://farm9.staticflickr.com/8461/8048823381_0fbc2d8efb.jpg"/>
	                Responsive image.
	            </div>
	        </div>
	    </div>
	</div>
	<div class="square">
	   <div class="content">
	        <div class="table">
	            <div class="table-cell">
	                <img class="rs" src="https://farm5.staticflickr.com/4144/5053682635_b348b24698.jpg"/>
	                Responsive image.
	            </div>
	        </div>
	    </div>
	</div>

	<!-- 3rd row responsive images in background with centered content -->

	<div class="square bg img1">
	   <div class="content">
	        <div class="table">
	            <div class="table-cell">
	                Centered responsive images as background with centered content over it.
	            </div>
	        </div>
	    </div>
	</div>
	<div class="square bg img2">
	    <div class="content">
	        <div class="table">
	            <div class="table-cell">
	                Again
	            </div>
	        </div>
	    </div>
	</div>
	<div class="square bg img3">
	    <div class="content">
	        <div class="table">
	            <div class="table-cell">
	                And again
	            </div>
	        </div>
	    </div>
	</div>

@endsection