<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang</title>
</head>
<body>
    <h1>Selamat Datang {{ $data['first_name'] }} {{ $data['last_name'] }}</h1>
    <h2>Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!</h2>

{{--    <h1>First Name: {{$data['first_name']}}</h1>--}}
{{--    <h1>Last Name: {{$data['last_name']}}</h1>--}}
{{--    <h1>Gender: {{$data['gender']}}</h1>--}}
{{--    <h1>Nationality: {{$data['nationality']}}</h1>--}}
{{--    @foreach($data['bahasa'] as $bahasa)--}}
{{--        <h1>Bahasa: {{$bahasa}}</h1>--}}
{{--    @endforeach--}}
{{--    <h1>Bio: {{$data['bio']}}</h1>--}}

</body>
</html>
