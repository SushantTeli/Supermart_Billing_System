<?php 
include 'dbconnection.php'; 
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

   <?php
    include 'header.php';
    ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Product Name</th>
                                            <th>GST</th>
                                            <th>HSN</th>
                                            <th>Barcode</th>
                                            <th>Selling Price</th>
                                            <th>Purchase Price</th>
                                            <th>Product Weight</th>
                                            <th>Net Weight</th>
                                            <th>Manufacture Date</th>
                                            <th>Expiry Date</th>
                                            <th>Quantity</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>





     <?php
 $query = "SELECT * FROM `product`";

 $data = mysqli_query($con,$query);

 $total = mysqli_num_rows($data);
$i=0;
 if($total!=0)
 {
    while($result=mysqli_fetch_assoc($data))
    {
        $i++;
        echo"
	
        <tr>
		
        <th>$i</th>
        <th>$result[product_name]</th>
        <th>$result[gst]</th>
        <th>$result[hsn]</th>
        <th>$result[barcode]</th>
	    <th>$result[selling_price]</th>
        <th>$result[purchase_price]</th>
        <th>$result[product_weight]</th>
        <th>$result[Net_weight]</th>
        <th>$result[manufacturing_date]</th>
        <th>$result[Expiry_date]</th>
        <th>$result[quantity]</th>
		
		
		<th><a href = 'productupdate.php?table=product&id=$result[id]'><button class='btn btn-primary'> Update</button></a></th>

       
        <th><a href = 'delete.php?table=product&id=$result[id]'><button class='btn btn-danger'> Delete</button></a></th>
       
        
        </tr>
        
		
        ";

    }
 }
 else
 {
    echo"No record found";
 }
 $con->close();

?>



                                    <tfoot>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->







         <?php
          include 'footer.php'
          ?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>