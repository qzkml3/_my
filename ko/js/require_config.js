require.config({
	paths: {
		"jquery-1.8.3": "/ko/js/jquery/jquery-1.8.3.min",
		"common": "/ko/js/common"
	},
	shim: {
		"common": {
			deps: ["jquery-1.8.3"]
		}
	}
});