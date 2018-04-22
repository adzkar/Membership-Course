<h3>List of Content : </h3>
<table class="table table-hover" id="tabelnya">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Daftar Materi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      	for($i = 1;$i <= count($content)-1;++$i) {
      		echo "<tr>";
      		echo "<td># ".$i."</td>";
      		echo "<td>";
      		echo anchor("member/dashboard/$page/".$content[$i-1]['link'],$content[$i-1]['judul']);
      		if ($content[$i-1]['status'] == 'premium') {
	      		echo "<div class='premium-badge'>";
	      		echo strtoupper($content[$i-1]['status']);
	      		echo "</div>";
      		}
      		echo "</td>";
      		echo "</tr>";
		}// punya for

      ?>
    </tr>
  </tbody>
</table>
