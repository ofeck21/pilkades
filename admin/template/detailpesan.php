<?php
 if (isset($_GET['pesanmasuk'])) {  
$inbox = mysqli_query($con, "SELECT * FROM inbox WHERE ID=$id");
$row = mysqli_fetch_array($inbox);
$read = mysqli_query($con, "UPDATE inbox SET Processed='true' WHERE ID=$id");
?>
    <div class="mt-4">
        <div class="">
                <div class="form-group">
                   Pengirim : 
                   <input type="text" class="form-control-plaintext" readonly value="<?php echo $row['SenderNumber'] ?>">
                </div>

                <div class="form-group">
                    Pesan :
                    <input type="text" class="form-control-plaintext" readonly value="<?php echo $row['TextDecoded'] ?>">
                    
                </div>
<?php }elseif (isset($_GET['pesanterkirim'])) { 
$sentitems = mysqli_query($con, "SELECT * FROM sentitems WHERE ID=$id");
$row = mysqli_fetch_array($sentitems);
    ?>
    <div class="mt-4">
        <div class="">
                <div class="form-group">
                   Tujuan : 
                   <input type="text" class="form-control-plaintext" readonly value="<?php echo $row['DestinationNumber'] ?>">
                </div>

                <div class="form-group">
                    Pesan :
                    <input type="text" class="form-control-plaintext" readonly value="<?php echo $row['TextDecoded'] ?>">
                    
                </div>
<?php } ?>

                <div class="form-group m-b-0">
                    <div class="text-right">
                        <?php if (isset($_GET['pesanmasuk'])) { ?>
                        <a href="?buatpesan=balas&q=<?php echo $id ?>" class="btn btn-success">Balas</a>
                        <a href="?pesanmasuk=hapus&q=<?php echo $id ?>" onclick="return confirm('Apa Kamu Yakin Akan Menghapus Pesan ini ?')" class="btn btn-danger">Hapus</a>
                        <?php }else{ ?>
                        <a href="?pesanterkirim=hapus&q=<?php echo $id ?>" onclick="return confirm('Apa Kamu Yakin Akan Menghapus Pesan ini ?')" class="btn btn-danger">Hapus</a>
                        <?php } ?>
                    </div>
                </div>

            </form>

        </div>

    </div>
    <!-- panel body -->
