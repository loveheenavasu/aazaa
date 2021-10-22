/**
 * @license OpenTok.js 2.15.6 e8ba921fd detached head
 *
 * Copyright (c) 2010-2019 TokBox, Inc.
 * Subject to the applicable Software Development Kit (SDK) License Agreement:
 * https://tokbox.com/support/sdk_license
 *
 * Date: Fri, 01 Feb 2019 00:41:02 GMT
 */

(function webpackUniversalModuleDefinition(root, factory) {
    if(typeof exports === 'object' && typeof module === 'object')
        module.exports = factory();
    else if(typeof define === 'function' && define.amd)
        define([], factory);
    else if(typeof exports === 'object')
        exports["OT"] = factory();
    else
        root["OT"] = factory();
})(typeof self !== 'undefined' ? self : this, function() {
    return /******/ (function(modules) { // webpackBootstrap
        /******/ 	// The module cache
        /******/ 	var installedModules = {};
        /******/
        /******/ 	// The require function
        /******/ 	function __webpack_require__(moduleId) {
            /******/
            /******/ 		// Check if module is in cache
            /******/ 		if(installedModules[moduleId]) {
                /******/ 			return installedModules[moduleId].exports;
                /******/ 		}
            /******/ 		// Create a new module (and put it into the cache)
            /******/ 		var module = installedModules[moduleId] = {
                /******/ 			i: moduleId,
                /******/ 			l: false,
                /******/ 			exports: {}
                /******/ 		};
            /******/
            /******/ 		// Execute the module function
            /******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
            /******/
            /******/ 		// Flag the module as loaded
            /******/ 		module.l = true;
            /******/
            /******/ 		// Return the exports of the module
            /******/ 		return module.exports;
            /******/ 	}
        /******/
        /******/
        /******/ 	// expose the modules object (__webpack_modules__)
        /******/ 	__webpack_require__.m = modules;
        /******/
        /******/ 	// expose the module cache
        /******/ 	__webpack_require__.c = installedModules;
        /******/
        /******/ 	// define getter function for harmony exports
        /******/ 	__webpack_require__.d = function(exports, name, getter) {
            /******/ 		if(!__webpack_require__.o(exports, name)) {
                /******/ 			Object.defineProperty(exports, name, {
                    /******/ 				configurable: false,
                    /******/ 				enumerable: true,
                    /******/ 				get: getter
                    /******/ 			});
                /******/ 		}
            /******/ 	};
        /******/
        /******/ 	// getDefaultExport function for compatibility with non-harmony modules
        /******/ 	__webpack_require__.n = function(module) {
            /******/ 		var getter = module && module.__esModule ?
                /******/ 			function getDefault() { return module['default']; } :
                /******/ 			function getModuleExports() { return module; };
            /******/ 		__webpack_require__.d(getter, 'a', getter);
            /******/ 		return getter;
            /******/ 	};
        /******/
        /******/ 	// Object.prototype.hasOwnProperty.call
        /******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
        /******/
        /******/ 	// __webpack_public_path__
        /******/ 	__webpack_require__.p = "";
        /******/
        /******/ 	// Load entry module and return exports
        /******/ 	return __webpack_require__(__webpack_require__.s = 300);
        /******/ })
    /************************************************************************/
    /******/ ([
        /* 0 */
        /***/ (function(module, exports, __webpack_require__) {

            /* WEBPACK VAR INJECTION */(function(process) {/*!
 * @overview es6-promise - a tiny implementation of Promises/A+.
 * @copyright Copyright (c) 2014 Yehuda Katz, Tom Dale, Stefan Penner and contributors (Conversion to ES6 API by Jake Archibald)
 * @license   Licensed under MIT license
 *            See https://raw.githubusercontent.com/stefanpenner/es6-promise/master/LICENSE
 * @version   v4.2.5+7f2b526d
 */

                (function (global, factory) {
                    true ? module.exports = factory() :
                        typeof define === 'function' && define.amd ? define(factory) :
                            (global.ES6Promise = factory());
                }(this, (function () { 'use strict';

                    function objectOrFunction(x) {
                        var type = typeof x;
                        return x !== null && (type === 'object' || type === 'function');
                    }

                    function isFunction(x) {
                        return typeof x === 'function';
                    }



                    var _isArray = void 0;
                    if (Array.isArray) {
                        _isArray = Array.isArray;
                    } else {
                        _isArray = function (x) {
                            return Object.prototype.toString.call(x) === '[object Array]';
                        };
                    }

                    var isArray = _isArray;

                    var len = 0;
                    var vertxNext = void 0;
                    var customSchedulerFn = void 0;

                    var asap = function asap(callback, arg) {
                        queue[len] = callback;
                        queue[len + 1] = arg;
                        len += 2;
                        if (len === 2) {
                            // If len is 2, that means that we need to schedule an async flush.
                            // If additional callbacks are queued before the queue is flushed, they
                            // will be processed by this flush that we are scheduling.
                            if (customSchedulerFn) {
                                customSchedulerFn(flush);
                            } else {
                                scheduleFlush();
                            }
                        }
                    };

                    function setScheduler(scheduleFn) {
                        customSchedulerFn = scheduleFn;
                    }

                    function setAsap(asapFn) {
                        asap = asapFn;
                    }

                    var browserWindow = typeof window !== 'undefined' ? window : undefined;
                    var browserGlobal = browserWindow || {};
                    var BrowserMutationObserver = browserGlobal.MutationObserver || browserGlobal.WebKitMutationObserver;
                    var isNode = typeof self === 'undefined' && typeof process !== 'undefined' && {}.toString.call(process) === '[object process]';

// test for web worker but not in IE10
                    var isWorker = typeof Uint8ClampedArray !== 'undefined' && typeof importScripts !== 'undefined' && typeof MessageChannel !== 'undefined';

// node
                    function useNextTick() {
                        // node version 0.10.x displays a deprecation warning when nextTick is used recursively
                        // see https://github.com/cujojs/when/issues/410 for details
                        return function () {
                            return process.nextTick(flush);
                        };
                    }

// vertx
                    function useVertxTimer() {
                        if (typeof vertxNext !== 'undefined') {
                            return function () {
                                vertxNext(flush);
                            };
                        }

                        return useSetTimeout();
                    }

                    function useMutationObserver() {
                        var iterations = 0;
                        var observer = new BrowserMutationObserver(flush);
                        var node = document.createTextNode('');
                        observer.observe(node, { characterData: true });

                        return function () {
                            node.data = iterations = ++iterations % 2;
                        };
                    }

// web worker
                    function useMessageChannel() {
                        var channel = new MessageChannel();
                        channel.port1.onmessage = flush;
                        return function () {
                            return channel.port2.postMessage(0);
                        };
                    }

                    function useSetTimeout() {
                        // Store setTimeout reference so es6-promise will be unaffected by
                        // other code modifying setTimeout (like sinon.useFakeTimers())
                        var globalSetTimeout = setTimeout;
                        return function () {
                            return globalSetTimeout(flush, 1);
                        };
                    }

                    var queue = new Array(1000);
                    function flush() {
                        for (var i = 0; i < len; i += 2) {
                            var callback = queue[i];
                            var arg = queue[i + 1];

                            callback(arg);

                            queue[i] = undefined;
                            queue[i + 1] = undefined;
                        }

                        len = 0;
                    }

                    function attemptVertx() {
                        try {
                            var vertx = Function('return this')().require('vertx');
                            vertxNext = vertx.runOnLoop || vertx.runOnContext;
                            return useVertxTimer();
                        } catch (e) {
                            return useSetTimeout();
                        }
                    }

                    var scheduleFlush = void 0;
// Decide what async method to use to triggering processing of queued callbacks:
                    if (isNode) {
                        scheduleFlush = useNextTick();
                    } else if (BrowserMutationObserver) {
                        scheduleFlush = useMutationObserver();
                    } else if (isWorker) {
                        scheduleFlush = useMessageChannel();
                    } else if (browserWindow === undefined && "function" === 'function') {
                        scheduleFlush = attemptVertx();
                    } else {
                        scheduleFlush = useSetTimeout();
                    }

                    function then(onFulfillment, onRejection) {
                        var parent = this;

                        var child = new this.constructor(noop);

                        if (child[PROMISE_ID] === undefined) {
                            makePromise(child);
                        }

                        var _state = parent._state;


                        if (_state) {
                            var callback = arguments[_state - 1];
                            asap(function () {
                                return invokeCallback(_state, child, callback, parent._result);
                            });
                        } else {
                            subscribe(parent, child, onFulfillment, onRejection);
                        }

                        return child;
                    }

                    /**
                     `Promise.resolve` returns a promise that will become resolved with the
                     passed `value`. It is shorthand for the following:

                     ```javascript
                     let promise = new Promise(function(resolve, reject){
    resolve(1);
  });

                     promise.then(function(value){
    // value === 1
  });
                     ```

                     Instead of writing the above, your code now simply becomes the following:

                     ```javascript
                     let promise = Promise.resolve(1);

                     promise.then(function(value){
    // value === 1
  });
                     ```

                     @method resolve
                     @static
                     @param {Any} value value that the returned promise will be resolved with
                     Useful for tooling.
                     @return {Promise} a promise that will become fulfilled with the given
                     `value`
                     */
                    function resolve$1(object) {
                        /*jshint validthis:true */
                        var Constructor = this;

                        if (object && typeof object === 'object' && object.constructor === Constructor) {
                            return object;
                        }

                        var promise = new Constructor(noop);
                        resolve(promise, object);
                        return promise;
                    }

                    var PROMISE_ID = Math.random().toString(36).substring(2);

                    function noop() {}

                    var PENDING = void 0;
                    var FULFILLED = 1;
                    var REJECTED = 2;

                    var TRY_CATCH_ERROR = { error: null };

                    function selfFulfillment() {
                        return new TypeError("You cannot resolve a promise with itself");
                    }

                    function cannotReturnOwn() {
                        return new TypeError('A promises callback cannot return that same promise.');
                    }

                    function getThen(promise) {
                        try {
                            return promise.then;
                        } catch (error) {
                            TRY_CATCH_ERROR.error = error;
                            return TRY_CATCH_ERROR;
                        }
                    }

                    function tryThen(then$$1, value, fulfillmentHandler, rejectionHandler) {
                        try {
                            then$$1.call(value, fulfillmentHandler, rejectionHandler);
                        } catch (e) {
                            return e;
                        }
                    }

                    function handleForeignThenable(promise, thenable, then$$1) {
                        asap(function (promise) {
                            var sealed = false;
                            var error = tryThen(then$$1, thenable, function (value) {
                                if (sealed) {
                                    return;
                                }
                                sealed = true;
                                if (thenable !== value) {
                                    resolve(promise, value);
                                } else {
                                    fulfill(promise, value);
                                }
                            }, function (reason) {
                                if (sealed) {
                                    return;
                                }
                                sealed = true;

                                reject(promise, reason);
                            }, 'Settle: ' + (promise._label || ' unknown promise'));

                            if (!sealed && error) {
                                sealed = true;
                                reject(promise, error);
                            }
                        }, promise);
                    }

                    function handleOwnThenable(promise, thenable) {
                        if (thenable._state === FULFILLED) {
                            fulfill(promise, thenable._result);
                        } else if (thenable._state === REJECTED) {
                            reject(promise, thenable._result);
                        } else {
                            subscribe(thenable, undefined, function (value) {
                                return resolve(promise, value);
                            }, function (reason) {
                                return reject(promise, reason);
                            });
                        }
                    }

                    function handleMaybeThenable(promise, maybeThenable, then$$1) {
                        if (maybeThenable.constructor === promise.constructor && then$$1 === then && maybeThenable.constructor.resolve === resolve$1) {
                            handleOwnThenable(promise, maybeThenable);
                        } else {
                            if (then$$1 === TRY_CATCH_ERROR) {
                                reject(promise, TRY_CATCH_ERROR.error);
                                TRY_CATCH_ERROR.error = null;
                            } else if (then$$1 === undefined) {
                                fulfill(promise, maybeThenable);
                            } else if (isFunction(then$$1)) {
                                handleForeignThenable(promise, maybeThenable, then$$1);
                            } else {
                                fulfill(promise, maybeThenable);
                            }
                        }
                    }

                    function resolve(promise, value) {
                        if (promise === value) {
                            reject(promise, selfFulfillment());
                        } else if (objectOrFunction(value)) {
                            handleMaybeThenable(promise, value, getThen(value));
                        } else {
                            fulfill(promise, value);
                        }
                    }

                    function publishRejection(promise) {
                        if (promise._onerror) {
                            promise._onerror(promise._result);
                        }

                        publish(promise);
                    }

                    function fulfill(promise, value) {
                        if (promise._state !== PENDING) {
                            return;
                        }

                        promise._result = value;
                        promise._state = FULFILLED;

                        if (promise._subscribers.length !== 0) {
                            asap(publish, promise);
                        }
                    }

                    function reject(promise, reason) {
                        if (promise._state !== PENDING) {
                            return;
                        }
                        promise._state = REJECTED;
                        promise._result = reason;

                        asap(publishRejection, promise);
                    }

                    function subscribe(parent, child, onFulfillment, onRejection) {
                        var _subscribers = parent._subscribers;
                        var length = _subscribers.length;


                        parent._onerror = null;

                        _subscribers[length] = child;
                        _subscribers[length + FULFILLED] = onFulfillment;
                        _subscribers[length + REJECTED] = onRejection;

                        if (length === 0 && parent._state) {
                            asap(publish, parent);
                        }
                    }

                    function publish(promise) {
                        var subscribers = promise._subscribers;
                        var settled = promise._state;

                        if (subscribers.length === 0) {
                            return;
                        }

                        var child = void 0,
                            callback = void 0,
                            detail = promise._result;

                        for (var i = 0; i < subscribers.length; i += 3) {
                            child = subscribers[i];
                            callback = subscribers[i + settled];

                            if (child) {
                                invokeCallback(settled, child, callback, detail);
                            } else {
                                callback(detail);
                            }
                        }

                        promise._subscribers.length = 0;
                    }

                    function tryCatch(callback, detail) {
                        try {
                            return callback(detail);
                        } catch (e) {
                            TRY_CATCH_ERROR.error = e;
                            return TRY_CATCH_ERROR;
                        }
                    }

                    function invokeCallback(settled, promise, callback, detail) {
                        var hasCallback = isFunction(callback),
                            value = void 0,
                            error = void 0,
                            succeeded = void 0,
                            failed = void 0;

                        if (hasCallback) {
                            value = tryCatch(callback, detail);

                            if (value === TRY_CATCH_ERROR) {
                                failed = true;
                                error = value.error;
                                value.error = null;
                            } else {
                                succeeded = true;
                            }

                            if (promise === value) {
                                reject(promise, cannotReturnOwn());
                                return;
                            }
                        } else {
                            value = detail;
                            succeeded = true;
                        }

                        if (promise._state !== PENDING) {
                            // noop
                        } else if (hasCallback && succeeded) {
                            resolve(promise, value);
                        } else if (failed) {
                            reject(promise, error);
                        } else if (settled === FULFILLED) {
                            fulfill(promise, value);
                        } else if (settled === REJECTED) {
                            reject(promise, value);
                        }
                    }

                    function initializePromise(promise, resolver) {
                        try {
                            resolver(function resolvePromise(value) {
                                resolve(promise, value);
                            }, function rejectPromise(reason) {
                                reject(promise, reason);
                            });
                        } catch (e) {
                            reject(promise, e);
                        }
                    }

                    var id = 0;
                    function nextId() {
                        return id++;
                    }

                    function makePromise(promise) {
                        promise[PROMISE_ID] = id++;
                        promise._state = undefined;
                        promise._result = undefined;
                        promise._subscribers = [];
                    }

                    function validationError() {
                        return new Error('Array Methods must be provided an Array');
                    }

                    var Enumerator = function () {
                        function Enumerator(Constructor, input) {
                            this._instanceConstructor = Constructor;
                            this.promise = new Constructor(noop);

                            if (!this.promise[PROMISE_ID]) {
                                makePromise(this.promise);
                            }

                            if (isArray(input)) {
                                this.length = input.length;
                                this._remaining = input.length;

                                this._result = new Array(this.length);

                                if (this.length === 0) {
                                    fulfill(this.promise, this._result);
                                } else {
                                    this.length = this.length || 0;
                                    this._enumerate(input);
                                    if (this._remaining === 0) {
                                        fulfill(this.promise, this._result);
                                    }
                                }
                            } else {
                                reject(this.promise, validationError());
                            }
                        }

                        Enumerator.prototype._enumerate = function _enumerate(input) {
                            for (var i = 0; this._state === PENDING && i < input.length; i++) {
                                this._eachEntry(input[i], i);
                            }
                        };

                        Enumerator.prototype._eachEntry = function _eachEntry(entry, i) {
                            var c = this._instanceConstructor;
                            var resolve$$1 = c.resolve;


                            if (resolve$$1 === resolve$1) {
                                var _then = getThen(entry);

                                if (_then === then && entry._state !== PENDING) {
                                    this._settledAt(entry._state, i, entry._result);
                                } else if (typeof _then !== 'function') {
                                    this._remaining--;
                                    this._result[i] = entry;
                                } else if (c === Promise$1) {
                                    var promise = new c(noop);
                                    handleMaybeThenable(promise, entry, _then);
                                    this._willSettleAt(promise, i);
                                } else {
                                    this._willSettleAt(new c(function (resolve$$1) {
                                        return resolve$$1(entry);
                                    }), i);
                                }
                            } else {
                                this._willSettleAt(resolve$$1(entry), i);
                            }
                        };

                        Enumerator.prototype._settledAt = function _settledAt(state, i, value) {
                            var promise = this.promise;


                            if (promise._state === PENDING) {
                                this._remaining--;

                                if (state === REJECTED) {
                                    reject(promise, value);
                                } else {
                                    this._result[i] = value;
                                }
                            }

                            if (this._remaining === 0) {
                                fulfill(promise, this._result);
                            }
                        };

                        Enumerator.prototype._willSettleAt = function _willSettleAt(promise, i) {
                            var enumerator = this;

                            subscribe(promise, undefined, function (value) {
                                return enumerator._settledAt(FULFILLED, i, value);
                            }, function (reason) {
                                return enumerator._settledAt(REJECTED, i, reason);
                            });
                        };

                        return Enumerator;
                    }();

                    /**
                     `Promise.all` accepts an array of promises, and returns a new promise which
                     is fulfilled with an array of fulfillment values for the passed promises, or
                     rejected with the reason of the first passed promise to be rejected. It casts all
                     elements of the passed iterable to promises as it runs this algorithm.

                     Example:

                     ```javascript
                     let promise1 = resolve(1);
                     let promise2 = resolve(2);
                     let promise3 = resolve(3);
                     let promises = [ promise1, promise2, promise3 ];

                     Promise.all(promises).then(function(array){
    // The array here would be [ 1, 2, 3 ];
  });
                     ```

                     If any of the `promises` given to `all` are rejected, the first promise
                     that is rejected will be given as an argument to the returned promises's
                     rejection handler. For example:

                     Example:

                     ```javascript
                     let promise1 = resolve(1);
                     let promise2 = reject(new Error("2"));
                     let promise3 = reject(new Error("3"));
                     let promises = [ promise1, promise2, promise3 ];

                     Promise.all(promises).then(function(array){
    // Code here never runs because there are rejected promises!
  }, function(error) {
    // error.message === "2"
  });
                     ```

                     @method all
                     @static
                     @param {Array} entries array of promises
                     @param {String} label optional string for labeling the promise.
                     Useful for tooling.
                     @return {Promise} promise that is fulfilled when all `promises` have been
                     fulfilled, or rejected if any of them become rejected.
                     @static
                     */
                    function all(entries) {
                        return new Enumerator(this, entries).promise;
                    }

                    /**
                     `Promise.race` returns a new promise which is settled in the same way as the
                     first passed promise to settle.

                     Example:

                     ```javascript
                     let promise1 = new Promise(function(resolve, reject){
    setTimeout(function(){
      resolve('promise 1');
    }, 200);
  });

                     let promise2 = new Promise(function(resolve, reject){
    setTimeout(function(){
      resolve('promise 2');
    }, 100);
  });

                     Promise.race([promise1, promise2]).then(function(result){
    // result === 'promise 2' because it was resolved before promise1
    // was resolved.
  });
                     ```

                     `Promise.race` is deterministic in that only the state of the first
                     settled promise matters. For example, even if other promises given to the
                     `promises` array argument are resolved, but the first settled promise has
                     become rejected before the other promises became fulfilled, the returned
                     promise will become rejected:

                     ```javascript
                     let promise1 = new Promise(function(resolve, reject){
    setTimeout(function(){
      resolve('promise 1');
    }, 200);
  });

                     let promise2 = new Promise(function(resolve, reject){
    setTimeout(function(){
      reject(new Error('promise 2'));
    }, 100);
  });

                     Promise.race([promise1, promise2]).then(function(result){
    // Code here never runs
  }, function(reason){
    // reason.message === 'promise 2' because promise 2 became rejected before
    // promise 1 became fulfilled
  });
                     ```

                     An example real-world use case is implementing timeouts:

                     ```javascript
                     Promise.race([ajax('foo.json'), timeout(5000)])
                     ```

                     @method race
                     @static
                     @param {Array} promises array of promises to observe
                     Useful for tooling.
                     @return {Promise} a promise which settles in the same way as the first passed
                     promise to settle.
                     */
                    function race(entries) {
                        /*jshint validthis:true */
                        var Constructor = this;

                        if (!isArray(entries)) {
                            return new Constructor(function (_, reject) {
                                return reject(new TypeError('You must pass an array to race.'));
                            });
                        } else {
                            return new Constructor(function (resolve, reject) {
                                var length = entries.length;
                                for (var i = 0; i < length; i++) {
                                    Constructor.resolve(entries[i]).then(resolve, reject);
                                }
                            });
                        }
                    }

                    /**
                     `Promise.reject` returns a promise rejected with the passed `reason`.
                     It is shorthand for the following:

                     ```javascript
                     let promise = new Promise(function(resolve, reject){
    reject(new Error('WHOOPS'));
  });

                     promise.then(function(value){
    // Code here doesn't run because the promise is rejected!
  }, function(reason){
    // reason.message === 'WHOOPS'
  });
                     ```

                     Instead of writing the above, your code now simply becomes the following:

                     ```javascript
                     let promise = Promise.reject(new Error('WHOOPS'));

                     promise.then(function(value){
    // Code here doesn't run because the promise is rejected!
  }, function(reason){
    // reason.message === 'WHOOPS'
  });
                     ```

                     @method reject
                     @static
                     @param {Any} reason value that the returned promise will be rejected with.
                     Useful for tooling.
                     @return {Promise} a promise rejected with the given `reason`.
                     */
                    function reject$1(reason) {
                        /*jshint validthis:true */
                        var Constructor = this;
                        var promise = new Constructor(noop);
                        reject(promise, reason);
                        return promise;
                    }

                    function needsResolver() {
                        throw new TypeError('You must pass a resolver function as the first argument to the promise constructor');
                    }

                    function needsNew() {
                        throw new TypeError("Failed to construct 'Promise': Please use the 'new' operator, this object constructor cannot be called as a function.");
                    }

                    /**
                     Promise objects represent the eventual result of an asynchronous operation. The
                     primary way of interacting with a promise is through its `then` method, which
                     registers callbacks to receive either a promise's eventual value or the reason
                     why the promise cannot be fulfilled.

                     Terminology
                     -----------

                     - `promise` is an object or function with a `then` method whose behavior conforms to this specification.
                     - `thenable` is an object or function that defines a `then` method.
                     - `value` is any legal JavaScript value (including undefined, a thenable, or a promise).
                     - `exception` is a value that is thrown using the throw statement.
                     - `reason` is a value that indicates why a promise was rejected.
                     - `settled` the final resting state of a promise, fulfilled or rejected.

                     A promise can be in one of three states: pending, fulfilled, or rejected.

                     Promises that are fulfilled have a fulfillment value and are in the fulfilled
                     state.  Promises that are rejected have a rejection reason and are in the
                     rejected state.  A fulfillment value is never a thenable.

                     Promises can also be said to *resolve* a value.  If this value is also a
                     promise, then the original promise's settled state will match the value's
                     settled state.  So a promise that *resolves* a promise that rejects will
                     itself reject, and a promise that *resolves* a promise that fulfills will
                     itself fulfill.


                     Basic Usage:
                     ------------

                     ```js
                     let promise = new Promise(function(resolve, reject) {
    // on success
    resolve(value);

    // on failure
    reject(reason);
  });

                     promise.then(function(value) {
    // on fulfillment
  }, function(reason) {
    // on rejection
  });
                     ```

                     Advanced Usage:
                     ---------------

                     Promises shine when abstracting away asynchronous interactions such as
                     `XMLHttpRequest`s.

                     ```js
                     function getJSON(url) {
    return new Promise(function(resolve, reject){
      let xhr = new XMLHttpRequest();

      xhr.open('GET', url);
      xhr.onreadystatechange = handler;
      xhr.responseType = 'json';
      xhr.setRequestHeader('Accept', 'application/json');
      xhr.send();

      function handler() {
        if (this.readyState === this.DONE) {
          if (this.status === 200) {
            resolve(this.response);
          } else {
            reject(new Error('getJSON: `' + url + '` failed with status: [' + this.status + ']'));
          }
        }
      };
    });
  }

                     getJSON('/posts.json').then(function(json) {
    // on fulfillment
  }, function(reason) {
    // on rejection
  });
                     ```

                     Unlike callbacks, promises are great composable primitives.

                     ```js
                     Promise.all([
                     getJSON('/posts'),
                     getJSON('/comments')
                     ]).then(function(values){
    values[0] // => postsJSON
    values[1] // => commentsJSON

    return values;
  });
                     ```

                     @class Promise
                     @param {Function} resolver
                     Useful for tooling.
                     @constructor
                     */

                    var Promise$1 = function () {
                        function Promise(resolver) {
                            this[PROMISE_ID] = nextId();
                            this._result = this._state = undefined;
                            this._subscribers = [];

                            if (noop !== resolver) {
                                typeof resolver !== 'function' && needsResolver();
                                this instanceof Promise ? initializePromise(this, resolver) : needsNew();
                            }
                        }

                        /**
                         The primary way of interacting with a promise is through its `then` method,
                         which registers callbacks to receive either a promise's eventual value or the
                         reason why the promise cannot be fulfilled.
                         ```js
                         findUser().then(function(user){
    // user is available
  }, function(reason){
    // user is unavailable, and you are given the reason why
  });
                         ```
                         Chaining
                         --------
                         The return value of `then` is itself a promise.  This second, 'downstream'
                         promise is resolved with the return value of the first promise's fulfillment
                         or rejection handler, or rejected if the handler throws an exception.
                         ```js
                         findUser().then(function (user) {
    return user.name;
  }, function (reason) {
    return 'default name';
  }).then(function (userName) {
    // If `findUser` fulfilled, `userName` will be the user's name, otherwise it
    // will be `'default name'`
  });
                         findUser().then(function (user) {
    throw new Error('Found user, but still unhappy');
  }, function (reason) {
    throw new Error('`findUser` rejected and we're unhappy');
  }).then(function (value) {
    // never reached
  }, function (reason) {
    // if `findUser` fulfilled, `reason` will be 'Found user, but still unhappy'.
    // If `findUser` rejected, `reason` will be '`findUser` rejected and we're unhappy'.
  });
                         ```
                         If the downstream promise does not specify a rejection handler, rejection reasons will be propagated further downstream.
                         ```js
                         findUser().then(function (user) {
    throw new PedagogicalException('Upstream error');
  }).then(function (value) {
    // never reached
  }).then(function (value) {
    // never reached
  }, function (reason) {
    // The `PedgagocialException` is propagated all the way down to here
  });
                         ```
                         Assimilation
                         ------------
                         Sometimes the value you want to propagate to a downstream promise can only be
                         retrieved asynchronously. This can be achieved by returning a promise in the
                         fulfillment or rejection handler. The downstream promise will then be pending
                         until the returned promise is settled. This is called *assimilation*.
                         ```js
                         findUser().then(function (user) {
    return findCommentsByAuthor(user);
  }).then(function (comments) {
    // The user's comments are now available
  });
                         ```
                         If the assimliated promise rejects, then the downstream promise will also reject.
                         ```js
                         findUser().then(function (user) {
    return findCommentsByAuthor(user);
  }).then(function (comments) {
    // If `findCommentsByAuthor` fulfills, we'll have the value here
  }, function (reason) {
    // If `findCommentsByAuthor` rejects, we'll have the reason here
  });
                         ```
                         Simple Example
                         --------------
                         Synchronous Example
                         ```javascript
                         let result;
                         try {
    result = findResult();
    // success
  } catch(reason) {
    // failure
  }
                         ```
                         Errback Example
                         ```js
                         findResult(function(result, err){
    if (err) {
      // failure
    } else {
      // success
    }
  });
                         ```
                         Promise Example;
                         ```javascript
                         findResult().then(function(result){
    // success
  }, function(reason){
    // failure
  });
                         ```
                         Advanced Example
                         --------------
                         Synchronous Example
                         ```javascript
                         let author, books;
                         try {
    author = findAuthor();
    books  = findBooksByAuthor(author);
    // success
  } catch(reason) {
    // failure
  }
                         ```
                         Errback Example
                         ```js
                         function foundBooks(books) {
   }
                         function failure(reason) {
   }
                         findAuthor(function(author, err){
    if (err) {
      failure(err);
      // failure
    } else {
      try {
        findBoooksByAuthor(author, function(books, err) {
          if (err) {
            failure(err);
          } else {
            try {
              foundBooks(books);
            } catch(reason) {
              failure(reason);
            }
          }
        });
      } catch(error) {
        failure(err);
      }
      // success
    }
  });
                         ```
                         Promise Example;
                         ```javascript
                         findAuthor().
                         then(findBooksByAuthor).
                         then(function(books){
      // found books
  }).catch(function(reason){
    // something went wrong
  });
                         ```
                         @method then
                         @param {Function} onFulfilled
                         @param {Function} onRejected
                         Useful for tooling.
                         @return {Promise}
                         */

                        /**
                         `catch` is simply sugar for `then(undefined, onRejection)` which makes it the same
                         as the catch block of a try/catch statement.
                         ```js
                         function findAuthor(){
  throw new Error('couldn't find that author');
  }
                         // synchronous
                         try {
  findAuthor();
  } catch(reason) {
  // something went wrong
  }
                         // async with promises
                         findAuthor().catch(function(reason){
  // something went wrong
  });
                         ```
                         @method catch
                         @param {Function} onRejection
                         Useful for tooling.
                         @return {Promise}
                         */


                        Promise.prototype.catch = function _catch(onRejection) {
                            return this.then(null, onRejection);
                        };

                        /**
                         `finally` will be invoked regardless of the promise's fate just as native
                         try/catch/finally behaves

                         Synchronous example:

                         ```js
                         findAuthor() {
      if (Math.random() > 0.5) {
        throw new Error();
      }
      return new Author();
    }

                         try {
      return findAuthor(); // succeed or fail
    } catch(error) {
      return findOtherAuther();
    } finally {
      // always runs
      // doesn't affect the return value
    }
                         ```

                         Asynchronous example:

                         ```js
                         findAuthor().catch(function(reason){
      return findOtherAuther();
    }).finally(function(){
      // author was either found, or not
    });
                         ```

                         @method finally
                         @param {Function} callback
                         @return {Promise}
                         */


                        Promise.prototype.finally = function _finally(callback) {
                            var promise = this;
                            var constructor = promise.constructor;

                            if (isFunction(callback)) {
                                return promise.then(function (value) {
                                    return constructor.resolve(callback()).then(function () {
                                        return value;
                                    });
                                }, function (reason) {
                                    return constructor.resolve(callback()).then(function () {
                                        throw reason;
                                    });
                                });
                            }

                            return promise.then(callback, callback);
                        };

                        return Promise;
                    }();

                    Promise$1.prototype.then = then;
                    Promise$1.all = all;
                    Promise$1.race = race;
                    Promise$1.resolve = resolve$1;
                    Promise$1.reject = reject$1;
                    Promise$1._setScheduler = setScheduler;
                    Promise$1._setAsap = setAsap;
                    Promise$1._asap = asap;

                    /*global self*/
                    function polyfill() {
                        var local = void 0;

                        if (typeof (typeof window !== undefined ? window : global) !== 'undefined') {
                            local = (typeof window !== undefined ? window : global);
                        } else if (typeof self !== 'undefined') {
                            local = self;
                        } else {
                            try {
                                local = Function('return this')();
                            } catch (e) {
                                throw new Error('polyfill failed because global object is unavailable in this environment');
                            }
                        }

                        var P = local.Promise;

                        if (P) {
                            var promiseToString = null;
                            try {
                                promiseToString = Object.prototype.toString.call(P.resolve());
                            } catch (e) {
                                // silently ignored
                            }

                            if (promiseToString === '[object Promise]' && !P.cast) {
                                return;
                            }
                        }

                        local.Promise = Promise$1;
                    }

// Strange compat..
                    Promise$1.polyfill = polyfill;
                    Promise$1.Promise = Promise$1;

                    return Promise$1;

                })));



//# sourceMappingURL=es6-promise.map

                /* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(47)))

            /***/ }),
        /* 1 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var debug = __webpack_require__(445);
            var memoize = __webpack_require__(125);

            var logLevels = __webpack_require__(127);

            /**
             * @typedef {Object} Logger
             * @property {Function} error
             * @property {Function} warn
             * @property {Function} info
             * @property {Function} log
             * @property {Function} debug
             * @property {Function} spam
             */

            var createLogger = memoize(function (namespace) {
                /** @type Logger */
                var API = {};

                var setMethods = function setMethods() {
                    Object.keys(logLevels).forEach(function (name) {
                        var method = logLevels[name].method;
                        var log = debug('OpenTok:' + namespace + ':' + name.toLowerCase());
                        log.log = console[method].bind(console);
                        API[name.toLowerCase()] = log;
                    });
                };

                setMethods();

                return API;
            });

            createLogger.setLogLevel = function (level) {
                var oldRules = void 0;
                try {
                    oldRules = (typeof window !== undefined ? window : global).localStorage.debug;
                } catch (err) {
                    // will get Uncaught DOMException: Failed to read the 'localStorage' property from 'Window':
                    // The document is sandboxed and lacks the 'allow-same-origin' flag.
                    oldRules = '';
                }
                var newDebugRules = Object.keys(logLevels).map(function (name) {
                    return (level >= logLevels[name].priority ? '' : '-') + '(autogen)?OpenTok:*:' + name.toLowerCase();
                });

                var debugStr = [].concat(newDebugRules, (oldRules || '').split(/[\s,]/).filter(function (rule) {
                    return rule.indexOf('(autogen)?') === -1;
                })).filter(function (x) {
                    return x;
                }).join(',');

                debug.enable(debugStr);
            };

            module.exports = createLogger;

            /***/ }),
        /* 2 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            /* eslint-disable no-underscore-dangle */

// The top-level namespace, also performs basic DOMElement selecting.
//
// @example Get the DOM element with the id of 'domId'
//   OTHelpers('#domId')
//
// @example Get all video elements
//   OTHelpers('video')
//
// @example Get all elements with the class name of 'foo'
//   OTHelpers('.foo')
//
// @example Get all elements with the class name of 'foo',
// and do something with the first.
//   var collection = OTHelpers('.foo');
//   console.log(collection.first);
//
//
// The second argument is the context, that is document or parent Element, to
// select from.
//
// @example Get a video element within the element with the id of 'domId'
//   OTHelpers('video', OTHelpers('#domId'))
//
//
//
// OTHelpers will accept any of the following and return a collection:
//   OTHelpers()
//   OTHelpers('css selector', optionalParentNode)
//   OTHelpers(DomNode)
//   OTHelpers([array of DomNode])
//
// The collection is a ElementCollection object, see the ElementCollection docs for usage info.
//
            var OTHelpers = __webpack_require__(210);
            var setDeprecatedProperty = __webpack_require__(212);
            var eventing = __webpack_require__(4);
            var log = __webpack_require__(1);

            OTHelpers.logging = log('OT.$');

            OTHelpers.ElementCollection = __webpack_require__(211);
            OTHelpers.env = __webpack_require__(3);
            OTHelpers.ajax = __webpack_require__(223);
            OTHelpers.statable = __webpack_require__(487);
            OTHelpers.Analytics = __webpack_require__(225);
            OTHelpers.Collection = __webpack_require__(491);
            OTHelpers.domExtras = __webpack_require__(492);
            OTHelpers.Error = __webpack_require__(228);

            setDeprecatedProperty(OTHelpers, 'useLogHelpers', {
                value: function value(mixin) {
                    var logging = log('useLogHelpersDeprecatedMixin');
                    // eslint-disable-next-line no-param-reassign
                    Object.keys(logging).forEach(function (key) {
                        mixin[key] = logging[key];
                    });
                    return mixin;
                },

                name: 'OT.useLogHelpers',
                getWarning: 'Please use an external library for your debugging needs'
            });

            OTHelpers.defaults = __webpack_require__(131);

            setDeprecatedProperty(OTHelpers, 'eventing', {
                value: eventing,
                name: 'OT.$.eventing',
                getWarning: 'Please use an external library to create an event emitter.'
            });

// TODO: Remove the need for this kind of bazzadry.
            Object.keys(OTHelpers).forEach(function (key) {
                var component = OTHelpers[key];
                var attachments = component._attachToOTHelpers || {};

                Object.keys(attachments).forEach(function (attachmentName) {
                    if (Object.hasOwnProperty.call(OTHelpers, attachmentName) && !(key === 'util' && attachmentName === 'bind')) {
                        console.warn('More than one module is trying to define ' + attachmentName + ' on OTHelpers.');
                    }
                    OTHelpers[attachmentName] = attachments[attachmentName];
                });
            });

            module.exports = OTHelpers;

            /***/ }),
        /* 3 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";
            /* WEBPACK VAR INJECTION */(function(process) {

                /*
 * Environment details
 *
 * Contains information about the current environment.
 *
 * @property name The name of the Environment (Chrome, FF, Node, etc)
 * @property version Usually a Float, except in Node which uses a String
 * @property userAgent The raw user agent
 *
 */

                var env = {
                    version: -1 // @todo why is the default -1?
                };

                env.version = -1;

                if (process && process.versions && typeof process.versions.node === 'string') {
                    env.name = 'Node';
                    env.version = parseInt(process.versions.node, 10);
                    env.userAgent = env.name + ' ' + env.version;
                } else {
                    env.userAgent = (typeof window !== undefined ? window : global).navigator.userAgent.toLowerCase(); // @todo why lowercase?
                    env.appName = (typeof window !== undefined ? window : global).navigator.appName;
                    env.navigatorVendor = undefined;
                    env.name = 'unknown';

                    if (env.userAgent.indexOf('opera') > -1 || env.userAgent.indexOf('opr/') > -1) {
                        env.name = 'Opera';

                        if (/opr\/([0-9]{1,}[.0-9]{0,})/.exec(env.userAgent) !== null) {
                            env.version = parseFloat(RegExp.$1);
                        }
                    } else if (env.userAgent.indexOf('firefox') > -1) {
                        env.name = 'Firefox';

                        if (/firefox\/([0-9]{1,}[.0-9]{0,})/.exec(env.userAgent) !== null) {
                            env.version = parseFloat(RegExp.$1);
                        }
                    } else if (env.appName === 'Microsoft Internet Explorer') {
                        // IE 10 and below
                        env.name = 'IE';

                        if (/msie ([0-9]{1,}[.0-9]{0,})/.exec(env.userAgent) !== null) {
                            env.version = parseFloat(RegExp.$1);
                        }
                    } else if (env.userAgent.search(/edge\/\d+(\.\d+)?$/) > -1) {
                        env.name = 'Edge';

                        if (/edge\/(\d+(\.\d+)?)$/.exec(env.userAgent) !== null) {
                            env.version = parseFloat(RegExp.$1);
                        }
                    } else if (env.appName === 'Netscape' && env.userAgent.indexOf('trident') > -1) {
                        // IE 11+

                        env.name = 'IE';

                        if (/trident\/.*rv:([0-9]{1,}[.0-9]{0,})/.exec(env.userAgent) !== null) {
                            env.version = parseFloat(RegExp.$1);
                        }
                    } else if (env.userAgent.indexOf('chrome') > -1) {
                        env.name = 'Chrome';
                        env.isElectron = env.userAgent.indexOf('electron/') > -1;

                        if (/chrome\/([0-9]{1,}[.0-9]{0,})/.exec(env.userAgent) !== null) {
                            env.version = parseFloat(RegExp.$1);
                        }
                    } else if ((typeof window !== undefined ? window : global).navigator.vendor && (typeof window !== undefined ? window : global).navigator.vendor.toLowerCase().indexOf('apple') > -1) {
                        env.name = 'Safari';

                        if (/version\/([0-9]{1,}[.0-9]{0,})/.exec(env.userAgent) !== null) {
                            env.version = parseFloat(RegExp.$1);
                        }
                    }

                    env.userAgent = (typeof window !== undefined ? window : global).navigator.userAgent;
                    env.protocol = (typeof window !== undefined ? window : global).location.protocol;
                    env.hostName = (typeof window !== undefined ? window : global).location.hostName;
                }

                module.exports = env;
                /* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(47)))

            /***/ }),
        /* 4 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var Events = __webpack_require__(30);
            var isFunction = __webpack_require__(11);
            var logging = __webpack_require__(1)('Events');
            var assign = __webpack_require__(5);
            var weakMemoizeBind = __webpack_require__(448);

            /**
             * This base class defines the <code>on</code>, <code>once</code>, and <code>off</code>
             * methods of objects that can dispatch events.
             *
             * @class EventDispatcher
             */
            module.exports = function eventing(self) {
                var ee = new Events();

                ee.on('newListener', function (eventName) {
                    ee.emit(eventName + ':added');
                });

                ee.on('removeListener', function (eventName) {
                    ee.emit(eventName + ':removed');
                });

                var eventingMixin = {
                    /**
                     * Adds an event handler function for one or more events.
                     *
                     * <p>
                     * The following code adds an event handler for one event:
                     * </p>
                     *
                     * <pre>
                     * obj.on("eventName", function (event) {
                     *     // This is the event handler.
                     * });
                     * </pre>
                     *
                     * <p>If you pass in multiple event names and a handler method, the handler is
                     * registered for each of those events:</p>
                     *
                     * <pre>
                     * obj.on("eventName1 eventName2",
                     *        function (event) {
                     *            // This is the event handler.
                     *        });
                     * </pre>
                     *
                     * <p>You can also pass in a third <code>context</code> parameter (which is optional) to
                     * define the value of <code>this</code> in the handler method:</p>
                     *
                     * <pre>obj.on("eventName",
                     *        function (event) {
                     *            // This is the event handler.
                     *        },
                     *        obj);
                     * </pre>
                     *
                     * <p>
                     * The method also supports an alternate syntax, in which the first parameter is an object
                     * that is a hash map of event names and handler functions and the second parameter (optional)
                     * is the context for this in each handler:
                     * </p>
                     * <pre>
                     * obj.on(
                     *    {
                     *       eventName1: function (event) {
                     *               // This is the handler for eventName1.
                     *           },
                     *       eventName2:  function (event) {
                     *               // This is the handler for eventName2.
                     *           }
                     *    },
                     *    obj);
                     * </pre>
                     *
                     * <p>
                     * If you do not add a handler for an event, the event is ignored locally.
                     * </p>
                     *
                     * @param {String} type The string identifying the type of event. You can specify multiple event
                     * names in this string, separating them with a space. The event handler will process each of
                     * the events.
                     * @param {Function} handler The handler function to process the event. This function takes
                     * the event object as a parameter.
                     * @param {Object} context (Optional) Defines the value of <code>this</code> in the event
                     * handler function.
                     *
                     * @returns {EventDispatcher} The EventDispatcher object.
                     *
                     * @memberOf EventDispatcher
                     * @method #on
                     * @see <a href="#off">off()</a>
                     * @see <a href="#once">once()</a>
                     * @see <a href="#events">Events</a>
                     */

                    on: function on(eventNames, handlerOrContext, context) {
                        if (typeof eventNames === 'string' && handlerOrContext) {
                            eventNames.split(' ').forEach(function (eventName) {
                                ee.on(eventName, weakMemoizeBind(handlerOrContext, context));
                            });
                        } else {
                            Object.keys(eventNames).forEach(function (eventName) {
                                ee.on(eventName, weakMemoizeBind(eventNames[eventName], handlerOrContext));
                            });
                        }
                        return this;
                    },


                    /**
                     * Removes an event handler or handlers.
                     *
                     * <p>If you pass in one event name and a handler method, the handler is removed for that
                     * event:</p>
                     *
                     * <pre>obj.off("eventName", eventHandler);</pre>
                     *
                     * <p>If you pass in multiple event names and a handler method, the handler is removed for
                     * those events:</p>
                     *
                     * <pre>obj.off("eventName1 eventName2", eventHandler);</pre>
                     *
                     * <p>If you pass in an event name (or names) and <i>no</i> handler method, all handlers are
                     * removed for those events:</p>
                     *
                     * <pre>obj.off("event1Name event2Name");</pre>
                     *
                     * <p>If you pass in no arguments, <i>all</i> event handlers are removed for all events
                     * dispatched by the object:</p>
                     *
                     * <pre>obj.off();</pre>
                     *
                     * <p>
                     * The method also supports an alternate syntax, in which the first parameter is an object that
                     * is a hash map of event names and handler functions and the second parameter (optional) is
                     * the context for this in each handler:
                     * </p>
                     * <pre>
                     * obj.off(
                     *    {
                     *       eventName1: event1Handler,
                     *       eventName2: event2Handler
                     *    });
                     * </pre>
                     *
                     * @param {String} type (Optional) The string identifying the type of event. You can
                     * use a space to specify multiple events, as in "accessAllowed accessDenied
                     * accessDialogClosed". If you pass in no <code>type</code> value (or other arguments),
                     * all event handlers are removed for the object.
                     * @param {Function} handler (Optional) The event handler function to remove. The handler
                     * must be the same function object as was passed into <code>on()</code>. Be careful with
                     * helpers like <code>bind()</code> that return a new function when called. If you pass in
                     * no <code>handler</code>, all event handlers are removed for the specified event
                     * <code>type</code>.
                     * @param {Object} context (Optional) If you specify a <code>context</code>, the event handler
                     * is removed for all specified events and handlers that use the specified context. (The
                     * context must match the context passed into <code>on()</code>.)
                     *
                     * @returns {Object} The object that dispatched the event.
                     *
                     * @memberOf EventDispatcher
                     * @method #off
                     * @see <a href="#on">on()</a>
                     * @see <a href="#once">once()</a>
                     * @see <a href="#events">Events</a>
                     */
                    off: function off(eventNames, handlerOrContext, context) {
                        if (typeof eventNames === 'string') {
                            this.off(eventNames.split(' '), handlerOrContext, context);
                        } else if (Array.isArray(eventNames)) {
                            eventNames.forEach(function (eventName) {
                                if (handlerOrContext && isFunction(handlerOrContext)) {
                                    ee.removeListener(eventName, weakMemoizeBind(handlerOrContext, context));
                                } else {
                                    ee.removeAllListeners(eventName);
                                }
                            });
                        } else if (!eventNames) {
                            ee.removeAllListeners();
                        } else {
                            Object.keys(eventNames).forEach(function (eventName) {
                                // @todo was {foo: undefined} expected to remove all foo events?
                                ee.removeListener(eventName, weakMemoizeBind(eventNames[eventName], handlerOrContext));
                            });
                        }

                        return this;
                    },


                    /**
                     * Adds an event handler function for one or more events. Once the handler is called,
                     * the specified handler method is removed as a handler for this event. (When you use
                     * the <code>on()</code> method to add an event handler, the handler is <i>not</i>
                     * removed when it is called.) The <code>once()</code> method is the equivilent of
                     * calling the <code>on()</code>
                     * method and calling <code>off()</code> the first time the handler is invoked.
                     *
                     * <p>
                     * The following code adds a one-time event handler for one event:
                     * </p>
                     *
                     * <pre>
                     * obj.once("eventName", function (event) {
                     *    // This is the event handler.
                     * });
                     * </pre>
                     *
                     * <p>If you pass in multiple event names and a handler method, the handler is registered
                     * for each of those events:</p>
                     *
                     * <pre>obj.once("eventName1 eventName2"
                     *          function (event) {
                     *              // This is the event handler.
                     *          });
                     * </pre>
                     *
                     * <p>You can also pass in a third <code>context</code> parameter (which is optional) to define
                     * the value of
                     * <code>this</code> in the handler method:</p>
                     *
                     * <pre>obj.once("eventName",
                     *          function (event) {
                     *              // This is the event handler.
                     *          },
                     *          obj);
                     * </pre>
                     *
                     * <p>
                     * The method also supports an alternate syntax, in which the first parameter is an object that
                     * is a hash map of event names and handler functions and the second parameter (optional) is the
                     * context for this in each handler:
                     * </p>
                     * <pre>
                     * obj.once(
                     *    {
                     *       eventName1: function (event) {
                     *                  // This is the event handler for eventName1.
                     *           },
                     *       eventName2:  function (event) {
                     *                  // This is the event handler for eventName1.
                     *           }
                     *    },
                     *    obj);
                     * </pre>
                     *
                     * @param {String} type The string identifying the type of event. You can specify multiple
                     * event names in this string, separating them with a space. The event handler will process
                     * the first occurence of the events. After the first event, the handler is removed (for
                     * all specified events).
                     * @param {Function} handler The handler function to process the event. This function takes
                     * the event object as a parameter.
                     * @param {Object} context (Optional) Defines the value of <code>this</code> in the event
                     * handler function.
                     *
                     * @returns {Object} The object that dispatched the event.
                     *
                     * @memberOf EventDispatcher
                     * @method #once
                     * @see <a href="#on">on()</a>
                     * @see <a href="#off">off()</a>
                     * @see <a href="#events">Events</a>
                     */
                    once: function once(eventNames, handlerOrContext, context) {
                        if (typeof eventNames === 'string' && handlerOrContext) {
                            eventNames.split(' ').forEach(function (eventName) {
                                ee.once(eventName, weakMemoizeBind(handlerOrContext, context));
                            });
                        } else {
                            Object.keys(eventNames).forEach(function (eventName) {
                                ee.once(eventName, weakMemoizeBind(eventNames[eventName], handlerOrContext));
                            });
                        }
                        return this;
                    },


                    /**
                     * Execute any listeners bound to the +event+ Event.
                     *
                     * Each handler will be executed.
                     *
                     * @param [Event] event An Event object.
                     * @return this
                     */
                    dispatchEvent: function dispatchEvent(event) {
                        if (!event.type) {
                            throw new Error('dispatchEvent: Event has no type');
                        }

                        if (!event.target) {
                            event.target = this; // eslint-disable-line no-param-reassign
                        }

                        this.trigger(event.type, event);

                        return this;
                    },


                    /**
                     * Execute each handler for the event called +name+.
                     *
                     * Each handler will be executed, and any exceptions that they throw will
                     * be caught and logged
                     *
                     * @example
                     * foo.on('bar', function(name, message) {
                     *   alert("Hello " + name + ": " + message);
                     * });
                     *
                     * foo.trigger('OpenTok', 'asdf'); // -> Hello OpenTok: asdf
                     *
                     * @param {String} eventName The name of this event.
                     * @param {Array} arguments The arguments handlers will be called with
                     *
                     * @return this
                     */
                    trigger: function trigger(eventName) {
                        try {
                            for (var _len = arguments.length, args = Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
                                args[_key - 1] = arguments[_key];
                            }

                            ee.emit.apply(ee, [eventName].concat(args));
                        } catch (e) {
                            console.error('An error occurred in an event handler', e);
                        }
                        return this;
                    },


                    // Alias of trigger for easier node compatibility
                    emit: function emit() {
                        return self.trigger.apply(self, arguments);
                    },


                    /**
                     * @deprecated use <a href="#on">on()</a> or <a href="#once">once()</a> instead.
                     * <p>
                     * This method registers a method as an event listener for a specific event.
                     * <p>
                     *
                     * <p>
                     *   If a handler is not registered for an event, the event is ignored locally. If the
                     *   event listener function does not exist, the event is ignored locally.
                     * </p>
                     * <p>
                     *   Throws an exception if the <code>listener</code> name is invalid.
                     * </p>
                     *
                     * @param {String} type The string identifying the type of event.
                     *
                     * @param {Function} listener The function to be invoked when the object dispatches the event.
                     *
                     * @param {Object} context (Optional) Defines the value of <code>this</code> in the event
                     * handler function.
                     *
                     * @memberOf EventDispatcher
                     * @method #addEventListener
                     * @see <a href="#on">on()</a>
                     * @see <a href="#once">once()</a>
                     * @see <a href="#events">Events</a>
                     */

                    addEventListener: function addEventListener(eventName, handler, context) {
                        // @todo this shows a warning in IE because the tracks use this event system to communicate
                        // the ended event and possibly others.
                        logging.warn('The addEventListener() method is deprecated. Use on() or once() instead.');
                        return self.on(eventName, handler, context);
                    },


                    /**
                     * @deprecated use <a href="#off">off()</a> instead.
                     * <p>
                     * Removes an event listener for a specific event.
                     * <p>
                     *
                     * <p>
                     *   Throws an exception if the <code>listener</code> name is invalid.
                     * </p>
                     *
                     * @param {String} type The string identifying the type of event.
                     *
                     * @param {Function} listener The event listener function to remove.
                     *
                     * @param {Object} context (Optional) If you specify a <code>context</code>, the event
                     * handler is removed for all specified events and event listeners that use the specified
                     context. (The context must match the context passed into
                     * <code>addEventListener()</code>.)
                     *
                     * @memberOf EventDispatcher
                     * @method #removeEventListener
                     * @see <a href="#off">off()</a>
                     * @see <a href="#events">Events</a>
                     */
                    // See 'off' for usage.
                    // @depreciated will become a private helper function in the future.
                    removeEventListener: function removeEventListener(eventName, handler, context) {
                        // @todo this shows a warning in IE because the tracks use this event system to communicate
                        // the ended event and possibly others.

                        logging.warn('The removeEventListener() method is deprecated. Use off() instead.');
                        return self.off(eventName, handler, context);
                    },
                    listenerCount: function listenerCount(eventName) {
                        return ee.listenerCount(eventName);
                    }
                };

                return assign(self, eventingMixin);
            };

            /***/ }),
        /* 5 */
        /***/ (function(module, exports, __webpack_require__) {

            var assignValue = __webpack_require__(75),
                copyObject = __webpack_require__(38),
                createAssigner = __webpack_require__(213),
                isArrayLike = __webpack_require__(17),
                isPrototype = __webpack_require__(58),
                keys = __webpack_require__(27);

            /** Used for built-in method references. */
            var objectProto = Object.prototype;

            /** Used to check objects for own properties. */
            var hasOwnProperty = objectProto.hasOwnProperty;

            /**
             * Assigns own enumerable string keyed properties of source objects to the
             * destination object. Source objects are applied from left to right.
             * Subsequent sources overwrite property assignments of previous sources.
             *
             * **Note:** This method mutates `object` and is loosely based on
             * [`Object.assign`](https://mdn.io/Object/assign).
             *
             * @static
             * @memberOf _
             * @since 0.10.0
             * @category Object
             * @param {Object} object The destination object.
             * @param {...Object} [sources] The source objects.
             * @returns {Object} Returns `object`.
             * @see _.assignIn
             * @example
             *
             * function Foo() {
             *   this.a = 1;
             * }
             *
             * function Bar() {
             *   this.c = 3;
             * }
             *
             * Foo.prototype.b = 2;
             * Bar.prototype.d = 4;
             *
             * _.assign({ 'a': 0 }, new Foo, new Bar);
             * // => { 'a': 1, 'c': 3 }
             */
            var assign = createAssigner(function(object, source) {
                if (isPrototype(source) || isArrayLike(source)) {
                    copyObject(source, keys(source), object);
                    return;
                }
                for (var key in source) {
                    if (hasOwnProperty.call(source, key)) {
                        assignValue(object, key, source[key]);
                    }
                }
            });

            module.exports = assign;


            /***/ }),
        /* 6 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";
            /* WEBPACK VAR INJECTION */(function(Promise) {

                var _regenerator = __webpack_require__(22);

                var _regenerator2 = _interopRequireDefault(_regenerator);

                function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

                function _asyncToGenerator(fn) { return function () { var gen = fn.apply(this, arguments); return new Promise(function (resolve, reject) { function step(key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { return Promise.resolve(value).then(function (value) { step("next", value); }, function (err) { step("throw", err); }); } } return step("next"); }); }; }

// @todo enable the following disabled rules see OPENTOK-31136 for more info
                /* eslint-disable global-require, no-underscore-dangle, no-restricted-syntax */
                /* eslint-disable no-prototype-builtins, no-param-reassign, prefer-rest-params, no-shadow */

                var Analytics = __webpack_require__(20);
                var OTHelpers = __webpack_require__(2);
                var startupAnalyticsLogger = __webpack_require__(519);
                var promisify = __webpack_require__(97);

                var analytics = new Analytics();
                var OTPlugin = {};
                module.exports = OTPlugin;
                (typeof window !== undefined ? window : global).OTPlugin = OTPlugin;

// Establish the environment that we're running in
                OTPlugin.isSupported = function () {
                    return OTHelpers.env.name === 'IE' && OTHelpers.env.version >= 9;
                };

// If this client isn't supported we still make sure that OTPlugin is defined
// and the basic API (isSupported() and isInstalled()) is created.
// TODO: ^^^ Is this really needed? It would be nice to not monkey around with this early exit
// thingy.
                if (!OTPlugin.isSupported()) {
                    OTPlugin.isInstalled = function isInstalled() {
                        return false;
                    };
                } else {
                    var AutoUpdater = __webpack_require__(239);
                    var logging = __webpack_require__(1)('Plugin');
                    var MediaConstraints = __webpack_require__(534);
                    var MediaDevices = __webpack_require__(535);
                    var MediaStream = __webpack_require__(245);
                    var meta = __webpack_require__(94);
                    var createPeerConnection = __webpack_require__(538);
                    var PluginProxies = __webpack_require__(96);
                    var readiness = __webpack_require__(95);
                    var settings = __webpack_require__(547);
                    var RTCIceCandidate = __webpack_require__(246);
                    var RTCSessionDescription = __webpack_require__(247);

                    // TODO: Can we remove this? It's only here for possible external use.
                    OTPlugin.isReady = readiness.isReady;

                    OTPlugin.meta = meta;

                    OTPlugin.isInstalled = function isInstalled() {
                        if (!OTPlugin.isSupported()) {
                            return false;
                        }

                        return AutoUpdater.isinstalled();
                    };

                    OTPlugin.settings = settings;

                    OTPlugin.version = meta.version;
                    OTPlugin.installedVersion = meta.installedVersion;

                    // Returns a URI to the OTPlugin installer that is paired with
                    // this version of OTPlugin.js.
                    OTPlugin.pathToInstaller = meta.pathToInstaller;

                    // Trigger +callback+ when the plugin is ready
                    //
                    // Most of the public API cannot be called until
                    // the plugin is ready.
                    OTPlugin.ready = function ready(callback) {
                        readiness.listen(callback.bind(OTPlugin));
                    };

                    OTPlugin.getUserMedia = function () {
                        var _ref = _asyncToGenerator( /*#__PURE__*/_regenerator2.default.mark(function _callee(userConstraints) {
                            var mediaConstraints, plugin;
                            return _regenerator2.default.wrap(function _callee$(_context) {
                                while (1) {
                                    switch (_context.prev = _context.next) {
                                        case 0:
                                            mediaConstraints = new MediaConstraints(userConstraints);
                                            _context.next = 3;
                                            return promisify(PluginProxies.createMediaPeer.bind(PluginProxies))({});

                                        case 3:
                                            plugin = _context.sent;
                                            return _context.abrupt('return', new Promise(function (resolve, reject) {
                                                return plugin._.getUserMedia(mediaConstraints.toHash(), settings.usePreviousDeviceSelection, function (streamJson) {
                                                    return resolve(MediaStream.fromJson(streamJson, plugin));
                                                }, reject);
                                            }));

                                        case 5:
                                        case 'end':
                                            return _context.stop();
                                    }
                                }
                            }, _callee, this);
                        }));

                        function _getUserMedia(_x) {
                            return _ref.apply(this, arguments);
                        }

                        return _getUserMedia;
                    }();

                    OTPlugin.enumerateDevices = function (completion) {
                        readiness.listen(function (error) {
                            if (error) {
                                completion(error);
                            } else {
                                PluginProxies.mediaCapturer.enumerateDevices(completion);
                            }
                        });
                    };

                    // Equivalent to: var pc = new window.RTCPeerConnection(iceServers, options);
                    //
                    // Except that it is async and takes a completion handler
                    OTPlugin.initPeerConnection = function initPeerConnection(rtcConfiguration, options, localStream, completion) {
                        function gotPeerObject(err, plugin) {
                            if (err) {
                                completion(err);
                                return;
                            }

                            logging.debug('Got PeerConnection for ' + plugin.id);

                            createPeerConnection(rtcConfiguration, options, plugin).then(function (peerConnection) {
                                if (peerConnection) {
                                    plugin._.getProxyInfo(function (proxyInfo) {
                                        peerConnection.proxyInfo = proxyInfo;
                                    });
                                    completion(null, peerConnection);
                                } else {
                                    completion(new Error('Failed to create RTCPeerConnection object'));
                                }
                            }, function (err) {
                                completion(err);
                            });
                        }

                        // @fixme this is nasty and brittle. We need some way to use the same Object
                        // for the PeerConnection that was used for the getUserMedia call (in the case
                        // of publishers). We don't really have a way of implicitly associating them though.
                        // Hence, publishers will have to pass through their localStream (if they have one)
                        // and we will look up the original Object and use that. Otherwise we generate
                        // a new one.
                        if (localStream && localStream._.plugin) {
                            gotPeerObject(null, localStream._.plugin);
                        } else {
                            PluginProxies.createMediaPeer({}, gotPeerObject);
                        }
                    };

                    OTPlugin.RTCSessionDescription = RTCSessionDescription;
                    OTPlugin.RTCIceCandidate = RTCIceCandidate;

                    OTPlugin.mediaDevices = new MediaDevices();

                    OTPlugin.supportedVideoCodecs = ['H264', 'VP8', 'VP9'];

                    startupAnalyticsLogger({ analytics: analytics, meta: meta, readiness: readiness });

                    module.exports = OTPlugin;
                }
                /* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(0)))

            /***/ }),
        /* 7 */
        /***/ (function(module, exports) {

            /**
             * Checks if `value` is the
             * [language type](http://www.ecma-international.org/ecma-262/7.0/#sec-ecmascript-language-types)
             * of `Object`. (e.g. arrays, functions, objects, regexes, `new Number(0)`, and `new String('')`)
             *
             * @static
             * @memberOf _
             * @since 0.1.0
             * @category Lang
             * @param {*} value The value to check.
             * @returns {boolean} Returns `true` if `value` is an object, else `false`.
             * @example
             *
             * _.isObject({});
             * // => true
             *
             * _.isObject([1, 2, 3]);
             * // => true
             *
             * _.isObject(_.noop);
             * // => true
             *
             * _.isObject(null);
             * // => false
             */
            function isObject(value) {
                var type = typeof value;
                return value != null && (type == 'object' || type == 'function');
            }

            module.exports = isObject;


            /***/ }),
        /* 8 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


// Note: Some of these descriptions here are more specific than the name would suggest, because we
// only use them in one place. However, this shouldn't prevent us from using the error elsewhere if
// the name fits, and we should update the description to be more general when this happens.

            module.exports = {
                // The API key does not match the token or session.
                AUTHENTICATION_ERROR: 'OT_AUTHENTICATION_ERROR',

                // JSON response was badly formed.
                BADLY_FORMED_RESPONSE: 'OT_BADLY_FORMED_RESPONSE',

                // Unable to publish because your browser failed to get access to your microphone. You may need to
                // fully quit and restart your browser to get it to work.
                // See https://bugs.chromium.org/p/webrtc/issues/detail?id=4799 for more details.
                CHROME_MICROPHONE_ACQUISITION_ERROR: 'OT_CHROME_MICROPHONE_ACQUISITION_ERROR',

                // Failed to connect to session.
                CONNECT_FAILED: 'OT_CONNECT_FAILED',

                // The session has exceded the maximum number of simultaneous connections.
                CONNECTION_LIMIT_EXCEEDED: 'OT_CONNECTION_LIMIT_EXCEEDED',

                // The constraints for getting user media could not be satisfied.
                CONSTRAINTS_NOT_SATISFIED: 'OT_CONSTRAINTS_NOT_SATISFIED',

                // Failed to create peer connection.
                CREATE_PEER_CONNECTION_FAILED: 'OT_CREATE_PEER_CONNECTION_FAILED',

                // Action failed due to session disconnection.
                DISCONNECTED: 'OT_DISCONNECTED',

                // Received an unexpected empty response from the server.
                EMPTY_RESPONSE_BODY: 'OT_EMPTY_RESPONSE_BODY',

                // The hardware to fulfil the user media request appears to exist but could not be acquired. It
                // might be in use by another application.
                HARDWARE_UNAVAILABLE: 'OT_HARDWARE_UNAVAILABLE',

                // Something went wrong while establishing WebRTC connectivity.
                ICE_WORKFLOW_FAILED: 'OT_ICE_WORKFLOW_FAILED',

                // Received an invalid HTTP status. This may be considered invalid for the endpoint only and not
                // HTTP in general.
                INVALID_HTTP_STATUS: 'OT_INVALID_HTTP_STATUS',

                // One or more parameters was not valid or not provided.
                INVALID_PARAMETER: 'OT_INVALID_PARAMETER',

                // The session id was invalid.
                INVALID_SESSION_ID: 'OT_INVALID_SESSION_ID',

                // The fetching of the stream for the video element has been aborted.
                MEDIA_ERR_ABORTED: 'OT_MEDIA_ERR_ABORTED',

                // A decoding error occurred while trying to play the stream in the video element.
                MEDIA_ERR_DECODE: 'OT_MEDIA_ERR_DECODE',

                // A network error caused the stream to stop being fetched.
                MEDIA_ERR_NETWORK: 'OT_MEDIA_ERR_NETWORK',

                // The stream has been detected to be not suitable for playback.
                MEDIA_ERR_SRC_NOT_SUPPORTED: 'OT_MEDIA_ERR_SRC_NOT_SUPPORTED',

                // The ended event on the video element fired
                MEDIA_ENDED: 'OT_MEDIA_ENDED',

                // No devices were found to provide the media stream.
                NO_DEVICES_FOUND: 'OT_NO_DEVICES_FOUND',

                // Video and audio was disabled. You need to enable at least one.
                NO_VALID_CONSTRAINTS: 'OT_NO_VALID_CONSTRAINTS',

                // Couldn't perform action due to not being connected.
                NOT_CONNECTED: 'OT_NOT_CONNECTED',

                // A resource was not found.
                NOT_FOUND: 'OT_NOT_FOUND',

                // Something in the user media request is not supported.
                NOT_SUPPORTED: 'OT_NOT_SUPPORTED',

                // An action was not permitted.
                PERMISSION_DENIED: 'OT_PERMISSION_DENIED',

                // The signal could not be sent due to the rate limit.
                RATE_LIMIT_EXCEEDED: 'OT_RATE_LIMIT_EXCEEDED',

                // Error calling OT.reportIssue(). Check the client\'s network connection.
                REPORT_ISSUE_FAILED: 'OT_REPORT_ISSUE_FAILED',

                // Screen-sharing support in this browser requires an extension, but the extension is not
                // installed.
                SCREEN_SHARING_EXTENSION_NOT_INSTALLED: 'OT_SCREEN_SHARING_EXTENSION_NOT_INSTALLED',

                // Screen-sharing support in this browser requires an extension, but one has not been registered.
                SCREEN_SHARING_EXTENSION_NOT_REGISTERED: 'OT_SCREEN_SHARING_EXTENSION_NOT_REGISTERED',

                // Screen sharing is not supported in the browser.
                SCREEN_SHARING_NOT_SUPPORTED: 'OT_SCREEN_SHARING_NOT_SUPPORTED',

                // The WebRTC connection failed during setDescription.
                SET_REMOTE_DESCRIPTION_FAILED: 'OT_SET_REMOTE_DESCRIPTION_FAILED',

                // Rumor.Socket cannot connect when it is already connecting or connected.
                SOCKET_ALREADY_CONNECTED_CONNECTING: 'OT_SOCKET_ALREADY_CONNECTED_CONNECTING',

                // A connection was closed abnormally (that is, with no close frame being sent) when a status code
                // is expected.
                SOCKET_CLOSE_ABNORMAL: 'OT_SOCKET_CLOSE_ABNORMAL',

                // Exception was thrown during Rumor connection, possibly because of a blocked port.
                SOCKET_CLOSE_CONNECT_EXCEPTION: 'OT_SOCKET_CLOSE_CONNECT_EXCEPTION',

                // Connectivity loss was detected as it was too long since the socket received the last PONG
                // message.
                SOCKET_CLOSE_CONNECTIVITY_LOSS: 'OT_SOCKET_CLOSE_CONNECTIVITY_LOSS',

                // Falling back on this error for socket close because a more suitable one was not found.
                SOCKET_CLOSE_FALLBACK_CODE: 'OT_SOCKET_CLOSE_FALLBACK_CODE',

                // An endpoint received data within a message that was not consistent with the type of the message
                // (e.g., non-UTF-8 [RFC3629] data within a text message)
                SOCKET_CLOSE_INCONSISTENT_DATA: 'OT_SOCKET_CLOSE_INCONSISTENT_DATA',

                // No status code was provided even though one was expected.
                SOCKET_CLOSE_NO_STATUS: 'OT_SOCKET_CLOSE_NO_STATUS',

                // An endpoint received a message that violates its policy.  This is a generic status code that
                // can be returned when there is no other more suitable status code (e.g., 1003 or 1009) or if
                // there is a need to hide specific details about the policy.
                SOCKET_CLOSE_POLICY_VIOLATION: 'OT_SOCKET_CLOSE_POLICY_VIOLATION',

                // The endpoint is going away, either because of a server failure or because the browser is
                // navigating away from the page that opened the connection.
                SOCKET_CLOSE_GOING_AWAY: 'OT_SOCKET_CLOSE_GOING_AWAY',

                // A protocol error occurred.
                SOCKET_CLOSE_PROTOCOL_ERROR: 'OT_SOCKET_CLOSE_PROTOCOL_ERROR',

                // Timed out while waiting for the Rumor socket to connect.
                SOCKET_CLOSE_TIMEOUT: 'OT_SOCKET_CLOSE_TIMEOUT',

                // An endpoint received a message that is too big for it to process
                SOCKET_CLOSE_TOO_LARGE: 'OT_SOCKET_CLOSE_TOO_LARGE',

                // An endpoint encountered an unexpected condition that prevented it from fulfilling the request.
                SOCKET_CLOSE_UNEXPECTED_CONDITION: 'OT_SOCKET_CLOSE_UNEXPECTED_CONDITION',

                // An endpoint has indicated that reconnections are not available.
                SOCKET_CLOSE_UNSUPPORTED: 'OT_SOCKET_CLOSE_UNSUPPORTED',

                // Failed to create the stream in the server model.
                STREAM_CREATE_FAILED: 'OT_STREAM_CREATE_FAILED',

                // The stream was destroyed before it could be subscribed to.
                STREAM_DESTROYED: 'OT_STREAM_DESTROYED',

                // The session has exceded the maximum number of simultaneous streams.
                STREAM_LIMIT_EXCEEDED: 'OT_STREAM_LIMIT_EXCEEDED',

                // Couldn't subscribe to the stream because it was not found.
                STREAM_NOT_FOUND: 'OT_STREAM_NOT_FOUND',

                // Couldn't connect due to a terms of service violation.
                TERMS_OF_SERVICE_FAILURE: 'OT_TERMS_OF_SERVICE_FAILURE',

                // A timer expired while waiting for an action to occur.
                TIMEOUT: 'OT_TIMEOUT',

                // The operation was cancelled
                CANCEL: 'OT_CANCEL',

                // Generic media abort error
                UNABLE_TO_CAPTURE_MEDIA: 'OT_UNABLE_TO_CAPTURE_MEDIA',

                // Generic/ Unknown screen share error
                UNABLE_TO_CAPTURE_SCREEN: 'OT_UNABLE_TO_CAPTURE_SCREEN',

                // The error code received was unexpected.
                UNEXPECTED_ERROR_CODE: 'OT_UNEXPECTED_ERROR_CODE',

                // Received an unexpected HTTP status.
                UNEXPECTED_HTTP_STATUS: 'OT_UNEXPECTED_HTTP_STATUS',

                // An unexpected server response was received which could not be handled.
                UNEXPECTED_SERVER_RESPONSE: 'OT_UNEXPECTED_SERVER_RESPONSE',

                // An unknown anvil error occurred.
                UNKNOWN_HTTP_ERROR: 'OT_UNKNOWN_HTTP_ERROR',

                UNSUPPORTED_BROWSER: 'OT_UNSUPPORTED_BROWSER',

                // Access to user media was denied.
                USER_MEDIA_ACCESS_DENIED: 'OT_USER_MEDIA_ACCESS_DENIED',

                // There was a cross domain error or the server responded with invalid JSON.
                XDOMAIN_OR_PARSING_ERROR: 'OT_XDOMAIN_OR_PARSING_ERROR',

                API_KEY_DISABLED: 'OT_API_KEY_DISABLED',

                // There was an error when trying to get the list of supported codecs.
                UNABLE_TO_ACCESS_MEDIA_ENGINE: 'OT_UNABLE_TO_ACCESS_MEDIA_ENGINE'
            };

            /***/ }),
        /* 9 */
        /***/ (function(module, exports) {

            /**
             * Checks if `value` is classified as an `Array` object.
             *
             * @static
             * @memberOf _
             * @since 0.1.0
             * @category Lang
             * @param {*} value The value to check.
             * @returns {boolean} Returns `true` if `value` is an array, else `false`.
             * @example
             *
             * _.isArray([1, 2, 3]);
             * // => true
             *
             * _.isArray(document.body.children);
             * // => false
             *
             * _.isArray('abc');
             * // => false
             *
             * _.isArray(_.noop);
             * // => false
             */
            var isArray = Array.isArray;

            module.exports = isArray;


            /***/ }),
        /* 10 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            module.exports = {
                JS_EXCEPTION: 2000,
                AUTHENTICATION_ERROR: 1004,
                INVALID_SESSION_ID: 1005,
                CONNECT_FAILED: 1006,
                CONNECT_REJECTED: 1007,
                CONNECTION_TIMEOUT: 1008,
                NOT_CONNECTED: 1010,
                INVALID_PARAMETER: 1011,
                P2P_CONNECTION_FAILED: 1013,
                API_RESPONSE_FAILURE: 1014,
                TERMS_OF_SERVICE_FAILURE: 1026,
                CONNECTION_LIMIT_EXCEEDED: 1027,
                UNABLE_TO_PUBLISH: 1500,
                UNABLE_TO_SUBSCRIBE: 1501,
                UNSUPPORTED_VIDEO_CODEC: 1502,
                UNABLE_TO_FORCE_DISCONNECT: 1520,
                UNABLE_TO_FORCE_UNPUBLISH: 1530,
                PUBLISHER_ICE_WORKFLOW_FAILED: 1553,
                SUBSCRIBER_ICE_WORKFLOW_FAILED: 1554,
                STREAM_LIMIT_EXCEEDED: 1605,
                UNEXPECTED_SERVER_RESPONSE: 2001,
                REPORT_ISSUE_ERROR: 2011,
                ANVIL_BADLY_FORMED_RESPONSE: 3001,
                ANVIL_INVALID_HTTP_STATUS: 3002,
                ANVIL_XDOMAIN_OR_PARSING_ERROR: 3003,
                ANVIL_UNKNOWN_HTTP_ERROR: 3004,
                ANVIL_UNEXPECTED_ERROR_CODE: 3005,
                ANVIL_EMPTY_RESPONSE_BODY: 3006,
                ANVIL_CONNECT_FAILED: 3007,
                UNABLE_TO_ACCESS_MEDIA_ENGINE: 5001
            };

            /***/ }),
        /* 11 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseGetTag = __webpack_require__(26),
                isObject = __webpack_require__(7);

            /** `Object#toString` result references. */
            var asyncTag = '[object AsyncFunction]',
                funcTag = '[object Function]',
                genTag = '[object GeneratorFunction]',
                proxyTag = '[object Proxy]';

            /**
             * Checks if `value` is classified as a `Function` object.
             *
             * @static
             * @memberOf _
             * @since 0.1.0
             * @category Lang
             * @param {*} value The value to check.
             * @returns {boolean} Returns `true` if `value` is a function, else `false`.
             * @example
             *
             * _.isFunction(_);
             * // => true
             *
             * _.isFunction(/abc/);
             * // => false
             */
            function isFunction(value) {
                if (!isObject(value)) {
                    return false;
                }
                // The use of `Object#toString` avoids issues with the `typeof` operator
                // in Safari 9 which returns 'object' for typed arrays and other constructors.
                var tag = baseGetTag(value);
                return tag == funcTag || tag == genTag || tag == asyncTag || tag == proxyTag;
            }

            module.exports = isFunction;


            /***/ }),
        /* 12 */
        /***/ (function(module, exports, __webpack_require__) {

            var freeGlobal = __webpack_require__(161);

            /** Detect free variable `self`. */
            var freeSelf = typeof self == 'object' && self && self.Object === Object && self;

            /** Used as a reference to the global object. */
            var root = freeGlobal || freeSelf || Function('return this')();

            module.exports = root;


            /***/ }),
        /* 13 */
        /***/ (function(module, exports, __webpack_require__) {

            var v1 = __webpack_require__(489);
            var v4 = __webpack_require__(490);

            var uuid = v4;
            uuid.v1 = v1;
            uuid.v4 = v4;

            module.exports = uuid;


            /***/ }),
        /* 14 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


// @todo enable the following disabled rules see OPENTOK-31136 for more info
            /* eslint-disable no-param-reassign, global-require */

            module.exports = function otErrorFactory() {
                var deps = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

                var errorReporting = deps.errorReporting || __webpack_require__(178)();
                var Errors = deps.Errors || __webpack_require__(8);
                var OTErrorClass = deps.OTErrorClass || __webpack_require__(33);

                var names = Object.keys(Errors).map(function (shortName) {
                    return Errors[shortName];
                });

                return function otError(name, plainError, code) {
                    if (names.indexOf(name) === -1) {
                        return new Error('Attempt to use invalid error name (' + name + '). Original message: ' + plainError.message);
                    }

                    if (!(plainError instanceof Error || /^\[object .*Error\]$/.test(Object.prototype.toString.call(plainError)))) {
                        return new Error('Did not pass Error as second argument: ' + plainError);
                    }

                    // OTErrorClass is the deprecated OT.Error class from the docs.
                    var error = new OTErrorClass(undefined, plainError.message);

                    error.name = name;

                    if (!plainError.stack) {
                        try {
                            throw plainError;
                        } catch (e) {
                            // IE populates the error's .stack when it is thrown, nothing to do here
                        }
                    }

                    error.stack = plainError.stack;

                    if (code) {
                        error.code = code;
                    }

                    errorReporting.send(error);

                    return error;
                };
            };

            /***/ }),
        /* 15 */
        /***/ (function(module, exports) {

            /**
             * Checks if `value` is object-like. A value is object-like if it's not `null`
             * and has a `typeof` result of "object".
             *
             * @static
             * @memberOf _
             * @since 4.0.0
             * @category Lang
             * @param {*} value The value to check.
             * @returns {boolean} Returns `true` if `value` is object-like, else `false`.
             * @example
             *
             * _.isObjectLike({});
             * // => true
             *
             * _.isObjectLike([1, 2, 3]);
             * // => true
             *
             * _.isObjectLike(_.noop);
             * // => false
             *
             * _.isObjectLike(null);
             * // => false
             */
            function isObjectLike(value) {
                return value != null && typeof value == 'object';
            }

            module.exports = isObjectLike;


            /***/ }),
        /* 16 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var bind = __webpack_require__(180);
            var isBuffer = __webpack_require__(368);

            /*global toString:true*/

// utils is a library of generic helper functions non-specific to axios

            var toString = Object.prototype.toString;

            /**
             * Determine if a value is an Array
             *
             * @param {Object} val The value to test
             * @returns {boolean} True if value is an Array, otherwise false
             */
            function isArray(val) {
                return toString.call(val) === '[object Array]';
            }

            /**
             * Determine if a value is an ArrayBuffer
             *
             * @param {Object} val The value to test
             * @returns {boolean} True if value is an ArrayBuffer, otherwise false
             */
            function isArrayBuffer(val) {
                return toString.call(val) === '[object ArrayBuffer]';
            }

            /**
             * Determine if a value is a FormData
             *
             * @param {Object} val The value to test
             * @returns {boolean} True if value is an FormData, otherwise false
             */
            function isFormData(val) {
                return (typeof FormData !== 'undefined') && (val instanceof FormData);
            }

            /**
             * Determine if a value is a view on an ArrayBuffer
             *
             * @param {Object} val The value to test
             * @returns {boolean} True if value is a view on an ArrayBuffer, otherwise false
             */
            function isArrayBufferView(val) {
                var result;
                if ((typeof ArrayBuffer !== 'undefined') && (ArrayBuffer.isView)) {
                    result = ArrayBuffer.isView(val);
                } else {
                    result = (val) && (val.buffer) && (val.buffer instanceof ArrayBuffer);
                }
                return result;
            }

            /**
             * Determine if a value is a String
             *
             * @param {Object} val The value to test
             * @returns {boolean} True if value is a String, otherwise false
             */
            function isString(val) {
                return typeof val === 'string';
            }

            /**
             * Determine if a value is a Number
             *
             * @param {Object} val The value to test
             * @returns {boolean} True if value is a Number, otherwise false
             */
            function isNumber(val) {
                return typeof val === 'number';
            }

            /**
             * Determine if a value is undefined
             *
             * @param {Object} val The value to test
             * @returns {boolean} True if the value is undefined, otherwise false
             */
            function isUndefined(val) {
                return typeof val === 'undefined';
            }

            /**
             * Determine if a value is an Object
             *
             * @param {Object} val The value to test
             * @returns {boolean} True if value is an Object, otherwise false
             */
            function isObject(val) {
                return val !== null && typeof val === 'object';
            }

            /**
             * Determine if a value is a Date
             *
             * @param {Object} val The value to test
             * @returns {boolean} True if value is a Date, otherwise false
             */
            function isDate(val) {
                return toString.call(val) === '[object Date]';
            }

            /**
             * Determine if a value is a File
             *
             * @param {Object} val The value to test
             * @returns {boolean} True if value is a File, otherwise false
             */
            function isFile(val) {
                return toString.call(val) === '[object File]';
            }

            /**
             * Determine if a value is a Blob
             *
             * @param {Object} val The value to test
             * @returns {boolean} True if value is a Blob, otherwise false
             */
            function isBlob(val) {
                return toString.call(val) === '[object Blob]';
            }

            /**
             * Determine if a value is a Function
             *
             * @param {Object} val The value to test
             * @returns {boolean} True if value is a Function, otherwise false
             */
            function isFunction(val) {
                return toString.call(val) === '[object Function]';
            }

            /**
             * Determine if a value is a Stream
             *
             * @param {Object} val The value to test
             * @returns {boolean} True if value is a Stream, otherwise false
             */
            function isStream(val) {
                return isObject(val) && isFunction(val.pipe);
            }

            /**
             * Determine if a value is a URLSearchParams object
             *
             * @param {Object} val The value to test
             * @returns {boolean} True if value is a URLSearchParams object, otherwise false
             */
            function isURLSearchParams(val) {
                return typeof URLSearchParams !== 'undefined' && val instanceof URLSearchParams;
            }

            /**
             * Trim excess whitespace off the beginning and end of a string
             *
             * @param {String} str The String to trim
             * @returns {String} The String freed of excess whitespace
             */
            function trim(str) {
                return str.replace(/^\s*/, '').replace(/\s*$/, '');
            }

            /**
             * Determine if we're running in a standard browser environment
             *
             * This allows axios to run in a web worker, and react-native.
             * Both environments support XMLHttpRequest, but not fully standard globals.
             *
             * web workers:
             *  typeof window -> undefined
             *  typeof document -> undefined
             *
             * react-native:
             *  navigator.product -> 'ReactNative'
             */
            function isStandardBrowserEnv() {
                if (typeof navigator !== 'undefined' && navigator.product === 'ReactNative') {
                    return false;
                }
                return (
                    typeof window !== 'undefined' &&
                    typeof document !== 'undefined'
                );
            }

            /**
             * Iterate over an Array or an Object invoking a function for each item.
             *
             * If `obj` is an Array callback will be called passing
             * the value, index, and complete array for each item.
             *
             * If 'obj' is an Object callback will be called passing
             * the value, key, and complete object for each property.
             *
             * @param {Object|Array} obj The object to iterate
             * @param {Function} fn The callback to invoke for each item
             */
            function forEach(obj, fn) {
                // Don't bother if no value provided
                if (obj === null || typeof obj === 'undefined') {
                    return;
                }

                // Force an array if not already something iterable
                if (typeof obj !== 'object' && !isArray(obj)) {
                    /*eslint no-param-reassign:0*/
                    obj = [obj];
                }

                if (isArray(obj)) {
                    // Iterate over array values
                    for (var i = 0, l = obj.length; i < l; i++) {
                        fn.call(null, obj[i], i, obj);
                    }
                } else {
                    // Iterate over object keys
                    for (var key in obj) {
                        if (Object.prototype.hasOwnProperty.call(obj, key)) {
                            fn.call(null, obj[key], key, obj);
                        }
                    }
                }
            }

            /**
             * Accepts varargs expecting each argument to be an object, then
             * immutably merges the properties of each object and returns result.
             *
             * When multiple objects contain the same key the later object in
             * the arguments list will take precedence.
             *
             * Example:
             *
             * ```js
             * var result = merge({foo: 123}, {foo: 456});
             * console.log(result.foo); // outputs 456
             * ```
             *
             * @param {Object} obj1 Object to merge
             * @returns {Object} Result of all merge properties
             */
            function merge(/* obj1, obj2, obj3, ... */) {
                var result = {};
                function assignValue(val, key) {
                    if (typeof result[key] === 'object' && typeof val === 'object') {
                        result[key] = merge(result[key], val);
                    } else {
                        result[key] = val;
                    }
                }

                for (var i = 0, l = arguments.length; i < l; i++) {
                    forEach(arguments[i], assignValue);
                }
                return result;
            }

            /**
             * Extends object a by mutably adding to it the properties of object b.
             *
             * @param {Object} a The object to be extended
             * @param {Object} b The object to copy properties from
             * @param {Object} thisArg The object to bind function to
             * @return {Object} The resulting value of object a
             */
            function extend(a, b, thisArg) {
                forEach(b, function assignValue(val, key) {
                    if (thisArg && typeof val === 'function') {
                        a[key] = bind(val, thisArg);
                    } else {
                        a[key] = val;
                    }
                });
                return a;
            }

            module.exports = {
                isArray: isArray,
                isArrayBuffer: isArrayBuffer,
                isBuffer: isBuffer,
                isFormData: isFormData,
                isArrayBufferView: isArrayBufferView,
                isString: isString,
                isNumber: isNumber,
                isObject: isObject,
                isUndefined: isUndefined,
                isDate: isDate,
                isFile: isFile,
                isBlob: isBlob,
                isFunction: isFunction,
                isStream: isStream,
                isURLSearchParams: isURLSearchParams,
                isStandardBrowserEnv: isStandardBrowserEnv,
                forEach: forEach,
                merge: merge,
                extend: extend,
                trim: trim
            };


            /***/ }),
        /* 17 */
        /***/ (function(module, exports, __webpack_require__) {

            var isFunction = __webpack_require__(11),
                isLength = __webpack_require__(107);

            /**
             * Checks if `value` is array-like. A value is considered array-like if it's
             * not a function and has a `value.length` that's an integer greater than or
             * equal to `0` and less than or equal to `Number.MAX_SAFE_INTEGER`.
             *
             * @static
             * @memberOf _
             * @since 4.0.0
             * @category Lang
             * @param {*} value The value to check.
             * @returns {boolean} Returns `true` if `value` is array-like, else `false`.
             * @example
             *
             * _.isArrayLike([1, 2, 3]);
             * // => true
             *
             * _.isArrayLike(document.body.children);
             * // => true
             *
             * _.isArrayLike('abc');
             * // => true
             *
             * _.isArrayLike(_.noop);
             * // => false
             */
            function isArrayLike(value) {
                return value != null && isLength(value.length) && !isFunction(value);
            }

            module.exports = isArrayLike;


            /***/ }),
        /* 18 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";
            /* WEBPACK VAR INJECTION */(function(Promise) {

                var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

                var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

                function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

                /* global __PROPERTIES__ */

                var defaultAxios = __webpack_require__(179);
                var cloneDeep = __webpack_require__(40);
                var pick = __webpack_require__(115);
                var mapKeys = __webpack_require__(436);

                /**
                 * @typedef {Object} builtInConfig properties that are baked in and are injected through webpack
                 * @property {String} version Build version (comes from package.json)
                 * @property {String} buildHash Commit hash this build was built from
                 * @property {Object} minimumVersion
                 * @property {String} minimumVersion.firefox Minimum version of Firefox needed to support OpenTok
                 * @property {String} minimumVersion.chrome Minimum version of Chrome needed to support OpenTok
                 * @property {Boolean} debug If true sets logging level to DEBUG else sets it to WARN
                 * @property {String} websiteURL Used to construct urls to the TokBox website
                 * @property {String} loggingURL Where to send analytical events
                 * @property {String} apiURL The API to talk to (Anvil)
                 */

                /** @type builtInConfig */
                var builtInConfig = cloneDeep({"version":"v2.15.6","buildHash":"e8ba921fd","minimumVersion":{"firefox":52,"chrome":49},"debug":"false","websiteURL":"http://www.tokbox.com","configURL":"https://config.opentok.com","ipWhitelistConfigURL":"","cdnURL":"https://static.opentok.com","loggingURL":"https://hlg.tokbox.com/prod","apiURL":"https://anvil.opentok.com","sentryDSN":"https://40bf769a2f474b2a8ef66d2809c7cfe0@sentry.io/104064"});

                var whitelistAllowedRuntimeProperties = pick(['apiURL', 'assetURL', 'cdnURL', 'enableErrorReporting', 'sessionInfoOverrides', 'loggingURL']);

                var liveConfigMap = {
                    apiUrl: 'apiURL',
                    loggingUrl: 'loggingURL'
                };

                var normalizeLiveConfig = mapKeys(function (key) {
                    return liveConfigMap[key];
                });

                function staticConfigFactory() {
                    var _ref = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
                        _ref$axios = _ref.axios,
                        axios = _ref$axios === undefined ? defaultAxios : _ref$axios;

                    /**
                     * @class StaticConfig
                     */
                    var StaticConfig = function () {
                        StaticConfig.onlyLocal = function onlyLocal() {
                            var runtimeProperties = cloneDeep((typeof window !== undefined ? window : global).OTProperties);
                            return new StaticConfig(_extends({}, builtInConfig, whitelistAllowedRuntimeProperties(runtimeProperties)));
                        };
                        /**
                         * Construct a StaticConfig instance with baked in, runtime, and live configuration
                         *
                         * @static
                         * @param {any} { sessionId, token, useIpWhitelistConfigUrl }
                         * @memberof StaticConfig
                         * @return {Promise<StaticConfig>} A promise to an instance of StaticConfig
                         */


                        StaticConfig.get = function get(_ref2) {
                            var _this = this;

                            var partnerId = _ref2.partnerId,
                                token = _ref2.token,
                                useIpWhitelistConfigUrl = _ref2.useIpWhitelistConfigUrl;

                            var getLiveConfig = function getLiveConfig() {
                                var localStaticConfig = _this.onlyLocal();

                                if (!localStaticConfig.configUrl) {
                                    return Promise.resolve({});
                                }

                                if (useIpWhitelistConfigUrl === true && !localStaticConfig.ipWhitelistConfigUrl) {
                                    return Promise.resolve({});
                                }

                                var finalConfigUrl = useIpWhitelistConfigUrl === true ? localStaticConfig.ipWhitelistConfigUrl : localStaticConfig.configUrl;

                                return axios.get(finalConfigUrl + '/project/' + partnerId + '/config.json', { headers: { 'X-TB-TOKEN-AUTH': token } }).then(function (_ref3) {
                                    var data = _ref3.data;
                                    return data;
                                });
                            };

                            return getLiveConfig().then(function (liveConfig) {
                                var runtimeProperties = cloneDeep((typeof window !== undefined ? window : global).OTProperties);
                                var config = _extends({}, builtInConfig, whitelistAllowedRuntimeProperties(runtimeProperties), normalizeLiveConfig(liveConfig));
                                return new StaticConfig(config);
                            });
                        };

                        function StaticConfig(config) {
                            _classCallCheck(this, StaticConfig);

                            Object.defineProperty(this, 'config', { value: Object.freeze(cloneDeep(config)) });
                        }

                        _createClass(StaticConfig, [{
                            key: 'configUrl',
                            get: function get() {
                                return this.config.configURL;
                            }
                        }, {
                            key: 'ipWhitelistConfigUrl',
                            get: function get() {
                                return this.config.ipWhitelistConfigURL;
                            }
                        }, {
                            key: 'apiUrl',
                            get: function get() {
                                return this.config.apiURL;
                            }
                        }, {
                            key: 'loggingUrl',
                            get: function get() {
                                return this.config.loggingURL;
                            }
                        }, {
                            key: 'enableErrorReporting',
                            get: function get() {
                                return Boolean(this.config.enableErrorReporting);
                            }
                        }, {
                            key: 'apiEnabled',
                            get: function get() {
                                return typeof this.config.apiEnabled !== 'undefined' ? this.config.apiEnabled : true;
                            }
                        }, {
                            key: 'version',
                            get: function get() {
                                return this.config.version;
                            }
                        }, {
                            key: 'clientVersion',
                            get: function get() {
                                return 'js-' + (this.version || 'unknown').replace('v', '');
                            }
                        }, {
                            key: 'buildHash',
                            get: function get() {
                                return this.config.buildHash;
                            }
                        }, {
                            key: 'minimumVersion',
                            get: function get() {
                                return this.config.minimumVersion;
                            }
                        }, {
                            key: 'sentryDSN',
                            get: function get() {
                                return this.config.sentryDSN;
                            }
                        }, {
                            key: 'websiteUrl',
                            get: function get() {
                                return this.config.websiteURL;
                            }
                        }, {
                            key: 'debug',
                            get: function get() {
                                return this.config.debug === 'true' || this.config.debug === true;
                            }
                        }, {
                            key: 'sessionInfoOverrides',
                            get: function get() {
                                return this.config.sessionInfoOverrides;
                            }
                        }, {
                            key: 'cdnUrl',
                            get: function get() {
                                return this.config.cdnURL || (typeof window !== undefined ? window : global).location.protocol + '//' + (typeof window !== undefined ? window : global).location.host;
                            }
                        }, {
                            key: 'assetUrl',
                            get: function get() {
                                return this.config.assetURL || this.cdnUrl + '/webrtc/' + this.version;
                            }
                        }]);

                        return StaticConfig;
                    }();

                    return StaticConfig;
                }

                module.exports = staticConfigFactory;
                /* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(0)))

            /***/ }),
        /* 19 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var isValue = __webpack_require__(49);

            module.exports = function (value) {
                if (!isValue(value)) throw new TypeError("Cannot use null or undefined");
                return value;
            };


            /***/ }),
        /* 20 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

            var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

            function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

            /* eslint-disable no-underscore-dangle */

            var guidStorage = __webpack_require__(231);
            var Analytics = __webpack_require__(225);

            var SessionInfo = __webpack_require__(232);
            var StaticConfig = __webpack_require__(18)();

            var eventing = __webpack_require__(4);

            var LOG_VERSION = '2';

            var AnalyticsHelper = function () {
                function AnalyticsHelper() {
                    var _ref = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
                        _ref$staticConfig = _ref.staticConfig,
                        staticConfig = _ref$staticConfig === undefined ? StaticConfig.onlyLocal() : _ref$staticConfig,
                        _ref$sessionInfo = _ref.sessionInfo,
                        sessionInfo = _ref$sessionInfo === undefined ? new SessionInfo() : _ref$sessionInfo,
                        ajax = _ref.ajax,
                        queue = _ref.queue;

                    _classCallCheck(this, AnalyticsHelper);

                    this.ajax = ajax;
                    this.queue = queue;
                    this.sessionInfo = sessionInfo;
                    this.staticConfig = staticConfig;
                }

                AnalyticsHelper.prototype._getCommon = function _getCommon() {
                    return {
                        clientVersion: this.staticConfig.clientVersion,
                        buildHash: this.staticConfig.buildHash,
                        source: (typeof window !== undefined ? window : global).location && (typeof window !== undefined ? window : global).location.href,
                        logVersion: LOG_VERSION,
                        apiServer: this.staticConfig.apiUrl,
                        clientSystemTime: new Date().getTime(),
                        sessionId: this.sessionInfo.sessionId,
                        mediaServerName: this.sessionInfo.mediaServerName,
                        p2p: this.sessionInfo.p2pEnabled,
                        messagingServer: this.sessionInfo.messagingServer,
                        messagingURL: this.sessionInfo.messagingURL,
                        version: this.staticConfig.version,
                        partnerId: this.sessionInfo.partnerId
                    };
                };

                AnalyticsHelper.prototype.logError = function logError(code, type, message, details) {
                    var _this = this;

                    var options = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : {};

                    guidStorage.get(function (error, guid) {
                        var _analytics;

                        if (error) {
                            // @todo
                            return;
                        }
                        var args = [code, type, message, details, _extends({ guid: guid }, _this.combineWithCommon(options))];
                        AnalyticsHelper.emit.apply(AnalyticsHelper, ['logError'].concat(args));
                        (_analytics = _this._analytics).logError.apply(_analytics, args);
                    });
                };

                AnalyticsHelper.prototype.combineWithCommon = function combineWithCommon(options) {
                    return _extends({}, this._getCommon(), options);
                };

                AnalyticsHelper.prototype.logEvent = function logEvent() {
                    var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

                    var _this2 = this;

                    var throttle = arguments[1];
                    var completionHandler = arguments[2];

                    guidStorage.get(function (error, guid) {
                        if (error) {
                            // @todo
                            return;
                        }

                        var logData = _extends({ guid: guid }, _this2.combineWithCommon(options));
                        AnalyticsHelper.emit('logEvent', logData);

                        _this2._analytics.logEvent(logData, false, throttle, completionHandler);
                    });
                };

                AnalyticsHelper.prototype.logQOS = function logQOS() {
                    var _this3 = this;

                    var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

                    guidStorage.get(function (error, guid) {
                        if (error) {
                            // @todo
                            return;
                        }
                        var qosData = _extends({ guid: guid, duration: 0 }, _this3.combineWithCommon(options));
                        AnalyticsHelper.emit('logQOS', qosData);
                        _this3._analytics.logQOS(qosData);
                    });
                };

                _createClass(AnalyticsHelper, [{
                    key: 'staticConfig',
                    get: function get() {
                        return this._staticConfig;
                    },
                    set: function set(staticConfig) {
                        this._staticConfig = staticConfig;

                        this._analytics = new Analytics({
                            loggingUrl: this.staticConfig.loggingUrl,
                            ajax: this.ajax,
                            queue: this.queue
                        });
                    }
                }]);

                return AnalyticsHelper;
            }();

            eventing(AnalyticsHelper);

            module.exports = AnalyticsHelper;

            /***/ }),
        /* 21 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";
            /*
 *  Copyright (c) 2016 The WebRTC project authors. All Rights Reserved.
 *
 *  Use of this source code is governed by a BSD-style license
 *  that can be found in the LICENSE file in the root of the source
 *  tree.
 */
            /* eslint-env node */


            var logDisabled_ = true;
            var deprecationWarnings_ = true;

            /**
             * Extract browser version out of the provided user agent string.
             *
             * @param {!string} uastring userAgent string.
             * @param {!string} expr Regular expression used as match criteria.
             * @param {!number} pos position in the version string to be returned.
             * @return {!number} browser version.
             */
            function extractVersion(uastring, expr, pos) {
                var match = uastring.match(expr);
                return match && match.length >= pos && parseInt(match[pos], 10);
            }

// Wraps the peerconnection event eventNameToWrap in a function
// which returns the modified event object (or false to prevent
// the event).
            function wrapPeerConnectionEvent(window, eventNameToWrap, wrapper) {
                if (!window.RTCPeerConnection) {
                    return;
                }
                var proto = window.RTCPeerConnection.prototype;
                var nativeAddEventListener = proto.addEventListener;
                proto.addEventListener = function(nativeEventName, cb) {
                    if (nativeEventName !== eventNameToWrap) {
                        return nativeAddEventListener.apply(this, arguments);
                    }
                    var wrappedCallback = function(e) {
                        var modifiedEvent = wrapper(e);
                        if (modifiedEvent) {
                            cb(modifiedEvent);
                        }
                    };
                    this._eventMap = this._eventMap || {};
                    this._eventMap[cb] = wrappedCallback;
                    return nativeAddEventListener.apply(this, [nativeEventName,
                        wrappedCallback]);
                };

                var nativeRemoveEventListener = proto.removeEventListener;
                proto.removeEventListener = function(nativeEventName, cb) {
                    if (nativeEventName !== eventNameToWrap || !this._eventMap
                        || !this._eventMap[cb]) {
                        return nativeRemoveEventListener.apply(this, arguments);
                    }
                    var unwrappedCb = this._eventMap[cb];
                    delete this._eventMap[cb];
                    return nativeRemoveEventListener.apply(this, [nativeEventName,
                        unwrappedCb]);
                };

                Object.defineProperty(proto, 'on' + eventNameToWrap, {
                    get: function() {
                        return this['_on' + eventNameToWrap];
                    },
                    set: function(cb) {
                        if (this['_on' + eventNameToWrap]) {
                            this.removeEventListener(eventNameToWrap,
                                this['_on' + eventNameToWrap]);
                            delete this['_on' + eventNameToWrap];
                        }
                        if (cb) {
                            this.addEventListener(eventNameToWrap,
                                this['_on' + eventNameToWrap] = cb);
                        }
                    },
                    enumerable: true,
                    configurable: true
                });
            }

// Utility methods.
            module.exports = {
                extractVersion: extractVersion,
                wrapPeerConnectionEvent: wrapPeerConnectionEvent,
                disableLog: function(bool) {
                    if (typeof bool !== 'boolean') {
                        return new Error('Argument type: ' + typeof bool +
                            '. Please use a boolean.');
                    }
                    logDisabled_ = bool;
                    return (bool) ? 'adapter.js logging disabled' :
                        'adapter.js logging enabled';
                },

                /**
                 * Disable or enable deprecation warnings
                 * @param {!boolean} bool set to true to disable warnings.
                 */
                disableWarnings: function(bool) {
                    if (typeof bool !== 'boolean') {
                        return new Error('Argument type: ' + typeof bool +
                            '. Please use a boolean.');
                    }
                    deprecationWarnings_ = !bool;
                    return 'adapter.js deprecation warnings ' + (bool ? 'disabled' : 'enabled');
                },

                log: function() {
                    if (typeof window === 'object') {
                        if (logDisabled_) {
                            return;
                        }
                        if (typeof console !== 'undefined' && typeof console.log === 'function') {
                            console.log.apply(console, arguments);
                        }
                    }
                },

                /**
                 * Shows a deprecation warning suggesting the modern and spec-compatible API.
                 */
                deprecated: function(oldMethod, newMethod) {
                    if (!deprecationWarnings_) {
                        return;
                    }
                    console.warn(oldMethod + ' is deprecated, please use ' + newMethod +
                        ' instead.');
                },

                /**
                 * Browser detector.
                 *
                 * @return {object} result containing browser and version
                 *     properties.
                 */
                detectBrowser: function(window) {
                    var navigator = window && window.navigator;

                    // Returned result object.
                    var result = {};
                    result.browser = null;
                    result.version = null;

                    // Fail early if it's not a browser
                    if (typeof window === 'undefined' || !window.navigator) {
                        result.browser = 'Not a browser.';
                        return result;
                    }

                    if (navigator.mozGetUserMedia) { // Firefox.
                        result.browser = 'firefox';
                        result.version = extractVersion(navigator.userAgent,
                            /Firefox\/(\d+)\./, 1);
                    } else if (navigator.webkitGetUserMedia) {
                        // Chrome, Chromium, Webview, Opera.
                        // Version matches Chrome/WebRTC version.
                        result.browser = 'chrome';
                        result.version = extractVersion(navigator.userAgent,
                            /Chrom(e|ium)\/(\d+)\./, 2);
                    } else if (navigator.mediaDevices &&
                        navigator.userAgent.match(/Edge\/(\d+).(\d+)$/)) { // Edge.
                        result.browser = 'edge';
                        result.version = extractVersion(navigator.userAgent,
                            /Edge\/(\d+).(\d+)$/, 2);
                    } else if (window.RTCPeerConnection &&
                        navigator.userAgent.match(/AppleWebKit\/(\d+)\./)) { // Safari.
                        result.browser = 'safari';
                        result.version = extractVersion(navigator.userAgent,
                            /AppleWebKit\/(\d+)\./, 1);
                    } else { // Default fallthrough: not supported.
                        result.browser = 'Not a supported browser.';
                        return result;
                    }

                    return result;
                }
            };


            /***/ }),
        /* 22 */
        /***/ (function(module, exports, __webpack_require__) {

            module.exports = __webpack_require__(517);


            /***/ }),
        /* 23 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

            function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

            function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

            function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

// @todo enable the following disabled rules see OPENTOK-31136 for more info
            /* eslint-disable no-param-reassign, global-require, max-len */

            var Event = __webpack_require__(133);
            var eventNames = __webpack_require__(44);

            module.exports = function EventsFactory() {
                var deps = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

                var logging = deps.logging || __webpack_require__(1)('Events');

                var Events = {};

                /**
                 * The Event object defines the basic OpenTok event object that is passed to
                 * event listeners. Other OpenTok event classes implement the properties and methods of
                 * the Event object.</p>
                 *
                 * <p>For example, the Stream object dispatches a <code>streamPropertyChanged</code> event when
                 * the stream's properties are updated. You add a callback for an event using the
                 * <code>on()</code> method of the Stream object:</p>
                 *
                 * <pre>
                 * stream.on("streamPropertyChanged", function (event) {
                 *     alert("Properties changed for stream " + event.target.streamId);
                 * });</pre>
                 *
                 * @class Event
                 * @property {Boolean} cancelable Whether the event has a default behavior that is cancelable
                 * (<code>true</code>) or not (<code>false</code>). You can cancel the default behavior by
                 * calling the <code>preventDefault()</code> method of the Event object in the callback
                 * function. (See <a href="#preventDefault">preventDefault()</a>.)
                 *
                 * @property {Object} target The object that dispatched the event.
                 *
                 * @property {String} type  The type of event.
                 */

                /**
                 * Prevents the default behavior associated with the event from taking place.
                 *
                 * <p>To see whether an event has a default behavior, check the <code>cancelable</code> property
                 * of the event object. </p>
                 *
                 * <p>Call the <code>preventDefault()</code> method in the callback function for the event.</p>
                 *
                 * <p>The following events have default behaviors:</p>
                 *
                 * <ul>
                 *
                 *   <li><code>sessionDisconnect</code> &#151; See
                 *   <a href="SessionDisconnectEvent.html#preventDefault">
                 *   SessionDisconnectEvent.preventDefault()</a>.</li>
                 *
                 *   <li><code>streamDestroyed</code> &#151; See <a href="StreamEvent.html#preventDefault">
                 *   StreamEvent.preventDefault()</a>.</li>
                 *
                 *   <li><code>accessDialogOpened</code> &#151; See the
                 *   <a href="Publisher.html#event:accessDialogOpened">accessDialogOpened event</a>.</li>
                 *
                 *   <li><code>accessDenied</code> &#151; See the <a href="Publisher.html#event:accessDenied">
                 *   accessDenied event</a>.</li>
                 *
                 * </ul>
                 *
                 * @method #preventDefault
                 * @memberof Event
                 */
                /**
                 * Whether the default event behavior has been prevented via a call to
                 * <code>preventDefault()</code> (<code>true</code>) or not (<code>false</code>).
                 * See <a href="#preventDefault">preventDefault()</a>.
                 * @method #isDefaultPrevented
                 * @return {Boolean}
                 * @memberof Event
                 */

                /**
                 * The {@link OT} class dispatches <code>exception</code> events when the OpenTok API encounters
                 * an exception (error). The ExceptionEvent object defines the properties of the event
                 * object that is dispatched.
                 *
                 * <p>Note that you set up a callback for the <code>exception</code> event by calling the
                 * <code>OT.on()</code> method.</p>
                 *
                 * @class ExceptionEvent
                 * @property {Number} code The error code. The following is a list of error codes:</p>
                 *
                 * <table class="docs_table">
                 *  <tbody><tr>
                 *   <td>
                 *   <b>code</b>
                 *
                 *   </td>
                 *   <td>
                 *   <b>title</b>
                 *   </td>
                 *  </tr>
                 *
                 *  <tr>
                 *   <td>
                 *   1004
                 *
                 *   </td>
                 *   <td>
                 *   Authentication error
                 *   </td>
                 *  </tr>
                 *
                 *  <tr>
                 *   <td>
                 *   1005
                 *
                 *   </td>
                 *   <td>
                 *   Invalid Session ID
                 *   </td>
                 *  </tr>
                 *  <tr>
                 *   <td>
                 *   1006
                 *
                 *   </td>
                 *   <td>
                 *   Connect Failed
                 *   </td>
                 *  </tr>
                 *  <tr>
                 *   <td>
                 *   1007
                 *
                 *   </td>
                 *   <td>
                 *   Connect Rejected
                 *   </td>
                 *  </tr>
                 *  <tr>
                 *   <td>
                 *   1008
                 *
                 *   </td>
                 *   <td>
                 *   Connect Time-out
                 *   </td>
                 *  </tr>
                 *  <tr>
                 *   <td>
                 *   1009
                 *
                 *   </td>
                 *   <td>
                 *   Security Error
                 *   </td>
                 *  </tr>
                 *   <tr>
                 *    <td>
                 *    1010
                 *
                 *    </td>
                 *    <td>
                 *    Not Connected
                 *    </td>
                 *   </tr>
                 *   <tr>
                 *    <td>
                 *    1011
                 *
                 *    </td>
                 *    <td>
                 *    Invalid Parameter
                 *    </td>
                 *   </tr>
                 *   <tr>
                 *    <td>
                 *    1013
                 *    </td>
                 *    <td>
                 *    Connection Failed
                 *    </td>
                 *   </tr>
                 *   <tr>
                 *    <td>
                 *    1014
                 *    </td>
                 *    <td>
                 *    API Response Failure
                 *    </td>
                 *   </tr>
                 *   <tr>
                 *    <td>
                 *    1026
                 *    </td>
                 *    <td>
                 *    Terms of Service Violation: Export Compliance
                 *    </td>
                 *   </tr>
                 *  <tr>
                 *    <td>
                 *    1500
                 *    </td>
                 *    <td>
                 *    Unable to Publish
                 *    </td>
                 *   </tr>
                 *
                 *  <tr>
                 *    <td>
                 *    1520
                 *    </td>
                 *    <td>
                 *    Unable to Force Disconnect
                 *    </td>
                 *   </tr>
                 *
                 *  <tr>
                 *    <td>
                 *    1530
                 *    </td>
                 *    <td>
                 *    Unable to Force Unpublish
                 *    </td>
                 *   </tr>
                 *  <tr>
                 *    <td>
                 *    1535
                 *    </td>
                 *    <td>
                 *    Force Unpublish on Invalid Stream
                 *    </td>
                 *   </tr>
                 *
                 *  <tr>
                 *    <td>
                 *    2000
                 *
                 *    </td>
                 *    <td>
                 *    Internal Error
                 *    </td>
                 *  </tr>
                 *
                 *  <tr>
                 *    <td>
                 *    2010
                 *
                 *    </td>
                 *    <td>
                 *    Report Issue Failure
                 *    </td>
                 *  </tr>
                 *
                 *
                 *  </tbody></table>
                 *
                 *  <p>Check the <code>message</code> property for more details about the error.</p>
                 *
                 * @property {String} message The error message.
                 *
                 * @property {Object} target The object that the event pertains to. For an
                 * <code>exception</code> event, this will be an object other than the OT object
                 * (such as a Session object or a Publisher object).
                 *
                 * @property {String} title The error title.
                 * @augments Event
                 */
                Events.ExceptionEvent = function ExceptionEvent(type, message, title, code, component, target, error) {
                    return new Event(type, false, {
                        error: error,
                        message: message,
                        title: title,
                        code: code,
                        component: component,
                        target: target
                    });
                };

                Events.IssueReportedEvent = function IssueReportedEvent(type, issueId) {
                    return new Event(type, false, { issueId: issueId });
                };

                // Triggered when the JS dynamic config and the DOM have loaded.
                Events.EnvLoadedEvent = function EnvLoadedEvent(type) {
                    return new Event(type, false);
                };

                /**
                 * Defines <code>connectionCreated</code> and <code>connectionDestroyed</code> events dispatched
                 * by the {@link Session} object.
                 * <p>
                 * The Session object dispatches a <code>connectionCreated</code> event when a client (including
                 * your own) connects to a Session. It also dispatches a <code>connectionCreated</code> event for
                 * every client in the session when you first connect. (when your local client connects, the
                 * Session object also dispatches a <code>sessionConnected</code> event, defined by the
                 * {@link SessionConnectEvent} class.)
                 * <p>
                 * While you are connected to the session, the Session object dispatches a
                 * <code>connectionDestroyed</code> event when another client disconnects from the Session.
                 * (When you disconnect, the Session object also dispatches a <code>sessionDisconnected</code>
                 * event, defined by the {@link SessionDisconnectEvent} class.)
                 *
                 * <h5><a name="example"></a>Example</h5>
                 *
                 * <p>The following code keeps a running total of the number of connections to a session
                 * by monitoring the <code>connections</code> property of the <code>sessionConnect</code>,
                 * <code>connectionCreated</code> and <code>connectionDestroyed</code> events:</p>
                 *
                 * <pre>var apiKey = ""; // Replace with your API key. See https://tokbox.com/account
                 * var sessionID = ""; // Replace with your own session ID.
                 *                     // See https://tokbox.com/developer/guides/create-session/.
                 * var token = ""; // Replace with a generated token that has been assigned the moderator role.
                 *                 // See https://tokbox.com/developer/guides/create-token/.
                 * var connectionCount = 0;
                 *
                 * var session = OT.initSession(apiKey, sessionID);
                 * session.on("connectionCreated", function(event) {
                 *    connectionCount++;
                 *    displayConnectionCount();
                 * });
                 * session.on("connectionDestroyed", function(event) {
                 *    connectionCount--;
                 *    displayConnectionCount();
                 * });
                 * session.connect(token);
                 *
                 * function displayConnectionCount() {
                 *     document.getElementById("connectionCountField").value = connectionCount.toString();
                 * }</pre>
                 *
                 * <p>This example assumes that there is an input text field in the HTML DOM
                 * with the <code>id</code> set to <code>"connectionCountField"</code>:</p>
                 *
                 * <pre>&lt;input type="text" id="connectionCountField" value="0"&gt;&lt;/input&gt;</pre>
                 *
                 *
                 * @property {Connection} connection A Connection object for the connection that was
                 * created or deleted.
                 *
                 * @property {Array} connections Deprecated. Use the <code>connection</code> property. A
                 * <code>connectionCreated</code> or <code>connectionDestroyed</code> event is dispatched
                 * for each connection created and destroyed in the session.
                 *
                 * @property {String} reason For a <code>connectionDestroyed</code> event,
                 *  a description of why the connection ended. This property can have the following values:
                 * </p>
                 * <ul>
                 *  <li><code>"clientDisconnected"</code> &#151; A client disconnected from the session by calling
                 *     the <code>disconnect()</code> method of the Session object or by closing the browser.
                 *     (See <a href="Session.html#disconnect">Session.disconnect()</a>.)</li>
                 *
                 *  <li><code>"forceDisconnected"</code> &#151; A moderator has disconnected the publisher
                 *      from the session, by calling the <code>forceDisconnect()</code> method of the Session
                 *      object. (See <a href="Session.html#forceDisconnect">Session.forceDisconnect()</a>.)</li>
                 *
                 *  <li><code>"networkDisconnected"</code> &#151; The network connection terminated abruptly
                 *      (for example, the client lost their internet connection).</li>
                 * </ul>
                 *
                 * <p>Depending on the context, this description may allow the developer to refine
                 * the course of action they take in response to an event.</p>
                 *
                 * <p>For a <code>connectionCreated</code> event, this string is undefined.</p>
                 *
                 * @class ConnectionEvent
                 * @augments Event
                 */
                var connectionEventPluralDeprecationWarningShown = false;

                Events.ConnectionEvent = function (_Event) {
                    _inherits(ConnectionEvent, _Event);

                    function ConnectionEvent(type, connection, reason) {
                        _classCallCheck(this, ConnectionEvent);

                        return _possibleConstructorReturn(this, _Event.call(this, type, false, {
                            connection: connection,
                            reason: reason
                        }));
                    }

                    _createClass(ConnectionEvent, [{
                        key: 'connections',
                        get: function get() {
                            if (!connectionEventPluralDeprecationWarningShown) {
                                logging.warn('OT.ConnectionEvent connections property is deprecated, ' + 'use connection instead.');
                                connectionEventPluralDeprecationWarningShown = true;
                            }
                            return [this.connection];
                        }
                    }]);

                    return ConnectionEvent;
                }(Event);

                /**
                 * StreamEvent is an event that can have the type "streamCreated" or "streamDestroyed".
                 * These events are dispatched by the Session object when another client starts or
                 * stops publishing a stream to a {@link Session}. For a local client's stream, the
                 * Publisher object dispatches the event.
                 *
                 * <h4><a name="example_streamCreated"></a>Example &#151; streamCreated event dispatched
                 * by the Session object</h4>
                 *  <p>The following code initializes a session and sets up an event listener for when
                 *    a stream published by another client is created:</p>
                 *
                 * <pre>
                 * session.on("streamCreated", function(event) {
                 *   // streamContainer is a DOM element
                 *   subscriber = session.subscribe(event.stream, targetElement);
                 * }).connect(token);
                 * </pre>
                 *
                 *  <h4><a name="example_streamDestroyed"></a>Example &#151; streamDestroyed event dispatched
                 * by the Session object</h4>
                 *
                 *    <p>The following code initializes a session and sets up an event listener for when
                 *       other clients' streams end:</p>
                 *
                 * <pre>
                 * session.on("streamDestroyed", function(event) {
                 *     console.log("Stream " + event.stream.name + " ended. " + event.reason);
                 * }).connect(token);
                 * </pre>
                 *
                 * <h4><a name="example_streamCreated_publisher"></a>Example &#151; streamCreated event dispatched
                 * by a Publisher object</h4>
                 *  <p>The following code publishes a stream and adds an event listener for when the streaming
                 * starts</p>
                 *
                 * <pre>
                 * var publisher = session.publish(targetElement)
                 *   .on("streamCreated", function(event) {
                 *     console.log("Publisher started streaming.");
                 *   );
                 * </pre>
                 *
                 *  <h4><a name="example_streamDestroyed_publisher"></a>Example &#151; streamDestroyed event
                 * dispatched by a Publisher object</h4>
                 *
                 *  <p>The following code publishes a stream, and leaves the Publisher in the HTML DOM
                 * when the streaming stops:</p>
                 *
                 * <pre>
                 * var publisher = session.publish(targetElement)
                 *   .on("streamDestroyed", function(event) {
                 *     event.preventDefault();
                 *     console.log("Publisher stopped streaming.");
                 *   );
                 * </pre>
                 *
                 * @class StreamEvent
                 *
                 * @property {Boolean} cancelable   Whether the event has a default behavior that is cancelable
                 *  (<code>true</code>) or not (<code>false</code>). You can cancel the default behavior by
                 * calling the <code>preventDefault()</code> method of the StreamEvent object in the event
                 * listener function. The <code>streamDestroyed</code> event is cancelable.
                 * (See <a href="#preventDefault">preventDefault()</a>.)
                 *
                 * @property {String} reason For a <code>streamDestroyed</code> event,
                 *  a description of why the session disconnected. This property can have one of the following
                 *  values:
                 * </p>
                 * <ul>
                 *  <li><code>"clientDisconnected"</code> &#151; A client disconnected from the session by calling
                 *     the <code>disconnect()</code> method of the Session object or by closing the browser.
                 *     (See <a href="Session.html#disconnect">Session.disconnect()</a>.)</li>
                 *
                 *  <li><code>"forceDisconnected"</code> &#151; A moderator has disconnected the publisher of the
                 *    stream from the session, by calling the <code>forceDisconnect()</code> method of the Session
                 *     object. (See <a href="Session.html#forceDisconnect">Session.forceDisconnect()</a>.)</li>
                 *
                 *  <li><code>"forceUnpublished"</code> &#151; A moderator has forced the publisher of the stream
                 *    to stop publishing the stream, by calling the <code>forceUnpublish()</code> method of the
                 *    Session object.
                 *    (See <a href="Session.html#forceUnpublish">Session.forceUnpublish()</a>.)</li>
                 *
                 *  <li><code>"mediaStopped"</code> &#151; The user publishing the stream has stopped sharing
                 *    media. For example, the user closed the window that is a source for a screen-sharing
                 *    stream. Or the user disconnected a microphone that was the audio source for an audio-only
                 *    stream. Or the video and audio sources are MediaStreamTrack elements and the sources of
                 *    the media are stopped or destroyed.</li>
                 *
                 *  <li><code>"networkDisconnected"</code> &#151; The network connection terminated abruptly (for
                 *      example, the client lost their internet connection).</li>
                 *
                 * </ul>
                 *
                 * <p>Depending on the context, this description may allow the developer to refine
                 * the course of action they take in response to an event.</p>
                 *
                 * <p>For a <code>streamCreated</code> event, this string is undefined.</p>
                 *
                 * @property {Stream} stream A Stream object corresponding to the stream that was added (in the
                 * case of a <code>streamCreated</code> event) or deleted (in the case of a
                 * <code>streamDestroyed</code> event).
                 *
                 * @property {Array} streams Deprecated. Use the <code>stream</code> property. A
                 * <code>streamCreated</code> or <code>streamDestroyed</code> event is dispatched for
                 * each stream added or destroyed.
                 *
                 * @augments Event
                 */

                var streamEventPluralDeprecationWarningShown = false;

                Events.StreamEvent = function (_Event2) {
                    _inherits(StreamEvent, _Event2);

                    function StreamEvent(type, stream, reason, cancelable) {
                        _classCallCheck(this, StreamEvent);

                        return _possibleConstructorReturn(this, _Event2.call(this, type, cancelable, {
                            stream: stream,
                            reason: reason
                        }));
                    }

                    _createClass(StreamEvent, [{
                        key: 'streams',
                        get: function get() {
                            if (!streamEventPluralDeprecationWarningShown) {
                                logging.warn('OT.StreamEvent streams property is deprecated, use stream instead.');
                                streamEventPluralDeprecationWarningShown = true;
                            }
                            return [this.stream];
                        }
                    }]);

                    return StreamEvent;
                }(Event);

                /**
                 * Prevents the default behavior associated with the event from taking place.
                 *
                 * <p>For the <code>streamDestroyed</code> event dispatched by the Session object,
                 * the default behavior is that all Subscriber objects that are subscribed to the stream are
                 * unsubscribed and removed from the HTML DOM. Each Subscriber object dispatches a
                 * <code>destroyed</code> event when the element is removed from the HTML DOM. If you call the
                 * <code>preventDefault()</code> method in the event listener for the <code>streamDestroyed</code>
                 * event, the default behavior is prevented and you can clean up Subscriber objects using your
                 * own code. See
                 * <a href="Session.html#getSubscribersForStream">Session.getSubscribersForStream()</a>.</p>
                 * <p>
                 * For the <code>streamDestroyed</code> event dispatched by a Publisher object, the default
                 * behavior is that the Publisher object is removed from the HTML DOM. The Publisher object
                 * dispatches a <code>destroyed</code> event when the element is removed from the HTML DOM.
                 * If you call the <code>preventDefault()</code> method in the event listener for the
                 * <code>streamDestroyed</code> event, the default behavior is prevented, and you can
                 * retain the Publisher for reuse or clean it up using your own code.
                 *</p>
                 * <p>To see whether an event has a default behavior, check the <code>cancelable</code> property of
                 * the event object. </p>
                 *
                 * <p>
                 *   Call the <code>preventDefault()</code> method in the event listener function for the event.
                 * </p>
                 *
                 * @method #preventDefault
                 * @memberof StreamEvent
                 */

                /**
                 * The Session object dispatches SessionConnectEvent object when a session has successfully
                 * connected in response to a call to the <code>connect()</code> method of the Session object.
                 * <p>
                 * In version 2.2, the completionHandler of the <code>Session.connect()</code> method
                 * indicates success or failure in connecting to the session.
                 *
                 * @class SessionConnectEvent
                 * @property {Array} connections Deprecated in version 2.2 (and set to an empty array). In
                 * version 2.2, listen for the <code>connectionCreated</code> event dispatched by the Session
                 * object. In version 2.2, the Session object dispatches a <code>connectionCreated</code> event
                 * for each connection (including your own). This includes connections present when you first
                 * connect to the session.
                 *
                 * @property {Array} streams Deprecated in version 2.2 (and set to an empty array). In version
                 * 2.2, listen for the <code>streamCreated</code> event dispatched by the Session object. In
                 * version 2.2, the Session object dispatches a <code>streamCreated</code> event for each stream
                 * other than those published by your client. This includes streams
                 * present when you first connect to the session.
                 *
                 * @see <a href="Session.html#connect">Session.connect()</a></p>
                 * @augments Event
                 */

                var sessionConnectedConnectionsDeprecationWarningShown = false;
                var sessionConnectedStreamsDeprecationWarningShown = false;
                var sessionConnectedArchivesDeprecationWarningShown = false;

                Events.SessionConnectEvent = function (_Event3) {
                    _inherits(SessionConnectEvent, _Event3);

                    function SessionConnectEvent(type) {
                        _classCallCheck(this, SessionConnectEvent);

                        return _possibleConstructorReturn(this, _Event3.call(this, type, false));
                    }
                    // eslint-disable-next-line class-methods-use-this


                    _createClass(SessionConnectEvent, [{
                        key: 'connections',
                        get: function get() {
                            if (!sessionConnectedConnectionsDeprecationWarningShown) {
                                logging.warn('OT.SessionConnectedEvent no longer includes connections. Listen ' + 'for connectionCreated events instead.');
                                sessionConnectedConnectionsDeprecationWarningShown = true;
                            }
                            return [];
                        }
                        // eslint-disable-next-line class-methods-use-this

                    }, {
                        key: 'streams',
                        get: function get() {
                            if (!sessionConnectedStreamsDeprecationWarningShown) {
                                logging.warn('OT.SessionConnectedEvent no longer includes streams. Listen for ' + 'streamCreated events instead.');
                                sessionConnectedStreamsDeprecationWarningShown = true;
                            }
                            return [];
                        }
                        // eslint-disable-next-line class-methods-use-this

                    }, {
                        key: 'archives',
                        get: function get() {
                            if (!sessionConnectedArchivesDeprecationWarningShown) {
                                logging.warn('OT.SessionConnectedEvent no longer includes archives. Listen for ' + 'archiveStarted events instead.');
                                sessionConnectedArchivesDeprecationWarningShown = true;
                            }
                            return [];
                        }
                    }]);

                    return SessionConnectEvent;
                }(Event);

                Events.SessionReconnectingEvent = function SessionReconnectedEvent() {
                    return new Event(eventNames.SESSION_RECONNECTING, false);
                };

                Events.SessionReconnectedEvent = function SessionReconnectedEvent() {
                    return new Event(eventNames.SESSION_RECONNECTED);
                };

                /**
                 * The Session object dispatches SessionDisconnectEvent object when a session has disconnected.
                 * This event may be dispatched asynchronously in response to a successful call to the
                 * <code>disconnect()</code> method of the session object.
                 *
                 *  <h4>
                 *    <a href="example"></a>Example
                 *  </h4>
                 *  <p>
                 *    The following code initializes a session and sets up an event listener for when a session is
                 * disconnected.
                 *  </p>
                 * <pre>var apiKey = ""; // Replace with your API key. See https://tokbox.com/account
                 *  var sessionID = ""; // Replace with your own session ID.
                 *                      // See https://tokbox.com/developer/guides/create-session/
                 *  var token = ""; // Replace with a generated token that has been assigned the moderator role.
                 *                  // See https://tokbox.com/developer/guides/create-token/
                 *
                 *  var session = OT.initSession(apiKey, sessionID);
                 *  session.on("sessionDisconnected", function(event) {
                 *      alert("The session disconnected. " + event.reason);
                 *  });
                 *  session.connect(token);
                 *  </pre>
                 *
                 * @property {String} reason A description of why the session disconnected.
                 *   This property can have the following values:
                 *  </p>
                 *  <ul>
                 *    <li>
                 *      <code>"clientDisconnected"</code> &mdash; A client disconnected from the
                 *      session by calling the <code>disconnect()</code> method of the Session
                 *      object or by closing the browser. ( See <a href=
                 *      "Session.html#disconnect">Session.disconnect()</a>.)
                 *    </li>
                 *
                 *    <li>
                 *      <code>"forceDisconnected"</code> &mdash; A moderator has disconnected you from
                 *      the session by calling the <code>forceDisconnect()</code> method of the
                 *      Session object. (See <a href=
                 *      "Session.html#forceDisconnect">Session.forceDisconnect()</a>.)
                 *    </li>
                 *
                 *    <li><code>"networkDisconnected"</code> &mdash; The network connection terminated
                 *    abruptly (for example, the client lost its internet connection).
                 *    <p>
                 *    Prior to dispatching a
                 *    <code>sessionDisconnected</code> event for this reason, the Session object dispatches a
                 *    <code>reconnecting</code> event, and the client attempts to reconnect to the OpenTok session.
                 *    If the reconnection fails, the Session object dispatches a <code>sessionDisconnected</code>
                 *    event with the <code>reason</code> property set to <code>"networkDisconnected"</code>.
                 *  </ul>
                 *  <ul>
                 *
                 * @class SessionDisconnectEvent
                 * @augments Event
                 */
                Events.SessionDisconnectEvent = function SessionDisconnectEvent(type, reason, cancelable) {
                    return new Event(type, cancelable, { reason: reason });
                };

                /**
                 * Prevents the default behavior associated with the event from taking place.
                 *
                 * <p>
                 *   For the <code>sessionDisconnectEvent</code>, the default behavior is that all
                 *   Subscriber objects are unsubscribed and removed from the HTML DOM. Each
                 *   Subscriber object dispatches a <code>destroyed</code> event when the element
                 *   is removed from the HTML DOM. If you call the <code>preventDefault()</code>
                 *   method in the event listener for the <code>sessionDisconnect</code> event,
                 *   the default behavior is prevented, and you can, optionally, clean up
                 *   Subscriber objects using your own code).
                 * </p>
                 * <p>
                 *   To see whether an event has a default behavior, check the
                 *   <code>cancelable</code> property of the event object.
                 * </p>
                 * <p>
                 *   Call the <code>preventDefault()</code> method in the event listener function
                 *   for the event.
                 * </p>
                 *
                 * @method #preventDefault
                 * @memberof SessionDisconnectEvent
                 */

                /**
                 * The Session object dispatches a <code>streamPropertyChanged</code> event in the
                 * following circumstances:
                 *
                 * <ul>
                 *   <li> A stream has started or stopped publishing audio or video (see
                 *     <a href="Publisher.html#publishAudio">Publisher.publishAudio()</a> and
                 *     <a href="Publisher.html#publishVideo">Publisher.publishVideo()</a>).
                 *     This change results from a call to the <code>publishAudio()</code> or
                 *     <code>publishVideo()</code> methods of the Publish object. Note that a
                 *     subscriber's video can be disabled or enabled for reasons other than the
                 *     publisher disabling or enabling it. A Subscriber object dispatches
                 *     <code>videoDisabled</code> and <code>videoEnabled</code> events in all
                 *     conditions that cause the subscriber's stream to be disabled or enabled.
                 *   </li>
                 *   <li> The <code>videoDimensions</code> property of the Stream object has
                 *     changed (see <a href="Stream.html#properties">Stream.videoDimensions</a>).
                 *   </li>
                 *   <li> The <code>videoType</code> property of the Stream object has changed.
                 *     This can happen in a stream published by a mobile device. (See
                 *     <a href="Stream.html#properties">Stream.videoType</a>.)
                 *   </li>
                 * </ul>
                 *
                 * @class StreamPropertyChangedEvent
                 * @property {String} changedProperty The property of the stream that changed. This value
                 * is either <code>"hasAudio"</code>, <code>"hasVideo"</code>, or <code>"videoDimensions"</code>.
                 * @property {Object} newValue The new value of the property (after the change).
                 * @property {Object} oldValue The old value of the property (before the change).
                 * @property {Stream} stream The Stream object for which a property has changed.
                 *
                 * @see <a href="Publisher.html#publishAudio">Publisher.publishAudio()</a></p>
                 * @see <a href="Publisher.html#publishVideo">Publisher.publishVideo()</a></p>
                 * @see <a href="Stream.html#properties">Stream.videoDimensions</a></p>
                 * @augments Event
                 */
                Events.StreamPropertyChangedEvent = function StreamPropertyChangedEvent(type, stream, changedProperty, oldValue, newValue) {
                    return new Event(type, false, {
                        stream: stream,
                        changedProperty: changedProperty,
                        oldValue: oldValue,
                        newValue: newValue
                    });
                };

                /**
                 * Dispatched when the video dimensions of the video change for a screen-sharing
                 * video stream (when the user resizes the window being captured).
                 *
                 * @class VideoDimensionsChangedEvent
                 * @property {Object} newValue The new video dimensions (after the change). This object has two
                 * properties: <code>height</code> (the height, in pixels) and <code>width</code> (the width,
                 * in pixels).
                 * @property {Object} oldValue The old video dimensions (before the change). This object has two
                 * properties: <code>height</code> (the old height, in pixels) and <code>width</code> (the old
                 * width, in pixels).
                 *
                 * @see <a href="Publisher.html#event:videoDimensionsChanged">Publisher videoDimensionsChanged
                 *   event</a>
                 * @see <a href="Subscriber.html#event:videoDimensionsChanged">Subscriber videoDimensionsChanged
                 *   event</a>
                 * @augments Event
                 */
                Events.VideoDimensionsChangedEvent = function VideoDimensionsChangedEvent(target, oldValue, newValue) {
                    return new Event('videoDimensionsChanged', false, {
                        target: target,
                        oldValue: oldValue,
                        newValue: newValue
                    });
                };

                /**
                 * Defines event objects for the <code>archiveStarted</code> and <code>archiveStopped</code>
                 * events. The Session object dispatches these events when an archive recording of the session
                 * starts and stops.
                 *
                 * @property {String} id The archive ID.
                 * @property {String} name The name of the archive. You can assign an archive a name when you
                 * create it, using the <a href="http://www.tokbox.com/opentok/api">OpenTok REST API</a> or one
                 * of the <a href="http://www.tokbox.com/opentok/libraries/server">OpenTok server SDKs</a>.
                 *
                 * @class ArchiveEvent
                 * @augments Event
                 */
                Events.ArchiveEvent = function ArchiveEvent(type, archive) {
                    return new Event(type, false, {
                        id: archive.id,
                        name: archive.name,
                        status: archive.status,
                        archive: archive
                    });
                };

                Events.ArchiveUpdatedEvent = function ArchiveUpdatedEvent(stream, key, oldValue, newValue) {
                    return new Event('updated', false, {
                        target: stream,
                        changedProperty: key,
                        oldValue: oldValue,
                        newValue: newValue
                    });
                };

                /**
                 * The Session object dispatches a signal event when the client receives a signal from the
                 * session.
                 *
                 * @class SignalEvent
                 * @property {String} type The type assigned to the signal (if there is one). Use the type to
                 * filter signals received (by adding an event handler for signal:type1 or signal:type2, etc.)
                 * @property {String} data The data string sent with the signal (if there is one).
                 * @property {Connection} from The Connection corresponding to the client that sent the
                 * signal.
                 *
                 * @see <a href="Session.html#signal">Session.signal()</a></p>
                 * @see <a href="Session.html#events">Session events (signal and signal:type)</a></p>
                 * @augments Event
                 */
                Events.SignalEvent = function SignalEvent(type, data, from) {
                    return new Event(type ? 'signal:' + type : eventNames.SIGNAL, false, {
                        data: data,
                        from: from
                    });
                };

                Events.StreamUpdatedEvent = function StreamUpdatedEvent(stream, key, oldValue, newValue) {
                    return new Event('updated', false, {
                        target: stream,
                        changedProperty: key,
                        oldValue: oldValue,
                        newValue: newValue
                    });
                };

                Events.DestroyedEvent = function DestroyedEvent(type, target, reason) {
                    return new Event(type, false, {
                        target: target,
                        reason: reason
                    });
                };

                Events.ConnectionStateChangedEvent = function ConnectionStateChangedEvent(type, target) {
                    return new Event(type, false, {
                        target: target
                    });
                };

                /**
                 * Defines the event object for the <code>videoDisabled</code> and <code>videoEnabled</code>
                 * events dispatched by the Subscriber.
                 *
                 * @class VideoEnabledChangedEvent
                 *
                 * @property {Boolean} cancelable Whether the event has a default behavior that is cancelable
                 * (<code>true</code>) or not (<code>false</code>). You can cancel the default behavior by
                 * calling the <code>preventDefault()</code> method of the event object in the callback
                 * function. (See <a href="#preventDefault">preventDefault()</a>.)
                 *
                 * @property {String} reason The reason the video was disabled or enabled. This can be set to one
                 * of the following values:
                 *
                 * <ul>
                 *
                 *   <li><code>"publishVideo"</code> &mdash; The publisher started or stopped publishing video,
                 *   by calling <code>publishVideo(true)</code> or <code>publishVideo(false)</code>.</li>
                 *
                 *   <li><code>"quality"</code> &mdash; The OpenTok Media Router starts or stops sending video
                 *   to the subscriber based on stream quality changes. This feature of the OpenTok Media
                 *   Router has a subscriber drop the video stream when connectivity degrades. (The subscriber
                 *   continues to receive the audio stream, if there is one.)
                 *   <p>
                 *   If connectivity improves to support video again, the Subscriber object dispatches
                 *   a <code>videoEnabled</code> event, and the Subscriber resumes receiving video.
                 *   <p>
                 *   By default, the Subscriber displays a video disabled indicator when a
                 *   <code>videoDisabled</code> event with this reason is dispatched and removes the indicator
                 *   when the <code>videoEnabled</code> event with this reason is dispatched. You can control
                 *   the display of this icon by calling the <code>setStyle()</code> method of the Subscriber,
                 *   setting the <code>videoDisabledDisplayMode</code> property(or you can set the style when
                 *   calling the <code>Session.subscribe()</code> method, setting the <code>style</code> property
                 *   of the <code>properties</code> parameter).
                 *   <p>
                 *   This feature is only available in sessions that use the OpenTok Media Router (sessions with
                 *   the <a href="http://tokbox.com/opentok/tutorials/create-session/#media-mode">media mode</a>
                 *   set to routed), not in sessions with the media mode set to relayed.
                 *   </li>
                 *
                 *   <li><code>"subscribeToVideo"</code> &mdash; The subscriber started or stopped subscribing to
                 *   video, by calling <code>subscribeToVideo(true)</code> or
                 *   <code>subscribeToVideo(false)</code>.</li>
                 *
                 *   <li><code>"codecNotSupported"</code> &mdash; The subscriber stopped subscribing to video due
                 *   to an incompatible codec.</li>
                 *
                 *   <li><code>"codecChanged"</code> &mdash; The subscriber video was enabled after a codec change
                 *   from an incompatible codec.</li>
                 *
                 * </ul>
                 *
                 * @property {Object} target The object that dispatched the event.
                 *
                 * @property {String} type  The type of event: <code>"videoDisabled"</code> or
                 * <code>"videoEnabled"</code>.
                 *
                 * @see <a href="Subscriber.html#event:videoDisabled">Subscriber videoDisabled event</a></p>
                 * @see <a href="Subscriber.html#event:videoEnabled">Subscriber videoEnabled event</a></p>
                 * @augments Event
                 */
                Events.VideoEnabledChangedEvent = function VideoEnabledChangedEvent(type, properties) {
                    return new Event(type, false, {
                        reason: properties.reason
                    });
                };

                Events.VideoDisableWarningEvent = function VideoDisableWarningEvent(type /* , properties */) {
                    return new Event(type, false);
                };

                /**
                 * Dispatched periodically by a Subscriber or Publisher object to indicate the audio
                 * level. This event is dispatched up to 60 times per second, depending on the browser.
                 *
                 * @property {Number} audioLevel The audio level, from 0 to 1.0. Adjust this value logarithmically
                 * for use in adjusting a user interface element, such as a volume meter. Use a moving average
                 * to smooth the data.
                 *
                 * @class AudioLevelUpdatedEvent
                 * @augments Event
                 */
                Events.AudioLevelUpdatedEvent = function AudioLevelUpdatedEvent(audioLevel) {
                    return new Event(eventNames.AUDIO_LEVEL_UPDATED, false, {
                        audioLevel: audioLevel
                    });
                };

                /**
                 * Dispatched by a Publisher when the user has stopped sharing one or all media types
                 * (video, audio, or screen).
                 *
                 * @property {MediaStreamTrack} track The media track that has ended. This property is undefined
                 * if all media tracks have stopped. Check the <code>kind</code> property of this object to
                 * see if the track is an audio track or a video track.
                 *
                 * @class MediaStoppedEvent
                 * @augments Event
                 * @see https://developer.mozilla.org/en-US/docs/Web/API/MediaStreamTrack
                 */
                Events.MediaStoppedEvent = function MediaStoppedEvent(target, track) {
                    return new Event(eventNames.MEDIA_STOPPED, true, {
                        target: target,
                        track: track
                    });
                };

                /**
                 * Dispatched by a Subscriber or Publisher object to indicate the <code>video</code> element
                 * (or <code>object</code> element in Internet Explorer) was created. Add a listener for this event
                 * when you set the <code>insertDefaultUI</code> option to <code>false</code> in the call to the
                 * <a href="OT.html#initPublisher">OT.initPublisher()</a> method or the
                 * <a href="Session.html#subscribe">Session.subscribe()</a> method. The <code>element</code>
                 * property of the event object is a reference to the Publisher's <code>video</code> element
                 * (or the <code>object</code> element in Internet Explorer). Add it to the HTML DOM to display the
                 * video. (When you set the <code>insertDefaultUI</code> option to <code>false</code>, the
                 * <code>video</code> element is not inserted into the DOM automatically.)
                 * <p>
                 * Add a listener for this event only if you have set the <code>insertDefaultUI</code> option to
                 * <code>false</code>. If you have not set <code>insertDefaultUI</code> option
                 * to <code>false</code>, do not move the <code>video</code> element (or the <code>object</code>
                 * element containing the video in Internet Explorer) in the HTML DOM. Doing so causes the
                 * Publisher or Subscriber object to be destroyed.
                 *
                 * @property {Number} element A reference to the Publisher or Subscriber's <code>video</code>
                 * element (or in Internet Explorer the <code>object</code> element containing the video).
                 * Add it to the HTML DOM to display the video.
                 *
                 * @class VideoElementCreatedEvent
                 * @augments Event
                 */
                Events.VideoElementCreatedEvent = function VideoElementCreatedEvent(element) {
                    return new Event(eventNames.VIDEO_ELEMENT_CREATED, false, {
                        element: element
                    });
                };

                return Events;
            };

            /***/ }),
        /* 24 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var OTHelpers = __webpack_require__(2);

            var sessionObjects = {};

// TODO: Eliminate the need for this module, which is globally tracking these objects.

// Publishers are id'd by their guid
            sessionObjects.publishers = new OTHelpers.Collection('guid');

// Subscribers are id'd by their widgetId
            sessionObjects.subscribers = new OTHelpers.Collection('widgetId');

            sessionObjects.sessions = new OTHelpers.Collection();

            module.exports = sessionObjects;

            /***/ }),
        /* 25 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseClone = __webpack_require__(69);

            /** Used to compose bitmasks for cloning. */
            var CLONE_SYMBOLS_FLAG = 4;

            /**
             * Creates a shallow clone of `value`.
             *
             * **Note:** This method is loosely based on the
             * [structured clone algorithm](https://mdn.io/Structured_clone_algorithm)
             * and supports cloning arrays, array buffers, booleans, date objects, maps,
             * numbers, `Object` objects, regexes, sets, strings, symbols, and typed
             * arrays. The own enumerable properties of `arguments` objects are cloned
             * as plain objects. An empty object is returned for uncloneable values such
             * as error objects, functions, DOM nodes, and WeakMaps.
             *
             * @static
             * @memberOf _
             * @since 0.1.0
             * @category Lang
             * @param {*} value The value to clone.
             * @returns {*} Returns the cloned value.
             * @see _.cloneDeep
             * @example
             *
             * var objects = [{ 'a': 1 }, { 'b': 2 }];
             *
             * var shallow = _.clone(objects);
             * console.log(shallow[0] === objects[0]);
             * // => true
             */
            function clone(value) {
                return baseClone(value, CLONE_SYMBOLS_FLAG);
            }

            module.exports = clone;


            /***/ }),
        /* 26 */
        /***/ (function(module, exports, __webpack_require__) {

            var Symbol = __webpack_require__(37),
                getRawTag = __webpack_require__(328),
                objectToString = __webpack_require__(329);

            /** `Object#toString` result references. */
            var nullTag = '[object Null]',
                undefinedTag = '[object Undefined]';

            /** Built-in value references. */
            var symToStringTag = Symbol ? Symbol.toStringTag : undefined;

            /**
             * The base implementation of `getTag` without fallbacks for buggy environments.
             *
             * @private
             * @param {*} value The value to query.
             * @returns {string} Returns the `toStringTag`.
             */
            function baseGetTag(value) {
                if (value == null) {
                    return value === undefined ? undefinedTag : nullTag;
                }
                return (symToStringTag && symToStringTag in Object(value))
                    ? getRawTag(value)
                    : objectToString(value);
            }

            module.exports = baseGetTag;


            /***/ }),
        /* 27 */
        /***/ (function(module, exports, __webpack_require__) {

            var arrayLikeKeys = __webpack_require__(165),
                baseKeys = __webpack_require__(109),
                isArrayLike = __webpack_require__(17);

            /**
             * Creates an array of the own enumerable property names of `object`.
             *
             * **Note:** Non-object values are coerced to objects. See the
             * [ES spec](http://ecma-international.org/ecma-262/7.0/#sec-object.keys)
             * for more details.
             *
             * @static
             * @since 0.1.0
             * @memberOf _
             * @category Object
             * @param {Object} object The object to query.
             * @returns {Array} Returns the array of property names.
             * @example
             *
             * function Foo() {
             *   this.a = 1;
             *   this.b = 2;
             * }
             *
             * Foo.prototype.c = 3;
             *
             * _.keys(new Foo);
             * // => ['a', 'b'] (iteration order is not guaranteed)
             *
             * _.keys('hi');
             * // => ['0', '1']
             */
            function keys(object) {
                return isArrayLike(object) ? arrayLikeKeys(object) : baseKeys(object);
            }

            module.exports = keys;


            /***/ }),
        /* 28 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseMatches = __webpack_require__(413),
                baseMatchesProperty = __webpack_require__(421),
                identity = __webpack_require__(80),
                isArray = __webpack_require__(9),
                property = __webpack_require__(426);

            /**
             * The base implementation of `_.iteratee`.
             *
             * @private
             * @param {*} [value=_.identity] The value to convert to an iteratee.
             * @returns {Function} Returns the iteratee.
             */
            function baseIteratee(value) {
                // Don't store the `typeof` result in a variable to avoid a JIT bug in Safari 9.
                // See https://bugs.webkit.org/show_bug.cgi?id=156034 for more details.
                if (typeof value == 'function') {
                    return value;
                }
                if (value == null) {
                    return identity;
                }
                if (typeof value == 'object') {
                    return isArray(value)
                        ? baseMatchesProperty(value[0], value[1])
                        : baseMatches(value);
                }
                return property(value);
            }

            module.exports = baseIteratee;


            /***/ }),
        /* 29 */
        /***/ (function(module, exports) {

            /**
             * A specialized version of `_.map` for arrays without support for iteratee
             * shorthands.
             *
             * @private
             * @param {Array} [array] The array to iterate over.
             * @param {Function} iteratee The function invoked per iteration.
             * @returns {Array} Returns the new mapped array.
             */
            function arrayMap(array, iteratee) {
                var index = -1,
                    length = array == null ? 0 : array.length,
                    result = Array(length);

                while (++index < length) {
                    result[index] = iteratee(array[index], index, array);
                }
                return result;
            }

            module.exports = arrayMap;


            /***/ }),
        /* 30 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";
// Copyright Joyent, Inc. and other Node contributors.
//
// Permission is hereby granted, free of charge, to any person obtaining a
// copy of this software and associated documentation files (the
// "Software"), to deal in the Software without restriction, including
// without limitation the rights to use, copy, modify, merge, publish,
// distribute, sublicense, and/or sell copies of the Software, and to permit
// persons to whom the Software is furnished to do so, subject to the
// following conditions:
//
// The above copyright notice and this permission notice shall be included
// in all copies or substantial portions of the Software.
//
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
// OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
// MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN
// NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
// DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
// OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE
// USE OR OTHER DEALINGS IN THE SOFTWARE.



            var R = typeof Reflect === 'object' ? Reflect : null
            var ReflectApply = R && typeof R.apply === 'function'
                ? R.apply
                : function ReflectApply(target, receiver, args) {
                    return Function.prototype.apply.call(target, receiver, args);
                }

            var ReflectOwnKeys
            if (R && typeof R.ownKeys === 'function') {
                ReflectOwnKeys = R.ownKeys
            } else if (Object.getOwnPropertySymbols) {
                ReflectOwnKeys = function ReflectOwnKeys(target) {
                    return Object.getOwnPropertyNames(target)
                        .concat(Object.getOwnPropertySymbols(target));
                };
            } else {
                ReflectOwnKeys = function ReflectOwnKeys(target) {
                    return Object.getOwnPropertyNames(target);
                };
            }

            function ProcessEmitWarning(warning) {
                if (console && console.warn) console.warn(warning);
            }

            var NumberIsNaN = Number.isNaN || function NumberIsNaN(value) {
                return value !== value;
            }

            function EventEmitter() {
                EventEmitter.init.call(this);
            }
            module.exports = EventEmitter;

// Backwards-compat with node 0.10.x
            EventEmitter.EventEmitter = EventEmitter;

            EventEmitter.prototype._events = undefined;
            EventEmitter.prototype._eventsCount = 0;
            EventEmitter.prototype._maxListeners = undefined;

// By default EventEmitters will print a warning if more than 10 listeners are
// added to it. This is a useful default which helps finding memory leaks.
            var defaultMaxListeners = 10;

            Object.defineProperty(EventEmitter, 'defaultMaxListeners', {
                enumerable: true,
                get: function() {
                    return defaultMaxListeners;
                },
                set: function(arg) {
                    if (typeof arg !== 'number' || arg < 0 || NumberIsNaN(arg)) {
                        throw new RangeError('The value of "defaultMaxListeners" is out of range. It must be a non-negative number. Received ' + arg + '.');
                    }
                    defaultMaxListeners = arg;
                }
            });

            EventEmitter.init = function() {

                if (this._events === undefined ||
                    this._events === Object.getPrototypeOf(this)._events) {
                    this._events = Object.create(null);
                    this._eventsCount = 0;
                }

                this._maxListeners = this._maxListeners || undefined;
            };

// Obviously not all Emitters should be limited to 10. This function allows
// that to be increased. Set to zero for unlimited.
            EventEmitter.prototype.setMaxListeners = function setMaxListeners(n) {
                if (typeof n !== 'number' || n < 0 || NumberIsNaN(n)) {
                    throw new RangeError('The value of "n" is out of range. It must be a non-negative number. Received ' + n + '.');
                }
                this._maxListeners = n;
                return this;
            };

            function $getMaxListeners(that) {
                if (that._maxListeners === undefined)
                    return EventEmitter.defaultMaxListeners;
                return that._maxListeners;
            }

            EventEmitter.prototype.getMaxListeners = function getMaxListeners() {
                return $getMaxListeners(this);
            };

            EventEmitter.prototype.emit = function emit(type) {
                var args = [];
                for (var i = 1; i < arguments.length; i++) args.push(arguments[i]);
                var doError = (type === 'error');

                var events = this._events;
                if (events !== undefined)
                    doError = (doError && events.error === undefined);
                else if (!doError)
                    return false;

                // If there is no 'error' event listener then throw.
                if (doError) {
                    var er;
                    if (args.length > 0)
                        er = args[0];
                    if (er instanceof Error) {
                        // Note: The comments on the `throw` lines are intentional, they show
                        // up in Node's output if this results in an unhandled exception.
                        throw er; // Unhandled 'error' event
                    }
                    // At least give some kind of context to the user
                    var err = new Error('Unhandled error.' + (er ? ' (' + er.message + ')' : ''));
                    err.context = er;
                    throw err; // Unhandled 'error' event
                }

                var handler = events[type];

                if (handler === undefined)
                    return false;

                if (typeof handler === 'function') {
                    ReflectApply(handler, this, args);
                } else {
                    var len = handler.length;
                    var listeners = arrayClone(handler, len);
                    for (var i = 0; i < len; ++i)
                        ReflectApply(listeners[i], this, args);
                }

                return true;
            };

            function _addListener(target, type, listener, prepend) {
                var m;
                var events;
                var existing;

                if (typeof listener !== 'function') {
                    throw new TypeError('The "listener" argument must be of type Function. Received type ' + typeof listener);
                }

                events = target._events;
                if (events === undefined) {
                    events = target._events = Object.create(null);
                    target._eventsCount = 0;
                } else {
                    // To avoid recursion in the case that type === "newListener"! Before
                    // adding it to the listeners, first emit "newListener".
                    if (events.newListener !== undefined) {
                        target.emit('newListener', type,
                            listener.listener ? listener.listener : listener);

                        // Re-assign `events` because a newListener handler could have caused the
                        // this._events to be assigned to a new object
                        events = target._events;
                    }
                    existing = events[type];
                }

                if (existing === undefined) {
                    // Optimize the case of one listener. Don't need the extra array object.
                    existing = events[type] = listener;
                    ++target._eventsCount;
                } else {
                    if (typeof existing === 'function') {
                        // Adding the second element, need to change to array.
                        existing = events[type] =
                            prepend ? [listener, existing] : [existing, listener];
                        // If we've already got an array, just append.
                    } else if (prepend) {
                        existing.unshift(listener);
                    } else {
                        existing.push(listener);
                    }

                    // Check for listener leak
                    m = $getMaxListeners(target);
                    if (m > 0 && existing.length > m && !existing.warned) {
                        existing.warned = true;
                        // No error code for this since it is a Warning
                        // eslint-disable-next-line no-restricted-syntax
                        var w = new Error('Possible EventEmitter memory leak detected. ' +
                            existing.length + ' ' + String(type) + ' listeners ' +
                            'added. Use emitter.setMaxListeners() to ' +
                            'increase limit');
                        w.name = 'MaxListenersExceededWarning';
                        w.emitter = target;
                        w.type = type;
                        w.count = existing.length;
                        ProcessEmitWarning(w);
                    }
                }

                return target;
            }

            EventEmitter.prototype.addListener = function addListener(type, listener) {
                return _addListener(this, type, listener, false);
            };

            EventEmitter.prototype.on = EventEmitter.prototype.addListener;

            EventEmitter.prototype.prependListener =
                function prependListener(type, listener) {
                    return _addListener(this, type, listener, true);
                };

            function onceWrapper() {
                var args = [];
                for (var i = 0; i < arguments.length; i++) args.push(arguments[i]);
                if (!this.fired) {
                    this.target.removeListener(this.type, this.wrapFn);
                    this.fired = true;
                    ReflectApply(this.listener, this.target, args);
                }
            }

            function _onceWrap(target, type, listener) {
                var state = { fired: false, wrapFn: undefined, target: target, type: type, listener: listener };
                var wrapped = onceWrapper.bind(state);
                wrapped.listener = listener;
                state.wrapFn = wrapped;
                return wrapped;
            }

            EventEmitter.prototype.once = function once(type, listener) {
                if (typeof listener !== 'function') {
                    throw new TypeError('The "listener" argument must be of type Function. Received type ' + typeof listener);
                }
                this.on(type, _onceWrap(this, type, listener));
                return this;
            };

            EventEmitter.prototype.prependOnceListener =
                function prependOnceListener(type, listener) {
                    if (typeof listener !== 'function') {
                        throw new TypeError('The "listener" argument must be of type Function. Received type ' + typeof listener);
                    }
                    this.prependListener(type, _onceWrap(this, type, listener));
                    return this;
                };

// Emits a 'removeListener' event if and only if the listener was removed.
            EventEmitter.prototype.removeListener =
                function removeListener(type, listener) {
                    var list, events, position, i, originalListener;

                    if (typeof listener !== 'function') {
                        throw new TypeError('The "listener" argument must be of type Function. Received type ' + typeof listener);
                    }

                    events = this._events;
                    if (events === undefined)
                        return this;

                    list = events[type];
                    if (list === undefined)
                        return this;

                    if (list === listener || list.listener === listener) {
                        if (--this._eventsCount === 0)
                            this._events = Object.create(null);
                        else {
                            delete events[type];
                            if (events.removeListener)
                                this.emit('removeListener', type, list.listener || listener);
                        }
                    } else if (typeof list !== 'function') {
                        position = -1;

                        for (i = list.length - 1; i >= 0; i--) {
                            if (list[i] === listener || list[i].listener === listener) {
                                originalListener = list[i].listener;
                                position = i;
                                break;
                            }
                        }

                        if (position < 0)
                            return this;

                        if (position === 0)
                            list.shift();
                        else {
                            spliceOne(list, position);
                        }

                        if (list.length === 1)
                            events[type] = list[0];

                        if (events.removeListener !== undefined)
                            this.emit('removeListener', type, originalListener || listener);
                    }

                    return this;
                };

            EventEmitter.prototype.off = EventEmitter.prototype.removeListener;

            EventEmitter.prototype.removeAllListeners =
                function removeAllListeners(type) {
                    var listeners, events, i;

                    events = this._events;
                    if (events === undefined)
                        return this;

                    // not listening for removeListener, no need to emit
                    if (events.removeListener === undefined) {
                        if (arguments.length === 0) {
                            this._events = Object.create(null);
                            this._eventsCount = 0;
                        } else if (events[type] !== undefined) {
                            if (--this._eventsCount === 0)
                                this._events = Object.create(null);
                            else
                                delete events[type];
                        }
                        return this;
                    }

                    // emit removeListener for all listeners on all events
                    if (arguments.length === 0) {
                        var keys = Object.keys(events);
                        var key;
                        for (i = 0; i < keys.length; ++i) {
                            key = keys[i];
                            if (key === 'removeListener') continue;
                            this.removeAllListeners(key);
                        }
                        this.removeAllListeners('removeListener');
                        this._events = Object.create(null);
                        this._eventsCount = 0;
                        return this;
                    }

                    listeners = events[type];

                    if (typeof listeners === 'function') {
                        this.removeListener(type, listeners);
                    } else if (listeners !== undefined) {
                        // LIFO order
                        for (i = listeners.length - 1; i >= 0; i--) {
                            this.removeListener(type, listeners[i]);
                        }
                    }

                    return this;
                };

            function _listeners(target, type, unwrap) {
                var events = target._events;

                if (events === undefined)
                    return [];

                var evlistener = events[type];
                if (evlistener === undefined)
                    return [];

                if (typeof evlistener === 'function')
                    return unwrap ? [evlistener.listener || evlistener] : [evlistener];

                return unwrap ?
                    unwrapListeners(evlistener) : arrayClone(evlistener, evlistener.length);
            }

            EventEmitter.prototype.listeners = function listeners(type) {
                return _listeners(this, type, true);
            };

            EventEmitter.prototype.rawListeners = function rawListeners(type) {
                return _listeners(this, type, false);
            };

            EventEmitter.listenerCount = function(emitter, type) {
                if (typeof emitter.listenerCount === 'function') {
                    return emitter.listenerCount(type);
                } else {
                    return listenerCount.call(emitter, type);
                }
            };

            EventEmitter.prototype.listenerCount = listenerCount;
            function listenerCount(type) {
                var events = this._events;

                if (events !== undefined) {
                    var evlistener = events[type];

                    if (typeof evlistener === 'function') {
                        return 1;
                    } else if (evlistener !== undefined) {
                        return evlistener.length;
                    }
                }

                return 0;
            }

            EventEmitter.prototype.eventNames = function eventNames() {
                return this._eventsCount > 0 ? ReflectOwnKeys(this._events) : [];
            };

            function arrayClone(arr, n) {
                var copy = new Array(n);
                for (var i = 0; i < n; ++i)
                    copy[i] = arr[i];
                return copy;
            }

            function spliceOne(list, index) {
                for (; index + 1 < list.length; index++)
                    list[index] = list[index + 1];
                list.pop();
            }

            function unwrapListeners(arr) {
                var ret = new Array(arr.length);
                for (var i = 0; i < ret.length; ++i) {
                    ret[i] = arr[i].listener || arr[i];
                }
                return ret;
            }


            /***/ }),
        /* 31 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


// compare and isBuffer taken from https://github.com/feross/buffer/blob/680e9e5e488f22aac27599a57dc844a6315928dd/index.js
// original notice:

            /*!
 * The buffer module from node.js, for the browser.
 *
 * @author   Feross Aboukhadijeh <feross@feross.org> <http://feross.org>
 * @license  MIT
 */
            function compare(a, b) {
                if (a === b) {
                    return 0;
                }

                var x = a.length;
                var y = b.length;

                for (var i = 0, len = Math.min(x, y); i < len; ++i) {
                    if (a[i] !== b[i]) {
                        x = a[i];
                        y = b[i];
                        break;
                    }
                }

                if (x < y) {
                    return -1;
                }
                if (y < x) {
                    return 1;
                }
                return 0;
            }
            function isBuffer(b) {
                if ((typeof window !== undefined ? window : global).Buffer && typeof (typeof window !== undefined ? window : global).Buffer.isBuffer === 'function') {
                    return (typeof window !== undefined ? window : global).Buffer.isBuffer(b);
                }
                return !!(b != null && b._isBuffer);
            }

// based on node assert, original notice:

// http://wiki.commonjs.org/wiki/Unit_Testing/1.0
//
// THIS IS NOT TESTED NOR LIKELY TO WORK OUTSIDE V8!
//
// Originally from narwhal.js (http://narwhaljs.org)
// Copyright (c) 2009 Thomas Robinson <280north.com>
//
// Permission is hereby granted, free of charge, to any person obtaining a copy
// of this software and associated documentation files (the 'Software'), to
// deal in the Software without restriction, including without limitation the
// rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
// sell copies of the Software, and to permit persons to whom the Software is
// furnished to do so, subject to the following conditions:
//
// The above copyright notice and this permission notice shall be included in
// all copies or substantial portions of the Software.
//
// THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
// ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
// WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

            var util = __webpack_require__(521);
            var hasOwn = Object.prototype.hasOwnProperty;
            var pSlice = Array.prototype.slice;
            var functionsHaveNames = (function () {
                return function foo() {}.name === 'foo';
            }());
            function pToString (obj) {
                return Object.prototype.toString.call(obj);
            }
            function isView(arrbuf) {
                if (isBuffer(arrbuf)) {
                    return false;
                }
                if (typeof (typeof window !== undefined ? window : global).ArrayBuffer !== 'function') {
                    return false;
                }
                if (typeof ArrayBuffer.isView === 'function') {
                    return ArrayBuffer.isView(arrbuf);
                }
                if (!arrbuf) {
                    return false;
                }
                if (arrbuf instanceof DataView) {
                    return true;
                }
                if (arrbuf.buffer && arrbuf.buffer instanceof ArrayBuffer) {
                    return true;
                }
                return false;
            }
// 1. The assert module provides functions that throw
// AssertionError's when particular conditions are not met. The
// assert module must conform to the following interface.

            var assert = module.exports = ok;

// 2. The AssertionError is defined in assert.
// new assert.AssertionError({ message: message,
//                             actual: actual,
//                             expected: expected })

            var regex = /\s*function\s+([^\(\s]*)\s*/;
// based on https://github.com/ljharb/function.prototype.name/blob/adeeeec8bfcc6068b187d7d9fb3d5bb1d3a30899/implementation.js
            function getName(func) {
                if (!util.isFunction(func)) {
                    return;
                }
                if (functionsHaveNames) {
                    return func.name;
                }
                var str = func.toString();
                var match = str.match(regex);
                return match && match[1];
            }
            assert.AssertionError = function AssertionError(options) {
                this.name = 'AssertionError';
                this.actual = options.actual;
                this.expected = options.expected;
                this.operator = options.operator;
                if (options.message) {
                    this.message = options.message;
                    this.generatedMessage = false;
                } else {
                    this.message = getMessage(this);
                    this.generatedMessage = true;
                }
                var stackStartFunction = options.stackStartFunction || fail;
                if (Error.captureStackTrace) {
                    Error.captureStackTrace(this, stackStartFunction);
                } else {
                    // non v8 browsers so we can have a stacktrace
                    var err = new Error();
                    if (err.stack) {
                        var out = err.stack;

                        // try to strip useless frames
                        var fn_name = getName(stackStartFunction);
                        var idx = out.indexOf('\n' + fn_name);
                        if (idx >= 0) {
                            // once we have located the function frame
                            // we need to strip out everything before it (and its line)
                            var next_line = out.indexOf('\n', idx + 1);
                            out = out.substring(next_line + 1);
                        }

                        this.stack = out;
                    }
                }
            };

// assert.AssertionError instanceof Error
            util.inherits(assert.AssertionError, Error);

            function truncate(s, n) {
                if (typeof s === 'string') {
                    return s.length < n ? s : s.slice(0, n);
                } else {
                    return s;
                }
            }
            function inspect(something) {
                if (functionsHaveNames || !util.isFunction(something)) {
                    return util.inspect(something);
                }
                var rawname = getName(something);
                var name = rawname ? ': ' + rawname : '';
                return '[Function' +  name + ']';
            }
            function getMessage(self) {
                return truncate(inspect(self.actual), 128) + ' ' +
                    self.operator + ' ' +
                    truncate(inspect(self.expected), 128);
            }

// At present only the three keys mentioned above are used and
// understood by the spec. Implementations or sub modules can pass
// other keys to the AssertionError's constructor - they will be
// ignored.

// 3. All of the following functions must throw an AssertionError
// when a corresponding condition is not met, with a message that
// may be undefined if not provided.  All assertion methods provide
// both the actual and expected values to the assertion error for
// display purposes.

            function fail(actual, expected, message, operator, stackStartFunction) {
                throw new assert.AssertionError({
                    message: message,
                    actual: actual,
                    expected: expected,
                    operator: operator,
                    stackStartFunction: stackStartFunction
                });
            }

// EXTENSION! allows for well behaved errors defined elsewhere.
            assert.fail = fail;

// 4. Pure assertion tests whether a value is truthy, as determined
// by !!guard.
// assert.ok(guard, message_opt);
// This statement is equivalent to assert.equal(true, !!guard,
// message_opt);. To test strictly for the value true, use
// assert.strictEqual(true, guard, message_opt);.

            function ok(value, message) {
                if (!value) fail(value, true, message, '==', assert.ok);
            }
            assert.ok = ok;

// 5. The equality assertion tests shallow, coercive equality with
// ==.
// assert.equal(actual, expected, message_opt);

            assert.equal = function equal(actual, expected, message) {
                if (actual != expected) fail(actual, expected, message, '==', assert.equal);
            };

// 6. The non-equality assertion tests for whether two objects are not equal
// with != assert.notEqual(actual, expected, message_opt);

            assert.notEqual = function notEqual(actual, expected, message) {
                if (actual == expected) {
                    fail(actual, expected, message, '!=', assert.notEqual);
                }
            };

// 7. The equivalence assertion tests a deep equality relation.
// assert.deepEqual(actual, expected, message_opt);

            assert.deepEqual = function deepEqual(actual, expected, message) {
                if (!_deepEqual(actual, expected, false)) {
                    fail(actual, expected, message, 'deepEqual', assert.deepEqual);
                }
            };

            assert.deepStrictEqual = function deepStrictEqual(actual, expected, message) {
                if (!_deepEqual(actual, expected, true)) {
                    fail(actual, expected, message, 'deepStrictEqual', assert.deepStrictEqual);
                }
            };

            function _deepEqual(actual, expected, strict, memos) {
                // 7.1. All identical values are equivalent, as determined by ===.
                if (actual === expected) {
                    return true;
                } else if (isBuffer(actual) && isBuffer(expected)) {
                    return compare(actual, expected) === 0;

                    // 7.2. If the expected value is a Date object, the actual value is
                    // equivalent if it is also a Date object that refers to the same time.
                } else if (util.isDate(actual) && util.isDate(expected)) {
                    return actual.getTime() === expected.getTime();

                    // 7.3 If the expected value is a RegExp object, the actual value is
                    // equivalent if it is also a RegExp object with the same source and
                    // properties (`global`, `multiline`, `lastIndex`, `ignoreCase`).
                } else if (util.isRegExp(actual) && util.isRegExp(expected)) {
                    return actual.source === expected.source &&
                        actual.global === expected.global &&
                        actual.multiline === expected.multiline &&
                        actual.lastIndex === expected.lastIndex &&
                        actual.ignoreCase === expected.ignoreCase;

                    // 7.4. Other pairs that do not both pass typeof value == 'object',
                    // equivalence is determined by ==.
                } else if ((actual === null || typeof actual !== 'object') &&
                    (expected === null || typeof expected !== 'object')) {
                    return strict ? actual === expected : actual == expected;

                    // If both values are instances of typed arrays, wrap their underlying
                    // ArrayBuffers in a Buffer each to increase performance
                    // This optimization requires the arrays to have the same type as checked by
                    // Object.prototype.toString (aka pToString). Never perform binary
                    // comparisons for Float*Arrays, though, since e.g. +0 === -0 but their
                    // bit patterns are not identical.
                } else if (isView(actual) && isView(expected) &&
                    pToString(actual) === pToString(expected) &&
                    !(actual instanceof Float32Array ||
                        actual instanceof Float64Array)) {
                    return compare(new Uint8Array(actual.buffer),
                        new Uint8Array(expected.buffer)) === 0;

                    // 7.5 For all other Object pairs, including Array objects, equivalence is
                    // determined by having the same number of owned properties (as verified
                    // with Object.prototype.hasOwnProperty.call), the same set of keys
                    // (although not necessarily the same order), equivalent values for every
                    // corresponding key, and an identical 'prototype' property. Note: this
                    // accounts for both named and indexed properties on Arrays.
                } else if (isBuffer(actual) !== isBuffer(expected)) {
                    return false;
                } else {
                    memos = memos || {actual: [], expected: []};

                    var actualIndex = memos.actual.indexOf(actual);
                    if (actualIndex !== -1) {
                        if (actualIndex === memos.expected.indexOf(expected)) {
                            return true;
                        }
                    }

                    memos.actual.push(actual);
                    memos.expected.push(expected);

                    return objEquiv(actual, expected, strict, memos);
                }
            }

            function isArguments(object) {
                return Object.prototype.toString.call(object) == '[object Arguments]';
            }

            function objEquiv(a, b, strict, actualVisitedObjects) {
                if (a === null || a === undefined || b === null || b === undefined)
                    return false;
                // if one is a primitive, the other must be same
                if (util.isPrimitive(a) || util.isPrimitive(b))
                    return a === b;
                if (strict && Object.getPrototypeOf(a) !== Object.getPrototypeOf(b))
                    return false;
                var aIsArgs = isArguments(a);
                var bIsArgs = isArguments(b);
                if ((aIsArgs && !bIsArgs) || (!aIsArgs && bIsArgs))
                    return false;
                if (aIsArgs) {
                    a = pSlice.call(a);
                    b = pSlice.call(b);
                    return _deepEqual(a, b, strict);
                }
                var ka = objectKeys(a);
                var kb = objectKeys(b);
                var key, i;
                // having the same number of owned properties (keys incorporates
                // hasOwnProperty)
                if (ka.length !== kb.length)
                    return false;
                //the same set of keys (although not necessarily the same order),
                ka.sort();
                kb.sort();
                //~~~cheap key test
                for (i = ka.length - 1; i >= 0; i--) {
                    if (ka[i] !== kb[i])
                        return false;
                }
                //equivalent values for every corresponding key, and
                //~~~possibly expensive deep test
                for (i = ka.length - 1; i >= 0; i--) {
                    key = ka[i];
                    if (!_deepEqual(a[key], b[key], strict, actualVisitedObjects))
                        return false;
                }
                return true;
            }

// 8. The non-equivalence assertion tests for any deep inequality.
// assert.notDeepEqual(actual, expected, message_opt);

            assert.notDeepEqual = function notDeepEqual(actual, expected, message) {
                if (_deepEqual(actual, expected, false)) {
                    fail(actual, expected, message, 'notDeepEqual', assert.notDeepEqual);
                }
            };

            assert.notDeepStrictEqual = notDeepStrictEqual;
            function notDeepStrictEqual(actual, expected, message) {
                if (_deepEqual(actual, expected, true)) {
                    fail(actual, expected, message, 'notDeepStrictEqual', notDeepStrictEqual);
                }
            }


// 9. The strict equality assertion tests strict equality, as determined by ===.
// assert.strictEqual(actual, expected, message_opt);

            assert.strictEqual = function strictEqual(actual, expected, message) {
                if (actual !== expected) {
                    fail(actual, expected, message, '===', assert.strictEqual);
                }
            };

// 10. The strict non-equality assertion tests for strict inequality, as
// determined by !==.  assert.notStrictEqual(actual, expected, message_opt);

            assert.notStrictEqual = function notStrictEqual(actual, expected, message) {
                if (actual === expected) {
                    fail(actual, expected, message, '!==', assert.notStrictEqual);
                }
            };

            function expectedException(actual, expected) {
                if (!actual || !expected) {
                    return false;
                }

                if (Object.prototype.toString.call(expected) == '[object RegExp]') {
                    return expected.test(actual);
                }

                try {
                    if (actual instanceof expected) {
                        return true;
                    }
                } catch (e) {
                    // Ignore.  The instanceof check doesn't work for arrow functions.
                }

                if (Error.isPrototypeOf(expected)) {
                    return false;
                }

                return expected.call({}, actual) === true;
            }

            function _tryBlock(block) {
                var error;
                try {
                    block();
                } catch (e) {
                    error = e;
                }
                return error;
            }

            function _throws(shouldThrow, block, expected, message) {
                var actual;

                if (typeof block !== 'function') {
                    throw new TypeError('"block" argument must be a function');
                }

                if (typeof expected === 'string') {
                    message = expected;
                    expected = null;
                }

                actual = _tryBlock(block);

                message = (expected && expected.name ? ' (' + expected.name + ').' : '.') +
                    (message ? ' ' + message : '.');

                if (shouldThrow && !actual) {
                    fail(actual, expected, 'Missing expected exception' + message);
                }

                var userProvidedMessage = typeof message === 'string';
                var isUnwantedException = !shouldThrow && util.isError(actual);
                var isUnexpectedException = !shouldThrow && actual && !expected;

                if ((isUnwantedException &&
                    userProvidedMessage &&
                    expectedException(actual, expected)) ||
                    isUnexpectedException) {
                    fail(actual, expected, 'Got unwanted exception' + message);
                }

                if ((shouldThrow && actual && expected &&
                    !expectedException(actual, expected)) || (!shouldThrow && actual)) {
                    throw actual;
                }
            }

// 11. Expected to throw an error:
// assert.throws(block, Error_opt, message_opt);

            assert.throws = function(block, /*optional*/error, /*optional*/message) {
                _throws(true, block, error, message);
            };

// EXTENSION! This is annoying to write outside this module.
            assert.doesNotThrow = function(block, /*optional*/error, /*optional*/message) {
                _throws(false, block, error, message);
            };

            assert.ifError = function(err) { if (err) throw err; };

            var objectKeys = Object.keys || function (obj) {
                var keys = [];
                for (var key in obj) {
                    if (hasOwn.call(obj, key)) keys.push(key);
                }
                return keys;
            };


            /***/ }),
        /* 32 */
        /***/ (function(module, exports, __webpack_require__) {

            var before = __webpack_require__(541);

            /**
             * Creates a function that is restricted to invoking `func` once. Repeat calls
             * to the function return the value of the first invocation. The `func` is
             * invoked with the `this` binding and arguments of the created function.
             *
             * @static
             * @memberOf _
             * @since 0.1.0
             * @category Function
             * @param {Function} func The function to restrict.
             * @returns {Function} Returns the new restricted function.
             * @example
             *
             * var initialize = _.once(createApplication);
             * initialize();
             * initialize();
             * // => `createApplication` is invoked once
             */
            function once(func) {
                return before(2, func);
            }

            module.exports = once;


            /***/ }),
        /* 33 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


// @todo enable the following disabled rules see OPENTOK-31136 for more info
            /* eslint-disable no-underscore-dangle, no-param-reassign */

            var logging = __webpack_require__(1)('GlobalExceptionHandler');
            var eventing = __webpack_require__(4);
            var eventNames = __webpack_require__(44);

            var Events = __webpack_require__(23)();

            /**
             * The Error class is used to define the error object passed into completion handlers.
             * Each of the following methods, which execute asynchronously, includes a
             * <code>completionHandler</code> parameter:
             *
             * <ul>
             *   <li><a href="OT.html#initPublisher">OT.initPublisher()</a></li>
             *   <li><a href="OT.html#reportIssue">OT.reportIssue()</a></li>
             *   <li><a href="Session.html#connect">Session.connect()</a></li>
             *   <li><a href="Session.html#forceDisconnect">Session.forceDisconnect()</a></li>
             *   <li><a href="Session.html#forceUnpublish">Session.forceUnpublish()</a></li>
             *   <li><a href="Session.html#publish">Session.publish()</a></li>
             *   <li><a href="Session.html#subscribe">Session.subscribe()</a></li>
             *   <li><a href="Subscriber.html#getStats">Subscriber.getStats()</a></li>
             * </ul>
             *
             * <p>
             * The <code>completionHandler</code> parameter is a function that is called when the call to
             * the asynchronous method succeeds or fails. If the asynchronous call fails, the completion
             * handler function is passed an error object (defined by the Error class). The <code>code</code>
             * and <code>message</code> properties of the error object provide details about the error.
             *
             * <p>
             * <b>Deprecation notice:</b>
             * <code>OT.Error</code> will not be defined in an upcoming version of OpenTok. When this happens,
             * errors emitted by the SDK will simply be instances of standard <code>Error</code> objects.
             * If your code currently checks <code>if (error instanceof OT.Error)</code> please replace it
             * <code>if (/^OT_/.test(error.name))</code>. (The <code>name</code> property for all OpenTok
             * errors with begins with <code>'OT_'</code>.) Note however that this code is for the
             * purposes of smoothly upgrading, and it may be more appropriate for your code to simply compare
             * against the specific error you want to handle, such as
             * <code>if (error.name === 'OT_USER_MEDIA_ACCESS_DENIED')</code>.
             *
             * @property {Number} code Deprecated &mdash; the error code. Use the <code>name</code> property,
             * not the <code>code</code> property, to identify the error programatically.
             *
             * <p>
             *   The <code>code</code> property of the Error object can be set to one of the values
             *   listed below. This property can also be set to other values, and you may want to report
             *   this value when discussing an issue with TokBox support.
             * </p>
             *
             * <p>Errors when calling <code>Session.connect()</code>:</p>
             *
             * <table class="docs_table"><tbody>
             * <tr>
             *   <td><b><code>code</code></b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td>1004</td>
             *   <td>Authentication error. Check the error message for details. This error can result if you
             *     pass in an expired token when trying to connect to a session. It can also occur if you pass
             *     in an invalid token or API key. Make sure that you are generating the token using the
             *     current version of one of the
             *     <a href="http://tokbox.com/opentok/libraries/server">OpenTok server SDKs</a>.</td>
             * </tr>
             * <tr>
             *   <td>1005</td>
             *   <td>Invalid Session ID. Make sure you generate the session ID using the current version of
             *     one of the <a href="http://tokbox.com/opentok/libraries/server">OpenTok server
             *     SDKs</a>.</td>
             * </tr>
             * <tr>
             *   <td>1006</td>
             *   <td>Connect Failed. Unable to connect to the session. You may want to have the client check
             *     the network connection.</td>
             * </tr>
             * <tr>
             *  <td>1026</td>
             *  <td>Terms of service violation: export compliance. See the
             *    <a href="https://tokbox.com/support/tos">Terms of Service</a>.</td>
             * </tr>
             * <tr>
             *  <td>1027</td>
             *  <td>Connection limit exceeded. The client tried to connect to a session that has exceeded
             *  limit for simultaneous connections.</td>
             * </tr>
             * <tr>
             *   <td>2001</td>
             *   <td>Connect Failed. Unexpected response from the OpenTok server. Try connecting again
             *     later.</td>
             * </tr>
             * </tbody></table>
             *
             * <p>Errors when calling <code>Session.forceDisconnect()</code>:</p>
             *
             * <table class="docs_table"><tbody>
             * <tr>
             *   <td><b>
             *       <code>code</code>
             *     </b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td>1010</td>
             *   <td>The client is not connected to the OpenTok session. Check that client connects
             *     successfully and has not disconnected before calling forceDisconnect().</td>
             * </tr>
             * <tr>
             *   <td>1520</td>
             *   <td>Unable to force disconnect. The client's token does not have the role set to moderator.
             *     Once the client has connected to the session, the <code>capabilities</code> property of
             *     the Session object lists the client's capabilities.</td>
             * </tr>
             * </tbody></table>
             *
             * <p>Errors when calling <code>Session.forceUnpublish()</code>:</p>
             *
             * <table class="docs_table"><tbody>
             * <tr>
             *   <td><b><code>code</code></b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td>1010</td>
             *   <td>The client is not connected to the OpenTok session. Check that client connects
             *     successfully and has not disconnected before calling forceUnpublish().</td>
             * </tr>
             * <tr>
             *   <td>1530</td>
             *   <td>Unable to force unpublish. The client's token does not have the role set to moderator.
             *     Once the client has connected to the session, the <code>capabilities</code> property of
             *     the Session object lists the client's capabilities.</td>
             * </tr>
             * <tr>
             *   <td>1535</td>
             *   <td>Force Unpublish on an invalid stream. Make sure that the stream has not left the
             *     session before you call the <code>forceUnpublish()</code> method.</td>
             * </tr>
             * </tbody></table>
             *
             * <p>Errors when calling <code>Session.publish()</code>:</p>
             *
             * <table class="docs_table"><tbody>
             * <tr>
             *   <td><b><code>code</code></b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td>1010</td>
             *   <td>The client is not connected to the OpenTok session. Check that the client connects
             *     successfully before trying to publish. And check that the client has not disconnected
             *     before trying to publish.</td>
             * </tr>
             * <tr>
             *   <td>1500</td>
             *   <td>Unable to Publish. This can be caused by the following:
             *
             *   <ul>
             *     <li>The client's token does not have the role set to publish or
             *     moderator. Once the client has connected to the session, the <code>capabilities</code>
             *     property of the Session object lists the client's capabilities.</li>
             *
             *     <li>The end-user has denied access to the camera or microphone.</li>
             *
             *     <li>The page is loaded on HTTP in Chrome, which requires HTTPS to access the camera and
             *     microphone.</li>
             *   </ul>
             * </td>
             * </tr>
             * <tr>
             *   <td>1553</td>
             *   <td>WebRTC ICE workflow error. This is an error that occurs when trying to establish
             *   communication between clients in the session. Try publishing again or reconnecting to
             *   the session.</td>
             * </tr>
             * <tr>
             *   <td>1601</td>
             *   <td>Internal error -- WebRTC publisher error. Try republishing or reconnecting to the
             *     session.</td>
             * </tr>
             * <tr>
             *   <td>2001</td>
             *   <td>Publish Failed. Unexpected response from the OpenTok server. Try publishing again
             *     later.</td>
             * </tr>
             * </tbody></table>
             *
             * <p>Errors when calling <code>Session.signal()</code>:</p>
             *
             * <table class="docs_table" style="width:100%"><tbody>
             * <tr>
             *   <td><b><code>code</code></b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *     <td>400</td>
             *     <td>One of the signal properties &mdash; data, type, or to &mdash;
             *                 is invalid. Or the data cannot be parsed as JSON.</td>
             * </tr>
             * <tr>
             *   <td>404</td> <td>The to connection does not exist.</td>
             * </tr>
             * <tr>
             *   <td>413</td> <td>The type string exceeds the maximum length (128 bytes),
             *     or the data string exceeds the maximum size (8 kB).</td>
             * </tr>
             * <tr>
             *   <td>500</td>
             *   <td>The client is not connected to the OpenTok session. Check that the client connects
             *     successfully before trying to signal. And check that the client has not disconnected before
             *     trying to signal.</td>
             * </tr>
             * <tr>
             *   <td>2001</td>
             *   <td>Signal Failed. Unexpected response from the OpenTok server. Try sending the signal again
             *     later.</td>
             * </tr>
             * </tbody></table>
             *
             * <p>Errors when calling <code>Session.subscribe()</code>:</p>
             *
             * <table class="docs_table" style="width:100%"><tbody>
             * <tr>
             *   <td><b>
             *       <code>code</code>
             *     </b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td>1013</td>
             *   <td>WebRTC PeerConnection error. Try resubscribing to the stream or
             *     reconnecting to the session.</td>
             * </tr>
             * <tr>
             *   <td>1554</td>
             *   <td>WebRTC ICE workflow error. This is an error that occurs when trying to establish
             *   communication between clients in the session. Try resubscribing to the stream or
             *   reconnecting to the session.</td>
             * </tr>
             * <tr>
             *   <td>1600</td>
             *   <td>Internal error -- WebRTC subscriber error. Try resubscribing to the stream or
             *     reconnecting to the session.</td>
             * </tr>
             * <tr>
             *  <td>1605</td>
             *  <td>Stream limit exceeded. The client tried to subscribe to a stream in a session
             *  that has exceeded the limit for simultaneous streams.</td>
             * </tr>
             * <tr>
             *   <td>2001</td>
             *   <td>Subscribe Failed. Unexpected response from the OpenTok server. Try subscribing again
             *     later.</td>
             * </tr>
             * </tbody></table>
             *
             * <p>Errors when calling <code>OT.initPublisher()</code>:</p>
             *
             * <table class="docs_table"><tbody>
             * <tr>
             *   <td><b><code>code</code></b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td>1004</td>
             *   <td>Authentication error. Check the error message for details. This error can result if you
             *     pass in an expired token when trying to connect to a session. It can also occur if you
             *     pass in an invalid token or API key. Make sure that you are generating the token using
             *     the current version of one of the
             *     <a href="http://tokbox.com/opentok/libraries/server">OpenTok server SDKs</a>.</td>
             * </tr>
             * <tr>
             *   <td>1550</td>
             *   <td>Screen sharing is not supported (and you set the <code>videoSource</code> property
             *     of the <code>options</code> parameter of <code>OT.initPublisher()</code> to
             *     <code>"application"</code>, <code>"screen"</code>, or <code>"window"</code>).
             *     Before calling <code>OT.initPublisher()</code>, you can call
             *     <a href="OT.html#checkScreenSharingCapability">OT.checkScreenSharingCapability()</a>
             *     to check if screen sharing is supported.</td>
             * </tr>
             * <tr>
             *   <td>1551</td>
             *   <td>A screen-sharing extension needs to be registered but it is not. This error can occur
             *     when you set the <code>videoSource</code> property of the <code>options</code> parameter
             *     of <code>OT.initPublisher()</code> to <code>"application"</code>, <code>"screen"</code>,
             *     or <code>"window"</code>. Before calling <code>OT.initPublisher()</code>, you can call
             *     <a href="OT.html#checkScreenSharingCapability">OT.checkScreenSharingCapability()</a>
             *     to check if screen sharing requires an extension to be registered.</td>
             * </tr>
             * <tr>
             *   <td>1552</td>
             *   <td>A screen-sharing extension is required, but it is not installed. This error can occur
             *     when you set the <code>videoSource</code> property of the <code>options</code> parameter
             *     of <code>OT.initPublisher()</code> to <code>"screen"</code>. Before calling
             *     <code>OT.initPublisher()</code>, you can call
             *     <a href="OT.html#checkScreenSharingCapability">OT.checkScreenSharingCapability()</a>
             *     to check if screen sharing requires an extension to be installed.</td>
             * </tr>
             * </tbody></table>
             *
             * <p>Errors when calling <code>OT.reportIssue()</code>:</p>
             *
             * <table class="docs_table"><tbody>
             * <tr>
             *   <td><b><code>code</code></b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td>2011</td>
             *   <td>Error calling OT.reportIssue(). Check the client's network connection.</td>
             * </tr>
             * </tbody></table>
             *
             * <p>General errors that can occur when calling any method:</p>
             *
             * <table class="docs_table" style="width:100%"><tbody>
             * <tr>
             *   <td><b><code>code</code></b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td>1011</td>
             *   <td>Invalid Parameter. Check that you have passed valid parameter values into the method
             *     call.</td>
             * </tr>
             * <tr>
             *   <td>2000</td>
             *   <td>Internal Error. Try reconnecting to the OpenTok session and trying the action again.</td>
             * </tr>
             * </tbody></table>
             *
             * @property {String} message The message string provides details about the error.
             *
             * <p>
             * Use the <code>name</code> property (not the <code>message</code> property) to identify the error
             * programatically.
             *
             * @property {String} name A string identifying the error. Use this property (not the
             * <code>code</code> property) to identify the error.
             *
             * <p>Note that for all errors, this string starts with <code>'OT_'</code>.
             *
             * <p>
             *   The <code>name</code> property of the Error object can be set to one of the values
             *   listed below. For unexpected errors, this property can be undefined or set to other
             *   values. You may want to report this value when discussing an issue with TokBox support.
             * </p>
             *
             * <p>Errors that can occur when calling <code>OT.initPublisher()</code>:</p>
             *
             * <table class="docs_table" style="width:100%"><tbody>
             * <tr>
             *   <td><b><code>name</code></b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td><code>'OT_HARDWARE_UNAVAILABLE'</code></td>
             *   <td>The hardware to fulfill the user media request appears to exist but could not be acquired.
             *   It might be in use by another application.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_INVALID_PARAMETER'</code></td>
             *   <td>One or more parameters was not valid or not provided.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_MEDIA_ERR_ABORTED'</code></td>
             *   <td>The fetching of the stream for the video element has been aborted.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_MEDIA_ERR_DECODE'</code></td>
             *   <td>A decoding error occurred while trying to play the stream in the video element.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_MEDIA_ERR_NETWORK'</code></td>
             *   <td>A network error caused the stream to stop being fetched.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_MEDIA_ERR_SRC_NOT_SUPPORTED'</code></td>
             *   <td>The stream has been detected to be not suitable for playback.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_NOT_SUPPORTED'</code></td>
             *   <td>Something in the user media request is not supported.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_NO_DEVICES_FOUND'</code></td>
             *   <td>No devices were found to provide the media stream.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_NO_VALID_CONSTRAINTS'</code></td>
             *   <td>Video and audio were both disabled. You need to enable at least one.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_SCREEN_SHARING_NOT_SUPPORTED'</code></td>
             *   <td>Screen sharing is not supported in the browser.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_SCREEN_SHARING_EXTENSION_NOT_REGISTERED'</code></td>
             *   <td>Screen-sharing support in this browser requires an extension, but one has not been
             *   registered.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_SCREEN_SHARING_EXTENSION_NOT_INSTALLED'</code></td>
             *   <td>Screen-sharing support in this browser requires an extension, but the extension is not
             *   installed.</td>
             * </tr>
             * </table>
             *
             * <p>Errors that can occur when calling <code>OT.reportIssue()</code>:</p>
             *
             * <table class="docs_table" style="width:100%"><tbody>
             * <tr>
             *   <td><b><code>name</code></b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td><code>'OT_REPORT_ISSUE_FAILED'</code></td>
             *   <td>Error calling OT.reportIssue(). Check the client\'s network connection.</td>
             * </tr>
             * </table>
             *
             * <p>Errors that can occur when calling <code>Session.connect()</code>:</p>
             *
             * <table class="docs_table" style="width:100%"><tbody>
             * <tr>
             *   <td><b><code>name</code></b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td><code>'OT_AUTHENTICATION_ERROR'</code></td>
             *   <td>The API key does not match the token or session.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_BADLY_FORMED_RESPONSE'</code></td>
             *   <td>The JSON response from the OpenTok server was badly formed.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_CONNECT_FAILED'</code></td>
             *   <td>Failed to connect to session.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_CONNECTION_LIMIT_EXCEEDED'</code></td>
             *   <td>The client tried to connect to a session that has exceeded the limit for
             *   simultaneous connections.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_EMPTY_RESPONSE_BODY'</code></td>
             *   <td>Received an unexpected empty response from the OpenTok server.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_INVALID_SESSION_ID'</code></td>
             *   <td>The session ID was invalid.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_INVALID_PARAMETER'</code></td>
             *   <td>One or more parameters was not valid or not provided.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_NOT_CONNECTED'</code></td>
             *   <td>Couldn't perform action because you are not connected to the network.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_TERMS_OF_SERVICE_FAILURE'</code></td>
             *   <td>Couldn't connect due to a terms of service violation.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_INVALID_HTTP_STATUS'</code></td>
             *   <td>Received an unexpected HTTP status.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_XDOMAIN_OR_PARSING_ERROR'</code></td>
             *   <td>There was a cross domain error or the server responded with invalid JSON.</td>
             * </tr>
             * </table>
             *
             * <p>Errors that can occur when calling <code>Session.forceDisconnect()</code>:</p>
             *
             * <table class="docs_table" style="width:100%"><tbody>
             * <tr>
             *   <td><b><code>name</code></b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td><code>'OT_INVALID_PARAMETER'</code></td>
             *   <td>One or more parameters was not valid or not provided.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_NOT_CONNECTED'</code></td>
             *   <td>Couldn't perform action because you are not connected to the network.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_PERMISSION_DENIED'</code></td>
             *   <td>This token does not allow this action. The role must be at least moderator.</td>
             * </tr>
             * </table>
             *
             * <p>Errors that can occur when calling <code>Session.forceUnpublish()</code>:</p>
             *
             * <table class="docs_table" style="width:100%"><tbody>
             * <tr>
             *   <td><b><code>name</code></b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td><code>'OT_INVALID_PARAMETER'</code></td>
             *   <td>One or more parameters was not valid or not provided.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_NOT_CONNECTED'</code></td>
             *   <td>Couldn't perform action because you are not connected to the network.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_PERMISSION_DENIED'</code></td>
             *   <td>This token does not allow this action. The role must be at least moderator.</td>
             * </tr>
             * </table>
             *
             * <p>Errors that can occur when calling <code>Session.publish()</code>:</p>
             *
             * <table class="docs_table" style="width:100%"><tbody>
             * <tr>
             *   <td><b><code>name</code></b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td><code>'OT_CHROME_MICROPHONE_ACQUISITION_ERROR'</code></td>
             *   <td>Chrome fails to get access to the microphone, due to a Chrome error. To work
             *   around this issue, the end-user must restart Chrome and reload your site. This is a
             *   <a href="https://bugs.chromium.org/p/webrtc/issues/detail?id=4799">known issue</a>
             *   to be fixed in Chrome.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_CONSTRAINTS_NOT_SATISFIED'</code></td>
             *   <td>The constraints for getting user media could not be satisfied.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_CREATE_PEER_CONNECTION_FAILED'</code></td>
             *   <td>Failed to create a connection between this client and the subscriber or the
             *   OpenTok Media Router.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_HARDWARE_UNAVAILABLE'</code></td>
             *   <td>The hardware to fulfill the user media request appears to exist but could not be acquired.
             *   It might be in use by another application.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_ICE_WORKFLOW_FAILED'</code></td>
             *   <td>Something went wrong while establishing WebRTC connectivity.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_INVALID_PARAMETER'</code></td>
             *   <td>One or more parameters was not valid or not provided.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_MEDIA_ERR_ABORTED'</code></td>
             *   <td>The fetching of the stream for the video element has been aborted.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_MEDIA_ERR_DECODE'</code></td>
             *   <td>A decoding error occurred while trying to play the stream in the video element.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_MEDIA_ERR_NETWORK'</code></td>
             *   <td>A network error caused the stream to stop being fetched.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_MEDIA_ERR_SRC_NOT_SUPPORTED'</code></td>
             *   <td>The stream has been detected to be not suitable for playback.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_NO_DEVICES_FOUND'</code></td>
             *   <td>No devices were found to provide the media stream.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_NO_VALID_CONSTRAINTS'</code></td>
             *   <td>Video and audio were both disabled. You need to enable at least one.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_NOT_CONNECTED'</code></td>
             *   <td>Couldn't perform action because you are not connected to the network.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_NOT_SUPPORTED'</code></td>
             *   <td>Something in the user media request is not supported.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_PERMISSION_DENIED'</code></td>
             *   <td>This token does not allow publishing. The role must be at least publisher to enable
             *   this funcitonality.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_SCREEN_SHARING_NOT_SUPPORTED'</code></td>
             *   <td>Screen sharing is not supported in the browser.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_SCREEN_SHARING_EXTENSION_NOT_REGISTERED'</code></td>
             *   <td>Screen-sharing support in this browser requires an extension, but one has not been
             *   registered.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_SCREEN_SHARING_EXTENSION_NOT_INSTALLED'</code></td>
             *   <td>Screen-sharing support in this browser requires an extension, but the extension is not
             *   installed.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_SET_REMOTE_DESCRIPTION_FAILED'</code></td>
             *   <td>The WebRTC connection failed during setDescription.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_STREAM_CREATE_FAILED'</code></td>
             *   <td>Failed to create the stream in the server model.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_TIMEOUT'</code></td>
             *   <td>Could not publish in a reasonable amount of time.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_USER_MEDIA_ACCESS_DENIED'</code></td>
             *   <td>The end-user denied permission to access hardware devices, or the end-user
             *   denied access to the screen (for a screen-sharing stream).</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_UNEXPECTED_SERVER_RESPONSE'</code></td>
             *   <td>This indicates an unexpected error from the OpenTok server.</td>
             * </tr>
             * </table>
             *
             * <p>Errors that can occur when calling <code>Session.signal()</code>:</p>
             *
             * <table class="docs_table" style="width:100%"><tbody>
             * <tr>
             *   <td><b><code>name</code></b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td><code>'OT_INVALID_PARAMETER'</code></td>
             *   <td>One or more parameters was not valid or not provided.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_NOT_CONNECTED'</code></td>
             *   <td>Couldn't perform action because you are not connected to the network.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_NOT_FOUND'</code></td>
             *   <td>A resource was not found.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_RATE_LIMIT_EXCEEDED'</code></td>
             *   <td>The signal could not be sent due to the rate limit.</td>
             * </tr>
             * </table>
             *
             * <p>Errors that can occur when calling <code>Session.subscribe()</code>:</p>
             *
             * <table class="docs_table" style="width:100%"><tbody>
             * <tr>
             *   <td><b><code>name</code></b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td><code>'OT_CREATE_PEER_CONNECTION_FAILED'</code></td>
             *   <td>Failed to create a connection between this client and the stream's publisher or the
             *   OpenTok Media Router.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_DISCONNECTED'</code></td>
             *   <td>Action failed because the client is not connected to the session.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_INVALID_PARAMETER'</code></td>
             *   <td>One or more parameters was not valid or not provided.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_ICE_WORKFLOW_FAILED'</code></td>
             *   <td>Something went wrong while establishing WebRTC connectivity.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_MEDIA_ERR_ABORTED'</code></td>
             *   <td>The fetching of the stream for the video element has been aborted.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_MEDIA_ERR_DECODE'</code></td>
             *   <td>A decoding error occurred while trying to play the stream in the video element.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_MEDIA_ERR_NETWORK'</code></td>
             *   <td>A network error caused the stream to stop being fetched.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_MEDIA_ERR_SRC_NOT_SUPPORTED'</code></td>
             *   <td>The stream has been detected to be not suitable for playback.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_NOT_CONNECTED'</code></td>
             *   <td>Couldn't perform action because you are not connected to the network.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_SET_REMOTE_DESCRIPTION_FAILED'</code></td>
             *   <td>The WebRTC connection failed during setDescription.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_STREAM_DESTROYED'</code></td>
             *   <td>The stream was destroyed before it could be subscribed to.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_STREAM_LIMIT_EXCEEDED'</code></td>
             *   <td>The client tried to subscribe to a stream in a session that has exceeded the limit
             *   for simultaneous streams.</td>
             * </tr>
             * <tr>
             *   <td><code>'OT_STREAM_NOT_FOUND'</code></td>
             *   <td>Couldn't subscribe to the stream because it was not found.</td>
             * </tr>
             * </table>
             *
             * <p>Errors that can occur when calling <code>Subscriber.getStats()</code>:</p>
             *
             * <table class="docs_table" style="width:100%"><tbody>
             * <tr>
             *   <td><b><code>name</code></b></td>
             *   <td><b>Description</b></td>
             * </tr>
             * <tr>
             *   <td><code>'OT_NOT_CONNECTED'</code></td>
             *   <td>Couldn't perform action because you are not connected to the network.</td>
             * </tr>
             * </table>
             *
             * @class Error
             * @augments Event
             */

            var OTErrorClass = function OTErrorClass(code, message) {
                Error.call(this);

                this.code = code;
                this.message = message;
            };

            OTErrorClass.prototype = Object.create(Error.prototype);
            OTErrorClass.prototype.constructor = OTErrorClass;

            module.exports = OTErrorClass;

            eventing(OTErrorClass);

            var errorsCodesToTitle = {
                1004: 'Authentication error',
                1005: 'Invalid Session ID',
                1006: 'Connect Failed',
                1007: 'Connect Rejected',
                1008: 'Connect Time-out',
                1009: 'Security Error',
                1010: 'Not Connected',
                1011: 'Invalid Parameter',
                1012: 'Peer-to-peer Stream Play Failed',
                1013: 'Connection Failed',
                1014: 'API Response Failure',
                1015: 'PeerConnection not connected, cannot call this method',
                1021: 'Request Timeout',
                1026: 'Terms of Service Violation: Export Compliance',
                1027: 'Connection Limit Exceeded',
                1500: 'Unable to Publish',
                1501: 'Unable to Subscribe',
                1502: 'Unsupported Video Codec',
                1503: 'No TURN server found',
                1520: 'Unable to Force Disconnect',
                1530: 'Unable to Force Unpublish',
                1553: 'ICEWorkflow failed',
                1600: 'createOffer, createAnswer, setLocalDescription, setRemoteDescription',
                1605: 'Stream Limit Exceeded',
                2000: 'Internal Error',
                2001: 'Unexpected Server Response',
                4000: 'WebSocket Connection Failed',
                4001: 'WebSocket Network Disconnected',
                5001: 'Unable to access media engine'
            };

            /**
             * Get the title of an error by error code
             *
             * @property {Number|String} code The error code to lookup
             * @return {String} The title of the message with that code
             *
             * @example
             *
             * OTError.getTitleByCode(1006) === 'Connect Failed'
             */
            OTErrorClass.getTitleByCode = function (code) {
                return errorsCodesToTitle[+code];
            };

// @todo redo this when we have time to tidy up
//
// @example
//
//  OTError.handleJsException("Descriptive error message", 2000, {
//      session: session,
//      target: stream|publisher|subscriber|session|etc
//  });
//
            OTErrorClass.handleJsException = function (_ref) {
                var error = _ref.error,
                    errorMsg = _ref.errorMsg,
                    code = _ref.code,
                    target = _ref.target,
                    analytics = _ref.analytics;

                if (!target) {
                    throw new Error('handleJsException requires target');
                }
                var getCode = function getCode() {
                    return code !== undefined ? code : error && error.code;
                };
                var getMessage = function getMessage() {
                    return errorMsg !== undefined ? errorMsg : error && error.message;
                };

                var title = OTErrorClass.getTitleByCode(getCode());

                logging.error('OT.exception :: title: ' + title + ' (' + getCode() + ') msg: ' + getMessage());

                try {
                    var options = {
                        partnerId: target.session ? target.session.apiKey : target.apiKey,
                        sessionId: target.session ? target.session.sessionId : target.sessionId
                    };
                    analytics.logError(getCode(), 'tb.exception', title, { details: getMessage() }, options);

                    var event = new Events.ExceptionEvent(eventNames.EXCEPTION, getMessage(), title, getCode(), target, target, error);

                    if (error) {
                        event.stack = error.stack;
                    } else {
                        // Augment the event object with a stacktrace for error reporting purposes
                        try {
                            throw new Error();
                        } catch (caughtError) {
                            event.stack = caughtError.stack;
                        }
                    }

                    OTErrorClass.dispatchEvent(event);
                } catch (err) {
                    logging.error('OT.exception :: Failed to dispatch exception - ' + err.toString());
                    // Don't throw an error because this is asynchronous
                    // don't do an exceptionHandler because that would be recursive
                }
            };

            /***/ }),
        /* 34 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


// @todo enable the following disabled rules see OPENTOK-31136 for more info
            /* eslint-disable no-underscore-dangle, no-param-reassign */

            var OTHelpers = __webpack_require__(2);

// A mixin to encapsulate the basic widget behaviour. This needs a better name,
// it's not actually a widget. It's actually "Behaviour that can be applied to
// an object to make it support the basic Chrome widget workflow"...but that would
// probably been too long a name.
            module.exports = function Widget(widget, options) {
                var _mode = void 0;
                var _options = options || {};

                //
                // @param [String] mode
                //      'on', 'off', or 'auto'
                //
                widget.setDisplayMode = function (mode) {
                    var newMode = mode || 'auto';
                    if (_mode === newMode) {
                        return;
                    }

                    OTHelpers.removeClass(this.domElement, 'OT_mode-' + _mode);
                    OTHelpers.addClass(this.domElement, 'OT_mode-' + newMode);

                    _mode = newMode;
                };

                widget.getDisplayMode = function () {
                    return _mode;
                };

                widget.showAfterLoading = function () {
                    OTHelpers.removeClass(this.domElement, 'OT_hide-forced');
                };

                widget.hideWhileLoading = function () {
                    OTHelpers.addClass(this.domElement, 'OT_hide-forced');
                };

                widget.destroy = function () {
                    if (_options.onDestroy) {
                        _options.onDestroy(this.domElement);
                    }
                    if (this.domElement) {
                        OTHelpers.removeElement(this.domElement);
                    }

                    return widget;
                };

                widget.appendTo = function (parent) {
                    // create the element under parent
                    this.domElement = OTHelpers.createElement(_options.nodeName || 'div', _options.htmlAttributes, _options.htmlContent);

                    if (_options.onCreate) {
                        _options.onCreate(this.domElement);
                    }

                    widget.setDisplayMode(_options.mode);

                    if (_options.mode === 'auto') {
                        // if the mode is auto we hold the "on mode" for 2 seconds
                        // this will let the proper widgets nicely fade away and help discoverability
                        OTHelpers.addClass(widget.domElement, 'OT_mode-on-hold');
                        setTimeout(function () {
                            OTHelpers.removeClass(widget.domElement, 'OT_mode-on-hold');
                        }, 2000);
                    }

                    // add the widget to the parent
                    parent.appendChild(this.domElement);

                    return widget;
                };
            };

            /***/ }),
        /* 35 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            /*
  * Executes the provided callback thanks to <code>global.setInterval</code>.
  *
  * @param {function()} callback
  * @param {number} frequency how many times per second we want to execute the callback
  * @constructor
  */

            function IntervalRunner(callback, desiredFrequency) {
                var maxIterations = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : Infinity;

                var timeoutId = null;
                var running = false;
                var iteration = 1;
                var timeBetween = 1000 / desiredFrequency;

                var loop = function loop() {
                    if (!running || iteration > maxIterations) {
                        return;
                    }
                    iteration += 1;
                    timeoutId = setTimeout(loop, timeBetween);
                    callback();
                };

                this.start = function () {
                    if (running) {
                        return;
                    }
                    running = true;
                    setTimeout(loop, timeBetween);
                };

                this.stop = function () {
                    (typeof window !== undefined ? window : global).clearTimeout(timeoutId);
                    running = false;
                };
            }

            module.exports = IntervalRunner;

            /***/ }),
        /* 36 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseIsNative = __webpack_require__(327),
                getValue = __webpack_require__(332);

            /**
             * Gets the native function at `key` of `object`.
             *
             * @private
             * @param {Object} object The object to query.
             * @param {string} key The key of the method to get.
             * @returns {*} Returns the function if it's native, else `undefined`.
             */
            function getNative(object, key) {
                var value = getValue(object, key);
                return baseIsNative(value) ? value : undefined;
            }

            module.exports = getNative;


            /***/ }),
        /* 37 */
        /***/ (function(module, exports, __webpack_require__) {

            var root = __webpack_require__(12);

            /** Built-in value references. */
            var Symbol = root.Symbol;

            module.exports = Symbol;


            /***/ }),
        /* 38 */
        /***/ (function(module, exports, __webpack_require__) {

            var assignValue = __webpack_require__(75),
                baseAssignValue = __webpack_require__(53);

            /**
             * Copies properties of `source` to `object`.
             *
             * @private
             * @param {Object} source The object to copy properties from.
             * @param {Array} props The property identifiers to copy.
             * @param {Object} [object={}] The object to copy properties to.
             * @param {Function} [customizer] The function to customize copied values.
             * @returns {Object} Returns `object`.
             */
            function copyObject(source, props, object, customizer) {
                var isNew = !object;
                object || (object = {});

                var index = -1,
                    length = props.length;

                while (++index < length) {
                    var key = props[index];

                    var newValue = customizer
                        ? customizer(object[key], source[key], key, object, source)
                        : undefined;

                    if (newValue === undefined) {
                        newValue = source[key];
                    }
                    if (isNew) {
                        baseAssignValue(object, key, newValue);
                    } else {
                        assignValue(object, key, newValue);
                    }
                }
                return object;
            }

            module.exports = copyObject;


            /***/ }),
        /* 39 */
        /***/ (function(module, exports, __webpack_require__) {

            var DataView = __webpack_require__(356),
                Map = __webpack_require__(104),
                Promise = __webpack_require__(357),
                Set = __webpack_require__(173),
                WeakMap = __webpack_require__(174),
                baseGetTag = __webpack_require__(26),
                toSource = __webpack_require__(162);

            /** `Object#toString` result references. */
            var mapTag = '[object Map]',
                objectTag = '[object Object]',
                promiseTag = '[object Promise]',
                setTag = '[object Set]',
                weakMapTag = '[object WeakMap]';

            var dataViewTag = '[object DataView]';

            /** Used to detect maps, sets, and weakmaps. */
            var dataViewCtorString = toSource(DataView),
                mapCtorString = toSource(Map),
                promiseCtorString = toSource(Promise),
                setCtorString = toSource(Set),
                weakMapCtorString = toSource(WeakMap);

            /**
             * Gets the `toStringTag` of `value`.
             *
             * @private
             * @param {*} value The value to query.
             * @returns {string} Returns the `toStringTag`.
             */
            var getTag = baseGetTag;

// Fallback for data views, maps, sets, and weak maps in IE 11 and promises in Node.js < 6.
            if ((DataView && getTag(new DataView(new ArrayBuffer(1))) != dataViewTag) ||
                (Map && getTag(new Map) != mapTag) ||
                (Promise && getTag(Promise.resolve()) != promiseTag) ||
                (Set && getTag(new Set) != setTag) ||
                (WeakMap && getTag(new WeakMap) != weakMapTag)) {
                getTag = function(value) {
                    var result = baseGetTag(value),
                        Ctor = result == objectTag ? value.constructor : undefined,
                        ctorString = Ctor ? toSource(Ctor) : '';

                    if (ctorString) {
                        switch (ctorString) {
                            case dataViewCtorString: return dataViewTag;
                            case mapCtorString: return mapTag;
                            case promiseCtorString: return promiseTag;
                            case setCtorString: return setTag;
                            case weakMapCtorString: return weakMapTag;
                        }
                    }
                    return result;
                };
            }

            module.exports = getTag;


            /***/ }),
        /* 40 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseClone = __webpack_require__(69);

            /** Used to compose bitmasks for cloning. */
            var CLONE_DEEP_FLAG = 1,
                CLONE_SYMBOLS_FLAG = 4;

            /**
             * This method is like `_.clone` except that it recursively clones `value`.
             *
             * @static
             * @memberOf _
             * @since 1.0.0
             * @category Lang
             * @param {*} value The value to recursively clone.
             * @returns {*} Returns the deep cloned value.
             * @see _.clone
             * @example
             *
             * var objects = [{ 'a': 1 }, { 'b': 2 }];
             *
             * var deep = _.cloneDeep(objects);
             * console.log(deep[0] === objects[0]);
             * // => false
             */
            function cloneDeep(value) {
                return baseClone(value, CLONE_DEEP_FLAG | CLONE_SYMBOLS_FLAG);
            }

            module.exports = cloneDeep;


            /***/ }),
        /* 41 */
        /***/ (function(module, exports, __webpack_require__) {

            var isSymbol = __webpack_require__(61);

            /** Used as references for various `Number` constants. */
            var INFINITY = 1 / 0;

            /**
             * Converts `value` to a string key if it's not a string or symbol.
             *
             * @private
             * @param {*} value The value to inspect.
             * @returns {string|symbol} Returns the key.
             */
            function toKey(value) {
                if (typeof value == 'string' || isSymbol(value)) {
                    return value;
                }
                var result = (value + '');
                return (result == '0' && (1 / value) == -INFINITY) ? '-0' : result;
            }

            module.exports = toKey;


            /***/ }),
        /* 42 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            module.exports = __webpack_require__(463)() ? Symbol : __webpack_require__(464);


            /***/ }),
        /* 43 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            module.exports = function (fn) {
                if (typeof fn !== "function") throw new TypeError(fn + " is not a function");
                return fn;
            };


            /***/ }),
        /* 44 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


// Event names lookup
            module.exports = {
                // Activity Status for cams/mics
                ACTIVE: 'active',
                INACTIVE: 'inactive',
                UNKNOWN: 'unknown',

                // Archive types
                PER_SESSION: 'perSession',
                PER_STREAM: 'perStream',

                // Events
                EXCEPTION: 'exception',
                ISSUE_REPORTED: 'issueReported',

                // Session Events
                SESSION_CONNECTED: 'sessionConnected',
                SESSION_RECONNECTING: 'sessionReconnecting',
                SESSION_RECONNECTED: 'sessionReconnected',
                SESSION_DISCONNECTED: 'sessionDisconnected',
                STREAM_CREATED: 'streamCreated',
                STREAM_DESTROYED: 'streamDestroyed',
                CONNECTION_CREATED: 'connectionCreated',
                CONNECTION_DESTROYED: 'connectionDestroyed',
                SIGNAL: 'signal',
                STREAM_PROPERTY_CHANGED: 'streamPropertyChanged',
                MICROPHONE_LEVEL_CHANGED: 'microphoneLevelChanged',

                // Publisher Events
                RESIZE: 'resize',
                SETTINGS_BUTTON_CLICK: 'settingsButtonClick',
                DEVICE_INACTIVE: 'deviceInactive',
                INVALID_DEVICE_NAME: 'invalidDeviceName',
                ACCESS_ALLOWED: 'accessAllowed',
                ACCESS_DENIED: 'accessDenied',
                ACCESS_DIALOG_OPENED: 'accessDialogOpened',
                ACCESS_DIALOG_CLOSED: 'accessDialogClosed',
                ECHO_CANCELLATION_MODE_CHANGED: 'echoCancellationModeChanged',
                MEDIA_STOPPED: 'mediaStopped',
                PUBLISHER_DESTROYED: 'destroyed',

                // Subscriber Events
                SUBSCRIBER_DESTROYED: 'destroyed',
                SUBSCRIBER_CONNECTED: 'connected',
                SUBSCRIBER_DISCONNECTED: 'disconnected',

                // DeviceManager Events
                DEVICES_DETECTED: 'devicesDetected',

                // DevicePanel Events
                DEVICES_SELECTED: 'devicesSelected',
                CLOSE_BUTTON_CLICK: 'closeButtonClick',

                MICLEVEL: 'microphoneActivityLevel',
                MICGAINCHANGED: 'microphoneGainChanged',

                // Environment Loader
                ENV_LOADED: 'envLoaded',
                ENV_UNLOADED: 'envUnloaded',

                // Audio activity Events
                AUDIO_LEVEL_UPDATED: 'audioLevelUpdated',

                VIDEO_ELEMENT_CREATED: 'videoElementCreated'
            };

            /***/ }),
        /* 45 */
        /***/ (function(module, exports) {

            /**
             * Performs a
             * [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
             * comparison between two values to determine if they are equivalent.
             *
             * @static
             * @memberOf _
             * @since 4.0.0
             * @category Lang
             * @param {*} value The value to compare.
             * @param {*} other The other value to compare.
             * @returns {boolean} Returns `true` if the values are equivalent, else `false`.
             * @example
             *
             * var object = { 'a': 1 };
             * var other = { 'a': 1 };
             *
             * _.eq(object, object);
             * // => true
             *
             * _.eq(object, other);
             * // => false
             *
             * _.eq('a', 'a');
             * // => true
             *
             * _.eq('a', Object('a'));
             * // => false
             *
             * _.eq(NaN, NaN);
             * // => true
             */
            function eq(value, other) {
                return value === other || (value !== value && other !== other);
            }

            module.exports = eq;


            /***/ }),
        /* 46 */
        /***/ (function(module, exports) {

            /**
             * Copies the values of `source` to `array`.
             *
             * @private
             * @param {Array} source The array to copy values from.
             * @param {Array} [array=[]] The array to copy values to.
             * @returns {Array} Returns `array`.
             */
            function copyArray(source, array) {
                var index = -1,
                    length = source.length;

                array || (array = Array(length));
                while (++index < length) {
                    array[index] = source[index];
                }
                return array;
            }

            module.exports = copyArray;


            /***/ }),
        /* 47 */
        /***/ (function(module, exports) {

// shim for using process in browser
            var process = module.exports = {};

// cached from whatever global is present so that test runners that stub it
// don't break things.  But we need to wrap it in a try catch in case it is
// wrapped in strict mode code which doesn't define any globals.  It's inside a
// function because try/catches deoptimize in certain engines.

            var cachedSetTimeout;
            var cachedClearTimeout;

            function defaultSetTimout() {
                throw new Error('setTimeout has not been defined');
            }
            function defaultClearTimeout () {
                throw new Error('clearTimeout has not been defined');
            }
            (function () {
                try {
                    if (typeof setTimeout === 'function') {
                        cachedSetTimeout = setTimeout;
                    } else {
                        cachedSetTimeout = defaultSetTimout;
                    }
                } catch (e) {
                    cachedSetTimeout = defaultSetTimout;
                }
                try {
                    if (typeof clearTimeout === 'function') {
                        cachedClearTimeout = clearTimeout;
                    } else {
                        cachedClearTimeout = defaultClearTimeout;
                    }
                } catch (e) {
                    cachedClearTimeout = defaultClearTimeout;
                }
            } ())
            function runTimeout(fun) {
                if (cachedSetTimeout === setTimeout) {
                    //normal enviroments in sane situations
                    return setTimeout(fun, 0);
                }
                // if setTimeout wasn't available but was latter defined
                if ((cachedSetTimeout === defaultSetTimout || !cachedSetTimeout) && setTimeout) {
                    cachedSetTimeout = setTimeout;
                    return setTimeout(fun, 0);
                }
                try {
                    // when when somebody has screwed with setTimeout but no I.E. maddness
                    return cachedSetTimeout(fun, 0);
                } catch(e){
                    try {
                        // When we are in I.E. but the script has been evaled so I.E. doesn't trust the global object when called normally
                        return cachedSetTimeout.call(null, fun, 0);
                    } catch(e){
                        // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error
                        return cachedSetTimeout.call(this, fun, 0);
                    }
                }


            }
            function runClearTimeout(marker) {
                if (cachedClearTimeout === clearTimeout) {
                    //normal enviroments in sane situations
                    return clearTimeout(marker);
                }
                // if clearTimeout wasn't available but was latter defined
                if ((cachedClearTimeout === defaultClearTimeout || !cachedClearTimeout) && clearTimeout) {
                    cachedClearTimeout = clearTimeout;
                    return clearTimeout(marker);
                }
                try {
                    // when when somebody has screwed with setTimeout but no I.E. maddness
                    return cachedClearTimeout(marker);
                } catch (e){
                    try {
                        // When we are in I.E. but the script has been evaled so I.E. doesn't  trust the global object when called normally
                        return cachedClearTimeout.call(null, marker);
                    } catch (e){
                        // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error.
                        // Some versions of I.E. have different rules for clearTimeout vs setTimeout
                        return cachedClearTimeout.call(this, marker);
                    }
                }



            }
            var queue = [];
            var draining = false;
            var currentQueue;
            var queueIndex = -1;

            function cleanUpNextTick() {
                if (!draining || !currentQueue) {
                    return;
                }
                draining = false;
                if (currentQueue.length) {
                    queue = currentQueue.concat(queue);
                } else {
                    queueIndex = -1;
                }
                if (queue.length) {
                    drainQueue();
                }
            }

            function drainQueue() {
                if (draining) {
                    return;
                }
                var timeout = runTimeout(cleanUpNextTick);
                draining = true;

                var len = queue.length;
                while(len) {
                    currentQueue = queue;
                    queue = [];
                    while (++queueIndex < len) {
                        if (currentQueue) {
                            currentQueue[queueIndex].run();
                        }
                    }
                    queueIndex = -1;
                    len = queue.length;
                }
                currentQueue = null;
                draining = false;
                runClearTimeout(timeout);
            }

            process.nextTick = function (fun) {
                var args = new Array(arguments.length - 1);
                if (arguments.length > 1) {
                    for (var i = 1; i < arguments.length; i++) {
                        args[i - 1] = arguments[i];
                    }
                }
                queue.push(new Item(fun, args));
                if (queue.length === 1 && !draining) {
                    runTimeout(drainQueue);
                }
            };

// v8 likes predictible objects
            function Item(fun, array) {
                this.fun = fun;
                this.array = array;
            }
            Item.prototype.run = function () {
                this.fun.apply(null, this.array);
            };
            process.title = 'browser';
            process.browser = true;
            process.env = {};
            process.argv = [];
            process.version = ''; // empty string to avoid regexp issues
            process.versions = {};

            function noop() {}

            process.on = noop;
            process.addListener = noop;
            process.once = noop;
            process.off = noop;
            process.removeListener = noop;
            process.removeAllListeners = noop;
            process.emit = noop;
            process.prependListener = noop;
            process.prependOnceListener = noop;

            process.listeners = function (name) { return [] }

            process.binding = function (name) {
                throw new Error('process.binding is not supported');
            };

            process.cwd = function () { return '/' };
            process.chdir = function (dir) {
                throw new Error('process.chdir is not supported');
            };
            process.umask = function() { return 0; };


            /***/ }),
        /* 48 */
        /***/ (function(module, exports, __webpack_require__) {

            var isArray = __webpack_require__(9),
                isKey = __webpack_require__(124),
                stringToPath = __webpack_require__(205),
                toString = __webpack_require__(88);

            /**
             * Casts `value` to a path array if it's not one.
             *
             * @private
             * @param {*} value The value to inspect.
             * @param {Object} [object] The object to query keys on.
             * @returns {Array} Returns the cast property path array.
             */
            function castPath(value, object) {
                if (isArray(value)) {
                    return value;
                }
                return isKey(value, object) ? [value] : stringToPath(toString(value));
            }

            module.exports = castPath;


            /***/ }),
        /* 49 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var _undefined = __webpack_require__(218)(); // Support ES3 engines

            module.exports = function (val) {
                return (val !== _undefined) && (val !== null);
            };


            /***/ }),
        /* 50 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            /* eslint-disable global-require */

            var once = __webpack_require__(32);
            var StaticConfig = __webpack_require__(18)();

// Indicates whether this client supports WebRTC
//
// This is defined as: getUserMedia + PeerConnection + exceeds min browser version
//
            exports.check = function () {
                var deps = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

                var env = deps.env || __webpack_require__(3);
                var hasGetUserMediaCapability = deps.hasGetUserMediaCapability || __webpack_require__(566);
                var hasPeerConnectionCapability = deps.hasPeerConnectionCapability || __webpack_require__(567);
                var logging = deps.logging || __webpack_require__(1)('hasOpenTokSupport');
                /** @type StaticConfig */
                var staticConfig = deps.staticConfig || StaticConfig.onlyLocal();
                var minimumVersions = staticConfig.minimumVersion || {};
                var minimumVersion = minimumVersions[env.name.toLowerCase()];

                if (minimumVersion && minimumVersion > env.version) {
                    logging.debug('Support for', env.name, 'is disabled because we require', minimumVersion, 'but this is', env.version);
                    return false;
                }

                if (env.name === 'Node') {
                    // Node works, even though it doesn't have getUserMedia
                    return true;
                }

                return hasGetUserMediaCapability() && hasPeerConnectionCapability();
            };

            exports.once = once(function () {
                return exports.check();
            });

            /***/ }),
        /* 51 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var _slicedToArray = function () { function sliceIterator(arr, i) { var _arr = []; var _n = true; var _d = false; var _e = undefined; try { for (var _i = arr[Symbol.iterator](), _s; !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"]) _i["return"](); } finally { if (_d) throw _e; } } return _arr; } return function (arr, i) { if (Array.isArray(arr)) { return arr; } else if (Symbol.iterator in Object(arr)) { return sliceIterator(arr, i); } else { throw new TypeError("Invalid attempt to destructure non-iterable instance"); } }; }();

            function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

// @todo enable the following disabled rules see OPENTOK-31136 for more info
            /* eslint-disable no-void, one-var, prefer-const, no-plusplus, no-shadow, vars-on-top, no-var */
            /* eslint-disable no-mixed-operators */

            var assign = __webpack_require__(5);
            var find = __webpack_require__(52);
            var findIndex = __webpack_require__(260);
            var logging = __webpack_require__(1)('SDPHelpers');

            var START_MEDIA_SSRC = 10000;
            var START_RTX_SSRC = 20000;

// Here are the structure of the rtpmap attribute and the media line, most of the
// complex Regular Expressions in this code are matching against one of these two
// formats:
// * a=rtpmap:<payload type> <encoding name>/<clock rate> [/<encoding parameters>]
// * m=<media> <port>/<number of ports> <proto> <fmts>
//
// References:
// * https://tools.ietf.org/html/rfc4566
// * http://en.wikipedia.org/wiki/Session_Description_Protocol
//
//

            var SDPHelpers = {
                getSections: function getSections(sdp) {
                    return sdp.split(/\r\n|\r|\n/).reduce(function (accum, line) {
                        var match = line.match(/^m=(\w+) \d+/);
                        if (match) {
                            accum.sections[accum.section = match[1]] = []; // eslint-disable-line no-param-reassign
                        }
                        accum.sections[accum.section].push(line);
                        return accum;
                    }, { sections: { header: [] }, section: 'header' }).sections;
                },
                getCodecsAndCodecMap: function getCodecsAndCodecMap(sdp, mediaType) {
                    var section = SDPHelpers.getSections(sdp)[mediaType];

                    if (!section) {
                        throw new Error('no mediaType ' + mediaType);
                    }

                    var codecs = section[0].match(/m=\w+ \d+ [A-Z/]+ ([\d ]+)$/)[1].split(' ');

                    var codecMap = assign.apply(undefined, section.filter(function (line) {
                        return line.match(/^a=rtpmap:\d+/);
                    }).map(function (line) {
                        return line.match(/^a=rtpmap:(\d+) ([\w-]+)/).splice(1);
                    }).map(function (_ref) {
                        var _ref2 = _slicedToArray(_ref, 2),
                            num = _ref2[0],
                            codec = _ref2[1];

                        return _defineProperty({}, num, codec);
                    }));

                    return { codecs: codecs, codecMap: codecMap };
                },
                getCodecs: function getCodecs(sdp, mediaType) {
                    var codecsAndCodecMap = SDPHelpers.getCodecsAndCodecMap(sdp, mediaType);
                    return codecsAndCodecMap.codecs.map(function (num) {
                        return codecsAndCodecMap.codecMap[num] || 'Unknown codec';
                    });
                }
            };

            module.exports = SDPHelpers;

// Search through sdpLines to find the Media Line of type +mediaType+.
            SDPHelpers.getMLineIndex = function getMLineIndex(sdpLines, mediaType) {
                var targetMLine = 'm=' + mediaType;

                // Find the index of the media line for +type+
                return findIndex(sdpLines, function (line) {
                    if (line.indexOf(targetMLine) !== -1) {
                        return true;
                    }

                    return false;
                });
            };

// Grab a M line of a particular +mediaType+ from sdpLines.
            SDPHelpers.getMLine = function getMLine(sdpLines, mediaType) {
                var mLineIndex = SDPHelpers.getMLineIndex(sdpLines, mediaType);
                return mLineIndex > -1 ? sdpLines[mLineIndex] : void 0;
            };

            SDPHelpers.hasMediaType = function (sdp, mediaType) {
                var mLineRegex = new RegExp('^m=' + mediaType);
                var sdpLines = sdp.split('\r\n');
                return findIndex(sdpLines, function (line) {
                    return mLineRegex.test(line);
                }) >= 0;
            };

            SDPHelpers.hasMLinePayloadType = function hasMLinePayloadType(sdpLines, mediaType, payloadType) {
                var mLine = SDPHelpers.getMLine(sdpLines, mediaType);
                var payloadTypes = SDPHelpers.getMLinePayloadTypes(mLine, mediaType);

                return payloadTypes.indexOf(payloadType) > -1;
            };

// Extract the payload types for a give Media Line.
//
            SDPHelpers.getMLinePayloadTypes = function getMLinePayloadTypes(mediaLine, mediaType) {
                var mLineSelector = new RegExp('^m=' + mediaType + ' \\d+(/\\d+)? [a-zA-Z0-9/]+(( [a-zA-Z0-9/]+)+)$', 'i');

                // Get all payload types that the line supports
                var payloadTypes = mediaLine.match(mLineSelector);
                if (!payloadTypes || payloadTypes.length < 2) {
                    // Error, invalid M line?
                    return [];
                }

                return payloadTypes[2].trim().split(' ');
            };

            SDPHelpers.removeTypesFromMLine = function removeTypesFromMLine(mediaLine, payloadTypes) {
                var typesSuffix = /[0-9 ]*$/.exec(mediaLine)[0];

                var newTypes = typesSuffix.split(' ').filter(function (type) {
                    return type !== '' && payloadTypes.indexOf(type) === -1;
                });

                return mediaLine.replace(typesSuffix, ' ' + newTypes.join(' '));
            };

// Remove all references to a particular encodingName from a particular media type
//
            SDPHelpers.removeMediaEncoding = function removeMediaEncoding(sdp, mediaType, encodingName) {
                var payloadTypes = void 0,
                    i = void 0,
                    j = void 0,
                    parts = void 0;
                var sdpLines = sdp.split('\r\n');
                var mLineIndex = SDPHelpers.getMLineIndex(sdpLines, mediaType);
                var mLine = mLineIndex > -1 ? sdpLines[mLineIndex] : void 0;
                var typesToRemove = [];

                if (mLineIndex === -1) {
                    // Error, missing M line
                    return sdpLines.join('\r\n');
                }

                // Get all payload types that the line supports
                payloadTypes = SDPHelpers.getMLinePayloadTypes(mLine, mediaType);
                if (payloadTypes.length === 0) {
                    // Error, invalid M line?
                    return sdpLines.join('\r\n');
                }

                // Find the payloadTypes of the codecs.
                // Allows multiple matches e.g. for CN.
                for (i = mLineIndex; i < sdpLines.length; i++) {
                    var codecRegex = new RegExp(encodingName, 'i');
                    if (sdpLines[i].indexOf('a=rtpmap:') === 0) {
                        parts = sdpLines[i].split(' ');
                        if (parts.length === 2 && codecRegex.test(parts[1])) {
                            typesToRemove.push(parts[0].substr(9));
                        }
                    }
                }

                if (!typesToRemove.length) {
                    // Not found.
                    return sdpLines.join('\r\n');
                }

                // Also find any rtx which reference the removed codec.
                for (i = mLineIndex; i < sdpLines.length; i++) {
                    if (sdpLines[i].indexOf('a=fmtp:') === 0) {
                        parts = sdpLines[i].split(' ');
                        for (j = 0; j < typesToRemove.length; j++) {
                            if (parts.length === 2 && parts[1] === 'apt=' + typesToRemove[j]) {
                                typesToRemove.push(parts[0].substr(7));
                            }
                        }
                    }
                }

                // Remove any rtpmap, fmtp or rtcp-fb.
                sdpLines = sdpLines.filter(function (line) {
                    for (var _i = 0; _i < typesToRemove.length; _i++) {
                        if (line.indexOf('a=rtpmap:' + typesToRemove[_i] + ' ') === 0 || line.indexOf('a=fmtp:' + typesToRemove[_i] + ' ') === 0 || line.indexOf('a=rtcp-fb:' + typesToRemove[_i] + ' ') === 0) {
                            return false;
                        }
                    }
                    return true;
                });

                if (typesToRemove.length > 0 && mLineIndex > -1) {
                    // Remove all the payload types and we've removed from the media line
                    sdpLines[mLineIndex] = SDPHelpers.removeTypesFromMLine(mLine, typesToRemove);
                }

                return sdpLines.join('\r\n');
            };

            SDPHelpers.disableMediaType = function disableMediaType(sdp, mediaType) {
                var _ref4;

                var lines = sdp.split('\r\n');

                var blocks = [];
                var block = void 0;

                // Separating SDP into blocks. This usually follows the form:
                // Header block:
                //   v=0
                //   ...
                // Audio block:
                //   m=audio
                //   ...
                // Video block:
                //   m=video
                //   ...

                lines.forEach(function (lineParam) {
                    var line = lineParam;

                    if (/^m=/.test(line)) {
                        block = undefined;
                    }

                    if (!block) {
                        block = [];
                        blocks.push(block);
                    }

                    block.push(line);
                });

                // Now disable the block for the specified media type

                var mLineRegex = new RegExp('^m=' + mediaType + ' \\d+ ([^ ]+) [0-9 ]+$');

                var fixedBlocks = blocks.map(function (block) {
                    var match = block[0].match(mLineRegex);

                    if (match) {
                        return ['m=' + mediaType + ' 0 ' + match[1] + ' 0', 'a=inactive'].concat(block.filter(function (line) {
                                return (/^c=/.test(line) || /^a=mid:/.test(line) || line === ''
                                );
                            } // This preserves the trailing newline
                        ));
                    }

                    return block;
                });

                return (_ref4 = []).concat.apply(_ref4, fixedBlocks).join('\r\n');
            };

            SDPHelpers.removeVideoCodec = function removeVideoCodec(sdp, codec) {
                return SDPHelpers.removeMediaEncoding(sdp, 'video', codec);
            };

// Used to identify whether Video media (for a given set of SDP) supports
// retransmissions.
//
// The algorithm to do could be summarised as:
//
// IF ssrc-group:FID exists AND IT HAS AT LEAST TWO IDS THEN
//    we are using RTX
// ELSE IF "a=rtpmap: (\\d+):rtxPayloadId(/\\d+)? rtx/90000"
//          AND SDPHelpers.hasMLinePayloadType(sdpLines, 'Video', rtxPayloadId)
//    we are using RTX
// ELSE
//    we are not using RTX
//
// The ELSE IF clause basically covers the case where ssrc-group:FID
// is probably malformed or missing. In that case we verify whether
// we want RTX by looking at whether it's mentioned in the video
// media line instead.
//
            var isUsingRTX = function isUsingRTX(sdpLines, videoAttrs) {
                var groupFID = videoAttrs.filterByName('ssrc-group:FID');
                var missingFID = groupFID.length === 0;

                if (!missingFID) {
                    groupFID = groupFID[0].value.split(' ');
                } else {
                    groupFID = [];
                }

                switch (groupFID.length) {
                    case 0:
                    case 1:
                        // possibly no RTX, double check for the RTX payload type and that
                        // the Video Media line contains that payload type
                        //
                        // Details: Look for a rtpmap line for rtx/90000
                        //  If there is one, grab the payload ID for rtx
                        //    Look to see if that payload ID is listed under the payload types for the m=Video line
                        //      If it is: RTX
                        //  else: No RTX for you

                        var rtxAttr = videoAttrs.find(function (attr) {
                            return attr.name.indexOf('rtpmap:') === 0 && attr.value.indexOf('rtx/90000') > -1;
                        });

                        if (!rtxAttr) {
                            return false;
                        }

                        var rtxPayloadId = rtxAttr.name.split(':')[1];
                        if (rtxPayloadId.indexOf('/') > -1) {
                            rtxPayloadId = rtxPayloadId.split('/')[0];
                        }
                        return SDPHelpers.hasMLinePayloadType(sdpLines, 'video', rtxPayloadId);

                    default:
                        // two or more: definitely RTX
                        logging.debug('SDP Helpers: There are more than two FIDs, RTX is definitely enabled');
                        return true;
                }
            };

// This returns an Array, which is decorated with several
// SDP specific helper methods.
//
            SDPHelpers.getAttributesForMediaType = function getAttributesForMediaType(sdpLines, mediaType) {
                var ssrcStartIndex = void 0,
                    ssrcEndIndex = void 0,
                    regResult = void 0,
                    ssrc = void 0,
                    ssrcGroup = void 0,
                    msidMatch = void 0,
                    msid = void 0,
                    mid = void 0,
                    midIndex = void 0;
                var mLineIndex = SDPHelpers.getMLineIndex(sdpLines, mediaType);
                var matchOtherMLines = new RegExp('m=(?!' + mediaType + ').+ ', 'i');
                var matchSSRCLines = new RegExp('a=ssrc:\\d+ .*', 'i');
                var matchSSRCGroup = new RegExp('a=ssrc-group:FID (\\d+).*?', 'i');
                var matchAttrLine = new RegExp('a=([a-z0-9:/-]+) (.*)', 'i');
                var attrs = [];

                for (var i = mLineIndex + 1; i < sdpLines.length; i++) {
                    if (matchOtherMLines.test(sdpLines[i])) {
                        break;
                    }

                    // Get the ssrc
                    ssrcGroup = sdpLines[i].match(matchSSRCGroup);
                    if (ssrcGroup) {
                        ssrcStartIndex = i;
                        ssrc = ssrcGroup[1];
                    }

                    // Get the msid
                    msidMatch = sdpLines[i].match('a=ssrc:' + ssrc + ' msid:(.+)');
                    if (msidMatch) {
                        msid = msidMatch[1];
                    }

                    // find where the ssrc lines end
                    var isSSRCLine = matchSSRCLines.test(sdpLines[i]);
                    if (ssrcStartIndex !== undefined && ssrcEndIndex === undefined && !isSSRCLine || i === sdpLines.length - 1) {
                        ssrcEndIndex = i;
                    }

                    var midMatch = sdpLines[i].match(/a=mid:(.+)/);
                    if (midMatch) {
                        mid = midMatch[1];
                        midIndex = i;
                    }

                    regResult = matchAttrLine.exec(sdpLines[i]);
                    if (regResult && regResult.length === 3) {
                        attrs.push({
                            lineIndex: i,
                            name: regResult[1],
                            value: regResult[2]
                        });
                    }
                }

                // / The next section decorates the attributes array
                // / with some useful helpers.

                // Store references to the start and end indices
                // of the media section for this mediaType
                attrs.ssrcStartIndex = ssrcStartIndex;
                attrs.ssrcEndIndex = ssrcEndIndex;
                attrs.msid = msid;

                attrs.mid = mid;
                attrs.midIndex = midIndex;

                // Add .find to the array because IE11 - REMOVE-IE11
                if (!Array.prototype.find) {
                    attrs.find = find.bind(undefined, attrs);
                }

                attrs.isUsingRTX = isUsingRTX.bind(null, sdpLines, attrs);

                attrs.filterByName = function (name) {
                    return this.filter(function (attr) {
                        return attr.name === name;
                    });
                };

                attrs.getRtpNumber = function (mediaEncoding) {
                    var namePattern = new RegExp('rtpmap:(.+)');

                    return find(attrs.map(function (attr) {
                        var nameMatch = attr.name.match(namePattern);
                        if (nameMatch && attr.value.indexOf(mediaEncoding) >= 0) {
                            return nameMatch[1];
                        }
                        return null;
                    }), function (attr) {
                        return attr !== null;
                    });
                };

                return attrs;
            };

            var modifyStereo = function modifyStereo(type, sdp, enable) {
                var sdpLines = sdp.split('\r\n');
                if (!SDPHelpers.getMLine(sdpLines, 'audio')) {
                    logging.debug('No audio m-line, not enabling stereo.');
                    return sdp;
                }
                var audioAttrs = SDPHelpers.getAttributesForMediaType(sdpLines, 'audio');

                var rtpNumber = audioAttrs.getRtpNumber('opus');
                if (!rtpNumber) {
                    logging.debug('Could not find rtp number for opus, not enabling stereo.');
                    return sdp;
                }

                var fmtpAttr = audioAttrs.find(function (attr) {
                    return attr.name === 'fmtp:' + rtpNumber;
                });

                if (!fmtpAttr) {
                    logging.debug('Could not find a=fmtp line for opus, not enabling stereo.');
                    return sdp;
                }

                var line = sdpLines[fmtpAttr.lineIndex];
                var pattern = void 0;

                switch (type) {
                    case 'send':
                        pattern = /sprop-stereo=\d+(\s*;?\s*)/;
                        if (pattern.test(fmtpAttr.value)) {
                            line = line.replace(pattern, enable ? 'sprop-stereo=1$1' : '');
                        } else if (enable) {
                            line += '; sprop-stereo=1';
                        }
                        break;

                    case 'receive':
                        pattern = /([^-])stereo=\d+(\s*;?\s*)/;
                        if (pattern.test(fmtpAttr.value)) {
                            line = line.replace(pattern, enable ? '$1stereo=1$2' : '$1');
                        } else if (enable) {
                            line += '; stereo=1';
                        }
                        break;

                    default:
                        throw new Error('Invalid type ' + type + ' passed into enableStereo');
                }

                // Trim any trailing whitespace and semicolons
                line = line.replace(/[;\s]*$/, '');

                sdpLines[fmtpAttr.lineIndex] = line;

                return sdpLines.join('\r\n');
            };

            SDPHelpers.modifySendStereo = modifyStereo.bind(null, 'send');
            SDPHelpers.modifyReceiveStereo = modifyStereo.bind(null, 'receive');

            SDPHelpers.setAudioBitrate = function (sdp, audioBitrate) {
                var existingValue = SDPHelpers.getAudioBitrate(sdp);
                if (existingValue !== undefined) {
                    logging.debug('Audio bitrate already set to ' + existingValue + ', not setting audio bitrate');
                    return sdp;
                }
                var sdpLines = sdp.split('\r\n');
                if (!SDPHelpers.getMLine(sdpLines, 'audio')) {
                    logging.debug('No audio m-line, not setting audio bitrate.');
                    return sdp;
                }
                var audioAttrs = SDPHelpers.getAttributesForMediaType(sdpLines, 'audio');

                if (!audioAttrs.midIndex) {
                    logging.debug('No audio mid line, not setting audio bitrate.');
                    return sdp;
                }

                // SDP expects audio bitrate in kbit/s
                var audioBitrateKbps = Math.floor(audioBitrate / 1000);
                sdpLines.splice(audioAttrs.midIndex + 1, 0, 'b=AS:' + audioBitrateKbps);

                return sdpLines.join('\r\n');
            };

            SDPHelpers.hasSendStereo = function (sdp) {
                return (/[\s;]sprop-stereo=1/.test(sdp)
                );
            };
            SDPHelpers.getAudioBitrate = function (sdp) {
                var result = sdp.match(/\sb=AS:(\d+)/);
                if (result) {
                    return Number(result[1]) * 1000;
                }
                return undefined;
            };

// Modifies +sdp+ to enable Simulcast for +numberOfStreams+.
//
// Ok, here's the plan:
//  - add the 'a=ssrc-group:SIM' line, it will have numberOfStreams ssrcs
//  - if RTX then add one 'a=ssrc-group:FID', we need to add numberOfStreams lines
//  - add numberOfStreams 'a=ssrc:...' lines for the media ssrc
//  - if RTX then add numberOfStreams 'a=ssrc:...' lines for the RTX ssrc
//
// Re: media and rtx ssrcs:
// We just generate these. The Mantis folk would like us to use sequential numbers
// here for ease of debugging. We can use the same starting number each time as well.
// We should confirm with Oscar/Jose that whether we need to verify that the numbers
// that we choose don't clash with any other ones in the SDP.
//
// I think we do need to check but I can't remember.
//
// Re: The format of the 'a=ssrc:' lines
// Just use the following pattern:
//   a=ssrc:<Media or RTX SSRC> cname:localCname
//   a=ssrc:<Media or RTX SSRC> msid:<MSID>
//
// It doesn't matter that they are all the same and are static.
//
//
            SDPHelpers.enableSimulcast = function enableSimulcast(sdp, numberOfStreams) {
                var linesToAdd = void 0,
                    i = void 0;
                var sdpLines = sdp.split('\r\n');
                if (!SDPHelpers.getMLine(sdpLines, 'video')) {
                    logging.debug('No video m-line, not enabling simulcast.');
                    return sdp;
                }
                var videoAttrs = SDPHelpers.getAttributesForMediaType(sdpLines, 'video');

                if (videoAttrs.filterByName('ssrc-group:SIM').length > 0) {
                    logging.debug('Simulcast is already enabled in this SDP, not attempting to enable again.');
                    return sdp;
                }

                if (!videoAttrs.msid) {
                    logging.debug('No local stream attached, not enabling simulcast.');
                    return sdp;
                }

                var usingRTX = videoAttrs.isUsingRTX();
                var mediaSSRC = [];
                var rtxSSRC = [];

                // generate new media (and rtx if needed) ssrcs
                for (i = 0; i < numberOfStreams; ++i) {
                    mediaSSRC.push(START_MEDIA_SSRC + i);
                    if (usingRTX) {
                        rtxSSRC.push(START_RTX_SSRC + i);
                    }
                }

                linesToAdd = ['a=ssrc-group:SIM ' + mediaSSRC.join(' ')];

                if (usingRTX) {
                    for (i = 0; i < numberOfStreams; ++i) {
                        linesToAdd.push('a=ssrc-group:FID ' + mediaSSRC[i] + ' ' + rtxSSRC[i]);
                    }
                }

                for (i = 0; i < numberOfStreams; ++i) {
                    linesToAdd.push('a=ssrc:' + mediaSSRC[i] + ' cname:localCname', 'a=ssrc:' + mediaSSRC[i] + ' msid:' + videoAttrs.msid);
                }

                if (usingRTX) {
                    for (i = 0; i < numberOfStreams; ++i) {
                        linesToAdd.push('a=ssrc:' + rtxSSRC[i] + ' cname:localCname', 'a=ssrc:' + rtxSSRC[i] + ' msid:' + videoAttrs.msid);
                    }
                }

                // Replace the previous video ssrc section with our new video ssrc section by
                // deleting the old ssrcs section and inserting the new lines
                linesToAdd.unshift(videoAttrs.ssrcStartIndex, videoAttrs.ssrcEndIndex - videoAttrs.ssrcStartIndex);
                sdpLines.splice.apply(sdpLines, linesToAdd);

                return sdpLines.join('\r\n');
            };

            SDPHelpers.reprioritizeVideoCodec = function reprioritizeVideoCodec(sdp, codec, location) {
                var lines = sdp.split('\r\n');

                var mLineIndex = SDPHelpers.getMLineIndex(lines, 'video');

                if (mLineIndex === -1) {
                    return sdp;
                }

                var payloadTypes = SDPHelpers.getMLinePayloadTypes(lines[mLineIndex], 'video');

                var regex = new RegExp('^a=rtpmap:(\\d+).* ' + codec, 'i');
                var codecMatches = lines.map(function (line) {
                    return line.match(regex);
                }).filter(function (match) {
                    return match !== null;
                });

                if (codecMatches.length === 0) {
                    return sdp;
                }

                var codecTypeCodes = codecMatches.map(function (match) {
                    return match[1];
                });

                var newPayloadTypes = payloadTypes.filter(function (t) {
                    return codecTypeCodes.indexOf(t) === -1;
                });

                if (location === 'top') {
                    var _newPayloadTypes;

                    (_newPayloadTypes = newPayloadTypes).unshift.apply(_newPayloadTypes, codecTypeCodes);
                } else if (location === 'bottom') {
                    var _newPayloadTypes2;

                    (_newPayloadTypes2 = newPayloadTypes).push.apply(_newPayloadTypes2, codecTypeCodes);
                } else {
                    logging.error('Unexpected location param: ' + location + '; not changing ' + codec + ' priority');
                    newPayloadTypes = payloadTypes;
                }

                var newMLine = lines[mLineIndex].replace(payloadTypes.join(' '), newPayloadTypes.join(' '));
                lines[mLineIndex] = newMLine;

                return lines.join('\r\n');
            };

            /***/ }),
        /* 52 */
        /***/ (function(module, exports, __webpack_require__) {

            var createFind = __webpack_require__(574),
                findIndex = __webpack_require__(260);

            /**
             * Iterates over elements of `collection`, returning the first element
             * `predicate` returns truthy for. The predicate is invoked with three
             * arguments: (value, index|key, collection).
             *
             * @static
             * @memberOf _
             * @since 0.1.0
             * @category Collection
             * @param {Array|Object} collection The collection to inspect.
             * @param {Function} [predicate=_.identity] The function invoked per iteration.
             * @param {number} [fromIndex=0] The index to search from.
             * @returns {*} Returns the matched element, else `undefined`.
             * @example
             *
             * var users = [
             *   { 'user': 'barney',  'age': 36, 'active': true },
             *   { 'user': 'fred',    'age': 40, 'active': false },
             *   { 'user': 'pebbles', 'age': 1,  'active': true }
             * ];
             *
             * _.find(users, function(o) { return o.age < 40; });
             * // => object for 'barney'
             *
             * // The `_.matches` iteratee shorthand.
             * _.find(users, { 'age': 1, 'active': true });
             * // => object for 'pebbles'
             *
             * // The `_.matchesProperty` iteratee shorthand.
             * _.find(users, ['active', false]);
             * // => object for 'fred'
             *
             * // The `_.property` iteratee shorthand.
             * _.find(users, 'active');
             * // => object for 'barney'
             */
            var find = createFind(findIndex);

            module.exports = find;


            /***/ }),
        /* 53 */
        /***/ (function(module, exports, __webpack_require__) {

            var defineProperty = __webpack_require__(163);

            /**
             * The base implementation of `assignValue` and `assignMergeValue` without
             * value checks.
             *
             * @private
             * @param {Object} object The object to modify.
             * @param {string} key The key of the property to assign.
             * @param {*} value The value to assign.
             */
            function baseAssignValue(object, key, value) {
                if (key == '__proto__' && defineProperty) {
                    defineProperty(object, key, {
                        'configurable': true,
                        'enumerable': true,
                        'value': value,
                        'writable': true
                    });
                } else {
                    object[key] = value;
                }
            }

            module.exports = baseAssignValue;


            /***/ }),
        /* 54 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseIsArguments = __webpack_require__(346),
                isObjectLike = __webpack_require__(15);

            /** Used for built-in method references. */
            var objectProto = Object.prototype;

            /** Used to check objects for own properties. */
            var hasOwnProperty = objectProto.hasOwnProperty;

            /** Built-in value references. */
            var propertyIsEnumerable = objectProto.propertyIsEnumerable;

            /**
             * Checks if `value` is likely an `arguments` object.
             *
             * @static
             * @memberOf _
             * @since 0.1.0
             * @category Lang
             * @param {*} value The value to check.
             * @returns {boolean} Returns `true` if `value` is an `arguments` object,
             *  else `false`.
             * @example
             *
             * _.isArguments(function() { return arguments; }());
             * // => true
             *
             * _.isArguments([1, 2, 3]);
             * // => false
             */
            var isArguments = baseIsArguments(function() { return arguments; }()) ? baseIsArguments : function(value) {
                return isObjectLike(value) && hasOwnProperty.call(value, 'callee') &&
                    !propertyIsEnumerable.call(value, 'callee');
            };

            module.exports = isArguments;


            /***/ }),
        /* 55 */
        /***/ (function(module, exports, __webpack_require__) {

            /* WEBPACK VAR INJECTION */(function(module) {var root = __webpack_require__(12),
                stubFalse = __webpack_require__(347);

                /** Detect free variable `exports`. */
                var freeExports = typeof exports == 'object' && exports && !exports.nodeType && exports;

                /** Detect free variable `module`. */
                var freeModule = freeExports && typeof module == 'object' && module && !module.nodeType && module;

                /** Detect the popular CommonJS extension `module.exports`. */
                var moduleExports = freeModule && freeModule.exports === freeExports;

                /** Built-in value references. */
                var Buffer = moduleExports ? root.Buffer : undefined;

                /* Built-in method references for those with the same name as other `lodash` methods. */
                var nativeIsBuffer = Buffer ? Buffer.isBuffer : undefined;

                /**
                 * Checks if `value` is a buffer.
                 *
                 * @static
                 * @memberOf _
                 * @since 4.3.0
                 * @category Lang
                 * @param {*} value The value to check.
                 * @returns {boolean} Returns `true` if `value` is a buffer, else `false`.
                 * @example
                 *
                 * _.isBuffer(new Buffer(2));
                 * // => true
                 *
                 * _.isBuffer(new Uint8Array(2));
                 * // => false
                 */
                var isBuffer = nativeIsBuffer || stubFalse;

                module.exports = isBuffer;

                /* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(76)(module)))

            /***/ }),
        /* 56 */
        /***/ (function(module, exports) {

            /** Used as references for various `Number` constants. */
            var MAX_SAFE_INTEGER = 9007199254740991;

            /** Used to detect unsigned integer values. */
            var reIsUint = /^(?:0|[1-9]\d*)$/;

            /**
             * Checks if `value` is a valid array-like index.
             *
             * @private
             * @param {*} value The value to check.
             * @param {number} [length=MAX_SAFE_INTEGER] The upper bounds of a valid index.
             * @returns {boolean} Returns `true` if `value` is a valid index, else `false`.
             */
            function isIndex(value, length) {
                var type = typeof value;
                length = length == null ? MAX_SAFE_INTEGER : length;

                return !!length &&
                    (type == 'number' ||
                        (type != 'symbol' && reIsUint.test(value))) &&
                    (value > -1 && value % 1 == 0 && value < length);
            }

            module.exports = isIndex;


            /***/ }),
        /* 57 */
        /***/ (function(module, exports) {

            /**
             * The base implementation of `_.unary` without support for storing metadata.
             *
             * @private
             * @param {Function} func The function to cap arguments for.
             * @returns {Function} Returns the new capped function.
             */
            function baseUnary(func) {
                return function(value) {
                    return func(value);
                };
            }

            module.exports = baseUnary;


            /***/ }),
        /* 58 */
        /***/ (function(module, exports) {

            /** Used for built-in method references. */
            var objectProto = Object.prototype;

            /**
             * Checks if `value` is likely a prototype object.
             *
             * @private
             * @param {*} value The value to check.
             * @returns {boolean} Returns `true` if `value` is a prototype, else `false`.
             */
            function isPrototype(value) {
                var Ctor = value && value.constructor,
                    proto = (typeof Ctor == 'function' && Ctor.prototype) || objectProto;

                return value === proto;
            }

            module.exports = isPrototype;


            /***/ }),
        /* 59 */
        /***/ (function(module, exports, __webpack_require__) {

            var arrayLikeKeys = __webpack_require__(165),
                baseKeysIn = __webpack_require__(351),
                isArrayLike = __webpack_require__(17);

            /**
             * Creates an array of the own and inherited enumerable property names of `object`.
             *
             * **Note:** Non-object values are coerced to objects.
             *
             * @static
             * @memberOf _
             * @since 3.0.0
             * @category Object
             * @param {Object} object The object to query.
             * @returns {Array} Returns the array of property names.
             * @example
             *
             * function Foo() {
             *   this.a = 1;
             *   this.b = 2;
             * }
             *
             * Foo.prototype.c = 3;
             *
             * _.keysIn(new Foo);
             * // => ['a', 'b', 'c'] (iteration order is not guaranteed)
             */
            function keysIn(object) {
                return isArrayLike(object) ? arrayLikeKeys(object, true) : baseKeysIn(object);
            }

            module.exports = keysIn;


            /***/ }),
        /* 60 */
        /***/ (function(module, exports) {

            /**
             * The default argument placeholder value for methods.
             *
             * @type {Object}
             */
            module.exports = {};


            /***/ }),
        /* 61 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseGetTag = __webpack_require__(26),
                isObjectLike = __webpack_require__(15);

            /** `Object#toString` result references. */
            var symbolTag = '[object Symbol]';

            /**
             * Checks if `value` is classified as a `Symbol` primitive or object.
             *
             * @static
             * @memberOf _
             * @since 4.0.0
             * @category Lang
             * @param {*} value The value to check.
             * @returns {boolean} Returns `true` if `value` is a symbol, else `false`.
             * @example
             *
             * _.isSymbol(Symbol.iterator);
             * // => true
             *
             * _.isSymbol('abc');
             * // => false
             */
            function isSymbol(value) {
                return typeof value == 'symbol' ||
                    (isObjectLike(value) && baseGetTag(value) == symbolTag);
            }

            module.exports = isSymbol;


            /***/ }),
        /* 62 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseGet = __webpack_require__(87);

            /**
             * Gets the value at `path` of `object`. If the resolved value is
             * `undefined`, the `defaultValue` is returned in its place.
             *
             * @static
             * @memberOf _
             * @since 3.7.0
             * @category Object
             * @param {Object} object The object to query.
             * @param {Array|string} path The path of the property to get.
             * @param {*} [defaultValue] The value returned for `undefined` resolved values.
             * @returns {*} Returns the resolved value.
             * @example
             *
             * var object = { 'a': [{ 'b': { 'c': 3 } }] };
             *
             * _.get(object, 'a[0].b.c');
             * // => 3
             *
             * _.get(object, ['a', '0', 'b', 'c']);
             * // => 3
             *
             * _.get(object, 'a.b.c', 'default');
             * // => 'default'
             */
            function get(object, path, defaultValue) {
                var result = object == null ? undefined : baseGet(object, path);
                return result === undefined ? defaultValue : result;
            }

            module.exports = get;


            /***/ }),
        /* 63 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var _slicedToArray = function () { function sliceIterator(arr, i) { var _arr = []; var _n = true; var _d = false; var _e = undefined; try { for (var _i = arr[Symbol.iterator](), _s; !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"]) _i["return"](); } finally { if (_d) throw _e; } } return _arr; } return function (arr, i) { if (Array.isArray(arr)) { return arr; } else if (Symbol.iterator in Object(arr)) { return sliceIterator(arr, i); } else { throw new TypeError("Invalid attempt to destructure non-iterable instance"); } }; }();

            var OTHelpers = __webpack_require__(2);

            if (OTHelpers.env.name === 'Node') {
                module.exports = { value: '' };
            } else {
                // Script embed
                var scriptSrc = Array.prototype.slice.call(document.getElementsByTagName('script')).pop().getAttribute('src');

                var _ref = scriptSrc && scriptSrc.match(/[?&]apikey=([^&]+)/i) || [],
                    _ref2 = _slicedToArray(_ref, 2),
                    apiKey = _ref2[1];

                // TODO: The indirection here is due to the need to set APIKEY in testing. We should find a better
                // solution.


                module.exports = { value: apiKey || '' };
            }

            /***/ }),
        /* 64 */
        /***/ (function(module, exports, __webpack_require__) {

            var identity = __webpack_require__(80),
                overRest = __webpack_require__(208),
                setToString = __webpack_require__(120);

            /**
             * The base implementation of `_.rest` which doesn't validate or coerce arguments.
             *
             * @private
             * @param {Function} func The function to apply a rest parameter to.
             * @param {number} [start=func.length-1] The start position of the rest parameter.
             * @returns {Function} Returns the new function.
             */
            function baseRest(func, start) {
                return setToString(overRest(func, start, identity), func + '');
            }

            module.exports = baseRest;


            /***/ }),
        /* 65 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var assign        = __webpack_require__(130)
                , normalizeOpts = __webpack_require__(219)
                , isCallable    = __webpack_require__(459)
                , contains      = __webpack_require__(220)

                , d;

            d = module.exports = function (dscr, value/*, options*/) {
                var c, e, w, options, desc;
                if ((arguments.length < 2) || (typeof dscr !== 'string')) {
                    options = value;
                    value = dscr;
                    dscr = null;
                } else {
                    options = arguments[2];
                }
                if (dscr == null) {
                    c = w = true;
                    e = false;
                } else {
                    c = contains.call(dscr, 'c');
                    e = contains.call(dscr, 'e');
                    w = contains.call(dscr, 'w');
                }

                desc = { value: value, configurable: c, enumerable: e, writable: w };
                return !options ? desc : assign(normalizeOpts(options), desc);
            };

            d.gs = function (dscr, get, set/*, options*/) {
                var c, e, options, desc;
                if (typeof dscr !== 'string') {
                    options = set;
                    set = get;
                    get = dscr;
                    dscr = null;
                } else {
                    options = arguments[3];
                }
                if (get == null) {
                    get = undefined;
                } else if (!isCallable(get)) {
                    options = get;
                    get = set = undefined;
                } else if (set == null) {
                    set = undefined;
                } else if (!isCallable(set)) {
                    options = set;
                    set = undefined;
                }
                if (dscr == null) {
                    c = true;
                    e = false;
                } else {
                    c = contains.call(dscr, 'c');
                    e = contains.call(dscr, 'e');
                }

                desc = { get: get, set: set, configurable: c, enumerable: e };
                return !options ? desc : assign(normalizeOpts(options), desc);
            };


            /***/ }),
        /* 66 */
        /***/ (function(module, exports, __webpack_require__) {

            /*** IMPORTS FROM imports-loader ***/
            var Promise = __webpack_require__(0);

            "use strict";
            function promiseFinally(value, cb) {
                return Promise.resolve(value)
                    .then(function (value) { return Promise.resolve(cb()).then(function () { return value; }); }, function (reason) { return Promise.resolve(cb()).then(function () { return Promise.reject(reason); }); });
            }
            Object.defineProperty(exports, "__esModule", { value: true });
            exports.default = promiseFinally;
//# sourceMappingURL=promise-finally.js.map


            /***/ }),
        /* 67 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            module.exports = function eventHelper(object) {
                var eventHandlers = [];

                return {
                    on: function on(eventName, handler) {
                        for (var _len = arguments.length, args = Array(_len > 2 ? _len - 2 : 0), _key = 2; _key < _len; _key++) {
                            args[_key - 2] = arguments[_key];
                        }

                        eventHandlers.push({ eventName: eventName, handler: handler, args: args });
                        if (object.on) {
                            object.on(eventName, handler);
                        } else if (object.addEventListener) {
                            object.addEventListener.apply(object, [eventName, handler].concat(args));
                        } else {
                            throw new Error('Object does not support events', object);
                        }
                    },
                    off: function off(eventName, handler) {
                        if (object.off) {
                            object.off(eventName, handler);
                        } else if (object.removeEventListener) {
                            for (var _len2 = arguments.length, args = Array(_len2 > 2 ? _len2 - 2 : 0), _key2 = 2; _key2 < _len2; _key2++) {
                                args[_key2 - 2] = arguments[_key2];
                            }

                            object.removeEventListener.apply(object, [eventName, handler].concat(args));
                        } else {
                            throw new Error('Object does not support events', object);
                        }
                    },
                    once: function once(eventName, handler) {
                        eventHandlers.push({ eventName: eventName, handler: handler });
                        object.once(eventName, handler);
                    },
                    removeAll: function removeAll() {
                        var _this = this;

                        eventHandlers.forEach(function (_ref) {
                            var eventName = _ref.eventName,
                                handler = _ref.handler,
                                args = _ref.args;

                            _this.off.apply(_this, [eventName, handler].concat(args));
                        });
                        eventHandlers.splice(0, eventHandlers.length);
                    }
                };
            };

            /***/ }),
        /* 68 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var pick = __webpack_require__(115);
            var assign = __webpack_require__(608);
            var mapValues = __webpack_require__(609);

            var isObject = __webpack_require__(7);

            var frameRateTrackers = {};

            function getFrameRate(stat) {
                return Number(stat.framerateMean || stat.googFrameRateSent || stat.googFrameRateReceived || stat.googFrameRateInput || stat.googFrameRateOutput || 0);
            }

            function getFrames(stat) {
                return Number(stat.framesEncoded || stat.framesDecoded);
            }

            function calcFrameRate(stat, startTime) {
                if (getFrameRate(stat)) {
                    return getFrameRate(stat);
                }

                if (!getFrames(stat)) {
                    return undefined;
                }

                var frameRate = 0;

                if (frameRateTrackers[stat.id] !== undefined) {
                    frameRate = (getFrames(stat) - frameRateTrackers[stat.id].frames) / ((stat.timestamp - frameRateTrackers[stat.id].timestamp) / 1000);
                } else {
                    frameRate = getFrames(stat) / ((stat.timestamp - startTime) / 1000);
                }

                frameRateTrackers[stat.id] = {
                    frames: getFrames(stat),
                    timestamp: stat.timestamp
                };

                return Math.round(frameRate * 100) / 100;
            }

            function getLinkedTrack(stat, allStats) {
                if (!allStats) {
                    return {};
                }
                var linkedTrack = allStats.filter(function (x) {
                    return x.id === stat.mediaTrackId;
                });
                return linkedTrack.length ? linkedTrack[0] : {};
            }

            var getStatsHelpers = {
                isVideoStat: function isVideoStat(stat, allStats) {
                    var linkedTrack = getLinkedTrack(stat, allStats);
                    return stat.mediaType === 'video' || // Chrome / Firefox
                        'googFrameWidthReceived' in stat || // Old Chrome
                        'googFrameWidthInput' in stat || // Old Chrome
                        stat.type === 'inbound-rtp' && stat.id.indexOf('Video') !== -1 || // Safari
                        stat.type === 'inboundrtp' && linkedTrack.frameWidth !== 0; // Edge
                },
                isVideoSenderStat: function isVideoSenderStat(stat) {
                    // Chrome implementation only has this property for RTP video stat
                    return 'googFrameWidthSent' in stat || stat.mediaType === 'video' || stat.id !== undefined && stat.id.toLowerCase().indexOf('video') !== -1;
                },
                isAudioStat: function isAudioStat(stat, allStats) {
                    var linkedTrack = getLinkedTrack(stat, allStats);
                    return stat.mediaType === 'audio' || // Chrome / Firefox
                        'audioInputLevel' in stat || // Old Chrome
                        'audioOutputLevel' in stat || // Old Chrome
                        stat.type === 'inbound-rtp' && stat.id.indexOf('Audio') !== -1 || // Safari
                        stat.type === 'inboundrtp' && linkedTrack.frameWidth === 0; // Edge;
                },
                isInboundStat: function isInboundStat(stat) {
                    return 'bytesReceived' in stat || 'packetsReceived' in stat;
                },
                isOutboundStat: function isOutboundStat(stat) {
                    return 'bytesSent' in stat || 'packetsSent' in stat;
                },
                isVideoTrackStat: function isVideoTrackStat(stat) {
                    return stat.type === 'track' && (stat.frameHeight > 0 || stat.frameWidth > 0 || stat.framesCorrupted > 0 || stat.framesDecoded > 0 || stat.framesPerSecond > 0 || stat.framesSent > 0 || stat.framesReceived > 0);
                },
                parseStatCategory: function parseStatCategory(stat) {
                    var statCategory = {
                        packetsLost: 0,
                        packetsReceived: 0,
                        bytesReceived: 0
                        // frameRate is only set for video stat
                    };

                    if ('packetsReceived' in stat) {
                        statCategory.packetsReceived = parseInt(stat.packetsReceived, 10);
                    }
                    if ('packetsLost' in stat) {
                        statCategory.packetsLost = parseInt(stat.packetsLost, 10);
                    }
                    if ('bytesReceived' in stat) {
                        statCategory.bytesReceived = parseInt(stat.bytesReceived, 10);
                    }

                    if (this.isVideoStat(stat)) {
                        if ('framerateMean' in stat) {
                            statCategory.frameRate = Number(stat.framerateMean);
                        } else if ('googFrameRateOutput' in stat) {
                            statCategory.frameRate = Number(stat.googFrameRateOutput);
                        } else if ('googFrameRateInput' in stat) {
                            statCategory.frameRate = Number(stat.googFrameRateInput);
                        }
                    }

                    return statCategory;
                },
                normalizeTimestamp: function normalizeTimestamp(timestamp) {
                    var now = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : Date.now();

                    if (isObject(timestamp) && 'getTime' in timestamp) {
                        // Chrome as of 39 delivers a "kind of Date" object for timestamps
                        // we duck check it and get the timestamp
                        return timestamp.getTime();
                    }

                    if (Math.abs(timestamp / (1000 * now) - 1) < 0.05) {
                        // If the timestamp is within 5% of 1000x now, we assume its unit is microseconds and
                        // divide by 1000 to correct for this.
                        return timestamp / 1000;
                    }

                    return timestamp;
                },
                normalizeStats: function normalizeStats(stats) {
                    var inbound = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
                    var startTime = arguments[2];

                    var video = stats.filter(function (stat) {
                        return getStatsHelpers.isVideoStat(stat, stats);
                    }).filter(function (stat) {
                        return getStatsHelpers.isInboundStat(stat) === inbound;
                    })[0];

                    var audio = stats.filter(function (stat) {
                        return getStatsHelpers.isAudioStat(stat, stats);
                    }).filter(function (stat) {
                        return getStatsHelpers.isInboundStat(stat) === inbound;
                    })[0];

                    if (!audio && !video) {
                        throw new Error('could not find stats for either audio or video');
                    }

                    var otStats = {
                        timestamp: getStatsHelpers.normalizeTimestamp(video ? video.timestamp : audio.timestamp)
                    };

                    var getOutboundStats = pick(['packetsSent', 'packetsLost', 'bytesSent']);
                    var getInboundStats = pick(['packetsReceived', 'packetsLost', 'bytesReceived']);
                    var getCommonStats = inbound ? getInboundStats : getOutboundStats;

                    if (video) {
                        otStats.video = assign(mapValues(Number, getCommonStats(video)), { frameRate: calcFrameRate(video, startTime) });
                    }

                    if (audio) {
                        otStats.audio = mapValues(Number, getCommonStats(audio));
                    }

                    return otStats;
                }
            };

            module.exports = getStatsHelpers;

            /***/ }),
        /* 69 */
        /***/ (function(module, exports, __webpack_require__) {

            var Stack = __webpack_require__(70),
                arrayEach = __webpack_require__(106),
                assignValue = __webpack_require__(75),
                baseAssign = __webpack_require__(164),
                baseAssignIn = __webpack_require__(350),
                cloneBuffer = __webpack_require__(167),
                copyArray = __webpack_require__(46),
                copySymbols = __webpack_require__(353),
                copySymbolsIn = __webpack_require__(355),
                getAllKeys = __webpack_require__(170),
                getAllKeysIn = __webpack_require__(172),
                getTag = __webpack_require__(39),
                initCloneArray = __webpack_require__(358),
                initCloneByTag = __webpack_require__(359),
                initCloneObject = __webpack_require__(177),
                isArray = __webpack_require__(9),
                isBuffer = __webpack_require__(55),
                isMap = __webpack_require__(363),
                isObject = __webpack_require__(7),
                isSet = __webpack_require__(365),
                keys = __webpack_require__(27);

            /** Used to compose bitmasks for cloning. */
            var CLONE_DEEP_FLAG = 1,
                CLONE_FLAT_FLAG = 2,
                CLONE_SYMBOLS_FLAG = 4;

            /** `Object#toString` result references. */
            var argsTag = '[object Arguments]',
                arrayTag = '[object Array]',
                boolTag = '[object Boolean]',
                dateTag = '[object Date]',
                errorTag = '[object Error]',
                funcTag = '[object Function]',
                genTag = '[object GeneratorFunction]',
                mapTag = '[object Map]',
                numberTag = '[object Number]',
                objectTag = '[object Object]',
                regexpTag = '[object RegExp]',
                setTag = '[object Set]',
                stringTag = '[object String]',
                symbolTag = '[object Symbol]',
                weakMapTag = '[object WeakMap]';

            var arrayBufferTag = '[object ArrayBuffer]',
                dataViewTag = '[object DataView]',
                float32Tag = '[object Float32Array]',
                float64Tag = '[object Float64Array]',
                int8Tag = '[object Int8Array]',
                int16Tag = '[object Int16Array]',
                int32Tag = '[object Int32Array]',
                uint8Tag = '[object Uint8Array]',
                uint8ClampedTag = '[object Uint8ClampedArray]',
                uint16Tag = '[object Uint16Array]',
                uint32Tag = '[object Uint32Array]';

            /** Used to identify `toStringTag` values supported by `_.clone`. */
            var cloneableTags = {};
            cloneableTags[argsTag] = cloneableTags[arrayTag] =
                cloneableTags[arrayBufferTag] = cloneableTags[dataViewTag] =
                    cloneableTags[boolTag] = cloneableTags[dateTag] =
                        cloneableTags[float32Tag] = cloneableTags[float64Tag] =
                            cloneableTags[int8Tag] = cloneableTags[int16Tag] =
                                cloneableTags[int32Tag] = cloneableTags[mapTag] =
                                    cloneableTags[numberTag] = cloneableTags[objectTag] =
                                        cloneableTags[regexpTag] = cloneableTags[setTag] =
                                            cloneableTags[stringTag] = cloneableTags[symbolTag] =
                                                cloneableTags[uint8Tag] = cloneableTags[uint8ClampedTag] =
                                                    cloneableTags[uint16Tag] = cloneableTags[uint32Tag] = true;
            cloneableTags[errorTag] = cloneableTags[funcTag] =
                cloneableTags[weakMapTag] = false;

            /**
             * The base implementation of `_.clone` and `_.cloneDeep` which tracks
             * traversed objects.
             *
             * @private
             * @param {*} value The value to clone.
             * @param {boolean} bitmask The bitmask flags.
             *  1 - Deep clone
             *  2 - Flatten inherited properties
             *  4 - Clone symbols
             * @param {Function} [customizer] The function to customize cloning.
             * @param {string} [key] The key of `value`.
             * @param {Object} [object] The parent object of `value`.
             * @param {Object} [stack] Tracks traversed objects and their clone counterparts.
             * @returns {*} Returns the cloned value.
             */
            function baseClone(value, bitmask, customizer, key, object, stack) {
                var result,
                    isDeep = bitmask & CLONE_DEEP_FLAG,
                    isFlat = bitmask & CLONE_FLAT_FLAG,
                    isFull = bitmask & CLONE_SYMBOLS_FLAG;

                if (customizer) {
                    result = object ? customizer(value, key, object, stack) : customizer(value);
                }
                if (result !== undefined) {
                    return result;
                }
                if (!isObject(value)) {
                    return value;
                }
                var isArr = isArray(value);
                if (isArr) {
                    result = initCloneArray(value);
                    if (!isDeep) {
                        return copyArray(value, result);
                    }
                } else {
                    var tag = getTag(value),
                        isFunc = tag == funcTag || tag == genTag;

                    if (isBuffer(value)) {
                        return cloneBuffer(value, isDeep);
                    }
                    if (tag == objectTag || tag == argsTag || (isFunc && !object)) {
                        result = (isFlat || isFunc) ? {} : initCloneObject(value);
                        if (!isDeep) {
                            return isFlat
                                ? copySymbolsIn(value, baseAssignIn(result, value))
                                : copySymbols(value, baseAssign(result, value));
                        }
                    } else {
                        if (!cloneableTags[tag]) {
                            return object ? value : {};
                        }
                        result = initCloneByTag(value, tag, isDeep);
                    }
                }
                // Check for circular references and return its corresponding clone.
                stack || (stack = new Stack);
                var stacked = stack.get(value);
                if (stacked) {
                    return stacked;
                }
                stack.set(value, result);

                if (isSet(value)) {
                    value.forEach(function(subValue) {
                        result.add(baseClone(subValue, bitmask, customizer, subValue, value, stack));
                    });

                    return result;
                }

                if (isMap(value)) {
                    value.forEach(function(subValue, key) {
                        result.set(key, baseClone(subValue, bitmask, customizer, key, value, stack));
                    });

                    return result;
                }

                var keysFunc = isFull
                    ? (isFlat ? getAllKeysIn : getAllKeys)
                    : (isFlat ? keysIn : keys);

                var props = isArr ? undefined : keysFunc(value);
                arrayEach(props || value, function(subValue, key) {
                    if (props) {
                        key = subValue;
                        subValue = value[key];
                    }
                    // Recursively populate clone (susceptible to call stack limits).
                    assignValue(result, key, baseClone(subValue, bitmask, customizer, key, value, stack));
                });
                return result;
            }

            module.exports = baseClone;


            /***/ }),
        /* 70 */
        /***/ (function(module, exports, __webpack_require__) {

            var ListCache = __webpack_require__(71),
                stackClear = __webpack_require__(322),
                stackDelete = __webpack_require__(323),
                stackGet = __webpack_require__(324),
                stackHas = __webpack_require__(325),
                stackSet = __webpack_require__(326);

            /**
             * Creates a stack cache object to store key-value pairs.
             *
             * @private
             * @constructor
             * @param {Array} [entries] The key-value pairs to cache.
             */
            function Stack(entries) {
                var data = this.__data__ = new ListCache(entries);
                this.size = data.size;
            }

// Add methods to `Stack`.
            Stack.prototype.clear = stackClear;
            Stack.prototype['delete'] = stackDelete;
            Stack.prototype.get = stackGet;
            Stack.prototype.has = stackHas;
            Stack.prototype.set = stackSet;

            module.exports = Stack;


            /***/ }),
        /* 71 */
        /***/ (function(module, exports, __webpack_require__) {

            var listCacheClear = __webpack_require__(317),
                listCacheDelete = __webpack_require__(318),
                listCacheGet = __webpack_require__(319),
                listCacheHas = __webpack_require__(320),
                listCacheSet = __webpack_require__(321);

            /**
             * Creates an list cache object.
             *
             * @private
             * @constructor
             * @param {Array} [entries] The key-value pairs to cache.
             */
            function ListCache(entries) {
                var index = -1,
                    length = entries == null ? 0 : entries.length;

                this.clear();
                while (++index < length) {
                    var entry = entries[index];
                    this.set(entry[0], entry[1]);
                }
            }

// Add methods to `ListCache`.
            ListCache.prototype.clear = listCacheClear;
            ListCache.prototype['delete'] = listCacheDelete;
            ListCache.prototype.get = listCacheGet;
            ListCache.prototype.has = listCacheHas;
            ListCache.prototype.set = listCacheSet;

            module.exports = ListCache;


            /***/ }),
        /* 72 */
        /***/ (function(module, exports, __webpack_require__) {

            var eq = __webpack_require__(45);

            /**
             * Gets the index at which the `key` is found in `array` of key-value pairs.
             *
             * @private
             * @param {Array} array The array to inspect.
             * @param {*} key The key to search for.
             * @returns {number} Returns the index of the matched value, else `-1`.
             */
            function assocIndexOf(array, key) {
                var length = array.length;
                while (length--) {
                    if (eq(array[length][0], key)) {
                        return length;
                    }
                }
                return -1;
            }

            module.exports = assocIndexOf;


            /***/ }),
        /* 73 */
        /***/ (function(module, exports, __webpack_require__) {

            var getNative = __webpack_require__(36);

            /* Built-in method references that are verified to be native. */
            var nativeCreate = getNative(Object, 'create');

            module.exports = nativeCreate;


            /***/ }),
        /* 74 */
        /***/ (function(module, exports, __webpack_require__) {

            var isKeyable = __webpack_require__(341);

            /**
             * Gets the data for `map`.
             *
             * @private
             * @param {Object} map The map to query.
             * @param {string} key The reference key.
             * @returns {*} Returns the map data.
             */
            function getMapData(map, key) {
                var data = map.__data__;
                return isKeyable(key)
                    ? data[typeof key == 'string' ? 'string' : 'hash']
                    : data.map;
            }

            module.exports = getMapData;


            /***/ }),
        /* 75 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseAssignValue = __webpack_require__(53),
                eq = __webpack_require__(45);

            /** Used for built-in method references. */
            var objectProto = Object.prototype;

            /** Used to check objects for own properties. */
            var hasOwnProperty = objectProto.hasOwnProperty;

            /**
             * Assigns `value` to `key` of `object` if the existing value is not equivalent
             * using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
             * for equality comparisons.
             *
             * @private
             * @param {Object} object The object to modify.
             * @param {string} key The key of the property to assign.
             * @param {*} value The value to assign.
             */
            function assignValue(object, key, value) {
                var objValue = object[key];
                if (!(hasOwnProperty.call(object, key) && eq(objValue, value)) ||
                    (value === undefined && !(key in object))) {
                    baseAssignValue(object, key, value);
                }
            }

            module.exports = assignValue;


            /***/ }),
        /* 76 */
        /***/ (function(module, exports) {

            module.exports = function(module) {
                if(!module.webpackPolyfill) {
                    module.deprecate = function() {};
                    module.paths = [];
                    // module.parent = undefined by default
                    if(!module.children) module.children = [];
                    Object.defineProperty(module, "loaded", {
                        enumerable: true,
                        get: function() {
                            return module.l;
                        }
                    });
                    Object.defineProperty(module, "id", {
                        enumerable: true,
                        get: function() {
                            return module.i;
                        }
                    });
                    module.webpackPolyfill = 1;
                }
                return module;
            };


            /***/ }),
        /* 77 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseIsTypedArray = __webpack_require__(348),
                baseUnary = __webpack_require__(57),
                nodeUtil = __webpack_require__(108);

            /* Node.js helper references. */
            var nodeIsTypedArray = nodeUtil && nodeUtil.isTypedArray;

            /**
             * Checks if `value` is classified as a typed array.
             *
             * @static
             * @memberOf _
             * @since 3.0.0
             * @category Lang
             * @param {*} value The value to check.
             * @returns {boolean} Returns `true` if `value` is a typed array, else `false`.
             * @example
             *
             * _.isTypedArray(new Uint8Array);
             * // => true
             *
             * _.isTypedArray([]);
             * // => false
             */
            var isTypedArray = nodeIsTypedArray ? baseUnary(nodeIsTypedArray) : baseIsTypedArray;

            module.exports = isTypedArray;


            /***/ }),
        /* 78 */
        /***/ (function(module, exports, __webpack_require__) {

            var isObject = __webpack_require__(7);

            /** Built-in value references. */
            var objectCreate = Object.create;

            /**
             * The base implementation of `_.create` without support for assigning
             * properties to the created object.
             *
             * @private
             * @param {Object} proto The object to inherit from.
             * @returns {Object} Returns the new object.
             */
            var baseCreate = (function() {
                function object() {}
                return function(proto) {
                    if (!isObject(proto)) {
                        return {};
                    }
                    if (objectCreate) {
                        return objectCreate(proto);
                    }
                    object.prototype = proto;
                    var result = new object;
                    object.prototype = undefined;
                    return result;
                };
            }());

            module.exports = baseCreate;


            /***/ }),
        /* 79 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseConvert = __webpack_require__(385),
                util = __webpack_require__(387);

            /**
             * Converts `func` of `name` to an immutable auto-curried iteratee-first data-last
             * version with conversion `options` applied. If `name` is an object its methods
             * will be converted.
             *
             * @param {string} name The name of the function to wrap.
             * @param {Function} [func] The function to wrap.
             * @param {Object} [options] The options object. See `baseConvert` for more details.
             * @returns {Function|Object} Returns the converted function or object.
             */
            function convert(name, func, options) {
                return baseConvert(util, name, func, options);
            }

            module.exports = convert;


            /***/ }),
        /* 80 */
        /***/ (function(module, exports) {

            /**
             * This method returns the first argument it receives.
             *
             * @static
             * @since 0.1.0
             * @memberOf _
             * @category Util
             * @param {*} value Any value.
             * @returns {*} Returns `value`.
             * @example
             *
             * var object = { 'a': 1 };
             *
             * console.log(_.identity(object) === object);
             * // => true
             */
            function identity(value) {
                return value;
            }

            module.exports = identity;


            /***/ }),
        /* 81 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseCreate = __webpack_require__(78),
                isObject = __webpack_require__(7);

            /**
             * Creates a function that produces an instance of `Ctor` regardless of
             * whether it was invoked as part of a `new` expression or by `call` or `apply`.
             *
             * @private
             * @param {Function} Ctor The constructor to wrap.
             * @returns {Function} Returns the new wrapped function.
             */
            function createCtor(Ctor) {
                return function() {
                    // Use a `switch` statement to work with class constructors. See
                    // http://ecma-international.org/ecma-262/7.0/#sec-ecmascript-function-objects-call-thisargument-argumentslist
                    // for more details.
                    var args = arguments;
                    switch (args.length) {
                        case 0: return new Ctor;
                        case 1: return new Ctor(args[0]);
                        case 2: return new Ctor(args[0], args[1]);
                        case 3: return new Ctor(args[0], args[1], args[2]);
                        case 4: return new Ctor(args[0], args[1], args[2], args[3]);
                        case 5: return new Ctor(args[0], args[1], args[2], args[3], args[4]);
                        case 6: return new Ctor(args[0], args[1], args[2], args[3], args[4], args[5]);
                        case 7: return new Ctor(args[0], args[1], args[2], args[3], args[4], args[5], args[6]);
                    }
                    var thisBinding = baseCreate(Ctor.prototype),
                        result = Ctor.apply(thisBinding, args);

                    // Mimic the constructor's `return` behavior.
                    // See https://es5.github.io/#x13.2.2 for more details.
                    return isObject(result) ? result : thisBinding;
                };
            }

            module.exports = createCtor;


            /***/ }),
        /* 82 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseIndexOf = __webpack_require__(402);

            /**
             * A specialized version of `_.includes` for arrays without support for
             * specifying an index to search from.
             *
             * @private
             * @param {Array} [array] The array to inspect.
             * @param {*} target The value to search for.
             * @returns {boolean} Returns `true` if `target` is found, else `false`.
             */
            function arrayIncludes(array, value) {
                var length = array == null ? 0 : array.length;
                return !!length && baseIndexOf(array, value, 0) > -1;
            }

            module.exports = arrayIncludes;


            /***/ }),
        /* 83 */
        /***/ (function(module, exports, __webpack_require__) {

            var toFinite = __webpack_require__(408);

            /**
             * Converts `value` to an integer.
             *
             * **Note:** This method is loosely based on
             * [`ToInteger`](http://www.ecma-international.org/ecma-262/7.0/#sec-tointeger).
             *
             * @static
             * @memberOf _
             * @since 4.0.0
             * @category Lang
             * @param {*} value The value to convert.
             * @returns {number} Returns the converted integer.
             * @example
             *
             * _.toInteger(3.2);
             * // => 3
             *
             * _.toInteger(Number.MIN_VALUE);
             * // => 0
             *
             * _.toInteger(Infinity);
             * // => 1.7976931348623157e+308
             *
             * _.toInteger('3.2');
             * // => 3
             */
            function toInteger(value) {
                var result = toFinite(value),
                    remainder = result % 1;

                return result === result ? (remainder ? result - remainder : result) : 0;
            }

            module.exports = toInteger;


            /***/ }),
        /* 84 */
        /***/ (function(module, exports, __webpack_require__) {

            var MapCache = __webpack_require__(105),
                setCacheAdd = __webpack_require__(416),
                setCacheHas = __webpack_require__(417);

            /**
             *
             * Creates an array cache object to store unique values.
             *
             * @private
             * @constructor
             * @param {Array} [values] The values to cache.
             */
            function SetCache(values) {
                var index = -1,
                    length = values == null ? 0 : values.length;

                this.__data__ = new MapCache;
                while (++index < length) {
                    this.add(values[index]);
                }
            }

// Add methods to `SetCache`.
            SetCache.prototype.add = SetCache.prototype.push = setCacheAdd;
            SetCache.prototype.has = setCacheHas;

            module.exports = SetCache;


            /***/ }),
        /* 85 */
        /***/ (function(module, exports) {

            /**
             * Checks if a `cache` value for `key` exists.
             *
             * @private
             * @param {Object} cache The cache to query.
             * @param {string} key The key of the entry to check.
             * @returns {boolean} Returns `true` if an entry for `key` exists, else `false`.
             */
            function cacheHas(cache, key) {
                return cache.has(key);
            }

            module.exports = cacheHas;


            /***/ }),
        /* 86 */
        /***/ (function(module, exports) {

            /**
             * Converts `set` to an array of its values.
             *
             * @private
             * @param {Object} set The set to convert.
             * @returns {Array} Returns the values.
             */
            function setToArray(set) {
                var index = -1,
                    result = Array(set.size);

                set.forEach(function(value) {
                    result[++index] = value;
                });
                return result;
            }

            module.exports = setToArray;


            /***/ }),
        /* 87 */
        /***/ (function(module, exports, __webpack_require__) {

            var castPath = __webpack_require__(48),
                toKey = __webpack_require__(41);

            /**
             * The base implementation of `_.get` without support for default values.
             *
             * @private
             * @param {Object} object The object to query.
             * @param {Array|string} path The path of the property to get.
             * @returns {*} Returns the resolved value.
             */
            function baseGet(object, path) {
                path = castPath(path, object);

                var index = 0,
                    length = path.length;

                while (object != null && index < length) {
                    object = object[toKey(path[index++])];
                }
                return (index && index == length) ? object : undefined;
            }

            module.exports = baseGet;


            /***/ }),
        /* 88 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseToString = __webpack_require__(423);

            /**
             * Converts `value` to a string. An empty string is returned for `null`
             * and `undefined` values. The sign of `-0` is preserved.
             *
             * @static
             * @memberOf _
             * @since 4.0.0
             * @category Lang
             * @param {*} value The value to convert.
             * @returns {string} Returns the converted string.
             * @example
             *
             * _.toString(null);
             * // => ''
             *
             * _.toString(-0);
             * // => '-0'
             *
             * _.toString([1, 2, 3]);
             * // => '1,2,3'
             */
            function toString(value) {
                return value == null ? '' : baseToString(value);
            }

            module.exports = toString;


            /***/ }),
        /* 89 */
        /***/ (function(module, exports, __webpack_require__) {

            var basePick = __webpack_require__(433),
                flatRest = __webpack_require__(126);

            /**
             * Creates an object composed of the picked `object` properties.
             *
             * @static
             * @since 0.1.0
             * @memberOf _
             * @category Object
             * @param {Object} object The source object.
             * @param {...(string|string[])} [paths] The property paths to pick.
             * @returns {Object} Returns the new object.
             * @example
             *
             * var object = { 'a': 1, 'b': '2', 'c': 3 };
             *
             * _.pick(object, ['a', 'c']);
             * // => { 'a': 1, 'c': 3 }
             */
            var pick = flatRest(function(object, paths) {
                return object == null ? {} : basePick(object, paths);
            });

            module.exports = pick;


            /***/ }),
        /* 90 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseFor = __webpack_require__(209),
                keys = __webpack_require__(27);

            /**
             * The base implementation of `_.forOwn` without support for iteratee shorthands.
             *
             * @private
             * @param {Object} object The object to iterate over.
             * @param {Function} iteratee The function invoked per iteration.
             * @returns {Object} Returns `object`.
             */
            function baseForOwn(object, iteratee) {
                return object && baseFor(object, iteratee, keys);
            }

            module.exports = baseForOwn;


            /***/ }),
        /* 91 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var objToString = Object.prototype.toString
                , id = objToString.call(
                (function () {
                    return arguments;
                })()
            );

            module.exports = function (value) {
                return objToString.call(value) === id;
            };


            /***/ }),
        /* 92 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var objToString = Object.prototype.toString, id = objToString.call("");

            module.exports = function (value) {
                return (
                    typeof value === "string" ||
                    (value &&
                        typeof value === "object" &&
                        (value instanceof String || objToString.call(value) === id)) ||
                    false
                );
            };


            /***/ }),
        /* 93 */
        /***/ (function(module, exports, __webpack_require__) {

            var isArrayLike = __webpack_require__(17),
                isObjectLike = __webpack_require__(15);

            /**
             * This method is like `_.isArrayLike` except that it also checks if `value`
             * is an object.
             *
             * @static
             * @memberOf _
             * @since 4.0.0
             * @category Lang
             * @param {*} value The value to check.
             * @returns {boolean} Returns `true` if `value` is an array-like object,
             *  else `false`.
             * @example
             *
             * _.isArrayLikeObject([1, 2, 3]);
             * // => true
             *
             * _.isArrayLikeObject(document.body.children);
             * // => true
             *
             * _.isArrayLikeObject('abc');
             * // => false
             *
             * _.isArrayLikeObject(_.noop);
             * // => false
             */
            function isArrayLikeObject(value) {
                return isObjectLike(value) && isArrayLike(value);
            }

            module.exports = isArrayLikeObject;


            /***/ }),
        /* 94 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


// @todo enable the following disabled rules see OPENTOK-31136 for more info
            /* eslint-disable one-var, no-void, no-plusplus, no-underscore-dangle, max-len */

            /* global ActiveXObject */

            var logging = __webpack_require__(1)('meta');
            var OTHelpers = __webpack_require__(2);

            var _require = __webpack_require__(520),
                pluginVersion = _require.pluginVersion,
                maxPluginVersion = _require.maxPluginVersion;

            var staticConfig = __webpack_require__(18)().onlyLocal();
            var versionGreaterThan = __webpack_require__(238);

            var meta = {};
            module.exports = meta;

            var ie64 = OTHelpers.env.name === 'IE' && OTHelpers.env.userAgent.indexOf('Win64') !== -1;

            var archSuffix = ie64 ? '_x64' : '';

            var updaterMimeType = void 0,
                // <- cached version, use getInstallerMimeType instead
                installedVersion = -1; // <- cached version, use getInstallerMimeType instead

// Work out the full mimeType (including the currently installed version)
// of the installer.
            var findMimeTypeAndVersion = function findMimeTypeAndVersion() {
                if (updaterMimeType !== void 0) {
                    return;
                }

                var activeXControlId = 'TokBox.OpenTokPluginInstaller' + archSuffix;
                var installPluginName = 'OpenTokPluginInstaller';
                var unversionedMimeType = 'application/x-opentokplugininstaller' + archSuffix;
                var plugin = (typeof window !== undefined ? window : global).navigator.plugins[activeXControlId] || (typeof window !== undefined ? window : global).navigator.plugins[installPluginName];

                installedVersion = -1;

                if (plugin) {
                    // Look through the supported mime-types for the version
                    // There should only be one mime-type in our use case, and
                    // if there's more than one they should all have the same
                    // version.
                    var numMimeTypes = plugin.length;

                    var extractVersion = new RegExp(unversionedMimeType.replace('-', '\\-') + ',version=([0-9a-zA-Z-_.]+)', 'i');

                    var mimeType = void 0,
                        bits = void 0;

                    for (var i = 0; i < numMimeTypes; ++i) {
                        mimeType = plugin[i];

                        // Look through the supported mimeTypes and find
                        // the one we require.
                        if (mimeType && mimeType.enabledPlugin && mimeType.enabledPlugin.name === plugin.name && mimeType.type.indexOf(unversionedMimeType) !== -1) {
                            bits = extractVersion.exec(mimeType.type);

                            if (bits !== null) {
                                installedVersion = bits[1];
                                if (installedVersion === pluginVersion) {
                                    // If we have found the version we want then stop searching
                                    break;
                                }
                            }
                        }
                    }
                } else if (OTHelpers.env.name === 'IE') {
                    // This may mean that the installer plugin is not installed.
                    // Although it could also mean that we're on IE 9 and below,
                    // which does not support navigator.plugins. Fallback to
                    // using 'ActiveXObject' instead.
                    try {
                        plugin = new ActiveXObject(activeXControlId);
                        installedVersion = plugin.getMasterVersion();
                    } catch (e) {
                        // Just logging this as info because it's not necessarily an error
                        // it just means that the plugin is not installed
                        logging.info(e);
                    }
                }

                updaterMimeType = installedVersion !== -1 ? unversionedMimeType + ',version=' + installedVersion : null;
            };

            meta.getInstallerMimeType = function () {
                if (updaterMimeType === void 0) {
                    findMimeTypeAndVersion();
                }

                return updaterMimeType;
            };

            meta.installedVersion = function () {
                findMimeTypeAndVersion();

                return installedVersion;
            };

            installedVersion = meta.installedVersion();

            meta.mimeType = 'application/x-opentokplugin' + archSuffix + ',version=' + installedVersion;
            meta.activeXName = 'TokBox.OpenTokPlugin' + archSuffix + '.' + installedVersion;

            meta.version = function () {
                return pluginVersion;
            };

            meta.maxPluginVersion = function () {
                return maxPluginVersion;
            };

// Version 0.4.0.4 autoupdate was broken. We want to prompt
// for install on 0.4.0.4 or earlier. We're also including
// earlier versions just in case. Version 0.4.0.10 also
// had a broken updater, we'll treat that version the same
// way.
            meta.hasBrokenUpdater = function () {
                var _broken = meta.installedVersion() === '0.4.0.9' || !versionGreaterThan(meta.installedVersion(), '0.4.0.4');

                meta.hasBrokenUpdater = function () {
                    return _broken;
                };
                return _broken;
            };

// Returns a URI to the OTPlugin installer that is paired with
// this version of OTPlugin.js.
            meta.pathToInstaller = function (callback) {
                var installerPath = staticConfig.assetUrl + '/plugin/' + ('OpenTokPluginMain_x' + (ie64 ? '64' : '32') + '.msi');

                // Backwards compatibility here. No possibility of this being async anymore.
                if (callback) {
                    callback(installerPath);
                }

                return installerPath;
            };

            /***/ }),
        /* 95 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


// @todo enable the following disabled rules see OPENTOK-31136 for more info
            /* eslint-disable no-void, no-cond-assign, no-shadow */

            var isFunction = __webpack_require__(11);
            var AutoUpdater = __webpack_require__(239);
            var logging = __webpack_require__(1)('readiness');
            var PluginProxies = __webpack_require__(96);
            var domState = __webpack_require__(244);

            var _isReady = false;

            var readyCallbacks = [];

// This stores the error from the load attempt. We use
// this if registerReadyListener gets called after a load
// attempt fails.
            var loadError = void 0;

            var destroy = function destroy() {
                PluginProxies.removeAll();
            };

            var registerReadyListener = function registerReadyListener(callback) {
                if (!isFunction(callback)) {
                    logging.warn('registerReadyListener was called with something that was not a function.');
                    return;
                }

                if (_isReady) {
                    callback.call(void 0, loadError);
                } else {
                    readyCallbacks.push(callback);
                }
            };

            var notifyReadyListeners = function notifyReadyListeners() {
                _isReady = true;

                var callback = void 0;

                while ((callback = readyCallbacks.pop()) && isFunction(callback)) {
                    callback.call(void 0, loadError);
                }
            };

            var onDomReady = function onDomReady() {
                AutoUpdater.get(function (err, updater) {
                    if (err) {
                        loadError = 'Error while loading the AutoUpdater: ' + err;
                        notifyReadyListeners();
                        return;
                    }

                    // If the plugin is out of date then we kick off the
                    // auto update process and then bail out.
                    if (!updater.hasRequiredVersion()) {
                        updater.autoUpdate();
                        return;
                    }

                    // Inject the controller object into the page, wait for it to load or timeout...
                    PluginProxies.createMediaCapturer(function (err) {
                        loadError = err;

                        if (!loadError && (!PluginProxies.mediaCapturer || !PluginProxies.mediaCapturer.isValid())) {
                            loadError = 'The TB Plugin failed to load properly';
                        }

                        notifyReadyListeners();
                    });
                });
            };

            domState.on('unload', destroy);
            domState.whenLoaded.then(onDomReady);

            module.exports = {
                listen: registerReadyListener,
                isReady: function isReady() {
                    return _isReady;
                }
            };

            /***/ }),
        /* 96 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


// @todo enable the following disabled rules see OPENTOK-31136 for more info
            /* eslint-disable no-prototype-builtins, no-restricted-syntax, one-var, no-void */

            var assign = __webpack_require__(5);
            var meta = __webpack_require__(94);
            var createPluginProxy = __webpack_require__(525);
            var makeMediaPeerProxy = __webpack_require__(532);
            var makeMediaCapturerProxy = __webpack_require__(533);

            var Proto = function PluginProxies() {};
            var pluginProxies = new Proto();
            var proxies = {};

// Private API

// This is called whenever a Proxy's destroy event fires.
            var cleanupProxyOnDestroy = function cleanupProxyOnDestroy(object) {
                if (pluginProxies.mediaCapturer && pluginProxies.mediaCapturer.id === object.id) {
                    pluginProxies.mediaCapturer = null;
                } else if (proxies.hasOwnProperty(object.id)) {
                    delete proxies[object.id];
                }

                if (object.OTHelpers) {
                    object.OTHelpers.remove();
                }
            };

// Public API

// Public accessor for the MediaCapturer
            pluginProxies.mediaCapturer = null;

            pluginProxies.removeAll = function removeAll() {
                for (var id in proxies) {
                    if (proxies.hasOwnProperty(id)) {
                        proxies[id].destroy();
                    }
                }

                if (pluginProxies.mediaCapturer) {
                    pluginProxies.mediaCapturer.destroy();
                }
            };

            pluginProxies.create = function create(options, completion) {
                var proxy = createPluginProxy(options, completion);

                proxies[proxy.uuid] = proxy;

                // Clean up after this Proxy when it's destroyed.
                proxy.on('destroy', function () {
                    cleanupProxyOnDestroy(proxy);
                });

                return proxy;
            };

            /**
             * Create peer connection in plugin
             *
             * @param {object} options
             * @param {function} completion
             */
            pluginProxies.createMediaPeer = function createMediaPeer() {
                var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
                var completion = arguments[1];

                var mediaPeer = pluginProxies.create(assign(options || {}, {
                    mimeType: meta.mimeType,
                    isVisible: true,
                    windowless: true
                }), function (err) {
                    if (err) {
                        completion.call(void 0, err);
                        return;
                    }

                    proxies[mediaPeer.id] = mediaPeer;
                    completion.call(void 0, void 0, mediaPeer);
                });

                makeMediaPeerProxy(mediaPeer);
            };

            pluginProxies.createMediaCapturer = function createMediaCapturer(completion) {
                // TODO: This violates the always sync or always async idiom.

                if (pluginProxies.mediaCapturer) {
                    completion.call(void 0, void 0, pluginProxies.mediaCapturer);
                    return;
                }

                pluginProxies.mediaCapturer = pluginProxies.create({
                    mimeType: meta.mimeType,
                    isVisible: false,
                    windowless: false
                }, function (err) {
                    completion.call(void 0, err, pluginProxies.mediaCapturer);
                });

                makeMediaCapturerProxy(pluginProxies.mediaCapturer);
            };

            module.exports = pluginProxies;

            /***/ }),
        /* 97 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";
            /* WEBPACK VAR INJECTION */(function(Promise) {

                /**
                 * promisify - Promisify a node style callback function into a promise
                 *
                 * Returns a promisifed version of the function, if it's callback is called
                 * with a truthy error parameter the promise will be rejected. If the callback
                 * is called with one argument, it's value will be resolved. If the callback
                 * is called with multiple arguments, the promise will resolve to an array
                 * of those arguments.
                 *
                 * @param {function} fn Function to promisify
                 * @returns {function} Promise returning function
                 */

                module.exports = function promisify(fn) {
                    return function promisified() {
                        for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
                            args[_key] = arguments[_key];
                        }

                        return new Promise(function (resolve, reject) {
                            fn.apply(undefined, args.concat([function (err) {
                                for (var _len2 = arguments.length, callbackArgs = Array(_len2 > 1 ? _len2 - 1 : 0), _key2 = 1; _key2 < _len2; _key2++) {
                                    callbackArgs[_key2 - 1] = arguments[_key2];
                                }

                                if (err) {
                                    reject(err);
                                    return;
                                }
                                if (callbackArgs.length === 1) {
                                    resolve(callbackArgs[0]);
                                    return;
                                }
                                resolve(callbackArgs);
                            }]));
                        });
                    };
                };
                /* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(0)))

            /***/ }),
        /* 98 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            exports.adaptIceServers = function adaptIceServers(iceServers) {
                return iceServers.map(function (iceServer) {
                    return {
                        url: iceServer.url, // deprecated
                        urls: iceServer.urls || [iceServer.url],
                        username: iceServer.username,
                        credential: iceServer.credential
                    };
                });
            };

            exports.parseIceServers = function parseIceServers(message) {
                var iceServers = void 0;

                try {
                    iceServers = JSON.parse(message.data).content.iceServers;
                } catch (e) {
                    return [];
                }

                return exports.adaptIceServers(iceServers);
            };

            /***/ }),
        /* 99 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";
            /* WEBPACK VAR INJECTION */(function(Promise) {

// @todo enable the following disabled rules see OPENTOK-31136 for more info
                /* eslint-disable one-var, no-underscore-dangle, no-use-before-define, no-param-reassign */
                /* eslint-disable max-len, no-var, vars-on-top, global-require */

                var promiseTimeout = __webpack_require__(145);
                var now = __webpack_require__(100);
                var assign = __webpack_require__(5);
                var cloneDeep = __webpack_require__(40);
                var intersection = __webpack_require__(230);
                var merge = __webpack_require__(140);
                var omit = __webpack_require__(258);
                var uuid = __webpack_require__(13);

                var eventing = __webpack_require__(4);
                var OTHelpersError = __webpack_require__(228);
                var createCleanupJobs = __webpack_require__(146);
                var SDPHelpers = __webpack_require__(51);

                module.exports = function PeerConnectionFactory() {
                    var deps = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

                    var hasValidPeerConnection = deps.hasValidPeerConnection || __webpack_require__(575);
                    var applySdpTransform = deps.applySdpTransform || __webpack_require__(147);
                    var createPeerConnection = deps.createPeerConnection || __webpack_require__(576);
                    var env = deps.env || __webpack_require__(3);
                    var sdpTransformDefaults = deps.sdpTransformDefaults || __webpack_require__(578);
                    var getStatsAdapter = deps.getStatsAdapter || __webpack_require__(261);
                    var IceCandidateProcessor = deps.IceCandidateProcessor || __webpack_require__(583);
                    var createLog = deps.logging || __webpack_require__(1);
                    var offerProcessor = deps.offerProcessor || __webpack_require__(585);
                    var PeerConnectionChannels = deps.PeerConnectionChannels || __webpack_require__(587);
                    var subscribeProcessor = deps.subscribeProcessor || __webpack_require__(589);
                    var Qos = deps.Qos || __webpack_require__(263);
                    var windowMock = deps.global || (typeof window !== undefined ? window : global);
                    var debounce = deps.debounce || __webpack_require__(592);
                    var needsToSwapH264Profiles = deps.needsToSwapH264Profiles || __webpack_require__(594).once;

                    var futureIsPeerConnectionValid = env.name === 'IE' ? Promise.resolve(true) : hasValidPeerConnection(windowMock.RTCPeerConnection);

                    var NativeRTCIceCandidate = deps.NativeRTCIceCandidate || function () {
                        var OTPlugin = __webpack_require__(6);

                        return OTPlugin.isInstalled() && OTPlugin.RTCIceCandidate || windowMock.RTCIceCandidate;
                    }();

                    var NativeRTCSessionDescription = deps.NativeRTCSessionDescription || function () {
                        var OTPlugin = __webpack_require__(6);

                        return OTPlugin.isInstalled() && OTPlugin.RTCSessionDescription || windowMock.RTCSessionDescription;
                    }();

                    // Helper function to forward Ice Candidates via +sendMessage+
                    var iceCandidateForwarder = function iceCandidateForwarder(_ref) {
                        var sendMessage = _ref.sendMessage,
                            logging = _ref.logging;

                        var sdpMids = {};
                        return function (event) {
                            if (event.candidate) {
                                // It would be better to read the mids from the SDP
                                sdpMids[event.candidate.sdpMid] = event.candidate.sdpMLineIndex;
                                sendMessage('candidate', {
                                    candidate: event.candidate.candidate,
                                    sdpMid: event.candidate.sdpMid || '',
                                    sdpMLineIndex: event.candidate.sdpMLineIndex || 0
                                });
                            } else {
                                logging.debug('IceCandidateForwarder: No more ICE candidates.');
                            }
                        };
                    };

                    var noop = function noop() {};

                    /*
  * Negotiates a WebRTC PeerConnection.
  *
  * Responsible for:
  * * offer-answer exchange
  * * iceCandidates
  * * notification of remote streams being added/removed
  *
  */
                    return function PeerConnection() {
                        var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

                        var hasRelayCandidates = false;
                        var _options$iceConfig = options.iceConfig,
                            iceConfig = _options$iceConfig === undefined ? { servers: [] } : _options$iceConfig,
                            isPublisher = options.isPublisher,
                            _options$logAnalytics = options.logAnalyticsEvent,
                            logAnalyticsEvent = _options$logAnalytics === undefined ? noop : _options$logAnalytics,
                            offerOverrides = options.offerOverrides,
                            answerOverrides = options.answerOverrides,
                            sdpTransformOptions = options.sdpTransformOptions,
                            originalSendMessage = options.sendMessage,
                            p2p = options.p2p,
                            codecFlags = options.codecFlags;

                        var offerAnswerPending = false; // Whether we have an offer out and are waiting for an answer
                        var regenerateOffer = false;
                        var processingOffer = false; // Whether we are currently processing an offer
                        var pendingOfferMessage = void 0; // An offer we received that is pending waiting on a previous offer
                        var replaceBaselineProfile = needsToSwapH264Profiles();
                        var offerMessagesReceived = 0; // number of offer or generateoffer messages received
                        var renegotiationInProgress = false;

                        var cleanupJobs = createCleanupJobs();

                        function sendMessage(type, payload) {
                            if (!hasRelayCandidates) {
                                var shouldCheckForRelayCandidates = ['candidate', 'offer', 'answer', 'pranswer'].indexOf(type) > -1;

                                if (shouldCheckForRelayCandidates) {
                                    var message = type === 'candidate' ? payload.candidate : payload.sdp;
                                    hasRelayCandidates = message.indexOf('typ relay') !== -1;
                                }
                            }

                            originalSendMessage(type, payload);
                        }

                        var startConnectingTime = now();

                        logAnalyticsEvent('createPeerConnection', 'Attempt');

                        var api = {};
                        api.id = uuid();
                        var logging = createLog('PeerConnection:' + api.id);

                        logging.debug('construct', { id: api.id, options: options });

                        var sdpTransforms = merge({}, sdpTransformDefaults, sdpTransformOptions);

                        var shouldFilterCandidate = function shouldFilterCandidate(candidate) {
                            return iceConfig.transportPolicy === 'relay' && candidate != null && candidate.candidate.indexOf('typ relay') === -1;
                        };

                        var config = omit(options, ['isPublisher', 'logAnalyticsEvent', 'offerOverrides', 'answerOverrides', 'sendMessage', 'sdpTransformOptions']);

                        var _peerConnection = void 0,
                            _channels = void 0,
                            _offer = void 0,
                            _answer = void 0;

                        var _peerConnectionCompletionHandlers = [];

                        var _simulcastEnabled = function () {
                            var value = config.overrideSimulcastEnabled || false;

                            return {
                                get: function get() {
                                    return value;
                                },
                                set: function set(newValueParam) {
                                    var newValue = Boolean(newValueParam) && config.capableSimulcastStreams > 1;

                                    if (newValue !== value && config.overrideSimulcastEnabled === undefined) {
                                        value = newValue;
                                        api.generateOffer();
                                    }
                                }
                            };
                        }();

                        var _iceRestartNeeded = function () {
                            var value = false;

                            return {
                                get: function get() {
                                    return value;
                                },
                                set: function set(newValueParam) {
                                    var newValue = Boolean(newValueParam);

                                    if (newValue !== value) {
                                        value = newValue;

                                        if (value) {
                                            api.generateOffer();
                                        }
                                    }
                                }
                            };
                        }();

                        var _getStatsAdapter = getStatsAdapter();

                        // OPENTOK-27106: This _readyToSendOffer mechanism is a workaround for a P2P IE->FF issue where
                        // ice candidates sometimes take an excessive amount of time (~10 seconds) to be generated by the
                        // IE plugin. FF will time out if there is a delay like this between receiving the offer and
                        // receiving ice candidates, so the workaround holds back sending the offer until an ice candidate
                        // appears.
                        var _readyToSendOffer = {
                            clean: function clean() {
                                delete this.promise;
                                delete this.resolve;
                                delete this.reject;
                            }
                        };

                        _readyToSendOffer.promise = new Promise(function (resolve, reject) {
                            _readyToSendOffer.resolve = resolve;
                            _readyToSendOffer.reject = reject;
                        });

                        var _iceProcessor = new IceCandidateProcessor();

                        var _state = 'new';

                        Object.defineProperty(api, 'signalingState', {
                            get: function get() {
                                return _peerConnection.signalingState;
                            },
                            set: function set(val) {
                                // obviously they should not be doing this, but we'll mimic what the browser does.
                                _peerConnection.signalingState = val;
                                return val;
                            }
                        });

                        eventing(api);

                        api.once('iceConnected', function () {
                            var proxyInfo = '';
                            var payload = {
                                pcc: parseInt(now() - startConnectingTime, 10),
                                hasRelayCandidates: hasRelayCandidates,
                                proxyInfo: proxyInfo
                            };
                            if (_peerConnection && _peerConnection.proxyInfo) payload.proxyInfo = _peerConnection.proxyInfo;

                            logAnalyticsEvent('createPeerConnection', 'Success', payload);
                        });

                        if (env.name !== 'IE') {
                            _readyToSendOffer.resolve();
                        }

                        // Create and initialise the PeerConnection object. This deals with
                        // any differences between the various browser implementations and
                        // our own OTPlugin version.
                        //
                        // +completion+ is the function is call once we've either successfully
                        // created the PeerConnection or on failure.
                        //
                        // +localWebRtcStream+ will be null unless the callee is representing
                        // a publisher. This is an unfortunate implementation limitation
                        // of OTPlugin, it's not used for vanilla WebRTC. Hopefully this can
                        // be tidied up later.
                        //
                        var internalCreatePeerConnection = function internalCreatePeerConnection(completion, localWebRtcStream) {
                            logging.debug('internalCreatePeerConnection: called');

                            if (_peerConnection) {
                                logging.debug('internalCreatePeerConnection: resolving synchronously');
                                completion.call(null, null, _peerConnection);
                                return;
                            }

                            _peerConnectionCompletionHandlers.push(completion);

                            if (_peerConnectionCompletionHandlers.length > 1) {
                                // The PeerConnection is already being setup, just wait for
                                // it to be ready.
                                return;
                            }

                            var pcConstraints = {
                                optional: [
                                    // This should be unnecessary, but the plugin has issues if we remove it. This needs
                                    // to be investigated.
                                    { DtlsSrtpKeyAgreement: true }]
                            };

                            logging.debug('Creating peer connection config "' + JSON.stringify(config) + '".');

                            if (iceConfig.servers.length === 0) {
                                // This should never happen unless something is misconfigured
                                logging.error('No ice servers present');
                                logAnalyticsEvent('Error', 'noIceServers');
                            }

                            if (iceConfig.transportPolicy === 'relay') {
                                var isTurnUrl = function isTurnUrl(url) {
                                    return url && url.indexOf('turn') === 0;
                                };

                                iceConfig.servers = iceConfig.servers.map(function (providedServer) {
                                    var server = cloneDeep(providedServer);
                                    if (!Array.isArray(server.urls)) {
                                        server.urls = [server.urls];
                                    }
                                    server.urls = server.urls.filter(isTurnUrl);
                                    return server.urls.length === 0 ? undefined : server;
                                }).filter(function (server) {
                                    return server !== undefined;
                                });
                            }

                            config.iceTransportPolicy = iceConfig.transportPolicy;

                            config.iceServers = iceConfig.servers;

                            futureIsPeerConnectionValid.then(function (isValid) {
                                if (!isValid) {
                                    logging.error('createPeerConnection: Invalid RTCPeerConnection object');
                                    attachEventsToPeerConnection(new Error('Failed to create valid RTCPeerConnection object'));
                                    return;
                                }
                                createPeerConnection({
                                    window: windowMock,
                                    config: config,
                                    constraints: pcConstraints,
                                    webRTCStream: localWebRtcStream,
                                    completion: attachEventsToPeerConnection
                                });
                            });
                        };

                        // An auxiliary function to internalCreatePeerConnection. This binds the various event
                        // callbacks once the peer connection is created.
                        //
                        // +err+ will be non-null if an err occured while creating the PeerConnection
                        // +pc+ will be the PeerConnection object itself.
                        //
                        // @todo if anything called in attachEventsToPeerConnection throws it will be
                        // silent
                        var attachEventsToPeerConnection = function attachEventsToPeerConnection(err, pc) {
                            if (err) {
                                triggerError({
                                    reason: 'Failed to create PeerConnection, exception: ' + err,
                                    prefix: 'NewPeerConnection'
                                });

                                _peerConnectionCompletionHandlers = [];
                                return;
                            }

                            logging.debug('OT attachEventsToPeerConnection');
                            _peerConnection = pc;
                            if (_iceProcessor) {
                                _iceProcessor.setPeerConnection(pc);
                            }
                            _channels = new PeerConnectionChannels(_peerConnection);
                            if (config.channels) {
                                _channels.addMany(config.channels);
                            }

                            var forwarder = iceCandidateForwarder({ sendMessage: sendMessage, logging: logging });

                            var onIceCandidate = function onIceCandidate(event) {
                                _readyToSendOffer.resolve();
                                if (shouldFilterCandidate(event.candidate)) {
                                    logging.debug('Ignore candidate', event.candidate.candidate);
                                    return;
                                }
                                forwarder(event);
                            };

                            var _previousIceState = _peerConnection.iceConnectionState;
                            var onIceConnectionStateChanged = function onIceConnectionStateChanged(event) {
                                if (_peerConnection) {
                                    logging.debug('iceconnectionstatechange', _peerConnection.iceConnectionState);
                                    if (_peerConnection.iceConnectionState === 'connected') {
                                        api.emit('iceConnected');
                                    } else if (_peerConnection.iceConnectionState === 'completed' && env.name === 'Edge') {
                                        // Start collecting stats later in Edge because it fails if you call it sooner
                                        // This can probably be fixed better in Adapter.js
                                        setTimeout(function () {
                                            return qos.startCollecting(_peerConnection);
                                        }, 1000);
                                    }
                                } else {
                                    logging.debug('iceconnectionstatechange on peerConnection that no longer exists', api);
                                }

                                var newIceState = event.target.iceConnectionState;
                                api.trigger('iceConnectionStateChange', newIceState);

                                if (_previousIceState !== 'disconnected' && newIceState === 'failed') {
                                    // the sequence disconnected => failure would indicate an abrupt disconnection (e.g. remote
                                    // peer closed the browser) or a network problem. We don't want to log that has a connection
                                    // establishment failure. This behavior is seen only in Chrome 47+

                                    triggerError({
                                        reason: 'The stream was unable to connect due to a network error.' + ' Make sure your connection isn\'t blocked by a firewall.',
                                        prefix: 'ICEWorkflow'
                                    });
                                } else {
                                    logAnalyticsEvent('attachEventsToPeerConnection', 'iceconnectionstatechange', newIceState);
                                }

                                _previousIceState = newIceState;
                            };

                            var onNegotiationNeeded = function onNegotiationNeeded() {
                                logAnalyticsEvent('peerConnection:negotiationNeeded', 'Event');
                                if (isPublisher) {
                                    api.generateOffer();
                                }
                            };

                            // Work around the fact that the safari adapter shim only
                            // fires 'addstream' event if onaddstream has been set
                            // https://github.com/opentok/webrtc-js/pull/2266#issuecomment-305647862
                            _peerConnection.onaddstream = noop;

                            _peerConnection.addEventListener('icecandidate', onIceCandidate);
                            _peerConnection.addEventListener('addstream', onRemoteStreamAdded);
                            _peerConnection.addEventListener('removestream', onRemoteStreamRemoved);
                            _peerConnection.addEventListener('signalingstatechange', routeStateChanged);
                            _peerConnection.addEventListener('negotiationneeded', onNegotiationNeeded);
                            _peerConnection.addEventListener('iceconnectionstatechange', onIceConnectionStateChanged);

                            cleanupJobs.add(function () {
                                if (!_peerConnection) {
                                    return;
                                }
                                _peerConnection.onaddstream = null;
                                _peerConnection.removeEventListener('icecandidate', onIceCandidate);
                                _peerConnection.removeEventListener('addstream', onRemoteStreamAdded);
                                _peerConnection.removeEventListener('removestream', onRemoteStreamRemoved);
                                _peerConnection.removeEventListener('signalingstatechange', routeStateChanged);
                                _peerConnection.removeEventListener('negotiationneeded', onNegotiationNeeded);
                                _peerConnection.removeEventListener('iceconnectionstatechange', onIceConnectionStateChanged);
                            });

                            triggerPeerConnectionCompletion(null);
                        };

                        var triggerPeerConnectionCompletion = function triggerPeerConnectionCompletion() {
                            while (_peerConnectionCompletionHandlers.length) {
                                _peerConnectionCompletionHandlers.shift().call(null);
                            }
                        };

                        // Clean up the Peer Connection and trigger the close event.
                        // This function can be called safely multiple times, it will
                        // only trigger the close event once (per PeerConnection object)
                        var tearDownPeerConnection = function tearDownPeerConnection() {
                            // Our connection is dead, stop processing ICE candidates
                            if (_iceProcessor) {
                                _iceProcessor.destroy();
                                _iceProcessor = null;
                            }

                            _peerConnectionCompletionHandlers = [];

                            qos.stopCollecting();
                            cleanupJobs.releaseAll();
                            _readyToSendOffer.clean();

                            if (_peerConnection !== null) {
                                if (_peerConnection.destroy) {
                                    // OTPlugin defines a destroy method on PCs. This allows
                                    // the plugin to release any resources that it's holding.
                                    _peerConnection.destroy();
                                }

                                _peerConnection = null;
                                api.trigger('close');
                            }

                            api.off();
                        };

                        var routeStateChanged = function routeStateChanged(event) {
                            var newState = event.target.signalingState;

                            api.emit('signalingStateChange', newState);

                            if (newState === 'stable') {
                                api.emit('signalingStateStable');
                            }

                            if (newState && newState !== _state) {
                                _state = newState;
                                logging.debug('stateChange: ' + _state);

                                switch (_state) {
                                    case 'closed':
                                        tearDownPeerConnection();
                                        break;
                                    default:
                                }
                            }
                        };

                        var qosCallback = function qosCallback(parsedStats) {
                            parsedStats.dataChannels = _channels.sampleQos();
                            api.trigger('qos', { parsedStats: parsedStats, simulcastEnabled: _simulcastEnabled.get() });
                        };

                        var getRemoteStreams = function getRemoteStreams() {
                            var streams = void 0;

                            if (_peerConnection.getRemoteStreams) {
                                streams = _peerConnection.getRemoteStreams();
                            } else if (_peerConnection.remoteStreams) {
                                streams = _peerConnection.remoteStreams;
                            } else {
                                throw new Error('Invalid Peer Connection object implements no ' + 'method for retrieving remote streams');
                            }

                            // Force streams to be an Array, rather than a 'Sequence' object,
                            // which is browser dependent and does not behaviour like an Array
                            // in every case.
                            return Array.prototype.slice.call(streams);
                        };

                        // / PeerConnection signaling
                        var onRemoteStreamAdded = function onRemoteStreamAdded(event) {
                            logAnalyticsEvent('createPeerConnection', 'StreamAdded');
                            api.trigger('streamAdded', event.stream);
                        };

                        var onRemoteStreamRemoved = function onRemoteStreamRemoved(event) {
                            logAnalyticsEvent('peerConnection:streamRemoved', 'Event');
                            api.trigger('streamRemoved', event.stream);
                        };

                        // ICE Negotiation messages

                        var reportError = function reportError(message, reason, prefix) {
                            processingOffer = false;
                            triggerError({ reason: 'PeerConnection.offerProcessor ' + message + ': ' + reason, prefix: prefix });
                        };

                        // Process an offer that
                        var processOffer = function processOffer(message) {
                            if (processingOffer) {
                                // If we get multiple pending offer messages we just handle the most recent one
                                pendingOfferMessage = message;
                                return;
                            }
                            processingOffer = true;
                            logAnalyticsEvent('peerConnection:processOffer', 'Event');
                            var offer = new NativeRTCSessionDescription({ type: 'offer', sdp: message.content.sdp });

                            // Relays +answer+ Answer
                            var relayAnswer = function relayAnswer(answer) {
                                processingOffer = false;
                                if (_iceProcessor) {
                                    _iceProcessor.process();
                                }
                                sendMessage('answer', answer);

                                if (env.name !== 'Edge') {
                                    qos.startCollecting(_peerConnection, isPublisher);
                                }

                                if (pendingOfferMessage) {
                                    processOffer(pendingOfferMessage);
                                    pendingOfferMessage = null;
                                }
                            };

                            var onRemoteVideoSupported = function onRemoteVideoSupported(supported) {
                                return api.trigger('remoteVideoSupported', supported);
                            };

                            internalCreatePeerConnection(function () {
                                offerProcessor(_peerConnection, windowMock.RTCPeerConnection, windowMock.RTCSessionDescription, NativeRTCSessionDescription, sdpTransforms, offer, codecFlags, p2p, relayAnswer, reportError, onRemoteVideoSupported, replaceBaselineProfile);
                            });
                        };

                        var processAnswer = function processAnswer(message) {
                            logAnalyticsEvent('peerConnection:processAnswer', 'Event');

                            var failure = function failure(errorReason) {
                                triggerError({
                                    reason: 'Error while setting RemoteDescription ' + errorReason,
                                    prefix: 'SetRemoteDescription'
                                });
                            };

                            if (!message.content.sdp) {
                                failure('Weird answer message, no SDP.');
                                return;
                            }

                            _answer = new NativeRTCSessionDescription({
                                type: 'answer',
                                sdp: applySdpTransform(sdpTransforms, 'remote', 'answer', assign({ replaceBaselineProfile: replaceBaselineProfile }, answerOverrides), message.content.sdp).local
                            });

                            (function () {
                                var success = function success() {
                                    logging.debug('processAnswer: setRemoteDescription Success');
                                    if (_iceProcessor) {
                                        _iceProcessor.process();
                                    }
                                };

                                _peerConnection.setRemoteDescription(_answer).then(success).catch(failure);
                                offerAnswerPending = false;
                                if (regenerateOffer) {
                                    regenerateOffer = false;
                                    api.generateOffer();
                                }
                            })();

                            if (env.name !== 'Edge') {
                                qos.startCollecting(_peerConnection, isPublisher);
                            }
                        };

                        var processSubscribe = function processSubscribe() {
                            offerAnswerPending = true;
                            logAnalyticsEvent('peerConnection:processSubscribe', 'Event');
                            logging.debug('processSubscribe: Sending offer to subscriber.');

                            var simulcastStreams = _simulcastEnabled.get() ? config.capableSimulcastStreams : 1;

                            internalCreatePeerConnection(function () {
                                subscribeProcessor({
                                    peerConnection: _peerConnection,
                                    NativeRTCSessionDescription: NativeRTCSessionDescription,
                                    sdpTransforms: sdpTransforms,
                                    simulcastStreams: simulcastStreams,
                                    offerOverrides: offerOverrides,
                                    offerConstraints: { iceRestart: _iceRestartNeeded.get() },
                                    replaceBaselineProfile: replaceBaselineProfile
                                }).then(function (offer) {
                                    logging.debug('processSubscribe: got offer, waiting for ' + '_readyToSendOffer');

                                    _offer = offer;
                                    _readyToSendOffer.promise.then(function () {
                                        logging.debug('processSubscribe: sending offer');
                                        sendMessage('offer', _offer);
                                    });
                                }, function (error) {
                                    triggerError({
                                        reason: 'subscribeProcessor ' + error.message + ': ' + error.reason,
                                        prefix: error.prefix
                                    });
                                });

                                _iceRestartNeeded.set(false);
                            });
                        };

                        api.generateOffer = debounce(function () {
                            if (!offerAnswerPending) {
                                processSubscribe();
                            } else {
                                regenerateOffer = true;
                            }
                        }, 100);

                        var triggerError = function triggerError(_ref2) {
                            var reason = _ref2.reason,
                                prefix = _ref2.prefix;

                            logging.error(reason, 'in state', !_peerConnection ? '(none)' : {
                                connectionState: _peerConnection.connectionState,
                                iceConnectionState: _peerConnection.iceConnectionState,
                                iceGatheringState: _peerConnection.iceGatheringState,
                                signalingState: _peerConnection.signalingState
                            });

                            api.trigger('error', { reason: reason, prefix: prefix });
                        };

                        /*
    * Add a track to the underlying PeerConnection
    *
    * @param {object} track - the track to add
    * @param {object} stream - the stream to add it to
    * @return {RTCRtpSender}
    */
                        api.addTrack = function (track, stream) {
                            var promise = new Promise(function (resolve, reject) {
                                internalCreatePeerConnection(function (err) {
                                    if (err) {
                                        return reject(err);
                                    }
                                    resolve();
                                    return undefined;
                                });
                            }).then(function () {
                                if (_peerConnection.addTrack) {
                                    return _peerConnection.addTrack(track, stream);
                                }

                                var pcStream = _peerConnection.getLocalStreams()[0];
                                if (pcStream === undefined) {
                                    throw new Error('PeerConnection has no existing streams, cannot addTrack');
                                }
                                pcStream.addTrack(track);
                                api.generateOffer();
                                return undefined;
                            }).then(function () {
                                return new Promise(function (resolve) {
                                    api.once('signalingStateStable', function () {
                                        resolve();
                                    });
                                });
                            });
                            return promiseTimeout(promise, 15000, 'Renegotiation timed out');
                        };

                        function FakeRTCRtpSender(track) {
                            this.track = track;
                        }

                        /**
                         * Remove a track from the underlying PeerConnection
                         *
                         * @param {RTCRtpSender} RTCRtpSender - the RTCRtpSender to remove
                         */
                        api.removeTrack = function (RTCRtpSender) {
                            var promise = Promise.resolve().then(function () {
                                if (RTCRtpSender instanceof FakeRTCRtpSender) {
                                    _peerConnection.getLocalStreams()[0].removeTrack(RTCRtpSender.track);
                                    api.generateOffer();
                                    return undefined;
                                }
                                return _peerConnection.removeTrack(RTCRtpSender);
                            }).then(function () {
                                return new Promise(function (resolve) {
                                    api.once('signalingStateStable', function () {
                                        resolve();
                                    });
                                });
                            });
                            return promiseTimeout(promise, 15000, 'Renegotiation timed out');
                        };

                        api.addLocalStream = function (webRTCStream) {
                            internalCreatePeerConnection(function () {
                                _peerConnection.addStream(webRTCStream);
                            }, webRTCStream);
                        };

                        api.getLocalStreams = function () {
                            return _peerConnection.getLocalStreams();
                        };

                        api.getSenders = function () {
                            if (_peerConnection.getSenders) {
                                return _peerConnection.getSenders();
                            }

                            return _peerConnection.getLocalStreams()[0].getTracks().map(function (track) {
                                return new FakeRTCRtpSender(track);
                            });
                        };

                        api.disconnect = function () {
                            if (_iceProcessor) {
                                _iceProcessor.destroy();
                                _iceProcessor = null;
                            }

                            if (_peerConnection && _peerConnection.signalingState && _peerConnection.signalingState.toLowerCase() !== 'closed') {
                                _peerConnection.close();

                                if (env.name === 'Firefox') {
                                    // FF seems to never go into the closed signalingState when the close
                                    // method is called on a PeerConnection. This means that we need to call
                                    // our cleanup code manually.
                                    //
                                    // * https://bugzilla.mozilla.org/show_bug.cgi?id=989936
                                    //
                                    setTimeout(tearDownPeerConnection);
                                }
                            }
                        };

                        api.iceRestart = function () {
                            return _iceRestartNeeded.set(true);
                        };

                        api.processMessage = function (type, message) {
                            logging.debug('processMessage: Received ' + type + ' from ' + message.fromAddress, message);

                            logging.debug(message);

                            switch (type) {
                                case 'generateoffer':
                                    if (message.content && message.content.simulcastEnabled !== undefined) {
                                        _simulcastEnabled.set(message.content.simulcastEnabled);
                                    }

                                    api.generateOffer();
                                    trackRenegotiationAttempts();
                                    break;

                                case 'offer':
                                    processOffer(message);
                                    trackRenegotiationAttempts();
                                    break;

                                case 'answer':
                                case 'pranswer':
                                    processAnswer(message);
                                    break;

                                case 'candidate':
                                    var iceCandidate = new NativeRTCIceCandidate(message.content);
                                    if (shouldFilterCandidate(iceCandidate)) {
                                        logging.debug('Ignore candidate', iceCandidate.candidate);
                                        return api;
                                    }

                                    if (_iceProcessor) {
                                        _iceProcessor.addIceCandidate(iceCandidate).catch(function (err) {
                                            // Sometimes you might get an error adding an iceCandidate
                                            // this does not mean we should fail, if we get a working candidate
                                            // later then we should let it work
                                            logging.warn('Error while adding ICE candidate: ' + JSON.stringify(iceCandidate) + ': ' + err.toString());
                                        });
                                    }

                                    break;

                                default:
                                    logging.debug('processMessage: Received an unexpected message of type ' + type + ' from ' + message.fromAddress + ': ' + JSON.stringify(message));
                            }

                            function trackRenegotiationAttempts() {
                                offerMessagesReceived += 1;
                                qos.handleOfferMessageReceived();

                                if (offerMessagesReceived > 1) {
                                    logAnalyticsEvent('Renegotiation', 'Attempt');
                                    renegotiationInProgress = true;
                                }
                            }

                            return api;
                        };

                        api.remoteStreams = function () {
                            return _peerConnection ? getRemoteStreams() : [];
                        };

                        api.remoteTracks = function () {
                            if (!_peerConnection) {
                                return [];
                            }

                            if (_peerConnection.getReceivers) {
                                return Array.prototype.slice.apply(_peerConnection.getReceivers()).map(function (receiver) {
                                    return receiver.track;
                                });
                            }

                            return Array.prototype.concat.apply([], getRemoteStreams().map(function (stream) {
                                return stream.getTracks();
                            }));
                        };

                        api.remoteDescription = function () {
                            return _peerConnection.remoteDescription;
                        };

                        /*
    * @param {function(DOMError, Array<RTCStats>)} callback
    */
                        api.getStats = function (callback) {
                            if (!_peerConnection) {
                                callback(new OTHelpersError('Cannot call getStats before there is a connection.', 'NotConnectedError', {
                                    code: 1015
                                }));
                                return;
                            }
                            _getStatsAdapter(_peerConnection, callback);
                        };

                        var waitForChannel = function waitForChannel(timesToWait, label, channelOptions, completion) {
                            var err = void 0;
                            var channel = _channels.get(label, channelOptions);

                            if (!channel) {
                                if (timesToWait > 0) {
                                    setTimeout(waitForChannel.bind(null, timesToWait - 1, label, channelOptions, completion), 200);

                                    return;
                                }

                                err = new OTHelpersError('' + ('A channel with that label and options could not be found. ' + 'Label:') + label + '. Options: ' + JSON.stringify(channelOptions));
                            }

                            completion(err, channel);
                        };

                        api.getDataChannel = function (label, channelOptions, completion) {
                            if (!_peerConnection) {
                                completion(new OTHelpersError('Cannot create a DataChannel before there is a connection.'));
                                return;
                            }
                            // Wait up to 20 sec for the channel to appear, then fail
                            waitForChannel(100, label, channelOptions, completion);
                        };

                        api.iceConnectionStateIsConnected = function () {
                            return ['connected', 'completed'].indexOf(_peerConnection.iceConnectionState) > -1;
                        };

                        api.findAndReplaceTrack = function (oldTrack, newTrack) {
                            return Promise.resolve().then(function () {
                                var sender = _peerConnection.getSenders().filter(function (s) {
                                    return s.track === oldTrack;
                                })[0];

                                if (!sender) {
                                    // There is no video track to replace but this is OK
                                    // they probably called cycleVideo on an audio only Publisher
                                    // or on a Publisher that does not support the videoCodec
                                    return Promise.resolve();
                                }

                                if (typeof sender.replaceTrack !== 'function') {
                                    throw new Error('Sender does not support replaceTrack');
                                }

                                return sender.replaceTrack(newTrack);
                            });
                        };

                        api.hasRelayCandidates = function () {
                            return hasRelayCandidates;
                        };

                        api.getNegotiatedCodecs = function () {
                            if (!_peerConnection.localDescription || !_peerConnection.remoteDescription) {
                                return null;
                            }

                            var getForMediaType = function getForMediaType(mediaType) {
                                return intersection(SDPHelpers.getCodecs(_peerConnection.localDescription.sdp, mediaType), SDPHelpers.getCodecs(_peerConnection.remoteDescription.sdp, mediaType));
                            };

                            return {
                                audio: getForMediaType('audio'),
                                video: getForMediaType('video')
                            };
                        };

                        api.on('signalingStateStable', function () {
                            if (renegotiationInProgress) {
                                renegotiationInProgress = false;
                                logAnalyticsEvent('Renegotiation', 'Success', api.getNegotiatedCodecs());
                            }
                        });

                        api.on('error', function (_ref3) {
                            var prefix = _ref3.prefix;

                            if (renegotiationInProgress && ['CreateOffer', 'SetRemoteDescription'].indexOf(prefix) !== -1) {
                                renegotiationInProgress = false;
                                logAnalyticsEvent('Renegotiation', 'Failure');
                            }
                        });

                        api.on('close', function () {
                            if (renegotiationInProgress) {
                                renegotiationInProgress = false;
                                logAnalyticsEvent('Renegotiation', 'Cancel');
                            }
                        });

                        var qos = new Qos();
                        qos.on('stats', qosCallback);

                        return api;
                    };
                };
                /* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(0)))

            /***/ }),
        /* 100 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var performance = (typeof window !== undefined ? window : global).performance || {};

            /**
             * Returns the number of milliseconds since the the UNIX epoch
             *
             * When available (performance api exists), this function will not be skewed
             * by clock adjustments. Only use if you require this functionality, otherwise
             * use Date.now().
             *
             * @returns {number} Number of milliseconds since UNIX epoch
             */

            module.exports = function highResolutionNow() {
                if (performance.now) {
                    return performance.timing.navigationStart + performance.now();
                }

                return Date.now();
            };

            /***/ }),
        /* 101 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var assign = __webpack_require__(5);

            var generatePropertyFunction = function generatePropertyFunction(object, getter, setter) {
                if (getter && !setter) {
                    return function () {
                        return getter.call(object);
                    };
                }

                if (getter && setter) {
                    return function (value) {
                        if (value !== undefined) {
                            setter.call(object, value);
                        }
                        return getter.call(object);
                    };
                }

                return function (value) {
                    if (value !== undefined) {
                        setter.call(object, value);
                    }
                };
            };

            /**
             * @typedef getterSetterDefinition
             * @property {function(): any} get the function called when accessing the value
             * @property {function(any): void} set the function called when setting the value
             */

            /**
             * Creates primitive getters/ setters on objects
             *
             * For every key in gettersSetters, a method will be added to object.
             *
             * When the method is called with no value, it will call the getter
             * When the method is called with a value, it will call the setter with the value
             *
             * @deprecated Prefer using real getters and setters
             *
             * @param {any} object
             * @param {Object.<string, getterSetterDefinition>} getterSetters
             */
            module.exports = function (object, getterSetters) {
                var mixin = {};
                Object.keys(getterSetters).forEach(function (key) {
                    mixin[key] = generatePropertyFunction(object, getterSetters[key].get, getterSetters[key].set);
                });
                assign(object, mixin);
            };

            /***/ }),
        /* 102 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            var DefaultNativeVideoElementWrapperFactory = __webpack_require__(276);
            var DefaultPluginVideoElementWrapper = __webpack_require__(613);
            var DefaultOTPlugin = __webpack_require__(6);

            /**
             * VideoElementFacadeFactory DI Container for VideoElementFacade
             *
             * @package
             * @param {Object} [dependencies]
             * @param {typeof NativeVideoElementWrapper} [dependencies.NativeVideoElementWrapper]
             * @param {typeof PluginVideoElementWrapper} [dependencies.PluginVideoElementWrapper]
             * @param {Object} [dependencies.OTPlugin]
             * @param {Object} [dependencies.logging]
             * @return {typeof VideoElementFacade}
             */
            function VideoElementFacadeFactory() {
                var _ref = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
                    _ref$NativeVideoEleme = _ref.NativeVideoElementWrapper,
                    NativeVideoElementWrapper = _ref$NativeVideoEleme === undefined ? DefaultNativeVideoElementWrapperFactory() : _ref$NativeVideoEleme,
                    _ref$PluginVideoEleme = _ref.PluginVideoElementWrapper,
                    PluginVideoElementWrapper = _ref$PluginVideoEleme === undefined ? DefaultPluginVideoElementWrapper : _ref$PluginVideoEleme,
                    _ref$OTPlugin = _ref.OTPlugin,
                    OTPlugin = _ref$OTPlugin === undefined ? DefaultOTPlugin : _ref$OTPlugin;

                var VideoElementWrapper = OTPlugin.isInstalled() ? PluginVideoElementWrapper : NativeVideoElementWrapper;
                var defaultAudioVolume = 50;

                /**
                 * Create a new VideoElementFacade
                 *
                 * Used to simplify the strategy between Plugin and Native
                 *
                 * Note: Could VideoElementFacade not exist? Could it just be an expected interface
                 * for VideoElementWrapper which could be either PluginVideoElementWrapper or
                 * NativeVideoElementWrapper
                 *
                 * @package
                 * @class
                 * @param {Object} [config]
                 * @param {String} [config.fallbackText] displayed when WebRTC is not supported
                 * @param {Boolean} [config.muted] initial mute setting
                 * @param {String} [config.fitMode] fitMode a parameter passed to VideoElementWrapper
                 * @param {Object} [config._inject] @todo use the DI system
                 * @param {Function} [errorHandler=() => {}] error callback function
                 */
                function VideoElementFacade() {
                    var _ref2 = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
                        _ref2$fallbackText = _ref2.fallbackText,
                        fallbackText = _ref2$fallbackText === undefined ? 'Sorry, Web RTC is not available in your browser' : _ref2$fallbackText,
                        fitMode = _ref2.fitMode,
                        muted = _ref2.muted,
                        _inject = _ref2._inject;

                    return new VideoElementWrapper({
                        fallbackText: fallbackText,
                        fitMode: fitMode,
                        muted: muted,
                        defaultAudioVolume: defaultAudioVolume,
                        _inject: _inject
                    });
                }
                return VideoElementFacade;
            }

            module.exports = VideoElementFacadeFactory;

            /***/ }),
        /* 103 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            Object.defineProperty(exports, "__esModule", {
                value: true
            });
// https://tools.ietf.org/html/rfc6455#section-7.4.1
// https://developer.mozilla.org/en-US/docs/Web/API/CloseEvent#Close_codes

            var messages = exports.messages = {
                1001: 'The endpoint is going away, either because of a server failure or because the browser ' + 'is navigating away from the page that opened the connection.',
                1002: 'The endpoint is terminating the connection due to a protocol error. ' + '(CLOSE_PROTOCOL_ERROR)',
                1003: 'The connection is being terminated because the endpoint has indicated ' + 'that reconnections are not available. (CLOSE_UNSUPPORTED)',
                1005: 'Indicates that no status code was provided even though one was expected. ' + '(CLOSE_NO_STATUS)',
                1006: 'Used to indicate that a connection was closed abnormally (that is, with no ' + 'close frame being sent) when a status code is expected. (CLOSE_ABNORMAL)',
                1007: 'Indicates that an endpoint is terminating the connection because it has received ' + 'data within a message that was not consistent with the type of the message (e.g., ' + 'non-UTF-8 [RFC3629] data within a text message)',
                1008: 'Indicates that an endpoint is terminating the connection because it has received a ' + 'message that violates its policy.  This is a generic status code that can be returned ' + 'when there is no other more suitable status code (e.g., 1003 or 1009) or if there is a ' + 'need to hide specific details about the policy',
                1009: 'Indicates that an endpoint is terminating the connection because it has received a ' + 'message that is too big for it to process (CLOSE_TOO_LARGE)',
                1011: 'Indicates that a server is terminating the connection because it encountered an ' + 'unexpected condition that prevented it from fulfilling the request',
                // .... codes in the 4000-4999 range are available for use by applications.
                4001: 'Connectivity loss was detected as it was too long since the socket received the ' + 'last PONG message',
                4010: 'Timed out while waiting for the Rumor socket to connect.',
                4020: 'Error code unavailable.',
                4030: 'Exception was thrown during Rumor connection, possibly because of a blocked port.'
            };

            var codes = exports.codes = {
                CLOSE_NORMAL: 1000,
                CLOSE_GOING_AWAY: 1001,
                CLOSE_PROTOCOL_ERROR: 1002,
                CLOSE_UNSUPPORTED: 1003,
                CLOSE_NO_STATUS: 1005,
                CLOSE_ABNORMAL: 1006,
                CLOSE_INCONSISTENT_DATA: 1007,
                CLOSE_POLICY_VIOLATION: 1008,
                CLOSE_TOO_LARGE: 1009,
                CLOSE_UNEXPECTED_CONDITION: 1011,
                CLOSE_CONNECTIVITY_LOSS: 4001,
                CLOSE_TIMEOUT: 4010,
                CLOSE_FALLBACK_CODE: 4020,
                CLOSE_CONNECT_EXCEPTION: 4030,
                ALREADY_CONNECTED_CONNECTING: null
            };

            /***/ }),
        /* 104 */
        /***/ (function(module, exports, __webpack_require__) {

            var getNative = __webpack_require__(36),
                root = __webpack_require__(12);

            /* Built-in method references that are verified to be native. */
            var Map = getNative(root, 'Map');

            module.exports = Map;


            /***/ }),
        /* 105 */
        /***/ (function(module, exports, __webpack_require__) {

            var mapCacheClear = __webpack_require__(333),
                mapCacheDelete = __webpack_require__(340),
                mapCacheGet = __webpack_require__(342),
                mapCacheHas = __webpack_require__(343),
                mapCacheSet = __webpack_require__(344);

            /**
             * Creates a map cache object to store key-value pairs.
             *
             * @private
             * @constructor
             * @param {Array} [entries] The key-value pairs to cache.
             */
            function MapCache(entries) {
                var index = -1,
                    length = entries == null ? 0 : entries.length;

                this.clear();
                while (++index < length) {
                    var entry = entries[index];
                    this.set(entry[0], entry[1]);
                }
            }

// Add methods to `MapCache`.
            MapCache.prototype.clear = mapCacheClear;
            MapCache.prototype['delete'] = mapCacheDelete;
            MapCache.prototype.get = mapCacheGet;
            MapCache.prototype.has = mapCacheHas;
            MapCache.prototype.set = mapCacheSet;

            module.exports = MapCache;


            /***/ }),
        /* 106 */
        /***/ (function(module, exports) {

            /**
             * A specialized version of `_.forEach` for arrays without support for
             * iteratee shorthands.
             *
             * @private
             * @param {Array} [array] The array to iterate over.
             * @param {Function} iteratee The function invoked per iteration.
             * @returns {Array} Returns `array`.
             */
            function arrayEach(array, iteratee) {
                var index = -1,
                    length = array == null ? 0 : array.length;

                while (++index < length) {
                    if (iteratee(array[index], index, array) === false) {
                        break;
                    }
                }
                return array;
            }

            module.exports = arrayEach;


            /***/ }),
        /* 107 */
        /***/ (function(module, exports) {

            /** Used as references for various `Number` constants. */
            var MAX_SAFE_INTEGER = 9007199254740991;

            /**
             * Checks if `value` is a valid array-like length.
             *
             * **Note:** This method is loosely based on
             * [`ToLength`](http://ecma-international.org/ecma-262/7.0/#sec-tolength).
             *
             * @static
             * @memberOf _
             * @since 4.0.0
             * @category Lang
             * @param {*} value The value to check.
             * @returns {boolean} Returns `true` if `value` is a valid length, else `false`.
             * @example
             *
             * _.isLength(3);
             * // => true
             *
             * _.isLength(Number.MIN_VALUE);
             * // => false
             *
             * _.isLength(Infinity);
             * // => false
             *
             * _.isLength('3');
             * // => false
             */
            function isLength(value) {
                return typeof value == 'number' &&
                    value > -1 && value % 1 == 0 && value <= MAX_SAFE_INTEGER;
            }

            module.exports = isLength;


            /***/ }),
        /* 108 */
        /***/ (function(module, exports, __webpack_require__) {

            /* WEBPACK VAR INJECTION */(function(module) {var freeGlobal = __webpack_require__(161);

                /** Detect free variable `exports`. */
                var freeExports = typeof exports == 'object' && exports && !exports.nodeType && exports;

                /** Detect free variable `module`. */
                var freeModule = freeExports && typeof module == 'object' && module && !module.nodeType && module;

                /** Detect the popular CommonJS extension `module.exports`. */
                var moduleExports = freeModule && freeModule.exports === freeExports;

                /** Detect free variable `process` from Node.js. */
                var freeProcess = moduleExports && freeGlobal.process;

                /** Used to access faster Node.js helpers. */
                var nodeUtil = (function() {
                    try {
                        // Use `util.types` for Node.js 10+.
                        var types = freeModule && freeModule.require && freeModule.require('util').types;

                        if (types) {
                            return types;
                        }

                        // Legacy `process.binding('util')` for Node.js < 10.
                        return freeProcess && freeProcess.binding && freeProcess.binding('util');
                    } catch (e) {}
                }());

                module.exports = nodeUtil;

                /* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(76)(module)))

            /***/ }),
        /* 109 */
        /***/ (function(module, exports, __webpack_require__) {

            var isPrototype = __webpack_require__(58),
                nativeKeys = __webpack_require__(349);

            /** Used for built-in method references. */
            var objectProto = Object.prototype;

            /** Used to check objects for own properties. */
            var hasOwnProperty = objectProto.hasOwnProperty;

            /**
             * The base implementation of `_.keys` which doesn't treat sparse arrays as dense.
             *
             * @private
             * @param {Object} object The object to query.
             * @returns {Array} Returns the array of property names.
             */
            function baseKeys(object) {
                if (!isPrototype(object)) {
                    return nativeKeys(object);
                }
                var result = [];
                for (var key in Object(object)) {
                    if (hasOwnProperty.call(object, key) && key != 'constructor') {
                        result.push(key);
                    }
                }
                return result;
            }

            module.exports = baseKeys;


            /***/ }),
        /* 110 */
        /***/ (function(module, exports, __webpack_require__) {

            var arrayFilter = __webpack_require__(354),
                stubArray = __webpack_require__(168);

            /** Used for built-in method references. */
            var objectProto = Object.prototype;

            /** Built-in value references. */
            var propertyIsEnumerable = objectProto.propertyIsEnumerable;

            /* Built-in method references for those with the same name as other `lodash` methods. */
            var nativeGetSymbols = Object.getOwnPropertySymbols;

            /**
             * Creates an array of the own enumerable symbols of `object`.
             *
             * @private
             * @param {Object} object The object to query.
             * @returns {Array} Returns the array of symbols.
             */
            var getSymbols = !nativeGetSymbols ? stubArray : function(object) {
                if (object == null) {
                    return [];
                }
                object = Object(object);
                return arrayFilter(nativeGetSymbols(object), function(symbol) {
                    return propertyIsEnumerable.call(object, symbol);
                });
            };

            module.exports = getSymbols;


            /***/ }),
        /* 111 */
        /***/ (function(module, exports) {

            /**
             * Appends the elements of `values` to `array`.
             *
             * @private
             * @param {Array} array The array to modify.
             * @param {Array} values The values to append.
             * @returns {Array} Returns `array`.
             */
            function arrayPush(array, values) {
                var index = -1,
                    length = values.length,
                    offset = array.length;

                while (++index < length) {
                    array[offset + index] = values[index];
                }
                return array;
            }

            module.exports = arrayPush;


            /***/ }),
        /* 112 */
        /***/ (function(module, exports, __webpack_require__) {

            var overArg = __webpack_require__(166);

            /** Built-in value references. */
            var getPrototype = overArg(Object.getPrototypeOf, Object);

            module.exports = getPrototype;


            /***/ }),
        /* 113 */
        /***/ (function(module, exports, __webpack_require__) {

            var Uint8Array = __webpack_require__(175);

            /**
             * Creates a clone of `arrayBuffer`.
             *
             * @private
             * @param {ArrayBuffer} arrayBuffer The array buffer to clone.
             * @returns {ArrayBuffer} Returns the cloned array buffer.
             */
            function cloneArrayBuffer(arrayBuffer) {
                var result = new arrayBuffer.constructor(arrayBuffer.byteLength);
                new Uint8Array(result).set(new Uint8Array(arrayBuffer));
                return result;
            }

            module.exports = cloneArrayBuffer;


            /***/ }),
        /* 114 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";
            /* WEBPACK VAR INJECTION */(function(process) {

                var utils = __webpack_require__(16);
                var normalizeHeaderName = __webpack_require__(370);

                var DEFAULT_CONTENT_TYPE = {
                    'Content-Type': 'application/x-www-form-urlencoded'
                };

                function setContentTypeIfUnset(headers, value) {
                    if (!utils.isUndefined(headers) && utils.isUndefined(headers['Content-Type'])) {
                        headers['Content-Type'] = value;
                    }
                }

                function getDefaultAdapter() {
                    var adapter;
                    if (typeof XMLHttpRequest !== 'undefined') {
                        // For browsers use XHR adapter
                        adapter = __webpack_require__(181);
                    } else if (typeof process !== 'undefined') {
                        // For node use HTTP adapter
                        adapter = __webpack_require__(181);
                    }
                    return adapter;
                }

                var defaults = {
                    adapter: getDefaultAdapter(),

                    transformRequest: [function transformRequest(data, headers) {
                        normalizeHeaderName(headers, 'Content-Type');
                        if (utils.isFormData(data) ||
                            utils.isArrayBuffer(data) ||
                            utils.isBuffer(data) ||
                            utils.isStream(data) ||
                            utils.isFile(data) ||
                            utils.isBlob(data)
                        ) {
                            return data;
                        }
                        if (utils.isArrayBufferView(data)) {
                            return data.buffer;
                        }
                        if (utils.isURLSearchParams(data)) {
                            setContentTypeIfUnset(headers, 'application/x-www-form-urlencoded;charset=utf-8');
                            return data.toString();
                        }
                        if (utils.isObject(data)) {
                            setContentTypeIfUnset(headers, 'application/json;charset=utf-8');
                            return JSON.stringify(data);
                        }
                        return data;
                    }],

                    transformResponse: [function transformResponse(data) {
                        /*eslint no-param-reassign:0*/
                        if (typeof data === 'string') {
                            try {
                                data = JSON.parse(data);
                            } catch (e) { /* Ignore */ }
                        }
                        return data;
                    }],

                    timeout: 0,

                    xsrfCookieName: 'XSRF-TOKEN',
                    xsrfHeaderName: 'X-XSRF-TOKEN',

                    maxContentLength: -1,

                    validateStatus: function validateStatus(status) {
                        return status >= 200 && status < 300;
                    }
                };

                defaults.headers = {
                    common: {
                        'Accept': 'application/json, text/plain, */*'
                    }
                };

                utils.forEach(['delete', 'get', 'head'], function forEachMethodNoData(method) {
                    defaults.headers[method] = {};
                });

                utils.forEach(['post', 'put', 'patch'], function forEachMethodWithData(method) {
                    defaults.headers[method] = utils.merge(DEFAULT_CONTENT_TYPE);
                });

                module.exports = defaults;

                /* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(47)))

            /***/ }),
        /* 115 */
        /***/ (function(module, exports, __webpack_require__) {

            var convert = __webpack_require__(79),
                func = convert('pick', __webpack_require__(89));

            func.placeholder = __webpack_require__(60);
            module.exports = func;


            /***/ }),
        /* 116 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseSetData = __webpack_require__(185),
                createBind = __webpack_require__(389),
                createCurry = __webpack_require__(390),
                createHybrid = __webpack_require__(187),
                createPartial = __webpack_require__(406),
                getData = __webpack_require__(191),
                mergeData = __webpack_require__(407),
                setData = __webpack_require__(194),
                setWrapToString = __webpack_require__(196),
                toInteger = __webpack_require__(83);

            /** Error message constants. */
            var FUNC_ERROR_TEXT = 'Expected a function';

            /** Used to compose bitmasks for function metadata. */
            var WRAP_BIND_FLAG = 1,
                WRAP_BIND_KEY_FLAG = 2,
                WRAP_CURRY_FLAG = 8,
                WRAP_CURRY_RIGHT_FLAG = 16,
                WRAP_PARTIAL_FLAG = 32,
                WRAP_PARTIAL_RIGHT_FLAG = 64;

            /* Built-in method references for those with the same name as other `lodash` methods. */
            var nativeMax = Math.max;

            /**
             * Creates a function that either curries or invokes `func` with optional
             * `this` binding and partially applied arguments.
             *
             * @private
             * @param {Function|string} func The function or method name to wrap.
             * @param {number} bitmask The bitmask flags.
             *    1 - `_.bind`
             *    2 - `_.bindKey`
             *    4 - `_.curry` or `_.curryRight` of a bound function
             *    8 - `_.curry`
             *   16 - `_.curryRight`
             *   32 - `_.partial`
             *   64 - `_.partialRight`
             *  128 - `_.rearg`
             *  256 - `_.ary`
             *  512 - `_.flip`
             * @param {*} [thisArg] The `this` binding of `func`.
             * @param {Array} [partials] The arguments to be partially applied.
             * @param {Array} [holders] The `partials` placeholder indexes.
             * @param {Array} [argPos] The argument positions of the new function.
             * @param {number} [ary] The arity cap of `func`.
             * @param {number} [arity] The arity of `func`.
             * @returns {Function} Returns the new wrapped function.
             */
            function createWrap(func, bitmask, thisArg, partials, holders, argPos, ary, arity) {
                var isBindKey = bitmask & WRAP_BIND_KEY_FLAG;
                if (!isBindKey && typeof func != 'function') {
                    throw new TypeError(FUNC_ERROR_TEXT);
                }
                var length = partials ? partials.length : 0;
                if (!length) {
                    bitmask &= ~(WRAP_PARTIAL_FLAG | WRAP_PARTIAL_RIGHT_FLAG);
                    partials = holders = undefined;
                }
                ary = ary === undefined ? ary : nativeMax(toInteger(ary), 0);
                arity = arity === undefined ? arity : toInteger(arity);
                length -= holders ? holders.length : 0;

                if (bitmask & WRAP_PARTIAL_RIGHT_FLAG) {
                    var partialsRight = partials,
                        holdersRight = holders;

                    partials = holders = undefined;
                }
                var data = isBindKey ? undefined : getData(func);

                var newData = [
                    func, bitmask, thisArg, partials, holders, partialsRight, holdersRight,
                    argPos, ary, arity
                ];

                if (data) {
                    mergeData(newData, data);
                }
                func = newData[0];
                bitmask = newData[1];
                thisArg = newData[2];
                partials = newData[3];
                holders = newData[4];
                arity = newData[9] = newData[9] === undefined
                    ? (isBindKey ? 0 : func.length)
                    : nativeMax(newData[9] - length, 0);

                if (!arity && bitmask & (WRAP_CURRY_FLAG | WRAP_CURRY_RIGHT_FLAG)) {
                    bitmask &= ~(WRAP_CURRY_FLAG | WRAP_CURRY_RIGHT_FLAG);
                }
                if (!bitmask || bitmask == WRAP_BIND_FLAG) {
                    var result = createBind(func, bitmask, thisArg);
                } else if (bitmask == WRAP_CURRY_FLAG || bitmask == WRAP_CURRY_RIGHT_FLAG) {
                    result = createCurry(func, bitmask, arity);
                } else if ((bitmask == WRAP_PARTIAL_FLAG || bitmask == (WRAP_BIND_FLAG | WRAP_PARTIAL_FLAG)) && !holders.length) {
                    result = createPartial(func, bitmask, thisArg, partials);
                } else {
                    result = createHybrid.apply(undefined, newData);
                }
                var setter = data ? baseSetData : setData;
                return setWrapToString(setter(result, newData), func, bitmask);
            }

            module.exports = createWrap;


            /***/ }),
        /* 117 */
        /***/ (function(module, exports) {

            /**
             * A faster alternative to `Function#apply`, this function invokes `func`
             * with the `this` binding of `thisArg` and the arguments of `args`.
             *
             * @private
             * @param {Function} func The function to invoke.
             * @param {*} thisArg The `this` binding of `func`.
             * @param {Array} args The arguments to invoke `func` with.
             * @returns {*} Returns the result of `func`.
             */
            function apply(func, thisArg, args) {
                switch (args.length) {
                    case 0: return func.call(thisArg);
                    case 1: return func.call(thisArg, args[0]);
                    case 2: return func.call(thisArg, args[0], args[1]);
                    case 3: return func.call(thisArg, args[0], args[1], args[2]);
                }
                return func.apply(thisArg, args);
            }

            module.exports = apply;


            /***/ }),
        /* 118 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseCreate = __webpack_require__(78),
                baseLodash = __webpack_require__(119);

            /** Used as references for the maximum length and index of an array. */
            var MAX_ARRAY_LENGTH = 4294967295;

            /**
             * Creates a lazy wrapper object which wraps `value` to enable lazy evaluation.
             *
             * @private
             * @constructor
             * @param {*} value The value to wrap.
             */
            function LazyWrapper(value) {
                this.__wrapped__ = value;
                this.__actions__ = [];
                this.__dir__ = 1;
                this.__filtered__ = false;
                this.__iteratees__ = [];
                this.__takeCount__ = MAX_ARRAY_LENGTH;
                this.__views__ = [];
            }

// Ensure `LazyWrapper` is an instance of `baseLodash`.
            LazyWrapper.prototype = baseCreate(baseLodash.prototype);
            LazyWrapper.prototype.constructor = LazyWrapper;

            module.exports = LazyWrapper;


            /***/ }),
        /* 119 */
        /***/ (function(module, exports) {

            /**
             * The function whose prototype chain sequence wrappers inherit from.
             *
             * @private
             */
            function baseLodash() {
                // No operation performed.
            }

            module.exports = baseLodash;


            /***/ }),
        /* 120 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseSetToString = __webpack_require__(399),
                shortOut = __webpack_require__(195);

            /**
             * Sets the `toString` method of `func` to return `string`.
             *
             * @private
             * @param {Function} func The function to modify.
             * @param {Function} string The `toString` result.
             * @returns {Function} Returns `func`.
             */
            var setToString = shortOut(baseSetToString);

            module.exports = setToString;


            /***/ }),
        /* 121 */
        /***/ (function(module, exports) {

            /** Used as the internal argument placeholder. */
            var PLACEHOLDER = '__lodash_placeholder__';

            /**
             * Replaces all `placeholder` elements in `array` with an internal placeholder
             * and returns an array of their indexes.
             *
             * @private
             * @param {Array} array The array to modify.
             * @param {*} placeholder The placeholder to replace.
             * @returns {Array} Returns the new array of placeholder indexes.
             */
            function replaceHolders(array, placeholder) {
                var index = -1,
                    length = array.length,
                    resIndex = 0,
                    result = [];

                while (++index < length) {
                    var value = array[index];
                    if (value === placeholder || value === PLACEHOLDER) {
                        array[index] = PLACEHOLDER;
                        result[resIndex++] = index;
                    }
                }
                return result;
            }

            module.exports = replaceHolders;


            /***/ }),
        /* 122 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseGetTag = __webpack_require__(26),
                getPrototype = __webpack_require__(112),
                isObjectLike = __webpack_require__(15);

            /** `Object#toString` result references. */
            var objectTag = '[object Object]';

            /** Used for built-in method references. */
            var funcProto = Function.prototype,
                objectProto = Object.prototype;

            /** Used to resolve the decompiled source of functions. */
            var funcToString = funcProto.toString;

            /** Used to check objects for own properties. */
            var hasOwnProperty = objectProto.hasOwnProperty;

            /** Used to infer the `Object` constructor. */
            var objectCtorString = funcToString.call(Object);

            /**
             * Checks if `value` is a plain object, that is, an object created by the
             * `Object` constructor or one with a `[[Prototype]]` of `null`.
             *
             * @static
             * @memberOf _
             * @since 0.8.0
             * @category Lang
             * @param {*} value The value to check.
             * @returns {boolean} Returns `true` if `value` is a plain object, else `false`.
             * @example
             *
             * function Foo() {
             *   this.a = 1;
             * }
             *
             * _.isPlainObject(new Foo);
             * // => false
             *
             * _.isPlainObject([1, 2, 3]);
             * // => false
             *
             * _.isPlainObject({ 'x': 0, 'y': 0 });
             * // => true
             *
             * _.isPlainObject(Object.create(null));
             * // => true
             */
            function isPlainObject(value) {
                if (!isObjectLike(value) || baseGetTag(value) != objectTag) {
                    return false;
                }
                var proto = getPrototype(value);
                if (proto === null) {
                    return true;
                }
                var Ctor = hasOwnProperty.call(proto, 'constructor') && proto.constructor;
                return typeof Ctor == 'function' && Ctor instanceof Ctor &&
                    funcToString.call(Ctor) == objectCtorString;
            }

            module.exports = isPlainObject;


            /***/ }),
        /* 123 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseIsEqualDeep = __webpack_require__(415),
                isObjectLike = __webpack_require__(15);

            /**
             * The base implementation of `_.isEqual` which supports partial comparisons
             * and tracks traversed objects.
             *
             * @private
             * @param {*} value The value to compare.
             * @param {*} other The other value to compare.
             * @param {boolean} bitmask The bitmask flags.
             *  1 - Unordered comparison
             *  2 - Partial comparison
             * @param {Function} [customizer] The function to customize comparisons.
             * @param {Object} [stack] Tracks traversed `value` and `other` objects.
             * @returns {boolean} Returns `true` if the values are equivalent, else `false`.
             */
            function baseIsEqual(value, other, bitmask, customizer, stack) {
                if (value === other) {
                    return true;
                }
                if (value == null || other == null || (!isObjectLike(value) && !isObjectLike(other))) {
                    return value !== value && other !== other;
                }
                return baseIsEqualDeep(value, other, bitmask, customizer, baseIsEqual, stack);
            }

            module.exports = baseIsEqual;


            /***/ }),
        /* 124 */
        /***/ (function(module, exports, __webpack_require__) {

            var isArray = __webpack_require__(9),
                isSymbol = __webpack_require__(61);

            /** Used to match property names within property paths. */
            var reIsDeepProp = /\.|\[(?:[^[\]]*|(["'])(?:(?!\1)[^\\]|\\.)*?\1)\]/,
                reIsPlainProp = /^\w*$/;

            /**
             * Checks if `value` is a property name and not a property path.
             *
             * @private
             * @param {*} value The value to check.
             * @param {Object} [object] The object to query keys on.
             * @returns {boolean} Returns `true` if `value` is a property name, else `false`.
             */
            function isKey(value, object) {
                if (isArray(value)) {
                    return false;
                }
                var type = typeof value;
                if (type == 'number' || type == 'symbol' || type == 'boolean' ||
                    value == null || isSymbol(value)) {
                    return true;
                }
                return reIsPlainProp.test(value) || !reIsDeepProp.test(value) ||
                    (object != null && value in Object(object));
            }

            module.exports = isKey;


            /***/ }),
        /* 125 */
        /***/ (function(module, exports, __webpack_require__) {

            var MapCache = __webpack_require__(105);

            /** Error message constants. */
            var FUNC_ERROR_TEXT = 'Expected a function';

            /**
             * Creates a function that memoizes the result of `func`. If `resolver` is
             * provided, it determines the cache key for storing the result based on the
             * arguments provided to the memoized function. By default, the first argument
             * provided to the memoized function is used as the map cache key. The `func`
             * is invoked with the `this` binding of the memoized function.
             *
             * **Note:** The cache is exposed as the `cache` property on the memoized
             * function. Its creation may be customized by replacing the `_.memoize.Cache`
             * constructor with one whose instances implement the
             * [`Map`](http://ecma-international.org/ecma-262/7.0/#sec-properties-of-the-map-prototype-object)
             * method interface of `clear`, `delete`, `get`, `has`, and `set`.
             *
             * @static
             * @memberOf _
             * @since 0.1.0
             * @category Function
             * @param {Function} func The function to have its output memoized.
             * @param {Function} [resolver] The function to resolve the cache key.
             * @returns {Function} Returns the new memoized function.
             * @example
             *
             * var object = { 'a': 1, 'b': 2 };
             * var other = { 'c': 3, 'd': 4 };
             *
             * var values = _.memoize(_.values);
             * values(object);
             * // => [1, 2]
             *
             * values(other);
             * // => [3, 4]
             *
             * object.a = 2;
             * values(object);
             * // => [1, 2]
             *
             * // Modify the result cache.
             * values.cache.set(object, ['a', 'b']);
             * values(object);
             * // => ['a', 'b']
             *
             * // Replace `_.memoize.Cache`.
             * _.memoize.Cache = WeakMap;
             */
            function memoize(func, resolver) {
                if (typeof func != 'function' || (resolver != null && typeof resolver != 'function')) {
                    throw new TypeError(FUNC_ERROR_TEXT);
                }
                var memoized = function() {
                    var args = arguments,
                        key = resolver ? resolver.apply(this, args) : args[0],
                        cache = memoized.cache;

                    if (cache.has(key)) {
                        return cache.get(key);
                    }
                    var result = func.apply(this, args);
                    memoized.cache = cache.set(key, result) || cache;
                    return result;
                };
                memoized.cache = new (memoize.Cache || MapCache);
                return memoized;
            }

// Expose `MapCache`.
            memoize.Cache = MapCache;

            module.exports = memoize;


            /***/ }),
        /* 126 */
        /***/ (function(module, exports, __webpack_require__) {

            var flatten = __webpack_require__(430),
                overRest = __webpack_require__(208),
                setToString = __webpack_require__(120);

            /**
             * A specialized version of `baseRest` which flattens the rest array.
             *
             * @private
             * @param {Function} func The function to apply a rest parameter to.
             * @returns {Function} Returns the new function.
             */
            function flatRest(func) {
                return setToString(overRest(func, undefined, flatten), func + '');
            }

            module.exports = flatRest;


            /***/ }),
        /* 127 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            module.exports = {
                error: { priority: 1, method: 'error' },
                warn: { priority: 2, method: 'warn' },
                info: { priority: 3, method: 'info' },
                log: { priority: 4, method: 'log' },
                debug: { priority: 5, method: 'debug' },
                spam: { priority: 6, method: 'log' }
            };

            /***/ }),
        /* 128 */
        /***/ (function(module, exports, __webpack_require__) {

            var eq = __webpack_require__(45),
                isArrayLike = __webpack_require__(17),
                isIndex = __webpack_require__(56),
                isObject = __webpack_require__(7);

            /**
             * Checks if the given arguments are from an iteratee call.
             *
             * @private
             * @param {*} value The potential iteratee value argument.
             * @param {*} index The potential iteratee index or key argument.
             * @param {*} object The potential iteratee object argument.
             * @returns {boolean} Returns `true` if the arguments are from an iteratee call,
             *  else `false`.
             */
            function isIterateeCall(value, index, object) {
                if (!isObject(object)) {
                    return false;
                }
                var type = typeof index;
                if (type == 'number'
                    ? (isArrayLike(object) && isIndex(index, object.length))
                    : (type == 'string' && index in object)
                ) {
                    return eq(object[index], value);
                }
                return false;
            }

            module.exports = isIterateeCall;


            /***/ }),
        /* 129 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            module.exports = __webpack_require__(215)()
                ? Object.setPrototypeOf
                : __webpack_require__(216);


            /***/ }),
        /* 130 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            module.exports = __webpack_require__(454)()
                ? Object.assign
                : __webpack_require__(455);


            /***/ }),
        /* 131 */
        /***/ (function(module, exports, __webpack_require__) {

            var baseRest = __webpack_require__(64),
                eq = __webpack_require__(45),
                isIterateeCall = __webpack_require__(128),
                keysIn = __webpack_require__(59);

            /** Used for built-in method references. */
            var objectProto = Object.prototype;

            /** Used to check objects for own properties. */
            var hasOwnProperty = objectProto.hasOwnProperty;

            /**
             * Assigns own and inherited enumerable string keyed properties of source
             * objects to the destination object for all destination properties that
             * resolve to `undefined`. Source objects are applied from left to right.
             * Once a property is set, additional values of the same property are ignored.
             *
             * **Note:** This method mutates `object`.
             *
             * @static
             * @since 0.1.0
             * @memberOf _
             * @category Object
             * @param {Object} object The destination object.
             * @param {...Object} [sources] The source objects.
             * @returns {Object} Returns `object`.
             * @see _.defaultsDeep
             * @example
             *
             * _.defaults({ 'a': 1 }, { 'b': 2 }, { 'a': 3 });
             * // => { 'a': 1, 'b': 2 }
             */
            var defaults = baseRest(function(object, sources) {
                object = Object(object);

                var index = -1;
                var length = sources.length;
                var guard = length > 2 ? sources[2] : undefined;

                if (guard && isIterateeCall(sources[0], sources[1], guard)) {
                    length = 1;
                }

                while (++index < length) {
                    var source = sources[index];
                    var props = keysIn(source);
                    var propsIndex = -1;
                    var propsLength = props.length;

                    while (++propsIndex < propsLength) {
                        var key = props[propsIndex];
                        var value = object[key];

                        if (value === undefined ||
                            (eq(value, objectProto[key]) && !hasOwnProperty.call(object, key))) {
                            object[key] = source[key];
                        }
                    }
                }

                return object;
            });

            module.exports = defaults;


            /***/ }),
        /* 132 */
        /***/ (function(module, exports, __webpack_require__) {

            var stringify = __webpack_require__(229);

            var _window =
                typeof window !== 'undefined'
                    ? window
                    : typeof (typeof window !== undefined ? window : global) !== 'undefined'
                    ? (typeof window !== undefined ? window : global)
                    : typeof self !== 'undefined'
                        ? self
                        : {};

            function isObject(what) {
                return typeof what === 'object' && what !== null;
            }

// Yanked from https://git.io/vS8DV re-used under CC0
// with some tiny modifications
            function isError(value) {
                switch (Object.prototype.toString.call(value)) {
                    case '[object Error]':
                        return true;
                    case '[object Exception]':
                        return true;
                    case '[object DOMException]':
                        return true;
                    default:
                        return value instanceof Error;
                }
            }

            function isErrorEvent(value) {
                return Object.prototype.toString.call(value) === '[object ErrorEvent]';
            }

            function isDOMError(value) {
                return Object.prototype.toString.call(value) === '[object DOMError]';
            }

            function isDOMException(value) {
                return Object.prototype.toString.call(value) === '[object DOMException]';
            }

            function isUndefined(what) {
                return what === void 0;
            }

            function isFunction(what) {
                return typeof what === 'function';
            }

            function isPlainObject(what) {
                return Object.prototype.toString.call(what) === '[object Object]';
            }

            function isString(what) {
                return Object.prototype.toString.call(what) === '[object String]';
            }

            function isArray(what) {
                return Object.prototype.toString.call(what) === '[object Array]';
            }

            function isEmptyObject(what) {
                if (!isPlainObject(what)) return false;

                for (var _ in what) {
                    if (what.hasOwnProperty(_)) {
                        return false;
                    }
                }
                return true;
            }

            function supportsErrorEvent() {
                try {
                    new ErrorEvent(''); // eslint-disable-line no-new
                    return true;
                } catch (e) {
                    return false;
                }
            }

            function supportsDOMError() {
                try {
                    new DOMError(''); // eslint-disable-line no-new
                    return true;
                } catch (e) {
                    return false;
                }
            }

            function supportsDOMException() {
                try {
                    new DOMException(''); // eslint-disable-line no-new
                    return true;
                } catch (e) {
                    return false;
                }
            }

            function supportsFetch() {
                if (!('fetch' in _window)) return false;

                try {
                    new Headers(); // eslint-disable-line no-new
                    new Request(''); // eslint-disable-line no-new
                    new Response(); // eslint-disable-line no-new
                    return true;
                } catch (e) {
                    return false;
                }
            }

// Despite all stars in the sky saying that Edge supports old draft syntax, aka 'never', 'always', 'origin' and 'default
// https://caniuse.com/#feat=referrer-policy
// It doesn't. And it throw exception instead of ignoring this parameter...
// REF: https://github.com/getsentry/raven-js/issues/1233
            function supportsReferrerPolicy() {
                if (!supportsFetch()) return false;

                try {
                    // eslint-disable-next-line no-new
                    new Request('pickleRick', {
                        referrerPolicy: 'origin'
                    });
                    return true;
                } catch (e) {
                    return false;
                }
            }

            function supportsPromiseRejectionEvent() {
                return typeof PromiseRejectionEvent === 'function';
            }

            function wrappedCallback(callback) {
                function dataCallback(data, original) {
                    var normalizedData = callback(data) || data;
                    if (original) {
                        return original(normalizedData) || normalizedData;
                    }
                    return normalizedData;
                }

                return dataCallback;
            }

            function each(obj, callback) {
                var i, j;

                if (isUndefined(obj.length)) {
                    for (i in obj) {
                        if (hasKey(obj, i)) {
                            callback.call(null, i, obj[i]);
                        }
                    }
                } else {
                    j = obj.length;
                    if (j) {
                        for (i = 0; i < j; i++) {
                            callback.call(null, i, obj[i]);
                        }
                    }
                }
            }

            function objectMerge(obj1, obj2) {
                if (!obj2) {
                    return obj1;
                }
                each(obj2, function(key, value) {
                    obj1[key] = value;
                });
                return obj1;
            }

            /**
             * This function is only used for react-native.
             * react-native freezes object that have already been sent over the
             * js bridge. We need this function in order to check if the object is frozen.
             * So it's ok that objectFrozen returns false if Object.isFrozen is not
             * supported because it's not relevant for other "platforms". See related issue:
             * https://github.com/getsentry/react-native-sentry/issues/57
             */
            function objectFrozen(obj) {
                if (!Object.isFrozen) {
                    return false;
                }
                return Object.isFrozen(obj);
            }

            function truncate(str, max) {
                if (typeof max !== 'number') {
                    throw new Error('2nd argument to `truncate` function should be a number');
                }
                if (typeof str !== 'string' || max === 0) {
                    return str;
                }
                return str.length <= max ? str : str.substr(0, max) + '\u2026';
            }

            /**
             * hasKey, a better form of hasOwnProperty
             * Example: hasKey(MainHostObject, property) === true/false
             *
             * @param {Object} host object to check property
             * @param {string} key to check
             */
            function hasKey(object, key) {
                return Object.prototype.hasOwnProperty.call(object, key);
            }

            function joinRegExp(patterns) {
                // Combine an array of regular expressions and strings into one large regexp
                // Be mad.
                var sources = [],
                    i = 0,
                    len = patterns.length,
                    pattern;

                for (; i < len; i++) {
                    pattern = patterns[i];
                    if (isString(pattern)) {
                        // If it's a string, we need to escape it
                        // Taken from: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions
                        sources.push(pattern.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, '\\$1'));
                    } else if (pattern && pattern.source) {
                        // If it's a regexp already, we want to extract the source
                        sources.push(pattern.source);
                    }
                    // Intentionally skip other cases
                }
                return new RegExp(sources.join('|'), 'i');
            }

            function urlencode(o) {
                var pairs = [];
                each(o, function(key, value) {
                    pairs.push(encodeURIComponent(key) + '=' + encodeURIComponent(value));
                });
                return pairs.join('&');
            }

// borrowed from https://tools.ietf.org/html/rfc3986#appendix-B
// intentionally using regex and not <a/> href parsing trick because React Native and other
// environments where DOM might not be available
            function parseUrl(url) {
                if (typeof url !== 'string') return {};
                var match = url.match(/^(([^:\/?#]+):)?(\/\/([^\/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?$/);

                // coerce to undefined values to empty string so we don't get 'undefined'
                var query = match[6] || '';
                var fragment = match[8] || '';
                return {
                    protocol: match[2],
                    host: match[4],
                    path: match[5],
                    relative: match[5] + query + fragment // everything minus origin
                };
            }
            function uuid4() {
                var crypto = _window.crypto || _window.msCrypto;

                if (!isUndefined(crypto) && crypto.getRandomValues) {
                    // Use window.crypto API if available
                    // eslint-disable-next-line no-undef
                    var arr = new Uint16Array(8);
                    crypto.getRandomValues(arr);

                    // set 4 in byte 7
                    arr[3] = (arr[3] & 0xfff) | 0x4000;
                    // set 2 most significant bits of byte 9 to '10'
                    arr[4] = (arr[4] & 0x3fff) | 0x8000;

                    var pad = function(num) {
                        var v = num.toString(16);
                        while (v.length < 4) {
                            v = '0' + v;
                        }
                        return v;
                    };

                    return (
                        pad(arr[0]) +
                        pad(arr[1]) +
                        pad(arr[2]) +
                        pad(arr[3]) +
                        pad(arr[4]) +
                        pad(arr[5]) +
                        pad(arr[6]) +
                        pad(arr[7])
                    );
                } else {
                    // http://stackoverflow.com/questions/105034/how-to-create-a-guid-uuid-in-javascript/2117523#2117523
                    return 'xxxxxxxxxxxx4xxxyxxxxxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                        var r = (Math.random() * 16) | 0,
                            v = c === 'x' ? r : (r & 0x3) | 0x8;
                        return v.toString(16);
                    });
                }
            }

            /**
             * Given a child DOM element, returns a query-selector statement describing that
             * and its ancestors
             * e.g. [HTMLElement] => body > div > input#foo.btn[name=baz]
             * @param elem
             * @returns {string}
             */
            function htmlTreeAsString(elem) {
                /* eslint no-extra-parens:0*/
                var MAX_TRAVERSE_HEIGHT = 5,
                    MAX_OUTPUT_LEN = 80,
                    out = [],
                    height = 0,
                    len = 0,
                    separator = ' > ',
                    sepLength = separator.length,
                    nextStr;

                while (elem && height++ < MAX_TRAVERSE_HEIGHT) {
                    nextStr = htmlElementAsString(elem);
                    // bail out if
                    // - nextStr is the 'html' element
                    // - the length of the string that would be created exceeds MAX_OUTPUT_LEN
                    //   (ignore this limit if we are on the first iteration)
                    if (
                        nextStr === 'html' ||
                        (height > 1 && len + out.length * sepLength + nextStr.length >= MAX_OUTPUT_LEN)
                    ) {
                        break;
                    }

                    out.push(nextStr);

                    len += nextStr.length;
                    elem = elem.parentNode;
                }

                return out.reverse().join(separator);
            }

            /**
             * Returns a simple, query-selector representation of a DOM element
             * e.g. [HTMLElement] => input#foo.btn[name=baz]
             * @param HTMLElement
             * @returns {string}
             */
            function htmlElementAsString(elem) {
                var out = [],
                    className,
                    classes,
                    key,
                    attr,
                    i;

                if (!elem || !elem.tagName) {
                    return '';
                }

                out.push(elem.tagName.toLowerCase());
                if (elem.id) {
                    out.push('#' + elem.id);
                }

                className = elem.className;
                if (className && isString(className)) {
                    classes = className.split(/\s+/);
                    for (i = 0; i < classes.length; i++) {
                        out.push('.' + classes[i]);
                    }
                }
                var attrWhitelist = ['type', 'name', 'title', 'alt'];
                for (i = 0; i < attrWhitelist.length; i++) {
                    key = attrWhitelist[i];
                    attr = elem.getAttribute(key);
                    if (attr) {
                        out.push('[' + key + '="' + attr + '"]');
                    }
                }
                return out.join('');
            }

            /**
             * Returns true if either a OR b is truthy, but not both
             */
            function isOnlyOneTruthy(a, b) {
                return !!(!!a ^ !!b);
            }

            /**
             * Returns true if both parameters are undefined
             */
            function isBothUndefined(a, b) {
                return isUndefined(a) && isUndefined(b);
            }

            /**
             * Returns true if the two input exception interfaces have the same content
             */
            function isSameException(ex1, ex2) {
                if (isOnlyOneTruthy(ex1, ex2)) return false;

                ex1 = ex1.values[0];
                ex2 = ex2.values[0];

                if (ex1.type !== ex2.type || ex1.value !== ex2.value) return false;

                // in case both stacktraces are undefined, we can't decide so default to false
                if (isBothUndefined(ex1.stacktrace, ex2.stacktrace)) return false;

                return isSameStacktrace(ex1.stacktrace, ex2.stacktrace);
            }

            /**
             * Returns true if the two input stack trace interfaces have the same content
             */
            function isSameStacktrace(stack1, stack2) {
                if (isOnlyOneTruthy(stack1, stack2)) return false;

                var frames1 = stack1.frames;
                var frames2 = stack2.frames;

                // Exit early if stacktrace is malformed
                if (frames1 === undefined || frames2 === undefined) return false;

                // Exit early if frame count differs
                if (frames1.length !== frames2.length) return false;

                // Iterate through every frame; bail out if anything differs
                var a, b;
                for (var i = 0; i < frames1.length; i++) {
                    a = frames1[i];
                    b = frames2[i];
                    if (
                        a.filename !== b.filename ||
                        a.lineno !== b.lineno ||
                        a.colno !== b.colno ||
                        a['function'] !== b['function']
                    )
                        return false;
                }
                return true;
            }

            /**
             * Polyfill a method
             * @param obj object e.g. `document`
             * @param name method name present on object e.g. `addEventListener`
             * @param replacement replacement function
             * @param track {optional} record instrumentation to an array
             */
            function fill(obj, name, replacement, track) {
                if (obj == null) return;
                var orig = obj[name];
                obj[name] = replacement(orig);
                obj[name].__raven__ = true;
                obj[name].__orig__ = orig;
                if (track) {
                    track.push([obj, name, orig]);
                }
            }

            /**
             * Join values in array
             * @param input array of values to be joined together
             * @param delimiter string to be placed in-between values
             * @returns {string}
             */
            function safeJoin(input, delimiter) {
                if (!isArray(input)) return '';

                var output = [];

                for (var i = 0; i < input.length; i++) {
                    try {
                        output.push(String(input[i]));
                    } catch (e) {
                        output.push('[value cannot be serialized]');
                    }
                }

                return output.join(delimiter);
            }

// Default Node.js REPL depth
            var MAX_SERIALIZE_EXCEPTION_DEPTH = 3;
// 50kB, as 100kB is max payload size, so half sounds reasonable
            var MAX_SERIALIZE_EXCEPTION_SIZE = 50 * 1024;
            var MAX_SERIALIZE_KEYS_LENGTH = 40;

            function utf8Length(value) {
                return ~-encodeURI(value).split(/%..|./).length;
            }

            function jsonSize(value) {
                return utf8Length(JSON.stringify(value));
            }

            function serializeValue(value) {
                if (typeof value === 'string') {
                    var maxLength = 40;
                    return truncate(value, maxLength);
                } else if (
                    typeof value === 'number' ||
                    typeof value === 'boolean' ||
                    typeof value === 'undefined'
                ) {
                    return value;
                }

                var type = Object.prototype.toString.call(value);

                // Node.js REPL notation
                if (type === '[object Object]') return '[Object]';
                if (type === '[object Array]') return '[Array]';
                if (type === '[object Function]')
                    return value.name ? '[Function: ' + value.name + ']' : '[Function]';

                return value;
            }

            function serializeObject(value, depth) {
                if (depth === 0) return serializeValue(value);

                if (isPlainObject(value)) {
                    return Object.keys(value).reduce(function(acc, key) {
                        acc[key] = serializeObject(value[key], depth - 1);
                        return acc;
                    }, {});
                } else if (Array.isArray(value)) {
                    return value.map(function(val) {
                        return serializeObject(val, depth - 1);
                    });
                }

                return serializeValue(value);
            }

            function serializeException(ex, depth, maxSize) {
                if (!isPlainObject(ex)) return ex;

                depth = typeof depth !== 'number' ? MAX_SERIALIZE_EXCEPTION_DEPTH : depth;
                maxSize = typeof depth !== 'number' ? MAX_SERIALIZE_EXCEPTION_SIZE : maxSize;

                var serialized = serializeObject(ex, depth);

                if (jsonSize(stringify(serialized)) > maxSize) {
                    return serializeException(ex, depth - 1);
                }

                return serialized;
            }

            function serializeKeysForMessage(keys, maxLength) {
                if (typeof keys === 'number' || typeof keys === 'string') return keys.toString();
                if (!Array.isArray(keys)) return '';

                keys = keys.filter(function(key) {
                    return typeof key === 'string';
                });
                if (keys.length === 0) return '[object has no keys]';

                maxLength = typeof maxLength !== 'number' ? MAX_SERIALIZE_KEYS_LENGTH : maxLength;
                if (keys[0].length >= maxLength) return keys[0];

                for (var usedKeys = keys.length; usedKeys > 0; usedKeys--) {
                    var serialized = keys.slice(0, usedKeys).join(', ');
                    if (serialized.length > maxLength) continue;
                    if (usedKeys === keys.length) return serialized;
                    return serialized + '\u2026';
                }

                return '';
            }

            function sanitize(input, sanitizeKeys) {
                if (!isArray(sanitizeKeys) || (isArray(sanitizeKeys) && sanitizeKeys.length === 0))
                    return input;

                var sanitizeRegExp = joinRegExp(sanitizeKeys);
                var sanitizeMask = '********';
                var safeInput;

                try {
                    safeInput = JSON.parse(stringify(input));
                } catch (o_O) {
                    return input;
                }

                function sanitizeWorker(workerInput) {
                    if (isArray(workerInput)) {
                        return workerInput.map(function(val) {
                            return sanitizeWorker(val);
                        });
                    }

                    if (isPlainObject(workerInput)) {
                        return Object.keys(workerInput).reduce(function(acc, k) {
                            if (sanitizeRegExp.test(k)) {
                                acc[k] = sanitizeMask;
                            } else {
                                acc[k] = sanitizeWorker(workerInput[k]);
                            }
                            return acc;
                        }, {});
                    }

                    return workerInput;
                }

                return sanitizeWorker(safeInput);
            }

            module.exports = {
                isObject: isObject,
                isError: isError,
                isErrorEvent: isErrorEvent,
                isDOMError: isDOMError,
                isDOMException: isDOMException,
                isUndefined: isUndefined,
                isFunction: isFunction,
                isPlainObject: isPlainObject,
                isString: isString,
                isArray: isArray,
                isEmptyObject: isEmptyObject,
                supportsErrorEvent: supportsErrorEvent,
                supportsDOMError: supportsDOMError,
                supportsDOMException: supportsDOMException,
                supportsFetch: supportsFetch,
                supportsReferrerPolicy: supportsReferrerPolicy,
                supportsPromiseRejectionEvent: supportsPromiseRejectionEvent,
                wrappedCallback: wrappedCallback,
                each: each,
                objectMerge: objectMerge,
                truncate: truncate,
                objectFrozen: objectFrozen,
                hasKey: hasKey,
                joinRegExp: joinRegExp,
                urlencode: urlencode,
                uuid4: uuid4,
                htmlTreeAsString: htmlTreeAsString,
                htmlElementAsString: htmlElementAsString,
                isSameException: isSameException,
                isSameStacktrace: isSameStacktrace,
                parseUrl: parseUrl,
                fill: fill,
                safeJoin: safeJoin,
                serializeException: serializeException,
                serializeKeysForMessage: serializeKeysForMessage,
                sanitize: sanitize
            };


            /***/ }),
        /* 133 */
        /***/ (function(module, exports, __webpack_require__) {

            "use strict";


            function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

            /* eslint-disable no-underscore-dangle */

            var logging = __webpack_require__(1)('Event');
            var assign = __webpack_require__(5);
            var intersection = __webpack_require__(230);

            module.exports = function () {
                function Event(type) {
                    var cancelable = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
                    var props = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};

                    _classCallCheck(this, Event);

                    this.type = type;
                    this.cancelable = cancelable;
                    this._defaultPrevented = false;

                    var reservedKeys = intersection(Object.keys(this), Object.keys(props));

                    if (reservedKeys.length > 0) {
                        throw new Error('Cannot used reserved property names: ' + reservedKeys.join(','));
                    }

                    assign(this, props);
                }

                Event.prototype.preventDefault = function preventDefault() {
                    if (this.cancelable) {
                        this._defaultPreve