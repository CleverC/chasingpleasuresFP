    /*! modernizr 3.3.1 (Custom Build) | MIT *
     * http://modernizr.com/download/?-objectfit !*/
    ! function(e, n, t) {
        function r(e, n) {
            return typeof e === n }

        function o() {
            var e, n, t, o, i, s, f;
            for (var a in h)
                if (h.hasOwnProperty(a)) {
                    if (e = [], n = h[a], n.name && (e.push(n.name.toLowerCase()), n.options && n.options.aliases && n.options.aliases.length))
                        for (t = 0; t < n.options.aliases.length; t++) e.push(n.options.aliases[t].toLowerCase());
                    for (o = r(n.fn, "function") ? n.fn() : n.fn, i = 0; i < e.length; i++) s = e[i], f = s.split("."), 1 === f.length ? Modernizr[f[0]] = o : (!Modernizr[f[0]] || Modernizr[f[0]] instanceof Boolean || (Modernizr[f[0]] = new Boolean(Modernizr[f[0]])), Modernizr[f[0]][f[1]] = o), g.push((o ? "" : "no-") + f.join("-")) } }

        function i(e) {
            return e.replace(/([a-z])-([a-z])/g, function(e, n, t) {
                return n + t.toUpperCase() }).replace(/^-/, "") }

        function s(e, n) {
            return !!~("" + e).indexOf(n) }

        function f(e, n) {
            return function() {
                return e.apply(n, arguments) } }

        function a(e, n, t) {
            var o;
            for (var i in e)
                if (e[i] in n) return t === !1 ? e[i] : (o = n[e[i]], r(o, "function") ? f(o, t || n) : o);
            return !1 }

        function u(e) {
            return e.replace(/([A-Z])/g, function(e, n) {
                return "-" + n.toLowerCase() }).replace(/^ms-/, "-ms-") }

        function l() {
            return "function" != typeof n.createElement ? n.createElement(arguments[0]) : b ? n.createElementNS.call(n, "http://www.w3.org/2000/svg", arguments[0]) : n.createElement.apply(n, arguments) }

        function p() {
            var e = n.body;
            return e || (e = l(b ? "svg" : "body"), e.fake = !0), e }

        function d(e, t, r, o) {
            var i, s, f, a, u = "modernizr",
                d = l("div"),
                c = p();
            if (parseInt(r, 10))
                for (; r--;) f = l("div"), f.id = o ? o[r] : u + (r + 1), d.appendChild(f);
            return i = l("style"), i.type = "text/css", i.id = "s" + u, (c.fake ? c : d).appendChild(i), c.appendChild(d), i.styleSheet ? i.styleSheet.cssText = e : i.appendChild(n.createTextNode(e)), d.id = u, c.fake && (c.style.background = "", c.style.overflow = "hidden", a = S.style.overflow, S.style.overflow = "hidden", S.appendChild(c)), s = t(d, e), c.fake ? (c.parentNode.removeChild(c), S.style.overflow = a, S.offsetHeight) : d.parentNode.removeChild(d), !!s }

        function c(n, r) {
            var o = n.length;
            if ("CSS" in e && "supports" in e.CSS) {
                for (; o--;)
                    if (e.CSS.supports(u(n[o]), r)) return !0;
                return !1 }
            if ("CSSSupportsRule" in e) {
                for (var i = []; o--;) i.push("(" + u(n[o]) + ":" + r + ")");
                return i = i.join(" or "), d("@supports (" + i + ") { #modernizr { position: absolute; } }", function(e) {
                    return "absolute" == getComputedStyle(e, null).position }) }
            return t }

        function m(e, n, o, f) {
            function a() { p && (delete z.style, delete z.modElem) }
            if (f = r(f, "undefined") ? !1 : f, !r(o, "undefined")) {
                var u = c(e, o);
                if (!r(u, "undefined")) return u }
            for (var p, d, m, v, h, y = ["modernizr", "tspan"]; !z.style;) p = !0, z.modElem = l(y.shift()), z.style = z.modElem.style;
            for (m = e.length, d = 0; m > d; d++)
                if (v = e[d], h = z.style[v], s(v, "-") && (v = i(v)), z.style[v] !== t) {
                    if (f || r(o, "undefined")) return a(), "pfx" == n ? v : !0;
                    try { z.style[v] = o } catch (g) {}
                    if (z.style[v] != h) return a(), "pfx" == n ? v : !0 }
            return a(), !1 }

        function v(e, n, t, o, i) {
            var s = e.charAt(0).toUpperCase() + e.slice(1),
                f = (e + " " + w.join(s + " ") + s).split(" ");
            return r(n, "string") || r(n, "undefined") ? m(f, n, o, i) : (f = (e + " " + _.join(s + " ") + s).split(" "), a(f, n, t)) }
        var h = [],
            y = { _version: "3.3.1", _config: { classPrefix: "", enableClasses: !0, enableJSClass: !0, usePrefixes: !0 }, _q: [], on: function(e, n) {
                    var t = this;
                    setTimeout(function() { n(t[e]) }, 0) }, addTest: function(e, n, t) { h.push({ name: e, fn: n, options: t }) }, addAsyncTest: function(e) { h.push({ name: null, fn: e }) } },
            Modernizr = function() {};
        Modernizr.prototype = y, Modernizr = new Modernizr;
        var g = [],
            C = "Moz O ms Webkit",
            w = y._config.usePrefixes ? C.split(" ") : [];
        y._cssomPrefixes = w;
        var x = function(n) {
            var r, o = prefixes.length,
                i = e.CSSRule;
            if ("undefined" == typeof i) return t;
            if (!n) return !1;
            if (n = n.replace(/^@/, ""), r = n.replace(/-/g, "_").toUpperCase() + "_RULE", r in i) return "@" + n;
            for (var s = 0; o > s; s++) {
                var f = prefixes[s],
                    a = f.toUpperCase() + "_" + r;
                if (a in i) return "@-" + f.toLowerCase() + "-" + n }
            return !1 };
        y.atRule = x;
        var _ = y._config.usePrefixes ? C.toLowerCase().split(" ") : [];
        y._domPrefixes = _;
        var S = n.documentElement,
            b = "svg" === S.nodeName.toLowerCase(),
            E = { elem: l("modernizr") };
        Modernizr._q.push(function() { delete E.elem });
        var z = { style: E.elem.style };
        Modernizr._q.unshift(function() { delete z.style }), y.testAllProps = v;
        var P = y.prefixed = function(e, n, t) {
            return 0 === e.indexOf("@") ? x(e) : (-1 != e.indexOf("-") && (e = i(e)), n ? v(e, n, t) : v(e, "pfx")) };
        Modernizr.addTest("objectfit", !!P("objectFit"), { aliases: ["object-fit"] }), o(), delete y.addTest, delete y.addAsyncTest;
        for (var T = 0; T < Modernizr._q.length; T++) Modernizr._q[T]();
        e.Modernizr = Modernizr }(window, document); 
