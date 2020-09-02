<template>
  <div class="card mb-3">
    <div class="card-header bg-light">
      <div class="media align-items-center">
        <div class="avatar avatar-m">
          <img class="rounded-circle" src="assets/img/team/1.jpg" alt />
        </div>
        <div class="media-body ml-2">
          <h5 class="mb-0 fs-0">Create post</h5>
        </div>
      </div>
    </div>
    <div class="card-body p-0">
      <form action @submit="createPost(post)">
        <textarea
          v-model="post.message"
          class="form-control border-0 rounded-0 resize-none"
          placeholder="What do you want to talk about?"
          name="message"
          rows="4"
        ></textarea>
        <div class="d-flex align-items-center border-y px-3 mt-1" data-children-count="1">
          <label class="text-nowrap mb-0 mr-2" for="hash-tags">
            <svg
              class="svg-inline--fa fa-plus fa-w-14 mr-1 fs--2"
              aria-hidden="true"
              focusable="false"
              data-prefix="fas"
              data-icon="plus"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 448 512"
              data-fa-i2svg
              data-children-count="0"
            >
              <path
                fill="currentColor"
                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"
              />
            </svg>
            <!-- <span class="fas fa-plus mr-1 fs--2"></span> -->
            <span class="font-weight-regular" data-children-count="0">Add hashtag</span>
          </label>
          <input
            class="form-control border-0 fs--1"
            id="hash-tags"
            type="text"
            placeholder="Help the right person to see"
          />
        </div>
        <div class="row no-gutters justify-content-between mt-3 px-3 pb-3">
          <div class="col">
            <input
              class="btn btn-light btn-sm bg-light rounded-capsule shadow-none d-inline-flex align-items-center fs--1 ml-1 mb-0"
              type="file"
              ref="file"
              name="image"
            />
            <button
              class="btn btn-light btn-sm bg-light rounded-capsule shadow-none d-inline-flex align-items-center fs--1 ml-1 mb-0"
              type="file"
              onclick="$refs.file.click()"
            >
              <img class="cursor-pointer" src="assets/img/illustrations/image.svg" width="17" alt />
              <span class="ml-2 d-none d-md-inline-block">Image</span>
            </button>

            <button
              class="btn btn-light btn-sm bg-light rounded-capsule shadow-none d-inline-flex align-items-center fs--1 ml-1"
              type="button"
            >
              <img
                class="cursor-pointer"
                src="assets/img/illustrations/calendar.svg"
                width="17"
                alt
              />
              <span class="ml-2 d-none d-md-inline-block">Event</span>
            </button>
            <button
              class="btn btn-light btn-sm bg-light rounded-capsule shadow-none d-inline-flex align-items-center fs--1 ml-1"
              type="button"
            >
              <img
                class="cursor-pointer"
                src="assets/img/illustrations/location.svg"
                width="17"
                alt
              />
              <span class="ml-2 d-none d-md-inline-block text-nowrap">Check in</span>
            </button>
          </div>
          <div class="col-auto">
            <div class="dropdown d-inline-block mr-1">
              <button
                class="btn btn-sm dropdown-toggle px-1"
                id="dropdownMenuButton"
                type="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <svg
                  class="svg-inline--fa fa-globe-americas fa-w-16"
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fas"
                  data-icon="globe-americas"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 496 512"
                  data-fa-i2svg
                >
                  <path
                    fill="currentColor"
                    d="M248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm82.29 357.6c-3.9 3.88-7.99 7.95-11.31 11.28-2.99 3-5.1 6.7-6.17 10.71-1.51 5.66-2.73 11.38-4.77 16.87l-17.39 46.85c-13.76 3-28 4.69-42.65 4.69v-27.38c1.69-12.62-7.64-36.26-22.63-51.25-6-6-9.37-14.14-9.37-22.63v-32.01c0-11.64-6.27-22.34-16.46-27.97-14.37-7.95-34.81-19.06-48.81-26.11-11.48-5.78-22.1-13.14-31.65-21.75l-.8-.72a114.792 114.792 0 0 1-18.06-20.74c-9.38-13.77-24.66-36.42-34.59-51.14 20.47-45.5 57.36-82.04 103.2-101.89l24.01 12.01C203.48 89.74 216 82.01 216 70.11v-11.3c7.99-1.29 16.12-2.11 24.39-2.42l28.3 28.3c6.25 6.25 6.25 16.38 0 22.63L264 112l-10.34 10.34c-3.12 3.12-3.12 8.19 0 11.31l4.69 4.69c3.12 3.12 3.12 8.19 0 11.31l-8 8a8.008 8.008 0 0 1-5.66 2.34h-8.99c-2.08 0-4.08.81-5.58 2.27l-9.92 9.65a8.008 8.008 0 0 0-1.58 9.31l15.59 31.19c2.66 5.32-1.21 11.58-7.15 11.58h-5.64c-1.93 0-3.79-.7-5.24-1.96l-9.28-8.06a16.017 16.017 0 0 0-15.55-3.1l-31.17 10.39a11.95 11.95 0 0 0-8.17 11.34c0 4.53 2.56 8.66 6.61 10.69l11.08 5.54c9.41 4.71 19.79 7.16 30.31 7.16s22.59 27.29 32 32h66.75c8.49 0 16.62 3.37 22.63 9.37l13.69 13.69a30.503 30.503 0 0 1 8.93 21.57 46.536 46.536 0 0 1-13.72 32.98zM417 274.25c-5.79-1.45-10.84-5-14.15-9.97l-17.98-26.97a23.97 23.97 0 0 1 0-26.62l19.59-29.38c2.32-3.47 5.5-6.29 9.24-8.15l12.98-6.49C440.2 193.59 448 223.87 448 256c0 8.67-.74 17.16-1.82 25.54L417 274.25z"
                  />
                </svg>
                <!-- <span class="fas fa-globe-americas"></span> -->
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Public</a>
                <a class="dropdown-item" href="#">Private</a>
                <a class="dropdown-item" href="#">Draft</a>
              </div>
            </div>
            <button
              :disabled="!isValid"
              class="btn btn-primary btn-sm px-4 px-sm-5"
              @click.prevent="createPost(post)"
            >Share</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>
 <script>
export default {
  name: "CreatePost",
  props: ["api_token", "user_id"],
  data() {
    return {
      post: {
        message: "",
        images:
          '{"1":{"url":"http://blahblah.com"},"2":{"url":"http://blahblah.com"},"3":{"url":"http://blahblah.com"}}',
        hashtags: '{"1":"#hello","2":"#world"}',
        user_id: this.user_id,
      },
    };
  },
  methods: {
    createPost(post) {
      this.$store.dispatch("createPost", {
        post: this.post,
        token: this.api_token,
      });
      setTimeout(() => {
        this.post.message = "";
      }, 1000);
    },
  },
  computed: {
    isValid() {
      return this.post.message !== "";
    },
  },
};
</script>

    <style scoped>
</style>