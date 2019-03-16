
<!-- - name (String)
- address (String)
	- hobbies (Array)
	- is_married (Boolean)
	- school (Obj) with key highSchool, and university
	- skills (Array of Obj)
	Return value harus berupa JSON
 -->
<?php 

	class test 
	{   
		function soal()
		{
		   	$hobbies 	= ['sepakbola', 'berenang', 'bersepeda'];
			$nama 		='Fauzi Rachmad';
			$address 	='Pademonegoro RT 11 RW 03, Sukodono-Sidoarjo';
			$is_married = false;



			/*panggil array dengan object skills*/
			$skillsschool = new skillsschool();
			$skillsschool->highschool="SMA PRIMAGANDA";
			$skillsschool->univ 	 ="UMSIDA";

			$hasil = [
				/*name (String)*/
				'nama'	  	=> $nama,
				/*address (String)*/
				'address' 	=> $address,
				/*hobbies (Array)*/
				'hobbies' 	=> $hobbies,
				/*is_married (Boolean)*/
				'is_married'=> $is_married,
				/*skills (Array of Obj)*/
				'skills' 	=> $skillsschool->skills(),
				'highschool'=> $skillsschool->highschool,
				'univ' 		=> $skillsschool->univ
			];

		   return $hasil;
		}
	}

	class skillsschool 
	{   
		var $highschool;
		var $univ;

		function skills()
		{
		   
		   $skills 	= ['php', 'sql', 'html'];
		   return $skills;
		}

	}

	/*return*/
	$laptop_anto = new test();
	$hasil 		 = $laptop_anto->soal();

	echo "Hasil JSON : <br>";
	echo json_encode($hasil);

?>


