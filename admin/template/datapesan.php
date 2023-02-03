<?php 
require_once '../config.php';
    $inbox = mysqli_query($con, "SELECT * FROM inbox ORDER BY ID DESC");
    $no=1;
    while ($row = mysqli_fetch_assoc($inbox)) {  
    ?>
     <?php if ($row['Processed']=='false'){ ?>
    <tr style="font-weight: bold;">
        <td><?php echo $no ?></td>
        <td><?php echo $row['SenderNumber'] ?></td>
        <td><?php echo substr($row['TextDecoded'], 0, 21) ?></td>
        <td><?php echo $row['ReceivingDateTime'] ?></td>
        <td>
            <a href="?pesanmasuk=detail&q=<?php echo $row['ID'] ?>" class="btn-sm btn-primary" title="Lihat Pesan"><i class="fa fa-info-circle"></i></a>
            <a href="?pesanmasuk=hapus&q=<?php echo $row['ID'] ?>" onclick="return confirm('Apa Kamu Yakin Akan Menghapus Pesan ini ?')" class="btn-sm btn-danger" title="Hapus"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    <?php 
    }else{ ?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $row['SenderNumber'] ?></td>
        <td><?php echo substr($row['TextDecoded'], 0, 21) ?></td>
        <td><?php echo $row['ReceivingDateTime'] ?></td>
        <td>
            <a href="?pesanmasuk=detail&q=<?php echo $row['ID'] ?>" class="btn-sm btn-primary" title="Lihat Pesan"><i class="fa fa-info-circle"></i></a>
            <a href="?pesanmasuk=hapus&q=<?php echo $row['ID'] ?>" onclick="return confirm('Apa Kamu Yakin Akan Menghapus Pesan ini ?')" class="btn-sm btn-danger" title="Hapus"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    <?php
    }
    $no++;
} ?>