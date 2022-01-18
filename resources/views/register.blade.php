<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buat akun baru</title>
</head>
<body>
<h1>Buat Account Baru!</h1>
<h2>Sign Up Form</h2>
<form action="{{ url('/register_form') }}" method="post" id="registration_form">
{{ csrf_field() }}
<!-- input type: text -->
    <label for="first_name">First Name:</label><br><br>
    <input type="text" name="first_name" id="first_name"><br><br>
    <label for="last_name">Last Name:</label><br><br>
    <input type="text" name="last_name" id="last_name"><br>
    <!-- input type: radio -->
    <p>Gender:</p>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label><br><br>
    <!--input type: drop down list -->
    <label for="nationality">Nationality:</label><br><br>
    <select name="nationality" id="nationality">
        <option value="indonesian">Indonesian</option>
        <option value="malaysian">Malaysian</option>
        <option value="singaporean">Singaporean</option>
        <option value="philippines">Philippines</option>
    </select><br>
    <p>Language Spoken:</p>
    <input type="checkbox" id="bahasa_indonesia" name="bahasa_indonesia" value="bahasa_indonesia">
    <label for="bahasa_indonesia">Bahasa Indonesia</label><br>
    <input type="checkbox" id="english" name="english" value="english">
    <label for="english">English</label><br>
    <input type="checkbox" id="other_lang" name="other" value="other">
    <label for="other_lang">Other</label><br><br>
    <!-- input type: text -->
    <label for="bio">Bio:</label><br><br>
    <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
</form>
<!-- button submit -->
<input type="submit" value="Sign Up" form="registration_form"><br><br>
<a href="{{ url('/') }}">Kembali ke halaman utama</a>
</body>
</html>
