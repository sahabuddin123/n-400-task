@extends('question.app')
@section('title') Dashboard @endsection

<style type="text/css">
	@media print{
		#smartwizard .nav{
			display: none;
		}
		#finish-button{
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
	
<?php
//print_r($data);
?>


	<progress id="progressBar" value="0" max="100" style="width:100%;"></progress>
     
                <!-- First Section Start -->
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
							<div class="col-md-1"><input type="checkbox" class="a" name="wzc1"
									@if($data->wzc1 == 1) checked  @endif
								></div>
							<div class="col-md-9">
								<p>Have been a lawful permanent resident of the United States for at least 5 years.</p>
							</div>	
						</div>
						<div class="row mt-2">
							<div class="col-md-1 ml-2 "><h6>B. </h6></div>
							<div class="col-md-1"><input type="checkbox" class="a" name="wzc2" value="1"
								@if($data->wzc2 == 1) checked  @endif></div>
							<div class="col-md-9">
								<p>Have been a lawful permanent resident of the United States for at least 3 years. In addition, you have been married to and living with the same U.S. citizen spouse for the last 3 years, and your spouse has been a U.S. citizen for the last 3 years at the time you filed your Form N-400.</p>
							</div>	
						</div>
						<div class="row mt-2">
							<div class="col-md-1 ml-2 "><h6>C. </h6></div>
							<div class="col-md-1"><input type="checkbox"  class="one" name="wzc3" @if($data->wzc3 == 1) checked @endif></div>
							<div class="col-md-9">
								<p>Are a lawful permanent resident of the United States and you are the spouse of a U.S. citizen and your U.S. citizen spouse is regularly engaged in specified employment abroad. (See the Immigration and Nationality Act (INA) section 319(b).) If your residential address is outside the United States and you are filing under Section 319(b), select the USCIS Field Office from the list below where you would like to have your naturalization interview:</p>
								<select class="form-control city" @if($data->wzc3 == 1) select  @endif>
								<option value="">{{$data->wzc3a}}</option>
								
								</select>
							</div>	
						</div>
						<div class="row mt-2">
							<div class="col-md-1 ml-2 "><h6>D. </h6></div>
							<div class="col-md-1"><input type="checkbox" class="a" @if($data->wzc4 == 1) checked  @endif></div>
							<div class="col-md-9">
								<p>Are applying on the basis of qualifying military service.</p>
							</div>	
						</div>
						<div class="row mt-2">
							<div class="col-md-1 ml-2 "><h6>E. </h6></div>
							<div class="col-md-1"><input type="checkbox"  class="two"  @if($data->wzc5 == 1) checked  @endif ></div>
							<div class="col-md-3">
								<p>Other (Explain):</p>
							</div>
							<div class="col-md-5">
								<select class="form-control other"  @if(isset($data->wzc5)) select  @endif >
								<option>{{$data->wzc5a}}</option>
								
							</select>
							</div>	
						</div>
					</div>
				</div>
  </div>
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
							<div class="col-md-3"><label for="">Family Name (Last Name)</label><input type="text" size="" class="form-control" name="fnl" value="{{$data->fnl}}" ></div>
							<div class="col-md-3"><label for="">Given Name (First Name)</label><input type="text" size="" class="form-control" name="fnl1" value="{{$data->fnl1}}"></div>
							<div class="col-md-3"><label for="">Middle Name (if applicable)</label><input type="text" size="" class="form-control" name="fnl2" value="{{$data->fnl2}}"></div>
						</div>
						<div class="row mt-2">
							<div class="col-md-1 "><strong>2.</strong></div>
							<div class="col-md-11 mb-2"><h6>Your Name Exactly As It Appears on Your Permanent Resident Card (if applicable)</h6></div>
						</div>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-3"><label for="">Family Name (Last Name)</label><input type="text" size="" class="form-control" name="fnl3" id=""value="{{$data->fnl3}}"></div>
							<div class="col-md-3"><label for="">Given Name (First Name)</label><input type="text" size="" class="form-control" name="fnl4" id=""value="{{$data->fnl4}}"></div>
							<div class="col-md-3"><label for="">Middle Name (if applicable)</label><input type="text" size="" class="form-control" name="fnl5" id=""value="{{$data->fnl5}}"></div>
						</div>
						<div class="row mt-2">
							<div class="col-md-1 "><strong>3.</strong></div>
							<div class="col-md-11 mb-2"><h6>Other Names You Have Used Since Birth (include nicknames, aliases, and maiden name, if applicable)</h6></div>
						</div>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-3">
								<label for="">Family Name (Last Name)</label>
								<input type="text" size="" class="form-control" name="fnl6" id="" value="{{$data->fnl6}}">
								<input type="text" size="" class="form-control" name="fnl7" id="" value="{{$data->fnl7}}">
							</div>
							<div class="col-md-3">
								<label for="">Family Name (Last Name)</label>
								<input type="text" size="" class="form-control" name="fnl8" id="" value="{{$data->fnl8}}">
								<input type="text" size="" class="form-control" name="fnl9" id="" value="{{$data->fnl9}}">
							</div>
							<div class="col-md-3">
								<label for="">Family Name (Last Name)</label>
								<input type="text" size="" class="form-control" name="fnl10" id="" value="{{$data->fnl10}}">
								<input type="text" size="" class="form-control" name="fnl11" id="" value="{{$data->fnl11}}">
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
							<div class="col-md-2"><input type="checkbox"  class="three" name="wzc6"  @if($data->wzc6 == 1) checked  @endif> Yes </div>
							<div class="col-md-2"><input type="checkbox"  class="one" name="wzc7" @if($data->wzc7 == 0) checked  @endif> No </div>
						</div>
						<div class="optional-name mt-2">
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
									<input type="text" size="40" class="opnr form-control" name="fnl12" id="" value="{{$data->fnl12}}">
								</div>
								<div class="col-md-3">
									<label for="">Given Name (First Name)</label>
									<input type="text" size="40" class="opnr form-control" name="fnl13" id="" value="{{$data->fnl13}}">
								</div>
								<div class="col-md-3">
									<label for="">Middle Name (if applicable)</label>
									<input type="text" size="40" class="opnr form-control" name="fnl14" id="" value="{{$data->fnl14}}">
								</div>
							</div>
						</div>
						<br>
						<div class="row mt-2">
							<div class="col-md-1"><strong>5.</strong></div>
							<div class="col-md-5">
								<label for=""><h6>U.S. Social Security Number (if applicable)</h6></label>
								<input type="text" size="40" class="form-control" name="fnl15" value="{{$data->fnl15}}" maxlength="9" placeholder="#########">
							</div>
								<div class="col-md-1"><strong>6.</strong></div>
							<div class="col-md-5">
								<label for=""><h6>USCIS Online Account Number (if any)</h6></label>
								<input type="text" size="40" class="form-control" name="fnl16" value="{{$data->fnl16}}" maxlength="9" placeholder="#########">
							</div>
						</div>
							<br>
						<div class="row mt-2">
							<div class="col-md-1"><strong>7.</strong></div>
							<div class="col-md-2">
								<label for=""><h6>Gender</h6></label><br>
								<input type="radio"  class="three" @if($data->wzc8 == 1) checked  @endif> Male <input type="radio"  class="one" @if( $data->wzc8 == 0) checked  @endif> Female 
							</div>
							<div class="col-md-1"><strong>8.</strong></div>
							<div class="col-md-3">
								<label for=""><h6>Date of Birth <br> (mm/dd/yyyy)</h6></label>
								 <input type="date"  name="fnbd" value="{{$data->fnbd}}" class="form-control">
							</div>
							<div class="col-md-1"><strong>9.</strong></div>
							<div class="col-md-4">
								<label for=""><h6> Date You Became a Lawful <br>Permanent Resident (mm/dd/yyyy)</h6></label>
								 <input type="date"  name="fnbd1" value="{{$data->fnbd}}" class="form-control">
							</div>
						</div>
						<br>
						<div class="row mt-2">
							<div class="col-md-1"><strong>10.</strong></div>
							<div class="col-md-5">
								<label for=""><h6>Country of Birth</h6></label><br>
								<select class="form-control other"  @if(isset($data->fnl17)) select  @endif >
								<option>{{$data->fnl17}}</option>
								</select>
							</div>
							<div class="col-md-1"><strong>11.</strong></div>
							<div class="col-md-5">
								<label for=""><h6>Country of Citizenship or Nationality</h6></label><br>
								<select class="form-control other"  @if(isset($data->fnl18)) select  @endif >
								<option>{{$data->fnl18}}</option>
								</select>
							</div>
						</div><br>

						<div class="row">
							<div class="col-md-1"><strong>12.</strong></div>
							<div class="col-md-7">
								<p> Do you have a physical or developmental disability or mental impairment that prevents you from demonstrating your knowledge and understanding of the English language and/or civics requirements for naturalization?</p>
							</div>
							<div class="col-md-2"><input type="checkbox"  class="four" name="wzc10" @if($data->wzc10 == 1) checked  @endif> Yes </div>
							<div class="col-md-2"><input type="checkbox"  class="one" name="wzc11" @if($data->wzc11 == 0) checked  @endif> No </div>
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
							<div class="col-md-1"><input type="checkbox"  class="one" name="wzc12" @if($data->wzc12 == 1) checked  @endif> Yes </div>
							<div class="col-md-1"><input type="checkbox"  class="one" name="wzc13" @if($data->wzc13 == 0) checked  @endif> No </div>
						

							<div class="col-md-1"></div>
							<div class="col-md-1"><strong>B.</strong></div>
							<div class="col-md-8 "><p>Are you 55 years of age or older and have you lived in the United States as a lawful permanent resident for periods totaling at least 15 years at the time you file your Form N-400?</p>
							</div>
							<div class="col-md-1"><input type="checkbox"  class="one" name="wzc14" @if($data->wzc14 == 1) checked  @endif> Yes </div>
							<div class="col-md-1"><input type="checkbox"  class="one" name="wzc15" @if($data->wzc15 == 0) checked  @endif> No </div>


							<div class="col-md-1"></div>
							<div class="col-md-1"><strong>C.</strong></div>
							<div class="col-md-8 "><p>Are you 65 years of age or older and have you lived in the United States as a lawful permanent resident for periods totaling at least 20 years at the time you file your Form N-400? (If you meet this requirement, you will also be given a simplified version of the civics test.)</p>
							</div>
							<div class="col-md-1"><input type="checkbox"  class="one" name="wzc16" @if($data->wzc16 == 1) checked  @endif> Yes </div>
							<div class="col-md-1"><input type="checkbox"  class="one" name="wzc17" @if($data->wzc17 == 0) checked  @endif> No </div>
						</div>
					</div>
				</div>


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
							<div class="col-md-2"><input type="checkbox"  class="five" name="wzc18" @if($data->wzc18 == 0) checked  @endif> Yes </div>
							<div class="col-md-2"><input type="checkbox"  class="one" name="wzc19" @if($data->wzc19 == 0) checked  @endif> No </div>
						</div><br>
						<div class="five-none">
							<p>
								If you answered "Yes," select any applicable box.
							</p><br>
							<div class="row">
								<div class="col-md-1 ml-2"><h5>A. </h5></div>
								<div class="col-md-1"><input type="checkbox" name="wzc20" class="five-opnr five-one"  @if( $data->wzc20 == 1) checked  @endif></div>
								<div class="col-md-8"><p>I am deaf or hard of hearing and request the following accommodation. (If you are requesting a sign-language interpreter, indicate for which language (for example, American Sign Language).)</p>
								</div>
								<div class="row five-one-none">
									<div class="col-md-3"></div>
									<div class="col-md-9" >
										<input type="text" name="fnl19" value="{{$data->fnl19}}" class="form-control" size="95">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1 ml-2"><h5>B. </h5></div>
								<div class="col-md-1"><input type="checkbox" name="wzc21" class="five-opnr five-two" @if($data->wzc21 == 1) checked  @endif></div>
								<div class="col-md-8"><p>I am blind or have low vision and request the following accommodation:</p>
								</div>
								<div class="row five-two-none">
									<div class="col-md-3"></div>
									<div class="col-md-9" >
										<input type="text" name="fnl20" value="{{$data->fnl20}}" class="form-control" size="95">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1 ml-2"><h5>C. </h5></div>
								<div class="col-md-1"><input type="checkbox" name="wzc22" class="five-opnr five-three" @if( $data->wzc22 == 1) checked  @endif></div>
								<div class="col-md-8"><p>I have another type of disability and/or impairment (for example, use a wheelchair). (Describe the nature of your disability and/or impairment and the accommodation you are requesting.)</p>
								</div>
								<div class="row five-three-none">
									<div class="col-md-3"></div>
									<div class="col-md-9" >
										<input type="text" name="fnl21" value="{{$data->fnl21}}" class="form-control" size="95">
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>

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
							<input type="text" name="fnl22" value="{{$data->fnl22}}" class="form-control">
						</div>
						<div class="col-md-1"><strong>2.</strong></div>
						<div class="col-md-5">
							<label for="">Work Telephone Number (if any)</label><br>
							<input type="text" name="fnl23" value="{{$data->fnl23}}" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-1"><strong>3.</strong></div>
						<div class="col-md-5">
							<label for="">Evening Telephone Number</label><br>
							<input type="text" name="fnl24" value="{{$data->fnl24}}" class="form-control">
						</div>
						<div class="col-md-1"><strong>4.</strong></div>
						<div class="col-md-5">
							<label for="">Mobile Telephone Number (if any)</label><br>
							<input type="text" name="fnl25" value="{{$data->fnl25}}" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-1"><strong>5.</strong></div>
						<div class="col-md-5">
							<label for="">Email Address (if any)</label><br>
							<input type="email" name="fnl26" value="{{$data->fnl26}}" class="form-control">
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-5"></div>	
					</div>
					<br>
					</div>
				</div>
				
				<button type="submit" id="finish-button" class="btn btn-primary finish-button">Print</button>
        </div>

@endsection
<script type="text/javascript">

$(document).ready(function(){




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

    $(".finish-button").on('click',function(){
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

		$("#step-1").show();
    	$("#step-2").show();
    	$("#step-3").show();
    	$("#step-4").show();
    	window.print();
});
</script>
<script>
	function processPhase1(value){

		_("progressBar").value = value;
}

</script>