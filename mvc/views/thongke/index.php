<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Danh sách sinh viên</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="table" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Mã sinh viên</th>
                    <th>Tên sinh viên</th>
                    <th>Cây tiến trình</th>
                    <th>Khoa</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['list'] as $sinhvien) : ?>
                    <tr>
                        <td><?= $sinhvien['idsinhvien']; ?></td>
                        <td><?= $sinhvien['sinhvien']; ?></td>
                        <td><?= $sinhvien['tencaytientrinh']; ?></td>
                        <td><?= $sinhvien['tenkhoa']; ?></td>
                        <td>
                            <a href="<?= DOMAIN ?>thongke/tongquat&sv=<?= $sinhvien['idsinhvien']; ?>" class="btn btn-sm btn-primary">
                                <i class="fa fa-pie-chart"> Tổng quát</i>
                            </a>
                            <a href="<?= DOMAIN ?>thongke/dahoc&sv=<?= $sinhvien['idsinhvien']; ?>" class="btn btn-sm btn-success">
                                <i class="fa fa-check"></i> Đã học
                            </a>
                            <a href="<?= DOMAIN ?>thongke/chuahoc&sv=<?= $sinhvien['idsinhvien']; ?>" class="btn btn-sm btn-warning">
                                <i class="fa fa-circle-o"></i> Chưa học
                            </a>
                            <a href="<?= DOMAIN ?>thongke/chuadat&sv=<?= $sinhvien['idsinhvien']; ?>" class="btn btn-sm btn-danger">
                                <i class="fa fa-times"></i> Chưa đạt
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Mã sinh viên</th>
                    <th>Tên sinh viên</th>
                    <th>Cây tiến trình</th>
                    <th>Khoa</th>
                    <th>Thao tác</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

<script>
    $(function() {
        $('#table').DataTable({
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
        })
    })
</script>