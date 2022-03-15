/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/main.js":
/*!*********************!*\
  !*** ./src/main.js ***!
  \*********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scss/main.scss */ \"./src/scss/main.scss\");\n/* harmony import */ var _widgets_faq_width_search__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./widgets/faq-width-search */ \"./src/widgets/faq-width-search.js\");\n/* harmony import */ var _widgets_faq_width_search__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_widgets_faq_width_search__WEBPACK_IMPORTED_MODULE_1__);\n/**\r\n * Elementor ADV Script \r\n * \r\n */\n\n/**\r\n * SCSS\r\n */\n\n/**\r\n * Widgets \r\n */\n\n\n;\n\n(function (w, $) {\n  'use strict';\n\n  var Ready = function Ready() {};\n\n  $(Ready);\n})(window, jQuery);\n\n//# sourceURL=webpack://elementor-adv/./src/main.js?");

/***/ }),

/***/ "./src/widgets/faq-width-search.js":
/*!*****************************************!*\
  !*** ./src/widgets/faq-width-search.js ***!
  \*****************************************/
/***/ ((module) => {

eval("(function (w, $) {\n  'use strict';\n\n  var FAQ_ItemClickToogleHandle = function FAQ_ItemClickToogleHandle() {\n    $('body').on('click', '.elementor-adv__widget-faq-item-question', function (e) {\n      var $wrap = $(this).closest('.elementor-adv__widget-faq');\n      var $items = $wrap.find('.elementor-adv__widget-faq-item');\n      $(this).parent().addClass('__active-arrow').find('.elementor-adv__widget-faq-item-answer').stop(true, true).slideDown();\n      $(this).parent().siblings().removeClass('__active-arrow').find('.elementor-adv__widget-faq-item-answer').stop(true, true).slideUp();\n    });\n    /** init active */\n\n    $('.elementor-adv__widget-faq-item.__init-show').find('.elementor-adv__widget-faq-item-question').trigger('click');\n  };\n\n  var Ready = function Ready() {\n    FAQ_ItemClickToogleHandle();\n  };\n\n  $(Ready);\n})(window, jQuery);\n\nmodule.exports = {};\n\n//# sourceURL=webpack://elementor-adv/./src/widgets/faq-width-search.js?");

/***/ }),

/***/ "./src/scss/main.scss":
/*!****************************!*\
  !*** ./src/scss/main.scss ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://elementor-adv/./src/scss/main.scss?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/main.js");
/******/ 	
/******/ })()
;