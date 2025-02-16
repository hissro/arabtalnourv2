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
            if (   $roleId == 3 ||  $roleId == 4 ||   $roleId ==5 ||  $roleId == 6   ) { ?> 

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

 



          
       
        
                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> كل الطلبات المنتهية</h6>
                  </div>
                  <div class="card-body">
                  
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                        <th>#</th>
                        <th> القسم  </th>
                        <th>   النوع</th>
                        <th>   طالب الإصدار  </th>
                        <th>المبلغ المطلوب (أرقام)</th>
                        <th>المبلغ المطلوب (بالحروف) </th>
                        <th>المرفقات</th>
                        <th>  أسباب الصرف </th>
                        <th> التاريخ  </th>
                        <th> الحالة  </th>
                        <th> مشاهدة الطلب  </th>
                    </tr>
                 </thead>
                    <?php
                    if(!empty($all_request))
                    {
                        foreach($all_request as $record)
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
                        <td><?php echo $record->reasons ?></td>   
                        <td> <?php echo $record->request_date ?></td>
                        <td><?php echo $record->status ?></td>   
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

              
           
          
       
        
       

              
        



          </div>
  
  
        </div>


		 <!-- oontent row 2-->

</div> <!-- /.container-fluid -->
<!-- end of content-->
</div>





<!-- Button trigger modal -->




