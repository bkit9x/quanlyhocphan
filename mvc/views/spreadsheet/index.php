<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Nhập điểm từ file excel</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form id="frm" role="form" action="<?= DOMAIN ?>spreadsheet/nhap" method="post" enctype="multipart/form-data">
        <div class="box-body">
            <div class="form-group">
                <label for="file">Chọn file điểm</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                    <input type="file" name="file" class="form-control">
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button form="frm" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Nhập điểm</button>
        </div>
    </form>
</div>