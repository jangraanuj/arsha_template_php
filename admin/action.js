// $(document).ready(function(){
//     $('#manage_user').click(function(e){
//         e.preventDefault();
//         $.ajax({ 
//             url: 'process.php',
//             type: 'post',
//             data: $(this).serialize(),
//             success: function(resp){ 
//                 $('#error_msg').html(resp);
//             },
//             error: function(xhr, status, error) { // Optional: Handle error if AJAX request fails
//                 console.error("Error:", error);
//             }
//         });
//     });
// });