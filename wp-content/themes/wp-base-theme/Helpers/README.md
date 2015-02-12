# Helpers

Date: 2015-02-06

Os `helpers` são funções que recebem parâmetros para retornar pequenos trechos de `HTML`. Pela estrutura do `PHP` eles foram criados como classes que são acessíveis em qualquer lugar do projeto pois são chamados pelo [global-vars.php](https://github.com/driedel/wp-base-theme/tree/working/wp-content/themes/wp-base-theme/config) através do arquivo `wrappers.php` que fica dentro da pasta dos helpers, portanto cada novo conjunto de `helpers` deve ser registrado neste arquivo para ficar acessível em qualquer outro arquivo do site.

---------------------------------------

## Acessibility

	Neste helper declaramos todos os links de âncora referentes a acessibilidade no site. Eles tem a classe ".skip-link" para ocultarmos na versão padrão.

### Class Acessibility -> Functions
* Content: Parâmetros - `$text`, `$anchor`
*  Search: Parâmetros - `$text`, `$anchor`
* Menu: Parâmetros - `$text`, `$anchor`

---------------------------------------

## HtmlWrappers

	Centralização da chamada de classes e id's dos `wrappers` de todas as páginas. Todos os `helpers` tem valores padrões que podem ser sobrescritos.

### Class HtmlWrappers -> Functions

#### Structure Wrappers
* MainWrapper: Array - `$id`, `$class`
* MainSite: Array - `$id`, `$class`
* MainContent: Array - `$id`, `$class`

#### Section Wrappers
* PrimarySection: Array - `$id`, `$class`

#### Section Contents
* SiteContent: Array - `$id`, `$class`

---------------------------------------

## Menu

	Este helper funciona basicamente para fazer as chamadas dos três menus administráveis pelo admin que estão no tema.

### Class Menu -> Functions
* Nav: Array - `$id`, `$class`
* Sidebar: Array - `$id`, `$class`
* Footer: Array - `$id`, `$class`

---------------------------------------

## Title

	Declaração de todos os títulos que são utilizados no site.

### Class Title -> Functions
* Site: Array - `$title`, `$link`, `$id`, `$class`, `$tag`, `$rel`
* Main: Array - `$title`, `$link`, `$id`, `$class`, `$tag`, `$rel`
* Secondary: Array - `$title`, `$link`, `$id`, `$class`, `$tag`, `$rel`
* Page: Array - `$title`, `$link`, `$id`, `$class`, `$tag`, `$rel`
* Category: Array - `$title`, `$link`, `$id`, `$class`, `$tag`, `$rel`
* Tag: Array - `$title`, `$link`, `$id`, `$class`, `$tag`, `$rel`
* Author: Array - `$title`, `$link`, `$id`, `$class`, `$tag`, `$rel`
* SiteDescription: Array - `$title`, `$link`, `$id`, `$class`, `$tag`, `$rel`