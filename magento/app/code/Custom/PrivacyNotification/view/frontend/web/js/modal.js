require(['jquery'], function ($) {
  $(document).ready(function () {
      $('#accept-privacy').click(function () {
          $.ajax({
              url: '/privacy/accept',
              type: 'POST',
              success: function () {
                  $('#privacy-modal').hide();
              }
          });
      });
  });
});
