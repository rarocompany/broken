(window.webpackJsonp=window.webpackJsonp||[]).push([[4],{628:function(e,t){var n,o=window.ProgressEvent,r=!!o;try{n=new o("loaded"),r="loaded"===n.type,n=null}catch(e){r=!1}e.exports=r?o:"function"==typeof document.createEvent?function(e,t){var n=document.createEvent("Event");return n.initEvent(e,!1,!1),t?(n.lengthComputable=Boolean(t.lengthComputable),n.loaded=Number(t.loaded)||0,n.total=Number(t.total)||0):(n.lengthComputable=!1,n.loaded=n.total=0),n}:function(e,t){var n=document.createEventObject();return n.type=e,t?(n.lengthComputable=Boolean(t.lengthComputable),n.loaded=Number(t.loaded)||0,n.total=Number(t.total)||0):(n.lengthComputable=!1,n.loaded=n.total=0),n}},630:function(e,t,n){"use strict";var o;n.r(t),n.d(t,"requestAllBlogsAccess",(function(){return A})),n.d(t,"reloadProxy",(function(){return I}));var r=new Uint8Array(16);function a(){if(!o&&!(o="undefined"!=typeof crypto&&crypto.getRandomValues&&crypto.getRandomValues.bind(crypto)||"undefined"!=typeof msCrypto&&"function"==typeof msCrypto.getRandomValues&&msCrypto.getRandomValues.bind(msCrypto)))throw new Error("crypto.getRandomValues() not supported. See https://github.com/uuidjs/uuid#getrandomvalues-not-supported");return o(r)}var i=/^(?:[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}|00000000-0000-0000-0000-000000000000)$/i;for(var u=function(e){return"string"==typeof e&&i.test(e)},s=[],d=0;d<256;++d)s.push((d+256).toString(16).substr(1));var l=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,n=(s[e[t+0]]+s[e[t+1]]+s[e[t+2]]+s[e[t+3]]+"-"+s[e[t+4]]+s[e[t+5]]+"-"+s[e[t+6]]+s[e[t+7]]+"-"+s[e[t+8]]+s[e[t+9]]+"-"+s[e[t+10]]+s[e[t+11]]+s[e[t+12]]+s[e[t+13]]+s[e[t+14]]+s[e[t+15]]).toLowerCase();if(!u(n))throw TypeError("Stringified UUID is invalid");return n};var c,p=function(e,t,n){var o=(e=e||{}).random||(e.rng||a)();if(o[6]=15&o[6]|64,o[8]=63&o[8]|128,t){n=n||0;for(var r=0;r<16;++r)t[n+r]=o[r];return t}return l(o)},f=n(628),m=n.n(f),v="https://public-api.wordpress.com",w=window.location.protocol+"//"+window.location.host,g=function(){var e=!1;try{window.postMessage({toString:function(){e=!0}},"*")}catch(e){}return e}(),y=function(){try{return new window.File(["a"],"test.jpg",{type:"image/jpeg"}),!0}catch(e){return!1}}(),h=null,b=!1,E={},C=!!window.ProgressEvent&&!!window.FormData,j=function(e,t){var n=Object.assign({},e);h||R();var o=p();n.callback=o,n.supports_args=!0,n.supports_error_obj=!0,n.supports_progress=C,n.method=String(n.method||"GET").toUpperCase();var r=new window.XMLHttpRequest;if(r.params=n,E[o]=r,"function"==typeof t){var a=!1,i=function(e){if(!a){a=!0;var n=e.error||e.err||e;t(n,null,e.headers)}};r.addEventListener("load",(function(e){if(!a){a=!0;var n=e.response||r.response;t(null,n,e.headers)}})),r.addEventListener("abort",i),r.addEventListener("error",i)}return b?L(n):c.push(n),r},S=function(e,t){return"function"==typeof t?j(e,t):new Promise((function(t,n){j(e,(function(e,o){e?n(e):t(o)}))}))};function A(){return S({metaAPI:{accessAllUsersBlogs:!0}})}function L(e){e.formData&&function(e){if(!window.chrome||!y)return;for(var t=0;t<e.length;t++){var n=N(e[t][1]);n&&(e[t][1]=new window.File([n],n.name,{type:n.type}))}}(e.formData),h.contentWindow.postMessage(g?JSON.stringify(e):e,v)}function P(e){return e&&"[object File]"===Object.prototype.toString.call(e)}function N(e){return P(e)?e:"object"==typeof e&&P(e.fileContents)?e.fileContents:null}function R(){h&&(window.removeEventListener("message",O),document.body.removeChild(h),b=!1,h=null),c=[],window.addEventListener("message",O),(h=document.createElement("iframe")).src=v+"/wp-admin/rest-proxy/?v=2.0#"+w,h.style.display="none",h.sandbox="allow-same-origin allow-scripts",document.body.appendChild(h)}var I=function(){R()};function O(e){if(e.origin===v&&e.source===h.contentWindow){var t=e.data;if(t)if("ready"!==t){if(g&&"string"==typeof t&&(t=JSON.parse(t)),t.upload||t.download)return function(e){var t=E[e.callbackId];if(t){var n=new m.a("progress",e);(e.upload?t.upload:t).dispatchEvent(n)}}(t);if(t.length){var n=t[t.length-1];if(n in E){var o=E[n],r=o.params,a=t[0],i=t[1],u=t[2];207===i||delete E[n],r.metaAPI&&(i="metaAPIupdated"===a?200:500),"object"==typeof u&&(u.status=i),i&&2===Math.floor(i/100)?function(e,t,n){var o=new m.a("load");o.data=o.body=o.response=t,o.headers=n,e.dispatchEvent(o)}(o,a,u):function(e,t,n){var o=new m.a("error");o.error=o.err=t,o.headers=n,e.dispatchEvent(o)}(o,null,u)}}}else!function(){if(b=!0,c){for(var e=0;e<c.length;e++)L(c[e]);c=null}}()}}t.default=S}}]);