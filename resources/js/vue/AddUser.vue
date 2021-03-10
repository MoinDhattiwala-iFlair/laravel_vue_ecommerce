<template>
  <div>
    <div class="m-subheader">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
          <h3 class="m-subheader__title m-subheader__title--separator">
            {{ isEditMode ? "Edit" : "Add" }} User
          </h3>
          <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
            <li class="m-nav__item m-nav__item--home">
              <router-link to="dashboard" class="m-nav__link m-nav__link--icon">
                <i class="m-nav__link-icon la la-home"></i>
              </router-link>
            </li>
            <li class="m-nav__separator">-</li>
            <li class="m-nav__item">
              <router-link to="/users" class="m-nav__link">
                <span class="m-nav__link-text">Users</span>
              </router-link>
            </li>
            <li class="m-nav__separator">-</li>
            <li class="m-nav__item">
              <span class="m-nav__link-text">{{ isEditMode ? "Edit" : "Add" }}</span>
            </li>
          </ul>
        </div>
        <div>
          <div m-dropdown-toggle="hover" aria-expanded="true" hover="1" timeout="39">
            <router-link
              to="/users"
              class="m-portlet__nav-link btn btn-lg btn-secondary m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill m-dropdown__toggle"
            >
              <i class="la la-close"></i>
            </router-link>
          </div>
        </div>
      </div>
    </div>
    <div class="m-content">
      <div class="row">
        <div class="col-xl-12">
          <!--begin::Portlet-->

          <div class="m-portlet m-portlet--tab">
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
                    <div
                      class="form-control-feedback"
                      v-if="!$v.user.password.requiredIf"
                    >
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
                  :class="{
                    'has-danger': this.$v.user.password_confirmation.$invalid,
                  }"
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
                      v-if="!$v.user.password_confirmation.sameAsPassword"
                    >
                      Confirm Passwords must be same as Password
                    </div>
                  </div>
                </div>
                <div
                  class="form-group m-form__group row"
                  :class="{
                    'has-danger': this.errors.photo,
                  }"
                >
                  <label for="input-user-photo" class="col-2 col-form-label">Photo</label>
                  <div class="col-7">
                    <div class="custom-file">
                      <input
                        type="file"
                        class="custom-file-input"
                        id="input-user-photo"
                        @change="user.photo = $event.target.files[0]"
                        accept="image/*"
                      />
                      <label class="custom-file-label" for="input-user-photo"
                        >Choose photo</label
                      >
                    </div>
                    <div
                      class="form-control-feedback"
                      v-for="(err, index) in errors.photo"
                      :key="index"
                    >
                      {{ err }}
                    </div>
                  </div>
                  <div class="col-3">
                    <img :src="user.avatar" />
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
                      <router-link
                        to="/users"
                        class="btn btn-secondary"
                        :disabled="isSubmitted"
                      >
                        Cancel
                      </router-link>
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
import {
  required,
  email,
  minLength,
  sameAs,
  requiredIf,
  requiredUnless,
} from "vuelidate/lib/validators";
export default {
  name: "AddUser",
  data() {
    return {
      user: {
        name: "",
        email: "",
        password: "",
        password_confirmation: "",
        photo: "",
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
        requiredIf: requiredUnless(function () {
          return this.isEditMode;
        }),
        minLength: minLength(8),
      },
      password_confirmation: {
        sameAsPassword: sameAs("password"),
      },
    },
  },
  computed: {
    isEditMode() {
      return this.$route.params.id != null;
    },
  },
  methods: {
    async save() {
      let formData = new FormData();
      Object.keys(this.user).forEach((key) => {
        if (this.user[key] != null && this.user[key] != "") {
          formData.append(key, this.user[key]);
        }
      });
      this.$v.$touch();
      if (!this.$v.$invalid) {
        this.errors = [];
        this.isSubmitted = true;
        this.$store
          .dispatch(this.isEditMode ? "users/update" : "users/store", {
            formData: formData,
            id: this.user.id ?? 0,
          })
          .then((result) => {
            this.$toasted.success(result.data.message);
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
  async created() {
    if (this.$route.params.id) {
      this.isSubmitted = true;
      let id = this.$route.params.id;
      await this.$store
        .dispatch("users/find", id)
        .then((result) => {
          console.log("c result", result);
          this.user = result.data;
          this.user.photo = "";
          this.isSubmitted = false;
        })
        .catch((err) => {
          this.$toasted.error(err.statusText);
          console.log("c err", err);
          setTimeout(() => {
            this.$router.push("/users");
          }, 1000);
        });
    }
  },
};
</script>
