<template>
  <div>
    <router-view></router-view>
  </div>
</template>
<script>
export default {
  name: "App",
  
  created() {
    console.log('set user start');
    this.$store.dispatch("authUser/setAuthUser");
    console.log('set user done');    
  },
};
</script>
<style scoped></style>
