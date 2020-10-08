<?php
  include "userController.php"; 
  $res = new UserController();

  $adopciones = $res->get();
  //echo json_encode($reservas);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap</title>
</head>
<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <style>
    
        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    section {
        padding: 60px 0;
    }

    section .section-title {
        text-align: center;
        color: #007b5e;
        margin-bottom: 50px;
        text-transform: uppercase;
    }
    #footer {
        background: #0693c6 !important;
    }
    #footer h5{
      padding-left: 10px;
        border-left: 3px solid #eeeeee;
        padding-bottom: 6px;
        margin-bottom: 20px;
        color:#ffffff;
    }
    #footer a {
        color: #ffffff;
        text-decoration: none !important;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }
    #footer ul.social li{
      padding: 3px 0;
    }
    #footer ul.social li a i {
        margin-right: 5px;
      font-size:25px;
      -webkit-transition: .5s all ease;
      -moz-transition: .5s all ease;
      transition: .5s all ease;
    }
    #footer ul.social li:hover a i {
      font-size:30px;
      margin-top:-10px;
    }
    #footer ul.social li a,
    #footer ul.quick-links li a{
      color:#ffffff;
    }
    #footer ul.social li a:hover{
      color:#eeeeee;
    }
    #footer ul.quick-links li{
      padding: 3px 0;
      -webkit-transition: .5s all ease;
      -moz-transition: .5s all ease;
      transition: .5s all ease;
    }
    #footer ul.quick-links li:hover{
      padding: 3px 0;
      margin-left:5px;
      font-weight:700;
    }
    #footer ul.quick-links li a i{
      margin-right: 5px;
    }
    #footer ul.quick-links li:hover a i {
        font-weight: 700;
    }

    @media (max-width:767px){
      #footer h5 {
        padding-left: 0;
        border-left: transparent;
        padding-bottom: 0px;
        margin-bottom: 10px;
    }
    }

  </style>

<body>

  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>

<div class="jumbotron">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="row">
  <div class="card-deck">
  <div class="card">
    <img src="2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
</div>

<div class="row mt-5">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="add(this)">
            Adoptar
          </button>
  <div class="col">
    <div class="card">
  <h5 class="card-header">Perritos</h5>
  <div class="card-body">
  <?php
    if (isset($_SESSION['status']) && $_SESSION['status']=='Success'): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Correcto!</strong> <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php unset($_SESSION['status'])?>
    <?php endif?>
    <?php
    if (isset($_SESSION['status']) && $_SESSION['status']=='error'): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php unset($_SESSION['status'])?>
    <?php endif?>
    <table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Raza</th>
      <th scope="col">Nombre perrito</th>
      <th scope="col">Email</th>
      <th scope="col">Adopcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($adopciones as $adop): ?>
      <tr>
      <th scope="row"><?= $adop['nombre']?></th>
      <td><?= $adop['raza']?></td>
      <td><?= $adop['nPerrito']?></td>
      <td><?= $adop['email']?></td>
      <td><div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Opciones
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" data-info='<?= json_encode($adop)?>' href="#" data-toggle="modal" data-target="#exampleModal" onclick="edit(this)">Editar</a>
      <a class="dropdown-item" data-info='<?= json_encode($adop)?>' href="#" data-target="#exampleModal" onclick="remove(<?= $adop['id'] ?>)">Eliminar</a>
    </div>
  </div></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
  </div>
</div>
  </div>
</div>

  <div class="container">
    <div class="row mt-5">
      <div class="col-sm-4">
        <h1>Titulo</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <a href="">Leer mas</a>
      </div>
      <div class="col-sm-4">
        <h1>Titulo</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <a href="">Leer mas</a>
      </div>
      <div class="col-sm-4">
        <h1>Titulo</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <a href="">Leer mas</a>
      </div>
    </div>
  </div>
  </div>

  <section id="footer" style="margin-top:80px;">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Adopción</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="#"><i class="fa fa-angle-double-right"></i>Inicio</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>Perritos</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>Gatitos</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>Citas</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>Adopciones</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Contacto</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="#"></i>La Paz, B.C.S.</a></li>
            <li><a href="#"></i>C.P. 25000</a></li>
            <li><a href="#"></i>Mx. </a></li>
            <li><a href="#"></i>Tel: 123 4567</a></li>
            <li><a href="#"></i>Email: contacto@adopcion.com</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a>
            </li>
          </ul>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p class="h6">© Todos los derechos reservados.<a class="text-green ml-2" href="#"
              target="_blank">Adopción</a></p>
        </div>
        <hr>
      </div>
    </div>
  </section>

   <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro de adopción</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="userController.php" method="POST" onsubmit=" return validar(this)">
          <div class="container">
            <div class="form-group">
              <label for="nombre">Nombre completo</label>
              <input type="text" class="form-control" name="nombre" id="nombre"">
            </div>
            <div class="form-group">
              <label for="raza">Nombre del perrito</label>
              <input type="text" class="form-control" name="nPerrito" id="nPerrito"">
            </div>
            <div class="form-group">
              <label for="raza">Raza</label>
              <input type="text" class="form-control" name="raza" id="raza"">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
              <label for="email2">Confirma tu email</label>
              <input type="email" class="form-control" id="email2">
            </div>

          </div>
        
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" id="boton">Adoptar</button>
            <input type="hidden" id="action" name="action" value="store">
            <input type="hidden" name="id" id="id" value="">
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <script>

    function add(){
      $("#exampleModalLabel").text('Registrar adopción')
    }

    function edit(target){
      $("#exampleModalLabel").text('Editar')
      $("#action").val('update') 
      var info = $(target).data('info')
      $("#boton").text('Editar')
      $("#nombre").val(info.nombre)
      $("#nPerrito").val(info.nPerrito)
      $("#raza").val(info.raza)
      $("#email").val(info.email)
      $("#email2").val(info.email)
      $("#id").val(info.id)

      console.log(info)
    }

    function remove(id) {
      swal({
        title: "",
        text: "¿Seguro que quieres borrar los datos?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete)=> {
        if (willDelete) {
          swal("Se esta eliminando su reservación", {
            icon: "info",
          });

          $.ajax({
            url: 'userController.php',
            type: 'POST',
            dataType: 'json',
            data: {id: id, action: 'remove'},
            success: function(json) {
              if (json.status == 'success') {
                swal("Registro borrado.", {
                  icon: "success",
                });
                setTimeout(() => {
                  location.reload();
                }, 1000);
              }
            },
            error: function(xhr, status) {
              console.log(json)
            }
          });
        }
      });
    }

    function validar(target) {
      if ($('#email').val() === $('#email2').val()) {
        return true;
      }  else {
        swal("Tus datos no coinciden", "Vuelve a intentar!", "error");
        $("#email").addClass('is-invalid');
        $("#email2").addClass('is-invalid');
        return false;
      }
    }
  </script>

</body>
</html>