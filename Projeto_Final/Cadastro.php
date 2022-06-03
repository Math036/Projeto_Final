<!DOCTYPE html>

<head>
  <title>PetCare Services- Cadastro</title>



  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap"
    rel="stylesheet"
  />
</head>

<body>
  <div class="mainBox">
    <h1>Cadastro de Usuário</h1>
    <div class="name">
      <input
        type="text"
        name="userName"
        id="userName"
        placeholder="Nome Completo"
        required
        maxlength="45"
      />
    </div>
    <div class="phone">
      <input
        type="text"
        name="phone"
        id="phone"
        placeholder="Telefone"
        required
        pattern="\d{2}\\-\d{2}\-\d{9}"
      />
    </div>
    <div class="adress">
      <input type="text" name="adress" id="adress" placeholder="Endereço" />
    </div>
    <div class="email">
      <input
        type="email"
        name="email"
        id="email"
        placeholder="Endereço de Email"
      />
    </div>
    <div class="CPF">
      <input
        type="text"
        name="cpf"
        id="cpf"
        placeholder="CPF"
        required
        pattern="\d{3}\.\d{3}\.\d3{3}\-\d{2}"
      />
    </div>
    <div class="confirm" id="confirm">
      <button class="cadastrar" type="submit">cadastrar</button>
    </div>
  </div>
 
</body>
