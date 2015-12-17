<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Test App</title>

        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?=config('app.basePath')?>css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=config('app.basePath')?>css/font-awesome/font-awesome.min.css">
        <link rel="stylesheet" href="<?=config('app.basePath')?>css/style.css">
    </head>
    <body>
        @include('common.navbar')
        <div class="container">
            <div class="content">
                @yield("content")
            </div>
        </div>
    </body>
</html>
