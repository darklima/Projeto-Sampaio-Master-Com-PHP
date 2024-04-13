<?php
$assunto    = $_POST['assunto'];
$corpo      = "      
Nome:"        .$_POST['Nome']."
email:"       .$_POST['email']."
areadetexto"     .$_POST['areadetexto']."";

mail('mauric_fl@hotmail.com');
header('Location:obrigado.php',$assunto,$corpo,'usuario@dominio.com');

if (mail($assunto, $corpo, $headers)) {
    // Exibe o alerta de confirmação
    echo '<script type="text/javascript">';
    echo '    alert("Mensagem enviada com sucesso!");';
    echo '    window.location.href = "index.html";'; // Redireciona para a página inicial
    echo '</script>';
} else {
    echo "Erro ao enviar a mensagem.";
}
}


?>