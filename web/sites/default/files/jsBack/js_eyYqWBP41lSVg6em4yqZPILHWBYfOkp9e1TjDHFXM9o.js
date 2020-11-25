(function ($, Drupal) {

  'use strict';

  Drupal.geolocation = Drupal.geolocation || {};
  Drupal.geolocation.mapCenter = Drupal.geolocation.mapCenter || {};

  /**
   * @param centerOption.settings.reset_zoom {Boolean}
   */
  Drupal.geolocation.mapCenter.fit_bounds = function(map, centerOption) {
    map.fitMapToMarkers();

    if (centerOption.settings.reset_zoom) {
      map.setZoom();
    }

    return false;
  }

})(jQuery, Drupal);
;
(function ($, Drupal) {

  'use strict';

  Drupal.geolocation = Drupal.geolocation || {};
  Drupal.geolocation.mapCenter = Drupal.geolocation.mapCenter || {};

  Drupal.geolocation.mapCenter.client_location = function(map, centerOption) {
    if (navigator.geolocation) {
      var successCallback = function (position) {
        map.setCenterByCoordinates({lat: position.coords.latitude, lng: position.coords.longitude}, position.coords.accuracy, 'map_center_client_location');
        return false;
      };
      navigator.geolocation.getCurrentPosition(successCallback);
    }

    return true;
  }

})(jQuery, Drupal);
;
