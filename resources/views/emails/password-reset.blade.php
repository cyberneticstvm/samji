<!DOCTYPE html>
<html>

<head>
    <title>Samji App - Password reset link</title>
</head>

<body>
    Dear {{ $user->name }},<br /><br />

    <p>Click <a href="{{ route('reset.password', ['uid' => encrypt($user->id)]) }}">here</a> to reset your account password</p>

    Regards,<br />
    Devi Eye Hospitals.
</body>

</html>