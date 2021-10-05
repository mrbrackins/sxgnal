<template>
    <div class="poa-step">
                <div class="dots">
                    <span class="dot dot1"></span>
                   
                </div>
                <div class="vl"></div>
                <div class="inner-text">
                    <div class="empty">
                        <p><span> step 1</span></p>
                    </div>
                    <br />
                    
                </div>
            </div>
            </template>

            <style scoped>
.project .head {
    display: flex;
    justify-content: space-between;
}
.project {
    background-color: rgb(31, 27, 27);
    padding: 30px 0px;
}

.project h1 {
    color: blue;
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
    left: 15.5rem;
}
.dot1 {
    margin-top: 15px;
}
.dot2 {
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
}

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
    height: 100%;
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
</style>
