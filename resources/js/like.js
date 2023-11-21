// document.addEventListener('DOMContentLoaded', function() {
//     let likeForms = document.querySelectorAll('.like-form');

//     likeForms.forEach(function(likeForm) {
//         likeForm.addEventListener('submit', function(event) {
//             event.preventDefault();
//             let postUrl = this.action;

//             fetch(postUrl, {
//                 method: 'POST',
//                 headers: {
//                     'Content-Type': 'application/json',
//                     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//                 },
//                 credentials: 'same-origin',
//             })
//             .then(response => response.json())
//             .then(data => {
//                 if (data.success) {
//                     let likesCount = this.querySelector('.likes-count');
//                     likesCount.textContent = parseInt(likesCount.textContent) + 1;
//                     this.querySelector('.like-button').disabled = true;
//                 }
//             })
//             .catch(error => {
//                 console.log(error);
//             });
//         });
//     });
// });