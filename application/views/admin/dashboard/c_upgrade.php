<div class="content table-responsive table-full-width">
    <table class="table table-striped">
        <thead>
          <th>No</th>
        	<th>Nama</th>
        	<th>Status</th>
          <th>Bukti Pembayaran</th>
          <th style="text-align: center;">Aksi</th>
        </thead>
        <tbody>
            <?php  
                $no = 1;
                if ($upgrade == NULL) {
                    echo "<tr>";
                    echo "<td colspan='5' style='text-align: center'>";
                    echo "Belum ada member yang menguprade";
                    echo "</td>";
                    echo "</tr>";
                } else {
                    foreach ($upgrade as $row) {
                              // cek kelunasa
                              $lunas = "Belum Lunas";
                              if ($row['lunas'] == 1) {
                                  $lunas = "Sudah Lunas";
                              }
                              echo "<tr>";
                              echo "<td>$no</td>";
                              echo "<td>".$nama[$no-1]['nama']."</td>";
                              echo "<td>".$lunas."</td>";
                              echo "<td><a href='".base_url("uploads/$row[bukti_pembayaran]")."' target='_blank'>Lihat</a></td>";
                              echo "<td style='text-align: center'>";
                              // cek kondisi tombol aktivasi
                              if ($row['lunas'] == 1) {
                                echo "<a class='btn btn-default btn-success' style='cursor: default'>Sudah Aktif</a>";
                              } else {
                                echo "<a href='".base_url('admin/upgrade_member/')."?id_upgrade=".$row['id_upgrade']."&id_member=".$row['id_member']."' class='btn btn-default btn-primary'>Aktivkan</a>";
                              }
                              echo " &nbsp &nbsp";
                              echo "<a href='".base_url("admin/hapus_upgrade/$row[id_upgrade]")."' class='btn btn-default btn-danger'>Hapus</a>";
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
