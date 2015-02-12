# Config files

## rsync

O `rsync` tem dois arquivos de configuração, o primeiro é o `.rsync-config` que define a pasta para onde os arquivos serão sincronizados, já no `.rsync-ignore` definimos todos os arquivos que o `rsync` não precisa enviar para pasta sincronismo. Para maiores informações leia a explicação na [Wiki - Setup Inicial](https://github.com/driedel/wp-base-theme/wiki/Setup-inicial).

---------------------------------------

## jshint

Dentro do `.jshintrc` temos as regras que o `jshint` irá submeter os arquivos `js` na hora da compilação. Para maiores informações leia veja a [documentação do grunt-contrib-jshint](https://github.com/gruntjs/grunt-contrib-jshint).

---------------------------------------

## scss-lint

Dentro do `.scss-lint` temos as regras que o `scss-lint` irá submeter os arquivos `scss` na hora da compilação. Para maiores informações leia veja a [documentação do grunt-scss-lint](https://github.com/ahmednuaman/grunt-scss-lint).

---------------------------------------

## wp-plugins

Arquivo de `json` que deve conter todos os plugins do `Wordpress` que são utilizados no projeto. Para uma melhor explicação leia na [Wiki - Setup Inicial](https://github.com/driedel/wp-base-theme/wiki/Setup-inicial).