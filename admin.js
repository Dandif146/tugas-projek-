document.getElementById('adminCommentForm').addEventListener('submit', function (event) {
  event.preventDefault();

  const adminId = document.getElementById('adminId').value;
  const comment = document.getElementById('comment').value;

  // Tambahkan komentar ke kontainer komentar
  addComment(adminId, comment);

  // Bersihkan formulir
  document.getElementById('adminId').value = '';
  document.getElementById('comment').value = '';
});

function addComment(adminId, comment) {
  const commentsContainer = document.getElementById('commentsContainer');

  // Buat elemen komentar
  const commentElement = document.createElement('div');
  commentElement.classList.add('comment');
  commentElement.innerHTML = `<strong>${adminId}:</strong> ${comment}`;

  // Tambahkan elemen komentar ke kontainer komentar
  commentsContainer.appendChild(commentElement);
}
