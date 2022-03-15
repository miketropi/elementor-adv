((w, $) => {
  'use strict';

  const FAQ_ItemClickToogleHandle = () => {
    $('body').on('click', '.elementor-adv__widget-faq-item-question', function(e) {
      let $wrap = $(this).closest('.elementor-adv__widget-faq');
      let $items = $wrap.find('.elementor-adv__widget-faq-item');

      $(this).parent().addClass('__active-arrow').find('.elementor-adv__widget-faq-item-answer').stop(true, true).slideDown()
      $(this).parent().siblings().removeClass('__active-arrow').find('.elementor-adv__widget-faq-item-answer').stop(true, true).slideUp();
    })

    /** init active */
    $('.elementor-adv__widget-faq-item.__init-show')
      .find('.elementor-adv__widget-faq-item-question')
      .trigger('click');
  }

  const Ready = ()  => {
    FAQ_ItemClickToogleHandle();
  }

  $(Ready)

})(window, jQuery)

module.exports = {}