<template>
  <div>
    <div class="m-subheader">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
          <h3 class="m-subheader__title m-subheader__title--separator">
            {{ isEditMode ? "Edit" : "Add" }} Post
          </h3>
          <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
            <li class="m-nav__item m-nav__item--home">
              <router-link to="/dashboard" class="m-nav__link m-nav__link--icon">
                <i class="m-nav__link-icon la la-home"></i>
              </router-link>
            </li>
            <li class="m-nav__separator">-</li>
            <li class="m-nav__item">
              <router-link to="/post" class="m-nav__link">
                <span class="m-nav__link-text">Post</span>
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
              to="/post"
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
                    'has-danger': this.$v.post.title.$invalid || this.errors.title,
                  }"
                >
                  <label for="input-post-name" class="col-2 col-form-label">
                    Title
                  </label>
                  <div class="col-10">
                    <input
                      class="form-control m-input"
                      type="text"
                      id="input-post-name"
                      v-model.trim="post.title"
                    />
                    <div class="form-control-feedback" v-if="!$v.post.title.required">
                      Field is required
                    </div>
                    <div
                      class="form-control-feedback"
                      v-else-if="!$v.post.title.minLength"
                    >
                      Title must have at least
                      {{ $v.post.title.$params.minLength.min }}
                      letters.
                    </div>
                    <div
                      class="form-control-feedback"
                      v-for="(err, index) in errors.title"
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
                      this.$v.post.description.$invalid || this.errors.description,
                  }"
                >
                  <label for="input-post-description" class="col-2 col-form-label">
                    Description
                  </label>
                  <div class="col-10">
                    <vue-editor
                      id="input-post-description"
                      v-model.trim="post.description"
                    ></vue-editor>
                    <div
                      class="form-control-feedback"
                      v-if="!$v.post.description.required"
                    >
                      Field is required
                    </div>
                    <div
                      class="form-control-feedback"
                      v-else-if="!$v.post.description.minLength"
                    >
                      Title must have at least
                      {{ $v.post.description.$params.minLength.min }}
                      letters.
                    </div>
                    <div
                      class="form-control-feedback"
                      v-for="(err, index) in errors.description"
                      :key="index"
                    >
                      {{ err }}
                    </div>
                  </div>
                </div>
                <div
                  class="form-group m-form__group row"
                  :class="{
                    'has-danger': this.errors.photo,
                  }"
                >
                  <label for="input-post-photo" class="col-2 col-form-label">Photo</label>
                  <div class="col-7">
                    <div class="custom-file">
                      <input
                        type="file"
                        class="custom-file-input"
                        id="input-post-photo"
                        @change="post.photo = $event.target.files[0]"
                        accept="image/*"
                      />
                      <label class="custom-file-label" for="input-post-photo"
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
                    <img :src="post.photo_url" class="w-100" />
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
                        to="/post"
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
import { VueEditor } from "vue2-editor";
import { required, minLength } from "vuelidate/lib/validators";
export default {
  name: "AddPost",
  components: { VueEditor },
  data() {
    return {
      post: {
        title: "",
        description: "",
        photo: "",
      },
      errors: [],
      isSubmitted: false,
    };
  },
  validations: {
    post: {
      title: {
        required,
        minLength: minLength(3),
      },
      description: {
        required,
        minLength: minLength(10),
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
        let formData = new FormData();
        Object.keys(this.post).forEach((key) => {
          if (this.post[key] != null && this.post[key] != "") {
            formData.append(key, this.post[key]);
          }
        });
        this.$store
          .dispatch(this.isEditMode ? "post/update" : "post/store", {
            formData: formData,
            slug: this.post.slug,
          })
          .then((result) => {
            this.$toasted.success(result.message);
            this.$router.push("/post");
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
        .dispatch("post/find", slug)
        .then((result) => {
          console.log("c result", result);
          this.post = result;
          this.post.photo = "";
          this.isSubmitted = false;
        })
        .catch((err) => {
          this.$toasted.error(err.statusText);
          console.log("c err", err);
          this.$router.push("/post");
        });
    }
  },
};
</script>
