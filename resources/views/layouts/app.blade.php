<!DOCTYPE html>
    <head>

        <title> {{ config('app_name','SPEED&SINE') }}</title>
        {{-- <link rel="shortcut icon" href="#" type="image/x-icon"> --}}
        <style>
*{
  margin:0;
}

body{
  font: 200 16px/1 Helvetica, Arial, sans-serif;
  background-color:black;
}

</style>

        @yield('meta')

    </head>
    <body>
        @yield('header') 
        @yield('navbar')
        @yield('main-content')
        @yield('footer')
       
    </body>
</html>