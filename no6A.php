<?php 

	$host ="localhost"; //host server
	$user ="root"; //user login phpMyAdmin
	$pass =""; //pass login phpMyAdmin
	$db ="db_gudang"; //nama database
	$conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
 	
	/*SOAL A*/
	$jalankan = true;
	if ($jalankan==true) {
		$nama1	= [	'name1' => 'Peralatan Mandi',
				'name2' => 'Mie Instan',
				'name3' => 'Olahan Daging'
			];

		$data3 = array_merge($nama1);

		/*insert dulu ke table categoris*/
		$no=1;
		foreach ($data3 as $key => $value) {
			$query ="INSERT INTO categories SET name='".$nama1['name'.$no++]."'";
			mysqli_query($conn, $query);
		}

		echo "Mantap";
	}else{
		echo "JALANKAN DULU BOSCUEEE";
	}
	
	if ($jalankan==true) {
		$query1 	= mysqli_query($conn,"SELECT * FROM categories WHERE name='Peralatan Mandi' ORDER BY id DESC LIMIT 1");
		$data1 	= mysqli_fetch_array($query1);
			
		$nama	= [	'name1' => 'Sampo',
					'name2' => 'Sikat Gigi'
		];
		$no=1;
		foreach ($nama as $key => $value) {
			
		$query ="INSERT INTO products SET name='".$nama['name'.$no++]."', category_id='".$data1['id']."'";
		mysqli_query($conn, $query);
		}


		/*makanan*/
		$query2 = mysqli_query($conn,"SELECT * FROM categories WHERE name='Mie Instan' ORDER BY id DESC LIMIT 1");
		$data2 	= mysqli_fetch_array($query2);

			if ($data2['name']=="Mie Instan") {
				$nama2	= [	
						'name1' => 'Indomi',
						'name2' => 'mie sedap'
			];
			
			$no=1;
			foreach ($nama2 as $key => $value) {
				
				$query2 ="INSERT INTO products SET name='".$nama2['name'.$no++]."', category_id='".$data2['id']."'";
				mysqli_query($conn, $query2);
			}
		}
		

		/*daging*/
		$query3 = mysqli_query($conn,"SELECT * FROM categories WHERE name='Olahan Daging' ORDER BY id DESC LIMIT 1");
		$data3 	= mysqli_fetch_array($query3);
		
		if ($data3['name']=="Olahan Daging") {
			$nama3	= [	
						'name1' => 'Nuget'
					];
			$no=1;
			foreach ($nama3 as $key => $value) {
				
			$query3 ="INSERT INTO products SET name='".$nama3['name'.$no++]."', category_id='".$data3['id']."'";
			mysqli_query($conn, $query3);
			}
		}
	}


?>