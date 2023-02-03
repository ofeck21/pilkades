    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>

    <!-- Form validation -->
    <script src="js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="js/lib/form-validation/jquery.validate-init.js"></script>

    <!-- Chart -->
    <script src="js/Chart.js"></script>

    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function(){
<?php if (isset($_GET['pesanmasuk'])) {?>

            setInterval(function(){ 
                $(".kotak-masuk").load("template/datapesan.php");
            }, 1000);

<?php } else if (isset($_GET['pesankeluar'])) { ?>

            setInterval(function(){ 
                $(".kotak-keluar").load("template/data-pesankeluar.php");
            }, 1000);

<?php } else if (isset($_GET['pesanterkirim'])) { ?>

            setInterval(function(){ 
                $(".kotak-terkirim").load("template/data-pesanterkirim.php");
            }, 1000);

<?php } 

if (isset($_SESSION['autoreply'])) { ?>

setInterval(function(){ 
    $(".autoreply").load("autoreply.php");
}, 5000);

<?php } ?>

setInterval(function() {
    $(".memilih").load("memilih.php");
}, 1000);

setInterval(function() {
    $(".belum").load("belum.php");
}, 1000);

setInterval(function() {
    $(".poling").load("chart.php");
}, 10000);

setInterval(function() {
    $(".persen").load("persen.php");
}, 10000);

        });
    </script>
</body>

</html>