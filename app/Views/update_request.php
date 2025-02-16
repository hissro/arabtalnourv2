   
 
<?php   
$this->load->helper('cias_helper');  
$singleattachments = $request-> attachments == null ? "" : implode(",",  json_decode ($request-> attachments)); 
?>

<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> تعديل الطلب  </h1>
           </div>

     

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">الرجاء تعئبة النموذج </h6>
                </div>
                <div class="card-body">
                



                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="update_request" action="<?php echo base_url() ?>dashboard/update_store" enctype="multipart/form-data" method="post" role="form">
                        <div class="box-body">

                        <!-- // hidden -->
                        <input type="hidden" class="form-control required" value="<?= $request-> id ?>" id="re_id" name="re_id" required maxlength="256" />
                        <input type="hidden" class="form-control required" value="<?= $singleattachments?>" id="re_attachments" name="re_attachments"     />

 
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description"> اسم القسم:</label>
                                    <input type="text" class="form-control required" value="<?= $request-> catname ?>" id="categories_name" name="categories_name" required disabled />



                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">رقم الحساب :</label>
                                    <input type="text" class="form-control required" value="<?= $request-> account_number ?>" id="account_number" name="account_number" required maxlength="256" />
                                </div>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">التاريخ:</label>
                                    <!-- date("Y/m/d") -->
                                    <input type="text"  class="form-control required" value="<?= $request-> request_date ?>"  name="request_date" id ="request_date"  disabled >                                   
                                 </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">نوع الطلب :</label>
                                    <input type="text" class="form-control required" value="<?= $request-> typename ?>" id="categories_name" name="categories_name" required disabled />
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">حذف المرفقات السابقة:</label>
                                    <fieldset id="group1">
                                        <p> <input type="radio" value="true" name="remove_attachment"> نعم</p>
                                        <p><input type="radio" value="false" name="remove_attachment" checked="checked"> لا </p>
                                    </fieldset>
                                </div>
                            </div>
                        </div>


                         


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">المرفقات:</label><br>
                                    <?php  echo ConvertImagea ( $request-> attachments );   ?>
                                    <br>
                                    <input type="file"  class="form-control required " id="attachments" size="5" name="attachmentsfiles[]" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.xlsx,.xls,.ppt,.pptx,.txt" multiple />
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">  المبلغ المطلوب (أرقام) </label>
                                    <input type="text" class="form-control required" value="<?= $request-> amount_numbers ?>" id="amount_numbers" required  name="amount_numbers" maxlength="256" />
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">المبلغ المطلوب (بالحروف) </label>
                                    <input type="text" class="form-control required" value="<?= $request-> amount_words ?>" id="amount_words" required name="amount_words" maxlength="256" />
                                </div>
                            </div>
                        </div>

 
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">أسباب الصرف</label>
                                    <textarea class="form-control required"   id="reasons" required name="reasons"><?= $request-> reasons ?></textarea>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> 
                                    <label for="description"> طالب الإصدار </label>
                                    <input type="text" class="form-control required" value="<?= $request-> issuer_name ?>" required id="issuer_name" name="issuer_name" maxlength="256" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> 
                                    <label for="description">اسم مدير القسم</label>
                                    <input type="text" class="form-control required" value="<?= $request->manager_name ?>" required id="manager_name" name="manager_name" maxlength="256" />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="تحديث الطلب" />
                        <input type="reset" class="btn btn-default" value="إعادة تعين الحقول" />
                    </div>

                    </form>


                </div>
            </div>     
          </div>
    </div>
</div>
</div>

