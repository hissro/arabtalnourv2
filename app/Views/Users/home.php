 <!-- edit content start here-->

<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">لوحة تحكم المستخدمين</h1>
    <a href="users/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-user fa-sm text-white-50"></i> مستخدم جديد</a>
  </div>


 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> المستخدمين  </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>رقم المستخدم</th>
                        <th> الاسم كامل </th>
                        <th>اسم المستخدم</th>
                        <th>الصلاحية</th>
                        <th>الحالة</th>
                        <th>إجراء</th>                         
                    </tr>
                </thead>
                <!-- <tfoot>
                    <tr>
                        <th>رقم المستخدم</th>
                        <th> الاسم كامل </th>
                        <th>اسم المستخدم</th>
                        <th>الصلاحية</th>
                        <th>الحالة</th>
                        <th>إجراء</th>                         
                    </tr>
                </tfoot> -->
                <tbody>

                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?php echo $user->id; ?></td>
                            <td><?php echo $user->name; ?></td>
                            <td><?php echo $user->username; ?></td>
                            <td><?php echo $user->role_name; ?></td>
                            <td><?php  if ($user->isDeleted == 0) { echo '<p class="text-success"> نشط </p>' ; } else { echo '<p class="text-danger">معطل</p>';} ; ?></td>
                            <td>  
                                <a class="btn btn-sm btn-info modfiyuser" href="<?php echo "users/modfiy/".$user->id;  ?>"  title="تعديل بيانات المستخدم"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-sm btn-danger modfiyDeactive" href="<?php echo "users/deactive/".$user->id;  ?>"  title="تعطيل الحساب"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>