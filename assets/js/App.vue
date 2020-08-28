<template>
    <div id="app">
        <div class="col-lg-12">
            <h1 class="text-nowrap">Leads List</h1>

        </div>
        <leads-list></leads-list>
    </div>
</template>

<script>
    import LeadsList from "./Components/LeadsList";

    export default {
        name: 'app',
        components: {
            'leads-list': LeadsList
        },
        data() {
            return {

            }
        }
    }
</script>