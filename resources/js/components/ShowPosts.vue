<template>
  <div class="card mb-3">
    <div class="card-header bg-light">
      <div class="row justify-content-between">
        <div class="col">
          <div class="media">
            <div class="avatar avatar-2xl">
              <img
                class="rounded-circle"
                src="https://image.shutterstock.com/image-illustration/snow-falling-stock-image-black-260nw-1519161953.jpg"
                alt
              />
            </div>
            <div class="media-body align-self-center ml-2">
              <p class="mb-1 line-height-1">
                <a class="font-weight-semi-bold" href="#">{{currentuser}}</a>
              </p>
              <p class="mb-0 fs--1">
                Yesterday • Dalby •
                <svg
                  class="svg-inline--fa fa-users fa-w-20"
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fas"
                  data-icon="users"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 640 512"
                  data-fa-i2svg
                >
                  <path
                    fill="currentColor"
                    d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"
                  />
                </svg>
                <!-- <span class="fas fa-users"></span> -->
              </p>
            </div>
          </div>
        </div>
        <div class="col-auto">
          <div class="dropdown text-sans-serif">
            <button
              class="btn btn-sm dropdown-toggle p-1 dropdown-caret-none"
              type="button"
              id="post-article-action"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <svg
                class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1"
                aria-hidden="true"
                focusable="false"
                data-prefix="fas"
                data-icon="ellipsis-h"
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"
                data-fa-i2svg
              >
                <path
                  fill="currentColor"
                  d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"
                />
              </svg>
              <!-- <span class="fas fa-ellipsis-h fs--1"></span> -->
            </button>
            <div
              class="dropdown-menu dropdown-menu-right py-0"
              aria-labelledby="post-article-action"
            >
              <div class="bg-white py-3">
                <a class="dropdown-item" href="#!">View</a>
                <a class="dropdown-item" href="#!">Edit</a>
                <a class="dropdown-item" href="#!">Report</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-warning" href="#!">Archive</a>
                <a class="dropdown-item text-danger" href="#!">Delete</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <p>{{message}}</p>
      <!-- <li v-for="image in jsonImages" :key="image.id">{{ image.url }}</li> -->
    </div>
    <!-- <div class="card-footer bg-light pt-0">
      <div class="border-bottom border-200 fs--1 py-3">
        <a class="text-700" href="#!">34 Comments</a>
      </div>
      <div class="row no-gutters font-weight-semi-bold text-center py-2 fs--1">
        <div class="col-auto">
          <a class="rounded d-flex align-items-center mr-3 text-700" href="#!">
            <img
              src="https://prium.github.io/falcon/v2.7.1/default/assets/img/illustrations/like-inactive.png"
              width="20"
              alt
            />
            <span class="ml-1">Like</span>
          </a>
        </div>
        <div class="col-auto">
          <a class="rounded d-flex align-items-center mr-3" href="#!">
            <img
              src="https://prium.github.io/falcon/v2.7.1/default/assets/img/illustrations/comment-active.png"
              width="20"
              alt
            />
            <span class="ml-1">Comment</span>
          </a>
        </div>
        <div class="col-auto d-flex align-items-center">
          <a class="rounded text-700 d-flex align-items-center" href="#!">
            <img
              src="https://prium.github.io/falcon/v2.7.1/default/assets/img/illustrations/share-inactive.png"
              width="20"
              alt
            />
            <span class="ml-1">Share</span>
          </a>
        </div>
      </div>
      <form class="d-flex align-items-center border-top border-200 pt-3" data-children-count="1">
        <div class="avatar avatar-xl">
          <img
            class="rounded-circle"
            src="https://image.shutterstock.com/image-illustration/snow-falling-stock-image-black-260nw-1519161953.jpg"
            alt
            data-children-count="0"
          />
        </div>
        <input
          class="form-control rounded-capsule ml-2 fs--1"
          type="text"
          placeholder="Write a comment..."
        />
      </form>
      <div class="media mt-3">
        <div class="avatar avatar-xl">
          <img
            class="rounded-circle"
            src="https://image.shutterstock.com/image-illustration/snow-falling-stock-image-black-260nw-1519161953.jpg"
            alt
          />
        </div>
        <div class="media-body ml-2 fs--1">
          <p class="mb-1 bg-200 rounded-soft p-2">
            <a class="font-weight-semi-bold" href="#">Rowan Atkinson</a> She starred as Jane Porter in The
            <a href="#!">@Legend of Tarzan (2016)</a>, Tanya Vanderpoel in Whiskey Tango Foxtrot (2016) and as DC comics villain Harley Quinn in Suicide Squad (2016), for which she was nominated for a Teen Choice Award, and many other awards.
          </p>
          <div class="px-2">
            <a href="#!">Like</a> •
            <a href="#!">Reply</a> • 23min
          </div>
        </div>
      </div>
      <div class="media mt-3">
        <div class="avatar avatar-xl">
          <img
            class="rounded-circle"
            src="https://image.shutterstock.com/image-illustration/snow-falling-stock-image-black-260nw-1519161953.jpg"
            alt
          />
        </div>
        <div class="media-body ml-2 fs--1">
          <p class="mb-1 bg-200 rounded-soft p-2">
            <a class="font-weight-semi-bold" href="#">Jessalyn Gilsig</a> Jessalyn Sarah Gilsig is a Canadian-American actress known for her roles in television series, e.g., as Lauren Davis in Boston Public, Gina Russo in Nip/Tuck, Terri Schuester in Glee, and as Siggy Haraldson on the History Channel series Vikings. 🏆
          </p>
          <div class="px-2">
            <a href="#!">Like</a> •
            <a href="#!">Reply</a> • 3hrs
          </div>
        </div>
      </div>
      <a class="fs--1 text-700 d-inline-block mt-2" href="#!">Load more comments (2 of 34)</a>
    </div>-->
    <ShowComments />
  </div>
</template>

<script>
import ShowComments from "./ShowComments";
export default {
  mounted() {
    console.log("Component mountedbra test.");
  },
  props: ["message", "images", "currentuser"],
  data: function () {
    return {
      jsonImages: JSON.parse(this.images),
      user: this.currentUser,
    };
  },
  // computed: {
  //   // a computed getter
  //   jsonImages: function () {
  //     // `this` points to the vm instance
  //     return JSON.parse(this.images);
  //   },
  // },
};
</script>
