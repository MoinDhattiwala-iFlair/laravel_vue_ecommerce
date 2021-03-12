<template>
  <div class="">
    <div class="m-grid m-grid--hor m-grid--root m-page">
      <!-- BEGIN: Header -->

      <app-header></app-header>

      <!-- END: Header -->

      <!-- begin::Body -->
      <div
        class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"
      >
        <!-- BEGIN: Left Aside -->
        <button
          class="m-aside-left-close m-aside-left-close--skin-dark"
          id="m_aside_left_close_btn"
        >
          <i class="la la-close"></i>
        </button>
        <div id="m_aside_left" class="m-grid__item m-aside-left m-aside-left--skin-dark">
          <!-- BEGIN: Aside Menu -->
          <div
            id="m_ver_menu"
            class="m-aside-menu m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark m-scroller ps ps--active-y"
            m-menu-vertical="1"
            m-menu-scrollable="1"
            m-menu-dropdown-timeout="500"
            style="position: relative; height: 189px; overflow: hidden"
          >
            <ul class="m-menu__nav m-menu__nav--dropdown-submenu-arrow">
              <li class="m-menu__item m-menu__item--active" aria-haspopup="true">
                <router-link to="/dashboard" class="m-menu__link">
                  <i class="m-menu__link-icon flaticon-line-graph"></i>
                  <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                      <span class="m-menu__link-text">Dashboard</span>
                    </span>
                  </span>
                </router-link>
              </li>
              <li class="m-menu__item" aria-haspopup="true">
                <router-link to="/users" class="m-menu__link">
                  <i class="m-menu__link-icon flaticon-users"></i>
                  <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                      <span class="m-menu__link-text">Users</span>
                    </span>
                  </span>
                </router-link>
              </li>
              <li class="m-menu__item" aria-haspopup="true">
                <router-link to="/category" class="m-menu__link">
                  <i class="m-menu__link-icon flaticon-list"></i>
                  <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                      <span class="m-menu__link-text">Category</span>
                    </span>
                  </span>
                </router-link>
              </li>
              <li class="m-menu__item" aria-haspopup="true">
                <router-link to="/subcategory" class="m-menu__link">
                  <i class="m-menu__link-icon flaticon-list"></i>
                  <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                      <span class="m-menu__link-text">Sub Category</span>
                    </span>
                  </span>
                </router-link>
              </li>
              <li class="m-menu__item" aria-haspopup="true">
                <router-link to="/product" class="m-menu__link">
                  <i class="m-menu__link-icon flaticon-list"></i>
                  <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                      <span class="m-menu__link-text">Product</span>
                    </span>
                  </span>
                </router-link>
              </li>
            </ul>

            <div class="ps__rail-x" style="left: 0px; bottom: 0px">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 189px; right: 4px">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px"></div>
            </div>
          </div>

          <!-- END: Aside Menu -->
        </div>

        <!-- END: Left Aside -->

        <div class="m-grid__item m-grid__item--fluid m-wrapper">
          <router-view></router-view>
        </div>
      </div>
      <!-- end:: Body -->

      <!-- begin::Footer -->

      <app-footer></app-footer>

      <!-- end::Footer -->
    </div>
  </div>
</template>

<script>
import AppFooter from "./AppFooter.vue";
import AppHeader from "./AppHeader.vue";
export default {
  components: { AppHeader, AppFooter },
  computed: {
    authUser() {
      let authUser = this.$store.getters["authUser/authUser"];
      return authUser;
    },
  },
  created() {
    if (this.authUser == null) {
      this.$router.push("/");
    }
  },
  methods: {},
  mounted() {
    const plugin = document.createElement("script");
    plugin.setAttribute("src", "js/dashboard.js");
    plugin.async = true;
    document.head.appendChild(plugin);
  },
};
</script>
