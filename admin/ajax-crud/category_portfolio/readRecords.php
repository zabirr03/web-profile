<?php
// Panggil koneksi database.php untuk koneksi database
require_once "../../../config/database.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1



	// include Database connection file

	// Design initial table header 
	$data = ' <table id="dataTables2" class="table table-bordered table-striped table-hover">
						<thead>
						<tr>
							<th>No.</th>
							<th>Name</th>
							<th>Seo Name</th>
							<th>Action</th>
							
						</tr>
						</thead>
						';

	 $query = mysqli_query($mysqli, "SELECT * FROM is_category_portfolio ORDER BY category_portfolio_id DESC")
                                            or die('Ada kesalahan pada query tampil data message: '.mysqli_error($mysqli));

    // if query results contains rows then featch those rows 

    	$number = 1;
    	while($row = mysqli_fetch_assoc($query))
    	{
    		$data .= '
    		<tbody>
    		<tr>
				<td>'.$number.'</td>
				<td>'.$row['name'].'</td>
				<td>'.$row['name_seo'].'</td>
				<td>
					<button onclick="GetCategoryDetailsPortfolio('.$row['category_portfolio_id'].')" data-toggle="tooltip" data-placement="top" title="Change" style="margin-right:5px" class="btn btn-primary btn-sm" ><i style="color:#fff" class="glyphicon glyphicon-edit"></i></button>
				
					<button onclick="DeleteCategoryPortfolio('.$row['category_portfolio_id'].')" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btn-sm"> <i style="color:#fff" class="glyphicon glyphicon-trash"></i></button>
				</td>
    		</tr>
    		</tbody>
    		';
    		$number++;
    	}
    
    $data .= '</table>';

    echo $data;
   
?>