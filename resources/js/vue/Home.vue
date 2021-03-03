<template>
  <div class="m-grid m-grid--hor m-grid--root m-page">
    <div
      class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1"
      id="m_login"
      style="background-image: url(images/bg/bg.jpg)"
    >
      <div class="m-grid__item m-grid__item--fluid m-login__wrapper">
        <div class="m-login__container">
          <div class="m-login__logo">
            <a href="#">
              <img src="images/logos/logo.png" />
            </a>
          </div>
          <!-- Login start -->
          <login></login>
          <!-- Login end -->

          <!-- Sign up start -->
          <register></register>
          <!-- Sign up end -->

          <!-- Forget Password start -->
          <forget-password></forget-password>
          <!-- Forget Password end -->

          <div class="m-login__account">
            <span class="m-login__account-msg"> Don't have an account yet ? </span
            >&nbsp;&nbsp;
            <a
              href="javascript:void(0)"
              id="m_login_signup"
              class="m-link m-link--light m-login__account-link"
              >Sign Up</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import ForgetPassword from "./ForgetPassword.vue";
import Login from "./Login.vue";
import Register from "./Register.vue";
export default {
  components: { ForgetPassword, Register, Login },
  created() {
    let authUser = this.$store.getters['authUser/authUser'];
    if (authUser != null) {
      this.$router.push('/dashboard')
    }
  },
};
</script>
<style scoped>
/* .m-login__signin {
  display: none !important;
}
.m-login__signup {
  display: block !important;
} */
</style>
