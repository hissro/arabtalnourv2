<?php   $this->load->helper('cias_helper');  ?>
 
<!-- edit content start here-->

<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">لوحة المعلومات</h1>
            
            <?php  if ($this->session->userdata('roleId') == 2) { ?> 
            <a href="<?php echo base_url("new_request") ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> طلب جديد  </a>
            <?php }?>
            </div>



            <?php  
                $roleId =  $this->session->userdata('roleId');
            if (   $roleId == 3 ||  $roleId == 4 ||   $roleId ==5 ||  $roleId == 6   ||  $roleId == 1  ) { ?> 

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


      <!-- Content Row 1 -->
          <div class="row">
 
          <!--
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
 
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
 
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
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
             
 
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          -->

          <!-- Content Row 1 -->

          <!-- Content Row 2-->
           
          <!--
          <div class="row">

             <div class="col-lg-6 mb-4">

               <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>          
            </div>

            <div class="col-lg-6 mb-4">

            
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Pending Matters</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>

            </div> -->
          </div>

 
          <?php 
          if ($this->session->userdata('roleId') == 2)
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
                              <td><?php echo $record->catname ?></td>
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
       
        
   
          if ($this->session->userdata('roleId') == 3)
            {  ?>
       
                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> الطلبات الجديدة</h6>
                  </div>
                  <div class="card-body">
                  
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th> القسم  </th>
                        <th>نوع الطلب</th>
                        <th>   طالب الإصدار  </th>
                        <th>المبلغ المطلوب (أرقام)</th>
                        <th>المبلغ المطلوب (بالحروف) </th>
                        <th>المرفقات</th>
                        <th>  أسباب الصرف </th>
                        <th> اسم المستخدم  </th>
                        <th> التاريخ  </th>
                        <th> عرض </th>
                        <th> إجراء </th>
                    </tr>
                  </thead>
                    <?php
                    if(!empty($requests_financial))
                    {
                        foreach($requests_financial as $record)
                        {
                    ?>
                    <tr>
                        <td><?php echo $record->id ?></td>
                        <td><?php echo $record->catname ?></td>
                        <td><?php echo $record->typename ?></td>
                        <td><?php echo $record->issuer_name ?></td>
                        <td><?php echo $record->amount_numbers ?></td>
                        <td><?php echo $record->amount_words ?></td>
                        <td><?php echo ConvertImagea ( $record->attachments ); ?></td>
                        <td><?php echo $record->reasons ?></td>
                        <td><?php echo $record->username ?></td>
                        <td> <?php echo $record->request_date ?></td>
                        <td>
                          <form action="<?php echo base_url() ?>dashboard/print" method="POST" id="searchListt"> 
                            <input type="hidden" name="id"   value="<?php echo $record->id ?>"  class="form-control input-sm pull-right" style="width: 150px;" />                                         
                            <button class="btn btn-sm btn-success searchList">  <i class="fa fa-eye"></i> </i></button>
                            </form>
                        </td>   
                        <td> 
                            
                          <a class="btn btn-sm btn-success deleteBooking" href="#"  data-toggle="modal" data-target="#exampleModalLong<?php echo $record->id ?>"  title="Delete"><i class="fa fa-check"></i></a>
                          <a class="btn btn-sm btn-danger deleteBooking" href="#"  data-toggle="modal" data-target="#exampleModalLongg<?php echo $record->id ?>"  title="Delete"><i class="fa   fa-window-close"></i></a>
                          
                        </td>
                                                
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong<?php echo $record->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">  الموافقة علي الطلب</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                


                                <form action="<?php echo base_url() ?>dashboard/update_financial" method="POST" id="searchList">
                                  <div class="input-group">
                                    <p>مبلغ متبقي من العهدة السابقة  </p> <br>                                          
                                  </div>

                                  <div class="input-group">
                                    <input type="text" name="previous_balance"    class="form-control input-sm pull-right" style="width: 150px;" />                                         
                                    <input type="hidden" name="id"   value="<?php echo $record->id ?>"  class="form-control input-sm pull-right" style="width: 150px;" />                                         
                                  </div>

                                  <br> 
                                  <div class="input-group"> 
                                  <p> ملاحظات </p><br>
                                  </div>
                                  <div class="input-group">
                                    <input type="text" name="note"    class="form-control input-sm pull-right" style="width: 150px;" />                                         
                                  </div>

                                  <br><br>
                                  <div class="input-group">
                                    <button class="btn btn-sm btn-default searchList"> موافق</i></button>
                                  </div>

                                </form>



                              </div>
                              
                            </div>
                          </div>
                        </div>


                        <!-- Modal reject-->
                        <div class="modal fade" id="exampleModalLongg<?php echo $record->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">  رفض او تاجيل علي الطلب</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                


                                <form action="<?php echo base_url() ?>dashboard/update_reject_suspend" method="POST" id="searchListt">
                                <input type="hidden" name="id"   value="<?php echo $record->id ?>"  class="form-control input-sm pull-right" style="width: 150px;" />                                         

 
                                <br> 
                                  <div class="input-group"> 
                                  <p> إختر </p><br>
                                  </div>

                                  <input type="radio" id="html" name="requests_status" checked="checked" value="-1">
                                  <label >رفض</label><br>
                                  <input type="radio" id="css" name="requests_status" value="-2">
                                  <label  >تاجيل</label><br>
                      




                                  <br> 
                                  <div class="input-group"> 
                                  <p> ملاحظات </p><br>
                                  </div>
                                  <div class="input-group">
                                    <input type="text" name="note"    class="form-control input-sm pull-right" style="width: 150px;" />                                         
                                  </div>

                                  <br><br>
                                  <div class="input-group">
                                    <button class="btn btn-sm btn-default searchListt"> موافق</i></button>
                                  </div>

                                </form>



                              </div>
                              
                            </div>
                          </div>
                        </div>



                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  </div>
                </div>          

           <?php   }  
           

           if ($this->session->userdata('roleId') == 4) {  ?>
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> الطلبات الجديدة</h6>
              </div>
              <div class="card-body">
              
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                      <th>#</th>
                      <th> القسم  </th>
                      <th>   النوع</th>
                      <th>   طالب الإصدار  </th>
                      <th>المبلغ المطلوب (أرقام)</th>
                      <th>المبلغ المطلوب (بالحروف) </th>
                      <th> مبلغ متبقي من العهدة السابقة  </th>
                      <th>المرفقات</th>
                      <th>  أسباب الصرف </th>
                      <th> اسم المستخدم  </th>
                      <th> التاريخ  </th>
                      <th> عرض </th>
                      <th> إجراء </th>
                      
                  </tr>
               </thead>

                <?php
                if(!empty($requests_ceo))
                {
                    foreach($requests_ceo as $record)
                    {
                ?>
                <tr>
                    <td><?php echo $record->id ?></td>
                    <td><?php echo $record->catname ?></td>
                    <td><?php echo $record->typename ?></td>
                    <td><?php echo $record->issuer_name ?></td>
                    <td><?php echo $record->amount_numbers ?></td>
                    <td><?php echo $record->amount_words ?></td>
                    <td><?php echo $record->previous_balance ?></td>
                    <td><?php echo ConvertImagea ( $record->attachments ); ?></td>
                    <td><?php echo $record->requests_status ?></td>
                    <td><?php echo $record->username ?></td>
                    <td> <?php echo $record->request_date ?></td>
                    <td>
                        <form action="<?php echo base_url() ?>dashboard/print" method="POST" id="searchListt"> 
                            <input type="hidden" name="id"   value="<?php echo $record->id ?>"  class="form-control input-sm pull-right" style="width: 150px;" />                                         
                            <button class="btn btn-sm btn-success searchList">  <i class="fa fa-eye"></i> </i></button>
                            </form>
                    </td>   

                    <td> 
                      <a class="btn btn-sm btn-success deleteBooking" href="#"  data-toggle="modal" data-target="#exampleModalLong<?php echo $record->id ?>"  title="Delete"><i class="fa fa-check"></i></a>
                      <a class="btn btn-sm btn-danger deleteBooking" href="#"  data-toggle="modal" data-target="#exampleModalLongg<?php echo $record->id ?>"  title="Delete"><i class="fa   fa-window-close"></i></a>
                    </td>
                                            
                     <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong<?php echo $record->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">  الموافقة علي الطلب</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="<?php echo base_url() ?>dashboard/update_ceo" method="POST" id="searchList">

                              <div class="modal-body">
                                
                              <p> هل تود الموافقة علي الطلب ؟  </p>

                              <br> 
                                      <div class="input-group"> 
                                      <p> ملاحظات </p><br>
                                      </div>
                                      <div class="input-group">
                                        <input type="text" name="note"    class="form-control input-sm pull-right" style="width: 150px;" />                                         
                                        <input type="hidden" name="id"   value="<?php echo $record->id ?>"  class="form-control input-sm pull-right" style="width: 150px;" />                                         
                                      </div>

                                      <br> 
                                      <button class="btn btn-sm btn-default searchList"> موافق</i></button>

                              </div>
                              

                          </form>
                        </div>
                      </div>
                    </div>

                        <!-- Modal reject-->
                    <div class="modal fade" id="exampleModalLongg<?php echo $record->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">  رفض او تاجيل علي الطلب</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            


                            <form action="<?php echo base_url() ?>dashboard/update_reject_suspend" method="POST" id="searchListt">
                            <input type="hidden" name="id"   value="<?php echo $record->id ?>"  class="form-control input-sm pull-right" style="width: 150px;" />                                         


                            <br> 
                              <div class="input-group"> 
                              <p> إختر </p><br>
                              </div>

                              <input type="radio" id="html" name="requests_status" checked="checked" value="-1">
                              <label >رفض</label><br>
                              <input type="radio" id="css" name="requests_status" value="-2">
                              <label  >تاجيل</label><br>
                  




                              <br> 
                              <div class="input-group"> 
                              <p> ملاحظات </p><br>
                              </div>
                              <div class="input-group">
                                <input type="text" name="note"    class="form-control input-sm pull-right" style="width: 150px;" />                                         
                              </div>

                              <br><br>
                              <div class="input-group">
                                <button class="btn btn-sm btn-default searchListt"> موافق</i></button>
                              </div>

                            </form>



                          </div>
                          
                        </div>
                      </div>
                    </div>

                </tr>
                <?php
                 }
                }
                ?>
              </table>
              </div>
            </div>          

       <?php   }  
       
       
       if ($this->session->userdata('roleId') == 5) {  ?>
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> الطلبات الجديدة</h6>
              </div>
              <div class="card-body">
              
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>               
                 <tr>
                    <th>#</th>
                    <th> القسم  </th>
                    <th>نوع الطلب</th>
                    <th>   طالب الإصدار  </th>
                    <th>المبلغ المطلوب (أرقام)</th>
                    <th>المبلغ المطلوب (بالحروف) </th>
                    <th> مبلغ متبقي من العهدة السابقة  </th>
                    <th>المرفقات</th>
                    <th>  أسباب الصرف </th>
                    <th> اسم المستخدم  </th>
                    <th> التاريخ  </th>
                    <th> عرض </th>
                    <th> إجراء </th>
                </tr>
              </thead>

                <?php
                if(!empty($requests_gm))
                {
                    foreach($requests_gm as $record)
                    {
                ?>
                <tr>
                    <td><?php echo $record->id ?></td>
                    <td><?php echo $record->catname ?></td>
                    <td><?php echo $record->typename ?></td>
                    <td><?php echo $record->issuer_name ?></td>
                    <td><?php echo $record->amount_numbers ?></td>
                    <td><?php echo $record->amount_words ?></td>
                    <td><?php echo $record->previous_balance ?? "-"; ?></td>
                    <td><?php echo ConvertImagea ( $record->attachments );?></td>
                    <td><?php echo $record->reasons ?></td>
                    <td><?php echo $record->username ?></td>
                    <td> <?php echo $record->request_date ?></td>
                    <td>
                      <form action="<?php echo base_url() ?>dashboard/print" method="POST" id="searchListt"> 
                          <input type="hidden" name="id"   value="<?php echo $record->id ?>"  class="form-control input-sm pull-right" style="width: 150px;" />                                         
                          <button class="btn btn-sm btn-success searchList">  <i class="fa fa-eye"></i> </i></button>
                          </form>
                    </td>   
                    <td> 
                    <a class="btn btn-sm btn-success deleteBooking" href="#"  data-toggle="modal" data-target="#exampleModalLong<?php echo $record->id ?>"  title="Delete"><i class="fa fa-check"></i></a>
                    <a class="btn btn-sm btn-danger deleteBooking" href="#"  data-toggle="modal" data-target="#exampleModalLongg<?php echo $record->id ?>"  title="Delete"><i class="fa   fa-window-close"></i></a>
                    </td>
                                            
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong<?php echo $record->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">  الموافقة علي الطلب</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="<?php echo base_url() ?>dashboard/update_gm" method="POST" id="searchList">

                              <div class="modal-body">
                                
                              <p> هل تود الموافقة علي الطلب ؟  </p>

                              <br> 
                                      <div class="input-group"> 
                                      <p> ملاحظات </p><br>
                                      </div>
                                      <div class="input-group">
                                        <input type="text" name="note"    class="form-control input-sm pull-right" style="width: 150px;" />                                         
                                        <input type="hidden" name="id"   value="<?php echo $record->id ?>"  class="form-control input-sm pull-right" style="width: 150px;" />                                         
                                      </div>

                                      <br> 
                                      <button class="btn btn-sm btn-default searchList"> موافق</i></button>

                              </div>
                              

                          </form>
                        </div>
                      </div>
                    </div>


                    <!-- Modal reject-->
                    <div class="modal fade" id="exampleModalLongg<?php echo $record->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">  رفض او تاجيل علي الطلب</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          


                          <form action="<?php echo base_url() ?>dashboard/update_reject_suspend" method="POST" id="searchListt">
                          <input type="hidden" name="id"   value="<?php echo $record->id ?>"  class="form-control input-sm pull-right" style="width: 150px;" />                                         


                          <br> 
                            <div class="input-group"> 
                            <p> إختر </p><br>
                            </div>

                            <input type="radio" id="html" name="requests_status" checked="checked" value="-1">
                            <label >رفض</label><br>
                            <input type="radio" id="css" name="requests_status" value="-2">
                            <label  >تاجيل</label><br>
                




                            <br> 
                            <div class="input-group"> 
                            <p> ملاحظات </p><br>
                            </div>
                            <div class="input-group">
                              <input type="text" name="note"    class="form-control input-sm pull-right" style="width: 150px;" />                                         
                            </div>

                            <br><br>
                            <div class="input-group">
                              <button class="btn btn-sm btn-default searchListt"> موافق</i></button>
                            </div>

                          </form>



                        </div>
                        
                      </div>
                    </div>
                     </div>


                        
                    
                </tr>
                <?php
                    }
                }
                ?>
              </table>
              </div>
            </div>          

       <?php   } 
       
       if ( $this->session->userdata('roleId') == 6  )
        {  ?>
          <!-- Project Card Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> الطلبات الجديدة</h6>
            </div>
            <div class="card-body">
            
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>#</th>
                    <th> القسم  </th>
                    <th>نوع الطلب</th>
                    <th>   طالب الإصدار  </th>
                    <th>المبلغ المطلوب (أرقام)</th>
                    <th>المبلغ المطلوب (بالحروف) </th>
                    <th> مبلغ متبقي من العهدة السابقة  </th>
                    <th>المرفقات</th>
                    <th>  أسباب الصرف </th>
                    <th> اسم المستخدم  </th>
                    <th> التاريخ  </th>
                    <th> عرض </th>
                    <th> إجراء </th>
                </tr>
              </thead>

              <?php
              if(!empty($requests_box))
              {
                  foreach($requests_box as $record)
                  {
              ?>
              <tr>
                  <td><?php echo $record->id ?></td>
                  <td><?php echo $record->catname ?></td>
                  <td><?php echo $record->typename ?></td>
                  <td><?php echo $record->issuer_name ?></td>
                  <td><?php echo $record->amount_numbers ?></td>
                  <td><?php echo $record->amount_words ?></td>
                  <td><?php echo $record->previous_balance ?? "-"; ?></td>
                  <td><?php echo ConvertImagea ( $record->attachments );?></td>
                  <td><?php echo $record->reasons ?></td>
                  <td><?php echo $record->username ?></td>
                  <td> <?php echo $record->request_date ?></td>
                  <td>
                      <form action="<?php echo base_url() ?>dashboard/print" method="POST" id="searchListt"> 
                        <input type="hidden" name="id"   value="<?php echo $record->id ?>"  class="form-control input-sm pull-right" style="width: 150px;" />                                         
                        <button class="btn btn-sm btn-success searchList">  <i class="fa fa-eye"></i> </i></button>
                      </form>
                  </td>  
                  <td> 
                  <a class="btn btn-sm btn-success deleteBooking" href="#"  data-toggle="modal" data-target="#exampleModalLong<?php echo $record->id ?>"  title="قبول"><i class="fa fa-check"></i></a>
                  <a class="btn btn-sm btn-danger deleteBooking" href="#"  data-toggle="modal" data-target="#exampleModalLongg"  title="رفض"><i class="fa   fa-window-close"></i></a>
                  </td>
                                          
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalLong<?php echo $record->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">  الموافقة علي الطلب</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="<?php echo base_url() ?>dashboard/update_box" method="POST" id="searchList">

                            <div class="modal-body">
                              
                            <p> هل تود الموافقة علي الطلب ؟  </p>

                            <br> 
                                    <div class="input-group"> 
                                    <p> ملاحظات </p><br>
                                    </div>
                                    <div class="input-group">
                                      <input type="text" name="note"    class="form-control input-sm pull-right" style="width: 150px;" />                                         
                                      <input type="hidden" name="id"   value="<?php echo $record->id ?>"  class="form-control input-sm pull-right" style="width: 150px;" />                                         
                                    </div>

                                    <br> 
                                    <button class="btn btn-sm btn-default searchList"> موافق</i></button>

                            </div>
                            

                        </form>
                      </div>
                    </div>
                  </div>

                <!-- Modal reject-->
                <div class="modal fade" id="exampleModalLongg<?php echo $record->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">  رفض او تاجيل علي الطلب</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        


                        <form action="<?php echo base_url() ?>dashboard/update_reject_suspend" method="POST" id="searchListt">
                        <input type="hidden" name="id"   value="<?php echo $record->id ?>"  class="form-control input-sm pull-right" style="width: 150px;" />                                         


                        <br> 
                          <div class="input-group"> 
                          <p> إختر </p><br>
                          </div>

                          <input type="radio" id="html" name="requests_status" checked="checked" value="-1">
                          <label >رفض</label><br>
                          <input type="radio" id="css" name="requests_status" value="-2">
                          <label  >تاجيل</label><br>
              




                          <br> 
                          <div class="input-group"> 
                          <p> ملاحظات </p><br>
                          </div>
                          <div class="input-group">
                            <input type="text" name="note"    class="form-control input-sm pull-right" style="width: 150px;" />                                         
                          </div>

                          <br><br>
                          <div class="input-group">
                            <button class="btn btn-sm btn-default searchListt"> موافق</i></button>
                          </div>

                        </form>



                      </div>
                      
                    </div>
                  </div>
                </div>
                  
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






        if ( $this->session->userdata('roleId') == 1  )
         {  ?>
          <!-- Project Card Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> الطلبات الجديدة</h6>
            </div>
            <div class="card-body">
            
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>#</th>
                    <th> القسم  </th>
                    <th>نوع الطلب</th>
                    <th>   طالب الإصدار  </th>
                    <th>المبلغ المطلوب (أرقام)</th>
                    <th>المبلغ المطلوب (بالحروف) </th>
                    <th> مبلغ متبقي من العهدة السابقة  </th>
                    <th>المرفقات</th>
                    <th>  أسباب الصرف </th>
                    <th> اسم المستخدم  </th>   
                    <th> التاريخ  </th>    
                    <th> حالة الطلب </th>   
                    <th> مشاهدة الطلب   </th>   
                </tr>
              </thead>

              <?php
              if(!empty($all_admin))
              {
                  foreach($all_admin as $record)
                  {
                      ?>
                      <tr>
                          <td><?php echo $record->id ?></td>
                          <td><?php echo $record->catname ?></td>
                          <td><?php echo $record->typename ?></td>
                          <td><?php echo $record->issuer_name ?></td>
                          <td><?php echo $record->amount_numbers ?></td>
                          <td><?php echo $record->amount_words ?></td>
                          <td><?php echo $record->previous_balance ?? "-";?></td>
                          <td><?php echo ConvertImagea ( $record->attachments );?></td>
                          <td><?php echo $record->reasons ?></td>
                          <td><?php echo $record->username ?></td>
                          <td> <?php echo $record->request_date ?></td>
                          <td><?php  $lable = "";
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
                          <td>
                            <form action="<?php echo base_url() ?>dashboard/print" method="POST" id="searchListt"> 
                            <input type="hidden" name="id"   value="<?php echo $record->id ?>"  class="form-control input-sm pull-right" style="width: 150px;" />                                         
                            <button class="btn btn-sm btn-success searchList">  <i class="fa fa-eye"></i> </i></button>
                            </form>
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
        if ( $this->session->userdata('roleId') == 3 || $this->session->userdata('roleId') == 4  || $this->session->userdata('roleId') == 5 )
        {  ?>
             <!-- Project Card Example -->
             <div class="card shadow mb-4">
               <div class="card-header py-3">
                 <h6 class="m-0 font-weight-bold text-primary">الطلبات المرفوضة و المؤجلة</h6>
               </div>
               <div class="card-body">
               
               <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th> القسم  </th>
                        <th>نوع الطلب</th>
                        <th>   طالب الإصدار  </th>
                        <th>المبلغ المطلوب (أرقام)</th>
                        <th>المبلغ المطلوب (بالحروف) </th>
                        <th>المرفقات</th>
                        <th>  أسباب الصرف </th>
                        <th>  إسم المستخدم   </th>
                        <th>  الحالة   </th>
                        <th> التاريخ  </th>
                        <th> عرض </th>
                    </tr>
                  </thead>
                 <?php
                 if(!empty($admin_reject))
                 {
                     foreach($admin_reject as $record)
                     {
                       ?>
                       <tr>
                           <td><?php echo $record->id ?></td>
                           <td><?php echo $record->catname ?></td>
                           <td><?php echo $record->typename ?></td>
                           <td><?php echo $record->issuer_name ?></td>
                           <td><?php echo $record->amount_numbers ?></td>
                           <td><?php echo $record->amount_words ?></td>
                           <td><?php echo  ConvertImagea ( $record->attachments ); ?></td>
                           <td><?php echo $record->reasons ?>  </td>   
                           <td> <?php echo $record->username ?>   </td>
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
                              <form action="<?php echo base_url() ?>dashboard/print" method="POST" id="searchListt"> 
                                  <input type="hidden" name="id"   value="<?php echo $record->id ?>"  class="form-control input-sm pull-right" style="width: 150px;" />                                         
                                  <button class="btn btn-sm btn-success searchList">  <i class="fa fa-eye"></i> </i></button>
                              </form>
                            </td>   
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


 
 
