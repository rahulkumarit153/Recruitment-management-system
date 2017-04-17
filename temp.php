

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="stylesheet" href="./build/less/header.less"></script>

</head>
<body>

<div class="jumbotron text-center">
  <h1> All Readings</h1>
                        <div class="col-lg-4">
                            <div id="imaginary_container pull-right"> 
                                <div class="input-group stylish-input-group">
                                    <form method="post" action="<?php  echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="text" class="form-control"  placeholder="Search" name="meter_id">
                                    <span class="input-group-addon">
                                        <button type="submit" name="submit">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button> 
                                        </form> 
                                    </span>
                                </div>
                            </div>
                            </div>
  <p> </p>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-12">
                            <div class="box">
                                      <div class="box-header">
                                        <h3 class="box-title">Consumer details</h3>

                                        
                                      </div>
                                      <!-- /.box-header -->
                                      <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover">
                                          <tr>
                                           <!-- <th>Consumer Index</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Connection type</th>
                                            <th>Last Billing status</th>
                                            <th>Counts and Received on</th>
                                            <th>Reading and Received on</th> -->
                                            <th>Meter Id</th>
                                            <th>Counts</th>
                                            <th>Time</th>
                                          </tr>

                          <?php
if(isset($_POST['submit'])) 
{ 
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="r3wat";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail !");
mysql_select_db($mysql_database,$bd);

$m_id=$_POST['meter_id'];
 $sql="SELECT Meter_id, counts, time from  cyclecount  WHERE Meter_id='$m_id'";

                          // $sql="SELECT C_Index_no, C_Name, Meter_id, C_Address, Connection_type, Billing_status from consumer";
                           
                           

                          $result=mysql_query($sql);  


                              // output data of each row

                            while($row = mysql_fetch_assoc($result)) 
                              {
                                //$cid= $row['C_Index_no'];
                                $mid= $row['Meter_id'];
                               // $cnm= $row['C_Name'];
                               // $caddr= $row['C_Address'];
                             //   $ctp= $row['Connection_type'];
                                //$rd = $row['Reading'];
                               // $bst= $row['Billing_status'];
                                $cnt= $row['counts'];
                                $tm= $row['time'];

                                    
                          ?>    
                          


                              <tr> 
                             <!-- <td> <?php  echo $cid;  ?>   </td>
                              <td> <?php  echo $cnm;  ?>   </td>
                              <td> <?php  echo $caddr;  ?>   </td>
                              <td> <?php  echo $ctp;  ?>   </td>
                              <td> <?php  echo $bst;  ?>   </td> -->
                              <td> <?php  echo $mid ?></td>
                              <td> <?php  echo $cnt;  ?>   </td> 
                              <td> <?php  echo $tm;  ?>   </td> 
                              </tr>
                            
                            <?php } }
							?>  
                                        
                                          

                                          
                                         
                                        </table>
                                      </div>
                                      <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->


    </div>
    
  </div>

   





</div>





</body>
</html>
