<div class="page-title">
    <div class="breadcrumb-env">
        <ul class="user-info-menu left-links list-inline list-unstyled">
            <li class="hidden-sm hidden-xs">
                <a href="#" data-toggle="sidebar">
                    <i class="fa-bars"></i>
                </a>
            </li>
        </ul>
        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i>Home</a>
            </li>
            <li class="active">
                <strong>Konsultasi</strong>
            </li>
        </ol>
    </div>
</div>

<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Konsultasi</h3>
        <div class="panel-options">
        </div>
    </div>
    <div class="panel-body">

        <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
            <table cellspacing="0" class="table table-small-font table-bordered table-striped" >
                <thead>
                    <tr>

                        <th>Konsultasi</th>
                        <th>Jenis Konsultasi</th>
                        <th>Pembuat</th>
                        <th>Status</th>
                        <th>Dibuat</th>
                        <th>Balasan </th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody class="middle-align">
                    <?php foreach ($items as $item): ?>
                        <tr id="<?php echo $item->pengaduan_id ?>">
                            <td>#<?php echo $item->pengaduan_id ?>: <?php echo $item->subject ?></td>
                            <td><?php echo $item->category ?></td>
                            <td><?php echo $item->username ?> </td>
                            <td>
                                <?php if ($item->status == "buka"): ?> 
                                    Buka
                                <?php else: ?>
                                    Selesai
                                <?php endif ?>
                            </td>
                            <td><?php echo $item->created ?></td>
                            <td><?php echo $item->last_reply ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/pengaduan/manage/' . $item->pengaduan_id); ?>" class="btn btn-orange btn-sm">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                    Balas
                                </a>
                                <a class="btn btn-danger btn-sm remove">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <?php echo $pagination ?>
    </div>
</div>

<script type="text/javascript">
    $(".remove").click(function () {
        var id = $(this).parents("tr").attr("id");
        if (confirm('Yakin Hapus Konsultasi ini?'))
        {
            $.ajax({
                url: '<?php echo site_url() ?>admin/pengaduan/delete/' + id,
                type: 'DELETE',
                error: function () {
                    alert('Gagal');
                },
                success: function (data) {
                    $("#" + id).remove();
                    alert('Berhasil dihapus');
                }
            });
        }
    });
</script>