<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới</title>
</head>
<body>
    <form action="{{route('pros.addpostpro')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="container">
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Name">
    </div>
    <div>
        <label for="">Image</label>
        <input type="file" name="image">
    </div>
    <div class="form-group">
       <label for="">Danh mục:</label>
            <select class="form-control" name="categories_id" required>
                @foreach($categories as $category)
                   <option value="{{ $category->id }}">{{ $category->name }}</option>
                 @endforeach
            </select>
    </div>
     <button>add</button>
    </form>
</body>
</html>