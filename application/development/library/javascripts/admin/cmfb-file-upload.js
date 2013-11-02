/**
 * Custom Meta Field Boxes File Upload
 * ========================================================================
 * cmfb-file-upload.js
 * @license MIT license
 * ======================================================================== */
(function ($) {
  $('.custom_upload_file_button').click(function () {
    var $formField = $(this).siblings('.custom_upload_file');
    tb_show('Select a File', 'media-upload.php?type=image&TB_iframe=true');
    window.send_to_editor = function (html) {
      var $fileUrl = $(html).attr('href');
      $formField.val($fileUrl);
      tb_remove();
    };
    return false;
  });
  $('.custom_clear_file_button').click(function () {
    $(this)
      .parent()
      .siblings('.custom_upload_file')
      .val('');
    return false;
  });
}(jQuery));
