<?php  

include 'dbcon.php'; 

session_start();
      if(isset($_SESSION['admin']))
       {
                
       }
    else{
      header('location: index.php');
    } 
  //  echo error_reporting(0);
  
include 'header.php'; 


if(isset($_POST['submit']))  
{  

  $in=$_POST['C_Index_no'];
  $mid=$_POST['Meter_id'];
  $cnm =$_POST['C_Name'];
  $cadd=$_POST['C_Address'];
  $ccont=$_POST['C_Contact_no'];  
  $billstatus=$_POST['Billing_status']; 
  $billdue=$_POST['C_bill_due'];  
  $ceml=$_POST['C_Email_id']; 
  $sid=$_POST['Site_id'];  
  $contp= $_POST['Connection_type'];
  $cst=$_POST['Connection_status']; 
  $insdt=$_POST['Date_of_installation'];
  $fm=$_POST['family_member'];
  $consz=$_POST['Connection_size'];
  $init_read=$_POST['initial_reading'];
  $mul=$_POST['multiplication_factor'];
  $pass=$_POST['password'];
  $zone=$_POST['Zone'];


  
    /*$check_meter = "select * from meter WHERE Meter_id ='$mid' ";

    $run_meter=mysqli_query($conn,$check_meter);

    if(mysqli_num_rows($run_meter)<0)  
    {  
    echo "<script> alert('Meter id not exist, please enter correct one!')</script>
    <script> window.open('reg_con.php','_self')</script>";  
    exit();  
    }

     */


    $check_query="select * from consumer WHERE C_Index_no='$in' and Meter_id='$mid' "; 
    
      $run_query=mysqli_query($conn,$check_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
    echo "<script> alert('Consumer index number or meter id is already exist, Please insert correct one!')</script>
    <script> window.open('reg_con.php','_self')</script>";  
    exit();  
    }  
    

    $check_meter="select * from meter WHERE Meter_id='$mid' "; 
    $run_meter=mysqli_query($conn,$check_meter);  

    

      if(mysqli_num_rows($run_meter)>0)  
    { 
        $insert_user= "INSERT INTO `consumer` (`C_Index_no`, `C_Name`, `Meter_id`, `C_Address`, `C_Contact_no`, `Billing_status`, `C_bill_due`, `C_Email_id`, `Connection_type`, `Connection_size`, `Site_id`, `lat`, `lng`, `Connection_status`, `family_member`, `Date_of_installation`, `initial_reading`, `password`, `Zone`) VALUES ('$in', '$cnm', '$mid', '$cadd', '$ccont', '$billstatus', '$billdue', '$ceml', '$contp', '$consz', '$sid', NULL, NULL, '$cst', '$fm', $insdt, '$init_read', '$pass', '$zone')";
      
          $insert_meter2 = "INSERT INTO `multiply_fact` (`id`, `Meter_id`, `multiplication_factor`) VALUES (NULL, '$mid', '$mul')";

          mysqli_query($conn,$insert_user);
          mysqli_query($conn,$insert_meter2);

        if(mysqli_affected_rows($conn)==1)
            {
            echo "<script>alert('Consumer added successfully !')</script>
            <script>window.open('consumer_details.php','_self')</script>";                
            }
          

         /*if(mysqli_query($conn,$insert_user) && mysqli_query($conn,$insert_meter2))
           {
          echo "<script>alert('Consumer added successfully !')</script>
          <script>window.open('consumer_details.php','_self')</script>
              ";     
            }*/

        }
        else
        {
          echo "<script>alert('This Meter id does not exist !')</script>
          <script>window.open('reg_con.php','_self')</script>"; 
        }
}


?>




<script type="text/javascript">
function validateForm()
{
	var C_Index_no=document.f1.C_Index_no.value;    
  var Meter_id=document.f1.Meter_id.value;
  var C_Contact_no=document.f1.C_Contact_no.value;

  if(C_Index_no!="")
  {
    var letters = /^[0-9a-zA-Z]{8}$/;  
    if(C_Index_no.match(letters))  
      {  
      //return true;  
      }  
    else  
      {  
      alert('Please input consumer index number alphanumeric & characters only and length should be 8');  
      return false;  
      }  
    }

      if(Meter_id!="")
      {
    var letters = /^[0-9a-zA-Z]{8}$/;  
    if(Meter_id.match(letters))  
      {  
      //return true;  
      }  
    else  
      {  
      alert('Please input Meter id alphanumeric characters only and length should be 8');  
      return false;  
      }  
    }

    
    if(C_Contact_no!="")
    {
      
       var phoneno = /^\d{10}$/;
       if(C_Contact_no.match(phoneno))
       {}
       else
       {
         alert("Mobile no should be numeric only and its length should be 10 digit "); 
         return false;
       }
    }
   
}
</script>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- search form -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li >
          <a href="consumer_details.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li >
          <a href="#">
            <i class="fa fa-plus-circle"></i> <span>Register</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="reg_meter.php"><i class="fa fa-circle-o"></i> Meter</a></li>
            <li class="active"><a href="reg_con.php"><i class="fa fa-circle-o"></i> Consumer</a></li>
          </ul>
        </li>

        <li>
          <a href="alerts.php">
            <i class="fa fa-bell-o"></i> <span>Alerts</span>
          </a>
        </li>
        


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

     <section class="content-header">
      <h1>
       
      </h1>

      <div class="row">
      
         
        <!--<div class="box-tools centered">
                  <div class="has-feedback">
                     <input type="text" class="form-control input-sm" placeholder="Search...">
                      <span class="glyphicon glyphicon-search form-control-feedback"></span>
                  </div>
                </div> /.box-tools -->
          <div class="col-lg-3"> </div>
          <div class="col-lg-5">
          <a href="consumer_details.php"><span class=" fa fa-users fa-2x" name="Users"></span> </a> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
          <a href="reg_con.php"><span class="fa fa-user-plus fa-2x"></span> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="alerts.php"><span class="fa fa-bell-o fa-2x"></span></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </div>

         
    
            <div class="col-lg-4">
                
            </div>
        
          
      </div>

      
    </section>
    
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     
      <!-- /.row -->
      <div class="row"> 
      <section class= "col-lg-12">
            <div class="box box-default">
              <div class="box-header with-border">
              <h3 class="box-title"><strong> Register Consumer</strong></h3>                
              </div><!-- /.box-header -->

            <form name="f1" onsubmit="return validateForm();" method="post"  class="form-horizontal" role="form" style=" padding: 15px; margin: 0 auto; background-color: #fff; border-radius: 0.5em;" >

           <div class="box-body" >
           		 <div class="form-group">
                    <label for="Consumer Index Number" class="col-sm-3 control-label">Consumer Index Number</label>
                    <div class="col-sm-6">
                        <input type="text" id ="C_Index_no" name="C_Index_no" placeholder="Consumer Index Number" class="form-control" autofocus required>
                    </div>
                </div>
				
				        <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Consumer Full Name</label>
                    <div class="col-sm-6">
                        <input type="text" id="C_Name" name="C_Name" placeholder="Full Name" class="form-control" required>
                        <span class="help-block">For eg. Last name - first name - middle name</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="meterId" class="col-sm-3 control-label">Meter Id</label>
                    <div class="col-sm-6">
                        <input type="text" id="Meter_id"  name="Meter_id" placeholder="Enter Meter id" class="form-control" required >
                    </div>
                </div>
                 

                 <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-6">
                        <input type="textarea" id="C_Address" rows="2" name="C_Address" placeholder="Full Address" class="form-control" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="Site id" class="col-sm-3 control-label">Pin code</label>
                    <div class="col-sm-6">
                        <input type="text" name="Site_id" id="Site_id" placeholder="Pin code of area" class="form-control" required>
                    </div>
                </div>

                

                <div class="form-group">
                    <label class="control-label col-sm-3">Connection status</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="Connection_status" id="Connection_status" value="active" required>Active 
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="Connection_status" id="Connection_status" value="Deactive" >Deactive
                                </label>
                            </div>
                             
                        </div>
                    </div>
                </div> <!-- /.form-group -->

                <div class="form-group">
                    <label for="Number of family members" class="col-sm-3 control-label">Family members <small>(in numbers including children)</small></label>
                    <div class="col-sm-6">
                        <select id="family_member" name="family_member" roes="2" class="form-control" required>
                            <option>select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="More">More</option>
                           
                        </select>
                    </div>
                </div> <!-- /.form-group-->

                <div class="form-group">
                    <label for="Meter manufacturecomp" class="col-sm-3 control-label">Meter installation date</label>
                    <div class="col-sm-6">
                        <input type="date" name="Date_of_installation" id="Date_of_installation" placeholder="Meter installation date" class="form-control" required>
                    </div>
                </div> 

               <!-- <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>-->
                <!-- /.input group 
              </div>

                <div class="form-group">
                    <label for="Meterdate" class="col-sm-3 control-label">Meter installation date</label>

                <div class="col-sm-6">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right"  id="datepicker">
                  </div> /.input group 
                </div>
              </div>-->
              <!-- /.form group 

              <script type="text/javascript">
                 //Date picker
                  $('#datepicker').datepicker({
                    autoclose: true
                  });
              </script>-->

       <!--  <script src="plugins/datepicker/bootstrap-datepicker.js"></script>

                <div class="form-group">
                    <label for="Meter manufacturecomp" class="col-sm-3 control-label">Meter installation date</label>

                    <div class="col-sm-6">
                          <div class="input-group date" id="Date_of_installation" name="Date_of_installation">
                              <input type="text"  name='Date_of_installation' id="Date_of_installation" class="form-control" required>
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>  
                    </div>
                  </div>

                     <script type="text/javascript">
                          $(function () {
                              $("#Date_of_installation").datepicker();
                          });
                      </script> 
                      <script>
                      $(function(){
                        $('#Date_of_installation').datepicker({
                            dateFormat: 'yy/mm/dd',
                            changeMonth: true,
                            changeYear: true,
                            maxDate: new Date, 
                            yearRange:'-90:+0'
                        }); 
                      });
                    </script>-->



                <div class="form-group">
                    <label class="control-label col-sm-3">Connection Type</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="Connection_type" id="Connection_type" value="Residential" required>Residential 
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="Connection_type" id="Connection_type" value="Commercial">Commercial
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="Connection_type" id="Connection_type" value="Non-Commercial">Non-Commercial
                                </label>
                            </div> 
                        </div>
                    </div>
                </div> <!-- /.form-group -->

                <div class="form-group">
                        <label for="initial reading" class="col-sm-3 control-label">Initial reading</label>
                    <div class="col-sm-6">
                        <input type="text" name="initial_reading" id="initial_reading" placeholder="Initial reading" class="form-control" required>
                    </div>

                </div><!-- /.form-group -->

                <div class="form-group">
                    <label class="control-label col-sm-3">Multiplication factor<small></small></label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="multiplication_factor" id="multiplication_factor" value="1" required>1 
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="multiplication_factor" id="multiplication_factor" value="10" >10
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="multiplication_factor" id="multiplication_factor" value="100" >100
                                </label>
                            </div> 
                        </div>
                    </div>
                </div> <!-- /.form-group -->

                 <div class="form-group">
                    <label for="connection size" class="col-sm-3 control-label">Connection Size <small>(in inches)</small></label>
                    <div class="col-sm-6">
                        <select id="Connection_size"  name="Connection_size" class="form-control" required>
                            <option value="1/2">1/2</option>
                            <option value="1">1</option>
                            <option value="1/2">1 1/2</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="3/4">3/4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="8">8</option>
                            <option value="10">10</option>
                            <option value="12">12</option>
                           
                        </select>
                    </div>
                </div> <!-- /.form-group -->


                 <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" id="C_Email_id" name="C_Email_id" placeholder="Email" class="form-control" required>
                    </div>
                </div>


                 <div class="form-group">
                    <label for="Mobile Number" class="col-sm-3 control-label">Mobile Number</label>
                    <div class="col-sm-6">
                        <input type="text" id="C_Contact_no" name="C_Contact_no" placeholder="Mobile Number" class="form-control" required>
                    </div>
                </div>

                

                <div class="form-group">
                    <label class="control-label col-sm-3">Billing Status<small></small></label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="Billing_status" name="Billing_status" value="paid" required>Paid 
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="Billing_status" name="Billing_status" value="unpaid" >Unpaid
                                </label>
                            </div>
                             
                        </div>
                    </div>
                </div> <!-- /.form-group -->
            
                <div class="form-group">
                    <label for="Unpaid amount" class="col-sm-3 control-label">Unpaid amount</label>
                    <div class="col-sm-6">
                        <input type="text" id="C_bill_due" name="C_bill_due" placeholder="Unpaid amount (in Rupees)" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-6">
                        <input type="text" id="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="Zone" class="col-sm-3 control-label">Zone</label>
                    <div class="col-sm-6">
                        <input type="text" id="Zone" name="Zone" placeholder="Zone" class="form-control" required>
                    </div>
                </div>


               <button type="submit" class="btn btn-lg btn-outline-info waves-effect center-block" name="submit" value="submit"> Submit</button>


                
           </div> <!-- box body -->
           </form>
          </div>   
       </section>
      </div>

     

      <!-- Main row -->
     
      <!-- /.row (main row) -->




<?php  include 'footer.php'; ?>

