/*
Copyright (c) 2010, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.com/yui/license.html
version: 3.3.0
build: 3167
*/
YUI.add('yui-log', function(Y) {

/**
 * Provides console log capability and exposes a custom event for
 * console implementations.
 * @module yui
 * @submodule yui-log
 */

var INSTANCE = Y,
    LOGEVENT = 'yui:log',
    UNDEFINED = 'undefined',
    LEVELS = { debug: 1,
               info: 1,
               warn: 1,
               error: 1 };

/**
 * If the 'debug' config is true, a 'yui:log' event will be
 * dispatched, which the Console widget and anything else
 * can consume.  If the 'useBrowserConsole' config is true, it will
 * write to the browser console if available.  YUI-specific log
 * messages will only be present in the -debug versions of the
 * JS files.  The build system is supposed to remove log statements
 * from the raw and minified versions of the files.
 *
 * @method log
 * @for YUI
 * @param  {String}  msg  The message to log.
 * @param  {String}  cat  The log category for the message.  Default
 *                        categories are "info", "warn", "error", time".
 *                        Custom categories can be used as well. (opt).
 * @param  {String}  src  The source of the the message (opt).
 * @param  {boolean} silent If true, the log event won't fire.
 * @return {YUI}      YUI instance.
 */
INSTANCE.log = function(msg, cat, src, silent) {
    var bail, excl, incl, m, f,
        Y = INSTANCE,
        c = Y.config,
        publisher = (Y.fire) ? Y : YUI.Env.globalEvents;
    // suppress log message if the config is off or the event stack
    // or the event call stack contains a consumer of the yui:log event
    if (c.debug) {
        // apply source filters
        if (src) {
            excl = c.logExclude;
            incl = c.logInclude;
            if (incl && !(src in incl)) {
                bail = 1;
            } else if (excl && (src in excl)) {
                bail = 1;
            }
        }
        if (!bail) {
            if (c.useBrowserConsole) {
                m = (src) ? src + ': ' + msg : msg;
                if (Y.Lang.isFunction(c.logFn)) {
                    c.logFn.call(Y, msg, cat, src);
                } else if (typeof console != UNDEFINED && console.log) {
                    f = (cat && console[cat] && (cat in LEVELS)) ? cat : 'log';
                    console[f](m);
                } else if (typeof opera != UNDEFINED) {
                    opera.postError(m);
                }
            }

            if (publisher && !silent) {

                if (publisher == Y && (!publisher.getEvent(LOGEVENT))) {
                    publisher.publish(LOGEVENT, {
                        broadcast: 2
                    });
                }

                publisher.fire(LOGEVENT, {
                    msg: msg,
                    cat: cat,
                    src: src
                });
            }
        }
    }

    return Y;
};

/**
 * Write a system message.  This message will be preserved in the
 * minified and raw versions of the YUI files, unlike log statements.
 * @method message
 * @for YUI
 * @param  {String}  msg  The message to log.
 * @param  {String}  cat  The log category for the message.  Default
 *                        categories are "info", "warn", "error", time".
 *                        Custom categories can be used as well. (opt).
 * @param  {String}  src  The source of the the message (opt).
 * @param  {boolean} silent If true, the log event won't fire.
 * @return {YUI}      YUI instance.
 */
INSTANCE.message = function() {
    return INSTANCE.log.apply(INSTANCE, arguments);
};


}, '3.3.0' ,{requires:['yui-base']});
