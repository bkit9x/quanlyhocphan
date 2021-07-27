<div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Chỉnh sửa thông tin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="frm" role="form" action="index.php?url=taikhoan/sua" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="hoten">Họ và tên</label>
                  <input type="hidden" id="taikhoan" name="taikhoan">
                  <input type="text" class="form-control" id="hoten" name="hoten" placeholder="Nhập họ và tên ..." value="<?= $data['taikhoan']['hoten']?>" required>
                </div>
                <div class="form-group">
                  <label for="matkhau">Mật khẩu</label>
                  <input type="password" class="form-control" id="matkhau" name="matkhau" placeholder="Nhập mật khẩu hiện tại ...">
                </div>
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
                    <select name="loaitaikhoan" id="loaitaikhoan" <?= $_SESSION['idloaitaikhoan'] == 1 ? '' : "disabled"?> class="form-control" required><?php foreach ($data['loaitaikhoan'] as $loaitaikhoan): ?>
                            <option value="<?= $loaitaikhoan['idloaitaikhoan'];?>"><?= $loaitaikhoan['tenloaitaikhoan'];?></option>
                        <?php endforeach; ?></select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button form="frm" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Cập nhật thông tin</button>
              </div>
            </form>
          </div>
          <script>
            $(function () {
                $('#loaitaikhoan').val('<?= $data['taikhoan']['loaitaikhoan']?>').change();
                $('#taikhoan').val('<?= $data['taikhoan']['taikhoan']?>').change();
            })
          </script>