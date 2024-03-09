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

/***/ "./assets/src/js/Single.js":
/*!*********************************!*\
  !*** ./assets/src/js/Single.js ***!
  \*********************************/
/***/ (() => {

eval("class Single {\n  constructor() {\n    this.imageThumbs = document.querySelectorAll(\".js-imageThumb\");\n    this.changeTalentImage();\n  }\n  changeTalentImage() {\n    const imageItem = document.querySelector(\".js-imageItem\");\n    this.imageThumbs.forEach(thumb => {\n      thumb.addEventListener(\"click\", function () {\n        const mainImagePath = this.querySelector(\".js-imageMain\").textContent;\n        imageItem.querySelector(\"img\").setAttribute(\"src\", mainImagePath);\n      });\n    });\n  }\n}\nnew Single();\n\n//# sourceURL=webpack://careerView/./assets/src/js/Single.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./assets/src/js/Single.js"]();
/******/ 	
/******/ })()
;