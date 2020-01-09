<!DOCTYPE html>
<html lang="en">
<head>
	@include('components.meta')
</head>
<body>
	{{-- Header --}}
	@include("layouts.header")


	{{-- Main Contents --}}
	@yield("contents")

	{{-- Footer --}}
	@include("layouts.footer")

	{{-- Google Map API Platform ['key', 'libraries, and 'callback function'] --}}
	<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API_KEY') }}&callback=initMap" async defer></script>
	<script src="{{asset('/js/autocomplete.js')}}"></script>
</body>
</html>