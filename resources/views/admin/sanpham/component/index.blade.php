<table  class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Category</th>
                <th>Action</th>
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
                <td>
                    {{$pro->category->name}}
                </td>
                <td>
                    <a href="{{route('product.edit', $pro->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <form action="{{route('product.destroy',$pro->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
            
        </tbody>
</table>
