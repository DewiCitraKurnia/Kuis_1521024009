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
		<th colspan="5">OUTPUT</th>
		</tr>
		</tr>
			<th>Jumlah A-Z</th>
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
			$B = substr_count($artikel2,"B") ;
			$C = substr_count($artikel2,"C") ;
			$D = substr_count($artikel2,"D") ;
			$E = substr_count($artikel2,"E") ;
			$F = substr_count($artikel2,"F") ;
			$G = substr_count($artikel2,"G") ;
			$H = substr_count($artikel2,"H") ;
			$I = substr_count($artikel2,"I") ;
			$J = substr_count($artikel2,"J") ;
			$K = substr_count($artikel2,"K") ;
			$L = substr_count($artikel2,"L") ;
			$M = substr_count($artikel2,"M") ;
			$N = substr_count($artikel2,"N") ;
			$O = substr_count($artikel2,"O") ;
			$P = substr_count($artikel2,"P") ;
			$Q = substr_count($artikel2,"Q") ;
			$R = substr_count($artikel2,"R") ;
			$S = substr_count($artikel2,"S") ;			
			$T = substr_count($artikel2,"T") ;
			$U = substr_count($artikel2,"U") ;
			$V = substr_count($artikel2,"V") ;
			$W = substr_count($artikel2,"W") ;
			$X = substr_count($artikel2,"X") ;
			$Y = substr_count($artikel2,"Y") ;
			$Z = substr_count($artikel2,"Z") ;

			$total=$A+$B+$C+$D+$E+$F+$G+$H+$I+$J+$K+$L+$M+$N+$O+$P+$Q+$R+$S+$T+$U+$V+$W+$X+$Y+$Z;
			echo $total;
			?>
			</td>
		</tr>
	</table>

</body>
</html>