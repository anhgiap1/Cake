<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới</title>
</head>
<body>
    <form action="{{route('pros.updateputpro', $product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="container">
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Name" value="{{$product->name}}">
    </div>
    <div>
        <label for="">Image</label>
        <img src="{{Storage::url($product->image)}}" alt="">
        <input type="file" name="image" >
    </div>
    <div class="form-group">
       <label for="">Danh mục:</label>
            <select class="form-control" name="categories_id" required value="{{$product->categories_id}}">
                @foreach($categories as $category)
                   <option value="{{ $category->id }}"
                   {{ $category->id == $product->categories_id ? 'selected' : '' }}>{{ $category->name }}
                   </option>
                 @endforeach
            </select>
    </div>
     <button type="submit">edit</button>
    </form>
</body>
</html>