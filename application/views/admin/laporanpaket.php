<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">

            <?= $this->session->flashdata('pesan'); ?>
            <a href="<?= base_url('laporan/cetak_laporan_paket'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
            <a href="<?= base_url('laporan/laporan_paket_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download Pdf</a>
            <a href="<?= base_url('laporan/export_excel'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
            <table class="table table-hover">
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
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>

<!-- Modal Tambah paket baru-->
<div class="modal fade" id="bukuBaruModal" tabindex="-1" role="dialog" aria-labelledby="bukuBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bukuBaruModalLabel">Tambah Paket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/tambahpaket'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <span> Tujuan </span>
                        <input type="text" class="form-control form-control-user" id="tujuan" name="tujuan" placeholder="Masukkan Tujuan Paket Travel" required>
                    </div>
                    
                    <div class="form-group">
                        <span> Waktu </span>
                        <input type="text" class="form-control form-control-user" id="waktu" name="waktu" placeholder="Masukkan Waktu Paket Travel ( contoh :  5 Days )" required>
                    </div>
                    
                    <div class="form-group">
                        <span> Harga </span>
                        <input type="text" class="form-control form-control-user" id="price" name="price" placeholder="Masukkan Harga Paket Travel" required>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal Tambah Mneu -->