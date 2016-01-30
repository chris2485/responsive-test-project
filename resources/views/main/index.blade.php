@extends('master')


@section('title')
	Testing Responsive Design
@endsection

@section('header')
	Sample Header
@endsection

@section('content')
<div class="navigation">
	<ul>
		<a href=""><li>Home</li></a>
		<a href=""><li>About</li></a>
		<a href=""><li>Contact</li></a>
		<a href=""><li>Home</li></a>
		<a href=""><li>About</li></a>
		<a href=""><li>Contact</li></a>
	</ul>

</div>

<hr/>


<div class="body-content"><div class="section-inner">

		<div class="one-third one-third-first mobile-collapse">
			<img id="left-brain" src="images/PT/blue.png" alt=""/>
			<h2>Section One</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

		<div class="one-third one-third-second mobile-collapse">
			<img src="images/2.jpg">
			<h2>Section Two</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

		<div class="one-third one-third-last mobile-collapse">
			<img src="images/3.jpg">
			<h2>Section Three</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

</div></div>


@endsection