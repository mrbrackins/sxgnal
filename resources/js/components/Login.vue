<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">LOGIN</div>

                    <div class="card-body">
                        <form method="POST" action="">

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">EMAIL ADDRESS</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control"  name="email" />


                                    <span class="invalid-feedback" role="alert">
                                        <strong>MESSAGE</strong>
                                    </span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">PASSWORD</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">


                                    <span class="invalid-feedback" role="alert">
                                        <strong>MESSAGE</strong>
                                    </span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"  >

                                        <label class="form-check-label" for="remember">
                                           REMEMBER ME
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        LOGIN
                                    </button>


                                    <a class="btn btn-link" href="">
                                        FORGOT PASSWORD
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</template>

<script>
    export default {
        name: "Login"
    }
</script>

<style scoped>

</style>
