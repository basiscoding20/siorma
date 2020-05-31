<!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="<?= base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.js');?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?= base_url('assets/js/mdb.min.js'); ?>"></script>

  <!-- Initializations -->
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    // Data Picker Initialization
    $('.datepicker').pickadate();

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });

    // Tooltips Initialization
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

  </script>

  