<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Học kỳ</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <button type="button" class="btn btn-success add-btn" id="add-btn" data-toggle="modal" data-target="#modal-them"> <i class="fa fa-plus"></i> Thêm học kỳ mới</button>
        <table id="table" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Mã học kỳ</th>
                    <th>Tên học kỳ</th>
                    <th>Thời gian bắt đầu</th>
                    <th>Thời gian kết thúc</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['list'] as $row) : ?>
                    <tr>
                        <td><?= $row['mahocky']; ?></td>
                        <td><?= $row['tenhocky']; ?></td>
                        <td><?= $row['thoigianbatdau']; ?></td>
                        <td><?= $row['thoigianketthuc']; ?></td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" id="btn-modal-sua" data-mahocky="<?= $row['mahocky']; ?>" data-tenhocky="<?= $row['tenhocky']; ?>" data-thoigianbatdau="<?= $row['thoigianbatdau']; ?>" data-thoigianketthuc="<?= $row['thoigianketthuc']; ?>" data-target="#modal-sua">
                                <i class="fa fa-pencil-square-o"></i> Sửa
                            </button>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" id="btn-modal-xoa" data-xoa_mahocky="<?= $row['mahocky']; ?>" data-xoa_tenhocky="<?= $row['tenhocky']; ?>" data-target="#modal-xoa">
                                <i class="fa fa-trash-o"></i> Xóa
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Mã học kỳ</th>
                    <th>Tên học kỳ</th>
                    <th>Thời gian bắt đầu</th>
                    <th>Thời gian kết thúc</th>
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
                <h4 class="modal-title">Thêm học kỳ mới</h4>
            </div>
            <div class="modal-body">
                <form id="frm_them" role="form" method="post" action="<?= DOMAIN ?>hocky/them">
                    <div class="form-group">
                        <label>Tên học kỳ</label>
                        <input type="text" name="tenhocky" class="form-control" placeholder="Nhập tên học kỳ ..." required maxlength="255">
                    </div>
                    <div class="form-group">
                        <label>Thời gian bắt đầu</label>
                        <input type="date" name="thoigianbatdau" id="thoigianbatdau" class="form-control" placeholder="Nhập thời gian bắt đầu..." required>
                    </div>
                    <div class="form-group">
                        <label>Thời gian kết thúc</label>
                        <input type="date" name="thoigianketthuc" id="thoigianketthuc" class="form-control" placeholder="Nhập thời gian kết thúc..." required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Hủy</button>
                <button type="submit" class="btn btn-primary" form="frm_them"><i class="fa fa-save"></i> Lưu học kỳ</button>
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
                <h4 class="modal-title">Chỉnh sửa học kỳ</h4>
            </div>
            <div class="modal-body">
                <form id="frm_sua" role="form" method="post" action="<?= DOMAIN ?>hocky/sua">
                    <div class="form-group">
                        <label>Tên học kỳ</label>
                        <input type="hidden" name="sua_mahocky" id="sua_mahocky">
                        <input type="text" name="sua_tenhocky" id="sua_tenhocky" class="form-control" placeholder="Nhập tên học kỳ ..." required maxlength="255">
                    </div>
                    <div class="form-group">
                        <label>Thời gian bắt đầu</label>
                        <input type="date" name="sua_thoigianbatdau" id="sua_thoigianbatdau" class="form-control" placeholder="Nhập thời gian bắt đầu.." required>
                    </div>
                    <div class="form-group">
                        <label>Thời gian kết thúc</label>
                        <input type="date" name="sua_thoigianketthuc" id="sua_thoigianketthuc" class="form-control" placeholder="Nhập thời gian kết thúc.." required>
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
                <h4 class="modal-title">Xóa học kỳ</h4>
            </div>
            <div class="modal-body">
                <form id="frm_xoa" role="form" method="post" action="<?= DOMAIN ?>hocky/xoa">
                    <div class="form-group">
                        <label>Mã học kỳ</label>
                        <input type="text" readonly name="xoa_mahocky" id="xoa_mahocky" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tên học kỳ</label>
                        <input type="text" readonly name="xoa_tenhocky" id="xoa_tenhocky" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Hủy</button>
                <button type="submit" class="btn btn-danger" form="frm_xoa"><i class="fa fa-trash"></i> Xóa học kỳ</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
    $('#modal-sua').on('show.bs.modal', function(e) {
        var sua_mahocky = $(e.relatedTarget).data('mahocky');
        var sua_tenhocky = $(e.relatedTarget).data('tenhocky');
        var sua_thoigianbatdau = $(e.relatedTarget).data('thoigianbatdau');
        var sua_thoigianketthuc = $(e.relatedTarget).data('thoigianketthuc');

        //populate the textbox
        $(e.currentTarget).find('#sua_mahocky').val(sua_mahocky);
        $(e.currentTarget).find('#sua_tenhocky').val(sua_tenhocky);
        $(e.currentTarget).find('#sua_thoigianketthuc').val(sua_thoigianketthuc);
        $(e.currentTarget).find('#sua_thoigianbatdau').val(sua_thoigianbatdau);
    });

    $('#modal-xoa').on('show.bs.modal', function(e) {
        var xoa_mahocky = $(e.relatedTarget).data('xoa_mahocky');
        var xoa_tenhocky = $(e.relatedTarget).data('xoa_tenhocky');

        $(e.currentTarget).find('#xoa_mahocky').val(xoa_mahocky);
        $(e.currentTarget).find('#xoa_tenhocky').val(xoa_tenhocky);
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
                $msg = ['icon' => 'success', 'title' => 'Đã thêm học kỳ!'];
            elseif ($_GET['msg'] == 'themloi' || $_GET['msg'] == 'sualoi' || $_GET['msg'] == 'xoaloi')
                $msg = ['icon' => 'error', 'title' => 'Có lỗi xảy ra!'];
            elseif ($_GET['msg'] == 'xoathanhcong')
                $msg = ['icon' => 'success', 'title' => 'Đã xóa học kỳ!'];
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