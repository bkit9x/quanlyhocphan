<div class="row">
<?php foreach ($data['list'] as $menu): ?>
    <div class="col-lg-6 col-xs-12">
        <!-- small box -->
        <div class="small-box <?= $menu['bg'];?>">
            <div class="inner">
                <p><?= $menu['text1'];?></p>
                <h3><?= $menu['text2'];?></h3>
            </div>
            <div class="icon">
                <i class="<?= $menu['icon'];?>"></i>
            </div>
            <a href="<?= $menu['link'];?>" class="small-box-footer">Xem chi tiết... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
<?php endforeach; ?>
</div>