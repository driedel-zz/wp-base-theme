define(function (require) {
	// Almond por sempre ser saída concatenada
	require('almond');
	// require('zepto/zepto');
	// require('zepto/event');
	// require('zepto/ie');
	// Arquivo inserido para garantir que 2 arquivos
	// sejam carregados em paralelo e executem na sequencia
	require('mod/hyojun/mod-async-run');
});

// módulo do analytics
require(['mod/hyojun/mod-gaq'], function(modGAQ) {
	modGAQ.run(
		hyojun.config.ga.trackCode,
		hyojun.config.ga.trackValue,
		hyojun.config.isLocal
	);
});
