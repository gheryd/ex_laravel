<!DOCTYPE html>
<html>
    <head>
        <title>@yield('pageTitle', 'No page title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                width: 800px;
                margin: auto;
                border: 1px solid red;
            }
            body>*{
                order: 3;
            }
            body > header {
                order: 0;
                flex: 0 0 100%;
                padding: 10px;
            }
            body>nav{
                order: 1;
                flex: 0 0 100%;
                display: flex;
                flex-direction: row;
                border: 1px solid purple;
            }
            body>aside {
                order: 2;
                border: 1px solid blue;
                padding: 10px;
                min-height: 350px;
            }
            body>footer{
                flex: 0 0 100%;
                padding: 10px;
                border: 1px solid green;
            }
            body>section{
                padding: 10px;
                border: 1px solid brown;
                flex: 1 0 auto;
            }
            body>nav>div{
                padding:10px;
                border: 1px solid gray;
                display: flex;
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
            <div style="display:flex;flex-direction: column;">
                <div>aside item 1</div>
                <div>aside item 2</div>
                <div>aside item 3</div>
            </div>
        </aside>
        <footer>
            Footer!
        </footer>
    </body>
</html>