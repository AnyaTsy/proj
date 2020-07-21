<!DOCTYPE html>
<html>
<head>
    <title>New Request</title>
</head>
<body>

<p>Thank you for the request</p>
<p>Your Data:</p>
{{ $name }} <br>
{{ $email }}
<p>Message:</p>
<p> {{$userMessage}}</p>
Regards, <br>
{{ config('app.name') }}
</body>
</html>
