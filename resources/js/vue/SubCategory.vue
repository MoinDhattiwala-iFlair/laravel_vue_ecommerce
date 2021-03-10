<template>
  <div>
    <div class="m-subheader">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
          <h3 class="m-subheader__title m-subheader__title--separator">Sub Category</h3>
          <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
            <li class="m-nav__item m-nav__item--home">
              <router-link to="dashboard" class="m-nav__link m-nav__link--icon">
                <i class="m-nav__link-icon la la-home"></i>
              </router-link>
            </li>
            <li class="m-nav__separator">-</li>
            <li class="m-nav__item">
              <span class="m-nav__link">
                <span class="m-nav__link-text">Sub Category</span>
              </span>
            </li>
          </ul>
        </div>
        <div>
          <div m-dropdown-toggle="hover" aria-expanded="true" hover="1" timeout="39">
            <router-link
              to="/subcategory/add"
              class="m-portlet__nav-link btn btn-lg btn-secondary m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill m-dropdown__toggle"
            >
              <i class="la la-plus"></i>
            </router-link>
          </div>
        </div>
      </div>
    </div>
    <div class="m-content">
      <div class="row">
        <div class="col-xl-12">
          <!--begin::Portlet-->

          <div class="m-portlet">
            <div class="m-portlet__body">
              <!--begin::Section-->
              <div class="m-section">
                <div class="m-section__content">
                  <table class="table table-bordered m-table m-table--border-success">
                    <thead>
                      <tr class="text-center">
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr
                        v-for="(subcategory, index) in subcategories"
                        :key="subcategory.slug"
                      >
                        <th class="text-center" scope="row">{{ index + 1 }}</th>
                        <td>{{ subcategory.name }}</td>
                        <td>{{ subcategory.slug }}</td>
                        <td>{{ subcategory.category_name }}</td>
                        <td class="text-center">
                          <span
                            class="m-badge m-badge--wide"
                            :class="
                              'm-badge--' +
                              (subcategory.status == 'Active' ? 'success' : 'danger')
                            "
                          >
                            {{ subcategory.status }}
                          </span>
                        </td>
                        <td class="text-center">
                          <router-link
                            :to="'/category/' + subcategory.slug"
                            class="btn m-btn--pill btn-outline-warning m-btn m-btn--custom m-btn--icon m-btn--icon-only"
                            ><i class="la la-pencil"></i
                          ></router-link>
                        </td>
                        <td class="text-center">
                          <button
                            class="btn m-btn--pill btn-outline-danger m-btn m-btn--custom m-btn--icon m-btn--icon-only"
                            @click="deleteSubCat(index)"
                          >
                            <i class="la la-trash"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--end::Section-->
            </div>
          </div>

          <!--end::Portlet-->
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "SubCategory",
  computed: {
    subcategories() {
      return this.$store.getters["subcategory/all"];
    },
  },
  methods: {
    async deleteSubCat(index) {
      if (!confirm("Are you sure ?")) {
        return;
      }
      let subcategory = this.subcategories[index];
      await this.$store
        .dispatch("subcategory/delete", { slug: subcategory.slug, index: index })
        .then((result) => {
          console.log("d result", result);
          this.$toasted.success(result.message);
        })
        .catch((err) => {
          console.log("d err", err);
        });
    },
  },
  created() {
    this.$store.dispatch("subcategory/get");
  },
};
</script>
<style scoped></style>
