        <div class="box box-default">
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
                        <?php foreach ($data['list'] as $sinhvien): ?>
                            <tr>
                                <td><?= $sinhvien['idsinhvien'];?></td>
                                <td><?= $sinhvien['sinhvien'];?></td>
                                    <td><?= $sinhvien['tencaytientrinh'];?></td>
                                <td><?= $sinhvien['tenkhoa'];?></td>
                                <td>
                                    <a href="./index.php?url=thongke/tongquat&sv=<?= $sinhvien['idsinhvien'];?>" class="btn btn-sm btn-primary">
                                        <i class="fa fa-pie-chart"> Tổng quát</i>
                                    </a>
                                    <a href="./index.php?url=thongke/dahoc&sv=<?= $sinhvien['idsinhvien'];?>" class="btn btn-sm btn-success">
                                        <i class="fa fa-check"></i> Đã học
                                    </a>
                                    <a href="./index.php?url=thongke/chuahoc&sv=<?= $sinhvien['idsinhvien'];?>" class="btn btn-sm btn-warning">
                                        <i class="fa fa-circle-o"></i> Chưa học
                                    </a>
                                    <a href="./index.php?url=thongke/chuadat&sv=<?= $sinhvien['idsinhvien'];?>" class="btn btn-sm btn-danger">
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
                        <form id="frm_sua" role="form" method="post" action="./index.php?url=sinhvien/sua">
                            <div class="form-group">
                                <label>Tên sinh viên</label>
                                <input type="hidden" name="sua_idsinhvien" id="sua_idsinhvien">
                                <input type="text" name="sua_tensinhvien" id="sua_tensinhvien"  class="form-control" placeholder="Nhập tên cây tiến trình ..." require readonly>
                            </div>
                            <div class="form-group">
                                <label>Chọn cây tiến trình</label>
                                <input type="hidden" name="sua_idcaytientrinh_old" id="sua_idcaytientrinh_old">
                                <select name="sua_idcaytientrinh" id="sua_idcaytientrinh" class="form-control" required><?php foreach ($data['caytientrinh'] as $caytientrinh): ?>
                                        <option value="<?= $caytientrinh['idcaytientrinh'];?>"><?= $caytientrinh['tencaytientrinh'].' - '.$caytientrinh['tenkhoa'];?></option>
                                    <?php endforeach; ?></select>
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
            $(function () {
                $('#modal-sua').on('show.bs.modal', function(e) {
                    var sua_idcaytientrinh = $(e.relatedTarget).data('idcaytientrinh');
                    var sua_tensinhvien = $(e.relatedTarget).data('tensinhvien');
                    var sua_idsinhvien = $(e.relatedTarget).data('idsinhvien');

                    //populate the textbox
                    $(e.currentTarget).find('#sua_idcaytientrinh_old').val(sua_idcaytientrinh);
                    $(e.currentTarget).find('#sua_idcaytientrinh').val(sua_idcaytientrinh).change();
                    $(e.currentTarget).find('#sua_idsinhvien').val(sua_idsinhvien);
                    $(e.currentTarget).find('#sua_tensinhvien').val(sua_tensinhvien);
                });

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