<div class="container">
    <center>
            <tr>
                <td>
                    <div class="table-responsive full-width">
                        <table class="table table-bordered table-striped table-hover" id="table-datatable">
                        <thead>
                        <tr>
                            <th nowrap >No.</th>
                            <th nowrap>Kode Booking</th>
                            <th nowrap>Nama</th>
                            <th nowrap>email</th>
                            <th nowrap>alamat</th>
                            <th colspan="1"> delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;

                        foreach($tiket_user as $t) {
                        ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td>
                            <?= 
                             'KD' . sprintf("%04s" , $t->id);
                               ?>
                            </td>
                            <td nowrap><?= $t->name ?></td>
                            <td nowrap><?= $t->email?></td>
                            <td nowrap><?= $t->address?></td>
                            <td>
                            <a class="btn " href="<?= base_url('book/cancel/' . $t->id) ?>" onclick="return confrim('Are You Sure Cancel ?');" >cancel</a>
                            </td>
                            <td>
                            <a class="btn btn-sm btn-outline-success" href="<?= base_url('book/transaksi/'. $t->id) ?>"> Lanjutkan Pembayaran</a>
                            </td>
                                
                            <?php $no++;
                         } ?>
                         </tbody>
                        </table>
                    </div>
                </td>
            </tr>
    </center>
</div>
