<!-- Buatlah sebuah function untuk memverifikasi valid password dengan requirements:
- Berjumlah delapan karakter
- Setidaknya terdapat minimal sebuah huruf kecil, sebuah huruf besar, sebuah angka dan sebuah karakter spesial
Contoh valid password adalah
- 123Qwer_
- ssdga_A7
- SUper&&4
Clue:
isPasswordValid(‘123Qwer_’);
	return==> true
isPasswordValid(‘123qwer_’);
return==> false
 -->
<?php 

	class test 
	{   
		function soal()
		{
			
			$inputpass 	="pas_wdT6Sa";
			$uppercase 	= preg_match('@[A-Z]@', $inputpass);
			$lowercase 	= preg_match('@[a-z]@', $inputpass);
			$number    	= preg_match('@[0-9]@', $inputpass);

			if(!$uppercase || !$lowercase || !$number || strlen($inputpass)<=8){
		  		return false;
			}else{
		  		return true;
			}

		}
	}


	/*return*/
	$laptop_anto = new test();
	$hasil 		 = $laptop_anto->soal();

	echo "isPasswordValid:";
	echo json_encode($hasil);

?>


