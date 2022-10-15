<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layout.partials.head')
    
  </head>

  <body id="page-top">

	@include('layout.admin.nav_admin')

  {{-- @include('layout.partials.header') --}}

{{--   @include('layout.partials.services')

  @include('layout.partials.portfolio')

  @include('layout.partials.about')

  @include('layout.partials.team')

  @include('layout.partials.clients')

  @include('layout.partials.contact')

  @include('layout.partials.article') --}}


	@yield('content')

	@include('layout.partials.footer')
	
	@include('layout.partials.footer-scripts')

  
  </body>
</html>
