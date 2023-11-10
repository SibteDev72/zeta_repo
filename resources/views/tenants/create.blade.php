<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TENANTS | Dashboard</title>
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
	<!-- iCheck -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
	<!-- JQVMap -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/dist/css/custom_switch.css') }}">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
	<!-- summernote -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}"> </head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center"> <img class="animation__shake" src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60"> </div>
		<!-- Navbar Component -->
		<x-navbar />
		<!-- Left Sidebar Component -->
		<x-left_sidebar />
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<x-app-layout>
				<div class="py-12">
					<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
						<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
							<div class="p-6 text-gray-900">
								<form method="POST" action="{{ route('tenants.store') }}"> @csrf
									<!-- Name -->
									<div>
										<x-input-label for="name" :value="__('Name')" />
										<x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
										<x-input-error :messages="$errors->get('name')" class="mt-2" /> </div>
									<!-- Email Address -->
									<div class="mt-4">
										<x-input-label for="email" :value="__('Email')" />
										<x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
										<x-input-error :messages="$errors->get('email')" class="mt-2" /> </div>
									<div class="mt-4">
										<x-input-label for="domain_name" :value="__('Domain Name')" />
										<x-text-input id="domain_name" class="block mt-1 w-full" type="text" name="domain_name" :value="old('domain_name')" required autofocus autocomplete="domain_name" />
										<x-input-error :messages="$errors->get('domain_name')" class="mt-2" /> </div>
									<!-- Password -->
									<div class="mt-4">
										<x-input-label for="password" :value="__('Password')" />
										<x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
										<x-input-error :messages="$errors->get('password')" class="mt-2" /> </div>
									<!-- Confirm Password -->
									<div class="mt-4">
										<x-input-label for="password_confirmation" :value="__('Confirm Password')" />
										<x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
										<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /> </div>
									<div class="flex items-center justify-end mt-4">
										<x-primary-button class="ml-4"> {{ __('Register') }} </x-primary-button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</x-app-layout>
		</div>
		<!-- /.content-wrapper -->
		<x-footer />
		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->
	<!-- jQuery -->
	<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	$.widget.bridge('uibutton', $.ui.button)
	</script>
	<script>
		// Get references to the element and the button
		const element = document.getElementById("main-body");
		const toggleButton = document.getElementById("toggle_darkmode");
	
		// Add a click event listener to the button
		toggleButton.addEventListener("click", function() {
			element.classList.toggle("dark-mode");
		});              
	</script>
	<!-- Bootstrap 4 -->
	<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<!-- ChartJS -->
	<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
	<!-- Sparkline -->
	<script src="{{ asset('assets/plugins/sparklines/sparkline.js') }}"></script>
	<!-- JQVMap -->
	<script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
	<!-- jQuery Knob Chart -->
	<script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
	<!-- daterangepicker -->
	<script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
	<!-- Summernote -->
	<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
	<!-- overlayScrollbars -->
	<script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
	<!-- AdminLTE for demo purposes -->
	<!-- <script src="{{ asset('assets/dist/js/demo.js') }}"></script> -->
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="{{ asset('assets/dist/js/pages/dashboard.js') }}"></script>
</body>

</html>