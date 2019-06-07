<!DOCTYPE html>
<html>
    <head>
        <title>@yield('pageTitle', 'No page title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            html, body {
                font-family: sans-serif;
            }
            body {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                width: 800px;
                margin: 5px auto;
                border: 2px solid #E0E0E0;
                box-shadow: 5px 5px #888888;
            }
            body>*{
                order: 3;
            }
            body > header,  body>footer {
                flex: 0 0 100%;
                padding: 0;
                background-color: azure;
            }
            body>header{
                order: 0;
            }
            body>header>h1{
                margin: 10px;
            }
            body>nav{
                order: 1;
                flex: 0 0 100%;
                justify-content: flex-end;
                display: flex;
                flex-direction: row;
                background-color: plum;
                border-bottom: 3px solid purple;
            }
            body>aside {
                order: 2;
                background-color: plum;
                padding: 10px;
                min-height: 350px;
            }
            body>section{
                padding: 10px;
                flex: 1 0 auto;
            }
            body>nav>div{
                padding:10px;
                cursor: pointer;
            }
            body>nav>div:hover, body>aside>div:hover{
                background-color: lightgoldenrodyellow;
            }
            body>nav>div:active, body>aside>div:active{
                background-color: yellow;
            }
            body>aside {
                padding:0;
            }
            body>aside>div{
                display: flext;
                flex-direction: column;
                padding: 10px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>@yield('title', 'No title')</h1>
        </header>
        <nav>
            <div>nav tem 1</div>
            <div>nav item 2</div>
            <div>nav item 3</div>
        </nav>
        <section>
            <div>@yield('content')</div>
        </section>
        <aside>
            <div>aside item 1</div>
            <div>aside item 2</div>
            <div>aside item 3</div>
        </aside>
        <footer>
            <div style="margin:10px;">Footer!</div>
        </footer>
    </body>
</html>