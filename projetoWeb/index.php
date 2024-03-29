<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Bootstrap demo</title>
  </head>
  <body class="text-bg-light p-3">
     <div class="container text-center">
        <div class="row  bg-primary">
            <div class="col ">
                <nav class="navbar navbar-expand-lg bg-primary">
                      <div class="container-fluid">
                          <a class="link-light navbar-brand" href="#">Sistema Web</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                               <li class="nav-item">
                                  <a class="link-light nav-link active" aria-current="page" href="#">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                   <a class="link-light nav-link" href="#">Consultar</a>
                                </li>
                            </ul>
                        </div>  
                      </div>
                  </nav>
              </div>
        </div>
  <div class="row bg-white">
      <div class="col">
        &nbsp;
  </div>
      </div>
    <div class="row bg-white">
      <div class="col text-start">
        <form name= "cadastro" method="post" action=" ">
       <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nome</label>
          <input type="Nome" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu nome completo">
       </div>
       <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Telefone</label>
          <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Origem</label>
        <select class="form-select" aria-label="Default select example">
             <option value="Celular">Celular</option>
             <option value="Fixo">Fixo</option>
             <option value="Whatsapp">Whatsapp</option>
             <option value="Facebook">Facebook</option>
             <option value="Instagram">Instagram</option>
             <option value="Google meu négocio">Google meu négocio</option>
        </select>
     </div>
      <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Data contato</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
       </div>
      <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
          <div class="mb-3">
          <button type="button" class="btn btn-primary">Cadastrar</button>
       </div>
</form>
      </div>
      </div>
    </div>
  </div>
  </body>
</html>