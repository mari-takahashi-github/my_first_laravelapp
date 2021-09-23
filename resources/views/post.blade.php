<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mari's Realtime Diary | Laravel Sample</title>

        <!-- Fonts -->
        

        <!-- Styles -->
        
        
    </head>
    <body>
        <header>
            <h1>Mari's Realtime Diary</h1>
        </header> 
        <main>
            <form action="/article_post_success" method="post">
                @csrf
                <textarea name="text" ></textarea>
                <input type="submit" value="SEND">
            </form>
            <!-- <p>ただいま準備中です。</p>
            <p>フォームとか準備するページ。</p> -->
        </main>
        <footer>
            &copy;Mari Takahashi All Rights Reaserved.
        </footer>
    </body>
</html>
