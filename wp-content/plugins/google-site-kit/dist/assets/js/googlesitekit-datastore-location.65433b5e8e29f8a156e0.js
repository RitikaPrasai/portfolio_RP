(window.__googlesitekit_webpackJsonp=window.__googlesitekit_webpackJsonp||[]).push([[11],{4:function(t,e){t.exports=googlesitekit.data},50:function(t,e,r){"use strict";r.d(e,"b",(function(){return n})),r.d(e,"a",(function(){return n}));var n="core/location"},579:function(t,e,r){"use strict";(function(t){var n=r(5),o=r.n(n),a=r(7),i=r.n(a),c=r(13),s=r.n(c);function u(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,n)}return r}function g(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?u(Object(r),!0).forEach((function(e){o()(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):u(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}var l={navigatingTo:void 0},p={navigateTo:i.a.mark((function t(e){var r,n;return i.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:r={url:e},n=!1;try{n=new URL(e)}catch(t){}return s()(!!n,"url must be a valid URI."),t.next=6,{type:"SET_NAVIGATING_TO",payload:r};case 6:return t.next=8,{type:"DO_NAVIGATE_TO",payload:r};case 8:return t.abrupt("return",t.sent);case 9:case"end":return t.stop()}}),t)}))},f=o()({},"DO_NAVIGATE_TO",(function(e){var r=e.payload;t.location.assign(r.url)}));var v={isNavigating:function(t){return!!t.navigatingTo},isNavigatingTo:function(t,e){var r=t.navigatingTo;return s()("string"==typeof e||e instanceof RegExp,"url must be either a string or a regular expression."),"string"==typeof e?r===e:e.test(r)},getNavigateURL:function(t){return t.navigatingTo||null}};e.a={initialState:l,actions:p,controls:f,reducer:function(t,e){var r=e.type,n=e.payload;switch(r){case"SET_NAVIGATING_TO":return g(g({},t),{},{navigatingTo:n.url});default:return t}},resolvers:{},selectors:v}}).call(this,r(19))},863:function(t,e,r){"use strict";r.r(e);var n=r(4),o=r.n(n),a=r(50),i=r(579),c=o.a.combineStores(o.a.commonStore,i.a);c.initialState,c.actions,c.controls,c.reducer,c.resolvers,c.selectors;o.a.registerStore(a.b,c)}},[[863,1,0]]]);