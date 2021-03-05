<template>
  <div class="m-login__signup">
    <div class="m-login__head">
      <h3 class="m-login__title">Sign Up</h3>
      <div class="m-login__desc">Enter your details to create your account:</div>
    </div>
    <form class="m-login__form m-form" @submit.prevent="register">
      <div class="form-group m-form__group">
        <input
          class="form-control m-input"
          type="text"
          placeholder="Fullname"
          name="fullname"
          v-model.trim="user.name"
        />
        <div class="text-danger" v-if="!$v.user.name.required">Field is required</div>
        <div class="text-danger" v-else-if="!$v.user.name.minLength">
          Name must have at least
          {{ $v.user.name.$params.minLength.min }}
          letters.
        </div>
        <div class="text-danger" v-for="(err, index) in errors.name" :key="index">
          {{ err }}
        </div>
      </div>
      <div class="form-group m-form__group">
        <input
          class="form-control m-input"
          type="text"
          placeholder="Email"
          name="email"
          autocomplete="off"
          v-model.trim="user.email"
        />
        <div class="text-danger" v-if="!$v.user.email.required">Field is required</div>
        <div class="text-danger" v-else-if="!$v.user.email.email">Invalid email</div>
        <div class="text-danger" v-for="(err, index) in errors.email" :key="index">
          {{ err }}
        </div>
      </div>
      <div class="form-group m-form__group">
        <input
          class="form-control m-input"
          type="password"
          placeholder="Password"
          name="password"
          v-model.trim="user.password"
        />
        <div class="text-danger" v-if="!$v.user.password.required">Field is required</div>
        <div class="text-danger" v-else-if="!$v.user.password.minLength">
          Password must have at least
          {{ $v.user.password.$params.minLength.min }}
          letters.
        </div>
        <div class="text-danger" v-for="(err, index) in errors.password" :key="index">
          {{ err }}
        </div>
      </div>
      <div class="form-group m-form__group">
        <input
          class="form-control m-input m-login__form-input--last"
          type="password"
          placeholder="Confirm Password"
          name="rpassword"
          v-model.trim="user.password_confirmation"
        />
        <div class="text-danger" v-if="!$v.user.password_confirmation.required">
          Field is required
        </div>
        <div
          class="text-danger"
          v-else-if="!$v.user.password_confirmation.sameAsPassword"
        >
          Confirm Passwords must be same as Password
        </div>
      </div>
      <div class="row form-group m-form__group m-login__form-sub">
        <div class="col m--align-left">
          <label class="m-checkbox m-checkbox--light">
            <input type="checkbox" name="agree" />I Agree the
            <a href="#" class="m-link m-link--focus">terms and conditions</a>.
            <span></span>
          </label>
          <span class="m-form__help"></span>
        </div>
      </div>
      <div class="m-login__form-action">
        <button
          id="m_login_signup_submit"
          class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary"
          :class="isSubmitted && 'm-loader m-loader--right m-loader--light'"
          :disabled="isSubmitted"
        >
          Sign Up</button
        >&nbsp;&nbsp;
        <button
          id="m_login_signup_cancel"
          class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn"
        >
          Cancel
        </button>
      </div>
    </form>
  </div>
</template>
<script>
import { required, email, minLength, sameAs } from "vuelidate/lib/validators";
export default {
  name: "Register",
  data() {
    return {
      user: {
        name: "",
        email: "",
        password: "",
        password_confirmation: "",
      },
      errors: [],
      isSubmitted: false,
    };
  },
  validations: {
    user: {
      name: {
        required,
        minLength: minLength(3),
      },
      email: {
        required,
        email,
      },
      password: {
        required,
        minLength: minLength(8),
      },
      password_confirmation: {
        required,
        sameAsPassword: sameAs("password"),
      },
    },
  },
  methods: {
    async register() {
      console.log(this.user);
      this.$v.$touch();
      if (!this.$v.$invalid) {
        this.isSubmitted = true;
        await this.$store
          .dispatch("authUser/registerUser", this.user)
          .then((result) => {
            this.$toasted.success("Welcome " + result.data.user.name).goAway(1000);
            setTimeout(() => {
              this.$router.push("/dashboard");
            }, 1000);
          })
          .catch((err) => {
            this.isSubmitted = false;
            console.log("r err", err);
            if (err.status == 422) {
              this.errors = err.data.errors;
            } else if (err.status == 500) {
              this.$toasted.error(err.data.msg).goAway();
            }
          });
      }
    },
  },
};
</script>
