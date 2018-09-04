console.log("loaded: common");

System = {
	getDebugMode: function() {
		return true;
	}
};

Browser = {
	getIE: function() {

	},
	getChrome: function() {

	},
	getFireFox: function() {

	},
	getIPhone:  function() {

	}
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
	}
};