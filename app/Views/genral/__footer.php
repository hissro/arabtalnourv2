      <!-- Footer -->
     <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
		       <p class="footer">    
              جميع الحقوق محفوظة عربة النور
             <?php echo date("Y"); ?>
               - 
             وقت تحميل الصفحة 
             <strong>{elapsed_time}</strong>
             ثانية
            </p>
            <a class="btn btn-sm" target="_blank" href="https://hissro.net">Made it By Hissro </a>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">هل تود الخروج?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">قم بتحديد "تسجيل الخروج" أدناه إذا كنت مستعدًا لإنهاء جلستك الحالية.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">إلغاء</button>
          <a class="btn btn-primary" href="<?php echo base_url('login/logout'); ?>">خروج</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/js/jquery.easing.min.js'); ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/js/sb-admin-2.min.js'); ?>"></script>
  
  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/js/Chart.min.js'); ?>"></script>
  
  <!-- chart -->
  <script src="<?php echo base_url('assets/js/demo/chart-bar-demo.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/demo/chart-pie-demo.js'); ?>"></script>

   <!-- Page level plugins -->
   <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets/js/demo/datatables-demo.js');?>"></script>


</body>
</html>
