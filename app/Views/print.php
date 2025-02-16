<?php   
$this->load->helper('cias_helper');  
 ?>
 
 
<style>     
        table {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        th, td {
            padding: 12px 15px;
            text-align: right;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
        }
        td {
            font-size: 16px;
            color: #555;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .table-container {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
 </style>

 
<!-- edit content start here-->

<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> عرض الطلب  </h1>
            
            <?php  if ($this->session->userdata('roleId') == 2) { ?> 
            <a href="<?php echo base_url("new_request") ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> طلب جديد  </a>
            <?php }?>
            </div>

                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> <?php  echo "رقم الطلب ($request_row->requestid)"; ?>   </h6>
                  </div>
                  <div class="card-body">
                  
                  <table id="printArea" >
                        <tr>
                            <th>رقم الطلب</th>
                            <td><?= $request_row->requestid ?></td>
                        </tr>
                        
                        <tr>
                            <th>القسم</th>
                            <td><?= $request_row->catname ?></td>
                        </tr>
                        <tr>
                            <th>النوع</th>
                            <td><?= $request_row->typename ?></td>
                        </tr>
                        <tr>
                            <th>اسم المستخدم</th>
                            <td><?= $request_row->username ?></td>
                        </tr>
                        <tr>
                            <th>حالة الطلب</th>
                            <td><?= $request_row->status ?></td>
                        </tr>
                        <tr>
                            <th>تاريخ الطلب</th>
                            <td><?= $request_row->request_date ?></td>
                        </tr>
                        <tr>
                            <th> رقم الحساب  </th>
                            <td>  <?= $request_row->account_number ?></td>
                        </tr>
                        <tr>
                            <th>المبلغ بالأرقام</th>
                            <td><?php  if ($request_row->amount_numbers != null ) echo $request_row->amount_numbers;   ?>
                        </tr>
                        <tr>
                            <th>المبلغ كتابة</th>
                            <td><?= $request_row->amount_words ?></td>
                        </tr>
                        <tr>
                            <th> مبلغ متبقي من العهدة السابقة  </th>
                            <td><?= $request_row->previous_balance ?> </td>
                        </tr>
                        <tr>
                            <th>السبب</th>
                            <td><?= $request_row->reasons ?></td>
                        </tr>
                        <tr>
                            <th>اسم المُصدر</th>
                            <td><?= $request_row->issuer_name ?></td>
                        </tr>
                        <tr>
                            <th>مرفقات</th>
                            <td><?php   echo ConvertImagea ( $request_row->attachments );   ?></td>
                        </tr>
                        <tr>
                            <th>اسم مدير القسم </th>
                            <td><?= $request_row->manager_name   ?></td>
                        </tr>
                        <tr>
                            <th>الملاحظات</th>
                            <td><?php 
                              
                              if(!empty($request_notes))
                                {
                                    foreach($request_notes as $record)
                                    {

                                        echo $record->rolename.' - '.$record->username.':     '.$record->notes.'  .<br><br>';

                                    }
                                }

                             ?>
                            </td>
                        </tr>
                        

                    </table>


                    <?php if ($this->session->userdata('roleId') == 6  && $request_row->requests_status == 5 ) {  ?>
                    <!-- <button onclick="printContent()">Print</button> -->
                    <a class="btn btn-sm btn-success print" href="<?php echo base_url( 'dashboard/create_pdf/'.$request_row->requestid  ) ;?>"    title="طباعة"><i class="fa   fa-print"></i></a>

                    <?php }?>
                  </div>
                </div>          
          </div>
        </div>
</div> <!-- /.container-fluid -->
<!-- end of content-->
</div>
 