<template>
    <section>
      
        <div class="bg-white   p-4 w-full mt-6">
          <div class="max-w-2xl mx-auto  lg:max-w-7xl ">
              <NuxtLink to="/" class="bg-indigo-900 text-gray-100 rounded inline-block p-2 flex text-xl  tracking-tight  uppercase  mb-4">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg>
                  <span>Back</span>
              </NuxtLink>

               <CategoryWithProduct :category="BrawsedCategoy"/>


          </div>
        </div>
    </section> 
</template>

<script>
import CategoryWithProduct from "../../components/CategoryWithProduct.vue";
export default {
    data() {
        return {
            BrawsedCategoy: []
        };
    },
    mounted() {
        this.GetBrawsedCategoy();
    },
    methods: {
        async GetBrawsedCategoy() {
            const res = await this.$axios.$get(`categories/${this.$route.params.id}`);
            this.BrawsedCategoy = await res.data;
            //alert(BrawsedCategoy)
        },
    },
    components: { CategoryWithProduct }
}
</script>