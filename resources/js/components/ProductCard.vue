<template>
  <div class="product">
    <h3 class="text-center">{{ product.name }}</h3>
    <div class="w-50 m-auto">
      <img :src="/storage/+product.image" class="w-100" />
    </div>
    <div class="container">
      <div class="row d-flex justify-content-around">
        <button id="qtybtn" @click="decrement">-</button>
        <button id="qtybtn" @click="increment">+</button>
      </div>
    </div>
    <p class="text-center">
      <strong>{{ this.quantity }}</strong>
    </p>
    <p class="text-center">Price: {{ parseFloat(product.price * this.quantity).toFixed(2) }}€</p>
    <button class="col-4 m-auto" @click="addItem" id="send-button">Add</button>
  </div>
</template>

<script>
export default {
  name: "ProductCard",
  props: ["product"],
  data() {
    return {
      quantity: 0,
    };
  },
  methods: {
    increment() {
      this.quantity = this.quantity + 1;
    },
    decrement() {
      if (this.quantity > 0) {
        this.quantity = this.quantity - 1;
      }
    },
    addItem() {
      const Item = {
        product_id: this.product.id,
        product_qty: this.quantity,
      };

      axios.post("http://127.0.0.1:8000/oderitem", Item);

      this.quantity = 0;
      window.location = "/orders";
    },
  },
};
</script>

<style scoped>
.product {
  border: 1px solid #e45d4265;
  width: 300px;
  display: flex;
  flex-direction: column;
  margin: 5px;
}

#qtybtn {
  border: none;
  outline: none;
  height: 40px;
  width: 40px;
  font-size: 20px;
  font-weight: bold;
  background-color: #e45c42;
  color: white;
  border-radius: 30px;
  transition: all ease-in-out 0.2s;
}

#send-button {
  border: none;
  outline: none;
  font-size: 20px;
  font-weight: bold;
  background-color: #e45c42;
  color: white;
  transition: all ease-in-out 0.2s;
}

#send-button:hover,
#qtybtn:hover {
  background-color: #d33b1d;
}
</style>