<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <table>
    <a href="{{route('pros.addpro')}}">them moi</a>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Category_id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listpro as $pro)
            <tr>
                <td>{{$pro->id}}</td>
                <td>{{$pro->name}}</td>
                <td>
                    <img src="{{Storage::url($pro->image)}}" alt="">
                </td>
                <td>{{$pro->categories_id}}</td>
                <td>
                    <a href="{{route('pros.updatepro', $pro->id)}}">sua</a>
                    <form action="{{route('pros.deletepro',$pro->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button >delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</body>
</html>