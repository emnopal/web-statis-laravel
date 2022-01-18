<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang</title>
</head>
<body>
    <h1>Selamat Datang {{ $data['first_name'] }} {{ $data['last_name'] }}</h1>
    <h2>Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!</h2>
</body>
</html>
