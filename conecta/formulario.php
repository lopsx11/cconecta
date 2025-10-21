<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Inter', Arial, sans-serif;
      }

      html, body {
        height: 100%;
      }

      body {
        background-image: url('amigos-desfrutando-de-uma-discussao-animada-em-um-espaco-bem-decorado.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
      }

      body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 80, 0.45);
        backdrop-filter: brightness(0.9);
        z-index: 0;
      }

      .container {
        position: relative;
        z-index: 1;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .formulario {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 12px 18px rgba(0, 0, 0, 0.2);
        padding: 400px;
        width: 100%;
        max-width: 750px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 500px; /* altura fixa para permitir espaço entre conteúdo e botão */
      }

      .formulario .texto {
        flex: 1;
        overflow-y: auto;
        margin-bottom: 20px;
      }

      .formulario p {
        color: #6b7280;
        margin-bottom: 12px;
        text-align: left;
      }

      .formulario input[type="text"] {
        width: 100%;
        padding: 12px;
        border: 1px solid #d1d5db;
        border-radius: 16px;
        font-size: 16px;
        margin-bottom: 20px;
        outline: none;
      }

      .formulario button {
        align-self: flex-end;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <form class="formulario" action="#" method="POST" onsubmit="event.preventDefault(); alert('Pesquisa enviada!');">
        <div class="texto">
          
        </div>
         <input type="text" name="resposta" placeholder="Digite sua resposta aqui..." required>
         <br>
          <input type="text" name="resposta" placeholder="Digite sua resposta aqui..." required>
          <br>
           <input type="text" name="resposta" placeholder="Digite sua resposta aqui..." required>
           <br>
            <input type="text" name="resposta" placeholder="Digite sua resposta aqui..." required>
            <br>
             <input type="text" name="resposta" placeholder="Digite sua resposta aqui..." required>
             <br>
        <input type="text" name="resposta" placeholder="Digite sua resposta aqui..." required>
        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
      </form>
    </div>
  </body>
</html>