<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= count($category); ?></h3>

                <p>Category</p>
            </div>
            <div class="icon">
                <i class="fa fa-newspaper"></i>
            </div>
            <a href="<?= base_url('category'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= count($posts); ?></h3>

                <p>Webinar</p>
            </div>
            <div class="icon">
                <i class="fa fa-clone"></i>
            </div>
            <a href="<?= base_url('post/data'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= count($members); ?></h3>

                <p>Members</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url('member'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?= count($comments); ?></h3>

                <p>Comments</p>
            </div>
            <div class="icon">
                <i class="fa fa-images"></i>
            </div>
            <a href="<?= base_url('comment'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>