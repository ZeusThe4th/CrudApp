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
            
            <form method="POST" action="/posts">

                @csrf



                <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Title:</label>
                <textarea class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
                text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                id="title" name="title"></textarea>
                </div>

                <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Content:</label>
                <textarea class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
                text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                id="content" name="content"></textarea>
                </div>
                <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
                rounded-hover:shadow">Create</button>
                </form>
        </div>
        
        
    </body>
</html>