<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Andrew Falsado">
<meta name="keywords" content="">
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#2e2422" />
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#2e2422">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#2e2422">

<!-- Title Page-->
<title>SignGen - Signature Generator</title>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="https://signgen.wiser4media.com/css/app.css" rel="stylesheet">

</head>
<body id="app-layout">
    	<div id="main-content-wrapper">
		<section>
			<div class="container" style="max-width: 800px;margin-top: 20px;">
				<div style="margin: 0 auto 40px; text-align: center;">
				</div>
	           	<div class="panel panel-default card shadow">
					<div class="panel-heading section-title card-header" style="text-align: center;">
						<h4 class="panel-title">Email Signature Generator</h4>
				    </div>
				    <div id="info-details" class="panel-content">
				      	<div class="panel-body card-body">
                          <form action="#" method="POST">
                             @csrf
				      	 <div class="row">
								<div class="col-sm-6 form-group">
									<input type="text"  class="form-control required" name=fullname value="" maxlength="50" placeholder="Full Name"/>
								</div>
								<div class="col-sm-6 form-group">
									<input type="text" style="max-width: 445px;" class="form-control required" name="position" value="" maxlength="200" placeholder="Position"/>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4 form-group">
									<input type="text"  class="form-control" name="mobile" value="" maxlength="20" placeholder="Mobile"/>
								</div>
								<div class="col-sm-4 form-group">
									<input type="text"  class="form-control" name="phone" value="" maxlength="20" placeholder="Phone"/>
								</div>
                                <div class="col-sm-4 form-group">
									<input type="text"  class="form-control" name="mainphone" value="" maxlength="20" placeholder="Main Phone"/>
								</div>
								<div class="col-sm-4 form-group">
									<input type="text"  class="form-control" name="email" value="" maxlength="100" data-validate="email" placeholder="Email"/>
								</div>
                                <div class="col-sm-4 form-group">
									<input type="text" style="max-width: 690px;" class="form-control" name="skype" value="" maxlength="1000" placeholder="Skype ID"/>
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-12 form-group">
									<textarea class="form-control" rows="2" name="address">Mega Freight Pty Ltd | 9 Lillee Crescent, Tullamarine 3043 VIC Australia PO Box 569, Tullamarine 3043 VIC Australia</textarea>
								</div>
							</div>
														<div class="row">
								<div class="col-sm-12 form-group">
									<input type="checkbox" name="for_outlook" value="1"/><label>For Outlook Signature</label>
								</div>
							</div>
							<div class="control-buttons">
								<button class="btn btn-primary">save</button>
							</div>
						</form>
				      	</div>
				    </div>
				</div>
	        </div>
	    </section>
    </div>
       
</body>
<script src="https://signgen.wiser4media.com/js/app.js"></script>
</html>