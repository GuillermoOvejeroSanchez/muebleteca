function swalTest() {
  swal({
    title: "Are you sure?",
    text: "You will not be able to recover this imaginary file!",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Yes, delete it!",
    cancelButtonText: "No, cancel plx!",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm) {
    if (isConfirm) {
      swal("Deleted!", "Your imaginary file has been deleted.", "success");
    } else {
      swal("Cancelled", "Your imaginary file is safe :)", "error");
    }
  });
}


function confirmAction(msg) {
  if(!confirm(msg)){
    return false;
  }else{
    return true;
  }
}