<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('variant.update',$variant->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="">product_id</label>
            <select name="product_id" id="">
                @foreach ($product as $pro)
                <option value="{{$pro->id}}" {{ $variant->product_id == $pro->id ? 'selected' : '' }}> {{$pro->name}} </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">Size</label>
            <input type="text" name="size" value="{{$variant->size}}">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price" value="{{$variant->price}}">
        </div>
        <button type="submit">update</button>
    </form>
</body>
</html>