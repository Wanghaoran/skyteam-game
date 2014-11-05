(function() {
    var y, p, w, b, k, u, f, e, d, o, t, g, nt, tt, it, i, rt, ut, ft, s, h, et, c, ot, st, n, ht, r, ct, lt, at, vt, yt, l, a, pt, v, bt, kt = [].indexOf ||
        function(n) {
            for (var t = 0,
                     i = this.length; t < i; t++) if (t in this && this[t] === n) return t;
            return - 1
        };
    r = /[\t\r\n]/g;
    u = /\S+/g;
    vt = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
    f = typeof void 0;
    ht = /^(?:checked|selected|autofocus|autoplay|async|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped)$/i;
    at = /^-ms-/;
    ct = /-([\da-z])/gi;
    o = ["Webkit", "O", "Moz", "ms"];
    a = function(n) {
        return ("" + n).replace(vt, "")
    };
    c = function(n, t) {
        return n.nodeName && n.nodeName.toLowerCase() === t.toLowerCase()
    };
    h = function(n) {
        var t;
        return t = n && (n.ownerDocument || n).documentElement,
            t ? t.nodeName !== "HTML": !1
    };
    nt = function(n, t) {
        return t.toUpperCase()
    };
    k = function(n) {
        return n.replace(at, "ms-").replace(ct, nt)
    };
    pt = function(n, t) {
        var r, i, u;
        if (kt.call(n, t) >= 0) return t;
        for (r = t.charAt(0).toUpperCase() + t.slice(1), u = t, i = o.length; i--;) if (t = o[i] + r, t in n) return t;
        return u
    };
    rt = function(n) {
        for (var t = n.offsetParent || document.documentElement; t && !c(t, "html") && (t.style.position || "static") === "static";) t = t.offsetParent;
        return t || document.documentElement
    };
    n = function(n) {
        return Number((n || "0px").split("px")[0])
    };
    l = function() {
        var t, n;
        return n = document.createElement("div"),
            n.innerHTML = "<a href='/a'>a<\/a>",
            t = n.getElementsByTagName("a")[0],
            n.style.backgroundClip = "content-box",
            n.cloneNode(!0).style.backgroundClip = "",
        {
            cssFloat: !!t.style.cssFloat,
            clearCloneStyle: n.style.backgroundClip === "content-box"
        }
    } ();
    ot = {
        "class": "className"
    };
    t = {
        float: l.cssFloat ? "cssFloat": "styleFloat"
    };
    st = {};
    p = {};
    b = {};
    et = {};
    t = {};
    e = {};
    d = {
        columnCount: !0,
        fillOpacity: !0,
        fontWeight: !0,
        lineHeight: !0,
        opacity: !0,
        orphans: !0,
        widows: !0,
        zIndex: !0,
        zoom: !0
    };
    v = function(n, t, i) {
        return n.addEventListener ? n.addEventListener(t, i, !1) : n.attachEvent ? n.attachEvent("on" + t, i) : n["on" + t] = i
    };
    s = function(n, t) {
        var i;
        return (i = " " + t + " ", n.nodeType === 1 && (" " + n.className + " ").replace(r, " ").indexOf(i) >= 0) ? !0 : !1
    };
    lt = function(n, t) {
        var e, f, i, o, s;
        if (s = typeof t == "string" && t, s && (e = (t || "").match(u) || [], i = n.nodeType === 1 && (n.className ? (" " + n.className + " ").replace(r, " ") : ""), i)) {
            for (o = 0; f = e[o++];) while (i.indexOf(" " + f + " ") >= 0) i = i.replace(" " + f + " ", " ");
            return n.className = t ? a(i) : ""
        }
    };
    y = function(n, t) {
        var e, f, i, o, s;
        if (s = typeof t == "string" && t, s && (e = (t || "").match(u) || [], i = n.nodeType === 1 && (n.className ? (" " + n.className + " ").replace(r, " ") : " "), i)) {
            for (o = 0; f = e[o++];) i.indexOf(" " + f + " ") < 0 && (i += f + " ");
            return n.className = a(i)
        }
    };
    ft = function(n, t) {
        var r, i, u, f;
        if (i = n.nodeType, n && i !== 3 && i !== 8 && i !== 2) return u = i !== 1 || !h(n),
            u && (t = ot[t] || t, r = st[t]),
            r && get in r && (f = r.get(n, t)) !== null ? f: n[t]
    };
    tt = function(n, t) {
        var u, i, e, r;
        if (i = n.nodeType, n && i !== 3 && i !== 8 && i !== 2) return typeof n.getAttribute === f ? ft(n, t) : (e = i !== 1 || !h(n), e && (t = t.toLowerCase(), u = p[t] || (ht.test(t) ? b: et)), u && e && "get" in u && (r = u.get(n, t)) !== null ? r: (typeof n.getAttribute !== f && (r = n.getAttribute(t)), r === null ? void 0 : r))
    };
    yt = function(n, i, r) {
        var f, u, o, s;
        if (n && n.nodeType !== 3 && n.nodeType !== 8 && n.style && (u = k(i), o = n.style, i = t[u] || (t[u] = pt(o, u)), f = e[i] || e[u], s = typeof r, r !== null && (s !== "number" || !isNaN(r)))) {
            if (s !== "number" || d[u] || (r += "px"), l.clearCloneStyle || r !== "" || i.indexOf("background") !== 0 || (o[i] = "inherit"), !f || !("set" in f) || (r = f.set(n, r)) !== void 0) try {
                o[i] = r
            } catch(h) {}
            return r
        }
    };
    i = function(n) {
        var i, u, t, r;
        return r = window,
            i = {
                top: 0,
                left: 0
            },
            u = n.ownerDocument,
            t = u.documentElement,
            typeof n.getBoundingClientRect != "undefined" && (i = n.getBoundingClientRect()),
        {
            top: i.top + (r.pageYOffset || t.scrollTop) - (t.clientTop || 0),
            left: i.left + (r.pageXOffset || t.scrollLeft) - (t.clientLeft || 0)
        }
    };
    ut = function(t) {
        var f, u, r;
        return r = {
            top: 0,
            left: 0
        },
            u = rt(t),
            f = i(t),
            c(u, "html") || (r = i(u)),
            r.top += n(u.style.borderTopWidth),
            r.left += n(u.style.borderLeftWidth),
        {
            top: f.top - r.top - n(t.style.marginTop),
            left: f.left - r.left - n(t.style.marginLeft)
        }
    };
    it = function(n) {
        return n.clientHeight
    };
    g = function(n, t, i, r) {
        var u, f, e, o, s = this;
        return e = (i || "").split("."),
            f = e.length > 1,
            u = f ? e[1] : null,
            o = f ? null: i.toLowerCase(),
            v(n, t,
                function(n) {
                    for (var i, t = n.target || n.srcElement; t;) {
                        if (t.tagName && (!o || t.tagName.toLowerCase() === o) && (!u || s.hasClass(t, u))) return i = {
                            currentTarget: t,
                            target: t,
                            srcElement: t,
                            keyCode: n.keyCode,
                            preventDefault: function() {
                                return typeof n.preventDefault == "function" && n.preventDefault(),
                                    n.returnValue = !1
                            },
                            stopPropagation: function() {
                                return typeof n.stopPropagation == "function" && n.stopPropagation(),
                                    n.cancelBubble = !0
                            }
                        },
                            r.call(s, i);
                        t = t.parentNode
                    }
                })
    };
    w = function(n, t, i) {
        return v(n, t,
            function(n) {
                var t, r;
                return t = n.target || n.srcElement,
                    r = {
                        currentTarget: t,
                        target: t,
                        srcElement: t,
                        keyCode: n.keyCode,
                        preventDefault: function() {
                            return typeof n.preventDefault == "function" && n.preventDefault(),
                                n.returnValue = !1
                        },
                        stopPropagation: function() {
                            return typeof n.stopPropagation == "function" && n.stopPropagation(),
                                n.cancelBubble = !0
                        }
                    },
                    i.call(this, r)
            })
    };
    var dt = function(n, t, i) {
            return typeof document.getElementsByClassName == "function" && t != null ? n.getElementsByClassName(t) : (t = gt(t), ni(n, t, i))
        },
        gt = function(n) {
            return (n || "").replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "")
        },
        ni = function(n, t, i) {
            var r;
            return r = [],
                wt(n.childNodes, r, t, i),
                r
        },
        wt = function(n, t, i, r) {
            for (var u, f = 0,
                     e = []; f < n.length;) u = n[f],
                u.tagName && (!r || u.tagName.toLowerCase() === r) && (!i || s(u, i)) && t.push(u),
                wt(u.childNodes, t, i, r),
                e.push(f++);
            return e
        }; (bt = window.Skyscanner) == null && (window.Skyscanner = {});
    window.Skyscanner.dom_wrapper = {
        hasClass: s,
        removeClass: lt,
        addClass: y,
        getAttr: tt,
        setCss: yt,
        getPosition: ut,
        getOffset: i,
        getHeight: it,
        delegateEvent: g,
        bindEvent: w,
        findByClass: dt
    }
}).call(this),
    function() {
        function n() {}
        function r() {
            this.channels = {}
        }
        function f(n) {
            var t = new Error(n);
            return t.toString = function() {
                return this.message
            },
                t
        }
        function t(n) {
            i.debug && console.log(n)
        }
        window.Skyscanner == undefined && (window.Skyscanner = {});
        var i = window.Skyscanner,
            u = [].slice;
        i.utils = n;
        n.utf8 = function(n) {
            for (var t, r, u = "",
                     i = 0; i < n.length;) if (t = n.charCodeAt(i++), !(t >= 56320) || !(t < 57344)) {
                if (t >= 55296 && t < 56320) {
                    if (i >= n.length) continue;
                    if (r = n.charCodeAt(i++), r < 56320 || t >= 56832) continue;
                    t = (t - 55296 << 10) + (r - 56320) + 65536
                }
                u += t < 128 ? String.fromCharCode(t) : t < 2048 ? String.fromCharCode(192 + (t >> 6), 128 + (t & 63)) : t < 65536 ? String.fromCharCode(224 + (t >> 12), 128 + (t >> 6 & 63), 128 + (t & 63)) : String.fromCharCode(240 + (t >> 18), 128 + (t >> 12 & 63), 128 + (t >> 6 & 63), 128 + (t & 63))
            }
            return u
        };
        n.toHex = function(n) {
            var t = "0123456789ABCDEF";
            return t.charAt(n >> 4) + t.charAt(n & 15)
        };
        n.encodeURIComponentNew = function(t) {
            for (var t = n.utf8(t), r = "", i = 0; i < t.length; i++) r += "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789_-".indexOf(t.charAt(i)) == -1 ? "%" + n.toHex(t.charCodeAt(i)) : t.charAt(i);
            return r
        };
        n.pad0 = function(n) {
            var t = "" + n;
            return t.length == 1 ? "0" + t: t
        };
        n.isUpperCase = function(n) {
            return n >= "A" && n <= "Z"
        };
        n.trim = function(t, i) {
            return n.ltrim(n.rtrim(t, i), i)
        };
        n.ltrim = function(n, t) {
            return t = t || "\\s",
                n.replace(new RegExp("^[" + t + "]+", "g"), "")
        };
        n.rtrim = function(n, t) {
            return t = t || "\\s",
                n.replace(new RegExp("[" + t + "]+$", "g"), "")
        };
        n.contains = function(n, t, i) {
            for (var r = 0; r < n.length; r++) if (t == n[r] || i && t.toLowerCase() == n[r].toLowerCase()) return ! 0;
            return ! 1
        };
        n.template = function(n) {
            return new Function("obj", "var p=[],print=function(){p.push.apply(p,arguments);};with(obj){p.push('" + n.replace(/[\r\t\n]/g, " ").split("<%").join("\t").replace(/((^|%>)[^\t]*)'/g, "$1\r").replace(/\t=(.*?)%>/g, "',$1,'").split("\t").join("');").split("%>").join("p.push('").split("\r").join("\\'") + "');}return p.join('');")
        };
        n.DateFormats = [{
            format: "D. M. YYYY",
            regex: "(\\d{1,2}). (\\d{1,2}). (\\d{4})",
            order: "DMY"
        },
            {
                format: "D-M-YYYY",
                regex: "(\\d{1,2})-(\\d{1,2})-(\\d{4})",
                order: "DMY"
            },
            {
                format: "D/M/YYYY",
                regex: "(\\d{1,2})\\/(\\d{1,2})\\/(\\d{4})",
                order: "DMY"
            },
            {
                format: "M/D/YYYY",
                regex: "(\\d{1,2})\\/(\\d{1,2})\\/(\\d{4})",
                order: "MDY"
            },
            {
                format: "DD-MM-YYYY",
                regex: "(\\d{2})-(\\d{2})-(\\d{4})",
                order: "DMY"
            },
            {
                format: "DD/MM/YYYY",
                regex: "(\\d{2})\\/(\\d{2})\\/(\\d{4})",
                order: "DMY"
            },
            {
                format: "MM/DD/YYYY",
                regex: "(\\d{2})\\/(\\d{2})\\/(\\d{4})",
                order: "MDY"
            },
            {
                format: "DD.MM.YYYY",
                regex: "(\\d{2}).(\\d{2}).(\\d{4})",
                order: "DMY"
            },
            {
                format: "YYYY-MM-DD",
                regex: "(\\d{4})-(\\d{2})-(\\d{2})",
                order: "YMD"
            },
            {
                format: "YYYY-MM",
                regex: "(\\d{4})-(\\d{2})",
                order: "YM"
            },
            {
                format: "YYYY? M? DD?",
                regex: "(\\d{4})\\w{0,1} (\\d{1,2})\\w{0,1} (\\d{1,2})\\w{0,1}",
                order: "YMD"
            },
            {
                format: "DD MMMM YYYY",
                regex: "(\\d{1,2})(\\w*)([ ./-])(\\w+)([ ./-])(\\d{2,4})",
                order: "DMY",
                fullmonth: !0
            },
            {
                format: "MMMM DD YYYY",
                regex: "(\\w+)([ ./-])(\\d{1,2})(\\w*)([ ./-])(\\d{2,4})",
                order: "MDY",
                fullmonth: !0
            },
            {
                format: "MMMM YYYY",
                regex: "(\\w+)([ ./-])(\\d{2,4})",
                order: "MY",
                fullmonth: !0
            },
            {
                format: "YYYY? MMMM",
                regex: "(\\d{2,4})\\w{0,1} (\\w+)",
                order: "YM",
                fullmonth: !0
            }];
        n.monthNames = "January_February_March_April_May_June_July_August_September_October_November_December".split("_");
        n.datePartNames = ["Y", "M", "D"];
        n.convertStringToDate = function(t, i, r) {
            for (var u, s, e = null,
                     f = null,
                     o = 0; o < n.DateFormats.length; o++) if (u = n.DateFormats[o], s = !i || u.format == i, (s || r) && (f = u.fullmonth ? n._createAndValidateFullMonthDate(u.regex, t, u.order) : n._createAndValidateDate(u.regex, t, u.order), f != null)) {
                if (f.isMonthOnly = u.order.indexOf("D") < 0, s) return f;
                e == null && (e = f)
            }
            return e
        };
        n.convertDateToString = function(i, r) {
            if (i !== null) {
                var u, e = i.getDate(),
                    s = ("0" + e).slice( - 2),
                    c = i.getMonth(),
                    h = c + 1,
                    o = ("0" + h).slice( - 2),
                    f = i.getFullYear(),
                    l = ("" + f).slice( - 2);
                switch (r) {
                    case "DD-MM-YYYY":
                        return u = "-",
                            s + u + o + u + f;
                    case "DD.MM.YYYY":
                        return u = ".",
                            s + u + o + u + f;
                    case "DD/MM/YYYY":
                        return u = "/",
                            s + u + o + u + f;
                    case "MM/DD/YYYY":
                        return u = "/",
                            o + u + s + u + f;
                    case "D-M-YYYY":
                        return u = "-",
                            e + u + h + u + f;
                    case "D. M. YYYY":
                        return u = ". ",
                            e + u + h + u + f;
                    case "D/M/YYYY":
                        return u = "/",
                            e + u + h + u + f;
                    case "M/D/YYYY":
                        return u = "/",
                            h + u + e + u + f;
                    case "YYYY-MM-DD":
                        return u = "-",
                            f + u + o + u + s;
                    case "YYYY? M? DD?":
                        return u = " ",
                            f + n.datePartNames[0] + u + h + n.datePartNames[1] + u + e + n.datePartNames[2];
                    case "YYMMDD":
                        return l + o + s;
                    case "YYMM":
                        return l + o;
                    case "YYYY":
                        return "" + f;
                    case "YYYY-MM":
                        return u = "-",
                            f + u + o;
                    case "MMMM YYYY":
                        return u = " ",
                            n.monthNames[c] + u + f;
                    case "YYYY? MMMM":
                        return u = " ",
                            f + n.datePartNames[0] + u + n.monthNames[c];
                    case "MMMM DD YYYY":
                        return u = " ",
                            n.monthNames[c] + u + e + u + f;
                    case "DD MMMM YYYY":
                        return u = " ",
                            e + u + n.monthNames[c] + u + f;
                    default:
                        t("Unsupported date format: " + r)
                }
            }
        };
        n.convertDateStringToDifferentFormat = function(t, i, r) {
            var u = n.convertStringToDate(t, i);
            return n.convertDateToString(u, r)
        };
        n._createAndValidateDate = function(n, i, r) {
            var f, e, o, h, u, s;
            if (h = new RegExp(n), u = h.exec(i), u == null) return null;
            switch (r) {
                case "DMY":
                    f = u[1];
                    e = u[2];
                    o = u[3];
                    break;
                case "MDY":
                    f = u[2];
                    e = u[1];
                    o = u[3];
                    break;
                case "YMD":
                    f = u[3];
                    e = u[2];
                    o = u[1];
                    break;
                case "YM":
                    f = "01";
                    e = u[2];
                    o = u[1];
                    break;
                default:
                    return t("Invalid format order: " + r),
                        null
            }
            if (s = new Date(o, e - 1, f), s.getDate() != f || s.getMonth() != e - 1 || s.getFullYear() != o) t("Invalid date: " + i);
            else return s
        };
        n._createAndValidateFullMonthDate = function(i, r, u) {
            var s, e, o, v, f, y, h, c = -1,
                a = n.monthNames,
                l;
            if (v = new RegExp(i), f = v.exec(r), f == null) return null;
            switch (u) {
                case "DMY":
                    s = f[1];
                    e = f[4];
                    o = f[6];
                    break;
                case "MDY":
                    s = f[3];
                    e = f[1];
                    o = f[6];
                    break;
                case "MY":
                    s = 1;
                    e = f[1];
                    o = f[3];
                    break;
                case "YM":
                    s = 1;
                    e = f[2];
                    o = f[1];
                    break;
                default:
                    return t("Invalid format order: " + u),
                        null
            }
            if (o.length < 4 && (o = 2e3 + parseInt(o)), isNaN(e)) {
                for (h = 0; h <= a.length - 1; h++) if (y = e.length == 3 ? e.toLowerCase() == a[h].toLowerCase().substr(0, 3) : e.toLowerCase() == a[h].toLowerCase(), y) {
                    c = h;
                    break
                }
            } else c = parseInt(e) - 1;
            if (c < 0) return t("Invalid date: " + r),
                null;
            if (l = new Date(o, c, s), l.getDate() != s || l.getMonth() != c || l.getFullYear() != o) t("Invalid date: " + r);
            else return l
        };
        n.addDaysToDate = function(n, t) {
            return new Date(n.getFullYear(), n.getMonth(), n.getDate() + t)
        };
        n.dateDiffDays = function(n, t) {
            n = Date.UTC(n.getFullYear(), n.getMonth(), n.getDate());
            t = Date.UTC(t.getFullYear(), t.getMonth(), t.getDate());
            var i = t - n;
            return Math.floor(i / 864e5)
        };
        n.dateToTimestamp = function(n) {
            return n.getTime()
        };
        n.timestampToDate = function(n) {
            return new Date(n)
        };
        n.formatPrice = function(t, i) {
            var r, e, u, o, f;
            return isNaN(t) || t == null || typeof t == "undefined" || isNaN(parseFloat(t)) ? t: (e = i.Symbol || "", u = n._roundByCoefficient(t, i.RoundingCoefficient), r = n._formatThousands(Math.floor(u)), i.DecimalDigits > 0 && (r += "." + n._pad0(Math.round((u - Math.floor(u)) * 100)).substring(0, i.DecimalDigits)), r = r.replace(/\,/g, "!").replace(/\./g, "#").replace(/\!/g, i.ThousandsSeparator).replace(/\#/g, i.DecimalSeparator), o = i.SpaceBetweenAmountAndSymbol ? " ": "", i.SymbolOnLeft ? (f = e + "" + o, r = f + r) : (f = o + e, r = r + f), r)
        };
        n.extend = function(n, t) {
            for (var i in t) n[i] = t[i];
            return n
        };
        n._roundByCoefficient = function(n, t) {
            return t == 0 ? n: Math.round(n * (1 / t)) * t
        };
        n._pad0 = function(n) {
            var n = "" + n;
            return n.length == 1 ? "0" + n: n
        };
        n._formatThousands = function(n) {
            var t = "",
                i;
            for (n = n + "", i = n.length - 1; i >= 0; i--) t = n.charAt(i) + t,
                (n.length - i) % 3 == 0 && (t = "," + t);
            return t.charAt(0) == "," && (t = t.substring(1)),
                t
        };
        n.Mediator = r;
        r.prototype.subscribe = function(n, t) {
            return this.channels[n] == null && (this.channels[n] = []),
                this.channels[n].push({
                    context: this,
                    callback: t
                }),
                this
        };
        r.prototype.unsubscribe = function(n, t) {
            var r, e, f, o, i, u;
            for (i = this.channels[n], i === undefined && (i = []), u = [], r = f = 0, o = i.length; f < o; r = ++f) e = i[r],
                e.callback === t ? u.push(this.channels[n].splice(r, 1)) : u.push(void 0);
            return u
        };
        r.prototype.publish = function() {
            var e, r, o, f, h, n, s;
            for (r = arguments[0], e = 2 <= arguments.length ? u.call(arguments, 1) : [], i.debug && r != "search-panel-mouseover" && t("event: " + r + " - data: " + e), n = this.channels[r], n === undefined && (n = []), s = [], f = 0, h = n.length; f < h; f++) o = n[f],
                s.push(o.callback.apply(o.context, e));
            return s
        };
        n.createCookie = function(n, t) {
            var u, r, f;
            n = "skyscanner-" + n;
            u = i.utils.cookieLifetimeInDays;
            u ? (r = new Date, r.setTime(r.getTime() + u * 864e5), f = "; expires=" + r.toGMTString()) : f = "";
            document.cookie = escape(n) + "=" + escape(t) + f + "; path=/"
        };
        n.readCookie = function(n) {
            var r, u, i, t;
            for (n = "skyscanner-" + n, r = escape(n) + "=", u = document.cookie.split(";"), i = 0; i < u.length; i++) {
                for (t = u[i]; t.charAt(0) == " ";) t = t.substring(1, t.length);
                if (t.indexOf(r) == 0) return unescape(t.substring(r.length, t.length))
            }
            return null
        };
        n.eraseCookie = function(t) {
            n.createCookie(t, "", -1)
        };
        i.Exception = f;
        i.Log = t
    } (),
    function() {
        window.Skyscanner.LogManager = function() {
            function n() {}
            return n.prototype.register = function(n) {
                window.onerror = function(t, i, r, u, f) {
                    var e = new XMLHttpRequest;
                    e.open("POST", n, !0);
                    e.setRequestHeader("Content-type", "application/json");
                    e.send(JSON.stringify({
                        message: t,
                        url: i,
                        lineNumber: r,
                        column: u,
                        stacktrace: f
                    }))
                }
            },
                n.prototype.test = function() {
                    var n = new XMLHttpRequest;
                    n.open("POST", "/widget/error/log", !0);
                    n.setRequestHeader("Content-type", "application/json");
                    n.send(JSON.stringify({
                        message: "test"
                    }))
                },
                n
        } ()
    } (),
    function() {
        function t(n, t) {
            this.apiName = n;
            this.onReadyCallback = t
        }
        window.Skyscanner == undefined && (window.Skyscanner = {});
        var n = window.Skyscanner;
        t.prototype.wait = function() {
            var i = !1,
                t, r, u;
            this.apiName == "maps" && n.maps != undefined && n.maps.Map != undefined && (i = !0);
            this.apiName == "snippets" && n.snippets != undefined && (i = !0, typeof n.loader.cssMarker != "undefined" && (t = "", document.defaultView && document.defaultView.getComputedStyle ? (r = document.defaultView.getComputedStyle(n.loader.cssMarker, null), t = r.getPropertyValue("display")) : t = n.loader.cssMarker.currentStyle.display, t == null && (t = ""), t = t.toLowerCase().trim(), i = t == "none" || n.loader.cssMarker.attemptCount > 5, n.loader.cssMarker.attemptCount++));
            i ? this.onReadyCallback() : (u = this, setTimeout(function() {
                    u.wait()
                },
                200))
        };
        n.ApiWait = t
    } (),
    function() {
        function t(n, t, i, r) {
            this.Name = n;
            this.latestVersion = t;
            this.jsUrlTemp = i;
            this.cssUrlTemp = r;
            this.htmlCache = []
        }
        window.Skyscanner == undefined && (window.Skyscanner = {});
        var n = window.Skyscanner;
        t.prototype.getURL = function(n, t) {
            return this.jsUrlTemp != null ? this.fillPlaceholders(this.jsUrlTemp, n, t) : null
        };
        t.prototype.getCssURL = function(n, t) {
            var r = [],
                i,
                u;
            if (this.cssUrlTemp != null) {
                for (i = 0; i < this.cssUrlTemp.length; i++) u = this.fillPlaceholders(this.cssUrlTemp[i], n, t),
                    r.push(u);
                return r
            }
            return null
        };
        t.prototype.fillPlaceholders = function(t, i, r) {
            var o, s, u, e, f, h;
            return (typeof i == "undefined" || i == null || i == "") && (i = this.latestVersion),
                o = n.loader.LocalServer == "" ? n.loader.ApiServer: n.loader.LocalServer,
                t = t.replace(/#root_url#/gi, n.loader.RootUrl),
                t = t.replace(/#server#/gi, o),
                t = t.replace(/#name#/gi, this.Name),
                t = t.replace(/#version_param#/gi, n.loader.PARAMS.VERSION),
                t = t.replace(/#version#/gi, i),
                t = t.replace(/#v_param#/gi, n.loader.PARAMS.V),
                t = t.replace(/#v#/gi, n.loader.v),
                t = t.replace(/#key_param#/gi, n.loader.PARAMS.KEY),
                t = t.replace(/#api_key#/gi, encodeURIComponent(n.ApiKey)),
                s = n.loader.min != "0",
                t = t.replace(/#min_param#/gi, s ? "": "&min=0"),
                u = "",
                r && r.cssoff && (u = "&options=cssoff;"),
                r && r.overridecss && (u = (u === "" ? "&options=": u) + "overridecss;"),
                t = t.replace(/#css_param#/gi, u),
                e = "",
                r && r.noautosuggest && (e = "&as=n"),
                t = t.replace(/#as_param#/gi, e),
                f = n.CultureId || "en",
                r && r.cultureid != undefined && (f = encodeURIComponent(n.validateLanguage(r.cultureid))),
                this.Name == "snippets" && (n.CultureId = f),
                t = t.replace(/#lang_id#/gi, f),
                r && r.shape != undefined && (h = encodeURIComponent(r.shape)),
                t = t.replace(/#shape_param#/gi, n.loader.PARAMS.SHAPE),
                t.replace(/#shape#/gi, h)
        };
        n.Module = t
    } (),
    function() {
        function p(t) {
            n.dom_wrapper.bindEvent(window, "load", t)
        }
        function u(t) {
            for (var i, f = document.getElementsByTagName("script"), r = 0; r < f.length; r++) if (i = f[r], i.src.indexOf("api.skyscanner.net/api.ashx?type=snippet") > -1) {
                n.dom_wrapper.bindEvent(i, "load", t);
                i.onload = i.onreadystatechange = function() {
                    t()
                };
                return
            }
            setTimeout(u(), 500)
        }
        function f(t, i) {
            var r = n.loader.UrlParameters,
                u, f, e;
            if (r = r.split("&"), r != null && r.length > 0) for (u = 0; u < r.length; u++) {
                if (f = !0, i != null) for (e in i) if (r[u].indexOf(i[e] + "=") >= 0) {
                    f = !1;
                    break
                }
                f && r[u] != "" && (t += t.indexOf("?") >= 0 ? "&": "?", t += r[u])
            }
            return t
        }
        function w(t, i) {
            t != null && t.indexOf("skyscanner.net/xml/cache/") > 0 && (t = null);
            t != null && t != "" && (t = e(t, i));
            n.loader.overrideCSSEl ? t != null && t != "" ? n.loader.overrideCSSEl.href = t: (n.loader.overrideCSSEl.removeNode ? n.loader.overrideCSSEl.removeNode(!0) : (n.loader.overrideCSSEl.href = "", n.loader.overrideCSSEl.parentNode.removeChild(n.loader.overrideCSSEl)), n.loader.overrideCSSEl = null) : n.loader.overrideCSSEl = n.loader.createCSSNode(t)
        }
        function e(t, i) {
            return i == null && n.snippets.version && (i = n.snippets.version),
                t.indexOf(n.loader.PARAMS.VERSION + "=") < 0 && (t += t.indexOf("?") >= 0 ? "&": "?"),
                t += n.loader.PARAMS.VERSION + "=" + i,
                t.indexOf(n.loader.PARAMS.V + "=") < 0 && (t += t.indexOf("?") >= 0 ? "&": "?"),
                t + (n.loader.PARAMS.V + "=" + n.loader.v)
        }
        function b() {
            return "http://www.skyscanner.net"
        }
        var n, i, t;
        window.Skyscanner == undefined && (window.Skyscanner = {});
        n = window.Skyscanner;
        i = {
            RootUrl: "http://www.skyscanner.net",
            ApiServer: "https://api.skyscanner.net",
            ApiServicesServer: "https://api.skyscanner.net",
            LocalServer: "",
            v: "",
            min: "1",
            Path: "api/",
            AjaxApiMode: "ajax",
            CSSPath: "/style/",
            UrlParameters: "",
            UsageSuccessfullyVerified: "1",
            Ucy: "",
            today: function() {
                var n = new Date;
                return n.setHours(0, 0, 0, 0),
                    n
            } (),
            AppendAssociateIdToUrl: !0,
            dynamicApiLoadMarkers: [],
            additionalScriptsLoaded: [],
            PARAMS: {
                V: "v",
                KEY: "key",
                VERSION: "version",
                SHAPE: "shape"
            },
            firstdayofweek: "1",
            modules: {
                maps: new n.Module("maps", "1", "#server#/api.ashx?type=map&#v_param#=#v##min_param#", null),
                snippets: new n.Module("snippets", "2", "#server#/api.ashx?type=snippet&lang=#lang_id#&#v_param#=#v##min_param##css_param##as_param#", ["#server#/Widget/CSS/common.min.css", "#server#/Widget/CSS/autosuggest.css"]),
                searchpanel: new n.Module("searchpanel", "1", "#server#/api.ashx?type=searchpanel&lang=#lang_id#&#shape_param#=#shape#&#v_param#=#v##min_param#", ["#server#/Widget/CSS/shapes/#shape#.min.css"]),
                autosuggest: new n.Module("autosuggest", "1", "#server#/api.ashx?type=autosuggest&#v_param#=#v##min_param#", ["#server#/Widget/CSS/autosuggest.css"]),
                datepicker: new n.Module("datepicker", "1", "#server#/api.ashx?type=datepicker&lang=#lang_id#&#v_param#=#v##min_param#", ["#server#/Widget/CSS/flights-datepicker.css"]),
                datepicker_lang: new n.Module("datepicker_lang", "1", "#server#/api.ashx?type=datepicker_lang&lang=#lang_id#&#v_param#=#v##min_param#")
            }
        };
        n.loader = i;
        n.supportedLanguagesLegacy = ["CZ", "DA", "DE", "EN", "ES", "FI", "FR", "GR", "HU", "IT", "JA", "KO", "NL", "NO", "PL", "PT", "BR", "RO", "RU", "SV", "TR", "UK", "ZH", "ZW", "MS", "TH", "VI", "ID", "TL"];
        n.supportedLanguages = ["bg", "ca", "cs", "da", "de", "de-at", "de-ch", "el", "en", "en-us", "es", "fi", "fr", "fr-be", "fr-ch", "hr", "hu", "id", "it", "it-ch", "ja", "ko", "ms", "nl", "nl-be", "no", "pl", "pt", "pt-br", "ro", "ru", "sk", "sv", "th", "tl", "tr", "uk", "vi", "zh", "zh-cn", "zh-tw", "zh-hk", "zh-sg"];
        n.log = new n.LogManager;
        var o = function(t, i) {
                var r = i == "legacy",
                    u;
                if (t = r ? t.toUpperCase() : t.toLowerCase(), u = r ? n.supportedLanguagesLegacy: n.supportedLanguages, n.utils.contains(u, t)) return t;
                if (r) switch (t) {
                    case "CS":
                        return "CZ";
                    case "EL":
                        return "GR";
                    case "NB-NO":
                        return "NO";
                    case "PT-BR":
                        return "BR";
                    case "ZH-TW":
                    case "ZH-HK":
                    case "ZH-SG":
                        return "ZW"
                } else switch (t) {
                    case "cz":
                        return "cs";
                    case "gr":
                        return "el";
                    case "br":
                        return "pt-br";
                    case "zw":
                        return "zh-tw";
                    case "nb-no":
                        return "no";
                    default:
                        if (n.utils.contains(u, t)) return t
                }
                return (t = t.substr(0, 2), n.utils.contains(u, t)) ? t: (n.Log("Invalid parameter '" + t + "'"), r ? "EN": "en")
            },
            s = function(n) {
                var t = n.indexOf("-");
                if (t > -1) return n.substr(t + 1, 2).toUpperCase();
                switch (n) {
                    case "cs":
                        return "CZ";
                    case "da":
                        return "DK";
                    case "en":
                        return "UK";
                    case "el":
                        return "GR";
                    case "ja":
                        return "JP";
                    case "ko":
                        return "KR";
                    case "ms":
                        return "MY";
                    case "sv":
                        return "SE";
                    case "tl":
                        return "PH";
                    case "uk":
                        return "UA";
                    case "vi":
                        return "VN";
                    case "zh":
                        return "CN";
                    default:
                        return n.toUpperCase()
                }
            },
            h = function(t, i, u) {
                var e = n.loader.modules[t],
                    f,
                    o;
                if (e) {
                    if (n.Browser.isQuirkMode()) {
                        console.log("Quirks mode unsupported - rendering hyperlink instead");
                        return
                    }
                    f = new n.ScriptRequest;
                    o = u && u.callback != null;
                    o && (f.onComplete = u.callback);
                    f.send(n.loader.addParameters(e.getURL(i, u), n.loader.PARAMS));
                    r(t, i, u)
                } else throw n.Exception("Module: '" + t + "' not found.");
            },
            c = function(n) {
                for (var r = document.getElementsByTagName("head")[0], i = -1, t; ++i < document.styleSheets.length;) if (n == document.styleSheets[i].href) return;
                return t = document.createElement("link"),
                    t.type = "text/css",
                    t.rel = "stylesheet",
                    t.href = n,
                    r.appendChild(t),
                    t
            },
            r = function(t, i, r) {
                var h = !1,
                    c = !1,
                    s, u, f, l, o;
                if (r && (h = r.cssoff != null && r.cssoff, c = r.noautosuggest != null && r.noautosuggest), !h) {
                    if (s = n.loader.modules[t], !s) throw n.Exception("Module: '" + t + "' not found!");
                    if (u = s.getCssURL(i, r), u != null) for (f = 0; f < u.length; f++) c && u[f].indexOf("autosuggest") > -1 || (l = e(u[f], i), n.loader.createCSSNode(l))
                }
                r && (o = r.overridecss, o != null && o != "" ? n.loader.setOverrideCss(o, i) : n.loader.overrideCSSEl = null)
            },
            l = function(t) {
                var i = n.loader.LocalServer == "" ? n.loader.ApiServer: n.loader.LocalServer,
                    r = i + "/Widget/CSS/colourschemes/" + t + ".min.css?version=2&v=" + n.loader.v;
                n.loader.createCSSNode(r)
            },
            a = function(t) {
                if (v(t)) {
                    var i = n.loader.LocalServer == "" ? n.loader.ApiServer: n.loader.LocalServer,
                        r = i + "/Widget/CSS/lang/" + t + ".min.css?version=2&v=" + n.loader.v;
                    n.loader.createCSSNode(r)
                }
            },
            v = function(n) {
                return "bg,ca,cs,da,de,de-at,de-ch,el,es,fr,fr-ch,hr,hu,id,pl,pt,pt-br,ro,ru,sv,tl,tl-ph,th,uk".indexOf(n) >= 0
            },
            y = function(t, i, u, e) {
                var l = n.loader.modules[t],
                    s,
                    c,
                    o,
                    a;
                if (l) {
                    if (s = f(l.getURL(i, u), n.loader.PARAMS), c = n.loader.dynamicApiLoadMarkers[s], typeof c == "undefined" && c != !0) {
                        n.loader.dynamicApiLoadMarkers[s] = !0;
                        var v = document,
                            y = v.getElementsByTagName("head").item(0),
                            h = document.createElement("script");
                        h.setAttribute("type", "text/javascript");
                        h.setAttribute("charset", "utf-8");
                        h.setAttribute("src", s);
                        y.appendChild(h);
                        r(t, i, u);
                        o = document.createElement("div");
                        n.loader.cssMarker = o;
                        n.loader.cssMarker.attemptCount = 0;
                        o.className = "ss_snippets_marker";
                        o.style.width = "1px";
                        o.style.height = "1px";
                        o.style.visibility = "hidden";
                        document.body.appendChild(o)
                    }
                    a = new n.ApiWait(t,
                        function() {
                            e != null && e != undefined && e()
                        });
                    a.wait()
                } else throw n.Exception("Module: '" + t + "' not found!");
            };
        n.loadAndWait = y;
        n.load = h;
        n.validateLanguage = o;
        n.getDefaultMarket = s;
        n.loader.createCSSNode = c;
        n.loader.setOverrideCss = w;
        n.setOnLoadCallback = p;
        n.setOnScriptLoadCallback = u;
        n.loader.addParameters = f;
        n.loader.getTargetDomain = b;
        n.loader.getColoursCSS = l;
        n.loader.getLangCSS = a;
        t = function() {};
        t.prototype.setShape = function() {};
        t.prototype.setColourScheme = function() {};
        t.prototype.setCurrency = function() {};
        t.prototype.setMarket = function() {};
        t.prototype.setCulture = function() {};
        t.prototype.setDeparture = function() {};
        t.prototype.setDestination = function() {};
        t.prototype.setOutboundDate = function() {};
        t.prototype.setOutboundDateDelta = function() {};
        t.prototype.setInboundDate = function() {};
        t.prototype.setInboundDateDelta = function() {};
        t.prototype.setClickUrl = function() {};
        t.prototype.setUrlParam = function() {};
        t.prototype.setSearchTargetWindow = function() {};
        t.prototype.setProduct = function() {};
        t.prototype.setCarHireStartLocation = function() {};
        t.prototype.setCarHireEndLocation = function() {};
        t.prototype.setHotelsLocation = function() {};
        t.prototype.setCustomButtonEventEnabled = function() {};
        t.prototype.setDayviewModeEnabled = function() {};
        t.prototype.disableCookies = function() {};
        t.prototype.draw = function() {};
        n.snippets = {
            SearchPanelControl: t,
            localization: {}
        }
    } (),
    function() {
        function n() {
            this.requestid = null;
            this.callbackParameterName = "callback";
            this.onComplete = null;
            this.onFailure = null
        }
        window.Skyscanner == undefined && (window.Skyscanner = {});
        var t = window.Skyscanner;
        n.callbacks = {};
        t.callbacks = n.callbacks;
        n.getRequestId = function() {
            var i = 1,
                t, u;
            do {
                t = !0;
                for (u in n.callbacks) {
                    var r = u,
                        e = new RegExp("^requestid([0-9]+)$"),
                        f = e.exec(r);
                    if (f != null && (r = f[1] | 0, r == i)) {
                        t = !1;
                        break
                    }
                }
                t || i++
            } while (! t );
            return i
        };
        n.prototype.send = function(url, cleanup) {
            var fullUrl, self, queryStringStart, params, callbackFound, i, headElement, scriptElement;
            if (this.requestid = "requestid" + n.getRequestId(), fullUrl = url, self = this, cleanup == undefined && (cleanup = !1), this.onComplete != null) if (this._initiateCallbacks(this.requestid, this.onComplete, this.onFailure), queryStringStart = fullUrl.indexOf("?"), queryStringStart != -1) {
                for (params = fullUrl.substring(queryStringStart + 1).split("&"), callbackFound = !1, i = 0; i < params.length; i++) if (params[i].indexOf(this.callbackParameterName + "=") != -1) {
                    callbackArgs = params[i].split("=");
                    n.callbacks[this.requestid].actualCallbacks.push(eval(callbackArgs[1]));
                    params[i] = this.callbackParameterName + "=Skyscanner.callbacks." + this.requestid;
                    callbackFound = !0;
                    fullUrl = fullUrl.substring(0, queryStringStart + 1) + params.join("&");
                    break
                }
                callbackFound || (fullUrl += "&" + this.callbackParameterName + "=Skyscanner.callbacks." + this.requestid)
            } else fullUrl += "?" + this.callbackParameterName + "=Skyscanner.callbacks." + this.requestid;
            if (!cleanup) {
                document.readyState == "loaded" || document.readyState == "complete" || document.readyState == "interactive" ? (headElement = document.getElementsByTagName("head")[0], scriptElement = this._createScriptTag(), scriptElement.setAttribute("src", fullUrl), headElement.appendChild(scriptElement)) : document.write('<script charset="utf-8" src="' + fullUrl + '" type="text/javascript"><\/script>');
                return
            }
            var headElement = document.getElementsByTagName("head")[0],
                scriptElement = this._createScriptTag(),
                onLoadHandler = function() {
                    if (cleanup) {
                        scriptElement.onload = null;
                        var n = scriptElement.parentNode;
                        n.removeChild(scriptElement);
                        delete scriptElement
                    }
                },
                onReadyStateChangeHandler = function(n) {
                    n || (n = window.event);
                    var t = n.target ? n.target: n.srcElement;
                    t && (t.readyState == "loaded" || t.readyState == "complete") && (t.onreadystatechange = null, onLoadHandler())
                };
            return navigator.product == "Gecko" ? scriptElement.onload = onLoadHandler: scriptElement.onreadystatechange = onReadyStateChangeHandler,
                scriptElement.setAttribute("src", fullUrl),
                headElement.appendChild(scriptElement),
                this.requestid
        };
        n.prototype._initiateCallbacks = function(t, i, r) {
            return n.callbacks[t] = function(i) {
                var r, u;
                for (delete n.callbacks[t].failureFunction, r = 0; r < n.callbacks[t].actualCallbacks.length; r++) u = n.callbacks[t].actualCallbacks[r],
                    setTimeout(function() {
                            u(i, t)
                        },
                        0);
                delete n.callbacks[t]
            },
                setTimeout(function() {
                        typeof n.callbacks[t] != "undefined" && typeof n.callbacks[t].failureFunction == "function" && n.callbacks[t].failureFunction == r && setTimeout(function() {
                                n.callbacks[t].failureFunction(t)
                            },
                            0)
                    },
                    5e3),
                n.callbacks[t].failureFunction = r,
                n.callbacks[t].actualCallbacks = [i],
                "skyscanner.callbacks." + t
        };
        n.prototype._createScriptTag = function() {
            var n = document.createElement("script");
            return n.setAttribute("type", "text/javascript"),
                n.setAttribute("charset", "utf-8"),
                n
        };
        t.ScriptRequest = n
    } (),
    function() {
        var n, t;
        window.Skyscanner == undefined && (window.Skyscanner = {});
        n = window.Skyscanner;
        typeof console == "undefined" && (this.console = {
            log: function() {}
        });
        t = function() {
            var n = navigator.userAgent.toLowerCase(),
                s = /webkit/.test(n) && !/chrome/.test(n),
                h = /opera/.test(n),
                p = /firefox/.test(n),
                w = /chrome/.test(n) && !s,
                c = /msie/.test(n) && !h,
                b = /mozilla/.test(n) && !/(compatible|webkit)/.test(n),
                i = 0,
                u,
                r,
                t,
                l = !1,
                f = function() {
                    return s
                },
                a = function() {
                    return h
                },
                k = function() {
                    return w
                },
                e = function() {
                    return c
                },
                d = function() {
                    return l
                },
                g = function() {
                    return b
                },
                o = function() {
                    return p
                },
                v = function() {
                    return i
                },
                y;
            return f() && (u = /afari\/([\d.]+)/, r = n.match(u), r && (t = parseFloat(r[1]), t = Math.round(t), t <= 100 && (i = 1), t <= 125 && t > 100 && (i = 1.25), t <= 312 && t > 125 && (i = 1.3), t <= 419 && t > 312 && (i = 2), t > 419 && (i = 3))),
                e() && (u = /msie ([\d.]+)/, r = n.match(u), r && (i = parseFloat(r[1]))),
                o() && (u = /firefox\/([\d.]+)/, r = n.match(u), r && (i = parseFloat(r[1]))),
                c && document.compatMode && document.compatMode.toLowerCase() == "backcompat" && (l = !0),
                y = function() {
                    var t = "",
                        n = "",
                        i;
                    return f() ? n = "webkit": a() ? n = "opera": o() ? n = "ff": e() && (n = "ie"),
                        t += " ss_" + n,
                        i = v(),
                        i > 0 && (t += " ss_" + n + Math.round(i)),
                        t
                },
            {
                getBrowserCss: y,
                isSafari: f,
                isOpera: a,
                isIE: e,
                isQuirkMode: d,
                isMozilla: g,
                isFF: o,
                isChrome: k,
                getVer: v,
                version: i
            }
        };
        n.Browser = new t
    } ();
var skyscanner = window.Skyscanner;
skyscanner.loader.LocalServer = '//api.skyscanner.net';
skyscanner.loader.ApiServicesServer = 'https://api.skyscanner.net';
skyscanner.ApiKey = '7d737666-889f-45ff-abf6-76be8d9547e7';
skyscanner.loader.v = '0';
skyscanner.loader.Ucy = 'CN';