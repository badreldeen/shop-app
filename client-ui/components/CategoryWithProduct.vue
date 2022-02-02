<template>

<div class="bg-white">
    <div class="max-w-2xl mx-auto py-16  sm:py-24 sm:px-6 lg:max-w-7xl ">
          <div  v-for="(item,index) in category" :key="index">
              <div class="flex items-center justify-start space-x-1 mt-8">
                   <img class="w-8 h-8" :src="`../${item.image}`" :alt="item.name"/>
                   <h2 class="text-xl font-extrabold  tracking-tight text-indigo-900 uppercase">{{item.name}}</h2>
                  
              </div>
             
             <div class="mt-6 mb-6 grid grid-cols-1 gap-y-10 gap-x-2 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-4">
                    <NuxtLink to="/"
                        v-for="(product,index) in item.products" :key="index" 
                        class="group relative p-2 rounded-lg shadow-sm">
                            
                            
                            <div class="w-60 h-60   rounded-md  group-hover:opacity-75">
                            <img :src="`../${product.image}`" :alt="product.product_name" class="w-60 h-60 ">
                            </div>
                            <div class="mt-4 flex flex-col">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{product.product_name}}
                                </a>
                                </h3>
                                
                            </div>
                            <p class="text-sm font-medium text-gray-900">${{product.price}}</p>
                            </div>
                    </NuxtLink>

             </div>

             
        </div>
    </div>
  
    
    



</div>

</template>

<script>
export default {
    props:['category'],
    data(){
        return{

        }
    }
}
</script>