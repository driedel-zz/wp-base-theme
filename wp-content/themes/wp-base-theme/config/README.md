# Config

## global-vars.php

Para criar funções globais no Wordpress é possível fazê-lo pelo arquivo `functions.php` que fica na raiz do tema, porém decidimos criar um centralizador das funções específicas que serão reaproveitadas em todas as views do tema.

* AssetsRoot - Raiz da pasta de assets
* Modules - Pasta de módulos dentro de Shared
* Structure - Pasta de estruturas dentro de Shared
* BaseToSubDir - Acesso a raiz do tema para chamar outras variáveis quando se está dentro de alguma pasta. Esta implementação foi feita por problemas de acesso de arquivos do PHP.
* $GLOBALS['global_css'] - Chamada com arquivo base de CSS `common.css` e para incrementar com novos arquivos e utilizar chamada na [minify](https://bitbucket.org/danilo_riedel/wp-base-theme/issue/1/minify-css-e-js).
* $theme_path - Raiz da pasta do tema, apenas armazenada a função padrão do Wordpress `get_template_directory()` para não repetir a chamada.

	Neste arquivo também chamamos o `wrapper.php` dos [Helpers](https://bitbucket.org/danilo_riedel/wp-base-theme/src/506aaac54560c36912a5accaa37855af04d0e0f9/wp-content/themes/wp-base-theme/Helpers/) para que todos possam ser acessados de qualquer lugar do projeto.