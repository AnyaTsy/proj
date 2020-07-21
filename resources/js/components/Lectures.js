import Vue from 'vue';

let Lectures = null;

if (document.getElementById('vue-lectures')) {
    Lectures = new Vue({
        el: '#vue-lectures',
        components: {

        },
        data: {
            showElement: 'lecture'
        },
        created() {
            console.log(this.showElement);
        },
        methods: {

        }
    });
}
export {Lectures};

