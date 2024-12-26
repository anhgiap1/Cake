<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div>
                <label for="">Name</label>
                <input type="text" name="name">   
            </div>
            <button>Thêm mới</button>
    </form>
</body>
</html>