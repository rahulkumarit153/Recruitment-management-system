
<html>
<head>
<script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script type="text/javascript">
 /*
function validateForm()
{
	
	var C_Index_no=document.f1.C_Index_no.value;		
	var C_Name=document.f1.C_Name.value;
	var Meter_id=document.f1.Meter_id.value;
	var C_Address=document.f1.C_Address.value;
	var Site_id=document.f1.Site_id.value;
	var Connection_status=document.f1.Connection_status.value;
	var family_member=document.f1.family_member.value;
	var Date_of_installation=document.f1.Date_of_installation.value;
	var Connection_type=document.f1.Connection_type.value;
	var reading=document.f1.reading.value;
	var multiplication_factor=document.f1.multiplication_factor.value;
	var Connection_size=document.f1.Connection_size.value;
	var C_Email_id=document.f1.C_Email_id.value;
	var C_Contact_no=document.f1.C_Contact_no.value;
	var Billing_status=document.f1.Billing_status.value;
	var C_Bill_due=document.f1.C_Bill_due.value;
	
	
	
	    if ( C_Index_no=="" ) 
		{
        window.alert("Index No must be filled out");
        return false;
   		}
		
		if (  C_Name=="" ) 
		{
        window.alert("Name must be filled out");
        return false;
   		}
		
		if ( Meter_id=="" ) 
		{
        window.alert("Meter_id must be filled out");
        return false;
   		}
		if ( C_Address=="" ) 
		{
        window.alert("Address must be filled out");
        return false;
   		}
		if ( Site_id=="" ) 
		{
        window.alert("Site_id must be filled out");
        return false;
   		}
		
		if (Connection_status=="" ) 
		{
        window.alert("Connection_Status must be filled out");
        return false;
   		}
		if (Date_of_installation=="" ) 
		{
        window.alert("Connection_Status must be filled out");
        return false;
   		}
		
		if (Connection_type=="" ) 
		{
        window.alert("Connection_type must be filled out");
        return false;
   		}
		if (reading=="" ) 
		{
        window.alert("reading must be filled out");
        return false;
   		}
		if (multiplication_factor=="" ) 
		{
        window.alert("multiplication_factor must be filled out");
        return false;
   		}
		if (Connection_size=="" ) 
		{
        window.alert("Connection_size must be filled out");
        return false;
   		}
		
		if (C_Email_id=="" ) 
		{
        window.alert("C_Email_id must be filled out");
        return false;
   		}
		
		if (C_Contact_no=="" ) 
		{
        window.alert("C_Contact_no must be filled out");
        return false;
   		}
		if (Billing_status=="" ) 
		{
        window.alert("Billing_status must be filled out");
        return false;
   		}
		if (C_Bill_due=="" ) 
		{
        window.alert("C_Bill_due must be filled out");
        return false;
   		}
		
	
	if(family_member=="select")
	{
		
		window.alert("Family Member must be Selected");
        return false;
	}
	//return true;
}*/
</script>

</head>
<body>
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
        <li class="active">
          <a href="consumer_details.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-plus-circle"></i> <span>Register</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="reg_meter.php"><i class="fa fa-circle-o"></i> Meter</a></li>
            <li><a href="reg_con.php"><i class="fa fa-circle-o"></i> Consumer</a></li>
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
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     
      <!-- /.row -->
      <div class="row" ng-app = "mainApp" ng-controller = "studentController"> 
      <section class= "col-lg-12">
            <div class="box box-default">
              <div class="box-header with-border">
              <h3 class="box-title"><strong> Register Consumer</strong></h3>                
              </div><!-- /.box-header -->

            <form name="f1"  method="post" action="save_con.php" class="form-horizontal" role="form" style=" padding: 15px; margin: 0 auto; background-color: #fff; border-radius: 0.5em;" >

           <div class="box-body" >
           		 <div class="form-group">
                    <label for="Consumer Index Number" class="col-sm-3 control-label">Consumer Index Number</label>
                    <div class="col-sm-6">
                        <input type="text" id ="C_Index_no" name="C_Index_no" placeholder="Consumer Index Number" class="form-control" ng-model = "firstName" required >
                        <span style = "color:red" ng-show = "studentForm.firstname.$dirty && studentForm.firstname.$invalid">
                        <span ng-show = "studentForm.firstname.$error.required">First Name is required.</span>
                     </span>
                    </div>
                </div>
				
				        <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Consumer Full Name</label>
                    <div class="col-sm-6">
                        <input type="text" id="C_Name" name="C_Name" placeholder="Full Name" class="form-control" autofocus>
                        <span class="help-block">For eg. Last name - first name - middle name</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="meterId" class="col-sm-3 control-label">Meter Id</label>
                    <div class="col-sm-6">
                        <input type="text" id="Meter_id"  name="Meter_id" placeholder="Enter Meter id" class="form-control" >
                    </div>
                </div>
                 

                 <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-6">
                        <input type="textarea" id="C_Address" rows="2" name="C_Address" placeholder="Full Address" class="form-control">
                    </div>
                </div>

                 <div class="form-group">
                    <label for="Site id" class="col-sm-3 control-label">Pin code</label>
                    <div class="col-sm-6">
                        <input type="text" name="Site_id" id="Site_id" placeholder="Pin code of area" class="form-control">
                    </div>
                </div>

                

                <div class="form-group">
                    <label class="control-label col-sm-3">Connection status</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="Connection_status" id="Connection_status" value="active">Active 
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="Connection_status" id="Connection_status" value="Deactive">Deactive
                                </label>
                            </div>
                             
                        </div>
                    </div>
                </div> <!-- /.form-group -->

                <div class="form-group">
                    <label for="Number of family members" class="col-sm-3 control-label">Family members <small>(in numbers including children)</small></label>
                    <div class="col-sm-6">
                        <select id="family_member" name="family_member" roes="2" class="form-control">
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
                </div> <!-- /.form-group -->

                <div class="form-group">
                    <label for="Meter manufacturecomp" class="col-sm-3 control-label">Meter installation date</label>
                    <div class="col-sm-6">
                        <input type="date" name="Date_of_installation" id="Date_of_installation" placeholder="Meter installation date" class="form-control">
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-3">Connection Type</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="Connection_type" id="Connection_type" value="Residential">Residential 
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
                        <input type="text" name="reading" id="reading" placeholder="Initial reading" class="form-control">
                    </div>

                </div><!-- /.form-group -->

                <div class="form-group">
                    <label class="control-label col-sm-3">Multiplication factor<small></small></label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="multiplication_factor" id="multiplication_factor" value="1">1 
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="multiplication_factor" id="multiplication_factor" value="10">10
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="multiplication_factor" id="multiplication_factor" value="100">100
                                </label>
                            </div> 
                        </div>
                    </div>
                </div> <!-- /.form-group -->

                 <div class="form-group">
                    <label for="connection size" class="col-sm-3 control-label">Connection Size <small>(in inches)</small></label>
                    <div class="col-sm-6">
                        <select id="Connection_size"  name="Connection_size" class="form-control">
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
                        <input type="email" id="C_Email_id" name="C_Email_id" placeholder="Email" class="form-control">
                    </div>
                </div>


                 <div class="form-group">
                    <label for="Mobile Number" class="col-sm-3 control-label">Mobile Number</label>
                    <div class="col-sm-6">
                        <input type="text" id="C_Contact_no" name="C_Contact_no" placeholder="Mobile Number" class="form-control">
                    </div>
                </div>

                

                <div class="form-group">
                    <label class="control-label col-sm-3">Billing Status<small></small></label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="Billing_status" name="Billing_status" value="paid">Paid 
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="Billing_status" name="Billing_status" value="unpaid">Unpaid
                                </label>
                            </div>
                             
                        </div>
                    </div>
                </div> <!-- /.form-group -->
            
                <div class="form-group">
                    <label for="Unpaid amount" class="col-sm-3 control-label">Unpaid amount</label>
                    <div class="col-sm-6">
                        <input type="text" id="C_Bill_due" name="C_Bill_due" placeholder="Unpaid amount (in Rupees)" class="form-control">
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
</section>
</div>
</body>
</html>


