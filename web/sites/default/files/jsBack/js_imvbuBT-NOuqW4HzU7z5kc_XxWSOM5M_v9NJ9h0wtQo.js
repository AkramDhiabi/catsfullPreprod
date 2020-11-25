/**
 * @file
 * Marker Scroll to Result.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Recenter control.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches common map style functionality to relevant elements.
   */
  Drupal.behaviors.geolocationMarkerScrollToId = {
    attach: function (context, drupalSettings) {
      Drupal.geolocation.executeFeatureOnAllMaps(
        'geolocation_marker_scroll_to_id',

        /**
         * @param {GeolocationMapInterface} map
         * @param {GeolocationMapFeatureSettings} featureSettings
         */
        function (map, featureSettings) {
          map.addPopulatedCallback(function (map) {
            $.each(map.mapMarkers, function (index, marker) {
              marker.addListener('click', function () {
                var id = marker.locationWrapper.data('scroll-target-id');

                var target = $('#' + id + ':visible').first();

                if (target.length === 1) {
                  $('html, body').animate({
                    scrollTop: target.offset().top
                  }, 'slow');
                }
              });
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
 * Leaflet max bounds.
 */

/**
 * @typedef {Object} LeafletMaxBoundsSettings
 *
 * @extends {GeolocationMapFeatureSettings}
 *
 * @property {String} north
 * @property {String} south
 * @property {String} east
 * @property {String} west
 */

(function ($, Drupal) {

  'use strict';

  /**
   * LeafletMaxBounds.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches common map style functionality to relevant elements.
   */
  Drupal.behaviors.geolocationLeafletMaxBounds = {
    attach: function (context, drupalSettings) {

      Drupal.geolocation.executeFeatureOnAllMaps(
        'leaflet_max_bounds',

        /**
         * @param {GeolocationLeafletMap} map - Current map.
         * @param {LeafletMaxBoundsSettings} featureSettings - Settings for current feature.
         */
        function (map, featureSettings) {
          map.addInitializedCallback(function (map) {
            var east = parseFloat(featureSettings.east);
            var west = parseFloat(featureSettings.west);
            var south = parseFloat(featureSettings.south);
            var north = parseFloat(featureSettings.north);
            if (west > east) {
              east = east + 360;
            }
            var bounds = new L.LatLngBounds([
                [south, west],
                [north, east]
            ]);
            map.leafletMap.fitBounds(bounds);
            map.leafletMap.setMaxBounds(bounds);
            map.leafletMap.setMinZoom(map.leafletMap.getBoundsZoom(bounds));
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
/**
 * @file
 * Custom tile layer.
 */

/**
 * @typedef {Object} CustomTileLayerSettings
 *
 * @extends {GeolocationMapFeatureSettings}
 *
 * @property {String} tileLayerUrl
 * @property {String} tileLayerAttribution
 * @property {String} tileLayerSubdomains
 * @property {Number} tileLayerZoom
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Custom Tile Layer.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches Custom Tile Layer functionality to relevant elements.
   */
  Drupal.behaviors.leafletCustomTileLayer = {
    attach: function (context, drupalSettings) {
      Drupal.geolocation.executeFeatureOnAllMaps(
        'leaflet_custom_tile_layer',

        /**
         * @param {GeolocationLeafletMap} map - Current map.
         * @param {CustomTileLayerSettings} featureSettings - Settings for current feature.
         */
        function (map, featureSettings) {
          map.tileLayer.remove();
          map.tileLayer = L.tileLayer(featureSettings.tileLayerUrl, {
            attribution: featureSettings.tileLayerAttribution,
            subdomains: featureSettings.tileLayerSubdomains,
            maxZoom: featureSettings.tileLayerZoom
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
 * Tile layer.
 */

/**
 * @typedef {Object} TileLayerSettings
 *
 * @extends {GeolocationMapFeatureSettings}
 *
 * @property {String} tileLayerProvider
 * @property {String} tileLayerOptions
 */

(function ($, Drupal) {

  'use strict';

  /**
   * TileLayerSettings.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches TileLayerSettings functionality to relevant elements.
   */
  Drupal.behaviors.leafletTileLayer = {
    attach: function (context, drupalSettings) {
      Drupal.geolocation.executeFeatureOnAllMaps(
        'leaflet_tile_layer',

        /**
         * @param {GeolocationLeafletMap} map - Current map.
         * @param {TileLayerSettings} featureSettings - Settings for current feature.
         */
        function (map, featureSettings) {
          map.tileLayer.remove();
          map.tileLayer = L.tileLayer.provider(featureSettings.tileLayerProvider,
            featureSettings.tileLayerOptions
          ).addTo(map.leafletMap);

          return true;
        },
        drupalSettings
      );
    },
    detach: function (context, drupalSettings) {}
  };
})(jQuery, Drupal);
;
