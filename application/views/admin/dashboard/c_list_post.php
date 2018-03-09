<a href="<?=base_url('admin/dashboard/tambah_post')?>" class="btn btn-default btn-success">Tambah Konten</a>
<div class="content table-responsive table-full-width">
    <table class="table table-striped">
        <thead>
          <th>No</th>
        	<th>Judul</th>
        	<th>Author</th>
        	<th>View</th>
        	<th>Kategori</th>
          <th>Tingkat</th>
          <th style="text-align: center">Aksi</th>
        </thead>
        <tbody>
            <?php  
                $no = 1;
                if ($post == NULL) {
                    echo "<tr>";
                    echo "<td colspan='7' style='text-align: center'>";
                    echo "Belum ada Post Tersedia";
                    echo "</td>";
                    echo "</tr>";
                } else {
                    foreach ($post as $row) {
                              echo "<tr>";
                              echo "<td>$no</td>";
                              echo "<td>$row[judul]</td>";
                              echo "<td>$row[nama_mentor]</td>";
                              echo "<td>$row[view]</td>";
                              echo "<td>".ucfirst($row['kategori'])."</td>";
                              echo "<td>".strtoupper($row['status'])."</td>";
                              echo "<td style='text-align: center'>";
                              echo "<a href='".base_url("admin/dashboard/edit_post/$row[id_content]")."' class='btn btn-default btn-info'>Edit</a>";
                              echo "&nbsp";
                              echo "<a href='".base_url("admin/hapus_post/$row[id_content]")."' class='btn btn-default btn-danger'>Hapus</a>";
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
