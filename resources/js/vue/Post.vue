<template>
  <div>
    <div class="m-subheader">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
          <h3 class="m-subheader__title m-subheader__title--separator">Post</h3>
          <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
            <li class="m-nav__item m-nav__item--home">
              <router-link to="dashboard" class="m-nav__link m-nav__link--icon">
                <i class="m-nav__link-icon la la-home"></i>
              </router-link>
            </li>
            <li class="m-nav__separator">-</li>
            <li class="m-nav__item">
              <span class="m-nav__link">
                <span class="m-nav__link-text">Post</span>
              </span>
            </li>
          </ul>
        </div>
        <div>
          <div m-dropdown-toggle="hover" aria-expanded="true" hover="1" timeout="39">
            <router-link
              to="/post/add"
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
        <div class="col-xl-6" v-for="(post, index) in posts" :key="post.slug">
          <router-link :to="'/post/' + post.slug">
            <!--begin:: Widgets/Blog-->
            <div
              class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force"
            >
              <div class="m-portlet__head m-portlet__head--fit">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-action">
                    <button type="button" class="btn btn-sm m-btn--pill btn-brand">
                      Blog
                    </button>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                <div class="m-widget19">
                  <div
                    class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides"
                    style="min-height-: 286px"
                  >
                    <img :src="post.photo_url" alt="" class="w-100" />
                    <h3 class="m-widget19__title m--font-light">{{ post.title }}</h3>
                    <div class="m-widget19__shadow"></div>
                  </div>
                  <div class="m-widget19__content">
                    <div class="m-widget19__header">
                      <div class="m-widget19__user-img">
                        <img class="m-widget19__img" :src="post.user.avatar" alt="" />
                      </div>
                      <div class="m-widget19__info">
                        <span class="m-widget19__username"> {{ post.user.name }} </span
                        ><br />
                        <span class="m-widget19__time"> {{ post.posted_at }} </span>
                      </div>
                      <div class="m-widget19__stats">
                        <span class="m-widget19__number m--font-brand">
                          {{ post.comments.length }}
                        </span>
                        <span class="m-widget19__comment"> Comments </span>
                      </div>
                    </div>
                  </div>
                  <div class="m-widget19__action">
                    <router-link
                      :to="'/post/' + post.slug"
                      type="button"
                      class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom"
                    >
                      Read More
                    </router-link>
                    <span class="text-right" v-show="authUser.id == post.user.id">
                      <router-link
                        :to="'/post/edit/' + post.slug"
                        class="btn m-btn--pill btn-outline-warning m-btn m-btn--custom m-btn--icon m-btn--icon-only"
                      >
                        <i class="la la-pencil"></i>
                      </router-link>
                      <button
                        class="btn m-btn--pill btn-outline-danger m-btn m-btn--custom m-btn--icon m-btn--icon-only"
                        @click="deletePost(index)"
                      >
                        <i class="la la-trash"></i>
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!--end:: Widgets/Blog-->
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "Post",
  computed: {
    posts() {
      return this.$store.getters["post/all"];
    },
    authUser() {
      return this.$store.getters["authUser/authUser"];
    },
  },
  methods: {
    async deletePost(index) {
      if (!confirm("Are you sure ?")) {
        return;
      }
      let post = this.posts[index];
      await this.$store
        .dispatch("post/delete", { slug: post.slug, index: index })
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
    this.$store.dispatch("post/get");
  },
};
</script>
<style scoped></style>
