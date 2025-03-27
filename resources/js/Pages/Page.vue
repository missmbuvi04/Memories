<script setup>
import { ref } from "vue";

defineProps({
  username: String,
  families: Array
});

const username = ref("User");
const families = ref(["Family 1", "Family 2", "Family 3"]);
</script>

<template>
  <div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-r from-purple-300 to-blue-200 relative">
    
    <!-- Top Image (Appears Above) -->
     
    <img src="/images/photo 1.jpg" alt="memories"
    class="absolute top-10 left-10 max-w-[300px] shadow-lg rounded-lg transform rotate-[-10deg]">
    
    <!-- Frosted Glass Container -->
    <div class="relative bg-white bg-opacity-15 backdrop-blur-lg p-20 rounded-lg shadow-lg w-2/3 mt-10 z-10">
      <h1 class="text-2xl font-bold text-gray-900">Welcome {{ username }}!</h1>
      <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>

      <!-- Buttons -->
      <div class="mt-4 flex space-x-4">
        <button class="bg-purple-400 hover:bg-purple-500 text-white px-4 py-2 rounded transition">
          Create Family
        </button>
        <button class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded transition">
          Join a Family
        </button>
      </div>

      <!-- Family List -->
      <h2 class="mt-6 text-xl font-semibold text-gray-900">My Families</h2>
      <div class="flex space-x-2 mt-2">
        <span v-for="family in families" :key="family" class="bg-white bg-opacity-50 px-3 py-1 rounded shadow text-gray-800">
          {{ family }}
        </span>
      </div>
    </div>
  </div>
</template>
