<template>
  <div>
    <auth v-if="!authUser"></auth>
    <dashboard v-else></dashboard>
  </div>
</template>
<script>
import Dashboard from "./vue/Home.vue";
import Auth from "./vue/Auth.vue";
export default {
  components: { Auth, Dashboard },
  name: "App",
  computed: {
    authUser() {
      return this.$store.getters["authUser/authUser"];
    },
  },
  created() {
    console.log("set user start");
    this.$store.dispatch("authUser/setAuthUser");
    console.log("set user done");
  },
};
</script>
<style scoped></style>
