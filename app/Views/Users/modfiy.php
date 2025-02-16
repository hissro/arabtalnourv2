
 <!-- edit content start here-->

 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">لوحة تحكم المستخدمين</h1>
  <a href="users/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-user fa-sm text-white-50"></i> مستخدم جديد</a>
</div>

 
<div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> تعديل مستخدم جديد</h6>
          </div>
          <div class="card-body">


    <!-- form start -->
    <?php $this->load->helper("form"); ?>
            <form role="form" id="addBooking" action="<?php echo base_url() ?>users/update"   method="post" role="form">
            <div class="box-body">



                            

            <input type="hidden" class="form-control required" value="<?php echo $users->id; ?>" id="id" name="id" required   />

            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label for="description"> اسم المستخدم  (بالانجليزية)</label>
                <input type="text" class="form-control required" value="<?php echo $users->username; ?>" id="username" name="username" required maxlength="256" />
            </div>
            </div>
            </div>

            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label for="description">كلمة المرور (اذا تود استخدام كلمة المرور الحالية اترك الحقل فارغ)</label>
                <input type="password"  class="form-control required" id="password" name="password"  >                                    </div>
            </div>
            </div>



            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label for="description"> اسم المستخدم كامل</label>
                <input type="text" class="form-control required" value="<?php echo $users->name; ?>" id="name" name="name" required maxlength="256" />
            </div>
            </div>
            </div>
                

        
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="description"> الصلاحية</label>

                        <select id="roleId" name="roleId" class="form-control required"  required="required">
                        <!-- <option value="0"  selected="">اختر نوع القسم</option> -->
                        <?php 
                        if(!empty($roles))
                        {
                            foreach ($roles as $value) 
                            {
                                echo ' <option value="'.$value->roleId.'">   '.$value->role.' </option> ';
                            }
                        }
                        ?>
                        </select> 


                    </div>
                </div>
            </div>
    
                            
                            

            </div>
                        
                        
            <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="تعديل" />
            </div>

            </form>


    </div>
</div>