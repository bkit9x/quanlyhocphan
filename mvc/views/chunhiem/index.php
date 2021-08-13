<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Danh sách chủ nhiệm</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <button type="button" class="btn btn-success add-btn" id="add-btn" data-toggle="modal" data-target="#modal-them"> <i class="fa fa-plus"></i> Thêm chủ nhiệm</button>
        <table id="table" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Tên giáo viên</th>
                    <th>Tên sinh viên</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['list'] as $chunhiem) : ?>
                    <tr>
                        <td><?= $chunhiem['giaovien']; ?></td>
                        <td><?= $chunhiem['sinhvien']; ?></td>
                        <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" id="btn-modal-xoa" data-sinhvien="<?= $chunhiem['sinhvien']; ?>" data-giaovien="<?= $chunhiem['giaovien']; ?>" data-idsinhvien="<?= $chunhiem['idsinhvien']; ?>" data-idgiaovien="<?= $chunhiem['idgiaovien']; ?>" data-target="#modal-xoa"> <i class="fa fa-trash-o"></i> Xóa</button></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Tên giáo viên</th>
                    <th>Tên sinh viên</th>
                    <th>Thao tác</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

<!-- .modal them -->
<div class="modal fade" id="modal-them">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Thêm chủ nhiệm</h4>
            </div>
            <div class="modal-body">
                <form id="frm_them" role="form" method="post" action="<?= DOMAIN ?>chunhiem/them">
                    <div class="form-group">
                        <label>Chọn giáo viên</label>
                        <select name="giaovien" class="form-control" required><?php foreach ($data['giaovien'] as $giaovien) : ?>
                                <option value="<?= $giaovien['taikhoan']; ?>"><?= $giaovien['hoten']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Chọn sinh viên</label>
                        <select name="sinhvien[]" class="form-control" multiple size="10" required><?php foreach ($data['sinhvien'] as $sinhvien) : ?>
                                <option value="<?= $sinhvien['taikhoan']; ?>"><?= $sinhvien['hoten']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Hủy</button>
                <button type="submit" class="btn btn-primary" form="frm_them"><i class="fa fa-save"></i> Lưu chủ nhiệm</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- .modal xoa -->
<div class="modal fade" id="modal-xoa">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Xóa chủ nhiệm</h4>
            </div>
            <div class="modal-body">
                <form id="frm_xoa" role="form" method="post" action="<?= DOMAIN ?>chunhiem/xoa">
                    <div class="form-group">
                        <label>Tên giáo viên</label>
                        <input type="hidden" name="xoa_idgiaovien" id="xoa_idgiaovien">
                        <input type="text" readonly name="xoa_giaovien" id="xoa_giaovien" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tên sinh viên</label>
                        <input type="hidden" name="xoa_idsinhvien" id="xoa_idsinhvien">
                        <input type="text" readonly name="xoa_sinhvien" id="xoa_sinhvien" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Hủy</button>
                <button type="submit" class="btn btn-danger" form="frm_xoa"><i class="fa fa-trash"></i> Xóa chủ nhiệm</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<script>
    $(function() {
        $('#modal-xoa').on('show.bs.modal', function(e) {
            var xoa_giaovien = $(e.relatedTarget).data('giaovien');
            var xoa_sinhvien = $(e.relatedTarget).data('sinhvien');
            var xoa_idgiaovien = $(e.relatedTarget).data('idgiaovien');
            var xoa_idsinhvien = $(e.relatedTarget).data('idsinhvien');
            $(e.currentTarget).find('#xoa_giaovien').val(xoa_giaovien);
            $(e.currentTarget).find('#xoa_sinhvien').val(xoa_sinhvien);
            $(e.currentTarget).find('#xoa_idgiaovien').val(xoa_idgiaovien);
            $(e.currentTarget).find('#xoa_idsinhvien').val(xoa_idsinhvien);
        });


        $('#table').DataTable({
            dom: 'Bfrtip',
            "pageLength": 10,
            "language": {
                "search": "Tìm kiếm",
                "lengthMenu": "Hiện _MENU_ dòng mỗi trang",
                "zeroRecords": "Không tìm thấy",
                "info": "Hiện (_START_ - _END_) trong tổng số _TOTAL_. Trang _PAGE_ / _PAGES_",
                "infoEmpty": "Không có dữ liệu",
                "infoFiltered": "(đã lọc từ _MAX_ dữ liệu)",
                "paginate": {
                    "first": "Trang đầu",
                    "last": "Trang cuối",
                    "next": "Sau",
                    "previous": "Trước"
                },
            },
        });

        <?php
        if (isset($_GET['msg'])) {
            if ($_GET['msg'] == 'themthanhcong')
                $msg = ['icon' => 'success', 'title' => 'Đã thêm !'];
            elseif ($_GET['msg'] == 'themloi' || $_GET['msg'] == 'xoaloi')
                $msg = ['icon' => 'error', 'title' => 'Có lỗi xảy ra!'];
            elseif ($_GET['msg'] == 'xoathanhcong')
                $msg = ['icon' => 'success', 'title' => 'Đã xóa !'];
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