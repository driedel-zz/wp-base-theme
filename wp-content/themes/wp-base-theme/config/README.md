# Config

## global-vars.php

Para criar funções globais no Wordpress é possível fazê-lo pelo arquivo `functions.php` que fica na raiz do tema, porém decidimos criar um centralizador das funções específicas que serão reaproveitadas em todas as views do tema.

* AssetsRoot - Raiz da pasta de assets
* Modules - Pasta de módulos dentro de Shared
* Structure - Pasta de estruturas dentro de Shared
* BaseToSubDir - Acesso a raiz do tema para chamar outras variáveis quando se está dentro de alguma pasta. Esta implementação foi feita por problemas de acesso de arquivos do PHP.
* $GLOBALS['global_css'] - Chamada com arquivo base de CSS `common.css` e para incrementar com novos arquivos e utilizar chamada na [minify](https://github.com/driedel/wp-base-theme/tree/working/min).
* $GLOBALS['global_js'] - Chamada com arquivo base de JS `main.css` e para incrementar com novos arquivos e utilizar chamada na [minify](https://github.com/driedel/wp-base-theme/tree/working/min).
* $theme_path - Raiz da pasta do tema, apenas armazenada a função padrão do Wordpress `get_template_directory()` para não repetir a chamada.

	Neste arquivo também chamamos o `wrapper.php` dos [Helpers](https://github.com/driedel/wp-base-theme/tree/working/wp-content/themes/wp-base-theme/Helpers) para que todos possam ser acessados de qualquer lugar do projeto.