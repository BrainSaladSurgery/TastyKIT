<template>
  <header class="bg-white border-t flex items-center py-1 px-4">
      <div class="flex">
          <h2 id="content-caption" class="font-semibold">
          Tickets requiring your attention (6)
          </h2>
          <span class="ml-3 group relative">
          <button role="details" aria-controls="info-popup" class="text-blue-700 border-b border-dotted border-blue-700 focus:outline-none text-sm">
              What is this?
          </button>
          <div role="tooltip" id="info-popup" class="absolute pt-1 rounded-md rounded-t-lg right-0 transform translate-x-40 mx-auto hidden group-hover:block z-50">
              <div class="border rounded-md rounded-t-lg shadow-lg bg-white w-full max-w-xs w-screen">
              <header class="font-semibold rounded-t-lg bg-gray-300 px-4 py-2">
                  People are waiting for replies!
              </header>
              <div class="p-4 border-t">
                  <p class="mb-4">
                  These are new or open tickets that are assigned to
                  you, unassinged in your group(s) or not assigned to
                  any group.
                  </p>
                  <p class="mb-1">
                  They are ordered by priority and requester update date
                  (oldest first).
                  </p>
              </div>
              </div>
          </div>
          </span>
      </div>
      <div class="ml-auto">
          <button title="See available tickets in this view" aria-label="play" class="border rounded-md px-3 py-2 leading-none">
          Play
          </button>
      </div>
    </header>
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