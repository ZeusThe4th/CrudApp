<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Todo list App</title>
        
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body>
        
        <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
            <h1 class="text-2xl font-bold mb-4">My Todo items</h1>

            <a href="/posts/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
                rounded-hover:shadow">Add item</a>
            
            @foreach($posts as $post)
            <article class="mb-2">
                <a href="/posts/{{$post->id}}/edit" class=" text-xl font-bold text-gray-900">{{$post->title}}</a>
                <p class="text-md text-gray-600">{{$post->content}}</p>
                <hr>
            </article>
            @endforeach
        </div>
        
        
    </body>
</html>