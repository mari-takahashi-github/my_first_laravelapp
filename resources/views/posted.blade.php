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
            <!-- <form action="" method="post">
                @csrf
                <textarea name="article" id="" ></textarea>
                <input type="submit" value="SEND">
            </form> -->
            <h2>投稿成功</h2>
            <p>つぶやきを投稿しましたよ。</p>
            <h2>投稿内容</h2>
            <p>
                {!! nl2br(e($text)) !!}
            </p>
            <!-- <p>
                {{}}
            </p> -->
            <a href="/">投稿一覧ページへ移動</a>
        </main>
        <footer>
            &copy;Mari Takahashi All Rights Reaserved.
        </footer>
    </body>
</html>
