<template>
  
<div class="bg-white">
    
  <div class="max-w-2xl mx-auto py-16  sm:py-24 sm:px-6 lg:max-w-7xl ">
    <h2 class="text-xl font-extrabold  tracking-tight text-gray-900 uppercase">Recent Added </h2>

    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-2 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-4">
      
      
      <div
      v-for="(product,index) in products" :key="index" 
      class="group relative p-2 rounded-lg shadow-md">
        
        
        <div class="w-full min-h-80  aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
          <img :src="product.image" :alt="product.product_name" class="w-full h-full ">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{product.product_name}}
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-100 bg-indigo-900 rounded-lg p-2 inline-block ">{{product.company['name']}}</p>
          </div>
          <p class="text-sm font-medium text-gray-900">${{product.price}}</p>
        </div>
      </div>

      <!-- More products... -->
    </div>
  </div>
</div>

</template>

<script>
export default {
    props:['products'],
    data(){
        return{

        }
    }
}
</script>