/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
/**
* Theme: Attex - Responsive Tailwind Admin Dashboard
* Author: coderthemes
* Module/App: App js
*/
var App = /*#__PURE__*/function () {
  function App() {
    _classCallCheck(this, App);
  }
  _createClass(App, [{
    key: "initComponents",
    value:
    // Components
    function initComponents() {
      // lucide Icons
      lucide.createIcons();
    }
  }, {
    key: "initSidenav",
    value: function initSidenav() {
      var self = this;
      var pageUrl = window.location.href.split(/[?#]/)[0];
      document.querySelectorAll('ul.menu a.menu-link').forEach(function (element) {
        if (element.href === pageUrl) {
          element.classList.add('active');
          var parentMenu = element.parentElement.parentElement.parentElement;
          if (parentMenu && parentMenu.classList.contains('menu-item')) {
            var collapseElement = parentMenu.querySelector('[data-fc-type="collapse"]');
            if (collapseElement && frost != null) {
              var collapse = frost.Collapse.getInstanceOrCreate(collapseElement);
              collapse.show();
            }
          }
        }
      });
      setTimeout(function () {
        var activatedItem = document.querySelector('ul.menu .active');
        if (activatedItem != null) {
          var simplebarContent = document.querySelector('.app-menu .simplebar-content-wrapper');
          var offset = activatedItem.offsetTop - 300;
          if (simplebarContent && offset > 100) {
            scrollTo(simplebarContent, offset, 600);
          }
        }
      }, 200);

      // scrollTo (Sidenav Active Menu)
      function easeInOutQuad(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
      }
      function scrollTo(element, to, duration) {
        var start = element.scrollTop,
          change = to - start,
          currentTime = 0,
          increment = 20;
        var animateScroll = function animateScroll() {
          currentTime += increment;
          var val = easeInOutQuad(currentTime, start, change, duration);
          element.scrollTop = val;
          if (currentTime < duration) {
            setTimeout(animateScroll, increment);
          }
        };
        animateScroll();
      }
    }

    // Topbar Fullscreen Button
  }, {
    key: "initfullScreenListener",
    value: function initfullScreenListener() {
      var self = this;
      var fullScreenBtn = document.querySelector('[data-toggle="fullscreen"]');
      if (fullScreenBtn) {
        fullScreenBtn.addEventListener('click', function (e) {
          e.preventDefault();
          document.body.classList.toggle('fullscreen-enable');
          if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement) {
            if (document.documentElement.requestFullscreen) {
              document.documentElement.requestFullscreen();
            } else if (document.documentElement.mozRequestFullScreen) {
              document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullscreen) {
              document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
            }
          } else {
            if (document.cancelFullScreen) {
              document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
              document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
              document.webkitCancelFullScreen();
            }
          }
        });
      }
    }
  }, {
    key: "init",
    value: function init() {
      this.initComponents();
      this.initSidenav();
      this.initfullScreenListener();
    }
  }]);
  return App;
}();
var ThemeCustomizer = /*#__PURE__*/function () {
  function ThemeCustomizer() {
    _classCallCheck(this, ThemeCustomizer);
    this.html = document.getElementsByTagName('html')[0];
    this.config = {};
    this.defaultConfig = window.config;
  }
  _createClass(ThemeCustomizer, [{
    key: "initConfig",
    value: function initConfig() {
      this.defaultConfig = JSON.parse(JSON.stringify(window.defaultConfig));
      this.config = JSON.parse(JSON.stringify(window.config));
      this.setSwitchFromConfig();
    }
  }, {
    key: "reverseQuery",
    value: function reverseQuery(element, query) {
      while (element) {
        if (element.parentElement) {
          if (element.parentElement.querySelector(query) === element) return element;
        }
        element = element.parentElement;
      }
      return null;
    }
  }, {
    key: "changeThemeDirection",
    value: function changeThemeDirection(direction) {
      this.config.direction = direction;
      this.html.setAttribute('dir', direction);
      this.setSwitchFromConfig();
    }
  }, {
    key: "changeThemeMode",
    value: function changeThemeMode(color) {
      this.config.theme = color;
      this.html.setAttribute('data-mode', color);
      this.setSwitchFromConfig();
    }
  }, {
    key: "changeLayoutWidth",
    value: function changeLayoutWidth(width) {
      var save = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
      this.html.setAttribute('data-layout-width', width);
      if (save) {
        this.config.layout.width = width;
        this.setSwitchFromConfig();
      }
    }
  }, {
    key: "changeLayoutPosition",
    value: function changeLayoutPosition(position) {
      var save = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
      this.html.setAttribute('data-layout-position', position);
      if (save) {
        this.config.layout.position = position;
        this.setSwitchFromConfig();
      }
    }
  }, {
    key: "changeTopbarColor",
    value: function changeTopbarColor(color) {
      this.config.topbar.color = color;
      this.html.setAttribute('data-topbar-color', color);
      this.setSwitchFromConfig();
    }
  }, {
    key: "changeMenuColor",
    value: function changeMenuColor(color) {
      this.config.menu.color = color;
      this.html.setAttribute('data-menu-color', color);
      this.setSwitchFromConfig();
    }
  }, {
    key: "changeSidenavView",
    value: function changeSidenavView(view) {
      var save = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
      this.html.setAttribute('data-sidenav-view', view);
      if (save) {
        this.config.sidenav.view = view;
        this.setSwitchFromConfig();
      }
    }
  }, {
    key: "resetTheme",
    value: function resetTheme() {
      this.config = JSON.parse(JSON.stringify(window.defaultConfig));
      this.changeThemeDirection(this.config.direction);
      this.changeThemeMode(this.config.theme);
      this.changeLayoutWidth(this.config.layout.width);
      this.changeLayoutPosition(this.config.layout.position);
      this.changeTopbarColor(this.config.topbar.color);
      this.changeMenuColor(this.config.menu.color);
      this.changeSidenavView(this.config.sidenav.view);
      this.adjustLayout();
    }
  }, {
    key: "initSwitchListener",
    value: function initSwitchListener() {
      var self = this;
      document.querySelectorAll('input[name=dir]').forEach(function (element) {
        element.addEventListener('change', function (e) {
          self.changeThemeDirection(element.value);
        });
      });
      document.querySelectorAll('input[name=data-mode]').forEach(function (element) {
        element.addEventListener('change', function (e) {
          self.changeThemeMode(element.value);
        });
      });
      document.querySelectorAll('input[name=data-layout-width]').forEach(function (element) {
        element.addEventListener('change', function (e) {
          self.changeLayoutWidth(element.value);
        });
      });
      document.querySelectorAll('input[name=data-layout-position]').forEach(function (element) {
        element.addEventListener('change', function (e) {
          self.changeLayoutPosition(element.value);
        });
      });
      document.querySelectorAll('input[name=data-topbar-color]').forEach(function (element) {
        element.addEventListener('change', function (e) {
          self.changeTopbarColor(element.value);
        });
      });
      document.querySelectorAll('input[name=data-menu-color]').forEach(function (element) {
        element.addEventListener('change', function (e) {
          self.changeMenuColor(element.value);
        });
      });
      document.querySelectorAll('input[name=data-sidenav-view]').forEach(function (element) {
        element.addEventListener('change', function (e) {
          self.changeSidenavView(element.value);
        });
      });

      //  Light Dark Button
      var themeColorToggle = document.getElementById('light-dark-mode');
      if (themeColorToggle) {
        themeColorToggle.addEventListener('click', function (e) {
          if (self.config.theme === 'light') {
            self.changeThemeMode('dark');
          } else {
            self.changeThemeMode('light');
          }
        });
      }

      // Menu Toggle Button ( Placed in Topbar)
      var menuToggleBtn = document.querySelector('#button-toggle-menu');
      if (menuToggleBtn) {
        menuToggleBtn.addEventListener('click', function () {
          var configView = self.config.sidenav.view;
          var view = self.html.getAttribute('data-sidenav-view', configView);
          if (view === 'mobile') {
            self.showBackdrop();
            self.html.classList.toggle('sidenav-enable');
          } else {
            if (configView == 'hidden') {
              if (view === 'hidden') {
                self.changeSidenavView(configView == 'hidden' ? 'default' : configView, false);
              } else {
                self.changeSidenavView('hidden', false);
              }
            } else {
              if (view === 'sm') {
                self.changeSidenavView(configView == 'sm' ? 'default' : configView, false);
              } else {
                self.changeSidenavView('sm', false);
              }
            }
          }
        });
      }
      var menuHoverToggleBtn = document.querySelector('#button-hover-toggle');
      if (menuHoverToggleBtn) {
        menuHoverToggleBtn.addEventListener('click', function () {
          var configView = self.config.sidenav.view;
          var view = self.html.getAttribute('data-sidenav-view', configView);
          if (configView == 'hover') {
            if (view === 'hover') {
              self.changeSidenavView(configView == 'hover' ? 'hover-active' : configView, true);
            } else {
              self.changeSidenavView('hover', true);
            }
          } else {
            if (view === 'hover-active') {
              self.changeSidenavView(configView == 'hover-active' ? 'hover' : configView, true);
            } else {
              self.changeSidenavView('hover-active', true);
            }
          }
        });
      }

      // Config Reset Button
      var resetBtn = document.querySelector('#reset-layout');
      if (resetBtn) {
        resetBtn.addEventListener('click', function (e) {
          self.resetTheme();
        });
      }
    }
  }, {
    key: "showBackdrop",
    value: function showBackdrop() {
      var backdrop = document.createElement('div');
      backdrop.id = 'backdrop';
      backdrop.classList = 'transition-all fixed inset-0 z-40 bg-gray-900 bg-opacity-50 dark:bg-opacity-80';
      document.body.appendChild(backdrop);
      if (document.getElementsByTagName('html')[0]) {
        document.body.style.overflow = "hidden";
        if (window.innerWidth > 1140) {
          document.body.style.paddingRight = "15px";
        }
      }
      var self = this;
      backdrop.addEventListener('click', function (e) {
        self.html.classList.remove('sidenav-enable');
        self.hideBackdrop();
      });
    }
  }, {
    key: "hideBackdrop",
    value: function hideBackdrop() {
      var backdrop = document.getElementById('backdrop');
      if (backdrop) {
        document.body.removeChild(backdrop);
        document.body.style.overflow = null;
        document.body.style.paddingRight = null;
      }
    }
  }, {
    key: "initWindowSize",
    value: function initWindowSize() {
      var self = this;
      window.addEventListener('resize', function (e) {
        self.adjustLayout();
      });
    }
  }, {
    key: "adjustLayout",
    value: function adjustLayout() {
      var self = this;
      if (window.innerWidth <= 1140) {
        self.changeSidenavView('mobile', false);
      } else {
        self.changeSidenavView(self.config.sidenav.view);
      }
    }
  }, {
    key: "setSwitchFromConfig",
    value: function setSwitchFromConfig() {
      sessionStorage.setItem('__ATTEX_CONFIG__', JSON.stringify(this.config));
      // localStorage.setItem('__ATTEX_CONFIG__', JSON.stringify(this.config));

      document.querySelectorAll('#theme-customization input[type=checkbox]').forEach(function (checkbox) {
        checkbox.checked = false;
      });
      var config = this.config;
      if (config) {
        var layoutDirectionSwitch = document.querySelector('input[type=checkbox][name=dir][value=' + config.direction + ']');
        var layoutModeSwitch = document.querySelector('input[type=checkbox][name=data-mode][value=' + config.theme + ']');
        var layoutWidthSwitch = document.querySelector('input[type=checkbox][name=data-layout-width][value=' + config.layout.width + ']');
        var layoutPositionSwitch = document.querySelector('input[type=radio][name=data-layout-position][value=' + config.layout.position + ']');
        var topbarColorSwitch = document.querySelector('input[type=checkbox][name=data-topbar-color][value=' + config.topbar.color + ']');
        var menuColorSwitch = document.querySelector('input[type=checkbox][name=data-menu-color][value=' + config.menu.color + ']');
        var sidenavViewSwitch = document.querySelector('input[type=checkbox][name=data-sidenav-view][value=' + config.sidenav.view + ']');
        if (layoutDirectionSwitch) layoutDirectionSwitch.checked = true;
        if (layoutModeSwitch) layoutModeSwitch.checked = true;
        if (layoutWidthSwitch) layoutWidthSwitch.checked = true;
        if (layoutPositionSwitch) layoutPositionSwitch.checked = true;
        if (topbarColorSwitch) topbarColorSwitch.checked = true;
        if (menuColorSwitch) menuColorSwitch.checked = true;
        if (sidenavViewSwitch) sidenavViewSwitch.checked = true;
      }
    }
  }, {
    key: "init",
    value: function init() {
      this.initConfig();
      this.initSwitchListener();
      this.initWindowSize();
      this.adjustLayout();
      this.setSwitchFromConfig();
    }
  }]);
  return ThemeCustomizer;
}();
new App().init();
new ThemeCustomizer().init();

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


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
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
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
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;