<template>
  <div class="bg-white">
    <div class="max-w-2xl mx-auto py-16 sm:py-24 sm:px-6 lg:max-w-7xl">
    

<div class="w-full grid grid-cols-1 gap-y-8 gap-x-6 items-start sm:grid-cols-12 lg:gap-x-8">
          <div class="aspect-w-2 aspect-h-3 rounded-lg bg-gray-100 overflow-hidden sm:col-span-4 lg:col-span-5">
            <img :src="`../${BrawsedProduct.image}`" :alt="BrawsedProduct.product_name" class="object-center object-cover">
          </div>
          <div class="sm:col-span-8 lg:col-span-7">
              <NuxtLink to="/" class=" text-gray-900 font-bold rounded inline-block p-2 flex text-xl  tracking-tight  uppercase  mb-7">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg>
                  <span>Back</span>
              </NuxtLink>

            <h1 class="text-2xl font-extrabold text-gray-900 sm:pr-12">
              {{BrawsedProduct.product_name}}
            </h1>
            <p>{{BrawsedProduct.description}}</p>

            <section aria-labelledby="information-heading" class="mt-2">
              <h6 id="information-heading" class="sr-only">Product information</h6>

              <p class="text-2xl text-gray-900">
                ${{BrawsedProduct.price}}
              </p>

               <div class="w-full mt-8 flex flex-col space-y-10">
                    <h6 class="text-sm">
                       Brand : 
                       <NuxtLink :to="`/companies/${BrandID}`" class="bg-indigo-200 text-gray-900 p-2 rounded">
                           
                           {{Brand}}</NuxtLink></h6>
                           
                   <h6 class="text-sm">
                       Category : 
                       <span class="bg-indigo-200 text-gray-900 p-2 rounded">
                           {{Category}}
                       </span></h6>

                           
              </div> 
            </section>

            
          </div>
        </div>

  </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            BrawsedProduct:'',
            Category :'',
            Brand:'',
            BrandID:''
        };
    },
    mounted() {
        this.GetBrawsedProduct();
        
        //this.Brand = r.name

    },
    methods: {
        async GetBrawsedProduct() {
            const res = await this.$axios.$get(`products/${this.$route.params.productid}`);
            const BrawsedProduct = await res.data[0];
            this.BrawsedProduct = BrawsedProduct
            this.Brand = BrawsedProduct.company.name
            this.BrandID = BrawsedProduct.company.id
            this.Category = BrawsedProduct.category.name

            //alert(BrawsedCategoy)
        },
    },
    
}
</script>