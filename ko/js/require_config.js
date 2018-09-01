require.config({
	paths: {
		"jquery": "/ko/js/jquery/jquery-1.8.3.min",
		"common": "/ko/js/common",
		"Iscroll": "/ko/js/iscroll/iscroll",
		"UI": "/ko/js/class/UI"
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