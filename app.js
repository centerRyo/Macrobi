$(function() {
  // 文字数カウント
  $('.js-count-text').on('keyup', function() {
    var count = $(this).val().length;

    $('.js-show-count-text').text(count);
  });
  
  // バリデーション
  const MSG_REQUIRED = '必須項目です';
  const MSG_TEXT_MAX = '20文字以内で入力して下さい';
  const MSG_EMAIL_TYPE = 'Emaiの形式で入力して下さい';
  const MSG_TEXTAREA_MAX = '200文字以内で入力して下さい';

  $('.js-valid-text').on('keyup', function() {
    var contact_g = $(this).closest('.contact__list');

    if ($(this).val().length === 0) {
      contact_g.removeClass('has-success').addClass('has-error');
      contact_g.find('.area-msg').text(MSG_REQUIRED);
    } else if ($(this).val().length > 20) {
      contact_g.removeClass('has-success').addClass('has-error');
      contact_g.find('.area-msg').text(MSG_TEXT_MAX);
    } else {
      contact_g.removeClass('has-error').addClass('has-success');
      contact_g.find('.area-msg').text('');
    }
  });

  $('.js-valid-email').on('keyup', function() {
    var contact_g = $(this).closest('.contact__list');

    if ($(this).val().length === 0) {
      contact_g.removeClass('has-success').addClass('has-error');
      contact_g.find('.area-msg').text(MSG_REQUIRED);
    } else if ($(this).val().length > 50 || !$(this).val().match(/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)) {
      contact_g.removeClass('has-success').addClass('has-error');
      contact_g.find('.area-msg').text(MSG_EMAIL_TYPE);
    } else {
      contact_g.removeClass('has-error').addClass('has-success');
      contact_g.find('.area-msg').text('');
    }
  });
});