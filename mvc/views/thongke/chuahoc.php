        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Danh sách học phần chưa học</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Mã học phần</th>
                        <th>Tên học phần</th>
                        <th>Số tín chỉ</th>
                        <th>Mã môn tiên quyết</th>
                        <th>Tên môn tiên quyết</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['list'] as $hocphan): ?>
                            <tr>
                                <td><?= $hocphan['mahocphan'];?></td>
                                <td><?= $hocphan['tenhocphan'];?></td>
                                <td><?= $hocphan['sotinchi'];?></td>
                                <td><?= $hocphan['mahocphantienquyet'];?></td>
                                <td><?= $hocphan['tenhocphantienquyet'];?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Mã học phần</th>
                        <th>Tên học phần</th>
                        <th>Số tín chỉ</th>
                        <th>Mã môn tiên quyết</th>
                        <th>Tên môn tiên quyết</th>
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