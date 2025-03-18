 <!-- /.content -->
 </div>
<footer class="main-footer">
    <!-- <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div> -->
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- <script src="<?= base_url() ?>assets/vendor/jquery/dist/jquery.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url()?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url()?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=base_url()?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=base_url()?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url()?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- select2  -->
<script src="<?=base_url()?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?=base_url()?>assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url()?>assets/plugins/moment/moment.min.js"></script>
<script src="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=base_url()?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url()?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url()?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.9/dist/sweetalert2.all.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/datetimepicker/bootstrap-datetimepicker.min.js"></script>

<!-- page script -->
<?php if($this->session->notif=='success'){?>
            <script  type="text/javascript">
                                Swal.fire(
                    'Berhasil',
                    '<?=$this->session->pesan?>',
                    'success'
                    )
            </script>
        <?php }?>
        <?php if($this->session->notif=='error'){?>
            <script  type="text/javascript">
                                Swal.fire(
                    'Tidak Berhasil',
                    '<?=$this->session->pesan?>',
                    'error'
                    )
            </script>
        <?php }?>
<script>
  jQuery(function () {
    jQuery("#example1").DataTable({
      "autoWidth": false,
      "sScrollX": '100%',
    });
    jQuery('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "sScrollX": '100%',
    });
  });
</script>
<script>
  jQuery(function () {
    //Initialize Select2 Elements
    jQuery('.select2').select2()

    //Initialize Select2 Elements
    jQuery('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    jQuery('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    jQuery('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    jQuery('[data-mask]').inputmask()

    //Date range picker
    jQuery('#reservationdate').datetimepicker({
        format: 'L'
    });

    jQuery('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    jQuery('#reservation').daterangepicker()
    //Date range picker with time picker
    jQuery('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    jQuery('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        jQuery('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    jQuery('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    jQuery('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    jQuery('.my-colorpicker1').colorpicker()
    //color picker with addon
    jQuery('.my-colorpicker2').colorpicker()

    jQuery('.my-colorpicker2').on('colorpickerChange', function(event) {
      jQuery('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    jQuery("input[data-bootstrap-switch]").each(function(){
      jQuery(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>


<script type="text/javascript">
         var btn = document.getElementById("tambah")
            window.onload = function () {
                document.getElementById("pw1").onchange = validatePassword;
                document.getElementById("pw2").onchange = validatePassword;   
            }
            function validatePassword(){
                var pass2=document.getElementById("pw2").value;
                var pass1=document.getElementById("pw1").value;
                if(pass1!=pass2){
                  document.getElementById("notif").innerHTML = "<span style='color:red;font-style:italic'>*Password Tidak Cocok</span>";
                }else{
                  document.getElementById("notif").innerHTML ="<span style='color:green;font-style:italic'>*Password  Cocok</span>";
                    btn.disabled = false
                }   
            }
        </script>

<script type="text/javascript">
                 jQuery.noConflict();
                    jQuery(function () {
                        jQuery('#datetimepicker6').datetimepicker({
                            showClose: true,
                            showTodayButton: true,
                            format : 'YYYY-MM-DD',
                            useCurrent: true,
                        });
                        jQuery('#datetimepicker7').datetimepicker({
                            useCurrent: false, //Important! See issue #1075
                            showClose: true,
                            showTodayButton: true,
                            format : 'YYYY-MM-DD',
                        });
                        jQuery('#datetimepicker8').datetimepicker({
                            useCurrent: false, //Important! See issue #1075
                            showClose: true,
                            showTodayButton: true,
                            format : 'YYYY-MM-DD',
                        });
                        jQuery('#datetimepicker9').datetimepicker({
                            showClose: true,
                            showTodayButton: true,
                            format : 'YYYY-MM-DD',
                            useCurrent: true,
                        });
                        jQuery("#datetimepicker6").on("dp.change", function (e) {
                            jQuery('#datetimepicker7').data("DateTimePicker").minDate(e.date);
                        });
                        jQuery("#datetimepicker7").on("dp.change", function (e) {
                            jQuery('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
                        });
                        jQuery("#datetimepicker9").on("dp.change", function (e) {
                            jQuery('#datetimepicker9').data("DateTimePicker").maxDate(e.date);
                        });
                    });
                </script>
</body>
</html>