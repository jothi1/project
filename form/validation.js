jQuery.validator.setDefaults({
    debug:true,
    success:"valid"
});
$(document).ready(function()
{
    // jQuery.validator.addMethod("phonenu", function (phone_number, element) {
    //     phone_number = phone_number.replace(/\s+/g, "");
    //     return this.optional(element) || phone_number.length > 9 &&
    //           phone_number.match(/^\(?[0-9 +-]+$ [\d\s]{3}-[\d\s]{3}-[\d\s]{4}$/);
    // }, "Invalid phone number");
    jQuery.validator.addMethod("name1", function(value,element){
        if(/^[a-zA-Z ]+$/.test(value)){
            return true;
        }
        else{
            return false;
        };
    },
    );
    jQuery.validator.addMethod("phonenu", function (phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, "");
        return this.optional(element) || phone_number.length > 9 &&
        phone_number.match(/^(0|91)?[6-9][0-9]{9}$/);
    }, "Please specify a valid phone number");

    $("#myform").validate(
        {
            rules: {
                fname:{
                required:true,
                minlength:4,
                name1:true
            },
            lname:{
                required:true,
               
            },
            phno:{
                required:true,
                phonenu:true
            },
            mail:{
                required:true,
                email:true,
                email1:true
            },
            gender:{
                required:true
            },
            hq:{
                required:true
            },
            per:{
                required:true
            },Dno:{
                required:true
            },
            street:{
                required:true
            },
            pin:{
                required:true
            }
        },
        messages:{
            fname:{
                required:"name is required....",
                minlength:"Please enter 4 characters",
                name1:"enter characters only,numbers not allowed"
            },
            lname:{
                required:"Lastname is required...",
                
            },
            phno:{
                required:'Please enter valid phone no',
                phonenu:"please enter phone no '0/91-123-123-1234' formet"
                
            },
            mail:{
                required:"Email is required",
                email1:"Enter valid mail address"
               
            },
            gender:{
                required:"plese select your gender"
            
            },
            hq:{
                required:"Plese select your highest qualification"
            },per:{
                required:"please enter your percentage"
            },
            Dno:{
                required:"dno is required"
            },street:{
                required:"street name is required"

        },
        pin:{
            required:"enter pincode"
        }
        }
      });
}) ; 
