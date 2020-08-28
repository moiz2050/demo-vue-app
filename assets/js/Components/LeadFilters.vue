<template>
    <div class="mb-5 well">
        <form @submit.prevent="onSubmit">
            <div class="form-row">
                <div class="col-4">
                    <autocomplete :suggestions="locations" :selection="this.locationValue" @update="setLocationValue" :placeholder="'Search Locations'"></autocomplete>
                </div>
                <div class="col-4">
                    <autocomplete :suggestions="services" :selection="this.serviceValue" @update="setServiceValue" :placeholder="'Search Services'"></autocomplete>
                </div>
                <div class="col-4"><button class="btn btn-primary" type="submit"> Submit</button> </div>
            </div>
        </form>
    </div>
</template>

<script>
    import Autocomplete from "./Autocomplete";
    import Locations from "../Models/Locations";
    import Services from "../Models/Services";
    import Leads from "../Models/Leads";

    export default {
        name: "LeadFilters",
        components: {Autocomplete},

        data() {
            return {
                locations : [],
                services : [],
                locationValue: '',
                serviceValue: '',
                leads: []

            }
        },

        created() {
            this.getLocations()
            this.getServices()
        },

        methods: {
            onSubmit() {
                let formData = {
                        'location' : this.locationValue,
                        'service' : this.serviceValue
                    };

                (new Leads()).allWithCriteria(formData, leads => this.leads = leads.data)
                    .then(() => this.$emit('leadsFiltered', this.leads));
            },

            getLocations() {
                let locationsNewArray = [];
                (new Locations()).all(function (locations) {
                    locations.forEach(function (location) {
                        locationsNewArray[location.value] = location.text;
                    })
                }).then(() => this.locations = locationsNewArray);
            },

            getServices() {
                let servicesNewArray = [];
                (new Services()).all(function (services) {
                    services.forEach(function (service) {
                        servicesNewArray[service.value] = service.text;
                    })
                }).then(() => this.services = servicesNewArray);
            },

            setLocationValue(location) {
                this.locationValue = location;
            },

            setServiceValue(service) {
                this.serviceValue = service;
            },


        }
    }
</script>

<style scoped>

</style>