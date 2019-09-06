(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/app"],{

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _components_LightboxDisplay__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/LightboxDisplay */ "./resources/js/components/LightboxDisplay.js");
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react-dom */ "./node_modules/react-dom/index.js");
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(react_dom__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _components_Example__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/Example */ "./resources/js/components/Example.js");
/* harmony import */ var _node_modules_simple_slider_src_simpleslider__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../node_modules/simple-slider/src/simpleslider */ "./node_modules/simple-slider/src/simpleslider.js");
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
__webpack_require__(/*! ./bootstrap */ "./resources/js/bootstrap.js");






var thumbnails = Array.from(document.querySelectorAll("[rel^='smallThumbnail']"));
var slideButtons = Array.from(document.querySelectorAll("[rel^='slideButton']"));
var displayImages = Array.from(document.querySelectorAll("[rel^='displayImage']"));
var moreButton = document.querySelector("[rel^='showMoreText']");
var leftSlideButton = slideButtons[0];
var rightSlideButton = slideButtons[1];
var viewProvidedServiceModalButton = document.querySelector("[rel='viewServices']");
var viewContentButton = document.querySelector("[rel='viewContent']");
viewContentButton.addEventListener("click", function (e) {
  react_dom__WEBPACK_IMPORTED_MODULE_2___default.a.render(react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_components_LightboxDisplay__WEBPACK_IMPORTED_MODULE_1__["default"], {
    images: displayImages,
    isOpen: "true"
  }), // <ModalDisplay />,
  // <Demo name= {displayImages[0].src}/>, 
  document.querySelector('#app'));
});
viewProvidedServiceModalButton.addEventListener("click", function (e) {
  react_dom__WEBPACK_IMPORTED_MODULE_2___default.a.render( // <ModalDisplay />,
  react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_components_Example__WEBPACK_IMPORTED_MODULE_3__["default"], {
    name: displayImages[0].src,
    isOpen: "true"
  }), document.querySelector('#app'));
});
var smallSlider = Object(_node_modules_simple_slider_src_simpleslider__WEBPACK_IMPORTED_MODULE_4__["getSlider"])({
  container: document.getElementById('myslider'),
  children: document.getElementsByClassName('slides'),
  prop: 'opacity',
  unit: '',
  init: 0,
  show: 1,
  end: 0,
  delay: 3,
  paused: true
});
leftSlideButton.addEventListener("click", function () {
  smallSlider.change(smallSlider.prevIndex());
});
rightSlideButton.addEventListener("click", function () {
  smallSlider.change(smallSlider.nextIndex());
});
smallSlider.resume();
moreButton.addEventListener("click", function (e) {
  e.stopPropagation();
  e.preventDefault();
  toggleText();
});
/**
 * function toggleText displays more or less information in a case study
 */

function toggleText() {
  var dots = document.querySelector("[rel^='caseStudy-dots']");
  var moreText = document.querySelector("[rel^='caseStudy-more']");
  var moreTask = document.querySelector("[rel^='caseStudy-tasks']");
  var buttonText = document.querySelector("[rel^='showMoreText']");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    var spanElement = document.createElement("SPAN");
    var spanText = document.createTextNode("More");
    spanElement.appendChild(spanText);
    buttonText.innerHTML = "View ";
    spanElement.className = "bg-orange-darkest hover:bg-blue-darkest text-white font-bold py-2 px-4 rounded-full";
    buttonText.appendChild(spanElement);
    moreTask.style.display = "none";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";

    var _spanElement = document.createElement("SPAN");

    var _spanText = document.createTextNode("Less");

    _spanElement.appendChild(_spanText);

    buttonText.innerHTML = "View";
    _spanElement.className = "bg-orange-darkest hover:bg-blue-darkest text-white font-bold py-2 px-4 rounded-full";
    buttonText.appendChild(_spanElement);
    moreText.style.display = "inline";
    moreTask.style.display = "inline";
  }
}

var size = thumbnails.length;

if (size <= 1) {
  slideButtons[0].classList.add("hide");
  slideButtons[1].classList.add("hide");
}

var largeSlider = Object(_node_modules_simple_slider_src_simpleslider__WEBPACK_IMPORTED_MODULE_4__["getSlider"])({
  container: document.getElementById('my-slider'),
  children: document.getElementsByClassName('fader'),
  prop: 'opacity',
  unit: '',
  init: 0,
  show: 1,
  end: 0,
  delay: 3
});

/***/ }),

/***/ "./resources/js/bootstrap.js":
/*!***********************************!*\
  !*** ./resources/js/bootstrap.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

window._ = __webpack_require__(/*! lodash */ "./node_modules/lodash/lodash.js");
/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
  window.Popper = __webpack_require__(/*! popper.js */ "./node_modules/popper.js/dist/esm/popper.js")["default"];
  window.$ = window.jQuery = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");

  __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");
} catch (e) {}
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */


window.axios = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

var token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */
// import Echo from 'laravel-echo'
// window.Pusher = require('pusher-js');
// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });

/***/ }),

/***/ "./resources/js/components/Example.js":
/*!********************************************!*\
  !*** ./resources/js/components/Example.js ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: /var/www/html/portfolio/laravel/resources/js/components/Example.js: Unexpected token (10:2)\n\n\u001b[0m \u001b[90m  8 | \u001b[39m    let toggleModalBox \u001b[33m=\u001b[39m \u001b[0m\n\u001b[0m \u001b[90m  9 | \u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 10 | \u001b[39m  }\u001b[0m\n\u001b[0m \u001b[90m    | \u001b[39m  \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 11 | \u001b[39m}\u001b[0m\n    at Object.raise (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:6344:17)\n    at Object.unexpected (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:7659:16)\n    at Object.parseExprAtom (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:8828:20)\n    at Object.parseExprAtom (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:3599:20)\n    at Object.parseExprSubscripts (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:8413:23)\n    at Object.parseMaybeUnary (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:8393:21)\n    at Object.parseExprOps (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:8280:23)\n    at Object.parseMaybeConditional (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:8253:23)\n    at Object.parseMaybeAssign (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:8200:21)\n    at Object.parseVar (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:10439:26)\n    at Object.parseVarStatement (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:10258:10)\n    at Object.parseStatementContent (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:9855:21)\n    at Object.parseStatement (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:9788:17)\n    at Object.parseBlockOrModuleBlockBody (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:10364:25)\n    at Object.parseBlockBody (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:10351:10)\n    at Object.parseBlock (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:10335:10)\n    at Object.parseFunctionBody (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:9408:24)\n    at Object.parseFunctionBodyAndFinish (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:9378:10)\n    at Object.parseMethod (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:9332:10)\n    at Object.pushClassMethod (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:10767:30)\n    at Object.parseClassMemberWithIsStatic (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:10692:12)\n    at Object.parseClassMember (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:10631:10)\n    at withTopicForbiddingContext (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:10586:14)\n    at Object.withTopicForbiddingContext (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:9683:14)\n    at Object.parseClassBody (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:10563:10)\n    at Object.parseClass (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:10537:22)\n    at Object.parseExportDefaultExpression (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:10962:19)\n    at Object.parseExport (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:10868:31)\n    at Object.parseStatementContent (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:9892:27)\n    at Object.parseStatement (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:9788:17)\n    at Object.parseBlockOrModuleBlockBody (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:10364:25)\n    at Object.parseBlockBody (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:10351:10)\n    at Object.parseTopLevel (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:9717:10)\n    at Object.parse (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:11233:17)\n    at parse (/var/www/html/portfolio/laravel/node_modules/@babel/parser/lib/index.js:11269:38)\n    at parser (/var/www/html/portfolio/laravel/node_modules/@babel/core/lib/transformation/normalize-file.js:170:34)");

/***/ }),

/***/ "./resources/js/components/LightboxDisplay.js":
/*!****************************************************!*\
  !*** ./resources/js/components/LightboxDisplay.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return LightboxDisplay; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_image_lightbox__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-image-lightbox */ "./node_modules/react-image-lightbox/dist/index.es.js");
/* harmony import */ var react_image_lightbox_style_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react-image-lightbox/style.css */ "./node_modules/react-image-lightbox/style.css");
/* harmony import */ var react_image_lightbox_style_css__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(react_image_lightbox_style_css__WEBPACK_IMPORTED_MODULE_2__);
function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance"); }

function _iterableToArray(iter) { if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }



 // This only needs to be imported once in your app

var LightboxDisplay =
/*#__PURE__*/
function (_Component) {
  _inherits(LightboxDisplay, _Component);

  function LightboxDisplay(props) {
    var _this;

    _classCallCheck(this, LightboxDisplay);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(LightboxDisplay).call(this, props));

    var toggleLightBox = function toggleLightBox(photoIndex) {
      _this.setState(function (state) {
        return {
          lightboxIsOpen: !state.lightboxIsOpen,
          photoIndex: photoIndex
        };
      });
    };

    _this.images = _toConsumableArray(props.images);
    _this.state = {
      photoIndex: 0,
      isOpen: true
    };
    return _this;
  }

  _createClass(LightboxDisplay, [{
    key: "render",
    value: function render() {
      var _this2 = this;

      var _this$state = this.state,
          photoIndex = _this$state.photoIndex,
          isOpen = _this$state.isOpen;
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", null, isOpen ? react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(react_image_lightbox__WEBPACK_IMPORTED_MODULE_1__["default"], {
        mainSrc: this.images[photoIndex].src,
        nextSrc: this.images[(photoIndex + 1) % this.images.length],
        prevSrc: this.images[(photoIndex + this.images.length - 1) % this.images.length],
        onCloseRequest: function onCloseRequest() {
          return _this2.setState({
            isOpen: false
          });
        },
        onMovePrevRequest: function onMovePrevRequest() {
          return _this2.setState({
            photoIndex: (photoIndex + _this2.images.length - 1) % _this2.images.length
          });
        },
        onMoveNextRequest: function onMoveNextRequest() {
          return _this2.setState({
            photoIndex: (photoIndex + 1) % _this2.images.length
          });
        }
      }) : this.setState({
        isOpen: false
      }));
    }
  }]);

  return LightboxDisplay;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);



/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /var/www/html/portfolio/laravel/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /var/www/html/portfolio/laravel/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

},[[0,"/js/manifest","/js/vendor"]]]);