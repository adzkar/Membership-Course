<div class="content table-responsive table-full-width">
    <table class="table table-striped">
        <thead>
            <th>No</th>
        	<th>Nama</th>
        	<th>Email</th>
        	<th>Status</th>
            <th>Kontak</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php  
                $no = 1;
                if ($member == NULL) {
                    echo "<tr>";
                    echo "<td colspan='7'>";
                    echo "Belum ada member yang mendaftar";
                    echo "</td>";
                    echo "</tr>";
                } else {
                    foreach ($member as $row) {
                              echo "<tr>";
                              echo "<td>$no</td>";
                              echo "<td>".$row['nama']."</td>";
                              echo "<td>".$row['email']."</td>";
                              echo "<td>".ucfirst($row['status'])."</td>";
                              echo "<td>";
                              if (isset($row['wa']) && $row['wa'] != '') {
                                  echo "WA : ".$row['wa']."<br>";
                              }
                              if (isset($row['line']) && $row['line'] != '') {
                                  echo "Line : ".$row['line'];
                              }
                              if ($row['line'] == '' && $row['wa'] == '') {
                                  echo "Kosong";
                              }
                              echo "</td>";
                              echo "<td>";
                              echo "<a href='".base_url("admin/hapus/$row[id]")."' class='btn btn-default btn-danger'>Hapus</a>";
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
