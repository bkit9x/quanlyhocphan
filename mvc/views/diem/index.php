<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Danh sách học phần</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="table" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Mã học phần</th>
                    <th>Tên học phần</th>
                    <th>Số tín chỉ</th>
                    <th>Điểm</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['list'] as $hocphan) : ?>
                    <tr>
                        <td><?= $hocphan['mahocphan']; ?></td>
                        <td><?= $hocphan['tenhocphan']; ?></td>
                        <td><?= $hocphan['sotinchi']; ?></td>
                        <td><?= $hocphan['diem']; ?></td>
                        <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" id="btn-modal-sua" data-mahocphan="<?= $hocphan['mahocphan']; ?>" data-tenhocphan="<?= $hocphan['tenhocphan']; ?>" data-diem="<?= $hocphan['diem']; ?>" data-target="#modal-sua"> <i class="fa fa-pencil-square-o"></i> Sửa điểm</button></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Mã học phần</th>
                    <th>Tên học phần</th>
                    <th>Số tín chỉ</th>
                    <th>Điểm</th>
                    <th>Thao tác</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

<!-- .modal sua -->
<div class="modal fade" id="modal-sua">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Chỉnh sửa điểm</h4>
            </div>
            <div class="modal-body">
                <form id="frm_sua" role="form" method="post" action="<?= DOMAIN ?>diem/sua&sv=<?= $_GET['sv']; ?>">
                    <div class="form-group">
                        <label>Tên học phần</label>
                        <input type="hidden" name="sua_mahocphan" id="sua_mahocphan">
                        <input type="text" name="sua_tenhocphan" id="sua_tenhocphan" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label>Số điểm</label>
                        <input type="number" name="sua_diem" id="sua_diem" class="form-control" placeholder="Nhập số điểm..." min="0" max="10" step="0.01" required>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Hủy</button>
                <button type="submit" class="btn btn-primary" form="frm_sua"><i class="fa fa-save"></i> Lưu thay đổi</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
    $(function() {
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
        $('#modal-sua').on('show.bs.modal', function(e) {
            var sua_mahocphan = $(e.relatedTarget).data('mahocphan');
            var sua_tenhocphan = $(e.relatedTarget).data('tenhocphan');
            var sua_tensinhvien = $(e.relatedTarget).data('tensinhvien');
            var sua_idsinhvien = $(e.relatedTarget).data('idsinhvien');
            var sua_diem = $(e.relatedTarget).data('diem');

            //populate the textbox
            $(e.currentTarget).find('#sua_mahocphan').val(sua_mahocphan);
            $(e.currentTarget).find('#sua_tenhocphan').val(sua_tenhocphan);
            $(e.currentTarget).find('#sua_tensinhvien').val(sua_tensinhvien);
            $(e.currentTarget).find('#sua_idsinhvien').val(sua_idsinhvien);
            $(e.currentTarget).find('#sua_diem').val(sua_diem);
        });

        <?php
        if (isset($_GET['msg'])) {
            if ($_GET['msg'] == 'suathanhcong')
                $msg = ['icon' => 'success', 'title' => 'Đã cập nhật điểm!'];
            elseif ($_GET['msg'] == 'sualoi')
                $msg = ['icon' => 'error', 'title' => 'Có lỗi xảy ra!'];
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