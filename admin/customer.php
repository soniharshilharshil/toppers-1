<?php
/**
 * Created by PhpStorm.
 * User: JAY RAJPUTANA
 * Date: 16/2/18
 * Time: 9:13 AM
 */
?>
<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("Location:login.php");
}
include("header.php");
include("db.php");
//$pid=$_REQUEST['pid'];

if($_POST)
{
    if(!mysql_query("delete from customer_master where cust_id = '".$_POST['id']."'"))
    {
        echo "<script type='text/javascript'>alert('Erorr..!')</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('Customer Deleted..!!')</script>";

    }
}



$sql = "SELECT cust_id,cust_username,cust_email,cust_mob,gender,reg_date FROM customer_master where status=1 ORDER BY cust_id ASC";
$result = mysql_query($sql);
$no=1;
if ($result) {
// output data of each row


}
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">customer</li>
        </ol>
    </div><!--/.row-->

    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Customer List</div>
                <div class="panel-body">
                    <form name="f1" method="post" action="customer.php"><?php

                    if(!isset($_SESSION['login_user']))
                    {
                        header("Location:login.php");
                    }
                    include("header.php");
                    include("db.php");
                    //$pid=$_REQUEST['pid'];

                    if($_POST)
                    {
                        if(!mysql_query("delete from customer_master where cust_id = '".$_POST['id']."'"))
                        {
                            echo "<script type='text/javascript'>alert('Erorr..!')</script>";
                        }
                        else
                        {
                            echo "<script type='text/javascript'>alert('Customer Deleted..!!')</script>";

                        }
                    }



                    $sql = "SELECT  cust_id,cust_username,cust_email,cust_mob,gender,reg_date FROM customer_master where status=1 ORDER BY cust_id ASC";
                    $result = mysql_query($sql);
                    $no=1;
                    if ($result) {
                        // output data of each row

                    }
?>

                   	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                    </div>

                                <div class="panel-body">
                                    <form name="f1" method="post" action="customer.php">
                                        <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc"  >

                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th data-sortable=true>Cust_username</th>
                                                <th>cust_email</th>
                                                <th>cust_mob</th>
                                                <th>gender</th>
                                                <th>Reg_date</th>
                                                <th>Acation</th>
                                                </tr>
                                            </thead>

                                            <tbody>


                                            <?php
                                            while($row=mysql_fetch_array($result))
                                            { ?>
                                                <tr>
                                                    <td> <?php echo $no;?></td>
                                                    <td><?php echo $row['cust_username']; ?></td>
                                                    <td><?php echo $row['cust_email']; ?></td>
                                                    <td><?php echo $row['cust_mob']; ?></td>
                                                    <td><?php echo $row['gender']; ?></td>
                                                    <td><?php echo $row['reg_date']; ?></td>
                                                    <td>
                                                        <a href="customer_view.php?cust_id=<?php echo$row['cust_id']; ?>">
                                                            <input type="button" class="btn btn-sm btn-primary" value="View" ></a>
                                                        <a href="editcustomer.php?cust_id=<?php echo$row['cust_id']; ?>">
                                                            <input type="button" class="btn btn-sm btn-success" value="Edit" ></a>


                                                        <button type="submit" class="btn btn-sm btn-danger" value="<?php echo$row['cust_id'];?>" name="id">Delete</button>
                                                    </td>
                                                </tr>
                                                <?php
                                                $no=$no+1;

                                            }
                                            ?>




                                            </tbody>


                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script>
                        $(function () {
                            $('#hover, #striped, #condensed').click(function () {
                                var classes = 'table';

                                if ($('#hover').prop('checked')) {
                                    classes += ' table-hover';
                                }
                                if ($('#condensed').prop('checked')) {
                                    classes += ' table-condensed';
                                }
                                $('#table-style').bootstrapTable('destroy')
                                    .bootstrapTable({
                                        classes: classes,
                                        striped: $('#striped').prop('checked')
                                    });
                            });
                        });

                        function rowStyle(row, index) {
                            var classes = ['active', 'success', 'info', 'warning', 'danger'];

                            if (index % 2 === 0 && index / 2 < classes.length) {
                                return {
                                    classes: classes[index / 2]
                                };
                            }
                            return {};
                        }
                    </script>
                </div>
            </div>
        </div>
    </div><!--/.row-->


</div><!--/.main-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-table.js"></script>
<script>
    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
</body>

</html>
