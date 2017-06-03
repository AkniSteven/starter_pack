<template>
    <div class="container">
        <h3>Test List</h3>
        <div class="row">

            <div class="col-md-8">
                <table class="table ">
                    <thead>
                    <tr>
                        <th>Tests</th>
                    </tr>
                    </thead>
                    <tbody>

                        <td> {{ test_data }} </td>


                    </tbody>
                </table>
            </div>
            {{message}}
        </div>
        <div id="app-6">
            <input v-model="message">
        </div>
    </div>

</template>


<script>

    export default {
        mounted() {
            console.log('Component ready.')
            this.fetchTestList()
        },

        data : function() {
            return {
                message: 'Hello Vue!',
                test_data: '',
            }

        },

        methods : {

            fetchTestList : function(){

                this.$http.get('/api/test').then((response) => {
                    this.$set(this,'test_data', response.data )

            });
            }
        }

    }

</script>
