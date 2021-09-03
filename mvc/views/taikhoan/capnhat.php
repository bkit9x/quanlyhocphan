<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Chỉnh sửa thông tin</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form id="frm" role="form" action="<?= DOMAIN ?>taikhoan/sua" method="post">
    <div class="box-body">
      <div class="form-group">
        <label for="hoten">Họ và tên</label>
        <input type="hidden" id="taikhoan" name="taikhoan">
        <input type="text" class="form-control" id="hoten" name="hoten" placeholder="Nhập họ và tên ..." value="<?= $data['taikhoan']['hoten'] ?>" required>
      </div>
      <?php
      if (@$_GET['u'] == $_SESSION['taikhoan']) : ?>
        <div class="form-group">
          <label for="matkhau">Mật khẩu</label>
          <input type="password" class="form-control" id="matkhau" name="matkhau" placeholder="Nhập mật khẩu hiện tại ...">
        </div>
      <?php endif; ?>
      <div class="form-group">
        <label for="matkhaumoi">Mật khẩu mới</label>
        <input type="password" class="form-control" id="matkhaumoi" name="matkhaumoi" placeholder="Nhập mật khẩu mới...">
      </div>
      <div class="form-group">
        <label for="nhaplaimatkhau">Nhập lại mật khẩu</label>
        <input type="password" class="form-control" id="nhaplaimatkhau" name="nhaplaimatkhau" placeholder="Nhập lại mật khẩu mới ...">
      </div>
      <div class="form-group">
        <label>Loại tài khoản</label>
        <select name="loaitaikhoan" id="loaitaikhoan" <?= $_SESSION['idloaitaikhoan'] == 1 ? '' : "disabled" ?> class="form-control" required><?php foreach ($data['loaitaikhoan'] as $loaitaikhoan) : ?>
            <option value="<?= $loaitaikhoan['idloaitaikhoan']; ?>"><?= $loaitaikhoan['tenloaitaikhoan']; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button form="frm" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Cập nhật thông tin</button>
    </div>
  </form>
</div>
<script>
  $(function() {
    $('#loaitaikhoan').val('<?= $data['taikhoan']['loaitaikhoan'] ?>').change();
    $('#taikhoan').val('<?= $data['taikhoan']['taikhoan'] ?>').change();

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
          timer: 3000,
          icon: '<?= $msg['icon'] ?>',
          title: '<?= $msg['title'] ?>',
        })
    <?php
      }
    }
    ?>
  })
</script>