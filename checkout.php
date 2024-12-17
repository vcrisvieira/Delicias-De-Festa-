<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encomendar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Delícias de Festa</h1>
        <nav>
            <a href="index.php">Início</a>
            <a href="sobre.php">Sobre</a>
            <a href="checkout.php">Encomendar</a>
        </nav>
    </header>
    <main>
        <h2>Encomende seu Bolo</h2>
        <form action="enviar-encomenda.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="sabor">Escolha o sabor:</label>
            <select id="sabor" name="sabor">
                <option value="chocolate">Chocolate</option>
                <option value="red-velvet">Red Velvet</option>
                <option value="morango">Morango</option>
            </select>
            
            <label for="mensagem">Mensagem no bolo:</label>
            <textarea id="mensagem" name="mensagem"></textarea>
            
            <button type="submit">Enviar Encomenda</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Delícias de Festa</p>
    </footer>
</body>
</html>
