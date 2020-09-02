let actions = {
    createPost({ commit }, payload) {
        console.log("token yo");
        console.log(payload.token);
        axios
            .post("/api/posts/store", payload.post, {
                headers: { Authorization: `Bearer ${payload.token}` }
            })
            .then(res => {
                commit("CREATE_POST", res.data);
            })
            .catch(err => {
                console.log(err);
            });
    },
    fetchPosts({ commit }, token) {
        axios
            .post(
                "/api/posts",
                {},
                {
                    headers: { Authorization: `Bearer ${token}` }
                }
            )
            .then(res => {
                commit("FETCH_POSTS", res.data);
                console.log(res.data);
            })
            .catch(err => {
                console.log(err);
            });
    },
    deletePost({ commit }, payload) {
        axios
            .delete(
                `/api/posts/${payload.post.id}`,

                {
                    headers: { Authorization: `Bearer ${payload.token}` }
                }
            )
            .then(res => {
                if (res.data === "deleted") commit("DELETE_POST", payload.post);
            })
            .catch(err => {
                console.log(err);
            });
    }
};

export default actions;
