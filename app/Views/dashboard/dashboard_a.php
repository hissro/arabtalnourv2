<?php  

// $this->load->helper('cias_helper');  
helper('cias_helper');
$session = session();
$roleId  = $session->get('roleId') ;
?>
 
<!-- edit content start here-->

<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">لوحة المعلومات</h1>
            
            <?php  if ( $roleId  == 2) 
            { ?> 
                <a href="<?php echo base_url("new_request") ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> طلب جديد  </a>
                <?php }?>
                </div>



                <?php  
                    
                if (   $roleId != 2  ) { ?> 

                  <!-- Content Row 1 -->
                  <div class="row">

                    
                  </div>
          <?php } ?>  


 
          <?php  
               
            if (    $roleId != 2   )
             { ?> 

              <!-- Content Row 1 -->
              <div class="row">

                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> كل الطلبات </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $requests_all ; ?></div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> المكتملة</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $requests_complete ; ?> </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">مؤجلة</div>
                            <div class="row no-gutters align-items-center">
                              <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> <?php echo $requests_deferred ; ?> </div>
                              </div>
                               
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Pending Requests Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"> مرفوض  </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $requests_reject; ?> </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Earnings ( ) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">  تحت الاجراء   </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $requests_inprogress ; ?></div>
                          </div>
                          <div class="col-auto">
                            <i class="far fa-clock	 fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

              </div>
          <?php } ?>  



          <?php 
          if ( $roleId == 2)
           {  ?>
                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">الطلبات</h6>
                  </div>
                  <div class="card-body">
                  
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th> القسم  </th>
                        <th>   نوع الطلب</th>
                        <th>   طالب الإصدار  </th>
                        <th>المبلغ المطلوب (أرقام)</th>
                        <th>المبلغ المطلوب (بالحروف) </th>
                        <th>المرفقات</th>
                        <th>  أسباب الصرف </th>
                        <th> الحالة  </th> 
                        <th> التاريخ  </th>
                        <th> إجراء  </th>
                    </tr>
                   </thead>
                    <?php
                    if(!empty($records))
                    {
                        foreach($records as $record)
                        {
                          ?>
                          <tr>
                              <td><?php echo $record->id ?></td>
                              <td><?php echo $record->category_name ?></td>
                              <td><?php echo $record->typename ?></td>
                              <td><?php echo $record->issuer_name ?></td>
                              <td><?php echo $record->amount_numbers ?></td>
                              <td><?php echo $record->amount_words ?></td>
                              <td><?php echo  ConvertImagea ( $record->attachments ); ?></td>
                              <td><?php echo $record->reasons ?>  </td>   
                              <td>
                                <?php 
                                $lable = "";
                                  if ( $record->requests_status  == -1 ) 
                                  {
                                    $lable = "text-danger";
                                  }
                                  else  if ( $record->requests_status  == -2 ) 
                                  {
                                    $lable ="text-warning";
                                  }else  if ( $record->requests_status  == 5 ) 
                                  {
                                    $lable ="text-success";
                                  }
                                  else 
                                  {
                                    $lable ="text-primary";
                                  }
                                  
                                echo '<p class="'. $lable .'">'.$record->status.'</p>'; 
                                ?>
                              </td>  
                              <td> <?php echo $record->request_date ?></td> 
                              <td>   
                                <?php 
                                if ( $record->requests_status == -2 )
                                {
                                  echo '<a class="btn btn-sm btn-info modfiyuser" href="dashboard/update_request/'.$record->id.'"  title="إعادة ارسال الطلب"><i class="fa fa-edit"></i></a>';
                                }
                                ?>
                              </td>   
                                                  
                          </tr>
                          <?php
                        }
                    }
                    ?>
                  </table>
                  </div>
                </div>          

           <?php   
           
          }   

          ?>
 
        
      </div>
    </div>
  </div>  
</div>


 
 
