# 🎯 Atividade 3: Desafio "Verificador de Maioridade" 🆔

Este repositório contém a solução para a Atividade 3 desenvolvida para a aula de PHP. O objetivo principal do script é validar a maioridade de um usuário com base em seu ano de nascimento e registrar os acessos permitidos em um arquivo de log.

---

## 📋 Descrição do Desafio

O programa foi desenvolvido no arquivo `5a_desafio1.php` e executa o seguinte fluxo:

1. **Entrada de Dados:** Exibe um formulário solicitando o **Nome** e o **Ano de Nascimento** do usuário.
2. **Processamento:** Calcula a idade do usuário com base no ano atual.
3. **Validação:**
   * **Se a idade for maior ou igual a 18 anos:**
     * Exibe a mensagem: `Acesso permitido, [Nome]!`
     * Salva o registro no arquivo `log_acessos.txt`.
   * **Se for menor de idade:**
     * Exibe a mensagem: `Acesso negado, [Nome]!`.

---

## 📂 Arquivos do Repositório

* `5a_desafio1.php`: Código-fonte principal com a estrutura HTML e lógica em PHP.
* `log_acessos.txt`: Arquivo de texto gerado automaticamente pelo script quando há acessos permitidos.

---

## 🚀 Como Executar o Projeto

1. Certifique-se de ter um ambiente PHP configurado (como XAMPP, WAMP, Laragon ou o servidor embutido do PHP).
2. Clone este repositório ou baixe o arquivo `5a_desafio1.php`:
   ```bash
   git clone [https://github.com/seu-usuario/nome-do-repositorio.git](https://github.com/seu-usuario/nome-do-repositorio.git)
