<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Sửa học kỳ</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <button type="button" class="btn btn-success add-btn" id="add-btn" data-toggle="modal" data-target="#modal-them"> <i class="fa fa-plus"></i> Thêm cây tiến trình mới</button>
        <table id="table" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Mã cây tiến trình</th>
                    <th>Tên cây tiến trình</th>
                    <th>Tên khoa</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['list'] as $row) : ?>
                    <tr>
                        <td><?= $row['idcaytientrinh']; ?></td>
                        <td><?= $row['tencaytientrinh']; ?></td>
                        <td><?= $row['tenkhoa']; ?></td>
                        <td>
                            <a href="<?= DOMAIN ?>chitiet/index&id=<?= $row['idcaytientrinh']; ?>" class="btn btn-success btn-sm mr-2" target="_blank">
                                <i class="fa fa-mail-forward"></i> Xem chi tiết
                            </a>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" id="btn-modal-sua" data-idcaytientrinh="<?= $row['idcaytientrinh']; ?>" data-tencaytientrinh="<?= $row['tencaytientrinh']; ?>" data-tenkhoa="<?= $row['tenkhoa']; ?>" data-target="#modal-sua">
                                <i class="fa fa-pencil-square-o"></i> Sửa
                            </button>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" id="btn-modal-xoa" data-xoa_idcaytientrinh="<?= $row['idcaytientrinh']; ?>" data-xoa_tencaytientrinh="<?= $row['tencaytientrinh']; ?>" data-target="#modal-xoa">
                                <i class="fa fa-trash-o"></i> Xóa
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Mã cây tiến trình</th>
                    <th>Tên cây tiến trình</th>
                    <th>Tên khoa</th>
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
                <h4 class="modal-title">Thêm cây tiến trình mới</h4>
            </div>
            <div class="modal-body">
                <form id="frm_them" role="form" method="post" action="<?= DOMAIN ?>caytientrinh/them">
                    <div class="form-group">
                        <label>Tên cây tiến trình</label>
                        <input type="text" name="tencaytientrinh" class="form-control" placeholder="Nhập tên cây tiến trình ..." required maxlength="255">
                    </div>
                    <div class="form-group">
                        <label>Tên khoa</label>
                        <input type="text" name="tenkhoa" id="tenkhoa" class="form-control" placeholder="Nhập tên khoa..." required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Hủy</button>
                <button type="submit" class="btn btn-primary" form="frm_them"><i class="fa fa-save"></i> Lưu cây tiến trình</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- .modal sua -->
<div class="modal fade" id="modal-sua">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Chỉnh sửa cây tiến trình</h4>
            </div>
            <div class="modal-body">
                <form id="frm_sua" role="form" method="post" action="<?= DOMAIN ?>caytientrinh/sua">
                    <div class="form-group">
                        <label>Tên cây tiến trình</label>
                        <input type="hidden" name="sua_idcaytientrinh" id="sua_idcaytientrinh">
                        <input type="text" name="sua_tencaytientrinh" id="sua_tencaytientrinh" class="form-control" placeholder="Nhập tên cây tiến trình ..." required maxlength="255">
                    </div>
                    <div class="form-group">
                        <label>Tên khoa</label>
                        <input type="text" name="sua_tenkhoa" id="sua_tenkhoa" class="form-control" placeholder="Nhập tên khoa..." required>
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
<!-- .modal xoa -->
<div class="modal fade" id="modal-xoa">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Xóa cây tiến trình</h4>
            </div>
            <div class="modal-body">
                <form id="frm_xoa" role="form" method="post" action="<?= DOMAIN ?>caytientrinh/xoa">
                    <div class="form-group">
                        <label>Mã cây tiến trình</label>
                        <input type="text" readonly name="xoa_idcaytientrinh" id="xoa_idcaytientrinh" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tên cây tiến trình</label>
                        <input type="text" readonly name="xoa_tencaytientrinh" id="xoa_tencaytientrinh" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Hủy</button>
                <button type="submit" class="btn btn-danger" form="frm_xoa"><i class="fa fa-trash"></i> Xóa cây tiến trình</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
    $('#modal-sua').on('show.bs.modal', function(e) {
        var sua_idcaytientrinh = $(e.relatedTarget).data('idcaytientrinh');
        var sua_tencaytientrinh = $(e.relatedTarget).data('tencaytientrinh');
        var sua_tenkhoa = $(e.relatedTarget).data('tenkhoa');

        //populate the textbox
        $(e.currentTarget).find('#sua_idcaytientrinh').val(sua_idcaytientrinh);
        $(e.currentTarget).find('#sua_tencaytientrinh').val(sua_tencaytientrinh);
        $(e.currentTarget).find('#sua_tenkhoa').val(sua_tenkhoa);
    });

    $('#modal-xoa').on('show.bs.modal', function(e) {
        var xoa_idcaytientrinh = $(e.relatedTarget).data('xoa_idcaytientrinh');
        var xoa_tencaytientrinh = $(e.relatedTarget).data('xoa_tencaytientrinh');

        $(e.currentTarget).find('#xoa_idcaytientrinh').val(xoa_idcaytientrinh);
        $(e.currentTarget).find('#xoa_tencaytientrinh').val(xoa_tencaytientrinh);
    });

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

        <?php
        if (isset($_GET['msg'])) {
            if ($_GET['msg'] == 'themthanhcong')
                $msg = ['icon' => 'success', 'title' => 'Đã thêm cây tiến trình!'];
            elseif ($_GET['msg'] == 'themloi' || $_GET['msg'] == 'sualoi' || $_GET['msg'] == 'xoaloi')
                $msg = ['icon' => 'error', 'title' => 'Có lỗi xảy ra!'];
            elseif ($_GET['msg'] == 'xoathanhcong')
                $msg = ['icon' => 'success', 'title' => 'Đã xóa cây tiến trình!'];
            elseif ($_GET['msg'] == 'suathanhcong')
                $msg = ['icon' => 'success', 'title' => 'Đã lưu thay đổi!'];

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