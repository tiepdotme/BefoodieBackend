<table class="table table-striped table-bordered zero-configuration">
    <thead>
        <tr>
            <th>#</th>
            <th>Tên danh mục</th>
            <th>Tên món</th>
            <th>Món kèm thêm</th>
            <th>Giá</th>
            <th>Tạo lúc</th>
            <th>Tình trạng</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($getaddons as $addons) {
        ?>
        <tr id="dataid{{$addons->id}}">
            <td>{{$addons->id}}</td>
            <td>{{$addons['category']->category_name}}</td>
            <td>{{$addons['item']->item_name}}</td>
            <td>{{$addons->name}}</td>
            <td>{{number_format($addons->price, 0)}}{{Auth::user()->currency}}</td>
            <td>{{$addons->created_at}}</td>
            @if (env('Environment') == 'sendbox')
                <td>
                    @if ($addons->is_available == 1)
                        <a class="badge badge-success px-2" onclick="myFunction()" style="color: #fff;">Available</a>
                    @else
                        <a class="badge badge-danger px-2" onclick="myFunction()" style="color: #fff;">Unavailable</a>
                    @endif
                </td>
                <td>
                    <span>
                        <a href="#" data-toggle="tooltip" data-placement="top" onclick="GetData('{{$addons->id}}')" title="" data-original-title="Edit">
                            <span class="badge badge-success">Edit</span>
                        </a>

                        <a class="badge badge-danger px-2" onclick="myFunction()" style="color: #fff;">Delete</a>
                    </span>
                </td>
            @else
                <td>
                    @if ($addons->is_available == 1)
                        <a class="badge badge-success px-2" onclick="StatusUpdate('{{$addons->id}}','2')" style="color: #fff;">Available</a>
                    @else
                        <a class="badge badge-danger px-2" onclick="StatusUpdate('{{$addons->id}}','1')" style="color: #fff;">Unavailable</a>
                    @endif
                </td>
                <td>
                    <span>
                        <a href="#" data-toggle="tooltip" data-placement="top" onclick="GetData('{{$addons->id}}')" title="" data-original-title="Edit">
                            <span class="badge badge-success">Edit</span>
                        </a>

                        <a class="badge badge-danger px-2" onclick="Delete('{{$addons->id}}')" style="color: #fff;">Delete</a>
                    </span>
                </td>
            @endif
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>