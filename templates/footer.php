
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
  reserved.
</footer>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/rightbar.php'; ?>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=SCRIPT_ROOT;?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=SCRIPT_ROOT;?>/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=SCRIPT_ROOT;?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- PACE -->
<script src="<?=SCRIPT_ROOT;?>/bower_components/PACE/pace.min.js"></script>
<!-- SlimScroll -->
<script src="<?=SCRIPT_ROOT;?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=SCRIPT_ROOT;?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=SCRIPT_ROOT;?>/dist/js/adminlte.min.js"></script>
<!-- Select2 -->
<script src="<?=SCRIPT_ROOT;?>/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Pages module -->
<script src="<?=SCRIPT_ROOT;?>/modules/js/pages.js"></script>

<!-- page script -->
<script type="text/javascript">

$(document).ready(function() {

  var pages = new Pages();

  // Make the dashboard widgets sortable Using jquery UI
  $('.connectedSortable').sortable({
    placeholder         : 'sort-highlight',
    connectWith         : '.connectedSortable',
    handle              : '.box-header, .nav-tabs',
    forcePlaceholderSize: true,
    zIndex              : 999999
  });
  $('.connectedSortable .box-header, .connectedSortable .nav-tabs-custom').css('cursor', 'move');

  // jQuery UI sortable for the todo list
  $('#parent-menu-list, #child-menu-list').sortable({
    placeholder         : 'sort-highlight',
    handle              : '.handle',
    forcePlaceholderSize: true,
    zIndex              : 999999,
    connectWith         : ".todo-list"
  }).disableSelection();

  //Initialize Select2 Elements
  $('.select2').select2({
    language: {
      noResults: function (params) {
        return "Ei leidnud tulemusi";
      }
    }
  })

  });

  // To make Pace works on Ajax calls
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  $('.ajax').click(function () {
    $.ajax({
      url: '#', success: function (result) {
        $('.ajax-content').html('<hr>Ajax Request Completed !')
      }
    })
  })
</script>
</body>
</html>
