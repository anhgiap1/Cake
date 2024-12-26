<table class="table table-striped">
        <thead>
            <tr>
                <th>Product_id</th>
                <th>Size</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listvar as $var)
            <tr>
                <td>{{$var->product_id}}</td>
                <td>{{$var->size}}</td>
                <td>{{$var->price}}</td>
                <td>
                    <a href="{{route('variant.edit', $var->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <form action="{{route('variant.destroy', $var->id)}}" method="post" >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
</table>
