<!DOCTYPE html>
<html>
<head>
    <title>New Request</title>
</head>
<body>

<p>Hello, {{$user->name}}</p>
<p>Transaction: {{$transaction}}</p>
Thank you for purchasing! <br>
@isset($url)
    You can get access to the application with your email: {{$user->email}}. <br>
    To set the password you can use the link: <br>
    {{$url}} <br>
    This password reset link will expire in {{config('auth.passwords.'.config('auth.defaults.passwords').'.expire')}} minutes.
    <br> <br>

    If you need to get another password link you can request it here: <br>
    {{ url('/password/reset') }}

@else
    Here you will find the course will all lectures:
    {{ url('/my-products') }}
@endisset
</body>
</html>
