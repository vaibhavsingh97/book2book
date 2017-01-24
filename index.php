<?php
$title = "Book2Book | Home";
include 'include/php/header.php';
?>
<main>
  <div class="section"></div>
  <div class="section"></div>
  <div class="section"></div>
      <div class="container">
         <div class="section">
             <div class="row">
               <div class="col s12 m6 grid">
                 <figure class="effect-bubba">
                   <img src="img/seller.jpg" alt="img02"/>
                   <figcaption>
                     <h2>Seller</h2>
                     <p>Sell Book</p>
                     <a href="https://goo.gl/forms/1vFO329YmG2IlAXI2">Sell</a>
                   </figcaption>
                 </figure>
               </div>
               <div class="col s12 m6 grid">
                 <figure class="effect-bubba">
                   <img src="img/buyer.jpg" alt="img16"/>
                   <figcaption>
                     <h2>Buyer</h2>
                     <p>Buy Book</p>
                     <a href="https://goo.gl/forms/YDDFiH1wHWboPqCB3">Buy</a>
                   </figcaption>
                 </figure>
               </div>
             </div>
         </div>
       </div>
       <div class="row">
           <h5 style="text-align:center;font-weight:bold;">Disclaimer</h5>
             <div class="container">
               <p class="light" style="display: flex;align-items: center;justify-content: center;">
                 <ul>
                   <li>1. If book is in non-readable condition it will not be accepted.</li>
                   <li>2. Money will be provided in the given duration.</li>
                   <li>3. Check condition of the books there only once you bought no return policy will be there.</li>
                   <li>4. No books that belongs to University library will be entertained.</li>
                   <li>5. Estimated price can be varied dependent on demand and buyer.</li>
                   <li>6. If pen/pencil or any writing material is used on at least 60% of the book 15% cost will be reduced.</li>
                 </ul>
               </p>
             </div>
         </div>
</main>
<script type="javascript">



// <!-- Modal Trigger -->
// <a class="waves-effect waves-light btn indigo" href="#modal1" >Disclaimer</a>

// <!-- Modal Structure -->
// <div id="modal1" class="modal">
//   <div class="modal-content" style="float:center;">
//     <h4 style="font-family: 'Raleway', sans-serif;">Disclaimer</h4>
//     <div class="divider">
//
//     </div>
//     <p class="flow-text" style="display: flex;text-align:justify;">
//       <ul>
//         <li>1.&nbsp; If book is in non-readable condition it will not be accepted.</li>
//         <li>2.&nbsp; Money will be provided in the given duration.</li>
//         <li>3.&nbsp; Check condition of the books there only once you bought no return policy will be there.</li>
//         <li>4.&nbsp; No books that belongs to University library will be entertained.</li>
//         <li>5.&nbsp; Estimated price can be varied dependent on demand and buyer.</li>
//         <li>6.&nbsp; If pen/pencil or any writing material is used on at least 60% of the book 15% cost will be reduced.</li>
//       </ul>
//     </p>
//   </div>
  // <div class="modal-footer">
  //   <a href="#!" class=" modal-action modal-close waves-effect waves-indigo btn-flat">Agree</a>
  // </div>
// </div>
      /*
       * Masonry container for Gallery page
       */
      var $containerGallery = $(".masonry-gallery-wrapper");
      $containerGallery.imagesLoaded(function() {
        $containerGallery.masonry({
            itemSelector: '.gallary-item img',
           columnWidth: '.gallary-sizer',
           isFitWidth: true
        });
      });

      //popup-gallery
      $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: true,
        fixedContentPos: true,
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile mfp-no-margins mfp-with-zoom',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
          verticalFit: true,
          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
          titleSrc: function(item) {
            return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
          },
        zoom: {
          enabled: true,
          duration: 300 // don't foget to change the duration also in CSS
        }
        }
      });

    </script>

<?php
include 'include/php/footer.php';
?>
