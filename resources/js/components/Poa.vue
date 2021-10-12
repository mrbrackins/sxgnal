<template>
    <div class="project">
        <div class="container">
            <div class="head">
                <div class="text">

                    <h1 class="projectschedule"><strong>project schedule</strong></h1>
                    <p>project No. op1001</p>

                </div>
                <div class="form">
                    <div class="date d-flex">
                        <p>date</p>
                        <p class="last-p"></p>
                    </div>
                    <div class="sign d-flex">
                        <p>sign</p>
                        <p class="last-p"></p>
                    </div>
                    <p class="omi" style="color:  #ee6664">omi picnics</p>
                </div>
            </div>
        </div>
        <div class="container">
            <POAStep />
        </div>
    </div>
</template>
<script>
import POAStep from "../poa/POAStep.vue";
export default {
    components: { POAStep },
    name: "Poa",
    props: ["api_token", "user_id", "isFinished", "stepNumber", "stepContent"],
    data() {
        return {};
    },
    methods: {},
    computed: {}
};
</script>


<style>
@import url("https://fonts.googleapis.com/css2?family=Arimo&display=swap");

@font-face {
    font-family: "kollektif";
    src: url("/assets\font\kollektif");
}

@font-face {
    font-family: "glacial";
    src: url("/assets\font\glacial");
}


.project .head {
    display: flex;
    justify-content: space-between;
}

p {
    font-family: "glacial" !important;
}
.omi {
    font-family: "Arimo", sans-serif;
}
.project {
    background-color: rgb(31, 27, 27);
    padding: 30px 0px;
}



.project .head p {
    color: white;
    z-index: 2;
}
.project .form p {
    color: white;
}
.last-p {
    background-color: white;
    padding: 10px 80px;
    margin-left: 10px;
}
.date,
.sign {
    justify-content: space-between;
    margin-right: 65px;
    font-family: "Arimo", sans-serif !important;
}
.form {
    justify-content: space-between;
    padding: 20px;
}
.dot {
    height: 25px;
    width: 25px;
    background-color: white;
    border-radius: 50%;
    display: inline-block;
    margin-top: 30px;
}
.dots {
    display: flex;
    flex-direction: column;
    position: absolute;
    left: 15rem;
}
.dot1 {
    margin-top: 15px;
}
/* .dot2 {
    margin-top: 80px;
}
.dot3 {
    margin-top: 80px;
}
.dot4 {
    margin-top: 80px;
}
.dot5 {
    margin-top: 80px;
} */

.project {
    text-transform: capitalize;
}
.project .head .form {
    margin-left: 20rem;
}
.inner-text {
    margin-top: 3rem;
    display: flex;
    margin-left: 7rem;
    flex-direction: column;
    width: 50%;
}
.poa-step {
    margin-left: 10rem;
}
.inner-text .empty p {
    background-color: white;
    padding-top: 5px;
    padding-bottom: 35px;
    padding-left: 30px;
    padding-right: 20px;
    margin-left: 20px;
    display: flex;
}

.vl {
    border-left: 4px solid rgb(247, 89, 115);
    height: 70%;
    position: absolute;
    left: 10%;
    top: 0;
    margin-left: 10rem;
}

@media only screen and (max-width: 600px) {
    .project .head .text h1 {
        font-size: 25px;
        text-align: left;
    }

    .project {
        width: 400px;
        padding-bottom: 80px;
    }

    .project .head .text p {
        font-size: 12px;
    }
    .project .head .text p {
        text-align: left;
    }
    .last-p {
        background-color: white;
        padding: 10px 60px;
        margin-left: 10px;
    }
    .project .head .form {
        margin-left: 4rem;
        margin-right: 8rem;
        margin-top: -1rem;
        font-size: 12px;
    }
    .inner-text .empty p {
        background-color: white;
        padding-top: 5px;
        padding-bottom: 35px;
        padding-left: 30px;
        padding-right: 50px;
        margin-left: 20px;
        display: flex;
    }
    .form p {
        text-align: left;
    }

    .dots {
        left: 1.8rem;
    }

    .inner-text {
        margin-left: 2rem;
        width: 80%;
    }

    .vl {
        margin-left: 20px;
        left: 5%;
    }
    .inner-body {
        margin-left: 20px;
    }
}

.projectschedule {

   font-family: "Kollektif" !important;
   color: #07cff2;

}
</style>
