</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; <?=date('Y')?> <a href="http://iconbangla.net">Icon Bangla</a>.</strong> All rights
    reserved.
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url();?>assets/dashboard/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url();?>assets/dashboard/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/dashboard/js/select2.full.min.js"></script>
<script src="<?=base_url();?>assets/dashboard/js/bootstrap-datetimepicker.js"></script>

<!-- DataTables -->
<script src="<?=base_url();?>assets/dashboard/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/dashboard/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url();?>assets/dashboard/js/jquery.slimscroll.min.js"></script> 
<!-- FastClick -->
<script src="<?=base_url();?>assets/dashboard/js/bootstrap-datepicker.min.js"></script>
<script src="<?=base_url();?>assets/dashboard/js/bootstrap-timepicker.min.js"></script>
<script src="<?=base_url();?>assets/dashboard/js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>assets/dashboard/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url();?>assets/dashboard/js/demo.js"></script>
<script src="<?=base_url();?>assets/dashboard/js/bootstrap3-wysihtml5.all.min.js">></script>

<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({
      "emptyTable": "No data available in table"

  })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1
    });
  
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true,
    })

    $('.datepickers').datepicker({
      autoclose: true,
    })

    $('#datepicker1').datepicker({
      autoclose: true,
    })
    

    //Timepicker
    $('.timepicker').timepicker({
      minuteStep: 5,
      showSeconds: true,
      showMeridian: false,
      defaultTime: '0:00:00',
      showInputs: false
    })

    $('.timepicker1').timepicker({
      minuteStep: 5,
      showSeconds: true,
      showMeridian: false,
      defaultTime: '0:00:00' ,  //or true false
      showInputs: false
    })

    $('.timepickers').timepicker({
      minuteStep: 5,
      showSeconds: false,
      showMeridian: true,
      defaultTime: '10:00',
      showInputs: false
    })

  })
</script>
<script>
var url = window.location;
$('ul.treeview-menu a').filter(function () {
   return this.href == url;
}).parents('li').addClass('active');

</script>

<script>
  $(".alert").fadeTo(4000, 500).slideUp(500, function(){
    $(".alert").slideUp(500);
});

</script>
</body>
</html>