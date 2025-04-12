<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Conversor de Temperatura</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #f5f5f5;
      font-family: Arial, sans-serif;
    }

    .container {
      display: flex;
      align-items: center;
      gap: 50px;
    }

    .bloco {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 20px;
    }

    .input-temperatura {
      width: 200px;
      height: 50px;
      background-color: #d3d3d3;
      border: none;
      border-radius: 4px;
      text-align: center;
      font-size: 18px;
    }

    .botoes {
      display: flex;
      gap: 15px;
    }

    .botao {
      width: 100px;
      height: 50px;
      background-color: #d3d3d3;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .ativo {
      background-color: #4CAF50;
      color: white;
    }

    .seta {
      font-size: 24px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="container">
    <!-- Bloco da esquerda -->
    <div class="bloco">
      <input type="text" id="valor" class="input-temperatura" placeholder="Temperatura">
      <div class="botoes">
        <button class="botao tipo-atual" data-tipo="celsius">Celsius</button>
        <button class="botao tipo-atual" data-tipo="fahrenheit">Fahrenheit</button>
        <button class="botao tipo-atual" data-tipo="kelvin">Kelvin</button>
      </div>
    </div>

    <!-- Bloco do meio -->
    <div class="botoes-meio">
      <button class="botao-meio" id="converter">→</button>
      <button class="botao-meio" id="reiniciar">⟲</button>
    </div>

    <!-- Bloco da direita -->
    <div class="bloco">
      <input type="text" id="resultado" class="input-temperatura" disabled>
      <div class="botoes">
        <button class="botao tipo-destino" data-tipo="celsius">Celsius</button>
        <button class="botao tipo-destino" data-tipo="fahrenheit">Fahrenheit</button>
        <button class="botao tipo-destino" data-tipo="kelvin">Kelvin</button>
      </div>
    </div>
  </div>

  <script>
    let tipoAtual = null;
    let tipoDestino = null;

    // Botões da esquerda (origem)
    document.querySelectorAll('.tipo-atual').forEach(btn => {
      btn.addEventListener('click', () => {
        tipoAtual = btn.dataset.tipo;
        document.querySelectorAll('.tipo-atual').forEach(b => b.classList.remove('ativo'));
        btn.classList.add('ativo');
      });
    });

    // Botões da direita (destino)
    document.querySelectorAll('.tipo-destino').forEach(btn => {
      btn.addEventListener('click', () => {
        tipoDestino = btn.dataset.tipo;
        document.querySelectorAll('.tipo-destino').forEach(b => b.classList.remove('ativo'));
        btn.classList.add('ativo');
      });
    });

    // Botão do meio (converter)
    document.getElementById('converter').addEventListener('click', () => {
      const valor = document.getElementById('valor').value;

      if (!tipoAtual || !tipoDestino || !valor) {
        alert("Preencha todos os campos e selecione os tipos de temperatura.");
        return;
      }

      fetch('controlador.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `valor=${encodeURIComponent(valor)}&tipo_atual=${tipoAtual}&tipo_destino=${tipoDestino}`
      })
      .then(response => response.json())
      .then(data => {
        document.getElementById('resultado').value = data.resultado;
      })
      .catch(error => {
        alert("Erro ao converter: " + error);
      });
    });
  </script>
</body>
</html>
