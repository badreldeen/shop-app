<template>
  <div class="bg-white">
    
    <div class="max-w-2xl mx-auto py-16 sm:py-24 sm:px-6 lg:max-w-7xl">
      <NuxtLink to="/" class=" text-gray-900 font-bold rounded inline-block p-2 flex text-xl  tracking-tight  uppercase  mb-7">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg>
                  <span>Back</span>
              </NuxtLink>
              
      <div class="flex flex-col">
           <div class="flex items-center space-x-3">
      
      <img
              :src="`../${BrawsedCompany.image}`"
              :alt="BrawsedCompany.name"
              class="w-10 h-10"
            />
        <h2 class="text-xl font-extrabold tracking-tight text-gray-900 uppercase">
        {{BrawsedCompany.name}}
      </h2> 
       
      </div>
      <p class="text-sm mt-4">{{BrawsedCompany.description}}</p>  
      </div>

      <div
        class="
          mt-6
          grid grid-cols-1
          gap-y-10 gap-x-2
          sm:grid-cols-2
          lg:grid-cols-4
          xl:gap-x-4
        "
      >
        <NuxtLink
          :to="`/products/${product.id}`"
          v-for="(product, index) in BrawsedCompany.products"
          :key="index"
          class="group relative p-4 rounded-sm shadow-sm hover:opacity-75"
        >
          <div class="w-60 h-60 rounded-md ">
            <img
              :src="`../${product.image}`"
              :alt="product.product_name"
              class="w-60 h-60"
            />
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
               
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  {{ product.product_name }}
                
              </h3>
              <p
                class="
                  mt-1
                  text-sm text-gray-100
                  bg-indigo-900
                  rounded-lg
                  p-2
                  inline-block
                "
              >
                {{  }}
              </p>
            </div>
            <p class="text-sm font-medium text-gray-900">
              ${{ product.price }}
            </p>
          </div>
        </NuxtLink>

        <!-- More products... -->
      </div>
    </div>
  </div>
</template>

<script>
export default {
    data() {
        return {
            BrawsedCompany:'',
           
        };
    },
    mounted() {
        this.GetBrawsedCompany();
        
        //this.Brand = r.name

    },
    methods: {
        async GetBrawsedCompany() {
            const res = await this.$axios.$get(`companies/${this.$route.params.id}`);
            const BrawsedCompany = await res.data[0];
            this.BrawsedCompany = BrawsedCompany
            
            //alert(BrawsedCategoy)
        },
    },
    
}
</script>