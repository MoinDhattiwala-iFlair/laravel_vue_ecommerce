<template>
  <div>
    <div class="m-subheader">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
          <h3 class="m-subheader__title m-subheader__title--separator">Post Detail</h3>
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
                <span class="m-nav__link-text">Detail</span>
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
          <!--begin:: Widgets/Blog-->
          <div
            class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force"
          >
            <div class="m-portlet__body">
              <div class="m-widget19">
                <div
                  class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides"
                  style="min-height-: 286px"
                >
                  <img :src="post.photo_url" alt="" class="w-100" />
                  <h3 class="m-widget19__title m--font-light">
                    {{ post.title }}
                  </h3>
                  <div class="m-widget19__shadow"></div>
                </div>
                <div class="m-widget19__content">
                  <div class="m-widget19__header" v-if="post.user">
                    <div class="m-widget19__user-img">
                      <img class="m-widget19__img" :src="post.user.avatar" alt="" />
                    </div>
                    <div class="m-widget19__info">
                      <span class="m-widget19__username"> {{ post.user.name }} </span
                      ><br />
                      <span class="m-widget19__time">
                        {{ post.user.email }}
                      </span>
                    </div>
                    <div class="m-widget19__stats">
                      <span class="m-widget19__number m--font-brand">
                        {{ post.comments.length }}
                      </span>
                      <span class="m-widget19__comment"> Comments </span>
                    </div>
                  </div>
                </div>
                <div class="m-widget19__body" v-html="post.description"></div>
              </div>
            </div>
          </div>

          <!--end:: Widgets/Blog-->
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="m-portlet m-portlet--full-height">
            <div class="m-portlet__head">
              <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                  <h3 class="m-portlet__head-text">Comments</h3>
                </div>
              </div>
            </div>
            <div class="m-portlet__body">
              <div class="m-widget3">
                <div
                  class="m-widget3__item"
                  v-for="(comment, index) in post.comments"
                  :key="comment.uuid"
                >
                  <div class="m-widget3__header">
                    <div class="m-widget3__user-img">
                      <img
                        class="m-widget3__img"
                        :src="comment.user.avatar"
                        :alt="comment.user.name"
                      />
                    </div>
                    <div class="m-widget3__info">
                      <span class="m-widget3__username"> {{ comment.user.name }} </span
                      ><br />
                      <span class="m-widget3__time">
                        {{ comment.commented_at }}
                      </span>
                    </div>
                    <span class="m-widget3__status m--font-info"> Pending </span>
                  </div>
                  <div class="m-widget3__body" v-show="newCommentIndex != index">
                    <p class="m-widget3__text" v-html="comment.comment"></p>
                  </div>
                  <div class="m-widget19__action" v-show="newCommentIndex != index">
                    <span class="text-right" v-show="authUser.id == comment.user.id">
                      <button
                        class="btn btn-sm m-btn--pill btn-outline-warning m-btn m-btn--custom m-btn--icon m-btn--icon-only"
                        @click="
                          (newCommentIndex = index),
                            (newComment = comment.comment),
                            (errors = [])
                        "
                      >
                        <i class="la la-pencil"></i>
                      </button>
                      <button
                        class="btn btn-sm m-btn--pill btn-outline-danger m-btn m-btn--custom m-btn--icon m-btn--icon-only"
                        @click="deleteComment(index)"
                      >
                        <i class="la la-trash"></i>
                      </button>
                    </span>
                  </div>

                  <div class="m-widget3__body" v-show="newCommentIndex == index">
                    <vue-editor
                      id="input-post-description"
                      v-model.trim="newComment"
                    ></vue-editor>
                    <div
                      class="form-control-feedback error"
                      v-for="(err, index) in errors.comment"
                      :key="index"
                    >
                      {{ err }}
                    </div>
                  </div>
                  <div class="m-widget3__action mt-3" v-show="newCommentIndex == index">
                    <button
                      type="button"
                      class="btn m-btn--pill btn-primary m-btn"
                      :class="isSubmitted && 'm-loader m-loader--right m-loader--light'"
                      :disabled="isSubmitted"
                      @click="saveComment"
                    >
                      Update
                    </button>
                    <button
                      type="button"
                      class="btn m-btn--pill btn-danger m-btn"
                      :disabled="isSubmitted"
                      @click="(newCommentIndex = -1), (newComment = ''), (errors = [])"
                    >
                      Cancel
                    </button>
                  </div>
                </div>
                <div class="m-widget3__item" v-show="newCommentIndex == -1">
                  <div class="m-widget3__body">
                    <vue-editor
                      id="input-post-description"
                      v-model.trim="newComment"
                    ></vue-editor>
                    <div
                      class="form-control-feedback error"
                      v-for="(err, index) in errors.comment"
                      :key="index"
                    >
                      {{ err }}
                    </div>
                  </div>
                  <div class="m-widget3__action mt-3">
                    <button
                      type="button"
                      class="btn m-btn--pill btn-primary m-btn"
                      :class="isSubmitted && 'm-loader m-loader--right m-loader--light'"
                      :disabled="isSubmitted"
                      @click="saveComment"
                    >
                      Comment
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { VueEditor } from "vue2-editor";
export default {
  name: "PostDetail",
  components: {
    VueEditor,
  },
  data() {
    return {
      post: {},
      newComment: "",
      newCommentIndex: -1,
      errors: [],
      isSubmitted: false,
    };
  },
  computed: {
    authUser() {
      return this.$store.getters["authUser/authUser"];
    },
  },
  methods: {
    async saveComment() {
      if (this.newComment.length) {
        this.errors = [];
        this.isSubmitted = true;
        let api = null;
        if (this.newCommentIndex == -1) {
          api = this.$store.dispatch("comment/store", {
            post: this.post.slug,
            comment: this.newComment,
          });
        } else {
          api = this.$store.dispatch("comment/update", {
            comment: this.newComment,
            id: this.post.comments[this.newCommentIndex].uuid,
          });
        }

        await api
          .then((result) => {
            console.log("au result", result);
            this.newComment = "";
            if (this.newCommentIndex == -1) {
              this.post.comments.push(result.comment);
            } else {
              this.post.comments[this.newCommentIndex].comment = result.comment;
              this.newCommentIndex = -1;
            }
            this.$toasted.success(result.message);
          })
          .catch((err) => {
            console.log("au err", err);
            if (err.status == 422) {
              this.errors = err.data.errors;
            }
            this.$toasted.error(err.data.message);
          })
          .finally(() => {
            this.isSubmitted = false;
          });
      } else {
        this.errors = {
          comment: ["Please enter some comment."],
        };
        console.log("this.errors", this.errors.comment);
      }
    },
    async deleteComment(index) {
      let comment = this.post.comments[index];
      await this.$store
        .dispatch("comment/delete", comment.uuid)
        .then((result) => {
          console.log("d result", result);
          this.post.comments.splice(index, 1);
          this.$toasted.success(result.message);
        })
        .catch((err) => {
          console.log("d err", err);
          this.$toasted.error(err.statusText);
        });
    },
  },
  async created() {
    if (this.$route.params.slug) {
      let slug = this.$route.params.slug;
      console.log("slug", slug);
      await this.$store
        .dispatch("post/postDetail", slug)
        .then((result) => {
          console.log("c result", result);
          this.post = result;
        })
        .catch((err) => {
          this.$toasted.error(err.statusText);
          console.log("c err", err);
          this.$router.push("/post");
        });
    } else {
      this.$toasted.error("No post found.");
      this.$router.push("/post");
    }
  },
};
</script>
