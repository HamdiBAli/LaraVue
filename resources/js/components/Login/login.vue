<template>
    <div class="col-md-4 offset-md-4">
        <!-- Default form login -->
        <form id="formId" @submit="login" class="text-center border border-light p-5">
            <p class="h4 mb-4">Sign in</p>
            <!-- Email -->
            <input type="email" v-model="email" name="email" id="email" class="form-control mb-4" placeholder="E-mail" required>

            <!-- Password -->
            <input type="password" v-model="password" name="password" id="password" class="form-control mb-4" placeholder="Password" required>

            <div class="d-flex justify-content-around">
                <div>
                    <!-- Forgot password -->
                    <a href="">Forgot password?</a>
                </div>
            </div>

            <!-- Sign in button -->
            <input  class="btn btn-info btn-block my-4" type="submit" value="Sign in">

            <!-- Register -->
            <p>Not a member?
                <a href="">Register</a>
            </p>

        </form>
        <!-- Default form login -->
    </div>
</template>
<script>
    export default{
        el: '#formId',
        data(){
            return{
                // form: new Form{
                    email:'',
                    password:''
                // }
            }
        },
        methods:{
            login:function(e){
                    axios.post('/api/auth/login',this.$data)
                    .then(res=>console.log(res.data))
                    .catch(error => console.log(error))
                     e.preventDefault();
            }
        }
    }
</script>
<style>

</style>
