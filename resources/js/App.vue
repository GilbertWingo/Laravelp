<template>
 <main>
 <div id="wrapper">

    <!-- Sidebar -->
   <Header />
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->

     <Main />

     <router-view> </router-view>
      <!-- End of Main Content -->

      <!-- Footer -->
     <Footer />
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>

      <FlashMessage position="right top"></FlashMessage>
  </main>
 </template>

 <script>
 import Header from './components/Header.vue';
 import Main from './components/Main.vue';
 import Footer from './components/Footer.vue';

    export default{

     components :{
             Header,
             Main,
             Footer

     }

    }
 </script>
