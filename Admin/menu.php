<?php include("../connection.php");
?><style>
.bod{
  background-color:lightgrey;
}

 
  </style>
  <body class="bod">
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse">
          
        <i class="bi bi-menu-button-wide"></i></i><span>Car info</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>



        
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            
            <a href="product.php">
              <i class="bi bi-star"></i><span>Add Spec</span>
            </a>
          </li>

          <li>
            
            <a href="carabout.php">
              <i class="bi bi-star"></i><span>Description</span>
            </a>
          </li>
        </ul>
      </li> 

     
      
      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse">
          
        <i class="bi bi-person"></i></i><span>User Details</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>



        
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="registered.php">
              <i class="bi bi-star"></i><span>User registered</span>
            </a>
          </li>
          <li>
             <a href="contact.php">
              <i class="bi bi-star"></i><span>Feedback</span>
            </a>
          </li>


          

          </ul>
      </li> 
     
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse">
          
        <i class="bi bi-car-front-fill"></i></i><span>Book Section</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>



        
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            
            <a href="booked.php">
              <i class="bi bi-star"></i><span>Booked</span>
            </a>
          </li>

          <li>
            
            <a href="testdrived.php">
              <i class="bi bi-star"></i><span>Test Drived</span>
            </a>
          </li>
        </ul>
      </li> 

  </aside><!-- End Sidebar-->

</body>