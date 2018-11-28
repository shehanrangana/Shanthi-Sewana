<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="form-group" id="rating-ability-wrapper">    
    <h2 class="bold rating-header" style="">
    <span class="selected-rating">0</span><small> / 5</small>
    </h2>
    <button type="button" class="btnrating btn btn-default btn-sm" data-attr="1" id="rating-star-1">
        <i class="fa fa-star" aria-hidden="true"></i>
    </button>
    <button type="button" class="btnrating btn btn-default btn-sm" data-attr="2" id="rating-star-2">
        <i class="fa fa-star" aria-hidden="true"></i>
    </button>
    <button type="button" class="btnrating btn btn-default btn-sm" data-attr="3" id="rating-star-3">
        <i class="fa fa-star" aria-hidden="true"></i>
    </button>
    <button type="button" class="btnrating btn btn-default btn-sm" data-attr="4" id="rating-star-4">
        <i class="fa fa-star" aria-hidden="true"></i>
    </button>
    <button type="button" class="btnrating btn btn-default btn-sm" data-attr="5" id="rating-star-5">
        <i class="fa fa-star" aria-hidden="true"></i>
    </button>
</div>

<style>
.rating-header {
    margin-top: -10px;
    margin-bottom: 10px;
}
</style>

<!-- <script>
	jQuery(document).ready(function($){
	    
        $(".btnrating").on('click',(function(e) {
        
        var previous_value = $("#selected_rating").val();
        
        var selected_value = $(this).attr("data-attr");
        $("#selected_rating").val(selected_value);
        
        $(".selected-rating").empty();
        $(".selected-rating").html(selected_value);
        
        for (i = 1; i <= selected_value; ++i) {
        $("#rating-star-"+i).toggleClass('btn-warning');
        $("#rating-star-"+i).toggleClass('btn-default');
        }
        
        for (ix = 1; ix <= previous_value; ++ix) {
        $("#rating-star-"+ix).toggleClass('btn-warning');
        $("#rating-star-"+ix).toggleClass('btn-default');
        }
        
        }));
        
            
    });
    
</script> -->