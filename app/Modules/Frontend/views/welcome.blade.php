<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style href="{{mix('css/app.css')}}"></style>
    </head>
    <body>
       <div id="app">
           <p>this is FE</p>
           <example-component></example-component>
       </div>
    <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>
