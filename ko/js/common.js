console.log("loaded: common");

/**
 * String.prototype으로 만들지 않은 이유
 * - 다른 라이브러리와 충돌 가능성
 * - 다른 언어와의 문법적 동일성
 * */
StringUtil = {
	/**문자열이 있는지 판별*/
	hasString: function(scope, find) {
		var scope = scope.toString();
		var find = find.toString();

		if (scope.indexOf(find) > -1) {
			return true;
		}
	},

	/**구분자 뒤에 문자 리턴*/
	lastString: function(scope, find) {
		var scope = scope.toString();
		var find = find.toString();

		return scope.substring(scope.indexOf(find) + 1);
	},

	/**구분자와 구분자 뒤에 문자 리턴*/
	lastStringWith: function(scope, find) {
		var scope = scope.toString();
		var find = find.toString();

		return scope.substring(scope.indexOf(find));
	}
};

FrameWork = {
	isDebugMode: function() {
		if (FRAMEWORK_IS_DEBUG_MODE) {
			return true;
		}
	}
};

Browser = {
	isWin7: function() {
		if (StringUtil.hasString(navigator.userAgent, "Windows NT 6.1")) {
			return true;
		}
	},
	isIE: function() {
		if (StringUtil.hasString(navigator.userAgent, "Trident")) {
			return true;
		}
	},
	isIE11: function() {
		if (
			StringUtil.hasString(navigator.userAgent, "Trident")
			&& StringUtil.hasString(navigator.userAgent, "rv:11.0")
		) {
			return true;
		}
	},
	isIE10: function() {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 10")) {
			return true;
		}
	},
	isIE9: function() {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 9")) {
			return true;
		}
	},
	isIE8: function() {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 8")) {
			return true;
		}
	},
	isIE7: function() {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 7")) {
			return true;
		}
	},
	isIE6: function() {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 6")) {
			return true;
		}
	},
	isQuirks: function() {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 5")) {
			return true;
		}
	},
	isChrome: function() {
		if (StringUtil.hasString(navigator.userAgent, "Chrome")) {
			return true;
		}
	},
	isFireFox: function() {
		if (StringUtil.hasString(navigator.userAgent, "Firefox")) {
			return true;
		}
	},
	isIOS:  function() {
		if (
			StringUtil.hasString(navigator.userAgent, "iPhone")
			|| StringUtil.hasString(navigator.userAgent, "iPad")
		) {
			return true;
		}
	}
};

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
	createHTML5: function() {
		document.createElement("main");
		document.createElement("header");
		document.createElement("footer");
		document.createElement("nav");
		document.createElement("aside");
	}
	,
	responsiveImgMap: function() {
		$('img[usemap]').rwdImageMaps(); //반응형 이미지맵
	}
};

$(document).ready(function () {
	console.log("loaded: document.ready");
	//UI.createHTML5();
	//UI.responsiveImgMap();
});

$(window).load(function () {
	console.log("loaded: window.load");
});
