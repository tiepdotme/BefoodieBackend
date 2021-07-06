<table class="table table-striped table-bordered zero-configuration">
    <thead>
        <tr>
            <th>#</th>
            <th>Tên chương trình</th>
            <th>Mã giảm giá</th>
            <th>Tỷ lệ phần trăm (%) </th>
            <th>Chi tiết chương trình </th>
            <th>Tạo lúc</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($getpromocode as $promocode) {
        ?>
        <tr id="dataid{{$promocode->id}}">
            <td>{{$promocode->id}}</td>
            <td>{{$promocode->offer_name}}</td>
            <td>{{$promocode->offer_code}}</td>
            <td>{{$promocode->offer_amount}}</td>
            <td>{{$promocode->description}}</td>
            <td>{{$promocode->created_at}}</td>
            <td>
                <span>
                    <a href="#" data-toggle="tooltip" data-placement="top" onclick="GetData('{{$promocode->id}}')" title="" data-original-title="Edit">
                        <span class="badge badge-success">Chỉnh sửa</span>
                    </a>
                    @if (env('Environment') == 'sendbox')
                        <a href="#" data-toggle="tooltip" data-placement="top" onclick="myFunction()" title="" data-original-title="Delete">
                            <span class="badge badge-danger">Xóa bỏ</span>
                        </a>
                    @else
                        <a class="badge badge-danger px-2" onclick="StatusUpdate('{{$promocode->id}}','2')" style="color: #fff;">Xóa bỏ</a>
                    @endif
                </span>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>