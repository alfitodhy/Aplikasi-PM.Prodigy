<div class="page-title">
    <div class="breadcrumb-env">
        <ul class="user-info-menu left-links list-inline list-unstyled">
            <li class="hidden-sm hidden-xs">
                <a href="#" data-toggle="sidebar">
                    <i class="fa-bars"></i>
                </a>
            </li>
        </ul>
        <ol class="breadcrumb bc-1">
            <li>
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i>Home</a>
            </li>
            <li class="active">
                <strong>Booking Training</strong>
            </li>
        </ol>

    </div>

</div>

<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Data yang sudah booking training</h3>
        <div class="panel-options">
            <a href="<?php echo site_url('admin/topik/manage'); ?>" class="btn btn-secondary btn-sm"
                style="color:#fff"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah</a>
        </div>
    </div>
    <div class="panel-body">
        <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk"
            data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">

            <table class="table table-bordered table-striped" id="datatable_">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Booking</th>
                        <th>Tanggal Booking</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Asal Kota</th>
                        <th>No Handphone</th>
                        <th>Training</th>
                    </tr>
                </thead>

                <tbody class="middle-align">

                    <?php
                    $no = 1;
                    foreach ($book as $booking) {
                        ?>

                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $booking->kode_booking ?></td>
                            <td><?php echo $booking->tanggal_booking ?></td>
                            <td><?php echo $booking->nama ?></td>
                            <td><?php echo $booking->email ?></td>
                            <td><?php echo $booking->alamat ?></td>
                            <td><?php echo $booking->nohp ?></td>
                            <td><?php echo $booking->training ?></td>


                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
        <?php echo $pagination ?>
    </div>
</div>
<script type="text/javascript">

    $(document).ready(function () {
        $('#myTable').DataTable();
    });


    $(".remove").click(function () {
        var id = $(this).parents("tr").attr("id");
        if (confirm('Yakin Hapus Topik ini??')) {
            $.ajax({
                url: '<?php echo site_url() ?>admin/topik/delete/' + id,
                type: 'DELETE',
                error: function () {
                    alert('Gagal');
                },
                success: function (data) {
                    $("#" + id).remove();
                    alert('Topik berhasil dihapus');
                }
            });
        }
    });
</script>