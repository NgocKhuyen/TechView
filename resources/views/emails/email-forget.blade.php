<!DOCTYPE html>
<html>
<head>
    <title>Đặt lại mật khẩu</title>
</head>
<body>
    <p>Xin chào,</p>
    <p>Bạn đã yêu cầu đặt lại mật khẩu. Vui lòng nhấp vào liên kết dưới đây:</p>
    <a href="{{ route('account.reset_password', $token) }}">Đặt lại mật khẩu</a>
    <p>Nếu bạn không yêu cầu điều này, hãy bỏ qua email này.</p>
</body>
</html>
