<template>
  <div class="bg-white">
    <div class="max-w-2xl mx-auto py-16 sm:py-24 sm:px-6 lg:max-w-7xl">
      <h2 class="text-xl font-extrabold tracking-tight text-gray-900 uppercase">
        Recent Added
      </h2>

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
          v-for="(product, index) in products"
          :key="index"
          class="group relative p-4 rounded-sm shadow-sm hover:opacity-75"
        >
          <div class="w-60 h-60 rounded-md ">
            <img
              :src="product.image"
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
                {{ product.company['name'] }}
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
  props: ['products'],
  data() {
    return {}
  },
}
</script>