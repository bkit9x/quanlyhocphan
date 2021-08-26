<div class="box box-primary">
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <form method="get" action="<?= DOMAIN ?>diem/index">
                <input type="hidden" name="sv" value="<?= (isset($_GET['sv']) ? $_GET['sv'] : ''); ?>">
                <div class="col-xs-10">
                    <div class="form-group">
                        <label>Học kỳ:</label>
                        <select name="hocky" id="hocky" class="form-control" required><?php foreach ($data['list'] as $row) : ?>
                                <option value="<?= $row['mahocky']; ?>"><?= $row['tenhocky']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="col-xs-2">
                    <label></label>
                    <button type="submit" class="btn btn-primary form-control"> Chọn <i class="fa fa-angle-double-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>