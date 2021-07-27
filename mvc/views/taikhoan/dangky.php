<div class="register-box-body">
    <p class="login-box-msg">Đăng ký</p>
    <?php if ($data): ?>
        <p class="text-red"><?= $data;?></p>
    <?php endif; ?>
    <form action="<?= DOMAIN ?>index.php?url=taikhoan/dangky" method="post">
        <div class="form-group has-feedback">
            <input type="text" name="taikhoan" class="form-control" placeholder="Tài khoản">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="text" name="hoten" class="form-control" placeholder="Họ & tên">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="matkhau" class="form-control" placeholder="Mật khẩu">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Nhập lại mật khẩu">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng ký</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
    <a href="./index.php?url=taikhoan/dangnhap" class="text-center">Tôi đã có tài khoản</a>
</div>
<!-- /.form-box -->
