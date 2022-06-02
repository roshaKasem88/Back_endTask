<template>
<div class="container">
  <form>
  <div class="form-group">
    <label>Advertise Name:</label>
    <input type="text" class="form-control"  name="name" placeholder="Enter Advertise Name" v-model="form.name">
  </div>

  <div class="row form-group">
      <div class="col-md-2">
          Select Advertising Compaign Start Date:
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control datetimepicker" name="start_date"> 
      </div>
    </div>
  </div>


   <div class="row form-group">
      <div class="col-md-2">
          Select Advertising Compaign End Date:
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control datetimepicker" name="end_date"> 
      </div>
    </div>
  </div>
                    <div class="form-group">
                        <label>Enter Daily Budget </label>
                    <input class="form-control" type="number" name="daily_budget">
                    </div>

                     <div class="form-group">
                        <label>Enter Total </label>
                    <input class="form-control" type="number"  name="total" />
                    </div>

                    <div class="form-group">
                        <label for="images" class="form-label">Select images</label>
                        <input class="form-control" type="file" id="images" name="image_names[]" multiple>
                    </div>
                    <input type="submit" class="btn btn-primary">
                    </form>

</template>
<script>

export default
{
    name:"create",
    data(){
return {
    form:new Form({
    })
}


    },
    methods : {
/**
 * ON Submit form
*/
        onSubmit(){

        }
    }
}

</script>
<style scoped>

</style>


