<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <title>posts</title>
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center">All Posts</h1>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('uploads/'.$post->image ) }}" class="card-img-top" height="230" style="object-fit: cover" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ substr( $post->title ,0,50) }}</h5>
                            <p class="card-text">{{ substr( $post->content  , 0 , 100,).' ....'}}</p>
                            <a href="{{ route('posts.single',$post->id) }}" class="btn btn-outline-dark w-100">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</body>

</html>
