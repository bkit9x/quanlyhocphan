<div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Danh sách tài khoản</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Tài khoản</th>
                        <th>Họ và tên</th>
                        <th>Loại tài khoản</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['list'] as $taikhoan): ?>
                            <tr>
                                <td><?= $taikhoan['taikhoan'];?></td>
                                <td><?= $taikhoan['hoten'];?></td>
                                <td><?= $taikhoan['tenloaitaikhoan'];?></td>
                                <td>
                                  <a href="./index.php?url=taikhoan/capnhat&u=<?= $taikhoan['taikhoan'];?>" class="btn btn-success btn-sm">
                                    <i class="fa fa-pencil"></i> Cập nhật
                                </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    <tr>
                    <th>Tài khoản</th>
                        <th>Họ và tên</th>
                        <th>Loại tài khoản</th>
                        <th>Thao tác</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <script>
            $(function () {

                $('#table').DataTable({
                    dom: 'Bfrtip',
                    "pageLength": 10,
                    "language": {
                        "search":"Tìm kiếm",
                        "lengthMenu": "Hiện _MENU_ dòng mỗi trang",
                        "zeroRecords": "Không tìm thấy",
                        "info": "Hiện (_START_ - _END_) trong tổng số _TOTAL_. Trang _PAGE_ / _PAGES_",
                        "infoEmpty": "Không có dữ liệu",
                        "infoFiltered": "(đã lọc từ _MAX_ dữ liệu)",
                        "paginate": {
                            "first":"Trang đầu",
                            "last":"Trang cuối",
                            "next":"Sau",
                            "previous":"Trước"
                        },
                    },
                })
            })

        </script>