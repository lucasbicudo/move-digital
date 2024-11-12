# Site PHP para XAMPP

Este projeto é um site desenvolvido para rodar localmente utilizando o XAMPP. Abaixo, você encontrará as instruções para configuração, instalação e execução do projeto em seu ambiente local.

Link do projeto funcionando (https://www.reticenciasdigital.com.br/move-digital/)

## Pré-requisitos

- [XAMPP](https://www.apachefriends.org/index.html) instalado em sua máquina (instruções de instalação disponíveis no site oficial).
- Git.

## Instalação e Configuração

1. **Clone o repositório**:
   Abra o terminal ou prompt de comando e clone o projeto em seu diretório de preferência:
   ```bash
   git clone https://github.com/lucasbicudo/move-digital

2. **Configuração do Envio de E-mail**:

    Abra o arquivo send-email.php.
    Substitua os caminhos e configure as credenciais de e-mail conforme o servidor que você utilizará.

    Exemplo de configuração do PHPMailer:

    require("{caminho}/PHPMailer-master/src/PHPMailer.php");
    require("{caminho}/PHPMailer-master/src/SMTP.php");

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true; // Autenticação habilitada
    $mail->SMTPSecure = 'ssl'; // Transferência segura habilitada, necessário para Gmail
    $mail->Host = "mail.seudominio.com.br";
    $mail->Port = 465; // ou 587
    $mail->isHTML(true);
    $mail->Username = "seuemail@seudominio.com";
    $mail->Password = "suasenha";
    $mail->setFrom("de@seudominio.com");
    $mail->Subject = "Assunto do email";
    $mail->Body = $html;
    $mail->addAddress("dev@movedigital.com.br");

    Certifique-se de substituir {caminho}, "seuemail@seudominio.com", "suasenha", e os demais parâmetros conforme as configurações do seu servidor de e-mail.

3. **Copie o projeto para o diretório do XAMPP**:

    Após clonar o repositório, copie ou mova o diretório do projeto para a pasta htdocs do XAMPP.
    No Windows, a pasta htdocs geralmente está localizada em C:\xampp\htdocs.

