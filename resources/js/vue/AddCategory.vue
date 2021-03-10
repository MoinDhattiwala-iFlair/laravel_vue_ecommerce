<template>
  <div>
    <div class="m-subheader">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
          <h3 class="m-subheader__title m-subheader__title--separator">
            {{ isEditMode ? "Edit" : "Add" }} Category
          </h3>
          <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
            <li class="m-nav__item m-nav__item--home">
              <router-link to="/dashboard" class="m-nav__link m-nav__link--icon">
                <i class="m-nav__link-icon la la-home"></i>
              </router-link>
            </li>
            <li class="m-nav__separator">-</li>
            <li class="m-nav__item">
              <router-link to="/category" class="m-nav__link">
                <span class="m-nav__link-text">Category</span>
              </router-link>
            </li>
            <li class="m-nav__separator">-</li>
            <li class="m-nav__item">
              <span class="m-nav__link">
                <span class="m-nav__link-text">{{ isEditMode ? "Edit" : "Add" }}</span>
              </span>
            </li>
          </ul>
        </div>
        <div>
          <div m-dropdown-toggle="hover" aria-expanded="true" hover="1" timeout="39">
            <router-link
              to="/category"
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
                    'has-danger': this.$v.category.name.$invalid || this.errors.name,
                  }"
                >
                  <label for="input-user-name" class="col-2 col-form-label">Name</label>
                  <div class="col-10">
                    <input
                      class="form-control m-input"
                      type="text"
                      id="input-user-name"
                      v-model.trim="category.name"
                    />
                    <div class="form-control-feedback" v-if="!$v.category.name.required">
                      Field is required
                    </div>
                    <div
                      class="form-control-feedback"
                      v-else-if="!$v.category.name.minLength"
                    >
                      Name must have at least
                      {{ $v.category.name.$params.minLength.min }}
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
                    'has-danger': this.errors.status,
                  }"
                >
                  <label for="input-status-name" class="col-2 col-form-label">
                    Status
                  </label>
                  <div class="col-10">
                    <span
                      class="m-switch m-switch--outline m-switch--icon m-switch--success"
                    >
                      <label>
                        <input
                          type="checkbox"
                          name=""
                          :checked="category.status == 'Active'"
                          @change="
                            category.status = $event.target.checked
                              ? 'Active'
                              : 'Inactive'
                          "
                        />
                        <span></span>
                      </label>
                    </span>
                    <div
                      class="form-control-feedback"
                      v-for="(err, index) in errors.status"
                      :key="index"
                    >
                      {{ err }}
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
import { required, minLength } from "vuelidate/lib/validators";
export default {
  name: "AddCategory",
  data() {
    return {
      category: {
        name: "",
        status: "Active",
      },
      errors: [],
      isSubmitted: false,
    };
  },
  validations: {
    category: {
      name: {
        required,
        minLength: minLength(3),
      },
    },
  },
  computed: {
    isEditMode() {
      return this.$route.params.slug != null;
    },
  },
  methods: {
    async save() {
      this.$v.$touch();
      if (!this.$v.$invalid) {
        this.errors = [];
        this.isSubmitted = true;
        this.$store
          .dispatch(this.isEditMode ? "category/update" : "category/store", this.category)
          .then((result) => {
            this.$toasted.success(result.message);
            this.$router.push("/category");
          })
          .catch((err) => {
            this.isSubmitted = false;
            console.log("au err", err);
            if (err.status == 422) {
              this.errors = err.data.errors;
            }
            this.$toasted.error(err.data.message);
          });
      }
    },
  },
  async created() {
    if (this.$route.params.slug) {
      this.isSubmitted = true;
      let slug = this.$route.params.slug;
      await this.$store
        .dispatch("category/find", slug)
        .then((result) => {
          console.log("c result", result);
          this.category = result;
          this.isSubmitted = false;
        })
        .catch((err) => {
          this.$toasted.error(err.statusText);
          console.log("c err", err);
          setTimeout(() => {
            this.$router.push("/category");
          }, 1000);
        });
    }
  },
};
</script>
