<!DOCTYPE html>
<html>
<head>
	<title>Dewi Citra Kurnia</title>
</head>
<body>
	<h2>UPGRADE NILAI KUIS</h2>
	<table border='1'>
		<tr>
		<th rowspan="2">INPUT</th>
		<th colspan="12">OUTPUT</th>
		</tr>
		</tr>
			<th>A</th>
			<th>C</th>
			<th>D</th>
			<th>E</th>
			<th>I</th>
			<th>K</th>
			<th>N</th>
			<th>R</th>
			<th>T</th>
			<th>U</th>
			<th>W</th>
			<th>Jumlah abjad pembentuk nama</th>
		</tr>
		<tr>
		  <td>
			<?php
			$artikel1 = "Pendirian pendidikan vokasi sebenarnya menjadi tanggung jawab Pemerintah, tapi akan berjalan lambat tanpa bantuan daerah, katanya di Bojonegoro, Sabtu. Bojonegoro (Antara Jatim) - Dosen Polinema Malang, Jawa Timur, Dr. Jaswadi mengatakan pendirian Akademi Komunitas Negeri (AKN) di Bojonegoro sejalan dengan program pemerintah dalam mendorong berdirinya pendidikan vokasi untuk meningkatkan kemampuan lulusan SMK. Pendirian pendidikan vokasi sebenarnya menjadi tanggung jawab Pemerintah, tapi akan berjalan lambat tanpa bantuan daerah, katanya di Bojonegoro, Sabtu. Oleh karena itu, katanya usai berbicara dalam seminar dengan tema Peran Guru BK dalam mempersiapkan peserta didik menghadapi persaingan di era masyarakat ekonomi Asean melalui pendidikan tinggi vokasi bahwa pendirian AKN di Bojonegoro sangat tepat. Kalau kemudian pendirian AKN Bojonegoro ada yang menolak saya kira hanya masalah politis, ujarnya. Lebih lanjut ia menjelaskan pendirian pendidikan vokasi diatur di dalam  surat edaran (SE) Menristekdikti No. 1/M/SE/IX/2016 tentang Pendirian Perguruan Tinggi Baru dan Pembukaan Program Studi. Di dalam ketentuan itu untuk pendirian pendidikan tinggi baru hanya perguruan tinggi vokasi dan institut teknologi. Sesuai UU No. 12 tahun 2012 pasal 59 (7) bahwa akademi komunitas merupakan perguruan tinggi yang menyelenggarakan pendidikan vokasi setingkat diploma satu dan/atau diploma dua dalam satu atau beberapa cabang ilmu pengetahuan. Ya agar lulusan SMK kemampuannya bisa lebih meningkat kalau meneruskan jenjang pendidikan di pendidikan vokasi, tuturnya. Ketua Prodi di Luar Domisili (PDD) AKN Bojonegoro Yudi Pramono menjelaskan pengelolaan manajemen pendidikan di AKN selama ini di bawah Politeknik Negeri Malang (Polinema) yang bertugas mengantarkan AKN menjadi mandiri. Di dalam pendirian awal AKN pada 2011 sudah ada kesepakatan antara pemerintah kabupaten (pemkab) dengan Kemenristek dan Dikti terkait peneyediaan tanah dan gedung perkuliahan. Pendirian AKN, lanjut dia, berdasarkan Permendikbud No. 161/P/201 yang menunjuk Polinema untuk membuat Prodi di luar Domisili (PDD) di Bojonegoro. Humas AKN Bojonegoro Wahyu Setiawan menambahkan tujuan seminar yaitu menyosialisasikan AKN kepada guru SMK negeri dan swasta di daerah setempat. Selain itu, lanjut dia,  juga memberikan gambaran kepada para guru SMK bahwa alumni AKN bisa bekerja di dunia industri di luar negeri, seperti Jepang dan Korea Selatan. AKN sudah mengirimkan enam alumninya bekerja ke Jepang dan Korea Selatan, ucapnya menambahkan. Seminar yang dibuka Wakil Bupati (Wabup) Bojonegoro Setyo Hartono diikuti sekitar 90 guru SMK negeri dan swasta. Pembicara lainnya dalam seminar yaitu Ketua Yayasan Indonesia-Korea Culture and Study Christ Chang dan Pengurus Musyawarah Guru Bimbingan Konseling (MGBK) Jawa Timur, Dra. Sri Herminingsih. (*) " ;
			$artikel2 = strtoupper($artikel1);
			echo $artikel1;
			?>
			</td>
			<td>
			<?php
				$A = substr_count($artikel2,"A") ;
				echo $A;
			?>
			</td>
			<td>
			<?php
				$C = substr_count($artikel2,"C") ;
				echo $C;
			?>
			</td>
			<td>
			<?php
				$D = substr_count($artikel2,"D") ;
				echo $D;
			?>
			</td>
			<td>
			<?php
				$E = substr_count($artikel2,"E") ;
				echo $E;
			?>
			</td>
			<td>
			<?php
				$I = substr_count($artikel2,"I") ;
				echo $I;
			?>
			</td>
			<td>
			<?php
				$K = substr_count($artikel2,"K") ;
				echo $K;
				?>
			</td>
			<td>
			<?php
				$N = substr_count($artikel2,"N") ;
				echo $N;
				?>
			</td>
			<td>
			<?php
				$R = substr_count($artikel2,"R") ;
				echo $R;
				?>
			</td>
			<td>
			<?php		
				$T = substr_count($artikel2,"T") ;
				echo $T;
				?>
			</td>
			<td>
			<?php
				$U = substr_count($artikel2,"U") ;
				echo $U;
				?>
			</td>
			<td>
			<?php
				$W = substr_count($artikel2,"W") ;
				echo $W;
				?>
			</td>
			<td>
			<?php
				$total=$A+$C+$D+$E+$I+$K+$N+$R+$T+$U+$W;
				echo $total;
			?>
			</td>
			  
		  </tr>
	  </table>

</body>
</html>