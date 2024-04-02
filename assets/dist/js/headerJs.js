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

/***/ "./assets/src/js/Header.js":
/*!*********************************!*\
  !*** ./assets/src/js/Header.js ***!
  \*********************************/
/***/ (() => {

eval("class Header {\n  constructor() {\n    this.header = document.querySelector(\".js-header\");\n    this.humBtm = document.querySelector(\".js-humBtn\");\n    this.navLink = document.querySelectorAll(\".js-nav a\");\n    this.scorrllLinks = document.querySelectorAll('a[href^=\"/#\"]');\n    this.btnHandler();\n    this.scroller();\n  }\n  btnHandler() {\n    this.humBtm.addEventListener(\"click\", () => this.header.classList.toggle(\"is-open\"));\n  }\n  scroller() {\n    console.log(this.scorrllLinks.length);\n    this.scorrllLinks.forEach(scorrllLink => {\n      scorrllLink.addEventListener(\"click\", e => {\n        const hrefLink = scorrllLink.getAttribute(\"href\");\n        const targetContent = document.getElementById(hrefLink.replace(\"/#\", \"\"));\n        if (targetContent != null) {\n          e.preventDefault();\n          const rectTop = targetContent.getBoundingClientRect().top;\n          const positionY = window.pageYOffset;\n          const spacer = this.header.classList.contains(\"is-open\") ? 60 : 85;\n          console.log(spacer);\n          const target = rectTop + positionY - spacer;\n          window.scrollTo({\n            top: target,\n            behavior: \"smooth\"\n          });\n          window.addEventListener(\"scrollend\", () => {\n            // sp時でhumメニューを開いている場合に閉じる\n            if (this.header.classList.contains(\"is-open\")) this.header.classList.remove(\"is-open\");\n          });\n        }\n      });\n    });\n  }\n}\nnew Header();\n\n//# sourceURL=webpack://careerView/./assets/src/js/Header.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./assets/src/js/Header.js"]();
/******/ 	
/******/ })()
;