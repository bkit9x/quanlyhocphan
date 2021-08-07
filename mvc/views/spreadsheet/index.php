<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Nhập điểm từ file excel</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form id="frm" role="form" action="<?= DOMAIN ?>taikhoan/sua" method="post" enctype="multipart/form-data">
        <div class="box-body">
            <div class="form-group">
                <label for="file">Chọn file điểm</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                    <input type="file" class="form-control" placeholder="Email">
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button form="frm" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Nhập điểm</button>
        </div>
    </form>
</div>
<script>
    $(function() {
        <?php
        if (isset($_GET['msg'])) {
            if ($_GET['msg'] == 'thanhcong')
                $msg = ['icon' => 'success', 'title' => 'Đã cập nhật thông tin!'];
            elseif ($_GET['msg'] == 'loi')
                $msg = ['icon' => 'warning', 'title' => 'Có lỗi xảy ra!'];
            elseif ($_GET['msg'] == 'matkhaukhongdung')
                $msg = ['icon' => 'warning', 'title' => 'Mật khẩu không đúng!'];

            if ($msg) {
        ?>
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 5000,
                    icon: '<?= $msg['icon'] ?>',
                    title: '<?= $msg['title'] ?>',
                })
        <?php
            }
        }
        ?>
    })
</script>