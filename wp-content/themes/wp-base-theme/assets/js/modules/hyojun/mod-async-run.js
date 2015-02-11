// Este arquivo é um módulo pois será executado
// antes de todos os módulos
(function(w){
	var args, i, len;

	w.queue = function(func) {
		if (typeof func === 'function') {
			func();
		}
	};

	if (w.hbsExec && hbsExec.constructor === Array) {
		for (i=0, len = hbsExec.length; i<len; i++) {
			args = Array.prototype.slice.call(hbsExec[i].args);
			w[hbsExec[i].func].apply(null, args);
		}
	}
}(window));
