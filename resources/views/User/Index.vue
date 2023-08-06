<template>
  <Head title="Ticket"/>
  <Container>
    <template v-slot:title>
      <Title>
        <template v-slot:title-name>
            My Tickets
        </template>
      </Title>
    </template>

    <template v-slot:content>
      <section id="main-content"
               class="bg-blue-400 mt-10 h-[750px]"
      >
        <div id="table" class="bg-orange-300 w-full h-[650px] p-2">
          <div class="grid grid-rows-4 grid-flow-col gap-8 p-5">
            <div class="bg-blue-400 min-h-[120px] h-fit rounded-lg p-2 flex justify-evenly items-start flex-col hover:cursor-pointer hover:bg-blue-600 hover:shadow-blue-300">
              <p class="text-xl main-font">Subject</p>
              <p class="text-xs main-font">priority</p>
              <p
                  class="text-base main-font truncate"
              >details</p>
            </div>
          </div>
        </div>
        <div id="pagination" class="w-100 bg-yellow-300 h-[50px] flex justify-center items-center">
          pagination
        </div>
      </section>
    </template>
  </Container>

</template>

<script setup>
import Container from "../Template/Container.vue";
import Title from "../Template/Title.vue";
</script>
<style scoped>

</style>