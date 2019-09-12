   <!-- Loading Header-->	
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" lang="en-us" dir="ltr" >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
	      
      <title> 
            Alka Infotech       </title>
      
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta property='og:url' content='sitemap.html'/>
     <meta property='og:locale' content='en_US'/>
    <meta property='og:type' content='article'/>  
    <meta property='og:site_name' content='Alka Infotech'/>
	<link href='assets/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='assets/images/meta_icons/apple-touch-icon.html' rel='apple-touch-icon-precomposed'>
    <!-- / required stylesheets -->
    <link href="assets/stylesheets/bootstrap/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/stylesheets/tptheme2.css?v=1.1" media="all" id="colors" rel="stylesheet" type="text/css" />
    

</head>
  <body class='homepage'>
  <div  itemscope="" itemtype="http://data-vocabulary.org/Review-aggregate" style="display:none;background:#2F3C53;margin-top: 10px;color: #e1e1e1; margin-bottom:0px !important; padding:10px;text-align:center; font-size:15px;line-height:1.2em;"><span itemprop="rating" itemscope="" itemtype="http://data-vocabulary.org/Rating">Rated <span itemprop="average">5.0</span> out of <span itemprop="best">5.0</span> </span>for <span itemprop="itemreviewed">Mobile Development</span> by <span itemprop="votes">500</span>+ clients on over <span itemprop="count">1000</span>+ projects.</div>     
  <div id='wrapper'>
      <div id='header'>
				<div class='container'>
					<nav class='navbar navbar-default' id='nav' role='navigation'>
						<div class='navbar-header'>
						  <button class='navbar-toggle' data-target='.navbar-header-collapse' data-toggle='collapse' type='button'>
							<span class='sr-only'>Toggle navigation</span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
						  </button>
							<a class='navbar-brand' title="Web Development Company, Website Designing Company" href='index.php'>
							<img alt="Web Design Company Bangalore"  src="assets/images/logo.png" />
						  </a>
						</div>
						<!-- // Menu Starts Here //-->
					<?php include("header.php"); ?>

					<!-- // Menu Ends Here //-->
					</nav>
				</div>
			</div>
<!--// Header-->	
<!--Page Content-->
	<div id='main' role='main' class="inner-template">	
        <div id='main-content-header'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-12'>
                <h1 class='title'>
                Sitemap
                </h1>
              </div>
            </div>
          </div>
        </div>
	<div id='main-content'>
            <div class='container'>
		  <div class="col-md-push-9 col-sm-push-8 col-sm-4 col-md-3">
                <nav class="sidebar">
                  <button class="btn btn-block btn-contrast sidebar-toggle" data-target=".sidebar-collapse" data-toggle="collapse" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <div class="sidebar-collapse collapse">                   
                    <div class="box">
                     
			
                       <div class="service-frm">
        <h3 class="title">Request a Quote</h3>

        <form onsubmit="return checkFile()" class="form form-validation" method="post" action="http://www.alkainfotech.com/sitemap.php" enctype="multipart/form-data" >

            <input type="hidden" name="sidebar_request" value="YES">

        <div class="form-group control-group">
         <input class="form-control" data-rule-required="true" id="comment_name" name="name" placeholder="Enter your name" type="text">
        </div>


        <div class="form-group control-group">
        <input class="form-control" data-rule-required="true" id="comment_company" name="company" placeholder="Enter your company name" type="text">
        </div>


        <div class="form-group control-group">
        <input class="form-control" data-rule-email="true" data-rule-required="true" id="comment_email" name="email" placeholder="Enter your email" type="text">
        </div>


        <div class="form-group control-group">
        <input class="form-control" id="comment_website" name="phone" data-rule-required="true"   data-rule-number="true"  placeholder="Enter your phone" type="text">
        </div>

        <div class="form-group control-group">
         <select name="projectType" class="form-control">	
           <option selected="selected">Mobile App Development</option>
           <option>Web App Development</option>
           <option>Ecommerce Website</option>
           <option>Web Design / CMS</option>
           <option>SEO &amp; Social Media</option>
           <option>Dedicated Resources</option>
           <option>Logo / Stationary Design</option>
           <option>Others</option>
         </select>
        </div>
        <div class="form-group control-group">
            <label id="file-att-label" for="fileField">(We do not accept exe files)</label>   
            <input class="upload1" id="file-attach" name="doc1" type="file" title="Upload file" >
            <br /><span id="file-type-error"></span>
        <div class="clear"></div>
        </div>
        <div class="form-group control-group">
        <textarea class="form-control" data-rule-required="true" id="comment_message" name="description" placeholder="Project Description" rows="5"></textarea>
        </div>
		<div class="clear"></div>

        <div class="text-center quote-req-btn"><button type="submit" class="service-frm-submit">Submit Request</button></div>
        </form>
       
</div>
<script>
        
	$(document).ready(function(){
                $("#comment_name").on("keyup",function(){
                    value = $("#comment_name").val();
                    c =  value.replace(/[^a-zA-Z ]/g,'');
                    $("#comment_name").val(c);
                });
        }); 
    
    function checkFile()
   {
        var FileName  = document.getElementById("file-attach").value;
        var FileExt = FileName.substr(FileName.lastIndexOf('.')+1);
        var FileSize = document.getElementById("file-attach").files[0].size;
        var FileSizeMB = (FileSize/10485760).toFixed(2);

             if (FileExt == "exe")
             {
                document.getElementById("file-type-error").innerHTML = "We do not accept exe files.";
                return false;
             }
             else if(FileSize>10485760)
             {
                document.getElementById("file-type-error").innerHTML = "File size should be less than 10mb.";
                return false;
             }    
        document.getElementById("file-type-error").innerHTML = "";
        return true;
    }
                
        
</script>                      
                 
                      
                    </div>				 
				  </div>
                </nav>
              </div>                
		  
		  
                  
                 <div class="col-md-pull-3 col-sm-pull-4 col-sm-8 col-md-9">  
                  <div class="row">
                                     
                     
                      
                      <div class="col-sm-3 list-group non_bor_list">
                          <h5 class="title">Company</h5>
                        <a class="list-group-item" href="AboutUs.html">
                        <i class="fa-icon-angle-right fa-icon-fixed-width"></i>
                        About us
                        </a>
                        <a class="list-group-item" href="process.html">
                        <i class="fa-icon-angle-right fa-icon-fixed-width"></i>
                        Process
                        </a>
						</div>
						<div class="col-sm-5 list-group non_bor_list">
						<h5 class="title">Solutions & Services</h5>
						<a class="list-group-item" href="Consulting.html">
                        <i class="fa-icon-angle-right fa-icon-fixed-width"></i>
                        Dedicated Team
                        </a>
                        <a class="list-group-item" href="enterprise-mobility.html">
                        <i class="fa-icon-angle-right fa-icon-fixed-width"></i>
                        Enterprise Mobility
                        </a>
                        <a class="list-group-item" href="application-development.html">
                        <i class="fa-icon-angle-right fa-icon-fixed-width"></i>
                        Application Development
                        </a>
                        <a class="list-group-item" href="application-management.html">
                        <i class="fa-icon-angle-right fa-icon-fixed-width"></i>
                        Application Management &amp; Maintenance
                        </a>
                        <a class="list-group-item" href="BusinessSolutions.html">
                        <i class="fa-icon-angle-right fa-icon-fixed-width"></i>
                        Business Process Solutions
                        </a>
                        <a class="list-group-item" href="Web_Design.html">
                        <i class="fa-icon-angle-right fa-icon-fixed-width"></i>
                        Design &amp; Usability
                        </a>
                        <a class="list-group-item" href="web-design-development.html">
                        <i class="fa-icon-angle-right fa-icon-fixed-width"></i>
                        Web Design &amp; Development
                        </a>
                        <a class="list-group-item" href="social-marketing.html">
                        <i class="fa-icon-angle-right fa-icon-fixed-width"></i>
                        Social Marketing
                        </a>
                       
					</div>
					<div class="col-sm-4 list-group non_bor_list addpaddtohd">
							<a href="index.php"> <h6 class="title">Home</h6></a>
                          <a href="Consulting.html"> <h6 class="title">Consulting</h6></a>
                          <a href="labs.html"> <h6 class="title">Labs</h6></a>
                          <a href="#"> <h6 class="title">Blog</h6></a>
                          <a href="contact_us.html"> <h6 class="title">Contact us</h6></a>
</div>
                      </div>
                      </div>



	    </div>
	</div>
			
		</div>
        <div class='fade' id='scroll-to-top'>
          <i class='fa-icon-chevron-up'></i>
        </div>
      </div>
 <!--// Page Content-->	
<!-- Loading Footer-->	  
      	<!--  //Footer starts heere -->		
		<?php include("footer.php"); ?>
	<!--  //Footer Ends heere -->
	</div>
	<div class="modal fade" id="thankyou" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						
						<div class="modal-body">
							<div class="section-subheading mg-b">Thank you for request.</div>
                            <p> Awesome! We have got your quote request and will get back to you as soon as we can.</p>
						</div>
						<div class="modal-footer">
							 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					
				</div>
				
			</div>
			<div class="modal fade" id="codeerror" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						
						<div class="modal-body">
						
                            <p>Invalid Verification Code. Please Try Again!</p>
						</div>
						<div class="modal-footer">
							 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					
				</div>
				
			</div>
			<link href="assets/stylesheets/fontcss.css" media="all" id="colors" rel="stylesheet" type="text/css" />
	
    
    <!-- / required javascripts -->
    <script src="assets/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/jquery/jquery.mobile.custom.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/modernizr/modernizr.custom.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/hover_dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/retina/retina.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/isotope/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/isotope/jquery.isotope.sloppy-masonry.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/validate/jquery.validate.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/flexslider/jquery.flexslider.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/countdown/countdown.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/lightbox/lightbox.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/cycle/jquery.cycle.all.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/jednotka.js" type="text/javascript"></script>
	<script src="assets/javascripts/sny_custom.js" type="text/javascript"></script>
    
    <script>
    $(window).scroll(function(){
    if ($(this).scrollTop() > 188) {
       $('#header').addClass('headerbg');
    } else {
       $('#header').removeClass('headerbg');
    }
	});
    </script>
    
<script> 
$(document).ready(function(){

  
  $("#newsletter_email").keypress(function(e) {
    if(e.which == 13) {
        save_subscribe_details();
        return false;
    }
  });
  
  
});
</script> 
<script>
function save_subscribe_details()
{
	  email = document.getElementById("newsletter_email").value;

	  if(email == "")
	  {
	  	alert("Please enter the Email address");
		return false;
	  }	
	  
   	  var email_reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

      if (email_reg.test(email) == false) 
      {
            alert('Invalid Email Address');
            return false;
      }	  
	  

	  $.post("subscribe_newsletter.html",{email_req:email},function(result){
	    	document.getElementById("newsletter_email").value = "";
                if(result == 1)
                {
                    $("#subscribe_success").css("display","block");
                    $("#subscribe_success").fadeOut(8000);
                }
                else
                {
                    $("#subscribe_error").css("display","block");
                    $("#subscribe_error").fadeOut(8000);
                }
                return false;
	  });
}

function close_popup()
{
            window.location.href = "sitemap.html";
      
}

</script>

<script type="text/javascript" src="assets/javascripts/bootstrap.file-input.js"></script>
<script>
	$(document).ready(function(){
		$('input[type=file]').bootstrapFileInput();

        
                $("#comment_name").on("keyup",function(){
                    value = $("#comment_name").val();
                    c =  value.replace(/[^a-zA-Z ]/g,'');
                    $("#comment_name").val(c);
                });
        });
        
        
   function checkFile()
   {
        var FileName  = document.getElementById("file-attach").value;
        var FileExt = FileName.substr(FileName.lastIndexOf('.')+1);
        var FileSize = document.getElementById("file-attach").files[0].size;
        var FileSizeMB = (FileSize/10485760).toFixed(2);

             if (FileExt == "exe")
             {
                document.getElementById("file-type-error").innerHTML = "We do not accept exe files.";
                return false;
             }
             else if(FileSize>10485760)
             {
                document.getElementById("file-type-error").innerHTML = "File size should be less than 10mb.";
                return false;
             }    
        document.getElementById("file-type-error").innerHTML = "";
        return true;
    }
                
        
</script>

<!-- SessionCam Client Integration v6.0 -->
<script type="text/javascript">
//<![CDATA[
var scRec=document.createElement('SCRIPT');
scRec.type='text/javascript';
scRec.src="../d2oh4tlt9mrke9.cloudfront.net/Record/js/sessioncam.recorder.js";
document.getElementsByTagName('head')[0].appendChild(scRec);
//]]>
</script>
<!-- End SessionCam -->
 </body>
</html>
<!--// Footer-->	      
	  
<script>
    $(document).ready(function(){
		$('body').addClass('business_process');
		//$('.inner-template').addClass('hasbg');
	})
</script>