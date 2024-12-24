<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <a href="{{route('cates.addcate')}}">them moi</a>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listcate as $cat)
            <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->name}}</td>
                <td><a href="{{route('cates.updatecate', $cat->id)}}">edit</a>
                <form action="{{route('cates.deletecate',$cat->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">xoa</button>
                </form>
                
             </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>