$(function() {

	$.validator.addMethod(
	        "regex",
	        function(value, element, regexp) {
	            var re = new RegExp(regexp);
	            return this.optional(element) || re.test(value);
	        },
	        "Please check your input."
	);

	$("#form").validate({

		rules: {

			name : 
			{
				required     : true,
				maxlength    : 200,
			},
			email: 
			{
				required : true,
				email    : true,
				maxlength    : 200,
				remote  : 
	            {
	                url: url + '/signup/-1',
	                type: "PUT"
	            }
			},
			mobile: 
			{
				required  : true,
				minlength : 10,
				maxlength : 20,
				regex     : /^\d{10}$/
			},
			password: 
			{
				required  : true,
				minlength : 6
			},
			password_confirmation: {
            	equalTo: "#password"
            }
		},

		messages: {

			name : 
			{
				required  : "Please enter your full name",
				maxlength : "Your full name must be not be more than 200 characters long"
			},
			email : 
			{
				required  : "Please enter your email",
				email     : "Please enter a valid email address",
				maxlength : "Your email must be not be more than 200 characters long",
		        remote    : "Entered email already exist."
			},
			password : 
			{
				required  : "Please provide a password",
				minlength : "Your password must be at least 6 characters long"
			},
			mobile : "Please enter a valid mobile number",
			password_confirmation : "Confirm password is not same as password"
		},

		submitHandler: function(form) {
			form.submit();
		}
	});

});