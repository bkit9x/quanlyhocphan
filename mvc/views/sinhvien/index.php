        <div class="box box-default">
            <div class="box-header">
                <h3 class="box-title">Danh sách học phần</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <button type="button" class="btn btn-success add-btn" id="add-btn" data-toggle="modal" data-target="#modal-them"> <i class="fa fa-plus"></i> Thêm học phần mới</button>
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Mã học phần</th>
                        <th>Tên học phần</th>
                        <th>Số tín chỉ</th>
                        <th>Mã môn tiên quyết</th>
                        <th>Tên môn tiên quyết</th>
                        <th>Thao tác</th>
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
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" id="btn-modal-sua" data-mahocphan="<?= $hocphan['mahocphan'];?>" data-tenhocphan="<?= $hocphan['tenhocphan'];?>" data-sotinchi="<?= $hocphan['sotinchi'];?>" data-hocphantienquyet="<?= $hocphan['mahocphantienquyet'];?>" data-target="#modal-sua"> <i class="fa fa-pencil-square-o"></i> Sửa</button> <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" id="btn-modal-xoa" data-xoa_mahocphan="<?= $hocphan['mahocphan'];?>" data-xoa_tenhocphan="<?= $hocphan['tenhocphan'];?>" data-target="#modal-xoa"> <i class="fa fa-trash-o"></i> Xóa</button></td>
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
                        <h4 class="modal-title">Thêm học phần mới</h4>
                    </div>
                    <div class="modal-body">
                        <form id="frm_them" role="form" method="post" action="./index.php?url=hocphan/them">
                            <div class="form-group">
                                <label>Mã học phần</label>
                                <input type="text" name="mahocphan" class="form-control" placeholder="Nhập mã học phần ..." required maxlength="16">
                            </div>

                            <div class="form-group">
                                <label>Tên học phần</label>
                                <input type="text" name="tenhocphan" class="form-control" placeholder="Nhập tên học phần ..." required maxlength="255">
                            </div>

                            <div class="form-group">
                                <label>Số tín chỉ</label>
                                <input type="number" name="sotinchi" class="form-control" placeholder="Nhập số tín chỉ..." min="1" max="10" required>
                            </div>

                            <div class="form-group">
                                <label>Học phần tiên quyết</label>
                                <select name="hocphantienquyet" class="form-control">
                                    <option value="NULL" selected>Trống</option>
                                    <?php foreach ($data['list'] as $hocphan): ?>
                                        <option value="<?= $hocphan['mahocphan'];?>"><?= $hocphan['mahocphan']." - ".$hocphan['tenhocphan'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Hủy</button>
                        <button type="submit" class="btn btn-primary" form="frm_them"><i class="fa fa-save"></i> Lưu học phần</button>
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
                        <h4 class="modal-title">Chỉnh sửa học phần</h4>
                    </div>
                    <div class="modal-body">
                        <form id="frm_sua" role="form" method="post" action="./index.php?url=hocphan/sua">
                            <div class="form-group">
                                <label>Mã học phần</label>
                                <input type="hidden" name="sua_mahocphan_old" id="sua_mahocphan_old">
                                <input type="text" name="sua_mahocphan" id="sua_mahocphan" class="form-control" placeholder="Nhập mã học phần ..." required maxlength="16">
                            </div>

                            <div class="form-group">
                                <label>Tên học phần</label>
                                <input type="text" name="sua_tenhocphan" id="sua_tenhocphan"  class="form-control" placeholder="Nhập tên học phần ..." required maxlength="255">
                            </div>

                            <div class="form-group">
                                <label>Số tín chỉ</label>
                                <input type="number" name="sua_sotinchi" id="sua_sotinchi"  class="form-control" placeholder="Nhập số tín chỉ..." min="1" max="10" required>
                            </div>

                            <div class="form-group">
                                <label>Học phần tiên quyết</label>
                                <select name="sua_hocphantienquyet" class="form-control">
                                    <option value="NULL" selected>Trống</option>
                                    <?php foreach ($data['list'] as $hocphan): ?>
                                        <option value="<?= $hocphan['mahocphan'];?>"><?= $hocphan['mahocphan']." - ".$hocphan['tenhocphan'];?></option>
                                    <?php endforeach; ?>
                                </select>
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
                        <h4 class="modal-title">Xóa học phần</h4>
                    </div>
                    <div class="modal-body">
                        <form id="frm_xoa" role="form" method="post" action="./index.php?url=hocphan/xoa">
                            <div class="form-group">
                                <label>Mã học phần</label>
                                <input type="text" readonly name="xoa_mahocphan" id="xoa_mahocphan" class="form-control" placeholder="Nhập mã học phần ...">
                            </div>

                            <div class="form-group">
                                <label>Tên học phần</label>
                                <input type="text" readonly name="xoa_tenhocphan" id="xoa_tenhocphan"  class="form-control" placeholder="Nhập tên học phần ...">
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
            $('#modal-sua').on('show.bs.modal', function(e) {
                var sua_mahocphan = $(e.relatedTarget).data('mahocphan');
                var sua_tenhocphan = $(e.relatedTarget).data('tenhocphan');
                var sua_sotinchi = $(e.relatedTarget).data('sotinchi');
                var sua_hocphantienquyet = $(e.relatedTarget).data('hocphantienquyet');

                //populate the textbox
                $(e.currentTarget).find('#sua_mahocphan').val(sua_mahocphan);
                $(e.currentTarget).find('#sua_mahocphan_old').val(sua_mahocphan);
                $(e.currentTarget).find('#sua_tenhocphan').val(sua_tenhocphan);
                $(e.currentTarget).find('#sua_sotinchi').val(sua_sotinchi);
                $(e.currentTarget).find('#sua_hocphantienquyet').val(sua_hocphantienquyet);
            });

            $('#modal-xoa').on('show.bs.modal', function(e) {
                var xoa_mahocphan = $(e.relatedTarget).data('xoa_mahocphan');
                var xoa_tenhocphan = $(e.relatedTarget).data('xoa_tenhocphan');

                $(e.currentTarget).find('#xoa_mahocphan').val(xoa_mahocphan);
                $(e.currentTarget).find('#xoa_tenhocphan').val(xoa_tenhocphan);
            });

            $(function () {

                $('#table').DataTable({
                    dom: 'Bfrtip',
                    "columns": [
                        null,
                        null,
                        null,
                        null,
                        null,
                        { "width": "90px" }
                    ],
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