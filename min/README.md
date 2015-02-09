#PHP Minify

Utilizamos como base a [minify](https://code.google.com/p/minify/) existente no Google Code para evitar a utilização de plugins que ficam desatualizados ou geram códigos desnecessários.

A minificação de arquivos é feita automaticamente e para a inclusão de arquivos utilizamos duas variáveis globais aonde iremos concatenar os arquivos específicos de cada View com os arquivos globais:

* `$global_css` - Tem como padrão o arquivo `common.css` carregado pelo [global-vars.php](https://bitbucket.org/danilo_riedel/wp-base-theme/src/298abc86c1f3570612a2e7c17a261ebb95e8d1ee/wp-content/themes/wp-base-theme/config/)
* `$global_js` - Tem como padrão o arquivo `main.js` carregado pelo [global-vars.php](https://bitbucket.org/danilo_riedel/wp-base-theme/src/298abc86c1f3570612a2e7c17a261ebb95e8d1ee/wp-content/themes/wp-base-theme/config/)

No início do código de cada `View` podemos declarar quais são os outros arquivos que iremos importar para que a `minify` faça a concatenação e gere apenas um arquivo de saída no formato `gzip`.

	$global_css .= ','.AssetsRoot.'css/home.css';
	$global_css .= ','.AssetsRoot.'css/modal.css';

ou

	$global_css .= ','.AssetsRoot.'css/home.css,'.AssetsRoot.'css/modal.css';

---------------------------------------

## Configuração

Existe um arquivo chamado `config.php.template` na raiz da pasta `min` que deve ser renomeado. Este arquivo não deve nunca ser comitado no git pois as configurações são específicas de cada máquina e isso pode gerar conflitos.

Dentro do arquivo `config.php` é necessário apontar uma pasta de arquivos temporários, pois segundos eles, o processo fica mais rápido. No caso de configuração pelo `IIS` foi necessário criar a pasta `tmp` na raiz do diretório das aplicações pois ele estava com erro de permissão.

### URL Rewrite

Os arquivos `.htaccess.template` e `web.config.template` contém as chaves necessárias para fazer a rota correta da minify.

