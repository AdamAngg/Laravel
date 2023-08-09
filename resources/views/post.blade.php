<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="app.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post number X</title>
</head>
<body>
   <article>
    <h1>{{$post->title}}</h1>
    <div>

        {{strip_tags($post->body)}}
    </div>

   
   </article>
   <a href="/">Go back</a>
</body>
</html>