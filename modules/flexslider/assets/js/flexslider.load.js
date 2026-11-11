/**
 * @file
 * Loads the FlexSlider library.
 */
(function ($) {
  /**
   * Initialize the flexslider instance.
   *
   * @param {string} sliderId
   *   Id selector of the flexslider object.
   * @param {object} optionset
   *   The optionset to apply to the flexslider object.
   * @param {object} context
   *   The DOM context.
   * @private
   */
  function flexsliderInit(sliderId, optionset, context) {
    const $slider = $(`#${sliderId}`, context);

    // Avoid initializing more than once.
    if ($slider.hasClass("flexslider-processed")) {
      return;
    }
    $slider.addClass("flexslider-processed");

    // Remove width/height attributes.
    $slider.find("ul.slides > li > *").removeAttr("width").removeAttr("height");

    // Initialize the slider.
    if (optionset) {
      $slider.flexslider(
        $.extend({}, optionset, {
          start(slider) {
            slider.trigger("start", [slider]);
          },
          before(slider) {
            slider.trigger("before", [slider]);
          },
          after(slider) {
            slider.trigger("after", [slider]);
          },
          end(slider) {
            slider.trigger("end", [slider]);
          },
          added(slider) {
            slider.trigger("added", [slider]);
          },
          removed(slider) {
            slider.trigger("removed", [slider]);
          },
          init(slider) {
            slider.trigger("init", [slider]);
          },
        })
      );
    } else {
      $slider.flexslider();
    }
  }

  Drupal.behaviors.flexslider = {
    attach(context, settings) {
      const sliders = [];
      // Eliminar la declaración innecesaria de 'id'.

      if (
        typeof settings.flexslider !== "undefined" &&
        typeof settings.flexslider.instances !== "undefined"
      ) {
        // Initialize "asNavFor" sliders first.
        Object.keys(settings.flexslider.instances).forEach(sliderInstanceId => {
          const currentSliderId = sliderInstanceId; // Renombrado para evitar el conflicto con 'id'

          if (
            typeof settings.flexslider.optionsets !== "undefined" &&
            settings.flexslider.instances[currentSliderId] in
              settings.flexslider.optionsets
          ) {
            const options =
              settings.flexslider.optionsets[
                settings.flexslider.instances[currentSliderId]
              ];

            if (options.asNavFor !== "") {
              // Initialize "asNavFor" sliders first.
              flexsliderInit(currentSliderId, options, context); // Usamos 'currentSliderId'
            } else {
              sliders[currentSliderId] = options;
            }
          }
        });
      }

      Object.keys(sliders).forEach(sliderInstanceId => {
        const currentSliderId = sliderInstanceId; // Renombrado para evitar el conflicto con 'id'

        flexsliderInit(
          currentSliderId,
          settings.flexslider.optionsets[
            settings.flexslider.instances[currentSliderId]
          ],
          context
        );
      });
    },
  };
})(jQuery);
