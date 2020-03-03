<template>
    <div class="col-sm-12 col-md-6 col-lg-4 mt-2">
        <div
            class="card"
            style="width: 18rem;cursor: pointer;"
            v-on:click="toMessages"
        >
            <img
                class="card-img-top"
                :src="thread.image"
                alt="Card image cap"
            />
            <div class="card-body">
                <p class="card-text">{{ thread.title }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["thread"],
    methods: {
        toMessages() {
            window.location = `/thread/${this.thread.id}`;
        }
    }
};
</script>
