// Este arquivo não deve ser um módulo,
// pois será executado antes de existir a require
(function(w){
	if (!w.require) {
		w.hbsExec = w.hbsExec || [];
		w.require = function(){
			w.hbsExec.push({
				func: 'require',
				args: arguments
			});
		};
		w.define = function(){
			w.hbsExec.push({
				func: 'define',
				args: arguments
			});
		};
		w.queue = function(){
			w.hbsExec.push({
				func: 'queue',
				args: arguments
			});
		};
	}
}(window));
