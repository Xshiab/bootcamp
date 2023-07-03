<div class="container-fluid">

    <h3>Halaman Edit Data</h3>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('tiket/proses_edit_data'); ?>">
        <input type="hidden" name="id" value="<?php echo $tiket['id']; ?>">
        <div class="form-grup row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama" required="" value="<?php echo $tiket['name']; ?>">
            </div>
        </div>

        <div class=" form-grup row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" name="email" required="" value="<?php echo $tiket['email']; ?>">
            </div>
        </div>

        <div class="form-grup row">
            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="phone" required="" value="<?php echo $tiket['phone']; ?>">
            </div>
        </div>

        <div class="form-grup row">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="address" required="" value="<?php echo $tiket['address']; ?>">
            </div>
        </div>

        <div class="form-grup row">
            <label for="location" class="col-sm-2 col-form-label">Location</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="location" required="" value="<?php echo $tiket['id_paket'];?>">
            </div>
        </div>

        <div class="form-grup row">
            <label for="guests" class="col-sm-2 col-form-label">Guests</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="guests" required="" value="<?php echo $tiket['guests']; ?>">
            </div>
        </div>

        <div class="form-grup row">
            <label for="arrivals" class="col-sm-2 col-form-label">Arrivals</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" name="arrivals" required="" value="<?php echo $tiket['arrivals']; ?>">
            </div>
        </div>

        <div class="form-grup row">
            <label for="leaving" class="col-sm-2 col-form-label">Leaving</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" name="leaving" required="" value="<?php echo $tiket['leaving']; ?>">
            </div>
        </div>

        <div class=" form-grup row">
            <label for="email" class="col-sm-2 col-form-label">Status Payment</label>
            <div class="col-sm-5">
                <a style="font-size: 25px; border: solid 1px silver;">
                <?php if ($b['status_payment'] == '0'){
                                    echo  '<span class="badge badge-warning"> Waiting ... </span>' ;//'<span class="badge badge-warning> Waiting </span>' ;
                                } else if ($b['status_payment'] == '1') {
                                    echo '<span class="badge badge-info"> Paid Off ... </span>' ;
                                } else {
                                    echo '<span class="badge badge-info> eror </span>' ;
                                } ?>

                </a>
            </div>
        </div>

        <div class="form-grup row">
            <label for="phone" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">Edit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>
</div>