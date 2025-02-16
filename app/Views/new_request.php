
 
<!-- edit content start here-->

<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> طلب جديد  </h1>
           </div>

     

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">الرجاء تعئبة النموذج </h6>
                </div>
                <div class="card-body">
                



                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addBooking" action="<?php echo base_url() ?>dashboard/store" enctype="multipart/form-data" method="post" role="form">
                        <div class="box-body">



                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description"> اسم القسم  </label>

                                    <select id="categories_id" name="categories_id" class="form-control required"  required="required">
                                    <!-- <option value="0"  selected="">اختر نوع القسم</option> -->
                                    <?php 
                                    if(!empty($categories))
                                    {
                                        foreach ($categories as $value) 
                                        {
                                            echo ' <option value="'.$value->id.'">   '.$value->name.' </option> ';
                                        }
                                    }
                                    ?>
                                    </select> 


                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">رقم الحساب </label>
                                    <input type="text" class="form-control required" value="" id="account_number" name="account_number" required maxlength="256" />
                                </div>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">التاريخ</label>
                                    <!-- date("Y/m/d") -->
                                    <input type="text"  class="form-control required" value="<?= date("d/m/Y") ?>" id="request_date" name="request_date" disabled>                                   
                                 </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">نوع الطلب </label>
                                    <select id="request_type" name="request_type" class="form-control required"  required="required">
                                    
                                    <?php 
                                    if(!empty($requesttypes))
                                    {
                                        $index = 0 ; 

                                        foreach ($requesttypes as $value) 
                                        {
                                            if  ( $index == 0 )
                                            echo ' <option value="'.$value->id.'"  selected>'.$value->name.' </option> ';
                                            else 
                                            echo ' <option value="'.$value->id.'">   '.$value->name.' </option> ';
                                            $index ++; 
                                        }
                                    }
                                    ?>
                                     </select>                                
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">  المرفقات  </label>
                                    <input type="file"  class="form-control required " id="attachments" size="5" name="attachmentsfiles[]" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.xlsx,.xls,.ppt,.pptx,.txt" multiple />
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">  المبلغ المطلوب (أرقام) </label>
                                    <input type="text" class="form-control required" value="" id="amount_numbers" required  name="amount_numbers" maxlength="256" />
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">المبلغ المطلوب (بالحروف) </label>
                                    <input type="text" class="form-control required" value="" id="amount_words" required name="amount_words" maxlength="256" />
                                </div>
                            </div>
                        </div>



                        
 
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">أسباب الصرف</label>
                                    <textarea class="form-control required" id="reasons" required name="reasons"></textarea>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> 
                                    <label for="description"> طالب الإصدار </label>
                                    <input type="text" class="form-control required" value="" required id="issuer_name" name="issuer_name" maxlength="256" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> 
                                    <label for="description">اسم مدير القسم</label>
                                    <input type="text" class="form-control required" value="" required id="manager_name" name="manager_name" maxlength="256" />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="إرسال الطلب" />
                        <input type="reset" class="btn btn-default" value="إعادة تعين الحقول" />
                    </div>

                    </form>



                
                

                </div>
            </div>     
        



          </div>
    </div>


		 <!-- oontent row 2-->

</div> <!-- /.container-fluid -->
<!-- end of content-->
</div>





<!-- Button trigger modal -->




