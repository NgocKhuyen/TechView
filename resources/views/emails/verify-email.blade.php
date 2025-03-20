<!DOCTYPE html>
<html>
<head>
    <title>Xác thực Email</title>
</head>
<body>
    <h2>Xin chào, {{ $user->hoten }}</h2>
    <p>Bấm vào link dưới đây để xác thực email của bạn:</p>
    <a href="{{ route('account.verifyemail', ['id' => $user->id]) }}">Xác thực email</a>
</body>
</html>
