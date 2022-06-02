<!DOCTYPE html>
<html lang="en"><head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Scripts -->
   <script src="{{ asset('/js/app.js') }}" defer></script>
   <!-- Styles -->
   <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
   
   <!-- hier wird der Wert von der section "title" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
   <title>@yield('title')</title>
</head>
<body>
<!-- <div class="parallax"></div>
<div style="height:1000px">
   <Scroll Up and Down this page to see the parallax scrolling effect.
   This div is just here to enable scrolling.
   Tip: Try to remove the background-attachment property to remove the scrolling effect. -->
<!-- </div> --> 
   <!-- hier wird auch der Wert von der section "title" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
   <h1><a class="text-danger" href="/messages">@yield('title')</a></h1>
   <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
   @yield('content')
   
   <!-- hier wird die php Funktion date() aufgerufen mit dem Format-Pattern 'd.m.Y'
    und im html ausgegeben-->
   <!-- <div><b>Mini Twitter: {{date('d.m.Y')}}</b></div>    -->
   <footer class="fixed-bottom">
        <div class=".container pt-3 border">
            <div>
                <p class="small">© Copyright <?= date('d.m.Y') ?> | Mini Twitter- 8050 Zürich - Switzerland | All Rights Reserved</p>
            </div>
        </div>

    </footer>
    <!-- <div class="parallax"></div> -->
</body>
</html>
