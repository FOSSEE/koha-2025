(function () {
  'use strict';

  (function ($) {
    function flexsliderInit(sliderId, optionset, context) {
      var $slider = $("#".concat(sliderId), context);
      if ($slider.hasClass("flexslider-processed")) {
        return;
      }
      $slider.addClass("flexslider-processed");
      $slider.find("ul.slides > li > *").removeAttr("width").removeAttr("height");
      if (optionset) {
        $slider.flexslider($.extend({}, optionset, {
          start: function start(slider) {
            slider.trigger("start", [slider]);
          },
          before: function before(slider) {
            slider.trigger("before", [slider]);
          },
          after: function after(slider) {
            slider.trigger("after", [slider]);
          },
          end: function end(slider) {
            slider.trigger("end", [slider]);
          },
          added: function added(slider) {
            slider.trigger("added", [slider]);
          },
          removed: function removed(slider) {
            slider.trigger("removed", [slider]);
          },
          init: function init(slider) {
            slider.trigger("init", [slider]);
          }
        }));
      } else {
        $slider.flexslider();
      }
    }
    Drupal.behaviors.flexslider = {
      attach: function attach(context, settings) {
        var sliders = [];
        if (typeof settings.flexslider !== "undefined" && typeof settings.flexslider.instances !== "undefined") {
          Object.keys(settings.flexslider.instances).forEach(function (sliderInstanceId) {
            var currentSliderId = sliderInstanceId;
            if (typeof settings.flexslider.optionsets !== "undefined" && settings.flexslider.instances[currentSliderId] in settings.flexslider.optionsets) {
              var options = settings.flexslider.optionsets[settings.flexslider.instances[currentSliderId]];
              if (options.asNavFor !== "") {
                flexsliderInit(currentSliderId, options, context);
              } else {
                sliders[currentSliderId] = options;
              }
            }
          });
        }
        Object.keys(sliders).forEach(function (sliderInstanceId) {
          var currentSliderId = sliderInstanceId;
          flexsliderInit(currentSliderId, settings.flexslider.optionsets[settings.flexslider.instances[currentSliderId]], context);
        });
      }
    };
  })(jQuery);

})();
