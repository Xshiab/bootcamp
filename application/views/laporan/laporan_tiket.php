<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="h3 mb-4 text-gray-800">Data Tiket</h6>
            <a href="<?= base_url('laporan/cetak_laporan_tiket'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print </a>
            <a href="<?= base_url('laporan/laporan_tiket_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download PDF </a>
            <a href="<?= base_url('laporan/export_excel_tiket'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export To Excel</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
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
            </div>
            </thead>
            <tbody>
                <!-- /.container-fluid -->
            </tbody>
        </div>
    </div>
</div>
<!-- End of Main Content -->