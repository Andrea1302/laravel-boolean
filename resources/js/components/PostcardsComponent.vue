<template>
      <div class="container" id="postcards">
        <div class="row" id="tabella">
            <div class="col-3">sender</div>
            <div class="col-3">address</div>
            <div class="col-3">text</div>
            <div class="col-3">image</div>
        </div>
        <div class="row" v-for="postcard,i in postcards" :key="i">
            <div class="col-3 itemCol">{{postcard.sender}}</div>
            <div class="col-3 itemCol">{{postcard.address}}</div>
            <div class="col-3 itemCol">{{postcard.text}}</div>
            <div class="col-3 itemCol"><img class="image_postcard" :src="`/storage/postcards/${postcard.image}`" :alt="`${postcard.image}`"></div>
        </div>
    </div>
</template>

<script>
    export default {
           data(){
            return{
                postcards : [],
            }
        },
        props : {
            user : String,
        },
        mounted() {
            // console.log(this.postcards);
            axios.get('api/getPostcards')
            .then(res => {
                this.postcards = res.data;
                console.log(this.postcards);
            }).catch(err=>{
                console.error(err);
            });
        }
    }
</script>