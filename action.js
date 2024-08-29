
// $(document).ready(function(){
//     $('#manage_user').submit(function(e){
//         e.preventDefault(); // Prevent default form submission
        
//         // Serialize form data
//         var formData = $(this).serialize();
        
//         // Send AJAX request
//         $.ajax({ 
//             url: 'add-users.php',
//             type: 'POST',
//             data: formData,
//             success: function(resp){ 
//                 $('#error_msg').html(resp); // Display response
//             },
//             error: function(xhr, status, error) { 
//                 console.error("Error:", error); // Log any AJAX errors
//             }
//         });
//     });
// });
// $(document).ready(function(){
//     $('#manage_user').submit(function(e){
//         e.preventDefault(); 
        
  
//         var formData = $(this).serialize();
     
//         $.ajax({ 
//             url: 'add-users.php',
//             type: 'POST',
//             data: formData,
//             success: function(resp){ 
                
//                 Swal.fire({
//                     icon: 'success',
//                     title: 'form submitted succuss fully!',
//                     html: '<p>Data saved successfully!</p>',
//                     showCancelButton: true,
//                     confirmButtonText: 'Clear Form',
//                     cancelButtonText: 'Continue',
//                     reverseButtons: true
//                 }).then((result) => {
//                     if (result.isConfirmed) {
                       
//                         $('#manage_user')[0].reset();
                 
//                      }
//                 });
//             },
//             error: function(xhr, status, error) { 
            
//                 Swal.fire({
//                     icon: 'error',
//                     title: 'Error!',
//                     text: 'An error occurred while processing your request.'
//                 });
//                 console.error("Error:", error); 
//             }
            
            
//         });
//     });
// });

$(document).ready(function(){
    $('#manage_user').submit(function(e){
        e.preventDefault(); 
        
        var formData = $(this).serialize();
     
        $.ajax({ 
            url: 'add-users.php',
            type: 'POST',
            data: formData,
            success: function(resp){ 
                console.log(resp);
                if (resp.trim() === 'email_already_exists') {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }
                    });
        
                    Toast.fire({
                        icon: "error",
                        title: "Email already exists"
                    });
                    
                    // Swal.fire({
                    //     icon: 'error',
                    //     title: 'Oops...',
                    //     text: 'Email already exists!',
                    // });
                } else if (resp.trim() === 'success') {
                   
                    Swal.fire({
                        icon: 'success',
                        title: 'Form submitted successfully!',
                        html: '<p>Data saved successfully!</p>',
                        showCancelButton: true,
                        confirmButtonText: 'Clear Form',
                        cancelButtonText: 'Continue',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#manage_user')[0].reset();
                        }
                    });
                } else {
                    
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'An error occurred while processing your request2.'
                    });
                }
            },
            error: function(xhr, status, error) { 
                
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'An error occurred while processing your request1.'
                });
                console.error("Error:", error); 
            }
        });
    });
});









