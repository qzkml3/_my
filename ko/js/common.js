console.log("loaded: common");

StringUtil = {
	hasString: function(scope, find) {
		if (scope.indexOf(find) > -1) {
			return true;
		}
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
	isIE: function() {
		if (StringUtil.hasString(navigator.userAgent, "Trident")) {
			return true;
		}
	},
	isChrome: function() {

	},
	isFireFox: function() {

	},
	isIPhone:  function() {

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
	}
};

$(document).ready(function () {
	console.log("loaded: document.ready");
});

$(window).load(function () {
	console.log("loaded: window.load");
});
