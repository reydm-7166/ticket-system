<template>
  <Head title="Ticket"/>
  <Container>
    <template v-slot:title>
      <div id="title-container"
           class="p-3 w-100 rounded-lg text-center"
      >
        <p class="text-white font-bold main-font tracking-wider mt-[50px] text-4xl">My Tickets</p>
      </div>
    </template>

    <template v-slot:content>
      <section id="main-content"
               class="bg-blue-400 mt-10 h-[750px]"
      >
        <div id="table" class="bg-orange-300 w-full h-[700px] p-2">
          <table class="w-full border-separate border-spacing-y-2 border-spacing-x-0 table-auto">
            <thead class="">
              <tr>
                <th class="p-3 text-left">Subject</th>
                <th class="p-3 text-left">Status</th>
                <th class="p-3 text-left">Priority</th>
                <th class="p-3 text-left">Labels</th>
                <th class="p-3 text-center">Created At</th>
                <th class="p-3 text-">Action</th>
              </tr>
            </thead>
            <tbody class="mt-10">
              <tr class="bg-white my-3 ">
                <td class="px-4 my-2 rounded-tl-lg">Bug</td>
                <td class="px-4 my-2">Bug</td>
                <td class="px-4 my-2">Bug</td>
                <td class="px-4 my-2">Bug</td>
                <td class="px-4 my-2 text-center">Bug</td>
                <td class="flex flex-row justify-evenly items-center px-4 my-2 rounded-tr-lg">
                  <p>View</p>
                  <p>Edit</p>
                  <p>Delete</p>
                </td>
              </tr>
            </tbody>
          </table>
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

</script>
<style scoped>

</style>