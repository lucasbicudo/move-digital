<?php
$html = "";
$html .='
<div>
    <h1>Orçamento site PRZ Arquitetura</h1>
</div>
<div style="margin-top:0.5rem;">
    <span style="font-size:1rem;">Natureza do Projeto</span>
    <div style="margin:0.5rem;">
        <strong style="font-size:1.5rem;">' . $_POST['natureza-projeto'] . '</strong>
    </div>
    <span style="margin-top:0.5rem; font-size:1rem;">Tipo de Projeto Comercial</span>
    <div style="margin:0.5rem;">
        <strong style="font-size:1.5rem;">' . $_POST['tipo-projeto'] . '</strong>
    </div>
    <span style="margin-top:0.5rem; font-size:1rem;">Onde está situado o seu projeto?</span>
    <div style="margin:0.5rem;">
        <strong style="font-size:1.5rem;">' . $_POST['cidade'] . '</strong>
    </div>
    <span style="margin-top:0.5rem; font-size:1rem;">Você já possui projeto executivo finalizado?</span>
    <div style="margin:0.5rem;">
        <strong style="font-size:1.5rem;">' . $_POST['projeto-finalizado'] . '</strong>
    </div>
    <span style="margin-top:0.5rem; font-size:1rem;">Serviços Desejados</span>
    <div style="margin:0.5rem;">
        <strong style="font-size:1.5rem;">
            ('.(isset($_POST['servicos-imagens']) ? 'x' : '').') Imagens Estáticas
            ('.(isset($_POST['servicos-videos']) ? 'x' : '').') Vídeo
        </strong>
    </div>
    <span style="margin-top:0.5rem; font-size:1rem;">Arquivos do Projeto</span>
    <br>
    <small>Possui algum arquivo do projeto que possa compartilhar para facilitar a elaboração de um
        orçamento mais preciso?</small>
    <div style="margin:0.5rem;">
        <strong style="font-size:1.5rem;">' . $_POST['arquivo-projeto'] . '</strong>
    </div>
    <span style="margin-top:0.5rem; font-size:1rem;">Informações Adicionais</span>
    <div style="margin:0.5rem;">
        <strong style="font-size:1.5rem;">' . $_POST['info-adicionais'] . '</strong>
    </div>
    <span style="margin-top:0.5rem; font-size:1rem;">Contato para Dúvidas</span>
    <div style="margin:0.5rem;">
        <strong style="font-size:1.5rem;">' . $_POST['contato-duvidas'] . '</strong>
    </div>
</div>';