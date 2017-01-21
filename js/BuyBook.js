$('.datepicker').pickadate({
    min: new Date(),
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year
    firstDay: 1
  });

var picker = $('#beginDate').pickadate('picker');
picker.set('select', new Date());
var picker = $('#endDate').pickadate('picker');
picker.set('select', new Date());


 $('select').material_select();
 $("#formValidate").validate({
         rules: {
             fname: {
                 required: true,
                 minlength: 5
             },
             cemail: {
                 required: true,
                 email:true
             },
             password: {
 				required: true,
 				minlength: 5
 			},
 			cpassword: {
 				required: true,
 				minlength: 5,
 				equalTo: "#password"
 			},
 			curl: {
                 required: true,
                 url:true
             },
             crole:"required",
             ccomment: {
 				required: true,
 				minlength: 15
             },
             cgender:"required",
 			cagree:"required",
         },
         //For custom messages
         messages: {
             uname:{
                 required: "Enter a username",
                 minlength: "Enter at least 5 characters"
             },
             curl: "Enter your website",
         },
         errorElement : 'div',
         errorPlacement: function(error, element) {
           var placement = $(element).data('error');
           if (placement) {
             $(placement).append(error)
           } else {
             error.insertAfter(element);
           }
         }
      });
