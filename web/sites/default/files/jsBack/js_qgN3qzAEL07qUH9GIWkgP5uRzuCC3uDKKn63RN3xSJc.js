/**
 * @file
 * Control fullscreen.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Fullscreen control.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches common map fullscreen functionality to relevant elements.
   */
  Drupal.behaviors.leafletControlFullscreen = {
    attach: function (context, drupalSettings) {
      Drupal.geolocation.executeFeatureOnAllMaps(
        'leaflet_control_fullscreen',

        /**
         * @param {GeolocationLeafletMap} map - Current map.
         * @param {GeolocationMapFeatureSettings} featureSettings - Settings for current feature.
         */
        function (map, featureSettings) {
          L.control.fullscreen({
            position: featureSettings.position
          }).addTo(map.leafletMap);

          return true;
        },
        drupalSettings
      );
    },
    detach: function (context, drupalSettings) {}
  };

})(jQuery, Drupal);
;
/**
 * @file
 * Control recenter.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Recenter control.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches common map recenter functionality to relevant elements.
   */
  Drupal.behaviors.leafletControlRecenter = {
    attach: function (context, drupalSettings) {
      Drupal.geolocation.executeFeatureOnAllMaps(
        'leaflet_control_recenter',

        /**
         * @param {GeolocationLeafletMap} map - Current map.
         * @param {GeolocationMapFeatureSettings} featureSettings - Settings for current feature.
         */
        function (map, featureSettings) {
          map.addInitializedCallback(function (map) {
            var recenterButton = $('.geolocation-map-control .recenter', map.wrapper);
            recenterButton.click(function (e) {
              map.setCenter();
              e.preventDefault();
            });
          });

          return true;
        },
        drupalSettings
      );
    },
    detach: function (context, drupalSettings) {}
  };

})(jQuery, Drupal);
;
;
/**
 * @file
 * Control scale.
 */

/**
 * @typedef {Object} ControlScaleSettings
 *
 * @extends {GeolocationMapFeatureSettings}
 *
 * @property {String} position
 * @property {Boolean} metric
 * @property {Boolean} imperial
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Scale control.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches common map scale functionality to relevant elements.
   */
  Drupal.behaviors.leafletControlScale = {
    attach: function (context, drupalSettings) {
      Drupal.geolocation.executeFeatureOnAllMaps(
        'leaflet_control_scale',

        /**
         * @param {GeolocationLeafletMap} map - Current map.
         * @param {ControlScaleSettings} featureSettings - Settings for current feature.
         */
        function (map, featureSettings) {
          L.control.scale({
            position: featureSettings.position,
            metric: featureSettings.metric,
            imperial: featureSettings.imperial
          }).addTo(map.leafletMap);

          return true;
        },
        drupalSettings
      );
    },
    detach: function (context, drupalSettings) {}
  };

})(jQuery, Drupal);
;
