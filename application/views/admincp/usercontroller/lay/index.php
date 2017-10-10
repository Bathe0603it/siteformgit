<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tài khoản
        <small>Danh sách người dùng</small>
    </h1>
</section>
<!-- Main content -->
<section class="content">
    <!-- /.row -->
    <div class="row">
        <div class="col-md-3 col-xs-12">
            <h4>Nhân viên quản trị</h4>
            <p class="text-muted">Bạn có thể cấp quyền quản lý website cửa hàng cho người khác.</p>
            <p class="text-muted margin-lg-bottom">
                <a class="btn btn-default" href="<?php echo admin_url($this->object.'/'.$this->create);?>" id="ht-user-add"><span>Thêm mới</span></a>
            </p>
            <p class="text-muted">Bạn có thể đăng xuất các nhân viên quản trị khỏi website cửa hàng của bạn.</p>
            <p class="text-muted">
                <a class="btn btn-default btn-other" href="javascript:void(0)" bind-event-click="showStopAllSession()"><span>Chấm dứt các phiên đăng nhập</span></a>
            </p>
        </div>
        <div class="col-md-9 col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách quản trị viên</h3>
                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Tel</th>
                            <th>Status</th>
                            <th>Đăng nhập gần nhất</th>
                        </tr>
                        <?php if (!empty($getall)): ?>
                            <?php foreach ($getall as $key => $value): ?>
                                <tr>
                                    <td><?php echo $value['id']; ?></td>
                                    <td><a href="<?php echo admin_url($this->object.'/'.$this->edit.'?id='.$value['id']); ?>"><?php echo $value['fullname'] ?></a></td>
                                    <td><?php echo $value['tel']; ?></td>
                                    <td><span class="label label-success"><?php echo $value['status']; ?></span></td>
                                    <td><?php echo $value['login_timer']; ?></td>
                                </tr>
                            <?php endforeach ?>
                        <?php endif ?>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<!-- /.content -->