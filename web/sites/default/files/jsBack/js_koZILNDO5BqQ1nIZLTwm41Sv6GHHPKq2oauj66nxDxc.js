!function(t){"use strict";var n,e=t.blazy||{},o=t.Ajax||{},u=o.prototype;u.success=function(t){return function(o,u){var i=e.init;return null===i?t.apply(this,arguments):(window.clearTimeout(n),n=window.setTimeout(function(){var t=document.querySelectorAll(i.options.selector);null!==t&&i.load(t)},100),t.apply(this,arguments))}}(u.success)}(Drupal);
;
