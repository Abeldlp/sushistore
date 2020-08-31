<template>
  <div class="d-flex" id="kart-menu">
    <button @click="openMenu">{{text}}</button>
    <transition name="slide-fade">
      <div v-if="out">
        <h2>Current cart</h2>
        <div v-for="product in order_products" :key="product.name">
          <div class="d-flex align-items-center justify-content-center m-1">
            <p
              class="pt-2 pr-2"
            >{{ product.name }} ( {{ product.product_qty }} ) {{ product.price * product.product_qty }}€</p>
            <button class="mb-1" @click="deleteItem(product.orderID)">x</button>
          </div>
        </div>
        <button>Pay</button>
      </div>
    </transition>
  </div>
</template>

<script>
export default {
  name: "Cart",
  data() {
    return {
      order_products: [],
      out: false,
      text: "K",
    };
  },
  mounted() {
    axios
      .get("http://127.0.0.1:8000/lastorder")
      .then((res) => (this.order_products = res.data))
      .catch((err) => console.log(err));
  },
  methods: {
    deleteItem(id) {
      axios.delete(`http://127.0.0.1:8000/delete/item/${id}`);
      window.location = "/orders";
    },
    openMenu() {
      this.out = !this.out;
      this.text == "K" ? (this.text = "X") : (this.text = "K");
    },
  },
};
</script>

<style scoped>
#kart-menu {
  position: absolute;
  right: 20px;
  top: 60px;
}

button {
  border: none;
  outline: none;
  height: 30px;
  width: 30px;
  font-size: 16px;
  font-weight: bold;
  background-color: #e45c42;
  color: white;
  border-radius: 30px;
  transition: all ease-in-out 0.2s;
}

button:hover {
  background-color: tomato;
}
.slide-fade-enter-active {
  transition: all 0.3s ease;
}
.slide-fade-leave-active {
  transition: all 0.3s ease-in-out;
}
.slide-fade-enter,
.slide-fade-leave-to {
  transform: translateX(10px);
  opacity: 0;
}
</style>