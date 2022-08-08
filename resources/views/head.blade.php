<title>{{ $title }}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('src/css/main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('src/css/login.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('src/css/register.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('src/css/forgot-password.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta name="csrf-token" content="{{ csrf_token() }}">