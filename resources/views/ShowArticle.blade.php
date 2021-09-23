<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mari's Realtime Diary | Laravel Sample</title>

        <!-- Fonts -->
        

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('/css/recet.css')}}">
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        
    </head>
    <body>
        <header>
            <h1><img src="{{asset('images/logo.png')}}" alt="Mari's Realtime Diary"></h1>
        </header>
        <main>
            @foreach ($days as $day => $articles)
                <h2>{{$day}}</h2>
                <div class="group_day">                    
                    @foreach ($articles->sortByDesc('id') as $article)
                        <div class="article">
                            <h3>{{$article->time}}</h3>
                            <p>{!! nl2br(e($article->text)) !!}</p>
                        </div>
                    @endforeach
                </div>
                <!-- <div>
                    <p>{{$article->time}}</p>
                    <p>{{$article->text}}</p>
                </div>
                <hr> -->
            @endforeach
            
        </main>
        <footer>
            <small>&copy;Mari Takahashi All Rights Reaserved.</small>
        </footer>
    </body>
</html>
