<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="h3 mb-4 text-gray-800">Data Tiket</h6>
            <a href="<?php echo base_url('Book/'); ?>" class="btn btn-primary btn-sm float-right">+ Tambah Tiket</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>no</td>
                            <td>kode booking</td>
                            <td>name</td>
                            <td>location</td>
                            <td>arrivals</td>
                            <td>Status Payment</td>
                            <td>Konfirmasi</td>
                            <td colspan="2"> Setting</td>
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
                                <td><?php echo $tkt->tujuan?></td>
                                <td><?php echo $tkt->arrivals ?></td>
                                <td>
                                <?php if ($tkt->status_payment == '0'){
                                    echo  '<span class="badge badge-warning"> Waiting ... </span>' ;//'<span class="badge badge-warning> Waiting </span>' ;
                                } else if ($tkt->status_payment == '1') {
                                    echo '<span class="badge badge-info"> Paid Off ... </span>' ;
                                } else {
                                    echo '<span class="badge badge-info> eror </span>' ;
                                } ?>

                                </td>
                                <td>
                                <?php if ($tkt->status_payment == "1") { ?>
                                                <i class="btn btn-sm btn-outline-success"><i class=""></i>Confirmed</i>
                                                <?php } else { ?>
                                                    <a class="btn btn-sm btn-outline-info" href="<?= base_url('tiket/save_tiket1/' . $tkt->id); ?>"><i class=""></i>Confrim Payment</a>
                                                <?php } ?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url() ?>tiket/edit_data/<?php echo $tkt->id; ?>" class="badge badge-primary">Detail</a>
                                    <a href="<?php echo base_url() ?>tiket/delete_data/<?php echo $tkt->id; ?>" class="badge badge-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
            </div>
            </thead>
            
        </div>
    </div>
</div>
<!-- End of Main Content -->

<!-- Modal Konfirmasi-->
<div class="modal fade" id="modal-tiket">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Yakin Confrim Pembayaran</h5>
                <button class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true"> &times; </span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('tiket/save_tiket/' . $tkt->id)?>" method="POST" enctype="multipart/form-data">                    
                    <Input type="text" name="id" id="id" value="" class="form-control"> 
                    <input type="text" name="status_payment" value="1" class="form-control">
                    
                    <button type="submit" class="btn btn-primary btn-sm"> Save </button>
                    <button type="submit" class="btn btn-danger btn-sm"> Reset </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(document).on('click','#select_tiket',function(){
            var id = $(this).data('id')
            var status_payment = $(this).data('status_payment')

            $('#id').val(id)
            $('#status_payment').val(status_payment)
        })
    })
</script>