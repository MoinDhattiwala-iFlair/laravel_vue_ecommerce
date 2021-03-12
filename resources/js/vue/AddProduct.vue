<template>
  <div>
    <div class="m-subheader">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
          <h3 class="m-subheader__title m-subheader__title--separator">
            {{ isEditMode ? "Edit" : "Add" }} Product
          </h3>
          <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
            <li class="m-nav__item m-nav__item--home">
              <router-link to="/dashboard" class="m-nav__link m-nav__link--icon">
                <i class="m-nav__link-icon la la-home"></i>
              </router-link>
            </li>
            <li class="m-nav__separator">-</li>
            <li class="m-nav__item">
              <router-link to="/product" class="m-nav__link">
                <span class="m-nav__link-text">Product</span>
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
              to="/product"
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
                    'has-danger': this.$v.product.name.$invalid || this.errors.name,
                  }"
                >
                  <label for="input-product-name" class="col-2 col-form-label">
                    Name
                  </label>
                  <div class="col-10">
                    <input
                      class="form-control m-input"
                      type="text"
                      id="input-user-name"
                      v-model.trim="product.name"
                    />
                    <div class="form-control-feedback" v-if="!$v.product.name.required">
                      Field is required
                    </div>
                    <div
                      class="form-control-feedback"
                      v-else-if="!$v.product.name.minLength"
                    >
                      Name must have at least
                      {{ $v.product.name.$params.minLength.min }}
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
                    'has-danger':
                      this.$v.product.category_id.$invalid || this.errors.category_id,
                  }"
                >
                  <label for="select-category_id" class="col-2 col-form-label">
                    Category
                  </label>
                  <div class="col-10">
                    <select
                      class="form-control m-input"
                      id="select-category_id"
                      v-model.number="product.category_id"
                    >
                      <option value="0">Select Category</option>
                      <option
                        v-for="category in categories"
                        :key="category.id"
                        :value="category.id"
                      >
                        {{ category.name }}
                      </option>
                    </select>
                    <div
                      class="form-control-feedback"
                      v-if="!$v.product.category_id.required"
                    >
                      Field is required
                    </div>
                    <div
                      class="form-control-feedback"
                      v-else-if="!$v.product.category_id.numeric"
                    >
                      Select valid category
                    </div>
                    <div
                      class="form-control-feedback"
                      v-else-if="!$v.product.category_id.minValue"
                    >
                      Select valid category
                    </div>
                    <div
                      class="form-control-feedback"
                      v-for="(err, index) in errors.category_id"
                      :key="index"
                    >
                      {{ err }}
                    </div>
                  </div>
                </div>
                <div
                  class="form-group m-form__group row"
                  :class="{
                    'has-danger':
                      this.$v.product.sub_category_id.$invalid ||
                      this.errors.sub_category_id,
                  }"
                >
                  <label for="select-sub_category_id" class="col-2 col-form-label">
                    Sub Category
                  </label>
                  <div class="col-10">
                    <select
                      class="form-control m-input"
                      id="select-category_id"
                      v-model.number="product.sub_category_id"
                    >
                      <option value="0">Select Sub Category</option>
                      <option
                        v-for="subcategory in subcategories"
                        :key="subcategory.id"
                        :value="subcategory.id"
                      >
                        {{ subcategory.name }}
                      </option>
                    </select>
                    <div
                      class="form-control-feedback"
                      v-if="!$v.product.sub_category_id.required"
                    >
                      Field is required
                    </div>
                    <div
                      class="form-control-feedback"
                      v-else-if="!$v.product.sub_category_id.numeric"
                    >
                      Select valid sub category
                    </div>
                    <div
                      class="form-control-feedback"
                      v-else-if="!$v.product.sub_category_id.minValue"
                    >
                      Select valid sub category
                    </div>
                    <div
                      class="form-control-feedback"
                      v-for="(err, index) in errors.sub_category_id"
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
                  <label for="input-product-status" class="col-2 col-form-label">
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
                          :checked="product.status == 'Active'"
                          @change="
                            product.status = $event.target.checked ? 'Active' : 'Inactive'
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
import { required, minLength, numeric, minValue } from "vuelidate/lib/validators";
export default {
  name: "AddProduct",
  data() {
    return {
      product: {
        name: "Product 4 Sub Category 1",
        category_id: 1,
        sub_category_id: 1,
        status: "Active",
      },
      errors: [],
      isSubmitted: false,
    };
  },
  validations: {
    product: {
      name: {
        required,
        minLength: minLength(3),
      },
      category_id: {
        required,
        numeric,
        minValue: minValue(1),
      },
      sub_category_id: {
        required,
        numeric,
        minValue: minValue(1),
      },
    },
  },
  computed: {
    isEditMode() {
      return this.$route.params.slug != null;
    },
    categories() {
      return this.$store.getters["category/all"];
    },
    subcategories() {
      return this.$store.getters["subcategory/all"];
    },
  },
  methods: {
    async save() {
      this.$v.$touch();
      if (!this.$v.$invalid) {
        this.errors = [];
        this.isSubmitted = true;
        this.$store
          .dispatch(this.isEditMode ? "product/update" : "product/store", this.product)
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
    this.$store.dispatch("category/get");
    this.$store.dispatch("subcategory/get");
    if (this.$route.params.slug) {
      this.isSubmitted = true;
      let slug = this.$route.params.slug;
      await this.$store
        .dispatch("product/find", slug)
        .then((result) => {
          console.log("c result", result);
          this.product = result;
          this.isSubmitted = false;
        })
        .catch((err) => {
          this.$toasted.error(err.statusText);
          console.log("c err", err);
          this.$router.push("/product");
        });
    }
  },
};
</script>
