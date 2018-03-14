<?php

session_start();
if(!isset($_SESSION['login_user']))
{
    header("Location:login.php");
}
include("header.php");
include("db.php");
$cid=$_REQUEST['cust_id'];

if($_POST)
{

        $str = "Update customer_master set cust_username='" . $_POST['cust_username'] . "',cust_email='" . $_POST['cust_email'] . "',gender='" . $_POST['gender'] . "',cust_mob='" . $_POST['cust_mob'] . "',reg_date='" . $_POST['date'] . "' where cust_id=$cid";
        $result = mysql_query($str);
        if ($result) {
            echo "<script type='text/javascript'>alert('Record Updated...!')</script>";
            header("Location:customer.php");
        } else {
            echo mysql_error();
            echo "<script type='text/javascript'>alert('failed!')</script>";
        }


}
$sql = "SELECT * FROM customer_master where cust_id=$cid";
$result = mysql_query($sql);
$no=1;
if ($result) {
// output data of each row
$row=mysql_fetch_array($result)
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Customer / Edit Customer</li>
        </ol>
    </div><!--/.row-->



    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Customer Details </h1>
        </div>
    </div>



    <form class="form-horizontal" method="post" action="editcustomer.php?cust_id=<?php echo$row['cust_id'];?>" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-sm-2">customer Name<span style="color:red">*</span></label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Enter customer Name" name="cust_username" value="<?php echo $row['cust_username'];?>" pattern="[a-zA-Z\s]+"required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" >Customer_email<span style="color:red">*</span></label>
            <div class="col-sm-3">
                <input type="text" class="form-control"  placeholder="Enter customer email" name="cust_email" pattern="[a-zA-Z[.]0-9\a-zA-Z]+"required value="<?php echo $row['cust_email'];?>">
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-sm-2" >Gender<span style="color:red">*</span></label>
            <div class="col-sm-2">


                <div class="radio">
                    <label><input type="radio" name="gender" value="Male" <?php echo ($row['gender']=='Male')?'checked':''?> >Male</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gender" value="Female" <?php echo ($row['gender']=='Female')?'checked':''?> >Female</label>
                </div>

            </div>
        </div>



        <div class="form-group">
            <label class="control-label col-sm-2" >Mobile No<span style="color:red">*</span></label>
            <div class="col-sm-2">
                <div class="input-group">
                    <span class="input-group-addon">+91</span>
                    <input  type="text" class="form-control" name="cust_mob" placeholder="Enter Mobile No" pattern="[0-9]{10}"required value="<?php echo $row['cust_mob'];?>">
                </div>
            </div>
        </div>






        <div class="form-group">
            <label class="control-label col-sm-2" >Date<span style="color:red">*</span></label>
            <div class="col-sm-3">
                <input type="date" class="form-control"  placeholder="Enter Required date" name="date" required value="<?php echo $row['reg_date'];?>">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" name="Submit" Value="">Update</button>

                <a href="customer.php" class="btn btn-danger" name="cancel" Value="">Cancel</a>
            </div>
        </div>
    </form>

    <?php } ?>

</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>


<script>
    $("#select1").change(function() {
        if ($(this).data('options') == undefined) {
            $(this).data('options', $('#select2 option').clone());
        }
        var id = $(this).val();
        var options = $(this).data('options').filter('[parent=' + id + ']');
        $('#select2').html(options);
    });
    $("#select1").change();
</script>


