/**
 * @file
 * Layout Components behaviors.
 */

(function ($, Drupal, drupalSettings) {

  'use strict';

  var ajax = Drupal.ajax,
      behaviors = Drupal.behaviors;

  /**
   * Based on layout builder function. Updates block for sub-column with parent element.
   *
   * @type {Drupal}
   */
  Drupal.layoutBuilderColumnBlockUpdate = function (item, from, to) {
    var $item = $(item);
    var $from = $(from);

    var itemRegion = $item.closest('.js-layout-builder-region');
    var itemParent = $($item[0].parentNode);
    if (to === itemParent[0]) {
      var deltaTo = $item.closest('[data-layout-delta]').data('layout-delta');
      var deltaFrom = $from ? $from.closest('[data-layout-delta]').data('layout-delta') : deltaTo;
      ajax({
        url: [$item.closest('[data-layout-update-url]').data('layout-update-url'), deltaFrom, deltaTo, itemRegion.data('region'), $item.data('layout-block-uuid'), $item.prev('[data-layout-block-uuid]').data('layout-block-uuid')].filter(function (element) {
          return element !== undefined;
        }).join('/')
      }).execute();
    }
  };

  /**
   * Runs group options change on page load.
   */
  behaviors.prepareGroupOptions = {
    attach: function (context, settings) {
      behaviors.handleGroupOptions();
    }
  }

  /**
   * Hides the unused input group element.
   *
   * @type {Drupal~behaviors}
   */
  behaviors.handleGroupOptions = function () {
    let group_selector = 'select.lc_subcolumn-group';
    if (!$(group_selector).length) {
      return;
    }
    let groups = [];
    let groups_selected = [];
    let value = '';
    let target_selectors = ['select.lc-inline_subcolumn_type_', 'input.lc-inline_subcolumn_type_'];
    $(group_selector + ' option').each(function () {
      value = $(this).val();
      if ($.inArray(value, groups) < 0) {
        groups.push(value);
        $.each(target_selectors, function (index, selector) {
          $(selector + value).each(function () {
            $(this).parent().each(function () {
              $(this).hide();
            });
          });
        });
      }
    });
    $(group_selector).each(function () {
      value = $(this).find('option:selected').val();
      if ($.inArray(value, groups_selected) < 0) {
        groups_selected.push(value);
        $.each(target_selectors, function (index, selector) {
          $(selector + value).each(function () {
            $(this).parent().each(function () {
              $(this).show();
            });
          });
        });
      }
    });
  }

  /**
   * Based on layout builder function. Implements blog drag from/to sub-columns.
   */
  behaviors.layoutBuilderColumnBlockDrag = {
    attach: function attach(context) {
      var regionSelectors = ['.js-layout-builder-region', '.js-layout-builder-column'];
      $.each(regionSelectors, function (index, regionSelector) {
        Array.prototype.forEach.call(context.querySelectorAll(regionSelector), function (region) {
          var block = region.querySelector('.js-layout-builder-block');
          region = block ? block.parentNode : region;
          Sortable.create(region, {
            draggable: '.js-layout-builder-block',
            ghostClass: 'ui-state-drop',
            group: 'builder-region',
            onEnd: function onEnd(event) {
              return Drupal.layoutBuilderColumnBlockUpdate(event.item, event.from, event.to);
            },
          });
        });
      });
    }
  };

  // Focus of all links.
  behaviors.removeFocus = {
    attach: function (context) {
      $(".layout-builder a").on('click', function () {
        this.blur();
        this.hideFocus = true;
        this.style.outline = 'none';
      });
    }
  };

  // Control the configuration of the blocks.
  behaviors.configureBlock = {
    attach: function (context) {
      $('div[data-layout-block-uuid]').hover(function () {
        $(this).find('.layout-builder__configure-block').css('visibility', 'initial');
      },function () {
        $(this).find('.layout-builder__configure-block').css('visibility', 'hidden');
      });
    }
  };

  // Control the movement of the blocks.
  behaviors.moveBlock = {
    attach: function (context) {
      var selector = 'div[data-layout-block-uuid]';
      $(".layout-builder__configure-block").next().hover(function () {
        $(this).parents(selector).removeClass('js-layout-builder-block layout-builder-block');
      },function () {
        var currentClasses = $(this).parents(selector).prop("class");
        $(this).parents(selector).removeClass(currentClasses).addClass('js-layout-builder-block layout-builder-block' + " " + currentClasses);
      });
    }
  };

})(jQuery, Drupal, drupalSettings);
