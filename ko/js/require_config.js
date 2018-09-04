require.config({
	paths: {
		"jquery": "/ko/js/jquery/jquery-1.8.3.min",
		"UI": "/ko/js/class/UI",
		"common": "/ko/js/common"
	},
	shim: {
		"UI": {
			deps: ["jquery"]
		},
		"common": {
			deps: ["jquery", "UI"]
		}
	}
});