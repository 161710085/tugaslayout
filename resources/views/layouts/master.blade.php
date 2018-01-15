<!DOCTYPE html>
<html>
<head>
	<title>Latihan  Templates</title>
</head>
<body>
@include('template.header')

	@yield('konten')

@include('template.footer')
</body>
</html>