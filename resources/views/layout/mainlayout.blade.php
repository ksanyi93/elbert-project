<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layout.partials.head')
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
  </head>

  <body id="page-top">

	@include('layout.partials.nav')

  @include('layout.partials.header')

  @include('layout.partials.services')

  @include('layout.partials.portfolio')

  @include('layout.partials.about')

  @include('layout.partials.team')

  @include('layout.partials.clients')

  @include('layout.partials.contact')


	{{-- @yield('content') --}}

	@include('layout.partials.footer')
	
	@include('layout.partials.footer-scripts')

  <script src="{{ url('/js/app.js') }}"></script>
  </body>
</html>
