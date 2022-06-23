<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <title>Single post</title>
</head>

<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">{{ $post->title }}</h1>
                <img class="w-75 mx-auto d-block mt-4 mb-5" src="{{ asset('uploads/' . $post->image) }}"
                    alt="">
                <p>{{ $post->content }}</p>
                <hr>
                <h2 class="mb-3">All Comments ({{ $post->comments->count() }})</h2>

                @if ($post->comments->count() > 0)
                    @foreach ($post->comments as $comment)
                        <div class="comment">
                            <b>{{ $comment->user->name }}</b>
                            <span>{{ $comment->created_at->diffForHumans() }}</span>
                            <p class="mt-2">{{ $comment->comment }}</p>
                        </div>
                    @endforeach
                @else
                    <p class="text-center">No Comment</p>
                @endif



            </div>
        </div>
    </div>
</body>

</html>
