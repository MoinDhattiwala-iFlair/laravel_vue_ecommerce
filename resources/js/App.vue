<template>
  <div>
    <auth v-if="!authUser"></auth>
    <page-not-found v-else-if="this.$route.name == null"></page-not-found>
    <dashboard v-else></dashboard>
  </div>
</template>
<script>
import Dashboard from "./vue/Home.vue";
import Auth from "./vue/Auth.vue";
import PageNotFound from "./vue/PageNotFound.vue";
export default {
  components: { Auth, Dashboard, PageNotFound },
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
    //  console.log("this.$route.name", this.$route.name == null);
  },
};
</script>
<style scoped></style>
