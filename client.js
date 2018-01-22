jQuery(document).ready(function() {

    console.log('JS working');

   jQuery('grid-item').hover(function() {
       console.log('in here');
       jQuery('preview-image-details').addClass('is-active');
   })
});