<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <a href="{{route('vars.addvar')}}">add</a>
        <thead>
            <tr>
                <th>Product_id</th>
                <th>Size</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listvar as $var)
            <tr>
                <td>{{$var->product_id}}</td>
                <td>{{$var->size}}</td>
                <td>{{$var->price}}</td>
                <td>
                    <a href="{{route('vars.updateputvar',$var->id)}}">sua</a>
                    <form action="{{route('vars.deletevar', $var->id)}}" method="post" >
                        @csrf
                        @method('DELETE')
                        <button>DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>