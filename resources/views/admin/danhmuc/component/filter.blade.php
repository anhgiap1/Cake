<div class="filter-wrapper">
    <div class="uk-flex uk-flex-middle uk-flex-space-between">
        <div class="perpage">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <select name="perpage" class="form-control input-sm perpage filter mr10">
                    @for($i =20; $i <= 200; $i+=20)
                    <option value="{{$i}}">{{$i}} bản ghi</option>
                    @endfor
                </select>
            </div>
            
            
        </div>
        <div class="action">
            <div class="uk-flex uk-flex-middle">
                <div class="uk-search uk-flex uk-flex-middle mr10">
                    <div class="input-group">
                        <input type="text" name="keyword" value="" placeholder="Nhập từ khóa mà bạn muốn tìm kiếm ..." class="form-control">
                        <span class="input-group-btn">
                            <button type="submit" name="search" value="search" class="btn btn-primary mb0 btn-sm">Tìm kiếm</button>
                        </span>
                    </div>
                </div>
                <a href="{{route('category.create')}}" class="btn btn-danger"><i class="fa fa-plus"></i>Thêm mới Danh mục</a>
            </div>
        </div>
    </div>
</div>