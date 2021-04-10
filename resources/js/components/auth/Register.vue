<template>
    <form method="POST" class="pl-4 pr-4 mt-3" action="/fashion/register">
        
        <div class="row ">
            
            <p class="form-group p-1 col-6">
                <label for="first_name">First Name</label>
                <input id="first_name" type="text" class="form-control" name="first_name" value="" required autofocus>
            </p>
            <p class="form-group  p-1 col-6">
                <label for="last_name">Last Name</label>
                <input id="last_name" type="text" class="form-control" name="last_name" value="" required autofocus>
            </p>
            <div class="clearfix"></div>

            <p class="form-group p-1 col-6">
                <label for="email">Email address</label>
                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
            </p>
            <p class="form-group p-1 col-6">
                <label for="phone_number">Phone Number</label>
                <input id="phone_number" type="text" class="form-control" name="phone_number" value="" required autofocus>
            </p>
            <div class="clearfix"></div>

            <p class="form-group p-1 col-6">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </p>
            <p class="form-group p-1 col-6">
                <label for="password">Confirm Password</label>
                <input id="password" type="password" class="form-control" name="password_confirmation" required>
            </p>
            <div class="clearfix"></div>
            <p class="form-group text-right col-12 mt-2">
                <button type="submit" class="btn btn-lg btn-block btn--primary ml-1 bold" name="register" value="Log in">Register</button>
            </p>
        
        </div>
        <p class="text-center border-top pt-5"> By registering your details, you agree with our <a class="color--primary bold" href="https://avenuemontaigne.ng/fashion/pages/terms-conditions">Terms & Conditions</a> , and <a class="color--primary bold" href="https://avenuemontaigne.ng/fashion/pages/privacy-policy">Privacy and Cookie Policy.</a> </p>

    </form>
</template>
<script>
import { mapGetters, mapActions } from 'vuex'


export default {
    data(){
        return {
            loading:false,
            errorsBag:[],
            form: {
                email: '',
                password: '', 
                first_name: null,
                last_name: null,
                password_confirmation: null,
                phone_number: null
            }
        }
    },
    computed:{
        ...mapGetters({
            errors: 'errors'
        })
    },
    mounted(){
      // this.$store.commit('setFormErrors', null)
      console.log(true)
    },
    methods:{
        ...mapActions({
            register:'register',
            validateForm: 'validateForm',
            clearErrors: 'clearErrors',
            checkInput: 'checkInput'
        }),
        formatError(error){
            return Array.isArray(error) ? error[0] : error
        },
        removeError(e){
            let input = document.querySelectorAll('.required');
            if (typeof input !== 'undefined'){
                this.clearErrors({  context:this, input:input })
            }
        },
        vInput(e){
            let input = document.querySelectorAll('.required');
            if (typeof input !== 'undefined') {
                this.checkInput({ context: this, email: this.form.email, input:e })
            }
        },
        submit: function(){
            let input = document.querySelectorAll('.required');
            this.validateForm({ context:this, input:input })
            if ( Object.keys(this.errors).length !== 0 ){
                this.error = "Please check for errors"
                return false;
            }
            this.loading = true
            this.register({
                context:this,
            })
        }
    }
    
}
</script>
