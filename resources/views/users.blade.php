@extends('theme.default')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('/admin/home')}}">Trang quản trị</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Người dùng</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <span id="message"></span>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">tất cả người dùng đã đăng ký</h4>
                    <div class="table-responsive" id="table-display">
                        @include('theme.userstable')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- #/ container -->
@endsection
@section('script')
<script type="text/javascript">
    $('.table').dataTable({
      aaSorting: [[0, 'DESC']]
    });
    function StatusUpdate(id,status) {
        swal({
            title: "Bạn chắc không?",
            text: "Bạn có muốn thay đổi trạng thái này?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Vâng đúng hãy thay đổi!",
            cancelButtonText: "Không, tôi lỡ tay",
            closeOnConfirm: false,
            closeOnCancel: false,
            showLoaderOnConfirm: true,
        },
        function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url:"{{ URL::to('admin/users/status') }}",
                    data: {
                        id: id,
                        status: status
                    },
                    method: 'POST', //Post method,
                    dataType: 'json',
                    success: function(response) {
                        swal({
                            title: "Approved!",
                            text: "Status has been changed.",
                            type: "success",
                            showCancelButton: true,
                            confirmButtonClass: "btn-danger",
                            confirmButtonText: "Ok",
                            closeOnConfirm: false,
                            showLoaderOnConfirm: true,
                        },
                        function(isConfirm) {
                            if (isConfirm) {
                                swal.close();
                                location.reload();
                            }
                        });
                    },
                    error: function(e) {
                        swal("Cancelled", "Đã có lỗi rồi :(", "error");
                    }
                });
            } else {
                swal("Cancelled", "Lỗi rồi bạn :)", "error");
            }
        });
    }
</script>
@endsection