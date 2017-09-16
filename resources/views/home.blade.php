<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Laravel Ziyaretçi Defteri</title>
</head>
<body>
<div class="container">
<form action="/" method="post">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="frmName" class="col-sm-2 col-form-label">Ad</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="frmName" name="frmName" placeholder="Adınızı yazınız">
        </div>
    </div>
    <div class="form-group row">
        <label for="frmEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" id="frmEmail" name="frmEmail" aria-describedby="emailHelp" placeholder="E-mail adresinizi giriniz">
        </div>
    </div>
    <div class="form-group row">
        <label for="frmComment" class="col-sm-2 col-form-label">Yorum</label>
        <div class="col-sm-10">
        <textarea class="form-control" id="frmComment" name="frmComment" rows="3"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10 justify-content-center">
        <button type="submit" class="btn btn-primary">Gönder</button>
        <button type="reset" class="btn btn-primary">Temizle</button>
        </div>
    </div>
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
                <footer>{{ $entry->created_at->format('d/m/Y - H:i:s') }}  tarihinde <a href="mailto:{{ $entry->email }}">{{ $entry->username}}</a> tarafından gönderildi.</footer>
            </blockquote>
        </div>
    </div>
@endforeach
</body>
</html>