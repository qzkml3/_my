console.log("loaded: common");

StringUtil = {
	hasString: function(scope, find) {
		if (scope.indexOf(find) > -1) {
			return true;
		}
	}
};

System = {
	getDebugMode: function() {
		if (SYSTEM_DEBUG_MODE) {
			return true;
		}
	}
};

Browser = {
	getIE: function() {
		if (StringUtil.hasString(navigator.userAgent, "Trident")) {
			return true;
		}
	},
	getChrome: function() {

	},
	getFireFox: function() {

	},
	getIPhone:  function() {

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
