$(function() {
	/**
	* event click - find user
	*/
	$("#btn_fnduser").off("click").on('click', function(e) {
		e.preventDefault();
		// get User Filter
		let usrValue = $("#usr_value").val();
		// validate Length
		if (usrValue.length > 3) {
			// ajax Call: Get USer Info
			$.ajax({
			    type:"POST",
			    url:"index.php",
			    dataType: "json",
			    data:{
			    	reqType: 'ajax',
			    	action: 'getUserInfo',
			    	usrValue: usrValue
			    },
			    success:function(response){
			    	// validate Response
			    	if (response.status == "OK" && response.data != null) {
			    		// console.log(response.data);
				    	$("#usr_name").html(response.data.name);
				    	$("#usr_email").html(response.data.email);
				    	$("#usr_document").html(response.data.document);
				    	$("#usr_country").html(response.data.country_code);
				    	$("#cnt_userinfo").removeClass('d-none');
			        } else {
			        	alert("El usuario no existe en el sistema");
			        }
			        return;
			    }
			})
		}
	});
});