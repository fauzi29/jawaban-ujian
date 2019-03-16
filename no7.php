<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
     <style>
            body{
                font-family : Arial;
                font-style: bold;
                margin: 0;
                background-color: #404040;
            }
            .page {
                width: 210mm;
                min-height: 297mm;
                padding: 1mm;
                margin: 0mm auto;
                background: white;
            }
            .subpage {
                margin-left:14mm;
                margin-right:4mm;
                margin-top: 4mm;
            }

            @page {
                size: A4 portrait;
                margin: 0;
            }

            table td {  
                word-wrap: break-word;         
                overflow-wrap: break-word;     
            }
            @media print {
                .page {
                    margin: 0;
                    border: initial;
                    border-radius: initial;
                    width: initial;
                    min-height: initial;
                    box-shadow: initial;
                    background: initial;
                    page-break-after: always;
                }
            }
        </style>
  </head>
  <body>
  <?php 
  	
	$host 	="localhost"; //host server
	$user 	="root"; //user login phpMyAdmin
	$pass 	=""; //pass login phpMyAdmin
	$db 	="db_gudang"; //nama database
	$conn 	= mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");

  	$q 		= mysqli_query($conn,"

			#====QUERYNYA DISINI====

			SELECT b.id, b.name AS product, GROUP_CONCAT(a.name) AS categories
			FROM products a
			LEFT JOIN categories b ON a.category_id = b.id
			GROUP BY b.name
	");

   ?>
  <div class="page">
    <div class="subpage">
   			<table width="100%" border="0" cellspacing="0" cellpadding="0" style="table-layout: fixed;">
	            <thead>
	                <tr>
	                    <th style="padding: 2px 3px 2px 3px; height: 0.7cm; width: 4%; font-size: 72%; border-bottom:1px solid black; border-top: 1px solid black;">
	                        ID
	                    </th>
	                     <th style="padding: 2px 3px 2px 3px; height: 0.7cm; width: 50%; font-size: 72%; border-bottom:1px solid black; border-top: 1px solid black;">
	                        category_name
	                    </th>
	                     <th style="padding: 2px 3px 2px 3px; height: 0.7cm; width: 46%; font-size: 72%; border-bottom:1px solid black; border-top: 1px solid black;">
	                        products
	                    </th>
	                </tr>
	            </thead>
	               
	             <tbody> 
	              <?php  

	                    
	                 while($key = mysqli_fetch_array($q)) { 
	                ?>     
	                <tr valign="top">
	                    <td align="center" style="padding: 2px 3px 2px 3px;  font-size: 70%; ">
	                        <?= $key['id']; ?>
	                    </td>
	                    <td align="center" style="padding: 2px 3px 2px 3px;  font-size: 70%; ">
	                        <?= $key['product']; ?>
	                    </td>
	                    <td align="center" style="padding: 2px 3px 2px 3px;  font-size: 70%; ">
	                        <?= $key['categories']; ?>
	                    </td>
	                </tr>
	                <?php  } ?>
                </tbody>
            </table> 
        </div>
      </div>     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>