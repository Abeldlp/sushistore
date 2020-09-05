<template>
  <p>
    <strong>Total : {{getTotal().toFixed(2)}} €</strong>
  </p>
</template>

<script>
export default {
  name: "Cart",
  data() {
    return {
      order_products: [],
    };
  },
  props: ["order"],
  methods: {
    getTotal() {
      return this.order.orderitems
        .map((item) => item.product.price * item.product_qty)
        .reduce((prev, next) => prev + next);
    },
  },
};
</script>

<style scoped>
</style>