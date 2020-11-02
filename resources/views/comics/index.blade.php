<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>

    <ul>

      @foreach ($comics as $comic)

        <li>
          <div class="comic">
            <img class="comic__image" src="{{$comic->cover}}" alt="Foto - {{$comic->title}}">
            <h2 class="comic__title">{{$comic->title}}</h2>
          </div>
        </li>



      @endforeach

    </ul>


  </body>
</html>