<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clean: It's your clothes but like, on your phone</title>

        <!-- Load bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
          h1 {
            font-weight: 400;
            font-size: 80px;
            color: #E38F00;
          }
          h2 {
            font-weight: 100;
            /*font-style: italic;*/
            font-size: 40px;
          }
          b {
            color: #054096;
          }
          a {
            color: #054096;
            border-bottom: 4px solid #FFCD77;
            font-weight: 900;
            padding-top:5px;
          }
          a:hover {
            text-decoration: none;
            background-color: #FFCD77;
          }
          a img {
            background-color:#ffffff;
            padding-right: 5px;
          }
        </style>
    </head>
    <body>
        <div class="container">
          <div class="row">
            <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-4">
              <img src="logo-png.png" class="logo img-responsive" />
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 text-center title">
              <h1 class="">Clean</h1>
              <h2 class="">It's your clothes, but like, on your phone</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3 description text-center">
              <p>The Clean API is a system for creating and editing users and items in a virtual closet.</p>
              <p>Each <b>person</b> can be assigned <b>items</b> of clothing, which can be arranged into <b>outfits</b>.</p>
              <p>For more, see the <a href="#">Clean documentation</a>.</p>
              <p>Created by <a href="https://github.com/litaylor"><img src="GitHub-Mark-32px.png">Langston Taylor</a>.</p>
            </div>
          </div>
        </div>

      <!-- Load fonts -->
      <script src="https://use.typekit.net/wqg3fwg.js"></script>
      <script>try{Typekit.load({ async: true });}catch(e){}</script>
    </body>
</html>
