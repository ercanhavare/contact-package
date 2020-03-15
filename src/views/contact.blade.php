<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Contact Us</title>
</head>
<body>
<h1>Contact Us any time</h1>
<form action="{{route('contact')}}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <textarea name="message" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Submit">
</form>
</body>
</html>
