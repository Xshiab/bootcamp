<!DOCTYPE html>

<html>
<head>
    <title></title>
</head>

<body>
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
    h3{
        font-family:Verdana;
        }
    </style>

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

<script type="text/javascript">
    window.print();
</script>

</body>
</html>



