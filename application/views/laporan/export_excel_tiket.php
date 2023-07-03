<?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=$title.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    ?>
    <style type="text/css">
    .table-data{
        width: 100%;
        border-collapse: collapse;
    }
    .table-data tr th,
    .table-data tr td{
        border:1px solid black;
        font-size: 11pt;
        font-family:Verdana;
        padding: 10px 10px 10px 10px;
    }
    .table-data th{
        background-color:grey;
    }
    h3{
        font-family:Verdana;
    }
    </style>
    
    <h3><center>LAPORAN DATA TIKET USER</center></h3>
    <br/>
    <table class="table-data" border=1>
        <thead>
            <tr>
                <td>no</td>
                <td>kode booking</td>
                <td>name</td>
                <td>email</td>
                <td>phone</td>
                <td>address</td>
                <td>location</td>
                <td>guests</td>
                <td>arrivals</td>
                <td>leaving</td>
                <td>Status Payment</td>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach ($tiket as $tkt) : ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo 'KD' . sprintf("%04s" , $tkt->id) ?></td>                                
            <td><?php echo $tkt->name ?></td>
            <td><?php echo $tkt->email ?></td>
            <td><?php echo $tkt->phone ?></td>
            <td><?php echo $tkt->address ?></td>
            <td><?php echo $tkt->tujuan?></td>
            <td><?php echo $tkt->guests ?></td>
            <td><?php echo $tkt->arrivals ?></td>
            <td><?php echo $tkt->leaving ?></td>
            <td>
            <?php if ($tkt->status_payment == '0'){
                echo  '<span class="badge badge-warning"> Waiting ... </span>' ;//'<span class="badge badge-warning> Waiting </span>' ;
            } else if ($tkt->status_payment == '1') {
                echo '<span class="badge badge-info"> Paid Off ... </span>' ;                
            } else {
                echo '<span class="badge badge-info> eror </span>' ;
            } ?>

            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>