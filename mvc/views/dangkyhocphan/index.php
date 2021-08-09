<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Đăng ký học phần</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Mã học phần</th>
                            <th>Tên học phần</th>
                            <th>Số tín chỉ</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['list'] as $hocphan) : ?>
                            <tr>
                                <td><?= $hocphan['mahocphan']; ?></td>
                                <td><?= $hocphan['tenhocphan']; ?></td>
                                <td><?= $hocphan['sotinchi']; ?></td>
                                <td>
                                    <a href="<?= DOMAIN ?>dangkyhocphan/them?hocky=<?= $_GET['hocky']; ?>&hocphan=<?= $hocphan['mahocphan']; ?>" class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-o"></i> Đăng ký</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Mã học phần</th>
                            <th>Tên học phần</th>
                            <th>Số tín chỉ</th>
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="col-xs-12 col-md-3">
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th colspan="2">Đã đăng ký</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['dadangky'] as $hocphan) : ?>
                            <tr>
                                <td><?= $hocphan['tenhocphan']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" id="btn-modal-xoa" data-xoa_mahocphan="<?= $hocphan['mahocphan']; ?>" data-xoa_tenhocphan="<?= $hocphan['tenhocphan']; ?>" data-target="#modal-xoa"> <i class="fa fa-trash-o"></i> Xóa</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<!-- .modal xoa -->
<div class="modal fade" id="modal-xoa">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Xóa học phần</h4>
            </div>
            <div class="modal-body">
                <form id="frm_xoa" role="form" method="post" action="<?= DOMAIN ?>dangkyhocphan/xoa?hocky=<?= $_GET['hocky']; ?>">
                    <div class="form-group">
                        <label>Mã học phần</label>
                        <input type="text" readonly name="xoa_mahocphan" id="xoa_mahocphan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tên học phần</label>
                        <input type="text" readonly name="xoa_tenhocphan" id="xoa_tenhocphan" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Hủy</button>
                <button type="submit" class="btn btn-danger" form="frm_xoa"><i class="fa fa-trash"></i> Xóa học phần</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
    $('#modal-xoa').on('show.bs.modal', function(e) {
        var xoa_mahocphan = $(e.relatedTarget).data('xoa_mahocphan');
        var xoa_tenhocphan = $(e.relatedTarget).data('xoa_tenhocphan');

        $(e.currentTarget).find('#xoa_mahocphan').val(xoa_mahocphan);
        $(e.currentTarget).find('#xoa_tenhocphan').val(xoa_tenhocphan);
    });

    $(function() {

        $('#table').DataTable({
            "pageLength": 25,
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
                $msg = ['icon' => 'success', 'title' => 'Đã thêm học phần!'];
            elseif ($_GET['msg'] == 'themloi' || $_GET['msg'] == 'sualoi' || $_GET['msg'] == 'xoaloi')
                $msg = ['icon' => 'error', 'title' => 'Có lỗi xảy ra!'];
            elseif ($_GET['msg'] == 'xoathanhcong')
                $msg = ['icon' => 'success', 'title' => 'Đã xóa học phần!'];
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