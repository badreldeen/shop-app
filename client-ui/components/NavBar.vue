<template>
   

  <nav class="bg-indigo-900">
      <div class="w-full  bg-gray-100 border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
                <div class="flex items-center justify-between h-24">
            
                <NuxtLink to="/" class="flex mr-3">
                    <img class="h-12 w-12 " src="logo.png" alt="Shop-app">
                    <span class="font-sans text-extralight text-2xl mt-2 text-indigo-700 uppercase"><b class="text-indigo-900">shop</b>now</span>
                
                </NuxtLink>
                
                <div class="flex-1 grow-1">
                    <input type="text"  class="py-3 bg-gray-200 text-gray-900 px-2 rounded" placeholder="Type your search .."/>
                </div>

                
                    <div class="ml-10 flex justify-between space-x-1 flex">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <NuxtLink to="/login" class="text-white   bg-gray-500 px-3 py-3 rounded ">Sign in</NuxtLink>
                    <a href="#" class="bg-indigo-900  text-white px-3 py-3 rounded" aria-current="page">Create account</a>

                    <div class="mr-3 mt-4relative" v-if="islogin"> 
                        <div class="border border-gray-900">
                            <button type="button" class="max-w-xs bg-gray-800 rounded flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-12 w-12 rounded" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </button>
                        </div>

              
                        <div v-if="IsOpen" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                        </div>
                    </div>
                           

                    </div>
                
                
                </div>
                
            </div>
     </div>


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
          
          <div class="hidden md:block">
            <div class="flex items-baseline space-x-4">
               
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              
              <NuxtLink :to="`/categories/${item.id}`"
               v-for="(item,index) in menu" :key="index"
               class="text-gray-100 hover:bg-gray-700 hover:text-white px-3 py-2 rounded">{{item.name}}
              </NuxtLink>
              
            </div>
          </div>
        </div>
       
      
      </div>
    </div>

   
  </nav>

  


</template>


<script>

export default {
    data(){
        return{
            IsOpen:false,
            menu:[],
            islogin:false
        }
    },
    
    mounted() {
        
        this.GetCategories();
        this.islogin =  localStorage.getItem('islogin');
    },
    methods:{
        async GetCategories() {
            const res = await this.$axios.$get("categories");
            this.menu = await res.data;
        },
        logout(){
             localStorage.clear()
             this.$router.push('/')
        }
    }
}
</script>