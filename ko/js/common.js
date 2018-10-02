console.log("loaded: common.js");

ValidChk = {
	isTel: function (el) {
		var re = /^\d{2,3}-\d{3,4}-\d{4}$/;
		if (!re.test(el.value)) {
			alert("연락처 형식이 틀립니다.");
			el.focus();
			return false;
		}
	},
	isTelWithNum: function (el) {
		var re1 = /^\d{2,3}-\d{3,4}-\d{4}$/;
		var re2 = /^\d*$/;
		if ( !(re1.test(el.value) || re2.test(el.value)) ) {
			alert("연락처 형식이 틀립니다.");
			el.focus();
			return false;
		}
	}
};

/**
 * String.prototype으로 만들지 않은 이유
 * - 다른 라이브러리와 충돌 가능성
 * - 다른 언어와의 문법적 동일성
 * */
StringUtil = {
	/**문자열이 있는지 판별*/
	hasString: function (scope, find) {
		var scope = scope.toString();
		var find = find.toString();

		if (scope.indexOf(find) > -1) {
			return true;
		}
	},

	/**구분자 뒤에 문자 리턴*/
	lastString: function (scope, find) {
		var scope = scope.toString();
		var find = find.toString();

		return scope.substring(scope.indexOf(find) + 1);
	},

	/**구분자와 구분자 뒤에 문자 리턴*/
	lastStringWith: function (scope, find) {
		var scope = scope.toString();
		var find = find.toString();

		return scope.substring(scope.indexOf(find));
	},
	autoLink: function (content) {
		var regURL = new RegExp("(http|https|ftp|telnet|news|irc)://([-/.a-zA-Z0-9_~#%$?&=:200-377()]+)", "gi");
		var regEmail = new RegExp("([xA1-xFEa-z0-9_-]+@[xA1-xFEa-z0-9-]+\.[a-z0-9-]+)", "gi");

		//a 태그 자동적용
		var oriText = $(content).html();
		var chagnedText = "";

		chagnedText = oriText.replace(regURL, '$1://$2 <a class="generated_link" href="$1://$2" target="_blank">(자동링크)</a>');
		chagnedText = chagnedText.replace(regEmail, '$1 <a class="generated_link" href="mailto:$1">(자동링크)</a>');


		$(content).html(chagnedText);


		$(content).find(".generated_link").attr("target", "_blank"); //a target 속성추가

		$(content).find(".generated_link").each(function () {
			var v = $(this).prev("a").html();
			if (v != null) { //사용자가 링크건것은 그대로 나둠
				$(this).remove();
			}
		});
	}
};

FrameWork = {
	isDebugMode: function () {
		if (FRAMEWORK_IS_DEBUG_MODE) {
			return true;
		}
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
	}
};

Browser = {
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
		if (Browser.isIE8() || Browser.isIE7() || Browser.isIE6() || Browser.isQuirks()) {
			var target = 'iframe';
			$(target).each(function (i) {
				$iframe = $(this);

				if ($iframe.attr("src").hasString("youtube")) {

					//Set HTML
					var $el = $(this);
					var $el_w;
					var $el_place;

					$el.wrap('<div class="js-youtube-w"></div>');
					$el_w = $el.closest(".js-youtube-w");

					$el_w.append('<div class="js-youtube-info"></div>')
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
}

UI = {
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
	createHTML5: function () {
		if (Browser.isQuirks() || Browser.isIE6() || Browser.isIE7() || Browser.isIE8()) {
			document.createElement("main");
			document.createElement("header");
			document.createElement("footer");
			document.createElement("nav");
			document.createElement("aside");
		}
	},
	responsiveImgMap: function () {
		$('img[usemap]').rwdImageMaps(); //반응형 이미지맵
	},
	setBodyHeightPx: function () {
		var bodyHeight = $("body").outerHeight(true);
		$("body").outerHeight(bodyHeight);
	},

	/* IE9 이하 placeholder 사용가능하게 */
	setPlaceholder: function () {
		if (Browser.isIE9() || Browser.isIE9() || Browser.isIE7() || Browser.isIE6() || Browser.isQuirks()) {
			var target = 'input[placeholder], textarea[placeholder]';
			$(target).each(function (i) {
				//Set HTML
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
	/* WIN7 IE11 맑은 고딕 상하 정렬 문제 패치*/
	setFontAdjust: function () {
		if (Browser.WIN7) {
			$("a > span, button > span").each(function () {
				var $el = $(this);

				if ($el.css("font-family").hasString("맑은 고딕")) {
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

			if (href.hasString("#")) {
				util.goAnimatedHash(href.backString("#"));
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

/* # jQuery extention ================================================== */
$.fn.getPercentWidth = function () {
	var width = parseFloat($(this).css('width')) / parseFloat($(this).parent().css('width'));
	return Math.round(100 * width) + '%';
};

$(document).ready(function () {
	UI.createHTML5();
	UI.setFontAdjust();
	UI.setPlaceholder();
	UI.responsiveImgMap();
	UI.setHashControl();
});

$(window).load(function () {

});