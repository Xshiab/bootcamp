<?php
    header("Content-type: appliaction/vnd-ms-execel");
    header("Content-Disposition: attachment; filename=$title.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    ?>

<h3><center>Laporan Data Paket Travel MBS-Travel</center></h3>
    <br/>
    <table class="table-data">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tujuan</th>
                <th scope="col">Waktu</th>
                <th scope="col">Harga Paket</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $no = 1;
            
            foreach ($paket as $p) { ?>
            <tr>
                <th><?php echo $no++; ?></th>
                <td><?= $p->tujuan ?></td>
                <td><?= $p->waktu  ?></td>
                <td><?= $p->price ?></td>        
            </tr>
            <?php } ?>
        </tbody>
    </table>