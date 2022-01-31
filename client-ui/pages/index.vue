<template>
  <main>
    <div class="max-w-7xl mx-auto">
     
       


       <section>

        kkk {{brands}}
        <div class="bg-white w-full">
          <div class="max-w-2xl mx-auto py-2 px-4 sm:py-2 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl  tracking-tight text-gray-900"><b>SHOP </b>By Category</h2>

            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
              <div class="group relative flex flex-col justify-center items-center p-2">
                <div class="w-40 h-40  bg-gray-500 aspect-w-1 aspect-h-1 rounded-full overflow-hidden group-hover:opacity-75 l lg:aspect-none">
                  <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                </div>
                <span class="justify-center items-center text-2xl">Apple</span>
              </div>

              

              <!-- More products... -->
            </div>
          </div>
        </div>
    </section> 





       <section>
        <div class="bg-blue-50 w-full">
          <div class="max-w-2xl mx-auto py-2 px-4 sm:py-2 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl  tracking-tight text-gray-900"><b>SHOP </b>By Company / Brand</h2>

            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
              <div class="group relative">
                <div class="w-40 h-40 bg-gray-500 aspect-w-1 aspect-h-1 rounded overflow-hidden group-hover:opacity-75 l lg:aspect-none">
                  <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                </div>
                cvxvf
              </div>

              <!-- More products... -->
            </div>
          </div>
        </div>
    </section> 


      
    </div>

     
  </main>
</template>

<script>
export default {
 data(){
   return{
      brands:[]
   }
 },
 mounted(){
   this.GetBrands()
 },
 methods: {
  async GetBrands() {
    const res = await this.$axios.$get('companies')
    this.brands = await res.data

    //alert(res.data.data)
  }
}
}
</script>
