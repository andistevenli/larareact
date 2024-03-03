<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .user-card{
            margin-bottom: 20px;
        }
        .user-image{
            max-width: 100px;
            boarder-radius: 50%;
        }
    </style>
</head>
<body>
    <h1>Users</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <h1>users</h1>
        <div class="row">
            @foreach ($users as $user)
                <div class="cold-md-4 user-card">
                    <div class="card">
                        <img src="{{ $user['picture']}}" alt="" class="card-img-top user-image">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$user['firstName']}} {{$user['lastName']}}
                            </h5>
                            <p class="card-text">
                                Title: {{ $user['title']}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
</body>
</html>