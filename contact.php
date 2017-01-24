<?php
$title = "Book2Book | Contact";
include 'include/php/header.php';
function myfputcsv($handle, $array, $delimiter = ',', $enclosure = '"', $eol = "\n")
{
    $return = fputcsv($handle, $array, $delimiter, $enclosure);
    if ($return !== false && "\n" != $eol && 0 === fseek($handle, -1, SEEK_CUR)) {
        fwrite($handle, $eol);
    }
    return $return;
}
if (isset($_POST['action'])) {
    $header=array();
    $data=array();
    foreach (array_slice($_POST, 0, count($_POST)-1) as $key => $value) {
        //$header[]=$key;
     $data[]=$value;
    }
    $fp = fopen('contact.csv', 'a+');
    //fputcsv($fp, $header);
    myfputcsv($fp, $data);
    header("Location: /contact.php");
    fclose($fp);
}
?>
<script type = "javascript">
function reset()
{
  var name = document.getElementById("name");
  var email = document.getElementById("email");
  var phone = document.getElementById("phone");
  var message = document.getElementById("message");

  name.value.reset();
  phone.value.reset();
  message.value.reset();
}
</script>
<style media="screen">


  @media #{$small-and-down} {
    #info{
      margin-top: -16%;
    }
  }
  @media #{$medium-and-up} {
    #info{
      margin-top: -16%;
    }
  }
  @media #{$medium-and-down} {
    #info{
      margin-top: -16%;
    }
  }
  @media #{$large-and-up} {
    #info{
      margin-top: -16%;
    }
  }

</style>
<div class="container">
    <div class="section">

        <p class="caption">Have a question? Don't hesitate to send us a message. Our team will be happy to help you.</p>

        <div class="divider"></div>

        <div id="contact-page" class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img src="https://newevolutiondesigns.com/images/freebies/google-material-design-wallpaper-10.jpg" style="height:400px;">

                <div id="map-canvas" data-lat="70.747688" data-lng="-74.004142"></div>
            </div>
            <div class="card-content">
                <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right" id="info" style="margin-top:-3%;">
                    <i class="material-icons">info</i>
                </a>

                <div class="row">
                    <div class="col s12 m6">
                        <form class="contact-form" action="" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="Name" type="text" name="name">
                                    <label for="Name">* Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" name="email">
                                    <label for="email">* Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="phone" type="text" name="phone">
                                    <label for="phone">* Phone Number</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="message" class="materialize-textarea" name="message"></textarea>
                                    <label for="message">* Message</label>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Send
                             <i class="mdi-content-send right"></i>
                           </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col s12 m6">
                        <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header"><i class="mdi-communication-live-help"></i> FAQ</div>
                                <div class="collapsible-body" style="">
                                    <p>Coming soon.</p>
                                </div>
                            </li>
                            <li class="active">
                                <div class="collapsible-header active"><i class="mdi-communication-email"></i> Need Help?</div>
                                <div class="collapsible-body" style="display: none;">
                                    <p>We welcome your inquiries at the email address <a mailto="ssupport@book2book.hol.es">support@book2book.hol.es</a>.We will get in touch with you soon.</p>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum. <a href="#!" target="_blank">See our work.</a></p> -->
                                </div>
                            </li>
                            <!-- <li>
                       <div class="collapsible-header"><i class="mdi-editor-insert-emoticon"></i> Testimonial</div>
                       <div class="collapsible-body" style="">
                         <blockquote>Fantastic product, my sites all run super fast and the support is excellent!<br>The website you designed helped a lot! </blockquote>
                       </div>
                     </li> -->
                        </ul>
                    </div>
                </div>

            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Book2Book<i class="material-icons right">close</i></span>
                <p>Founding Members</p>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.</p> -->
                <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Anshuman Singh</p>
                <!-- <p><i class="mdi-communication-business cyan-text text-darken-2"></i> lorem ipsum lorem ipsum</p> -->
                <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +91-752486088</p>
                <p><i class="mdi-communication-email cyan-text text-darken-2"></i>anshuman.singh.14me@bml.edu.in</p>
                <div class="divider"></div>
                <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i>Umang Jain</p>
                <!-- <p><i class="mdi-communication-business cyan-text text-darken-2"></i> lorem ipsum lorem ipsum</p> -->
                <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +91-8570031268</p>
                <p><i class="mdi-communication-email cyan-text text-darken-2"></i>umang.jain.14cse@bml.edu.in</p>
                <div class="divider"></div>
                <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i>Amit Garg</p>
                <!-- <p><i class="mdi-communication-business cyan-text text-darken-2"></i> lorem ipsum lorem ipsum</p> -->
                <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +91-9646880151</p>
                <p><i class="mdi-communication-email cyan-text text-darken-2"></i>amit.garg.14me@bml.edu.in</p>

            </div>
        </div>
    </div>
</div>
<?php
include 'include/php/footer.php';
?>
