<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('vars.addpostvar')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">product_id</label>
            <select name="product_id" id="">
                @foreach ($product as $pro)
                <option value="{{$pro->id}}">{{$pro->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">Size</label>
            <input type="text" name="size">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price">
        </div>
        <button>add</button>
    </form>
</body>
</html>