@extends('question.app')
@section('title') Dashboard @endsection

<style type="text/css">
	@media print{
		#smartwizard .nav{
			display: none;
		}
		button.print{
			display: none;
		}
		.sw-theme-arrows > .sw-toolbar-top{
			display: none;
		}
		.sw-theme-arrows > .sw-toolbar-bottom{
			display: none;
		}
		#step-1{
			display: block;
			visibility: visible;
		}
		#step-2{
			display: block;
			visibility: visible;
		}
		#step-3{
			display: block;
			visibility: visible;
		}
		#step-4{
			display: block;
			visibility: visible;
		}
	}
</style>

<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>

@section('content')
<div class="row">
	<progress id="progressBar" value="0" max="100" style="width:100%;"></progress>
	
	<!-- SmartWizard html -->
    <div id="smartwizard" class="sw-main sw-theme-arrows col-md-12">
        <ul>
            <li><a href="#step-1">Step 1<br /><small>This is step description</small></a></li>
            <li><a href="#step-2">Step 2<br /><small>This is step description</small></a></li>
            <li><a href="#step-3">Step 3<br /><small>This is step description</small></a></li>
            <li><a href="#step-4">Step 4<br /><small>This is step description</small></a></li>
            
        </ul>
        <div>
            <div id="step-1" class="">
                <h3 class="border-bottom border-gray pb-2">Step 1 Content</h3>
                <!-- First Section Start -->
                <form action="" method="post">
                	@csrf
				<div class="card" id="phase1">
					<div class="card-header">
						<h5>
							Part 1. Information About Your Eligibility (Select only one box or your Form N-400 may be delayed)
						</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-1 "><strong>1.</strong></div>
							<div class="col-md-11 mb-2"><h6>You are at least 18 years of age <b>and:</b></h6></div>
						</div>
						<div class="row mt-2">
							<div class="col-md-1 ml-2 "><h6>A. </h6></div>
							<div class="col-md-1"><input type="checkbox" class="a" name="wzc1" value="1"></div>
							<div class="col-md-9">
								<p>Have been a lawful permanent resident of the United States for at least 5 years.</p>
							</div>	
						</div>
						<div class="row mt-2">
							<div class="col-md-1 ml-2 "><h6>B. </h6></div>
							<div class="col-md-1"><input type="checkbox" class="a" name="wzc2" value="1"></div>
							<div class="col-md-9">
								<p>Have been a lawful permanent resident of the United States for at least 3 years. In addition, you have been married to and living with the same U.S. citizen spouse for the last 3 years, and your spouse has been a U.S. citizen for the last 3 years at the time you filed your Form N-400.</p>
							</div>	
						</div>
						<div class="row mt-2">
							<div class="col-md-1 ml-2 "><h6>C. </h6></div>
							<div class="col-md-1"><input type="checkbox"  class="one" name="wzc3" value="1"></div>
							<div class="col-md-9">
								<p>Are a lawful permanent resident of the United States and you are the spouse of a U.S. citizen and your U.S. citizen spouse is regularly engaged in specified employment abroad. (See the Immigration and Nationality Act (INA) section 319(b).) If your residential address is outside the United States and you are filing under Section 319(b), select the USCIS Field Office from the list below where you would like to have your naturalization interview:</p>
								<select class="form-control city" name="wzc3a" style="display: none;" disabled="disabled">
								<option value="Dhaka">Dhaka</option>
								<option value="Comilla">Comilla</option>
								<option value="CTG">CTG</option>
								</select>
							</div>	
						</div>
						<div class="row mt-2">
							<div class="col-md-1 ml-2 "><h6>D. </h6></div>
							<div class="col-md-1"><input type="checkbox" class="a" name="wzc4" value="1"></div>
							<div class="col-md-9">
								<p>Are applying on the basis of qualifying military service.</p>
							</div>	
						</div>
						<div class="row mt-2">
							<div class="col-md-1 ml-2 "><h6>E. </h6></div>
							<div class="col-md-1"><input type="checkbox"  class="two" name="wzc5" value="1"></div>
							<div class="col-md-3">
								<p>Other (Explain):</p>
							</div>
							<div class="col-md-5">
								<select class="form-control other" name="wzc5a" style="display: none;" disabled="disabled">
								<option value="Dhaka">Dhaka</option>
								<option value="Comilla">Comilla</option>
								<option value="CTG">CTG</option>
							</select>
							</div>	
						</div>
					</div>
				</div>
            </div>
            <div id="step-2" class="">
                <h3 class="border-bottom border-gray pb-2">Step 2 Content</h3>
                <!-- sceond section Start-->
				<div class="card" id="phase2">
					<div class="card-header">
						<h5>
							Part 2. Information About You (Person applying for naturalization)
						</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-1 "><strong>1.</strong></div>
							<div class="col-md-11 mb-2"><h6>Your Current Legal Name (<b>do not</b> provide a nickname)</h6></div>
						</div>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-3"><label for="">Family Name (Last Name)</label><input type="text" size="" class="form-control" name="fnl" id=""></div>
							<div class="col-md-3"><label for="">Given Name (First Name)</label><input type="text" size="" class="form-control" name="fnl1" id=""></div>
							<div class="col-md-3"><label for="">Middle Name (if applicable)</label><input type="text" size="" class="form-control" name="fnl2" id=""></div>
						</div>
						<div class="row mt-2">
							<div class="col-md-1 "><strong>2.</strong></div>
							<div class="col-md-11 mb-2"><h6>Your Name Exactly As It Appears on Your Permanent Resident Card (if applicable)</h6></div>
						</div>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-3"><label for="">Family Name (Last Name)</label><input type="text" size="" class="form-control" name="fnl3" id=""></div>
							<div class="col-md-3"><label for="">Given Name (First Name)</label><input type="text" size="" class="form-control" name="fnl4" id=""></div>
							<div class="col-md-3"><label for="">Middle Name (if applicable)</label><input type="text" size="" class="form-control" name="fnl5" id=""></div>
						</div>
						<div class="row mt-2">
							<div class="col-md-1 "><strong>3.</strong></div>
							<div class="col-md-11 mb-2"><h6>Other Names You Have Used Since Birth (include nicknames, aliases, and maiden name, if applicable)</h6></div>
						</div>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-3">
								<label for="">Family Name (Last Name)</label>
								<input type="text" size="" class="form-control" name="fnl6" id="">
								<input type="text" size="" class="form-control" name="fnl7" id="">
							</div>
							<div class="col-md-3">
								<label for="">Family Name (Last Name)</label>
								<input type="text" size="" class="form-control" name="fnl8" id="">
								<input type="text" size="" class="form-control" name="fnl9" id="">
							</div>
							<div class="col-md-3">
								<label for="">Family Name (Last Name)</label>
								<input type="text" size="" class="form-control" name="fnl10" id="">
								<input type="text" size="" class="form-control" name="fnl11" id="">
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-md-1 "><strong>4.</strong></div>
							<div class="col-md-11 mb-2"><h6>Name Change (Optional)</h6></div>
							<div class="col-md-1 "></div>
							<div class="col-md-11 mb-2"><h6><strong>Read the Form N-400 Instructions before you decide whether or not you would like to legally change your name.</strong></h6></div>
						</div>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-7">Would you like to legally change your name?</div>
							<div class="col-md-2"><input type="checkbox"  class="three" name="wzc6" value="1"> Yes </div>
							<div class="col-md-2"><input type="checkbox"  class="one" name="wzc7" value="0"> No </div>
						</div>
						<div class="optional-name mt-2" style="display: none;">
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-11">
									<strong>
										If you answered "Yes," type or print the new name you would like to use in the spaces provided below.
									</strong>
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-md-1"></div>
								<div class="col-md-3">
									<label for="">Family Name (Last Name)</label>
									<input type="text" size="40" class="opnr form-control" name="fnl12" id="" disabled="disabled">
								</div>
								<div class="col-md-3">
									<label for="">Given Name (First Name)</label>
									<input type="text" size="40" class="opnr form-control" name="fnl13" id="" disabled="disabled">
								</div>
								<div class="col-md-3">
									<label for="">Middle Name (if applicable)</label>
									<input type="text" size="40" class="opnr form-control" name="fnl14" id="" disabled="disabled">
								</div>
							</div>
						</div>
						<br>
						<div class="row mt-2">
							<div class="col-md-1"><strong>5.</strong></div>
							<div class="col-md-5">
								<label for=""><h6>U.S. Social Security Number (if applicable)</h6></label>
								<input type="text" size="40" class="form-control" name="fnl15" id="" maxlength="9" placeholder="#########">
							</div>
								<div class="col-md-1"><strong>6.</strong></div>
							<div class="col-md-5">
								<label for=""><h6>USCIS Online Account Number (if any)</h6></label>
								<input type="text" size="40" class="form-control" name="fnl16" id="" maxlength="9" placeholder="#########">
							</div>
						</div>
							<br>
						<div class="row mt-2">
							<div class="col-md-1"><strong>7.</strong></div>
							<div class="col-md-2">
								<label for=""><h6>Gender</h6></label><br>
								<input type="radio"  class="three" name="wzc8" value="1"> Male <input type="radio"  class="one" name="wzc8" value="0"> Female 
							</div>
							<div class="col-md-1"><strong>8.</strong></div>
							<div class="col-md-3">
								<label for=""><h6>Date of Birth <br> (mm/dd/yyyy)</h6></label>
								 <input type="date"  name="fnbd" class="form-control">
							</div>
							<div class="col-md-1"><strong>9.</strong></div>
							<div class="col-md-4">
								<label for=""><h6> Date You Became a Lawful <br>Permanent Resident (mm/dd/yyyy)</h6></label>
								 <input type="date"  name="fnbd1" class="form-control">
							</div>
						</div>
						<br>
						<div class="row mt-2">
							<div class="col-md-1"><strong>10.</strong></div>
							<div class="col-md-5">
								<label for=""><h6>Country of Birth</h6></label><br>
								<select name="fnl17" id="" class="form-control">
									<option value="Bangladesh">Bangladesh</option>

									<option value="Unitade Arab Amirat">Unitade Arab Amirat</option>
									<option value="Pakistan">Pakistan</option>

									<option value="Saudia Arabia">Saudia Arabia</option>
									<option value="Afganistan">Afganistan</option>
								</select>
							</div>
							<div class="col-md-1"><strong>11.</strong></div>
							<div class="col-md-5">
								<label for=""><h6>Country of Citizenship or Nationality</h6></label><br>
								<select name="fnl18" id="" class="form-control">
									<option value="Bangladesh">Bangladesh</option>

									<option value="Unitade Arab Amirat">Unitade Arab Amirat</option>
									<option value="Pakistan">Pakistan</option>

									<option value="Saudia Arabia">Saudia Arabia</option>
									<option value="Afganistan">Afganistan</option>
								</select>
							</div>
						</div><br>

						<div class="row">
							<div class="col-md-1"><strong>12.</strong></div>
							<div class="col-md-7">
								<p> Do you have a physical or developmental disability or mental impairment that prevents you from demonstrating your knowledge and understanding of the English language and/or civics requirements for naturalization?</p>
							</div>
							<div class="col-md-2"><input type="checkbox"  class="four" name="wzc10" value="1"> Yes </div>
							<div class="col-md-2"><input type="checkbox"  class="one" name="wzc11" value="0"> No </div>
							<div class="col-md-1"></div>
							<div class="col-md-11 four-none" style="display: none;"><p>If you answered "Yes," submit a completed Form N-648, Medical Certification for Disability Exceptions, when you file your Form N-400.</p></div>
						</div><br>

						<div class="row mt-2">
							<div class="col-md-1"><strong>13.</strong></div>
							<div class="col-md-11"><h6>Exemptions from the English Language Test</h6></div>

							<div class="col-md-1"></div>
							<div class="col-md-1"><strong>A.</strong></div>
							<div class="col-md-8 "><p>Are you 50 years of age or older and have you lived in the United States as a lawful permanent resident for periods totaling at least 20 years at the time you file your Form N-400?</p>
							</div>
							<div class="col-md-1"><input type="checkbox"  class="one" name="wzc12" value="1"> Yes </div>
							<div class="col-md-1"><input type="checkbox"  class="one" name="wzc13" value="0"> No </div>
						

							<div class="col-md-1"></div>
							<div class="col-md-1"><strong>B.</strong></div>
							<div class="col-md-8 "><p>Are you 55 years of age or older and have you lived in the United States as a lawful permanent resident for periods totaling at least 15 years at the time you file your Form N-400?</p>
							</div>
							<div class="col-md-1"><input type="checkbox"  class="one" name="wzc14" value="1"> Yes </div>
							<div class="col-md-1"><input type="checkbox"  class="one" name="wzc15" value="0"> No </div>


							<div class="col-md-1"></div>
							<div class="col-md-1"><strong>C.</strong></div>
							<div class="col-md-8 "><p>Are you 65 years of age or older and have you lived in the United States as a lawful permanent resident for periods totaling at least 20 years at the time you file your Form N-400? (If you meet this requirement, you will also be given a simplified version of the civics test.)</p>
							</div>
							<div class="col-md-1"><input type="checkbox"  class="one" name="wzc16" value="1"> Yes </div>
							<div class="col-md-1"><input type="checkbox"  class="one" name="wzc17" value="0"> No </div>
						</div>
					</div>
				</div>
            </div>
            <div id="step-3" class="">
               <h3 class="border-bottom border-gray pb-2">Step 3 Content</h3>
				<!-- Third Section Start -->
				<div class="card" id="phase3">
					<div class="card-header">
						<h5>
							Part 3. Accommodations for Individuals With Disabilities and/or Impairments
						</h5>
					</div>
					<div class="card-body">
						<h5 class="card-title">
							<strong>NOTE:</strong> Read the information in the Form N-400 Instructions before completing this part. </h5>
						<div class="row">
							<div class="col-md-8"> <span>1.</span> Are you requesting an accommodation because of your disabilities and/or impairments?</div>
							<div class="col-md-2"><input type="checkbox"  class="five" name="wzc18" value="1"> Yes </div>
							<div class="col-md-2"><input type="checkbox"  class="one" name="wzc19" value="0"> No </div>
						</div><br>
						<div class="five-none" style="display: none;">
							<p>
								If you answered "Yes," select any applicable box.
							</p><br>
							<div class="row">
								<div class="col-md-1 ml-2"><h5>A. </h5></div>
								<div class="col-md-1"><input type="checkbox" name="wzc20" value="1" class="five-opnr five-one" ></div>
								<div class="col-md-8"><p>I am deaf or hard of hearing and request the following accommodation. (If you are requesting a sign-language interpreter, indicate for which language (for example, American Sign Language).)</p>
								</div>
								<div class="row five-one-none" style="display: none;">
									<div class="col-md-3"></div>
									<div class="col-md-9" >
										<input type="text" name="fnl19" id="" class="form-control" size="95">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1 ml-2"><h5>B. </h5></div>
								<div class="col-md-1"><input type="checkbox" name="wzc21" value="1" class="five-opnr five-two" ></div>
								<div class="col-md-8"><p>I am blind or have low vision and request the following accommodation:</p>
								</div>
								<div class="row five-two-none" style="display: none;">
									<div class="col-md-3"></div>
									<div class="col-md-9" >
										<input type="text" name="fnl20" id="" class="form-control" size="95">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1 ml-2"><h5>C. </h5></div>
								<div class="col-md-1"><input type="checkbox" name="wzc22" value="1" class="five-opnr five-three" ></div>
								<div class="col-md-8"><p>I have another type of disability and/or impairment (for example, use a wheelchair). (Describe the nature of your disability and/or impairment and the accommodation you are requesting.)</p>
								</div>
								<div class="row five-three-none" style="display: none;">
									<div class="col-md-3"></div>
									<div class="col-md-9" >
										<input type="text" name="fnl21" id="" class="form-control" size="95">
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
            </div>
            <div id="step-4" class="">
                <h3 class="border-bottom border-gray pb-2">Step 4 Content</h3>
				<!-- Four Section Start -->
				<div class="card" id="phase4">
					<div class="card-header">
						<h5>
							Part 4. Information to Contact You
						</h5>
					</div>
					<div class="card-body">
					<div class="row">
						<div class="col-md-1"><strong>1.</strong></div>
						<div class="col-md-5">
							<label for="">Daytime Telephone Number</label><br>
							<input type="text" name="fnl22" id="" class="form-control">
						</div>
						<div class="col-md-1"><strong>2.</strong></div>
						<div class="col-md-5">
							<label for="">Work Telephone Number (if any)</label><br>
							<input type="text" name="fnl23" id="" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-1"><strong>3.</strong></div>
						<div class="col-md-5">
							<label for="">Evening Telephone Number</label><br>
							<input type="text" name="fnl24" id="" class="form-control">
						</div>
						<div class="col-md-1"><strong>4.</strong></div>
						<div class="col-md-5">
							<label for="">Mobile Telephone Number (if any)</label><br>
							<input type="text" name="fnl25" id="" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-1"><strong>5.</strong></div>
						<div class="col-md-5">
							<label for="">Email Address (if any)</label><br>
							<input type="email" name="fnl26" id="" class="form-control">
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-5"></div>	
					</div>
					<br>
					</div>
					
				</div>
				<button class="print btn btn-success">Print</button>
            </div>
			
        </div>
    </div>
</form>
</div>
	<!-- First Section end -->
	
	<!-- Four Section End -->
</div>
@endsection
<script type="text/javascript">

$(document).ready(function(){


	$("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
       //alert("You are on step "+stepNumber+" now");
       if(stepPosition === 'first'){
           $("#prev-btn").addClass('disabled');
       }else if(stepPosition === 'final'){
           $("#next-btn").addClass('disabled');
       }else{
           $("#prev-btn").removeClass('disabled');
           $("#next-btn").removeClass('disabled');
       }
    });

    // Toolbar extra buttons
    var btnFinish = $('<button class="finish-button"></button>').text('Finish')
         .addClass('btn btn-info')
         .on('click', function(){ alert('Finish Clicked'); });
    var btnCancel = $('<button></button>').text('Cancel')
         .addClass('btn btn-danger')
         .on('click', function(){ $('#smartwizard').smartWizard("reset"); });

    // Smart Wizard
    $('#smartwizard').smartWizard({
        selected: 0,
        theme: 'default',
        transitionEffect:'fade',
        showStepURLhash: true,
        toolbarSettings: {toolbarPosition: 'both',
                          toolbarButtonPosition: 'end',
                          toolbarExtraButtons: [btnFinish, btnCancel]
                        }
    });
    var progressBar = $("#progressBar");
    var progress = 0;
    // External Button Events
    $(".sw-btn-next").on('click',function(){
    	progress += 25;
    	if(progress > 100){
    		progress = 100;
    	}
    	progressBar.attr('value',progress);
    });
    $(".sw-btn-prev").on('click',function(){
    	progress -= 25;
    	if(progress < 0){
    		progress = 0;
    	}
    	progressBar.attr('value',progress);
    });

    $(".print").on('click',function(){
    	$("#step-1").show();
    	$("#step-2").show();
    	$("#step-3").show();
    	$("#step-4").show();
    	window.print();
    });

	$(".one").on('click',function(){
		var thisProperty = $(this);
		var city = $(".city");
		if(thisProperty.prop('checked')){
			city.show();
			city.removeAttr('disabled');
		}
		else{
			city.hide();
			city.attr('disabled','disabled');
		}
	});
	$(".two").on('click',function(){
		var thisProperty = $(this);
		var other = $(".other");
		if(thisProperty.prop('checked')){
			other.show();
			other.removeAttr('disabled');
		}
		else{
			other.hide();
			other.attr('disabled','disabled');
		}
	});

	$(".three").on('click',function(){
		var thisProperty = $(this);
		var opn = $(".optional-name");
		var opnr = $(".opnr");
		if(thisProperty.prop('checked')){
			opn.show();
			opnr.removeAttr('disabled');
		}
		else{
			opn.hide();
			opnr.attr('disabled','disabled');
		}
	});
	$(".four").on('click',function(){
		var thisProperty = $(this);
		var opn = $(".four-none");
		if(thisProperty.prop('checked')){
			opn.show();
		}
		else{
			opn.hide();
		}
	});
	$(".five").on('click',function(){
		var thisProperty = $(this);
		var opn = $(".five-none");
		var opnr = $(".five-opnr");
		if(thisProperty.prop('checked')){
			opn.show();
			opnr.removeAttr('disabled');
		}
		else{
			opn.hide();
			opnr.attr('disabled','disabled');
		}
	});
		$(".five-one").on('click',function(){
		var thisProperty = $(this);
		var opn = $(".five-one-none");
		if(thisProperty.prop('checked')){
			opn.show();
		}
		else{
			opn.hide();
		}
	});
		$(".five-two").on('click',function(){
		var thisProperty = $(this);
		var opn = $(".five-two-none");
		if(thisProperty.prop('checked')){
			opn.show();
		}
		else{
			opn.hide();
		}
	});
		$(".five-three").on('click',function(){
		var thisProperty = $(this);
		var opn = $(".five-three-none");
		if(thisProperty.prop('checked')){
			opn.show();
		}
		else{
			opn.hide();
		}
	});
});
</script>
<script>
	function processPhase1(value){

		_("progressBar").value = value;
}

</script>