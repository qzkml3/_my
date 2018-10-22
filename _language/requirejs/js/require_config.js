require.config({
	paths: {
		"jquery": "/site/js/jquery/jquery-1.8.3.min",
		"common": "/site/js/common",
        "inner": "/_language/requirejs/js/inner",
        "inner2": "/_language/requirejs/js/inner2",
        "outer": "/_language/requirejs/js/outer",
        "outer2": "/_language/requirejs/js/outer2"
	},
	shim: {
        "common": {
            deps: ["jquery", "inner", "inner2"]
        },
        "inner": {
            deps: ["jquery"]
        },
        "inner2": {
            deps: ["jquery"]
        },
        "outer": {
            deps: ["jquery"]
        },
        "outer2": {
            deps: ["jquery"]
        }
	}
});