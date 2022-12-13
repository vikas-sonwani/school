		function getDistrictList(){
		    var state = $('#state').val();
		    $.get('/getDistrict?states_id='+state,function(data){
		        if(data.error==false){
		          let str = data.res;
		          $('#district').html(str);      
		        }
		      })
		 }

		function removeRoundMapping(id) {
			if (confirm("Are you sure you want to remove this mapping?") == true) {
				$.get('/removeMapping?round_mapping_id='+id,function(data){
			        alert(data.res);
			        location.reload();
			    })
			}
  		}

  		function removeEventImage(id) {
			if (confirm("Are you sure you want to remove this media?") == true) {
				$.get('/removeEventImage?event_image_id='+id,function(data){
			        alert(data.res);
			        location.reload();
			    })
			}
  		}



		  $(function () {

			$('#photo').bind('change', function() {
				if (this.files[0].size > 300000) {
				  	$("#photo-error").html('<span class="badge bg-danger">Invalid file size. Please select photo lower then 300kb size.</span>');
				}else{
				  	$("#photo-error").html('<span class="badge bg-success">Valid file size.</span>');
				}
			});

			$('#signature').bind('change', function() {
				if (this.files[0].size > 300000) {
				  	$("#signature-error").html('<span class="badge bg-danger">Invalid file size. Please select signature lower then 300kb size.</span>');
				}else{
				  	$("#signature-error").html('<span class="badge bg-success">Valid file size.</span>');
				}
			});

			$('#idproof').bind('change', function() {
				if (this.files[0].size > 300000) {
				  	$("#idproof-error").html('<span class="badge bg-danger">Invalid file size. Please select ID Proof lower then 300kb size.</span>');
				}else{
				  	$("#idproof-error").html('<span class="badge bg-success">Valid file size.</span>');
				}
			});

			$('#dobproof').bind('change', function() {
				if (this.files[0].size > 300000) {
				  	$("#dobproof-error").html('<span class="badge bg-danger">Invalid file size. Please select DOB Proof lower then 300kb size.</span>');
				}else{
				  	$("#dobproof-error").html('<span class="badge bg-success">Valid file size.</span>');
				}
			});

			$('#a2').bind('change', function() {
				if (this.files[0].size > 300000) {
				  	$("#a2-error").html('<span class="badge bg-danger">Invalid file size. Please select file lower then 300kb size.</span>');
				}else{
				  	$("#a2-error").html('<span class="badge bg-success">Valid file size.</span>');
				}
			});

			$('#b2').bind('change', function() {
				if (this.files[0].size > 300000) {
				  	$("#b2-error").html('<span class="badge bg-danger">Invalid file size. Please select file lower then 300kb size.</span>');
				}else{
				  	$("#b2-error").html('<span class="badge bg-success">Valid file size.</span>');
				}
			});

			$('#c2').bind('change', function() {
				if (this.files[0].size > 300000) {
				  	$("#c2-error").html('<span class="badge bg-danger">Invalid file size. Please select file lower then 300kb size.</span>');
				}else{
				  	$("#c2-error").html('<span class="badge bg-success">Valid file size.</span>');
				}
			});

			$('#d2').bind('change', function() {
				if (this.files[0].size > 300000) {
				  	$("#d2-error").html('<span class="badge bg-danger">Invalid file size. Please select file lower then 300kb size.</span>');
				}else{
				  	$("#d2-error").html('<span class="badge bg-success">Valid file size.</span>');
				}
			});

			$('#e2').bind('change', function() {
				if (this.files[0].size > 300000) {
				  	$("#e2-error").html('<span class="badge bg-danger">Invalid file size. Please select file lower then 300kb size.</span>');
				}else{
				  	$("#e2-error").html('<span class="badge bg-success">Valid file size.</span>');
				}
			});

			$('#f2').bind('change', function() {
				if (this.files[0].size > 300000) {
				  	$("#f2-error").html('<span class="badge bg-danger">Invalid file size. Please select file lower then 300kb size.</span>');
				}else{
				  	$("#f2-error").html('<span class="badge bg-success">Valid file size.</span>');
				}
			});

			$('#g2').bind('change', function() {
				if (this.files[0].size > 300000) {
				  	$("#g2-error").html('<span class="badge bg-danger">Invalid file size. Please select file lower then 300kb size.</span>');
				}else{
				  	$("#g2-error").html('<span class="badge bg-success">Valid file size.</span>');
				}
			});



		    $('input[name="hq"]:radio').change(function () {
		    	var hq = $("input[name='hq']:checked").val();
		    	if (hq == 'yes') {
		    		$('#a1').removeClass('d-none');
					$('#a2').attr('required', true);
					$('#higher_qualification_name').attr('required', true);
		    	}else{
		    		$('#a1').addClass('d-none')
					$('#a2').attr('required', false); 
					$('#higher_qualification_name').attr('required', false);
		    	}
		    });

		    $('input[name="yhq"]:radio').change(function () {
		    	var yhq = $("input[name='yhq']:checked").val();
		    	if (yhq == 'yes') {
		    		$('#b1').removeClass('d-none');
					$('#b2').addClass('required')
					$('#b2').attr('required', true);
					$('#yoga_higher_qualification_name').attr('required', true);
		    	}else{
		    		$('#b1').addClass('d-none')
					$('#b2').attr('required', false); 
					$('#yoga_higher_qualification_name').attr('required', false);
		    	}
		    });

		    $('input[name="aoq"]:radio').change(function () {
		    	var aoq = $("input[name='aoq']:checked").val();
		    	if (aoq == 'yes') {
		    		$('#c1').removeClass('d-none');
					$('#c2').attr('required', true); 
					$('#other_qualification_name').attr('required', true); 
		    	}else{
		    		$('#c1').addClass('d-none')
		    		$('#c2').attr('required', false); 
					$('#other_qualification_name').attr('required', false); 
		    	}
		    });

		     $('input[name="yp"]:radio').change(function () {
		    	var yp = $("input[name='yp']:checked").val();
		    	if (yp == 'yes') {
		    		$('#d1').removeClass('d-none');
					$('#d2').attr('required', true); 
					$('#achivement_player_name').attr('required', true); 
					$('#yogasana_levels').attr('required', true);
		    	}else{
		    		$('#d1').addClass('d-none')
		    		$('#d2').attr('required', false); 
					$('#achivement_player_name').attr('required', false); 
					$('#yogasana_levels').attr('required', false);
		    	}
		    });

		    $('input[name="os"]:radio').change(function () {
		    	var os = $("input[name='os']:checked").val();
		    	if (os == 'yes') {
		    		$('#e1').removeClass('d-none');
					$('#e2').attr('required', true); 
					$('#other_sports_name').attr('required', true);
					$('#other_levels').attr('required', true);
		    	}else{
		    		$('#e1').addClass('d-none')
					$('#e2').attr('required', false); 
					$('#other_sports_name').attr('required', false);
					$('#other_levels').attr('required', false);
		    		
		    	}
		    });


		    $('input[name="ecor"]:radio').change(function () {
		    	var ecor = $("input[name='ecor']:checked").val();
		    	if (ecor == 'yes') {
		    		$('#f1').removeClass('d-none');
					$('#f2').attr('required', true); 
					$('#experience_certificate_name').attr('required', true);
					$('#experience_certificate').attr('required', true);
		    	}else{
		    		$('#f1').addClass('d-none')
					$('#f2').attr('required', false); 
					$('#experience_certificate_name').attr('required', false);
					$('#experience_certificate').attr('required', false);
		    		
		    	}
		    });

		    $('input[name="coachinyoga"]:radio').change(function () {
		    	var coachinyoga = $("input[name='coachinyoga']:checked").val();
		    	if (coachinyoga == 'yes') {
		    		$('#g1').removeClass('d-none');
					$('#g2').attr('required', true); 
					$('#coach_certificate_name').attr('required', true);
					$('#coach_certificate').attr('required', true);
		    	}else{
		    		$('#g1').addClass('d-none')
					$('#g2').attr('required', false); 
					$('#coach_certificate_name').attr('required', false);
					$('#coach_certificate').attr('required', false);
		    		
		    	}
		    });


		});