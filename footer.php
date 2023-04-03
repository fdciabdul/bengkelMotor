<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to logout?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
        <a href="logout.php" class="btn btn-primary">Logout</a>
      </div>
    </div>
  </div>
</div>

</div>
<!---Container Fluid-->
</div>
<!-- Footer -->
<footer class="sticky-footer bg-white">

</footer>
<!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/ruang-admin.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/jquery.yzhanimageviewer.min.js"></script>
<script src="vendor/select2/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.datatables.net/responsive/1.0.0/js/dataTables.responsive.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<!-- Page level custom scripts -->
<?php
								if ($arrayuser["level"] == 'admin')
								{
								?>
								<script>  $('.status-dropdown').on('change', function(e) {
      var status = $(this).val();
      $('.status-dropdown').val(status)
      console.log(status)
      dataTable.column(13).search(status, true, false, true).draw();

    })</script>
    <?php
								}else{
								    ?>
								    	<script>  $('.status-dropdown').on('change', function(e) {
      var status = $(this).val();
      $('.status-dropdown').val(status)
      console.log(status)
      dataTable.column(12).search(status, true, false, true).draw();

    })</script>
								    <?php
								}
								?>
<script>

  $("#dynamic_select").change(function(){
    var val = $(this).val();
    $("iframe").attr("src", function(i, a){
        return val;
    });
    console.log($("iframe").attr("src"));
});
  $('.exampleimage').yzhanImageViewer({
    selector: 'img',
    attrSelector: 'src',
    parentSelector: 'div'
  });

  $(document).ready(function() {
    dataTable = $("#example").DataTable({
      
        responsive: {
    breakpoints: [
      {name: 'bigdesktop', width: Infinity},
      {name: 'meddesktop', width: 1480},
      {name: 'smalldesktop', width: 1280},
      {name: 'medium', width: 1188},
      {name: 'tabletl', width: 1024},
      {name: 'btwtabllandp', width: 848},
      {name: 'tabletp', width: 168},
      {name: 'mobilel', width: 480},
      {name: 'mobilep', width: 320}
    ]
  }
    });

    $('.select2-multiple').select2();

    /*dataTable.columns().every( function () {
        var that = this;
 
        $('input', this.footer()).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that.search(this.value).draw();
            }
        });
      });*/


    $('.form-check-input').on('change', function(e) {
      var searchTerms = []
      $.each($('.form-check-input'), function(i, elem) {
        if ($(elem).prop('checked')) {
          searchTerms.push("^" + $(this).val() + "$")
        }
      })
      dataTable.column(0).search(searchTerms.join('|'), true, false, true).draw();
    });

 
   
    $('.status-dropdown1').on('change', function(e) {
      var status = $(this).val();
      $('.status-dropdown1').val(status)
      console.log(status)
      dataTable.column(0).search(status, true, false, true).draw();

    })
  });
  
  $(".js-example-theme-single").select2({
  theme: "classic"
});
</script>
</body>

</html>