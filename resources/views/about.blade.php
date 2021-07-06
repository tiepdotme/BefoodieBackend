
@extends('theme.default')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('/admin/home')}}">Trang quản trị viên</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Cài đặt</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <span id="msg"></span>
                    <h4 class="card-title">Giới thiệu</h4>
                    <p class="text-muted"><code></code>
                    </p>
                    <div id="privacy-policy-three" class="privacy-policy">
                        <form method="post" name="about" id="about" enctype="multipart/form-data">
                            @csrf
                            <p>Giới thiệu</p>
                            <div class="form-group">
                                <label for="about_content" class="col-form-label">Nội dung giới thiệu:</label>
                                <textarea class="form-control" id="about_content" rows="5" name="about_content">{{$getabout->about_content}}</textarea>
                            </div>
                            @if (env('Environment') == 'sendbox')
                                <button type="button" class="btn btn-primary" onclick="myFunction()">Cập nhật</button>
                            @else
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            @endif
                        </form>
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
$(document).ready(function() {

    $('#about').on('submit', function(event){
        event.preventDefault();
        var form_data = new FormData(this);
        $('#preloader').show();
        $.ajax({
            url:"{{ URL::to('admin/about/update') }}",
            method:"POST",
            data:form_data,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(result) {
                $('#preloader').hide();
                var msg = '';
                if(result.error.length > 0)
                {
                    for(var count = 0; count < result.error.length; count++)
                    {
                        msg += '<div class="alert alert-danger">'+result.error[count]+'</div>';
                    }
                    $('#msg').html(msg);
                    setTimeout(function(){
                      $('#msg').html('');
                    }, 5000);
                }
                else
                {
                    location.reload();
                }
            },
        })
    });
});

</script>
@endsection