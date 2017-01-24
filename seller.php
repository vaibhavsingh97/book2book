<?php
$title = "Book2Book | Seller";
include 'include/php/header.php';
?>
<script type="text/javascript">
    $("#formValidate").validate({
        rules: {
            uname: {
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
    </script>

<main>

</main>
<!-- <main>
  <iframe sandbox="allow-same-origin allow-scripts allow-popups allow-forms allow-modals" src="https://docs.google.com/a/bml.edu.in/forms/d/e/1FAIpQLSew05jFC-Nkgw5FOhchF7wF4Eo95yfEQaF3262PybTeIZhugA/viewform?embedded=true" width="100%" height="1080" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
</main> -->
<?php
include 'include/php/footer.php';
?>
