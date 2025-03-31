<?php
// Configuração para exibir erros (apenas para desenvolvimento)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verificar se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Dados pessoais
    $nomeAluno = $_POST['nomeAluno'] ?? '';
    $diaNascimento = $_POST['diaNascimento'] ?? '';
    $mesNascimento = $_POST['mesNascimento'] ?? '';
    $anoNascimento = $_POST['anoNascimento'] ?? '';
    $nomeMae = $_POST['nomeMae'] ?? '';
    $nomePai = $_POST['nomePai'] ?? '';
    $ddd = $_POST['ddd'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $ramal = $_POST['ramal'] ?? '';
    $email = $_POST['email'] ?? '';

    // Informações de matrícula
    $serie = $_POST['serie'] ?? '';
    $turno = $_POST['turno'] ?? '';
    $atividades = isset($_POST['atividades']) ? implode(", ", $_POST['atividades']) : 'Nenhuma';

    // Data de nascimento formatada
    $dataNascimento = "$diaNascimento/$mesNascimento/$anoNascimento";

    // Exibir os dados enviados (simples para validação)
    echo "<h1>Dados Recebidos</h1>";
    echo "<h2>Dados Pessoais</h2>";
    echo "<p><strong>Nome do Aluno:</strong> $nomeAluno</p>";
    echo "<p><strong>Data de Nascimento:</strong> $dataNascimento</p>";
    echo "<p><strong>Nome da Mãe:</strong> $nomeMae</p>";
    echo "<p><strong>Nome do Pai:</strong> $nomePai</p>";
    echo "<p><strong>Telefone:</strong> ($ddd) $telefone Ramal: $ramal</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";

    echo "<h2>Informações de Matrícula</h2>";
    echo "<p><strong>Série:</strong> $serie</p>";
    echo "<p><strong>Turno:</strong> $turno</p>";
    echo "<p><strong>Atividades Extracurriculares:</strong> $atividades</p>";

    // Você pode salvar os dados em um banco de dados ou arquivo aqui
    // Exemplo: Conexão ao banco e inserção de dados (opcional)
    /*
    $conn = new mysqli('localhost', 'usuario', 'senha', 'banco');
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }
    $sql = "INSERT INTO matriculas (nomeAluno, dataNascimento, nomeMae, nomePai, telefone, email, serie, turno, atividades)
            VALUES ('$nomeAluno', '$dataNascimento', '$nomeMae', '$nomePai', '($ddd) $telefone Ramal: $ramal', '$email', '$serie', '$turno', '$atividades')";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Dados salvos com sucesso!</p>";
    } else {
        echo "<p>Erro ao salvar os dados: " . $conn->error . "</p>";
    }
    $conn->close();
    */
} else {
    echo "<h1>Erro: Nenhum dado foi enviado!</h1>";
}
?>
