<!DOCTYPE html>
<html>
<head>
    <title>Xác nhận địa chỉ email</title>
</head>
<body>
<div>
    <div style="background:#ffffff;padding:15px">
        <center>
            <div style="width:100%;max-width:500px;background:#ffffff;height:180px">
                <br>
                <center>

                    <a href="#">
                        <img
                                alt=""
                                src="{{url('/')}}/public/assets/images/logo.png"
                                width="170" height="170"
                                style="display:block;font-family:Helvetica,Arial,sans-serif;color:#666666;font-size:16px"
                                border="0" class="CToWUd">
                    </a>
                </center>
            </div>
            <br>

            <div style="width:100%;max-width:580px;background:#ffffff;height:auto;padding:10px 0 10px 0">
                <hr style="border:dashed 1px #e1e1e1;max-width:100%">

                <div style="width:100%;max-width:580px;background:#ffffff;height:auto;padding:0px 0 0px 0">
                    <div style="font-family:'Lato',Helvetica,Arial,sans-serif;display:inline-block;margin:0px 0px 0 0;max-width:100%;width:100%;margin-right:0px">

                        <div style="width:100%;max-width:580px;background:#ffffff;height:auto;padding:20px 0 0px 0">
                            <div bgcolor="#f8f4e8" align="left"
                                 style="padding:0px 0% 0px 0%;font-size:22px;line-height:25px;font-family:'Lato',Helvetica,Arial,sans-serif;color:#19c0c2;font-weight:700"
                                 class="m_-7788511936867687679padding-copy">Chào bạn {{$email}},
                            </div>


                            <div style="width:100%;max-width:580px;background:#ffffff;height:auto;padding:15px 0 0px 0">
                                <div bgcolor="#f8f4e8" align="left"
                                     style="padding:0px 0% 0px 0%;font-size:16px;line-height:25px;font-family:'Lato',Helvetica,Arial,sans-serif;color:#6c6e6e;font-weight:500"
                                     class="m_-7788511936867687679padding-copy">
                                    Mã xác minh OTP địa chỉ email của bạn là<b style="color: #fe724c;"> {{$otp}}</b><br>Xin hãy dùng mã này để xác minh tài khoản của bạn trong ứng dụng Thùy Linh Foodie.

                                </div>




                                <div style="width:100%;max-width:580px;background:#ffffff;height:auto;padding:0px 0 10px 0">
                                    <hr style="border:dashed 1px #e1e1e1;max-width:100%">
                                </div>

                                <div style="display:inline-block;text-align:center;color:#777777;margin:0px auto 26px auto;font-family:'Lato',Helvetica,Arial,sans-serif"
                                     align="center">

                                    <div style="font-size:12px;color:#777777;margin:12px auto 30px auto;font-family:'Lato',Helvetica,Arial,sans-serif">
                                        <p style="font-size: 11px"><b>Xin lưu ý</b>:- Đây là thư trả lời tự động từ hệ thống, xin vui lòng không gửi trả lời email này vì sẽ không được hồi âm, mong bạn thông cảm.</p>

                                        <p style="line-height:1;font-size:12px;margin:0 20px 30px 20px;padding:0 0 0 0;color:#777777;font-family:'Lato',Helvetica,Arial,sans-serif">
                                            © Thùy Linh, Bảo lưu quyền.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>

</div>
</body>
</html>
