# Sistema de Gerenciamento de Títulos Audiovisuais

Este projeto PHP implementa um sistema orientado a objetos para o gerenciamento de títulos audiovisuais, como filmes e séries, permitindo avaliações, categorização por gênero e manipulação de episódios.

## 📁 Estrutura dos Arquivos

* **`index.php`**: Ponto de entrada do sistema; demonstra o uso das classes.
* **`autoload.php`**: Autoloading das classes para facilitar a manutenção e organização.
* **`funcoes.php`**: Funções auxiliares, como exibição de mensagens.
* **Classes principais:**

  * **`Titulo.php`**: Classe base abstrata para títulos (filmes e séries).
  * **`Filme.php`**: Representa um filme, herdando de `Titulo`.
  * **`Serie.php`**: Representa uma série, herdando de `Titulo`.
  * **`Episodio.php`**: Representa um episódio de uma série.
  * **`Genero.php`**: Representa o gênero de um título (ex: Ação, Drama).
  * **`Avaliavel.php`**: Interface para títulos que podem receber avaliações.
  * **`ComAvaliacao.php`**: Trait para adicionar funcionalidades de avaliação (nota e total de avaliações).

## ⚙️ Funcionalidades

* Cadastro de filmes e séries com título, ano e gênero.
* Inclusão de episódios em séries.
* Avaliação de títulos com sistema de média.
* Exibição formatada das informações dos títulos.

## 🛠️ Requisitos

* PHP 7.4 ou superior

## 🚀 Como Executar

1. Clone o repositório:

   ```bash
   git clone <url-do-repositorio>
   cd nome-do-projeto
   ```

2. Inicie um servidor local com PHP:

   ```bash
   php -S localhost:8000
   ```

3. Acesse via navegador:

   ```
   http://localhost:8000/index.php
   ```

## 🧱 Exemplo de Uso

```php
$filme = new Filme("Matrix", 1999, new Genero("Ficção Científica"));
$filme->avaliar(5);
$filme->avaliar(4);

echo $filme;
```

## 📌 Observações

* O uso de autoload (`autoload.php`) segue padrão PSR-4 simplificado.
* O projeto é modular e pode ser expandido com novos tipos de mídia ou funcionalidades, como persistência em banco de dados.

## 📄 Licença

Este projeto é de uso educacional e pode ser adaptado livremente.
