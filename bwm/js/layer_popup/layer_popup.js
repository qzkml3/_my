var LayerPopup = {
	css: '<link rel="stylesheet" href="http://_my.test/site/js/layer_popup/layer_popup.css">',
	htmlPath: 'http://_my.test/site/js/layer_popup/layer_popup.html',
	open: function (param) {
		this.isAttachedCSS = false;

		if (!this.isAttachedCss) {
			$("body").append(this.css);
			this.isAttachedCss = true;
		}

		$.get(this.htmlPath, function (data) {
			var $pop = $(data);

			// set prop
			$pop.attr("id", param.id);
			$pop.find("img").attr("src", param.src);

			// css pop
			$pop.css("width", param.width);
			$pop.css("left", param.left);
			$pop.css("top", param.top);

			if (param.leftFromCenter != null) {
				$pop.css("left", "50%");
				$pop.css("margin-left", param.leftFromCenter);
			}

			//event pop
			var cookieName = param.id;
			var $chkBox = $pop.find(".layer_popup_control_chk");
			var $btnClose = $pop.find(".layer_popup_control_btn");

			$($btnClose).on("click", function () {
				if ($chkBox.prop("checked")) {
					CookieUtil.setCookie(cookieName, "closed", 1);
				}
				$pop.hide();
			});

			//add link
			if (param.linkId) {
				$pop.find(".layer_popup_img_w img").wrap('<a href="' + param.linkId + '"></a>');
			}

			//append pop
			if (CookieUtil.getCookie(cookieName) == null) {
				$("body").append($pop);
			}

			//draggable pop
			try {
				$pop.draggable();
			} catch (e) {}

			//console.log($pop);
			//console.log($pop.get(0).outerHTML);
		});
	}
}