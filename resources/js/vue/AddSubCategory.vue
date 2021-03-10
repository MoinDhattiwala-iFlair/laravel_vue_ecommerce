<template>
  <div>
    <div class="m-subheader">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
          <h3 class="m-subheader__title m-subheader__title--separator">
            {{ isEditMode ? "Edit" : "Add" }} Sub Category
          </h3>
          <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
            <li class="m-nav__item m-nav__item--home">
              <router-link to="/dashboard" class="m-nav__link m-nav__link--icon">
                <i class="m-nav__link-icon la la-home"></i>
              </router-link>
            </li>
            <li class="m-nav__separator">-</li>
            <li class="m-nav__item">
              <router-link to="/subcategory" class="m-nav__link">
                <span class="m-nav__link-text">Sub Category</span>
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
              to="/subcategory"
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
                    'has-danger': this.$v.subcategory.name.$invalid || this.errors.name,
                  }"
                >
                  <label for="input-user-name" class="col-2 col-form-label">Name</label>
                  <div class="col-10">
                    <input
                      class="form-control m-input"
                      type="text"
                      id="input-user-name"
                      v-model.trim="subcategory.name"
                    />
                    <div
                      class="form-control-feedback"
                      v-if="!$v.subcategory.name.required"
                    >
                      Field is required
                    </div>
                    <div
                      class="form-control-feedback"
                      v-else-if="!$v.subcategory.name.minLength"
                    >
                      Name must have at least
                      {{ $v.subcategory.name.$params.minLength.min }}
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
                          :checked="subcategory.status == 'Active'"
                          @change="
                            subcategory.status = $event.target.checked
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
                        to="/subcategory"
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
  name: "AddSubCategory",
  data() {
    return {
      subcategory: {
        name: "",
        status: "Active",
      },
      errors: [],
      isSubmitted: false,
    };
  },
  validations: {
    subcategory: {
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
          .dispatch(
            this.isEditMode ? "subcategory/update" : "subcategory/store",
            this.subcategory
          )
          .then((result) => {
            this.$toasted.success(result.message);
            this.$router.push("/subcategory");
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
        .dispatch("subcategory/find", slug)
        .then((result) => {
          console.log("c result", result);
          this.subcategory = result;
          this.isSubmitted = false;
        })
        .catch((err) => {
          this.$toasted.error(err.statusText);
          console.log("c err", err);
          setTimeout(() => {
            this.$router.push("/subcategory");
          }, 1000);
        });
    }
  },
};
</script>
