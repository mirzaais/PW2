<?php  
   include_once 'header.php';
?>

<form action="form_nilai.php" method="" class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm"> 
<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
           require_once 'libbfungsi.php';
          if (isset($_POST['btn'])) {
            
            $namkap =  $_POST['namkap'];
            $mata_kuliah =  $_POST['mata_kuliah'];
            $UTS =  $_POST['UTS'];
            $UAS =  $_POST['UAS'];
            $TUGAS =  $_POST['TUGAS'];
           
            
           
$TOTALNilai = number_format(( $UTS + $UAS + $TUGAS) / 3, 2);
$grade = grade($TOTALNilai);
$predikat = predikat ($grade);
$lulus = kelulusan($TOTALNilai);


            // tampilkan hasil form
         echo"<tr>";
         echo "<td> 3 </td>";
         echo '<td>' . $namkap . '</td>';
         echo '<td>' . $mata_kuliah . '</td>';
         echo '<td>' . $UTS . '</td>';
         echo '<td>' . $UAS . '</td>';
         echo '<td>' . $TUGAS . '</td>';
         echo '<td>' . $TOTALNilai . '</td>';
         echo '<td>' . $grade . '</td>';
         echo '<td>' . $predikat . '</td>';
         echo '<td>' . $lulus . '</td>';
         echo "</tr>"; 
          }
          else {
            // Buat submit
            echo "<tr><td colspan='10'>Form belum ada, data muncul setelah klik kirim.</td></tr>";
        }
          ?>


      </tbody>
  </table>
</div>
<?php  
   include_once 'footer.php';
?>
	