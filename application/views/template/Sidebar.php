   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-primary elevation-4 bg-dark">
     <!-- Brand Logo -->
  

     <!-- Sidebar -->
     <div class="sidebar">

       <!-- Sidebar Menu -->
       <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
           <li class="nav-header"><h2>Arsip Surat<h2></li>
           <li class="nav-header"><h6>Main Menu<h6></li>
           <li class="nav-item">
             <a href="<?= base_url("menu/index")?>" class="nav-link">
               <i class="nav-icon fas fa-table"></i>
               <p>
                 <font color="white">Dashboard</font>
               </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="<?= base_url("menu/arsip")?>" class="nav-link">
               <i class="nav-icon fas fa-envelope"></i>
               <p>
                <font color="white">Arsip</font>
               </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="<?= base_url("menu/about") ?>" class="nav-link">
               <i class="nav-icon fas fa-user"></i>
               <p>
                <font color="white">About</font>
               </p>
             </a>
           </li>
         </ul>
       </nav>
       <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
   </aside>