require.config({
	paths: {
		"jquery": "/ko/js/jquery/jquery-1.8.3.min",
		"common": "/ko/js/common",
		"UI": "/ko/js/class/UI"
	},
	shim: {
		"common": {
			deps: ["jquery", "UI"]
		},
		"UI": {
			deps: ["jquery"]
		}
	}
});