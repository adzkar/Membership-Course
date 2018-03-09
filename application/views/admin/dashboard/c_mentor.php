<div class="content table-responsive table-full-width">
    <a href="<?=base_url('admin/dashboard/tambah_mentor')?>" class="btn btn-primary">Tambah Mentor</a>
    <table class="table table-striped">
        <thead>
          <th>No</th>
        	<th>Nama</th>
        	<th>Kontak</th>
          <th style="text-align: center">Action</th>
        </thead>
        <tbody>
            <?php  
                $no = 1;
                if ($mentor == NULL) {
                    echo "<tr>";
                    echo "<td colspan='7'>";
                    echo "Belum ada Mentor yang mendaftar";
                    echo "</td>";
                    echo "</tr>";
                } else {
                    foreach ($mentor as $row) {
                              echo "<tr>";
                              echo "<td>$no</td>";
                              echo "<td>".$row['nama_mentor']."</td>";
                              echo "<td>";
                              echo "Line : ".$row['line']."<br>";
                              echo "WA   : ".$row['wa'];
                              echo "</td>";
                              echo "<td style='text-align: center'>";
                              echo "<a href='".base_url("admin/dashboard/edit_mentor/$row[id_mentor]")."' class='btn btn-primary'>Edit</a> ";
                              echo "<a href='".base_url("admin/hapus_mentor/$row[id_mentor]")."' class='btn btn-default btn-danger'>Hapus</a>";
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
