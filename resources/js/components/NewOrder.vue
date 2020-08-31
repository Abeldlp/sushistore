<template>
  <button @click="newOrder">Add new Order</button>
</template>

<script>
export default {
  name: "NewOrder",
  methods: {
    newOrder() {
      axios.post("http://127.0.0.1:8000/addorder");
      window.location = "/orders";
    },
  },
};
</script>

<style scoped>
</style>