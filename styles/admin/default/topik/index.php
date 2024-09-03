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
                <strong>Artikel</strong>
            </li>
        </ol>

    </div>

</div>

<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Artikel</h3>
        <div class="panel-options">
            <a href="<?php echo site_url('admin/topik/manage'); ?>" class="btn btn-secondary btn-sm" style="color:#fff"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah</a>
        </div>
    </div>
    <div class="panel-body">
        <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">

            <table class="table table-bordered table-striped" id="datatable_">
                <thead>
                    <tr>
                        <th>Topik Konsultasi</th>
                        <th>Artikel</th>
                        <th>Status</th>
                        <th>Dikunjungi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody class="middle-align">
                    <?php foreach ($items as $item) : ?>
                        <tr id="<?php echo $item->faq_id ?>">
                            <td><?php echo $item->category ?></td>
                            <td><?php echo $item->question ?></td>
                            <td>
                                <?php if ($item->status == "0") : ?>
                                    Publik
                                <?php elseif ($item->status == "1") : ?>
                                    Private
                                <?php elseif ($item->status == "2") : ?>
                                    Pengguna yang registrasi
                                <?php endif ?>
                            </td>
                            <td><?php echo $item->visits ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/topik/manage/' . $item->faq_id); ?>" class="btn btn-orange btn-sm">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Edit
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
    $(".remove").click(function() {
        var id = $(this).parents("tr").attr("id");
        if (confirm('Yakin Hapus Topik ini??')) {
            $.ajax({
                url: '<?php echo site_url() ?>admin/topik/delete/' + id,
                type: 'DELETE',
                error: function() {
                    alert('Gagal');
                },
                success: function(data) {
                    $("#" + id).remove();
                    alert('Topik berhasil dihapus');
                }
            });
        }
    });
</script>