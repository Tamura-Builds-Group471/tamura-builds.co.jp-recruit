/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/resources/js/app.js":
/*!************************************!*\
  !*** ./assets/resources/js/app.js ***!
  \************************************/
/***/ (() => {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

var slideBox = /*#__PURE__*/function () {
  function slideBox(element) {
    var _this = this;

    _classCallCheck(this, slideBox);

    _defineProperty(this, "startX", void 0);

    _defineProperty(this, "endX", void 0);

    _defineProperty(this, "currentIndex", 0);

    _defineProperty(this, "itemCount", void 0);

    this.slideBox = element;
    this.slideBoxList = element.querySelector('.js-slideBoxList');
    this.slideBoxListItems = element.querySelectorAll('.js-slideBoxList > li');
    this.itemCount = this.slideBoxListItems.length;
    this.slideBoxPageNations = element.querySelectorAll('.js-slideBoxPageNation');
    this.slideBoxPageNationDotsList = [];

    var _loop = function _loop(listIndex) {
      _this.slideBoxPageNationDotsList.push([]);

      _this.slideBoxListItems.forEach(function (slideBoxListItem, index) {
        var dot = document.createElement('li');

        _this.slideBoxPageNations[listIndex].appendChild(dot);

        _this.slideBoxPageNationDotsList[listIndex].push(dot); // dot.addEventListener('click', () => {
        //   this.currentIndex = index;
        //   this.show();
        // })

      });

      _this.slideBoxPageNationDotsList[listIndex][0].classList.add('is_active');
    };

    for (var listIndex = 0; listIndex < this.slideBoxPageNations.length; listIndex++) {
      _loop(listIndex);
    }

    var previousBtns = element.querySelectorAll('.js-previousBtn');
    var nextBtns = element.querySelectorAll('.js-nextBtn');
    previousBtns.forEach(function (previousBtn) {
      previousBtn.addEventListener('click', function () {
        _this.moveSlide('left');
      });
    });
    nextBtns.forEach(function (nextBtn) {
      nextBtn.addEventListener('click', function () {
        _this.moveSlide('right');
      });
    });
    this.setNextMove();
  }

  _createClass(slideBox, [{
    key: "setNextMove",
    value: function setNextMove() {
      var _this2 = this;

      clearTimeout(this.timeOutId);
      this.timeOutId = setTimeout(function () {
        _this2.currentIndex++;

        _this2.show();
      }, 6000);
    } // スライド表示

  }, {
    key: "show",
    value: function show() {
      var _this3 = this;

      if (this.currentIndex < 0) {
        this.currentIndex = this.itemCount - 1;
      } else if (this.currentIndex > this.itemCount - 1) {
        this.currentIndex = 0;
      }

      this.allHidden();
      this.slideBoxListItems[this.currentIndex].classList.add('is_active');
      this.slideBoxPageNationDotsList.forEach(function (slideBoxPageNationDots) {
        slideBoxPageNationDots[_this3.currentIndex].classList.add('is_active');
      });
      this.setNextMove();
    } // 全てのスライド非表示

  }, {
    key: "allHidden",
    value: function allHidden() {
      this.slideBoxListItems.forEach(function (slideBoxListItem) {
        slideBoxListItem.classList.remove('is_active');
      });
      this.slideBoxPageNationDotsList.forEach(function (slideBoxPageNationDots) {
        slideBoxPageNationDots.forEach(function (slideBoxPageNationDot) {
          slideBoxPageNationDot.classList.remove('is_active');
        });
      });
    } // スライド移動

  }, {
    key: "moveSlide",
    value: function moveSlide(allow) {
      if (allow == 'left') {
        if (this.currentIndex > 0) {
          this.currentIndex--;
        } else {
          this.currentIndex = this.itemCount - 1;
        }
      } else if (allow == 'right') {
        if (this.currentIndex < this.itemCount - 1) {
          this.currentIndex++;
        } else {
          this.currentIndex = 0;
        }
      } else {
        console.log('moveSlide 不正な値');
      }

      this.show();
    }
    /**
     * スワイプ検知
     */

  }, {
    key: "logSwipeStart",
    value: function logSwipeStart(event) {
      event.preventDefault();
      this.startX = event.touches[0].pageX;
    }
  }, {
    key: "logSwipe",
    value: function logSwipe(event) {
      event.preventDefault();
      this.endX = event.touches[0].pageX;
    }
  }, {
    key: "logSwipeEnd",
    value: function logSwipeEnd(event) {
      event.preventDefault();

      if (0 < this.endX - this.startX) {
        // 右スワイプ
        this.moveSlide('left');
      } else {
        // 左スワイプ
        this.moveSlide('right');
      }
    }
  }]);

  return slideBox;
}();

function initSlideBox(element) {
  new slideBox(element);
}

window.initSlideBox = initSlideBox;

/***/ }),

/***/ "./assets/resources/scss/app.scss":
/*!****************************************!*\
  !*** ./assets/resources/scss/app.scss ***!
  \****************************************/
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
/******/ 			"/main": 0,
/******/ 			"main": 0
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
/******/ 	__webpack_require__.O(undefined, ["main"], () => (__webpack_require__("./assets/resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["main"], () => (__webpack_require__("./assets/resources/scss/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
// 20250312
$(function(){
  // 変数に要素を入れる
  var open = $('.modal-open'),
    close = $('.modal-close'),
    container = $('.modal-container');

  //開くボタンをクリックしたらモーダルを表示する
  open.on('click',function(){ 
    container.addClass('active');
    return false;
  });

  //閉じるボタンをクリックしたらモーダルを閉じる
  close.on('click',function(){  
    container.removeClass('active');
  });

  //モーダルの外側をクリックしたらモーダルを閉じる
  $(document).on('click',function(e) {
    if(!$(e.target).closest('.modal-body').length) {
      container.removeClass('active');
    }
  });
});

const CLASSNAME = "-visible";
const TIMEOUT = 500;
const $target = document.querySelector('.marketing-bg');

if ($target) {
  let timeoutId = null;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // すでにタイマーがセットされている場合はリセット
        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => {
          $target.classList.add(CLASSNAME);
        }, TIMEOUT);
      } else {
        // 画面から外れたら即座にクラスを削除
        clearTimeout(timeoutId);
        $target.classList.remove(CLASSNAME);
      }
    });
  }, {
    root: null, // 画面全体を基準
    rootMargin: '10px', // 判定を多少緩和
    threshold: 0.1 // 10% 要素が見えたら発火
  });

  observer.observe($target);
}


$(function () {
  // aimation呼び出し
  if ($('.anim-box').length) {
      scrollAnimation();
  }

  // aimation関数
  function scrollAnimation() {
      $(window).scroll(function () {
          $(".anim-box").each(function () {
              let position = $(this).offset().top,
                  scroll = $(window).scrollTop(),
                  windowHeight = $(window).height();

              if (scroll > position - windowHeight + 200) {
                  $(this).addClass('is-animated');
              }
          });
      });
  }
  $(window).trigger('scroll');
});