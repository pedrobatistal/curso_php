<!-- Introdução ao HTTP
A web roda em cima do protocolo HTTP (HyperText Transfer Protocol);
Quando um navegador solicita uma página web é feito um request HTTP;
Esta requisição recebe uma resposta, ambos podem possuir um body;
A resposta contém um header (cabeçalho), que é constituído pelo método (GET,POST), arquivo/path solicitado (index.php) e versão do protocolo HTTP (HTTP/1.x);
Basicamente uma requisição é enviada e uma resposta é recebida. 

Métodos HTTP
As requisições que enviamos também contém métodos, alguns deles são:
GET => Solicita a apresentação de um recurso (ex: visualização de uma página);
POST => Envio de dados ao servidor (ex: cadastro de usuário);
PUT => Atualização de dados;
DELETE => Remoção de dados;
PATCH => Atualização de dado específico;

Variáveis globais do PHP
Para lidar com estas requisições o PHP nos dá algumas variáveis globais:
$_ENV => variáveis de ambiente;
$_GET => Parâmetros que foram enviados por request GET;
$_POST => Parâmetros que foram enviados por POST;
$_COOKIE => Valores de cookies;
$_SERVER => Informações sobre o servidor;
$_FILES => Informações sobre os arquivos que vieram por upload;

Após 1_server:
Processamento de formulários teoria
Vamos realizar processamentos de formulário de duas maneiras: via GET e via POST;
Com GET vamos processar os parâmetros que vem na query string, ou seja, na URL;
Com POST vamos processar as informações que vem na requisição, estas não aparecem na URL;
Exemplos de uso: Buscas => GET, Registro de usuário => POST

Após 10_sessions:
Introdução ao SSL
SSL vem de Secure Sockets Layer;
O PHP não se importa muito e não tem vantagens sobre o SSL;
Porém, garantimos que as requisições de dados entre nosso site e servidor estejam mais seguras com a encriptação dos dados;
Devemos apenas ter cuidado com os formulários, para que sejam enviados para a URL com HTTPS, pois alguns servidores bloqueiam a conexão HTTP;
-->