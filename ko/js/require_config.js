require.config({
	baseUrl: "/ko/js/",
	paths: {
		"jquery": "jquery/jquery-1.8.3.min",
		"common": "common"
	},
	shim: {
		"common": {
			deps: ["jquery"]
		}
	}
});