 <!--Bootstrap core JavaScript-->
 <!-- <script src="vendor/jquery/jquery.min.js"></script>-->
 <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->

 <!--  Core plugin JavaScript-->
 <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script>-->

 <!--  Custom scripts for all pages-->
 <!-- <script src="js/sb-admin-2.min.js"></script>-->

  <!-- Page level plugins -->
  <!--<script src="vendor/chart.js/Chart.min.js"></script>-->

  <!-- Page level custom scripts -->
  <!--<script src="js/demo/chart-area-demo.js"></script>-->
  <!--<script src="js/demo/chart-pie-demo.js"></script>-->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Wifi Project
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="https://adminlte.io">M-I-G</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<!--<script src="assets/plugins/jquery/jquery.min.js"></script>-->
<!-- Bootstrap 4 -->
<!--<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<!-- AdminLTE App -->
<!--<script src="assets/js/adminlte.min.js"></script>-->
<?php wp_footer()?>
</body>
  <script>
      jQuery('.submitform').click(function(){
        jQuery('.formulario').submit();
      });
      
        jQuery('.linkformpuntoacceso').click(function(event){
          event.preventDefault();
        jQuery('.formpuntoacceso').submit();
      });
      
      jQuery('.linkformactivo').click(function(event){
          event.preventDefault();
        jQuery('.formactivo').submit();
      });      
      
        jQuery('.linkformpuntoacceso2').click(function(event){
                event.preventDefault();
        jQuery('.formpuntoacceso2').submit();
      });
      
      jQuery('.linkformactivo2').click(function(event){
          event.preventDefault();
        jQuery('.formactivo2').submit();
      });      
      
      jQuery('.linkformuser').click(function(event){
          event.preventDefault();
        jQuery('.formuser').submit();
      });      
      
  </script>
</html>
