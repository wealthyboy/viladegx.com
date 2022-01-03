<template>
    <div class="">
        
        <div class="product-single-container product-single-default">
            <div class="row">
                <div class="col-md-6 d-sm-block d-md-none product-single-gallery">
                    <div class="product-slider-container">
                        <div class="product-single-carousel owl-carousel owl-theme">
                            <div class="product-item">
                                <img class="product-single-image"    :data-zoom-image="image" :src="image" />
                            </div>
                            <div v-for="image in images" :key="image.id" class="product-item">
                                <img  class="product-single-image"   :data-zoom-image="image.image" :src="image.image"  v-if="image.image !== ''"  :alt="image.image_tn">
                            </div>
                        </div>
                        <!-- End .product-single-carousel -->
                    </div>
                </div><!-- End .product-single-gallery -->
                <div class="col-md-8">
                    <div class="product-single-gallery popup-gallery">
                        <div class="row no-gutters">
                            <div class="col-6 d-none d-lg-block d-xl-block  d-md-block  product-item">
                                <div class="inner">
                                    <img  class="img-1" :data-zoom-image="image" :src="image"   alt="product name">
                                </div>
                            </div><!-- End .col-6 -->
                            <div  v-for="image in images" :key="image.id"  class="col-6 d-none d-xl-block  d-md-block  product-item">
                                <div class="inner">
                                    <img class="img2"  :src="image.image"   :data-zoom-image="image.image" alt="product name">
                                    
                                </div>
                            </div><!-- End .col-6 -->
                           
                        </div><!-- End .row -->
                    </div><!-- End .product-single-gallery -->
                </div><!-- End .col-md-8 -->
                
                <div v-for="(img,index)  in variant_images" :key="img.id"  :id="index" class="border   d-none col-md-8">
                    <div class="product-single-gallery popup-gallery">
                        <div class="row no-gutters">
                            <div class="col-6 d-none d-lg-block d-xl-block  d-md-block  product-item">
                                <div class="inner">
                                    <img  :data-zoom-image="img.image_to_show" :src="img.image_to_show"   alt="product name">
                                </div>
                            </div><!-- End .col-6 -->
                            <div  v-for="image in img.images" :key="image.id"  class="col-6 d-none d-xl-block  d-md-block  product-item">
                                <div class="inner">
                                    <img  :src="image.image"   :data-zoom-image="image.image" alt="product name">
                                    
                                </div>
                            </div><!-- End .col-6 -->
                           
                        </div><!-- End .row -->
                    </div><!-- End .product-single-gallery -->
                </div><!-- End .col-md-8 -->

                <div class="col-md-4 product-single-details mt-3 mt-sm-5  mt-xs-5">
                    <div class="product-sidebar">
                        <div class="p text-center ">
                            <div v-if="product.brand" class="tag  brand-name bold ">{{ product.brand_name }}</div>
                            <p class="product-title  border-bottom pb-2">{{ product.product_name }}</p>

                            <div class="product-item-prices d-flex justify-content-center mt-1"  v-if="discounted_price">
                                <div class="product--price--amount ">
                                    <span class="retail--title text-gold">SALE PRICE</span>
                                    <span class="product--price text-danger">{{ product.currency }}{{ discounted_price | priceFormat }}</span>
                                    <span class="retail--title">{{ percentage_off }}% off</span>
                                </div>
                                <div class="product--price--amount retail">
                                    <span class="retail--title text-gold">PRICE</span>
                                    <span class="product--price retail--price text-gold">{{ product.currency }}{{ price | priceFormat }}</span>
                                    <span class="retail--title"></span>
                                </div>
                            </div>

                            <div class="product-item-prices  d-flex justify-content-center  mt-1" v-else>
                                <div class="product--price--amount">
                                    <span class="retail--title text-gold">PRICE</span>
                                    <span class="product--price">{{ product.currency }}{{ price | priceFormat }}</span>
                                    <span class="retail--title"></span>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    
                        <div class="">
                                <!--Product Variations Form-->
                            <div class="row">
                                <!--Select Size-->
                                <div v-if="Object.keys(attributes).length !== 0"  class="col-12 variations mt-1 text-center">
                                    <div   v-for="map, key in attributes" :key="key" class="">
                                        <label class="d-block">{{ key }}:  <span v-if="key == 'Colors' ">{{ color }}</span></label>
                                        <div :id="'productV-' +key" class="d-flex mb-1 justify-content-center">
                                            <div  @click="getAttribute($event,key)" :data-name="key" @mouseenter="showColor(children)" @mouseleave="removeColor" :class="[ index== 0 ? 'active-attribute  ' : '', activeObject]" v-if="key == 'Colors' " :data-value="children" v-for="(children,index) in map" :key="children" :style="{ 'background-color': children }" style="height: 30px; width: 30px; border-radius: 50%; cursor: pointer;" class="mr-1 first-attribute"></div>
                                            <template v-if="attributesData.length">
                                                <div  :id="children"  @click="getAttribute($event,key)" :data-name="key" v-if="key != 'Colors' "     :class="[ index== 0 ? 'bold active-other-attribute' : 'border']" :data-value="children" v-for="(children,index) in attributesData" :key="children"   class="mr-1 border pl-3 o-a  product-variation-box  other-attribute">{{ children }} </div>
                                            </template>
                                            <template v-else>
                                                <div  :id="children"  @click="getAttribute($event,key)"  :data-name="key"  :class="[ index== 0 ? 'bold active-other-attribute ' : '']" v-if="key != 'Colors' " :data-value="children" v-for="(children,index) in map" :key="children"   class="mr-1   product-variation-box  border other-attribute">{{ children }} </div>
                                            </template>
                                        </div>
                                    </div>
                                </div>

                            
                            </div>
                            <div class="row   mb-2 mt-2">
                                <div class="col-md-8 pr-0 col-7">
                                    <button @click.prevent="addToCart"    type="button"  class="btn btn--primary text-capitalize add-to-cart  btn-lg btn-block">
                                        {{ cartText }} 
                                        <span  v-if="loading"  class="spinner-border spinner-border-sm float-right ml-3" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="col-md-4 col-5">
                                    <button v-if="$root.loggedIn"  @click.prevent="addToWishList"    type="button"  class="text-capitalize l-f1 pl-3  pb-3 pr-3 align-content-center justify-content-between position-relative btn btn-outline d-flex add-to-wishlist btn-block">
                                        <span>
                                            Wishlist
                                        </span>
                                        <span  class="float-right" role="wishlist" aria-hidden="true">
                                            <svg
                                                class=""
                                                v-if="!is_wishlist"
                                                >
                                                <use xlink:href="#wishlist-empty-icon"></use>
                                            </svg>
                                            <svg
                                                v-if="is_wishlist"
                                                >
                                                <use xlink:href="#wishlist-filled-icon"></use>
                                            </svg> 
                                        </span>
                                    </button>
                                    <button v-else data-toggle="modal" data-target="#login-modal"  type="button"  class=" text-capitalize l-f1 pl-4 pr-4 align-content-center justify-content-between position-relative btn btn-outline d-flex add-to-wishlist btn-block">
                                        <span >
                                            Wishlist
                                        </span>
                                        <span  class="float-right" role="wishlist" aria-hidden="true">
                                            <svg
                                                class=""
                                                >
                                                <use xlink:href="#wishlist-empty-icon"></use>
                                            </svg>
                                        
                                        </span>
                                    </button>
                                </div>
                                
                            </div>
                        </div><!-- End .product-filters-container -->   

                        <div class="col-12 mt-1 text-center">
                            <span class="bold">Estimated Delivery Time</span><br/>
                            <span>3 to 4 working days</span>
                        </div>
                    </div>
                </div><!-- End .product-single-details -->
            </div><!-- End .row -->

            <div class="breadcrums">
                <nav aria-label="breadcrumb" class="breadcrumb-nav breadcrumb-link">
                    <div class="ml-1 d-flex justify-content-start">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li v-for="breadcrumb in breadcrumbs" :key="breadcrumb" class="breadcrumb-item active" aria-current="page"><a href="/">{{ breadcrumb }}</a></li>
                        </ol>
                    </div>
                </nav>
            </div>



            <aside class="sidebar-shop">
                    <div class="pin-wrapper" style="">
                        <div class="sidebar-wrapper" style="">
                            <div  class="widget d-block d-sm-none border-top border-bottom">
                                <h3 class="widget-title pt-5">
                                    <a class="collapsed "   data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">DETAILS</a>
                                </h3>
                                <div class="collapse"  id="widget-body-4">
                                    <div v-html="product.description" class="widget-body"></div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->


                            <div  class="widget d-block d-sm-none  border-bottom">
                                <h3 class="widget-title pt-3">
                                    <a class="collapsed "   data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true" aria-controls="widget-body-4">WARRANTY & RETURN</a>
                                </h3>
                                <div class="collapse"  id="widget-body-5">
                                    <div  class="widget-body">
                                        <h4>WARRANTY</h4> 
                                        We offer a lifetime 100% authenticity guarantee for all of our items.</br>
                                        In the improbable scenario of a sale of an inauthentic item, you will receive a 100% refund, including the cost of return.</br>
                                        <h4 class="mt-2 pt-2 border-top">RETURNS</h4>
                                        You can return a purchased item within 3 days of receipt.</br> 
                                        No return fee is charged for returns within the Nigeria.</br>  
                                        However, based on the destination country a shipping fees is charged for returns made outside of Nigeria.</br>
                                        Customs duties and taxes are applicable and borne by the customer.</br>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->
                        </div>
                    </div>
                </aside><!-- End .col-lg-3 -->



            <div class="product-single-tabs d-none d-lg-block">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item pl-2">
                        <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="Warranty_Return" data-toggle="tab" href="#Warranty-Return" role="tab" aria-controls="Warranty-Return" aria-selected="false"> Warranty & Return</a>
                    </li>
                </ul>

                <div class="tab-content ">
                    <div class="tab-pane fade show active pl-2" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                        <div class="row">
                            <div class="col">
                                <div>
                                    <div v-if="product.brand" class="tag  brand-name bold ">{{ product.brand_name }}</div>
                                    <p class="product-title  border-bottom pb-2">{{ product.product_name }}</p>
                                </div>

                                <div v-html="product.description" class="product-desc-content  pl-2 pb-2 color--primary"></div><!-- End .product-desc-content -->
                            </div>
                            <div class="col">
                                <images  :image="image" :images="images" />
                            </div>
                        </div>
                    </div><!-- End .tab-pane -->

    
                    <div class="tab-pane fade fade" id="Warranty-Return" role="tabpanel" aria-labelledby="Warranty-Return">
                        <div class="product-desc-content pl-4 pb-2 color--primary">
                            <h4>WARRANTY</h4> 
                            We offer a lifetime 100% authenticity guarantee for all of our items.</br>
                            In the improbable scenario of a sale of an inauthentic item, you will receive a 100% refund, including the cost of return.</br>
                            <h4 class="mt-2 pt-2 border-top">RETURNS</h4>
                            You can return a purchased item within 3 days of receipt.</br> 
                            No return fee is charged for returns within the Nigeria.</br>  
                            However, based on the destination country a shipping fees is charged for returns made outside of Nigeria.</br>
                            Customs duties and taxes are applicable and borne by the customer.</br>
                        </div><!-- End .product-desc-content -->
                    </div><!-- End .tab-pane -->

                    
                </div><!-- End .tab-content -->
            </div><!-- End .product-single-tabs -->

        </div><!-- End .product-single-container -->
        <login-modal  />
        <register-modal  />
    </div>
</template>
<script>

import  Images from './Images.vue'
import  LoginModal from '../auth/LoginModal.vue'
import  RegisterModal from '../auth/RegisterModal.vue'
import  { mapGetters,mapActions } from 'vuex'
import  Pagination from '../pagination/Pagination.vue'


export default {
    name: "Show",
    props:{
        product:Object,
        attributes:Object,
        breadcrumbs:Object,
    },
    components:{
       Images,
       LoginModal,
       Pagination,
       RegisterModal,
       
    },
    data(){
        return {
            attributesData: [],
            color: '',
            isActive: false,
            canNotAddToCart: false,
            image:'',
            cText:   "Add To Bag",
            images:[],
            variant_images: [],
            noRating: false,
            user: Window.auth,
            file:null,
            quantity: '',
            useUrl: false,
            price:null,
            discounted_price: null,
            percentage_off: '',
            product_variation_id:'',
            product_variation:[],
            prodAttributes: null,
            category:'',
            cartSideBarOpen: false,
            loading: false,
            is_loggeIn:  false,
            is_wishlist:  null,
            image_m: '',
            image_tn: null,
            profile_photo: null,
            errorsBag:[],
            fadeIn: false,
            product_slug: this.product.slug,
            wishlistText: false,
            allowedFileTypes: ['image/jpeg','image/png','image/gif'],
            form:{
                description: null,
                rating: null,
                product_id:this.product.id ,
                image: null
            },
            submiting:false
        }
    },
    computed: {
        ...mapGetters({
            cart: 'cart' ,
            loggedIn:'loggedIn',
            wishlist:'wishlist',
            reviews: 'reviews',
            meta: 'reviewsMeta',
            errors:'errors',

        }),
        activeObject: function () {
            return {
               'active-attributes': this.isActive
            }
        },
        cartText: function() {
            return this.cText
        },
        canAddToCart: function() {
            return [this.canNotAddToCart ? 'disabled' : '' ];
        },
        loggedIn: function(){
            return [this.user ? true: false]
        },
    
    },
    mounted(){
        this.productReviews()
        this.image = this.product.image_to_show
        this.image_tn   =   this.product.image_to_show_tn
        this.images     =   this.product.add_images
        this.product_variation_id = this.product.default_variation_id
        this.percentage_off = this.product.default_percentage_off
        this.quantity = this.product.qty
        this.cText= this.product.qty  < 1 ? 'Out of Stock' :" Add To Bag"
        this.price =  this.product.converted_price
        this.discounted_price =  this.product.default_discounted_price
        this.is_wishlist =  this.product.is_wishlist
        this.variant_images = this.product.variants   
    },
    methods: {
        getStarRating(e,rating){
            this.form.rating = rating
            this.noRating = false
            let ratings = document.querySelectorAll('.rating')
                ratings.forEach(elm =>{
                    elm.classList.remove('active')
                })
            e.target.classList.add("active")
        },
        productReviews() {
            return axios.get('/reviews/'+ this.product_slug).then((response) => {
                this.loading = false;
                this.$store.commit('setReviews', response.data.data)
                this.$store.commit('setReviewsMeta', response.data.meta)
            }).catch((error) => {
                this.loading = false;
            }) 
        },
        getProduct() {
            axios.get('/api' + this.$route.path).then((response) => {
                let obj = response.data.data;
                this.product_variation = this.product.product_variation;
                window.Stock =  JSON.parse(obj.stock);
                window.Inventory =  JSON.parse(obj.inventory);
            })
        },
        currentSlide:  function(image) {
            this.fadeIn = !this.fadeIn;
            this.image = image 
            setTimeout(() =>{
                this.fadeIn = !this.fadeIn;
            }, 1000); // Will alert once, after a second.
           
        },
         
        getAttribute: function(evt, key) {
            this.cartError = null;
            let active_attribute = null,
                variation,
                first_attribute,
                active_other_attribute,
                other_attribute,
                oAv,
                ooA,
                iam,
                f = false,
                af = false,
                cA;
            let inventory = JSON.parse(this.product.inventory);
            let stock = JSON.parse(this.product.stock);
            first_attribute = document.querySelectorAll(".first-attribute");
            other_attribute = document.querySelectorAll(".other-attribute");
            /**
             * Toggle active statte
             */

            if (evt.target.classList.contains("first-attribute")) {
                first_attribute.forEach(function(elm, key) {
                elm.classList.remove("active-attribute");
                });
                evt.target.classList.add("active-attribute");
            }

            /**
             * Toggle active statte for other attributes
             */
            if (evt.target.classList.contains("other-attribute")) {
                other_attribute.forEach(function(elm, key) {
                elm.classList.remove("active-other-attribute");
                });
                evt.target.classList.add("active-other-attribute");
            }

            try {
                if (typeof inventory[0].length === "undefined") {
                let v = inventory[0][evt.target.dataset.value];
                for (let i in v) {
                    if (i !== evt.target.dataset.name) {
                    this.attributesData = Object.keys(v[i]);
                    }
                }
                }
                active_attribute = document.querySelector(".active-attribute");
                active_other_attribute = document.querySelector( ".active-other-attribute");
                if (active_attribute && this.attributesData.length != 0) {
                variation =
                    active_attribute.dataset.value + "_" + this.attributesData[0];
                }
                if (active_attribute && this.attributesData.length == 0) {
                variation = active_attribute.dataset.value;
                }

                if (!active_attribute && active_other_attribute !== null) {
                variation = active_other_attribute.dataset.value;
                }

                if (
                active_attribute &&
                other_attribute.length !== 0 &&
                key != "Colors"
                ) {
                variation =
                    active_attribute.dataset.value + "_" + evt.target.dataset.value;
                }

                let vTs = stock[0][variation];
                if (key == "Colors") {
                this.image = vTs.image;
                this.image_m = vTs.image_m;
                this.images = vTs.images;
                }
                this.quantity = vTs.quantity;
                this.price = vTs.converted_price;
                this.percentage_off = vTs.percentage_off;
                this.discounted_price =
                vTs.discounted_price || vTs.default_discounted_price;
                this.product_variation_id = vTs.id;
                this.canNotAddToCart = false;
                this.cText = this.quantity >= 1 ? "Add To Bag" : "Item is sold out";
                console.log('test')
            } catch (error) {
                console.log(error);
                this.canNotAddToCart = true;
                this.cText = "Sold Out";
                this.quantity = 0;
            }
       },
        
        selectProductAttributes: function(){
            let values = [];
            let attributes = document.querySelectorAll('select.vs')
            attributes.forEach(function(elm,key){
                values.push(elm.value)
            }) 
            return values;
        },
        formatError(error){
            return Array.isArray(error) ? error[0] : error
        },
        removeError(e){
            let input = document.querySelectorAll('.rating_required');
            if (typeof input !== 'undefined'){
                this.clearErrors({  context:this, input:input })
            }
        },
        vInput(e){
            let input = document.querySelectorAll('.rating_required');
            if (typeof input !== 'undefined') {
                this.checkInput({ context: this, input:e })
            }
        }, 
        showColor(color){
           this.color = color
        },
        removeColor(color){
           this.color = ''
        },
        ...mapActions({
            addProductToCart:'addProductToCart',
            addProductToWishList: 'addProductToWishList',
            createReviews: 'createReviews',
            validateForm:  'validateForm',
            clearErrors:   'clearErrors',
            checkInput:    'checkInput',
            getReviews:    'getReviews'
        }),
        addToCart: function(){
            if (this.cText == 'Out of Stock') return;
            this.cText = "Adding...."
            this.loading = true;
            this.addProductToCart({
                product_variation_id:this.product_variation_id,
                quantity: 1
            }).then(() =>{
                this.cText = "Add To Bag"
                this.loading = false;
            }).catch((error) =>{
                this.cText = "Add To Bag"
                this.loading = false
            })
        },
        addToWishList: function(){
            this.wishlistText = true
            this.addProductToWishList({
                product_variation_id:this.product_variation_id,
                context: this
            })
        }, 
        submit(){
            let input = document.querySelectorAll('.rating_required');
            this.validateForm({ context:this, input:input })
            if ( Object.keys(this.errors).length !== 0 ){ 
                if ( !this.form.rating ){
                   this.noRating = true
                }
                return false; 
            }
            this.submiting = true
            let form = new FormData();
            form.append('image',this.file)
            form.append('description',this.form.description)
            form.append('rating',this.form.rating)
            form.append('product_id',this.form.product_id)
            this.createReviews({ context: this ,form})
        }  
    }
}
</script>

