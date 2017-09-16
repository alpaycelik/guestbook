<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Laravel Guestbook</title>
</head>
<body>
@foreach($entries as $entry)
    <p>{{ $entry->comment }}</p>
    <p>Posted on {{ $entry->created_at->format('M jS, Y') }}  by
        <a href="mailto:{{ $entry->email }}">{{ $entry->username}}</a>
    </p><hr />
@endforeach

<form action="/" method="post" class="form-horizontal registration-form">
    {{ csrf_field() }}
    <table border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="frmName" value="" size="30" maxlength="50"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="frmEmail" value="" size="30" maxlength="100"></td>
        </tr>
        <tr>
            <td>Comment</td>
            <td><textarea name="frmComment" rows="5" cols="30"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="submit">
                <input type="reset" name="reset" value="reset"></td>
        </tr>
    </table>
</form>
</body>
</html>