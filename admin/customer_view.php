<?php
/**
 * Created by PhpStorm.
 * User: JAY RAJPUTANA
 * Date: 16/2/18
 * Time: 9:50 PM
 */
?>
<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("Location:login.php");
}
include("db.php");
include("header.php");
$c_id=$_REQUEST['cust_id'];

$to=date("d/m/Y");

$sql = "SELECT * FROM customer_master where cust_id=$c_id";
$result = mysql_query($sql);
$no=1;
if ($result) {
// output data of each row
    $row = mysql_fetch_array($result)

?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Customer / Customer View</li>
        </ol>
    </div><!--/.row-->



    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Customer <a href="newcase.php"></h1>	</a>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Customer Details</div>
                <div class="panel-body">

                    <div class="col-lg-4">
                        <table>

                            <tbody>

                            <tr>
                                <th>Customer_id:</th>
                                <td> &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo$row['cust_id'];?> </td>

                            </tr>

                            <tr>
                                <th>Cust_name</th>
                                <td>&nbsp &nbsp &nbsp &nbsp &nbsp<?php echo$row['cust_username']; ?></td>
                            </tr>


                            <tr>
                                <th>customer_email</th>
                                <td>&nbsp &nbsp &nbsp <?php echo$row['cust_email'];?></td>
                            </tr>

                            <tr>
                                <th>Customer mobile</th>
                                <td>&nbsp &nbsp &nbsp &nbsp<?php echo$row['cust_mob'];?></td>
                            </tr>


                            <tr>
                                <th>Gender</th>
                                <td>&nbsp &nbsp &nbsp &nbsp  <?php echo$row['gender'];?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <?php
	}

	?>


</div>



<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
