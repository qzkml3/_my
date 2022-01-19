



UI = {
	/* # jQuery extention ================================================== */
	changeOrder: function (sortable, changeOrder, saveChangeOrder) {
		var $sortable = $(sortable);

		//toggle button
		$(changeOrder).hide();
		$(saveChangeOrder).show();

		//sort
		$sortable.sortable({
			placeholder: "ui-state-highlight",
			helper: UI.fixHelper
		});//.disableSelection(); //y use this?
	},
	fixHelper: function (e, ui) {
		ui.children().each(function () {
			$(this).width($(this).width());
		});
		return ui;
	},
	saveChangeOrder: function (sortable, changeOrder, saveChangeOrder) {
		$(changeOrder).show();
		$(saveChangeOrder).hide();

		$(sortable).sortable("destroy");
	},



};

