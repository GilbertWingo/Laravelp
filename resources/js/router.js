import Vue from 'vue';
import Router from 'vue-router';
import Welcome from './views/Welcome.vue';

Vue.use(Router);

const routes = [
  {
  	path: '/',

    name:'welcome',

   component:Welcome


    },
    {
    	path:'/Categorie',
    	name:'Categorie',
    	component:() =>import('./views/Categorie.vue')
    },
    {
      path:'/Produit',
      name:'AjouterProduits',
      component:()=>import('./views/AjouterProduits.vue')
    },
    {
      path:'/Brands',
      name:'Brands',
      component:()=>import('./views/Brands.vue')
    }

];

const router = new Router({
  routes:routes

});

export default router;
