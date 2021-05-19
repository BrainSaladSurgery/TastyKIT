<template>
  <nav class="bg-gray-100 flex p-4">
      <!-- open tickets nav -->
      <section aria-labelledby="open-tickets-tabs-label" class="mr-4 focus:outline-none">
          <label id="open-tickets-tabs-label" class="font-semibold block mb-1 text-sm">Open Tickets
          <span class="font-normal text-gray-700">(current)</span>
          </label>
          <ul class="flex">
          <li>
              <button class="focus:outline-none focus:bg-yellow-200 p-2 rounded-l-md border border-r-0 bg-white flex flex-col items-center w-24">
              <p class="font-semibold text-lg">6</p>
              <p class="text-sm uppercase text-gray-600">
                  You
              </p>
              </button>
          </li>
          <li>
              <button class="focus:outline-none focus:bg-yellow-200 p-2 border rounded-r-md bg-white flex flex-col items-center w-24 cursor-pointer">
              <p class="font-semibold text-lg">23</p>
              <p class="text-sm uppercase text-gray-600">
                  Groups
              </p>
              </button>
          </li>
          </ul>
      </section>
      <!-- stats nav -->
      <section aria-labelledby="ticket-statistics-tabs-label" class="pb-2">
          <label id="ticket-statistics-tabs-label" class="font-semibold block mb-1 text-sm">Ticket Statistics
          <span class="font-normal text-gray-700">(this week)</span></label>
          <ul class="flex">
          <li>
              <button class="focus:outline-none focus:bg-yellow-200 p-2 rounded-l-md border border-r-0 bg-white flex flex-col items-center w-24">
              <p class="font-semibold text-lg">16</p>
              <p class="uppercase text-gray-600 text-sm">
                  good
              </p>
              </button>
          </li>
          <li>
              <button class="focus:outline-none focus:bg-yellow-200 p-2 border border-r-0 bg-white flex flex-col items-center w-24">
              <p class="font-semibold text-lg">2</p>
              <p class="uppercase text-gray-600 text-sm">
                  bad
              </p>
              </button>
          </li>

          <li>
              <button class="focus:outline-none focus:bg-yellow-200 p-2 border rounded-r-md bg-white flex flex-col items-center w-24">
              <p class="font-semibold text-lg">32</p>
              <p class="uppercase text-gray-600 text-sm">
                  solved
              </p>
              </button>
          </li>
          </ul>
      </section>
    </nav>
</template>

<script>
export default {
  name: "Test",
  created() {},
  data() {
    return {};
  },
  props: {},
  methods: {},
};
</script>

<style lang="scss" scoped></style>