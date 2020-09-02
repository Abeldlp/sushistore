<template>
  <div class="d-flex justify-content-center">
    <button @click="newOrder">Add new Order</button>
  </div>
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
button {
  border: none;
  outline: none;
  padding: 8px;
  border-radius: 5px;
  margin: auto;
  font-weight: bold;
  background: linear-gradient(
    50deg,
    rgba(255, 171, 29, 1) 0%,
    rgba(248, 80, 28, 1) 100%
  );
  color: white;
}
</style>