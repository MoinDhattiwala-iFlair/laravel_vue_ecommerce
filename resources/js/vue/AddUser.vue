<template>
  <div>
    <div class="m-content">
      <div class="row">
        <div class="col-xl-12">
          <!--begin::Portlet-->

          <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
              <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                  <span class="m-portlet__head-icon m--hide">
                    <i class="la la-gear"></i>
                  </span>
                  <h3 class="m-portlet__head-text">Add User</h3>
                </div>
              </div>
            </div>

            <!--begin::Form-->
            <form
              class="m-form m-form--fit m-form--label-align-right"
              @submit.prevent="save"
            >
              <div class="m-portlet__body">
                <div
                  class="form-group m-form__group row"
                  :class="{
                    'has-danger': this.$v.user.name.$invalid || this.errors.name,
                  }"
                >
                  <label for="input-user-name" class="col-2 col-form-label">Name</label>
                  <div class="col-10">
                    <input
                      class="form-control m-input"
                      type="text"
                      id="input-user-name"
                      v-model.trim="user.name"
                    />
                    <div class="form-control-feedback" v-if="!$v.user.name.required">
                      Field is required
                    </div>
                    <div
                      class="form-control-feedback"
                      v-else-if="!$v.user.name.minLength"
                    >
                      Name must have at least
                      {{ $v.user.name.$params.minLength.min }}
                      letters.
                    </div>
                    <div
                      class="form-control-feedback"
                      v-for="(err, index) in errors.name"
                      :key="index"
                    >
                      {{ err }}
                    </div>
                  </div>
                </div>
                <div
                  class="form-group m-form__group row"
                  :class="{
                    'has-danger': this.$v.user.email.$invalid || this.errors.email,
                  }"
                >
                  <label for="input-user-email" class="col-2 col-form-label">Email</label>
                  <div class="col-10">
                    <input
                      class="form-control m-input"
                      type="email"
                      id="input-user-email"
                      v-model.trim="user.email"
                    />
                    <div class="form-control-feedback" v-if="!$v.user.email.required">
                      Field is required
                    </div>
                    <div class="form-control-feedback" v-else-if="!$v.user.email.email">
                      Invalid email
                    </div>
                    <div
                      class="form-control-feedback"
                      v-for="(err, index) in errors.email"
                      :key="index"
                    >
                      {{ err }}
                    </div>
                  </div>
                </div>
                <div
                  class="form-group m-form__group row"
                  :class="{
                    'has-danger': this.$v.user.password.$invalid || this.errors.password,
                  }"
                >
                  <label for="input-user-password" class="col-2 col-form-label"
                    >Password</label
                  >
                  <div class="col-10">
                    <input
                      class="form-control m-input"
                      type="password"
                      id="input-user-password"
                      v-model.trim="user.password"
                    />
                    <div class="form-control-feedback" v-if="!$v.user.password.required">
                      Field is required
                    </div>
                    <div
                      class="form-control-feedback"
                      v-else-if="!$v.user.password.minLength"
                    >
                      Password must have at least
                      {{ $v.user.password.$params.minLength.min }}
                      letters.
                    </div>
                    <div
                      class="form-control-feedback"
                      v-for="(err, index) in errors.password"
                      :key="index"
                    >
                      {{ err }}
                    </div>
                  </div>
                </div>
                <div
                  class="form-group m-form__group row"
                  :class="{ 'has-danger': this.$v.user.password_confirmation.$invalid }"
                >
                  <label
                    for="input-user-password_confirmation"
                    class="col-2 col-form-label"
                    >Confirm Password</label
                  >
                  <div class="col-10">
                    <input
                      class="form-control m-input"
                      type="password"
                      id="input-user-password_confirmation"
                      v-model.trim="user.password_confirmation"
                    />
                    <div
                      class="form-control-feedback"
                      v-if="!$v.user.password_confirmation.required"
                    >
                      Field is required
                    </div>
                    <div
                      class="form-control-feedback"
                      v-else-if="!$v.user.password_confirmation.sameAsPassword"
                    >
                      Confirm Passwords must be same as Password
                    </div>
                  </div>
                </div>
              </div>
              <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions">
                  <div class="row">
                    <div class="col-2"></div>
                    <div class="col-10">
                      <button
                        type="submit"
                        class="btn btn-success"
                        :class="isSubmitted && 'm-loader m-loader--right m-loader--light'"
                        :disabled="isSubmitted"
                      >
                        Submit
                      </button>
                      <button
                        type="reset"
                        class="btn btn-secondary"
                        :disabled="isSubmitted"
                      >
                        Cancel
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <!--end::Portlet-->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { required, email, minLength, sameAs } from "vuelidate/lib/validators";
export default {
  name: "AddUser",
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
    async save() {
      this.$v.$touch();
      if (!this.$v.$invalid) {
        this.errors = [];
        this.isSubmitted = true;
        this.$store
          .dispatch("users/store", this.user)
          .then((result) => {
            this.$toasted.success(result.data.msg);
            setTimeout(() => {
              this.$router.push("/users");
            }, 800);
          })
          .catch((err) => {
            this.isSubmitted = false;
            console.log("au err", err);
            if (err.status == 422) {
              this.errors = err.data.errors;
            } else {
              this.$toasted.error(err.data.message);
            }
          });
      }
    },
  },
};
</script>
