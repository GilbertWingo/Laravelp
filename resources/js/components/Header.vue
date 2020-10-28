<template>
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">WINGO<sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
      <router-link to="/" class="nav-link">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
        </router-link>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface

      </div>
      <li class="nav-item">
      <router-link to="/Brands" class="nav-link" exact>
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Brands</span></a>
        </router-link>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->


      <!-- Nav Item - Utilities Collapse Menu -->


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->


      <!-- Nav Item - Charts -->
        <li class="nav-item">
      <router-link to="/Categorie" class="nav-link" exact>
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Categorie</span></a>
        </router-link>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
      <router-link to="/AjouterProduits" class="nav-link" exact>
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Ajouter Produits</span></a>
        </router-link>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
</template>
