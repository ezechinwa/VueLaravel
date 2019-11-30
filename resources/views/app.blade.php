<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/css/app.css">

        <title>Learing Vue with Laravel</title>

        
    </head>
    <body>
        <div class="" id="app">
            <div class="container mx-auto">
                <header> 
                    <h1>Laracasts</h1>
                </header>
                <main>
                    <aside>
                            <router-link to="/">Home</router-link> 
                            <router-link to="/about">About</router-link> 
                    </aside>
                    <div class="primary">
                            <router-view></router-view>
                    </div>
                </main>
                   

            </div>
           
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
