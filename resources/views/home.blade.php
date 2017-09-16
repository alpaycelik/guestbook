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
<div class="row justify-content-center">
<form action="/" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="frmName">Ad</label>
        <input type="text" class="form-control" id="frmName" name="frmName" placeholder="Adınızı yazınız">
    </div>
    <div class="form-group">
        <label for="frmEmail">Email</label>
        <input type="email" class="form-control" id="frmEmail" name="frmEmail" aria-describedby="emailHelp" placeholder="E-mail adresinizi giriniz">
    </div>
    <div class="form-group">
        <label for="frmComment">Yorum</label>
        <textarea class="form-control" id="frmComment" name="frmComment" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Gönder</button>
    <button type="reset" class="btn btn-primary">Temizle</button>
</form>
</div>
@foreach($entries as $entry)
    <div class="card" style="margin:7px 20px">
        <div class="card-header">
            {{ $entry->username }}
        </div>
        <div class="card-block">
            <blockquote class="card-blockquote">
                <p>{{ $entry->comment }}</p>
                <footer>Posted on {{ $entry->created_at->format('M jS, Y - H:i:s') }}  by <a href="mailto:{{ $entry->email }}">{{ $entry->username}}</a></footer>
            </blockquote>
        </div>
    </div>
@endforeach
</body>
</html>