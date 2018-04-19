<div class="content table-responsive table-full-width">
    <a href="<?=base_url('admin/dashboard/tambah_modul')?>" class="btn btn-primary">Tambah Modul</a>
    <table class="table table-striped">
        <thead>
          <th>No</th>
        	<th>Judul Modul</th>
          <th>Download</th>
          <th style="text-align: center;">Aksi</th>
        </thead>
        <tbody>
            <?php
                $no = 1;
                if ($modul == NULL) {
                    echo "<tr>";
                    echo "<td colspan='4' style='text-align: center'>";
                    echo "Belum ada Modul yang diupload";
                    echo "</td>";
                    echo "</tr>";
                } else {
                    foreach ($modul as $row) {
                              echo "<tr>";
                              echo "<td>$no</td>";
                              echo "<td>".$row['judul_modul']."</td>";
                              echo "<td><a target='_blank' href='".base_url("modul/$row[file]")."' class='btn btn-default btn-success'>Download</a></td>";
                              echo "<td style='text-align: center'>";
                              echo "<a href='".base_url("admin/edit_modul/$row[id_modul]")."' class='btn btn-primary'>Edit</a>";
                              echo "&nbsp &nbsp";
                              echo "<a href='".base_url("admin/hapus_modul/$row[id_modul]")."' class='btn btn-default btn-danger'>Hapus</a>";
                              echo "</td>";
                              echo "</tr>";
                              $no++;
                          }
                }
            ?>
        </tbody>
    </table>
    <?php
        // print_r($member);
    ?>
</div>
