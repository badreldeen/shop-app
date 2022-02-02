<template>
  <main>
    <div class="">
     

     <Hero />

     <ProductsList :products="products"/>

      <!--Category by Section -->
      <section>
        <div class="bg-white  from-indigo-50 to-indigo-100 p-4 w-full mt-6">
          <div class="max-w-2xl mx-auto  lg:max-w-7xl ">
              <h2 class="text-2xl font-extrabold tracking-tight text-indigo-900 uppercase underline mb-4">SHOP by category</h2>

              <div v-for="(category,index) in categories" :key="index">
                  <h3 class="text-xl font-extrabold  tracking-tight text-gray-900 uppercase"><b>{{category.name}}</b></h3>
                  <p class="text-indigo-800 font-serif font-extralight text-sm">{{category.description}}</p>
                  <div class="mt-3 flex m-2 space-x-2">
                      <NuxtLink :to="`categories/${category.id}`"
                      v-for="(subCategory,index) in category.sub_categories" :key="index"
                      class="group relative  justify-center items-center p-2">
                        <div class="w-30 h-30 bg-indigo-100 rounded-lg p-4  group-hover:opacity-75 mb-2 ">
                          <img :src="subCategory.image" :alt="subCategory.name" class="text-gray-300 ">
                        </div>
                        <span class="mt-3  text-gray-600 font-serif">{{subCategory.name}}</span>
                      </NuxtLink>
                  </div>

                  <hr class="mt-3 mb-3 text-gray-900"/>
              </div>


          </div>
        </div>
    </section> 


    
    <!-- Brands Section  -->
    <section>
        <div class="bg-white from-indigo-500 to-indigo-900 p-4 w-full mt-6">
          <div class="max-w-2xl mx-auto  lg:max-w-7xl ">
           <h2 class="text-2xl font-extrabold tracking-tight text-indigo-900 uppercase underline mb-4">SHOP by brand</h2>
              <div class="mt-3 flex m-2 ">
                  <NuxtLink :to="`companies/${brand.id}`"
                  v-for="(brand,index) in brands" :key="index"
                  class="flex flex-col justify-center items-center space-x-2 m-1 bg-indigo-100 p-2 rounded-lg">
                    <div class=" text-gray-900 rounded  hover:opacity-75  ">
                      <img :src="brand.image" :alt="brand.name" class="text-gray-900 w-20 h-20">
                    </div>
                     
                  </NuxtLink>
              </div>
          </div>
        </div>
    </section> 





     

      
    </div>

     
  </main>
</template>

<script>
import Hero from "../components/Hero.vue"
import ProductsList from "../components/ProductsList.vue";
export default {
    data() {
        return {
            brands: [],
            categories: [],
            products:[]
        };
    },
    mounted() {
        this.GetBrands();
        this.GetCategories();
        this.GetProducts()
    },
    methods: {
        async GetBrands() {
            const res = await this.$axios.$get("companies");
            this.brands = await res.data;
        },
        async GetCategories() {
            const res = await this.$axios.$get("categories");
            this.categories = await res.data;
        },
        async GetProducts() {
            const res = await this.$axios.$get("products");
            this.products = await res.data;
            alert(products)
        },
    },
    components: { Hero, ProductsList }
}
</script>
