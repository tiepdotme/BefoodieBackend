<table class="table table-striped table-bordered zero-configuration">
    <thead>
        <tr>
            <th>#</th>
            <th>Mã vùng</th>
            <th>tạo lúc</th>
            <th>hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($getpincode as $pincode) {
        ?>
        <tr id="dataid{{$pincode->id}}">
            <td>{{$pincode->id}}</td>
            <td>{{$pincode->pincode}}</td>
            <td>{{$pincode->created_at}}</td>
            <td>
                <span>
                    <a href="#" data-toggle="tooltip" data-placement="top" onclick="GetData('{{$pincode->id}}')" title="" data-original-title="Edit">
                        <span class="badge badge-success">Chỉnh sửa</span>
                    </a>
                    @if (env('Environment') == 'sendbox')
                        <a href="#" data-toggle="tooltip" data-placement="top" onclick="myFunction()" title="" data-original-title="Delete">
                            <span class="badge badge-danger">Xóa bỏ</span>
                        </a>
                    @else
                        <a class="badge badge-danger px-2" onclick="DeleteData('{{$pincode->id}}','2')" style="color: #fff;">Xóa bỏ</a>
                    @endif
                </span>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>