<?php 
require_once '../config.php';
    $inbox = mysqli_query($con, "SELECT * FROM outbox ORDER BY ID DESC");
    $no=1;
    while ($row = mysqli_fetch_assoc($inbox)) {  
    ?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $row['DestinationNumber'] ?></td>
        <td><?php echo substr($row['TextDecoded'], 0, 21) ?></td>
        <td><?php echo $row['SendingDateTime'] ?></td>
        <td>
            <a href="?pesankeluar=hapus&q=<?php echo $row['ID'] ?>" onclick="return confirm('Apa Kamu Yakin Akan Menghapus Pesan ini ?')" class="btn-sm btn-danger" title="Hapus"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    <?php 
    $no++;
} ?>