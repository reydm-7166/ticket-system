<template>
    <div id="main-container" class="bg-gray-500 w-[100%] min-w-screen mx-auto min-h-screen">
      <Navbar>

      </Navbar>
      <section class="bg-green-400 w-[70%] mx-auto min-h-screen">
        <slot name="title"/>

        <slot name="content"/>
      </section>
    </div>
</template>
<script setup>
import Navbar from "./Navbar.vue";
</script>
