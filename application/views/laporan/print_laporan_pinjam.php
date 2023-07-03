<!DOCTYPE html>
<html >
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
    .table-data th{
        background-color:grey;
    }
    h3{
        font-family:Verdana;
    }
    </style>
    
    <h3><center>LAPORAN DATA TIKET USER</center></h3>
    <br/>
    <table class="table-data">
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
        </tr>
        <?php endforeach; ?>
        
        </tbody>
    </table>

<script type="text/javascript">
window.print();
</script>
</body>
</html>