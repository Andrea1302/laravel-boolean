<template>
      <div class="container" id="postcards">
        <div class="row" id="tabella">
            <div class="col-3">sender</div>
            <div class="col-3">address</div>
            <div class="col-3">text</div>
            <div class="col-2">image</div>
            <div class="col-1">Action</div>
        </div>
        <div class="row" v-for="postcard,i in postcards" :key="i">
            <div class="col-3 itemCol">{{postcard.sender}}</div>
            <div class="col-3 itemCol">{{postcard.address}}</div>
            <div class="col-3 itemCol">{{postcard.text}}</div>
            <div class="col-2 itemCol">
                <img v-if="postcard.image"  class="image_postcard" :src="`/storage/postcards/${postcard.image}`" :alt="`${postcard.image}`">
                <span v-else>Null</span>
            </div>
            <div class="col-1 itemCol">
                 <a :href="`/delete/postcard/${postcard.id}`" class="btn">
                    Delete
                </a>
                <a :href="`edit/postcard/${postcard.id}`" class="btn">
                    Edit
                </a>
            </div>

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