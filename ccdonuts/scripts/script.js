jQuery(function($) {
  $(".navButton").on("click", function() {
      $(this).toggleClass("closeBtn");
      $(".navigation").toggleClass("isOpen");
  });

  // Close drawer when clicking outside of it
  $(document).on("click", function(e) {
      if (!$(e.target).closest(".navButton, .globalNav").length) {
          $(".navButton").removeClass("closeBtn");
          $(".navigation").removeClass("isOpen");
      }
  });
});