<table class="table table-striped">
                    <thead>
                    <tr>
                        <th>    
                            <input type="checkbox" value="" id="checkAll" class="input-checkbox checkBoxItem">
                        </th>
                        <th style="width:90px">Avatar</th>
                        <th>Họ tên</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Trạng Thái</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($userDb as $user )
                            
                       
                            <tr>
                                
                                    
                                
                                <td>
                                    <input type="checkbox" value="" id="checkAll" class="input-checkbox checkBoxItem">
                                </td>
                                <td>
                                    <span class="image image-cover"><img src="https://tse1.mm.bing.net/th?id=OIP.85YHICcsROWpEG8a_WS-0wHaFS&pid=Api&P=0&h=180" alt=""></span>
                                </td>
                                <td> 
                                    {{ $user->name}}
                                </td>
                                <td>
                                    {{ $user ->email}}
                                </td>
                                <td>
                                    {{ $user ->phonenumber}}
                                </td>
                                <td>
                                    {{ $user->address}}
                                </td>
                                <td> 
                                    <input type="checkbox" class="js-switch" checked>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
    </table>
{{  $userDb->links('pagination::bootstrap-4')  }}