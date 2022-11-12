function click_giohang() {
    $(".giohang").click(function () {
        window.location.href = "gio-hang.html";
    });
}

function menu_scroll1() {
    $(window).scroll(function () {
        $(this).scrollTop() > 500
            ? $(".box_tuvan_detail").addClass("fixed1")
            : $(".box_tuvan_detail").removeClass("fixed1");
    });
}

function menu_scroll() {
    $(window).scroll(function () {
        $(this).scrollTop() > 100
            ? $("#header1").addClass("fixed")
            : $("#header1").removeClass("fixed");
    });
}

function menu() {
    ddsmoothmenu.init({
        mainmenuid: "smoothmenu1",
        orientation: "v",
        classname: "ddsmoothmenu",
        contentsource: "markup",
    });
}

function menu_left() {
    $(".left_menu_home .menu_li_left").each(function (e, t) {
        var n = $(this).children(".sub-list-menu").height();
        $(this).children(".sub-list-menu").css({
            bottom: -n,
        }),
            $(this).hover(
                function () {
                    $(this).children(".sub-list-menu").fadeIn("500");
                },
                function () {
                    $(".sub-list-menu").fadeOut();
                }
            );
    }),
        $(".wrapper_search .form-text").width(
            $(".pager_wrapper").width() - $(".wrapper_search select").width()
        ),
        $('.left_menu_home .menu_li_left:not(".dropdown")').each(function (
            e,
            t
        ) {
            ++e >= 11 && $(this).hide();
        }),
        $(".left_menu_home .dropdown").toggle(
            function () {
                $(".left_menu_home .menu_li_left").show() &&
                    ($(this).show(), $(".dropdown a img").addClass("img_a_1"));
            },
            function () {
                var e = $(".left_menu_home .menu_li_left").size();
                $('.left_menu_home .menu_li_left:not(".dropdown")')
                    .slice(10, e)
                    .hide(),
                    $(".dropdown a img").removeClass("img_a_1");
            }
        );
}

function slider_pr_home() {
    $(".product_slider_wp").bxSlider({
        auto: !0,
        slideWidth: 109,
        minSlides: 4,
        maxSlides: 5,
        moveSlides: 4,
        slideMargin: 12,
        pager: !1,
        controls: !0,
    });
}

function remove_menu() {
    $(window).width() < 1170 ? $(".sub_menu").remove() : $(".menu_ul").remove();
}

function slide_comment() {
    $("#slider_comment").bxSlider({
        auto: !0,
        mode: "fade",
        minSlides: 1,
        pause: 1e4,
        maxSlides: 5,
        moveSlides: 1,
        pager: !0,
        controls: !1,
    });
}

function slide_banner() {
    $(".right_conent1_1").bxSlider({
        auto: !0,
        slideWidth: 603,
        mode: "fade",
        minSlides: 1,
        pause: 1e4,
        maxSlides: 5,
        moveSlides: 1,
        pager: !0,
        controls: !1,
    });
}

function slide_news() {
    $(".list_banner_news").bxSlider({
        auto: !0,
        slideWidth: 853,
        mode: "fade",
        minSlides: 1,
        pause: 1e4,
        maxSlides: 5,
        moveSlides: 1,
        pager: !0,
        controls: !1,
    });
}
!(function (e, t) {
    "object" == typeof module && "object" == typeof module.exports
        ? (module.exports = e.document
              ? t(e, !0)
              : function (e) {
                    if (!e.document)
                        throw new Error(
                            "jQuery requires a window with a document"
                        );
                    return t(e);
                })
        : t(e);
})("undefined" != typeof window ? window : this, function (e, t) {
    var n = [],
        i = e.document,
        o = n.slice,
        r = n.concat,
        a = n.push,
        s = n.indexOf,
        l = {},
        c = l.toString,
        u = l.hasOwnProperty,
        d = {},
        f = "1.12.4",
        p = function (e, t) {
            return new p.fn.init(e, t);
        },
        h = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
        g = /^-ms-/,
        m = /-([\da-z])/gi,
        v = function (e, t) {
            return t.toUpperCase();
        };

    function y(e) {
        var t = !!e && "length" in e && e.length,
            n = p.type(e);
        return (
            "function" !== n &&
            !p.isWindow(e) &&
            ("array" === n ||
                0 === t ||
                ("number" == typeof t && t > 0 && t - 1 in e))
        );
    }
    (p.fn = p.prototype =
        {
            jquery: f,
            constructor: p,
            selector: "",
            length: 0,
            toArray: function () {
                return o.call(this);
            },
            get: function (e) {
                return null != e
                    ? 0 > e
                        ? this[e + this.length]
                        : this[e]
                    : o.call(this);
            },
            pushStack: function (e) {
                var t = p.merge(this.constructor(), e);
                return (t.prevObject = this), (t.context = this.context), t;
            },
            each: function (e) {
                return p.each(this, e);
            },
            map: function (e) {
                return this.pushStack(
                    p.map(this, function (t, n) {
                        return e.call(t, n, t);
                    })
                );
            },
            slice: function () {
                return this.pushStack(o.apply(this, arguments));
            },
            first: function () {
                return this.eq(0);
            },
            last: function () {
                return this.eq(-1);
            },
            eq: function (e) {
                var t = this.length,
                    n = +e + (0 > e ? t : 0);
                return this.pushStack(n >= 0 && t > n ? [this[n]] : []);
            },
            end: function () {
                return this.prevObject || this.constructor();
            },
            push: a,
            sort: n.sort,
            splice: n.splice,
        }),
        (p.extend = p.fn.extend =
            function () {
                var e,
                    t,
                    n,
                    i,
                    o,
                    r,
                    a = arguments[0] || {},
                    s = 1,
                    l = arguments.length,
                    c = !1;
                for (
                    "boolean" == typeof a &&
                        ((c = a), (a = arguments[s] || {}), s++),
                        "object" == typeof a || p.isFunction(a) || (a = {}),
                        s === l && ((a = this), s--);
                    l > s;
                    s++
                )
                    if (null != (o = arguments[s]))
                        for (i in o)
                            (e = a[i]),
                                a !== (n = o[i]) &&
                                    (c &&
                                    n &&
                                    (p.isPlainObject(n) || (t = p.isArray(n)))
                                        ? (t
                                              ? ((t = !1),
                                                (r =
                                                    e && p.isArray(e) ? e : []))
                                              : (r =
                                                    e && p.isPlainObject(e)
                                                        ? e
                                                        : {}),
                                          (a[i] = p.extend(c, r, n)))
                                        : void 0 !== n && (a[i] = n));
                return a;
            }),
        p.extend({
            expando: "jQuery" + (f + Math.random()).replace(/\D/g, ""),
            isReady: !0,
            error: function (e) {
                throw new Error(e);
            },
            noop: function () {},
            isFunction: function (e) {
                return "function" === p.type(e);
            },
            isArray:
                Array.isArray ||
                function (e) {
                    return "array" === p.type(e);
                },
            isWindow: function (e) {
                return null != e && e == e.window;
            },
            isNumeric: function (e) {
                var t = e && e.toString();
                return !p.isArray(e) && t - parseFloat(t) + 1 >= 0;
            },
            isEmptyObject: function (e) {
                var t;
                for (t in e) return !1;
                return !0;
            },
            isPlainObject: function (e) {
                var t;
                if (!e || "object" !== p.type(e) || e.nodeType || p.isWindow(e))
                    return !1;
                try {
                    if (
                        e.constructor &&
                        !u.call(e, "constructor") &&
                        !u.call(e.constructor.prototype, "isPrototypeOf")
                    )
                        return !1;
                } catch (e) {
                    return !1;
                }
                if (!d.ownFirst) for (t in e) return u.call(e, t);
                for (t in e);
                return void 0 === t || u.call(e, t);
            },
            type: function (e) {
                return null == e
                    ? e + ""
                    : "object" == typeof e || "function" == typeof e
                    ? l[c.call(e)] || "object"
                    : typeof e;
            },
            globalEval: function (t) {
                t &&
                    p.trim(t) &&
                    (
                        e.execScript ||
                        function (t) {
                            e.eval.call(e, t);
                        }
                    )(t);
            },
            camelCase: function (e) {
                return e.replace(g, "ms-").replace(m, v);
            },
            nodeName: function (e, t) {
                return (
                    e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
                );
            },
            each: function (e, t) {
                var n,
                    i = 0;
                if (y(e))
                    for (
                        n = e.length;
                        n > i && !1 !== t.call(e[i], i, e[i]);
                        i++
                    );
                else for (i in e) if (!1 === t.call(e[i], i, e[i])) break;
                return e;
            },
            trim: function (e) {
                return null == e ? "" : (e + "").replace(h, "");
            },
            makeArray: function (e, t) {
                var n = t || [];
                return (
                    null != e &&
                        (y(Object(e))
                            ? p.merge(n, "string" == typeof e ? [e] : e)
                            : a.call(n, e)),
                    n
                );
            },
            inArray: function (e, t, n) {
                var i;
                if (t) {
                    if (s) return s.call(t, e, n);
                    for (
                        i = t.length,
                            n = n ? (0 > n ? Math.max(0, i + n) : n) : 0;
                        i > n;
                        n++
                    )
                        if (n in t && t[n] === e) return n;
                }
                return -1;
            },
            merge: function (e, t) {
                for (var n = +t.length, i = 0, o = e.length; n > i; )
                    e[o++] = t[i++];
                if (n != n) for (; void 0 !== t[i]; ) e[o++] = t[i++];
                return (e.length = o), e;
            },
            grep: function (e, t, n) {
                for (var i = [], o = 0, r = e.length, a = !n; r > o; o++)
                    !t(e[o], o) !== a && i.push(e[o]);
                return i;
            },
            map: function (e, t, n) {
                var i,
                    o,
                    a = 0,
                    s = [];
                if (y(e))
                    for (i = e.length; i > a; a++)
                        null != (o = t(e[a], a, n)) && s.push(o);
                else for (a in e) null != (o = t(e[a], a, n)) && s.push(o);
                return r.apply([], s);
            },
            guid: 1,
            proxy: function (e, t) {
                var n, i, r;
                return (
                    "string" == typeof t && ((r = e[t]), (t = e), (e = r)),
                    p.isFunction(e)
                        ? ((n = o.call(arguments, 2)),
                          ((i = function () {
                              return e.apply(
                                  t || this,
                                  n.concat(o.call(arguments))
                              );
                          }).guid = e.guid =
                              e.guid || p.guid++),
                          i)
                        : void 0
                );
            },
            now: function () {
                return +new Date();
            },
            support: d,
        }),
        "function" == typeof Symbol &&
            (p.fn[Symbol.iterator] = n[Symbol.iterator]),
        p.each(
            "Boolean Number String Function Array Date RegExp Object Error Symbol".split(
                " "
            ),
            function (e, t) {
                l["[object " + t + "]"] = t.toLowerCase();
            }
        );
    var b = (function (e) {
        var t,
            n,
            i,
            o,
            r,
            a,
            s,
            l,
            c,
            u,
            d,
            f,
            p,
            h,
            g,
            m,
            v,
            y,
            b,
            x = "sizzle" + 1 * new Date(),
            w = e.document,
            S = 0,
            C = 0,
            $ = re(),
            _ = re(),
            T = re(),
            k = function (e, t) {
                return e === t && (d = !0), 0;
            },
            E = 1 << 31,
            A = {}.hasOwnProperty,
            O = [],
            D = O.pop,
            M = O.push,
            L = O.push,
            N = O.slice,
            B = function (e, t) {
                for (var n = 0, i = e.length; i > n; n++)
                    if (e[n] === t) return n;
                return -1;
            },
            I =
                "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            P = "[\\x20\\t\\r\\n\\f]",
            R = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
            H =
                "\\[" +
                P +
                "*(" +
                R +
                ")(?:" +
                P +
                "*([*^$|!~]?=)" +
                P +
                "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" +
                R +
                "))|)" +
                P +
                "*\\]",
            j =
                ":(" +
                R +
                ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" +
                H +
                ")*)|.*)\\)|)",
            q = new RegExp(P + "+", "g"),
            z = new RegExp(
                "^" + P + "+|((?:^|[^\\\\])(?:\\\\.)*)" + P + "+$",
                "g"
            ),
            W = new RegExp("^" + P + "*," + P + "*"),
            F = new RegExp("^" + P + "*([>+~]|" + P + ")" + P + "*"),
            X = new RegExp("=" + P + "*([^\\]'\"]*?)" + P + "*\\]", "g"),
            V = new RegExp(j),
            Y = new RegExp("^" + R + "$"),
            U = {
                ID: new RegExp("^#(" + R + ")"),
                CLASS: new RegExp("^\\.(" + R + ")"),
                TAG: new RegExp("^(" + R + "|[*])"),
                ATTR: new RegExp("^" + H),
                PSEUDO: new RegExp("^" + j),
                CHILD: new RegExp(
                    "^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" +
                        P +
                        "*(even|odd|(([+-]|)(\\d*)n|)" +
                        P +
                        "*(?:([+-]|)" +
                        P +
                        "*(\\d+)|))" +
                        P +
                        "*\\)|)",
                    "i"
                ),
                bool: new RegExp("^(?:" + I + ")$", "i"),
                needsContext: new RegExp(
                    "^" +
                        P +
                        "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" +
                        P +
                        "*((?:-\\d)?\\d*)" +
                        P +
                        "*\\)|)(?=[^-]|$)",
                    "i"
                ),
            },
            G = /^(?:input|select|textarea|button)$/i,
            Z = /^h\d$/i,
            K = /^[^{]+\{\s*\[native \w/,
            Q = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
            J = /[+~]/,
            ee = /'|\\/g,
            te = new RegExp(
                "\\\\([\\da-f]{1,6}" + P + "?|(" + P + ")|.)",
                "ig"
            ),
            ne = function (e, t, n) {
                var i = "0x" + t - 65536;
                return i != i || n
                    ? t
                    : 0 > i
                    ? String.fromCharCode(i + 65536)
                    : String.fromCharCode(
                          (i >> 10) | 55296,
                          (1023 & i) | 56320
                      );
            },
            ie = function () {
                f();
            };
        try {
            L.apply((O = N.call(w.childNodes)), w.childNodes),
                O[w.childNodes.length].nodeType;
        } catch (e) {
            L = {
                apply: O.length
                    ? function (e, t) {
                          M.apply(e, N.call(t));
                      }
                    : function (e, t) {
                          for (var n = e.length, i = 0; (e[n++] = t[i++]); );
                          e.length = n - 1;
                      },
            };
        }

        function oe(e, t, i, o) {
            var r,
                s,
                c,
                u,
                d,
                h,
                v,
                y,
                S = t && t.ownerDocument,
                C = t ? t.nodeType : 9;
            if (
                ((i = i || []),
                "string" != typeof e || !e || (1 !== C && 9 !== C && 11 !== C))
            )
                return i;
            if (
                !o &&
                ((t ? t.ownerDocument || t : w) !== p && f(t), (t = t || p), g)
            ) {
                if (11 !== C && (h = Q.exec(e)))
                    if ((r = h[1])) {
                        if (9 === C) {
                            if (!(c = t.getElementById(r))) return i;
                            if (c.id === r) return i.push(c), i;
                        } else if (
                            S &&
                            (c = S.getElementById(r)) &&
                            b(t, c) &&
                            c.id === r
                        )
                            return i.push(c), i;
                    } else {
                        if (h[2])
                            return L.apply(i, t.getElementsByTagName(e)), i;
                        if (
                            (r = h[3]) &&
                            n.getElementsByClassName &&
                            t.getElementsByClassName
                        )
                            return L.apply(i, t.getElementsByClassName(r)), i;
                    }
                if (n.qsa && !T[e + " "] && (!m || !m.test(e))) {
                    if (1 !== C) (S = t), (y = e);
                    else if ("object" !== t.nodeName.toLowerCase()) {
                        for (
                            (u = t.getAttribute("id"))
                                ? (u = u.replace(ee, "\\$&"))
                                : t.setAttribute("id", (u = x)),
                                s = (v = a(e)).length,
                                d = Y.test(u) ? "#" + u : "[id='" + u + "']";
                            s--;

                        )
                            v[s] = d + " " + ge(v[s]);
                        (y = v.join(",")),
                            (S = (J.test(e) && pe(t.parentNode)) || t);
                    }
                    if (y)
                        try {
                            return L.apply(i, S.querySelectorAll(y)), i;
                        } catch (e) {
                        } finally {
                            u === x && t.removeAttribute("id");
                        }
                }
            }
            return l(e.replace(z, "$1"), t, i, o);
        }

        function re() {
            var e = [];
            return function t(n, o) {
                return (
                    e.push(n + " ") > i.cacheLength && delete t[e.shift()],
                    (t[n + " "] = o)
                );
            };
        }

        function ae(e) {
            return (e[x] = !0), e;
        }

        function se(e) {
            var t = p.createElement("div");
            try {
                return !!e(t);
            } catch (e) {
                return !1;
            } finally {
                t.parentNode && t.parentNode.removeChild(t), (t = null);
            }
        }

        function le(e, t) {
            for (var n = e.split("|"), o = n.length; o--; )
                i.attrHandle[n[o]] = t;
        }

        function ce(e, t) {
            var n = t && e,
                i =
                    n &&
                    1 === e.nodeType &&
                    1 === t.nodeType &&
                    (~t.sourceIndex || E) - (~e.sourceIndex || E);
            if (i) return i;
            if (n) for (; (n = n.nextSibling); ) if (n === t) return -1;
            return e ? 1 : -1;
        }

        function ue(e) {
            return function (t) {
                return "input" === t.nodeName.toLowerCase() && t.type === e;
            };
        }

        function de(e) {
            return function (t) {
                var n = t.nodeName.toLowerCase();
                return ("input" === n || "button" === n) && t.type === e;
            };
        }

        function fe(e) {
            return ae(function (t) {
                return (
                    (t = +t),
                    ae(function (n, i) {
                        for (var o, r = e([], n.length, t), a = r.length; a--; )
                            n[(o = r[a])] && (n[o] = !(i[o] = n[o]));
                    })
                );
            });
        }

        function pe(e) {
            return e && void 0 !== e.getElementsByTagName && e;
        }
        for (t in ((n = oe.support = {}),
        (r = oe.isXML =
            function (e) {
                var t = e && (e.ownerDocument || e).documentElement;
                return !!t && "HTML" !== t.nodeName;
            }),
        (f = oe.setDocument =
            function (e) {
                var t,
                    o,
                    a = e ? e.ownerDocument || e : w;
                return a !== p && 9 === a.nodeType && a.documentElement
                    ? ((h = (p = a).documentElement),
                      (g = !r(p)),
                      (o = p.defaultView) &&
                          o.top !== o &&
                          (o.addEventListener
                              ? o.addEventListener("unload", ie, !1)
                              : o.attachEvent && o.attachEvent("onunload", ie)),
                      (n.attributes = se(function (e) {
                          return (
                              (e.className = "i"), !e.getAttribute("className")
                          );
                      })),
                      (n.getElementsByTagName = se(function (e) {
                          return (
                              e.appendChild(p.createComment("")),
                              !e.getElementsByTagName("*").length
                          );
                      })),
                      (n.getElementsByClassName = K.test(
                          p.getElementsByClassName
                      )),
                      (n.getById = se(function (e) {
                          return (
                              (h.appendChild(e).id = x),
                              !p.getElementsByName ||
                                  !p.getElementsByName(x).length
                          );
                      })),
                      n.getById
                          ? ((i.find.ID = function (e, t) {
                                if (void 0 !== t.getElementById && g) {
                                    var n = t.getElementById(e);
                                    return n ? [n] : [];
                                }
                            }),
                            (i.filter.ID = function (e) {
                                var t = e.replace(te, ne);
                                return function (e) {
                                    return e.getAttribute("id") === t;
                                };
                            }))
                          : (delete i.find.ID,
                            (i.filter.ID = function (e) {
                                var t = e.replace(te, ne);
                                return function (e) {
                                    var n =
                                        void 0 !== e.getAttributeNode &&
                                        e.getAttributeNode("id");
                                    return n && n.value === t;
                                };
                            })),
                      (i.find.TAG = n.getElementsByTagName
                          ? function (e, t) {
                                return void 0 !== t.getElementsByTagName
                                    ? t.getElementsByTagName(e)
                                    : n.qsa
                                    ? t.querySelectorAll(e)
                                    : void 0;
                            }
                          : function (e, t) {
                                var n,
                                    i = [],
                                    o = 0,
                                    r = t.getElementsByTagName(e);
                                if ("*" === e) {
                                    for (; (n = r[o++]); )
                                        1 === n.nodeType && i.push(n);
                                    return i;
                                }
                                return r;
                            }),
                      (i.find.CLASS =
                          n.getElementsByClassName &&
                          function (e, t) {
                              return void 0 !== t.getElementsByClassName && g
                                  ? t.getElementsByClassName(e)
                                  : void 0;
                          }),
                      (v = []),
                      (m = []),
                      (n.qsa = K.test(p.querySelectorAll)) &&
                          (se(function (e) {
                              (h.appendChild(e).innerHTML =
                                  "<a id='" +
                                  x +
                                  "'></a><select id='" +
                                  x +
                                  "-\r\\' msallowcapture=''><option selected=''></option></select>"),
                                  e.querySelectorAll("[msallowcapture^='']")
                                      .length &&
                                      m.push("[*^$]=" + P + "*(?:''|\"\")"),
                                  e.querySelectorAll("[selected]").length ||
                                      m.push(
                                          "\\[" + P + "*(?:value|" + I + ")"
                                      ),
                                  e.querySelectorAll("[id~=" + x + "-]")
                                      .length || m.push("~="),
                                  e.querySelectorAll(":checked").length ||
                                      m.push(":checked"),
                                  e.querySelectorAll("a#" + x + "+*").length ||
                                      m.push(".#.+[+~]");
                          }),
                          se(function (e) {
                              var t = p.createElement("input");
                              t.setAttribute("type", "hidden"),
                                  e.appendChild(t).setAttribute("name", "D"),
                                  e.querySelectorAll("[name=d]").length &&
                                      m.push("name" + P + "*[*^$|!~]?="),
                                  e.querySelectorAll(":enabled").length ||
                                      m.push(":enabled", ":disabled"),
                                  e.querySelectorAll("*,:x"),
                                  m.push(",.*:");
                          })),
                      (n.matchesSelector = K.test(
                          (y =
                              h.matches ||
                              h.webkitMatchesSelector ||
                              h.mozMatchesSelector ||
                              h.oMatchesSelector ||
                              h.msMatchesSelector)
                      )) &&
                          se(function (e) {
                              (n.disconnectedMatch = y.call(e, "div")),
                                  y.call(e, "[s!='']:x"),
                                  v.push("!=", j);
                          }),
                      (m = m.length && new RegExp(m.join("|"))),
                      (v = v.length && new RegExp(v.join("|"))),
                      (t = K.test(h.compareDocumentPosition)),
                      (b =
                          t || K.test(h.contains)
                              ? function (e, t) {
                                    var n =
                                            9 === e.nodeType
                                                ? e.documentElement
                                                : e,
                                        i = t && t.parentNode;
                                    return (
                                        e === i ||
                                        !(
                                            !i ||
                                            1 !== i.nodeType ||
                                            !(n.contains
                                                ? n.contains(i)
                                                : e.compareDocumentPosition &&
                                                  16 &
                                                      e.compareDocumentPosition(
                                                          i
                                                      ))
                                        )
                                    );
                                }
                              : function (e, t) {
                                    if (t)
                                        for (; (t = t.parentNode); )
                                            if (t === e) return !0;
                                    return !1;
                                }),
                      (k = t
                          ? function (e, t) {
                                if (e === t) return (d = !0), 0;
                                var i =
                                    !e.compareDocumentPosition -
                                    !t.compareDocumentPosition;
                                return (
                                    i ||
                                    (1 &
                                        (i =
                                            (e.ownerDocument || e) ===
                                            (t.ownerDocument || t)
                                                ? e.compareDocumentPosition(t)
                                                : 1) ||
                                    (!n.sortDetached &&
                                        t.compareDocumentPosition(e) === i)
                                        ? e === p ||
                                          (e.ownerDocument === w && b(w, e))
                                            ? -1
                                            : t === p ||
                                              (t.ownerDocument === w && b(w, t))
                                            ? 1
                                            : u
                                            ? B(u, e) - B(u, t)
                                            : 0
                                        : 4 & i
                                        ? -1
                                        : 1)
                                );
                            }
                          : function (e, t) {
                                if (e === t) return (d = !0), 0;
                                var n,
                                    i = 0,
                                    o = e.parentNode,
                                    r = t.parentNode,
                                    a = [e],
                                    s = [t];
                                if (!o || !r)
                                    return e === p
                                        ? -1
                                        : t === p
                                        ? 1
                                        : o
                                        ? -1
                                        : r
                                        ? 1
                                        : u
                                        ? B(u, e) - B(u, t)
                                        : 0;
                                if (o === r) return ce(e, t);
                                for (n = e; (n = n.parentNode); ) a.unshift(n);
                                for (n = t; (n = n.parentNode); ) s.unshift(n);
                                for (; a[i] === s[i]; ) i++;
                                return i
                                    ? ce(a[i], s[i])
                                    : a[i] === w
                                    ? -1
                                    : s[i] === w
                                    ? 1
                                    : 0;
                            }),
                      p)
                    : p;
            }),
        (oe.matches = function (e, t) {
            return oe(e, null, null, t);
        }),
        (oe.matchesSelector = function (e, t) {
            if (
                ((e.ownerDocument || e) !== p && f(e),
                (t = t.replace(X, "='$1']")),
                n.matchesSelector &&
                    g &&
                    !T[t + " "] &&
                    (!v || !v.test(t)) &&
                    (!m || !m.test(t)))
            )
                try {
                    var i = y.call(e, t);
                    if (
                        i ||
                        n.disconnectedMatch ||
                        (e.document && 11 !== e.document.nodeType)
                    )
                        return i;
                } catch (e) {}
            return oe(t, p, null, [e]).length > 0;
        }),
        (oe.contains = function (e, t) {
            return (e.ownerDocument || e) !== p && f(e), b(e, t);
        }),
        (oe.attr = function (e, t) {
            (e.ownerDocument || e) !== p && f(e);
            var o = i.attrHandle[t.toLowerCase()],
                r =
                    o && A.call(i.attrHandle, t.toLowerCase())
                        ? o(e, t, !g)
                        : void 0;
            return void 0 !== r
                ? r
                : n.attributes || !g
                ? e.getAttribute(t)
                : (r = e.getAttributeNode(t)) && r.specified
                ? r.value
                : null;
        }),
        (oe.error = function (e) {
            throw new Error("Syntax error, unrecognized expression: " + e);
        }),
        (oe.uniqueSort = function (e) {
            var t,
                i = [],
                o = 0,
                r = 0;
            if (
                ((d = !n.detectDuplicates),
                (u = !n.sortStable && e.slice(0)),
                e.sort(k),
                d)
            ) {
                for (; (t = e[r++]); ) t === e[r] && (o = i.push(r));
                for (; o--; ) e.splice(i[o], 1);
            }
            return (u = null), e;
        }),
        (o = oe.getText =
            function (e) {
                var t,
                    n = "",
                    i = 0,
                    r = e.nodeType;
                if (r) {
                    if (1 === r || 9 === r || 11 === r) {
                        if ("string" == typeof e.textContent)
                            return e.textContent;
                        for (e = e.firstChild; e; e = e.nextSibling) n += o(e);
                    } else if (3 === r || 4 === r) return e.nodeValue;
                } else for (; (t = e[i++]); ) n += o(t);
                return n;
            }),
        ((i = oe.selectors =
            {
                cacheLength: 50,
                createPseudo: ae,
                match: U,
                attrHandle: {},
                find: {},
                relative: {
                    ">": {
                        dir: "parentNode",
                        first: !0,
                    },
                    " ": {
                        dir: "parentNode",
                    },
                    "+": {
                        dir: "previousSibling",
                        first: !0,
                    },
                    "~": {
                        dir: "previousSibling",
                    },
                },
                preFilter: {
                    ATTR: function (e) {
                        return (
                            (e[1] = e[1].replace(te, ne)),
                            (e[3] = (e[3] || e[4] || e[5] || "").replace(
                                te,
                                ne
                            )),
                            "~=" === e[2] && (e[3] = " " + e[3] + " "),
                            e.slice(0, 4)
                        );
                    },
                    CHILD: function (e) {
                        return (
                            (e[1] = e[1].toLowerCase()),
                            "nth" === e[1].slice(0, 3)
                                ? (e[3] || oe.error(e[0]),
                                  (e[4] = +(e[4]
                                      ? e[5] + (e[6] || 1)
                                      : 2 *
                                        ("even" === e[3] || "odd" === e[3]))),
                                  (e[5] = +(e[7] + e[8] || "odd" === e[3])))
                                : e[3] && oe.error(e[0]),
                            e
                        );
                    },
                    PSEUDO: function (e) {
                        var t,
                            n = !e[6] && e[2];
                        return U.CHILD.test(e[0])
                            ? null
                            : (e[3]
                                  ? (e[2] = e[4] || e[5] || "")
                                  : n &&
                                    V.test(n) &&
                                    (t = a(n, !0)) &&
                                    (t =
                                        n.indexOf(")", n.length - t) -
                                        n.length) &&
                                    ((e[0] = e[0].slice(0, t)),
                                    (e[2] = n.slice(0, t))),
                              e.slice(0, 3));
                    },
                },
                filter: {
                    TAG: function (e) {
                        var t = e.replace(te, ne).toLowerCase();
                        return "*" === e
                            ? function () {
                                  return !0;
                              }
                            : function (e) {
                                  return (
                                      e.nodeName &&
                                      e.nodeName.toLowerCase() === t
                                  );
                              };
                    },
                    CLASS: function (e) {
                        var t = $[e + " "];
                        return (
                            t ||
                            ((t = new RegExp(
                                "(^|" + P + ")" + e + "(" + P + "|$)"
                            )) &&
                                $(e, function (e) {
                                    return t.test(
                                        ("string" == typeof e.className &&
                                            e.className) ||
                                            (void 0 !== e.getAttribute &&
                                                e.getAttribute("class")) ||
                                            ""
                                    );
                                }))
                        );
                    },
                    ATTR: function (e, t, n) {
                        return function (i) {
                            var o = oe.attr(i, e);
                            return null == o
                                ? "!=" === t
                                : !t ||
                                      ((o += ""),
                                      "=" === t
                                          ? o === n
                                          : "!=" === t
                                          ? o !== n
                                          : "^=" === t
                                          ? n && 0 === o.indexOf(n)
                                          : "*=" === t
                                          ? n && o.indexOf(n) > -1
                                          : "$=" === t
                                          ? n && o.slice(-n.length) === n
                                          : "~=" === t
                                          ? (
                                                " " +
                                                o.replace(q, " ") +
                                                " "
                                            ).indexOf(n) > -1
                                          : "|=" === t &&
                                            (o === n ||
                                                o.slice(0, n.length + 1) ===
                                                    n + "-"));
                        };
                    },
                    CHILD: function (e, t, n, i, o) {
                        var r = "nth" !== e.slice(0, 3),
                            a = "last" !== e.slice(-4),
                            s = "of-type" === t;
                        return 1 === i && 0 === o
                            ? function (e) {
                                  return !!e.parentNode;
                              }
                            : function (t, n, l) {
                                  var c,
                                      u,
                                      d,
                                      f,
                                      p,
                                      h,
                                      g =
                                          r !== a
                                              ? "nextSibling"
                                              : "previousSibling",
                                      m = t.parentNode,
                                      v = s && t.nodeName.toLowerCase(),
                                      y = !l && !s,
                                      b = !1;
                                  if (m) {
                                      if (r) {
                                          for (; g; ) {
                                              for (f = t; (f = f[g]); )
                                                  if (
                                                      s
                                                          ? f.nodeName.toLowerCase() ===
                                                            v
                                                          : 1 === f.nodeType
                                                  )
                                                      return !1;
                                              h = g =
                                                  "only" === e &&
                                                  !h &&
                                                  "nextSibling";
                                          }
                                          return !0;
                                      }
                                      if (
                                          ((h = [
                                              a ? m.firstChild : m.lastChild,
                                          ]),
                                          a && y)
                                      ) {
                                          for (
                                              b =
                                                  (p =
                                                      (c =
                                                          (u =
                                                              (d =
                                                                  (f = m)[x] ||
                                                                  (f[x] = {}))[
                                                                  f.uniqueID
                                                              ] ||
                                                              (d[f.uniqueID] =
                                                                  {}))[e] ||
                                                          [])[0] === S &&
                                                      c[1]) && c[2],
                                                  f = p && m.childNodes[p];
                                              (f =
                                                  (++p && f && f[g]) ||
                                                  (b = p = 0) ||
                                                  h.pop());

                                          )
                                              if (
                                                  1 === f.nodeType &&
                                                  ++b &&
                                                  f === t
                                              ) {
                                                  u[e] = [S, p, b];
                                                  break;
                                              }
                                      } else if (
                                          (y &&
                                              (b = p =
                                                  (c =
                                                      (u =
                                                          (d =
                                                              (f = t)[x] ||
                                                              (f[x] = {}))[
                                                              f.uniqueID
                                                          ] ||
                                                          (d[f.uniqueID] = {}))[
                                                          e
                                                      ] || [])[0] === S &&
                                                  c[1]),
                                          !1 === b)
                                      )
                                          for (
                                              ;
                                              (f =
                                                  (++p && f && f[g]) ||
                                                  (b = p = 0) ||
                                                  h.pop()) &&
                                              ((s
                                                  ? f.nodeName.toLowerCase() !==
                                                    v
                                                  : 1 !== f.nodeType) ||
                                                  !++b ||
                                                  (y &&
                                                      ((u =
                                                          (d =
                                                              f[x] ||
                                                              (f[x] = {}))[
                                                              f.uniqueID
                                                          ] ||
                                                          (d[f.uniqueID] = {}))[
                                                          e
                                                      ] = [S, b]),
                                                  f !== t));

                                          );
                                      return (
                                          (b -= o) === i ||
                                          (b % i == 0 && b / i >= 0)
                                      );
                                  }
                              };
                    },
                    PSEUDO: function (e, t) {
                        var n,
                            o =
                                i.pseudos[e] ||
                                i.setFilters[e.toLowerCase()] ||
                                oe.error("unsupported pseudo: " + e);
                        return o[x]
                            ? o(t)
                            : o.length > 1
                            ? ((n = [e, e, "", t]),
                              i.setFilters.hasOwnProperty(e.toLowerCase())
                                  ? ae(function (e, n) {
                                        for (
                                            var i, r = o(e, t), a = r.length;
                                            a--;

                                        )
                                            e[(i = B(e, r[a]))] = !(n[i] =
                                                r[a]);
                                    })
                                  : function (e) {
                                        return o(e, 0, n);
                                    })
                            : o;
                    },
                },
                pseudos: {
                    not: ae(function (e) {
                        var t = [],
                            n = [],
                            i = s(e.replace(z, "$1"));
                        return i[x]
                            ? ae(function (e, t, n, o) {
                                  for (
                                      var r,
                                          a = i(e, null, o, []),
                                          s = e.length;
                                      s--;

                                  )
                                      (r = a[s]) && (e[s] = !(t[s] = r));
                              })
                            : function (e, o, r) {
                                  return (
                                      (t[0] = e),
                                      i(t, null, r, n),
                                      (t[0] = null),
                                      !n.pop()
                                  );
                              };
                    }),
                    has: ae(function (e) {
                        return function (t) {
                            return oe(e, t).length > 0;
                        };
                    }),
                    contains: ae(function (e) {
                        return (
                            (e = e.replace(te, ne)),
                            function (t) {
                                return (
                                    (
                                        t.textContent ||
                                        t.innerText ||
                                        o(t)
                                    ).indexOf(e) > -1
                                );
                            }
                        );
                    }),
                    lang: ae(function (e) {
                        return (
                            Y.test(e || "") ||
                                oe.error("unsupported lang: " + e),
                            (e = e.replace(te, ne).toLowerCase()),
                            function (t) {
                                var n;
                                do {
                                    if (
                                        (n = g
                                            ? t.lang
                                            : t.getAttribute("xml:lang") ||
                                              t.getAttribute("lang"))
                                    )
                                        return (
                                            (n = n.toLowerCase()) === e ||
                                            0 === n.indexOf(e + "-")
                                        );
                                } while (
                                    (t = t.parentNode) &&
                                    1 === t.nodeType
                                );
                                return !1;
                            }
                        );
                    }),
                    target: function (t) {
                        var n = e.location && e.location.hash;
                        return n && n.slice(1) === t.id;
                    },
                    root: function (e) {
                        return e === h;
                    },
                    focus: function (e) {
                        return (
                            e === p.activeElement &&
                            (!p.hasFocus || p.hasFocus()) &&
                            !!(e.type || e.href || ~e.tabIndex)
                        );
                    },
                    enabled: function (e) {
                        return !1 === e.disabled;
                    },
                    disabled: function (e) {
                        return !0 === e.disabled;
                    },
                    checked: function (e) {
                        var t = e.nodeName.toLowerCase();
                        return (
                            ("input" === t && !!e.checked) ||
                            ("option" === t && !!e.selected)
                        );
                    },
                    selected: function (e) {
                        return (
                            e.parentNode && e.parentNode.selectedIndex,
                            !0 === e.selected
                        );
                    },
                    empty: function (e) {
                        for (e = e.firstChild; e; e = e.nextSibling)
                            if (e.nodeType < 6) return !1;
                        return !0;
                    },
                    parent: function (e) {
                        return !i.pseudos.empty(e);
                    },
                    header: function (e) {
                        return Z.test(e.nodeName);
                    },
                    input: function (e) {
                        return G.test(e.nodeName);
                    },
                    button: function (e) {
                        var t = e.nodeName.toLowerCase();
                        return (
                            ("input" === t && "button" === e.type) ||
                            "button" === t
                        );
                    },
                    text: function (e) {
                        var t;
                        return (
                            "input" === e.nodeName.toLowerCase() &&
                            "text" === e.type &&
                            (null == (t = e.getAttribute("type")) ||
                                "text" === t.toLowerCase())
                        );
                    },
                    first: fe(function () {
                        return [0];
                    }),
                    last: fe(function (e, t) {
                        return [t - 1];
                    }),
                    eq: fe(function (e, t, n) {
                        return [0 > n ? n + t : n];
                    }),
                    even: fe(function (e, t) {
                        for (var n = 0; t > n; n += 2) e.push(n);
                        return e;
                    }),
                    odd: fe(function (e, t) {
                        for (var n = 1; t > n; n += 2) e.push(n);
                        return e;
                    }),
                    lt: fe(function (e, t, n) {
                        for (var i = 0 > n ? n + t : n; --i >= 0; ) e.push(i);
                        return e;
                    }),
                    gt: fe(function (e, t, n) {
                        for (var i = 0 > n ? n + t : n; ++i < t; ) e.push(i);
                        return e;
                    }),
                },
            }).pseudos.nth = i.pseudos.eq),
        {
            radio: !0,
            checkbox: !0,
            file: !0,
            password: !0,
            image: !0,
        }))
            i.pseudos[t] = ue(t);
        for (t in {
            submit: !0,
            reset: !0,
        })
            i.pseudos[t] = de(t);

        function he() {}

        function ge(e) {
            for (var t = 0, n = e.length, i = ""; n > t; t++) i += e[t].value;
            return i;
        }

        function me(e, t, n) {
            var i = t.dir,
                o = n && "parentNode" === i,
                r = C++;
            return t.first
                ? function (t, n, r) {
                      for (; (t = t[i]); )
                          if (1 === t.nodeType || o) return e(t, n, r);
                  }
                : function (t, n, a) {
                      var s,
                          l,
                          c,
                          u = [S, r];
                      if (a) {
                          for (; (t = t[i]); )
                              if ((1 === t.nodeType || o) && e(t, n, a))
                                  return !0;
                      } else
                          for (; (t = t[i]); )
                              if (1 === t.nodeType || o) {
                                  if (
                                      (s = (l =
                                          (c = t[x] || (t[x] = {}))[
                                              t.uniqueID
                                          ] || (c[t.uniqueID] = {}))[i]) &&
                                      s[0] === S &&
                                      s[1] === r
                                  )
                                      return (u[2] = s[2]);
                                  if (((l[i] = u), (u[2] = e(t, n, a))))
                                      return !0;
                              }
                  };
        }

        function ve(e) {
            return e.length > 1
                ? function (t, n, i) {
                      for (var o = e.length; o--; )
                          if (!e[o](t, n, i)) return !1;
                      return !0;
                  }
                : e[0];
        }

        function ye(e, t, n, i, o) {
            for (var r, a = [], s = 0, l = e.length, c = null != t; l > s; s++)
                (r = e[s]) &&
                    ((n && !n(r, i, o)) || (a.push(r), c && t.push(s)));
            return a;
        }

        function be(e, t, n, i, o, r) {
            return (
                i && !i[x] && (i = be(i)),
                o && !o[x] && (o = be(o, r)),
                ae(function (r, a, s, l) {
                    var c,
                        u,
                        d,
                        f = [],
                        p = [],
                        h = a.length,
                        g =
                            r ||
                            (function (e, t, n) {
                                for (var i = 0, o = t.length; o > i; i++)
                                    oe(e, t[i], n);
                                return n;
                            })(t || "*", s.nodeType ? [s] : s, []),
                        m = !e || (!r && t) ? g : ye(g, f, e, s, l),
                        v = n ? (o || (r ? e : h || i) ? [] : a) : m;
                    if ((n && n(m, v, s, l), i))
                        for (c = ye(v, p), i(c, [], s, l), u = c.length; u--; )
                            (d = c[u]) && (v[p[u]] = !(m[p[u]] = d));
                    if (r) {
                        if (o || e) {
                            if (o) {
                                for (c = [], u = v.length; u--; )
                                    (d = v[u]) && c.push((m[u] = d));
                                o(null, (v = []), c, l);
                            }
                            for (u = v.length; u--; )
                                (d = v[u]) &&
                                    (c = o ? B(r, d) : f[u]) > -1 &&
                                    (r[c] = !(a[c] = d));
                        }
                    } else (v = ye(v === a ? v.splice(h, v.length) : v)), o ? o(null, a, v, l) : L.apply(a, v);
                })
            );
        }

        function xe(e) {
            for (
                var t,
                    n,
                    o,
                    r = e.length,
                    a = i.relative[e[0].type],
                    s = a || i.relative[" "],
                    l = a ? 1 : 0,
                    u = me(
                        function (e) {
                            return e === t;
                        },
                        s,
                        !0
                    ),
                    d = me(
                        function (e) {
                            return B(t, e) > -1;
                        },
                        s,
                        !0
                    ),
                    f = [
                        function (e, n, i) {
                            var o =
                                (!a && (i || n !== c)) ||
                                ((t = n).nodeType ? u(e, n, i) : d(e, n, i));
                            return (t = null), o;
                        },
                    ];
                r > l;
                l++
            )
                if ((n = i.relative[e[l].type])) f = [me(ve(f), n)];
                else {
                    if (
                        (n = i.filter[e[l].type].apply(null, e[l].matches))[x]
                    ) {
                        for (o = ++l; r > o && !i.relative[e[o].type]; o++);
                        return be(
                            l > 1 && ve(f),
                            l > 1 &&
                                ge(
                                    e.slice(0, l - 1).concat({
                                        value: " " === e[l - 2].type ? "*" : "",
                                    })
                                ).replace(z, "$1"),
                            n,
                            o > l && xe(e.slice(l, o)),
                            r > o && xe((e = e.slice(o))),
                            r > o && ge(e)
                        );
                    }
                    f.push(n);
                }
            return ve(f);
        }

        function we(e, t) {
            var n = t.length > 0,
                o = e.length > 0,
                r = function (r, a, s, l, u) {
                    var d,
                        h,
                        m,
                        v = 0,
                        y = "0",
                        b = r && [],
                        x = [],
                        w = c,
                        C = r || (o && i.find.TAG("*", u)),
                        $ = (S += null == w ? 1 : Math.random() || 0.1),
                        _ = C.length;
                    for (
                        u && (c = a === p || a || u);
                        y !== _ && null != (d = C[y]);
                        y++
                    ) {
                        if (o && d) {
                            for (
                                h = 0,
                                    a ||
                                        d.ownerDocument === p ||
                                        (f(d), (s = !g));
                                (m = e[h++]);

                            )
                                if (m(d, a || p, s)) {
                                    l.push(d);
                                    break;
                                }
                            u && (S = $);
                        }
                        n && ((d = !m && d) && v--, r && b.push(d));
                    }
                    if (((v += y), n && y !== v)) {
                        for (h = 0; (m = t[h++]); ) m(b, x, a, s);
                        if (r) {
                            if (v > 0)
                                for (; y--; )
                                    b[y] || x[y] || (x[y] = D.call(l));
                            x = ye(x);
                        }
                        L.apply(l, x),
                            u &&
                                !r &&
                                x.length > 0 &&
                                v + t.length > 1 &&
                                oe.uniqueSort(l);
                    }
                    return u && ((S = $), (c = w)), b;
                };
            return n ? ae(r) : r;
        }
        return (
            (he.prototype = i.filters = i.pseudos),
            (i.setFilters = new he()),
            (a = oe.tokenize =
                function (e, t) {
                    var n,
                        o,
                        r,
                        a,
                        s,
                        l,
                        c,
                        u = _[e + " "];
                    if (u) return t ? 0 : u.slice(0);
                    for (s = e, l = [], c = i.preFilter; s; ) {
                        for (a in ((n && !(o = W.exec(s))) ||
                            (o && (s = s.slice(o[0].length) || s),
                            l.push((r = []))),
                        (n = !1),
                        (o = F.exec(s)) &&
                            ((n = o.shift()),
                            r.push({
                                value: n,
                                type: o[0].replace(z, " "),
                            }),
                            (s = s.slice(n.length))),
                        i.filter))
                            !(o = U[a].exec(s)) ||
                                (c[a] && !(o = c[a](o))) ||
                                ((n = o.shift()),
                                r.push({
                                    value: n,
                                    type: a,
                                    matches: o,
                                }),
                                (s = s.slice(n.length)));
                        if (!n) break;
                    }
                    return t ? s.length : s ? oe.error(e) : _(e, l).slice(0);
                }),
            (s = oe.compile =
                function (e, t) {
                    var n,
                        i = [],
                        o = [],
                        r = T[e + " "];
                    if (!r) {
                        for (t || (t = a(e)), n = t.length; n--; )
                            (r = xe(t[n]))[x] ? i.push(r) : o.push(r);
                        (r = T(e, we(o, i))).selector = e;
                    }
                    return r;
                }),
            (l = oe.select =
                function (e, t, o, r) {
                    var l,
                        c,
                        u,
                        d,
                        f,
                        p = "function" == typeof e && e,
                        h = !r && a((e = p.selector || e));
                    if (((o = o || []), 1 === h.length)) {
                        if (
                            (c = h[0] = h[0].slice(0)).length > 2 &&
                            "ID" === (u = c[0]).type &&
                            n.getById &&
                            9 === t.nodeType &&
                            g &&
                            i.relative[c[1].type]
                        ) {
                            if (
                                !(t = (i.find.ID(
                                    u.matches[0].replace(te, ne),
                                    t
                                ) || [])[0])
                            )
                                return o;
                            p && (t = t.parentNode),
                                (e = e.slice(c.shift().value.length));
                        }
                        for (
                            l = U.needsContext.test(e) ? 0 : c.length;
                            l-- && ((u = c[l]), !i.relative[(d = u.type)]);

                        )
                            if (
                                (f = i.find[d]) &&
                                (r = f(
                                    u.matches[0].replace(te, ne),
                                    (J.test(c[0].type) && pe(t.parentNode)) || t
                                ))
                            ) {
                                if ((c.splice(l, 1), !(e = r.length && ge(c))))
                                    return L.apply(o, r), o;
                                break;
                            }
                    }
                    return (
                        (p || s(e, h))(
                            r,
                            t,
                            !g,
                            o,
                            !t || (J.test(e) && pe(t.parentNode)) || t
                        ),
                        o
                    );
                }),
            (n.sortStable = x.split("").sort(k).join("") === x),
            (n.detectDuplicates = !!d),
            f(),
            (n.sortDetached = se(function (e) {
                return 1 & e.compareDocumentPosition(p.createElement("div"));
            })),
            se(function (e) {
                return (
                    (e.innerHTML = "<a href='#'></a>"),
                    "#" === e.firstChild.getAttribute("href")
                );
            }) ||
                le("type|href|height|width", function (e, t, n) {
                    return n
                        ? void 0
                        : e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2);
                }),
            (n.attributes &&
                se(function (e) {
                    return (
                        (e.innerHTML = "<input/>"),
                        e.firstChild.setAttribute("value", ""),
                        "" === e.firstChild.getAttribute("value")
                    );
                })) ||
                le("value", function (e, t, n) {
                    return n || "input" !== e.nodeName.toLowerCase()
                        ? void 0
                        : e.defaultValue;
                }),
            se(function (e) {
                return null == e.getAttribute("disabled");
            }) ||
                le(I, function (e, t, n) {
                    var i;
                    return n
                        ? void 0
                        : !0 === e[t]
                        ? t.toLowerCase()
                        : (i = e.getAttributeNode(t)) && i.specified
                        ? i.value
                        : null;
                }),
            oe
        );
    })(e);
    (p.find = b),
        (p.expr = b.selectors),
        (p.expr[":"] = p.expr.pseudos),
        (p.uniqueSort = p.unique = b.uniqueSort),
        (p.text = b.getText),
        (p.isXMLDoc = b.isXML),
        (p.contains = b.contains);
    var x = function (e, t, n) {
            for (var i = [], o = void 0 !== n; (e = e[t]) && 9 !== e.nodeType; )
                if (1 === e.nodeType) {
                    if (o && p(e).is(n)) break;
                    i.push(e);
                }
            return i;
        },
        w = function (e, t) {
            for (var n = []; e; e = e.nextSibling)
                1 === e.nodeType && e !== t && n.push(e);
            return n;
        },
        S = p.expr.match.needsContext,
        C = /^<([\w-]+)\s*\/?>(?:<\/\1>|)$/,
        $ = /^.[^:#\[\.,]*$/;

    function _(e, t, n) {
        if (p.isFunction(t))
            return p.grep(e, function (e, i) {
                return !!t.call(e, i, e) !== n;
            });
        if (t.nodeType)
            return p.grep(e, function (e) {
                return (e === t) !== n;
            });
        if ("string" == typeof t) {
            if ($.test(t)) return p.filter(t, e, n);
            t = p.filter(t, e);
        }
        return p.grep(e, function (e) {
            return p.inArray(e, t) > -1 !== n;
        });
    }
    (p.filter = function (e, t, n) {
        var i = t[0];
        return (
            n && (e = ":not(" + e + ")"),
            1 === t.length && 1 === i.nodeType
                ? p.find.matchesSelector(i, e)
                    ? [i]
                    : []
                : p.find.matches(
                      e,
                      p.grep(t, function (e) {
                          return 1 === e.nodeType;
                      })
                  )
        );
    }),
        p.fn.extend({
            find: function (e) {
                var t,
                    n = [],
                    i = this,
                    o = i.length;
                if ("string" != typeof e)
                    return this.pushStack(
                        p(e).filter(function () {
                            for (t = 0; o > t; t++)
                                if (p.contains(i[t], this)) return !0;
                        })
                    );
                for (t = 0; o > t; t++) p.find(e, i[t], n);
                return (
                    ((n = this.pushStack(o > 1 ? p.unique(n) : n)).selector =
                        this.selector ? this.selector + " " + e : e),
                    n
                );
            },
            filter: function (e) {
                return this.pushStack(_(this, e || [], !1));
            },
            not: function (e) {
                return this.pushStack(_(this, e || [], !0));
            },
            is: function (e) {
                return !!_(
                    this,
                    "string" == typeof e && S.test(e) ? p(e) : e || [],
                    !1
                ).length;
            },
        });
    var T,
        k = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/;
    ((p.fn.init = function (e, t, n) {
        var o, r;
        if (!e) return this;
        if (((n = n || T), "string" == typeof e)) {
            if (
                !(o =
                    "<" === e.charAt(0) &&
                    ">" === e.charAt(e.length - 1) &&
                    e.length >= 3
                        ? [null, e, null]
                        : k.exec(e)) ||
                (!o[1] && t)
            )
                return !t || t.jquery
                    ? (t || n).find(e)
                    : this.constructor(t).find(e);
            if (o[1]) {
                if (
                    ((t = t instanceof p ? t[0] : t),
                    p.merge(
                        this,
                        p.parseHTML(
                            o[1],
                            t && t.nodeType ? t.ownerDocument || t : i,
                            !0
                        )
                    ),
                    C.test(o[1]) && p.isPlainObject(t))
                )
                    for (o in t)
                        p.isFunction(this[o])
                            ? this[o](t[o])
                            : this.attr(o, t[o]);
                return this;
            }
            if ((r = i.getElementById(o[2])) && r.parentNode) {
                if (r.id !== o[2]) return T.find(e);
                (this.length = 1), (this[0] = r);
            }
            return (this.context = i), (this.selector = e), this;
        }
        return e.nodeType
            ? ((this.context = this[0] = e), (this.length = 1), this)
            : p.isFunction(e)
            ? void 0 !== n.ready
                ? n.ready(e)
                : e(p)
            : (void 0 !== e.selector &&
                  ((this.selector = e.selector), (this.context = e.context)),
              p.makeArray(e, this));
    }).prototype = p.fn),
        (T = p(i));
    var E = /^(?:parents|prev(?:Until|All))/,
        A = {
            children: !0,
            contents: !0,
            next: !0,
            prev: !0,
        };

    function O(e, t) {
        do {
            e = e[t];
        } while (e && 1 !== e.nodeType);
        return e;
    }
    p.fn.extend({
        has: function (e) {
            var t,
                n = p(e, this),
                i = n.length;
            return this.filter(function () {
                for (t = 0; i > t; t++) if (p.contains(this, n[t])) return !0;
            });
        },
        closest: function (e, t) {
            for (
                var n,
                    i = 0,
                    o = this.length,
                    r = [],
                    a =
                        S.test(e) || "string" != typeof e
                            ? p(e, t || this.context)
                            : 0;
                o > i;
                i++
            )
                for (n = this[i]; n && n !== t; n = n.parentNode)
                    if (
                        n.nodeType < 11 &&
                        (a
                            ? a.index(n) > -1
                            : 1 === n.nodeType && p.find.matchesSelector(n, e))
                    ) {
                        r.push(n);
                        break;
                    }
            return this.pushStack(r.length > 1 ? p.uniqueSort(r) : r);
        },
        index: function (e) {
            return e
                ? "string" == typeof e
                    ? p.inArray(this[0], p(e))
                    : p.inArray(e.jquery ? e[0] : e, this)
                : this[0] && this[0].parentNode
                ? this.first().prevAll().length
                : -1;
        },
        add: function (e, t) {
            return this.pushStack(p.uniqueSort(p.merge(this.get(), p(e, t))));
        },
        addBack: function (e) {
            return this.add(
                null == e ? this.prevObject : this.prevObject.filter(e)
            );
        },
    }),
        p.each(
            {
                parent: function (e) {
                    var t = e.parentNode;
                    return t && 11 !== t.nodeType ? t : null;
                },
                parents: function (e) {
                    return x(e, "parentNode");
                },
                parentsUntil: function (e, t, n) {
                    return x(e, "parentNode", n);
                },
                next: function (e) {
                    return O(e, "nextSibling");
                },
                prev: function (e) {
                    return O(e, "previousSibling");
                },
                nextAll: function (e) {
                    return x(e, "nextSibling");
                },
                prevAll: function (e) {
                    return x(e, "previousSibling");
                },
                nextUntil: function (e, t, n) {
                    return x(e, "nextSibling", n);
                },
                prevUntil: function (e, t, n) {
                    return x(e, "previousSibling", n);
                },
                siblings: function (e) {
                    return w((e.parentNode || {}).firstChild, e);
                },
                children: function (e) {
                    return w(e.firstChild);
                },
                contents: function (e) {
                    return p.nodeName(e, "iframe")
                        ? e.contentDocument || e.contentWindow.document
                        : p.merge([], e.childNodes);
                },
            },
            function (e, t) {
                p.fn[e] = function (n, i) {
                    var o = p.map(this, t, n);
                    return (
                        "Until" !== e.slice(-5) && (i = n),
                        i && "string" == typeof i && (o = p.filter(i, o)),
                        this.length > 1 &&
                            (A[e] || (o = p.uniqueSort(o)),
                            E.test(e) && (o = o.reverse())),
                        this.pushStack(o)
                    );
                };
            }
        );
    var D,
        M,
        L = /\S+/g;

    function N() {
        i.addEventListener
            ? (i.removeEventListener("DOMContentLoaded", B),
              e.removeEventListener("load", B))
            : (i.detachEvent("onreadystatechange", B),
              e.detachEvent("onload", B));
    }

    function B() {
        (i.addEventListener ||
            "load" === e.event.type ||
            "complete" === i.readyState) &&
            (N(), p.ready());
    }
    for (M in ((p.Callbacks = function (e) {
        e =
            "string" == typeof e
                ? (function (e) {
                      var t = {};
                      return (
                          p.each(e.match(L) || [], function (e, n) {
                              t[n] = !0;
                          }),
                          t
                      );
                  })(e)
                : p.extend({}, e);
        var t,
            n,
            i,
            o,
            r = [],
            a = [],
            s = -1,
            l = function () {
                for (o = e.once, i = t = !0; a.length; s = -1)
                    for (n = a.shift(); ++s < r.length; )
                        !1 === r[s].apply(n[0], n[1]) &&
                            e.stopOnFalse &&
                            ((s = r.length), (n = !1));
                e.memory || (n = !1), (t = !1), o && (r = n ? [] : "");
            },
            c = {
                add: function () {
                    return (
                        r &&
                            (n && !t && ((s = r.length - 1), a.push(n)),
                            (function t(n) {
                                p.each(n, function (n, i) {
                                    p.isFunction(i)
                                        ? (e.unique && c.has(i)) || r.push(i)
                                        : i &&
                                          i.length &&
                                          "string" !== p.type(i) &&
                                          t(i);
                                });
                            })(arguments),
                            n && !t && l()),
                        this
                    );
                },
                remove: function () {
                    return (
                        p.each(arguments, function (e, t) {
                            for (var n; (n = p.inArray(t, r, n)) > -1; )
                                r.splice(n, 1), s >= n && s--;
                        }),
                        this
                    );
                },
                has: function (e) {
                    return e ? p.inArray(e, r) > -1 : r.length > 0;
                },
                empty: function () {
                    return r && (r = []), this;
                },
                disable: function () {
                    return (o = a = []), (r = n = ""), this;
                },
                disabled: function () {
                    return !r;
                },
                lock: function () {
                    return (o = !0), n || c.disable(), this;
                },
                locked: function () {
                    return !!o;
                },
                fireWith: function (e, n) {
                    return (
                        o ||
                            ((n = [e, (n = n || []).slice ? n.slice() : n]),
                            a.push(n),
                            t || l()),
                        this
                    );
                },
                fire: function () {
                    return c.fireWith(this, arguments), this;
                },
                fired: function () {
                    return !!i;
                },
            };
        return c;
    }),
    p.extend({
        Deferred: function (e) {
            var t = [
                    ["resolve", "done", p.Callbacks("once memory"), "resolved"],
                    ["reject", "fail", p.Callbacks("once memory"), "rejected"],
                    ["notify", "progress", p.Callbacks("memory")],
                ],
                n = "pending",
                i = {
                    state: function () {
                        return n;
                    },
                    always: function () {
                        return o.done(arguments).fail(arguments), this;
                    },
                    then: function () {
                        var e = arguments;
                        return p
                            .Deferred(function (n) {
                                p.each(t, function (t, r) {
                                    var a = p.isFunction(e[t]) && e[t];
                                    o[r[1]](function () {
                                        var e = a && a.apply(this, arguments);
                                        e && p.isFunction(e.promise)
                                            ? e
                                                  .promise()
                                                  .progress(n.notify)
                                                  .done(n.resolve)
                                                  .fail(n.reject)
                                            : n[r[0] + "With"](
                                                  this === i
                                                      ? n.promise()
                                                      : this,
                                                  a ? [e] : arguments
                                              );
                                    });
                                }),
                                    (e = null);
                            })
                            .promise();
                    },
                    promise: function (e) {
                        return null != e ? p.extend(e, i) : i;
                    },
                },
                o = {};
            return (
                (i.pipe = i.then),
                p.each(t, function (e, r) {
                    var a = r[2],
                        s = r[3];
                    (i[r[1]] = a.add),
                        s &&
                            a.add(
                                function () {
                                    n = s;
                                },
                                t[1 ^ e][2].disable,
                                t[2][2].lock
                            ),
                        (o[r[0]] = function () {
                            return (
                                o[r[0] + "With"](
                                    this === o ? i : this,
                                    arguments
                                ),
                                this
                            );
                        }),
                        (o[r[0] + "With"] = a.fireWith);
                }),
                i.promise(o),
                e && e.call(o, o),
                o
            );
        },
        when: function (e) {
            var t,
                n,
                i,
                r = 0,
                a = o.call(arguments),
                s = a.length,
                l = 1 !== s || (e && p.isFunction(e.promise)) ? s : 0,
                c = 1 === l ? e : p.Deferred(),
                u = function (e, n, i) {
                    return function (r) {
                        (n[e] = this),
                            (i[e] =
                                arguments.length > 1 ? o.call(arguments) : r),
                            i === t
                                ? c.notifyWith(n, i)
                                : --l || c.resolveWith(n, i);
                    };
                };
            if (s > 1)
                for (
                    t = new Array(s), n = new Array(s), i = new Array(s);
                    s > r;
                    r++
                )
                    a[r] && p.isFunction(a[r].promise)
                        ? a[r]
                              .promise()
                              .progress(u(r, n, t))
                              .done(u(r, i, a))
                              .fail(c.reject)
                        : --l;
            return l || c.resolveWith(i, a), c.promise();
        },
    }),
    (p.fn.ready = function (e) {
        return p.ready.promise().done(e), this;
    }),
    p.extend({
        isReady: !1,
        readyWait: 1,
        holdReady: function (e) {
            e ? p.readyWait++ : p.ready(!0);
        },
        ready: function (e) {
            (!0 === e ? --p.readyWait : p.isReady) ||
                ((p.isReady = !0),
                (!0 !== e && --p.readyWait > 0) ||
                    (D.resolveWith(i, [p]),
                    p.fn.triggerHandler &&
                        (p(i).triggerHandler("ready"), p(i).off("ready"))));
        },
    }),
    (p.ready.promise = function (t) {
        if (!D)
            if (
                ((D = p.Deferred()),
                "complete" === i.readyState ||
                    ("loading" !== i.readyState && !i.documentElement.doScroll))
            )
                e.setTimeout(p.ready);
            else if (i.addEventListener)
                i.addEventListener("DOMContentLoaded", B),
                    e.addEventListener("load", B);
            else {
                i.attachEvent("onreadystatechange", B),
                    e.attachEvent("onload", B);
                var n = !1;
                try {
                    n = null == e.frameElement && i.documentElement;
                } catch (e) {}
                n &&
                    n.doScroll &&
                    (function t() {
                        if (!p.isReady) {
                            try {
                                n.doScroll("left");
                            } catch (n) {
                                return e.setTimeout(t, 50);
                            }
                            N(), p.ready();
                        }
                    })();
            }
        return D.promise(t);
    }),
    p.ready.promise(),
    p(d)))
        break;
    (d.ownFirst = "0" === M),
        (d.inlineBlockNeedsLayout = !1),
        p(function () {
            var e, t, n, o;
            (n = i.getElementsByTagName("body")[0]) &&
                n.style &&
                ((t = i.createElement("div")),
                ((o = i.createElement("div")).style.cssText =
                    "position:absolute;border:0;width:0;height:0;top:0;left:-9999px"),
                n.appendChild(o).appendChild(t),
                void 0 !== t.style.zoom &&
                    ((t.style.cssText =
                        "display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1"),
                    (d.inlineBlockNeedsLayout = e = 3 === t.offsetWidth),
                    e && (n.style.zoom = 1)),
                n.removeChild(o));
        }),
        (function () {
            var e = i.createElement("div");
            d.deleteExpando = !0;
            try {
                delete e.test;
            } catch (e) {
                d.deleteExpando = !1;
            }
            e = null;
        })();
    var I = function (e) {
            var t = p.noData[(e.nodeName + " ").toLowerCase()],
                n = +e.nodeType || 1;
            return (
                (1 === n || 9 === n) &&
                (!t || (!0 !== t && e.getAttribute("classid") === t))
            );
        },
        P = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
        R = /([A-Z])/g;

    function H(e, t, n) {
        if (void 0 === n && 1 === e.nodeType) {
            var i = "data-" + t.replace(R, "-$1").toLowerCase();
            if ("string" == typeof (n = e.getAttribute(i))) {
                try {
                    n =
                        "true" === n ||
                        ("false" !== n &&
                            ("null" === n
                                ? null
                                : +n + "" === n
                                ? +n
                                : P.test(n)
                                ? p.parseJSON(n)
                                : n));
                } catch (e) {}
                p.data(e, t, n);
            } else n = void 0;
        }
        return n;
    }

    function j(e) {
        var t;
        for (t in e)
            if (("data" !== t || !p.isEmptyObject(e[t])) && "toJSON" !== t)
                return !1;
        return !0;
    }

    function q(e, t, i, o) {
        if (I(e)) {
            var r,
                a,
                s = p.expando,
                l = e.nodeType,
                c = l ? p.cache : e,
                u = l ? e[s] : e[s] && s;
            if (
                (u && c[u] && (o || c[u].data)) ||
                void 0 !== i ||
                "string" != typeof t
            )
                return (
                    u || (u = l ? (e[s] = n.pop() || p.guid++) : s),
                    c[u] ||
                        (c[u] = l
                            ? {}
                            : {
                                  toJSON: p.noop,
                              }),
                    ("object" != typeof t && "function" != typeof t) ||
                        (o
                            ? (c[u] = p.extend(c[u], t))
                            : (c[u].data = p.extend(c[u].data, t))),
                    (a = c[u]),
                    o || (a.data || (a.data = {}), (a = a.data)),
                    void 0 !== i && (a[p.camelCase(t)] = i),
                    "string" == typeof t
                        ? null == (r = a[t]) && (r = a[p.camelCase(t)])
                        : (r = a),
                    r
                );
        }
    }

    function z(e, t, n) {
        if (I(e)) {
            var i,
                o,
                r = e.nodeType,
                a = r ? p.cache : e,
                s = r ? e[p.expando] : p.expando;
            if (a[s]) {
                if (t && (i = n ? a[s] : a[s].data)) {
                    o = (t = p.isArray(t)
                        ? t.concat(p.map(t, p.camelCase))
                        : t in i
                        ? [t]
                        : (t = p.camelCase(t)) in i
                        ? [t]
                        : t.split(" ")).length;
                    for (; o--; ) delete i[t[o]];
                    if (n ? !j(i) : !p.isEmptyObject(i)) return;
                }
                (n || (delete a[s].data, j(a[s]))) &&
                    (r
                        ? p.cleanData([e], !0)
                        : d.deleteExpando || a != a.window
                        ? delete a[s]
                        : (a[s] = void 0));
            }
        }
    }
    p.extend({
        cache: {},
        noData: {
            "applet ": !0,
            "embed ": !0,
            "object ": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",
        },
        hasData: function (e) {
            return (
                !!(e = e.nodeType ? p.cache[e[p.expando]] : e[p.expando]) &&
                !j(e)
            );
        },
        data: function (e, t, n) {
            return q(e, t, n);
        },
        removeData: function (e, t) {
            return z(e, t);
        },
        _data: function (e, t, n) {
            return q(e, t, n, !0);
        },
        _removeData: function (e, t) {
            return z(e, t, !0);
        },
    }),
        p.fn.extend({
            data: function (e, t) {
                var n,
                    i,
                    o,
                    r = this[0],
                    a = r && r.attributes;
                if (void 0 === e) {
                    if (
                        this.length &&
                        ((o = p.data(r)),
                        1 === r.nodeType && !p._data(r, "parsedAttrs"))
                    ) {
                        for (n = a.length; n--; )
                            a[n] &&
                                0 === (i = a[n].name).indexOf("data-") &&
                                H(r, (i = p.camelCase(i.slice(5))), o[i]);
                        p._data(r, "parsedAttrs", !0);
                    }
                    return o;
                }
                return "object" == typeof e
                    ? this.each(function () {
                          p.data(this, e);
                      })
                    : arguments.length > 1
                    ? this.each(function () {
                          p.data(this, e, t);
                      })
                    : r
                    ? H(r, e, p.data(r, e))
                    : void 0;
            },
            removeData: function (e) {
                return this.each(function () {
                    p.removeData(this, e);
                });
            },
        }),
        p.extend({
            queue: function (e, t, n) {
                var i;
                return e
                    ? ((t = (t || "fx") + "queue"),
                      (i = p._data(e, t)),
                      n &&
                          (!i || p.isArray(n)
                              ? (i = p._data(e, t, p.makeArray(n)))
                              : i.push(n)),
                      i || [])
                    : void 0;
            },
            dequeue: function (e, t) {
                t = t || "fx";
                var n = p.queue(e, t),
                    i = n.length,
                    o = n.shift(),
                    r = p._queueHooks(e, t);
                "inprogress" === o && ((o = n.shift()), i--),
                    o &&
                        ("fx" === t && n.unshift("inprogress"),
                        delete r.stop,
                        o.call(
                            e,
                            function () {
                                p.dequeue(e, t);
                            },
                            r
                        )),
                    !i && r && r.empty.fire();
            },
            _queueHooks: function (e, t) {
                var n = t + "queueHooks";
                return (
                    p._data(e, n) ||
                    p._data(e, n, {
                        empty: p.Callbacks("once memory").add(function () {
                            p._removeData(e, t + "queue"), p._removeData(e, n);
                        }),
                    })
                );
            },
        }),
        p.fn.extend({
            queue: function (e, t) {
                var n = 2;
                return (
                    "string" != typeof e && ((t = e), (e = "fx"), n--),
                    arguments.length < n
                        ? p.queue(this[0], e)
                        : void 0 === t
                        ? this
                        : this.each(function () {
                              var n = p.queue(this, e, t);
                              p._queueHooks(this, e),
                                  "fx" === e &&
                                      "inprogress" !== n[0] &&
                                      p.dequeue(this, e);
                          })
                );
            },
            dequeue: function (e) {
                return this.each(function () {
                    p.dequeue(this, e);
                });
            },
            clearQueue: function (e) {
                return this.queue(e || "fx", []);
            },
            promise: function (e, t) {
                var n,
                    i = 1,
                    o = p.Deferred(),
                    r = this,
                    a = this.length,
                    s = function () {
                        --i || o.resolveWith(r, [r]);
                    };
                for (
                    "string" != typeof e && ((t = e), (e = void 0)),
                        e = e || "fx";
                    a--;

                )
                    (n = p._data(r[a], e + "queueHooks")) &&
                        n.empty &&
                        (i++, n.empty.add(s));
                return s(), o.promise(t);
            },
        }),
        (function () {
            var e;
            d.shrinkWrapBlocks = function () {
                return null != e
                    ? e
                    : ((e = !1),
                      (n = i.getElementsByTagName("body")[0]) && n.style
                          ? ((t = i.createElement("div")),
                            ((o = i.createElement("div")).style.cssText =
                                "position:absolute;border:0;width:0;height:0;top:0;left:-9999px"),
                            n.appendChild(o).appendChild(t),
                            void 0 !== t.style.zoom &&
                                ((t.style.cssText =
                                    "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:1px;width:1px;zoom:1"),
                                (t.appendChild(
                                    i.createElement("div")
                                ).style.width = "5px"),
                                (e = 3 !== t.offsetWidth)),
                            n.removeChild(o),
                            e)
                          : void 0);
                var t, n, o;
            };
        })();
    var W = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
        F = new RegExp("^(?:([+-])=|)(" + W + ")([a-z%]*)$", "i"),
        X = ["Top", "Right", "Bottom", "Left"],
        V = function (e, t) {
            return (
                (e = t || e),
                "none" === p.css(e, "display") ||
                    !p.contains(e.ownerDocument, e)
            );
        };

    function Y(e, t, n, i) {
        var o,
            r = 1,
            a = 20,
            s = i
                ? function () {
                      return i.cur();
                  }
                : function () {
                      return p.css(e, t, "");
                  },
            l = s(),
            c = (n && n[3]) || (p.cssNumber[t] ? "" : "px"),
            u = (p.cssNumber[t] || ("px" !== c && +l)) && F.exec(p.css(e, t));
        if (u && u[3] !== c) {
            (c = c || u[3]), (n = n || []), (u = +l || 1);
            do {
                (u /= r = r || ".5"), p.style(e, t, u + c);
            } while (r !== (r = s() / l) && 1 !== r && --a);
        }
        return (
            n &&
                ((u = +u || +l || 0),
                (o = n[1] ? u + (n[1] + 1) * n[2] : +n[2]),
                i && ((i.unit = c), (i.start = u), (i.end = o))),
            o
        );
    }
    var U = function (e, t, n, i, o, r, a) {
            var s = 0,
                l = e.length,
                c = null == n;
            if ("object" === p.type(n))
                for (s in ((o = !0), n)) U(e, t, s, n[s], !0, r, a);
            else if (
                void 0 !== i &&
                ((o = !0),
                p.isFunction(i) || (a = !0),
                c &&
                    (a
                        ? (t.call(e, i), (t = null))
                        : ((c = t),
                          (t = function (e, t, n) {
                              return c.call(p(e), n);
                          }))),
                t)
            )
                for (; l > s; s++)
                    t(e[s], n, a ? i : i.call(e[s], s, t(e[s], n)));
            return o ? e : c ? t.call(e) : l ? t(e[0], n) : r;
        },
        G = /^(?:checkbox|radio)$/i,
        Z = /<([\w:-]+)/,
        K = /^$|\/(?:java|ecma)script/i,
        Q = /^\s+/,
        J =
            "abbr|article|aside|audio|bdi|canvas|data|datalist|details|dialog|figcaption|figure|footer|header|hgroup|main|mark|meter|nav|output|picture|progress|section|summary|template|time|video";

    function ee(e) {
        var t = J.split("|"),
            n = e.createDocumentFragment();
        if (n.createElement) for (; t.length; ) n.createElement(t.pop());
        return n;
    }
    !(function () {
        var e = i.createElement("div"),
            t = i.createDocumentFragment(),
            n = i.createElement("input");
        (e.innerHTML =
            "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>"),
            (d.leadingWhitespace = 3 === e.firstChild.nodeType),
            (d.tbody = !e.getElementsByTagName("tbody").length),
            (d.htmlSerialize = !!e.getElementsByTagName("link").length),
            (d.html5Clone =
                "<:nav></:nav>" !==
                i.createElement("nav").cloneNode(!0).outerHTML),
            (n.type = "checkbox"),
            (n.checked = !0),
            t.appendChild(n),
            (d.appendChecked = n.checked),
            (e.innerHTML = "<textarea>x</textarea>"),
            (d.noCloneChecked = !!e.cloneNode(!0).lastChild.defaultValue),
            t.appendChild(e),
            (n = i.createElement("input")).setAttribute("type", "radio"),
            n.setAttribute("checked", "checked"),
            n.setAttribute("name", "t"),
            e.appendChild(n),
            (d.checkClone = e.cloneNode(!0).cloneNode(!0).lastChild.checked),
            (d.noCloneEvent = !!e.addEventListener),
            (e[p.expando] = 1),
            (d.attributes = !e.getAttribute(p.expando));
    })();
    var te = {
        option: [1, "<select multiple='multiple'>", "</select>"],
        legend: [1, "<fieldset>", "</fieldset>"],
        area: [1, "<map>", "</map>"],
        param: [1, "<object>", "</object>"],
        thead: [1, "<table>", "</table>"],
        tr: [2, "<table><tbody>", "</tbody></table>"],
        col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"],
        td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
        _default: d.htmlSerialize ? [0, "", ""] : [1, "X<div>", "</div>"],
    };

    function ne(e, t) {
        var n,
            i,
            o = 0,
            r =
                void 0 !== e.getElementsByTagName
                    ? e.getElementsByTagName(t || "*")
                    : void 0 !== e.querySelectorAll
                    ? e.querySelectorAll(t || "*")
                    : void 0;
        if (!r)
            for (r = [], n = e.childNodes || e; null != (i = n[o]); o++)
                !t || p.nodeName(i, t) ? r.push(i) : p.merge(r, ne(i, t));
        return void 0 === t || (t && p.nodeName(e, t)) ? p.merge([e], r) : r;
    }

    function ie(e, t) {
        for (var n, i = 0; null != (n = e[i]); i++)
            p._data(n, "globalEval", !t || p._data(t[i], "globalEval"));
    }
    (te.optgroup = te.option),
        (te.tbody = te.tfoot = te.colgroup = te.caption = te.thead),
        (te.th = te.td);
    var oe = /<|&#?\w+;/,
        re = /<tbody/i;

    function ae(e) {
        G.test(e.type) && (e.defaultChecked = e.checked);
    }

    function se(e, t, n, i, o) {
        for (
            var r, a, s, l, c, u, f, h = e.length, g = ee(t), m = [], v = 0;
            h > v;
            v++
        )
            if ((a = e[v]) || 0 === a)
                if ("object" === p.type(a)) p.merge(m, a.nodeType ? [a] : a);
                else if (oe.test(a)) {
                    for (
                        l = l || g.appendChild(t.createElement("div")),
                            c = (Z.exec(a) || ["", ""])[1].toLowerCase(),
                            f = te[c] || te._default,
                            l.innerHTML = f[1] + p.htmlPrefilter(a) + f[2],
                            r = f[0];
                        r--;

                    )
                        l = l.lastChild;
                    if (
                        (!d.leadingWhitespace &&
                            Q.test(a) &&
                            m.push(t.createTextNode(Q.exec(a)[0])),
                        !d.tbody)
                    )
                        for (
                            r =
                                (a =
                                    "table" !== c || re.test(a)
                                        ? "<table>" !== f[1] || re.test(a)
                                            ? 0
                                            : l
                                        : l.firstChild) && a.childNodes.length;
                            r--;

                        )
                            p.nodeName((u = a.childNodes[r]), "tbody") &&
                                !u.childNodes.length &&
                                a.removeChild(u);
                    for (
                        p.merge(m, l.childNodes), l.textContent = "";
                        l.firstChild;

                    )
                        l.removeChild(l.firstChild);
                    l = g.lastChild;
                } else m.push(t.createTextNode(a));
        for (
            l && g.removeChild(l),
                d.appendChecked || p.grep(ne(m, "input"), ae),
                v = 0;
            (a = m[v++]);

        )
            if (i && p.inArray(a, i) > -1) o && o.push(a);
            else if (
                ((s = p.contains(a.ownerDocument, a)),
                (l = ne(g.appendChild(a), "script")),
                s && ie(l),
                n)
            )
                for (r = 0; (a = l[r++]); ) K.test(a.type || "") && n.push(a);
        return (l = null), g;
    }
    !(function () {
        var t,
            n,
            o = i.createElement("div");
        for (t in {
            submit: !0,
            change: !0,
            focusin: !0,
        })
            (n = "on" + t),
                (d[t] = n in e) ||
                    (o.setAttribute(n, "t"),
                    (d[t] = !1 === o.attributes[n].expando));
        o = null;
    })();
    var le = /^(?:input|select|textarea)$/i,
        ce = /^key/,
        ue = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
        de = /^(?:focusinfocus|focusoutblur)$/,
        fe = /^([^.]*)(?:\.(.+)|)/;

    function pe() {
        return !0;
    }

    function he() {
        return !1;
    }

    function ge() {
        try {
            return i.activeElement;
        } catch (e) {}
    }

    function me(e, t, n, i, o, r) {
        var a, s;
        if ("object" == typeof t) {
            for (s in ("string" != typeof n && ((i = i || n), (n = void 0)), t))
                me(e, s, n, i, t[s], r);
            return e;
        }
        if (
            (null == i && null == o
                ? ((o = n), (i = n = void 0))
                : null == o &&
                  ("string" == typeof n
                      ? ((o = i), (i = void 0))
                      : ((o = i), (i = n), (n = void 0))),
            !1 === o)
        )
            o = he;
        else if (!o) return e;
        return (
            1 === r &&
                ((a = o),
                ((o = function (e) {
                    return p().off(e), a.apply(this, arguments);
                }).guid = a.guid || (a.guid = p.guid++))),
            e.each(function () {
                p.event.add(this, t, o, i, n);
            })
        );
    }
    (p.event = {
        global: {},
        add: function (e, t, n, i, o) {
            var r,
                a,
                s,
                l,
                c,
                u,
                d,
                f,
                h,
                g,
                m,
                v = p._data(e);
            if (v) {
                for (
                    n.handler && ((n = (l = n).handler), (o = l.selector)),
                        n.guid || (n.guid = p.guid++),
                        (a = v.events) || (a = v.events = {}),
                        (u = v.handle) ||
                            ((u = v.handle =
                                function (e) {
                                    return void 0 === p ||
                                        (e && p.event.triggered === e.type)
                                        ? void 0
                                        : p.event.dispatch.apply(
                                              u.elem,
                                              arguments
                                          );
                                }).elem = e),
                        s = (t = (t || "").match(L) || [""]).length;
                    s--;

                )
                    (h = m = (r = fe.exec(t[s]) || [])[1]),
                        (g = (r[2] || "").split(".").sort()),
                        h &&
                            ((c = p.event.special[h] || {}),
                            (h = (o ? c.delegateType : c.bindType) || h),
                            (c = p.event.special[h] || {}),
                            (d = p.extend(
                                {
                                    type: h,
                                    origType: m,
                                    data: i,
                                    handler: n,
                                    guid: n.guid,
                                    selector: o,
                                    needsContext:
                                        o && p.expr.match.needsContext.test(o),
                                    namespace: g.join("."),
                                },
                                l
                            )),
                            (f = a[h]) ||
                                (((f = a[h] = []).delegateCount = 0),
                                (c.setup && !1 !== c.setup.call(e, i, g, u)) ||
                                    (e.addEventListener
                                        ? e.addEventListener(h, u, !1)
                                        : e.attachEvent &&
                                          e.attachEvent("on" + h, u))),
                            c.add &&
                                (c.add.call(e, d),
                                d.handler.guid || (d.handler.guid = n.guid)),
                            o ? f.splice(f.delegateCount++, 0, d) : f.push(d),
                            (p.event.global[h] = !0));
                e = null;
            }
        },
        remove: function (e, t, n, i, o) {
            var r,
                a,
                s,
                l,
                c,
                u,
                d,
                f,
                h,
                g,
                m,
                v = p.hasData(e) && p._data(e);
            if (v && (u = v.events)) {
                for (c = (t = (t || "").match(L) || [""]).length; c--; )
                    if (
                        ((h = m = (s = fe.exec(t[c]) || [])[1]),
                        (g = (s[2] || "").split(".").sort()),
                        h)
                    ) {
                        for (
                            d = p.event.special[h] || {},
                                f =
                                    u[
                                        (h =
                                            (i ? d.delegateType : d.bindType) ||
                                            h)
                                    ] || [],
                                s =
                                    s[2] &&
                                    new RegExp(
                                        "(^|\\.)" +
                                            g.join("\\.(?:.*\\.|)") +
                                            "(\\.|$)"
                                    ),
                                l = r = f.length;
                            r--;

                        )
                            (a = f[r]),
                                (!o && m !== a.origType) ||
                                    (n && n.guid !== a.guid) ||
                                    (s && !s.test(a.namespace)) ||
                                    (i &&
                                        i !== a.selector &&
                                        ("**" !== i || !a.selector)) ||
                                    (f.splice(r, 1),
                                    a.selector && f.delegateCount--,
                                    d.remove && d.remove.call(e, a));
                        l &&
                            !f.length &&
                            ((d.teardown &&
                                !1 !== d.teardown.call(e, g, v.handle)) ||
                                p.removeEvent(e, h, v.handle),
                            delete u[h]);
                    } else for (h in u) p.event.remove(e, h + t[c], n, i, !0);
                p.isEmptyObject(u) &&
                    (delete v.handle, p._removeData(e, "events"));
            }
        },
        trigger: function (t, n, o, r) {
            var a,
                s,
                l,
                c,
                d,
                f,
                h,
                g = [o || i],
                m = u.call(t, "type") ? t.type : t,
                v = u.call(t, "namespace") ? t.namespace.split(".") : [];
            if (
                ((l = f = o = o || i),
                3 !== o.nodeType &&
                    8 !== o.nodeType &&
                    !de.test(m + p.event.triggered) &&
                    (m.indexOf(".") > -1 &&
                        ((v = m.split(".")), (m = v.shift()), v.sort()),
                    (s = m.indexOf(":") < 0 && "on" + m),
                    ((t = t[p.expando]
                        ? t
                        : new p.Event(m, "object" == typeof t && t)).isTrigger =
                        r ? 2 : 3),
                    (t.namespace = v.join(".")),
                    (t.rnamespace = t.namespace
                        ? new RegExp(
                              "(^|\\.)" + v.join("\\.(?:.*\\.|)") + "(\\.|$)"
                          )
                        : null),
                    (t.result = void 0),
                    t.target || (t.target = o),
                    (n = null == n ? [t] : p.makeArray(n, [t])),
                    (d = p.event.special[m] || {}),
                    r || !d.trigger || !1 !== d.trigger.apply(o, n)))
            ) {
                if (!r && !d.noBubble && !p.isWindow(o)) {
                    for (
                        c = d.delegateType || m,
                            de.test(c + m) || (l = l.parentNode);
                        l;
                        l = l.parentNode
                    )
                        g.push(l), (f = l);
                    f === (o.ownerDocument || i) &&
                        g.push(f.defaultView || f.parentWindow || e);
                }
                for (h = 0; (l = g[h++]) && !t.isPropagationStopped(); )
                    (t.type = h > 1 ? c : d.bindType || m),
                        (a =
                            (p._data(l, "events") || {})[t.type] &&
                            p._data(l, "handle")) && a.apply(l, n),
                        (a = s && l[s]) &&
                            a.apply &&
                            I(l) &&
                            ((t.result = a.apply(l, n)),
                            !1 === t.result && t.preventDefault());
                if (
                    ((t.type = m),
                    !r &&
                        !t.isDefaultPrevented() &&
                        (!d._default || !1 === d._default.apply(g.pop(), n)) &&
                        I(o) &&
                        s &&
                        o[m] &&
                        !p.isWindow(o))
                ) {
                    (f = o[s]) && (o[s] = null), (p.event.triggered = m);
                    try {
                        o[m]();
                    } catch (e) {}
                    (p.event.triggered = void 0), f && (o[s] = f);
                }
                return t.result;
            }
        },
        dispatch: function (e) {
            e = p.event.fix(e);
            var t,
                n,
                i,
                r,
                a,
                s = [],
                l = o.call(arguments),
                c = (p._data(this, "events") || {})[e.type] || [],
                u = p.event.special[e.type] || {};
            if (
                ((l[0] = e),
                (e.delegateTarget = this),
                !u.preDispatch || !1 !== u.preDispatch.call(this, e))
            ) {
                for (
                    s = p.event.handlers.call(this, e, c), t = 0;
                    (r = s[t++]) && !e.isPropagationStopped();

                )
                    for (
                        e.currentTarget = r.elem, n = 0;
                        (a = r.handlers[n++]) &&
                        !e.isImmediatePropagationStopped();

                    )
                        (e.rnamespace && !e.rnamespace.test(a.namespace)) ||
                            ((e.handleObj = a),
                            (e.data = a.data),
                            void 0 !==
                                (i = (
                                    (p.event.special[a.origType] || {})
                                        .handle || a.handler
                                ).apply(r.elem, l)) &&
                                !1 === (e.result = i) &&
                                (e.preventDefault(), e.stopPropagation()));
                return u.postDispatch && u.postDispatch.call(this, e), e.result;
            }
        },
        handlers: function (e, t) {
            var n,
                i,
                o,
                r,
                a = [],
                s = t.delegateCount,
                l = e.target;
            if (
                s &&
                l.nodeType &&
                ("click" !== e.type || isNaN(e.button) || e.button < 1)
            )
                for (; l != this; l = l.parentNode || this)
                    if (
                        1 === l.nodeType &&
                        (!0 !== l.disabled || "click" !== e.type)
                    ) {
                        for (i = [], n = 0; s > n; n++)
                            void 0 === i[(o = (r = t[n]).selector + " ")] &&
                                (i[o] = r.needsContext
                                    ? p(o, this).index(l) > -1
                                    : p.find(o, this, null, [l]).length),
                                i[o] && i.push(r);
                        i.length &&
                            a.push({
                                elem: l,
                                handlers: i,
                            });
                    }
            return (
                s < t.length &&
                    a.push({
                        elem: this,
                        handlers: t.slice(s),
                    }),
                a
            );
        },
        fix: function (e) {
            if (e[p.expando]) return e;
            var t,
                n,
                o,
                r = e.type,
                a = e,
                s = this.fixHooks[r];
            for (
                s ||
                    (this.fixHooks[r] = s =
                        ue.test(r)
                            ? this.mouseHooks
                            : ce.test(r)
                            ? this.keyHooks
                            : {}),
                    o = s.props ? this.props.concat(s.props) : this.props,
                    e = new p.Event(a),
                    t = o.length;
                t--;

            )
                e[(n = o[t])] = a[n];
            return (
                e.target || (e.target = a.srcElement || i),
                3 === e.target.nodeType && (e.target = e.target.parentNode),
                (e.metaKey = !!e.metaKey),
                s.filter ? s.filter(e, a) : e
            );
        },
        props: "altKey bubbles cancelable ctrlKey currentTarget detail eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(
            " "
        ),
        fixHooks: {},
        keyHooks: {
            props: "char charCode key keyCode".split(" "),
            filter: function (e, t) {
                return (
                    null == e.which &&
                        (e.which = null != t.charCode ? t.charCode : t.keyCode),
                    e
                );
            },
        },
        mouseHooks: {
            props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(
                " "
            ),
            filter: function (e, t) {
                var n,
                    o,
                    r,
                    a = t.button,
                    s = t.fromElement;
                return (
                    null == e.pageX &&
                        null != t.clientX &&
                        ((r = (o = e.target.ownerDocument || i)
                            .documentElement),
                        (n = o.body),
                        (e.pageX =
                            t.clientX +
                            ((r && r.scrollLeft) || (n && n.scrollLeft) || 0) -
                            ((r && r.clientLeft) || (n && n.clientLeft) || 0)),
                        (e.pageY =
                            t.clientY +
                            ((r && r.scrollTop) || (n && n.scrollTop) || 0) -
                            ((r && r.clientTop) || (n && n.clientTop) || 0))),
                    !e.relatedTarget &&
                        s &&
                        (e.relatedTarget = s === e.target ? t.toElement : s),
                    e.which ||
                        void 0 === a ||
                        (e.which = 1 & a ? 1 : 2 & a ? 3 : 4 & a ? 2 : 0),
                    e
                );
            },
        },
        special: {
            load: {
                noBubble: !0,
            },
            focus: {
                trigger: function () {
                    if (this !== ge() && this.focus)
                        try {
                            return this.focus(), !1;
                        } catch (e) {}
                },
                delegateType: "focusin",
            },
            blur: {
                trigger: function () {
                    return this === ge() && this.blur
                        ? (this.blur(), !1)
                        : void 0;
                },
                delegateType: "focusout",
            },
            click: {
                trigger: function () {
                    return p.nodeName(this, "input") &&
                        "checkbox" === this.type &&
                        this.click
                        ? (this.click(), !1)
                        : void 0;
                },
                _default: function (e) {
                    return p.nodeName(e.target, "a");
                },
            },
            beforeunload: {
                postDispatch: function (e) {
                    void 0 !== e.result &&
                        e.originalEvent &&
                        (e.originalEvent.returnValue = e.result);
                },
            },
        },
        simulate: function (e, t, n) {
            var i = p.extend(new p.Event(), n, {
                type: e,
                isSimulated: !0,
            });
            p.event.trigger(i, null, t),
                i.isDefaultPrevented() && n.preventDefault();
        },
    }),
        (p.removeEvent = i.removeEventListener
            ? function (e, t, n) {
                  e.removeEventListener && e.removeEventListener(t, n);
              }
            : function (e, t, n) {
                  var i = "on" + t;
                  e.detachEvent &&
                      (void 0 === e[i] && (e[i] = null), e.detachEvent(i, n));
              }),
        (p.Event = function (e, t) {
            return this instanceof p.Event
                ? (e && e.type
                      ? ((this.originalEvent = e),
                        (this.type = e.type),
                        (this.isDefaultPrevented =
                            e.defaultPrevented ||
                            (void 0 === e.defaultPrevented &&
                                !1 === e.returnValue)
                                ? pe
                                : he))
                      : (this.type = e),
                  t && p.extend(this, t),
                  (this.timeStamp = (e && e.timeStamp) || p.now()),
                  void (this[p.expando] = !0))
                : new p.Event(e, t);
        }),
        (p.Event.prototype = {
            constructor: p.Event,
            isDefaultPrevented: he,
            isPropagationStopped: he,
            isImmediatePropagationStopped: he,
            preventDefault: function () {
                var e = this.originalEvent;
                (this.isDefaultPrevented = pe),
                    e &&
                        (e.preventDefault
                            ? e.preventDefault()
                            : (e.returnValue = !1));
            },
            stopPropagation: function () {
                var e = this.originalEvent;
                (this.isPropagationStopped = pe),
                    e &&
                        !this.isSimulated &&
                        (e.stopPropagation && e.stopPropagation(),
                        (e.cancelBubble = !0));
            },
            stopImmediatePropagation: function () {
                var e = this.originalEvent;
                (this.isImmediatePropagationStopped = pe),
                    e &&
                        e.stopImmediatePropagation &&
                        e.stopImmediatePropagation(),
                    this.stopPropagation();
            },
        }),
        p.each(
            {
                mouseenter: "mouseover",
                mouseleave: "mouseout",
                pointerenter: "pointerover",
                pointerleave: "pointerout",
            },
            function (e, t) {
                p.event.special[e] = {
                    delegateType: t,
                    bindType: t,
                    handle: function (e) {
                        var n,
                            i = e.relatedTarget,
                            o = e.handleObj;
                        return (
                            (i && (i === this || p.contains(this, i))) ||
                                ((e.type = o.origType),
                                (n = o.handler.apply(this, arguments)),
                                (e.type = t)),
                            n
                        );
                    },
                };
            }
        ),
        d.submit ||
            (p.event.special.submit = {
                setup: function () {
                    return (
                        !p.nodeName(this, "form") &&
                        void p.event.add(
                            this,
                            "click._submit keypress._submit",
                            function (e) {
                                var t = e.target,
                                    n =
                                        p.nodeName(t, "input") ||
                                        p.nodeName(t, "button")
                                            ? p.prop(t, "form")
                                            : void 0;
                                n &&
                                    !p._data(n, "submit") &&
                                    (p.event.add(
                                        n,
                                        "submit._submit",
                                        function (e) {
                                            e._submitBubble = !0;
                                        }
                                    ),
                                    p._data(n, "submit", !0));
                            }
                        )
                    );
                },
                postDispatch: function (e) {
                    e._submitBubble &&
                        (delete e._submitBubble,
                        this.parentNode &&
                            !e.isTrigger &&
                            p.event.simulate("submit", this.parentNode, e));
                },
                teardown: function () {
                    return (
                        !p.nodeName(this, "form") &&
                        void p.event.remove(this, "._submit")
                    );
                },
            }),
        d.change ||
            (p.event.special.change = {
                setup: function () {
                    return le.test(this.nodeName)
                        ? (("checkbox" !== this.type &&
                              "radio" !== this.type) ||
                              (p.event.add(
                                  this,
                                  "propertychange._change",
                                  function (e) {
                                      "checked" ===
                                          e.originalEvent.propertyName &&
                                          (this._justChanged = !0);
                                  }
                              ),
                              p.event.add(this, "click._change", function (e) {
                                  this._justChanged &&
                                      !e.isTrigger &&
                                      (this._justChanged = !1),
                                      p.event.simulate("change", this, e);
                              })),
                          !1)
                        : void p.event.add(
                              this,
                              "beforeactivate._change",
                              function (e) {
                                  var t = e.target;
                                  le.test(t.nodeName) &&
                                      !p._data(t, "change") &&
                                      (p.event.add(
                                          t,
                                          "change._change",
                                          function (e) {
                                              !this.parentNode ||
                                                  e.isSimulated ||
                                                  e.isTrigger ||
                                                  p.event.simulate(
                                                      "change",
                                                      this.parentNode,
                                                      e
                                                  );
                                          }
                                      ),
                                      p._data(t, "change", !0));
                              }
                          );
                },
                handle: function (e) {
                    var t = e.target;
                    return this !== t ||
                        e.isSimulated ||
                        e.isTrigger ||
                        ("radio" !== t.type && "checkbox" !== t.type)
                        ? e.handleObj.handler.apply(this, arguments)
                        : void 0;
                },
                teardown: function () {
                    return (
                        p.event.remove(this, "._change"),
                        !le.test(this.nodeName)
                    );
                },
            }),
        d.focusin ||
            p.each(
                {
                    focus: "focusin",
                    blur: "focusout",
                },
                function (e, t) {
                    var n = function (e) {
                        p.event.simulate(t, e.target, p.event.fix(e));
                    };
                    p.event.special[t] = {
                        setup: function () {
                            var i = this.ownerDocument || this,
                                o = p._data(i, t);
                            o || i.addEventListener(e, n, !0),
                                p._data(i, t, (o || 0) + 1);
                        },
                        teardown: function () {
                            var i = this.ownerDocument || this,
                                o = p._data(i, t) - 1;
                            o
                                ? p._data(i, t, o)
                                : (i.removeEventListener(e, n, !0),
                                  p._removeData(i, t));
                        },
                    };
                }
            ),
        p.fn.extend({
            on: function (e, t, n, i) {
                return me(this, e, t, n, i);
            },
            one: function (e, t, n, i) {
                return me(this, e, t, n, i, 1);
            },
            off: function (e, t, n) {
                var i, o;
                if (e && e.preventDefault && e.handleObj)
                    return (
                        (i = e.handleObj),
                        p(e.delegateTarget).off(
                            i.namespace
                                ? i.origType + "." + i.namespace
                                : i.origType,
                            i.selector,
                            i.handler
                        ),
                        this
                    );
                if ("object" == typeof e) {
                    for (o in e) this.off(o, t, e[o]);
                    return this;
                }
                return (
                    (!1 !== t && "function" != typeof t) ||
                        ((n = t), (t = void 0)),
                    !1 === n && (n = he),
                    this.each(function () {
                        p.event.remove(this, e, n, t);
                    })
                );
            },
            trigger: function (e, t) {
                return this.each(function () {
                    p.event.trigger(e, t, this);
                });
            },
            triggerHandler: function (e, t) {
                var n = this[0];
                return n ? p.event.trigger(e, t, n, !0) : void 0;
            },
        });
    var ve = / jQuery\d+="(?:null|\d+)"/g,
        ye = new RegExp("<(?:" + J + ")[\\s/>]", "i"),
        be =
            /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:-]+)[^>]*)\/>/gi,
        xe = /<script|<style|<link/i,
        we = /checked\s*(?:[^=]|=\s*.checked.)/i,
        Se = /^true\/(.*)/,
        Ce = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
        $e = ee(i).appendChild(i.createElement("div"));

    function _e(e, t) {
        return p.nodeName(e, "table") &&
            p.nodeName(11 !== t.nodeType ? t : t.firstChild, "tr")
            ? e.getElementsByTagName("tbody")[0] ||
                  e.appendChild(e.ownerDocument.createElement("tbody"))
            : e;
    }

    function Te(e) {
        return (e.type = (null !== p.find.attr(e, "type")) + "/" + e.type), e;
    }

    function ke(e) {
        var t = Se.exec(e.type);
        return t ? (e.type = t[1]) : e.removeAttribute("type"), e;
    }

    function Ee(e, t) {
        if (1 === t.nodeType && p.hasData(e)) {
            var n,
                i,
                o,
                r = p._data(e),
                a = p._data(t, r),
                s = r.events;
            if (s)
                for (n in (delete a.handle, (a.events = {}), s))
                    for (i = 0, o = s[n].length; o > i; i++)
                        p.event.add(t, n, s[n][i]);
            a.data && (a.data = p.extend({}, a.data));
        }
    }

    function Ae(e, t) {
        var n, i, o;
        if (1 === t.nodeType) {
            if (
                ((n = t.nodeName.toLowerCase()),
                !d.noCloneEvent && t[p.expando])
            ) {
                for (i in (o = p._data(t)).events)
                    p.removeEvent(t, i, o.handle);
                t.removeAttribute(p.expando);
            }
            "script" === n && t.text !== e.text
                ? ((Te(t).text = e.text), ke(t))
                : "object" === n
                ? (t.parentNode && (t.outerHTML = e.outerHTML),
                  d.html5Clone &&
                      e.innerHTML &&
                      !p.trim(t.innerHTML) &&
                      (t.innerHTML = e.innerHTML))
                : "input" === n && G.test(e.type)
                ? ((t.defaultChecked = t.checked = e.checked),
                  t.value !== e.value && (t.value = e.value))
                : "option" === n
                ? (t.defaultSelected = t.selected = e.defaultSelected)
                : ("input" !== n && "textarea" !== n) ||
                  (t.defaultValue = e.defaultValue);
        }
    }

    function Oe(e, t, n, i) {
        t = r.apply([], t);
        var o,
            a,
            s,
            l,
            c,
            u,
            f = 0,
            h = e.length,
            g = h - 1,
            m = t[0],
            v = p.isFunction(m);
        if (v || (h > 1 && "string" == typeof m && !d.checkClone && we.test(m)))
            return e.each(function (o) {
                var r = e.eq(o);
                v && (t[0] = m.call(this, o, r.html())), Oe(r, t, n, i);
            });
        if (
            h &&
            ((o = (u = se(t, e[0].ownerDocument, !1, e, i)).firstChild),
            1 === u.childNodes.length && (u = o),
            o || i)
        ) {
            for (s = (l = p.map(ne(u, "script"), Te)).length; h > f; f++)
                (a = u),
                    f !== g &&
                        ((a = p.clone(a, !0, !0)),
                        s && p.merge(l, ne(a, "script"))),
                    n.call(e[f], a, f);
            if (s)
                for (
                    c = l[l.length - 1].ownerDocument, p.map(l, ke), f = 0;
                    s > f;
                    f++
                )
                    (a = l[f]),
                        K.test(a.type || "") &&
                            !p._data(a, "globalEval") &&
                            p.contains(c, a) &&
                            (a.src
                                ? p._evalUrl && p._evalUrl(a.src)
                                : p.globalEval(
                                      (
                                          a.text ||
                                          a.textContent ||
                                          a.innerHTML ||
                                          ""
                                      ).replace(Ce, "")
                                  ));
            u = o = null;
        }
        return e;
    }

    function De(e, t, n) {
        for (var i, o = t ? p.filter(t, e) : e, r = 0; null != (i = o[r]); r++)
            n || 1 !== i.nodeType || p.cleanData(ne(i)),
                i.parentNode &&
                    (n && p.contains(i.ownerDocument, i) && ie(ne(i, "script")),
                    i.parentNode.removeChild(i));
        return e;
    }
    p.extend({
        htmlPrefilter: function (e) {
            return e.replace(be, "<$1></$2>");
        },
        clone: function (e, t, n) {
            var i,
                o,
                r,
                a,
                s,
                l = p.contains(e.ownerDocument, e);
            if (
                (d.html5Clone ||
                p.isXMLDoc(e) ||
                !ye.test("<" + e.nodeName + ">")
                    ? (r = e.cloneNode(!0))
                    : (($e.innerHTML = e.outerHTML),
                      $e.removeChild((r = $e.firstChild))),
                !(
                    (d.noCloneEvent && d.noCloneChecked) ||
                    (1 !== e.nodeType && 11 !== e.nodeType) ||
                    p.isXMLDoc(e)
                ))
            )
                for (i = ne(r), s = ne(e), a = 0; null != (o = s[a]); ++a)
                    i[a] && Ae(o, i[a]);
            if (t)
                if (n)
                    for (
                        s = s || ne(e), i = i || ne(r), a = 0;
                        null != (o = s[a]);
                        a++
                    )
                        Ee(o, i[a]);
                else Ee(e, r);
            return (
                (i = ne(r, "script")).length > 0 &&
                    ie(i, !l && ne(e, "script")),
                (i = s = o = null),
                r
            );
        },
        cleanData: function (e, t) {
            for (
                var i,
                    o,
                    r,
                    a,
                    s = 0,
                    l = p.expando,
                    c = p.cache,
                    u = d.attributes,
                    f = p.event.special;
                null != (i = e[s]);
                s++
            )
                if ((t || I(i)) && (a = (r = i[l]) && c[r])) {
                    if (a.events)
                        for (o in a.events)
                            f[o]
                                ? p.event.remove(i, o)
                                : p.removeEvent(i, o, a.handle);
                    c[r] &&
                        (delete c[r],
                        u || void 0 === i.removeAttribute
                            ? (i[l] = void 0)
                            : i.removeAttribute(l),
                        n.push(r));
                }
        },
    }),
        p.fn.extend({
            domManip: Oe,
            detach: function (e) {
                return De(this, e, !0);
            },
            remove: function (e) {
                return De(this, e);
            },
            text: function (e) {
                return U(
                    this,
                    function (e) {
                        return void 0 === e
                            ? p.text(this)
                            : this.empty().append(
                                  (
                                      (this[0] && this[0].ownerDocument) ||
                                      i
                                  ).createTextNode(e)
                              );
                    },
                    null,
                    e,
                    arguments.length
                );
            },
            append: function () {
                return Oe(this, arguments, function (e) {
                    (1 !== this.nodeType &&
                        11 !== this.nodeType &&
                        9 !== this.nodeType) ||
                        _e(this, e).appendChild(e);
                });
            },
            prepend: function () {
                return Oe(this, arguments, function (e) {
                    if (
                        1 === this.nodeType ||
                        11 === this.nodeType ||
                        9 === this.nodeType
                    ) {
                        var t = _e(this, e);
                        t.insertBefore(e, t.firstChild);
                    }
                });
            },
            before: function () {
                return Oe(this, arguments, function (e) {
                    this.parentNode && this.parentNode.insertBefore(e, this);
                });
            },
            after: function () {
                return Oe(this, arguments, function (e) {
                    this.parentNode &&
                        this.parentNode.insertBefore(e, this.nextSibling);
                });
            },
            empty: function () {
                for (var e, t = 0; null != (e = this[t]); t++) {
                    for (
                        1 === e.nodeType && p.cleanData(ne(e, !1));
                        e.firstChild;

                    )
                        e.removeChild(e.firstChild);
                    e.options &&
                        p.nodeName(e, "select") &&
                        (e.options.length = 0);
                }
                return this;
            },
            clone: function (e, t) {
                return (
                    (e = null != e && e),
                    (t = null == t ? e : t),
                    this.map(function () {
                        return p.clone(this, e, t);
                    })
                );
            },
            html: function (e) {
                return U(
                    this,
                    function (e) {
                        var t = this[0] || {},
                            n = 0,
                            i = this.length;
                        if (void 0 === e)
                            return 1 === t.nodeType
                                ? t.innerHTML.replace(ve, "")
                                : void 0;
                        if (
                            "string" == typeof e &&
                            !xe.test(e) &&
                            (d.htmlSerialize || !ye.test(e)) &&
                            (d.leadingWhitespace || !Q.test(e)) &&
                            !te[(Z.exec(e) || ["", ""])[1].toLowerCase()]
                        ) {
                            e = p.htmlPrefilter(e);
                            try {
                                for (; i > n; n++)
                                    1 === (t = this[n] || {}).nodeType &&
                                        (p.cleanData(ne(t, !1)),
                                        (t.innerHTML = e));
                                t = 0;
                            } catch (e) {}
                        }
                        t && this.empty().append(e);
                    },
                    null,
                    e,
                    arguments.length
                );
            },
            replaceWith: function () {
                var e = [];
                return Oe(
                    this,
                    arguments,
                    function (t) {
                        var n = this.parentNode;
                        p.inArray(this, e) < 0 &&
                            (p.cleanData(ne(this)),
                            n && n.replaceChild(t, this));
                    },
                    e
                );
            },
        }),
        p.each(
            {
                appendTo: "append",
                prependTo: "prepend",
                insertBefore: "before",
                insertAfter: "after",
                replaceAll: "replaceWith",
            },
            function (e, t) {
                p.fn[e] = function (e) {
                    for (
                        var n, i = 0, o = [], r = p(e), s = r.length - 1;
                        s >= i;
                        i++
                    )
                        (n = i === s ? this : this.clone(!0)),
                            p(r[i])[t](n),
                            a.apply(o, n.get());
                    return this.pushStack(o);
                };
            }
        );
    var Me,
        Le = {
            HTML: "block",
            BODY: "block",
        };

    function Ne(e, t) {
        var n = p(t.createElement(e)).appendTo(t.body),
            i = p.css(n[0], "display");
        return n.detach(), i;
    }

    function Be(e) {
        var t = i,
            n = Le[e];
        return (
            n ||
                (("none" !== (n = Ne(e, t)) && n) ||
                    ((t = (
                        (Me = (
                            Me ||
                            p("<iframe frameborder='0' width='0' height='0'/>")
                        ).appendTo(t.documentElement))[0].contentWindow ||
                        Me[0].contentDocument
                    ).document).write(),
                    t.close(),
                    (n = Ne(e, t)),
                    Me.detach()),
                (Le[e] = n)),
            n
        );
    }
    var Ie = /^margin/,
        Pe = new RegExp("^(" + W + ")(?!px)[a-z%]+$", "i"),
        Re = function (e, t, n, i) {
            var o,
                r,
                a = {};
            for (r in t) (a[r] = e.style[r]), (e.style[r] = t[r]);
            for (r in ((o = n.apply(e, i || [])), t)) e.style[r] = a[r];
            return o;
        },
        He = i.documentElement;
    !(function () {
        var t,
            n,
            o,
            r,
            a,
            s,
            l = i.createElement("div"),
            c = i.createElement("div");
        if (c.style) {
            function u() {
                var u,
                    d,
                    f = i.documentElement;
                f.appendChild(l),
                    (c.style.cssText =
                        "-webkit-box-sizing:border-box;box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%"),
                    (t = o = s = !1),
                    (n = a = !0),
                    e.getComputedStyle &&
                        ((d = e.getComputedStyle(c)),
                        (t = "1%" !== (d || {}).top),
                        (s = "2px" === (d || {}).marginLeft),
                        (o =
                            "4px" ===
                            (
                                d || {
                                    width: "4px",
                                }
                            ).width),
                        (c.style.marginRight = "50%"),
                        (n =
                            "4px" ===
                            (
                                d || {
                                    marginRight: "4px",
                                }
                            ).marginRight),
                        ((u = c.appendChild(
                            i.createElement("div")
                        )).style.cssText = c.style.cssText =
                            "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0"),
                        (u.style.marginRight = u.style.width = "0"),
                        (c.style.width = "1px"),
                        (a = !parseFloat(
                            (e.getComputedStyle(u) || {}).marginRight
                        )),
                        c.removeChild(u)),
                    (c.style.display = "none"),
                    (r = 0 === c.getClientRects().length) &&
                        ((c.style.display = ""),
                        (c.innerHTML =
                            "<table><tr><td></td><td>t</td></tr></table>"),
                        (c.childNodes[0].style.borderCollapse = "separate"),
                        ((u = c.getElementsByTagName("td"))[0].style.cssText =
                            "margin:0;border:0;padding:0;display:none"),
                        (r = 0 === u[0].offsetHeight) &&
                            ((u[0].style.display = ""),
                            (u[1].style.display = "none"),
                            (r = 0 === u[0].offsetHeight))),
                    f.removeChild(l);
            }
            (c.style.cssText = "float:left;opacity:.5"),
                (d.opacity = "0.5" === c.style.opacity),
                (d.cssFloat = !!c.style.cssFloat),
                (c.style.backgroundClip = "content-box"),
                (c.cloneNode(!0).style.backgroundClip = ""),
                (d.clearCloneStyle = "content-box" === c.style.backgroundClip),
                ((l = i.createElement("div")).style.cssText =
                    "border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute"),
                (c.innerHTML = ""),
                l.appendChild(c),
                (d.boxSizing =
                    "" === c.style.boxSizing ||
                    "" === c.style.MozBoxSizing ||
                    "" === c.style.WebkitBoxSizing),
                p.extend(d, {
                    reliableHiddenOffsets: function () {
                        return null == t && u(), r;
                    },
                    boxSizingReliable: function () {
                        return null == t && u(), o;
                    },
                    pixelMarginRight: function () {
                        return null == t && u(), n;
                    },
                    pixelPosition: function () {
                        return null == t && u(), t;
                    },
                    reliableMarginRight: function () {
                        return null == t && u(), a;
                    },
                    reliableMarginLeft: function () {
                        return null == t && u(), s;
                    },
                });
        }
    })();
    var je,
        qe,
        ze = /^(top|right|bottom|left)$/;

    function We(e, t) {
        return {
            get: function () {
                return e()
                    ? void delete this.get
                    : (this.get = t).apply(this, arguments);
            },
        };
    }
    e.getComputedStyle
        ? ((je = function (t) {
              var n = t.ownerDocument.defaultView;
              return (n && n.opener) || (n = e), n.getComputedStyle(t);
          }),
          (qe = function (e, t, n) {
              var i,
                  o,
                  r,
                  a,
                  s = e.style;
              return (
                  ("" !==
                      (a = (n = n || je(e))
                          ? n.getPropertyValue(t) || n[t]
                          : void 0) &&
                      void 0 !== a) ||
                      p.contains(e.ownerDocument, e) ||
                      (a = p.style(e, t)),
                  n &&
                      !d.pixelMarginRight() &&
                      Pe.test(a) &&
                      Ie.test(t) &&
                      ((i = s.width),
                      (o = s.minWidth),
                      (r = s.maxWidth),
                      (s.minWidth = s.maxWidth = s.width = a),
                      (a = n.width),
                      (s.width = i),
                      (s.minWidth = o),
                      (s.maxWidth = r)),
                  void 0 === a ? a : a + ""
              );
          }))
        : He.currentStyle &&
          ((je = function (e) {
              return e.currentStyle;
          }),
          (qe = function (e, t, n) {
              var i,
                  o,
                  r,
                  a,
                  s = e.style;
              return (
                  null == (a = (n = n || je(e)) ? n[t] : void 0) &&
                      s &&
                      s[t] &&
                      (a = s[t]),
                  Pe.test(a) &&
                      !ze.test(t) &&
                      ((i = s.left),
                      (r = (o = e.runtimeStyle) && o.left) &&
                          (o.left = e.currentStyle.left),
                      (s.left = "fontSize" === t ? "1em" : a),
                      (a = s.pixelLeft + "px"),
                      (s.left = i),
                      r && (o.left = r)),
                  void 0 === a ? a : a + "" || "auto"
              );
          }));
    var Fe = /alpha\([^)]*\)/i,
        Xe = /opacity\s*=\s*([^)]*)/i,
        Ve = /^(none|table(?!-c[ea]).+)/,
        Ye = new RegExp("^(" + W + ")(.*)$", "i"),
        Ue = {
            position: "absolute",
            visibility: "hidden",
            display: "block",
        },
        Ge = {
            letterSpacing: "0",
            fontWeight: "400",
        },
        Ze = ["Webkit", "O", "Moz", "ms"],
        Ke = i.createElement("div").style;

    function Qe(e) {
        if (e in Ke) return e;
        for (
            var t = e.charAt(0).toUpperCase() + e.slice(1), n = Ze.length;
            n--;

        )
            if ((e = Ze[n] + t) in Ke) return e;
    }

    function Je(e, t) {
        for (var n, i, o, r = [], a = 0, s = e.length; s > a; a++)
            (i = e[a]).style &&
                ((r[a] = p._data(i, "olddisplay")),
                (n = i.style.display),
                t
                    ? (r[a] || "none" !== n || (i.style.display = ""),
                      "" === i.style.display &&
                          V(i) &&
                          (r[a] = p._data(i, "olddisplay", Be(i.nodeName))))
                    : ((o = V(i)),
                      ((n && "none" !== n) || !o) &&
                          p._data(
                              i,
                              "olddisplay",
                              o ? n : p.css(i, "display")
                          )));
        for (a = 0; s > a; a++)
            (i = e[a]).style &&
                ((t && "none" !== i.style.display && "" !== i.style.display) ||
                    (i.style.display = t ? r[a] || "" : "none"));
        return e;
    }

    function et(e, t, n) {
        var i = Ye.exec(t);
        return i ? Math.max(0, i[1] - (n || 0)) + (i[2] || "px") : t;
    }

    function tt(e, t, n, i, o) {
        for (
            var r =
                    n === (i ? "border" : "content")
                        ? 4
                        : "width" === t
                        ? 1
                        : 0,
                a = 0;
            4 > r;
            r += 2
        )
            "margin" === n && (a += p.css(e, n + X[r], !0, o)),
                i
                    ? ("content" === n &&
                          (a -= p.css(e, "padding" + X[r], !0, o)),
                      "margin" !== n &&
                          (a -= p.css(e, "border" + X[r] + "Width", !0, o)))
                    : ((a += p.css(e, "padding" + X[r], !0, o)),
                      "padding" !== n &&
                          (a += p.css(e, "border" + X[r] + "Width", !0, o)));
        return a;
    }

    function nt(e, t, n) {
        var i = !0,
            o = "width" === t ? e.offsetWidth : e.offsetHeight,
            r = je(e),
            a = d.boxSizing && "border-box" === p.css(e, "boxSizing", !1, r);
        if (0 >= o || null == o) {
            if (
                ((0 > (o = qe(e, t, r)) || null == o) && (o = e.style[t]),
                Pe.test(o))
            )
                return o;
            (i = a && (d.boxSizingReliable() || o === e.style[t])),
                (o = parseFloat(o) || 0);
        }
        return o + tt(e, t, n || (a ? "border" : "content"), i, r) + "px";
    }

    function it(e, t, n, i, o) {
        return new it.prototype.init(e, t, n, i, o);
    }
    p.extend({
        cssHooks: {
            opacity: {
                get: function (e, t) {
                    if (t) {
                        var n = qe(e, "opacity");
                        return "" === n ? "1" : n;
                    }
                },
            },
        },
        cssNumber: {
            animationIterationCount: !0,
            columnCount: !0,
            fillOpacity: !0,
            flexGrow: !0,
            flexShrink: !0,
            fontWeight: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0,
        },
        cssProps: {
            float: d.cssFloat ? "cssFloat" : "styleFloat",
        },
        style: function (e, t, n, i) {
            if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                var o,
                    r,
                    a,
                    s = p.camelCase(t),
                    l = e.style;
                if (
                    ((t = p.cssProps[s] || (p.cssProps[s] = Qe(s) || s)),
                    (a = p.cssHooks[t] || p.cssHooks[s]),
                    void 0 === n)
                )
                    return a && "get" in a && void 0 !== (o = a.get(e, !1, i))
                        ? o
                        : l[t];
                if (
                    ("string" == (r = typeof n) &&
                        (o = F.exec(n)) &&
                        o[1] &&
                        ((n = Y(e, t, o)), (r = "number")),
                    null != n &&
                        n == n &&
                        ("number" === r &&
                            (n += (o && o[3]) || (p.cssNumber[s] ? "" : "px")),
                        d.clearCloneStyle ||
                            "" !== n ||
                            0 !== t.indexOf("background") ||
                            (l[t] = "inherit"),
                        !(a && "set" in a && void 0 === (n = a.set(e, n, i)))))
                )
                    try {
                        l[t] = n;
                    } catch (e) {}
            }
        },
        css: function (e, t, n, i) {
            var o,
                r,
                a,
                s = p.camelCase(t);
            return (
                (t = p.cssProps[s] || (p.cssProps[s] = Qe(s) || s)),
                (a = p.cssHooks[t] || p.cssHooks[s]) &&
                    "get" in a &&
                    (r = a.get(e, !0, n)),
                void 0 === r && (r = qe(e, t, i)),
                "normal" === r && t in Ge && (r = Ge[t]),
                "" === n || n
                    ? ((o = parseFloat(r)),
                      !0 === n || isFinite(o) ? o || 0 : r)
                    : r
            );
        },
    }),
        p.each(["height", "width"], function (e, t) {
            p.cssHooks[t] = {
                get: function (e, n, i) {
                    return n
                        ? Ve.test(p.css(e, "display")) && 0 === e.offsetWidth
                            ? Re(e, Ue, function () {
                                  return nt(e, t, i);
                              })
                            : nt(e, t, i)
                        : void 0;
                },
                set: function (e, n, i) {
                    var o = i && je(e);
                    return et(
                        0,
                        n,
                        i
                            ? tt(
                                  e,
                                  t,
                                  i,
                                  d.boxSizing &&
                                      "border-box" ===
                                          p.css(e, "boxSizing", !1, o),
                                  o
                              )
                            : 0
                    );
                },
            };
        }),
        d.opacity ||
            (p.cssHooks.opacity = {
                get: function (e, t) {
                    return Xe.test(
                        (t && e.currentStyle
                            ? e.currentStyle.filter
                            : e.style.filter) || ""
                    )
                        ? 0.01 * parseFloat(RegExp.$1) + ""
                        : t
                        ? "1"
                        : "";
                },
                set: function (e, t) {
                    var n = e.style,
                        i = e.currentStyle,
                        o = p.isNumeric(t)
                            ? "alpha(opacity=" + 100 * t + ")"
                            : "",
                        r = (i && i.filter) || n.filter || "";
                    (n.zoom = 1),
                        ((t >= 1 || "" === t) &&
                            "" === p.trim(r.replace(Fe, "")) &&
                            n.removeAttribute &&
                            (n.removeAttribute("filter"),
                            "" === t || (i && !i.filter))) ||
                            (n.filter = Fe.test(r)
                                ? r.replace(Fe, o)
                                : r + " " + o);
                },
            }),
        (p.cssHooks.marginRight = We(d.reliableMarginRight, function (e, t) {
            return t
                ? Re(
                      e,
                      {
                          display: "inline-block",
                      },
                      qe,
                      [e, "marginRight"]
                  )
                : void 0;
        })),
        (p.cssHooks.marginLeft = We(d.reliableMarginLeft, function (e, t) {
            return t
                ? (parseFloat(qe(e, "marginLeft")) ||
                      (p.contains(e.ownerDocument, e)
                          ? e.getBoundingClientRect().left -
                            Re(
                                e,
                                {
                                    marginLeft: 0,
                                },
                                function () {
                                    return e.getBoundingClientRect().left;
                                }
                            )
                          : 0)) + "px"
                : void 0;
        })),
        p.each(
            {
                margin: "",
                padding: "",
                border: "Width",
            },
            function (e, t) {
                (p.cssHooks[e + t] = {
                    expand: function (n) {
                        for (
                            var i = 0,
                                o = {},
                                r = "string" == typeof n ? n.split(" ") : [n];
                            4 > i;
                            i++
                        )
                            o[e + X[i] + t] = r[i] || r[i - 2] || r[0];
                        return o;
                    },
                }),
                    Ie.test(e) || (p.cssHooks[e + t].set = et);
            }
        ),
        p.fn.extend({
            css: function (e, t) {
                return U(
                    this,
                    function (e, t, n) {
                        var i,
                            o,
                            r = {},
                            a = 0;
                        if (p.isArray(t)) {
                            for (i = je(e), o = t.length; o > a; a++)
                                r[t[a]] = p.css(e, t[a], !1, i);
                            return r;
                        }
                        return void 0 !== n ? p.style(e, t, n) : p.css(e, t);
                    },
                    e,
                    t,
                    arguments.length > 1
                );
            },
            show: function () {
                return Je(this, !0);
            },
            hide: function () {
                return Je(this);
            },
            toggle: function (e) {
                return "boolean" == typeof e
                    ? e
                        ? this.show()
                        : this.hide()
                    : this.each(function () {
                          V(this) ? p(this).show() : p(this).hide();
                      });
            },
        }),
        (p.Tween = it),
        (it.prototype = {
            constructor: it,
            init: function (e, t, n, i, o, r) {
                (this.elem = e),
                    (this.prop = n),
                    (this.easing = o || p.easing._default),
                    (this.options = t),
                    (this.start = this.now = this.cur()),
                    (this.end = i),
                    (this.unit = r || (p.cssNumber[n] ? "" : "px"));
            },
            cur: function () {
                var e = it.propHooks[this.prop];
                return e && e.get
                    ? e.get(this)
                    : it.propHooks._default.get(this);
            },
            run: function (e) {
                var t,
                    n = it.propHooks[this.prop];
                return (
                    this.options.duration
                        ? (this.pos = t =
                              p.easing[this.easing](
                                  e,
                                  this.options.duration * e,
                                  0,
                                  1,
                                  this.options.duration
                              ))
                        : (this.pos = t = e),
                    (this.now = (this.end - this.start) * t + this.start),
                    this.options.step &&
                        this.options.step.call(this.elem, this.now, this),
                    n && n.set ? n.set(this) : it.propHooks._default.set(this),
                    this
                );
            },
        }),
        (it.prototype.init.prototype = it.prototype),
        (it.propHooks = {
            _default: {
                get: function (e) {
                    var t;
                    return 1 !== e.elem.nodeType ||
                        (null != e.elem[e.prop] && null == e.elem.style[e.prop])
                        ? e.elem[e.prop]
                        : (t = p.css(e.elem, e.prop, "")) && "auto" !== t
                        ? t
                        : 0;
                },
                set: function (e) {
                    p.fx.step[e.prop]
                        ? p.fx.step[e.prop](e)
                        : 1 !== e.elem.nodeType ||
                          (null == e.elem.style[p.cssProps[e.prop]] &&
                              !p.cssHooks[e.prop])
                        ? (e.elem[e.prop] = e.now)
                        : p.style(e.elem, e.prop, e.now + e.unit);
                },
            },
        }),
        (it.propHooks.scrollTop = it.propHooks.scrollLeft =
            {
                set: function (e) {
                    e.elem.nodeType &&
                        e.elem.parentNode &&
                        (e.elem[e.prop] = e.now);
                },
            }),
        (p.easing = {
            linear: function (e) {
                return e;
            },
            swing: function (e) {
                return 0.5 - Math.cos(e * Math.PI) / 2;
            },
            _default: "swing",
        }),
        (p.fx = it.prototype.init),
        (p.fx.step = {});
    var ot,
        rt,
        at = /^(?:toggle|show|hide)$/,
        st = /queueHooks$/;

    function lt() {
        return (
            e.setTimeout(function () {
                ot = void 0;
            }),
            (ot = p.now())
        );
    }

    function ct(e, t) {
        var n,
            i = {
                height: e,
            },
            o = 0;
        for (t = t ? 1 : 0; 4 > o; o += 2 - t)
            i["margin" + (n = X[o])] = i["padding" + n] = e;
        return t && (i.opacity = i.width = e), i;
    }

    function ut(e, t, n) {
        for (
            var i,
                o = (dt.tweeners[t] || []).concat(dt.tweeners["*"]),
                r = 0,
                a = o.length;
            a > r;
            r++
        )
            if ((i = o[r].call(n, t, e))) return i;
    }

    function dt(e, t, n) {
        var i,
            o,
            r = 0,
            a = dt.prefilters.length,
            s = p.Deferred().always(function () {
                delete l.elem;
            }),
            l = function () {
                if (o) return !1;
                for (
                    var t = ot || lt(),
                        n = Math.max(0, c.startTime + c.duration - t),
                        i = 1 - (n / c.duration || 0),
                        r = 0,
                        a = c.tweens.length;
                    a > r;
                    r++
                )
                    c.tweens[r].run(i);
                return (
                    s.notifyWith(e, [c, i, n]),
                    1 > i && a ? n : (s.resolveWith(e, [c]), !1)
                );
            },
            c = s.promise({
                elem: e,
                props: p.extend({}, t),
                opts: p.extend(
                    !0,
                    {
                        specialEasing: {},
                        easing: p.easing._default,
                    },
                    n
                ),
                originalProperties: t,
                originalOptions: n,
                startTime: ot || lt(),
                duration: n.duration,
                tweens: [],
                createTween: function (t, n) {
                    var i = p.Tween(
                        e,
                        c.opts,
                        t,
                        n,
                        c.opts.specialEasing[t] || c.opts.easing
                    );
                    return c.tweens.push(i), i;
                },
                stop: function (t) {
                    var n = 0,
                        i = t ? c.tweens.length : 0;
                    if (o) return this;
                    for (o = !0; i > n; n++) c.tweens[n].run(1);
                    return (
                        t
                            ? (s.notifyWith(e, [c, 1, 0]),
                              s.resolveWith(e, [c, t]))
                            : s.rejectWith(e, [c, t]),
                        this
                    );
                },
            }),
            u = c.props;
        for (
            (function (e, t) {
                var n, i, o, r, a;
                for (n in e)
                    if (
                        ((o = t[(i = p.camelCase(n))]),
                        (r = e[n]),
                        p.isArray(r) && ((o = r[1]), (r = e[n] = r[0])),
                        n !== i && ((e[i] = r), delete e[n]),
                        (a = p.cssHooks[i]) && ("expand" in a))
                    )
                        for (n in ((r = a.expand(r)), delete e[i], r))
                            (n in e) || ((e[n] = r[n]), (t[n] = o));
                    else t[i] = o;
            })(u, c.opts.specialEasing);
            a > r;
            r++
        )
            if ((i = dt.prefilters[r].call(c, e, u, c.opts)))
                return (
                    p.isFunction(i.stop) &&
                        (p._queueHooks(c.elem, c.opts.queue).stop = p.proxy(
                            i.stop,
                            i
                        )),
                    i
                );
        return (
            p.map(u, ut, c),
            p.isFunction(c.opts.start) && c.opts.start.call(e, c),
            p.fx.timer(
                p.extend(l, {
                    elem: e,
                    anim: c,
                    queue: c.opts.queue,
                })
            ),
            c
                .progress(c.opts.progress)
                .done(c.opts.done, c.opts.complete)
                .fail(c.opts.fail)
                .always(c.opts.always)
        );
    }
    (p.Animation = p.extend(dt, {
        tweeners: {
            "*": [
                function (e, t) {
                    var n = this.createTween(e, t);
                    return Y(n.elem, e, F.exec(t), n), n;
                },
            ],
        },
        tweener: function (e, t) {
            p.isFunction(e) ? ((t = e), (e = ["*"])) : (e = e.match(L));
            for (var n, i = 0, o = e.length; o > i; i++)
                (n = e[i]),
                    (dt.tweeners[n] = dt.tweeners[n] || []),
                    dt.tweeners[n].unshift(t);
        },
        prefilters: [
            function (e, t, n) {
                var i,
                    o,
                    r,
                    a,
                    s,
                    l,
                    c,
                    u = this,
                    f = {},
                    h = e.style,
                    g = e.nodeType && V(e),
                    m = p._data(e, "fxshow");
                for (i in (n.queue ||
                    (null == (s = p._queueHooks(e, "fx")).unqueued &&
                        ((s.unqueued = 0),
                        (l = s.empty.fire),
                        (s.empty.fire = function () {
                            s.unqueued || l();
                        })),
                    s.unqueued++,
                    u.always(function () {
                        u.always(function () {
                            s.unqueued--,
                                p.queue(e, "fx").length || s.empty.fire();
                        });
                    })),
                1 === e.nodeType &&
                    ("height" in t || "width" in t) &&
                    ((n.overflow = [h.overflow, h.overflowX, h.overflowY]),
                    "inline" ===
                        ("none" === (c = p.css(e, "display"))
                            ? p._data(e, "olddisplay") || Be(e.nodeName)
                            : c) &&
                        "none" === p.css(e, "float") &&
                        (d.inlineBlockNeedsLayout && "inline" !== Be(e.nodeName)
                            ? (h.zoom = 1)
                            : (h.display = "inline-block"))),
                n.overflow &&
                    ((h.overflow = "hidden"),
                    d.shrinkWrapBlocks() ||
                        u.always(function () {
                            (h.overflow = n.overflow[0]),
                                (h.overflowX = n.overflow[1]),
                                (h.overflowY = n.overflow[2]);
                        })),
                t))
                    if (((o = t[i]), at.exec(o))) {
                        if (
                            (delete t[i],
                            (r = r || "toggle" === o),
                            o === (g ? "hide" : "show"))
                        ) {
                            if ("show" !== o || !m || void 0 === m[i]) continue;
                            g = !0;
                        }
                        f[i] = (m && m[i]) || p.style(e, i);
                    } else c = void 0;
                if (p.isEmptyObject(f))
                    "inline" === ("none" === c ? Be(e.nodeName) : c) &&
                        (h.display = c);
                else
                    for (i in (m
                        ? "hidden" in m && (g = m.hidden)
                        : (m = p._data(e, "fxshow", {})),
                    r && (m.hidden = !g),
                    g
                        ? p(e).show()
                        : u.done(function () {
                              p(e).hide();
                          }),
                    u.done(function () {
                        var t;
                        for (t in (p._removeData(e, "fxshow"), f))
                            p.style(e, t, f[t]);
                    }),
                    f))
                        (a = ut(g ? m[i] : 0, i, u)),
                            i in m ||
                                ((m[i] = a.start),
                                g &&
                                    ((a.end = a.start),
                                    (a.start =
                                        "width" === i || "height" === i
                                            ? 1
                                            : 0)));
            },
        ],
        prefilter: function (e, t) {
            t ? dt.prefilters.unshift(e) : dt.prefilters.push(e);
        },
    })),
        (p.speed = function (e, t, n) {
            var i =
                e && "object" == typeof e
                    ? p.extend({}, e)
                    : {
                          complete: n || (!n && t) || (p.isFunction(e) && e),
                          duration: e,
                          easing: (n && t) || (t && !p.isFunction(t) && t),
                      };
            return (
                (i.duration = p.fx.off
                    ? 0
                    : "number" == typeof i.duration
                    ? i.duration
                    : i.duration in p.fx.speeds
                    ? p.fx.speeds[i.duration]
                    : p.fx.speeds._default),
                (null != i.queue && !0 !== i.queue) || (i.queue = "fx"),
                (i.old = i.complete),
                (i.complete = function () {
                    p.isFunction(i.old) && i.old.call(this),
                        i.queue && p.dequeue(this, i.queue);
                }),
                i
            );
        }),
        p.fn.extend({
            fadeTo: function (e, t, n, i) {
                return this.filter(V).css("opacity", 0).show().end().animate(
                    {
                        opacity: t,
                    },
                    e,
                    n,
                    i
                );
            },
            animate: function (e, t, n, i) {
                var o = p.isEmptyObject(e),
                    r = p.speed(t, n, i),
                    a = function () {
                        var t = dt(this, p.extend({}, e), r);
                        (o || p._data(this, "finish")) && t.stop(!0);
                    };
                return (
                    (a.finish = a),
                    o || !1 === r.queue ? this.each(a) : this.queue(r.queue, a)
                );
            },
            stop: function (e, t, n) {
                var i = function (e) {
                    var t = e.stop;
                    delete e.stop, t(n);
                };
                return (
                    "string" != typeof e && ((n = t), (t = e), (e = void 0)),
                    t && !1 !== e && this.queue(e || "fx", []),
                    this.each(function () {
                        var t = !0,
                            o = null != e && e + "queueHooks",
                            r = p.timers,
                            a = p._data(this);
                        if (o) a[o] && a[o].stop && i(a[o]);
                        else
                            for (o in a)
                                a[o] && a[o].stop && st.test(o) && i(a[o]);
                        for (o = r.length; o--; )
                            r[o].elem !== this ||
                                (null != e && r[o].queue !== e) ||
                                (r[o].anim.stop(n), (t = !1), r.splice(o, 1));
                        (!t && n) || p.dequeue(this, e);
                    })
                );
            },
            finish: function (e) {
                return (
                    !1 !== e && (e = e || "fx"),
                    this.each(function () {
                        var t,
                            n = p._data(this),
                            i = n[e + "queue"],
                            o = n[e + "queueHooks"],
                            r = p.timers,
                            a = i ? i.length : 0;
                        for (
                            n.finish = !0,
                                p.queue(this, e, []),
                                o && o.stop && o.stop.call(this, !0),
                                t = r.length;
                            t--;

                        )
                            r[t].elem === this &&
                                r[t].queue === e &&
                                (r[t].anim.stop(!0), r.splice(t, 1));
                        for (t = 0; a > t; t++)
                            i[t] && i[t].finish && i[t].finish.call(this);
                        delete n.finish;
                    })
                );
            },
        }),
        p.each(["toggle", "show", "hide"], function (e, t) {
            var n = p.fn[t];
            p.fn[t] = function (e, i, o) {
                return null == e || "boolean" == typeof e
                    ? n.apply(this, arguments)
                    : this.animate(ct(t, !0), e, i, o);
            };
        }),
        p.each(
            {
                slideDown: ct("show"),
                slideUp: ct("hide"),
                slideToggle: ct("toggle"),
                fadeIn: {
                    opacity: "show",
                },
                fadeOut: {
                    opacity: "hide",
                },
                fadeToggle: {
                    opacity: "toggle",
                },
            },
            function (e, t) {
                p.fn[e] = function (e, n, i) {
                    return this.animate(t, e, n, i);
                };
            }
        ),
        (p.timers = []),
        (p.fx.tick = function () {
            var e,
                t = p.timers,
                n = 0;
            for (ot = p.now(); n < t.length; n++)
                (e = t[n])() || t[n] !== e || t.splice(n--, 1);
            t.length || p.fx.stop(), (ot = void 0);
        }),
        (p.fx.timer = function (e) {
            p.timers.push(e), e() ? p.fx.start() : p.timers.pop();
        }),
        (p.fx.interval = 13),
        (p.fx.start = function () {
            rt || (rt = e.setInterval(p.fx.tick, p.fx.interval));
        }),
        (p.fx.stop = function () {
            e.clearInterval(rt), (rt = null);
        }),
        (p.fx.speeds = {
            slow: 600,
            fast: 200,
            _default: 400,
        }),
        (p.fn.delay = function (t, n) {
            return (
                (t = (p.fx && p.fx.speeds[t]) || t),
                (n = n || "fx"),
                this.queue(n, function (n, i) {
                    var o = e.setTimeout(n, t);
                    i.stop = function () {
                        e.clearTimeout(o);
                    };
                })
            );
        }),
        (function () {
            var e,
                t = i.createElement("input"),
                n = i.createElement("div"),
                o = i.createElement("select"),
                r = o.appendChild(i.createElement("option"));
            (n = i.createElement("div")).setAttribute("className", "t"),
                (n.innerHTML =
                    "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>"),
                (e = n.getElementsByTagName("a")[0]),
                t.setAttribute("type", "checkbox"),
                n.appendChild(t),
                ((e = n.getElementsByTagName("a")[0]).style.cssText =
                    "top:1px"),
                (d.getSetAttribute = "t" !== n.className),
                (d.style = /top/.test(e.getAttribute("style"))),
                (d.hrefNormalized = "/a" === e.getAttribute("href")),
                (d.checkOn = !!t.value),
                (d.optSelected = r.selected),
                (d.enctype = !!i.createElement("form").enctype),
                (o.disabled = !0),
                (d.optDisabled = !r.disabled),
                (t = i.createElement("input")).setAttribute("value", ""),
                (d.input = "" === t.getAttribute("value")),
                (t.value = "t"),
                t.setAttribute("type", "radio"),
                (d.radioValue = "t" === t.value);
        })();
    var ft = /\r/g,
        pt = /[\x20\t\r\n\f]+/g;
    p.fn.extend({
        val: function (e) {
            var t,
                n,
                i,
                o = this[0];
            return arguments.length
                ? ((i = p.isFunction(e)),
                  this.each(function (n) {
                      var o;
                      1 === this.nodeType &&
                          (null == (o = i ? e.call(this, n, p(this).val()) : e)
                              ? (o = "")
                              : "number" == typeof o
                              ? (o += "")
                              : p.isArray(o) &&
                                (o = p.map(o, function (e) {
                                    return null == e ? "" : e + "";
                                })),
                          ((t =
                              p.valHooks[this.type] ||
                              p.valHooks[this.nodeName.toLowerCase()]) &&
                              "set" in t &&
                              void 0 !== t.set(this, o, "value")) ||
                              (this.value = o));
                  }))
                : o
                ? (t =
                      p.valHooks[o.type] ||
                      p.valHooks[o.nodeName.toLowerCase()]) &&
                  "get" in t &&
                  void 0 !== (n = t.get(o, "value"))
                    ? n
                    : "string" == typeof (n = o.value)
                    ? n.replace(ft, "")
                    : null == n
                    ? ""
                    : n
                : void 0;
        },
    }),
        p.extend({
            valHooks: {
                option: {
                    get: function (e) {
                        var t = p.find.attr(e, "value");
                        return null != t
                            ? t
                            : p.trim(p.text(e)).replace(pt, " ");
                    },
                },
                select: {
                    get: function (e) {
                        for (
                            var t,
                                n,
                                i = e.options,
                                o = e.selectedIndex,
                                r = "select-one" === e.type || 0 > o,
                                a = r ? null : [],
                                s = r ? o + 1 : i.length,
                                l = 0 > o ? s : r ? o : 0;
                            s > l;
                            l++
                        )
                            if (
                                ((n = i[l]).selected || l === o) &&
                                (d.optDisabled
                                    ? !n.disabled
                                    : null === n.getAttribute("disabled")) &&
                                (!n.parentNode.disabled ||
                                    !p.nodeName(n.parentNode, "optgroup"))
                            ) {
                                if (((t = p(n).val()), r)) return t;
                                a.push(t);
                            }
                        return a;
                    },
                    set: function (e, t) {
                        for (
                            var n,
                                i,
                                o = e.options,
                                r = p.makeArray(t),
                                a = o.length;
                            a--;

                        )
                            if (
                                ((i = o[a]),
                                p.inArray(p.valHooks.option.get(i), r) > -1)
                            )
                                try {
                                    i.selected = n = !0;
                                } catch (e) {
                                    i.scrollHeight;
                                }
                            else i.selected = !1;
                        return n || (e.selectedIndex = -1), o;
                    },
                },
            },
        }),
        p.each(["radio", "checkbox"], function () {
            (p.valHooks[this] = {
                set: function (e, t) {
                    return p.isArray(t)
                        ? (e.checked = p.inArray(p(e).val(), t) > -1)
                        : void 0;
                },
            }),
                d.checkOn ||
                    (p.valHooks[this].get = function (e) {
                        return null === e.getAttribute("value")
                            ? "on"
                            : e.value;
                    });
        });
    var ht,
        gt,
        mt = p.expr.attrHandle,
        vt = /^(?:checked|selected)$/i,
        yt = d.getSetAttribute,
        bt = d.input;
    p.fn.extend({
        attr: function (e, t) {
            return U(this, p.attr, e, t, arguments.length > 1);
        },
        removeAttr: function (e) {
            return this.each(function () {
                p.removeAttr(this, e);
            });
        },
    }),
        p.extend({
            attr: function (e, t, n) {
                var i,
                    o,
                    r = e.nodeType;
                if (3 !== r && 8 !== r && 2 !== r)
                    return void 0 === e.getAttribute
                        ? p.prop(e, t, n)
                        : ((1 === r && p.isXMLDoc(e)) ||
                              ((t = t.toLowerCase()),
                              (o =
                                  p.attrHooks[t] ||
                                  (p.expr.match.bool.test(t) ? gt : ht))),
                          void 0 !== n
                              ? null === n
                                  ? void p.removeAttr(e, t)
                                  : o &&
                                    "set" in o &&
                                    void 0 !== (i = o.set(e, n, t))
                                  ? i
                                  : (e.setAttribute(t, n + ""), n)
                              : o && "get" in o && null !== (i = o.get(e, t))
                              ? i
                              : null == (i = p.find.attr(e, t))
                              ? void 0
                              : i);
            },
            attrHooks: {
                type: {
                    set: function (e, t) {
                        if (
                            !d.radioValue &&
                            "radio" === t &&
                            p.nodeName(e, "input")
                        ) {
                            var n = e.value;
                            return (
                                e.setAttribute("type", t), n && (e.value = n), t
                            );
                        }
                    },
                },
            },
            removeAttr: function (e, t) {
                var n,
                    i,
                    o = 0,
                    r = t && t.match(L);
                if (r && 1 === e.nodeType)
                    for (; (n = r[o++]); )
                        (i = p.propFix[n] || n),
                            p.expr.match.bool.test(n)
                                ? (bt && yt) || !vt.test(n)
                                    ? (e[i] = !1)
                                    : (e[p.camelCase("default-" + n)] = e[i] =
                                          !1)
                                : p.attr(e, n, ""),
                            e.removeAttribute(yt ? n : i);
            },
        }),
        (gt = {
            set: function (e, t, n) {
                return (
                    !1 === t
                        ? p.removeAttr(e, n)
                        : (bt && yt) || !vt.test(n)
                        ? e.setAttribute((!yt && p.propFix[n]) || n, n)
                        : (e[p.camelCase("default-" + n)] = e[n] = !0),
                    n
                );
            },
        }),
        p.each(p.expr.match.bool.source.match(/\w+/g), function (e, t) {
            var n = mt[t] || p.find.attr;
            (bt && yt) || !vt.test(t)
                ? (mt[t] = function (e, t, i) {
                      var o, r;
                      return (
                          i ||
                              ((r = mt[t]),
                              (mt[t] = o),
                              (o = null != n(e, t, i) ? t.toLowerCase() : null),
                              (mt[t] = r)),
                          o
                      );
                  })
                : (mt[t] = function (e, t, n) {
                      return n
                          ? void 0
                          : e[p.camelCase("default-" + t)]
                          ? t.toLowerCase()
                          : null;
                  });
        }),
        (bt && yt) ||
            (p.attrHooks.value = {
                set: function (e, t, n) {
                    return p.nodeName(e, "input")
                        ? void (e.defaultValue = t)
                        : ht && ht.set(e, t, n);
                },
            }),
        yt ||
            ((ht = {
                set: function (e, t, n) {
                    var i = e.getAttributeNode(n);
                    return (
                        i ||
                            e.setAttributeNode(
                                (i = e.ownerDocument.createAttribute(n))
                            ),
                        (i.value = t += ""),
                        "value" === n || t === e.getAttribute(n) ? t : void 0
                    );
                },
            }),
            (mt.id =
                mt.name =
                mt.coords =
                    function (e, t, n) {
                        var i;
                        return n
                            ? void 0
                            : (i = e.getAttributeNode(t)) && "" !== i.value
                            ? i.value
                            : null;
                    }),
            (p.valHooks.button = {
                get: function (e, t) {
                    var n = e.getAttributeNode(t);
                    return n && n.specified ? n.value : void 0;
                },
                set: ht.set,
            }),
            (p.attrHooks.contenteditable = {
                set: function (e, t, n) {
                    ht.set(e, "" !== t && t, n);
                },
            }),
            p.each(["width", "height"], function (e, t) {
                p.attrHooks[t] = {
                    set: function (e, n) {
                        return "" === n
                            ? (e.setAttribute(t, "auto"), n)
                            : void 0;
                    },
                };
            })),
        d.style ||
            (p.attrHooks.style = {
                get: function (e) {
                    return e.style.cssText || void 0;
                },
                set: function (e, t) {
                    return (e.style.cssText = t + "");
                },
            });
    var xt = /^(?:input|select|textarea|button|object)$/i,
        wt = /^(?:a|area)$/i;
    p.fn.extend({
        prop: function (e, t) {
            return U(this, p.prop, e, t, arguments.length > 1);
        },
        removeProp: function (e) {
            return (
                (e = p.propFix[e] || e),
                this.each(function () {
                    try {
                        (this[e] = void 0), delete this[e];
                    } catch (e) {}
                })
            );
        },
    }),
        p.extend({
            prop: function (e, t, n) {
                var i,
                    o,
                    r = e.nodeType;
                if (3 !== r && 8 !== r && 2 !== r)
                    return (
                        (1 === r && p.isXMLDoc(e)) ||
                            ((t = p.propFix[t] || t), (o = p.propHooks[t])),
                        void 0 !== n
                            ? o && "set" in o && void 0 !== (i = o.set(e, n, t))
                                ? i
                                : (e[t] = n)
                            : o && "get" in o && null !== (i = o.get(e, t))
                            ? i
                            : e[t]
                    );
            },
            propHooks: {
                tabIndex: {
                    get: function (e) {
                        var t = p.find.attr(e, "tabindex");
                        return t
                            ? parseInt(t, 10)
                            : xt.test(e.nodeName) ||
                              (wt.test(e.nodeName) && e.href)
                            ? 0
                            : -1;
                    },
                },
            },
            propFix: {
                for: "htmlFor",
                class: "className",
            },
        }),
        d.hrefNormalized ||
            p.each(["href", "src"], function (e, t) {
                p.propHooks[t] = {
                    get: function (e) {
                        return e.getAttribute(t, 4);
                    },
                };
            }),
        d.optSelected ||
            (p.propHooks.selected = {
                get: function (e) {
                    var t = e.parentNode;
                    return (
                        t &&
                            (t.selectedIndex,
                            t.parentNode && t.parentNode.selectedIndex),
                        null
                    );
                },
                set: function (e) {
                    var t = e.parentNode;
                    t &&
                        (t.selectedIndex,
                        t.parentNode && t.parentNode.selectedIndex);
                },
            }),
        p.each(
            [
                "tabIndex",
                "readOnly",
                "maxLength",
                "cellSpacing",
                "cellPadding",
                "rowSpan",
                "colSpan",
                "useMap",
                "frameBorder",
                "contentEditable",
            ],
            function () {
                p.propFix[this.toLowerCase()] = this;
            }
        ),
        d.enctype || (p.propFix.enctype = "encoding");
    var St = /[\t\r\n\f]/g;

    function Ct(e) {
        return p.attr(e, "class") || "";
    }
    p.fn.extend({
        addClass: function (e) {
            var t,
                n,
                i,
                o,
                r,
                a,
                s,
                l = 0;
            if (p.isFunction(e))
                return this.each(function (t) {
                    p(this).addClass(e.call(this, t, Ct(this)));
                });
            if ("string" == typeof e && e)
                for (t = e.match(L) || []; (n = this[l++]); )
                    if (
                        ((o = Ct(n)),
                        (i =
                            1 === n.nodeType &&
                            (" " + o + " ").replace(St, " ")))
                    ) {
                        for (a = 0; (r = t[a++]); )
                            i.indexOf(" " + r + " ") < 0 && (i += r + " ");
                        o !== (s = p.trim(i)) && p.attr(n, "class", s);
                    }
            return this;
        },
        removeClass: function (e) {
            var t,
                n,
                i,
                o,
                r,
                a,
                s,
                l = 0;
            if (p.isFunction(e))
                return this.each(function (t) {
                    p(this).removeClass(e.call(this, t, Ct(this)));
                });
            if (!arguments.length) return this.attr("class", "");
            if ("string" == typeof e && e)
                for (t = e.match(L) || []; (n = this[l++]); )
                    if (
                        ((o = Ct(n)),
                        (i =
                            1 === n.nodeType &&
                            (" " + o + " ").replace(St, " ")))
                    ) {
                        for (a = 0; (r = t[a++]); )
                            for (; i.indexOf(" " + r + " ") > -1; )
                                i = i.replace(" " + r + " ", " ");
                        o !== (s = p.trim(i)) && p.attr(n, "class", s);
                    }
            return this;
        },
        toggleClass: function (e, t) {
            var n = typeof e;
            return "boolean" == typeof t && "string" === n
                ? t
                    ? this.addClass(e)
                    : this.removeClass(e)
                : p.isFunction(e)
                ? this.each(function (n) {
                      p(this).toggleClass(e.call(this, n, Ct(this), t), t);
                  })
                : this.each(function () {
                      var t, i, o, r;
                      if ("string" === n)
                          for (
                              i = 0, o = p(this), r = e.match(L) || [];
                              (t = r[i++]);

                          )
                              o.hasClass(t) ? o.removeClass(t) : o.addClass(t);
                      else
                          (void 0 !== e && "boolean" !== n) ||
                              ((t = Ct(this)) &&
                                  p._data(this, "__className__", t),
                              p.attr(
                                  this,
                                  "class",
                                  t || !1 === e
                                      ? ""
                                      : p._data(this, "__className__") || ""
                              ));
                  });
        },
        hasClass: function (e) {
            var t,
                n,
                i = 0;
            for (t = " " + e + " "; (n = this[i++]); )
                if (
                    1 === n.nodeType &&
                    (" " + Ct(n) + " ").replace(St, " ").indexOf(t) > -1
                )
                    return !0;
            return !1;
        },
    }),
        p.each(
            "blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(
                " "
            ),
            function (e, t) {
                p.fn[t] = function (e, n) {
                    return arguments.length > 0
                        ? this.on(t, null, e, n)
                        : this.trigger(t);
                };
            }
        ),
        p.fn.extend({
            hover: function (e, t) {
                return this.mouseenter(e).mouseleave(t || e);
            },
        });
    var $t = e.location,
        _t = p.now(),
        Tt = /\?/,
        kt =
            /(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;
    (p.parseJSON = function (t) {
        if (e.JSON && e.JSON.parse) return e.JSON.parse(t + "");
        var n,
            i = null,
            o = p.trim(t + "");
        return o &&
            !p.trim(
                o.replace(kt, function (e, t, o, r) {
                    return (
                        n && t && (i = 0),
                        0 === i ? e : ((n = o || t), (i += !r - !o), "")
                    );
                })
            )
            ? Function("return " + o)()
            : p.error("Invalid JSON: " + t);
    }),
        (p.parseXML = function (t) {
            var n;
            if (!t || "string" != typeof t) return null;
            try {
                e.DOMParser
                    ? (n = new e.DOMParser().parseFromString(t, "text/xml"))
                    : (((n = new e.ActiveXObject("Microsoft.XMLDOM")).async =
                          "false"),
                      n.loadXML(t));
            } catch (e) {
                n = void 0;
            }
            return (
                (n &&
                    n.documentElement &&
                    !n.getElementsByTagName("parsererror").length) ||
                    p.error("Invalid XML: " + t),
                n
            );
        });
    var Et = /#.*$/,
        At = /([?&])_=[^&]*/,
        Ot = /^(.*?):[ \t]*([^\r\n]*)\r?$/gm,
        Dt = /^(?:GET|HEAD)$/,
        Mt = /^\/\//,
        Lt = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,
        Nt = {},
        Bt = {},
        It = "*/".concat("*"),
        Pt = $t.href,
        Rt = Lt.exec(Pt.toLowerCase()) || [];

    function Ht(e) {
        return function (t, n) {
            "string" != typeof t && ((n = t), (t = "*"));
            var i,
                o = 0,
                r = t.toLowerCase().match(L) || [];
            if (p.isFunction(n))
                for (; (i = r[o++]); )
                    "+" === i.charAt(0)
                        ? ((i = i.slice(1) || "*"),
                          (e[i] = e[i] || []).unshift(n))
                        : (e[i] = e[i] || []).push(n);
        };
    }

    function jt(e, t, n, i) {
        var o = {},
            r = e === Bt;

        function a(s) {
            var l;
            return (
                (o[s] = !0),
                p.each(e[s] || [], function (e, s) {
                    var c = s(t, n, i);
                    return "string" != typeof c || r || o[c]
                        ? r
                            ? !(l = c)
                            : void 0
                        : (t.dataTypes.unshift(c), a(c), !1);
                }),
                l
            );
        }
        return a(t.dataTypes[0]) || (!o["*"] && a("*"));
    }

    function qt(e, t) {
        var n,
            i,
            o = p.ajaxSettings.flatOptions || {};
        for (i in t) void 0 !== t[i] && ((o[i] ? e : n || (n = {}))[i] = t[i]);
        return n && p.extend(!0, e, n), e;
    }

    function zt(e) {
        return (e.style && e.style.display) || p.css(e, "display");
    }
    p.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
            url: Pt,
            type: "GET",
            isLocal:
                /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(
                    Rt[1]
                ),
            global: !0,
            processData: !0,
            async: !0,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            accepts: {
                "*": It,
                text: "text/plain",
                html: "text/html",
                xml: "application/xml, text/xml",
                json: "application/json, text/javascript",
            },
            contents: {
                xml: /\bxml\b/,
                html: /\bhtml/,
                json: /\bjson\b/,
            },
            responseFields: {
                xml: "responseXML",
                text: "responseText",
                json: "responseJSON",
            },
            converters: {
                "* text": String,
                "text html": !0,
                "text json": p.parseJSON,
                "text xml": p.parseXML,
            },
            flatOptions: {
                url: !0,
                context: !0,
            },
        },
        ajaxSetup: function (e, t) {
            return t ? qt(qt(e, p.ajaxSettings), t) : qt(p.ajaxSettings, e);
        },
        ajaxPrefilter: Ht(Nt),
        ajaxTransport: Ht(Bt),
        ajax: function (t, n) {
            "object" == typeof t && ((n = t), (t = void 0)), (n = n || {});
            var i,
                o,
                r,
                a,
                s,
                l,
                c,
                u,
                d = p.ajaxSetup({}, n),
                f = d.context || d,
                h = d.context && (f.nodeType || f.jquery) ? p(f) : p.event,
                g = p.Deferred(),
                m = p.Callbacks("once memory"),
                v = d.statusCode || {},
                y = {},
                b = {},
                x = 0,
                w = "canceled",
                S = {
                    readyState: 0,
                    getResponseHeader: function (e) {
                        var t;
                        if (2 === x) {
                            if (!u)
                                for (u = {}; (t = Ot.exec(a)); )
                                    u[t[1].toLowerCase()] = t[2];
                            t = u[e.toLowerCase()];
                        }
                        return null == t ? null : t;
                    },
                    getAllResponseHeaders: function () {
                        return 2 === x ? a : null;
                    },
                    setRequestHeader: function (e, t) {
                        var n = e.toLowerCase();
                        return x || ((e = b[n] = b[n] || e), (y[e] = t)), this;
                    },
                    overrideMimeType: function (e) {
                        return x || (d.mimeType = e), this;
                    },
                    statusCode: function (e) {
                        var t;
                        if (e)
                            if (2 > x) for (t in e) v[t] = [v[t], e[t]];
                            else S.always(e[S.status]);
                        return this;
                    },
                    abort: function (e) {
                        var t = e || w;
                        return c && c.abort(t), C(0, t), this;
                    },
                };
            if (
                ((g.promise(S).complete = m.add),
                (S.success = S.done),
                (S.error = S.fail),
                (d.url = ((t || d.url || Pt) + "")
                    .replace(Et, "")
                    .replace(Mt, Rt[1] + "//")),
                (d.type = n.method || n.type || d.method || d.type),
                (d.dataTypes = p
                    .trim(d.dataType || "*")
                    .toLowerCase()
                    .match(L) || [""]),
                null == d.crossDomain &&
                    ((i = Lt.exec(d.url.toLowerCase())),
                    (d.crossDomain = !(
                        !i ||
                        (i[1] === Rt[1] &&
                            i[2] === Rt[2] &&
                            (i[3] || ("http:" === i[1] ? "80" : "443")) ===
                                (Rt[3] || ("http:" === Rt[1] ? "80" : "443")))
                    ))),
                d.data &&
                    d.processData &&
                    "string" != typeof d.data &&
                    (d.data = p.param(d.data, d.traditional)),
                jt(Nt, d, n, S),
                2 === x)
            )
                return S;
            for (o in ((l = p.event && d.global) &&
                0 == p.active++ &&
                p.event.trigger("ajaxStart"),
            (d.type = d.type.toUpperCase()),
            (d.hasContent = !Dt.test(d.type)),
            (r = d.url),
            d.hasContent ||
                (d.data &&
                    ((r = d.url += (Tt.test(r) ? "&" : "?") + d.data),
                    delete d.data),
                !1 === d.cache &&
                    (d.url = At.test(r)
                        ? r.replace(At, "$1_=" + _t++)
                        : r + (Tt.test(r) ? "&" : "?") + "_=" + _t++)),
            d.ifModified &&
                (p.lastModified[r] &&
                    S.setRequestHeader("If-Modified-Since", p.lastModified[r]),
                p.etag[r] && S.setRequestHeader("If-None-Match", p.etag[r])),
            ((d.data && d.hasContent && !1 !== d.contentType) ||
                n.contentType) &&
                S.setRequestHeader("Content-Type", d.contentType),
            S.setRequestHeader(
                "Accept",
                d.dataTypes[0] && d.accepts[d.dataTypes[0]]
                    ? d.accepts[d.dataTypes[0]] +
                          ("*" !== d.dataTypes[0] ? ", " + It + "; q=0.01" : "")
                    : d.accepts["*"]
            ),
            d.headers))
                S.setRequestHeader(o, d.headers[o]);
            if (d.beforeSend && (!1 === d.beforeSend.call(f, S, d) || 2 === x))
                return S.abort();
            for (o in ((w = "abort"),
            {
                success: 1,
                error: 1,
                complete: 1,
            }))
                S[o](d[o]);
            if ((c = jt(Bt, d, n, S))) {
                if (
                    ((S.readyState = 1),
                    l && h.trigger("ajaxSend", [S, d]),
                    2 === x)
                )
                    return S;
                d.async &&
                    d.timeout > 0 &&
                    (s = e.setTimeout(function () {
                        S.abort("timeout");
                    }, d.timeout));
                try {
                    (x = 1), c.send(y, C);
                } catch (e) {
                    if (!(2 > x)) throw e;
                    C(-1, e);
                }
            } else C(-1, "No Transport");

            function C(t, n, i, o) {
                var u,
                    y,
                    b,
                    w,
                    C,
                    $ = n;
                2 !== x &&
                    ((x = 2),
                    s && e.clearTimeout(s),
                    (c = void 0),
                    (a = o || ""),
                    (S.readyState = t > 0 ? 4 : 0),
                    (u = (t >= 200 && 300 > t) || 304 === t),
                    i &&
                        (w = (function (e, t, n) {
                            for (
                                var i, o, r, a, s = e.contents, l = e.dataTypes;
                                "*" === l[0];

                            )
                                l.shift(),
                                    void 0 === o &&
                                        (o =
                                            e.mimeType ||
                                            t.getResponseHeader(
                                                "Content-Type"
                                            ));
                            if (o)
                                for (a in s)
                                    if (s[a] && s[a].test(o)) {
                                        l.unshift(a);
                                        break;
                                    }
                            if (l[0] in n) r = l[0];
                            else {
                                for (a in n) {
                                    if (!l[0] || e.converters[a + " " + l[0]]) {
                                        r = a;
                                        break;
                                    }
                                    i || (i = a);
                                }
                                r = r || i;
                            }
                            return r
                                ? (r !== l[0] && l.unshift(r), n[r])
                                : void 0;
                        })(d, S, i)),
                    (w = (function (e, t, n, i) {
                        var o,
                            r,
                            a,
                            s,
                            l,
                            c = {},
                            u = e.dataTypes.slice();
                        if (u[1])
                            for (a in e.converters)
                                c[a.toLowerCase()] = e.converters[a];
                        for (r = u.shift(); r; )
                            if (
                                (e.responseFields[r] &&
                                    (n[e.responseFields[r]] = t),
                                !l &&
                                    i &&
                                    e.dataFilter &&
                                    (t = e.dataFilter(t, e.dataType)),
                                (l = r),
                                (r = u.shift()))
                            )
                                if ("*" === r) r = l;
                                else if ("*" !== l && l !== r) {
                                    if (!(a = c[l + " " + r] || c["* " + r]))
                                        for (o in c)
                                            if (
                                                (s = o.split(" "))[1] === r &&
                                                (a =
                                                    c[l + " " + s[0]] ||
                                                    c["* " + s[0]])
                                            ) {
                                                !0 === a
                                                    ? (a = c[o])
                                                    : !0 !== c[o] &&
                                                      ((r = s[0]),
                                                      u.unshift(s[1]));
                                                break;
                                            }
                                    if (!0 !== a)
                                        if (a && e.throws) t = a(t);
                                        else
                                            try {
                                                t = a(t);
                                            } catch (e) {
                                                return {
                                                    state: "parsererror",
                                                    error: a
                                                        ? e
                                                        : "No conversion from " +
                                                          l +
                                                          " to " +
                                                          r,
                                                };
                                            }
                                }
                        return {
                            state: "success",
                            data: t,
                        };
                    })(d, w, S, u)),
                    u
                        ? (d.ifModified &&
                              ((C = S.getResponseHeader("Last-Modified")) &&
                                  (p.lastModified[r] = C),
                              (C = S.getResponseHeader("etag")) &&
                                  (p.etag[r] = C)),
                          204 === t || "HEAD" === d.type
                              ? ($ = "nocontent")
                              : 304 === t
                              ? ($ = "notmodified")
                              : (($ = w.state),
                                (y = w.data),
                                (u = !(b = w.error))))
                        : ((b = $),
                          (!t && $) || (($ = "error"), 0 > t && (t = 0))),
                    (S.status = t),
                    (S.statusText = (n || $) + ""),
                    u
                        ? g.resolveWith(f, [y, $, S])
                        : g.rejectWith(f, [S, $, b]),
                    S.statusCode(v),
                    (v = void 0),
                    l &&
                        h.trigger(u ? "ajaxSuccess" : "ajaxError", [
                            S,
                            d,
                            u ? y : b,
                        ]),
                    m.fireWith(f, [S, $]),
                    l &&
                        (h.trigger("ajaxComplete", [S, d]),
                        --p.active || p.event.trigger("ajaxStop")));
            }
            return S;
        },
        getJSON: function (e, t, n) {
            return p.get(e, t, n, "json");
        },
        getScript: function (e, t) {
            return p.get(e, void 0, t, "script");
        },
    }),
        p.each(["get", "post"], function (e, t) {
            p[t] = function (e, n, i, o) {
                return (
                    p.isFunction(n) && ((o = o || i), (i = n), (n = void 0)),
                    p.ajax(
                        p.extend(
                            {
                                url: e,
                                type: t,
                                dataType: o,
                                data: n,
                                success: i,
                            },
                            p.isPlainObject(e) && e
                        )
                    )
                );
            };
        }),
        (p._evalUrl = function (e) {
            return p.ajax({
                url: e,
                type: "GET",
                dataType: "script",
                cache: !0,
                async: !1,
                global: !1,
                throws: !0,
            });
        }),
        p.fn.extend({
            wrapAll: function (e) {
                if (p.isFunction(e))
                    return this.each(function (t) {
                        p(this).wrapAll(e.call(this, t));
                    });
                if (this[0]) {
                    var t = p(e, this[0].ownerDocument).eq(0).clone(!0);
                    this[0].parentNode && t.insertBefore(this[0]),
                        t
                            .map(function () {
                                for (
                                    var e = this;
                                    e.firstChild && 1 === e.firstChild.nodeType;

                                )
                                    e = e.firstChild;
                                return e;
                            })
                            .append(this);
                }
                return this;
            },
            wrapInner: function (e) {
                return p.isFunction(e)
                    ? this.each(function (t) {
                          p(this).wrapInner(e.call(this, t));
                      })
                    : this.each(function () {
                          var t = p(this),
                              n = t.contents();
                          n.length ? n.wrapAll(e) : t.append(e);
                      });
            },
            wrap: function (e) {
                var t = p.isFunction(e);
                return this.each(function (n) {
                    p(this).wrapAll(t ? e.call(this, n) : e);
                });
            },
            unwrap: function () {
                return this.parent()
                    .each(function () {
                        p.nodeName(this, "body") ||
                            p(this).replaceWith(this.childNodes);
                    })
                    .end();
            },
        }),
        (p.expr.filters.hidden = function (e) {
            return d.reliableHiddenOffsets()
                ? e.offsetWidth <= 0 &&
                      e.offsetHeight <= 0 &&
                      !e.getClientRects().length
                : (function (e) {
                      if (!p.contains(e.ownerDocument || i, e)) return !0;
                      for (; e && 1 === e.nodeType; ) {
                          if ("none" === zt(e) || "hidden" === e.type)
                              return !0;
                          e = e.parentNode;
                      }
                      return !1;
                  })(e);
        }),
        (p.expr.filters.visible = function (e) {
            return !p.expr.filters.hidden(e);
        });
    var Wt = /%20/g,
        Ft = /\[\]$/,
        Xt = /\r?\n/g,
        Vt = /^(?:submit|button|image|reset|file)$/i,
        Yt = /^(?:input|select|textarea|keygen)/i;

    function Ut(e, t, n, i) {
        var o;
        if (p.isArray(t))
            p.each(t, function (t, o) {
                n || Ft.test(e)
                    ? i(e, o)
                    : Ut(
                          e +
                              "[" +
                              ("object" == typeof o && null != o ? t : "") +
                              "]",
                          o,
                          n,
                          i
                      );
            });
        else if (n || "object" !== p.type(t)) i(e, t);
        else for (o in t) Ut(e + "[" + o + "]", t[o], n, i);
    }
    (p.param = function (e, t) {
        var n,
            i = [],
            o = function (e, t) {
                (t = p.isFunction(t) ? t() : null == t ? "" : t),
                    (i[i.length] =
                        encodeURIComponent(e) + "=" + encodeURIComponent(t));
            };
        if (
            (void 0 === t && (t = p.ajaxSettings && p.ajaxSettings.traditional),
            p.isArray(e) || (e.jquery && !p.isPlainObject(e)))
        )
            p.each(e, function () {
                o(this.name, this.value);
            });
        else for (n in e) Ut(n, e[n], t, o);
        return i.join("&").replace(Wt, "+");
    }),
        p.fn.extend({
            serialize: function () {
                return p.param(this.serializeArray());
            },
            serializeArray: function () {
                return this.map(function () {
                    var e = p.prop(this, "elements");
                    return e ? p.makeArray(e) : this;
                })
                    .filter(function () {
                        var e = this.type;
                        return (
                            this.name &&
                            !p(this).is(":disabled") &&
                            Yt.test(this.nodeName) &&
                            !Vt.test(e) &&
                            (this.checked || !G.test(e))
                        );
                    })
                    .map(function (e, t) {
                        var n = p(this).val();
                        return null == n
                            ? null
                            : p.isArray(n)
                            ? p.map(n, function (e) {
                                  return {
                                      name: t.name,
                                      value: e.replace(Xt, "\r\n"),
                                  };
                              })
                            : {
                                  name: t.name,
                                  value: n.replace(Xt, "\r\n"),
                              };
                    })
                    .get();
            },
        }),
        (p.ajaxSettings.xhr =
            void 0 !== e.ActiveXObject
                ? function () {
                      return this.isLocal
                          ? Jt()
                          : i.documentMode > 8
                          ? Qt()
                          : (/^(get|post|head|put|delete|options)$/i.test(
                                this.type
                            ) &&
                                Qt()) ||
                            Jt();
                  }
                : Qt);
    var Gt = 0,
        Zt = {},
        Kt = p.ajaxSettings.xhr();

    function Qt() {
        try {
            return new e.XMLHttpRequest();
        } catch (e) {}
    }

    function Jt() {
        try {
            return new e.ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {}
    }
    e.attachEvent &&
        e.attachEvent("onunload", function () {
            for (var e in Zt) Zt[e](void 0, !0);
        }),
        (d.cors = !!Kt && "withCredentials" in Kt),
        (Kt = d.ajax = !!Kt) &&
            p.ajaxTransport(function (t) {
                var n;
                if (!t.crossDomain || d.cors)
                    return {
                        send: function (i, o) {
                            var r,
                                a = t.xhr(),
                                s = ++Gt;
                            if (
                                (a.open(
                                    t.type,
                                    t.url,
                                    t.async,
                                    t.username,
                                    t.password
                                ),
                                t.xhrFields)
                            )
                                for (r in t.xhrFields) a[r] = t.xhrFields[r];
                            for (r in (t.mimeType &&
                                a.overrideMimeType &&
                                a.overrideMimeType(t.mimeType),
                            t.crossDomain ||
                                i["X-Requested-With"] ||
                                (i["X-Requested-With"] = "XMLHttpRequest"),
                            i))
                                void 0 !== i[r] &&
                                    a.setRequestHeader(r, i[r] + "");
                            a.send((t.hasContent && t.data) || null),
                                (n = function (e, i) {
                                    var r, l, c;
                                    if (n && (i || 4 === a.readyState))
                                        if (
                                            (delete Zt[s],
                                            (n = void 0),
                                            (a.onreadystatechange = p.noop),
                                            i)
                                        )
                                            4 !== a.readyState && a.abort();
                                        else {
                                            (c = {}),
                                                (r = a.status),
                                                "string" ==
                                                    typeof a.responseText &&
                                                    (c.text = a.responseText);
                                            try {
                                                l = a.statusText;
                                            } catch (e) {
                                                l = "";
                                            }
                                            r || !t.isLocal || t.crossDomain
                                                ? 1223 === r && (r = 204)
                                                : (r = c.text ? 200 : 404);
                                        }
                                    c && o(r, l, c, a.getAllResponseHeaders());
                                }),
                                t.async
                                    ? 4 === a.readyState
                                        ? e.setTimeout(n)
                                        : (a.onreadystatechange = Zt[s] = n)
                                    : n();
                        },
                        abort: function () {
                            n && n(void 0, !0);
                        },
                    };
            }),
        p.ajaxSetup({
            accepts: {
                script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript",
            },
            contents: {
                script: /\b(?:java|ecma)script\b/,
            },
            converters: {
                "text script": function (e) {
                    return p.globalEval(e), e;
                },
            },
        }),
        p.ajaxPrefilter("script", function (e) {
            void 0 === e.cache && (e.cache = !1),
                e.crossDomain && ((e.type = "GET"), (e.global = !1));
        }),
        p.ajaxTransport("script", function (e) {
            if (e.crossDomain) {
                var t,
                    n = i.head || p("head")[0] || i.documentElement;
                return {
                    send: function (o, r) {
                        ((t = i.createElement("script")).async = !0),
                            e.scriptCharset && (t.charset = e.scriptCharset),
                            (t.src = e.url),
                            (t.onload = t.onreadystatechange =
                                function (e, n) {
                                    (n ||
                                        !t.readyState ||
                                        /loaded|complete/.test(t.readyState)) &&
                                        ((t.onload = t.onreadystatechange =
                                            null),
                                        t.parentNode &&
                                            t.parentNode.removeChild(t),
                                        (t = null),
                                        n || r(200, "success"));
                                }),
                            n.insertBefore(t, n.firstChild);
                    },
                    abort: function () {
                        t && t.onload(void 0, !0);
                    },
                };
            }
        });
    var en = [],
        tn = /(=)\?(?=&|$)|\?\?/;
    p.ajaxSetup({
        jsonp: "callback",
        jsonpCallback: function () {
            var e = en.pop() || p.expando + "_" + _t++;
            return (this[e] = !0), e;
        },
    }),
        p.ajaxPrefilter("json jsonp", function (t, n, i) {
            var o,
                r,
                a,
                s =
                    !1 !== t.jsonp &&
                    (tn.test(t.url)
                        ? "url"
                        : "string" == typeof t.data &&
                          0 ===
                              (t.contentType || "").indexOf(
                                  "application/x-www-form-urlencoded"
                              ) &&
                          tn.test(t.data) &&
                          "data");
            return s || "jsonp" === t.dataTypes[0]
                ? ((o = t.jsonpCallback =
                      p.isFunction(t.jsonpCallback)
                          ? t.jsonpCallback()
                          : t.jsonpCallback),
                  s
                      ? (t[s] = t[s].replace(tn, "$1" + o))
                      : !1 !== t.jsonp &&
                        (t.url +=
                            (Tt.test(t.url) ? "&" : "?") + t.jsonp + "=" + o),
                  (t.converters["script json"] = function () {
                      return a || p.error(o + " was not called"), a[0];
                  }),
                  (t.dataTypes[0] = "json"),
                  (r = e[o]),
                  (e[o] = function () {
                      a = arguments;
                  }),
                  i.always(function () {
                      void 0 === r ? p(e).removeProp(o) : (e[o] = r),
                          t[o] &&
                              ((t.jsonpCallback = n.jsonpCallback), en.push(o)),
                          a && p.isFunction(r) && r(a[0]),
                          (a = r = void 0);
                  }),
                  "script")
                : void 0;
        }),
        (p.parseHTML = function (e, t, n) {
            if (!e || "string" != typeof e) return null;
            "boolean" == typeof t && ((n = t), (t = !1)), (t = t || i);
            var o = C.exec(e),
                r = !n && [];
            return o
                ? [t.createElement(o[1])]
                : ((o = se([e], t, r)),
                  r && r.length && p(r).remove(),
                  p.merge([], o.childNodes));
        });
    var nn = p.fn.load;

    function on(e) {
        return p.isWindow(e)
            ? e
            : 9 === e.nodeType && (e.defaultView || e.parentWindow);
    }
    (p.fn.load = function (e, t, n) {
        if ("string" != typeof e && nn) return nn.apply(this, arguments);
        var i,
            o,
            r,
            a = this,
            s = e.indexOf(" ");
        return (
            s > -1 && ((i = p.trim(e.slice(s, e.length))), (e = e.slice(0, s))),
            p.isFunction(t)
                ? ((n = t), (t = void 0))
                : t && "object" == typeof t && (o = "POST"),
            a.length > 0 &&
                p
                    .ajax({
                        url: e,
                        type: o || "GET",
                        dataType: "html",
                        data: t,
                    })
                    .done(function (e) {
                        (r = arguments),
                            a.html(
                                i
                                    ? p("<div>").append(p.parseHTML(e)).find(i)
                                    : e
                            );
                    })
                    .always(
                        n &&
                            function (e, t) {
                                a.each(function () {
                                    n.apply(this, r || [e.responseText, t, e]);
                                });
                            }
                    ),
            this
        );
    }),
        p.each(
            [
                "ajaxStart",
                "ajaxStop",
                "ajaxComplete",
                "ajaxError",
                "ajaxSuccess",
                "ajaxSend",
            ],
            function (e, t) {
                p.fn[t] = function (e) {
                    return this.on(t, e);
                };
            }
        ),
        (p.expr.filters.animated = function (e) {
            return p.grep(p.timers, function (t) {
                return e === t.elem;
            }).length;
        }),
        (p.offset = {
            setOffset: function (e, t, n) {
                var i,
                    o,
                    r,
                    a,
                    s,
                    l,
                    c = p.css(e, "position"),
                    u = p(e),
                    d = {};
                "static" === c && (e.style.position = "relative"),
                    (s = u.offset()),
                    (r = p.css(e, "top")),
                    (l = p.css(e, "left")),
                    ("absolute" === c || "fixed" === c) &&
                    p.inArray("auto", [r, l]) > -1
                        ? ((a = (i = u.position()).top), (o = i.left))
                        : ((a = parseFloat(r) || 0), (o = parseFloat(l) || 0)),
                    p.isFunction(t) && (t = t.call(e, n, p.extend({}, s))),
                    null != t.top && (d.top = t.top - s.top + a),
                    null != t.left && (d.left = t.left - s.left + o),
                    "using" in t ? t.using.call(e, d) : u.css(d);
            },
        }),
        p.fn.extend({
            offset: function (e) {
                if (arguments.length)
                    return void 0 === e
                        ? this
                        : this.each(function (t) {
                              p.offset.setOffset(this, e, t);
                          });
                var t,
                    n,
                    i = {
                        top: 0,
                        left: 0,
                    },
                    o = this[0],
                    r = o && o.ownerDocument;
                return r
                    ? ((t = r.documentElement),
                      p.contains(t, o)
                          ? (void 0 !== o.getBoundingClientRect &&
                                (i = o.getBoundingClientRect()),
                            (n = on(r)),
                            {
                                top:
                                    i.top +
                                    (n.pageYOffset || t.scrollTop) -
                                    (t.clientTop || 0),
                                left:
                                    i.left +
                                    (n.pageXOffset || t.scrollLeft) -
                                    (t.clientLeft || 0),
                            })
                          : i)
                    : void 0;
            },
            position: function () {
                if (this[0]) {
                    var e,
                        t,
                        n = {
                            top: 0,
                            left: 0,
                        },
                        i = this[0];
                    return (
                        "fixed" === p.css(i, "position")
                            ? (t = i.getBoundingClientRect())
                            : ((e = this.offsetParent()),
                              (t = this.offset()),
                              p.nodeName(e[0], "html") || (n = e.offset()),
                              (n.top += p.css(e[0], "borderTopWidth", !0)),
                              (n.left += p.css(e[0], "borderLeftWidth", !0))),
                        {
                            top: t.top - n.top - p.css(i, "marginTop", !0),
                            left: t.left - n.left - p.css(i, "marginLeft", !0),
                        }
                    );
                }
            },
            offsetParent: function () {
                return this.map(function () {
                    for (
                        var e = this.offsetParent;
                        e &&
                        !p.nodeName(e, "html") &&
                        "static" === p.css(e, "position");

                    )
                        e = e.offsetParent;
                    return e || He;
                });
            },
        }),
        p.each(
            {
                scrollLeft: "pageXOffset",
                scrollTop: "pageYOffset",
            },
            function (e, t) {
                var n = /Y/.test(t);
                p.fn[e] = function (i) {
                    return U(
                        this,
                        function (e, i, o) {
                            var r = on(e);
                            return void 0 === o
                                ? r
                                    ? t in r
                                        ? r[t]
                                        : r.document.documentElement[i]
                                    : e[i]
                                : void (r
                                      ? r.scrollTo(
                                            n ? p(r).scrollLeft() : o,
                                            n ? o : p(r).scrollTop()
                                        )
                                      : (e[i] = o));
                        },
                        e,
                        i,
                        arguments.length,
                        null
                    );
                };
            }
        ),
        p.each(["top", "left"], function (e, t) {
            p.cssHooks[t] = We(d.pixelPosition, function (e, n) {
                return n
                    ? ((n = qe(e, t)),
                      Pe.test(n) ? p(e).position()[t] + "px" : n)
                    : void 0;
            });
        }),
        p.each(
            {
                Height: "height",
                Width: "width",
            },
            function (e, t) {
                p.each(
                    {
                        padding: "inner" + e,
                        content: t,
                        "": "outer" + e,
                    },
                    function (n, i) {
                        p.fn[i] = function (i, o) {
                            var r =
                                    arguments.length &&
                                    (n || "boolean" != typeof i),
                                a =
                                    n ||
                                    (!0 === i || !0 === o
                                        ? "margin"
                                        : "border");
                            return U(
                                this,
                                function (t, n, i) {
                                    var o;
                                    return p.isWindow(t)
                                        ? t.document.documentElement[
                                              "client" + e
                                          ]
                                        : 9 === t.nodeType
                                        ? ((o = t.documentElement),
                                          Math.max(
                                              t.body["scroll" + e],
                                              o["scroll" + e],
                                              t.body["offset" + e],
                                              o["offset" + e],
                                              o["client" + e]
                                          ))
                                        : void 0 === i
                                        ? p.css(t, n, a)
                                        : p.style(t, n, i, a);
                                },
                                t,
                                r ? i : void 0,
                                r,
                                null
                            );
                        };
                    }
                );
            }
        ),
        p.fn.extend({
            bind: function (e, t, n) {
                return this.on(e, null, t, n);
            },
            unbind: function (e, t) {
                return this.off(e, null, t);
            },
            delegate: function (e, t, n, i) {
                return this.on(t, e, n, i);
            },
            undelegate: function (e, t, n) {
                return 1 === arguments.length
                    ? this.off(e, "**")
                    : this.off(t, e || "**", n);
            },
        }),
        (p.fn.size = function () {
            return this.length;
        }),
        (p.fn.andSelf = p.fn.addBack),
        "function" == typeof define &&
            define.amd &&
            define("jquery", [], function () {
                return p;
            });
    var rn = e.jQuery,
        an = e.$;
    return (
        (p.noConflict = function (t) {
            return (
                e.$ === p && (e.$ = an),
                t && e.jQuery === p && (e.jQuery = rn),
                p
            );
        }),
        t || (e.jQuery = e.$ = p),
        p
    );
}),
    (function (e, t, n, i, o, r, s) {
        new (function () {})();
        var l = {
            u: n.PI,
            l: n.max,
            j: n.min,
            H: n.ceil,
            G: n.floor,
            P: n.abs,
            gb: n.sin,
            Cb: n.cos,
            Oe: n.tan,
            Xf: n.atan,
            Yf: n.atan2,
            xb: n.sqrt,
            B: n.pow,
            dd: n.random,
            $Round: n.round,
            Y: function (e, t) {
                var n = l.B(10, t || 0);
                return l.$Round(e * n) / n;
            },
        };

        function c(e) {
            return function (t) {
                return l.$Round(t * e) / e;
            };
        }
        var u = (e.$Jease$ = {
            $Swing: function (e) {
                return -l.Cb(e * l.u) / 2 + 0.5;
            },
            $Linear: function (e) {
                return e;
            },
            $InQuad: function (e) {
                return e * e;
            },
            $OutQuad: function (e) {
                return -e * (e - 2);
            },
            $InOutQuad: function (e) {
                return (e *= 2) < 1 ? 0.5 * e * e : -0.5 * (--e * (e - 2) - 1);
            },
            $InCubic: function (e) {
                return e * e * e;
            },
            $OutCubic: function (e) {
                return (e -= 1) * e * e + 1;
            },
            $InOutCubic: function (e) {
                return (e *= 2) < 1
                    ? 0.5 * e * e * e
                    : 0.5 * ((e -= 2) * e * e + 2);
            },
            $InQuart: function (e) {
                return e * e * e * e;
            },
            $OutQuart: function (e) {
                return -((e -= 1) * e * e * e - 1);
            },
            $InOutQuart: function (e) {
                return (e *= 2) < 1
                    ? 0.5 * e * e * e * e
                    : -0.5 * ((e -= 2) * e * e * e - 2);
            },
            $InQuint: function (e) {
                return e * e * e * e * e;
            },
            $OutQuint: function (e) {
                return (e -= 1) * e * e * e * e + 1;
            },
            $InOutQuint: function (e) {
                return (e *= 2) < 1
                    ? 0.5 * e * e * e * e * e
                    : 0.5 * ((e -= 2) * e * e * e * e + 2);
            },
            $InSine: function (e) {
                return 1 - l.Cb((l.u / 2) * e);
            },
            $OutSine: function (e) {
                return l.gb((l.u / 2) * e);
            },
            $InOutSine: function (e) {
                return -0.5 * (l.Cb(l.u * e) - 1);
            },
            $InExpo: function (e) {
                return 0 == e ? 0 : l.B(2, 10 * (e - 1));
            },
            $OutExpo: function (e) {
                return 1 == e ? 1 : 1 - l.B(2, -10 * e);
            },
            $InOutExpo: function (e) {
                return 0 == e || 1 == e
                    ? e
                    : (e *= 2) < 1
                    ? 0.5 * l.B(2, 10 * (e - 1))
                    : 0.5 * (2 - l.B(2, -10 * --e));
            },
            $InCirc: function (e) {
                return -(l.xb(1 - e * e) - 1);
            },
            $OutCirc: function (e) {
                return l.xb(1 - (e -= 1) * e);
            },
            $InOutCirc: function (e) {
                return (e *= 2) < 1
                    ? -0.5 * (l.xb(1 - e * e) - 1)
                    : 0.5 * (l.xb(1 - (e -= 2) * e) + 1);
            },
            $InElastic: function (e) {
                if (!e || 1 == e) return e;
                return (
                    -l.B(2, 10 * (e -= 1)) * l.gb((2 * (e - 0.075) * l.u) / 0.3)
                );
            },
            $OutElastic: function (e) {
                if (!e || 1 == e) return e;
                return (
                    l.B(2, -10 * e) * l.gb((2 * (e - 0.075) * l.u) / 0.3) + 1
                );
            },
            $InOutElastic: function (e) {
                if (!e || 1 == e) return e;
                return (e *= 2) < 1
                    ? -0.5 *
                          l.B(2, 10 * (e -= 1)) *
                          l.gb((2 * (e - 0.1125) * l.u) / 0.45)
                    : l.B(2, -10 * (e -= 1)) *
                          l.gb((2 * (e - 0.1125) * l.u) / 0.45) *
                          0.5 +
                          1;
            },
            $InBack: function (e) {
                var t = 1.70158;
                return e * e * ((t + 1) * e - t);
            },
            $OutBack: function (e) {
                var t = 1.70158;
                return (e -= 1) * e * ((t + 1) * e + t) + 1;
            },
            $InOutBack: function (e) {
                var t = 1.70158;
                return (e *= 2) < 1
                    ? 0.5 * e * e * ((1 + (t *= 1.525)) * e - t)
                    : 0.5 * ((e -= 2) * e * ((1 + (t *= 1.525)) * e + t) + 2);
            },
            $InBounce: function (e) {
                return 1 - u.$OutBounce(1 - e);
            },
            $OutBounce: function (e) {
                return e < 1 / 2.75
                    ? 7.5625 * e * e
                    : e < 2 / 2.75
                    ? 7.5625 * (e -= 1.5 / 2.75) * e + 0.75
                    : e < 2.5 / 2.75
                    ? 7.5625 * (e -= 2.25 / 2.75) * e + 0.9375
                    : 7.5625 * (e -= 2.625 / 2.75) * e + 0.984375;
            },
            $InOutBounce: function (e) {
                return e < 0.5
                    ? 0.5 * u.$InBounce(2 * e)
                    : 0.5 * u.$OutBounce(2 * e - 1) + 0.5;
            },
            $GoBack: function (e) {
                return 1 - l.P(1);
            },
            $InWave: function (e) {
                return 1 - l.Cb(e * l.u * 2);
            },
            $OutWave: function (e) {
                return l.gb(e * l.u * 2);
            },
            $OutJump: function (e) {
                return (
                    1 - ((e *= 2) < 1 ? (e = 1 - e) * e * e : (e -= 1) * e * e)
                );
            },
            $InJump: function (e) {
                return (e *= 2) < 1 ? e * e * e : (e = 2 - e) * e * e;
            },
            $Early: l.H,
            $Late: l.G,
            $Mid: l.$Round,
            $Mid2: c(2),
            $Mid3: c(3),
            $Mid4: c(4),
            $Mid5: c(5),
            $Mid6: c(6),
        });

        function d(e, t, n) {
            var o = this,
                r = [
                    1,
                    0,
                    0,
                    0,
                    0,
                    1,
                    0,
                    0,
                    0,
                    0,
                    1,
                    0,
                    e || 0,
                    t || 0,
                    n || 0,
                    1,
                ],
                s = l.gb,
                c = l.Cb,
                u = l.Oe;

            function d(e) {
                return (e * l.u) / 180;
            }

            function f(e, t) {
                return function (
                    e,
                    t,
                    n,
                    i,
                    o,
                    r,
                    a,
                    s,
                    l,
                    c,
                    u,
                    d,
                    f,
                    p,
                    h,
                    g,
                    m,
                    v,
                    y,
                    b,
                    x,
                    w,
                    S,
                    C,
                    $,
                    _,
                    T,
                    k,
                    E,
                    A,
                    O,
                    D
                ) {
                    return [
                        e * m + t * x + n * $ + i * E,
                        e * v + t * w + n * _ + i * A,
                        e * y + t * S + n * T + i * O,
                        e * b + t * C + n * k + i * D,
                        o * m + r * x + a * $ + s * E,
                        o * v + r * w + a * _ + s * A,
                        o * y + r * S + a * T + s * O,
                        o * b + r * C + a * k + s * D,
                        l * m + c * x + u * $ + d * E,
                        l * v + c * w + u * _ + d * A,
                        l * y + c * S + u * T + d * O,
                        l * b + c * C + u * k + d * D,
                        f * m + p * x + h * $ + g * E,
                        f * v + p * w + h * _ + g * A,
                        f * y + p * S + h * T + g * O,
                        f * b + p * C + h * k + g * D,
                    ];
                }.apply(i, (t || r).concat(e));
            }
            (o.$Scale = function (e, t, n) {
                (1 == e && 1 == t && 1 == n) ||
                    (r = f([e, 0, 0, 0, 0, t, 0, 0, 0, 0, n, 0, 0, 0, 0, 1]));
            }),
                (o.$Move = function (e, t, n) {
                    (r[12] += e || 0), (r[13] += t || 0), (r[14] += n || 0);
                }),
                (o.$RotateX = function (e) {
                    if (e) {
                        a = d(e);
                        var t = c(a),
                            n = s(a);
                        r = f([
                            1,
                            0,
                            0,
                            0,
                            0,
                            t,
                            n,
                            0,
                            0,
                            -n,
                            t,
                            0,
                            0,
                            0,
                            0,
                            1,
                        ]);
                    }
                }),
                (o.$RotateY = function (e) {
                    if (e) {
                        a = d(e);
                        var t = c(a),
                            n = s(a);
                        r = f([
                            t,
                            0,
                            -n,
                            0,
                            0,
                            1,
                            0,
                            0,
                            n,
                            0,
                            t,
                            0,
                            0,
                            0,
                            0,
                            1,
                        ]);
                    }
                }),
                (o.Cg = function (e) {
                    o.Vg(d(e));
                }),
                (o.Vg = function (e) {
                    if (e) {
                        var t = c(e),
                            n = s(e);
                        r = f([
                            t,
                            n,
                            0,
                            0,
                            -n,
                            t,
                            0,
                            0,
                            0,
                            0,
                            1,
                            0,
                            0,
                            0,
                            0,
                            1,
                        ]);
                    }
                }),
                (o.Ug = function (n, i) {
                    (n || i) &&
                        ((e = d(n)),
                        (t = d(i)),
                        (r = f([
                            1,
                            u(t),
                            0,
                            0,
                            u(e),
                            1,
                            0,
                            0,
                            0,
                            0,
                            1,
                            0,
                            0,
                            0,
                            0,
                            1,
                        ])));
                }),
                (o.Sg = function () {
                    return "matrix3d(" + r.join(",") + ")";
                }),
                (o.Og = function () {
                    return (
                        "matrix(" +
                        [r[0], r[1], r[4], r[5], r[12], r[13]].join(",") +
                        ")"
                    );
                });
        }
        var f = (e.$Jssor$ = new (function () {
            var n,
                a = this,
                c = /\S+/g,
                h = 1,
                g = 2,
                m = 3,
                v = 4,
                y = 5,
                b = 0,
                x = 0,
                w = 0,
                S = navigator,
                C = S.appName,
                $ = S.userAgent,
                _ = parseFloat;

            function T(e, t, n) {
                return e.indexOf(t, n);
            }

            function k(t) {
                if (!b)
                    if (
                        ((b = -1),
                        "Microsoft Internet Explorer" == C &&
                            e.attachEvent &&
                            e.ActiveXObject)
                    ) {
                        var n = T($, "MSIE");
                        (b = h), (x = _($.substring(n + 5, T($, ";", n))));
                    } else if ("Netscape" == C && e.addEventListener) {
                        var i = T($, "Firefox"),
                            o = T($, "Safari"),
                            r = T($, "Chrome"),
                            a = T($, "AppleWebKit");
                        if (i >= 0) (b = g), (x = _($.substring(i + 8)));
                        else if (o >= 0) {
                            var s = $.substring(0, o).lastIndexOf("/");
                            (b = r >= 0 ? v : m),
                                (x = _($.substring(s + 1, o)));
                        } else {
                            (l = /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(
                                $
                            )) && ((b = h), (x = _(l[1])));
                        }
                        a >= 0 && (w = _($.substring(a + 12)));
                    } else {
                        var l;
                        (l = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec($)) &&
                            ((b = y), (x = _(l[2])));
                    }
                return t == b;
            }

            function E() {
                return k(), w > 537 || x > 42 || (b == h && x >= 11);
            }

            function A(e) {
                var t;
                return function (n) {
                    if (!t) {
                        var i = e.substr(0, 1).toUpperCase() + e.substr(1);
                        t =
                            N(
                                ["", "WebKit", "ms", "Moz", "O", "webkit"],
                                function (t) {
                                    var o = t + (t ? i : e);
                                    return n.style[o] != s && o;
                                }
                            ) || e;
                    }
                    return t;
                };
            }
            var O = z("transform", 8);

            function D(e) {
                return e;
            }
            var M =
                    Array.isArray ||
                    function (e) {
                        return "array" == B(e);
                    },
                L = {};

            function N(e, t) {
                var n, i;
                if (M(e)) {
                    for (n = 0; n < ge(e); n++)
                        if ((i = t(e[n], n, e))) return i;
                } else for (n in e) if ((i = t(e[n], n, e))) return i;
            }

            function B(e) {
                return e == i
                    ? String(e)
                    : L[
                          (function (e) {
                              return {}.toString.call(e);
                          })(e)
                      ] || "object";
            }

            function I(e) {
                for (var t in e) return o;
            }

            function P(e) {
                try {
                    return (
                        "object" == B(e) &&
                        !e.nodeType &&
                        e != e.window &&
                        (!e.constructor ||
                            {}.hasOwnProperty.call(
                                e.constructor.prototype,
                                "isPrototypeOf"
                            ))
                    );
                } catch (e) {}
            }

            function R(e, t) {
                return e === s ? t : e;
            }

            function H(t) {
                return t || e.event;
            }

            function j(t, n, o) {
                if (o === s) {
                    var r = t.currentStyle || t.style;
                    return (
                        "" == (o = r[n]) &&
                            e.getComputedStyle &&
                            (r = t.ownerDocument.defaultView.getComputedStyle(
                                t,
                                i
                            )) &&
                            (o = r.getPropertyValue(n) || r[n]),
                        o
                    );
                }
                t.style[n] = o == s ? "" : o;
            }

            function q(e, t, n, o) {
                if (n === s) return (n = _(j(e, t))), isNaN(n) && (n = i), n;
                o && n != i && (n += o), j(e, t, n);
            }

            function z(e, t, n, o) {
                var r;
                2 & t && (r = "px"), 4 & t && (r = "%"), 16 & t && (r = "em");
                var a = 8 & t && A(e);
                return (
                    (t &= -9),
                    (o = o || (t ? q : j)),
                    function (t, s) {
                        n && s && (s *= n);
                        var l = o(t, a ? a(t) : e, s, r);
                        return n && l != i ? l / n : l;
                    }
                );
            }

            function W(e) {
                return function (t, n) {
                    K(t, e, n);
                };
            }
            N(
                [
                    "Boolean",
                    "Number",
                    "String",
                    "Function",
                    "Array",
                    "Date",
                    "RegExp",
                    "Object",
                ],
                function (e) {
                    L["[object " + e + "]"] = e.toLowerCase();
                }
            ),
                (a.ud = function () {
                    var i;
                    return (
                        n ||
                            ((n = {
                                td: "ontouchstart" in e || "createTouch" in t,
                            }),
                            (S.pointerEnabled || (i = S.msPointerEnabled)) &&
                                (n.re = i ? "msTouchAction" : "touchAction")),
                        n
                    );
                }),
                (a.ue = function () {
                    return k(h);
                }),
                (a.He = function () {
                    return k(m);
                }),
                (a.gg = E),
                (a.Cd = function () {
                    return x;
                }),
                (a.$Delay = function (e, t) {
                    setTimeout(e, t || 0);
                }),
                (a.wc = R),
                (a.W = function (e, t) {
                    return t.call(e), U({}, e);
                }),
                (a.F = function e(t) {
                    t.constructor === e.caller &&
                        t.F &&
                        t.F.apply(t, e.caller.arguments);
                }),
                (a.$GetElement = function (e) {
                    return a.ag(e) && (e = t.getElementById(e)), e;
                }),
                (a.xc = function (e) {
                    var t = [];
                    return (
                        N(e, function (e) {
                            var n = a.$GetElement(e);
                            n && t.push(n);
                        }),
                        t
                    );
                }),
                (a.Zf = H),
                (a.$EvtSrc = function (e) {
                    var n = (e = H(e)).target || e.srcElement || t;
                    return 3 == n.nodeType && (n = a.Lb(n)), n;
                }),
                (a.Fe = function (e) {
                    return (e = H(e)).relatedTarget || e.toElement;
                }),
                (a.Je = function (e) {
                    return (
                        (e = H(e)).which ||
                        [0, 1, 3, 0, 2][e.button] ||
                        e.charCode ||
                        e.keyCode
                    );
                }),
                (a.Tc = function (e) {
                    return {
                        x: (e = H(e)).clientX || 0,
                        y: e.clientY || 0,
                    };
                }),
                (a.Ue = function (e, t) {
                    return (function (e, t) {
                        return {
                            x: e,
                            y: t,
                        };
                    })(e.x - t.x, e.y - t.y);
                }),
                (a.eg = function (e, t) {
                    return e.x >= t.x && e.x <= t.t && e.y >= t.y && e.y <= t.m;
                }),
                (a.Ie = function (e, t) {
                    var n = f.dg(t),
                        i = f.Tc(e);
                    return a.eg(i, n);
                }),
                (a.Ib = function (t) {
                    return (function (t) {
                        return e.SVGElement && t instanceof e.SVGElement;
                    })(a.Lb(t));
                });
            var F = {
                r: ["rotate"],
                sX: ["scaleX", 2],
                sY: ["scaleY", 2],
                tX: ["translateX", 1],
                tY: ["translateY", 1],
                kX: ["skewX"],
                kY: ["skewY"],
            };

            function X(e) {
                var t = "";
                return (
                    e &&
                        (N(e, function (e, n) {
                            var i = F[n];
                            if (i) {
                                var o = i[1] || 0;
                                pe[n] != e &&
                                    (t +=
                                        " " +
                                        i[0] +
                                        "(" +
                                        e +
                                        ["deg", "px", ""][o] +
                                        ")");
                            }
                        }),
                        E() &&
                            (e.tX || e.tY || e.tZ != s) &&
                            (t +=
                                " translate3d(" +
                                (e.tX || 0) +
                                "px," +
                                (e.tY || 0) +
                                "px," +
                                (e.tZ || 0) +
                                "px)")),
                    t
                );
            }

            function V(e) {
                return (
                    "rect(" +
                    e.y +
                    "px " +
                    e.t +
                    "px " +
                    e.m +
                    "px " +
                    e.x +
                    "px)"
                );
            }

            function Y(e, t, n, o) {
                o = o || "u";
                var r = [];
                for (e = e ? e.firstChild : i; e; e = e.nextSibling)
                    if (1 == e.nodeType && (Q(e, o) == t && r.push(e), !n)) {
                        var a = Y(e, t, n, o);
                        ge(a) && (r = r.concat(a));
                    }
                return r;
            }

            function U() {
                for (
                    var e,
                        t,
                        n,
                        i = arguments,
                        o = 1 & i[0],
                        r = 1 + o,
                        a = i[r - 1] || {};
                    r < ge(i);
                    r++
                )
                    if ((e = i[r]))
                        for (t in e)
                            if ((n = e[t]) !== s) {
                                n = e[t];
                                var l = a[t];
                                a[t] = o && (P(l) || P(n)) ? U(o, {}, l, n) : n;
                            }
                return a;
            }

            function G(e, t) {
                var n,
                    i,
                    o,
                    a = {};
                for (n in e)
                    if ((i = e[n]) !== (o = t[n])) {
                        var s = r;
                        P(i) && P(o) && (s = !I((i = G(i, o)))),
                            !s && (a[n] = i);
                    }
                return a;
            }

            function Z(e) {
                return t.createElement(e);
            }

            function K(e, t, n, o) {
                if (n === s) return e.getAttribute(t);
                (n = n == i ? "" : o ? n + o : n), e.setAttribute(t, n);
            }

            function Q(e, t) {
                return K(e, t) || K(e, "data-" + t);
            }

            function J(e, t) {
                return K(e, "class", t) || "";
            }

            function ee(e) {
                var t = {};
                return (
                    N(e, function (e) {
                        e != s && (t[e] = e);
                    }),
                    t
                );
            }

            function te(e, t) {
                return (e && e.match(t || c)) || i;
            }

            function ne(e, t) {
                return ee(te(e || "", t));
            }

            function ie(e, t) {
                var n = "";
                return (
                    N(t, function (t) {
                        n && (n += e), (n += t);
                    }),
                    n
                );
            }
            (a.ug = z("transformOrigin", 8)),
                (a.tg = z("backfaceVisibility", 8)),
                (a.Jc = z("transformStyle", 8)),
                (a.yg = z("perspective", 10)),
                (a.xg = z("perspectiveOrigin", 8)),
                (a.we = function (e, t) {
                    O(e, 1 == t ? "" : "scale(" + t + ")");
                }),
                (a.$AddEvent = function (e, t, n, i) {
                    (e = a.$GetElement(e)).addEventListener(t, n, i);
                }),
                (a.$RemoveEvent = function (e, t, n, i) {
                    (e = a.$GetElement(e)).removeEventListener(t, n, i);
                }),
                (a.$CancelEvent = function (e) {
                    (e = H(e)).preventDefault && e.preventDefault(),
                        (e.cancel = o),
                        (e.returnValue = r);
                }),
                (a.$StopEvent = function (e) {
                    (e = H(e)).stopPropagation && e.stopPropagation(),
                        (e.cancelBubble = o);
                }),
                (a.Z = function (e, t) {
                    var n = [].slice.call(arguments, 2);
                    return function () {
                        var i = n.concat([].slice.call(arguments, 0));
                        return t.apply(e, i);
                    };
                }),
                (a.bd = function (e, n) {
                    if (n == s) return e.textContent || e.innerText;
                    var i = t.createTextNode(n);
                    a.Rb(e), e.appendChild(i);
                }),
                (a.ng = function (e, t) {
                    if (t == s) return e.innerHTML;
                    e.innerHTML = t;
                }),
                (a.dg = function (e) {
                    var t = e.getBoundingClientRect();
                    return {
                        x: t.left,
                        y: t.top,
                        w: t.right - t.left,
                        h: t.bottom - t.top,
                        t: t.right,
                        m: t.bottom,
                    };
                }),
                (a.jb = function (e, t) {
                    for (var n = [], i = e.firstChild; i; i = i.nextSibling)
                        (t || 1 == i.nodeType) && n.push(i);
                    return n;
                }),
                (a.$FindChild = function e(t, n, o, r) {
                    for (
                        r = r || "u", t = t ? t.firstChild : i;
                        t;
                        t = t.nextSibling
                    )
                        if (1 == t.nodeType) {
                            if (Q(t, r) == n) return t;
                            if (!o) {
                                var a = e(t, n, o, r);
                                if (a) return a;
                            }
                        }
                }),
                (a.rg = function (e, t) {
                    return e.getElementsByTagName(t);
                }),
                (a.kb = function (e, n, i, o) {
                    var r;
                    i = i || "u";
                    do {
                        var a;
                        if (1 == e.nodeType)
                            if (
                                (i && (a = Q(e, i)),
                                (a && a == R(n, a)) || o == e.tagName)
                            ) {
                                r = e;
                                break;
                            }
                        e = f.Lb(e);
                    } while (e && e != t.body);
                    return r;
                }),
                (a.qe = function (e) {
                    return ee(["INPUT", "TEXTAREA", "SELECT"])[e.tagName];
                }),
                (a.v = U),
                (a.Zg = G),
                (a.Pd = function (e, t) {
                    var n;
                    if (e)
                        return (
                            N(t, function (t) {
                                e[t] != s && ((n = n || {})[t] = e[t]),
                                    delete e[t];
                            }),
                            n
                        );
                }),
                (a.Ph = function (e) {
                    return "function" == B(e);
                }),
                (a.Md = M),
                (a.ag = function (e) {
                    return "string" == B(e);
                }),
                (a.Nd = function (e) {
                    return !M(e) && !isNaN(_(e)) && isFinite(e);
                }),
                (a.f = N),
                (a.Th = I),
                (a.Sh = P),
                (a.bc = function () {
                    return Z("DIV");
                }),
                (a.Rd = function () {
                    return Z("SPAN");
                }),
                (a.Kc = function () {}),
                (a.g = K),
                (a.hb = Q),
                (a.q = function (e, t, n) {
                    var i = a.od(Q(e, t));
                    return isNaN(i) && (i = n), i;
                }),
                (a.Hc = function (e, t, n) {
                    return te(K(e, t), n);
                }),
                (a.Fd = ee),
                (a.Ud = te),
                (a.mg = function (e) {
                    return e && (e = e.toLowerCase()), e;
                }),
                (a.je = ie),
                (a.Lb = function (e) {
                    return e.parentNode;
                }),
                (a.Fc = function (e) {
                    a.nb(e, "none");
                }),
                (a.mb = function (e, t) {
                    a.nb(e, R(t, o) ? "" : "none");
                }),
                (a.Oh = function (e, t) {
                    e.removeAttribute(t);
                }),
                (a.kh = function (e, t) {
                    e.style.clip = V(t);
                }),
                (a.Tb = function () {
                    return +new Date();
                }),
                (a.O = function (e, t) {
                    e.appendChild(t);
                }),
                (a.ph = function (e, t) {
                    N(t, function (t) {
                        a.O(e, t);
                    });
                }),
                (a.pb = function (e, t, n) {
                    (n || t.parentNode).insertBefore(e, t);
                }),
                (a.oh = function (e, t, n) {
                    e.insertAdjacentHTML(t, n);
                }),
                (a.ib = function (e, t) {
                    (t = t || e.parentNode) && t.removeChild(e);
                }),
                (a.ch = function (e, t) {
                    N(e, function (e) {
                        a.ib(e, t);
                    });
                }),
                (a.Rb = function (e) {
                    a.ch(a.jb(e, o), e);
                }),
                (a.$Destroy = function e() {
                    N([].slice.call(arguments, 0), function (t) {
                        a.Md(t)
                            ? e.apply(i, t)
                            : t && t.$Destroy && t.$Destroy();
                    });
                }),
                (a.Uc = function (e, t) {
                    var n = a.Lb(e);
                    1 & t && (a.U(e, (a.K(n) - a.K(e)) / 2), a.Vd(e, i)),
                        2 & t && (a.V(e, (a.J(n) - a.J(e)) / 2), a.be(e, i));
                });
            var oe,
                re = {
                    $Top: i,
                    $Right: i,
                    $Bottom: i,
                    $Left: i,
                    Eb: i,
                    Gb: i,
                };

            function ae(e, t, n) {
                var i = e.cloneNode(!t);
                return !n && a.Oh(i, "id"), i;
            }

            function se() {
                var n = this;
                f.W(n, p);
                var i,
                    o,
                    r = "",
                    l = ["av", "pv", "ds", "dn"],
                    c = [],
                    u = 0,
                    d = 0,
                    h = 0;

                function g() {
                    !(function (e, t, n) {
                        J(e, ie(" ", U(G(ne(J(e)), ne(t)), ne(n))));
                    })(i, o, (c[h || 2 & d || d] || "") + " " + (c[u] || "")),
                        a.lc(i, h ? "none" : "");
                }

                function m() {
                    (u = 0),
                        n.T(e, "mouseup", m),
                        n.T(t, "mouseup", m),
                        n.T(t, "touchend", m),
                        n.T(t, "touchcancel", m),
                        n.T(e, "blur", m),
                        g();
                }

                function v() {
                    (u = 4),
                        g(),
                        n.a(e, "mouseup", m),
                        n.a(t, "mouseup", m),
                        n.a(t, "touchend", m),
                        n.a(t, "touchcancel", m),
                        n.a(e, "blur", m);
                }
                (n.Ye = function (e) {
                    if (e === s) return d;
                    (d = 2 & e || 1 & e), g();
                }),
                    (n.$Enable = function (e) {
                        if (e === s) return !h;
                        (h = e ? 0 : 3), g();
                    }),
                    (n.F = function (e) {
                        (n.$Elmt = i = a.$GetElement(e)),
                            K(i, "data-jssor-button", "1");
                        var t = f.Ud(J(i));
                        t && (r = t.shift()),
                            N(l, function (e) {
                                c.push(r + e);
                            }),
                            (o = ie(" ", c)),
                            c.unshift(""),
                            n.a(i, "mousedown", v),
                            n.a(i, "touchstart", v);
                    }),
                    f.F(n);
            }

            function le(e, t, n, i, o, r, a) {
                if (o) {
                    var s = o[0],
                        c = o[1];
                    if (a) {
                        var u = l.l(2 * c, 1);
                        if ((n = (n * (u * (a - 1) + 1) - s) / u) > 0) {
                            (c /= u), (s = 0);
                            var d = l.H(n) - 1;
                            (n -= d) > c && d < a - 1 && (n = 1 - n);
                        }
                    }
                    (n = (n - s) / c), (n = l.j(l.l(n, 0), 1));
                }
                if (r) {
                    n *= r;
                    var f = l.G(n);
                    n - f && (n -= f), (n = l.j(l.l(n, 0), 1));
                }
                return (o || r) && (n = l.Y(n, 3)), e + t * i(n);
            }

            function ce(e, t, n, i) {
                e = e || {};
                var o = {},
                    r = {};

                function l(t) {
                    r[t] = e[t];
                }
                var c = {
                        cc: 0,
                        Wb: 0,
                        sX: 1,
                        sY: 1,
                        r: 0,
                        rX: 0,
                        rY: 0,
                        tX: 0,
                        tY: 0,
                        tZ: 0,
                        kX: 0,
                        kY: 0,
                    },
                    u = {};
                return (
                    (E() && !t) ||
                        ((u.tZ = a.Kc), (u.tX = a.Kc), (u.tY = a.Kc)),
                    (E() || t) &&
                        ((u.x = function () {
                            (r.cc = e.x), n && !t && (r.cc -= n);
                        }),
                        (u.y = function () {
                            (r.Wb = e.y), i && !t && (r.Wb -= i);
                        })),
                    N(e, function (e, t) {
                        (u[t] || l)(t);
                    }),
                    N(r, function (e, t) {
                        c[t] != s && ((o[t] = e), delete r[t]);
                    }),
                    I(o) && (r.Kd = o),
                    r
                );
            }

            function ue(e, t) {
                var n = [],
                    i = 1 & t;
                2 & t && (i = !i);
                for (var o = l.H(e / 2), r = 0; r < e; r++) {
                    var a = r;
                    if (4 & t) {
                        var s = l.G(l.dd() * e);
                        (a = R(n[r], r)), (n[r] = R(n[s], s)), (n[s] = a);
                    } else
                        2 & t &&
                            (n[(a = r < o ? 2 * r : 2 * (e - r - 1) + 1)] = r),
                            32 & t && (a = l.G(r / 2) + (r % 2 ? l.H(o) : 0)),
                            (n[a] = r);
                }
                i && n.reverse();
                var c = [];
                return (
                    N(n, function (e, t) {
                        c[e] = t;
                    }),
                    c
                );
            }

            function de(e, t, n) {
                e = e || {
                    d: n.$Elmt ? K(n.$Elmt, "d") : "",
                };
                var i = n.$Easing,
                    o = n.Bd || {},
                    r = o.r,
                    c = 0 == r,
                    u = o.dl || 0;

                function d(e, t) {
                    var n = e[0],
                        i = e[1],
                        o = e[2],
                        r = e[3],
                        a = e[4],
                        l = e[5],
                        c = e[6],
                        u = e[7];
                    t === s && (t = 0.5);
                    var d = 1 - t,
                        f = d * n + t * o,
                        p = d * i + t * r,
                        h = d * o + t * a,
                        g = d * r + t * l,
                        m = d * a + t * c,
                        v = d * l + t * u,
                        y = d * f + t * h,
                        b = d * p + t * g,
                        x = d * h + t * m,
                        w = d * g + t * v,
                        S = d * y + t * x,
                        C = d * b + t * w;
                    return [
                        [n, i, f, p, y, b, S, C],
                        [S, C, x, w, m, v, c, u],
                    ];
                }

                function f(e, t) {
                    for (
                        var n = 0, i = 0, o = 0, r = t ? 6 : 0;
                        r < ge(e);
                        r += 6
                    )
                        (n += e[r]), (i += e[r + 1]), o++;
                    return {
                        x: o ? n / o : s,
                        y: o ? i / o : s,
                    };
                }

                function p(e) {
                    var t = ge(e),
                        n = e[0] == e[t - 2] && e[1] == e[t - 1],
                        i = f(e, n),
                        o = [],
                        r = [];

                    function s(t) {
                        return {
                            x: e[t],
                            y: e[t + 1],
                        };
                    }

                    function c(e, t, n) {
                        var i = a.Ue(e, t);
                        if (((r[n] = a.xh(i.x, i.y)), !r[n] && n % 6)) {
                            var c = n % 6 < 3 ? 2 : -2;
                            i = a.Ue(s(n + c), t);
                        }
                        var u = l.Yf(i.y, i.x);
                        o[n] = u;
                    }
                    for (var u = 0; u < ge(e); u += 6) {
                        var d = s(u);
                        c(d, i, u),
                            c(s(u - 2), d, u - 2),
                            c(s(u + 2), d, u + 2);
                    }
                    return {
                        lb: e,
                        qb: (ge(e) - 2) / 6,
                        kc: i.x,
                        ic: i.y,
                        Nc: o,
                        Vc: r,
                        vc: n,
                    };
                }

                function h(e) {
                    function t(e) {
                        return e.split(" ").map(n);
                    }

                    function n(e, t) {
                        return 0 === t ? e : +e;
                    }
                    var i,
                        o,
                        r,
                        a,
                        s,
                        l = [];

                    function c(e) {
                        (a = e[ge(e) - 2]),
                            (s = e[ge(e) - 1]),
                            (i = i.concat(e));
                    }
                    return (
                        N(
                            (function (e) {
                                return e
                                    .replace(
                                        /[\^\s]*([mhvlzcsqta]|\-?\d*\.?\d+)[,\$\s]*/gi,
                                        " $1"
                                    )
                                    .replace(/([mhvlzcsqta])/gi, " $1")
                                    .trim()
                                    .split("  ")
                                    .map(t);
                            })(e || ""),
                            function (e) {
                                switch (e.shift()) {
                                    case "M":
                                        i && l.push(p(i)),
                                            (i = []),
                                            (o = e[0]),
                                            (r = e[1]),
                                            c(e);
                                        break;
                                    case "L":
                                        c([a, s, e[0], e[1], e[0], e[1]]);
                                        break;
                                    case "C":
                                        c(e);
                                        break;
                                    case "Z":
                                    case "z":
                                        (a != o || s != r) &&
                                            c([a, s, o, r, o, r]);
                                }
                            }
                        ),
                        i && l.push(p(i)),
                        l
                    );
                }

                function g(e, t) {
                    return l.Y(e, 2) + "," + l.Y(t, 2);
                }

                function m(e) {
                    var t = "";
                    return (
                        N(e, function (e) {
                            t += (function (e) {
                                for (
                                    var t = "M" + g(e[0], e[1]), n = 2;
                                    n < ge(e) - 2;
                                    n += 6
                                )
                                    (t += "C"),
                                        (t += g(e[n], e[n + 1]) + " "),
                                        (t += g(e[n + 2], e[n + 3]) + " "),
                                        (t += g(e[n + 4], e[n + 5]));
                                return t;
                            })(e);
                        }),
                        t
                    );
                }

                function v(e, t) {
                    var n = (t.gf = []),
                        a = (t.bf = []),
                        s = t.qb + (!e.vc || !e.vc);

                    function c(n) {
                        return t.Nc[n] - e.Nc[n];
                    }

                    function d(e, t) {
                        return (
                            (t = t || 0),
                            l.Y(((e - t + 101 * l.u) % (2 * l.u)) - l.u + t, 8)
                        );
                    }

                    function f(i, o) {
                        var r = e.Vc[i],
                            s = t.Vc[i] - r,
                            l = c(i);
                        return (l = d(l, o)), (n[i] = s), (a[i] = l), l;
                    }
                    for (var p = 0, h = 0; h < s; h++) p += d(c(6 * h));
                    var g = d(p / s);
                    if (r) {
                        var m = r > 0 ? 1 : -1;
                        (g = (g + 2 * l.u * m) % (2 * l.u) || 2 * l.u * m),
                            (g += 2 * l.u * (r - m));
                    }
                    for (h = 0; h < ge(e.lb); h += 6) {
                        var v = f(h, g);
                        f(h - 2, v), f(h + 2, v);
                    }
                    var y = (function (e, t, n, i) {
                            for (
                                var o = [],
                                    r =
                                        1 /
                                        (t * ((n ? l.H((e + i) / 2) : e) - 1) +
                                            1),
                                    a = 0;
                                a < e;
                                a++
                            ) {
                                var s = n ? l.G((a + i) / 2) : a;
                                o[a] = [s * t * r, r];
                            }
                            return o;
                        })(s, u),
                        b = ue(s, o.o);
                    t.ad = function (e, n) {
                        if (e >= 0 && e <= t.qb)
                            return le(0, 1, n, i, y[b[e % s]]);
                    };
                }

                function y(e, t, n, i, o) {
                    function r(e) {
                        for (
                            var t = [
                                    0, 0.2, 0, 0.09, 0.09, 0, 0.2, 0, 0.31, 0,
                                    0.4, 0.09, 0.4, 0.2, 0.4, 0.31, 0.31, 0.4,
                                    0.2, 0.4, 0.09, 0.4, 0, 0.31, 0, 0.2,
                                ],
                                n = 0;
                            n < ge(t);
                            n += 2
                        )
                            (t[n] += e.kc - 0.2), (t[n + 1] += e.ic - 0.2);
                        var i = p(t);
                        return (i.vc = e.vc), i;
                    }
                    (e = n[o] = e || r(t)), (t = i[o] = t || r(e));
                    var a = e.qb,
                        s = t && t.qb;
                    if (a < s) return y(t, e, i, n, o);
                    if (s < a) {
                        for (
                            var c = (function (e) {
                                    for (
                                        var t = [], n = 0;
                                        n < ge(e) - 2;
                                        n += 6
                                    )
                                        t.push(p(e.slice(n, n + 8)));
                                    return t;
                                })(t.lb),
                                u = a / s,
                                f = a - s,
                                h = 0,
                                g = 0;
                            g < 10 && h < f;
                            g++
                        ) {
                            var m = u + (u * g) / 10,
                                b = 0;
                            N(c, function (e, t) {
                                b += e.qb;
                                var n = l.$Round((t + 1) * m);
                                if (b < n) {
                                    var i = l.j(n - b, f - h);
                                    (e.qb += i), (h += i), (b += i);
                                }
                                return f < h;
                            });
                        }
                        var x = [];
                        N(c, function (e) {
                            for (var t = e.qb, n = e.lb; t - 1; ) {
                                var i = d(n, 1 / t);
                                x.push(p(i[0])), (n = i[1]), t--;
                            }
                            x.push(p(n));
                        }),
                            (t = i[o] =
                                (function (e) {
                                    var t = [];
                                    return (
                                        N(e, function (e, n) {
                                            var i = e.lb;
                                            !n && t.push(i[0], i[1]),
                                                (t = t.concat(i.slice(2)));
                                        }),
                                        p(t)
                                    );
                                })(x));
                    }
                    v(e, t), v(t, e);
                }
                var b = h(e.d),
                    x = h(t.d);

                function w(e, t, n, i, o, r) {
                    var a = e.lb;
                    if (o >= 0 && o < ge(e.lb)) {
                        var s,
                            u,
                            d = t.lb;
                        if (c)
                            (s = a[o] + (d[o] - a[o]) * i),
                                (u = a[o + 1] + (d[o + 1] - a[o + 1]) * i);
                        else {
                            var f = e.Vc[o] + t.gf[o] * i,
                                p = e.Nc[o] + t.bf[o] * i;
                            (s = f * l.Cb(p) + n.x), (u = f * l.gb(p) + n.y);
                        }
                        return (
                            (r[o] = s),
                            (r[o + 1] = u),
                            {
                                x: s,
                                y: u,
                            }
                        );
                    }
                }
                return (
                    (function e(t, n) {
                        if (ge(t) < ge(n)) return e(n, t);
                        N(t, function (e, i) {
                            y(e, n[i], t, n, i);
                        });
                    })(b, x),
                    {
                        E: function (n) {
                            if (!n) return e;
                            if (1 == n) return t;
                            var i = [];
                            return (
                                N(b, function (e, t) {
                                    for (
                                        var o = [], r = x[t], a = 0;
                                        a < ge(e.lb);
                                        a += 6
                                    ) {
                                        var s = r.ad(a / 6, n),
                                            l = R(r.ad(a / 6 - 1, n), s),
                                            c = R(r.ad(a / 6 + 1, n), s),
                                            u = w(
                                                e,
                                                r,
                                                {
                                                    x: e.kc + (r.kc - e.kc) * s,
                                                    y: e.ic + (r.ic - e.ic) * s,
                                                },
                                                s,
                                                a,
                                                o
                                            );
                                        w(e, r, u, (s + l) / 2, a - 2, o),
                                            w(e, r, u, (s + c) / 2, a + 2, o);
                                    }
                                    i.push(o);
                                }),
                                {
                                    d: m(i),
                                }
                            );
                        },
                        X: function (e) {
                            return (e && e.d) || "";
                        },
                        sb: W("d"),
                    }
                );
            }

            function fe(e, t) {
                N(t, function (t, n) {
                    oe[n] && oe[n](e, t);
                });
            }
            (a.Ch = function (e) {
                var t = a.bc();
                fe(t, {
                    Me: "block",
                    Pb: a.db(e),
                    $Top: 0,
                    $Left: 0,
                    Eb: 0,
                    Gb: 0,
                });
                var n = a.ve(e, re);
                a.pb(t, e), a.O(t, e);
                var i = a.ve(e, re),
                    o = {};
                return (
                    N(n, function (e, t) {
                        e == i[t] && (o[t] = e);
                    }),
                    fe(t, re),
                    fe(t, o),
                    fe(e, {
                        $Top: 0,
                        $Left: 0,
                    }),
                    o
                );
            }),
                (a.Fh = function (e, t) {
                    return parseInt(e, t || 10);
                }),
                (a.od = _),
                (a.Ae = function (e, n) {
                    for (var i = t.body; n && e !== n && i !== n; )
                        n = n.parentNode;
                    return e === n;
                }),
                (a.ab = ae),
                (a.Vb = function (e, t) {
                    var n = new Image();

                    function i(e, o) {
                        a.$RemoveEvent(n, "load", i),
                            a.$RemoveEvent(n, "abort", r),
                            a.$RemoveEvent(n, "error", r),
                            t && t(n, o);
                    }

                    function r(e) {
                        i(0, o);
                    }
                    (k(y) && x < 11.6) || !e
                        ? i()
                        : (a.$AddEvent(n, "load", i),
                          a.$AddEvent(n, "abort", r),
                          a.$AddEvent(n, "error", r),
                          (n.src = e));
                }),
                (a.Eh = function (e, t, n) {
                    var i = 1;

                    function o(e) {
                        i--,
                            t && e && e.src == t.src && (t = e),
                            !i && n && n(t);
                    }
                    N(e, function (e) {
                        var t = f.hb(e, "src");
                        t && (i++, a.Vb(t, o));
                    }),
                        o();
                }),
                (a.Ce = function (e, t, n, i) {
                    i && (e = ae(e));
                    var o = Y(e, t);
                    ge(o) || (o = f.rg(e, t));
                    for (var r = ge(o) - 1; r > -1; r--) {
                        var a = o[r],
                            s = ae(n);
                        J(s, J(a)),
                            f.th(s, a.style.cssText),
                            f.pb(s, a),
                            f.ib(a);
                    }
                    return e;
                }),
                (a.Lc = function (e) {
                    return new se(e);
                }),
                (a.xh = function (e, t) {
                    return l.xb(e * e + t * t);
                }),
                (a.R = j),
                z("backgroundColor"),
                (a.Fb = z("overflow")),
                (a.lc = z("pointerEvents")),
                (a.V = z("top", 2)),
                (a.U = z("left", 2)),
                (a.cb = z("opacity", 1)),
                (a.N = z("zIndex", 1)),
                (a.Kf = function e(t, n, r, c, p) {
                    t = t || {};
                    var h,
                        g,
                        m = (r = U({}, r)).$Elmt,
                        v = {},
                        y = {},
                        b = r.le,
                        x = r.Ib,
                        w = H(
                            (function (e) {
                                return U(
                                    {
                                        wc: a.Ph(e) ? e : u.$Linear,
                                    },
                                    e
                                );
                            })(r.$Easing)
                        ),
                        S = H(r.Bd),
                        C = H(r.$During),
                        $ = H(r.$Round),
                        _ = H(r.Pc, oe),
                        T = M(n);
                    (t = H(t, s, o)), (n = H(n, s, o));
                    var k = E(),
                        A = p
                            ? {
                                  c: function (t, n, i) {
                                      return {
                                          E: e(t, n, i).E,
                                          X: function (e) {
                                              return (
                                                  ((e.y ||
                                                      e.x ||
                                                      e.m - i.$OriginalHeight ||
                                                      e.t - i.$OriginalWidth) &&
                                                      V(e)) ||
                                                  ""
                                              );
                                          },
                                          sb: z("clip"),
                                      };
                                  },
                                  Kd: function (t, n, i) {
                                      var o,
                                          r = i.Nf;

                                      function a(e) {
                                          var t = (e.rX || 0) % 360,
                                              n = (e.rY || 0) % 360,
                                              i = (e.r || 0) % 360,
                                              o = R(e.sX, 1),
                                              a = R(e.sY, 1),
                                              s = R(e.sZ, 1),
                                              l = new d(e.tX, e.tY, e.tZ || 0);
                                          return (
                                              r && l.$Move(-r.x, -r.y),
                                              l.$Scale(o, a, s),
                                              l.Ug(e.kX, e.kY),
                                              l.$RotateX(t),
                                              l.$RotateY(n),
                                              l.Cg(i),
                                              r && l.$Move(r.x, r.y),
                                              l.$Move(e.cc, e.Wb),
                                              l
                                          );
                                      }
                                      return (
                                          i.Ib
                                              ? ((g = W("transform")),
                                                (o = function (e) {
                                                    return a(e).Og();
                                                }))
                                              : ((g = O),
                                                (o = k
                                                    ? function (e) {
                                                          return a(e).Sg();
                                                      }
                                                    : X)),
                                          {
                                              E: e(t, n, i).E,
                                              sb: g,
                                              X: o || D,
                                          }
                                      );
                                  },
                                  pt: de,
                                  bl: function (e, t, n) {
                                      return F(
                                          I(e || [0]),
                                          I(t),
                                          n,
                                          W("stdDeviation")
                                      );
                                  },
                                  da: function (e, t, n) {
                                      var i = ge(t);
                                      (t = I(t)),
                                          e ||
                                              N(
                                                  (e = t.slice(0)),
                                                  function (t, n) {
                                                      n % 2 && (e[n] = 0);
                                                  }
                                              );
                                      for (
                                          var o, r = ge((e = I(e))), a = 1;
                                          a <= r && a <= i;
                                          a++
                                      )
                                          r % a || i % a || (o = a);

                                      function s(e) {
                                          for (var t = e; ge(t) < (r * i) / o; )
                                              t = t.concat(e);
                                          return t;
                                      }
                                      return F(
                                          s(e),
                                          s(t),
                                          n,
                                          W("stroke-dasharray")
                                      );
                                  },
                                  fc: j(W("fill"), [0, 0, 0, 1]),
                                  sc: j(W("stroke")),
                                  cl: j(z("color"), [0, 0, 0, 1]),
                                  bgc: j(z("backgroundColor")),
                                  bdc: j(z("borderColor")),
                                  rp: function () {
                                      var e = 1e-5;
                                      return {
                                          E: D,
                                          X: D,
                                          sb: function (t) {
                                              (e *= -1),
                                                  a.cb(t, l.Y(a.cb(t), 4) + e);
                                          },
                                      };
                                  },
                              }
                            : {},
                        L =
                            r.Yc ||
                            (p && {
                                o: 4,
                                so: 4,
                                Kd: 4,
                                ls: 4,
                                lh: 4,
                                sX: 4,
                                sY: 4,
                            });

                    function B(e) {
                        var t = S[e] || {};
                        return f.v({}, r, {
                            $Easing: w[e] || w.wc || i,
                            Pc: _[e] || i,
                            Bd: t,
                            $During: C[e] || i,
                            $Round: $[e] || i,
                            Mf: t.rd,
                            Yc: a.Nd(L) ? L : L && L[e],
                            le: 0,
                        });
                    }

                    function I(e) {
                        return ge(e) % 2 ? e.concat(e) : e;
                    }

                    function H(e, t, n) {
                        return (
                            (e = c ? ce(e, x, n && r.Lf, n && r.Of) : e || {}),
                            p ? U({}, t, e) : e
                        );
                    }

                    function j(t, n) {
                        function o(e) {
                            return "transparent" == e ? i : e || n;
                        }

                        function r(e, t) {
                            return (
                                (e = o(e)),
                                (t = o(t)),
                                !e && t && ((e = t.slice(0))[3] = 0),
                                e || [0, 0, 0, 0]
                            );
                        }
                        return function (n, i, o) {
                            i = r(i, n);
                            var a = e(
                                (n = r(n, i)),
                                i,
                                f.v(
                                    {
                                        Yc: [0, 0, 0, 4],
                                    },
                                    o
                                )
                            );
                            return {
                                E: function (e) {
                                    return a.E(e);
                                },
                                X: function (e) {
                                    return "rgba(" + e.join(",") + ")";
                                },
                                sb: t,
                            };
                        };
                    }

                    function q(e, t, n) {
                        e = e || 0;
                        var i = n.$Easing || u.$Linear,
                            o = n.$During,
                            r = n.$Round,
                            a = n.Mf,
                            s = t - e,
                            c = R(n.Yc, 2);
                        return {
                            E: function (t) {
                                return l.Y(le(e, s, t, i, o, r, a), c);
                            },
                            X: D,
                            sb: n.Pc,
                        };
                    }

                    function F(t, n, i, o) {
                        return {
                            E: e(t, n, i).E,
                            X: function (e) {
                                return e.join(",");
                            },
                            sb: o,
                        };
                    }
                    return (
                        N(n, function (n, i) {
                            var o = (t && t[i]) || 0;
                            if (T || n !== o) {
                                var r = (p && A[i]) || (P(n) ? e : q);
                                v[i] = r(o, n, B(i));
                            }
                        }),
                        (h = function (e) {
                            var t;
                            return (
                                N(v, function (n, i) {
                                    var o = n.E(e);
                                    n.sb(n.$Elmt || m, n.X(o)),
                                        "o" == i && (t = o);
                                }),
                                t
                            );
                        }),
                        b &&
                            f.f(v, function (e, t) {
                                for (var n = [], i = 0; i < b + 1; i++)
                                    n[i] = e.X(e.E(i / b));
                                (y[t] = n),
                                    (e.E = function (e) {
                                        return n[l.$Round(e * b)];
                                    }),
                                    (e.X = D);
                            }),
                        (h.E = function (e) {
                            var n = U(o, T ? [] : {}, t);
                            return (
                                f.f(v, function (t, i) {
                                    n[i] = t.E(e);
                                }),
                                n
                            );
                        }),
                        h
                    );
                }),
                (a.Zd = ue),
                (a.K = z("width", 2)),
                (a.J = z("height", 2)),
                (a.Vd = z("right", 2)),
                (a.be = z("bottom", 2)),
                z("marginLeft", 2),
                z("marginTop", 2),
                (a.db = z("position")),
                (a.nb = z("display")),
                (a.th = function (e, t) {
                    if (t == s) return e.style.cssText;
                    e.style.cssText = t;
                }),
                (a.Jf = function (e, t) {
                    if (t === s)
                        return (
                            (t = j(e, "backgroundImage") || ""),
                            (/\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(
                                t
                            ) || [])[1]
                        );
                    j(e, "backgroundImage", t ? "url('" + t + "')" : "");
                }),
                (a.If = oe =
                    {
                        $Opacity: a.cb,
                        $Top: a.V,
                        $Right: a.Vd,
                        $Bottom: a.be,
                        $Left: a.U,
                        Eb: a.K,
                        Gb: a.J,
                        Pb: a.db,
                        Me: a.nb,
                        $ZIndex: a.N,
                        o: a.cb,
                        x: a.U,
                        y: a.V,
                        i: a.N,
                        dO: z("stroke-dashoffset", 1),
                        ls: z("letterSpacing", 16),
                        lh: z("lineHeight", 1),
                        so: z("startOffset", 4, 100, K),
                    }),
                (a.ve = function (e, t) {
                    var n = {};
                    return (
                        N(t, function (t, i) {
                            oe[i] && (n[i] = oe[i](e));
                        }),
                        n
                    );
                }),
                (a.rb = fe);
            var pe = {
                    cc: 0,
                    Wb: 0,
                    sX: 1,
                    sY: 1,
                    r: 0,
                    rX: 0,
                    rY: 0,
                    tX: 0,
                    tY: 0,
                    tZ: 0,
                    kX: 0,
                    kY: 0,
                },
                he = [
                    u.$Linear,
                    u.$Swing,
                    u.$InQuad,
                    u.$OutQuad,
                    u.$InOutQuad,
                    u.$InCubic,
                    u.$OutCubic,
                    u.$InOutCubic,
                    u.$InQuart,
                    u.$OutQuart,
                    u.$InOutQuart,
                    u.$InQuint,
                    u.$OutQuint,
                    u.$InOutQuint,
                    u.$InSine,
                    u.$OutSine,
                    u.$InOutSine,
                    u.$InExpo,
                    u.$OutExpo,
                    u.$InOutExpo,
                    u.$InCirc,
                    u.$OutCirc,
                    u.$InOutCirc,
                    u.$InElastic,
                    u.$OutElastic,
                    u.$InOutElastic,
                    u.$InBack,
                    u.$OutBack,
                    u.$InOutBack,
                    u.$InBounce,
                    u.$OutBounce,
                    u.$InOutBounce,
                    u.$Early,
                    u.$Late,
                    u.$Mid,
                    u.$Mid2,
                    u.$Mid3,
                    u.$Mid4,
                    u.$Mid5,
                    u.$Mid6,
                ];

            function ge(e) {
                return e.length;
            }
            (a.Ld = function e(t) {
                var n;
                return (
                    f.Nd(t)
                        ? (n = he[t])
                        : f.Sh(t) &&
                          ((n = {}),
                          N(t, function (t, i) {
                              n[i] = e(t);
                          })),
                    n || t
                );
            }),
                (a.A = ge),
                (a.Qd = T),
                (a.Vf = function (e, t, n, i) {
                    f.cb(e, 1);
                    var r = {
                            o: {
                                j: 0,
                                l: 1,
                            },
                        },
                        a = {
                            x: 0,
                            y: 0,
                            o: 1,
                            r: 0,
                            rX: 0,
                            rY: 0,
                            sX: 1,
                            sY: 1,
                            tZ: 0,
                            kX: 0,
                            kY: 0,
                        };

                    function c(e) {
                        var t = f.Zd(d, 4),
                            n = f.Pd(e, ["b", "d", "e", "p", "dr"]) || {},
                            i = {};

                        function o(e, t, n) {
                            var i = n ? d : t;
                            return (
                                2 & e.Sd &&
                                    ((i = l.H(i / 2)),
                                    e.$Reverse || (i += ((i + 1) % 2) * e.ed)),
                                i
                            );
                        }

                        function r(e) {
                            var n = 1 & e,
                                i = 2 & e || 1,
                                o = 0;
                            2 & e && (o = d % 2);
                            var r = 68 == e ? t : f.Zd(d, e);
                            return {
                                Sd: e,
                                ed: o,
                                $Reverse: n,
                                Od: r,
                                Le: function (e) {
                                    return l.G((r[e] + o * !n) / i);
                                },
                            };
                        }

                        function a(e, t, n, i) {
                            var r = o(e, t, n),
                                a = 1 / (i * (r - 1) + 1);
                            return {
                                nc: function (n) {
                                    return e.Od[n] < t && [e.Le(n) * i * a, a];
                                },
                            };
                        }

                        function c(e, t, n, i, r) {
                            var a = o(e, t, n),
                                s = 0;

                            function c(e) {
                                return l.B(1 - e / a, i);
                            }
                            return (
                                2 & e.Sd &&
                                    ((a = l.H(d / 2) - e.ed),
                                    (s = (c(a - 1) / 2) * !e.ed)),
                                {
                                    Se: function (t) {
                                        return (
                                            (t = e.Le(t)),
                                            r && (t = a - t - 1),
                                            c(t) - s
                                        );
                                    },
                                }
                            );
                        }
                        (this.Uf = n),
                            (this.Rf = function (e) {
                                var t = i[e];
                                if (!t) {
                                    var o = (n.p && n.p[e]) || {},
                                        u = f.wc(o.dl, 0.5),
                                        p = o.o || 0,
                                        h = o.r || 1,
                                        g = o.c,
                                        m = o.d,
                                        v = f.wc(o.dO, 8),
                                        y = l.$Round(d * h),
                                        b = r(p),
                                        x = a(b, y, o.dlc, u),
                                        w = (function (e) {
                                            return {
                                                Pe: function (t) {
                                                    return e.Od[t] % 2 ? 1 : -1;
                                                },
                                            };
                                        })(8 & g ? b : r(g)),
                                        S = c(
                                            8 & v ? b : r(v),
                                            y,
                                            o.dc,
                                            m,
                                            9 == v
                                        );
                                    t = i[e] = {
                                        nc: x.nc,
                                        Qf: function (e) {
                                            return (
                                                (g != s ? w.Pe(e) : 1) *
                                                (m ? S.Se(e) : 1)
                                            );
                                        },
                                    };
                                }
                                return t;
                            });
                    }
                    var u = (function e(n) {
                            var i = [],
                                r = f.jb(n, o);
                            return (
                                f.f(r, function (n) {
                                    if (3 == n.nodeType) {
                                        for (
                                            var o = f.bd(n), r = 0;
                                            r < f.A(o);
                                            r++
                                        ) {
                                            var a = o[r],
                                                s = f.Rd();
                                            f.nb(s, "inline-block"),
                                                f.db(s, "relative"),
                                                " " == a
                                                    ? f.ng(s, "&nbsp;")
                                                    : f.bd(s, a),
                                                f.pb(s, n),
                                                i.push(s),
                                                f.cb(s, t);
                                        }
                                        f.ib(n);
                                    } else i = i.concat(e(n));
                                }),
                                i
                            );
                        })(e),
                        d = f.A(u),
                        p = [];
                    f.f(u, function (e, o) {
                        var s = [],
                            u = f.v({}, a),
                            d = f.v({}, a, {
                                o: t,
                            });
                        f.f(n, function (e, t) {
                            var n = {},
                                i = {},
                                h = (p[t] = p[t] || new c(e));
                            f.f(e, function (e, t) {
                                var s = h.Rf(t),
                                    c = s.nc(o);
                                if (c) {
                                    var f,
                                        p = l.Y(e - u[t], 8);
                                    if (p) {
                                        (p = l.Y(e - a[t], 8)),
                                            (p *= s.Qf(o)),
                                            (f = l.Y(p + a[t], 4));
                                        var g = r[t];
                                        g &&
                                            ((f = l.l(f, g.j)),
                                            (f = l.j(f, g.l)));
                                    } else f = e;
                                    f - d[t] && ((n[t] = f), (i[t] = c));
                                }
                            }),
                                f.v(u, e),
                                f.v(d, n),
                                f.Th(n) &&
                                    (f.v(n, h.Uf), (n.dr = i), s.push(n));
                        }),
                            f.A(s) && i(e, s);
                    });
                });
        })());

        function p() {
            var t,
                n = this,
                i = [],
                r = [];

            function a() {
                f.f(r, function (e) {
                    f.$RemoveEvent(e.Ne, e.ec, e.gc, e.Xe);
                }),
                    (r = []);
            }
            (n.Oc = function () {
                return t;
            }),
                (n.a = function (e, t, n, i) {
                    f.$AddEvent(e, t, n, i),
                        r.push({
                            Ne: e,
                            ec: t,
                            gc: n,
                            Xe: i,
                        });
                }),
                (n.T = function (e, t, n, i) {
                    f.f(r, function (o, a) {
                        o.Ne === e &&
                            o.ec == t &&
                            o.gc === n &&
                            o.Xe == i &&
                            (f.$RemoveEvent(e, t, n, i), r.splice(a, 1));
                    });
                }),
                (n.Ve = a),
                (n.$On = n.addEventListener =
                    function (e, t) {
                        i.push({
                            ec: e,
                            gc: t,
                        });
                    }),
                (n.$Off = n.removeEventListener =
                    function (e, t) {
                        f.f(i, function (n, o) {
                            n.ec == e && n.gc === t && i.splice(o, 1);
                        });
                    }),
                (n.k = function (t) {
                    var n = [].slice.call(arguments, 1);
                    f.f(i, function (i) {
                        i.ec == t && i.gc.apply(e, n);
                    });
                }),
                (n.$Destroy = function () {
                    t || ((t = o), a(), (i = []));
                });
        }
        var h = function (t, n, i, a, c, u) {
                t = t || 0;
                var d,
                    p,
                    h,
                    g,
                    m,
                    v,
                    y,
                    b,
                    x,
                    w,
                    S,
                    C,
                    $,
                    _ = this,
                    T = 0,
                    k = 1,
                    E = 0,
                    A = 0,
                    O = 0,
                    D = [],
                    M = r,
                    L = r;

                function N(e) {
                    var t = e;
                    if (
                        (S &&
                            ((!C && (t >= w || t < x)) || (C && t >= x)) &&
                            (t = ((((t - x) % S) + S) % S) + x),
                        !y || m || A != t)
                    ) {
                        var r = l.j(t, w);
                        if (
                            ((r = l.l(r, x)),
                            i.$Reverse && (r = w - r + x),
                            !y || m || r != O)
                        ) {
                            if (d) {
                                var c,
                                    u = d((r - b) / (n || 1));
                                if ($) {
                                    var p = r > x && r < w;
                                    p != L && (c = L = p);
                                }
                                if (!c && u != s) {
                                    var h = !u;
                                    h != M && (c = M = h);
                                }
                                c != s &&
                                    (c && f.lc(a, "none"),
                                    !c && f.lc(a, f.g(a, "data-events")));
                            }
                            var g = O,
                                v = (O = r);
                            f.f(D, function (e, n) {
                                ((!y && C) || t <= A ? D[f.A(D) - n - 1] : e).L(
                                    r - E
                                );
                            }),
                                (A = t),
                                (y = o),
                                _.kd(g - b, v - b),
                                _.zc(g, v);
                        }
                    }
                }

                function B(e, t, n) {
                    t && e.$Shift(w),
                        n ||
                            ((x = l.j(x, e.yc() + E)),
                            (w = l.l(w, e.vb() + E))),
                        D.push(e);
                }
                var I =
                    e.requestAnimationFrame ||
                    e.webkitRequestAnimationFrame ||
                    e.mozRequestAnimationFrame ||
                    e.msRequestAnimationFrame;

                function P() {
                    if (p) {
                        var e = f.Tb(),
                            t = e - T;
                        T = e;
                        var n = A + t * g * k;
                        n * g >= h * g && (n = h),
                            N(n),
                            !m && n * g >= h * g ? H(v) : I(P);
                    }
                }

                function R(e, t, n) {
                    p ||
                        ((p = o),
                        (m = n),
                        (v = t),
                        (e = l.l(e, x)),
                        (e = l.j(e, w)),
                        (g = (h = e) < A ? -1 : 1),
                        _.Qc(),
                        (T = f.Tb()),
                        I(P));
                }

                function H(e) {
                    p && ((m = p = v = r), _.Rc(), e && e());
                }
                ((f.He() && f.Cd() < 7) || !I) &&
                    (I = function (e) {
                        f.$Delay(e, i.$Interval);
                    }),
                    (_.$Play = function (e, t, n) {
                        R(e ? A + e : w, t, n);
                    }),
                    (_.tc = R),
                    (_.Ff = function (e, t) {
                        R(w, e, t);
                    }),
                    (_.S = H),
                    (_.Be = function () {
                        return A;
                    }),
                    (_.Ee = function () {
                        return h;
                    }),
                    (_.z = function () {
                        return O;
                    }),
                    (_.L = N),
                    (_.uf = function () {
                        N(w);
                    }),
                    (_.$IsPlaying = function () {
                        return p;
                    }),
                    (_.De = function (e) {
                        k = e;
                    }),
                    (_.$Shift = function (e) {
                        (x += e),
                            (w += e),
                            (b += e),
                            (A += e),
                            (O += e),
                            (E += e);
                    }),
                    (_.je = B),
                    (_.M = function (e, t) {
                        B(e, 0, t);
                    }),
                    (_.zd = function (e) {
                        B(e, 1);
                    }),
                    (_.qd = function (e) {
                        w += e;
                    }),
                    (_.yc = function () {
                        return x;
                    }),
                    (_.vb = function () {
                        return w;
                    }),
                    (_.zc = _.Qc = _.Rc = _.kd = f.Kc),
                    f.Tb(),
                    (_.nf = function () {
                        return d && d.E(1);
                    }),
                    (i = f.v(
                        {
                            $Interval: 16,
                        },
                        i
                    )),
                    a && ($ = f.g(a, "data-inactive")),
                    (S = i.hc),
                    (C = i.pf),
                    (x = b = t),
                    (w = t + n),
                    (i.$Elmt = a),
                    a && (d = f.Kf(c, u, i, o, o));
            },
            g = (e.$JssorSlideshowFormations$ = new (function () {
                var e = this,
                    t = 2,
                    n = 4,
                    i = 2049,
                    r = 2048 + t,
                    a = 513,
                    s = 512 + t,
                    c = 256 + n,
                    u = 264,
                    d = 1024 + n,
                    p = 1032;

                function h(e) {
                    return (e & t) == t;
                }

                function g(e) {
                    return (e & n) == n;
                }

                function m(e, t, n) {
                    n.push(t), (e[t] = e[t] || []), e[t].push(n);
                }
                (e.$FormationStraight = function (e) {
                    var t,
                        n = e.$Cols,
                        o = e.$Rows,
                        l = e.$Assembly,
                        f = [],
                        p = 0,
                        h = 0,
                        g = n - 1,
                        v = o - 1,
                        y = e.mc - 1;
                    for (h = 0; h < o; h++)
                        for (p = 0; p < n; p++) {
                            switch (l) {
                                case i:
                                    t = y - (p * o + (v - h));
                                    break;
                                case d:
                                    t = y - (h * n + (g - p));
                                    break;
                                case a:
                                    t = y - (p * o + h);
                                case c:
                                    t = y - (h * n + p);
                                    break;
                                case r:
                                    t = p * o + h;
                                    break;
                                case u:
                                    t = h * n + (g - p);
                                    break;
                                case s:
                                    t = p * o + (v - h);
                                    break;
                                default:
                                    t = h * n + p;
                            }
                            m(f, t, [h, p]);
                        }
                    return f;
                }),
                    (e.$FormationSwirl = function (e) {
                        var t,
                            n,
                            l = e.$Cols,
                            p = e.$Rows,
                            h = e.$Assembly,
                            g = e.mc,
                            v = [],
                            y = [],
                            b = 0,
                            x = 0,
                            w = 0,
                            S = l - 1,
                            C = p - 1,
                            $ = 0;
                        switch (h) {
                            case i:
                                (x = S), (w = 0), (n = [2, 1, 3, 0]);
                                break;
                            case d:
                                (x = 0), (w = C), (n = [0, 3, 1, 2]);
                                break;
                            case a:
                                (x = S), (w = C), (n = [3, 1, 2, 0]);
                                break;
                            case c:
                                (x = S), (w = C), (n = [1, 3, 0, 2]);
                                break;
                            case r:
                                (x = 0), (w = 0), (n = [2, 0, 3, 1]);
                                break;
                            case u:
                                (x = S), (w = 0), (n = [1, 2, 0, 3]);
                                break;
                            case s:
                                (x = 0), (w = C), (n = [3, 0, 2, 1]);
                                break;
                            default:
                                (x = 0), (w = 0), (n = [0, 2, 1, 3]);
                        }
                        for (b = 0; b < g; ) {
                            if (
                                ((t = w + "," + x),
                                x >= 0 && x < l && w >= 0 && w < p && !y[t])
                            )
                                (y[t] = o), m(v, b++, [w, x]);
                            else
                                switch (n[$++ % f.A(n)]) {
                                    case 0:
                                        x--;
                                        break;
                                    case 2:
                                        w--;
                                        break;
                                    case 1:
                                        x++;
                                        break;
                                    case 3:
                                        w++;
                                }
                            switch (n[$ % f.A(n)]) {
                                case 0:
                                    x++;
                                    break;
                                case 2:
                                    w++;
                                    break;
                                case 1:
                                    x--;
                                    break;
                                case 3:
                                    w--;
                            }
                        }
                        return v;
                    }),
                    (e.$FormationZigZag = function (e) {
                        var t,
                            n = e.$Cols,
                            o = e.$Rows,
                            l = e.$Assembly,
                            p = e.mc,
                            h = [],
                            g = 0,
                            v = 0,
                            y = 0,
                            b = n - 1,
                            x = o - 1,
                            w = 0;
                        switch (l) {
                            case i:
                                (v = b), (y = 0), (t = [2, 1, 3, 1]);
                                break;
                            case d:
                                (v = 0), (y = x), (t = [0, 3, 1, 3]);
                                break;
                            case a:
                                (v = b), (y = x), (t = [3, 1, 2, 1]);
                                break;
                            case c:
                                (v = b), (y = x), (t = [1, 3, 0, 3]);
                                break;
                            case r:
                                (v = 0), (y = 0), (t = [2, 0, 3, 0]);
                                break;
                            case u:
                                (v = b), (y = 0), (t = [1, 2, 0, 2]);
                                break;
                            case s:
                                (v = 0), (y = x), (t = [3, 0, 2, 0]);
                                break;
                            default:
                                (v = 0), (y = 0), (t = [0, 2, 1, 2]);
                        }
                        for (g = 0; g < p; )
                            if (
                                v >= 0 &&
                                v < n &&
                                y >= 0 &&
                                y < o &&
                                void 0 === h[y + "," + v]
                            )
                                switch ((m(h, g++, [y, v]), t[w % f.A(t)])) {
                                    case 0:
                                        v++;
                                        break;
                                    case 2:
                                        y++;
                                        break;
                                    case 1:
                                        v--;
                                        break;
                                    case 3:
                                        y--;
                                }
                            else {
                                switch (t[w++ % f.A(t)]) {
                                    case 0:
                                        v--;
                                        break;
                                    case 2:
                                        y--;
                                        break;
                                    case 1:
                                        v++;
                                        break;
                                    case 3:
                                        y++;
                                }
                                switch (t[w++ % f.A(t)]) {
                                    case 0:
                                        v++;
                                        break;
                                    case 2:
                                        y++;
                                        break;
                                    case 1:
                                        v--;
                                        break;
                                    case 3:
                                        y--;
                                }
                            }
                        return h;
                    }),
                    (e.$FormationStraightStairs = function (e) {
                        var t = e.$Cols,
                            n = e.$Rows,
                            o = e.$Assembly,
                            l = e.mc,
                            f = [],
                            v = 0,
                            y = 0,
                            b = 0,
                            x = t - 1,
                            w = n - 1,
                            S = l - 1;
                        switch (o) {
                            case i:
                            case s:
                            case a:
                            case r:
                                var C = 0,
                                    $ = 0;
                                break;
                            case u:
                            case d:
                            case c:
                            case p:
                                (C = x), ($ = 0);
                                break;
                            default:
                                o = p;
                                (C = x), ($ = 0);
                        }
                        for (y = C, b = $; v < l; ) {
                            switch (
                                (g(o) || h(o)
                                    ? m(f, S - v++, [b, y])
                                    : m(f, v++, [b, y]),
                                o)
                            ) {
                                case i:
                                case s:
                                    y--, b++;
                                    break;
                                case a:
                                case r:
                                    y++, b--;
                                    break;
                                case u:
                                case d:
                                    y--, b--;
                                    break;
                                case p:
                                case c:
                                default:
                                    y++, b++;
                            }
                            if (y < 0 || b < 0 || y > x || b > w) {
                                switch (o) {
                                    case i:
                                    case s:
                                        C++;
                                        break;
                                    case u:
                                    case d:
                                    case a:
                                    case r:
                                        $++;
                                        break;
                                    case p:
                                    case c:
                                    default:
                                        C--;
                                }
                                if (C < 0 || $ < 0 || C > x || $ > w) {
                                    switch (o) {
                                        case i:
                                        case s:
                                            (C = x), $++;
                                            break;
                                        case a:
                                        case r:
                                            ($ = w), C++;
                                            break;
                                        case u:
                                        case d:
                                            ($ = w), C--;
                                            break;
                                        case p:
                                        case c:
                                        default:
                                            (C = 0), $++;
                                    }
                                    $ > w
                                        ? ($ = w)
                                        : $ < 0
                                        ? ($ = 0)
                                        : C > x
                                        ? (C = x)
                                        : C < 0 && (C = 0);
                                }
                                (b = $), (y = C);
                            }
                        }
                        return f;
                    }),
                    (e.$FormationRectangle = function (e) {
                        var t,
                            n,
                            i,
                            o = e.$Cols || 1,
                            r = e.$Rows || 1,
                            a = [];
                        for (
                            i = l.$Round(l.j(o / 2, r / 2)) + 1, t = 0;
                            t < o;
                            t++
                        )
                            for (n = 0; n < r; n++)
                                m(a, i - l.j(t + 1, n + 1, o - t, r - n), [
                                    n,
                                    t,
                                ]);
                        return a;
                    }),
                    (e.$FormationRandom = function (e) {
                        for (var t, n = [], i = 0; i < e.$Rows; i++)
                            for (t = 0; t < e.$Cols; t++)
                                m(n, l.H(1e5 * l.dd()) % 13, [i, t]);
                        return n;
                    }),
                    (e.$FormationCircle = function (e) {
                        for (
                            var t,
                                n = e.$Cols || 1,
                                i = e.$Rows || 1,
                                o = [],
                                r = n / 2 - 0.5,
                                a = i / 2 - 0.5,
                                s = 0;
                            s < n;
                            s++
                        )
                            for (t = 0; t < i; t++)
                                m(
                                    o,
                                    l.$Round(
                                        l.xb(l.B(s - r, 2) + l.B(t - a, 2))
                                    ),
                                    [t, s]
                                );
                        return o;
                    }),
                    (e.$FormationCross = function (e) {
                        for (
                            var t,
                                n = e.$Cols || 1,
                                i = e.$Rows || 1,
                                o = [],
                                r = n / 2 - 0.5,
                                a = i / 2 - 0.5,
                                s = 0;
                            s < n;
                            s++
                        )
                            for (t = 0; t < i; t++)
                                m(o, l.$Round(l.j(l.P(s - r), l.P(t - a))), [
                                    t,
                                    s,
                                ]);
                        return o;
                    }),
                    (e.$FormationRectangleCross = function (e) {
                        for (
                            var t,
                                n = e.$Cols || 1,
                                i = e.$Rows || 1,
                                o = [],
                                r = n / 2 - 0.5,
                                a = i / 2 - 0.5,
                                s = l.l(r, a) + 1,
                                c = 0;
                            c < n;
                            c++
                        )
                            for (t = 0; t < i; t++)
                                m(
                                    o,
                                    l.$Round(
                                        s - l.l(r - l.P(c - r), a - l.P(t - a))
                                    ) - 1,
                                    [t, c]
                                );
                        return o;
                    });
            })());
        e.$JssorSlideshowRunner$ = function (e, t, n, a, s, c) {
            var d,
                p,
                m,
                v = this,
                y = 0,
                b = a.$TransitionsOrder;

            function x(e) {
                var t = {
                    $Left: "x",
                    $Top: "y",
                    $Bottom: "m",
                    $Right: "t",
                    $Rotate: "r",
                    $ScaleX: "sX",
                    $ScaleY: "sY",
                    $TranslateX: "tX",
                    $TranslateY: "tY",
                    $SkewX: "kX",
                    $SkewY: "kY",
                    $Opacity: "o",
                    $ZIndex: "i",
                    $Clip: "c",
                };
                f.f(e, function (n, i) {
                    var o = t[i];
                    o && ((e[o] = n), delete e[i], "c" == o && x(n));
                }),
                    e.$Zoom && (e.sX = e.sY = e.$Zoom);
            }

            function w(e, t) {
                var n = {
                    $Duration: 1,
                    $Delay: 0,
                    $Cols: 1,
                    $Rows: 1,
                    $Opacity: 0,
                    $Zoom: 0,
                    $Clip: 0,
                    $Move: r,
                    $SlideOut: r,
                    $Reverse: r,
                    $Formation: g.$FormationRandom,
                    $Assembly: 1032,
                    $ChessMode: {
                        $Column: 0,
                        $Row: 0,
                    },
                    $Easing: u.$Linear,
                    $Round: {},
                    Ic: [],
                    $During: {},
                };
                return (
                    f.v(n, e),
                    0 == n.$Rows && (n.$Rows = l.$Round(n.$Cols * t)),
                    (n.$Easing = f.Ld(n.$Easing)),
                    x(n),
                    x(n.$Easing),
                    x(n.$During),
                    x(n.$Round),
                    (n.mc = n.$Cols * n.$Rows),
                    (n.Af = function (e, t) {
                        var i = (e /= n.$Cols) + "x" + (t /= n.$Rows);
                        if (!n.Ic[i]) {
                            n.Ic[i] = {
                                w: e,
                                h: t,
                            };
                            for (var o = 0; o < n.$Cols; o++)
                                for (var r = 0; r < n.$Rows; r++)
                                    n.Ic[i][r + "," + o] = {
                                        y: r * t,
                                        t: o * e + e,
                                        m: r * t + t,
                                        x: o * e,
                                    };
                        }
                        return n.Ic[i];
                    }),
                    n.$Brother &&
                        ((n.$Brother = w(n.$Brother, t)), (n.$SlideOut = o)),
                    n
                );
            }

            function S(e, t, n, i, a, s) {
                var u,
                    d,
                    p = n.$ChessMode.$Column || 0,
                    g = n.$ChessMode.$Row || 0,
                    m = n.Af(a, s),
                    v = n.$Formation(n),
                    y = n.$SlideOut;
                (t = f.ab(t)),
                    f.N(t, 1),
                    f.Fb(t, "hidden"),
                    f.db(t, "absolute"),
                    c(t, 0, 0),
                    !n.$Reverse && v.reverse();
                var b = {
                        x: 1 & n.c,
                        t: 2 & n.c,
                        y: 4 & n.c,
                        m: 8 & n.c,
                    },
                    x = new h(0, 0);
                return (
                    f.f(v, function (c, w) {
                        y && (w = f.A(v) - w - 1);
                        var S = n.$Delay * w;
                        f.f(c, function (c) {
                            var v = c[0],
                                w = c[1],
                                C = v + "," + w,
                                $ = r,
                                _ = r,
                                T = r;
                            p &&
                                w % 2 &&
                                (3 & p && ($ = !$),
                                12 & p && (_ = !_),
                                16 & p && (T = !T)),
                                g &&
                                    v % 2 &&
                                    (3 & g && ($ = !$),
                                    12 & g && (_ = !_),
                                    16 & g && (T = !T));
                            var k = _ ? b.m : b.y,
                                E = _ ? b.y : b.m,
                                A = $ ? b.t : b.x,
                                O = $ ? b.x : b.t,
                                D = k || E || A || O,
                                M = f.ab(t);
                            (d = {
                                x: 0,
                                y: 0,
                                o: 1,
                            }),
                                (u = f.v({}, d)),
                                n.o && (d.o = 2 - n.o);
                            var L = n.$Cols * n.$Rows > 1 || D;
                            if ((n.sX || n.r) && o) {
                                (d.sX = d.sY = n.sX ? n.sX - 1 : 1),
                                    (u.sX = u.sY = 1);
                                var N = n.r || 0;
                                (d.r = 360 * N * (T ? -1 : 1)), (u.r = 0);
                            }
                            if (L) {
                                var B = m[C];
                                if (D) {
                                    var I = {},
                                        P = n.$ScaleClip || 1;
                                    if (
                                        (k && E
                                            ? ((I.y = (m.h / 2) * P),
                                              (I.m = -I.y))
                                            : k
                                            ? (I.m = -m.h * P)
                                            : E && (I.y = m.h * P),
                                        A && O
                                            ? ((I.x = (m.w / 2) * P),
                                              (I.t = -I.x))
                                            : A
                                            ? (I.t = -m.w * P)
                                            : O && (I.x = m.w * P),
                                        n.$Move)
                                    ) {
                                        var R = (I.x || 0) + (I.t || 0),
                                            H = (I.y || 0) + (I.m || 0);
                                        (d.x += R), (d.y += H);
                                    }
                                    (u.c = B),
                                        f.f(I, function (e, t) {
                                            I[t] = B[t] + e;
                                        }),
                                        (d.c = I);
                                } else f.kh(M, B);
                            }
                            var j = $ ? 1 : -1,
                                q = _ ? 1 : -1;
                            n.x && (d.x += a * n.x * j),
                                n.y && (d.y += s * n.y * q);
                            var z = {
                                $Elmt: M,
                                $Easing: n.$Easing,
                                $During: n.$During,
                                $Round: n.$Round,
                                $Move: n.$Move,
                                Eb: a,
                                Gb: s,
                                le: l.$Round(n.$Duration / 4),
                                $Reverse: !y,
                            };
                            d = f.Zg(d, u);
                            var W = new h(i + S, n.$Duration, z, M, u, d);
                            x.M(W), e.Ef(M);
                        });
                    }),
                    x.L(-1),
                    x
                );
            }
            (v.Bf = function () {
                var e = 0,
                    t = a.$Transitions,
                    n = f.A(t);
                return (
                    t[(e = b ? y++ % n : l.G(l.dd() * n))] && (t[e].Qb = e),
                    t[e]
                );
            }),
                (v.Ob = function () {
                    e.Ob(), (p = i), (m = i);
                }),
                (v.Cf = function (i, o, r, a, s, c) {
                    d = w(s, c);
                    var u = a.Re,
                        f = r.Re,
                        h = u,
                        g = f,
                        y = d,
                        b = d.$Brother || w({}, c);
                    d.$SlideOut || ((h = f), (g = u));
                    var x = b.$Shift || 0,
                        C = l.l(x, 0),
                        $ = l.l(-x, 0);
                    (p = S(e, g, b, C, t, n)),
                        (m = S(e, h, y, $, t, n)),
                        (v.Qb = i);
                }),
                (v.of = function () {
                    var e = i;
                    return m && ((e = new h(0, 0)).M(m), e.M(p), (e.ye = d)), e;
                });
        };
        var m = {
                qf: "data-scale",
                yb: "data-autocenter",
                Dd: "data-nofreeze",
                ze: "data-nodrag",
            },
            v = new (function () {
                (this.Ac = function (e, t, n, i) {
                    (i || !f.g(e, t)) && f.g(e, t, n);
                }),
                    (this.Cc = function (e) {
                        var t = f.q(e, m.yb);
                        f.Uc(e, t);
                    });
            })(),
            y = {
                uc: 1,
            };

        function b(e, t, n) {
            var i = this;
            f.W(i, p), h.call(i, 0, n.$Idle), (i.qc = 0), (i.fd = n.$Idle);
        }
        (e.$JssorBulletNavigator$ = function () {
            var e,
                t,
                n,
                r,
                a,
                c,
                u,
                d,
                h,
                g,
                b,
                x,
                w,
                S,
                C,
                $,
                _ = this,
                T = f.W(_, p),
                k = 0;

            function E(e) {
                $[e] && $[e].Ye(e == k);
            }

            function A(e) {
                _.k(y.uc, e * u);
            }
            (_.Sc = function (e) {
                if (e != a) {
                    var t = k,
                        n = l.G(e / u);
                    (k = n), (a = e), E(t), E(n);
                }
            }),
                (_.id = function (t) {
                    f.mb(e, !t);
                }),
                (_.nd = function (p) {
                    f.$Destroy($),
                        (a = s),
                        _.Ve(),
                        (C = []),
                        ($ = []),
                        f.Rb(e),
                        (t = l.H(p / u)),
                        (k = 0);
                    var m = w + h,
                        y = S + g,
                        T = l.H(t / d) - 1;
                    (n = w + m * (b ? d - 1 : T)),
                        (r = S + y * (b ? T : d - 1)),
                        f.K(e, n),
                        f.J(e, r);
                    for (var E = 0; E < t; E++) {
                        var O = f.Rd();
                        f.bd(O, E + 1);
                        var D = f.Ce(x, "numbertemplate", O, o);
                        f.db(D, "absolute");
                        var M = E % (T + 1),
                            L = l.G(E / (T + 1)),
                            N = c.Yb && !b ? T - M : M;
                        f.U(D, (b ? L : N) * m),
                            f.V(D, (b ? N : L) * y),
                            f.O(e, D),
                            (C[E] = D),
                            1 & c.$ActionMode && _.a(D, "click", f.Z(i, A, E)),
                            2 & c.$ActionMode &&
                                _.a(D, "mouseenter", f.Z(i, A, E)),
                            ($[E] = f.Lc(D));
                    }
                    v.Cc(e);
                }),
                (_.F = function (t, n) {
                    (_.$Elmt = e = f.$GetElement(t)),
                        (_.gd = c =
                            f.v(
                                {
                                    $SpacingX: 10,
                                    $SpacingY: 10,
                                    $ActionMode: 1,
                                },
                                n
                            )),
                        (x = f.$FindChild(e, "prototype")),
                        (w = f.K(x)),
                        (S = f.J(x)),
                        f.ib(x, e),
                        (u = c.$Steps || 1),
                        (d = c.$Rows || 1),
                        (h = c.$SpacingX),
                        (g = c.$SpacingY),
                        (b = 2 & c.$Orientation),
                        c.$AutoCenter && v.Ac(e, m.yb, c.$AutoCenter);
                }),
                (_.$Destroy = function () {
                    f.$Destroy($, T);
                }),
                f.F(_);
        }),
            (e.$JssorArrowNavigator$ = function () {
                var e,
                    t,
                    n,
                    r,
                    a,
                    s,
                    l,
                    c,
                    u,
                    d,
                    h = this,
                    g = f.W(h, p);

                function b(e) {
                    h.k(y.uc, e, o);
                }
                (h.Sc = function (e, t, i) {
                    (l = t),
                        !i &&
                            (u.$Enable((n.$Loop || !r.lf(l)) && s > 1),
                            d.$Enable((n.$Loop || !r.ef(l)) && s > 1));
                }),
                    (h.id = function (n) {
                        f.mb(e, !n), f.mb(t, !n);
                    }),
                    (h.nd = function (n) {
                        (s = n),
                            (l = 0),
                            a ||
                                (h.a(e, "click", f.Z(i, b, -c)),
                                h.a(t, "click", f.Z(i, b, c)),
                                (u = f.Lc(e)),
                                (d = f.Lc(t)),
                                f.g(e, m.Dd, 1),
                                f.g(t, m.Dd, 1),
                                (a = o));
                    }),
                    (h.F = function (i, o, a, s) {
                        (h.gd = n =
                            f.v(
                                {
                                    $Steps: 1,
                                },
                                a
                            )),
                            (e = i),
                            (t = o),
                            n.Yb && ((e = o), (t = i)),
                            (c = n.$Steps),
                            (r = s),
                            n.$AutoCenter &&
                                (v.Ac(e, m.yb, n.$AutoCenter),
                                v.Ac(t, m.yb, n.$AutoCenter)),
                            v.Cc(e),
                            v.Cc(t);
                    }),
                    (h.$Destroy = function () {
                        f.$Destroy(u, d, g);
                    }),
                    f.F(h);
            }),
            (e.$JssorThumbnailNavigator$ = function () {
                var e,
                    t,
                    n,
                    a,
                    c,
                    u,
                    d,
                    h,
                    g,
                    b,
                    x,
                    S,
                    C,
                    $,
                    _,
                    T,
                    k = this,
                    E = f.W(k, p),
                    A = [];

                function O() {
                    var e,
                        t,
                        s,
                        l,
                        d = this;

                    function h(t) {
                        if (t || !_.$LastDragSucceeded()) {
                            var n = g - (e % g),
                                i = _.Id((e + n) / g - 1),
                                s = i * g + g - n;
                            i < 0 && (s += a % g),
                                i >= c && (s -= a % g),
                                k.k(y.uc, s, r, o);
                        }
                    }
                    f.W(d, p),
                        (d.Hd = function () {
                            s.Ye(u == e);
                        }),
                        (d.F = function (r, a) {
                            (d.Qb = e = a),
                                (l = r.nh || r.ih || f.bc()),
                                (d.Wc = t = f.Ce(T, "thumbnailtemplate", l, o)),
                                (s = f.Lc(t)),
                                1 & n.$ActionMode &&
                                    d.a(t, "click", f.Z(i, h, 0)),
                                2 & n.$ActionMode &&
                                    d.a(t, "mouseenter", f.Z(i, h, 1));
                        }),
                        f.F(d);
                }
                (k.Sc = function (e, t, n) {
                    if (e != u) {
                        var i = u;
                        (u = e), -1 != i && A[i].Hd(), A[e] && A[e].Hd();
                    }
                    !n && _.$PlayTo(_.Id(l.G(e / g)));
                }),
                    (k.id = function (t) {
                        f.mb(e, !t);
                    }),
                    (k.nd = function (i, p) {
                        f.$Destroy(_, A), (u = s), (A = []);
                        var m = f.ab(t);
                        f.Rb(e), n.Yb && f.g(e, "dir", "rtl"), f.ph(e, f.jb(m));
                        var y = f.$FindChild(e, "slides", o);
                        (a = i), (c = l.H(a / g)), (u = -1);
                        var T = 1 & n.$Orientation,
                            k = S + (S + b) * (g - 1) * (1 - T),
                            E = C + (C + x) * (g - 1) * T,
                            D = (T ? l.l : l.j)(d, k),
                            M = (T ? l.j : l.l)(h, E);
                        $ = l.H(
                            ((d - b) / (S + b)) * T +
                                ((h - x) / (C + x)) * (1 - T)
                        );
                        var L = k + (k + b) * ($ - 1) * T,
                            N = E + (E + x) * ($ - 1) * (1 - T);
                        (D = l.j(D, L)),
                            (M = l.j(M, N)),
                            f.K(y, D),
                            f.J(y, M),
                            f.Uc(y, 3);
                        var B = [];
                        f.f(p, function (e, t) {
                            var n = new O(e, t),
                                i = n.Wc,
                                o = l.G(t / g),
                                r = t % g;
                            f.U(i, (S + b) * r * (1 - T)),
                                f.V(i, (C + x) * r * T),
                                B[o] || ((B[o] = f.bc()), f.O(y, B[o])),
                                f.O(B[o], i),
                                A.push(n);
                        });
                        var I = f.v(
                            {
                                $AutoPlay: 0,
                                $NaviQuitDrag: r,
                                $SlideWidth: k,
                                $SlideHeight: E,
                                $SlideSpacing: b * T + x * (1 - T),
                                $MinDragOffsetToSlide: 12,
                                $SlideDuration: 200,
                                $PauseOnHover: 1,
                                $Cols: $,
                                $PlayOrientation: n.$Orientation,
                                $DragOrientation:
                                    n.$NoDrag || n.$DisableDrag
                                        ? 0
                                        : n.$Orientation,
                            },
                            n
                        );
                        (_ = new w(e, I)), v.Cc(e);
                    }),
                    (k.F = function (i, r, a) {
                        (e = i),
                            (k.gd = n =
                                f.v(
                                    {
                                        $SpacingX: 0,
                                        $SpacingY: 0,
                                        $Orientation: 1,
                                        $ActionMode: 1,
                                    },
                                    r
                                )),
                            (d = f.K(e)),
                            (h = f.J(e));
                        var s = f.$FindChild(e, "slides", o);
                        (T = f.$FindChild(s, "prototype")),
                            (a = f.ab(a)),
                            f.pb(a, s),
                            (S = f.K(T)),
                            (C = f.J(T)),
                            f.ib(T, s),
                            f.db(s, "absolute"),
                            f.Fb(s, "hidden"),
                            (g = n.$Rows || 1),
                            (b = n.$SpacingX),
                            (x = n.$SpacingY),
                            (n.$AutoCenter &= n.$Orientation),
                            n.$AutoCenter && v.Ac(e, m.yb, n.$AutoCenter),
                            (t = f.ab(e));
                    }),
                    (k.$Destroy = function () {
                        f.$Destroy(_, A, E);
                    }),
                    f.F(k);
            }),
            (b.pc = 21),
            (b.Zb = 24);
        var x = (e.$JssorCaptionSlideo$ = function () {
                var e = this,
                    n = f.W(e, p);
                h.call(e, 0, 0);
                var a,
                    s,
                    c,
                    u,
                    d,
                    g = new h(0, 0),
                    m = [],
                    v = [],
                    y = 0;

                function w(e, t) {
                    var n = m[e];
                    if (n == i) {
                        n = m[e] = {
                            ob: e,
                            Zc: [],
                            Te: [],
                        };
                        var o = 0;
                        !f.f(v, function (t, n) {
                            return (o = n), t.ob > e;
                        }) && o++,
                            v.splice(o, 0, n);
                    }
                    return n;
                }

                function S(e, t) {
                    var n,
                        r,
                        a = f.K(e),
                        s = f.J(e),
                        c = f.Ib(e),
                        d = {
                            x: c ? 0 : f.U(e),
                            y: c ? 0 : f.V(e),
                            cc: 0,
                            Wb: 0,
                            o: f.cb(e),
                            i: f.N(e) || 0,
                            r: 0,
                            rX: 0,
                            rY: 0,
                            sX: 1,
                            sY: 1,
                            tX: 0,
                            tY: 0,
                            tZ: 0,
                            kX: 0,
                            kY: 0,
                            ls: 0,
                            lh: 1,
                            so: 0,
                            c: {
                                y: 0,
                                t: a,
                                m: s,
                                x: 0,
                            },
                        };
                    if (u) {
                        var p = u[f.q(e, "c")];
                        p && ((n = w(p.r)).sg = p.e || 0);
                    }
                    var g = f.g(e, "data-to");
                    g &&
                        c &&
                        ((g = f.Ud(g)),
                        (g = {
                            x: f.od(g[0]),
                            y: f.od(g[1]),
                        }));
                    var m = {
                        $Elmt: e,
                        $OriginalWidth: a,
                        $OriginalHeight: s,
                        Nf: g,
                        Lf: d.x,
                        Of: d.y,
                        Ib: c,
                    };
                    if (
                        (f.f(t, function (t) {
                            var i = f.v(
                                    {
                                        $Easing: f.Ld(t.e),
                                        $During: t.dr,
                                        Bd: t.p,
                                    },
                                    m
                                ),
                                a = f.v(o, {}, t);
                            f.Pd(a, ["b", "d", "e", "p", "dr"]);
                            var s = new h(t.b, t.d, i, e, d, a);
                            ((y = l.l(y, t.b + t.d)), n)
                                ? (r || (r = new h(t.b, 0)), r.M(s))
                                : w(t.b, (t.b, t.d)).Zc.push(s);
                            d = s.nf();
                        }),
                        n && r)
                    ) {
                        r.uf();
                        var v,
                            b = r,
                            x = r.yc(),
                            S = r.vb(),
                            C = l.l(S, n.sg);
                        n.ob < S &&
                            (n.ob > x
                                ? (b = new h(x, n.ob - x)).M(r, o)
                                : (b = i),
                            (v = new h(n.ob, C - x, {
                                hc: C - n.ob,
                                pf: o,
                            })).M(r, o)),
                            b && n.Zc.push(b),
                            v && n.Te.push(v);
                    }
                    return d;
                }

                function C(t, n, i) {
                    var r = t.b - n;
                    if (r) {
                        var a = new h(n, r);
                        a.M(g, o), a.$Shift(i), e.M(a);
                    }
                    return e.qd(t.d), r;
                }

                function $(e, t, n) {
                    var i = f.A(t);
                    if (i > 4)
                        for (var o = l.H(i / 4), r = 0; r < o; r++) {
                            var a = t.slice(4 * r, l.j(4 * r + 4, i)),
                                s = new h(a[0].ob, 0);
                            $(s, a, n), e.M(s);
                        }
                    else
                        f.f(t, function (t) {
                            f.f(n ? t.Te : t.Zc, function (t) {
                                n && t.qd(y - t.vb()), e.M(t);
                            });
                        });
                }
                var _,
                    T,
                    k,
                    E,
                    A,
                    O,
                    D,
                    M,
                    L,
                    N,
                    B = 0,
                    I = [],
                    P = [];

                function R(e) {
                    return 2 & e || (4 & e && f.ud().td);
                }

                function H(n) {
                    (M && !n) ||
                        ((M = o),
                        e.S(),
                        n && B && e.L(0),
                        e.De(1),
                        e.Ff(),
                        D ||
                            (8 & k && e.a(t, "keydown", W),
                            32 & k &&
                                (e.a(t, "mousedown", X),
                                e.a(t, "touchstart", X)),
                            (D = o)),
                        e.k(b.pc, e));
                }

                function j() {
                    L ||
                        (!M && !e.z()) ||
                        ((L = o),
                        e.S(),
                        e.Be() > e.qc && e.L(e.qc),
                        e.De(A || 1),
                        e.tc(0));
                }

                function q() {
                    !N && j();
                }

                function z(t) {
                    var n = t;
                    t < 0 && e.z() && (n = 1),
                        n != B && ((B = n), T && e.k(b.Zb, e, B));
                }

                function W(e) {
                    8 & k && 27 == f.Je(e) && j();
                }

                function F(e) {
                    N && f.Fe(e) !== i && ((N = r), 16 & k && f.$Delay(q, 160));
                }

                function X(e) {
                    32 & k && !f.Ae(a, f.$EvtSrc(e)) && j();
                }

                function V(e) {
                    N || ((N = o), 1 & _ && f.Ie(e, a) && H());
                }

                function Y(e) {
                    var t = f.$EvtSrc(e),
                        n = f.kb(t, i, i, "A"),
                        r = n && (f.qe(n) || n === a || f.Ae(a, n));
                    M && R(k) ? !r && j() : R(_) && !r && H(o);
                }

                function U(e) {
                    var t = e.wg(),
                        n = P[t];
                    n !== e && n && n.vg(), (P[t] = e);
                }

                function G(t, n) {
                    e.k(b.Zb, t, n);
                }
                (e.wg = function () {
                    return O || "";
                }),
                    (e.vg = j),
                    (e.Qc = function () {
                        z(1);
                    }),
                    (e.Rc = function () {
                        (M = r),
                            (L = r),
                            z(-1),
                            !e.z() &&
                                (e.T(t, "keydown", W),
                                e.T(t, "mousedown", X),
                                e.T(t, "touchstart", X),
                                (D = r));
                    }),
                    (e.zc = function () {
                        !N && E && e.Be() > e.fd && j();
                    }),
                    (e.F = function (t, n, i) {
                        (a = t),
                            (s = n),
                            (_ = i.xe),
                            (d = i.cg),
                            (c = s.$Transitions),
                            (u = s.$Controls),
                            (function t(n, i) {
                                f.f(n, function (n) {
                                    var o = f.q(n, "play");
                                    if (i && o) {
                                        var r = new x(n, s, {
                                            xe: o,
                                        });
                                        I.push(r),
                                            e.a(r, b.pc, U),
                                            e.a(r, b.Zb, G);
                                    } else {
                                        t(
                                            f
                                                .jb(n)
                                                .concat(
                                                    f.xc(f.Hc(n, "data-tchd"))
                                                ),
                                            i + 1
                                        );
                                        var a = f.xc(f.Hc(n, "data-tsep"));
                                        a.push(n),
                                            f.f(a, function (e) {
                                                var t = c[f.q(e, "t")];
                                                t && S(e, t);
                                            });
                                    }
                                });
                            })([a], 0),
                            $(g, v),
                            _ &&
                                (e.M(g),
                                (d = o),
                                (E = f.q(a, "idle")),
                                (k = f.q(a, "rollback")),
                                (A = f.q(a, "speed", 1)),
                                (O = f.hb(a, "group")),
                                (R(_) || R(k)) && e.a(a, "click", Y),
                                (1 & _ || E) &&
                                    !f.ud().td &&
                                    (e.a(a, "mouseenter", V),
                                    e.a(a, "mouseleave", F)),
                                (T = f.q(a, "pause")));
                        var r = (s.$Breaks || [])[f.q(a, "b")] || [],
                            l = {
                                b: y,
                                d: f.A(r) ? 0 : i.$Idle || E || 0,
                            };
                        (function (t) {
                            var n = g.yc(),
                                i = 0;
                            f.f(t, function (t, o) {
                                C(
                                    (t = f.v(
                                        {
                                            d: 3e3,
                                        },
                                        t
                                    )),
                                    n,
                                    i
                                ),
                                    (n = t.b),
                                    (i += t.d),
                                    (o && 2 != t.t) ||
                                        ((e.qc = n), (e.fd = n + t.d));
                            });
                        })((r = r.concat([l]))),
                            e.vb(),
                            d && e.qd(1e8),
                            (y = e.vb()),
                            $(e, v, o),
                            e.L(-1),
                            e.L(f.q(a, "initial") || 0);
                    }),
                    (e.$Destroy = function () {
                        f.$Destroy(n, I), e.S(), e.L(-1);
                    }),
                    f.F(e);
            }),
            w =
                (e.$JssorSlider$ =
                (e.module || {}).exports =
                    function () {
                        var n,
                            a,
                            c,
                            d,
                            g,
                            v,
                            x,
                            S,
                            C,
                            $,
                            _,
                            T,
                            k,
                            E,
                            A,
                            O,
                            D,
                            M,
                            L,
                            N,
                            B,
                            I,
                            P,
                            R,
                            H,
                            j,
                            q,
                            z,
                            W,
                            F,
                            X,
                            V,
                            Y,
                            U,
                            G,
                            Z,
                            K,
                            Q,
                            J,
                            ee,
                            te,
                            ne,
                            ie,
                            oe,
                            re,
                            ae,
                            se,
                            le,
                            ce,
                            ue,
                            de,
                            fe,
                            pe,
                            he,
                            ge,
                            me,
                            ve,
                            ye,
                            be,
                            xe,
                            we,
                            Se,
                            Ce,
                            $e,
                            _e,
                            Te,
                            ke,
                            Ee,
                            Ae,
                            Oe,
                            De,
                            Me,
                            Le = this,
                            Ne = f.W(Le, p),
                            Be = "data-jssor-slider",
                            Ie = "data-jssor-thumb",
                            Pe = 1,
                            Re = 1,
                            He = 1,
                            je = 1,
                            qe = {},
                            ze = [],
                            We = -1,
                            Fe = [],
                            Xe = 0,
                            Ve = 0,
                            Ye = Number.MAX_VALUE,
                            Ue = Number.MIN_VALUE,
                            Ge = 1,
                            Ze = 0,
                            Ke = f.ud(),
                            Qe = Ke.td,
                            Je = [];

                        function et() {
                            return !Ge && 12 & re;
                        }

                        function tt() {
                            return Ze || (!Ge && 3 & re);
                        }

                        function nt() {
                            return !ge && !et() && !$e.$IsPlaying();
                        }

                        function it() {
                            return U || c;
                        }

                        function ot(e, t, n) {
                            f.U(e, t), f.V(e, n);
                        }

                        function rt(e, t) {
                            var n = it();
                            ot(
                                e,
                                (z * t + Xe) * (1 & n),
                                ((W * t + Xe) * (2 & n)) / 2
                            );
                        }

                        function at(e, t) {
                            if (ge && !(1 & de)) {
                                var n,
                                    i = e;
                                if (
                                    (e < Ue && ((i = Ue), (n = -1)),
                                    e > Ye && ((i = Ye), (n = 1)),
                                    n)
                                ) {
                                    var o = e - i;
                                    t
                                        ? ((o = (2 * l.Xf(o)) / l.u),
                                          (o = l.B(o * n, 1.6)))
                                        : ((o = l.B(o * n, 0.625)),
                                          (o = l.Oe((o * l.u) / 2))),
                                        (e = i + o * n);
                                }
                            }
                            return e;
                        }

                        function st(e) {
                            return at(e, o);
                        }

                        function lt(e, t) {
                            if (!(1 & de)) {
                                var n = e - Ye + (t || 0),
                                    i = Ue - e + (t || 0);
                                n > 0 && n > i ? (e = Ye) : i > 0 && (e = Ue);
                            }
                            return e;
                        }

                        function ct(e) {
                            return !(1 & de) && e - Ue < 1e-4;
                        }

                        function ut(e) {
                            return !(1 & de) && Ye - e < 1e-4;
                        }

                        function dt(e) {
                            return (
                                !(1 & de) && (e - Ue < 1e-4 || Ye - e < 1e-4)
                            );
                        }

                        function ft(e, t, n) {
                            !Me &&
                                f.f(Fe, function (i) {
                                    i.Sc(e, t, n);
                                });
                        }

                        function pt(e) {
                            var t = e;
                            return (
                                (t = dt(e) ? lt(t) : (e = yt(e))),
                                (t = l.G(t)),
                                (t = l.l(t, 0))
                            );
                        }

                        function ht() {
                            U = 0;
                            var e = we.z(),
                                t = pt(e);
                            ft(t, e),
                                (dt(e) || e == l.G(e)) &&
                                    (2 & ee &&
                                        ((oe > 0 && t == R - 1) ||
                                            (oe < 0 && !t)) &&
                                        (ee = 0),
                                    (function (e) {
                                        Je[We], (I = We), (P = Je[(We = e)]);
                                    })(t),
                                    Le.k(w.$EVT_PARK, We, I));
                        }

                        function gt(e, t) {
                            !R ||
                                (t && $e.$IsPlaying()) ||
                                ($e.S(),
                                (realPosition = st(e)),
                                Se.L(realPosition),
                                ht());
                        }

                        function mt(e) {
                            R
                                ? ((e = yt((e = lt(e)))),
                                  (he = r),
                                  (_IsStandBy = r),
                                  (ge = r),
                                  gt(e))
                                : ft(0, 0);
                        }

                        function vt(e) {
                            var t = f.bc();
                            return f.rb(t, B), e && f.Fb(t, "hidden"), t;
                        }

                        function yt(e, t) {
                            return ((e % (t = t || R || 1)) + t) % t;
                        }

                        function bt(e, t, n) {
                            8 & ee && (ee = 0), $t(e, se, t, n);
                        }

                        function xt() {
                            f.f(Fe, function (e) {
                                e.id(e.gd.$ChanceToShow <= Ge);
                            });
                        }

                        function wt(e) {
                            Ge ||
                                (!f.Fe(e) && f.Ie(e, n)) ||
                                ((Ge = 1),
                                xt(),
                                ge || (12 & re && Bt(), Je[We] && Je[We].Bc()),
                                Le.k(w.$EVT_MOUSE_LEAVE));
                        }

                        function St() {
                            Ge && ((Ge = 0), xt(), ge || !(12 & re) || Nt()),
                                Le.k(w.$EVT_MOUSE_ENTER);
                        }

                        function Ct(e, t) {
                            $t(e, t, o);
                        }

                        function $t(e, t, n, i) {
                            if (
                                R &&
                                (!ge || a.$NaviQuitDrag) &&
                                !et() &&
                                !isNaN(e)
                            ) {
                                var u = we.z(),
                                    d = e;
                                n &&
                                    ((d = u + e),
                                    2 & de &&
                                        (ct(u) && e < 0 && (d = Ye),
                                        ut(u) && e > 0 && (d = Ue))),
                                    1 & de || (d = i ? yt(d) : lt(d, 0.5)),
                                    n && !dt(d) && (d = l.$Round(d));
                                var f = (d - u) % R;
                                (d = u + f), t == s && (t = se);
                                var p = l.P(f),
                                    h = 0;
                                if (p) {
                                    if ((p < 1 && (p = l.B(p, 0.5)), p > 1)) {
                                        var g = 2 & it() ? W : z,
                                            m = (1 & c ? L : N) / g;
                                        p = l.j(p, 1.5 * m);
                                    }
                                    h = t * p;
                                }
                                (Me = o), $e.S(), (Me = r), $e.se(u, d, h);
                            }
                        }

                        function _t(e, t, n) {
                            var i,
                                r,
                                a,
                                s,
                                c = {
                                    $Top: 2,
                                    $Right: 1,
                                    $Bottom: 2,
                                    $Left: 1,
                                },
                                u = {
                                    $Top: "top",
                                    $Right: "right",
                                    $Bottom: "bottom",
                                    $Left: "left",
                                },
                                d = {};
                            (this.$Elmt = e),
                                (this.$ScaleSize = function (p, h, g) {
                                    var v,
                                        y = p,
                                        b = h;
                                    if (
                                        (a ||
                                            ((a = f.Ch(e)),
                                            (i = e.parentNode),
                                            (s = {
                                                $Scale: f.q(e, m.qf, 1),
                                                $AutoCenter: f.q(e, m.yb),
                                            }),
                                            f.f(u, function (t, n) {
                                                d[n] = f.q(
                                                    e,
                                                    "data-scale-" + t,
                                                    1
                                                );
                                            }),
                                            (r = e),
                                            t &&
                                                ((r = f.ab(i, o)),
                                                f.rb(r, {
                                                    $Top: 0,
                                                    $Left: 0,
                                                }),
                                                f.O(r, e),
                                                f.O(i, r))),
                                        n)
                                    ) {
                                        if (
                                            ((v = l.l(p, h)),
                                            t && g >= 0 && g < 1)
                                        ) {
                                            var x = l.j(p, h);
                                            v = l.j(v / x, 1 / (1 - g)) * x;
                                        }
                                    } else
                                        y =
                                            b =
                                            v =
                                                l.B(C < $ ? h : p, s.$Scale);
                                    (v *= t && (1 != v || f.He()) ? 1.001 : 1),
                                        t && (je = v),
                                        f.we(r, v),
                                        f.K(i, a.Eb * y),
                                        f.J(i, a.Gb * b);
                                    var w = f.ue() && f.Cd() < 9 ? v : 1,
                                        S = ((y - w) * a.Eb) / 2,
                                        _ = ((b - w) * a.Gb) / 2;
                                    f.U(r, S),
                                        f.V(r, _),
                                        f.f(a, function (e, t) {
                                            if (c[t] && e) {
                                                var n =
                                                    (1 & c[t]) *
                                                        l.B(p, d[t]) *
                                                        e +
                                                    ((2 & c[t]) *
                                                        l.B(h, d[t]) *
                                                        e) /
                                                        2;
                                                f.If[t](i, n);
                                            }
                                        }),
                                        f.Uc(i, s.$AutoCenter);
                                });
                        }

                        function Tt() {
                            var e = this;
                            h.call(e, 0, 0, {
                                hc: R,
                            }),
                                f.f(Je, function (t) {
                                    e.zd(t), t.$Shift(ue / F);
                                });
                        }

                        function kt() {
                            var e = _e.$Elmt;
                            h.call(
                                this,
                                -1,
                                2,
                                {
                                    $Easing: u.$Linear,
                                    Pc: {
                                        Pb: rt,
                                    },
                                    hc: R,
                                    $Reverse: ne,
                                },
                                e,
                                {
                                    Pb: 1,
                                },
                                {
                                    Pb: -1,
                                }
                            ),
                                (this.Wc = e);
                        }

                        function Et() {
                            h.call(this, -1e8, 2e8),
                                (this.zc = function (e, t) {
                                    if (l.P(t - e) > 1e-5) {
                                        var n = t,
                                            i = t;
                                        l.G(t) != t &&
                                            t > e &&
                                            (1 & de || t > Ve) &&
                                            i++,
                                            ft(pt(i), n, o),
                                            Le.k(
                                                w.$EVT_POSITION_CHANGE,
                                                yt(n),
                                                yt(e),
                                                t,
                                                e
                                            );
                                    }
                                });
                        }

                        function At(e, t) {
                            var n,
                                s,
                                l,
                                c,
                                u,
                                d = this;
                            h.call(d, -1e8, 2e8, {}),
                                (d.Qc = function () {
                                    (he = o),
                                        Le.k(
                                            w.$EVT_SWIPE_START,
                                            yt(we.z()),
                                            Se.z()
                                        );
                                }),
                                (d.Rc = function () {
                                    (he = r),
                                        (c = r),
                                        Le.k(
                                            w.$EVT_SWIPE_END,
                                            yt(we.z()),
                                            Se.z()
                                        ),
                                        !ge && ht();
                                }),
                                (d.zc = function (e, t) {
                                    var i = t;
                                    if (c) i = u;
                                    else if (l) {
                                        var o = t / l;
                                        i = a.$SlideEasing(o) * (s - n) + n;
                                    }
                                    (i = st(i)), Se.L(i);
                                }),
                                (d.se = function (e, t, i, a) {
                                    (ge = r),
                                        (l = i || 1),
                                        (n = e),
                                        (s = t),
                                        (Me = o),
                                        Se.L(e),
                                        (Me = r),
                                        d.L(0),
                                        d.tc(l, a);
                                }),
                                (d.Ng = function () {
                                    (c = o) && d.$Play(i, i, o);
                                }),
                                (d.Wg = function (e) {
                                    u = e;
                                }),
                                (Se = new Et()).M(e),
                                ce && Se.M(t);
                        }

                        function Ot() {
                            var e = this,
                                t = vt();
                            f.N(t, 0),
                                (e.$Elmt = t),
                                (e.Ef = function (e) {
                                    f.O(t, e), f.mb(t);
                                }),
                                (e.Ob = function () {
                                    f.Fc(t), f.Rb(t);
                                });
                        }

                        function Dt(e, t) {
                            var n,
                                c,
                                u,
                                d,
                                m,
                                v,
                                y,
                                x,
                                S,
                                C,
                                $,
                                _,
                                T,
                                k,
                                A = this,
                                O = f.W(A, p),
                                D = 0,
                                M = [];

                            function L() {
                                n && n.$Destroy(),
                                    (Ze -= D),
                                    (D = 0),
                                    (n = new g.$Class(u, g, {
                                        $Idle: f.q(u, "idle", ae),
                                        cg: !ee,
                                    })).$On(b.Zb, N);
                            }

                            function N(e, n) {
                                (D += n), (Ze += n), t == We && !D && A.Bc();
                            }

                            function I(e, n, i) {
                                if (!S) {
                                    if (((S = o), y && i)) {
                                        var a = 2 * f.q(y, "data-expand", 0),
                                            s = i.width,
                                            c = i.height,
                                            u = s,
                                            d = c;
                                        if (s && c) {
                                            if (m) {
                                                if (
                                                    3 & m &&
                                                    (!(4 & m) || s > H || c > j)
                                                ) {
                                                    var p = r,
                                                        h = ((H / j) * c) / s;
                                                    1 & m
                                                        ? (p = h > 1)
                                                        : 2 & m && (p = h < 1),
                                                        (u = p
                                                            ? (s * j) / c
                                                            : H),
                                                        (d = p
                                                            ? j
                                                            : (c * H) / s);
                                                }
                                                f.K(y, u),
                                                    f.J(y, d),
                                                    f.V(y, (j - d) / 2),
                                                    f.U(y, (H - u) / 2);
                                            }
                                            f.we(
                                                y,
                                                l.l((u + a) / u, (d + a) / d)
                                            );
                                        }
                                        f.db(y, "absolute");
                                    }
                                    Le.k(w.$EVT_LOAD_END, t);
                                }
                                n.Qe(r), e && e(A);
                            }

                            function P(e, n, i, r) {
                                if (
                                    r == T &&
                                    We == t &&
                                    ee &&
                                    nt() &&
                                    !A.Oc()
                                ) {
                                    var a = yt(e);
                                    Te.Cf(a, t, n, A, i, j / H),
                                        Ce.$Shift(a - Ce.yc() - 1),
                                        Ce.L(a),
                                        n.Tg(),
                                        gt(a, o);
                                }
                            }

                            function q(o) {
                                if (o == T && We == t && nt() && !A.Oc()) {
                                    if (!$) {
                                        var r = i;
                                        Te &&
                                            (Te.Qb == t
                                                ? (r = Te.of())
                                                : Te.Ob()),
                                            ($ = new Mt(e, t, r, n)).zg(_);
                                    }
                                    !$.$IsPlaying() && $.sd();
                                }
                            }

                            function z(e, n, o) {
                                if (e == t)
                                    e != n
                                        ? Je[n] && Je[n].Jd()
                                        : !o && $ && $.Ag(),
                                        _ && _.$Enable(),
                                        (T = f.Tb()),
                                        A.Vb(f.Z(i, q, T));
                                else {
                                    var r = l.j(t, e),
                                        s = l.l(t, e),
                                        c = l.j(s - r, r + R - s),
                                        u = X + a.$LazyLoading - 1;
                                    (!C || c <= u) && A.Vb();
                                }
                            }
                            h.call(A, -X, X + 1, {
                                hc: 1 & de ? R : s,
                                $Reverse: ne,
                            }),
                                (A.Qe = function (t) {
                                    k != t &&
                                        ((k = t),
                                        t && f.O(e, v),
                                        !t && f.ib(v));
                                }),
                                (A.Vb = function (e, n) {
                                    (n = n || A),
                                        f.A(M) && !S
                                            ? (n.Qe(o),
                                              x ||
                                                  ((x = o),
                                                  Le.k(w.$EVT_LOAD_START, t),
                                                  f.f(M, function (e) {
                                                      var t =
                                                              f.g(
                                                                  e,
                                                                  "data-load"
                                                              ) || "src",
                                                          n = f.Qd(t, "data-")
                                                              ? t
                                                              : t.substring(5);
                                                      if (!f.g(e, n)) {
                                                          var i =
                                                              f.hb(e, n) ||
                                                              f.hb(e, "src2");
                                                          i &&
                                                              (f.g(e, n, i),
                                                              f.nb(
                                                                  e,
                                                                  f.g(
                                                                      e,
                                                                      "data-display"
                                                                  )
                                                              ));
                                                      }
                                                  })),
                                              f.Eh(M, y, f.Z(i, I, e, n)))
                                            : I(e, n);
                                }),
                                (A.Gg = function () {
                                    if (!tt() && nt())
                                        if (1 == R) A.Jd(), z(t, t);
                                        else {
                                            var e;
                                            if ((Te && (e = Te.Bf(R)), e)) {
                                                T = f.Tb();
                                                var n = t + oe,
                                                    o = Je[yt(n)];
                                                return o.Vb(
                                                    f.Z(i, P, n, o, e, T),
                                                    A
                                                );
                                            }
                                            (de ||
                                                !dt(we.z()) ||
                                                !dt(we.z() + oe)) &&
                                                Ct(oe);
                                        }
                                }),
                                (A.Bc = function () {
                                    z(t, t, o);
                                }),
                                (A.Jd = function () {
                                    _ && _.$Quit(),
                                        _ && _.$Disable(),
                                        A.Wd(),
                                        $ && $.Hg(),
                                        ($ = i),
                                        L();
                                }),
                                (A.Tg = function () {
                                    f.Fc(e);
                                }),
                                (A.Wd = function () {
                                    f.mb(e);
                                }),
                                (A.kd = function (e, t) {
                                    rt(c, X - t);
                                }),
                                (A.Qb = t),
                                (function e(t, n) {
                                    if (
                                        (n ||
                                            ((d = f.$FindChild(t, "bg")),
                                            (u = d && f.Lb(d))),
                                        !f.g(t, Be) && (n || !d))
                                    ) {
                                        var r = f.q(t, "data-arr");
                                        if (r != s) {
                                            function a(e, n) {
                                                f.g(e, n, f.g(t, n));
                                            }
                                            var l = (g && g.$Transitions) || {};
                                            f.Vf(
                                                t,
                                                f.cb(t),
                                                l[r],
                                                function (e, t) {
                                                    f.g(e, "data-t", f.A(l)),
                                                        l.push(t),
                                                        a(e, "data-to"),
                                                        a(e, "data-bf"),
                                                        a(e, "data-c");
                                                }
                                            ),
                                                f.g(t, "data-arr", "");
                                        }
                                        var c = f.jb(t);
                                        if (!d) {
                                            (u = t),
                                                (d = vt(o)),
                                                f.g(d, "data-u", "bg");
                                            var p = "background";
                                            f.R(
                                                d,
                                                p + "Color",
                                                f.R(u, p + "Color")
                                            ),
                                                f.R(
                                                    d,
                                                    p + "Image",
                                                    f.R(u, p + "Image")
                                                ),
                                                f.R(u, p, i),
                                                f.A(c)
                                                    ? f.pb(d, c[0])
                                                    : f.O(u, d);
                                        }
                                        if (
                                            ((c = c.concat(
                                                f.xc(f.Hc(t, "data-tchd"))
                                            )),
                                            f.f(c, function (i) {
                                                n < 3 &&
                                                    !y &&
                                                    "image" == f.hb(i, "u") &&
                                                    (((y = i).border = 0),
                                                    f.rb(y, B),
                                                    f.rb(t, B),
                                                    f.R(
                                                        y,
                                                        "maxWidth",
                                                        "10000px"
                                                    ),
                                                    f.O(d, y)),
                                                    e(i, n + 1);
                                            }),
                                            n)
                                        ) {
                                            f.g(t, "data-events", f.lc(t)),
                                                f.g(t, "data-display", f.nb(t)),
                                                !f.Ib(t) &&
                                                    f.ug(t, f.g(t, "data-to")),
                                                f.tg(t, f.g(t, "data-bf")),
                                                "IMG" == t.tagName &&
                                                    (M.push(t),
                                                    f.g(t, "src") ||
                                                        ((C = o), f.Fc(t)));
                                            var h = f.g(t, "data-load");
                                            h &&
                                                M.push(t) &&
                                                (C = C || !f.Qd(h, "data-"));
                                            var m = (h && f.g(t, h)) || f.Jf(t);
                                            if (m) {
                                                var v = new Image();
                                                f.g(v, "data-src", m),
                                                    M.push(v);
                                            }
                                            f.N(t, (f.N(t) || 0) + 1);
                                        }
                                        f.yg(t, f.q(t, "data-p")),
                                            f.xg(t, f.hb(t, "po")),
                                            f.Jc(t, f.g(t, "data-ts"));
                                    }
                                })(e, 0),
                                f.rb(e, B),
                                f.Fb(e, "hidden"),
                                f.Jc(e, "flat"),
                                (m = f.q(u, "data-fillmode", a.$FillMode));
                            var W = f.$FindChild(u, "thumb", o);
                            W && ((A.nh = f.ab(W)), f.Fc(W)),
                                f.mb(e),
                                (v = f.ab(E)),
                                f.N(v, 1e3),
                                A.a(e, "click", function (e) {
                                    !pe && Le.k(w.$EVT_CLICK, t, e);
                                }),
                                L(),
                                (A.ih = y),
                                (A.Re = e),
                                (A.Wc = c = e),
                                A.a(Le, 203, z),
                                A.a(Le, 28, function () {
                                    We == t && $ && $.S();
                                }),
                                A.a(Le, 24, function () {
                                    We == t &&
                                        $ &&
                                        ($.S(),
                                        _ && _.$Quit(),
                                        _ && _.$Disable(),
                                        $.he());
                                }),
                                (A.$Destroy = function () {
                                    f.$Destroy(O, n, $);
                                });
                        }

                        function Mt(e, t, n, i) {
                            var a,
                                s,
                                l,
                                c,
                                u,
                                d,
                                g,
                                m = this,
                                v = f.W(m, p),
                                y = Je[t];

                            function x() {
                                m.sd();
                            }

                            function S(e) {
                                (g = e), m.S(), m.sd();
                            }
                            h.call(m, 0, 0),
                                (m.sd = function () {
                                    if (!(ge || he || g || We != t || m.Oc())) {
                                        var e,
                                            n = m.z();
                                        if (
                                            (n ||
                                                (a &&
                                                    !u &&
                                                    ((u = o),
                                                    m.he(o),
                                                    Le.k(
                                                        w.$EVT_SLIDESHOW_START,
                                                        t,
                                                        0,
                                                        0,
                                                        0,
                                                        a,
                                                        c
                                                    ))),
                                            Le.k(
                                                w.$EVT_STATE_CHANGE,
                                                t,
                                                n,
                                                0,
                                                s,
                                                l,
                                                c
                                            ),
                                            !et())
                                        )
                                            n == c
                                                ? ee && f.$Delay(y.Gg, 20)
                                                : ((e =
                                                      n == l
                                                          ? c
                                                          : n
                                                          ? m.Ee()
                                                          : l),
                                                  (n != l || !tt()) &&
                                                      m.tc(e, x));
                                    }
                                }),
                                (m.Ag = function () {
                                    l == c && l == m.z() && m.L(s);
                                }),
                                (m.Hg = function () {
                                    Te && Te.Qb == t && Te.Ob();
                                    var e = m.z();
                                    e < c &&
                                        Le.k(
                                            w.$EVT_STATE_CHANGE,
                                            t,
                                            -e - 1,
                                            0,
                                            s,
                                            l,
                                            c
                                        );
                                }),
                                (m.he = function (e) {
                                    n &&
                                        f.Fb(
                                            Y,
                                            e && n.ye.$Outside ? "" : "hidden"
                                        );
                                }),
                                (m.kd = function (e, n) {
                                    u &&
                                        n >= a &&
                                        ((u = r),
                                        y.Wd(),
                                        Te.Ob(),
                                        Le.k(
                                            w.$EVT_SLIDESHOW_END,
                                            t,
                                            a,
                                            0,
                                            0,
                                            a,
                                            c
                                        )),
                                        Le.k(
                                            w.$EVT_PROGRESS_CHANGE,
                                            t,
                                            n,
                                            0,
                                            s,
                                            l,
                                            c
                                        );
                                }),
                                (m.zg = function (e) {
                                    e &&
                                        !d &&
                                        ((d = e), e.$On($JssorPlayer$.vf, S));
                                }),
                                m.a(i, b.pc, function () {}),
                                n && m.zd(n),
                                (a = m.vb()),
                                m.zd(i),
                                (s = a + i.qc),
                                (c = m.vb()),
                                (l = ee ? a + i.fd : c),
                                (m.$Destroy = function () {
                                    v.$Destroy(), m.S();
                                });
                        }

                        function Lt() {
                            (Ae = he),
                                (Oe = $e.Ee()),
                                (Ee = we.z()),
                                (ke = at(Ee));
                        }

                        function Nt() {
                            Lt(), (ge || et()) && ($e.S(), Le.k(w.kg));
                        }

                        function Bt(e) {
                            if (nt()) {
                                var t = we.z(),
                                    n = ke,
                                    i = 0;
                                e &&
                                    l.P(ye) >= a.$MinDragOffsetToSlide &&
                                    ((n = t), (i = xe)),
                                    (n = lt((n = l.H(n)) + i, 0.5));
                                var o = l.P(n - t);
                                o < 1 &&
                                    a.$SlideEasing != u.$Linear &&
                                    (o = l.B(o, 0.5)),
                                    (pe && e) || !Ae
                                        ? t == n
                                            ? P.Bc()
                                            : $e.se(t, n, o * se)
                                        : $e.tc(Oe);
                            }
                        }

                        function It(e) {
                            !f.kb(f.$EvtSrc(e), s, m.ze) && f.$CancelEvent(e);
                        }

                        function Pt(e) {
                            (me = r),
                                (ge = o),
                                Nt(),
                                Ae || (U = 0),
                                Le.k(w.$EVT_DRAG_START, yt(Ee), Ee, e);
                        }

                        function Rt(e) {
                            Ht(e, 1);
                        }

                        function Ht(e, i) {
                            if (((ye = 0), (be = 0), (xe = 0), (He = je), i)) {
                                var o = e.touches[0];
                                ve = {
                                    x: o.clientX,
                                    y: o.clientY,
                                };
                            } else ve = f.Tc(e);
                            var r = f.$EvtSrc(e),
                                a = f.kb(r, "1", Ie);
                            (a && a !== n) ||
                                G ||
                                (i && 1 != f.A(e.touches)) ||
                                ((Z =
                                    f.kb(r, s, m.ze) ||
                                    !fe ||
                                    !(function () {
                                        var e = w.Ke || 0,
                                            t = fe;
                                        return (w.Ke |= t), (G = t & ~e);
                                    })()),
                                Le.a(t, i ? "touchmove" : "mousemove", jt),
                                !(me = !Z && f.kb(r, s, m.Dd)) && !Z && Pt(e));
                        }

                        function jt(e) {
                            var t, n;
                            if (
                                ("mousemove" != (e = f.Zf(e)).type
                                    ? 1 == f.A(e.touches)
                                        ? (t = {
                                              x: (n = e.touches[0]).clientX,
                                              y: n.clientY,
                                          })
                                        : qt()
                                    : (t = f.Tc(e)),
                                t)
                            ) {
                                var i = t.x - ve.x,
                                    r = t.y - ve.y,
                                    s = l.P(i),
                                    u = l.P(r);
                                if (U || s > 1.5 || u > 1.5)
                                    if (me) Pt(e);
                                    else {
                                        l.G(ke) != ke && (U = U || c & G),
                                            (!i && !r) ||
                                                U ||
                                                ((U =
                                                    3 == G
                                                        ? u > s
                                                            ? 2
                                                            : 1
                                                        : G),
                                                Qe &&
                                                    1 == U &&
                                                    u > 2.4 * s &&
                                                    (Z = o));
                                        var d = i,
                                            p = z;
                                        2 == U && ((d = r), (p = W)),
                                            (ye - be) * ie < -1.5 && (xe = 0),
                                            (ye - be) * ie > 1.5 && (xe = -1),
                                            (be = ye),
                                            (De =
                                                ke -
                                                (((ye = d) * ie) / p / He) *
                                                    a.$DragRatio),
                                            ye &&
                                                U &&
                                                !Z &&
                                                (f.$CancelEvent(e),
                                                $e.Ng(o),
                                                $e.Wg(De));
                                    }
                            }
                        }

                        function qt() {
                            if (
                                (G && ((w.Ke &= ~fe), (G = 0)),
                                Le.T(t, "mousemove", jt),
                                Le.T(t, "touchmove", jt),
                                (pe = ye),
                                ge)
                            ) {
                                pe && 8 & ee && (ee = 0), $e.S(), (ge = r);
                                var e = we.z();
                                Le.k(w.$EVT_DRAG_END, yt(e), e, yt(Ee), Ee),
                                    12 & re && Lt(),
                                    Bt(o);
                            }
                        }

                        function zt(e) {
                            var t = f.$EvtSrc(e),
                                i = f.kb(t, "1", Be);
                            if (n === i)
                                if (pe)
                                    f.$StopEvent(e),
                                        (i = f.kb(
                                            t,
                                            s,
                                            "data-jssor-button",
                                            "A"
                                        )) && f.$CancelEvent(e);
                                else if (
                                    (4 & ee && (ee = 0),
                                    (i = f.kb(t, s, "data-jssor-click")))
                                ) {
                                    f.$CancelEvent(e),
                                        (hitValues = (
                                            f.g(i, "data-jssor-click") || ""
                                        ).split(":"));
                                    var r = f.Fh(hitValues[1]);
                                    "to" == hitValues[0] && $t(r - 1),
                                        "next" == hitValues[0] && $t(r, s, o);
                                }
                        }

                        function Wt() {
                            Ke.re &&
                                f.R(
                                    k,
                                    Ke.re,
                                    [i, "pan-y", "pan-x", "auto"][fe] || ""
                                ),
                                Le.a(n, "click", zt, o),
                                Le.a(n, "mouseleave", wt),
                                Le.a(n, "mouseenter", St),
                                Le.a(n, "mousedown", Ht),
                                Le.a(n, "touchstart", Rt),
                                Le.a(n, "dragstart", It),
                                Le.a(n, "selectstart", It),
                                Le.a(e, "mouseup", qt),
                                Le.a(t, "mouseup", qt),
                                Le.a(t, "touchend", qt),
                                Le.a(t, "touchcancel", qt),
                                Le.a(e, "blur", qt),
                                a.$ArrowKeyNavigation &&
                                    Le.a(t, "keydown", function (e) {
                                        if (!f.qe(f.$EvtSrc(e))) {
                                            var t = f.Je(e);
                                            (37 != t && 39 != t) ||
                                                (8 & ee && (ee = 0),
                                                bt(
                                                    a.$ArrowKeyNavigation *
                                                        (t - 38) *
                                                        ie,
                                                    o
                                                ));
                                        }
                                    });
                        }

                        function Ft(e) {
                            Ne.Ve(), (ze = []), (Je = []);
                            var t = f.jb(k),
                                n = f.Fd(["DIV", "A", "LI"]);
                            if (
                                (f.f(t, function (e) {
                                    var t = e;
                                    n[e.tagName.toUpperCase()] &&
                                        !f.hb(e, "u") &&
                                        "none" != f.nb(e) &&
                                        (f.Jc(e, "flat"),
                                        f.rb(e, B),
                                        ze.push(e)),
                                        f.N(t, (f.N(t) || 0) + 1);
                                }),
                                (R = f.A(ze)))
                            ) {
                                var i = 1 & c ? L : N;
                                f.rb(E, B),
                                    (ue = a.$Align) == s &&
                                        (ue = (i - F + q) / 2),
                                    (V = i / F),
                                    (X = l.j(R, a.$Cols || R, l.H(V))),
                                    (de = X < R ? a.$Loop : 0),
                                    R * F - q <= i &&
                                        ((V = R - q / F),
                                        (ue = (i - F + q) / 2),
                                        (Xe = (i - F * R + q) / 2)),
                                    d &&
                                        ((le = d.$Class),
                                        (ce =
                                            !ue &&
                                            1 == X &&
                                            R > 1 &&
                                            le &&
                                            (!f.ue() || f.Cd() >= 9))),
                                    1 & de ||
                                        ((Ve = ue / F) > R - 1 &&
                                            (ue = (Ve = R - 1) * F),
                                        (Ye = (Ue = Ve) + R - V - q / F)),
                                    (fe =
                                        (X > 1 || ue ? c : -1) &
                                        a.$DragOrientation),
                                    ce && (Te = new le(_e, H, j, d, Qe, ot)),
                                    f.f(ze, function (e, t) {
                                        Je.push(new Dt(e, t));
                                    }),
                                    (Ce = new kt()),
                                    (we = new Tt()),
                                    ($e = new At(we, Ce)),
                                    Wt();
                            }
                            f.f(Fe, function (t) {
                                t.nd(R, Je), e && t.$On(y.uc, bt);
                            });
                        }

                        function Xt(e, t, n) {
                            var i, o;
                            f.Md(e) && (e = f.je("", e)),
                                R &&
                                    (t == s && (t = R),
                                    (o = "beforebegin"),
                                    (i = ze[t]) ||
                                        ((o = "afterend"), (i = ze[R - 1]))),
                                f.$Destroy(Je),
                                e && f.oh(i || k, o || "afterbegin", e),
                                f.f(n, function (e) {
                                    f.ib(e);
                                }),
                                Ft();
                        }
                        (Le.$SlidesCount = function () {
                            return R;
                        }),
                            (Le.$CurrentIndex = function () {
                                return We;
                            }),
                            (Le.$CurrentPosition = function () {
                                return we.z();
                            }),
                            (Le.$Idle = function (e) {
                                if (e == s) return ae;
                                ae = e;
                            }),
                            (Le.$AutoPlay = function (e) {
                                if (e == s) return ee;
                                e != ee && (ee = e) && Je[We] && Je[We].Bc();
                            }),
                            (Le.$IsDragging = function () {
                                return ge;
                            }),
                            (Le.$IsSliding = function () {
                                return he;
                            }),
                            (Le.$IsMouseOver = function () {
                                return !Ge;
                            }),
                            (Le.$LastDragSucceeded = function () {
                                return pe;
                            }),
                            (Le.$OriginalWidth = function () {
                                return C;
                            }),
                            (Le.$OriginalHeight = function () {
                                return $;
                            }),
                            (Le.$ScaleHeight = function (e) {
                                if (e == s) return T || $;
                                Le.$ScaleSize((e / $) * C, e);
                            }),
                            (Le.$ScaleWidth = function (e) {
                                if (e == s) return _ || C;
                                Le.$ScaleSize(e, (e / C) * $);
                            }),
                            (Le.$ScaleSize = function (e, t, i) {
                                f.K(n, e),
                                    f.J(n, t),
                                    (Pe = e / C),
                                    (Re = t / $),
                                    f.f(qe, function (e) {
                                        e.$ScaleSize(Pe, Re, i);
                                    }),
                                    _ || (f.pb(Y, k), f.V(Y, 0), f.U(Y, 0)),
                                    (_ = e),
                                    (T = t);
                            }),
                            (Le.lf = ct),
                            (Le.ef = ut),
                            (Le.$PlayTo = $t),
                            (Le.$GoTo = mt),
                            (Le.$Next = function () {
                                Ct(1);
                            }),
                            (Le.$Prev = function () {
                                Ct(-1);
                            }),
                            (Le.$Pause = function () {
                                ee = 0;
                            }),
                            (Le.$Play = function () {
                                Le.$AutoPlay(ee || 1);
                            }),
                            (Le.$SetSlideshowTransitions = function (e) {
                                a.$SlideshowOptions.$Transitions = e;
                            }),
                            (Le.Id = function (e) {
                                if (((e = yt(e)), 1 & de)) {
                                    var t = ue / F,
                                        n = yt(we.z()),
                                        i = yt(e - n + t),
                                        o = yt(l.P(e - n));
                                    i >= X
                                        ? o > R / 2 &&
                                          (e > n ? (e -= R) : (e += R))
                                        : e > n && i < t
                                        ? (e -= R)
                                        : e < n && i > t && (e += R);
                                }
                                return e;
                            }),
                            (Le.$AppendSlides = function (e, t) {
                                t == s && (t = We + 1);
                                var n = ze[We];
                                Xt(e, t);
                                var i = 0;
                                f.f(ze, function (e, t) {
                                    e == n && (i = t);
                                }),
                                    mt(i);
                            }),
                            (Le.$ReloadSlides = function (e) {
                                Xt(e, i, ze), mt(0);
                            }),
                            (Le.$RemoveSlides = function (e) {
                                var t = We,
                                    n = [];
                                f.f(e, function (e) {
                                    e < R &&
                                        e >= 0 &&
                                        (n.push(ze[e]), e < We && t--);
                                }),
                                    Xt(i, i, n),
                                    mt((t = l.j(t, R - 1)));
                            }),
                            (Le.F = function (e, i) {
                                (Le.$Elmt = n = f.$GetElement(e)),
                                    (C = f.K(n)),
                                    ($ = f.J(n)),
                                    ((a = f.v(
                                        {
                                            $FillMode: 0,
                                            $LazyLoading: 1,
                                            $ArrowKeyNavigation: 1,
                                            $StartIndex: 0,
                                            $AutoPlay: 0,
                                            $Loop: 1,
                                            $HWA: o,
                                            $NaviQuitDrag: o,
                                            $AutoPlaySteps: 1,
                                            $Idle: 3e3,
                                            $PauseOnHover: 1,
                                            $SlideDuration: 500,
                                            $SlideEasing: u.$OutQuad,
                                            $MinDragOffsetToSlide: 20,
                                            $DragRatio: 1,
                                            $SlideSpacing: 0,
                                            $UISearchMode: 1,
                                            $PlayOrientation: 1,
                                            $DragOrientation: 1,
                                        },
                                        i
                                    )).$HWA = a.$HWA && f.gg()),
                                    a.$DisplayPieces != s &&
                                        (a.$Cols = a.$DisplayPieces),
                                    a.$ParkingPosition != s &&
                                        (a.$Align = a.$ParkingPosition),
                                    (ee = 63 & a.$AutoPlay),
                                    a.$UISearchMode,
                                    (oe = a.$AutoPlaySteps),
                                    (re = a.$PauseOnHover),
                                    (re &= Qe ? 10 : 5),
                                    (ae = a.$Idle),
                                    (se = a.$SlideDuration),
                                    (c = 3 & a.$PlayOrientation),
                                    (te = "rtl" == f.mg(f.g(n, "dir"))),
                                    (ne =
                                        te &&
                                        (1 == c || 1 & a.$DragOrientation)),
                                    (ie = ne ? -1 : 1),
                                    (d = a.$SlideshowOptions),
                                    (g = f.v(
                                        {
                                            $Class: b,
                                        },
                                        a.$CaptionSliderOptions
                                    )),
                                    (v = a.$BulletNavigatorOptions),
                                    (x = a.$ArrowNavigatorOptions),
                                    (S = a.$ThumbnailNavigatorOptions);
                                var r = f.jb(n);
                                f.f(r, function (e, t) {
                                    var n = f.hb(e, "u");
                                    "loading" == n
                                        ? (E = e)
                                        : ("slides" == n &&
                                              ((k = e),
                                              f.R(k, "margin", 0),
                                              f.R(k, "padding", 0),
                                              f.Jc(k, "flat")),
                                          "navigator" == n && (A = e),
                                          "arrowleft" == n && (O = e),
                                          "arrowright" == n && (D = e),
                                          "thumbnavigator" == n && (M = e),
                                          "STYLE" != e.tagName &&
                                              "SCRIPT" != e.tagName &&
                                              (qe[n || t] = new _t(
                                                  e,
                                                  "slides" == n,
                                                  f.Fd([
                                                      "slides",
                                                      "thumbnavigator",
                                                  ])[n]
                                              )));
                                }),
                                    E && f.ib(E),
                                    (E = E || f.bc(t)),
                                    (L = f.K(k)),
                                    (N = f.J(k)),
                                    (H = a.$SlideWidth || L),
                                    (j = a.$SlideHeight || N),
                                    (B = {
                                        Eb: H,
                                        Gb: j,
                                        $Top: 0,
                                        $Left: 0,
                                        Me: "block",
                                        Pb: "absolute",
                                    }),
                                    (q = a.$SlideSpacing),
                                    (z = H + q),
                                    (W = j + q),
                                    (F = 1 & c ? z : W),
                                    (_e = new Ot()),
                                    f.g(n, Be, "1"),
                                    f.N(k, f.N(k) || 0),
                                    f.db(k, "absolute"),
                                    (Y = f.ab(k, o)),
                                    f.R(Y, "pointerEvents", "none"),
                                    f.pb(Y, k),
                                    f.O(Y, _e.$Elmt),
                                    f.Fb(k, "hidden"),
                                    A &&
                                        v &&
                                        ((v.Yb = te),
                                        (K = new v.$Class(A, v, C, $)),
                                        Fe.push(K)),
                                    x &&
                                        O &&
                                        D &&
                                        ((x.Yb = te),
                                        (x.$Loop = a.$Loop),
                                        (Q = new x.$Class(O, D, x, Le)),
                                        Fe.push(Q)),
                                    M &&
                                        S &&
                                        ((S.$StartIndex = a.$StartIndex),
                                        (S.$ArrowKeyNavigation =
                                            S.$ArrowKeyNavigation || 0),
                                        (S.Yb = te),
                                        (J = new S.$Class(M, S, E)),
                                        !S.$NoDrag && f.g(M, Ie, "1"),
                                        Fe.push(J)),
                                    Ft(o),
                                    Le.$ScaleSize(C, $),
                                    xt(),
                                    mt(a.$StartIndex),
                                    f.R(n, "visibility", "visible");
                            }),
                            (Le.$Destroy = function () {
                                (ee = 0), f.$Destroy(Je, Fe, Ne), f.Rb(n);
                            }),
                            f.F(Le);
                    });
        (w.$EVT_CLICK = 21),
            (w.$EVT_DRAG_START = 22),
            (w.$EVT_DRAG_END = 23),
            (w.$EVT_SWIPE_START = 24),
            (w.$EVT_SWIPE_END = 25),
            (w.$EVT_LOAD_START = 26),
            (w.$EVT_LOAD_END = 27),
            (w.kg = 28),
            (w.$EVT_MOUSE_ENTER = 31),
            (w.$EVT_MOUSE_LEAVE = 32),
            (w.$EVT_POSITION_CHANGE = 202),
            (w.$EVT_PARK = 203),
            (w.$EVT_SLIDESHOW_START = 206),
            (w.$EVT_SLIDESHOW_END = 207),
            (w.$EVT_PROGRESS_CHANGE = 208),
            (w.$EVT_STATE_CHANGE = 209);
    })(window, document, Math, null, !0, !1),
    (function (e) {
        var t = {},
            n = {
                mode: "horizontal",
                slideSelector: "",
                infiniteLoop: !0,
                hideControlOnEnd: !1,
                speed: 500,
                easing: null,
                slideMargin: 0,
                startSlide: 0,
                randomStart: !1,
                captions: !1,
                ticker: !1,
                tickerHover: !1,
                adaptiveHeight: !1,
                adaptiveHeightSpeed: 500,
                video: !1,
                useCSS: !0,
                preloadImages: "visible",
                responsive: !0,
                slideZIndex: 50,
                touchEnabled: !0,
                swipeThreshold: 50,
                oneToOneTouch: !0,
                preventDefaultSwipeX: !0,
                preventDefaultSwipeY: !1,
                pager: !0,
                pagerType: "full",
                pagerShortSeparator: " / ",
                pagerSelector: null,
                buildPager: null,
                pagerCustom: null,
                controls: !0,
                nextText: "Next",
                prevText: "Prev",
                nextSelector: null,
                prevSelector: null,
                autoControls: !1,
                startText: "Start",
                stopText: "Stop",
                autoControlsCombine: !1,
                autoControlsSelector: null,
                auto: !1,
                pause: 4e3,
                autoStart: !0,
                autoDirection: "next",
                autoHover: !1,
                autoDelay: 0,
                minSlides: 1,
                maxSlides: 1,
                moveSlides: 0,
                slideWidth: 0,
                onSliderLoad: function () {},
                onSlideBefore: function () {},
                onSlideAfter: function () {},
                onSlideNext: function () {},
                onSlidePrev: function () {},
                onSliderResize: function () {},
            };
        e.fn.bxSlider = function (o) {
            if (0 == this.length) return this;
            if (this.length > 1)
                return (
                    this.each(function () {
                        e(this).bxSlider(o);
                    }),
                    this
                );
            var r = {},
                a = this;
            t.el = this;
            var s = e(window).width(),
                l = e(window).height(),
                c = function () {
                    (r.settings = e.extend({}, n, o)),
                        (r.settings.slideWidth = parseInt(
                            r.settings.slideWidth
                        )),
                        (r.children = a.children(r.settings.slideSelector)),
                        r.children.length < r.settings.minSlides &&
                            (r.settings.minSlides = r.children.length),
                        r.children.length < r.settings.maxSlides &&
                            (r.settings.maxSlides = r.children.length),
                        r.settings.randomStart &&
                            (r.settings.startSlide = Math.floor(
                                Math.random() * r.children.length
                            )),
                        (r.active = {
                            index: r.settings.startSlide,
                        }),
                        (r.carousel =
                            r.settings.minSlides > 1 ||
                            r.settings.maxSlides > 1),
                        r.carousel && (r.settings.preloadImages = "all"),
                        (r.minThreshold =
                            r.settings.minSlides * r.settings.slideWidth +
                            (r.settings.minSlides - 1) *
                                r.settings.slideMargin),
                        (r.maxThreshold =
                            r.settings.maxSlides * r.settings.slideWidth +
                            (r.settings.maxSlides - 1) *
                                r.settings.slideMargin),
                        (r.working = !1),
                        (r.controls = {}),
                        (r.interval = null),
                        (r.animProp =
                            "vertical" == r.settings.mode ? "top" : "left"),
                        (r.usingCSS =
                            r.settings.useCSS &&
                            "fade" != r.settings.mode &&
                            (function () {
                                var e = document.createElement("div"),
                                    t = [
                                        "WebkitPerspective",
                                        "MozPerspective",
                                        "OPerspective",
                                        "msPerspective",
                                    ];
                                for (var n in t)
                                    if (void 0 !== e.style[t[n]])
                                        return (
                                            (r.cssPrefix = t[n]
                                                .replace("Perspective", "")
                                                .toLowerCase()),
                                            (r.animProp =
                                                "-" +
                                                r.cssPrefix +
                                                "-transform"),
                                            !0
                                        );
                                return !1;
                            })()),
                        "vertical" == r.settings.mode &&
                            (r.settings.maxSlides = r.settings.minSlides),
                        a.data("origStyle", a.attr("style")),
                        a.children(r.settings.slideSelector).each(function () {
                            e(this).data("origStyle", e(this).attr("style"));
                        }),
                        u();
                },
                u = function () {
                    a.wrap(
                        '<div class="bx-wrapper"><div class="bx-viewport"></div></div>'
                    ),
                        (r.viewport = a.parent()),
                        (r.loader = e('<div class="bx-loading" />')),
                        r.viewport.prepend(r.loader),
                        a.css({
                            width:
                                "horizontal" == r.settings.mode
                                    ? 100 * r.children.length + 215 + "%"
                                    : "auto",
                            position: "relative",
                        }),
                        r.usingCSS && r.settings.easing
                            ? a.css(
                                  "-" +
                                      r.cssPrefix +
                                      "-transition-timing-function",
                                  r.settings.easing
                              )
                            : r.settings.easing ||
                              (r.settings.easing = "swing"),
                        m(),
                        r.viewport.css({
                            width: "100%",
                            overflow: "hidden",
                            position: "relative",
                        }),
                        r.viewport.parent().css({
                            maxWidth: h(),
                        }),
                        r.settings.pager ||
                            r.viewport.parent().css({
                                margin: "0 auto 0px",
                            }),
                        r.children.css({
                            float:
                                "horizontal" == r.settings.mode
                                    ? "left"
                                    : "none",
                            listStyle: "none",
                            position: "relative",
                        }),
                        r.children.css("width", g()),
                        "horizontal" == r.settings.mode &&
                            r.settings.slideMargin > 0 &&
                            r.children.css(
                                "marginRight",
                                r.settings.slideMargin
                            ),
                        "vertical" == r.settings.mode &&
                            r.settings.slideMargin > 0 &&
                            r.children.css(
                                "marginBottom",
                                r.settings.slideMargin
                            ),
                        "fade" == r.settings.mode &&
                            (r.children.css({
                                position: "absolute",
                                zIndex: 0,
                                display: "none",
                            }),
                            r.children.eq(r.settings.startSlide).css({
                                zIndex: r.settings.slideZIndex,
                                display: "block",
                            })),
                        (r.controls.el = e('<div class="bx-controls" />')),
                        r.settings.captions && _(),
                        (r.active.last = r.settings.startSlide == v() - 1),
                        r.settings.video && a.fitVids();
                    var t = r.children.eq(r.settings.startSlide);
                    "all" == r.settings.preloadImages && (t = r.children),
                        r.settings.ticker
                            ? (r.settings.pager = !1)
                            : (r.settings.pager && S(),
                              r.settings.controls && C(),
                              r.settings.auto && r.settings.autoControls && $(),
                              (r.settings.controls ||
                                  r.settings.autoControls ||
                                  r.settings.pager) &&
                                  r.viewport.after(r.controls.el)),
                        d(t, f);
                },
                d = function (t, n) {
                    var i = t.find("img, iframe").length;
                    if (0 != i) {
                        var o = 0;
                        t.find("img, iframe").each(function () {
                            e(this)
                                .one("load", function () {
                                    ++o == i && n();
                                })
                                .each(function () {
                                    this.complete && e(this).load();
                                });
                        });
                    } else n();
                },
                f = function () {
                    if (
                        r.settings.infiniteLoop &&
                        "fade" != r.settings.mode &&
                        !r.settings.ticker
                    ) {
                        var t =
                                "vertical" == r.settings.mode
                                    ? r.settings.minSlides
                                    : r.settings.maxSlides,
                            n = r.children
                                .slice(0, t)
                                .clone()
                                .addClass("bx-clone"),
                            i = r.children
                                .slice(-t)
                                .clone()
                                .addClass("bx-clone");
                        a.append(n).prepend(i);
                    }
                    r.loader.remove(),
                        b(),
                        "vertical" == r.settings.mode &&
                            (r.settings.adaptiveHeight = !0),
                        r.viewport.height(p()),
                        a.redrawSlider(),
                        r.settings.onSliderLoad(r.active.index),
                        (r.initialized = !0),
                        r.settings.responsive && e(window).bind("resize", z),
                        r.settings.auto && r.settings.autoStart && B(),
                        r.settings.ticker && I(),
                        r.settings.pager && D(r.settings.startSlide),
                        r.settings.controls && N(),
                        r.settings.touchEnabled && !r.settings.ticker && R();
                },
                p = function () {
                    var t = 0,
                        n = e();
                    if (
                        "vertical" == r.settings.mode ||
                        r.settings.adaptiveHeight
                    )
                        if (r.carousel) {
                            var o =
                                1 == r.settings.moveSlides
                                    ? r.active.index
                                    : r.active.index * y();
                            for (
                                n = r.children.eq(o), i = 1;
                                i <= r.settings.maxSlides - 1;
                                i++
                            )
                                n =
                                    o + i >= r.children.length
                                        ? n.add(r.children.eq(i - 1))
                                        : n.add(r.children.eq(o + i));
                        } else n = r.children.eq(r.active.index);
                    else n = r.children;
                    return (
                        "vertical" == r.settings.mode
                            ? (n.each(function () {
                                  t += e(this).outerHeight();
                              }),
                              r.settings.slideMargin > 0 &&
                                  (t +=
                                      r.settings.slideMargin *
                                      (r.settings.minSlides - 1)))
                            : (t = Math.max.apply(
                                  Math,
                                  n
                                      .map(function () {
                                          return e(this).outerHeight(!1);
                                      })
                                      .get()
                              )),
                        t
                    );
                },
                h = function () {
                    var e = "100%";
                    return (
                        r.settings.slideWidth > 0 &&
                            (e =
                                "horizontal" == r.settings.mode
                                    ? r.settings.maxSlides *
                                          r.settings.slideWidth +
                                      (r.settings.maxSlides - 1) *
                                          r.settings.slideMargin
                                    : r.settings.slideWidth),
                        e
                    );
                },
                g = function () {
                    var e = r.settings.slideWidth,
                        t = r.viewport.width();
                    return (
                        0 == r.settings.slideWidth ||
                        (r.settings.slideWidth > t && !r.carousel) ||
                        "vertical" == r.settings.mode
                            ? (e = t)
                            : r.settings.maxSlides > 1 &&
                              "horizontal" == r.settings.mode &&
                              (t > r.maxThreshold ||
                                  (t < r.minThreshold &&
                                      (e =
                                          (t -
                                              r.settings.slideMargin *
                                                  (r.settings.minSlides - 1)) /
                                          r.settings.minSlides))),
                        e
                    );
                },
                m = function () {
                    var e = 1;
                    if (
                        "horizontal" == r.settings.mode &&
                        r.settings.slideWidth > 0
                    )
                        if (r.viewport.width() < r.minThreshold)
                            e = r.settings.minSlides;
                        else if (r.viewport.width() > r.maxThreshold)
                            e = r.settings.maxSlides;
                        else {
                            var t = r.children.first().width();
                            e = Math.floor(r.viewport.width() / t);
                        }
                    else
                        "vertical" == r.settings.mode &&
                            (e = r.settings.minSlides);
                    return e;
                },
                v = function () {
                    var e = 0;
                    if (r.settings.moveSlides > 0)
                        if (r.settings.infiniteLoop)
                            e = r.children.length / y();
                        else
                            for (var t = 0, n = 0; t < r.children.length; )
                                ++e,
                                    (t = n + m()),
                                    (n +=
                                        r.settings.moveSlides <= m()
                                            ? r.settings.moveSlides
                                            : m());
                    else e = Math.ceil(r.children.length / m());
                    return e;
                },
                y = function () {
                    return r.settings.moveSlides > 0 &&
                        r.settings.moveSlides <= m()
                        ? r.settings.moveSlides
                        : m();
                },
                b = function () {
                    if (
                        r.children.length > r.settings.maxSlides &&
                        r.active.last &&
                        !r.settings.infiniteLoop
                    ) {
                        if ("horizontal" == r.settings.mode) {
                            var e = r.children.last(),
                                t = e.position();
                            x(
                                -(t.left - (r.viewport.width() - e.width())),
                                "reset",
                                0
                            );
                        } else if ("vertical" == r.settings.mode) {
                            var n = r.children.length - r.settings.minSlides;
                            t = r.children.eq(n).position();
                            x(-t.top, "reset", 0);
                        }
                    } else {
                        t = r.children.eq(r.active.index * y()).position();
                        r.active.index == v() - 1 && (r.active.last = !0),
                            null != t &&
                                ("horizontal" == r.settings.mode
                                    ? x(-t.left, "reset", 0)
                                    : "vertical" == r.settings.mode &&
                                      x(-t.top, "reset", 0));
                    }
                },
                x = function (e, t, n, i) {
                    if (r.usingCSS) {
                        var o =
                            "vertical" == r.settings.mode
                                ? "translate3d(0, " + e + "px, 0)"
                                : "translate3d(" + e + "px, 0, 0)";
                        a.css(
                            "-" + r.cssPrefix + "-transition-duration",
                            n / 1e3 + "s"
                        ),
                            "slide" == t
                                ? (a.css(r.animProp, o),
                                  a.bind(
                                      "transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",
                                      function () {
                                          a.unbind(
                                              "transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd"
                                          ),
                                              M();
                                      }
                                  ))
                                : "reset" == t
                                ? a.css(r.animProp, o)
                                : "ticker" == t &&
                                  (a.css(
                                      "-" +
                                          r.cssPrefix +
                                          "-transition-timing-function",
                                      "linear"
                                  ),
                                  a.css(r.animProp, o),
                                  a.bind(
                                      "transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",
                                      function () {
                                          a.unbind(
                                              "transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd"
                                          ),
                                              x(i.resetValue, "reset", 0),
                                              P();
                                      }
                                  ));
                    } else {
                        var s = {};
                        (s[r.animProp] = e),
                            "slide" == t
                                ? a.animate(
                                      s,
                                      n,
                                      r.settings.easing,
                                      function () {
                                          M();
                                      }
                                  )
                                : "reset" == t
                                ? a.css(r.animProp, e)
                                : "ticker" == t &&
                                  a.animate(s, speed, "linear", function () {
                                      x(i.resetValue, "reset", 0), P();
                                  });
                    }
                },
                w = function () {
                    for (var t = "", n = v(), i = 0; n > i; i++) {
                        var o = "";
                        r.settings.buildPager &&
                        e.isFunction(r.settings.buildPager)
                            ? ((o = r.settings.buildPager(i)),
                              r.pagerEl.addClass("bx-custom-pager"))
                            : ((o = i + 1),
                              r.pagerEl.addClass("bx-default-pager")),
                            (t +=
                                '<div class="bx-pager-item"><a href="" data-slide-index="' +
                                i +
                                '" class="bx-pager-link">' +
                                o +
                                "</a></div>");
                    }
                    r.pagerEl.html(t);
                },
                S = function () {
                    r.settings.pagerCustom
                        ? (r.pagerEl = e(r.settings.pagerCustom))
                        : ((r.pagerEl = e('<div class="bx-pager" />')),
                          r.settings.pagerSelector
                              ? e(r.settings.pagerSelector).html(r.pagerEl)
                              : r.controls.el
                                    .addClass("bx-has-pager")
                                    .append(r.pagerEl),
                          w()),
                        r.pagerEl.on("click", "a", O);
                },
                C = function () {
                    (r.controls.next = e(
                        '<a class="bx-next" href="">' +
                            r.settings.nextText +
                            "</a>"
                    )),
                        (r.controls.prev = e(
                            '<a class="bx-prev" href="">' +
                                r.settings.prevText +
                                "</a>"
                        )),
                        r.controls.next.bind("click", T),
                        r.controls.prev.bind("click", k),
                        r.settings.nextSelector &&
                            e(r.settings.nextSelector).append(r.controls.next),
                        r.settings.prevSelector &&
                            e(r.settings.prevSelector).append(r.controls.prev),
                        r.settings.nextSelector ||
                            r.settings.prevSelector ||
                            ((r.controls.directionEl = e(
                                '<div class="bx-controls-direction" />'
                            )),
                            r.controls.directionEl
                                .append(r.controls.prev)
                                .append(r.controls.next),
                            r.controls.el
                                .addClass("bx-has-controls-direction")
                                .append(r.controls.directionEl));
                },
                $ = function () {
                    (r.controls.start = e(
                        '<div class="bx-controls-auto-item"><a class="bx-start" href="">' +
                            r.settings.startText +
                            "</a></div>"
                    )),
                        (r.controls.stop = e(
                            '<div class="bx-controls-auto-item"><a class="bx-stop" href="">' +
                                r.settings.stopText +
                                "</a></div>"
                        )),
                        (r.controls.autoEl = e(
                            '<div class="bx-controls-auto" />'
                        )),
                        r.controls.autoEl.on("click", ".bx-start", E),
                        r.controls.autoEl.on("click", ".bx-stop", A),
                        r.settings.autoControlsCombine
                            ? r.controls.autoEl.append(r.controls.start)
                            : r.controls.autoEl
                                  .append(r.controls.start)
                                  .append(r.controls.stop),
                        r.settings.autoControlsSelector
                            ? e(r.settings.autoControlsSelector).html(
                                  r.controls.autoEl
                              )
                            : r.controls.el
                                  .addClass("bx-has-controls-auto")
                                  .append(r.controls.autoEl),
                        L(r.settings.autoStart ? "stop" : "start");
                },
                _ = function () {
                    r.children.each(function () {
                        var t = e(this).find("img:first").attr("title");
                        null != t &&
                            ("" + t).length &&
                            e(this).append(
                                '<div class="bx-caption"><span>' +
                                    t +
                                    "</span></div>"
                            );
                    });
                },
                T = function (e) {
                    r.settings.auto && a.stopAuto(),
                        a.goToNextSlide(),
                        e.preventDefault();
                },
                k = function (e) {
                    r.settings.auto && a.stopAuto(),
                        a.goToPrevSlide(),
                        e.preventDefault();
                },
                E = function (e) {
                    a.startAuto(), e.preventDefault();
                },
                A = function (e) {
                    a.stopAuto(), e.preventDefault();
                },
                O = function (t) {
                    r.settings.auto && a.stopAuto();
                    var n = e(t.currentTarget),
                        i = parseInt(n.attr("data-slide-index"));
                    i != r.active.index && a.goToSlide(i), t.preventDefault();
                },
                D = function (t) {
                    var n = r.children.length;
                    return "short" == r.settings.pagerType
                        ? (r.settings.maxSlides > 1 &&
                              (n = Math.ceil(
                                  r.children.length / r.settings.maxSlides
                              )),
                          void r.pagerEl.html(
                              t + 1 + r.settings.pagerShortSeparator + n
                          ))
                        : (r.pagerEl.find("a").removeClass("active"),
                          void r.pagerEl.each(function (n, i) {
                              e(i).find("a").eq(t).addClass("active");
                          }));
                },
                M = function () {
                    if (r.settings.infiniteLoop) {
                        var e = "";
                        0 == r.active.index
                            ? (e = r.children.eq(0).position())
                            : r.active.index == v() - 1 && r.carousel
                            ? (e = r.children.eq((v() - 1) * y()).position())
                            : r.active.index == r.children.length - 1 &&
                              (e = r.children
                                  .eq(r.children.length - 1)
                                  .position()),
                            e &&
                                ("horizontal" == r.settings.mode
                                    ? x(-e.left, "reset", 0)
                                    : "vertical" == r.settings.mode &&
                                      x(-e.top, "reset", 0));
                    }
                    (r.working = !1),
                        r.settings.onSlideAfter(
                            r.children.eq(r.active.index),
                            r.oldIndex,
                            r.active.index
                        );
                },
                L = function (e) {
                    r.settings.autoControlsCombine
                        ? r.controls.autoEl.html(r.controls[e])
                        : (r.controls.autoEl.find("a").removeClass("active"),
                          r.controls.autoEl
                              .find("a:not(.bx-" + e + ")")
                              .addClass("active"));
                },
                N = function () {
                    1 == v()
                        ? (r.controls.prev.addClass("disabled"),
                          r.controls.next.addClass("disabled"))
                        : !r.settings.infiniteLoop &&
                          r.settings.hideControlOnEnd &&
                          (0 == r.active.index
                              ? (r.controls.prev.addClass("disabled"),
                                r.controls.next.removeClass("disabled"))
                              : r.active.index == v() - 1
                              ? (r.controls.next.addClass("disabled"),
                                r.controls.prev.removeClass("disabled"))
                              : (r.controls.prev.removeClass("disabled"),
                                r.controls.next.removeClass("disabled")));
                },
                B = function () {
                    r.settings.autoDelay > 0
                        ? setTimeout(a.startAuto, r.settings.autoDelay)
                        : a.startAuto(),
                        r.settings.autoHover &&
                            a.hover(
                                function () {
                                    r.interval &&
                                        (a.stopAuto(!0), (r.autoPaused = !0));
                                },
                                function () {
                                    r.autoPaused &&
                                        (a.startAuto(!0),
                                        (r.autoPaused = null));
                                }
                            );
                },
                I = function () {
                    var t = 0;
                    if ("next" == r.settings.autoDirection)
                        a.append(r.children.clone().addClass("bx-clone"));
                    else {
                        a.prepend(r.children.clone().addClass("bx-clone"));
                        var n = r.children.first().position();
                        t = "horizontal" == r.settings.mode ? -n.left : -n.top;
                    }
                    x(t, "reset", 0),
                        (r.settings.pager = !1),
                        (r.settings.controls = !1),
                        (r.settings.autoControls = !1),
                        r.settings.tickerHover &&
                            !r.usingCSS &&
                            r.viewport.hover(
                                function () {
                                    a.stop();
                                },
                                function () {
                                    var t = 0;
                                    r.children.each(function () {
                                        t +=
                                            "horizontal" == r.settings.mode
                                                ? e(this).outerWidth(!0)
                                                : e(this).outerHeight(!0);
                                    });
                                    var n = r.settings.speed / t,
                                        i =
                                            "horizontal" == r.settings.mode
                                                ? "left"
                                                : "top",
                                        o =
                                            n *
                                            (t - Math.abs(parseInt(a.css(i))));
                                    P(o);
                                }
                            ),
                        P();
                },
                P = function (e) {
                    speed = e || r.settings.speed;
                    var t = {
                            left: 0,
                            top: 0,
                        },
                        n = {
                            left: 0,
                            top: 0,
                        };
                    "next" == r.settings.autoDirection
                        ? (t = a.find(".bx-clone").first().position())
                        : (n = r.children.first().position());
                    var i = "horizontal" == r.settings.mode ? -t.left : -t.top,
                        o = "horizontal" == r.settings.mode ? -n.left : -n.top;
                    x(i, "ticker", speed, {
                        resetValue: o,
                    });
                },
                R = function () {
                    (r.touch = {
                        start: {
                            x: 0,
                            y: 0,
                        },
                        end: {
                            x: 0,
                            y: 0,
                        },
                    }),
                        r.viewport.bind("touchstart", H);
                },
                H = function (e) {
                    if (r.working) e.preventDefault();
                    else {
                        r.touch.originalPos = a.position();
                        var t = e.originalEvent;
                        (r.touch.start.x = t.changedTouches[0].pageX),
                            (r.touch.start.y = t.changedTouches[0].pageY),
                            r.viewport.bind("touchmove", j),
                            r.viewport.bind("touchend", q);
                    }
                },
                j = function (e) {
                    var t = e.originalEvent,
                        n = Math.abs(
                            t.changedTouches[0].pageX - r.touch.start.x
                        ),
                        i = Math.abs(
                            t.changedTouches[0].pageY - r.touch.start.y
                        );
                    if (
                        (3 * n > i && r.settings.preventDefaultSwipeX
                            ? e.preventDefault()
                            : 3 * i > n &&
                              r.settings.preventDefaultSwipeY &&
                              e.preventDefault(),
                        "fade" != r.settings.mode && r.settings.oneToOneTouch)
                    ) {
                        var o = 0;
                        if ("horizontal" == r.settings.mode) {
                            var a = t.changedTouches[0].pageX - r.touch.start.x;
                            o = r.touch.originalPos.left + a;
                        } else {
                            a = t.changedTouches[0].pageY - r.touch.start.y;
                            o = r.touch.originalPos.top + a;
                        }
                        x(o, "reset", 0);
                    }
                },
                q = function (e) {
                    r.viewport.unbind("touchmove", j);
                    var t = e.originalEvent,
                        n = 0;
                    if (
                        ((r.touch.end.x = t.changedTouches[0].pageX),
                        (r.touch.end.y = t.changedTouches[0].pageY),
                        "fade" == r.settings.mode)
                    ) {
                        (i = Math.abs(r.touch.start.x - r.touch.end.x)) >=
                            r.settings.swipeThreshold &&
                            (r.touch.start.x > r.touch.end.x
                                ? a.goToNextSlide()
                                : a.goToPrevSlide(),
                            a.stopAuto());
                    } else {
                        var i = 0;
                        "horizontal" == r.settings.mode
                            ? ((i = r.touch.end.x - r.touch.start.x),
                              (n = r.touch.originalPos.left))
                            : ((i = r.touch.end.y - r.touch.start.y),
                              (n = r.touch.originalPos.top)),
                            !r.settings.infiniteLoop &&
                            ((0 == r.active.index && i > 0) ||
                                (r.active.last && 0 > i))
                                ? x(n, "reset", 200)
                                : Math.abs(i) >= r.settings.swipeThreshold
                                ? (0 > i
                                      ? a.goToNextSlide()
                                      : a.goToPrevSlide(),
                                  a.stopAuto())
                                : x(n, "reset", 200);
                    }
                    r.viewport.unbind("touchend", q);
                },
                z = function () {
                    var t = e(window).width(),
                        n = e(window).height();
                    (s != t || l != n) &&
                        ((s = t),
                        (l = n),
                        a.redrawSlider(),
                        r.settings.onSliderResize.call(a, r.active.index));
                };
            return (
                (a.goToSlide = function (t, n) {
                    if (!r.working && r.active.index != t)
                        if (
                            ((r.working = !0),
                            (r.oldIndex = r.active.index),
                            (r.active.index =
                                0 > t ? v() - 1 : t >= v() ? 0 : t),
                            r.settings.onSlideBefore(
                                r.children.eq(r.active.index),
                                r.oldIndex,
                                r.active.index
                            ),
                            "next" == n
                                ? r.settings.onSlideNext(
                                      r.children.eq(r.active.index),
                                      r.oldIndex,
                                      r.active.index
                                  )
                                : "prev" == n &&
                                  r.settings.onSlidePrev(
                                      r.children.eq(r.active.index),
                                      r.oldIndex,
                                      r.active.index
                                  ),
                            (r.active.last = r.active.index >= v() - 1),
                            r.settings.pager && D(r.active.index),
                            r.settings.controls && N(),
                            "fade" == r.settings.mode)
                        )
                            r.settings.adaptiveHeight &&
                                r.viewport.height() != p() &&
                                r.viewport.animate(
                                    {
                                        height: p(),
                                    },
                                    r.settings.adaptiveHeightSpeed
                                ),
                                r.children
                                    .filter(":visible")
                                    .fadeOut(r.settings.speed)
                                    .css({
                                        zIndex: 0,
                                    }),
                                r.children
                                    .eq(r.active.index)
                                    .css("zIndex", r.settings.slideZIndex + 1)
                                    .fadeIn(r.settings.speed, function () {
                                        e(this).css(
                                            "zIndex",
                                            r.settings.slideZIndex
                                        ),
                                            M();
                                    });
                        else {
                            r.settings.adaptiveHeight &&
                                r.viewport.height() != p() &&
                                r.viewport.animate(
                                    {
                                        height: p(),
                                    },
                                    r.settings.adaptiveHeightSpeed
                                );
                            var i = 0,
                                o = {
                                    left: 0,
                                    top: 0,
                                };
                            if (
                                !r.settings.infiniteLoop &&
                                r.carousel &&
                                r.active.last
                            )
                                if ("horizontal" == r.settings.mode) {
                                    (o = (l = r.children.eq(
                                        r.children.length - 1
                                    )).position()),
                                        (i =
                                            r.viewport.width() -
                                            l.outerWidth());
                                } else {
                                    var s =
                                        r.children.length -
                                        r.settings.minSlides;
                                    o = r.children.eq(s).position();
                                }
                            else if (
                                r.carousel &&
                                r.active.last &&
                                "prev" == n
                            ) {
                                var l,
                                    c =
                                        1 == r.settings.moveSlides
                                            ? r.settings.maxSlides - y()
                                            : (v() - 1) * y() -
                                              (r.children.length -
                                                  r.settings.maxSlides);
                                o = (l = a
                                    .children(".bx-clone")
                                    .eq(c)).position();
                            } else if ("next" == n && 0 == r.active.index)
                                (o = a
                                    .find("> .bx-clone")
                                    .eq(r.settings.maxSlides)
                                    .position()),
                                    (r.active.last = !1);
                            else if (t >= 0) {
                                var u = t * y();
                                o = r.children.eq(u).position();
                            }
                            if (void 0 !== o) {
                                var d =
                                    "horizontal" == r.settings.mode
                                        ? -(o.left - i)
                                        : -o.top;
                                x(d, "slide", r.settings.speed);
                            }
                        }
                }),
                (a.goToNextSlide = function () {
                    if (r.settings.infiniteLoop || !r.active.last) {
                        var e = parseInt(r.active.index) + 1;
                        a.goToSlide(e, "next");
                    }
                }),
                (a.goToPrevSlide = function () {
                    if (r.settings.infiniteLoop || 0 != r.active.index) {
                        var e = parseInt(r.active.index) - 1;
                        a.goToSlide(e, "prev");
                    }
                }),
                (a.startAuto = function (e) {
                    r.interval ||
                        ((r.interval = setInterval(function () {
                            "next" == r.settings.autoDirection
                                ? a.goToNextSlide()
                                : a.goToPrevSlide();
                        }, r.settings.pause)),
                        r.settings.autoControls && 1 != e && L("stop"));
                }),
                (a.stopAuto = function (e) {
                    r.interval &&
                        (clearInterval(r.interval),
                        (r.interval = null),
                        r.settings.autoControls && 1 != e && L("start"));
                }),
                (a.getCurrentSlide = function () {
                    return r.active.index;
                }),
                (a.getCurrentSlideElement = function () {
                    return r.children.eq(r.active.index);
                }),
                (a.getSlideCount = function () {
                    return r.children.length;
                }),
                (a.redrawSlider = function () {
                    r.children.add(a.find(".bx-clone")).outerWidth(g()),
                        r.viewport.css("height", p()),
                        r.settings.ticker || b(),
                        r.active.last && (r.active.index = v() - 1),
                        r.active.index >= v() && (r.active.last = !0),
                        r.settings.pager &&
                            !r.settings.pagerCustom &&
                            (w(), D(r.active.index));
                }),
                (a.destroySlider = function () {
                    r.initialized &&
                        ((r.initialized = !1),
                        e(".bx-clone", this).remove(),
                        r.children.each(function () {
                            null != e(this).data("origStyle")
                                ? e(this).attr(
                                      "style",
                                      e(this).data("origStyle")
                                  )
                                : e(this).removeAttr("style");
                        }),
                        null != e(this).data("origStyle")
                            ? this.attr("style", e(this).data("origStyle"))
                            : e(this).removeAttr("style"),
                        e(this).unwrap().unwrap(),
                        r.controls.el && r.controls.el.remove(),
                        r.controls.next && r.controls.next.remove(),
                        r.controls.prev && r.controls.prev.remove(),
                        r.pagerEl && r.settings.controls && r.pagerEl.remove(),
                        e(".bx-caption", this).remove(),
                        r.controls.autoEl && r.controls.autoEl.remove(),
                        clearInterval(r.interval),
                        r.settings.responsive && e(window).unbind("resize", z));
                }),
                (a.reloadSlider = function (e) {
                    null != e && (o = e), a.destroySlider(), c();
                }),
                c(),
                this
            );
        };
    })(jQuery),
    $(document).ready(function () {
        menu_scroll(),
            menu_left(),
            slider_pr_home(),
            remove_menu(),
            menu_scroll1(),
            slide_comment(),
            slide_banner(),
            slide_news();
    }),
    (function (e) {
        "use strict";

        function t(e) {
            return new RegExp("(^|\\s+)" + e + "(\\s+|$)");
        }
        var n, i, o;

        function r(e, t) {
            (n(e, t) ? o : i)(e, t);
        }
        "classList" in document.documentElement
            ? ((n = function (e, t) {
                  return e.classList.contains(t);
              }),
              (i = function (e, t) {
                  e.classList.add(t);
              }),
              (o = function (e, t) {
                  e.classList.remove(t);
              }))
            : ((n = function (e, n) {
                  return t(n).test(e.className);
              }),
              (i = function (e, t) {
                  n(e, t) || (e.className = e.className + " " + t);
              }),
              (o = function (e, n) {
                  e.className = e.className.replace(t(n), " ");
              }));
        var a = {
            hasClass: n,
            addClass: i,
            removeClass: o,
            toggleClass: r,
            has: n,
            add: i,
            remove: o,
            toggle: r,
        };
        "function" == typeof define && define.amd ? define(a) : (e.classie = a);
    })(window),
    (function (e) {
        "use strict";

        function t(e, t) {
            for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n]);
            return e;
        }

        function n(e, n) {
            (this.el = e),
                (this.options = t({}, this.options)),
                t(this.options, n),
                this._init();
        }
        (n.prototype.options = {
            newTab: !0,
            stickyPlaceholder: !0,
            onChange: function (e) {
                return !1;
            },
        }),
            (n.prototype._init = function () {
                var e = this.el.querySelector("option[selected]");
                (this.hasDefaultPlaceholder = e && e.disabled),
                    (this.selectedOpt = e || this.el.querySelector("option")),
                    this._createSelectEl(),
                    (this.selOpts = [].slice.call(
                        this.selEl.querySelectorAll("li[data-option]")
                    )),
                    (this.selOptsCount = this.selOpts.length),
                    (this.current =
                        this.selOpts.indexOf(
                            this.selEl.querySelector("li.cs-selected")
                        ) || -1),
                    (this.selPlaceholder = this.selEl.querySelector(
                        "span.cs-placeholder"
                    )),
                    this._initEvents();
            }),
            (n.prototype._createSelectEl = function () {
                var e = "",
                    t = function (e) {
                        var t = "",
                            n = "",
                            i = "";
                        return (
                            !e.selectedOpt ||
                                this.foundSelected ||
                                this.hasDefaultPlaceholder ||
                                ((n += "cs-selected "),
                                (this.foundSelected = !0)),
                            e.getAttribute("data-class") &&
                                (n += e.getAttribute("data-class")),
                            e.getAttribute("data-link") &&
                                (i =
                                    "data-link=" + e.getAttribute("data-link")),
                            "" !== n && (t = 'class="' + n + '" '),
                            "<li " +
                                t +
                                i +
                                ' data-option data-value="' +
                                e.value +
                                '"><span>' +
                                e.textContent +
                                "</span></li>"
                        );
                    };
                [].slice.call(this.el.children).forEach(function (n) {
                    if (!n.disabled) {
                        var i = n.tagName.toLowerCase();
                        "option" === i
                            ? (e += t(n))
                            : "optgroup" === i &&
                              ((e +=
                                  '<li class="cs-optgroup"><span>' +
                                  n.label +
                                  "</span><ul>"),
                              [].slice.call(n.children).forEach(function (n) {
                                  e += t(n);
                              }),
                              (e += "</ul></li>"));
                    }
                });
                var n = '<div class="cs-options"><ul>' + e + "</ul></div>";
                (this.selEl = document.createElement("div")),
                    (this.selEl.className = this.el.className),
                    (this.selEl.tabIndex = this.el.tabIndex),
                    (this.selEl.innerHTML =
                        '<span class="cs-placeholder">' +
                        this.selectedOpt.textContent +
                        "</span>" +
                        n),
                    this.el.parentNode.appendChild(this.selEl),
                    this.selEl.appendChild(this.el);
            }),
            (n.prototype._initEvents = function () {
                var e = this;
                this.selPlaceholder.addEventListener("click", function () {
                    e._toggleSelect();
                }),
                    this.selOpts.forEach(function (t, n) {
                        t.addEventListener("click", function () {
                            (e.current = n),
                                e._changeOption(),
                                e._toggleSelect();
                        });
                    }),
                    document.addEventListener("click", function (t) {
                        var n = t.target;
                        e._isOpen() &&
                            n !== e.selEl &&
                            !(function (e, t) {
                                if (!e) return !1;
                                for (
                                    var n = e.target || e.srcElement || e || !1;
                                    n && n != t;

                                )
                                    n = n.parentNode || !1;
                                return !1 !== n;
                            })(n, e.selEl) &&
                            e._toggleSelect();
                    }),
                    this.selEl.addEventListener("keydown", function (t) {
                        switch (t.keyCode || t.which) {
                            case 38:
                                t.preventDefault(), e._navigateOpts("prev");
                                break;
                            case 40:
                                t.preventDefault(), e._navigateOpts("next");
                                break;
                            case 32:
                                t.preventDefault(),
                                    e._isOpen() &&
                                        void 0 !== e.preSelCurrent &&
                                        -1 !== e.preSelCurrent &&
                                        e._changeOption(),
                                    e._toggleSelect();
                                break;
                            case 13:
                                t.preventDefault(),
                                    e._isOpen() &&
                                        void 0 !== e.preSelCurrent &&
                                        -1 !== e.preSelCurrent &&
                                        (e._changeOption(), e._toggleSelect());
                                break;
                            case 27:
                                t.preventDefault(),
                                    e._isOpen() && e._toggleSelect();
                        }
                    });
            }),
            (n.prototype._navigateOpts = function (e) {
                this._isOpen() || this._toggleSelect();
                var t =
                    void 0 !== this.preSelCurrent && -1 !== this.preSelCurrent
                        ? this.preSelCurrent
                        : this.current;
                (("prev" === e && t > 0) ||
                    ("next" === e && t < this.selOptsCount - 1)) &&
                    ((this.preSelCurrent = "next" === e ? t + 1 : t - 1),
                    this._removeFocus(),
                    classie.add(this.selOpts[this.preSelCurrent], "cs-focus"));
            }),
            (n.prototype._toggleSelect = function () {
                this._removeFocus(),
                    this._isOpen()
                        ? (-1 !== this.current &&
                              (this.selPlaceholder.textContent =
                                  this.selOpts[this.current].textContent),
                          classie.remove(this.selEl, "cs-active"))
                        : (this.hasDefaultPlaceholder &&
                              this.options.stickyPlaceholder &&
                              (this.selPlaceholder.textContent =
                                  this.selectedOpt.textContent),
                          classie.add(this.selEl, "cs-active"));
            }),
            (n.prototype._changeOption = function () {
                void 0 !== this.preSelCurrent &&
                    -1 !== this.preSelCurrent &&
                    ((this.current = this.preSelCurrent),
                    (this.preSelCurrent = -1));
                var t = this.selOpts[this.current];
                (this.selPlaceholder.textContent = t.textContent),
                    (this.el.value = t.getAttribute("data-value"));
                var n = this.selEl.querySelector("li.cs-selected");
                n && classie.remove(n, "cs-selected"),
                    classie.add(t, "cs-selected"),
                    t.getAttribute("data-link") &&
                        (this.options.newTab
                            ? e.open(t.getAttribute("data-link"), "_blank")
                            : (e.location = t.getAttribute("data-link"))),
                    this.options.onChange(this.el.value);
            }),
            (n.prototype._isOpen = function (e) {
                return classie.has(this.selEl, "cs-active");
            }),
            (n.prototype._removeFocus = function (e) {
                var t = this.selEl.querySelector("li.cs-focus");
                t && classie.remove(t, "cs-focus");
            }),
            (e.SelectFx = n);
    })(window),
    (function (e) {
        "function" == typeof define && define.amd
            ? define(["jquery"], e)
            : "object" == typeof exports
            ? (module.exports = e)
            : e(jQuery);
    })(function (e) {
        function t(t) {
            var a = t || window.event,
                s = l.call(arguments, 1),
                c = 0,
                d = 0,
                f = 0,
                p = 0,
                h = 0,
                g = 0;
            if (
                (((t = e.event.fix(a)).type = "mousewheel"),
                "detail" in a && (f = -1 * a.detail),
                "wheelDelta" in a && (f = a.wheelDelta),
                "wheelDeltaY" in a && (f = a.wheelDeltaY),
                "wheelDeltaX" in a && (d = -1 * a.wheelDeltaX),
                "axis" in a &&
                    a.axis === a.HORIZONTAL_AXIS &&
                    ((d = -1 * f), (f = 0)),
                (c = 0 === f ? d : f),
                "deltaY" in a && (c = f = -1 * a.deltaY),
                "deltaX" in a && ((d = a.deltaX), 0 === f && (c = -1 * d)),
                0 !== f || 0 !== d)
            ) {
                if (1 === a.deltaMode) {
                    var m = e.data(this, "mousewheel-line-height");
                    (c *= m), (f *= m), (d *= m);
                } else if (2 === a.deltaMode) {
                    var v = e.data(this, "mousewheel-page-height");
                    (c *= v), (f *= v), (d *= v);
                }
                if (
                    ((p = Math.max(Math.abs(f), Math.abs(d))),
                    (!r || r > p) && ((r = p), i(a, p) && (r /= 40)),
                    i(a, p) && ((c /= 40), (d /= 40), (f /= 40)),
                    (c = Math[c >= 1 ? "floor" : "ceil"](c / r)),
                    (d = Math[d >= 1 ? "floor" : "ceil"](d / r)),
                    (f = Math[f >= 1 ? "floor" : "ceil"](f / r)),
                    u.settings.normalizeOffset && this.getBoundingClientRect)
                ) {
                    var y = this.getBoundingClientRect();
                    (h = t.clientX - y.left), (g = t.clientY - y.top);
                }
                return (
                    (t.deltaX = d),
                    (t.deltaY = f),
                    (t.deltaFactor = r),
                    (t.offsetX = h),
                    (t.offsetY = g),
                    (t.deltaMode = 0),
                    s.unshift(t, c, d, f),
                    o && clearTimeout(o),
                    (o = setTimeout(n, 200)),
                    (e.event.dispatch || e.event.handle).apply(this, s)
                );
            }
        }

        function n() {
            r = null;
        }

        function i(e, t) {
            return (
                u.settings.adjustOldDeltas &&
                "mousewheel" === e.type &&
                t % 120 == 0
            );
        }
        var o,
            r,
            a = [
                "wheel",
                "mousewheel",
                "DOMMouseScroll",
                "MozMousePixelScroll",
            ],
            s =
                "onwheel" in document || document.documentMode >= 9
                    ? ["wheel"]
                    : ["mousewheel", "DomMouseScroll", "MozMousePixelScroll"],
            l = Array.prototype.slice;
        if (e.event.fixHooks)
            for (var c = a.length; c; )
                e.event.fixHooks[a[--c]] = e.event.mouseHooks;
        var u = (e.event.special.mousewheel = {
            version: "3.1.12",
            setup: function () {
                if (this.addEventListener)
                    for (var n = s.length; n; )
                        this.addEventListener(s[--n], t, !1);
                else this.onmousewheel = t;
                e.data(this, "mousewheel-line-height", u.getLineHeight(this)),
                    e.data(
                        this,
                        "mousewheel-page-height",
                        u.getPageHeight(this)
                    );
            },
            teardown: function () {
                if (this.removeEventListener)
                    for (var n = s.length; n; )
                        this.removeEventListener(s[--n], t, !1);
                else this.onmousewheel = null;
                e.removeData(this, "mousewheel-line-height"),
                    e.removeData(this, "mousewheel-page-height");
            },
            getLineHeight: function (t) {
                var n = e(t),
                    i = n["offsetParent" in e.fn ? "offsetParent" : "parent"]();
                return (
                    i.length || (i = e("body")),
                    parseInt(i.css("fontSize"), 10) ||
                        parseInt(n.css("fontSize"), 10) ||
                        16
                );
            },
            getPageHeight: function (t) {
                return e(t).height();
            },
            settings: {
                adjustOldDeltas: !0,
                normalizeOffset: !0,
            },
        });
        e.fn.extend({
            mousewheel: function (e) {
                return e
                    ? this.bind("mousewheel", e)
                    : this.trigger("mousewheel");
            },
            unmousewheel: function (e) {
                return this.unbind("mousewheel", e);
            },
        });
    }),
    (function (e) {
        "function" == typeof define && define.amd
            ? define(["jquery"], e)
            : "object" == typeof exports
            ? (module.exports = e)
            : e(jQuery);
    })(function (e) {
        function t(t) {
            var a = t || window.event,
                s = l.call(arguments, 1),
                c = 0,
                d = 0,
                f = 0,
                p = 0,
                h = 0,
                g = 0;
            if (
                (((t = e.event.fix(a)).type = "mousewheel"),
                "detail" in a && (f = -1 * a.detail),
                "wheelDelta" in a && (f = a.wheelDelta),
                "wheelDeltaY" in a && (f = a.wheelDeltaY),
                "wheelDeltaX" in a && (d = -1 * a.wheelDeltaX),
                "axis" in a &&
                    a.axis === a.HORIZONTAL_AXIS &&
                    ((d = -1 * f), (f = 0)),
                (c = 0 === f ? d : f),
                "deltaY" in a && (c = f = -1 * a.deltaY),
                "deltaX" in a && ((d = a.deltaX), 0 === f && (c = -1 * d)),
                0 !== f || 0 !== d)
            ) {
                if (1 === a.deltaMode) {
                    var m = e.data(this, "mousewheel-line-height");
                    (c *= m), (f *= m), (d *= m);
                } else if (2 === a.deltaMode) {
                    var v = e.data(this, "mousewheel-page-height");
                    (c *= v), (f *= v), (d *= v);
                }
                if (
                    ((p = Math.max(Math.abs(f), Math.abs(d))),
                    (!r || r > p) && ((r = p), i(a, p) && (r /= 40)),
                    i(a, p) && ((c /= 40), (d /= 40), (f /= 40)),
                    (c = Math[c >= 1 ? "floor" : "ceil"](c / r)),
                    (d = Math[d >= 1 ? "floor" : "ceil"](d / r)),
                    (f = Math[f >= 1 ? "floor" : "ceil"](f / r)),
                    u.settings.normalizeOffset && this.getBoundingClientRect)
                ) {
                    var y = this.getBoundingClientRect();
                    (h = t.clientX - y.left), (g = t.clientY - y.top);
                }
                return (
                    (t.deltaX = d),
                    (t.deltaY = f),
                    (t.deltaFactor = r),
                    (t.offsetX = h),
                    (t.offsetY = g),
                    (t.deltaMode = 0),
                    s.unshift(t, c, d, f),
                    o && clearTimeout(o),
                    (o = setTimeout(n, 200)),
                    (e.event.dispatch || e.event.handle).apply(this, s)
                );
            }
        }

        function n() {
            r = null;
        }

        function i(e, t) {
            return (
                u.settings.adjustOldDeltas &&
                "mousewheel" === e.type &&
                t % 120 == 0
            );
        }
        var o,
            r,
            a = [
                "wheel",
                "mousewheel",
                "DOMMouseScroll",
                "MozMousePixelScroll",
            ],
            s =
                "onwheel" in document || document.documentMode >= 9
                    ? ["wheel"]
                    : ["mousewheel", "DomMouseScroll", "MozMousePixelScroll"],
            l = Array.prototype.slice;
        if (e.event.fixHooks)
            for (var c = a.length; c; )
                e.event.fixHooks[a[--c]] = e.event.mouseHooks;
        var u = (e.event.special.mousewheel = {
            version: "3.1.12",
            setup: function () {
                if (this.addEventListener)
                    for (var n = s.length; n; )
                        this.addEventListener(s[--n], t, !1);
                else this.onmousewheel = t;
                e.data(this, "mousewheel-line-height", u.getLineHeight(this)),
                    e.data(
                        this,
                        "mousewheel-page-height",
                        u.getPageHeight(this)
                    );
            },
            teardown: function () {
                if (this.removeEventListener)
                    for (var n = s.length; n; )
                        this.removeEventListener(s[--n], t, !1);
                else this.onmousewheel = null;
                e.removeData(this, "mousewheel-line-height"),
                    e.removeData(this, "mousewheel-page-height");
            },
            getLineHeight: function (t) {
                var n = e(t),
                    i = n["offsetParent" in e.fn ? "offsetParent" : "parent"]();
                return (
                    i.length || (i = e("body")),
                    parseInt(i.css("fontSize"), 10) ||
                        parseInt(n.css("fontSize"), 10) ||
                        16
                );
            },
            getPageHeight: function (t) {
                return e(t).height();
            },
            settings: {
                adjustOldDeltas: !0,
                normalizeOffset: !0,
            },
        });
        e.fn.extend({
            mousewheel: function (e) {
                return e
                    ? this.bind("mousewheel", e)
                    : this.trigger("mousewheel");
            },
            unmousewheel: function (e) {
                return this.unbind("mousewheel", e);
            },
        });
    }),
    (function (e) {
        "function" == typeof define && define.amd
            ? define(["jquery"], e)
            : "undefined" != typeof module && module.exports
            ? (module.exports = e)
            : e(jQuery, window, document);
    })(function (e) {
        var t, n, i;
        (t = "function" == typeof define && define.amd),
            (n = "undefined" != typeof module && module.exports),
            (i = "https:" == document.location.protocol ? "https:" : "http:"),
            t ||
                (n
                    ? require("jquery-mousewheel")(e)
                    : e.event.special.mousewheel ||
                      e("head").append(
                          decodeURI(
                              "%3Cscript src=" +
                                  i +
                                  "//cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js%3E%3C/script%3E"
                          )
                      )),
            (function () {
                var t,
                    n = "mCustomScrollbar",
                    i = "mCS",
                    o = ".mCustomScrollbar",
                    r = {
                        setTop: 0,
                        setLeft: 0,
                        axis: "y",
                        scrollbarPosition: "inside",
                        scrollInertia: 950,
                        autoDraggerLength: !0,
                        alwaysShowScrollbar: 0,
                        snapOffset: 0,
                        mouseWheel: {
                            enable: !0,
                            scrollAmount: "auto",
                            axis: "y",
                            deltaFactor: "auto",
                            disableOver: [
                                "select",
                                "option",
                                "keygen",
                                "datalist",
                                "textarea",
                            ],
                        },
                        scrollButtons: {
                            scrollType: "stepless",
                            scrollAmount: "auto",
                        },
                        keyboard: {
                            enable: !0,
                            scrollType: "stepless",
                            scrollAmount: "auto",
                        },
                        contentTouchScroll: 25,
                        documentTouchScroll: !0,
                        advanced: {
                            autoScrollOnFocus:
                                "input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",
                            updateOnContentResize: !0,
                            updateOnImageLoad: "auto",
                            autoUpdateTimeout: 60,
                        },
                        theme: "light",
                        callbacks: {
                            onTotalScrollOffset: 0,
                            onTotalScrollBackOffset: 0,
                            alwaysTriggerOffsets: !0,
                        },
                    },
                    a = 0,
                    s = {},
                    l = window.attachEvent && !window.addEventListener ? 1 : 0,
                    c = !1,
                    u = [
                        "mCSB_dragger_onDrag",
                        "mCSB_scrollTools_onDrag",
                        "mCS_img_loaded",
                        "mCS_disabled",
                        "mCS_destroyed",
                        "mCS_no_scrollbar",
                        "mCS-autoHide",
                        "mCS-dir-rtl",
                        "mCS_no_scrollbar_y",
                        "mCS_no_scrollbar_x",
                        "mCS_y_hidden",
                        "mCS_x_hidden",
                        "mCSB_draggerContainer",
                        "mCSB_buttonUp",
                        "mCSB_buttonDown",
                        "mCSB_buttonLeft",
                        "mCSB_buttonRight",
                    ],
                    d = {
                        init: function (t) {
                            var t = e.extend(!0, {}, r, t),
                                n = f.call(this);
                            if (t.live) {
                                var l = t.liveSelector || this.selector || o,
                                    c = e(l);
                                if ("off" === t.live) return void h(l);
                                s[l] = setTimeout(function () {
                                    c.mCustomScrollbar(t),
                                        "once" === t.live && c.length && h(l);
                                }, 500);
                            } else h(l);
                            return (
                                (t.setWidth = t.set_width
                                    ? t.set_width
                                    : t.setWidth),
                                (t.setHeight = t.set_height
                                    ? t.set_height
                                    : t.setHeight),
                                (t.axis = t.horizontalScroll ? "x" : g(t.axis)),
                                (t.scrollInertia =
                                    t.scrollInertia > 0 && t.scrollInertia < 17
                                        ? 17
                                        : t.scrollInertia),
                                "object" != typeof t.mouseWheel &&
                                    1 == t.mouseWheel &&
                                    (t.mouseWheel = {
                                        enable: !0,
                                        scrollAmount: "auto",
                                        axis: "y",
                                        preventDefault: !1,
                                        deltaFactor: "auto",
                                        normalizeDelta: !1,
                                        invert: !1,
                                    }),
                                (t.mouseWheel.scrollAmount = t.mouseWheelPixels
                                    ? t.mouseWheelPixels
                                    : t.mouseWheel.scrollAmount),
                                (t.mouseWheel.normalizeDelta = t.advanced
                                    .normalizeMouseWheelDelta
                                    ? t.advanced.normalizeMouseWheelDelta
                                    : t.mouseWheel.normalizeDelta),
                                (t.scrollButtons.scrollType = m(
                                    t.scrollButtons.scrollType
                                )),
                                p(t),
                                e(n).each(function () {
                                    var n = e(this);
                                    if (!n.data(i)) {
                                        n.data(i, {
                                            idx: ++a,
                                            opt: t,
                                            scrollRatio: {
                                                y: null,
                                                x: null,
                                            },
                                            overflowed: null,
                                            contentReset: {
                                                y: null,
                                                x: null,
                                            },
                                            bindEvents: !1,
                                            tweenRunning: !1,
                                            sequential: {},
                                            langDir: n.css("direction"),
                                            cbOffsets: null,
                                            trigger: null,
                                            poll: {
                                                size: {
                                                    o: 0,
                                                    n: 0,
                                                },
                                                img: {
                                                    o: 0,
                                                    n: 0,
                                                },
                                                change: {
                                                    o: 0,
                                                    n: 0,
                                                },
                                            },
                                        });
                                        var o = n.data(i),
                                            r = o.opt,
                                            s = n.data("mcs-axis"),
                                            l = n.data(
                                                "mcs-scrollbar-position"
                                            ),
                                            c = n.data("mcs-theme");
                                        s && (r.axis = s),
                                            l && (r.scrollbarPosition = l),
                                            c && ((r.theme = c), p(r)),
                                            v.call(this),
                                            o &&
                                                r.callbacks.onCreate &&
                                                "function" ==
                                                    typeof r.callbacks
                                                        .onCreate &&
                                                r.callbacks.onCreate.call(this),
                                            e(
                                                "#mCSB_" +
                                                    o.idx +
                                                    "_container img:not(." +
                                                    u[2] +
                                                    ")"
                                            ).addClass(u[2]),
                                            d.update.call(null, n);
                                    }
                                })
                            );
                        },
                        update: function (t, n) {
                            var o = t || f.call(this);
                            return e(o).each(function () {
                                var t = e(this);
                                if (t.data(i)) {
                                    var o = t.data(i),
                                        r = o.opt,
                                        a = e("#mCSB_" + o.idx + "_container"),
                                        s = e("#mCSB_" + o.idx),
                                        l = [
                                            e(
                                                "#mCSB_" +
                                                    o.idx +
                                                    "_dragger_vertical"
                                            ),
                                            e(
                                                "#mCSB_" +
                                                    o.idx +
                                                    "_dragger_horizontal"
                                            ),
                                        ];
                                    if (!a.length) return;
                                    o.tweenRunning && Y(t),
                                        n &&
                                            o &&
                                            r.callbacks.onBeforeUpdate &&
                                            "function" ==
                                                typeof r.callbacks
                                                    .onBeforeUpdate &&
                                            r.callbacks.onBeforeUpdate.call(
                                                this
                                            ),
                                        t.hasClass(u[3]) && t.removeClass(u[3]),
                                        t.hasClass(u[4]) && t.removeClass(u[4]),
                                        s.css("max-height", "none"),
                                        s.height() !== t.height() &&
                                            s.css("max-height", t.height()),
                                        b.call(this),
                                        "y" === r.axis ||
                                            r.advanced
                                                .autoExpandHorizontalScroll ||
                                            a.css("width", y(a)),
                                        (o.overflowed = $.call(this)),
                                        E.call(this),
                                        r.autoDraggerLength && w.call(this),
                                        S.call(this),
                                        T.call(this);
                                    var c = [
                                        Math.abs(a[0].offsetTop),
                                        Math.abs(a[0].offsetLeft),
                                    ];
                                    "x" !== r.axis &&
                                        (o.overflowed[0]
                                            ? l[0].height() >
                                              l[0].parent().height()
                                                ? _.call(this)
                                                : (U(t, c[0].toString(), {
                                                      dir: "y",
                                                      dur: 0,
                                                      overwrite: "none",
                                                  }),
                                                  (o.contentReset.y = null))
                                            : (_.call(this),
                                              "y" === r.axis
                                                  ? k.call(this)
                                                  : "yx" === r.axis &&
                                                    o.overflowed[1] &&
                                                    U(t, c[1].toString(), {
                                                        dir: "x",
                                                        dur: 0,
                                                        overwrite: "none",
                                                    }))),
                                        "y" !== r.axis &&
                                            (o.overflowed[1]
                                                ? l[1].width() >
                                                  l[1].parent().width()
                                                    ? _.call(this)
                                                    : (U(t, c[1].toString(), {
                                                          dir: "x",
                                                          dur: 0,
                                                          overwrite: "none",
                                                      }),
                                                      (o.contentReset.x = null))
                                                : (_.call(this),
                                                  "x" === r.axis
                                                      ? k.call(this)
                                                      : "yx" === r.axis &&
                                                        o.overflowed[0] &&
                                                        U(t, c[0].toString(), {
                                                            dir: "y",
                                                            dur: 0,
                                                            overwrite: "none",
                                                        }))),
                                        n &&
                                            o &&
                                            (2 === n &&
                                            r.callbacks.onImageLoad &&
                                            "function" ==
                                                typeof r.callbacks.onImageLoad
                                                ? r.callbacks.onImageLoad.call(
                                                      this
                                                  )
                                                : 3 === n &&
                                                  r.callbacks
                                                      .onSelectorChange &&
                                                  "function" ==
                                                      typeof r.callbacks
                                                          .onSelectorChange
                                                ? r.callbacks.onSelectorChange.call(
                                                      this
                                                  )
                                                : r.callbacks.onUpdate &&
                                                  "function" ==
                                                      typeof r.callbacks
                                                          .onUpdate &&
                                                  r.callbacks.onUpdate.call(
                                                      this
                                                  )),
                                        V.call(this);
                                }
                            });
                        },
                        scrollTo: function (t, n) {
                            if (void 0 !== t && null != t) {
                                var o = f.call(this);
                                return e(o).each(function () {
                                    var o = e(this);
                                    if (o.data(i)) {
                                        var r = o.data(i),
                                            a = r.opt,
                                            s = {
                                                trigger: "external",
                                                scrollInertia: a.scrollInertia,
                                                scrollEasing: "mcsEaseInOut",
                                                moveDragger: !1,
                                                timeout: 60,
                                                callbacks: !0,
                                                onStart: !0,
                                                onUpdate: !0,
                                                onComplete: !0,
                                            },
                                            l = e.extend(!0, {}, s, n),
                                            c = F.call(this, t),
                                            u =
                                                l.scrollInertia > 0 &&
                                                l.scrollInertia < 17
                                                    ? 17
                                                    : l.scrollInertia;
                                        (c[0] = X.call(this, c[0], "y")),
                                            (c[1] = X.call(this, c[1], "x")),
                                            l.moveDragger &&
                                                ((c[0] *= r.scrollRatio.y),
                                                (c[1] *= r.scrollRatio.x)),
                                            (l.dur = ie() ? 0 : u),
                                            setTimeout(function () {
                                                null !== c[0] &&
                                                    void 0 !== c[0] &&
                                                    "x" !== a.axis &&
                                                    r.overflowed[0] &&
                                                    ((l.dir = "y"),
                                                    (l.overwrite = "all"),
                                                    U(o, c[0].toString(), l)),
                                                    null !== c[1] &&
                                                        void 0 !== c[1] &&
                                                        "y" !== a.axis &&
                                                        r.overflowed[1] &&
                                                        ((l.dir = "x"),
                                                        (l.overwrite = "none"),
                                                        U(
                                                            o,
                                                            c[1].toString(),
                                                            l
                                                        ));
                                            }, l.timeout);
                                    }
                                });
                            }
                        },
                        stop: function () {
                            var t = f.call(this);
                            return e(t).each(function () {
                                var t = e(this);
                                t.data(i) && Y(t);
                            });
                        },
                        disable: function (t) {
                            var n = f.call(this);
                            return e(n).each(function () {
                                var n = e(this);
                                n.data(i) &&
                                    (n.data(i),
                                    V.call(this, "remove"),
                                    k.call(this),
                                    t && _.call(this),
                                    E.call(this, !0),
                                    n.addClass(u[3]));
                            });
                        },
                        destroy: function () {
                            var t = f.call(this);
                            return e(t).each(function () {
                                var o = e(this);
                                if (o.data(i)) {
                                    var r = o.data(i),
                                        a = r.opt,
                                        s = e("#mCSB_" + r.idx),
                                        l = e("#mCSB_" + r.idx + "_container"),
                                        c = e(".mCSB_" + r.idx + "_scrollbar");
                                    a.live &&
                                        h(a.liveSelector || e(t).selector),
                                        V.call(this, "remove"),
                                        k.call(this),
                                        _.call(this),
                                        o.removeData(i),
                                        Q(this, "mcs"),
                                        c.remove(),
                                        l.find("img." + u[2]).removeClass(u[2]),
                                        s.replaceWith(l.contents()),
                                        o
                                            .removeClass(
                                                n +
                                                    " _" +
                                                    i +
                                                    "_" +
                                                    r.idx +
                                                    " " +
                                                    u[6] +
                                                    " " +
                                                    u[7] +
                                                    " " +
                                                    u[5] +
                                                    " " +
                                                    u[3]
                                            )
                                            .addClass(u[4]);
                                }
                            });
                        },
                    },
                    f = function () {
                        return "object" != typeof e(this) || e(this).length < 1
                            ? o
                            : this;
                    },
                    p = function (t) {
                        (t.autoDraggerLength =
                            !(
                                e.inArray(t.theme, [
                                    "rounded",
                                    "rounded-dark",
                                    "rounded-dots",
                                    "rounded-dots-dark",
                                ]) > -1
                            ) && t.autoDraggerLength),
                            (t.autoExpandScrollbar =
                                !(
                                    e.inArray(t.theme, [
                                        "rounded-dots",
                                        "rounded-dots-dark",
                                        "3d",
                                        "3d-dark",
                                        "3d-thick",
                                        "3d-thick-dark",
                                        "inset",
                                        "inset-dark",
                                        "inset-2",
                                        "inset-2-dark",
                                        "inset-3",
                                        "inset-3-dark",
                                    ]) > -1
                                ) && t.autoExpandScrollbar),
                            (t.scrollButtons.enable =
                                !(
                                    e.inArray(t.theme, [
                                        "minimal",
                                        "minimal-dark",
                                    ]) > -1
                                ) && t.scrollButtons.enable),
                            (t.autoHideScrollbar =
                                e.inArray(t.theme, [
                                    "minimal",
                                    "minimal-dark",
                                ]) > -1 || t.autoHideScrollbar),
                            (t.scrollbarPosition =
                                e.inArray(t.theme, [
                                    "minimal",
                                    "minimal-dark",
                                ]) > -1
                                    ? "outside"
                                    : t.scrollbarPosition);
                    },
                    h = function (e) {
                        s[e] && (clearTimeout(s[e]), Q(s, e));
                    },
                    g = function (e) {
                        return "yx" === e || "xy" === e || "auto" === e
                            ? "yx"
                            : "x" === e || "horizontal" === e
                            ? "x"
                            : "y";
                    },
                    m = function (e) {
                        return "stepped" === e ||
                            "pixels" === e ||
                            "step" === e ||
                            "click" === e
                            ? "stepped"
                            : "stepless";
                    },
                    v = function () {
                        var t = e(this),
                            o = t.data(i),
                            r = o.opt,
                            a = r.autoExpandScrollbar
                                ? " " + u[1] + "_expand"
                                : "",
                            s = [
                                "<div id='mCSB_" +
                                    o.idx +
                                    "_scrollbar_vertical' class='mCSB_scrollTools mCSB_" +
                                    o.idx +
                                    "_scrollbar mCS-" +
                                    r.theme +
                                    " mCSB_scrollTools_vertical" +
                                    a +
                                    "'><div class='" +
                                    u[12] +
                                    "'><div id='mCSB_" +
                                    o.idx +
                                    "_dragger_vertical' class='mCSB_dragger' style='position:absolute;'><div class='mCSB_dragger_bar' /></div><div class='mCSB_draggerRail' /></div></div>",
                                "<div id='mCSB_" +
                                    o.idx +
                                    "_scrollbar_horizontal' class='mCSB_scrollTools mCSB_" +
                                    o.idx +
                                    "_scrollbar mCS-" +
                                    r.theme +
                                    " mCSB_scrollTools_horizontal" +
                                    a +
                                    "'><div class='" +
                                    u[12] +
                                    "'><div id='mCSB_" +
                                    o.idx +
                                    "_dragger_horizontal' class='mCSB_dragger' style='position:absolute;'><div class='mCSB_dragger_bar' /></div><div class='mCSB_draggerRail' /></div></div>",
                            ],
                            l =
                                "yx" === r.axis
                                    ? "mCSB_vertical_horizontal"
                                    : "x" === r.axis
                                    ? "mCSB_horizontal"
                                    : "mCSB_vertical",
                            c =
                                "yx" === r.axis
                                    ? s[0] + s[1]
                                    : "x" === r.axis
                                    ? s[1]
                                    : s[0],
                            d =
                                "yx" === r.axis
                                    ? "<div id='mCSB_" +
                                      o.idx +
                                      "_container_wrapper' class='mCSB_container_wrapper' />"
                                    : "",
                            f = r.autoHideScrollbar ? " " + u[6] : "",
                            p =
                                "x" !== r.axis && "rtl" === o.langDir
                                    ? " " + u[7]
                                    : "";
                        r.setWidth && t.css("width", r.setWidth),
                            r.setHeight && t.css("height", r.setHeight),
                            (r.setLeft =
                                "y" !== r.axis && "rtl" === o.langDir
                                    ? "989999px"
                                    : r.setLeft),
                            t
                                .addClass(n + " _" + i + "_" + o.idx + f + p)
                                .wrapInner(
                                    "<div id='mCSB_" +
                                        o.idx +
                                        "' class='mCustomScrollBox mCS-" +
                                        r.theme +
                                        " " +
                                        l +
                                        "'><div id='mCSB_" +
                                        o.idx +
                                        "_container' class='mCSB_container' style='position:relative; top:" +
                                        r.setTop +
                                        "; left:" +
                                        r.setLeft +
                                        ";' dir='" +
                                        o.langDir +
                                        "' /></div>"
                                );
                        var h = e("#mCSB_" + o.idx),
                            g = e("#mCSB_" + o.idx + "_container");
                        "y" === r.axis ||
                            r.advanced.autoExpandHorizontalScroll ||
                            g.css("width", y(g)),
                            "outside" === r.scrollbarPosition
                                ? ("static" === t.css("position") &&
                                      t.css("position", "relative"),
                                  t.css("overflow", "visible"),
                                  h.addClass("mCSB_outside").after(c))
                                : (h.addClass("mCSB_inside").append(c),
                                  g.wrap(d)),
                            x.call(this);
                        var m = [
                            e("#mCSB_" + o.idx + "_dragger_vertical"),
                            e("#mCSB_" + o.idx + "_dragger_horizontal"),
                        ];
                        m[0].css("min-height", m[0].height()),
                            m[1].css("min-width", m[1].width());
                    },
                    y = function (t) {
                        var n = [
                                t[0].scrollWidth,
                                Math.max.apply(
                                    Math,
                                    t
                                        .children()
                                        .map(function () {
                                            return e(this).outerWidth(!0);
                                        })
                                        .get()
                                ),
                            ],
                            i = t.parent().width();
                        return n[0] > i ? n[0] : n[1] > i ? n[1] : "100%";
                    },
                    b = function () {
                        var t = e(this),
                            n = t.data(i),
                            o = n.opt,
                            r = e("#mCSB_" + n.idx + "_container");
                        if (
                            o.advanced.autoExpandHorizontalScroll &&
                            "y" !== o.axis
                        ) {
                            r.css({
                                width: "auto",
                                "min-width": 0,
                                "overflow-x": "scroll",
                            });
                            var a = Math.ceil(r[0].scrollWidth);
                            3 === o.advanced.autoExpandHorizontalScroll ||
                            (2 !== o.advanced.autoExpandHorizontalScroll &&
                                a > r.parent().width())
                                ? r.css({
                                      width: a,
                                      "min-width": "100%",
                                      "overflow-x": "inherit",
                                  })
                                : r
                                      .css({
                                          "overflow-x": "inherit",
                                          position: "absolute",
                                      })
                                      .wrap(
                                          "<div class='mCSB_h_wrapper' style='position:relative; left:0; width:999999px;' />"
                                      )
                                      .css({
                                          width:
                                              Math.ceil(
                                                  r[0].getBoundingClientRect()
                                                      .right + 0.4
                                              ) -
                                              Math.floor(
                                                  r[0].getBoundingClientRect()
                                                      .left
                                              ),
                                          "min-width": "100%",
                                          position: "relative",
                                      })
                                      .unwrap();
                        }
                    },
                    x = function () {
                        var t = e(this),
                            n = t.data(i),
                            o = n.opt,
                            r = e(".mCSB_" + n.idx + "_scrollbar:first"),
                            a = te(o.scrollButtons.tabindex)
                                ? "tabindex='" + o.scrollButtons.tabindex + "'"
                                : "",
                            s = [
                                "<a href='#' class='" +
                                    u[13] +
                                    "' " +
                                    a +
                                    " />",
                                "<a href='#' class='" +
                                    u[14] +
                                    "' " +
                                    a +
                                    " />",
                                "<a href='#' class='" +
                                    u[15] +
                                    "' " +
                                    a +
                                    " />",
                                "<a href='#' class='" +
                                    u[16] +
                                    "' " +
                                    a +
                                    " />",
                            ],
                            l = [
                                "x" === o.axis ? s[2] : s[0],
                                "x" === o.axis ? s[3] : s[1],
                                s[2],
                                s[3],
                            ];
                        o.scrollButtons.enable &&
                            r
                                .prepend(l[0])
                                .append(l[1])
                                .next(".mCSB_scrollTools")
                                .prepend(l[2])
                                .append(l[3]);
                    },
                    w = function () {
                        var t = e(this),
                            n = t.data(i),
                            o = e("#mCSB_" + n.idx),
                            r = e("#mCSB_" + n.idx + "_container"),
                            a = [
                                e("#mCSB_" + n.idx + "_dragger_vertical"),
                                e("#mCSB_" + n.idx + "_dragger_horizontal"),
                            ],
                            s = [
                                o.height() / r.outerHeight(!1),
                                o.width() / r.outerWidth(!1),
                            ],
                            c = [
                                parseInt(a[0].css("min-height")),
                                Math.round(s[0] * a[0].parent().height()),
                                parseInt(a[1].css("min-width")),
                                Math.round(s[1] * a[1].parent().width()),
                            ],
                            u = l && c[1] < c[0] ? c[0] : c[1],
                            d = l && c[3] < c[2] ? c[2] : c[3];
                        a[0]
                            .css({
                                height: u,
                                "max-height": a[0].parent().height() - 10,
                            })
                            .find(".mCSB_dragger_bar")
                            .css({
                                "line-height": c[0] + "px",
                            }),
                            a[1].css({
                                width: d,
                                "max-width": a[1].parent().width() - 10,
                            });
                    },
                    S = function () {
                        var t = e(this),
                            n = t.data(i),
                            o = e("#mCSB_" + n.idx),
                            r = e("#mCSB_" + n.idx + "_container"),
                            a = [
                                e("#mCSB_" + n.idx + "_dragger_vertical"),
                                e("#mCSB_" + n.idx + "_dragger_horizontal"),
                            ],
                            s = [
                                r.outerHeight(!1) - o.height(),
                                r.outerWidth(!1) - o.width(),
                            ],
                            l = [
                                s[0] / (a[0].parent().height() - a[0].height()),
                                s[1] / (a[1].parent().width() - a[1].width()),
                            ];
                        n.scrollRatio = {
                            y: l[0],
                            x: l[1],
                        };
                    },
                    C = function (e, t, n) {
                        var i = n ? u[0] + "_expanded" : "",
                            o = e.closest(".mCSB_scrollTools");
                        "active" === t
                            ? (e.toggleClass(u[0] + " " + i),
                              o.toggleClass(u[1]),
                              (e[0]._draggable = e[0]._draggable ? 0 : 1))
                            : e[0]._draggable ||
                              ("hide" === t
                                  ? (e.removeClass(u[0]), o.removeClass(u[1]))
                                  : (e.addClass(u[0]), o.addClass(u[1])));
                    },
                    $ = function () {
                        var t = e(this),
                            n = t.data(i),
                            o = e("#mCSB_" + n.idx),
                            r = e("#mCSB_" + n.idx + "_container"),
                            a =
                                null == n.overflowed
                                    ? r.height()
                                    : r.outerHeight(!1),
                            s =
                                null == n.overflowed
                                    ? r.width()
                                    : r.outerWidth(!1),
                            l = r[0].scrollHeight,
                            c = r[0].scrollWidth;
                        return (
                            l > a && (a = l),
                            c > s && (s = c),
                            [a > o.height(), s > o.width()]
                        );
                    },
                    _ = function () {
                        var t = e(this),
                            n = t.data(i),
                            o = n.opt,
                            r = e("#mCSB_" + n.idx),
                            a = e("#mCSB_" + n.idx + "_container"),
                            s = [
                                e("#mCSB_" + n.idx + "_dragger_vertical"),
                                e("#mCSB_" + n.idx + "_dragger_horizontal"),
                            ];
                        if (
                            (Y(t),
                            (("x" !== o.axis && !n.overflowed[0]) ||
                                ("y" === o.axis && n.overflowed[0])) &&
                                (s[0].add(a).css("top", 0), U(t, "_resetY")),
                            ("y" !== o.axis && !n.overflowed[1]) ||
                                ("x" === o.axis && n.overflowed[1]))
                        ) {
                            var l = (dx = 0);
                            "rtl" === n.langDir &&
                                ((l = r.width() - a.outerWidth(!1)),
                                (dx = Math.abs(l / n.scrollRatio.x))),
                                a.css("left", l),
                                s[1].css("left", dx),
                                U(t, "_resetX");
                        }
                    },
                    T = function () {
                        var t,
                            n = e(this),
                            o = n.data(i),
                            r = o.opt;
                        o.bindEvents ||
                            (O.call(this),
                            r.contentTouchScroll && D.call(this),
                            M.call(this),
                            r.mouseWheel.enable &&
                                (function i() {
                                    t = setTimeout(function () {
                                        e.event.special.mousewheel
                                            ? (clearTimeout(t), L.call(n[0]))
                                            : i();
                                    }, 100);
                                })(),
                            R.call(this),
                            j.call(this),
                            r.advanced.autoScrollOnFocus && H.call(this),
                            r.scrollButtons.enable && q.call(this),
                            r.keyboard.enable && z.call(this),
                            (o.bindEvents = !0));
                    },
                    k = function () {
                        var t = e(this),
                            n = t.data(i),
                            o = n.opt,
                            r = i + "_" + n.idx,
                            a = ".mCSB_" + n.idx + "_scrollbar",
                            s = e(
                                "#mCSB_" +
                                    n.idx +
                                    ",#mCSB_" +
                                    n.idx +
                                    "_container,#mCSB_" +
                                    n.idx +
                                    "_container_wrapper," +
                                    a +
                                    " ." +
                                    u[12] +
                                    ",#mCSB_" +
                                    n.idx +
                                    "_dragger_vertical,#mCSB_" +
                                    n.idx +
                                    "_dragger_horizontal," +
                                    a +
                                    ">a"
                            ),
                            l = e("#mCSB_" + n.idx + "_container");
                        o.advanced.releaseDraggableSelectors &&
                            s.add(e(o.advanced.releaseDraggableSelectors)),
                            o.advanced.extraDraggableSelectors &&
                                s.add(e(o.advanced.extraDraggableSelectors)),
                            n.bindEvents &&
                                (e(document)
                                    .add(e(!B() || top.document))
                                    .unbind("." + r),
                                s.each(function () {
                                    e(this).unbind("." + r);
                                }),
                                clearTimeout(t[0]._focusTimeout),
                                Q(t[0], "_focusTimeout"),
                                clearTimeout(n.sequential.step),
                                Q(n.sequential, "step"),
                                clearTimeout(l[0].onCompleteTimeout),
                                Q(l[0], "onCompleteTimeout"),
                                (n.bindEvents = !1));
                    },
                    E = function (t) {
                        var n = e(this),
                            o = n.data(i),
                            r = o.opt,
                            a = e("#mCSB_" + o.idx + "_container_wrapper"),
                            s = a.length
                                ? a
                                : e("#mCSB_" + o.idx + "_container"),
                            l = [
                                e("#mCSB_" + o.idx + "_scrollbar_vertical"),
                                e("#mCSB_" + o.idx + "_scrollbar_horizontal"),
                            ],
                            c = [
                                l[0].find(".mCSB_dragger"),
                                l[1].find(".mCSB_dragger"),
                            ];
                        "x" !== r.axis &&
                            (o.overflowed[0] && !t
                                ? (l[0]
                                      .add(c[0])
                                      .add(l[0].children("a"))
                                      .css("display", "block"),
                                  s.removeClass(u[8] + " " + u[10]))
                                : (r.alwaysShowScrollbar
                                      ? (2 !== r.alwaysShowScrollbar &&
                                            c[0].css("display", "none"),
                                        s.removeClass(u[10]))
                                      : (l[0].css("display", "none"),
                                        s.addClass(u[10])),
                                  s.addClass(u[8]))),
                            "y" !== r.axis &&
                                (o.overflowed[1] && !t
                                    ? (l[1]
                                          .add(c[1])
                                          .add(l[1].children("a"))
                                          .css("display", "block"),
                                      s.removeClass(u[9] + " " + u[11]))
                                    : (r.alwaysShowScrollbar
                                          ? (2 !== r.alwaysShowScrollbar &&
                                                c[1].css("display", "none"),
                                            s.removeClass(u[11]))
                                          : (l[1].css("display", "none"),
                                            s.addClass(u[11])),
                                      s.addClass(u[9]))),
                            o.overflowed[0] || o.overflowed[1]
                                ? n.removeClass(u[5])
                                : n.addClass(u[5]);
                    },
                    A = function (t) {
                        var n = t.type,
                            i =
                                t.target.ownerDocument !== document &&
                                null !== frameElement
                                    ? [
                                          e(frameElement).offset().top,
                                          e(frameElement).offset().left,
                                      ]
                                    : null,
                            o =
                                B() &&
                                t.target.ownerDocument !== top.document &&
                                null !== frameElement
                                    ? [
                                          e(t.view.frameElement).offset().top,
                                          e(t.view.frameElement).offset().left,
                                      ]
                                    : [0, 0];
                        switch (n) {
                            case "pointerdown":
                            case "MSPointerDown":
                            case "pointermove":
                            case "MSPointerMove":
                            case "pointerup":
                            case "MSPointerUp":
                                return i
                                    ? [
                                          t.originalEvent.pageY - i[0] + o[0],
                                          t.originalEvent.pageX - i[1] + o[1],
                                          !1,
                                      ]
                                    : [
                                          t.originalEvent.pageY,
                                          t.originalEvent.pageX,
                                          !1,
                                      ];
                            case "touchstart":
                            case "touchmove":
                            case "touchend":
                                var r =
                                        t.originalEvent.touches[0] ||
                                        t.originalEvent.changedTouches[0],
                                    a =
                                        t.originalEvent.touches.length ||
                                        t.originalEvent.changedTouches.length;
                                return t.target.ownerDocument !== document
                                    ? [r.screenY, r.screenX, a > 1]
                                    : [r.pageY, r.pageX, a > 1];
                            default:
                                return i
                                    ? [
                                          t.pageY - i[0] + o[0],
                                          t.pageX - i[1] + o[1],
                                          !1,
                                      ]
                                    : [t.pageY, t.pageX, !1];
                        }
                    },
                    O = function () {
                        function t(e, t, i, o) {
                            if (
                                ((p[0].idleTimer =
                                    u.scrollInertia < 233 ? 250 : 0),
                                n.attr("id") === f[1])
                            )
                                var r = "x",
                                    l =
                                        (n[0].offsetLeft - t + o) *
                                        s.scrollRatio.x;
                            else
                                var r = "y",
                                    l =
                                        (n[0].offsetTop - e + i) *
                                        s.scrollRatio.y;
                            U(a, l.toString(), {
                                dir: r,
                                drag: !0,
                            });
                        }
                        var n,
                            o,
                            r,
                            a = e(this),
                            s = a.data(i),
                            u = s.opt,
                            d = i + "_" + s.idx,
                            f = [
                                "mCSB_" + s.idx + "_dragger_vertical",
                                "mCSB_" + s.idx + "_dragger_horizontal",
                            ],
                            p = e("#mCSB_" + s.idx + "_container"),
                            h = e("#" + f[0] + ",#" + f[1]),
                            g = u.advanced.releaseDraggableSelectors
                                ? h.add(e(u.advanced.releaseDraggableSelectors))
                                : h,
                            m = u.advanced.extraDraggableSelectors
                                ? e(!B() || top.document).add(
                                      e(u.advanced.extraDraggableSelectors)
                                  )
                                : e(!B() || top.document);
                        h
                            .bind("contextmenu." + d, function (e) {
                                e.preventDefault();
                            })
                            .bind(
                                "mousedown." +
                                    d +
                                    " touchstart." +
                                    d +
                                    " pointerdown." +
                                    d +
                                    " MSPointerDown." +
                                    d,
                                function (t) {
                                    if (
                                        (t.stopImmediatePropagation(),
                                        t.preventDefault(),
                                        J(t))
                                    ) {
                                        (c = !0),
                                            l &&
                                                (document.onselectstart =
                                                    function () {
                                                        return !1;
                                                    }),
                                            I.call(p, !1),
                                            Y(a);
                                        var i = (n = e(this)).offset(),
                                            s = A(t)[0] - i.top,
                                            d = A(t)[1] - i.left,
                                            f = n.height() + i.top,
                                            h = n.width() + i.left;
                                        f > s &&
                                            s > 0 &&
                                            h > d &&
                                            d > 0 &&
                                            ((o = s), (r = d)),
                                            C(
                                                n,
                                                "active",
                                                u.autoExpandScrollbar
                                            );
                                    }
                                }
                            )
                            .bind("touchmove." + d, function (e) {
                                e.stopImmediatePropagation(),
                                    e.preventDefault();
                                var i = n.offset(),
                                    a = A(e)[0] - i.top,
                                    s = A(e)[1] - i.left;
                                t(o, r, a, s);
                            }),
                            e(document)
                                .add(m)
                                .bind(
                                    "mousemove." +
                                        d +
                                        " pointermove." +
                                        d +
                                        " MSPointerMove." +
                                        d,
                                    function (e) {
                                        if (n) {
                                            var i = n.offset(),
                                                a = A(e)[0] - i.top,
                                                s = A(e)[1] - i.left;
                                            if (o === a && r === s) return;
                                            t(o, r, a, s);
                                        }
                                    }
                                )
                                .add(g)
                                .bind(
                                    "mouseup." +
                                        d +
                                        " touchend." +
                                        d +
                                        " pointerup." +
                                        d +
                                        " MSPointerUp." +
                                        d,
                                    function () {
                                        n &&
                                            (C(
                                                n,
                                                "active",
                                                u.autoExpandScrollbar
                                            ),
                                            (n = null)),
                                            (c = !1),
                                            l &&
                                                (document.onselectstart = null),
                                            I.call(p, !0);
                                    }
                                );
                    },
                    D = function () {
                        function n(e) {
                            if (!ee(e) || c || A(e)[2]) t = 0;
                            else {
                                (t = 1),
                                    (S = 0),
                                    (C = 0),
                                    (u = 1),
                                    $.removeClass("mCS_touch_action");
                                var n = O.offset();
                                (d = A(e)[0] - n.top),
                                    (f = A(e)[1] - n.left),
                                    (P = [A(e)[0], A(e)[1]]);
                            }
                        }

                        function o(e) {
                            if (
                                ee(e) &&
                                !c &&
                                !A(e)[2] &&
                                (T.documentTouchScroll || e.preventDefault(),
                                e.stopImmediatePropagation(),
                                (!C || S) && u)
                            ) {
                                m = Z();
                                var t = E.offset(),
                                    n = A(e)[0] - t.top,
                                    i = A(e)[1] - t.left,
                                    o = "mcsLinearOut";
                                if (
                                    (M.push(n),
                                    L.push(i),
                                    (P[2] = Math.abs(A(e)[0] - P[0])),
                                    (P[3] = Math.abs(A(e)[1] - P[1])),
                                    _.overflowed[0])
                                )
                                    var r =
                                            D[0].parent().height() -
                                            D[0].height(),
                                        a =
                                            d - n > 0 &&
                                            n - d > -r * _.scrollRatio.y &&
                                            (2 * P[3] < P[2] ||
                                                "yx" === T.axis);
                                if (_.overflowed[1])
                                    var s =
                                            D[1].parent().width() -
                                            D[1].width(),
                                        p =
                                            f - i > 0 &&
                                            i - f > -s * _.scrollRatio.x &&
                                            (2 * P[2] < P[3] ||
                                                "yx" === T.axis);
                                a || p
                                    ? (j || e.preventDefault(), (S = 1))
                                    : ((C = 1), $.addClass("mCS_touch_action")),
                                    j && e.preventDefault(),
                                    (x =
                                        "yx" === T.axis
                                            ? [d - n, f - i]
                                            : "x" === T.axis
                                            ? [null, f - i]
                                            : [d - n, null]),
                                    (O[0].idleTimer = 250),
                                    _.overflowed[0] &&
                                        l(x[0], N, o, "y", "all", !0),
                                    _.overflowed[1] &&
                                        l(x[1], N, o, "x", I, !0);
                            }
                        }

                        function r(e) {
                            if (!ee(e) || c || A(e)[2]) t = 0;
                            else {
                                (t = 1),
                                    e.stopImmediatePropagation(),
                                    Y($),
                                    (g = Z());
                                var n = E.offset();
                                (p = A(e)[0] - n.top),
                                    (h = A(e)[1] - n.left),
                                    (M = []),
                                    (L = []);
                            }
                        }

                        function a(e) {
                            if (ee(e) && !c && !A(e)[2]) {
                                (u = 0),
                                    e.stopImmediatePropagation(),
                                    (S = 0),
                                    (C = 0),
                                    (v = Z());
                                var t = E.offset(),
                                    n = A(e)[0] - t.top,
                                    i = A(e)[1] - t.left;
                                if (!(v - m > 30)) {
                                    var o = "mcsEaseOut",
                                        r = 2.5 > (b = 1e3 / (v - g)),
                                        a = r
                                            ? [M[M.length - 2], L[L.length - 2]]
                                            : [0, 0];
                                    y = r
                                        ? [n - a[0], i - a[1]]
                                        : [n - p, i - h];
                                    var d = [Math.abs(y[0]), Math.abs(y[1])];
                                    b = r
                                        ? [
                                              Math.abs(y[0] / 4),
                                              Math.abs(y[1] / 4),
                                          ]
                                        : [b, b];
                                    var f = [
                                        Math.abs(O[0].offsetTop) -
                                            y[0] * s(d[0] / b[0], b[0]),
                                        Math.abs(O[0].offsetLeft) -
                                            y[1] * s(d[1] / b[1], b[1]),
                                    ];
                                    (x =
                                        "yx" === T.axis
                                            ? [f[0], f[1]]
                                            : "x" === T.axis
                                            ? [null, f[1]]
                                            : [f[0], null]),
                                        (w = [
                                            4 * d[0] + T.scrollInertia,
                                            4 * d[1] + T.scrollInertia,
                                        ]);
                                    var $ = parseInt(T.contentTouchScroll) || 0;
                                    (x[0] = d[0] > $ ? x[0] : 0),
                                        (x[1] = d[1] > $ ? x[1] : 0),
                                        _.overflowed[0] &&
                                            l(x[0], w[0], o, "y", I, !1),
                                        _.overflowed[1] &&
                                            l(x[1], w[1], o, "x", I, !1);
                                }
                            }
                        }

                        function s(e, t) {
                            var n = [1.5 * t, 2 * t, t / 1.5, t / 2];
                            return e > 90
                                ? t > 4
                                    ? n[0]
                                    : n[3]
                                : e > 60
                                ? t > 3
                                    ? n[3]
                                    : n[2]
                                : e > 30
                                ? t > 8
                                    ? n[1]
                                    : t > 6
                                    ? n[0]
                                    : t > 4
                                    ? t
                                    : n[2]
                                : t > 8
                                ? t
                                : n[3];
                        }

                        function l(e, t, n, i, o, r) {
                            e &&
                                U($, e.toString(), {
                                    dur: t,
                                    scrollEasing: n,
                                    dir: i,
                                    overwrite: o,
                                    drag: r,
                                });
                        }
                        var u,
                            d,
                            f,
                            p,
                            h,
                            g,
                            m,
                            v,
                            y,
                            b,
                            x,
                            w,
                            S,
                            C,
                            $ = e(this),
                            _ = $.data(i),
                            T = _.opt,
                            k = i + "_" + _.idx,
                            E = e("#mCSB_" + _.idx),
                            O = e("#mCSB_" + _.idx + "_container"),
                            D = [
                                e("#mCSB_" + _.idx + "_dragger_vertical"),
                                e("#mCSB_" + _.idx + "_dragger_horizontal"),
                            ],
                            M = [],
                            L = [],
                            N = 0,
                            I = "yx" === T.axis ? "none" : "all",
                            P = [],
                            R = O.find("iframe"),
                            H = [
                                "touchstart." +
                                    k +
                                    " pointerdown." +
                                    k +
                                    " MSPointerDown." +
                                    k,
                                "touchmove." +
                                    k +
                                    " pointermove." +
                                    k +
                                    " MSPointerMove." +
                                    k,
                                "touchend." +
                                    k +
                                    " pointerup." +
                                    k +
                                    " MSPointerUp." +
                                    k,
                            ],
                            j =
                                void 0 !== document.body.style.touchAction &&
                                "" !== document.body.style.touchAction;
                        O.bind(H[0], function (e) {
                            n(e);
                        }).bind(H[1], function (e) {
                            o(e);
                        }),
                            E.bind(H[0], function (e) {
                                r(e);
                            }).bind(H[2], function (e) {
                                a(e);
                            }),
                            R.length &&
                                R.each(function () {
                                    e(this).bind("load", function () {
                                        B(this) &&
                                            e(
                                                this.contentDocument ||
                                                    this.contentWindow.document
                                            )
                                                .bind(H[0], function (e) {
                                                    n(e), r(e);
                                                })
                                                .bind(H[1], function (e) {
                                                    o(e);
                                                })
                                                .bind(H[2], function (e) {
                                                    a(e);
                                                });
                                    });
                                });
                    },
                    M = function () {
                        function n(e, t, n) {
                            (l.type = n && o ? "stepped" : "stepless"),
                                (l.scrollAmount = 10),
                                W(r, e, t, "mcsLinearOut", n ? 60 : null);
                        }
                        var o,
                            r = e(this),
                            a = r.data(i),
                            s = a.opt,
                            l = a.sequential,
                            u = i + "_" + a.idx,
                            d = e("#mCSB_" + a.idx + "_container"),
                            f = d.parent();
                        d.bind("mousedown." + u, function () {
                            t || o || ((o = 1), (c = !0));
                        })
                            .add(document)
                            .bind("mousemove." + u, function (e) {
                                if (
                                    !t &&
                                    o &&
                                    (window.getSelection
                                        ? window.getSelection().toString()
                                        : document.selection &&
                                          "Control" !=
                                              document.selection.type &&
                                          document.selection.createRange().text)
                                ) {
                                    var i = d.offset(),
                                        r = A(e)[0] - i.top + d[0].offsetTop,
                                        c = A(e)[1] - i.left + d[0].offsetLeft;
                                    r > 0 &&
                                    r < f.height() &&
                                    c > 0 &&
                                    c < f.width()
                                        ? l.step && n("off", null, "stepped")
                                        : ("x" !== s.axis &&
                                              a.overflowed[0] &&
                                              (0 > r
                                                  ? n("on", 38)
                                                  : r > f.height() &&
                                                    n("on", 40)),
                                          "y" !== s.axis &&
                                              a.overflowed[1] &&
                                              (0 > c
                                                  ? n("on", 37)
                                                  : c > f.width() &&
                                                    n("on", 39)));
                                }
                            })
                            .bind(
                                "mouseup." + u + " dragend." + u,
                                function () {
                                    t ||
                                        (o && ((o = 0), n("off", null)),
                                        (c = !1));
                                }
                            );
                    },
                    L = function () {
                        function t(t, i) {
                            if ((Y(n), !P(n, t.target))) {
                                var a =
                                        "auto" !== r.mouseWheel.deltaFactor
                                            ? parseInt(r.mouseWheel.deltaFactor)
                                            : l && t.deltaFactor < 100
                                            ? 100
                                            : t.deltaFactor || 100,
                                    u = r.scrollInertia;
                                if ("x" === r.axis || "x" === r.mouseWheel.axis)
                                    var d = "x",
                                        f = [
                                            Math.round(a * o.scrollRatio.x),
                                            parseInt(r.mouseWheel.scrollAmount),
                                        ],
                                        p =
                                            "auto" !== r.mouseWheel.scrollAmount
                                                ? f[1]
                                                : f[0] >= s.width()
                                                ? 0.9 * s.width()
                                                : f[0],
                                        h = Math.abs(
                                            e(
                                                "#mCSB_" + o.idx + "_container"
                                            )[0].offsetLeft
                                        ),
                                        g = c[1][0].offsetLeft,
                                        m =
                                            c[1].parent().width() -
                                            c[1].width(),
                                        v =
                                            "y" === r.mouseWheel.axis
                                                ? t.deltaY || i
                                                : t.deltaX;
                                else
                                    var d = "y",
                                        f = [
                                            Math.round(a * o.scrollRatio.y),
                                            parseInt(r.mouseWheel.scrollAmount),
                                        ],
                                        p =
                                            "auto" !== r.mouseWheel.scrollAmount
                                                ? f[1]
                                                : f[0] >= s.height()
                                                ? 0.9 * s.height()
                                                : f[0],
                                        h = Math.abs(
                                            e(
                                                "#mCSB_" + o.idx + "_container"
                                            )[0].offsetTop
                                        ),
                                        g = c[0][0].offsetTop,
                                        m =
                                            c[0].parent().height() -
                                            c[0].height(),
                                        v = t.deltaY || i;
                                ("y" === d && !o.overflowed[0]) ||
                                    ("x" === d && !o.overflowed[1]) ||
                                    ((r.mouseWheel.invert ||
                                        t.webkitDirectionInvertedFromDevice) &&
                                        (v = -v),
                                    r.mouseWheel.normalizeDelta &&
                                        (v = 0 > v ? -1 : 1),
                                    ((v > 0 && 0 !== g) ||
                                        (0 > v && g !== m) ||
                                        r.mouseWheel.preventDefault) &&
                                        (t.stopImmediatePropagation(),
                                        t.preventDefault()),
                                    t.deltaFactor < 5 &&
                                        !r.mouseWheel.normalizeDelta &&
                                        ((p = t.deltaFactor), (u = 17)),
                                    U(n, (h - v * p).toString(), {
                                        dir: d,
                                        dur: u,
                                    }));
                            }
                        }
                        if (e(this).data(i)) {
                            var n = e(this),
                                o = n.data(i),
                                r = o.opt,
                                a = i + "_" + o.idx,
                                s = e("#mCSB_" + o.idx),
                                c = [
                                    e("#mCSB_" + o.idx + "_dragger_vertical"),
                                    e("#mCSB_" + o.idx + "_dragger_horizontal"),
                                ],
                                u = e("#mCSB_" + o.idx + "_container").find(
                                    "iframe"
                                );
                            u.length &&
                                u.each(function () {
                                    e(this).bind("load", function () {
                                        B(this) &&
                                            e(
                                                this.contentDocument ||
                                                    this.contentWindow.document
                                            ).bind(
                                                "mousewheel." + a,
                                                function (e, n) {
                                                    t(e, n);
                                                }
                                            );
                                    });
                                }),
                                s.bind("mousewheel." + a, function (e, n) {
                                    t(e, n);
                                });
                        }
                    },
                    N = new Object(),
                    B = function (t) {
                        var n = !1,
                            i = !1,
                            o = null;
                        if (
                            (void 0 === t
                                ? (i = "#empty")
                                : void 0 !== e(t).attr("id") &&
                                  (i = e(t).attr("id")),
                            !1 !== i && void 0 !== N[i])
                        )
                            return N[i];
                        if (t) {
                            try {
                                var r =
                                    t.contentDocument ||
                                    t.contentWindow.document;
                                o = r.body.innerHTML;
                            } catch (e) {}
                            n = null !== o;
                        } else {
                            try {
                                var r = top.document;
                                o = r.body.innerHTML;
                            } catch (e) {}
                            n = null !== o;
                        }
                        return !1 !== i && (N[i] = n), n;
                    },
                    I = function (e) {
                        var t = this.find("iframe");
                        if (t.length) {
                            var n = e ? "auto" : "none";
                            t.css("pointer-events", n);
                        }
                    },
                    P = function (t, n) {
                        var o = n.nodeName.toLowerCase(),
                            r = t.data(i).opt.mouseWheel.disableOver;
                        return (
                            e.inArray(o, r) > -1 &&
                            !(
                                e.inArray(o, ["select", "textarea"]) > -1 &&
                                !e(n).is(":focus")
                            )
                        );
                    },
                    R = function () {
                        var t,
                            n = e(this),
                            o = n.data(i),
                            r = i + "_" + o.idx,
                            a = e("#mCSB_" + o.idx + "_container"),
                            s = a.parent(),
                            l = e(".mCSB_" + o.idx + "_scrollbar ." + u[12]);
                        l.bind(
                            "mousedown." +
                                r +
                                " touchstart." +
                                r +
                                " pointerdown." +
                                r +
                                " MSPointerDown." +
                                r,
                            function (n) {
                                (c = !0),
                                    e(n.target).hasClass("mCSB_dragger") ||
                                        (t = 1);
                            }
                        )
                            .bind(
                                "touchend." +
                                    r +
                                    " pointerup." +
                                    r +
                                    " MSPointerUp." +
                                    r,
                                function () {
                                    c = !1;
                                }
                            )
                            .bind("click." + r, function (i) {
                                if (
                                    t &&
                                    ((t = 0),
                                    e(i.target).hasClass(u[12]) ||
                                        e(i.target).hasClass(
                                            "mCSB_draggerRail"
                                        ))
                                ) {
                                    Y(n);
                                    var r = e(this),
                                        l = r.find(".mCSB_dragger");
                                    if (
                                        r.parent(".mCSB_scrollTools_horizontal")
                                            .length > 0
                                    ) {
                                        if (!o.overflowed[1]) return;
                                        var c = "x",
                                            d =
                                                i.pageX > l.offset().left
                                                    ? -1
                                                    : 1,
                                            f =
                                                Math.abs(a[0].offsetLeft) -
                                                d * (0.9 * s.width());
                                    } else {
                                        if (!o.overflowed[0]) return;
                                        var c = "y",
                                            d =
                                                i.pageY > l.offset().top
                                                    ? -1
                                                    : 1,
                                            f =
                                                Math.abs(a[0].offsetTop) -
                                                d * (0.9 * s.height());
                                    }
                                    U(n, f.toString(), {
                                        dir: c,
                                        scrollEasing: "mcsEaseInOut",
                                    });
                                }
                            });
                    },
                    H = function () {
                        var t = e(this),
                            n = t.data(i),
                            o = n.opt,
                            r = i + "_" + n.idx,
                            a = e("#mCSB_" + n.idx + "_container"),
                            s = a.parent();
                        a.bind("focusin." + r, function () {
                            var n = e(document.activeElement),
                                i = a.find(".mCustomScrollBox").length;
                            n.is(o.advanced.autoScrollOnFocus) &&
                                (Y(t),
                                clearTimeout(t[0]._focusTimeout),
                                (t[0]._focusTimer = i ? 17 * i : 0),
                                (t[0]._focusTimeout = setTimeout(function () {
                                    var e = [ne(n)[0], ne(n)[1]],
                                        i = [a[0].offsetTop, a[0].offsetLeft],
                                        r = [
                                            i[0] + e[0] >= 0 &&
                                                i[0] + e[0] <
                                                    s.height() -
                                                        n.outerHeight(!1),
                                            i[1] + e[1] >= 0 &&
                                                i[0] + e[1] <
                                                    s.width() -
                                                        n.outerWidth(!1),
                                        ],
                                        l =
                                            "yx" !== o.axis || r[0] || r[1]
                                                ? "all"
                                                : "none";
                                    "x" === o.axis ||
                                        r[0] ||
                                        U(t, e[0].toString(), {
                                            dir: "y",
                                            scrollEasing: "mcsEaseInOut",
                                            overwrite: l,
                                            dur: 0,
                                        }),
                                        "y" === o.axis ||
                                            r[1] ||
                                            U(t, e[1].toString(), {
                                                dir: "x",
                                                scrollEasing: "mcsEaseInOut",
                                                overwrite: l,
                                                dur: 0,
                                            });
                                }, t[0]._focusTimer)));
                        });
                    },
                    j = function () {
                        var t = e(this),
                            n = t.data(i),
                            o = i + "_" + n.idx,
                            r = e("#mCSB_" + n.idx + "_container").parent();
                        r.bind("scroll." + o, function () {
                            (0 === r.scrollTop() && 0 === r.scrollLeft()) ||
                                e(".mCSB_" + n.idx + "_scrollbar").css(
                                    "visibility",
                                    "hidden"
                                );
                        });
                    },
                    q = function () {
                        var t = e(this),
                            n = t.data(i),
                            o = n.opt,
                            r = n.sequential,
                            a = i + "_" + n.idx,
                            s = ".mCSB_" + n.idx + "_scrollbar",
                            l = e(s + ">a");
                        l.bind("contextmenu." + a, function (e) {
                            e.preventDefault();
                        }).bind(
                            "mousedown." +
                                a +
                                " touchstart." +
                                a +
                                " pointerdown." +
                                a +
                                " MSPointerDown." +
                                a +
                                " mouseup." +
                                a +
                                " touchend." +
                                a +
                                " pointerup." +
                                a +
                                " MSPointerUp." +
                                a +
                                " mouseout." +
                                a +
                                " pointerout." +
                                a +
                                " MSPointerOut." +
                                a +
                                " click." +
                                a,
                            function (i) {
                                function a(e, n) {
                                    (r.scrollAmount =
                                        o.scrollButtons.scrollAmount),
                                        W(t, e, n);
                                }
                                if ((i.preventDefault(), J(i))) {
                                    var s = e(this).attr("class");
                                    switch (
                                        ((r.type = o.scrollButtons.scrollType),
                                        i.type)
                                    ) {
                                        case "mousedown":
                                        case "touchstart":
                                        case "pointerdown":
                                        case "MSPointerDown":
                                            if ("stepped" === r.type) return;
                                            (c = !0),
                                                (n.tweenRunning = !1),
                                                a("on", s);
                                            break;
                                        case "mouseup":
                                        case "touchend":
                                        case "pointerup":
                                        case "MSPointerUp":
                                        case "mouseout":
                                        case "pointerout":
                                        case "MSPointerOut":
                                            if ("stepped" === r.type) return;
                                            (c = !1), r.dir && a("off", s);
                                            break;
                                        case "click":
                                            if (
                                                "stepped" !== r.type ||
                                                n.tweenRunning
                                            )
                                                return;
                                            a("on", s);
                                    }
                                }
                            }
                        );
                    },
                    z = function () {
                        function t(t) {
                            function i(e, t) {
                                (a.type = r.keyboard.scrollType),
                                    (a.scrollAmount = r.keyboard.scrollAmount),
                                    ("stepped" === a.type && o.tweenRunning) ||
                                        W(n, e, t);
                            }
                            switch (t.type) {
                                case "blur":
                                    o.tweenRunning && a.dir && i("off", null);
                                    break;
                                case "keydown":
                                case "keyup":
                                    var s = t.keyCode ? t.keyCode : t.which,
                                        l = "on";
                                    if (
                                        ("x" !== r.axis &&
                                            (38 === s || 40 === s)) ||
                                        ("y" !== r.axis &&
                                            (37 === s || 39 === s))
                                    ) {
                                        if (
                                            ((38 === s || 40 === s) &&
                                                !o.overflowed[0]) ||
                                            ((37 === s || 39 === s) &&
                                                !o.overflowed[1])
                                        )
                                            return;
                                        "keyup" === t.type && (l = "off"),
                                            e(document.activeElement).is(d) ||
                                                (t.preventDefault(),
                                                t.stopImmediatePropagation(),
                                                i(l, s));
                                    } else if (33 === s || 34 === s) {
                                        if (
                                            ((o.overflowed[0] ||
                                                o.overflowed[1]) &&
                                                (t.preventDefault(),
                                                t.stopImmediatePropagation()),
                                            "keyup" === t.type)
                                        ) {
                                            Y(n);
                                            var f = 34 === s ? -1 : 1;
                                            if (
                                                "x" === r.axis ||
                                                ("yx" === r.axis &&
                                                    o.overflowed[1] &&
                                                    !o.overflowed[0])
                                            )
                                                var p = "x",
                                                    h =
                                                        Math.abs(
                                                            c[0].offsetLeft
                                                        ) -
                                                        f * (0.9 * u.width());
                                            else
                                                var p = "y",
                                                    h =
                                                        Math.abs(
                                                            c[0].offsetTop
                                                        ) -
                                                        f * (0.9 * u.height());
                                            U(n, h.toString(), {
                                                dir: p,
                                                scrollEasing: "mcsEaseInOut",
                                            });
                                        }
                                    } else if (
                                        (35 === s || 36 === s) &&
                                        !e(document.activeElement).is(d) &&
                                        ((o.overflowed[0] || o.overflowed[1]) &&
                                            (t.preventDefault(),
                                            t.stopImmediatePropagation()),
                                        "keyup" === t.type)
                                    ) {
                                        if (
                                            "x" === r.axis ||
                                            ("yx" === r.axis &&
                                                o.overflowed[1] &&
                                                !o.overflowed[0])
                                        )
                                            var p = "x",
                                                h =
                                                    35 === s
                                                        ? Math.abs(
                                                              u.width() -
                                                                  c.outerWidth(
                                                                      !1
                                                                  )
                                                          )
                                                        : 0;
                                        else
                                            var p = "y",
                                                h =
                                                    35 === s
                                                        ? Math.abs(
                                                              u.height() -
                                                                  c.outerHeight(
                                                                      !1
                                                                  )
                                                          )
                                                        : 0;
                                        U(n, h.toString(), {
                                            dir: p,
                                            scrollEasing: "mcsEaseInOut",
                                        });
                                    }
                            }
                        }
                        var n = e(this),
                            o = n.data(i),
                            r = o.opt,
                            a = o.sequential,
                            s = i + "_" + o.idx,
                            l = e("#mCSB_" + o.idx),
                            c = e("#mCSB_" + o.idx + "_container"),
                            u = c.parent(),
                            d =
                                "input,textarea,select,datalist,keygen,[contenteditable='true']",
                            f = c.find("iframe"),
                            p = ["blur." + s + " keydown." + s + " keyup." + s];
                        f.length &&
                            f.each(function () {
                                e(this).bind("load", function () {
                                    B(this) &&
                                        e(
                                            this.contentDocument ||
                                                this.contentWindow.document
                                        ).bind(p[0], function (e) {
                                            t(e);
                                        });
                                });
                            }),
                            l.attr("tabindex", "0").bind(p[0], function (e) {
                                t(e);
                            });
                    },
                    W = function (t, n, o, r, a) {
                        function s(e) {
                            c.snapAmount &&
                                (d.scrollAmount =
                                    c.snapAmount instanceof Array
                                        ? "x" === d.dir[0]
                                            ? c.snapAmount[1]
                                            : c.snapAmount[0]
                                        : c.snapAmount);
                            var n = "stepped" !== d.type,
                                i = a || (e ? (n ? h / 1.5 : g) : 1e3 / 60),
                                o = e ? (n ? 7.5 : 40) : 2.5,
                                u = [
                                    Math.abs(f[0].offsetTop),
                                    Math.abs(f[0].offsetLeft),
                                ],
                                p = [
                                    l.scrollRatio.y > 10 ? 10 : l.scrollRatio.y,
                                    l.scrollRatio.x > 10 ? 10 : l.scrollRatio.x,
                                ],
                                m =
                                    "x" === d.dir[0]
                                        ? u[1] + d.dir[1] * (p[1] * o)
                                        : u[0] + d.dir[1] * (p[0] * o),
                                v =
                                    "x" === d.dir[0]
                                        ? u[1] +
                                          d.dir[1] * parseInt(d.scrollAmount)
                                        : u[0] +
                                          d.dir[1] * parseInt(d.scrollAmount),
                                y = "auto" !== d.scrollAmount ? v : m,
                                b =
                                    r ||
                                    (e
                                        ? n
                                            ? "mcsLinearOut"
                                            : "mcsEaseInOut"
                                        : "mcsLinear"),
                                x = !!e;
                            return (
                                e &&
                                    17 > i &&
                                    (y = "x" === d.dir[0] ? u[1] : u[0]),
                                U(t, y.toString(), {
                                    dir: d.dir[0],
                                    scrollEasing: b,
                                    dur: i,
                                    onComplete: x,
                                }),
                                e
                                    ? void (d.dir = !1)
                                    : (clearTimeout(d.step),
                                      void (d.step = setTimeout(function () {
                                          s();
                                      }, i)))
                            );
                        }
                        var l = t.data(i),
                            c = l.opt,
                            d = l.sequential,
                            f = e("#mCSB_" + l.idx + "_container"),
                            p = "stepped" === d.type,
                            h = c.scrollInertia < 26 ? 26 : c.scrollInertia,
                            g = c.scrollInertia < 1 ? 17 : c.scrollInertia;
                        switch (n) {
                            case "on":
                                if (
                                    ((d.dir = [
                                        o === u[16] ||
                                        o === u[15] ||
                                        39 === o ||
                                        37 === o
                                            ? "x"
                                            : "y",
                                        o === u[13] ||
                                        o === u[15] ||
                                        38 === o ||
                                        37 === o
                                            ? -1
                                            : 1,
                                    ]),
                                    Y(t),
                                    te(o) && "stepped" === d.type)
                                )
                                    return;
                                s(p);
                                break;
                            case "off":
                                clearTimeout(d.step),
                                    Q(d, "step"),
                                    Y(t),
                                    (p || (l.tweenRunning && d.dir)) && s(!0);
                        }
                    },
                    F = function (t) {
                        var n = e(this).data(i).opt,
                            o = [];
                        return (
                            "function" == typeof t && (t = t()),
                            t instanceof Array
                                ? (o =
                                      t.length > 1
                                          ? [t[0], t[1]]
                                          : "x" === n.axis
                                          ? [null, t[0]]
                                          : [t[0], null])
                                : ((o[0] = t.y
                                      ? t.y
                                      : t.x || "x" === n.axis
                                      ? null
                                      : t),
                                  (o[1] = t.x
                                      ? t.x
                                      : t.y || "y" === n.axis
                                      ? null
                                      : t)),
                            "function" == typeof o[0] && (o[0] = o[0]()),
                            "function" == typeof o[1] && (o[1] = o[1]()),
                            o
                        );
                    },
                    X = function (t, n) {
                        if (null != t && void 0 !== t) {
                            var o = e(this),
                                r = o.data(i),
                                a = r.opt,
                                s = e("#mCSB_" + r.idx + "_container"),
                                l = s.parent(),
                                c = typeof t;
                            n || (n = "x" === a.axis ? "x" : "y");
                            var u =
                                    "x" === n
                                        ? s.outerWidth(!1) - l.width()
                                        : s.outerHeight(!1) - l.height(),
                                f =
                                    "x" === n
                                        ? s[0].offsetLeft
                                        : s[0].offsetTop,
                                p = "x" === n ? "left" : "top";
                            switch (c) {
                                case "function":
                                    return t();
                                case "object":
                                    var h = t.jquery ? t : e(t);
                                    if (!h.length) return;
                                    return "x" === n ? ne(h)[1] : ne(h)[0];
                                case "string":
                                case "number":
                                    if (te(t)) return Math.abs(t);
                                    if (-1 !== t.indexOf("%"))
                                        return Math.abs(
                                            (u * parseInt(t)) / 100
                                        );
                                    if (-1 !== t.indexOf("-="))
                                        return Math.abs(
                                            f - parseInt(t.split("-=")[1])
                                        );
                                    if (-1 !== t.indexOf("+=")) {
                                        var g = f + parseInt(t.split("+=")[1]);
                                        return g >= 0 ? 0 : Math.abs(g);
                                    }
                                    if (
                                        -1 !== t.indexOf("px") &&
                                        te(t.split("px")[0])
                                    )
                                        return Math.abs(t.split("px")[0]);
                                    if ("top" === t || "left" === t) return 0;
                                    if ("bottom" === t)
                                        return Math.abs(
                                            l.height() - s.outerHeight(!1)
                                        );
                                    if ("right" === t)
                                        return Math.abs(
                                            l.width() - s.outerWidth(!1)
                                        );
                                    if ("first" === t || "last" === t) {
                                        var h = s.find(":" + t);
                                        return "x" === n ? ne(h)[1] : ne(h)[0];
                                    }
                                    return e(t).length
                                        ? "x" === n
                                            ? ne(e(t))[1]
                                            : ne(e(t))[0]
                                        : (s.css(p, t),
                                          void d.update.call(null, o[0]));
                            }
                        }
                    },
                    V = function (t) {
                        function n(e) {
                            clearTimeout(s[0].autoUpdate),
                                d.update.call(null, o[0], e);
                        }
                        var o = e(this),
                            r = o.data(i),
                            a = r.opt,
                            s = e("#mCSB_" + r.idx + "_container");
                        return t
                            ? (clearTimeout(s[0].autoUpdate),
                              void Q(s[0], "autoUpdate"))
                            : void (function t() {
                                  return (
                                      clearTimeout(s[0].autoUpdate),
                                      0 === o.parents("html").length
                                          ? void (o = null)
                                          : void (s[0].autoUpdate = setTimeout(
                                                function () {
                                                    return a.advanced
                                                        .updateOnSelectorChange &&
                                                        ((r.poll.change.n =
                                                            (function () {
                                                                !0 ===
                                                                    a.advanced
                                                                        .updateOnSelectorChange &&
                                                                    (a.advanced.updateOnSelectorChange =
                                                                        "*");
                                                                var e = 0,
                                                                    t = s.find(
                                                                        a
                                                                            .advanced
                                                                            .updateOnSelectorChange
                                                                    );
                                                                return (
                                                                    a.advanced
                                                                        .updateOnSelectorChange &&
                                                                        t.length >
                                                                            0 &&
                                                                        t.each(
                                                                            function () {
                                                                                e +=
                                                                                    this
                                                                                        .offsetHeight +
                                                                                    this
                                                                                        .offsetWidth;
                                                                            }
                                                                        ),
                                                                    e
                                                                );
                                                            })()),
                                                        r.poll.change.n !==
                                                            r.poll.change.o)
                                                        ? ((r.poll.change.o =
                                                              r.poll.change.n),
                                                          void n(3))
                                                        : a.advanced
                                                              .updateOnContentResize &&
                                                          ((r.poll.size.n =
                                                              o[0]
                                                                  .scrollHeight +
                                                              o[0].scrollWidth +
                                                              s[0]
                                                                  .offsetHeight +
                                                              o[0]
                                                                  .offsetHeight +
                                                              o[0].offsetWidth),
                                                          r.poll.size.n !==
                                                              r.poll.size.o)
                                                        ? ((r.poll.size.o =
                                                              r.poll.size.n),
                                                          void n(1))
                                                        : !a.advanced
                                                              .updateOnImageLoad ||
                                                          ("auto" ===
                                                              a.advanced
                                                                  .updateOnImageLoad &&
                                                              "y" === a.axis) ||
                                                          ((r.poll.img.n =
                                                              s.find(
                                                                  "img"
                                                              ).length),
                                                          r.poll.img.n ===
                                                              r.poll.img.o)
                                                        ? void (
                                                              (a.advanced
                                                                  .updateOnSelectorChange ||
                                                                  a.advanced
                                                                      .updateOnContentResize ||
                                                                  a.advanced
                                                                      .updateOnImageLoad) &&
                                                              t()
                                                          )
                                                        : ((r.poll.img.o =
                                                              r.poll.img.n),
                                                          void s
                                                              .find("img")
                                                              .each(
                                                                  function () {
                                                                      !(function (
                                                                          t
                                                                      ) {
                                                                          if (
                                                                              e(
                                                                                  t
                                                                              ).hasClass(
                                                                                  u[2]
                                                                              )
                                                                          )
                                                                              n();
                                                                          else {
                                                                              var i =
                                                                                  new Image();
                                                                              (i.onload =
                                                                                  (function (
                                                                                      e,
                                                                                      t
                                                                                  ) {
                                                                                      return function () {
                                                                                          return t.apply(
                                                                                              e,
                                                                                              arguments
                                                                                          );
                                                                                      };
                                                                                  })(
                                                                                      i,
                                                                                      function () {
                                                                                          (this.onload =
                                                                                              null),
                                                                                              e(
                                                                                                  t
                                                                                              ).addClass(
                                                                                                  u[2]
                                                                                              ),
                                                                                              n(
                                                                                                  2
                                                                                              );
                                                                                      }
                                                                                  )),
                                                                                  (i.src =
                                                                                      t.src);
                                                                          }
                                                                      })(this);
                                                                  }
                                                              ));
                                                },
                                                a.advanced.autoUpdateTimeout
                                            ))
                                  );
                              })();
                    },
                    Y = function (t) {
                        var n = t.data(i),
                            o = e(
                                "#mCSB_" +
                                    n.idx +
                                    "_container,#mCSB_" +
                                    n.idx +
                                    "_container_wrapper,#mCSB_" +
                                    n.idx +
                                    "_dragger_vertical,#mCSB_" +
                                    n.idx +
                                    "_dragger_horizontal"
                            );
                        o.each(function () {
                            K.call(this);
                        });
                    },
                    U = function (t, n, o) {
                        function r(e) {
                            return (
                                s &&
                                l.callbacks[e] &&
                                "function" == typeof l.callbacks[e]
                            );
                        }

                        function a() {
                            var e = [f[0].offsetTop, f[0].offsetLeft],
                                n = [v[0].offsetTop, v[0].offsetLeft],
                                i = [f.outerHeight(!1), f.outerWidth(!1)],
                                r = [d.height(), d.width()];
                            t[0].mcs = {
                                content: f,
                                top: e[0],
                                left: e[1],
                                draggerTop: n[0],
                                draggerLeft: n[1],
                                topPct: Math.round(
                                    (100 * Math.abs(e[0])) /
                                        (Math.abs(i[0]) - r[0])
                                ),
                                leftPct: Math.round(
                                    (100 * Math.abs(e[1])) /
                                        (Math.abs(i[1]) - r[1])
                                ),
                                direction: o.dir,
                            };
                        }
                        var s = t.data(i),
                            l = s.opt,
                            c = {
                                trigger: "internal",
                                dir: "y",
                                scrollEasing: "mcsEaseOut",
                                drag: !1,
                                dur: l.scrollInertia,
                                overwrite: "all",
                                callbacks: !0,
                                onStart: !0,
                                onUpdate: !0,
                                onComplete: !0,
                            },
                            o = e.extend(c, o),
                            u = [o.dur, o.drag ? 0 : o.dur],
                            d = e("#mCSB_" + s.idx),
                            f = e("#mCSB_" + s.idx + "_container"),
                            p = f.parent(),
                            h = l.callbacks.onTotalScrollOffset
                                ? F.call(t, l.callbacks.onTotalScrollOffset)
                                : [0, 0],
                            g = l.callbacks.onTotalScrollBackOffset
                                ? F.call(t, l.callbacks.onTotalScrollBackOffset)
                                : [0, 0];
                        if (
                            ((s.trigger = o.trigger),
                            (0 === p.scrollTop() && 0 === p.scrollLeft()) ||
                                (e(".mCSB_" + s.idx + "_scrollbar").css(
                                    "visibility",
                                    "visible"
                                ),
                                p.scrollTop(0).scrollLeft(0)),
                            "_resetY" !== n ||
                                s.contentReset.y ||
                                (r("onOverflowYNone") &&
                                    l.callbacks.onOverflowYNone.call(t[0]),
                                (s.contentReset.y = 1)),
                            "_resetX" !== n ||
                                s.contentReset.x ||
                                (r("onOverflowXNone") &&
                                    l.callbacks.onOverflowXNone.call(t[0]),
                                (s.contentReset.x = 1)),
                            "_resetY" !== n && "_resetX" !== n)
                        ) {
                            if (
                                ((!s.contentReset.y && t[0].mcs) ||
                                    !s.overflowed[0] ||
                                    (r("onOverflowY") &&
                                        l.callbacks.onOverflowY.call(t[0]),
                                    (s.contentReset.x = null)),
                                (!s.contentReset.x && t[0].mcs) ||
                                    !s.overflowed[1] ||
                                    (r("onOverflowX") &&
                                        l.callbacks.onOverflowX.call(t[0]),
                                    (s.contentReset.x = null)),
                                l.snapAmount)
                            ) {
                                var m =
                                    l.snapAmount instanceof Array
                                        ? "x" === o.dir
                                            ? l.snapAmount[1]
                                            : l.snapAmount[0]
                                        : l.snapAmount;
                                n = (function (e, t, n) {
                                    return Math.round(e / t) * t - n;
                                })(n, m, l.snapOffset);
                            }
                            switch (o.dir) {
                                case "x":
                                    var v = e(
                                            "#mCSB_" +
                                                s.idx +
                                                "_dragger_horizontal"
                                        ),
                                        y = "left",
                                        b = f[0].offsetLeft,
                                        x = [
                                            d.width() - f.outerWidth(!1),
                                            v.parent().width() - v.width(),
                                        ],
                                        w = [
                                            n,
                                            0 === n ? 0 : n / s.scrollRatio.x,
                                        ],
                                        S = h[1],
                                        $ = g[1],
                                        _ = S > 0 ? S / s.scrollRatio.x : 0,
                                        T = $ > 0 ? $ / s.scrollRatio.x : 0;
                                    break;
                                case "y":
                                    var v = e(
                                            "#mCSB_" +
                                                s.idx +
                                                "_dragger_vertical"
                                        ),
                                        y = "top",
                                        b = f[0].offsetTop,
                                        x = [
                                            d.height() - f.outerHeight(!1),
                                            v.parent().height() - v.height(),
                                        ],
                                        w = [
                                            n,
                                            0 === n ? 0 : n / s.scrollRatio.y,
                                        ],
                                        S = h[0],
                                        $ = g[0],
                                        _ = S > 0 ? S / s.scrollRatio.y : 0,
                                        T = $ > 0 ? $ / s.scrollRatio.y : 0;
                            }
                            w[1] < 0 || (0 === w[0] && 0 === w[1])
                                ? (w = [0, 0])
                                : w[1] >= x[1]
                                ? (w = [x[0], x[1]])
                                : (w[0] = -w[0]),
                                t[0].mcs ||
                                    (a(),
                                    r("onInit") &&
                                        l.callbacks.onInit.call(t[0])),
                                clearTimeout(f[0].onCompleteTimeout),
                                G(
                                    v[0],
                                    y,
                                    Math.round(w[1]),
                                    u[1],
                                    o.scrollEasing
                                ),
                                (!s.tweenRunning &&
                                    ((0 === b && w[0] >= 0) ||
                                        (b === x[0] && w[0] <= x[0]))) ||
                                    G(
                                        f[0],
                                        y,
                                        Math.round(w[0]),
                                        u[0],
                                        o.scrollEasing,
                                        o.overwrite,
                                        {
                                            onStart: function () {
                                                o.callbacks &&
                                                    o.onStart &&
                                                    !s.tweenRunning &&
                                                    (r("onScrollStart") &&
                                                        (a(),
                                                        l.callbacks.onScrollStart.call(
                                                            t[0]
                                                        )),
                                                    (s.tweenRunning = !0),
                                                    C(v),
                                                    (s.cbOffsets = [
                                                        l.callbacks
                                                            .alwaysTriggerOffsets ||
                                                            b >= x[0] + S,
                                                        l.callbacks
                                                            .alwaysTriggerOffsets ||
                                                            -$ >= b,
                                                    ]));
                                            },
                                            onUpdate: function () {
                                                o.callbacks &&
                                                    o.onUpdate &&
                                                    r("whileScrolling") &&
                                                    (a(),
                                                    l.callbacks.whileScrolling.call(
                                                        t[0]
                                                    ));
                                            },
                                            onComplete: function () {
                                                if (
                                                    o.callbacks &&
                                                    o.onComplete
                                                ) {
                                                    "yx" === l.axis &&
                                                        clearTimeout(
                                                            f[0]
                                                                .onCompleteTimeout
                                                        );
                                                    var e = f[0].idleTimer || 0;
                                                    f[0].onCompleteTimeout =
                                                        setTimeout(function () {
                                                            r("onScroll") &&
                                                                (a(),
                                                                l.callbacks.onScroll.call(
                                                                    t[0]
                                                                )),
                                                                r(
                                                                    "onTotalScroll"
                                                                ) &&
                                                                    w[1] >=
                                                                        x[1] -
                                                                            _ &&
                                                                    s
                                                                        .cbOffsets[0] &&
                                                                    (a(),
                                                                    l.callbacks.onTotalScroll.call(
                                                                        t[0]
                                                                    )),
                                                                r(
                                                                    "onTotalScrollBack"
                                                                ) &&
                                                                    w[1] <= T &&
                                                                    s
                                                                        .cbOffsets[1] &&
                                                                    (a(),
                                                                    l.callbacks.onTotalScrollBack.call(
                                                                        t[0]
                                                                    )),
                                                                (s.tweenRunning =
                                                                    !1),
                                                                (f[0].idleTimer = 0),
                                                                C(v, "hide");
                                                        }, e);
                                                }
                                            },
                                        }
                                    );
                        }
                    },
                    G = function (e, t, n, i, o, r, a) {
                        function s() {
                            y.stop ||
                                (g || d.call(),
                                (g = Z() - h),
                                l(),
                                g >= y.time &&
                                    ((y.time =
                                        g > y.time
                                            ? g + c - (g - y.time)
                                            : g + c - 1),
                                    y.time < g + 1 && (y.time = g + 1)),
                                y.time < i ? (y.id = u(s)) : p.call());
                        }

                        function l() {
                            i > 0
                                ? ((y.currVal = (function (e, t, n, i, o) {
                                      switch (o) {
                                          case "linear":
                                          case "mcsLinear":
                                              return (n * e) / i + t;
                                          case "mcsLinearOut":
                                              return (
                                                  (e /= i),
                                                  e--,
                                                  n * Math.sqrt(1 - e * e) + t
                                              );
                                          case "easeInOutSmooth":
                                              return 1 > (e /= i / 2)
                                                  ? (n / 2) * e * e + t
                                                  : (-n / 2) *
                                                        (--e * (e - 2) - 1) +
                                                        t;
                                          case "easeInOutStrong":
                                              return 1 > (e /= i / 2)
                                                  ? (n / 2) *
                                                        Math.pow(
                                                            2,
                                                            10 * (e - 1)
                                                        ) +
                                                        t
                                                  : (e--,
                                                    (n / 2) *
                                                        (2 -
                                                            Math.pow(
                                                                2,
                                                                -10 * e
                                                            )) +
                                                        t);
                                          case "easeInOut":
                                          case "mcsEaseInOut":
                                              return 1 > (e /= i / 2)
                                                  ? (n / 2) * e * e * e + t
                                                  : (n / 2) *
                                                        ((e -= 2) * e * e + 2) +
                                                        t;
                                          case "easeOutSmooth":
                                              return (
                                                  (e /= i),
                                                  -n * (--e * e * e * e - 1) + t
                                              );
                                          case "easeOutStrong":
                                              return (
                                                  n *
                                                      (1 -
                                                          Math.pow(
                                                              2,
                                                              (-10 * e) / i
                                                          )) +
                                                  t
                                              );
                                          case "easeOut":
                                          case "mcsEaseOut":
                                          default:
                                              var r = (e /= i) * e,
                                                  a = r * e;
                                              return (
                                                  t +
                                                  n *
                                                      (0.499999999999997 *
                                                          a *
                                                          r +
                                                          -2.5 * r * r +
                                                          5.5 * a +
                                                          -6.5 * r +
                                                          4 * e)
                                              );
                                      }
                                  })(y.time, m, b, i, o)),
                                  (v[t] = Math.round(y.currVal) + "px"))
                                : (v[t] = n + "px"),
                                f.call();
                        }
                        e._mTween ||
                            (e._mTween = {
                                top: {},
                                left: {},
                            });
                        var c,
                            u,
                            a = a || {},
                            d = a.onStart || function () {},
                            f = a.onUpdate || function () {},
                            p = a.onComplete || function () {},
                            h = Z(),
                            g = 0,
                            m = e.offsetTop,
                            v = e.style,
                            y = e._mTween[t];
                        "left" === t && (m = e.offsetLeft);
                        var b = n - m;
                        (y.stop = 0),
                            "none" !== r &&
                                null != y.id &&
                                (window.requestAnimationFrame
                                    ? window.cancelAnimationFrame(y.id)
                                    : clearTimeout(y.id),
                                (y.id = null)),
                            (c = 1e3 / 60),
                            (y.time = g + c),
                            (u = window.requestAnimationFrame
                                ? window.requestAnimationFrame
                                : function (e) {
                                      return l(), setTimeout(e, 0.01);
                                  }),
                            (y.id = u(s));
                    },
                    Z = function () {
                        return window.performance && window.performance.now
                            ? window.performance.now()
                            : window.performance && window.performance.webkitNow
                            ? window.performance.webkitNow()
                            : Date.now
                            ? Date.now()
                            : new Date().getTime();
                    },
                    K = function () {
                        var e = this;
                        e._mTween ||
                            (e._mTween = {
                                top: {},
                                left: {},
                            });
                        for (
                            var t = ["top", "left"], n = 0;
                            n < t.length;
                            n++
                        ) {
                            var i = t[n];
                            e._mTween[i].id &&
                                (window.requestAnimationFrame
                                    ? window.cancelAnimationFrame(
                                          e._mTween[i].id
                                      )
                                    : clearTimeout(e._mTween[i].id),
                                (e._mTween[i].id = null),
                                (e._mTween[i].stop = 1));
                        }
                    },
                    Q = function (e, t) {
                        try {
                            delete e[t];
                        } catch (n) {
                            e[t] = null;
                        }
                    },
                    J = function (e) {
                        return !(e.which && 1 !== e.which);
                    },
                    ee = function (e) {
                        var t = e.originalEvent.pointerType;
                        return !(t && "touch" !== t && 2 !== t);
                    },
                    te = function (e) {
                        return !isNaN(parseFloat(e)) && isFinite(e);
                    },
                    ne = function (e) {
                        var t = e.parents(".mCSB_container");
                        return [
                            e.offset().top - t.offset().top,
                            e.offset().left - t.offset().left,
                        ];
                    },
                    ie = function () {
                        var e = (function () {
                            var e = ["webkit", "moz", "ms", "o"];
                            if ("hidden" in document) return "hidden";
                            for (var t = 0; t < e.length; t++)
                                if (e[t] + "Hidden" in document)
                                    return e[t] + "Hidden";
                            return null;
                        })();
                        return !!e && document[e];
                    };
                (e.fn[n] = function (t) {
                    return d[t]
                        ? d[t].apply(
                              this,
                              Array.prototype.slice.call(arguments, 1)
                          )
                        : "object" != typeof t && t
                        ? void e.error("Method " + t + " does not exist")
                        : d.init.apply(this, arguments);
                }),
                    (e[n] = function (t) {
                        return d[t]
                            ? d[t].apply(
                                  this,
                                  Array.prototype.slice.call(arguments, 1)
                              )
                            : "object" != typeof t && t
                            ? void e.error("Method " + t + " does not exist")
                            : d.init.apply(this, arguments);
                    }),
                    (e[n].defaults = r),
                    (window[n] = !0),
                    e(window).bind("load", function () {
                        e(o)[n](),
                            e.extend(e.expr[":"], {
                                mcsInView:
                                    e.expr[":"].mcsInView ||
                                    function (t) {
                                        var n,
                                            i,
                                            o = e(t),
                                            r = o.parents(".mCSB_container");
                                        if (r.length)
                                            return (
                                                (n = r.parent()),
                                                (i = [
                                                    r[0].offsetTop,
                                                    r[0].offsetLeft,
                                                ])[0] +
                                                    ne(o)[0] >=
                                                    0 &&
                                                    i[0] + ne(o)[0] <
                                                        n.height() -
                                                            o.outerHeight(!1) &&
                                                    i[1] + ne(o)[1] >= 0 &&
                                                    i[1] + ne(o)[1] <
                                                        n.width() -
                                                            o.outerWidth(!1)
                                            );
                                    },
                                mcsInSight:
                                    e.expr[":"].mcsInSight ||
                                    function (t, n, i) {
                                        var o,
                                            r,
                                            a,
                                            s,
                                            l = e(t),
                                            c = l.parents(".mCSB_container"),
                                            u =
                                                "exact" === i[3]
                                                    ? [
                                                          [1, 0],
                                                          [1, 0],
                                                      ]
                                                    : [
                                                          [0.9, 0.1],
                                                          [0.6, 0.4],
                                                      ];
                                        if (c.length)
                                            return (
                                                (o = [
                                                    l.outerHeight(!1),
                                                    l.outerWidth(!1),
                                                ]),
                                                (a = [
                                                    c[0].offsetTop + ne(l)[0],
                                                    c[0].offsetLeft + ne(l)[1],
                                                ]),
                                                (r = [
                                                    c.parent()[0].offsetHeight,
                                                    c.parent()[0].offsetWidth,
                                                ]),
                                                a[0] -
                                                    r[0] *
                                                        (s = [
                                                            o[0] < r[0]
                                                                ? u[0]
                                                                : u[1],
                                                            o[1] < r[1]
                                                                ? u[0]
                                                                : u[1],
                                                        ])[0][0] <
                                                    0 &&
                                                    a[0] +
                                                        o[0] -
                                                        r[0] * s[0][1] >=
                                                        0 &&
                                                    a[1] - r[1] * s[1][0] < 0 &&
                                                    a[1] +
                                                        o[1] -
                                                        r[1] * s[1][1] >=
                                                        0
                                            );
                                    },
                                mcsOverflow:
                                    e.expr[":"].mcsOverflow ||
                                    function (t) {
                                        var n = e(t).data(i);
                                        if (n)
                                            return (
                                                n.overflowed[0] ||
                                                n.overflowed[1]
                                            );
                                    },
                            });
                    });
            })();
    }),
    ("function" == typeof define && define.amd
        ? define
        : function (e, t) {
              "undefined" != typeof module && module.exports
                  ? (module.exports = t(require("jquery")))
                  : (window.toastr = t(window.jQuery));
          })(["jquery"], function (e) {
        return (function () {
            function t(t, n) {
                return (
                    t || (t = a()),
                    (l = e("#" + t.containerId)).length
                        ? l
                        : (n &&
                              (l = (function (t) {
                                  return (
                                      (l = e("<div/>")
                                          .attr("id", t.containerId)
                                          .addClass(t.positionClass)
                                          .attr("aria-live", "polite")
                                          .attr("role", "alert")).appendTo(
                                          e(t.target)
                                      ),
                                      l
                                  );
                              })(t)),
                          l)
                );
            }

            function n(t) {
                for (var n = l.children(), o = n.length - 1; o >= 0; o--)
                    i(e(n[o]), t);
            }

            function i(t, n, i) {
                var o = !(!i || !i.force) && i.force;
                return !(
                    !t ||
                    (!o && 0 !== e(":focus", t).length) ||
                    (t[n.hideMethod]({
                        duration: n.hideDuration,
                        easing: n.hideEasing,
                        complete: function () {
                            s(t);
                        },
                    }),
                    0)
                );
            }

            function o(e) {
                c && c(e);
            }

            function r(n) {
                function i(e) {
                    return (
                        null == e && (e = ""),
                        new String(e)
                            .replace(/&/g, "&amp;")
                            .replace(/"/g, "&quot;")
                            .replace(/'/g, "&#39;")
                            .replace(/</g, "&lt;")
                            .replace(/>/g, "&gt;")
                    );
                }

                function r(t) {
                    var n =
                            t && !1 !== h.closeMethod
                                ? h.closeMethod
                                : h.hideMethod,
                        i =
                            t && !1 !== h.closeDuration
                                ? h.closeDuration
                                : h.hideDuration,
                        r =
                            t && !1 !== h.closeEasing
                                ? h.closeEasing
                                : h.hideEasing;
                    return !e(":focus", v).length || t
                        ? (clearTimeout(S.intervalId),
                          v[n]({
                              duration: i,
                              easing: r,
                              complete: function () {
                                  s(v),
                                      h.onHidden &&
                                          "hidden" !== C.state &&
                                          h.onHidden(),
                                      (C.state = "hidden"),
                                      (C.endTime = new Date()),
                                      o(C);
                              },
                          }))
                        : void 0;
                }

                function c() {
                    (h.timeOut > 0 || h.extendedTimeOut > 0) &&
                        ((m = setTimeout(r, h.extendedTimeOut)),
                        (S.maxHideTime = parseFloat(h.extendedTimeOut)),
                        (S.hideEta = new Date().getTime() + S.maxHideTime));
                }

                function f() {
                    clearTimeout(m),
                        (S.hideEta = 0),
                        v.stop(!0, !0)[h.showMethod]({
                            duration: h.showDuration,
                            easing: h.showEasing,
                        });
                }

                function p() {
                    var e =
                        ((S.hideEta - new Date().getTime()) / S.maxHideTime) *
                        100;
                    x.width(e + "%");
                }
                var h = a(),
                    g = n.iconClass || h.iconClass;
                if (
                    (void 0 !== n.optionsOverride &&
                        ((h = e.extend(h, n.optionsOverride)),
                        (g = n.optionsOverride.iconClass || g)),
                    !(function (e, t) {
                        if (e.preventDuplicates) {
                            if (t.message === u) return !0;
                            u = t.message;
                        }
                        return !1;
                    })(h, n))
                ) {
                    d++, (l = t(h, !0));
                    var m = null,
                        v = e("<div/>"),
                        y = e("<div/>"),
                        b = e("<div/>"),
                        x = e("<div/>"),
                        w = e(h.closeHtml),
                        S = {
                            intervalId: null,
                            hideEta: null,
                            maxHideTime: null,
                        },
                        C = {
                            toastId: d,
                            state: "visible",
                            startTime: new Date(),
                            options: h,
                            map: n,
                        };
                    return (
                        n.iconClass && v.addClass(h.toastClass).addClass(g),
                        n.title &&
                            (y
                                .append(h.escapeHtml ? i(n.title) : n.title)
                                .addClass(h.titleClass),
                            v.append(y)),
                        n.message &&
                            (b
                                .append(h.escapeHtml ? i(n.message) : n.message)
                                .addClass(h.messageClass),
                            v.append(b)),
                        h.closeButton &&
                            (w
                                .addClass("toast-close-button")
                                .attr("role", "button"),
                            v.prepend(w)),
                        h.progressBar &&
                            (x.addClass("toast-progress"), v.prepend(x)),
                        h.newestOnTop ? l.prepend(v) : l.append(v),
                        v.hide(),
                        v[h.showMethod]({
                            duration: h.showDuration,
                            easing: h.showEasing,
                            complete: h.onShown,
                        }),
                        h.timeOut > 0 &&
                            ((m = setTimeout(r, h.timeOut)),
                            (S.maxHideTime = parseFloat(h.timeOut)),
                            (S.hideEta = new Date().getTime() + S.maxHideTime),
                            h.progressBar &&
                                (S.intervalId = setInterval(p, 10))),
                        v.hover(f, c),
                        !h.onclick && h.tapToDismiss && v.click(r),
                        h.closeButton &&
                            w &&
                            w.click(function (e) {
                                e.stopPropagation
                                    ? e.stopPropagation()
                                    : void 0 !== e.cancelBubble &&
                                      !0 !== e.cancelBubble &&
                                      (e.cancelBubble = !0),
                                    r(!0);
                            }),
                        h.onclick &&
                            v.click(function (e) {
                                h.onclick(e), r();
                            }),
                        o(C),
                        h.debug && console && console.log(C),
                        v
                    );
                }
            }

            function a() {
                return e.extend(
                    {},
                    {
                        tapToDismiss: !0,
                        toastClass: "toast",
                        containerId: "toast-container",
                        debug: !1,
                        showMethod: "fadeIn",
                        showDuration: 300,
                        showEasing: "swing",
                        onShown: void 0,
                        hideMethod: "fadeOut",
                        hideDuration: 1e3,
                        hideEasing: "swing",
                        onHidden: void 0,
                        closeMethod: !1,
                        closeDuration: !1,
                        closeEasing: !1,
                        extendedTimeOut: 1e3,
                        iconClasses: {
                            error: "toast-error",
                            info: "toast-info",
                            success: "toast-success",
                            warning: "toast-warning",
                        },
                        iconClass: "toast-info",
                        positionClass: "toast-top-right",
                        timeOut: 5e3,
                        titleClass: "toast-title",
                        messageClass: "toast-message",
                        escapeHtml: !1,
                        target: "body",
                        closeHtml: '<button type="button">&times;</button>',
                        newestOnTop: !0,
                        preventDuplicates: !1,
                        progressBar: !1,
                    },
                    p.options
                );
            }

            function s(e) {
                l || (l = t()),
                    e.is(":visible") ||
                        (e.remove(),
                        (e = null),
                        0 === l.children().length &&
                            (l.remove(), (u = void 0)));
            }
            var l,
                c,
                u,
                d = 0,
                f = {
                    error: "error",
                    info: "info",
                    success: "success",
                    warning: "warning",
                },
                p = {
                    clear: function (e, o) {
                        var r = a();
                        l || t(r), i(e, r, o) || n(r);
                    },
                    remove: function (n) {
                        var i = a();
                        return (
                            l || t(i),
                            n && 0 === e(":focus", n).length
                                ? void s(n)
                                : void (l.children().length && l.remove())
                        );
                    },
                    error: function (e, t, n) {
                        return r({
                            type: f.error,
                            iconClass: a().iconClasses.error,
                            message: e,
                            optionsOverride: n,
                            title: t,
                        });
                    },
                    getContainer: t,
                    info: function (e, t, n) {
                        return r({
                            type: f.info,
                            iconClass: a().iconClasses.info,
                            message: e,
                            optionsOverride: n,
                            title: t,
                        });
                    },
                    options: {},
                    subscribe: function (e) {
                        c = e;
                    },
                    success: function (e, t, n) {
                        return r({
                            type: f.success,
                            iconClass: a().iconClasses.success,
                            message: e,
                            optionsOverride: n,
                            title: t,
                        });
                    },
                    version: "2.1.2",
                    warning: function (e, t, n) {
                        return r({
                            type: f.warning,
                            iconClass: a().iconClasses.warning,
                            message: e,
                            optionsOverride: n,
                            title: t,
                        });
                    },
                };
            return p;
        })();
    }),
    (function (e, t, n) {
        "use strict";
        !(function e(t, n, i) {
            function o(a, s) {
                if (!n[a]) {
                    if (!t[a]) {
                        var l = "function" == typeof require && require;
                        if (!s && l) return l(a, !0);
                        if (r) return r(a, !0);
                        var c = new Error("Cannot find module '" + a + "'");
                        throw ((c.code = "MODULE_NOT_FOUND"), c);
                    }
                    var u = (n[a] = {
                        exports: {},
                    });
                    t[a][0].call(
                        u.exports,
                        function (e) {
                            var n = t[a][1][e];
                            return o(n || e);
                        },
                        u,
                        u.exports,
                        e,
                        t,
                        n,
                        i
                    );
                }
                return n[a].exports;
            }
            for (
                var r = "function" == typeof require && require, a = 0;
                a < i.length;
                a++
            )
                o(i[a]);
            return o;
        })(
            {
                1: [
                    function (e, t, n) {
                        Object.defineProperty(n, "__esModule", {
                            value: !0,
                        });
                        n.default = {
                            title: "",
                            text: "",
                            type: null,
                            allowOutsideClick: !1,
                            showConfirmButton: !0,
                            showCancelButton: !1,
                            closeOnConfirm: !0,
                            closeOnCancel: !0,
                            confirmButtonText: "OK",
                            confirmButtonClass: "btn-primary",
                            cancelButtonText: "Cancel",
                            cancelButtonClass: "btn-default",
                            containerClass: "",
                            titleClass: "",
                            textClass: "",
                            imageUrl: null,
                            imageSize: null,
                            timer: null,
                            customClass: "",
                            html: !1,
                            animation: !0,
                            allowEscapeKey: !0,
                            inputType: "text",
                            inputPlaceholder: "",
                            inputValue: "",
                            showLoaderOnConfirm: !1,
                        };
                    },
                    {},
                ],
                2: [
                    function (t, i, o) {
                        Object.defineProperty(o, "__esModule", {
                            value: !0,
                        }),
                            (o.handleCancel =
                                o.handleConfirm =
                                o.handleButton =
                                    n);
                        t("./handle-swal-dom");
                        var r = t("./handle-dom"),
                            a = function (e, t) {
                                var n = !0;
                                (0, r.hasClass)(e, "show-input") &&
                                    ((n = e.querySelector("input").value) ||
                                        (n = "")),
                                    t.doneFunction(n),
                                    t.closeOnConfirm && sweetAlert.close(),
                                    t.showLoaderOnConfirm &&
                                        sweetAlert.disableButtons();
                            },
                            s = function (e, t) {
                                var n = String(t.doneFunction).replace(
                                    /\s/g,
                                    ""
                                );
                                "function(" === n.substring(0, 9) &&
                                    ")" !== n.substring(9, 10) &&
                                    t.doneFunction(!1),
                                    t.closeOnCancel && sweetAlert.close();
                            };
                        (o.handleButton = function (t, n, i) {
                            var o,
                                l = t || e.event,
                                c = l.target || l.srcElement,
                                u = -1 !== c.className.indexOf("confirm"),
                                d = -1 !== c.className.indexOf("sweet-overlay"),
                                f = (0, r.hasClass)(i, "visible"),
                                p =
                                    n.doneFunction &&
                                    "true" ===
                                        i.getAttribute(
                                            "data-has-done-function"
                                        );
                            switch (
                                (u &&
                                    n.confirmButtonColor &&
                                    ((o = n.confirmButtonColor),
                                    colorLuminance(o, -0.04),
                                    colorLuminance(o, -0.14)),
                                l.type)
                            ) {
                                case "click":
                                    var h = i === c,
                                        g = (0, r.isDescendant)(i, c);
                                    if (!h && !g && f && !n.allowOutsideClick)
                                        break;
                                    u && p && f
                                        ? a(i, n)
                                        : (p && f) || d
                                        ? s(i, n)
                                        : (0, r.isDescendant)(i, c) &&
                                          "BUTTON" === c.tagName &&
                                          sweetAlert.close();
                            }
                        }),
                            (o.handleConfirm = a),
                            (o.handleCancel = s);
                    },
                    {
                        "./handle-dom": 3,
                        "./handle-swal-dom": 5,
                    },
                ],
                3: [
                    function (n, i, o) {
                        Object.defineProperty(o, "__esModule", {
                            value: !0,
                        });
                        var r = function (e, t) {
                                return new RegExp(" " + t + " ").test(
                                    " " + e.className + " "
                                );
                            },
                            a = function (e) {
                                (e.style.opacity = ""),
                                    (e.style.display = "block");
                            },
                            s = function (e) {
                                (e.style.opacity = ""),
                                    (e.style.display = "none");
                            };
                        (o.hasClass = r),
                            (o.addClass = function (e, t) {
                                r(e, t) || (e.className += " " + t);
                            }),
                            (o.removeClass = function (e, t) {
                                var n =
                                    " " +
                                    e.className.replace(/[\t\r\n]/g, " ") +
                                    " ";
                                if (r(e, t)) {
                                    for (; n.indexOf(" " + t + " ") >= 0; )
                                        n = n.replace(" " + t + " ", " ");
                                    e.className = n.replace(/^\s+|\s+$/g, "");
                                }
                            }),
                            (o.escapeHtml = function (e) {
                                var n = t.createElement("div");
                                return (
                                    n.appendChild(t.createTextNode(e)),
                                    n.innerHTML
                                );
                            }),
                            (o._show = a),
                            (o.show = function (e) {
                                if (e && !e.length) return a(e);
                                for (var t = 0; t < e.length; ++t) a(e[t]);
                            }),
                            (o._hide = s),
                            (o.hide = function (e) {
                                if (e && !e.length) return s(e);
                                for (var t = 0; t < e.length; ++t) s(e[t]);
                            }),
                            (o.isDescendant = function (e, t) {
                                for (var n = t.parentNode; null !== n; ) {
                                    if (n === e) return !0;
                                    n = n.parentNode;
                                }
                                return !1;
                            }),
                            (o.getTopMargin = function (e) {
                                (e.style.left = "-9999px"),
                                    (e.style.display = "block");
                                var t,
                                    n = e.clientHeight;
                                return (
                                    (t =
                                        "undefined" != typeof getComputedStyle
                                            ? parseInt(
                                                  getComputedStyle(
                                                      e
                                                  ).getPropertyValue(
                                                      "padding-top"
                                                  ),
                                                  10
                                              )
                                            : parseInt(e.currentStyle.padding)),
                                    (e.style.left = ""),
                                    (e.style.display = "none"),
                                    "-" + parseInt((n + t) / 2) + "px"
                                );
                            }),
                            (o.fadeIn = function (e, t) {
                                if (+e.style.opacity < 1) {
                                    (t = t || 16),
                                        (e.style.opacity = 0),
                                        (e.style.display = "block");
                                    var n = +new Date();
                                    !(function i() {
                                        (e.style.opacity =
                                            +e.style.opacity +
                                            (new Date() - n) / 100),
                                            (n = +new Date()),
                                            +e.style.opacity < 1 &&
                                                setTimeout(i, t);
                                    })();
                                }
                                e.style.display = "block";
                            }),
                            (o.fadeOut = function (e, t) {
                                (t = t || 16), (e.style.opacity = 1);
                                var n = +new Date();
                                !(function i() {
                                    (e.style.opacity =
                                        +e.style.opacity -
                                        (new Date() - n) / 100),
                                        (n = +new Date()),
                                        +e.style.opacity > 0
                                            ? setTimeout(i, t)
                                            : (e.style.display = "none");
                                })();
                            }),
                            (o.fireClick = function (n) {
                                if ("function" == typeof MouseEvent) {
                                    var i = new MouseEvent("click", {
                                        view: e,
                                        bubbles: !1,
                                        cancelable: !0,
                                    });
                                    n.dispatchEvent(i);
                                } else if (t.createEvent) {
                                    var o = t.createEvent("MouseEvents");
                                    o.initEvent("click", !1, !1),
                                        n.dispatchEvent(o);
                                } else
                                    t.createEventObject
                                        ? n.fireEvent("onclick")
                                        : "function" == typeof n.onclick &&
                                          n.onclick();
                            }),
                            (o.stopEventPropagation = function (t) {
                                "function" == typeof t.stopPropagation
                                    ? (t.stopPropagation(), t.preventDefault())
                                    : e.event &&
                                      e.event.hasOwnProperty("cancelBubble") &&
                                      (e.event.cancelBubble = !0);
                            });
                    },
                    {},
                ],
                4: [
                    function (t, i, o) {
                        Object.defineProperty(o, "__esModule", {
                            value: !0,
                        });
                        var r = t("./handle-dom"),
                            a = t("./handle-swal-dom");
                        o.default = function (t, i, o) {
                            var s = t || e.event,
                                l = s.keyCode || s.which,
                                c = o.querySelector("button.confirm"),
                                u = o.querySelector("button.cancel"),
                                d = o.querySelectorAll("button[tabindex]");
                            if (-1 !== [9, 13, 32, 27].indexOf(l)) {
                                for (
                                    var f = s.target || s.srcElement,
                                        p = -1,
                                        h = 0;
                                    h < d.length;
                                    h++
                                )
                                    if (f === d[h]) {
                                        p = h;
                                        break;
                                    }
                                9 === l
                                    ? ((f =
                                          -1 === p
                                              ? c
                                              : p === d.length - 1
                                              ? d[0]
                                              : d[p + 1]),
                                      (0, r.stopEventPropagation)(s),
                                      f.focus(),
                                      i.confirmButtonColor &&
                                          (0, a.setFocusStyle)(
                                              f,
                                              i.confirmButtonColor
                                          ))
                                    : 13 === l
                                    ? ("INPUT" === f.tagName &&
                                          ((f = c), c.focus()),
                                      (f = -1 === p ? c : n))
                                    : 27 === l && !0 === i.allowEscapeKey
                                    ? ((f = u), (0, r.fireClick)(f, s))
                                    : (f = n);
                            }
                        };
                    },
                    {
                        "./handle-dom": 3,
                        "./handle-swal-dom": 5,
                    },
                ],
                5: [
                    function (i, o, r) {
                        Object.defineProperty(r, "__esModule", {
                            value: !0,
                        }),
                            (r.fixVerticalPosition =
                                r.resetInputError =
                                r.resetInput =
                                r.openModal =
                                r.getInput =
                                r.getOverlay =
                                r.getModal =
                                r.sweetAlertInitialize =
                                    n);
                        var a = i("./handle-dom"),
                            s = c(i("./default-params")),
                            l = c(i("./injected-html"));

                        function c(e) {
                            return e && e.__esModule
                                ? e
                                : {
                                      default: e,
                                  };
                        }
                        var u = function () {
                                var e = t.createElement("div");
                                for (e.innerHTML = l.default; e.firstChild; )
                                    t.body.appendChild(e.firstChild);
                            },
                            d = function e() {
                                var n = t.querySelector(".sweet-alert");
                                return n || (u(), (n = e())), n;
                            },
                            f = function () {
                                var e = d();
                                if (e) return e.querySelector("input");
                            },
                            p = function () {
                                return t.querySelector(".sweet-overlay");
                            },
                            h = function (e) {
                                if (e && 13 === e.keyCode) return !1;
                                var t = d(),
                                    n = t.querySelector(".sa-input-error");
                                (0, a.removeClass)(n, "show");
                                var i = t.querySelector(".form-group");
                                (0, a.removeClass)(i, "has-error");
                            };
                        (r.sweetAlertInitialize = u),
                            (r.getModal = d),
                            (r.getOverlay = p),
                            (r.getInput = f),
                            (r.openModal = function (n) {
                                var i = d();
                                (0, a.fadeIn)(p(), 10),
                                    (0, a.show)(i),
                                    (0, a.addClass)(i, "showSweetAlert"),
                                    (0, a.removeClass)(i, "hideSweetAlert"),
                                    (e.previousActiveElement = t.activeElement),
                                    i.querySelector("button.confirm").focus(),
                                    setTimeout(function () {
                                        (0, a.addClass)(i, "visible");
                                    }, 500);
                                var o = i.getAttribute("data-timer");
                                if ("null" !== o && "" !== o) {
                                    var r = n;
                                    i.timeout = setTimeout(function () {
                                        r &&
                                        "true" ===
                                            i.getAttribute(
                                                "data-has-done-function"
                                            )
                                            ? r(null)
                                            : sweetAlert.close();
                                    }, o);
                                }
                            }),
                            (r.resetInput = function () {
                                var e = d(),
                                    t = f();
                                (0, a.removeClass)(e, "show-input"),
                                    (t.value = s.default.inputValue),
                                    t.setAttribute("type", s.default.inputType),
                                    t.setAttribute(
                                        "placeholder",
                                        s.default.inputPlaceholder
                                    ),
                                    h();
                            }),
                            (r.resetInputError = h),
                            (r.fixVerticalPosition = function () {
                                d().style.marginTop = (0, a.getTopMargin)(d());
                            });
                    },
                    {
                        "./default-params": 1,
                        "./handle-dom": 3,
                        "./injected-html": 6,
                    },
                ],
                6: [
                    function (e, t, n) {
                        Object.defineProperty(n, "__esModule", {
                            value: !0,
                        });
                        n.default =
                            '<div class="sweet-overlay" tabIndex="-1"></div><div class="sweet-alert" tabIndex="-1"><div class="sa-icon sa-error">\n      <span class="sa-x-mark">\n        <span class="sa-line sa-left"></span>\n        <span class="sa-line sa-right"></span>\n      </span>\n    </div><div class="sa-icon sa-warning">\n      <span class="sa-body"></span>\n      <span class="sa-dot"></span>\n    </div><div class="sa-icon sa-info"></div><div class="sa-icon sa-success">\n      <span class="sa-line sa-tip"></span>\n      <span class="sa-line sa-long"></span>\n\n      <div class="sa-placeholder"></div>\n      <div class="sa-fix"></div>\n    </div><div class="sa-icon sa-custom"></div><h2>Title</h2>\n    <p class="lead text-muted">Text</p>\n    <div class="form-group">\n      <input type="text" class="form-control" tabIndex="3" />\n      <span class="sa-input-error help-block">\n        <span class="glyphicon glyphicon-exclamation-sign"></span> <span class="sa-help-text">Not valid</span>\n      </span>\n    </div><div class="sa-button-container">\n      <button class="cancel btn btn-lg" tabIndex="2">Cancel</button>\n      <div class="sa-confirm-button-container">\n        <button class="confirm btn btn-lg" tabIndex="1">OK</button><div class="la-ball-fall">\n          <div></div>\n          <div></div>\n          <div></div>\n        </div>\n      </div>\n    </div></div>';
                    },
                    {},
                ],
                7: [
                    function (e, t, n) {
                        Object.defineProperty(n, "__esModule", {
                            value: !0,
                        });
                        var i =
                                "function" == typeof Symbol &&
                                "symbol" == typeof Symbol.iterator
                                    ? function (e) {
                                          return typeof e;
                                      }
                                    : function (e) {
                                          return e &&
                                              "function" == typeof Symbol &&
                                              e.constructor === Symbol
                                              ? "symbol"
                                              : typeof e;
                                      },
                            o = e("./utils"),
                            r = e("./handle-swal-dom"),
                            a = e("./handle-dom"),
                            s = [
                                "error",
                                "warning",
                                "info",
                                "success",
                                "input",
                                "prompt",
                            ];
                        n.default = function (e) {
                            var t = (0, r.getModal)(),
                                n = t.querySelector("h2"),
                                l = t.querySelector("p"),
                                c = t.querySelector("button.cancel"),
                                u = t.querySelector("button.confirm");
                            if (
                                ((n.innerHTML = e.html
                                    ? e.title
                                    : (0, a.escapeHtml)(e.title)
                                          .split("\n")
                                          .join("<br>")),
                                (l.innerHTML = e.html
                                    ? e.text
                                    : (0, a.escapeHtml)(e.text || "")
                                          .split("\n")
                                          .join("<br>")),
                                e.text && (0, a.show)(l),
                                e.customClass)
                            )
                                (0, a.addClass)(t, e.customClass),
                                    t.setAttribute(
                                        "data-custom-class",
                                        e.customClass
                                    );
                            else {
                                var d = t.getAttribute("data-custom-class");
                                (0, a.removeClass)(t, d),
                                    t.setAttribute("data-custom-class", "");
                            }
                            if (
                                ((0, a.hide)(t.querySelectorAll(".sa-icon")),
                                e.type && !(0, o.isIE8)())
                            ) {
                                var f = (function () {
                                    for (var n = !1, i = 0; i < s.length; i++)
                                        if (e.type === s[i]) {
                                            n = !0;
                                            break;
                                        }
                                    if (!n)
                                        return (
                                            logStr(
                                                "Unknown alert type: " + e.type
                                            ),
                                            {
                                                v: !1,
                                            }
                                        );
                                    var o = void 0;
                                    -1 !==
                                        [
                                            "success",
                                            "error",
                                            "warning",
                                            "info",
                                        ].indexOf(e.type) &&
                                        ((o = t.querySelector(
                                            ".sa-icon.sa-" + e.type
                                        )),
                                        (0, a.show)(o));
                                    var l = (0, r.getInput)();
                                    switch (e.type) {
                                        case "success":
                                            (0, a.addClass)(o, "animate"),
                                                (0, a.addClass)(
                                                    o.querySelector(".sa-tip"),
                                                    "animateSuccessTip"
                                                ),
                                                (0, a.addClass)(
                                                    o.querySelector(".sa-long"),
                                                    "animateSuccessLong"
                                                );
                                            break;
                                        case "error":
                                            (0, a.addClass)(
                                                o,
                                                "animateErrorIcon"
                                            ),
                                                (0, a.addClass)(
                                                    o.querySelector(
                                                        ".sa-x-mark"
                                                    ),
                                                    "animateXMark"
                                                );
                                            break;
                                        case "warning":
                                            (0, a.addClass)(o, "pulseWarning"),
                                                (0, a.addClass)(
                                                    o.querySelector(".sa-body"),
                                                    "pulseWarningIns"
                                                ),
                                                (0, a.addClass)(
                                                    o.querySelector(".sa-dot"),
                                                    "pulseWarningIns"
                                                );
                                            break;
                                        case "input":
                                        case "prompt":
                                            l.setAttribute("type", e.inputType),
                                                (l.value = e.inputValue),
                                                l.setAttribute(
                                                    "placeholder",
                                                    e.inputPlaceholder
                                                ),
                                                (0, a.addClass)(
                                                    t,
                                                    "show-input"
                                                ),
                                                setTimeout(function () {
                                                    l.focus(),
                                                        l.addEventListener(
                                                            "keyup",
                                                            swal.resetInputError
                                                        );
                                                }, 400);
                                    }
                                })();
                                if (
                                    "object" ===
                                    (void 0 === f ? "undefined" : i(f))
                                )
                                    return f.v;
                            }
                            if (e.imageUrl) {
                                var p = t.querySelector(".sa-icon.sa-custom");
                                (p.style.backgroundImage =
                                    "url(" + e.imageUrl + ")"),
                                    (0, a.show)(p);
                                var h = 80,
                                    g = 80;
                                if (e.imageSize) {
                                    var m = e.imageSize.toString().split("x"),
                                        v = m[0],
                                        y = m[1];
                                    v && y
                                        ? ((h = v), (g = y))
                                        : logStr(
                                              "Parameter imageSize expects value with format WIDTHxHEIGHT, got " +
                                                  e.imageSize
                                          );
                                }
                                p.setAttribute(
                                    "style",
                                    p.getAttribute("style") +
                                        "width:" +
                                        h +
                                        "px; height:" +
                                        g +
                                        "px"
                                );
                            }
                            t.setAttribute(
                                "data-has-cancel-button",
                                e.showCancelButton
                            ),
                                e.showCancelButton
                                    ? (c.style.display = "inline-block")
                                    : (0, a.hide)(c),
                                t.setAttribute(
                                    "data-has-confirm-button",
                                    e.showConfirmButton
                                ),
                                e.showConfirmButton
                                    ? (u.style.display = "inline-block")
                                    : (0, a.hide)(u),
                                e.cancelButtonText &&
                                    (c.innerHTML = (0, a.escapeHtml)(
                                        e.cancelButtonText
                                    )),
                                e.confirmButtonText &&
                                    (u.innerHTML = (0, a.escapeHtml)(
                                        e.confirmButtonText
                                    )),
                                (u.className = "confirm btn btn-lg"),
                                (0, a.addClass)(t, e.containerClass),
                                (0, a.addClass)(u, e.confirmButtonClass),
                                (0, a.addClass)(c, e.cancelButtonClass),
                                (0, a.addClass)(n, e.titleClass),
                                (0, a.addClass)(l, e.textClass),
                                t.setAttribute(
                                    "data-allow-outside-click",
                                    e.allowOutsideClick
                                );
                            var b = !!e.doneFunction;
                            t.setAttribute("data-has-done-function", b),
                                e.animation
                                    ? "string" == typeof e.animation
                                        ? t.setAttribute(
                                              "data-animation",
                                              e.animation
                                          )
                                        : t.setAttribute(
                                              "data-animation",
                                              "pop"
                                          )
                                    : t.setAttribute("data-animation", "none"),
                                t.setAttribute("data-timer", e.timer);
                        };
                    },
                    {
                        "./handle-dom": 3,
                        "./handle-swal-dom": 5,
                        "./utils": 8,
                    },
                ],
                8: [
                    function (t, n, i) {
                        Object.defineProperty(i, "__esModule", {
                            value: !0,
                        });
                        (i.extend = function (e, t) {
                            for (var n in t)
                                t.hasOwnProperty(n) && (e[n] = t[n]);
                            return e;
                        }),
                            (i.isIE8 = function () {
                                return e.attachEvent && !e.addEventListener;
                            }),
                            (i.logStr = function (t) {
                                e.console && e.console.log("SweetAlert: " + t);
                            });
                    },
                    {},
                ],
                9: [
                    function (i, o, r) {
                        Object.defineProperty(r, "__esModule", {
                            value: !0,
                        });
                        var a,
                            s,
                            l,
                            c,
                            u =
                                "function" == typeof Symbol &&
                                "symbol" == typeof Symbol.iterator
                                    ? function (e) {
                                          return typeof e;
                                      }
                                    : function (e) {
                                          return e &&
                                              "function" == typeof Symbol &&
                                              e.constructor === Symbol
                                              ? "symbol"
                                              : typeof e;
                                      },
                            d = i("./modules/handle-dom"),
                            f = i("./modules/utils"),
                            p = i("./modules/handle-swal-dom"),
                            h = i("./modules/handle-click"),
                            g = y(i("./modules/handle-key")),
                            m = y(i("./modules/default-params")),
                            v = y(i("./modules/set-params"));

                        function y(e) {
                            return e && e.__esModule
                                ? e
                                : {
                                      default: e,
                                  };
                        }
                        (r.default =
                            l =
                            c =
                                function () {
                                    var i = arguments[0];

                                    function o(e) {
                                        var t = i;
                                        return t[e] === n ? m.default[e] : t[e];
                                    }
                                    if (
                                        ((0, d.addClass)(
                                            t.body,
                                            "stop-scrolling"
                                        ),
                                        (0, p.resetInput)(),
                                        i === n)
                                    )
                                        return (
                                            (0, f.logStr)(
                                                "SweetAlert expects at least 1 attribute!"
                                            ),
                                            !1
                                        );
                                    var r = (0, f.extend)({}, m.default);
                                    switch (void 0 === i ? "undefined" : u(i)) {
                                        case "string":
                                            (r.title = i),
                                                (r.text = arguments[1] || ""),
                                                (r.type = arguments[2] || "");
                                            break;
                                        case "object":
                                            if (i.title === n)
                                                return (
                                                    (0, f.logStr)(
                                                        'Missing "title" argument!'
                                                    ),
                                                    !1
                                                );
                                            for (var l in ((r.title = i.title),
                                            m.default))
                                                r[l] = o(l);
                                            (r.confirmButtonText =
                                                r.showCancelButton
                                                    ? "Confirm"
                                                    : m.default
                                                          .confirmButtonText),
                                                (r.confirmButtonText =
                                                    o("confirmButtonText")),
                                                (r.doneFunction =
                                                    arguments[1] || null);
                                            break;
                                        default:
                                            return (
                                                (0, f.logStr)(
                                                    'Unexpected type of argument! Expected "string" or "object", got ' +
                                                        (void 0 === i
                                                            ? "undefined"
                                                            : u(i))
                                                ),
                                                !1
                                            );
                                    }
                                    (0, v.default)(r),
                                        (0, p.fixVerticalPosition)(),
                                        (0, p.openModal)(arguments[1]);
                                    for (
                                        var y = (0, p.getModal)(),
                                            b = y.querySelectorAll("button"),
                                            x = ["onclick"],
                                            w = function (e) {
                                                return (0, h.handleButton)(
                                                    e,
                                                    r,
                                                    y
                                                );
                                            },
                                            S = 0;
                                        S < b.length;
                                        S++
                                    )
                                        for (var C = 0; C < x.length; C++) {
                                            var $ = x[C];
                                            b[S][$] = w;
                                        }
                                    ((0, p.getOverlay)().onclick = w),
                                        (a = e.onkeydown);
                                    (e.onkeydown = function (e) {
                                        return (0, g.default)(e, r, y);
                                    }),
                                        (e.onfocus = function () {
                                            setTimeout(function () {
                                                s !== n && (s.focus(), (s = n));
                                            }, 0);
                                        }),
                                        c.enableButtons();
                                }),
                            (l.setDefaults = c.setDefaults =
                                function (e) {
                                    if (!e)
                                        throw new Error(
                                            "userParams is required"
                                        );
                                    if (
                                        "object" !==
                                        (void 0 === e ? "undefined" : u(e))
                                    )
                                        throw new Error(
                                            "userParams has to be a object"
                                        );
                                    (0, f.extend)(m.default, e);
                                }),
                            (l.close = c.close =
                                function () {
                                    var i = (0, p.getModal)();
                                    (0, d.fadeOut)((0, p.getOverlay)(), 5),
                                        (0, d.fadeOut)(i, 5),
                                        (0, d.removeClass)(i, "showSweetAlert"),
                                        (0, d.addClass)(i, "hideSweetAlert"),
                                        (0, d.removeClass)(i, "visible");
                                    var o = i.querySelector(
                                        ".sa-icon.sa-success"
                                    );
                                    (0, d.removeClass)(o, "animate"),
                                        (0, d.removeClass)(
                                            o.querySelector(".sa-tip"),
                                            "animateSuccessTip"
                                        ),
                                        (0, d.removeClass)(
                                            o.querySelector(".sa-long"),
                                            "animateSuccessLong"
                                        );
                                    var r =
                                        i.querySelector(".sa-icon.sa-error");
                                    (0, d.removeClass)(r, "animateErrorIcon"),
                                        (0, d.removeClass)(
                                            r.querySelector(".sa-x-mark"),
                                            "animateXMark"
                                        );
                                    var l = i.querySelector(
                                        ".sa-icon.sa-warning"
                                    );
                                    return (
                                        (0, d.removeClass)(l, "pulseWarning"),
                                        (0, d.removeClass)(
                                            l.querySelector(".sa-body"),
                                            "pulseWarningIns"
                                        ),
                                        (0, d.removeClass)(
                                            l.querySelector(".sa-dot"),
                                            "pulseWarningIns"
                                        ),
                                        setTimeout(function () {
                                            var e =
                                                i.getAttribute(
                                                    "data-custom-class"
                                                );
                                            (0, d.removeClass)(i, e);
                                        }, 300),
                                        (0, d.removeClass)(
                                            t.body,
                                            "stop-scrolling"
                                        ),
                                        (e.onkeydown = a),
                                        e.previousActiveElement &&
                                            e.previousActiveElement.focus(),
                                        (s = n),
                                        clearTimeout(i.timeout),
                                        !0
                                    );
                                }),
                            (l.showInputError = c.showInputError =
                                function (e) {
                                    var t = (0, p.getModal)(),
                                        n = t.querySelector(".sa-input-error");
                                    (0, d.addClass)(n, "show");
                                    var i = t.querySelector(".form-group");
                                    (0, d.addClass)(i, "has-error"),
                                        (i.querySelector(
                                            ".sa-help-text"
                                        ).innerHTML = e),
                                        setTimeout(function () {
                                            l.enableButtons();
                                        }, 1),
                                        t.querySelector("input").focus();
                                }),
                            (l.resetInputError = c.resetInputError =
                                function (e) {
                                    if (e && 13 === e.keyCode) return !1;
                                    var t = (0, p.getModal)(),
                                        n = t.querySelector(".sa-input-error");
                                    (0, d.removeClass)(n, "show");
                                    var i = t.querySelector(".form-group");
                                    (0, d.removeClass)(i, "has-error");
                                }),
                            (l.disableButtons = c.disableButtons =
                                function (e) {
                                    var t = (0, p.getModal)(),
                                        n = t.querySelector("button.confirm"),
                                        i = t.querySelector("button.cancel");
                                    (n.disabled = !0), (i.disabled = !0);
                                }),
                            (l.enableButtons = c.enableButtons =
                                function (e) {
                                    var t = (0, p.getModal)(),
                                        n = t.querySelector("button.confirm"),
                                        i = t.querySelector("button.cancel");
                                    (n.disabled = !1), (i.disabled = !1);
                                }),
                            void 0 !== e
                                ? (e.sweetAlert = e.swal = l)
                                : (0, f.logStr)(
                                      "SweetAlert is a frontend module!"
                                  );
                    },
                    {
                        "./modules/default-params": 1,
                        "./modules/handle-click": 2,
                        "./modules/handle-dom": 3,
                        "./modules/handle-key": 4,
                        "./modules/handle-swal-dom": 5,
                        "./modules/set-params": 7,
                        "./modules/utils": 8,
                    },
                ],
            },
            {},
            [9]
        ),
            "function" == typeof define && define.amd
                ? define(function () {
                      return sweetAlert;
                  })
                : "undefined" != typeof module &&
                  module.exports &&
                  (module.exports = sweetAlert);
    })(window, document),
    (function (e, t, n, i) {
        var o = n("html"),
            r = n(e),
            a = n(t),
            s = (n.fancybox = function () {
                s.open.apply(this, arguments);
            }),
            l = navigator.userAgent.match(/msie/i),
            c = null,
            u = t.createTouch !== i,
            d = function (e) {
                return e && e.hasOwnProperty && e instanceof n;
            },
            f = function (e) {
                return e && "string" === n.type(e);
            },
            p = function (e) {
                return f(e) && 0 < e.indexOf("%");
            },
            h = function (e, t) {
                var n = parseInt(e, 10) || 0;
                return (
                    t && p(e) && (n *= s.getViewport()[t] / 100), Math.ceil(n)
                );
            },
            g = function (e, t) {
                return h(e, t) + "px";
            };
        n.extend(s, {
            version: "2.1.7",
            defaults: {
                padding: 15,
                margin: 20,
                width: 800,
                height: 600,
                minWidth: 100,
                minHeight: 100,
                maxWidth: 9999,
                maxHeight: 9999,
                pixelRatio: 1,
                autoSize: !0,
                autoHeight: !1,
                autoWidth: !1,
                autoResize: !0,
                autoCenter: !u,
                fitToView: !0,
                aspectRatio: !1,
                topRatio: 0.5,
                leftRatio: 0.5,
                scrolling: "auto",
                wrapCSS: "",
                arrows: !0,
                closeBtn: !0,
                closeClick: !1,
                nextClick: !1,
                mouseWheel: !0,
                autoPlay: !1,
                playSpeed: 3e3,
                preload: 3,
                modal: !1,
                loop: !0,
                ajax: {
                    dataType: "html",
                    headers: {
                        "X-fancyBox": !0,
                    },
                },
                iframe: {
                    scrolling: "auto",
                    preload: !0,
                },
                swf: {
                    wmode: "transparent",
                    allowfullscreen: "true",
                    allowscriptaccess: "always",
                },
                keys: {
                    next: {
                        13: "left",
                        34: "up",
                        39: "left",
                        40: "up",
                    },
                    prev: {
                        8: "right",
                        33: "down",
                        37: "right",
                        38: "down",
                    },
                    close: [27],
                    play: [32],
                    toggle: [70],
                },
                direction: {
                    next: "left",
                    prev: "right",
                },
                scrollOutside: !0,
                index: 0,
                type: null,
                href: null,
                content: null,
                title: null,
                tpl: {
                    wrap: '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',
                    image: '<img class="fancybox-image" src="{href}" alt="" />',
                    iframe:
                        '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen' +
                        (l ? ' allowtransparency="true"' : "") +
                        "></iframe>",
                    error: '<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',
                    closeBtn:
                        '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>',
                    next: '<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
                    prev: '<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>',
                    loading: '<div id="fancybox-loading"><div></div></div>',
                },
                openEffect: "fade",
                openSpeed: 250,
                openEasing: "swing",
                openOpacity: !0,
                openMethod: "zoomIn",
                closeEffect: "fade",
                closeSpeed: 250,
                closeEasing: "swing",
                closeOpacity: !0,
                closeMethod: "zoomOut",
                nextEffect: "elastic",
                nextSpeed: 250,
                nextEasing: "swing",
                nextMethod: "changeIn",
                prevEffect: "elastic",
                prevSpeed: 250,
                prevEasing: "swing",
                prevMethod: "changeOut",
                helpers: {
                    overlay: !0,
                    title: !0,
                },
                onCancel: n.noop,
                beforeLoad: n.noop,
                afterLoad: n.noop,
                beforeShow: n.noop,
                afterShow: n.noop,
                beforeChange: n.noop,
                beforeClose: n.noop,
                afterClose: n.noop,
            },
            group: {},
            opts: {},
            previous: null,
            coming: null,
            current: null,
            isActive: !1,
            isOpen: !1,
            isOpened: !1,
            wrap: null,
            skin: null,
            outer: null,
            inner: null,
            player: {
                timer: null,
                isActive: !1,
            },
            ajaxLoad: null,
            imgPreload: null,
            transitions: {},
            helpers: {},
            open: function (e, t) {
                if (e && (n.isPlainObject(t) || (t = {}), !1 !== s.close(!0)))
                    return (
                        n.isArray(e) || (e = d(e) ? n(e).get() : [e]),
                        n.each(e, function (o, r) {
                            var a,
                                l,
                                c,
                                u,
                                p,
                                h = {};
                            "object" === n.type(r) &&
                                (r.nodeType && (r = n(r)),
                                d(r)
                                    ? ((h = {
                                          href:
                                              r.data("fancybox-href") ||
                                              r.attr("href"),
                                          title: n("<div/>")
                                              .text(
                                                  r.data("fancybox-title") ||
                                                      r.attr("title") ||
                                                      ""
                                              )
                                              .html(),
                                          isDom: !0,
                                          element: r,
                                      }),
                                      n.metadata &&
                                          n.extend(!0, h, r.metadata()))
                                    : (h = r)),
                                (a = t.href || h.href || (f(r) ? r : null)),
                                (l = t.title !== i ? t.title : h.title || ""),
                                !(u = (c = t.content || h.content)
                                    ? "html"
                                    : t.type || h.type) &&
                                    h.isDom &&
                                    ((u = r.data("fancybox-type")) ||
                                        (u = (u = r
                                            .prop("class")
                                            .match(/fancybox\.(\w+)/))
                                            ? u[1]
                                            : null)),
                                f(a) &&
                                    (u ||
                                        (s.isImage(a)
                                            ? (u = "image")
                                            : s.isSWF(a)
                                            ? (u = "swf")
                                            : "#" === a.charAt(0)
                                            ? (u = "inline")
                                            : f(r) && ((u = "html"), (c = r))),
                                    "ajax" === u &&
                                        ((p = a.split(/\s+/, 2)),
                                        (a = p.shift()),
                                        (p = p.shift()))),
                                c ||
                                    ("inline" === u
                                        ? a
                                            ? (c = n(
                                                  f(a)
                                                      ? a.replace(
                                                            /.*(?=#[^\s]+$)/,
                                                            ""
                                                        )
                                                      : a
                                              ))
                                            : h.isDom && (c = r)
                                        : "html" === u
                                        ? (c = a)
                                        : u ||
                                          a ||
                                          !h.isDom ||
                                          ((u = "inline"), (c = r))),
                                n.extend(h, {
                                    href: a,
                                    type: u,
                                    content: c,
                                    title: l,
                                    selector: p,
                                }),
                                (e[o] = h);
                        }),
                        (s.opts = n.extend(!0, {}, s.defaults, t)),
                        t.keys !== i &&
                            (s.opts.keys =
                                !!t.keys &&
                                n.extend({}, s.defaults.keys, t.keys)),
                        (s.group = e),
                        s._start(s.opts.index)
                    );
            },
            cancel: function () {
                var e = s.coming;
                (e && !1 === s.trigger("onCancel")) ||
                    (s.hideLoading(),
                    e &&
                        (s.ajaxLoad && s.ajaxLoad.abort(),
                        (s.ajaxLoad = null),
                        s.imgPreload &&
                            (s.imgPreload.onload = s.imgPreload.onerror = null),
                        e.wrap &&
                            e.wrap.stop(!0, !0).trigger("onReset").remove(),
                        (s.coming = null),
                        s.current || s._afterZoomOut(e)));
            },
            close: function (e) {
                s.cancel(),
                    !1 !== s.trigger("beforeClose") &&
                        (s.unbindEvents(),
                        s.isActive &&
                            (s.isOpen && !0 !== e
                                ? ((s.isOpen = s.isOpened = !1),
                                  (s.isClosing = !0),
                                  n(".fancybox-item, .fancybox-nav").remove(),
                                  s.wrap
                                      .stop(!0, !0)
                                      .removeClass("fancybox-opened"),
                                  s.transitions[s.current.closeMethod]())
                                : (n(".fancybox-wrap")
                                      .stop(!0)
                                      .trigger("onReset")
                                      .remove(),
                                  s._afterZoomOut())));
            },
            play: function (e) {
                var t = function () {
                        clearTimeout(s.player.timer);
                    },
                    n = function () {
                        t(),
                            s.current &&
                                s.player.isActive &&
                                (s.player.timer = setTimeout(
                                    s.next,
                                    s.current.playSpeed
                                ));
                    },
                    i = function () {
                        t(),
                            a.unbind(".player"),
                            (s.player.isActive = !1),
                            s.trigger("onPlayEnd");
                    };
                !0 === e || (!s.player.isActive && !1 !== e)
                    ? s.current &&
                      (s.current.loop ||
                          s.current.index < s.group.length - 1) &&
                      ((s.player.isActive = !0),
                      a.bind({
                          "onCancel.player beforeClose.player": i,
                          "onUpdate.player": n,
                          "beforeLoad.player": t,
                      }),
                      n(),
                      s.trigger("onPlayStart"))
                    : i();
            },
            next: function (e) {
                var t = s.current;
                t &&
                    (f(e) || (e = t.direction.next),
                    s.jumpto(t.index + 1, e, "next"));
            },
            prev: function (e) {
                var t = s.current;
                t &&
                    (f(e) || (e = t.direction.prev),
                    s.jumpto(t.index - 1, e, "prev"));
            },
            jumpto: function (e, t, n) {
                var o = s.current;
                o &&
                    ((e = h(e)),
                    (s.direction =
                        t || o.direction[e >= o.index ? "next" : "prev"]),
                    (s.router = n || "jumpto"),
                    o.loop &&
                        (0 > e && (e = o.group.length + (e % o.group.length)),
                        (e %= o.group.length)),
                    o.group[e] !== i && (s.cancel(), s._start(e)));
            },
            reposition: function (e, t) {
                var i,
                    o = s.current,
                    r = o ? o.wrap : null;
                r &&
                    ((i = s._getPosition(t)),
                    e && "scroll" === e.type
                        ? (delete i.position, r.stop(!0, !0).animate(i, 200))
                        : (r.css(i), (o.pos = n.extend({}, o.dim, i))));
            },
            update: function (e) {
                var t = e && e.originalEvent && e.originalEvent.type,
                    n = !t || "orientationchange" === t;
                n && (clearTimeout(c), (c = null)),
                    s.isOpen &&
                        !c &&
                        (c = setTimeout(
                            function () {
                                var i = s.current;
                                i &&
                                    !s.isClosing &&
                                    (s.wrap.removeClass("fancybox-tmp"),
                                    (n ||
                                        "load" === t ||
                                        ("resize" === t && i.autoResize)) &&
                                        s._setDimension(),
                                    ("scroll" === t && i.canShrink) ||
                                        s.reposition(e),
                                    s.trigger("onUpdate"),
                                    (c = null));
                            },
                            n && !u ? 0 : 300
                        ));
            },
            toggle: function (e) {
                s.isOpen &&
                    ((s.current.fitToView =
                        "boolean" === n.type(e) ? e : !s.current.fitToView),
                    u &&
                        (s.wrap.removeAttr("style").addClass("fancybox-tmp"),
                        s.trigger("onUpdate")),
                    s.update());
            },
            hideLoading: function () {
                a.unbind(".loading"), n("#fancybox-loading").remove();
            },
            showLoading: function () {
                var e, t;
                s.hideLoading(),
                    (e = n(s.opts.tpl.loading)
                        .click(s.cancel)
                        .appendTo("body")),
                    a.bind("keydown.loading", function (e) {
                        27 === (e.which || e.keyCode) &&
                            (e.preventDefault(), s.cancel());
                    }),
                    s.defaults.fixed ||
                        ((t = s.getViewport()),
                        e.css({
                            position: "absolute",
                            top: 0.5 * t.h + t.y,
                            left: 0.5 * t.w + t.x,
                        })),
                    s.trigger("onLoading");
            },
            getViewport: function () {
                var t = (s.current && s.current.locked) || !1,
                    n = {
                        x: r.scrollLeft(),
                        y: r.scrollTop(),
                    };
                return (
                    t && t.length
                        ? ((n.w = t[0].clientWidth), (n.h = t[0].clientHeight))
                        : ((n.w = u && e.innerWidth ? e.innerWidth : r.width()),
                          (n.h =
                              u && e.innerHeight ? e.innerHeight : r.height())),
                    n
                );
            },
            unbindEvents: function () {
                s.wrap && d(s.wrap) && s.wrap.unbind(".fb"),
                    a.unbind(".fb"),
                    r.unbind(".fb");
            },
            bindEvents: function () {
                var e,
                    t = s.current;
                t &&
                    (r.bind(
                        "orientationchange.fb" +
                            (u ? "" : " resize.fb") +
                            (t.autoCenter && !t.locked ? " scroll.fb" : ""),
                        s.update
                    ),
                    (e = t.keys) &&
                        a.bind("keydown.fb", function (o) {
                            var r = o.which || o.keyCode,
                                a = o.target || o.srcElement;
                            if (27 === r && s.coming) return !1;
                            o.ctrlKey ||
                                o.altKey ||
                                o.shiftKey ||
                                o.metaKey ||
                                (a &&
                                    (a.type || n(a).is("[contenteditable]"))) ||
                                n.each(e, function (e, a) {
                                    return 1 < t.group.length && a[r] !== i
                                        ? (s[e](a[r]), o.preventDefault(), !1)
                                        : -1 < n.inArray(r, a)
                                        ? (s[e](), o.preventDefault(), !1)
                                        : void 0;
                                });
                        }),
                    n.fn.mousewheel &&
                        t.mouseWheel &&
                        s.wrap.bind("mousewheel.fb", function (e, i, o, r) {
                            for (
                                var a = n(e.target || null), l = !1;
                                a.length &&
                                !(
                                    l ||
                                    a.is(".fancybox-skin") ||
                                    a.is(".fancybox-wrap")
                                );

                            )
                                (l =
                                    (l = a[0]) &&
                                    !(
                                        l.style.overflow &&
                                        "hidden" === l.style.overflow
                                    ) &&
                                    ((l.clientWidth &&
                                        l.scrollWidth > l.clientWidth) ||
                                        (l.clientHeight &&
                                            l.scrollHeight > l.clientHeight))),
                                    (a = n(a).parent());
                            0 !== i &&
                                !l &&
                                1 < s.group.length &&
                                !t.canShrink &&
                                (0 < r || 0 < o
                                    ? s.prev(0 < r ? "down" : "left")
                                    : (0 > r || 0 > o) &&
                                      s.next(0 > r ? "up" : "right"),
                                e.preventDefault());
                        }));
            },
            trigger: function (e, t) {
                var i,
                    o = t || s.coming || s.current;
                if (o) {
                    if (
                        (n.isFunction(o[e]) &&
                            (i = o[e].apply(
                                o,
                                Array.prototype.slice.call(arguments, 1)
                            )),
                        !1 === i)
                    )
                        return !1;
                    o.helpers &&
                        n.each(o.helpers, function (t, i) {
                            i &&
                                s.helpers[t] &&
                                n.isFunction(s.helpers[t][e]) &&
                                s.helpers[t][e](
                                    n.extend(!0, {}, s.helpers[t].defaults, i),
                                    o
                                );
                        });
                }
                a.trigger(e);
            },
            isImage: function (e) {
                return (
                    f(e) &&
                    e.match(
                        /(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg)((\?|#).*)?$)/i
                    )
                );
            },
            isSWF: function (e) {
                return f(e) && e.match(/\.(swf)((\?|#).*)?$/i);
            },
            _start: function (e) {
                var t,
                    i,
                    o = {};
                if (((e = h(e)), !(t = s.group[e] || null))) return !1;
                if (
                    ((t = (o = n.extend(!0, {}, s.opts, t)).margin),
                    (i = o.padding),
                    "number" === n.type(t) && (o.margin = [t, t, t, t]),
                    "number" === n.type(i) && (o.padding = [i, i, i, i]),
                    o.modal &&
                        n.extend(!0, o, {
                            closeBtn: !1,
                            closeClick: !1,
                            nextClick: !1,
                            arrows: !1,
                            mouseWheel: !1,
                            keys: null,
                            helpers: {
                                overlay: {
                                    closeClick: !1,
                                },
                            },
                        }),
                    o.autoSize && (o.autoWidth = o.autoHeight = !0),
                    "auto" === o.width && (o.autoWidth = !0),
                    "auto" === o.height && (o.autoHeight = !0),
                    (o.group = s.group),
                    (o.index = e),
                    (s.coming = o),
                    !1 === s.trigger("beforeLoad"))
                )
                    s.coming = null;
                else {
                    if (((i = o.type), (t = o.href), !i))
                        return (
                            (s.coming = null),
                            !(
                                !s.current ||
                                !s.router ||
                                "jumpto" === s.router
                            ) &&
                                ((s.current.index = e),
                                s[s.router](s.direction))
                        );
                    if (
                        ((s.isActive = !0),
                        ("image" !== i && "swf" !== i) ||
                            ((o.autoHeight = o.autoWidth = !1),
                            (o.scrolling = "visible")),
                        "image" === i && (o.aspectRatio = !0),
                        "iframe" === i && u && (o.scrolling = "scroll"),
                        (o.wrap = n(o.tpl.wrap)
                            .addClass(
                                "fancybox-" +
                                    (u ? "mobile" : "desktop") +
                                    " fancybox-type-" +
                                    i +
                                    " fancybox-tmp " +
                                    o.wrapCSS
                            )
                            .appendTo(o.parent || "body")),
                        n.extend(o, {
                            skin: n(".fancybox-skin", o.wrap),
                            outer: n(".fancybox-outer", o.wrap),
                            inner: n(".fancybox-inner", o.wrap),
                        }),
                        n.each(
                            ["Top", "Right", "Bottom", "Left"],
                            function (e, t) {
                                o.skin.css("padding" + t, g(o.padding[e]));
                            }
                        ),
                        s.trigger("onReady"),
                        "inline" === i || "html" === i)
                    ) {
                        if (!o.content || !o.content.length)
                            return s._error("content");
                    } else if (!t) return s._error("href");
                    "image" === i
                        ? s._loadImage()
                        : "ajax" === i
                        ? s._loadAjax()
                        : "iframe" === i
                        ? s._loadIframe()
                        : s._afterLoad();
                }
            },
            _error: function (e) {
                n.extend(s.coming, {
                    type: "html",
                    autoWidth: !0,
                    autoHeight: !0,
                    minWidth: 0,
                    minHeight: 0,
                    scrolling: "no",
                    hasError: e,
                    content: s.coming.tpl.error,
                }),
                    s._afterLoad();
            },
            _loadImage: function () {
                var e = (s.imgPreload = new Image());
                (e.onload = function () {
                    (this.onload = this.onerror = null),
                        (s.coming.width = this.width / s.opts.pixelRatio),
                        (s.coming.height = this.height / s.opts.pixelRatio),
                        s._afterLoad();
                }),
                    (e.onerror = function () {
                        (this.onload = this.onerror = null), s._error("image");
                    }),
                    (e.src = s.coming.href),
                    !0 !== e.complete && s.showLoading();
            },
            _loadAjax: function () {
                var e = s.coming;
                s.showLoading(),
                    (s.ajaxLoad = n.ajax(
                        n.extend({}, e.ajax, {
                            url: e.href,
                            error: function (e, t) {
                                s.coming && "abort" !== t
                                    ? s._error("ajax", e)
                                    : s.hideLoading();
                            },
                            success: function (t, n) {
                                "success" === n &&
                                    ((e.content = t), s._afterLoad());
                            },
                        })
                    ));
            },
            _loadIframe: function () {
                var e = s.coming,
                    t = n(
                        e.tpl.iframe.replace(/\{rnd\}/g, new Date().getTime())
                    )
                        .attr("scrolling", u ? "auto" : e.iframe.scrolling)
                        .attr("src", e.href);
                n(e.wrap).bind("onReset", function () {
                    try {
                        n(this)
                            .find("iframe")
                            .hide()
                            .attr("src", "//about:blank")
                            .end()
                            .empty();
                    } catch (e) {}
                }),
                    e.iframe.preload &&
                        (s.showLoading(),
                        t.one("load", function () {
                            n(this).data("ready", 1),
                                u || n(this).bind("load.fb", s.update),
                                n(this)
                                    .parents(".fancybox-wrap")
                                    .width("100%")
                                    .removeClass("fancybox-tmp")
                                    .show(),
                                s._afterLoad();
                        })),
                    (e.content = t.appendTo(e.inner)),
                    e.iframe.preload || s._afterLoad();
            },
            _preloadImages: function () {
                var e,
                    t,
                    n = s.group,
                    i = s.current,
                    o = n.length,
                    r = i.preload ? Math.min(i.preload, o - 1) : 0;
                for (t = 1; t <= r; t += 1)
                    "image" === (e = n[(i.index + t) % o]).type &&
                        e.href &&
                        (new Image().src = e.href);
            },
            _afterLoad: function () {
                var e,
                    t,
                    i,
                    o,
                    r,
                    a = s.coming,
                    l = s.current;
                if ((s.hideLoading(), a && !1 !== s.isActive))
                    if (!1 === s.trigger("afterLoad", a, l))
                        a.wrap.stop(!0).trigger("onReset").remove(),
                            (s.coming = null);
                    else {
                        switch (
                            (l &&
                                (s.trigger("beforeChange", l),
                                l.wrap
                                    .stop(!0)
                                    .removeClass("fancybox-opened")
                                    .find(".fancybox-item, .fancybox-nav")
                                    .remove()),
                            s.unbindEvents(),
                            (e = a.content),
                            (t = a.type),
                            (i = a.scrolling),
                            n.extend(s, {
                                wrap: a.wrap,
                                skin: a.skin,
                                outer: a.outer,
                                inner: a.inner,
                                current: a,
                                previous: l,
                            }),
                            (o = a.href),
                            t)
                        ) {
                            case "inline":
                            case "ajax":
                            case "html":
                                a.selector
                                    ? (e = n("<div>").html(e).find(a.selector))
                                    : d(e) &&
                                      (e.data("fancybox-placeholder") ||
                                          e.data(
                                              "fancybox-placeholder",
                                              n(
                                                  '<div class="fancybox-placeholder"></div>'
                                              )
                                                  .insertAfter(e)
                                                  .hide()
                                          ),
                                      (e = e.show().detach()),
                                      a.wrap.bind("onReset", function () {
                                          n(this).find(e).length &&
                                              e
                                                  .hide()
                                                  .replaceAll(
                                                      e.data(
                                                          "fancybox-placeholder"
                                                      )
                                                  )
                                                  .data(
                                                      "fancybox-placeholder",
                                                      !1
                                                  );
                                      }));
                                break;
                            case "image":
                                e = a.tpl.image.replace(/\{href\}/g, o);
                                break;
                            case "swf":
                                (e =
                                    '<object id="fancybox-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="movie" value="' +
                                    o +
                                    '"></param>'),
                                    (r = ""),
                                    n.each(a.swf, function (t, n) {
                                        (e +=
                                            '<param name="' +
                                            t +
                                            '" value="' +
                                            n +
                                            '"></param>'),
                                            (r += " " + t + '="' + n + '"');
                                    }),
                                    (e +=
                                        '<embed src="' +
                                        o +
                                        '" type="application/x-shockwave-flash" width="100%" height="100%"' +
                                        r +
                                        "></embed></object>");
                        }
                        (d(e) && e.parent().is(a.inner)) || a.inner.append(e),
                            s.trigger("beforeShow"),
                            a.inner.css(
                                "overflow",
                                "yes" === i
                                    ? "scroll"
                                    : "no" === i
                                    ? "hidden"
                                    : i
                            ),
                            s._setDimension(),
                            s.reposition(),
                            (s.isOpen = !1),
                            (s.coming = null),
                            s.bindEvents(),
                            s.isOpened
                                ? l.prevMethod && s.transitions[l.prevMethod]()
                                : n(".fancybox-wrap")
                                      .not(a.wrap)
                                      .stop(!0)
                                      .trigger("onReset")
                                      .remove(),
                            s.transitions[
                                s.isOpened ? a.nextMethod : a.openMethod
                            ](),
                            s._preloadImages();
                    }
            },
            _setDimension: function () {
                var e,
                    t = s.getViewport(),
                    i = 0,
                    o = s.wrap,
                    r = s.skin,
                    a = s.inner,
                    l = s.current;
                e = l.width;
                var c,
                    u,
                    d,
                    f,
                    m,
                    v,
                    y,
                    b,
                    x,
                    w = l.height,
                    S = l.minWidth,
                    C = l.minHeight,
                    $ = l.maxWidth,
                    _ = l.maxHeight,
                    T = l.scrolling,
                    k = l.scrollOutside ? l.scrollbarWidth : 0,
                    E = l.margin,
                    A = h(E[1] + E[3]),
                    O = h(E[0] + E[2]);
                if (
                    (o
                        .add(r)
                        .add(a)
                        .width("auto")
                        .height("auto")
                        .removeClass("fancybox-tmp"),
                    (u = A + (E = h(r.outerWidth(!0) - r.width()))),
                    (d = O + (c = h(r.outerHeight(!0) - r.height()))),
                    (f = p(e) ? ((t.w - u) * h(e)) / 100 : e),
                    (m = p(w) ? ((t.h - d) * h(w)) / 100 : w),
                    "iframe" === l.type)
                ) {
                    if (
                        ((x = l.content),
                        l.autoHeight && x && 1 === x.data("ready"))
                    )
                        try {
                            x[0].contentWindow.document.location &&
                                (a.width(f).height(9999),
                                (v = x.contents().find("body")),
                                k && v.css("overflow-x", "hidden"),
                                (m = v.outerHeight(!0)));
                        } catch (e) {}
                } else
                    (l.autoWidth || l.autoHeight) &&
                        (a.addClass("fancybox-tmp"),
                        l.autoWidth || a.width(f),
                        l.autoHeight || a.height(m),
                        l.autoWidth && (f = a.width()),
                        l.autoHeight && (m = a.height()),
                        a.removeClass("fancybox-tmp"));
                if (
                    ((e = h(f)),
                    (w = h(m)),
                    (b = f / m),
                    (S = h(p(S) ? h(S, "w") - u : S)),
                    ($ = h(p($) ? h($, "w") - u : $)),
                    (C = h(p(C) ? h(C, "h") - d : C)),
                    (v = $),
                    (y = _ = h(p(_) ? h(_, "h") - d : _)),
                    l.fitToView &&
                        (($ = Math.min(t.w - u, $)),
                        (_ = Math.min(t.h - d, _))),
                    (u = t.w - A),
                    (O = t.h - O),
                    l.aspectRatio
                        ? (e > $ && (w = h((e = $) / b)),
                          w > _ && (e = h((w = _) * b)),
                          e < S && (w = h((e = S) / b)),
                          w < C && (e = h((w = C) * b)))
                        : ((e = Math.max(S, Math.min(e, $))),
                          l.autoHeight &&
                              "iframe" !== l.type &&
                              (a.width(e), (w = a.height())),
                          (w = Math.max(C, Math.min(w, _)))),
                    l.fitToView)
                )
                    if (
                        (a.width(e).height(w),
                        o.width(e + E),
                        (t = o.width()),
                        (A = o.height()),
                        l.aspectRatio)
                    )
                        for (
                            ;
                            (t > u || A > O) && e > S && w > C && !(19 < i++);

                        )
                            (w = Math.max(C, Math.min(_, w - 10))),
                                (e = h(w * b)) < S && (w = h((e = S) / b)),
                                e > $ && (w = h((e = $) / b)),
                                a.width(e).height(w),
                                o.width(e + E),
                                (t = o.width()),
                                (A = o.height());
                    else
                        (e = Math.max(S, Math.min(e, e - (t - u)))),
                            (w = Math.max(C, Math.min(w, w - (A - O))));
                k && "auto" === T && w < m && e + E + k < u && (e += k),
                    a.width(e).height(w),
                    o.width(e + E),
                    (t = o.width()),
                    (A = o.height()),
                    (i = (t > u || A > O) && e > S && w > C),
                    (e = l.aspectRatio
                        ? e < v && w < y && e < f && w < m
                        : (e < v || w < y) && (e < f || w < m)),
                    n.extend(l, {
                        dim: {
                            width: g(t),
                            height: g(A),
                        },
                        origWidth: f,
                        origHeight: m,
                        canShrink: i,
                        canExpand: e,
                        wPadding: E,
                        hPadding: c,
                        wrapSpace: A - r.outerHeight(!0),
                        skinSpace: r.height() - w,
                    }),
                    !x &&
                        l.autoHeight &&
                        w > C &&
                        w < _ &&
                        !e &&
                        a.height("auto");
            },
            _getPosition: function (e) {
                var t = s.current,
                    n = s.getViewport(),
                    i = t.margin,
                    o = s.wrap.width() + i[1] + i[3],
                    r = s.wrap.height() + i[0] + i[2];
                i = {
                    position: "absolute",
                    top: i[0],
                    left: i[3],
                };
                return (
                    t.autoCenter && t.fixed && !e && r <= n.h && o <= n.w
                        ? (i.position = "fixed")
                        : t.locked || ((i.top += n.y), (i.left += n.x)),
                    (i.top = g(
                        Math.max(i.top, i.top + (n.h - r) * t.topRatio)
                    )),
                    (i.left = g(
                        Math.max(i.left, i.left + (n.w - o) * t.leftRatio)
                    )),
                    i
                );
            },
            _afterZoomIn: function () {
                var e = s.current;
                e &&
                    ((s.isOpen = s.isOpened = !0),
                    s.wrap
                        .css("overflow", "visible")
                        .addClass("fancybox-opened")
                        .hide()
                        .show(0),
                    s.update(),
                    (e.closeClick || (e.nextClick && 1 < s.group.length)) &&
                        s.inner
                            .css("cursor", "pointer")
                            .bind("click.fb", function (t) {
                                n(t.target).is("a") ||
                                    n(t.target).parent().is("a") ||
                                    (t.preventDefault(),
                                    s[e.closeClick ? "close" : "next"]());
                            }),
                    e.closeBtn &&
                        n(e.tpl.closeBtn)
                            .appendTo(s.skin)
                            .bind("click.fb", function (e) {
                                e.preventDefault(), s.close();
                            }),
                    e.arrows &&
                        1 < s.group.length &&
                        ((e.loop || 0 < e.index) &&
                            n(e.tpl.prev)
                                .appendTo(s.outer)
                                .bind("click.fb", s.prev),
                        (e.loop || e.index < s.group.length - 1) &&
                            n(e.tpl.next)
                                .appendTo(s.outer)
                                .bind("click.fb", s.next)),
                    s.trigger("afterShow"),
                    e.loop || e.index !== e.group.length - 1
                        ? s.opts.autoPlay &&
                          !s.player.isActive &&
                          ((s.opts.autoPlay = !1), s.play(!0))
                        : s.play(!1));
            },
            _afterZoomOut: function (e) {
                (e = e || s.current),
                    n(".fancybox-wrap").trigger("onReset").remove(),
                    n.extend(s, {
                        group: {},
                        opts: {},
                        router: !1,
                        current: null,
                        isActive: !1,
                        isOpened: !1,
                        isOpen: !1,
                        isClosing: !1,
                        wrap: null,
                        skin: null,
                        outer: null,
                        inner: null,
                    }),
                    s.trigger("afterClose", e);
            },
        }),
            (s.transitions = {
                getOrigPosition: function () {
                    var e = s.current,
                        t = e.element,
                        n = e.orig,
                        i = {},
                        o = 50,
                        r = 50,
                        a = e.hPadding,
                        l = e.wPadding,
                        c = s.getViewport();
                    return (
                        !n &&
                            e.isDom &&
                            t.is(":visible") &&
                            ((n = t.find("img:first")).length || (n = t)),
                        d(n)
                            ? ((i = n.offset()),
                              n.is("img") &&
                                  ((o = n.outerWidth()), (r = n.outerHeight())))
                            : ((i.top = c.y + (c.h - r) * e.topRatio),
                              (i.left = c.x + (c.w - o) * e.leftRatio)),
                        ("fixed" === s.wrap.css("position") || e.locked) &&
                            ((i.top -= c.y), (i.left -= c.x)),
                        {
                            top: g(i.top - a * e.topRatio),
                            left: g(i.left - l * e.leftRatio),
                            width: g(o + l),
                            height: g(r + a),
                        }
                    );
                },
                step: function (e, t) {
                    var n,
                        i,
                        o = t.prop,
                        r = (i = s.current).wrapSpace,
                        a = i.skinSpace;
                    ("width" !== o && "height" !== o) ||
                        ((n =
                            t.end === t.start
                                ? 1
                                : (e - t.start) / (t.end - t.start)),
                        s.isClosing && (n = 1 - n),
                        (i = e - (i = "width" === o ? i.wPadding : i.hPadding)),
                        s.skin[o](h("width" === o ? i : i - r * n)),
                        s.inner[o](h("width" === o ? i : i - r * n - a * n)));
                },
                zoomIn: function () {
                    var e = s.current,
                        t = e.pos,
                        i = e.openEffect,
                        o = "elastic" === i,
                        r = n.extend(
                            {
                                opacity: 1,
                            },
                            t
                        );
                    delete r.position,
                        o
                            ? ((t = this.getOrigPosition()),
                              e.openOpacity && (t.opacity = 0.1))
                            : "fade" === i && (t.opacity = 0.1),
                        s.wrap.css(t).animate(r, {
                            duration: "none" === i ? 0 : e.openSpeed,
                            easing: e.openEasing,
                            step: o ? this.step : null,
                            complete: s._afterZoomIn,
                        });
                },
                zoomOut: function () {
                    var e = s.current,
                        t = e.closeEffect,
                        n = "elastic" === t,
                        i = {
                            opacity: 0.1,
                        };
                    n &&
                        ((i = this.getOrigPosition()),
                        e.closeOpacity && (i.opacity = 0.1)),
                        s.wrap.animate(i, {
                            duration: "none" === t ? 0 : e.closeSpeed,
                            easing: e.closeEasing,
                            step: n ? this.step : null,
                            complete: s._afterZoomOut,
                        });
                },
                changeIn: function () {
                    var e,
                        t = s.current,
                        n = t.nextEffect,
                        i = t.pos,
                        o = {
                            opacity: 1,
                        },
                        r = s.direction;
                    (i.opacity = 0.1),
                        "elastic" === n &&
                            ((e = "down" === r || "up" === r ? "top" : "left"),
                            "down" === r || "right" === r
                                ? ((i[e] = g(h(i[e]) - 200)),
                                  (o[e] = "+=200px"))
                                : ((i[e] = g(h(i[e]) + 200)),
                                  (o[e] = "-=200px"))),
                        "none" === n
                            ? s._afterZoomIn()
                            : s.wrap.css(i).animate(o, {
                                  duration: t.nextSpeed,
                                  easing: t.nextEasing,
                                  complete: s._afterZoomIn,
                              });
                },
                changeOut: function () {
                    var e = s.previous,
                        t = e.prevEffect,
                        i = {
                            opacity: 0.1,
                        },
                        o = s.direction;
                    "elastic" === t &&
                        (i["down" === o || "up" === o ? "top" : "left"] =
                            ("up" === o || "left" === o ? "-" : "+") +
                            "=200px"),
                        e.wrap.animate(i, {
                            duration: "none" === t ? 0 : e.prevSpeed,
                            easing: e.prevEasing,
                            complete: function () {
                                n(this).trigger("onReset").remove();
                            },
                        });
                },
            }),
            (s.helpers.overlay = {
                defaults: {
                    closeClick: !0,
                    speedOut: 200,
                    showEarly: !0,
                    css: {},
                    locked: !u,
                    fixed: !0,
                },
                overlay: null,
                fixed: !1,
                el: n("html"),
                create: function (e) {
                    var t;
                    (e = n.extend({}, this.defaults, e)),
                        this.overlay && this.close(),
                        (t = s.coming ? s.coming.parent : e.parent),
                        (this.overlay = n(
                            '<div class="fancybox-overlay"></div>'
                        ).appendTo(t && t.length ? t : "body")),
                        (this.fixed = !1),
                        e.fixed &&
                            s.defaults.fixed &&
                            (this.overlay.addClass("fancybox-overlay-fixed"),
                            (this.fixed = !0));
                },
                open: function (e) {
                    var t = this;
                    (e = n.extend({}, this.defaults, e)),
                        this.overlay
                            ? this.overlay
                                  .unbind(".overlay")
                                  .width("auto")
                                  .height("auto")
                            : this.create(e),
                        this.fixed ||
                            (r.bind(
                                "resize.overlay",
                                n.proxy(this.update, this)
                            ),
                            this.update()),
                        e.closeClick &&
                            this.overlay.bind("click.overlay", function (e) {
                                if (n(e.target).hasClass("fancybox-overlay"))
                                    return (
                                        s.isActive ? s.close() : t.close(), !1
                                    );
                            }),
                        this.overlay.css(e.css).show();
                },
                close: function () {
                    r.unbind("resize.overlay"),
                        this.el.hasClass("fancybox-lock") &&
                            (n(".fancybox-margin").removeClass(
                                "fancybox-margin"
                            ),
                            this.el.removeClass("fancybox-lock"),
                            r.scrollTop(this.scrollV).scrollLeft(this.scrollH)),
                        n(".fancybox-overlay").remove().hide(),
                        n.extend(this, {
                            overlay: null,
                            fixed: !1,
                        });
                },
                update: function () {
                    var e,
                        n = "100%";
                    this.overlay.width(n).height("100%"),
                        l
                            ? ((e = Math.max(
                                  t.documentElement.offsetWidth,
                                  t.body.offsetWidth
                              )),
                              a.width() > e && (n = a.width()))
                            : a.width() > r.width() && (n = a.width()),
                        this.overlay.width(n).height(a.height());
                },
                onReady: function (e, t) {
                    var i = this.overlay;
                    n(".fancybox-overlay").stop(!0, !0),
                        i || this.create(e),
                        e.locked &&
                            this.fixed &&
                            t.fixed &&
                            ((t.locked = this.overlay.append(t.wrap)),
                            (t.fixed = !1)),
                        !0 === e.showEarly &&
                            this.beforeShow.apply(this, arguments);
                },
                beforeShow: function (e, t) {
                    t.locked &&
                        !this.el.hasClass("fancybox-lock") &&
                        (!1 !== this.fixPosition &&
                            n("*:not(object)")
                                .filter(function () {
                                    return (
                                        "fixed" === n(this).css("position") &&
                                        !n(this).hasClass("fancybox-overlay") &&
                                        !n(this).hasClass("fancybox-wrap")
                                    );
                                })
                                .addClass("fancybox-margin"),
                        this.el.addClass("fancybox-margin"),
                        (this.scrollV = r.scrollTop()),
                        (this.scrollH = r.scrollLeft()),
                        this.el.addClass("fancybox-lock"),
                        r.scrollTop(this.scrollV).scrollLeft(this.scrollH)),
                        this.open(e);
                },
                onUpdate: function () {
                    this.fixed || this.update();
                },
                afterClose: function (e) {
                    this.overlay &&
                        !s.coming &&
                        this.overlay.fadeOut(
                            e.speedOut,
                            n.proxy(this.close, this)
                        );
                },
            }),
            (s.helpers.title = {
                defaults: {
                    type: "float",
                    position: "bottom",
                },
                beforeShow: function (e) {
                    var t = s.current,
                        i = t.title,
                        o = e.type;
                    if (
                        (n.isFunction(i) && (i = i.call(t.element, t)),
                        f(i) && "" !== n.trim(i))
                    ) {
                        switch (
                            ((t = n(
                                '<div class="fancybox-title fancybox-title-' +
                                    o +
                                    '-wrap">' +
                                    i +
                                    "</div>"
                            )),
                            o)
                        ) {
                            case "inside":
                                o = s.skin;
                                break;
                            case "outside":
                                o = s.wrap;
                                break;
                            case "over":
                                o = s.inner;
                                break;
                            default:
                                (o = s.skin),
                                    t.appendTo("body"),
                                    l && t.width(t.width()),
                                    t.wrapInner('<span class="child"></span>'),
                                    (s.current.margin[2] += Math.abs(
                                        h(t.css("margin-bottom"))
                                    ));
                        }
                        t["top" === e.position ? "prependTo" : "appendTo"](o);
                    }
                },
            }),
            (n.fn.fancybox = function (e) {
                var t,
                    i = n(this),
                    o = this.selector || "",
                    r = function (r) {
                        var a,
                            l,
                            c = n(this).blur(),
                            u = t;
                        r.ctrlKey ||
                            r.altKey ||
                            r.shiftKey ||
                            r.metaKey ||
                            c.is(".fancybox-wrap") ||
                            ((a = e.groupAttr || "data-fancybox-group"),
                            (l = c.attr(a)) || ((a = "rel"), (l = c.get(0)[a])),
                            l &&
                                "" !== l &&
                                "nofollow" !== l &&
                                (u = (c = (c = o.length ? n(o) : i).filter(
                                    "[" + a + '="' + l + '"]'
                                )).index(this)),
                            (e.index = u),
                            !1 !== s.open(c, e) && r.preventDefault());
                    };
                return (
                    (t = (e = e || {}).index || 0),
                    o && !1 !== e.live
                        ? a
                              .undelegate(o, "click.fb-start")
                              .delegate(
                                  o + ":not('.fancybox-item, .fancybox-nav')",
                                  "click.fb-start",
                                  r
                              )
                        : i.unbind("click.fb-start").bind("click.fb-start", r),
                    this.filter("[data-fancybox-start=1]").trigger("click"),
                    this
                );
            }),
            a.ready(function () {
                var t, r;
                n.scrollbarWidth === i &&
                    (n.scrollbarWidth = function () {
                        var e = n(
                                '<div style="width:50px;height:50px;overflow:auto"><div/></div>'
                            ).appendTo("body"),
                            t =
                                (t = e.children()).innerWidth() -
                                t.height(99).innerWidth();
                        return e.remove(), t;
                    }),
                    n.support.fixedPosition === i &&
                        (n.support.fixedPosition = (function () {
                            var e = n(
                                    '<div style="position:fixed;top:20px;"></div>'
                                ).appendTo("body"),
                                t =
                                    20 === e[0].offsetTop ||
                                    15 === e[0].offsetTop;
                            return e.remove(), t;
                        })()),
                    n.extend(s.defaults, {
                        scrollbarWidth: n.scrollbarWidth(),
                        fixed: n.support.fixedPosition,
                        parent: n("body"),
                    }),
                    (t = n(e).width()),
                    o.addClass("fancybox-lock-test"),
                    (r = n(e).width()),
                    o.removeClass("fancybox-lock-test"),
                    n(
                        "<style type='text/css'>.fancybox-margin{margin-right:" +
                            (r - t) +
                            "px;}</style>"
                    ).appendTo("head");
            });
    })(window, document, jQuery),
    (function (e, t) {
        "use strict";
        var n = e.jQuery || e.Zepto,
            i = 0,
            o = !1;

        function r(i, r, a, s, l) {
            var c = 0,
                u = -1,
                d = -1,
                f = !1,
                p = "afterLoad",
                h = "load",
                g = "error",
                m = "img",
                v = "src",
                y = "srcset",
                b = "sizes",
                x = "background-image";

            function w() {
                var t, o, c, p;
                (f = e.devicePixelRatio > 1),
                    (a = S(a)),
                    r.delay >= 0 &&
                        setTimeout(function () {
                            C(!0);
                        }, r.delay),
                    (r.delay < 0 || r.combined) &&
                        ((s.e =
                            ((t = r.throttle),
                            (o = function (e) {
                                "resize" === e.type && (u = d = -1), C(e.all);
                            }),
                            (p = 0),
                            function (e, n) {
                                var a = +new Date() - p;

                                function s() {
                                    (p = +new Date()), o.call(i, e);
                                }
                                c && clearTimeout(c),
                                    a > t || !r.enableThrottle || n
                                        ? s()
                                        : (c = setTimeout(s, t - a));
                            })),
                        (s.a = function (e) {
                            (e = S(e)), a.push.apply(a, e);
                        }),
                        (s.g = function () {
                            return (a = n(a).filter(function () {
                                return !n(this).data(r.loadedName);
                            }));
                        }),
                        (s.f = function (e) {
                            for (var t = 0; t < e.length; t++) {
                                var n = a.filter(function () {
                                    return this === e[t];
                                });
                                n.length && C(!1, n);
                            }
                        }),
                        C(),
                        n(r.appendScroll).on(
                            "scroll." + l + " resize." + l,
                            s.e
                        ));
            }

            function S(e) {
                for (
                    var o = r.defaultImage,
                        a = r.placeholder,
                        s = r.imageBase,
                        l = r.srcsetAttribute,
                        c = r.loaderAttribute,
                        u = r._f || {},
                        d = 0,
                        f = (e = n(e)
                            .filter(function () {
                                var e = n(this),
                                    i = T(this);
                                return (
                                    !e.data(r.handledName) &&
                                    (e.attr(r.attribute) ||
                                        e.attr(l) ||
                                        e.attr(c) ||
                                        u[i] !== t)
                                );
                            })
                            .data("plugin_" + r.name, i)).length;
                    d < f;
                    d++
                ) {
                    var p = n(e[d]),
                        h = T(e[d]),
                        g = p.attr(r.imageBaseAttribute) || s;
                    h === m && g && p.attr(l) && p.attr(l, k(p.attr(l), g)),
                        u[h] === t || p.attr(c) || p.attr(c, u[h]),
                        h === m && o && !p.attr(v)
                            ? p.attr(v, o)
                            : h === m ||
                              !a ||
                              (p.css(x) && "none" !== p.css(x)) ||
                              p.css(x, "url('" + a + "')");
                }
                return e;
            }

            function C(e, t) {
                if (a.length) {
                    var o = t || a,
                        s = !1,
                        l = r.imageBase || "",
                        c = r.srcsetAttribute,
                        u = r.handledName;
                    g = r.imageAltAttribute;
                    for (var d = 0; d < o.length; d++)
                        if (e || t || _(o[d])) {
                            var f = n(o[d]),
                                p = T(o[d]),
                                h = f.attr(r.attribute),
                                g = f.attr(r.imageAltAttribute),
                                b = f.attr(r.imageBaseAttribute) || l,
                                w = f.attr(r.loaderAttribute);
                            f.data(u) ||
                                (r.visibleOnly && !f.is(":visible")) ||
                                !(
                                    ((h || f.attr(c)) &&
                                        ((p === m &&
                                            (b + h !== f.attr(v) ||
                                                f.attr(c) !== f.attr(y))) ||
                                            (p !== m && b + h !== f.css(x)))) ||
                                    w
                                ) ||
                                ((s = !0), f.data(u, !0), $(f, p, b, w)),
                                f.attr("alt", g);
                        }
                    s &&
                        (a = n(a).filter(function () {
                            return !n(this).data(u);
                        }));
                } else r.autoDestroy && i.destroy();
            }

            function $(e, t, i, o) {
                ++c;
                var a = function () {
                    A("onError", e), E(), (a = n.noop);
                };
                A("beforeLoad", e);
                var s = r.attribute,
                    l = r.srcsetAttribute,
                    u = r.sizesAttribute,
                    d = r.retinaAttribute,
                    w = r.imageAltAttribute,
                    S = r.removeAttribute,
                    C = r.loadedName,
                    $ = e.attr(d);
                if (o) {
                    var _ = function () {
                        S && e.removeAttr(r.loaderAttribute),
                            e.data(C, !0),
                            A(p, e),
                            setTimeout(E, 1),
                            (_ = n.noop);
                    };
                    e.off(g).one(g, a).one(h, _),
                        A(o, e, function (t) {
                            t ? (e.off(h), _()) : (e.off(g), a());
                        }) || e.trigger(g);
                } else {
                    var T = n(new Image());
                    T.one(g, a).one(h, function () {
                        e.hide(),
                            t === m
                                ? e
                                      .attr(b, T.attr(b))
                                      .attr(y, T.attr(y))
                                      .attr(v, T.attr(v))
                                : e.css(x, "url('" + T.attr(v) + "')"),
                            e[r.effect](r.effectTime),
                            S &&
                                (e.removeAttr(
                                    s +
                                        " " +
                                        l +
                                        " " +
                                        d +
                                        " " +
                                        r.imageBaseAttribute +
                                        " " +
                                        w
                                ),
                                u !== b && e.removeAttr(u)),
                            e.data(C, !0),
                            A(p, e),
                            T.remove(),
                            E();
                    });
                    var k = (f && $ ? $ : e.attr(s)) || "";
                    T.attr(b, e.attr(u))
                        .attr(y, e.attr(l))
                        .attr(v, k ? i + k : null),
                        T.complete && T.trigger(h);
                }
            }

            function _(t) {
                var i = t.getBoundingClientRect(),
                    o = r.scrollDirection,
                    a = r.threshold,
                    s =
                        (d >= 0 ? d : (d = n(e).height())) + a > i.top &&
                        -a < i.bottom,
                    l =
                        (u >= 0 ? u : (u = n(e).width())) + a > i.left &&
                        -a < i.right;
                return "vertical" === o ? s : "horizontal" === o ? l : s && l;
            }

            function T(e) {
                return e.tagName.toLowerCase();
            }

            function k(e, t) {
                if (t) {
                    var n = e.split(",");
                    e = "";
                    for (var i = 0, o = n.length; i < o; i++)
                        e += t + n[i].trim() + (i !== o - 1 ? "," : "");
                }
                return e;
            }

            function E() {
                --c, a.length || c || A("onFinishedAll");
            }

            function A(e, t, n) {
                return (
                    !!(e = r[e]) &&
                    (e.apply(i, [].slice.call(arguments, 1)), !0)
                );
            }
            "event" === r.bind || o ? w() : n(e).on(h + "." + l, w);
        }

        function a(o, a) {
            var s = this,
                l = n.extend({}, s.config, a),
                c = {},
                u = l.name + "-" + ++i;
            return (
                (s.config = function (e, n) {
                    return n === t ? l[e] : ((l[e] = n), s);
                }),
                (s.addItems = function (e) {
                    return c.a && c.a("string" === n.type(e) ? n(e) : e), s;
                }),
                (s.getItems = function () {
                    return c.g ? c.g() : {};
                }),
                (s.update = function (e) {
                    return c.e && c.e({}, !e), s;
                }),
                (s.force = function (e) {
                    return c.f && c.f("string" === n.type(e) ? n(e) : e), s;
                }),
                (s.loadAll = function () {
                    return (
                        c.e &&
                            c.e(
                                {
                                    all: !0,
                                },
                                !0
                            ),
                        s
                    );
                }),
                (s.destroy = function () {
                    return (
                        n(l.appendScroll).off("." + u, c.e),
                        n(e).off("." + u),
                        (c = {}),
                        t
                    );
                }),
                r(s, l, o, c, u),
                l.chainable ? o : s
            );
        }
        (n.fn.Lazy = n.fn.lazy =
            function (e) {
                return new a(this, e);
            }),
            (n.Lazy = n.lazy =
                function (e, i, o) {
                    if (
                        (n.isFunction(i) && ((o = i), (i = [])),
                        n.isFunction(o))
                    ) {
                        (e = n.isArray(e) ? e : [e]),
                            (i = n.isArray(i) ? i : [i]);
                        for (
                            var r = a.prototype.config,
                                s = r._f || (r._f = {}),
                                l = 0,
                                c = e.length;
                            l < c;
                            l++
                        )
                            (r[e[l]] === t || n.isFunction(r[e[l]])) &&
                                (r[e[l]] = o);
                        for (var u = 0, d = i.length; u < d; u++)
                            s[i[u]] = e[0];
                    }
                }),
            (a.prototype.config = {
                name: "lazy",
                chainable: !0,
                autoDestroy: !0,
                bind: "load",
                threshold: 500,
                visibleOnly: !1,
                appendScroll: e,
                scrollDirection: "both",
                imageBase: null,
                defaultImage:
                    "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==",
                placeholder: null,
                delay: -1,
                combined: !1,
                attribute: "data-src",
                srcsetAttribute: "data-srcset",
                sizesAttribute: "data-sizes",
                retinaAttribute: "data-retina",
                loaderAttribute: "data-loader",
                imageBaseAttribute: "data-imagebase",
                imageAltAttribute: "data-alt",
                removeAttribute: !0,
                handledName: "handled",
                loadedName: "loaded",
                effect: "show",
                effectTime: 0,
                enableThrottle: !0,
                throttle: 250,
                beforeLoad: t,
                afterLoad: t,
                onError: t,
                onFinishedAll: t,
            }),
            n(e).on("load", function () {
                o = !0;
            });
    })(window);
var isMobile = !1;
(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(
    navigator.userAgent
) ||
    /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
        navigator.userAgent.substr(0, 4)
    )) &&
    (isMobile = !0);
var emailRegExp =
        /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.([a-z]){2,4})$/,
    phone_regex = /^0([0-9]{9,10})$/;
$(function () {
    $(".lazy").lazy();
}),
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    }),
    $(document).ready(function () {
        $(".various").fancybox({
            maxWidth: 800,
            maxHeight: 600,
            fitToView: !1,
            width: "70%",
            height: "70%",
            autoSize: !0,
            closeClick: !1,
            openEffect: "none",
            closeEffect: "none",
            helpers: {
                overlay: {
                    closeClick: !1,
                },
            },
            keys: {
                close: null,
            },
        }),
            (toastr.options = {
                closeButton: !1,
                debug: !1,
                newestOnTop: !1,
                progressBar: !1,
                rtl: !1,
                positionClass: "toast-top-center",
                preventDuplicates: !1,
                onclick: null,
                showDuration: 300,
                hideDuration: 1e3,
                timeOut: 3e3,
                extendedTimeOut: 1e3,
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
            }),
            advisory_request_one(),
            toogle_comment(),
            newsletter(),
            vipConfirm(),
            show_cart_mobile(),
            $(
                ".box_category_home_product .ul_list_recieve_text"
            ).mCustomScrollbar(),
            $(".img_click_minus").click(function () {
                var e = $(".number_cart_input").val(),
                    t = parseInt(e),
                    n = $(".number_cart_input");
                t > 1 && n.val(--t);
            }),
            $(".img_click_plus").click(function () {
                var e = $(".number_cart_input").val(),
                    t = parseInt(e);
                $(".number_cart_input").val(++t);
            }),
            $(".view_more_cate").click(function () {
                $(this).find("span").hasClass("fa-plus")
                    ? $(this).find("span").attr("class", "fa fa-minus")
                    : $(this).find("span").attr("class", "fa fa-plus"),
                    $("#view_more_cate").toggle();
            }),
            $("#wrapper_tab a.tab_link").hover(function () {
                return (
                    $(this).attr("class") != $("#wrapper_tab").attr("class") &&
                        $("#wrapper_tab").attr("class", $(this).attr("class")),
                    !1
                );
            }),
            $("input[name=s_cate_select]").click(function () {
                if ($(this).is(":checked")) {
                    var e = $(this).val();
                    $("#frm_search_mobile").find("input[name=s_cate]").val(e);
                } else $("#frm_search_mobile").find("input[name=s_cate]").val(0);
            }),
            $(".container").click(function () {
                $(".container").removeAttr("style");
            }),
            $(".icon_arow_click").click(function () {
                $(".ul_menu_mb_child").hide();
            }),
            $(".icon_arow_click").toggle(
                function () {
                    $(this).siblings(".ul_menu_mb_child").slideDown("fast");
                },
                function () {
                    $(this).siblings(".ul_menu_mb_child").slideUp("fast");
                }
            );
    }),
    $(window).scroll(function () {
        show_cart_mobile();
    }),
    [].slice
        .call(document.querySelectorAll("select.cs-select"))
        .forEach(function (e) {
            new SelectFx(e);
        });
var ajax_loadding = $(".ajax_loadding");

function add_to_cart(e) {
    $.ajax({
        type: "POST",
        url: "cart/add",
        data: {
            id: e,
            qty: 1,
        },
        success: function () {
            document.location = "gio-hang.html";
        },
    });
}

function load_district() {
    var e = $('select[name="province_id"]').val();
    $.ajax({
        type: "GET",
        url: "load-district",
        data: {
            province_id: e,
        },
        success: function (e) {
            $('select[name="district_id"]').html(e);
        },
    });
}

function load_ward() {
    var e = $('select[name="district_id"]').val();
    $.ajax({
        type: "GET",
        url: "load-ward",
        data: {
            district_id: e,
        },
        success: function (e) {
            $('select[name="ward_id"]').html(e);
        },
    });
}

function enable_edit(e) {
    (value = $("input[name=" + e + "]").attr("readonly")),
        "readonly" == value
            ? $("input[name=" + e + "]").attr("readonly", !1)
            : $("input[name=" + e + "]").attr("readonly", !0);
}

function validateSearch() {
    var e = document.getElementById("s_cate").value,
        t = document.getElementById("s_keyword").value.toLowerCase();
    return "" ==
        (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = t.replace(
            /à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,
            "a"
        )).replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e")).replace(
            /ì|í|ị|ỉ|ĩ/g,
            "i"
        )).replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o")).replace(
            /ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,
            "u"
        )).replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y")).replace(/đ/g, "d")).replace(
            /!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g,
            "-"
        )).replace(/-+-/g, "-")).replace(/^\-+|\-+$/g, ""))
        ? (alert("Bạn chưa nhập từ khóa"), !1)
        : ((window.location.href = "tim-kiem/cat/" + e + "/q/" + t + "/"), !1);
}

function toogle_comment() {
    $(".list_commnet").show(),
        $(".comment_danhgia").toggle(
            function () {
                $(".list_commnet").slideDown("fast"),
                    $(".comment_danhgia p").addClass("active_p");
            },
            function () {
                $(".list_commnet").slideUp("fast"),
                    $(".active_p").removeClass("active_p");
            }
        );
}

function toogle_reaply(e) {
    $("#form_send_comment_" + e).slideToggle(),
        $("#comment_content_" + e).focus();
}

function goBack() {
    window.history.back();
}

function myFunction() {
    window.print();
}

function advisory_request_one() {
    $("#btn_adv_request_one").click(function (e) {
        e.preventDefault();
        var t = $("input[name=adv_phone]").val(),
            n = $("input[name=adv_email]").val();
        $(this).data("id");
        if (
            ("" == t
                ? $("#errorAdvPhone").html(
                      '<div class="show_error mgrb_10">Bạn chưa nhập số điện thoại</div>'
                  )
                : phone_regex.test(t)
                ? $("#errorAdvPhone").html("")
                : $("#errorAdvPhone").html(
                      '<div class="show_error mgrb_10">Số điện thoại không hợp lệ.</div>'
                  ),
            "" == n || emailRegExp.test(n)
                ? $("#errorAdvEmail").html("")
                : $("#errorAdvEmail").html(
                      '<div class="show_error mgrb_10">Định dạng Email không hợp lệ.</div>'
                  ),
            "" == t ||
                !phone_regex.test(t) ||
                ("" != n && !emailRegExp.test(n)))
        )
            return !1;
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "advisory-request",
            data: $("#form_tuvan").serialize(),
            beforeSend: function () {
                $("#btn_adv_request_one").val("Đang gửi...");
            },
            success: function (e) {
                1 == e.message
                    ? $("#add_success_mgs").html(
                          "<span>Cảm ơn bạn. Chúng tôi đã tiếp nhận yêu cầu tư vấn của bạn.</span>"
                      )
                    : $("#add_success_mgs").html(
                          "<span>Đã xảy ra lỗi. Vui lòng thử lại.</span>"
                      ),
                    $("#btn_adv_request_one").val("Gửi"),
                    $("#form_tuvan")
                        .find(
                            "input[type=text], input[type=email], textarea, select"
                        )
                        .val("");
            },
        });
    });
}

function list_feedback() {
    $("#list_feedback").load("list-feedback");
}

function send_feedback() {
    var e = $("#form_send_comment textarea[name=comment_content]").val();
    return (
        "" == e
            ? ($("#errorCommentContent").html(
                  '<div class="show_error">Bạn phải nhập nội dung.</div>'
              ),
              $("#form_send_comment textarea[name=comment_content]").focus())
            : $("#errorCommentContent").html(""),
        "" != e &&
            ($.ajax({
                type: "POST",
                dataType: "json",
                url: "send-feedback",
                data: {
                    content: e,
                },
                success: function (e) {
                    $("#mgs_comment").html(
                        '<div class="txt_success">' + e.message + "</div>"
                    ),
                        $("#form_send_comment")
                            .find(
                                "input[type=text], input[type=email], textarea, select"
                            )
                            .val(""),
                        list_feedback();
                },
                error: function (e, t) {
                    0 === e.status
                        ? console.log("Not connect.\n Verify Network.")
                        : 404 == e.status
                        ? console.log("Requested page not found. [404]")
                        : 500 == e.status
                        ? console.log("Internal Server Error [500].")
                        : "parsererror" === t
                        ? console.log("Requested JSON parse failed.")
                        : "timeout" === t
                        ? console.log("Time out error.")
                        : "abort" === t
                        ? console.log("Ajax request aborted.")
                        : console.log("Uncaught Error.\n" + e.responseText);
                },
            }),
            !1)
    );
}

function answer_feedback(e) {
    var t = $("#form_send_comment_" + e),
        n = t.find("textarea[name=comment_content]").val();
    return (
        "" == n
            ? ($("#errorCommentContent" + e).html(
                  '<div class="show_error">Bạn phải nhập nội dung.</div>'
              ),
              t.find("input[name=comment_name]" + e).focus())
            : $("#errorCommentContent" + e).html(""),
        "" != n &&
            ($.ajax({
                type: "POST",
                dataType: "json",
                url: "answer-feedback",
                data: {
                    comment_id: e,
                    content: n,
                },
                success: function (e) {
                    list_feedback();
                },
            }),
            !1)
    );
}

function newsletter() {
    $("#email_letter").submit(function (e) {
        e.preventDefault();
        var t = $(this).attr("action"),
            n = $("input[name=email_letter]").val();
        if (
            ("" == n
                ? $("#errorNewsletter").html(
                      '<div class="show_error_white">Bạn chưa nhập Email</div>'
                  )
                : emailRegExp.test(n)
                ? $("#errorNewsletter").html("")
                : $("#errorNewsletter").html(
                      '<div class="show_error_white">Email không hợp lệ.</div>'
                  ),
            "" == n || !emailRegExp.test(n))
        )
            return !1;
        $.ajax({
            type: "POST",
            dataType: "json",
            url: t,
            data: {
                email: n,
            },
            success: function (e) {
                $("#errorNewsletter").html(
                    '<div class="show_error_white">' + e.message + "</div>"
                ),
                    $("input[name=email_letter]").val("");
            },
            error: function (e) {
                var t = $.parseJSON(e.responseText);
                $.each(t, function (e, t) {
                    $("#errorNewsletter").html(
                        '<div class="show_error_white">' + t + "</div>"
                    );
                });
            },
        });
    }),
        $(".newsletter_btn").click(function (e) {
            e.preventDefault();
            let t = $(this).closest(".shortcode_form_newsletter"),
                n = t.attr("action"),
                i = t.find("input[name=newsletter_email]").val();
            if (
                ("" == i
                    ? t
                          .find(".newsletter_msg")
                          .html(
                              '<div class="show_error_white">Bạn chưa nhập Email</div>'
                          )
                    : emailRegExp.test(i)
                    ? t.find(".newsletter_msg").html("")
                    : t
                          .find(".newsletter_msg")
                          .html(
                              '<div class="show_error_white">Email không hợp lệ.</div>'
                          ),
                "" == i || !emailRegExp.test(i))
            )
                return !1;
            $.ajax({
                type: "POST",
                dataType: "json",
                url: n,
                data: {
                    email: i,
                },
                success: function (e) {
                    t
                        .find(".newsletter_msg")
                        .html(
                            '<div class="show_error_white">' +
                                e.message +
                                "</div>"
                        ),
                        $("input[name=newsletter_email]").val("");
                },
                error: function (e) {
                    var n = $.parseJSON(e.responseText);
                    $.each(n, function (e, n) {
                        t.find(".newsletter_msg").html(
                            '<div class="show_error_white">' + n + "</div>"
                        );
                    });
                },
            });
        });
}

function vipConfirm() {
    let e = $("#vip-confirm-form");
    e.submit(function (t) {
        t.preventDefault();
        let n = $(this).attr("action"),
            i = e.find($("input[name=phone]")).val();
        if (!phone_regex.test(i))
            return (
                toastr.error("Số điện thoại bạn nhập không đúng định dạng"),
                e.find($("input[name=phone]")).focus(),
                !1
            );
        $.ajax({
            url: n,
            type: "POST",
            data: e.serialize(),
        })
            .done(function (t) {
                toastr.success(t.message),
                    e
                        .find(
                            "input[type=text], input[type=tel], input[type=email], textarea, select"
                        )
                        .val(""),
                    setTimeout(function () {
                        $.fancybox.close();
                    }, 500);
            })
            .fail(function (e) {
                let t = $.parseJSON(e.responseText);
                $.each(t, function (e, t) {
                    toastr.error(t);
                });
            });
    });
}

function fbLogin() {
    FB.login(
        function (e) {
            e.authResponse
                ? (console.log("Welcome!  Fetching your information.... "),
                  FB.api(
                      "/me",
                      {
                          fields: "id,name,email,birthday,gender",
                      },
                      function (e) {
                          $.ajax({
                              type: "POST",
                              url: "login-facebook",
                              data: {
                                  id: e.id,
                                  email: e.email,
                                  name: e.name,
                                  gender: e.gender,
                                  birthday: e.birthday,
                              },
                              success: function (e) {
                                  window.location.href = e;
                              },
                          });
                      }
                  ))
                : console.log(
                      "User cancelled login or did not fully authorize."
                  );
        },
        {
            scope: "email,user_birthday",
        }
    );
}

function show_cart_mobile() {
    if ($(".box_other_product").length > 0 && $(window).width() < 992) {
        var e = $(".box_other_product").offset().top,
            t = $(window).height();
        $(window).scrollTop() > e - t
            ? $("#fixed_cart_phone").hide()
            : $("#fixed_cart_phone").show();
    }
}

function ajaxCall(e, t, n, i) {
    $.ajax({
        type: e,
        url: t,
        data: n,
    })
        .done(i)
        .fail(function (e) {
            let t = $.parseJSON(e.responseText);
            $.each(t, function (e, t) {
                toastr.error(t);
            });
        })
        .always(function () {});
}
