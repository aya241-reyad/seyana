<script>
    function archiveFunction() {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
     swal({
title: "Are you sure?",
text: "But you will still be able to retrieve this item.",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#DD6B55",
confirmButtonText: "Yes, delete it!",
cancelButtonText: "No, cancel please!",
closeOnConfirm: false,
closeOnCancel: false
},
function(isConfirm){
if (isConfirm) {
 form.submit();          // submitting the form when user press yes
} else {
 swal("Cancelled", "Your item is safe :)", "error");
}
});
}
         
     </script>
