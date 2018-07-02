<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/chessboard-0.3.0.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div id="app">
            <div class="container">
            <hr>
              <div class="row row-offcanvas row-offcanvas-right">
                <div class="col-3 col-md-3" id="sidebar">
                  <div class="list-group">
                    <a href="#" class="list-group-item">Создать игру</a>
                    <a href="#" class="list-group-item">Создать игру</a>
                  </div>
                </div>
                <div class="col-6 col-md-6">
                  <div class="row">
                    <div class="col-6 col-lg-12">
                      <div id="board" class="mx-auto d-block" style="width: 400px"></div>
                    </div>
                  </div>
                </div>
                <div class="col-3 col-md-3" id="sidebar">
                  <div class="list-group">
                    <a href="#" class="list-group-item">Создать сессию</a>
                  </div>
                </div>
              </div>
              <hr>
            </div>
        </div>
    </body>
    <script src="{{ asset('js/libraries/chessboardjs/js/chessboard-0.3.0.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/semantic.min.js') }}"></script>
</html>