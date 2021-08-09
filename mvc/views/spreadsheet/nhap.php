<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Nhập điểm từ file excel</h3>
    </div>
    <div class="box-body">
        <a href="./index" class="btn btn-info">
            << Nhập tiếp tục.</a>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="text-primary"><i class="fa fa-check"></i> Nhập thành công: <strong><?= count($data['data']['thanhcong']); ?></strong></label>
                            <select class="form-control" multiple size="20">
                                <?php foreach ($data['data']['thanhcong'] as $row) : ?>
                                    <option><?= 'Mã sinh viên: ' . $row[0] . '; Môn: ' . $row[1] . '; Điểm: ' . $row[2]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="text-danger"><i class="fa fa-times"></i> Nhập không thành công: <strong><?= count($data['data']['loi']); ?></strong></label>
                            <select class="form-control" multiple size="20">
                                <?php foreach ($data['data']['loi'] as $row) : ?>
                                    <option><?= 'Mã sinh viên: ' . $row[0] . '; Môn: ' . $row[1] . '; Điểm: ' . $row[2]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
    </div>
</div>