  <div class="modal-header text-center" style="background:url(<?php echo asset_url(); ?>images/ts/hiker-984083_1920.jpg) no-repeat center center; background-size:cover;padding: 8% 15px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="top: -11px; position: absolute; right: -15px; opacity: 1;"><img src="<?php echo asset_url(); ?>images/ts/close_deal.png" style="width:30px;"></button>
		<p style="color:#fff;padding: 0 70px;"><span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Get started, Join free, Add a unique value to your business, discover a new vision of e-commerce and much more..!</span></p>
        <h4 class="modal-title" id="myModalLabel" style="color:#fff;"><span style="color:#FFFFFF;font-family:'Arial';font-size:17px; font-weight:bolder;">SOCIAL B2B COMMUNITY</span></h4>
      </div>
      <div class="modal-body" style="padding:0 !important;">
	  <div class="panel therd-step">
         <div class="panel-body">
          <form>
          <h1 class="text-center">
           <span style="color:#2D2D2D;font-family:Arial;font-size:24px;">Congratulation <?php $arr = explode(' ',trim($result['name'])); echo $result['namePrefix'].' '.$arr[0];?></span>
           </h1>
            <p class="text-center"><span style="color:#696969;font-family:Arial;font-size:12px;">Your Account Has Been Created Successfully</span></p>
           <div class="form-group" >
           <div class="row" style="margin:30px 0px">
           <div class="col-xs-12 col-sm-11 col-sm-offset-1">
            <div class="col-xs-2"><img src="<?php echo asset_url(); ?>images/ts/tick-big.png"></div>
            <div class="col-xs-4">
            <span style="color:#2D2D2D;font-family:Arial;font-size:12px;">STATION ID  </span><br>
            <span style="color:#2D2D2D;font-family:Arial;font-size:12px;">Password</span><br>
            <span style="color:#2D2D2D;font-family:Arial;font-size:12px;">Registered Name </span>
            </div>
            <div class="col-xs-6">
            <span style="color:#808080;font-family:Arial;font-size:12px;"><?php echo $result['email'];?></span><br>
            <span style="color:#808080;font-family:Arial;font-size:12px;"><?php echo $result['pass'];?></span><br>
            <span style="color:#808080;font-family:Arial;font-size:12px;"><?php echo  $result['name'];?></span>
            </div>
           </div>
           </div>
           <div class="row" style="margin:0px 0px 20px;">
           <div class="col-xs-12">
            <div class="col-xs-12">
            <span style="color:#696969;font-family:Arial;font-size:11px;">Click On “Get Started” Button To Complete Your Registration And Get Your Own Station To Start Build Your Site, Business Community And Much More.<br><br>Click On “Not Now” Button To Start Your Tour And Discover The Trade Station Features.<br><br>You Can Complete Your Registration Any Time ( Login, Click On Your Picture/Name Displays On The Title Bar, Select My Station).</span>
            </div>
           </div>
           </div> 
           <div class="row text-center">
           <a href="<?php  echo base_url();?>account/personal_info" id="getStarted" name="" value="Get Started" style=" display:inline-block; width:130px;height:31px;    border: 0px #2D2D2D solid;
    background-color: #F05539; color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 12px;padding-top:8px;">Get Started</a>
           <a href="<?php  echo base_url();?>" name="" value="Not Now" id="Button5" style="display:inline-block; margin-left:5px; width:130px;height:31px;border: 0px #2D2D2D solid;
    background-color: #2D2D2D;
    color: #FFFFFF;
    font-family: Arial;
    font-weight: normal;
    font-size: 12px;padding-top:8px;">Not Now</a>
           </div>
           </div>
           
           <!--<div class="row">
            <div class="col-xs-12">
             <h2 class="text-center" style="line-height:0.7"><span style="color:#3C3C3C;font-family:Arial;font-size:11px;">TRADE</span><br>
                 <span style="color:#FA5C43;font-family:Impact;font-size:20px;letter-spacing:0.07px;">STATION</span></h2>
                 <p class="text-center"><span style="color:#696969;font-family:Arial;font-size:11px;">Generating Customers Each Second<br></span></p>
            </div>
           </div>-->
          </form>
         </div>
        </div>
	  </div>
	  
    