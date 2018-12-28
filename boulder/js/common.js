$(document).ready(function () {
	Html.createHTML5(); //for old ie
	Html.setPlaceholder(); //for old ie
	UI.setFontAdjust(); //for win7
	UI.responsiveImgMap(); //for mobile
	UI.setHashControl(); //for animate link
});

$(window).load(function () {

});

/* # jQuery extention ================================================== */
$.fn.getPercentWidth = function () {
	var width = parseFloat($(this).css('width')) / parseFloat($(this).parent().css('width'));
	return Math.round(100 * width) + '%';
};

var isSubmit = false;
Form = {
	submit: function (form, action) {
		if (!isSubmit) {
			isSubmit = true;

			$.post(action, $(form).serialize(), function (res) {
				isSubmit = false;
				$("body").append(res);
			});
		} else {
			alert("요청을 처리중입니다. 잠시 기다려 주시기 바랍니다.");
		}
	}
};
Field = {
	isEmpty: function (el_name, el) {
		if (StringUtil.trim(el.value) == "") {
			alert(el_name + "을(를) 입력해주세요.");
			el.focus();
			return true;
		}
	},
	isNotSelected: function (el_name, el) {
		if ($(el).val().trim() == "") {
			alert(el_name + "을(를) 선택해주세요.");
			el.focus();
			return true;
		}
	},
	isNotChecked: function (el_name, el) {
		var checked = false;
		$(el).each(function () {
			var v = $(this).prop("checked");
			if ($(this).prop("checked")) {
				checked = true;
			}
		});
		if (!checked) {
			alert(el_name + " 을(를) 선택해주세요.");
			$(el).eq(0).focus();
			return true;
		}
	},
	isNotTel: function (el_name, el) {
		var re = /^\d{2,3}-\d{3,4}-\d{4}$/;
		if (!re.test(el.value)) {
			alert(el_name + " 형식이 틀립니다.");
			el.focus();
			return true;
		}
	},
	//연락처나 숫자가 아니면 true
	isNotTelWithNum: function (el_name, el) {
		var re1 = /^\d{2,3}-\d{3,4}-\d{4}$/;
		var re2 = /^\d*$/;
		if (!(re1.test(el.value) || re2.test(el.value))) {
			alert(el_name + " 형식이 틀립니다.");
			el.focus();
			return true;
		}
	}
};

Html = {
	/* IE9 이하 placeholder 사용가능하게 */
	setPlaceholder: function () {
		if (Client.isIE9() || Client.isIE9() || Client.isIE7() || Client.isIE6() || Client.isQuirks()) {
			var target = 'input[placeholder], textarea[placeholder]';
			$(target).each(function (i) {
				//Set Html
				var $el = $(this);
				var $el_w;
				var $el_place;

				$el.wrap('<div class="js-patchPlaceholder-w"></div>');
				$el_w = $el.closest(".js-patchPlaceholder-w");

				$el_w.append('<div class="js-place-holder"></div>');
				$el_place = $el_w.find(".js-place-holder");
				$el_place.text($el.attr("placeholder"));

				//Set CSS
				$el_w.css({position: "relative"});

				if ($el.getPercentWidth() == "100%" || $el.getPercentWidth() == "NaN%") {
					$el_w.css({display: "block"});
				} else {
					$el_w.css({display: "inline-block"});
				}

				$el_place.css({
					position: "absolute",
					top: "0.2em",
					left: "0.2em"
				});

				//Set Event
				$el.on("focus", function () {
					var $el = $(this);
					var $el_w = $el.closest(".js-patchPlaceholder-w");
					var $el_place = $el_w.find(".js-place-holder");

					$el_place.hide();
				});

				$el.on("blur", function () {
					var $el = $(this);
					var $el_w = $el.closest(".js-patchPlaceholder-w");
					var $el_place = $el_w.find(".js-place-holder");

					if ($el.val() == "") {
						$el_place.show();
					}
				});

				$el_place.on("focus", function () {
					$el.trigger("focus");
				});
			});
		}
	},
	makeOutline: function (selector) {
		$(selector).each(function () {
			$target = $(this);
			$("#outline ul").append('<li><a href="#' + $target.attr("id") + '">' + $target.children("h2").text() + '</a></li>');
		});
	},
	setTitle: function () {
		var site_tit = window.site_title;
		var doc_tit = window.doc_title;

		if (site_tit) {
			if (doc_tit) {
				document.title = doc_tit + " | " + site_tit;
			} else {
				document.title = site_tit;
			}
		}
	},
	createHTML5: function () {
		if (Client.isQuirks() || Client.isIE6() || Client.isIE7() || Client.isIE8()) {
			document.createElement("main");
			document.createElement("header");
			document.createElement("footer");
			document.createElement("nav");
			document.createElement("aside");
		}
	}
};

/**
 * String.prototype으로 만들지 않은 이유
 * - 다른 라이브러리와 충돌 가능성
 * - 다른 언어와의 문법적 동일성
 * */
StringUtil = {
	/*제목 길때 쩜쩜으로*/
	cutString: function (wrap, separ, customGap) {
		$(wrap).each(function () {
			var $wrap = $(this);
			var wrapWidth = $wrap.width();

			var $text = $wrap.find("span");
			var textWidth = 0;
			var text_cache = "";

			var $btns = $wrap.find("img");
			var hasBtn = false;

			//css
			$text.css("white-space", "nowrap");

			//text to cache
			text_cache = $text.text();
			$text.text("");

			//calc wrapWidth
			$btns.each(function () {
				var $btn = $(this);
				var btnWidth = $btn.width();
				var btnOuterWidth = $btn.outerWidth(true);

				if (btnWidth == btnOuterWidth) { //no margin (auto margin)
					hasBtn = true;
					btnWidth += 4; //set default margin
				} else { //has margin
					btnWidth = btnOuterWidth;
				}

				wrapWidth -= btnWidth;
			});

			if (hasBtn) {
				wrapWidth -= 7;
			}

			wrapWidth -= customGap;

			//proc
			for (var i = 0; i <= text_cache.length; i++) {
				$text.text($text.text() + text_cache.charAt(i));
				textWidth = $text.outerWidth(true);
				if (textWidth >= wrapWidth) {
					$text.text($text.text().substring(0, $text.text().length - 2));
					$text.text($text.text() + separ);
					break;
				}
			}

			//debug
			//console.log(textWidth + " : " + wrapWidth);
			//console.log($text.text());
		});
	},
	/*문자열에서 문자제거*/
	remove: function (str, sepa) {
		return str.split(sepa).join("");
	},

	/**돈 형식으로 콤마 추가*/
	toMoney: function (el) {
		$(el).on("keyup", function () {
			var v = $(this).val();
			v = StringUtil.remove(v, ",");
			v = v.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
			$(el).val(v);
		});
	},
	/**좌우 공백제거*/
	trim: function (scope) {
		return scope.split(" ").join("");
	},
	/**문자열이 있는지 판별*/
	hasString: function (scope, find) {
		var scope = scope.toString();
		var find = find.toString();

		if (scope.indexOf(find) > -1) {
			return true;
		}
	},

	/**구분자 뒤에 문자 리턴*/
	lastStringWithOut: function (scope, find) {
		var scope = scope.toString();
		var find = find.toString();

		return scope.substring(scope.indexOf(find) + 1);
	},

	/**구분자와 구분자 뒤에 문자 리턴*/
	lastStringWith: function (scope, find) {
		var scope = scope.toString();
		var find = find.toString();

		return scope.substring(scope.indexOf(find));
	}
};

FrameWork = {
	isDebugMode: function () {
		if (FRAMEWORK_IS_DEBUG_MODE) {
			return true;
		}
	}
};

Client = {
	isWin7: function () {
		if (StringUtil.hasString(navigator.userAgent, "Windows NT 6.1")) {
			return true;
		}
	},
	isIE: function () {
		if (StringUtil.hasString(navigator.userAgent, "Trident")) {
			return true;
		}
	},
	isIE11: function () {
		if (
			StringUtil.hasString(navigator.userAgent, "Trident")
			&& StringUtil.hasString(navigator.userAgent, "rv:11.0")
		) {
			return true;
		}
	},
	isIE10: function () {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 10")) {
			return true;
		}
	},
	isIE9: function () {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 9")) {
			return true;
		}
	},
	isIE8: function () {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 8")) {
			return true;
		}
	},
	isIE7: function () {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 7")) {
			return true;
		}
	},
	isIE6: function () {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 6")) {
			return true;
		}
	},
	isQuirks: function () {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 5")) {
			return true;
		}
	},
	isChrome: function () {
		if (StringUtil.hasString(navigator.userAgent, "Chrome")) {
			return true;
		}
	},
	isFireFox: function () {
		if (StringUtil.hasString(navigator.userAgent, "Firefox")) {
			return true;
		}
	},
	isIOS: function () {
		if (
			StringUtil.hasString(navigator.userAgent, "iPhone")
			|| StringUtil.hasString(navigator.userAgent, "iPad")
		) {
			return true;
		}
	}
};

Youtube = {
	/* IE8 이하 youtube 지원종료안내 */
	setInfo: function () {
		if (Client.isIE8() || Client.isIE7() || Client.isIE6() || Client.isQuirks()) {
			var target = 'iframe';
			$(target).each(function (i) {
				$iframe = $(this);

				if (StringUtil.hasString($iframe.attr("src"), ("youtube"))) {

					//Set Html
					var $el = $(this);
					var $el_w;
					var $el_place;

					$el.wrap('<div class="js-youtube-w"></div>');
					$el_w = $el.closest(".js-youtube-w");

					$el_w.append('<div class="js-youtube-info"></div>');
					$el_place = $el_w.find(".js-youtube-info");
					$el_place.text($el.attr("patchPlaceholder"));

					//Set CSS
					$el_w.css({
						"position": "relative",
						"display": "inline-block"
					});

					$el_place.css({
						"position": "absolute",
						"top": "0.2em",
						"left": "0",
						"color": "white",
						"z-ndex": "100",
						"line-height": "1.5",
						"background": "black",
						"padding": "10px",
						"width": "100%",
						"box-sizing": "border-box"
					});

					$el_place.html("유튜브 서비스는 더이상 익스플로러8 이하 브라우저를 지원하지 않습니다. 동영상을 확인하시려면 익스플로러를 업데이트해 주시거나 다른 브라우저를 사용해 주시기 바랍니다.")
					//Set Event
				}
			});
		}
	},
};

UI = {
	deleteRows: function (f, msg) {
		f.work_flag.value = "delete";
		if (confirm(msg)) {
			f.submit();
		}
	},
	changeOrder: function (sortable, changeOrder, saveChangeOrder) {
		var $sortable = $(sortable);

		//toggle button
		$(changeOrder).hide();
		$(saveChangeOrder).show();

		//sort
		$sortable.sortable({
			placeholder: "ui-state-highlight",
			helper: fixHelper
		});

		var fixHelper = function (e, ui) {
			ui.children().each(function () {
				$(this).width($(this).width());
			});
			return ui;
		};
	},
	saveChangeOrder: function (sortable, changeOrder, saveChangeOrder) {
		$(changeOrder).show();
		$(saveChangeOrder).hide();

		$(sortable).sortable("destroy");
	},
	/**
	 * 체크박스 목록을 다른 체크박스로 복사한다.
	 */
	cloneCheck: function (chk, chk_clone) {
		$(chk).each(function (i) {
			$(this).on("click", function () {
				$chk = $(this);
				$chk_clone = $(chk_clone);
				if ($chk.prop("checked")) {
					$chk_clone.eq(i).prop("checked", true);
					$chk_clone.eq(i).attr("preview_checked", true);
				} else {
					$chk_clone.eq(i).prop("checked", false);
					$chk_clone.eq(i).attr("preview_checked", false);
				}
			})
		});
	},
	tab: function (tabBtn, tabCont) {
		var $tabBtn = $(tabBtn);
		var $tabCont = $(tabCont);

		$tabBtn.each(function (i) {
			$(this).on("click", function () {
				$(".tabBtn").removeClass("on");
				$(this).eq(i).addClass("on");

				$tabCont.hide();
				$tabCont.eq(i).show();

				return false;
			});
		});
	},
	responsiveImgMap: function () {
		$('img[usemap]').rwdImageMaps(); //반응형 이미지맵
	},
	setBodyHeightPx: function () {
		var bodyHeight = $("body").outerHeight(true);
		$("body").outerHeight(bodyHeight);
	},
	checkAll: function (btnAllChk, btnChk) {
		$(btnAllChk).on("click", function () {
			if ($(this).prop("checked")) {
				$(this).closest("tr").siblings().addClass("on");
			} else {
				$(this).closest("tr").siblings().removeClass("on");
			}
			$(btnChk).prop("checked", $(this).prop("checked"));
		});

		$(btnChk).on("click", function () {
			if ($(this).prop("checked")) {
				$(this).closest("tr").addClass("on");
			} else {
				$(this).closest("tr").removeClass("on");
			}
		});
	},
	/* WIN7 IE11 맑은 고딕 상하 정렬 문제 패치*/
	setFontAdjust: function () {
		if (Client.WIN7) {
			$("a > span, button > span").each(function () {
				var $el = $(this);

				if (StringUtil.hasString($el.css("font-family"), "맑은 고딕")) {
					$el.css({
						"top": "-0.15em",
						"position": "relative"
					});
				}
			});
		}
	},

	/* v.1.0.1 애니메이트된 해시로 이동
	 *  IE10 부터 pushState 사용
	 *  IE9 이하 hash 사용 깜박임 있음 home 갈때 주소에 #이 붙음
	 *  home 갈때 href="#"
	 *  */
	goAnimatedHash: function (href) {
		var loc = window.location;
		var doc = window.document;
		var gotoScroll;

		if (href.length && href != "#") {
			if (href == "#_top") { //home 일때
				gotoScroll = 0;

				if ("pushState" in history) {
					$("html, body").animate({scrollTop: gotoScroll});
					history.pushState(null, doc.title, loc.pathname + loc.search);
				} else {
					$("html, body").animate({scrollTop: gotoScroll});
					location.hash = "";
				}
			} else { //sub 일때
				gotoScroll = $(href).offset().top;

				if ("pushState" in history) {
					$("html, body").animate({scrollTop: gotoScroll});
					history.pushState(null, doc.title, loc.pathname + loc.search + href);
				} else {
					$("html, body").animate({scrollTop: gotoScroll});
					location.hash = href;
				}
			}
		}
	},
	/* 해시 처리 */
	setHashControl: function () {
		$("a, area").on("click", function () {
			var $a = $(this);
			var href = $a.attr("href");

			if (StringUtil.hasString(href, "#")) {
				UI.goAnimatedHash(StringUtil.lastStringWith(href, "#"));
				return false;
			}
		});
	},
	/* 인풋과 버튼이 있을시 두개의 간격 나눔*/
	divideWidth: function (el, offset) {
		$(el).each(function () {
			$el = $(this);
			$parent = $el.parent();
			$next = $el.next();

			$el.width($parent.width() - $next.width() - offset);
		});
	}
};

NumberUtil = {
	addZero: function (target, wish_size) {
		var size = 2;
		target = target.toString();

		if (wish_size) {
			size = wish_size;
		}

		if (target.length < size) {
			for (var i = 0; i < size - 1; i++) {
				target = "0" + target;
			}
		}

		return target;
	}
};

CookieUtil = {
	setCookie: function (name, value, expiredays) {
		var todayDate = new Date();
		todayDate.setDate(todayDate.getDate() + expiredays);
		document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";"
	},
	getCookie: function (name) {
		var arg = name + "=";
		var alen = arg.length;
		var clen = document.cookie.length;
		var i = 0;
		while (i < clen) {
			var j = i + alen;
			if (document.cookie.substring(i, j) == arg)
				return CookieUtil.getCookieVal(j);
			i = document.cookie.indexOf(" ", i) + 1;
			if (i == 0) break;
		}
		return null;
	},
	getCookieVal: function (offset) {
		var endstr = document.cookie.indexOf(";", offset);
		if (endstr == -1)
			endstr = document.cookie.length;
		return unescape(document.cookie.substring(offset, endstr));
	}
};