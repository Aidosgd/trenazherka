
window._ = require('lodash');

/**
 * Socket.io
 */
//window.socket = require('socket.io-client');

/**
 *  Reactive Extensions (RxJS)
 */
//window.Rx = require('rxjs/Rx');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');
require('./libs/jquery-2.1.0.min.js+bootstrap.min.js+jquery.min.js+jquery.easing.1.3.js+parallax,_jquery.parallax-1.1.3.js+parallax,_jquery.transform2d.js+parallax,_script.js+parallax,_parallax.js+waypoints.js+template.js.pagespeed.jc.rrvfRVY2Sr.js')
require('./libs/masterslider.min.js')
require('./libs/banner.js+owl.carousel.min.js+theme.js+dropdown.js+classie.js+main.js.pagespeed.jc.uGNWcA1Oxk.js')
require('slick-carousel');
require('./libs/main.js');
/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */

window.Vue = require('vue');
require('vue-resource');

/**
 * We'll register a HTTP interceptor to attach the "CSRF" header to each of
 * the outgoing requests issued by this application. The CSRF middleware
 * included with Laravel will automatically verify the header's value.
 */

Vue.http.interceptors.push((request, next) => {
    request.headers['X-CSRF-TOKEN'] = Laravel.csrfToken;

    next();
});

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
