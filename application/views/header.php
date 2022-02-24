<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>employee</title>

 	<!-- Datatable CSS -->
   <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Datatable JS -->
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'><link rel="stylesheet" href="<?php echo base_url('assets/css/menu_style.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/validation_style.css'); ?>">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  

  
</head>
<body>
<!-- partial:index.partial.html -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Sidebar Nav</a>
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarCollapse"
    aria-controls="navbarCollapse"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a
          class="nav-link nav-link-collapse"
          href="#"
          id="hasSubItems"
          data-toggle="collapse"
          data-target="#collapseSubItems2"
          aria-controls="collapseSubItems2"
          aria-expanded="false"
        >Employees</a>
        <ul class="nav-second-level collapse" id="collapseSubItems2" data-parent="#navAccordion">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Employee/index'); ?>">
              <span class="nav-link-text">Add employee</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Employee/employee_list'); ?>">
              <span class="nav-link-text">Employee List</span>
            </a>
          </li>
        </ul>
      </li>
      
        </ul>
      </li>
     
    </ul>
   
  </div>
</nav>