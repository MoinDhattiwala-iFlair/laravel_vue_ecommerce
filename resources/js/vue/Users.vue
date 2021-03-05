<template>
  <div>
    <div class="m-subheader">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
          <h3 class="m-subheader__title m-subheader__title--separator">Users</h3>
          <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
            <li class="m-nav__item m-nav__item--home">
              <router-link to="dashboard" class="m-nav__link m-nav__link--icon">
                <i class="m-nav__link-icon la la-home"></i>
              </router-link>
            </li>
            <li class="m-nav__separator">-</li>
            <li class="m-nav__item">
              <router-link to="users" class="m-nav__link">
                <span class="m-nav__link-text">Users</span>
              </router-link>
            </li>
          </ul>
        </div>
        <div>
          <div m-dropdown-toggle="hover" aria-expanded="true" hover="1" timeout="39">
            <router-link
              to="user/add"
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
                      <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Email</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="user in users" :key="user.id">
                        <th scope="row">{{ user.id }}</th>
                        <td>
                          <img
                            :src="user.avatar"
                            class="img-responsive"
                            alt="user.name"
                            style="width: 40%"
                          />
                        </td>
                        <td>{{ user.name }}</td>
                        <td>{{ user.email }}</td>
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
  name: "Users",
  computed: {
    users() {
      return this.$store.getters["users/all"];
    },
  },
  created() {
    this.$store.dispatch("users/getUsers");
  },
};
</script>
<style scoped>
th {
  text-align: center;
}
tbody tr td:nth-child(2) {
  text-align: center;
}
</style>
