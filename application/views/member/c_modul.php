<h3>List of Content : </h3>
<table class="table table-hover" id="tabelnya">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul Modul</th>
      <th scope="col">Download</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $i = 1;
      foreach ($isi as $row) {
        echo "<tr>";
          echo "<td>$i</td>";
          echo "<td>".$row['judul_modul']."</td>";
          echo "<td>";
            echo "<a href='".base_url("modul/$row[file]")."' download>Download</a>";
          echo "</td>";
        echo "<tr>";
        $i++;
      }
    ?>
  </tbody>
</table>
