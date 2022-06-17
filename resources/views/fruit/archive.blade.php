<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Laravel</title>
</head>
<body>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="card mt-4">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($fruits as $f)
                        <tr>
                            <td>{{$f->id}}</td>
                            <td>{{$f->name}}</td>
                            <td>{{$f->price}}</td>
                            <td>{{$f->stock}}</td>
                            <td>{{$f->created_at->diffForHumans()}}</td>
                            <td>
                                <form action="{{route('fruit.perdelete',$f->id)}}" method="post">
                                    @csrf
                                    <button class="btn btn-outline-danger">Delete</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('fruit.restore',$f->id)}}" method="post">
                                    @csrf
                                    <button class="btn btn-outline-success">Restore</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
