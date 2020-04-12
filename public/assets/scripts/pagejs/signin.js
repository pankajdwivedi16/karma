$("#form").validate({
    rules: {
        email: 
        {
            required: true,
            email   : true,
            maxlength    : 200,
            remote  : 
            {
                url: url + '/signin/-1',
                type: "PUT"
            }
        },
        password:
        {
            required  : true,
            minlength : 6,
            remote    : 
            {
                url: url + '/signin/-2',
                type: "PUT",
                data:
                {
                  email    : function()
                  {
                      return $('#form :input[name="email"]').val();
                  },
                  password : function()
                  {
                      return $('#form :input[name="password"]').val();
                  }
                }
            }
        },
    },
    messages: {
      email: 
      {
        required: "Please provide a email",
        email   : "Please enter a valid email address",
        remote  : "Entered email does not exist.",
        maxlength : "Your email must be not be more than 200 characters long",
      },
      password: 
      {
        required : "Please provide a password",
        minlength: "Your password must be at least 6 characters long",
        remote   : "Entered password is incorrect"
      },
    },
    submitHandler: function(form) {
      form.submit();
    }
});