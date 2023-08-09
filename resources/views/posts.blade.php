<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="app.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blog</title>
</head>
<body>
    <?php foreach ($posts as $post) : ?>
        <article>
          <h1>
            <a href="posts/{{$post->slug}}"> {{$post->title}}</a>
          </h1><p>
           {{$post->excerpt}}
          </p>
          {{$post->date}}       
        </article>
     <?php  endforeach ?>
    </body>
    </html>