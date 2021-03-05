<template>
  <div class="m-login__signin">
    <div class="m-login__head">
      <h3 class="m-login__title">Sign In To Admin</h3>
    </div>
    <form class="m-login__form m-form" @submit.prevent="login">
      <!-- <div
                v-show="showMsg.msg"
                class="m-alert m-alert--outline alert alert-dismissible animated fadeIn"
                :class="'alert-' + showMsg.type"
                role="alert"
              >
                <button
                  type="button"
                  class="close"
                  data-dismiss="alert"
                  aria-label="Close"
                  @click="showMsg = {}"
                ></button>
                <span> {{ showMsg.msg }}</span>
              </div> -->
      <div class="form-group m-form__group">
        <input
          class="form-control m-input"
          type="text"
          placeholder="Email"
          name="email"
          autocomplete="off"
          v-model="user.email"
        />
        <div class="text-danger" v-if="!$v.user.email.required">Field is required</div>
        <div class="text-danger" v-if="!$v.user.email.email">Invalid email</div>
        <ul>
          <li class="text-danger" v-for="(err, index) in errors.email" :key="index">
            {{ err }}
          </li>
        </ul>
      </div>
      <div class="form-group m-form__group">
        <input
          class="form-control m-input m-login__form-input--last"
          type="password"
          placeholder="Password"
          name="password"
          v-model="user.password"
        />
        <div class="text-danger" v-if="!$v.user.password.required">Field is required</div>
        <div class="text-danger" v-if="!$v.user.password.minLength">
          Password must have at least
          {{ $v.user.password.$params.minLength.min }}
          letters.
        </div>
        <ul>
          <li class="text-danger" v-for="(err, index) in errors.password" :key="index">
            {{ err }}
          </li>
        </ul>
      </div>
      <div class="row m-login__form-sub">
        <div class="col m--align-left m-login__form-left">
          <label class="m-checkbox m-checkbox--light">
            <input type="checkbox" name="remember" v-model="user.remember" />
            Remember me
            <span></span>
          </label>
        </div>
        <div class="col m--align-right m-login__form-right">
          <a
            href="javascript:void(0)"
            id="m_login_forget_password"
            class="m-link"
            v-show="!isSubmitted"
            >Forget Password ?</a
          >
        </div>
      </div>
      <div class="m-login__form-action">
        <button
          id="m_login_signin_submit"
          class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary"
          :class="isSubmitted && 'm-loader m-loader--right m-loader--light'"
          :disabled="isSubmitted"
        >
          Sign In
        </button>
      </div>
    </form>
  </div>
</template>
<script>
import { required, email, minLength } from "vuelidate/lib/validators";
export default {
  name: "Login",
  data() {
    return {
      user: {
        email: "",
        password: "",
        remember: true,
      },
      errors: [],
      //showMsg: {},
      isSubmitted: false,
    };
  },
  watch: {
    errors() {
      //console.log("errors", this.errors);
    },
  },
  methods: {
    async login() {
      console.log(this.user);
      this.$v.$touch();
      if (!this.$v.$invalid) {
        this.isSubmitted = true;
        await this.$store
          .dispatch("authUser/loginUser", this.user)
          .then((result) => {
            this.$toasted.success("Welcome " + result.data.user.name).goAway(1000);
            setTimeout(() => {
              this.$router.push("/dashboard");
            }, 1000);
          })
          .catch((err) => {
            this.isSubmitted = false;
            if (err.status == 422) {
              this.errors = err.data.errors;
            } else if (err.status == 401) {
              this.$toasted.error(err.data.msg).goAway();
              /* this.showMsg = {
                type: "error",
                msg: "Incorrect username or password. Please try again.",
              }; */
            }
          });
      }
    },
  },
  validations: {
    user: {
      email: {
        required,
        email,
      },
      password: {
        required,
        minLength: minLength(8),
      },
    },
  },
};
</script>
