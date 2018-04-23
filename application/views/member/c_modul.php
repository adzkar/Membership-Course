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
      for ($i = 0;$i < count($isi)-1;$i++) {
        $a = $i + 1;
        echo "<tr>";
          echo "<td>".$a."</td>";
          echo "<td>".$isi[$i]['judul_modul']."</td>";
          echo "<td>";
            echo "<a href='".base_url("modul/".$isi[$i]['file'])."' download>Download</a>";
          echo "</td>";
        echo "<tr>";
      }
    ?>
  </tbody>
</table>
