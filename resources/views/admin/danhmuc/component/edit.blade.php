<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('category.update', $cate->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="">Name</label>
        <input type="text" name="name" value="{{$cate->name}}">   
    </div>
    <button type="submit">edit</button>
    </form>
</body>
</html>