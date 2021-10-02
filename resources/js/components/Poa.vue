<template>
    <div class="project">
        <div class="container">
            <div class="head">
                <div class="text">
                    <h1>project schedule</h1>
                    <p>project No. op1001</p>
                </div>
                <div class="form">
                    <label for="fname">date</label>
                    <input type="text" id="fname" name="fname" />
                    <br />
                    <label for="lname">sign</label>
                    <input type="text" id="lname" name="lname" /> <br />
                    <p>omi picnics</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-body">
                <div class="dots">
                    <span class="dot dot1"></span>
                    <span class="dot  dot2"></span>
                    <span class="dot  dot3"></span>
                    <span class="dot  dot4"></span>
                    <span class="dot  dot5"></span>
                </div>
                <div class="vl"></div>
                <div class="inner-text">
                    <textarea rows="2" cols="30" name="comment" form="usrform">
 Enter text here... </textarea
                    >
                    <br />
                    <textarea rows="2" cols="30" name="comment" form="usrform">
 Enter text here... </textarea
                    ><br />
                    <textarea rows="2" cols="30" name="comment" form="usrform">
 Enter text here... </textarea
                    ><br />
                    <textarea rows="2" cols="30" name="comment" form="usrform">
 Enter text here... </textarea
                    >
                    <br />
                    <textarea rows="2" cols="30" name="comment" form="usrform">
 Enter text here... </textarea
                    >
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "Poa",
    props: ["api_token", "user_id"],
    data() {
        return {};
    },
    methods: {},
    computed: {}
};
</script>

<style scoped>
.project .head {
    display: flex;
    justify-content: space-between;
}

.project h1 {
    color: lightseagreen;
}
.project p {
    color: darkred;
}
.dot {
    height: 25px;
    width: 25px;
    background-color: rgb(31, 27, 27);
    border-radius: 50%;
    display: inline-block;
    margin-top: 30px;
}
.dots {
    display: flex;
    flex-direction: column;
    position: absolute;
    left: 15.1rem;
}
.dot1 {
    margin-top: 15px;
}
.dot2 {
    margin-top: 45px;
}
.dot3 {
    margin-top: 50px;
}
.dot4 {
    margin-top: 50px;
}
.dot5 {
    margin-top: 50px;
}

.project {
    text-transform: capitalize;
}
.project .head .form {
    margin-left: 20rem;
}
.inner-text {
    margin-top: 5rem;
    display: flex;
    margin-left: 7rem;
    flex-direction: column;
    width: 50%;
}
.inner-body {
    margin-left: 10rem;
}
.vl {
    border-left: 4px solid darkred;
    height: 350px;
    position: absolute;
    left: 10%;
    top: 0;
    margin-left: 10rem;
}

@media only screen and (max-width: 600px) {
    .project .head .text h1 {
        font-size: 30px;
        text-align: left;
    }

    .project .head .text p {
        font-size: 12px;
    }
    .project .head .text p {
        text-align: left;
    }

    .project .head .form {
        margin-left: 3rem;
        margin-right: 10rem;
        margin-top: -1rem;
    }

    .project .head input {
        width: 10rem;
    }
    .dots {
        left: 1rem;
    }

    .inner-text {
        margin-left: 3rem;
        width: 50%;
    }

    .inner-text input {
        width: 50px;
    }
    .vl {
        margin-left: 0px;
        left: 5%;
    }
    .inner-body {
        margin-left: 0px;
    }
}
</style>
