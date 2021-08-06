<!-- /.dangnhap-logo -->
<div class="login-box-body">
    <p class="login-box-msg">Đăng nhập</p>
    <?php if ($data) : ?>
        <p class="text-red"><?= $data; ?></p>
    <?php endif; ?>
    <form action="<?=DOMAIN?>taikhoan/dangnhap" method="post">
        <div class="form-group has-feedback">
            <input type="text" name="taikhoan" class="form-control" placeholder="Tài khoản">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="matkhau" class="form-control" placeholder="Mật khẩu">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <a href="#">Quên mật khẩu</a><br>
    <a href="<?=DOMAIN?>taikhoan/dangky" class="text-center">Tạo tài khoản</a>

</div>
<!-- /.dangnhap-box-body -->