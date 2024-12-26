<table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listcate as $cat)
            <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->name}}</td>
                <td>
                <a href="{{route('category.edit', $cat->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                <form action="{{route('category.destroy',$cat->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </form>
                
             </td>
            </tr>
            @endforeach
        </tbody>
</table>
